<div class="ca-form"> 
    <div class="row">

        <div class="row">
            <div class="col-md-6">
                <div class="um-form-row form-group">
                    <label class="col-sm-2 control-label"><?php echo __('Precio Unitario'); ?></label>
                    <div class="col-sm-12" id="price">
                        <?= $product->price_exchange_rate_format ?>
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
                            'value'=>$product_data['discount'],
                            'style'=>'text-align:right;'
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
                        <div class="mt-radio-list">
                            <label class="mt-radio">
                                <input type="radio" name="unit_id" value="<?= $product->unit_id ?>" <?= (!$product_data['unit_id'] || $product_data['unit_id'] == $product->unit_id)? 'checked' : '' ?>> <?= $product->products_unit->name ?> (Unidad Base)
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="padding-top: 0px; padding-bottom: 0px;">
                <div class="um-form-row form-group" style="padding-top: 0px; padding-bottom: 0px;">
                    <label class="col-sm-2 control-label" style="padding-top: 0px; padding-bottom: 0px;"><?php echo __('Cantidad'); ?></label>
                    <div class="col-sm-12">
                        <?= $this->Form->input('amounts['. $product->unit_id .'][amount]', [  
                            'type'=>'number',
                            'step'=>'any',
                            'label'=>false, 
                            'div'=>false,
                            'class'=>'form-control equivalecia',
                            'value'=>(isset($product_data['amount_base']))? $product_data['amount_base'] : $product_data['amount'],
                            'data-id'=>$product->unit_id,
                            'id'=>'equivalencia-'.$product->unit_id,
                            'style'=>'text-align:right;',
                            'required'=>'required'
                        ]); ?>

                        <?= $this->Form->input('amounts['. $product->unit_id .'][unit]', [
                            'type'=>'hidden', 
                            'value'=>$product->products_unit->name
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>

        <?php if($product_data['complement_id'] == 0) { ?>

            <?php foreach ($product->products_equivalences as $k => $equivalences) { ?>

            <div class="row" style="padding-top: 0px; padding-bottom: 0px;">
                <div class="col-md-6" style="padding-top: 0px; padding-bottom: 0px;">
                    <div class="um-form-row form-group" style="padding-top: 0px; padding-bottom: 0px;">
                        <label class="col-sm-2 control-label" style="padding-top: 0px; padding-bottom: 0px;">&nbsp;</label>
                        <div class="col-xs-12">
                            <div class="mt-radio-list">
                                <label class="mt-radio">
                                    <input type="radio" name="unit_id" value="<?= $equivalences->unit_id ?>" <?= ($product_data['unit_id'] && $product_data['unit_id'] == $equivalences->unit_id)? 'checked' : '' ?>> <?= $equivalences->unit->name ?>
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="padding-top: 0px; padding-bottom: 0px;">
                    <div class="um-form-row form-group" style="padding-top: 0px; padding-bottom: 0px;">
                        <label class="col-sm-2 control-label" style="padding-top: 0px; padding-bottom: 0px;"><?php echo __('Cantidad'); ?></label>
                        <div class="col-sm-12">
                            <?= $this->Form->input('amounts['. $equivalences->unit_id .'][amount]', [  
                                'type'=>'number',
                                'step'=>'any',
                                'label'=>false, 
                                'div'=>false,
                                'class'=>'form-control equivalecia',
                                'value'=>$equivalences->value,
                                'data-id'=>$equivalences->unit_id,
                                'id'=>'equivalencia-'.$equivalences->unit_id,
                                'style'=>'text-align:right;',
                                'required'=>'required'
                            ]); ?>

                            <?= $this->Form->input('amounts['. $equivalences->unit_id .'][unit]', [
                                'type'=>'hidden', 
                                'value'=>$equivalences->unit->name
                            ]); ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php } ?>

        <?php } ?>

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
    var equivalencias = <?= json_encode($equivalencias) ?>;

    var unit_id = <?= $product->unit_id ?>;
    var unidad_base = '#equivalencia-' + unit_id;

    $('.equivalecia').keyup(function(e) {
        
        var equivalendia_id = $(this).data('id');
        var value = $(this).val();
        
        calcula_equivalencia(equivalendia_id, value);

    });

    $('.equivalecia').change(function(e) {
        
        var equivalendia_id = $(this).data('id');
        var value = $(this).val();
        
        calcula_equivalencia(equivalendia_id, value);

    });

    calcula_equivalencia(<?= $product->unit_id ?>, <?= (isset($product_data['amount_base']))? $product_data['amount_base'] : $product_data['amount'] ?>);

    function calcula_equivalencia(equivalendia_id, value) {
        $.each(equivalencias, function( index, value_equivalencia ) {
            
            if(index != equivalendia_id){ 
                var equivalencia = value * equivalencias[ index ] / equivalencias[ equivalendia_id ];
                $('#equivalencia-' + index).val(equivalencia.toFixed(4));
            }

        });

        importe();
    }


    $('.importe').keyup(function() {
        importe();
    });

    $('.importe').change(function() {
        importe();
    });

    importe();

    function importe() {
        var importe = 0;
        
        var importe = <?= $product->price_exchange_rate ?>;
        var currency_code = '<?= $product->currency_code ?>';

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

        //if( !Number.isInteger( parseFloat(amount) ) ){
        if( !parseFloat(amount) > 0 ){
            alert( 'Cantidad debe ser mayor a cero' );
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

    var amount_base = '#equivalencia-<?= $product->unit_id ?>';

    function minAmount() {
        var min = <?= $amount_min ?>;
        if($(amount_base).val() < min){
            alert('Cantidad menor a lo permitido');
            $(amount_base).val(min);
            importe();
        }
    }

    $(amount_base).keyup(function(e) {
        //minAmount();
    });

    $(amount_base).change(function(e) {
        minAmount();
    });

</script>