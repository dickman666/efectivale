<?php

namespace App\Controller\Component;

use App\Classes\Autentica;
use Cake\Controller\Component;
use Exception;

class ApisComponent extends Component
{
    private static $secret_key = 'fund4c10n_d0nd3';
    private static $encrypt    = [ 'HS256' ];
    private static $aud        = NULL;

    public static function SignIn($data)
    {
        $time = time();
        $tiempo = intval($data['time']);

        $token = array(
            'exp'  => $time + (60 * $tiempo), //20 minutos de validez
            'aud'  => self::Aud(),
            'data' => $data,
            'id' => $data['id'],
        );

        return JWTComponent::encode($token, self::$secret_key);
    }

    public static function Check($token)
    {
        if (empty($token)) {
            throw new Exception("Invalid token supplied.");
        }

        $decode = JWTComponent::decode(
            $token,
            self::$secret_key,
            self::$encrypt
        );

        if ($decode->aud !== self::Aud()) {
            throw new Exception("Invalid user logged in.");
        }
    }

    public static function GetData($token)
    {
        return JWTComponent::decode(
            $token,
            self::$secret_key,
            self::$encrypt
        )->data;
    }

    private static function Aud()
    {
        $aud = '';

        if ( ! empty($_SERVER['HTTP_CLIENT_IP'])) {
            $aud = $_SERVER['HTTP_CLIENT_IP'];
        } elseif ( ! empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $aud = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $aud = $_SERVER['REMOTE_ADDR'];
        }

        $aud .= @$_SERVER['HTTP_USER_AGENT'];
        $aud .= gethostname();

        return sha1($aud);
    }


    public static function validaToken($token)
    {
        $message = "";
        if ( ! empty($token)) {
            try {
                self::Check(
                    $token
                );
            } catch (\Exception $e) {
                $message = $e->getMessage();
            }
        } else {
            $message = __('Invalid Request'). ". Se requiere Token";
        }

        return $message;
    }

    public static function response($result, $code = 200, $error = 0)
    {
        // clear the old headers
        header_remove();
        // set the actual code
        http_response_code($code);
        // set the header to make sure cache is forced
        header("Cache-Control: no-transform,public,max-age=300,s-maxage=900");
        // treat this as json
        header('Content-Type: application/json; charset=utf-8');
        $status = array(
            200 => '200 OK',
            400 => '400 Bad Request',
            422 => 'Unprocessable Entity',
            500 => '500 Internal Server Error',
        );
        // ok, validation error, or failure
        header('Status: ' . $status[ $code ]);
        // return the encoded json
        echo json_encode([
            'error'  => empty($error)?0:$error,
            'result' => $result,
            'status' => $code < 300,
        ]);
        exit;
    }

}