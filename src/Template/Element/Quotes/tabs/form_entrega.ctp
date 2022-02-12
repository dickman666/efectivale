<div class="row">
    <div class="col-xs-6">
        <h5 style="margin:0px;"><?= __('CONTACTO DE ENTREGA') ?></h5>
    </div>
    <div class="col-xs-6">
        
    </div>
</div>

<hr>

<div class="row">
    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Nombre Completo'); ?>:</label>
            <div class="col-xs-8 required-input">
                <?= $this->Form->input('delivery_contact_name', [
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
            <label class="col-xs-4" ><?=  __('Teléfono'); ?>:</label>
            <div class="col-xs-8">
                <?= $this->Form->input('delivery_contact_phone', [
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
                <?= $this->Form->input('delivery_contact_movil', [
                            'data-validation' => 'required',
                            'class'=>'form-control phone-ext', 
                            'label'=>false, 
                            'div'=>false, 
                        ]); ?>
            </div>
        </div>
    </div>
</div>

<h5><?= __('DOMICILIO DE ENTREGA') ?></h5>

<hr>

<div class="row">
    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Calle'); ?>:</label>
            <div class="col-xs-8 required-input">
                <?= $this->Form->input('delivery_address_street', [
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
                        <?= $this->Form->input('delivery_address_number_exterior', [
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
                        <?= $this->Form->input('delivery_address_number_interior', [
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
                <?= $this->Form->input('delivery_address_colony', [
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
                <?= $this->Form->input('delivery_address_municipality_text', [
                            'data-validation' => 'required',
                            'class'=>'form-control', 
                            'label'=>false, 
                            'div'=>false, 
                        ]); ?>
                <?= $this->Form->input('municipality_id', [
                        'type' => 'hidden'
                    ]); ?>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Ciudad'); ?>:</label>
            <div class="col-xs-8">
                <?= $this->Form->input('delivery_address_city', [
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
                <?= $this->Form->input('delivery_address_state_text', [
                            'data-validation' => 'required',
                            'class'=>'form-control', 
                            'label'=>false, 
                            'div'=>false, 
                        ]); ?>
                <?= $this->Form->input('state_id', [
                        'type' => 'hidden'
                    ]); ?>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Pais'); ?>:</label>
            <div class="col-xs-8">
                <?= $this->Form->input('delivery_address_country_text', [
                            'data-validation' => 'required',
                            'class'=>'form-control', 
                            'label'=>false, 
                            'div'=>false, 
                        ]); ?>

                <?= $this->Form->input('country_id', [
                        'type' => 'hidden'
                    ]); ?>
            </div>
        </div>
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('C.P.'); ?>:</label>
            <div class="col-xs-8">
                <?= $this->Form->input('delivery_address_postal_code', [
                            'data-validation' => 'required',
                            'class'=>'form-control', 
                            'label'=>false, 
                            'div'=>false, 
                        ]); ?>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group col-xs-12">
            <label class="col-xs-12" ><?=  __('Notas'); ?>:</label>
            <div class="col-xs-12">
                <?= $this->Form->input('comments', [
                            'data-validation' => 'required',
                            'class'=>'form-control', 
                            'label'=>false, 
                            'div'=>false, 
                            'placeholder'=>'Comentarios adicionales aplicables a la cotización. Detalles adicionales para la entrega (horarios, puntos de referencia, etc.)'
                        ]); ?>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    var optionsCountry2 = {
        url: function(phrase) {
            return '/quotes/getCountries/' + phrase + '.json';
        },
        listLocation: 'countries',
        getValue: 'name',
        list: {
            onSelectItemEvent: function() {
                var value = $('#delivery-address-country-text').getSelectedItemData().id;
                $('#country-id').val(value);
            }
        }
    };
    $('#delivery-address-country-text').easyAutocomplete(optionsCountry2);


    var optionsState2 = {
        url: function(phrase) {
            return '/quotes/getStates/' + $('#country-id').val() + '/' + phrase + '.json';
        },
        listLocation: 'states',
        getValue: 'name',
        list: {
            onSelectItemEvent: function() {
                var value = $('#delivery-address-state-text').getSelectedItemData().id;
                $('#state-id').val(value);
            }
        }
    };
    $('#delivery-address-state-text').easyAutocomplete(optionsState2);

    var optionsMunicipalities = {
        url: function(phrase) {
            return '/quotes/getMunicipalities/' + $('#state-id').val() + '/' + phrase + '.json';
        },
        listLocation: 'municipalities',
        getValue: 'name',
        list: {
            onSelectItemEvent: function() {
                var value = $('#delivery-address-municipality-text').getSelectedItemData().id;
                $('#municipality-id').val(value);
            }
        }
    };
    $('#delivery-address-municipality-text').easyAutocomplete(optionsMunicipalities);

</script>