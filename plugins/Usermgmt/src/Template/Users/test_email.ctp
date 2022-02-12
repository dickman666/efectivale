<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?= SITE_NAME ?></title>
        <?= $this->element('Email/css') ?>
        <style type="text/css">

            .container{
                /* background-color: #222222; */
                font-size: 20px;
                color: #50cbdb;
                font-family: sans-serif;
            }

            .container .content{
                padding: 30px;
            }

            .blue-text{
                color: #50cbdb;
            }

            .med-font{
                font-size: 16px;
            }

            .white{
                color: white;
            }

            .light-blue{
                color: #abfee8 !important;
            }

            .blue{
                color: #58e2ef !important;
            }

            .grey-bg{
                background-color: #1b1c1d;
            }

            .gradient{
                background: linear-gradient(135deg, #1b1c1d, #585858);
            }

            .row, .wrapper{
                /* border: 1px solid #adadad; */
            }


        </style>
    </head>

    <body>

        <table class="body">
            <tr>
                <td class="center" align="center" valign="top">
                    <?= $this->fetch('content') ?>
                </td>
            </tr>
        </table>

    </body>
</html>
