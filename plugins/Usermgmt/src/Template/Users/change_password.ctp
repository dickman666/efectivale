<?php
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


                                <div class="profile-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="portlet light ">
                                                <div class="portlet-title tabbable-line">
                                                    <div class="caption caption-md">
                                                        <i class="icon-globe theme-font hide"></i>
                                                        <span class="caption-subject font-blue-madison bold uppercase">Cambiar Contrase??a</span>
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
			<?php echo $this->Form->create($userEntity, ['class'=>'form-horizontal', 'novalidate'=>true]); ?>                                                        	
          <div class="col-md-6">
          	<?php if(!$this->request->session()->check('Auth.SocialChangePassword')) { ?>
            <div class="um-form-row form-group">
              <label class="col-sm-2 control-label required"><?php echo __('Old Password'); ?></label>
              <div class="col-sm-10">
                <?php echo $this->Form->input('Users.oldpassword', ['type'=>'password', 'label'=>false, 'div'=>false, 'class'=>'form-control']); ?>
              </div>
            </div>
            <?php } ?>
          </div>
        <div class="col-md-6">
            <div class="um-form-row form-group">
              <label class="col-sm-2 control-label required"><?php echo __('New Password'); ?></label>
              <div class="col-sm-10">
                <?php echo $this->Form->input('Users.password', ['type'=>'password', 'label'=>false, 'div'=>false, 'class'=>'form-control']); ?>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="um-form-row form-group">
              <label class="col-sm-2 control-label required"><?php echo __('Confirm Password'); ?></label>
              <div class="col-sm-10">
                <?php echo $this->Form->input('Users.cpassword', ['type'=>'password', 'label'=>false, 'div'=>false, 'class'=>'form-control']); ?>
              </div>
            </div>
          </div>






    <div class="col-md-6">
    	<div class="um-form-row form-group">
		  <label class="col-sm-2 control-label"></label>
          <div class="col-md-6 alinear">
              <?php echo $this->Form->Submit(__('Change Password'), ['class'=>'btn red btn-submit alinear', 'id'=>'changePasswordSubmitBtn']); ?>
          </div>
        </div>
   </div>
     





                                                        </div>
                                                        

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php echo $this->Form->end(); ?>
                                </div>
<style type="text/css">
  
  .alinear{
    float: right;
    position: relative;
  }
</style>                              