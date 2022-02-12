<?php
  $usuario = $this->UserAuth->getUser();
  ?>
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
        <title><?=  $this->fetch('title') ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="<?= SITE_NAME ?>" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />

        <!--<link href="https://fonts.googleapis.com/css?family=Cabin:400,600|Oswald:500,600" rel="stylesheet">-->
        <link href="/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <link href="/assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/clockface/css/clockface.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <link href="/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="/assets/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
       <!-- <link href="/assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />-->
        <link href="/assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="/css/select2-theme.css">
        <link href="/assets/layouts/layout/css/efectivale.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/compressed/themes/classic.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/compressed/themes/classic.date.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/compressed/themes/classic.time.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.7.0/sweetalert2.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
        <link href="/assets/global/plugins/bootstrap-wysihtml5/wysiwyg-color.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="/favicon.png" />
      </head>
      <!-- END HEAD -->
      <!-- BEGIN CORE PLUGINS -->
      <script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
      <script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
      <script src="/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
      <script src="/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
      <script src="/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
      <script src="/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/i18n/es.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
      <!-- END CORE PLUGINS -->
      <?= $this->Html->css('umstyle.css?q='.QRDN); ?>
      <?= $this->Html->script('plugins/chosen/chosen.jquery.js?q='.QRDN) ?>
      <?= $this->Html->script('umscript.js?q='.QRDN); ?>
      <?= $this->Html->script('ajaxValidation.js?q='.QRDN); ?>
      <?= $this->Html->script('chosen.ajaxaddition.jquery.js?q='.QRDN); ?>
      <?= $this->Html->script('/assets/global/plugins/typeahead/typeahead.bundle.min.js'); ?>
      <?= $this->Html->css('/assets/global/plugins/typeahead/typeahead.css'); ?>
      <?= $this->Html->script('jquery.numeric.js'); ?>
      <?= $this->Html->script('jquery.knob.min.js'); ?>
      <?= $this->Html->script('jquery.circliful.js'); ?>
      <?= $this->Html->css('jquery.circliful.css'); ?>
      <?= $this->Html->script('/plugins/easy-autocomplete/jquery.easy-autocomplete.js'); ?>
      <?= $this->Html->css('/plugins/easy-autocomplete/easy-autocomplete.css'); ?>
      <?= $this->Html->css('/plugins/easy-autocomplete/easy-autocomplete.themes.css'); ?>
      <script language="javascript">
        var urlForJs="<?php echo SITE_URL ?>";
      </script>
      <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">
          <!-- BEGIN HEADER -->
          <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
              <!-- BEGIN LOGO -->
              <div class="page-logo">
                <a href="#">
                <!--<img src="/img/efectivale.png" alt="logo" height="60px" class="logo-default" /> </a>-->
                <div class="menu-toggler sidebar-toggler">
                  <span></span>
                </div>
              </div>
              <!-- END LOGO -->
              <!-- BEGIN RESPONSIVE MENU TOGGLER -->
              <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
              <span></span>
              </a>
              <!-- END RESPONSIVE MENU TOGGLER -->
              <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">



                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                  <?php if($this->UserAuth->isLogged()){
                               $imageURL = $this->Image->resize('library/'.IMG_DIR, $usuario['User']['photo'], 150, 150, true);
                               
                                    echo '<img alt="" class="img-circle" src="'.$imageURL.'" />
                                    <span class="username username-hide-on-mobile">'.$usuario['User']['first_name'].' '.$usuario['User']['last_name'].'</span>';
                                    }?>

                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                 <?php if($this->UserAuth->isLogged()){


                                      if($this->UserAuth->HP('Users', 'myprofile', 'Usermgmt')) {
                                          echo '<li> <a href="/myprofile"><i class="icon-user"></i>

                                      
                                          '; echo __('My Profile');
                                          echo '</a> </li>';
                                      }

                                 }

                                      //if($this->UserAuth->isSuper()) { 
                                          echo '<li> <a href="/editProfile"><i class="fa fa-edit"></i>

                                      
                                          '; echo __('Edit Profile');
                                          echo '</a> </li>';
                                      //}


                                      //if($this->UserAuth->isSuper()){

                                          echo '<li> <a href="/usermgmt/users/change-password"><i class="fa fa-exchange"></i>
                                          
                                          '; echo __('Change Password');
                                          echo '</a> </li>';

                                      //}


                                           echo '<li> <a href="/logout" id="out"><i class="icon-key"></i>'; 
                                           echo __('Cerrar Sesión');
                                          echo '</a> </li>';

               



                                 ?>

                                   <!-- <li>
                                        <a href="#">
                                            <i class="icon-key"></i> Cerrar Sesión </a>
                                    </li>-->
                                </ul>
                            </li>
                            <?php if($this->UserAuth->isLogged()){
                            echo'<li class="dropdown">
                                <a href="/logout" class="dropdown-toggle">
                                    <i class="icon-logout"></i>
                                </a>
                            </li>'; }?>
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
              <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
          </div>
          <!-- END HEADER -->
          <!-- BEGIN HEADER & CONTENT DIVIDER -->
          <div class="clearfix"> </div>
          <!-- END HEADER & CONTENT DIVIDER -->
          <!-- BEGIN CONTAINER -->
          <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
              <!-- BEGIN SIDEBAR -->
              <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
              <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
              <div class="page-sidebar navbar-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->
                <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->

                <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="300">
                  <li class="nav-item ">
                    <a href="#" class="nav-link nav-toggle bsb">
                    <?php if($this->UserAuth->isLogged()){
                      $imageURL = $this->Image->resize('library/'.IMG_DIR, $usuario['User']['photo'], 150, 150, true);

                      echo '
                            <div class="npm"><center><img alt="" class="img-circle" height="50px" src="'.$imageURL.'"></center>
                            <div class="usernameSection">
                           <!-- <span class="usernameTitle">Nombre de usuario</span>-->
                              <center><span id="name-user" class="username username-hide-on-mobile">
                              '.$usuario['User']['first_name'].' '.$usuario['User']['last_name'].'
                            </span></center></div></div><span class="fa arrow "></span></a>';
                      echo '<ul class="sub-menu">';

                      if($this->UserAuth->HP('Users', 'myprofile', 'Usermgmt')) {
                          echo '<li> <a href="/myprofile">

                      <b>
                          '; echo __('My Profile');
                          echo '</b></a> </li>';
                      }

                      //if($this->UserAuth->isSuper()/*$this->UserAuth->HP('Users', 'editProfile', 'Usermgmt')*/) { // FU-3
                          echo '<li> <a href="/editProfile">

                      <b>
                          '; echo __('Edit Profile');
                          echo '</b></a> </li>';
                      //}

                      //if($this->UserAuth->isSuper()/*$this->UserAuth->HP('Users', 'changePassword', 'Usermgmt')*/){

                          echo '<li> <a href="/usermgmt/users/change-password">
                          <b>
                          '; echo __('Change Password');
                          echo '</b></a> </li>';

                      //}

                      echo '<li><a href="/logout" id="out">
                      <b>Cerrar Sesión</b>
                    </a></li></ul>'

                    ;}?>
                  </li>

                  <li class="nav-item navTitle">
                    <a href="#" class="nav-link nav-toggle">
                    <span class="title">Menu Principal</span>
                    </a>
                  </li>





                  <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                  <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                  <!-- END SIDEBAR TOGGLER BUTTON -->
                  <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                  <?php
                    if($this->UserAuth->isLogged()) {

                        echo $this->element("navigation");
                    }
                    ?>
                </ul>
                <!-- END SIDEBAR MENU -->
                <!-- END SIDEBAR MENU -->
              </div>
              <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
              <!-- BEGIN CONTENT BODY -->
              <div class="page-content">
                <!-- BEGIN PAGE HEADER-->
                <!-- BEGIN THEME PANEL -->
                <!-- BEGIN PAGE BAR -->
                <!-- <div class="page-bar">
                  <?=  $this->Html->getCrumbList([
                    'firstClass' => false,
                    'separator' => '<i class="fa fa-circle"></i>',
                    'escape' => false,
                    'lastClass' => 'active',
                    'class' => 'page-breadcrumb'],'Home'); ?>
                  <div class="page-toolbar fecha">
                    <?php
                    setlocale(LC_ALL,"es_ES");
                    define("CHARSET", "iso-8859-1");
                    echo utf8_encode(strftime("%A %d de %B del %Y"));
                    ?>
                  </div>
                  </div> -->
                <!-- END PAGE BAR -->
                <!-- END PAGE HEADER-->
                <!-- BEGIN CONTENT -->
                <?= $this->element('Usermgmt.message'); ?>
                <h1 class="page-title">
                  <?=  $this->fetch('header_title') ?>
                </h1>
                <?= $this->fetch("content") ?>
                <!-- END CONTENT -->
              </div>
              <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <a href="/logout" class="page-quick-sidebar-toggler">
            <i class="icon-login"></i>
            </a>
            <!-- END QUICK SIDEBAR -->
          </div>
          <!-- END CONTAINER -->
          <!-- BEGIN FOOTER -->
          <!-- END FOOTER -->
        </div>
        <!-- BEGIN QUICK NAV -->
        <div class="quick-nav-overlay"></div>
        <!-- END QUICK NAV -->
        <!--[if lt IE 9]>
        <script src="/assets/global/plugins/respond.min.js"></script>
        <script src="/assets/global/plugins/excanvas.min.js"></script>
        <script src="/assets/global/plugins/ie8.fix.min.js"></script>
        <![endif]-->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="/assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/clockface/js/clockface.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <script src="/assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <script src="/assets/pages/scripts/table-datatables-responsive.min.js" type="text/javascript"></script>
        <script src="/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <script src="/assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="/assets/pages/scripts/components-bootstrap-select.min.js" type="text/javascript"></script>
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/parsleyjs/2.7.1/parsley.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/parsleyjs/2.7.1/i18n/es.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/compressed/picker.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/compressed/picker.date.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/compressed/picker.time.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/compressed/translations/es_ES.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-chained/1.0.1/jquery.chained.remote.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.7.0/sweetalert2.min.js"></script>
        <script src="/assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script language="javascript">
          window.oLanguage = {
              "sInfo": 'Mostrando resultados del _START_ al _END_ de _TOTAL_.',
              "sInfoEmpty": 'No hay registros para mostrar',
              "sInfoFiltered": "(filtrado de _MAX_ registros)",
              "sSearch": "Buscar:",
              "sSelect": "Limit",
              "sZeroRecords": "No se encontró ningún registro",
              "sPaginate": {
                  "sFirst": "Primero",
                  "sPrevious": "Anterior",
                  "sPnext": "Siguiente",
                  "sLast": "Último"
              }
          };
        </script>
        <script type="text/javascript">
          $(document).ready(function(){

              $('.select-widget').select2();

              $('.datetimepicker').datetimepicker({
                format: 'dd/mm/yyyy hh:mm:ss'
              });


              $('.datepicker').datepicker({
                format: 'dd/mm/yyyy'
              });

              var maxToDay = new Date();
              $('.maxToDay').datepicker({
                format: 'dd/mm/yyyy',
                endDate: new Date(maxToDay.setYear(maxToDay.getFullYear() - 18))
              });

              var maxToDayNow = new Date();
              $('.maxToDayNow').datepicker({
                format: 'dd/mm/yyyy',
                endDate: maxToDayNow
              });

              $('#UsersTable').DataTable( {
                  responsive: true,
                  searching: false,
                  bSort: false,
                  bLengthChange: false,
                  columnDefs: [
                      { responsivePriority: 1, targets: 0 },
                      { responsivePriority: 2, targets: -1 }
                  ], "oLanguage": {
                      "sLengthMenu":     "Mostrar _MENU_ registros",
                      "sInfo": 'Mostrando resultados _START_ al _END_ de _TOTAL_.',
                      "sInfoEmpty": 'No hay registros para mostrar',
                      "sInfoFiltered": "(filtrado de _MAX_ registros)",
                      "sSearch": "Buscar:",
                      "sSelect": "Limit",
                      "sZeroRecords": "No se encontro ningún registro",
                      "sPaginate": {
                          "sFirst": "Primero",
                          "sPrevious": "Anterior",
                          "sPnext": "Siguiente",
                          "sLast": "último"
                      }
                  }
              });

          });


          var FormInputMask = function () {

              var handleInputMasks = function () {

                  $(".phone").inputmask("+52 (99) 9999 9999", {
                      placeholder: " ",
                      clearMaskOnLostFocus: true
                  });

                  $(".phone-ext").inputmask("(99) 9999 9999", {
                      placeholder: " ",
                      clearMaskOnLostFocus: true
                  });

                  $(".percent").inputmask('integer',{min:0, max:25});

                  $(".advance_percentage").inputmask('decimal',{min:1, max:100, rightAlign:true});

                  $(".amount_product").inputmask('decimal',{min:1, max:100, rightAlign:true});

                  $(".number").inputmask('integer',{min:1});

                  $(".postal-code").inputmask("99999", {
                      placeholder: " ",
                      clearMaskOnLostFocus: true
                  });

                  $(".rfc").inputmask('*{10,13}', { clearIncomplete: true, greedy: false });

                  $(".email").inputmask("email", { "clearIncomplete": true });
              }



              return {
                  //main function to initiate the module
                  init: function () {
                      handleInputMasks();
                  }
              };

          }();

          jQuery(document).ready(function() {
              FormInputMask.init(); // init metronic core componets
          });


          $(".integer").numeric({decimal: false, negative: false}, function() { this.value = ""; this.focus(); });

        </script>
        <script type="text/javascript">
          function setTooltips(){
              $('.helper-tooltip').tooltip();
          }
          $(function(){
              setTooltips();
          });
        </script>
        <script type="text/javascript">
          function number_format (number, decimals, decPoint, thousandsSep) {
            number = (number + '').replace(/[^0-9+\-Ee.]/g, '')
            var n = !isFinite(+number) ? 0 : +number
            var prec = !isFinite(+decimals) ? 0 : Math.abs(decimals)
            var sep = (typeof thousandsSep === 'undefined') ? ',' : thousandsSep
            var dec = (typeof decPoint === 'undefined') ? '.' : decPoint
            var s = ''
            var toFixedFix = function (n, prec) {
                var k = Math.pow(10, prec)
                return '' + (Math.round(n * k) / k)
                .toFixed(prec)
            }
            s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.')
            if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep)
            }
            if ((s[1] || '').length < prec) {
                s[1] = s[1] || ''
                s[1] += new Array(prec - s[1].length + 1).join('0')
            }
            return s.join(dec)
          }

          /*$('form').keypress(function(e) {
            if (e.which == 13) {
              return false;
            }
          });*/
setTimeout(function() {
  $('.alert').fadeOut(function(){
    $(this).remove();
  })
}, 3000);
        </script>
      </body>
    </html>