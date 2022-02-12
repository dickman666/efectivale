
        <link href="../assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />


                       <!-- <h1 class="page-title"> Mi Perfil
                            <small></small>
                        </h1>-->
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN PROFILE SIDEBAR -->
                                <div class="profile-sidebar">
                                    <!-- PORTLET MAIN -->
                                    <div class="portlet light profile-sidebar-portlet ">
                                        <!-- SIDEBAR USERPIC -->
                                        <div class="profile-userpic">
                                            <img src="<?php echo $this->Image->resize('library/'.IMG_DIR, $user['photo'], 185, 185, true);?>" class="img-responsive" alt="<?php echo h($user['first_name'].' '.$user['last_name']); ?>"> </div>
                                        <!-- END SIDEBAR USERPIC -->
                                        <!-- SIDEBAR USER TITLE -->
                                        <div class="profile-usertitle">
                                            <div class="profile-usertitle-name"> <?= $user['first_name'] ?></div>
                                          <!--  <div class="profile-usertitle-job"> <?= $user['user_group_name'] ?> </div>-->
                                        </div>
                                        <!--<div class="profile-usermenu">
                                            <ul class="nav">
                                                <li>
                                                    <a href="#">
                                                        <i class="icon-home"></i> uno </a>
                                                </li>
                                                <li class="active">
                                                    <a href="#">
                                                        <i class="icon-settings"></i> dos </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="icon-info"></i> tres </a>
                                                </li>
                                            </ul>
                                        </div>-->
                                    </div>
                                    <!-- END PORTLET MAIN -->
                                    <!-- PORTLET MAIN -->

                                </div>
                                <!-- END BEGIN PROFILE SIDEBAR -->
                                <!-- BEGIN PROFILE CONTENT -->
                                <div class="profile-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="portlet light ">
                                                <div class="portlet-title tabbable-line">
                                                    <div class="caption caption-md">
                                                        <i class="icon-globe theme-font hide"></i>
                                                        <span class="caption-subject font-blue-madison bold uppercase">PERFIL DE USUARIO</span>
                                                    </div>
                                                    <ul class="nav nav-tabs">
                                                        <li class="active">
                                                            <a href="#tab_1_1" data-toggle="tab">Perfil Usuario</a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab_1_2" data-toggle="tab">Información Personal</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="tab-content">
                                   

                                                        <div class="tab-pane active" id="tab_1_1">
                                                            <form role="form" action="#">
                                                                <div class="form-group">
                                                                    <label class="control-label">Nombre</label>
                                                                    <input type="text" placeholder="<?= $user['first_name'] ?>" value="<?= $user['first_name'] ?>" class="form-control" /> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Apellido Paterno</label>
                                                                    <input type="text" placeholder="<?= $user['last_name'] ?>" value="<?= $user['last_name'] ?>" class="form-control" /> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Apellido Materno</label>
                                                                    <input type="text" placeholder="<?= $user['clast_name'] ?>" value="<?= $user['clast_name'] ?>" class="form-control" /> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Correo Electrónico</label>
                                                                    <input type="text" placeholder="<?= $user['email'] ?>" value="<?= $user['email'] ?>" class="form-control" /> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Perfil</label>
                                                                    <input type="text" placeholder="<?= $user['user_group_name'] ?>" value="<?= $user['user_group_name'] ?>" class="form-control" /> </div>
                                                            </form>
                                                        </div>
                                                    
                                                        <div class="tab-pane" id="tab_1_2">
                                                            
                                                            <form role="form" action="#">
                                                                <div class="form-group">
                                                                    <label class="control-label">Movil</label>
                                                                    <input type="text" placeholder="<?= $user['phone'] ?>" value="<?= $user['phone'] ?>" class="form-control" /> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Genero</label>
                                                                    <input type="text" placeholder="<?= $user['gender'] ?>" value="<?= $user['gender'] ?>" class="form-control" /> </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Fecha Nacimiento</label>
                                                                    <input type="text" placeholder="<?= $this->Time->format($user['bday'], 'dd/MM/YYYY') ?>" value="<?= $this->Time->format($user['bday'], 'dd/MM/YYYY') ?>" class="form-control" /> </div>
                                                            </form>
                                                        </div>
                                                        


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          
                            </div>
                        </div>