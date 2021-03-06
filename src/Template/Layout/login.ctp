<!DOCTYPE html>
<!--[if IE 8]> 
<html lang="en" class="ie8 no-js">
  <![endif]-->
  <!--[if IE 9]> 
  <html lang="en" class="ie9 no-js">
    <![endif]-->
    <!--[if !IE]><!-->
    <html lang="en">
      <!--<![endif]-->
      <!-- BEGIN HEAD -->
      <head>
        <meta charset="utf-8" />
        <title><?= SITE_NAME ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="<?= SITE_NAME ?>" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Cabin:400,600|Oswald:500,600" rel="stylesheet">
        <link href="/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="/assets/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="/assets/pages/css/login-6.css" rel="stylesheet" type="text/css" />
        <link href="/assets/layouts/layout/css/style.css" rel="stylesheet" type="text/css" />
        <link rel='stylesheet prefetch' href='/assets/global/css/slick.css'>
        <link rel='stylesheet prefetch' href='/assets/global/css/slick-theme.css'>
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="/faviconWP.ico" />
      </head>
      <!-- END HEAD -->
      <body class="login">

        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
          <!-- BEGIN LOGIN FORM -->
          <!-- Contenido -->
          <?php echo $this->element('Usermgmt.message'); ?>
          <?php echo $this->fetch('content'); ?>
          <!-- Contenido -->
          <!-- END LOGIN FORM -->
        </div>
        <!-- END LOGIN -->
        <!-- BEGIN COPYRIGHT -->
        <div class="copyright login-text"><?= SITE_NAME ?> todos los Derechos Reservados </div>
        <!-- END COPYRIGHT -->
        <!--[if lt IE 9]>
        <script src="../assets/global/plugins/respond.min.js"></script>
        <script src="../assets/global/plugins/excanvas.min.js"></script> 
        <script src="../assets/global/plugins/ie8.fix.min.js"></script> 
        <![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <!--<script src="/assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>-->
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="/assets/pages/scripts/login-4.min.js" type="text/javascript"></script>
        <script src='/assets/global/plugins/slick.min.js' type="text/javascript" ></script>
        <script type="text/javascript">
          $('.my_slider').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    pauseOnHover: false,
    dots: false,
    arrows:false,
    speed: 500,
    fade: true,
    mobileFirst: true,
    cssEase: 'linear',
  });
        </script>

        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
      </body>
    </html>