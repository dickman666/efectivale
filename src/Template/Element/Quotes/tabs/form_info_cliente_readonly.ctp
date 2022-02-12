<div class="row" style="margin:20px -15px 60px -15px;">
    <div class="col-xs-6">
        <?= $this->Form->input('customer_id', ['type'=>'select', 'label'=>false, 'div'=>false, 'multiple'=>false, 'class'=>'form-control select2', 'options'=>$customers, 'empty'=>'Buscar cliente']); ?>
    </div>
</div>

<div class="input-cliente" style="margin-bottom:100px;">
    <h5><?= __('GENERAL') ?></h5>

    <hr>

    <div class="row">
        <div class="col-xs-12">
            <div class="form-group col-xs-6">
                <label class="col-xs-4" ><?=  __('Nombre Comercial'); ?>:</label>
                <div class="col-xs-8 required-input">
                    <?= $this->Form->input('customer.business_name', [
                            'class'=>'form-control', 
                            'label'=>false, 
                            'div'=>false, 
                        ]); ?>
                </div>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="form-group col-xs-6">
                <label class="col-xs-4" ><?=  __('Razón Social'); ?>:</label>
                <div class="col-xs-8">
                    <?= $this->Form->input('customer.title', [
                            'data-validation' => 'required',
                            'class'=>'form-control', 
                            'label'=>false, 
                            'div'=>false, 
                        ]); ?>
                </div>
            </div>
            <div class="form-group col-xs-6">
                <label class="col-xs-4" ><?=  __('RFC'); ?>:</label>
                <div class="col-xs-8">
                    <?= $this->Form->input('customer.rfc', [
                            'data-validation' => 'required',
                            'class'=>'form-control rfc', 
                            'label'=>false, 
                            'div'=>false, 
                        ]); ?>
                </div>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="form-group col-xs-6">
                <label class="col-xs-4" ><?=  __('Clasificación'); ?>:</label>
                <div class="col-xs-8">
                    <?= $this->Form->input('customer.customer_category_id', ['type'=>'select', 'label'=>false, 'div'=>false, 'multiple'=>false, 'class'=>'form-control select2', 'options'=>$customer_categories, 'empty'=>'Selecciona una Clasificación']); ?>
                </div>
            </div>
            <div class="form-group col-xs-6">
                <label class="col-xs-4" ><?=  __('Fecha de Registro'); ?>:</label>
                <div class="col-xs-8">
                    <?= $this->Form->input('customer.created', [
                            'data-validation' => 'required',
                            'class'=>'form-control', 
                            'label'=>false, 
                            'div'=>false, 
                            'type'=>'text'
                        ]); ?>
                </div>
            </div>
        </div>

    </div>

    <h5><?= __('CONTACTO') ?></h5>

    <hr>

    <div class="row">
        <div class="col-xs-12">
            <div class="form-group col-xs-6">
                <label class="col-xs-4" ><?=  __('Prefijo'); ?>:</label>
                <div class="col-xs-8 required-input">
                    <?= $this->Form->input('customer.prefix_id', ['type'=>'select', 'label'=>false, 'div'=>false, 'multiple'=>false, 'class'=>'form-control select2', 'options'=>$prefixes, 'empty'=>'Selecciona un Prefijo']); ?>
                </div>
            </div>
            <div class="form-group col-xs-6">
                <label class="col-xs-4" ><?=  __('Nombre Completo'); ?>:</label>
                <div class="col-xs-8 required-input">
                    <?= $this->Form->input('customer.contact_name', [
                            'data-validation' => 'required',
                            'class'=>'form-control', 
                            'label'=>false, 
                            'div'=>false, 
                        ]); ?>
                </div>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="form-group col-xs-6">
                <label class="col-xs-4" ><?=  __('Cumpleaños'); ?>:</label>
                <div class="col-xs-8">
                    <?= $this->Form->input('customer.contact_bday', ['type'=>'text','label'=>false,'div'=>false, 'class'=>'form-control maxToDay']); ?>
                </div>
            </div>
            <div class="form-group col-xs-6">
                <label class="col-xs-4" ><?=  __('Correo Electrónico'); ?>:</label>
                <div class="col-xs-8 required-input">
                    <?= $this->Form->input('customer.contact_email', [
                            'data-validation' => 'required',
                            'class'=>'form-control email', 
                            'label'=>false, 
                            'div'=>false, 
                        ]); ?>
                </div>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="form-group col-xs-6">
                <label class="col-xs-4" ><?=  __('Teléfono fijo/oficina'); ?>:</label>
                <div class="col-xs-8 required-input">
                    <?= $this->Form->input('customer.contact_phone', [
                            'data-validation' => 'required',
                            'class'=>'form-control phone-ext', 
                            'label'=>false, 
                            'div'=>false, 
                        ]); ?>
                </div>
            </div>
            <div class="form-group col-xs-6">
                <label class="col-xs-4" ><?=  __('Celular'); ?>:</label>
                <div class="col-xs-8">
                    <?= $this->Form->input('customer.contact_movil', [
                            'data-validation' => 'required',
                            'class'=>'form-control phone-ext', 
                            'label'=>false, 
                            'div'=>false, 
                        ]); ?>
                </div>
            </div>
        </div>
    </div>

    <h5><?= __('DOMICILIO FISCAL') ?></h5>

    <hr>

    <div class="row">
        <div class="col-xs-12">
            <div class="form-group col-xs-6">
                <label class="col-xs-4" ><?=  __('Calle'); ?>:</label>
                <div class="col-xs-8">
                    <?= $this->Form->input('customer.street', [
                            'data-validation' => 'required',
                            'class'=>'form-control', 
                            'label'=>false, 
                            'div'=>false, 
                        ]); ?>
                </div>
            </div>
            <div class="form-group col-xs-6">
                <div class="form-group col-xs-4" style="margin:0px; padding:0px;">
                    <label class="col-xs-6" ><?=  __('No. Ext.'); ?>:</label>
                    <div class="col-xs-6" style="padding:0px;">
                        <?= $this->Form->input('customer.number_exterior', [
                            'data-validation' => 'required',
                            'class'=>'form-control', 
                            'label'=>false, 
                            'div'=>false, 
                        ]); ?>
                    </div>
                </div>
                <div class="form-group col-xs-4" style="margin:0px; padding:0px;">
                    <label class="col-xs-6" ><?=  __('No. Int.'); ?>:</label>
                    <div class="col-xs-6" style="padding:0px;">
                        <?= $this->Form->input('customer.number_interior', [
                            'data-validation' => 'required',
                            'class'=>'form-control', 
                            'label'=>false, 
                            'div'=>false, 
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="form-group col-xs-6">
                <label class="col-xs-4" ><?=  __('Colonia'); ?>:</label>
                <div class="col-xs-8">
                    <?= $this->Form->input('customer.colony', [
                            'data-validation' => 'required',
                            'class'=>'form-control', 
                            'label'=>false, 
                            'div'=>false, 
                        ]); ?>
                </div>
            </div>
            <div class="form-group col-xs-6">
                <label class="col-xs-4" ><?=  __('Municipio'); ?>:</label>
                <div class="col-xs-8">
                    <?= $this->Form->input('customer.municipality_text', [
                            'data-validation' => 'required',
                            'class'=>'form-control', 
                            'label'=>false, 
                            'div'=>false, 
                        ]); ?>
                    <?= $this->Form->input('customer.municipality_id', [
                            'type' => 'hidden'
                        ]); ?>
                </div>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="form-group col-xs-6">
                <label class="col-xs-4" ><?=  __('Ciudad'); ?>:</label>
                <div class="col-xs-8">
                    <?= $this->Form->input('customer.city', [
                            'data-validation' => 'required',
                            'class'=>'form-control', 
                            'label'=>false, 
                            'div'=>false, 
                        ]); ?>
                </div>
            </div>
            <div class="form-group col-xs-6">
                <label class="col-xs-4" ><?=  __('Estado'); ?>:</label>
                <div class="col-xs-8">
                    <?= $this->Form->input('customer.state_text', [
                            'data-validation' => 'required',
                            'class'=>'form-control', 
                            'label'=>false, 
                            'div'=>false, 
                        ]); ?>
                    <?= $this->Form->input('customer.state_id', [
                            'type' => 'hidden'
                        ]); ?>
                </div>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="form-group col-xs-6">
                <label class="col-xs-4" ><?=  __('Pais'); ?>:</label>
                <div class="col-xs-8">
                    <?= $this->Form->input('customer.country_text', [
                            'data-validation' => 'required',
                            'class'=>'form-control', 
                            'label'=>false, 
                            'div'=>false, 
                        ]); ?>

                    <?= $this->Form->input('customer.country_id', [
                            'type' => 'hidden'
                        ]); ?>
                </div>
            </div>
            <div class="form-group col-xs-6">
                <label class="col-xs-4" ><?=  __('C.P.'); ?>:</label>
                <div class="col-xs-8">
                    <?= $this->Form->input('customer.postal_code', [
                            'data-validation' => 'required',
                            'class'=>'form-control', 
                            'label'=>false, 
                            'div'=>false, 
                        ]); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    $(function(){
        $('.select2').select2();
    });

    function iniCustomer(empty) {
        if($('#customer-id').val() == ''){
            disabledInputs(false, empty);
        }else{
            disabledInputs(true, true);
            getCliente();
        }
    }

    iniCustomer(false);
    $('#customer-id').change(function() {
        iniCustomer(true);
    });

    function disabledInputs(value, empty) {
        $('.input-cliente input').prop('disabled', value);
        $('.input-cliente select').prop('disabled', value);

        if(empty){
            $('.input-cliente input').val('');
            $('.input-cliente select').val('').trigger('change');;   
        }     

        $('#customer-created').prop('disabled', true);
    }

    function getCliente() {
        $.get('/customers/customers/getCustomerId/' + $('#customer-id').val() + '.json', function(res){
            var customer = res.customer;

            $.each(customer, function( index, value ) {
              $('input[name*="customer['+ index +']"]').val(value);

              $('select[name*="customer['+ index +']"]').val(value).trigger('change');
            });
        });
    }

    var optionsCountry = {
        url: function(phrase) {
            return '/quotes/getCountries/' + phrase + '.json';
        },
        listLocation: 'countries',
        getValue: 'name',
        list: {
            onSelectItemEvent: function() {
                var value = $('#customer-country-text').getSelectedItemData().id;
                $('#customer-country-id').val(value);
            }
        }
    };
    $('#customer-country-text').easyAutocomplete(optionsCountry);


    var optionsState = {
        url: function(phrase) {
            return '/quotes/getStates/' + $('#customer-country-id').val() + '/' + phrase + '.json';
        },
        listLocation: 'states',
        getValue: 'name',
        list: {
            onSelectItemEvent: function() {
                var value = $('#customer-state-text').getSelectedItemData().id;
                $('#customer-state-id').val(value);
            }
        }
    };
    $('#customer-state-text').easyAutocomplete(optionsState);

    var optionsMunicipalities = {
        url: function(phrase) {
            return '/quotes/getMunicipalities/' + $('#customer-state-id').val() + '/' + phrase + '.json';
        },
        listLocation: 'municipalities',
        getValue: 'name',
        list: {
            onSelectItemEvent: function() {
                var value = $('#customer-municipality-text').getSelectedItemData().id;
                $('#customer-municipality-id').val(value);
            }
        }
    };
    $('#customer-municipality-text').easyAutocomplete(optionsMunicipalities);

</script>