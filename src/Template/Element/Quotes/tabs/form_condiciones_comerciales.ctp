<div class="row">
    <div class="col-xs-12">
        <h5 style="margin:0px;"><?= __('CONDICIONES') ?></h5>
        <h6 class="instructions">Ingrese las condiciones comerciales</h6>
    </div>
    <hr>
</div>



<div class="row">
    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Aplica IVA'); ?>:</label>
            <div class="col-xs-8">
                <div class="mt-checkbox-list" style="margin-top: -12px;">
                    <label class="mt-checkbox">
                        <input type="hidden" name="commercial_terms_iva" value="0">
                        <input type="checkbox" value="1" name="commercial_terms_iva" <?= ($quote->commercial_terms_iva)? 'checked' : '' ?>>
                        <span></span>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Se recibieron planos'); ?>:</label>
            <div class="col-xs-8">
                <div class="mt-checkbox-list" style="margin-top: -12px;">
                    <label class="mt-checkbox">
                        <input type="hidden" name="commercial_terms_plans" value="0">
                        <input type="checkbox" value="1" name="commercial_terms_plans" <?= ($quote->commercial_terms_plans)? 'checked' : '' ?>>
                        <span></span>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Cotizar ingeniería'); ?>:</label>
            <div class="col-xs-8">
                <div class="mt-checkbox-list" style="margin-top: -12px;">
                    <label class="mt-checkbox">
                        <input type="hidden" name="commercial_terms_engineering" value="0">
                        <input type="checkbox" value="1" name="commercial_terms_engineering" <?= ($quote->commercial_terms_engineering)? 'checked' : '' ?>>
                        <span></span>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Cotizar flete'); ?>:</label>
            <div class="col-xs-8">
                <div class="mt-checkbox-list" style="margin-top: -12px;">
                    <label class="mt-checkbox">
                        <input type="hidden" name="commercial_terms_flete" value="0">
                        <input type="checkbox" value="1" name="commercial_terms_flete" <?= ($quote->commercial_terms_flete)? 'checked' : '' ?>>
                        <span></span>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Ver Descuentos en PDF'); ?>:</label>
            <div class="col-xs-8">
                <div class="mt-checkbox-list" style="margin-top: -12px;">
                    <label class="mt-checkbox">
                        <input type="hidden" name="commercial_terms_view_discounts" value="0">
                        <input type="checkbox" value="1" name="commercial_terms_view_discounts" <?= ($quote->commercial_terms_view_discounts)? 'checked' : '' ?>>
                        <span></span>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('PMS'); ?>:</label>
            <div class="col-xs-8">
                <?= $this->Form->input('pms_id', ['type'=>'select', 'label'=>false, 'div'=>false, 'multiple'=>false, 'class'=>'form-control select2', 'options'=>$pms, 'empty'=>'Selecciona un PMS']); ?>
            </div>
        </div>
    </div>

    <?php if($this->UserAuth->getGroupId() == 9){ ?>
        <div class="col-xs-12">
            <div class="form-group col-xs-6">
                <label class="col-xs-4" ><?=  __('Moneda'); ?>:</label>
                <div class="col-xs-8">
                    <?= $this->Form->input('commercial_terms_currencies_id', ['type'=>'select', 'label'=>false, 'div'=>false, 'multiple'=>false, 'class'=>'form-control select2', 'options'=>$commercialTermsCurrencies, 'value'=>($quote->commercial_terms_currencies_id)? $quote->commercial_terms_currencies_id : 1 ]); ?>
                </div>
            </div>
            <div class="form-group col-xs-6">
                <label class="col-xs-4" ><?=  __('Tipo de cambio'); ?>:</label>
                <div class="col-xs-8">
                    <?= $this->Form->input('commercial_terms_exchange_rate', [
                                'data-validation' => 'required',
                                'class'=>'form-control', 
                                'label'=>false, 
                                'div'=>false, 
                                'disabled'=>'disabled',
                                'value'=>(($quote->commercial_terms_exchange_rate)? $quote->commercial_terms_exchange_rate : 1),
                                'style'=>'text-align: right;'
                            ]); ?>
                </div>
            </div>
        </div>
    <?php } ?>

    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('% de Pago (Anticipo)'); ?>:</label>
            <div class="col-xs-8">
                <?= $this->Form->input('commercial_terms_advance_percentage', [  
                                'type'=>'text',
                                'label'=>false, 
                                'div'=>false,
                                'class'=>'form-control advance_percentage',
                                'value'=>($quote->commercial_terms_advance_percentage)? $quote->commercial_terms_advance_percentage : 100
                            ]); ?>
            </div>
        </div>
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Resto (Pendiente)'); ?>:</label>
            <div class="col-xs-8">
                <?= $this->Form->input('commercial_terms_pending_payment', [  
                                'type'=>'text',
                                'label'=>false, 
                                'div'=>false,
                                'class'=>'form-control',
                                'disabled'=>'disabled',
                                'value'=>$quote->totales['pendiente'],
                                'style'=>'text-align: right;'
                            ]); ?>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Tipo de Entrega'); ?>:</label>
            <div class="col-xs-8">
                <?= $this->Form->input('commercial_terms_delivery_type_id', ['type'=>'select', 'label'=>false, 'div'=>false, 'multiple'=>false, 'class'=>'form-control select2', 'options'=>$delivery_types, 'empty'=>'Selecciona un Tipo de Entrega' ]); ?>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function checkCurrencies() {
        if($('#commercial-terms-currencies-id').val() != 2){
            $('#commercial-terms-exchange-rate').prop('disabled', true);
        }else{
            $('#commercial-terms-exchange-rate').prop('disabled', false);
        }
    }

    checkCurrencies();
    $('#commercial-terms-currencies-id').change(function() {
        checkCurrencies();
        $('#commercial-terms-exchange-rate').val(1);
    });

    function pendingPayment() {
        var advance_percentage = $('#commercial-terms-advance-percentage').val();
        var advance = 0;
        var pending = 0;
        var total = <?= $quote->totales['total'] ?>;

        if(advance_percentage > 0 && total > 0){
            advance = advance_percentage * total / 100;
            advance = advance.toFixed(2);

            pending = total - advance;
        }

        $('#commercial-terms-pending-payment').val(pending);

    }

    pendingPayment();
    $('#commercial-terms-advance-percentage').keyup(function() {
        pendingPayment();
    });
    $('#commercial-terms-advance-percentage').change(function() {
        pendingPayment();
    });
</script>