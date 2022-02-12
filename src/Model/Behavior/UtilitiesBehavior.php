<?php

namespace App\Model\Behavior;

use Cake\ORM\Table;
use Cake\ORM\Behavior;
use Cake\ORM\TableRegistry;
use Cake\Filesystem\File;
use Cake\Mailer\Email;
use Cake\Utility\Xml;
/**
 * Utilities behavior
 */
class UtilitiesBehavior extends Behavior
{

    public function stripCurrencyFormat($value) {
        return str_replace([' ', ',', '$'], '', $value);
    }

    public function updateField($model, $set, $where){
        return TableRegistry::get($model)->query()->update()->set($set)->where($where)->execute();
    }

    public function getField($model, $field, $conditions){
        return TableRegistry::get($model)->find()->select($field)->where($conditions)->first()->get($field);
    }

    public function generaXml($xml, $file){
        $file = new \Cake\Filesystem\File($file, $create = 1, $mode = 755);
        $file->write($xml);
    }

    public function configEmail($key = 'default'){
        $config = TableRegistry::get('EmailTransports')->find('all')->first()->toArray();
        Email::dropTransport($key);;
        Email::configTransport($key, $config);
        Email::drop($key);
        Email::config($key, ['transport' => $key, 'from' => $config['email']]);
    }

