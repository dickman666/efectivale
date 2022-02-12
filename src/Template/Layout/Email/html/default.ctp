<?php $url_base = $this->Url->build('/', true); ?>
<html>
  <head>
    <style type="text/css">
      td > a{
        text-decoration: none !important; 
        color: #5d5d5d !important;   
      }
      *{
        font-family: 'PT Sans', sans-serif;
      }
    </style>
  <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
  </head>

  <body>
    <table style="width: 500px;" cellspacing="0" cellpadding="0">
      <tbody>
        <tr>
          <td><!--<img src="<?= $url_base ?>/files/logoLoginf.png" style="width: 90px; float: right;margin-bottom:15px;"/>--></td>
        </tr>
        <tr>
          <td style="background-color: rgba(255,255,255,0.8);">
            <?= $this->fetch('content') ?>
          </td>
        </tr>
    </tbody>
  </table>


  </body>

</html>
