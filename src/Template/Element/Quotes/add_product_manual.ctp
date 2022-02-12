<div class="ca-form"> 
    <div class="row">   

        <div class="row">
            <div class="col-md-10">
                <div class="um-form-row form-group">
                    <label class="col-sm-2 control-label"><?php echo __('Descripción'); ?></label>
                    <div class="col-sm-12" id="price">
                        <?= $this->Form->input('article', [  
                            'type'=>'text',
                            'step'=>'any',
                            'label'=>false, 
                            'div'=>false,
                            'class'=>'form-control',
                            'value'=>(isset($product_data['article']))? $product_data['article']: ''
                        ]); ?>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                
                    <label class="col-xs-12 control-label" style="margin-top: 21px;"><?=  __('Es Flete'); ?>:</label>
                    <div class="col-xs-12">
                        <div class="mt-checkbox-list">
                            <label class="mt-checkbox">
                                <input type="hidden" name="is_flete" value="0">
                                <input type="checkbox" value="1" name="is_flete" <?= (isset($product_data['is_flete']) && $product_data['is_flete'] == 'true')? 'checked': '' ?>>
                                <span></span>
                            </label>
                        </div>
                    </div>
                
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="um-form-row form-group">
                    <label class="col-sm-2 control-label"><?php echo __('Precio Unitario'); ?></label>
                    <div class="col-sm-12" id="price">
                        <?= $this->Form->input('price', [  
                            'type'=>'number',
                            'step'=>'any',
                            'label'=>false, 
                            'div'=>false,
                            'class'=>'form-control importe',
                            'value'=>(isset($product_data['price']))? $product_data['price']: '',
                            'style'=>'text-align:right;',
                            'id'=>'price-product',
                            'required'=>'required'
                        ]); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="um-form-row form-group">
                    <label class="col-sm-2 control-label"><?php echo __('% de Descuento'); ?></label>
                    <div class="col-sm-12">
                        <?= $this->Form->input('discount', [  
                            'type'=>'number',
                            'step'=>'any',
                            'label'=>false, 
                            'div'=>false,
                            'class'=>'form-control importe',
                            'value'=>(isset($product_data['discount']))? $product_data['discount']: 0,
                            'style'=>'text-align:right;',
                            'required'=>'required'
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>


        <div class="row" style="padding-top: 0px; padding-bottom: 0px;">
            <div class="col-md-6" style="padding-top: 0px; padding-bottom: 0px;">
                <div class="um-form-row form-group" style="padding-top: 0px; padding-bottom: 0px;">
                    <label class="col-sm-2 control-label" style="padding-top: 0px; padding-bottom: 0px;">&nbsp;</label>
                    <div class="col-xs-12">
                        <?= $this->Form->input('unit_id', [
                            'type'=>'select', 
                            'label'=>false, 
                            'div'=>false, 
                            'multiple'=>false, 
                            'class'=>'form-control select-simple', 
                            'options'=>$units,
                            'value'=>(isset($product_data['unit_id']))? $product_data['unit_id']: 1,
                        ]); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="padding-top: 0px; padding-bottom: 0px;">
                <div class="um-form-row form-group" style="padding-top: 0px; padding-bottom: 0px;">
                    <label class="col-sm-2 control-label" style="padding-top: 0px; padding-bottom: 0px;"><?php echo __('Cantidad'); ?></label>
                    <div class="col-sm-12">
                        <?= $this->Form->input('amount', [  
                            'type'=>'number',
                            'step'=>'any',
                            'label'=>false, 
                            'div'=>false,
                            'class'=>'form-control importe',
                            'value'=>(isset($product_data['amount']))? $product_data['amount']: 1,
                            'data-id'=>0,
                            'id'=>'equivalencia-0',
                            'style'=>'text-align:right;',
                            'required'=>'required'
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="um-form-row form-group">
                    <label class="col-sm-12 control-label" style="text-align:center !important;"><?php echo __('Importe'); ?></label>
                    <div class="col-sm-12" style="text-align:center; font-size:20px;" id="importe">
                        $0.00
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">

    var unit_id = 0;
    var unidad_base = '#equivalencia-' + unit_id;

    $('.importe').keyup(function() {
        importe();
    });

    $('.importe').change(function() {
        importe();
    });

    importe();

    function importe() {
        
        var importe = $('#price-product').val();
        var currency_code = '<?= $currency->code ?>';

        var discount = $('#discount').val();

        var amount = $( unidad_base ).val();

        if(discount > 0){
            importe = importe - (discount * importe / 100);
            importe = importe.toFixed(2);
        }

        if(amount > 0){
            importe = importe * amount;
        }
        
        $('#importe').text('$'+number_format(importe,2)+' '+currency_code);
    }

    $('#agregar-partida').submit(function(e) {

        var amount = $( unidad_base ).val();
        var price = $('#price-product').val();

        if( !(parseFloat( amount ) > 0) && !(parseFloat( price ) > 0)){
            alert( 'Cantidad y Precio deben ser mayor a cero' );
            return false;
        }

        return true;
    });

    $('#agregar-partida').keypress(function(e) {
            if (e.which == 13) {
              return false;
            }
    });

    function discountValido() {
        var max = <?= $discount_max ?>;
        if($('#discount').val() > max){
            alert('Porcentaje de descuento superior a lo permitido');
            $('#discount').val(max);
        }else if($('#discount').val() < 0){
            $('#discount').val(0);
        }
    }

    $('#discount').keyup(function(e) {
        discountValido();
    });

    $('#discount').change(function(e) {
        discountValido();
    });

</script>