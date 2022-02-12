<style type="text/css">
    .ui-widget-content{
        margin: auto !important;
        position: absolute !important;
        z-index: 100000 !important;
        width: 300px;
        right: 489px !important;
        top: 195px !important;
    }
</style>
<link href="/assets/global/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />
<script src="/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>

<?= $this->Form->input('id', [
    'type' => 'hidden',
]); ?>

<div class="row">
    <div class="col-md-12" style="padding: 20px;">
        <div class="form-group">
            <div class="col-md-6 autocomplete">
                <label class="col-md-12 control-label"><?= __d('customers', 'RFC') ?></label>
                <div class="input-group col-lg-12">
                    <?= $this->Form->input('rfc', [
                        'type' => 'text',
                        'required' => 'required',
                        'class' => 'form-control',
                        'label' => false,
                        'div' => false
                    ]); ?>
                </div>
            </div>
            <div class="col-md-6">
                <label class="col-md-12 control-label"><?= __d('customers', 'Status') ?></label>
                <div class="input-group col-lg-12">
                    <?= $this->Form->input('customer_status_id', [
                        'options' => $statusList,
                        'class' => 'form-control',
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6">
                <label class="col-md-12 control-label"><?= __d('customers', 'Title') ?></label>
                <div class="input-group col-lg-12">
                    <?= $this->Form->input('title', [
                        'required' => 'required',
                        'class' => 'form-control',
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div>
            <div class="col-md-6">
                <label class="col-md-12 control-label"><?= __d('customers', 'Business Name') ?></label>
                <div class="input-group col-lg-12">
                    <?= $this->Form->input('business_name', [
                        'class' => 'form-control',
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6">
                <label class="col-md-12 control-label"><?= __d('customers', 'Street') ?></label>
                <div class="input-group col-lg-12">
                    <?= $this->Form->input('street', [
                        'required' => 'required',
                        'class' => 'form-control',
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div>
            <div class="col-md-6">
                <label class="col-md-12 control-label"><?= __d('customers', 'Number') ?></label>
                <div class="input-group col-lg-12">
                    <?= $this->Form->input('number', [
                        'type' => 'text',
                        'maxlength' => '32',
                        'required' => 'required',
                        'class' => 'form-control',
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6">
                <label class="col-md-12 control-label"><?= __d('customers', 'Número Ext.') ?></label>
                <div class="input-group col-lg-12">
                    <?= $this->Form->input('num_ext', [
                        'type' => 'text',
                        'maxlength' => '32',
                        'required' => 'required',
                        'class' => 'form-control',
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div>
            <div class="col-md-6">
                <label class="col-md-12 control-label"><?= __d('customers', 'Colonia') ?></label>
                <div class="input-group col-lg-12">
                    <?= $this->Form->input('colony', [
                        'required' => 'required',
                        'class' => 'form-control',
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6">
                <label class="col-md-12 control-label"><?= __d('customers', 'Municipality') ?></label>
                <div class="input-group col-lg-12">
                    <?= $this->Form->input('municipality', [
                        'required' => 'required',
                        'class' => 'form-control',
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div>
            <div class="col-md-6">
                <label class="col-md-12 control-label"><?= __d('customers', 'State') ?></label>
                <div class="input-group col-lg-12">
                    <?= $this->Form->input('state', [
                        'required' => 'required',
                        'class' => 'form-control',
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6">
                <label class="col-md-12 control-label"><?= __d('customers', 'Country') ?></label>
                <div class="input-group col-lg-12">
                    <?= $this->Form->input('country', [
                        'required' => 'required',
                        'class' => 'form-control',
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div>
            <div class="col-md-6">
                <label class="col-md-12 control-label"><?= __d('customers', 'Postal Code') ?></label>
                <div class="input-group col-lg-12">
                    <?= $this->Form->input('postal_code', [
                        'type' => 'text',
                        'required' => 'required',
                        'class' => 'form-control postal-code',
                        'label' => false,
                        'value' => $customer->postal_code ? $customer->postal_code : '',
                        'div' => false,
                    ]); ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6">
                <label class="col-md-12 control-label"><?= __d('customers', 'Customer Category') ?></label>
                <div class="input-group col-lg-12">
                    <?= $this->Form->input('customer_category_id', [
                        'options' => $customerCategories,
                        'required' => 'required',
                        'class' => 'form-control',
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div>
            <!--div class="col-md-6">
                <label class="col-md-12 control-label"><?= __d('customers', 'Office') ?></label>
                <div class="input-group col-lg-12">
                    <?= $this->Form->input('name_office', [
                        'type' => 'text',
                        'required' => 'required',
                        'class' => 'form-control',
                        'label' => false,
                        'div' => false,
                    ]); ?>
                    <span style="color: #ad0101;list-style: none;text-align: left; font-size: 12px; display: none;" class="message-error"></span>
                </div>
            </div -->
            <div class="col-md-6">
                <label class="col-md-12 control-label"><?= __d('customers', 'Customer Type') ?></label>
                <div class="input-group col-lg-12">
                    <?= $this->Form->input('customer_type_id', [
                        'options' => $customerTypes,
                        'required' => 'required',
                        'class' => 'form-control',
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <!-- div class="col-md-6">
                <label class="col-md-12 control-label"><?= __d('customers', 'Franquicia') ?></label>
                <div class="input-group col-lg-12">
                    <?= $this->Form->input('franquicia_id', [
                        'options' => $franquicias,
                        'required' => 'required',
                        'class' => 'form-control',
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div -->
        </div>
        <div class="form-group">
            <div class="col-md-6">
                <label class="col-md-12 control-label"><?= __d('customers', 'Seller') ?></label>
                <div class="input-group col-lg-12">
                    <?= $this->Form->input('seller_id', [
                        'options' => $sellers,
                        'required' => 'required',
                        'class' => 'form-control',
                        'label' => false,
                        'div' => false,
                    ]); ?>
                    </div>
            </div>
            <div class="col-md-6">
                <label class="col-md-12 control-label"><?= __d('customers', 'Customer Headcount') ?></label>
                <div class="input-group col-lg-12">
                    <?= $this->Form->input('customer_headcount_id', [
                        'options' => $customerHeadcounts,
                        'required' => 'required',
                        'class' => 'form-control',
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6">
                <label class="col-md-12 control-label"><?= __d('customers', 'Website') ?></label>
                <div class="input-group col-lg-12">
                    <?= $this->Form->input('website', [
                        'type' => 'url',
                        'required' => 'required',
                        'class' => 'form-control',
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div>
            <div class="col-md-6">
                <label class="col-md-12 control-label"><?= __d('customers', 'Cliente desde') ?></label>
                <div class="input-group col-lg-12">
                    <?= $this->Form->input('customer_since', [
                        'type' => 'text',
                        'value' => $customer->customer_since ? $customer->customer_since->format(DATE_DISPLAY_FORMAT) : '',
                        'class' => 'form-control custom-datepicker',
                        'empty' => true,
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6">
                <label class="col-md-12 control-label"><?= __d('customers', 'Sucursales') ?></label>
                <div class="input-group col-lg-12">
                    <?= $this->Form->input('franchises_mock', [
                        'type' => 'select',
                        'options' => $franchises,
                        'multiple' => 'multiple',
                        'class' => 'form-control select2',
                        'value' => $customer->customer_franchises_list + [1 => $this->UserAuth->getUser()['User']['franquicia_id']],
                        'disabled' => 'disabled',
                        'label' => false,
                        'div' => false,
                    ]); ?>
                    <?= $this->Form->input('franchises', [
                        'type' => 'select',
                        'options' => $franchises,
                        'multiple' => 'multiple',
                        'value' => $customer->customer_franchises_list + [1 => $this->UserAuth->getUser()['User']['franquicia_id']],
                        'style' => 'display:none;',
                        'label' => false,
                    ]); ?>
                </div>
            </div>
            <div class="col-md-6">
                <label class="col-md-12 control-label"><?= __d('customers', 'Ejecutivo') ?></label>
                <div class="input-group col-lg-12">
                    <?= $this->Form->input('executive_id', [
                        'type' => 'select',
                        'options' => $executives,
                        'class' => 'form-control',
                        'value' => $customer->executive_id,
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6">
                <label class="col-md-12 control-label"><?= __d('customers', 'Teléfono') ?></label>
                <div class="input-group col-lg-12">
                    <?= $this->form->input('phone', [
                        'class' => 'form-control phone',
                        'value' => $customer->phone,
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div>
            <div class="col-md-6">
                <label class="col-md-12 control-label"><?= __d('customers', 'Email') ?></label>
                <div class="input-group col-lg-12">
                    <?= $this->form->input('email', [
                        'value' => $customer->email,
                        'class' => 'form-control',
                        'type' => 'email',
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6">
                <label class="col-md-12 control-label"><?= __('Días de Crédito') ?></label>
                <div class="input-group col-lg-12">
                    <?= $this->form->input('credit_days', [
                        'value' => $customer->credit_days,
                        'data-parsley-type' => 'number',
                        'min' => 0,
                        'class' => 'form-control',
                        'label' => false,
                        'type' => 'text',
                        'div' => false,
                    ]); ?>
                </div>
            </div>
        </div>
        <?php if ( ! $customer->id): ?>
            <div class="form-group">
                <div class="col-md-6">
                    <label class="col-md-12 control-label"><?= __('Crear Usuario') ?></label>
                    <div class="input-group col-lg-12">
                        <?= $this->form->input('create_user', [
                            'style' => 'position: relative;margin-left: initial;',
                            'type' => 'checkbox',
                            'label' => false,
                            'div' => false,
                        ]); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<div class="modal-footer">
    <div class="col-md-12 split-btn">
        <div class="submit">
            <?= $this->Form->button(__d('customers', 'Save'), ['class' => 'btn btn-span btn-md btn-submit', 'id' => 'save-customers-button']) ?>
        </div>
        <a href="#" id="cancel-save-customers" class="btn btn-back" data-dismiss="modal"><?= __d('customers', 'Cancel') ?></a>
    </div>
</div>

<script type="text/javascript">
function disableForm(){
    $("#save-customers :input").attr("readonly", true);
    $('#save-customers-button').prop('readonly', 'readonly');
  }
  function enableForm(){
    $("#save-customers :input").removeAttr('readonly');
    $('#save-customers-button').removeAttr('readonly');
  }
  $(function(){
    
    $('#save-customers').parsley().on('form:success', function() {
      disableForm();
    });
    $('#save-customers').parsley();

    $('.select2').select2();
    
    $('.custom-datepicker').pickadate({
      'format': 'dd/mm/yyyy',
      'formatSubmit': 'yyyy-mm-dd',
      hiddenName: true,
      selectYears: true,
      selectMonths: true,
    });

    $(".phone").inputmask("+52 (99) 9999 9999", {
        placeholder: " ",
        clearMaskOnLostFocus: true
    });
    $(".postal-code").inputmask("99999", {
        placeholder: " ",
        clearMaskOnLostFocus: true
    });

    $("#rfc").autocomplete({
        source: function(request , response){
            $.getJSON('/customers/customers/getRfc', { val: request.term}, function(data) {
                var opciones = [];
                $.each(data.response, function(k,v){                        
                    var nombre = {};
                    nombre.label = v.rfc                    
                    opciones.push(nombre);
                });                 
                response(opciones);
            })              
        },
        minLength: 2,           
    });
    
    var estodo          = $('#customer-status-id');
    var title           = $('#title');
    var business        = $('#business-name');
    var street          = $('#street');
    var number          = $('#number');
    var municipality    = $('#municipality');
    var state           = $('#state');
    var country         = $('#country');
    var cp              = $('#postal-code');
    var website         = $('#website');
    var name_office     = $('#name_office');

    var num_ext         = $('#num-ext');
    var colony          = $('#colony');
    var phone           = $('#phone');
    var email           = $('#email');

    $("#rfc").on('change', function(){

        if ( $('#id').val() ) {
            return false;
        }

        if($(this).val()!=''){
            $.get('/customers/customers/getCliente/'+ $(this).val(), function(info){

                var data = JSON.parse(info);
                
                console.log(data);

                $('#customer-status-id option[value='+data.response.customer_status_id+']').attr('selected', true);
                title.val(data.response.title);
                business.val(data.response.business_name);
                street.val(data.response.street);
                number.val(data.response.number);
                municipality.val(data.response.municipality);
                state.val(data.response.state);
                country.val(data.response.country);
                cp.val(data.response.postal_code);
                num_ext.val(data.response.num_ext);
                colony.val(data.response.colony);
                phone.val(data.response.phone);
                email.val(data.response.email);
                name_office.val(data.response.name_office);
                $('#customer-category-id option[value='+data.response.customer_category_id+']').attr('selected', true);
                $('#office-id option[value='+data.response.office_id+']').attr('selected', true);
                $('#customer-type-id option[value='+data.response.customer_type_id+']').attr('selected', true);
                $('#franquicia-id option[value='+data.response.franquicia_id+']').attr('selected', true);
                // $('#seller-id option[value='+data.response.seller_id+']').attr('selected', true);
                $('#customer-headcount-id option[value='+data.response.customer_headcount_id+']').attr('selected', true);
                website.val(data.response.website);

                var franquicias = [1, <?= $this->UserAuth->getUser()['User']['franquicia_id'] ?>];
                if (data.response.customer_franchises) {
                    $.each(data.response.customer_franchises, function(idx, lmnt){
                        franquicias.push(lmnt.franquicia_id);
                    });
                }

                $('#franchises-mock').val(franquicias).trigger('change');
                $('#franchises').val(franquicias);

                // var myPicker = $('#customer-since').pickadate('picker')
                // myPicker.set('select', new Date(2015, 3, 30));
            });
        }else{
            setEmpty();
        }
    });


    $('#name-office').on('change', function(){

        if($(this).val() != ''){
            $.get('/customers/customers/verifyOffice/'+$(this).val()+'/<?php echo $customer->id; ?>', function(res){
                message = JSON.parse(res);
                if(message.error == 1){
                    $('.message-error').html('La sucursal ya existe, por favor proporcione otra.');
                    $('.message-error').show();
                    $('#save-customers-button').attr('disabled', true);
                }else{
                    $('.message-error').html('');
                    $('.message-error').hide();
                    $('#save-customers-button').attr('disabled', false);
                }
            });
        }   
    });

  });

  function setEmpty(){
    $('#title').val('');
    $('#business-name').val('');
    $('#street').val('');
    $('#number').val('');
    $('#municipality').val('');
    $('#state').val('');
    $('#country').val('');
    $('#postal-code').val('');
    $('#website').val('');
  }

</script>