    public function generaPdf($data, $template, $output, $type = 'F'){
        $mpdf = new \mPDF('', 'Letter', 9, '', 5, 5, 5, 5);
        $mpdf->cacheTables = true;
        $mpdf->simpleTables = true;
        $mpdf->packTableData = true;
        $view = new \Cake\View\View(new \Cake\Network\Request, new \Cake\Network\Response);
        $mpdf->WriteHTML(
            $view->element(
                $template,
                $data
            )
        );
        $mpdf->SetHTMLFooter('
            <table width="100%">
                <tr>
                    <td width="33%">{DATE j-m-Y}</td>
                    <td width="33%" align="center">{PAGENO}/{nbpg}</td>
                    <td width="33%" style="text-align: right;">alphafacturacion.webpoint.mx/</td>
                </tr>
            </table>');
        $mpdf->Output($output, $type); //I F
    }

    public function getArrayXml($xml){
      $xmlArray = Xml::toArray(Xml::build($xml));
      $keyComprobante = 'Comprobante';
      $xmlArray[$keyComprobante] =  array_change_key_case($xmlArray[$keyComprobante], CASE_LOWER);
      $xmlArray[ $keyComprobante ]['cfdi:emisor'] = array_change_key_case($xmlArray[ $keyComprobante ]['cfdi:emisor'], CASE_LOWER);

      $xmlArray[ $keyComprobante ]['cfdi:receptor'] = array_change_key_case($xmlArray[ $keyComprobante ]['cfdi:receptor'], CASE_LOWER);

      $xmlArray[ $keyComprobante ][ 'cfdi:complemento']  = array_change_key_case($xmlArray[ $keyComprobante ][ 'cfdi:complemento'], CASE_LOWER);


      $xmlArray[ $keyComprobante ][ 'cfdi:complemento']['tfd:timbrefiscaldigital']  = array_change_key_case($xmlArray[ $keyComprobante ][ 'cfdi:complemento']['tfd:timbrefiscaldigital'], CASE_LOWER);

      $xmlArray[ $keyComprobante ][ 'cfdi:complemento']['pago10:pagos']  = array_change_key_case($xmlArray[ $keyComprobante ][ 'cfdi:complemento']['pago10:pagos'], CASE_LOWER);

      $xmlArray[ $keyComprobante ][ 'cfdi:complemento']['pago10:pagos']['pago10:pago']  = array_change_key_case($xmlArray[ $keyComprobante ][ 'cfdi:complemento']['pago10:pagos']['pago10:pago'], CASE_LOWER);

      // $xmlArray[ $keyComprobante ][ 'cfdi:complemento']['pago10:pagos']['pago10:pago']['pago10:doctorelacionado'][0]  = array_change_key_case($xmlArray[ $keyComprobante ][ 'cfdi:complemento']['pago10:pagos']['pago10:pago']['pago10:doctorelacionado'][0], CASE_LOWER);
      // $xmlArray[ $keyComprobante ][ 'cfdi:complemento']['pago10:pagos']['pago10:pago']['pago10:doctorelacionado'][1]  = array_change_key_case($xmlArray[ $keyComprobante ][ 'cfdi:complemento']['pago10:pagos']['pago10:pago']['pago10:doctorelacionado'][1], CASE_LOWER);

      return $xmlArray;
    }
    public function sendEmail($subject, $receiver, $template, $data = [], $attachments = [], $layout = 'default')
    {
        $this->configEmail();
        $email = new Email('default');
        $email->emailFormat('html');
        $email->from([ EMAIL_FROM_ADDRESS => EMAIL_FROM_ADDRESS ]);
        $email->sender([ EMAIL_FROM_NAME => EMAIL_FROM_NAME]);
        $email->to($receiver);
        $email->subject($subject);
        $email->template($template, $layout);
        $email->viewVars(compact('data')); 
        if ($attachments) {
            $email->attachments($attachments);
        }
        $email->send();
        return;
    }

    public function statusFromLabel($model, $label, $field = 'id') {
        return
            TableRegistry::get($model)
                ->find('all')
                ->where([
                    'label' => $label
                ])
                ->first()
                ->get($field);
    }

    public function invertedStatusList($model)
    {
        return TableRegistry::get($model)->find('list',  ['keyField' => 'label', 'valueField' => 'id'])->toArray();
    }

    public function _num2letras($num, $fem = false, $dec = true) { 
       $matuni[2]  = "dos"; 
       $matuni[3]  = "tres"; 
       $matuni[4]  = "cuatro"; 
       $matuni[5]  = "cinco"; 
       $matuni[6]  = "seis"; 
       $matuni[7]  = "siete"; 
       $matuni[8]  = "ocho"; 
       $matuni[9]  = "nueve"; 
       $matuni[10] = "diez"; 
       $matuni[11] = "once"; 
       $matuni[12] = "doce"; 
       $matuni[13] = "trece"; 
       $matuni[14] = "catorce"; 
       $matuni[15] = "quince"; 
       $matuni[16] = "dieciseis"; 
       $matuni[17] = "diecisiete"; 
       $matuni[18] = "dieciocho"; 
       $matuni[19] = "diecinueve";
       $matuni[20] = "veinte"; 
       $matunisub[2] = "dos"; 
       $matunisub[3] = "tres"; 
       $matunisub[4] = "cuatro"; 
       $matunisub[5] = "quin"; 
       $matunisub[6] = "seis"; 
       $matunisub[7] = "sete"; 
       $matunisub[8] = "ocho"; 
       $matunisub[9] = "nove"; 

       $matdec[2] = "veint"; 
       $matdec[3] = "treinta"; 
       $matdec[4] = "cuarenta"; 
       $matdec[5] = "cincuenta"; 
       $matdec[6] = "sesenta"; 
       $matdec[7] = "setenta"; 
       $matdec[8] = "ochenta"; 
       $matdec[9] = "noventa"; 
       $matsub[3]  = 'mill'; 
       $matsub[5]  = 'bill'; 
       $matsub[7]  = 'mill'; 
       $matsub[9]  = 'trill'; 
       $matsub[11] = 'mill'; 
       $matsub[13] = 'bill'; 
       $matsub[15] = 'mill'; 
       $matmil[4]  = 'millones'; 
       $matmil[6]  = 'billones'; 
       $matmil[7]  = 'de billones'; 
       $matmil[8]  = 'millones de billones'; 
       $matmil[10] = 'trillones'; 
       $matmil[11] = 'de trillones'; 
       $matmil[12] = 'millones de trillones'; 
       $matmil[13] = 'de trillones'; 
       $matmil[14] = 'billones de trillones'; 
       $matmil[15] = 'de billones de trillones'; 
       $matmil[16] = 'millones de billones de trillones'; 
       
       //Zi hack
       $float=explode('.',$num);
       $num=$float[0];

       $num = trim((string)@$num); 
       if ($num[0] == '-') { 
          $neg = 'menos '; 
          $num = substr($num, 1); 
       }else 
          $neg = ''; 
       while ($num[0] == '0') $num = substr($num, 1); 
       if ($num[0] < '1' or $num[0] > 9) $num = '0' . $num; 
       $zeros = true; 
       $punt = false; 
       $ent = ''; 
       $fra = ''; 
       for ($c = 0; $c < strlen($num); $c++) { 
          $n = $num[$c]; 
          if (! (strpos(".,'''", $n) === false)) { 
             if ($punt) break; 
             else{ 
                $punt = true; 
                continue; 
             } 

          }elseif (! (strpos('0123456789', $n) === false)) { 
             if ($punt) { 
                if ($n != '0') $zeros = false; 
                $fra .= $n; 
             }else 

                $ent .= $n; 
          }else 

             break; 

       } 
       $ent = '     ' . $ent; 
       if ($dec and $fra and ! $zeros) { 
          $fin = ' coma'; 
          for ($n = 0; $n < strlen($fra); $n++) { 
             if (($s = $fra[$n]) == '0') 
                $fin .= ' cero'; 
             elseif ($s == '1') 
                $fin .= $fem ? ' una' : ' un'; 
             else 
                $fin .= ' ' . $matuni[$s]; 
          } 
       }else 
          $fin = ''; 
       if ((int)$ent === 0) return 'Cero ' . $fin; 
       $tex = ''; 
       $sub = 0; 
       $mils = 0; 
       $neutro = false; 
       while ( ($num = substr($ent, -3)) != '   ') { 
          $ent = substr($ent, 0, -3); 
          if (++$sub < 3 and $fem) { 
             $matuni[1] = 'una'; 
             $subcent = 'as'; 
          }else{ 
             $matuni[1] = $neutro ? 'un' : 'uno'; 
             $subcent = 'os'; 
          } 
          $t = ''; 
          $n2 = substr($num, 1); 
          if ($n2 == '00') { 
          }elseif ($n2 < 21) 
             $t = ' ' . $matuni[(int)$n2]; 
          elseif ($n2 < 30) { 
             $n3 = $num[2]; 
             if ($n3 != 0) $t = 'i' . $matuni[$n3]; 
             $n2 = $num[1]; 
             $t = ' ' . $matdec[$n2] . $t; 
          }else{ 
             $n3 = $num[2]; 
             if ($n3 != 0) $t = ' y ' . $matuni[$n3]; 
             $n2 = $num[1]; 
             $t = ' ' . $matdec[$n2] . $t; 
          } 
          $n = $num[0]; 
          if ($n == 1) { 
             $t = ' ciento' . $t; 
          }elseif ($n == 5){ 
             $t = ' ' . $matunisub[$n] . 'ient' . $subcent . $t; 
          }elseif ($n != 0){ 
             $t = ' ' . $matunisub[$n] . 'cient' . $subcent . $t; 
          } 
          if ($sub == 1) { 
          }elseif (! isset($matsub[$sub])) { 
             if ($num == 1) { 
                $t = ' mil'; 
             }elseif ($num > 1){ 
                $t .= ' mil'; 
             } 
          }elseif ($num == 1) { 
             $t .= ' ' . $matsub[$sub] . 'on'; 
          }elseif ($num > 1){ 
             $t .= ' ' . $matsub[$sub] . 'ones'; 
          }   
          if ($num == '000') $mils ++; 
          elseif ($mils != 0) { 
             if (isset($matmil[$sub])) $t .= ' ' . $matmil[$sub]; 
             $mils = 0; 
          } 
          $neutro = true; 
          $tex = $t . $tex; 
       } 
       $tex = $neg . substr($tex, 1) . $fin; 
       //Zi hack --> return ucfirst($tex);
       if(!isset($float[1])){$float[1]='00';}
       $end_num=ucfirst($tex).' pesos '.str_pad($float[1], 2, '0', STR_PAD_RIGHT).'/100 M.N.';
       return $end_num; 
    } 

}
