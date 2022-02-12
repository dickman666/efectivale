<?php

$user = $this->UserAuth->getUser();
/* Cakephp 3.x User Management Premium Version (a product of Ektanjali Softwares Pvt Ltd)
Website- http://ektanjali.com
Plugin Demo- http://cakephp3-user-management.ektanjali.com/
Author- Chetan Varshney (The Director of Ektanjali Softwares Pvt Ltd)
Plugin Copyright No- 11498/2012-CO/L

UMPremium is a copyrighted work of authorship. Chetan Varshney retains ownership of the product and any copies of it, regardless of the form in which the copies may exist. This license is not a sale of the original product or any copies.

By installing and using UMPremium on your server, you agree to the following terms and conditions. Such agreement is either on your own behalf or on behalf of any corporate entity which employs you or which you represent ('Corporate Licensee'). In this Agreement, 'you' includes both the reader and any Corporate Licensee and Chetan Varshney.

The Product is licensed only to you. You may not rent, lease, sublicense, sell, assign, pledge, transfer or otherwise dispose of the Product in any form, on a temporary or permanent basis, without the prior written consent of Chetan Varshney.

The Product source code may be altered (at your risk)

All Product copyright notices within the scripts must remain unchanged (and visible).

If any of the terms of this Agreement are violated, Chetan Varshney reserves the right to action against you.

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Product.

THE PRODUCT IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE PRODUCT OR THE USE OR OTHER DEALINGS IN THE PRODUCT. */
?>

        <link href="../../../assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
        <link href="../../../assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../../../assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />

                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN PROFILE SIDEBAR -->
                                <div class="profile-sidebar">
                                    <!-- PORTLET MAIN -->
                                    <div class="portlet light profile-sidebar-portlet ">
                                        <!-- SIDEBAR USERPIC -->


                                        <div class="profile-userpic">   
                                  

                                            <img src="<?php echo $this->Image->resize('library/'.IMG_DIR, $userEntity['photo'], 185, 185, true);?>" class="img-responsive" alt=""> </div>

                                            <div class="profile-usertitle">
                                            <div class="profile-usertitle-name"> <?= $userEntity['first_name'] ?></div>
                                         
                                        </div>
                          
                                        <!-- END MENU -->
                                    </div>
                                    <!-- END PORTLET MAIN -->

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
                                                        <span class="caption-subject font-blue-madison bold uppercase">Editar Usuario</span>
                                                    </div>
                                                    <ul class="nav nav-tabs">
                                                        <li class="active">
                                                            <a href="#tab_1_1" data-toggle="tab">INFO</a>
                                                        </li>
                                                    </ul>
                                                </div>


                                                <div class="portlet-body">
                                                    <div class="tab-content">
                                                        <!-- PERSONAL INFO TAB -->
                                                        <div class="tab-pane active" id="tab_1_1">

    <?php echo $this->element('Usermgmt.ajax_validation', ['formId'=>'addUserForm', 'submitButtonId'=>'addUserSubmitBtn']); ?>
    <?php echo $this->Form->create($userEntity, ['id'=>'addUserForm', 'class'=>'form-horizontal']); ?>


        <div class="row">
          <div class="col-md-6">
            <div class="um-form-row form-group">
              <label class="col-sm-2 control-label"><?php echo __('First Name'); ?></label>
              <div class="col-sm-10">
                      <?php echo $this->Form->input('Users.first_name', ['type'=>'text', 'label'=>false, 'div'=>false, 'class'=>'form-control', 'required'=>'required']); ?>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="um-form-row form-group">
              <label class="col-sm-2 control-label"><?php echo __("Father's Last Name"); ?></label>
              <div class="col-sm-10">
                      <?php echo $this->Form->input('Users.last_name', ['type'=>'text', 'label'=>false, 'div'=>false, 'class'=>'form-control', 'required'=>'required']); ?>
              </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-6">
            <div class="um-form-row form-group">
              <label class="col-sm-2 control-label"><?php echo __("Mother's Last Name"); ?></label>
              <div class="col-sm-10">
                <?php echo $this->Form->input('Users.clast_name', ['type'=>'text', 'label'=>false, 'div'=>false, 'class'=>'form-control']); ?>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="um-form-row form-group">
              <label class="col-sm-2 control-label"><?php echo __('Correo Electrónico'); ?></label>
              <div class="col-sm-10">
                <?php echo $this->Form->input('Users.email', ['type'=>'text', 'label'=>false, 'div'=>false, 'class'=>'form-control', 'required'=>'required']); ?>
              </div>
            </div>
          </div>
        </div>



        <div class="row">
          <div class="col-md-6">
            <div class="um-form-row form-group">
              <label class="col-sm-2 control-label"><?php echo __('Mobile Phone'); ?></label>
              <div class="col-sm-10">
                <?= $this->Form->input('Users.phone', ['label'=>false, 'div'=>false, 'class'=>'form-control phone']); ?>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="um-form-row form-group">
              <label class="col-sm-2 control-label"><?php echo __('Gender'); ?></label>
              <div class="col-sm-10">
            <?= $this->Form->input('Users.gender',[
              'type'   =>  'radio',
              'class' => 'form-control',
              'label' => false,
              'hidden' =>  false,
              'options'   =>  $genders
              ]);?>
            <?= $this->Form->input('Users.mock',[
              'type'   =>  'hidden',
              'id'     =>  'users-gender',
              ]);?>
              </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-6">
            <div class="um-form-row form-group">
              <label class="col-sm-2 control-label"><?php echo __('Fecha de Nacimiento'); ?></label>
              <div class="col-sm-10">
                <?= $this->Form->input('Users.bday', ['type' => 'text','label'=>false,'div'=>false, 'class'=>'form-control maxToDay', 'value' => !empty($userEntity->bday)?  $userEntity->bday->format('d/m/Y') : '' ]); ?>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="um-form-row form-group">
              <label class="col-sm-2 control-label"><?php echo __('Entry Date'); ?></label>
              <div class="col-sm-10">
                <?= $this->Form->input('Users.entrydate', ['type' => 'text','label'=>false,'div'=>false, 'class'=>'form-control maxToDayNow', 'value' => !empty($userEntity->entrydate)?  $userEntity->entrydate->format('d/m/Y') : '' ]); ?>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="um-form-row form-group">
              <label class="col-sm-2 control-label"><?php echo __('Position'); ?></label>
              <div class="col-sm-10">
                <?php echo $this->Form->input('Users.position', ['type'=>'text', 'label'=>false, 'div'=>false, 'class'=>'form-control']); ?>
              </div>
            </div>
          </div>
          <!--<div class="col-md-6">
            <div class="um-form-row form-group">
              <label class="col-sm-2 control-label"><?php echo __('Número de Licencia'); ?></label>
              <div class="col-sm-10">
                <?php echo $this->Form->input('Users.licencia', ['type'=>'text', 'label'=>false, 'div'=>false, 'class'=>'form-control']); ?>
              </div>
            </div>
          </div>-->
        </div>

        <div class="row">
          <!--<div class="col-md-6">
            <div class="um-form-row form-group">
              <label class="col-sm-2 control-label"><?php echo __('Número de Permiso'); ?></label>
              <div class="col-sm-10">
                <?php echo $this->Form->input('Users.permiso', ['type'=>'text', 'label'=>false, 'div'=>false, 'class'=>'form-control']); ?>
              </div>
            </div>
          </div>-->
          <div class="col-md-6">
            <div class="um-form-row form-group">
              <label class="col-sm-2 control-label"><?php echo __('Perfil'); ?></label>
              <div class="col-sm-10">
                <?php echo $this->Form->input('Users.user_group_id', ['type'=>'select', 'label'=>false, 'div'=>false, 'multiple'=>false, 'class'=>'form-control select2', 'data-placeholder'=>'Selecciona un grupo']); ?>
              </div>
            </div>
          </div>
        </div>

  <div class="col-md-12">



    <div class="col-md-12">

          <div class="alinear">
               <?php echo $this->Form->Submit(__('Edit User'), ['div'=>false, 'class'=>'btn red btn-submit', 'id'=>'addUserSubmitBtn']); ?>
          </div>
      
   </div>
     
    </div>
        


                                                          
</div>



                                                        <?php echo $this->Form->end(); ?>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

<script type="text/javascript">

	$(function(){
		$('.select2').select2();
	});

</script>


<style type="text/css">
  
  .alinear{
    float: right;
    position: relative;
  }
</style>
