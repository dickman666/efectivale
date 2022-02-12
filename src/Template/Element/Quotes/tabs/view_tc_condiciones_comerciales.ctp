<br>

<h5><?= __('CONDICIONES') ?></h5>

<hr>

<?= $this->Form->create($quote, ['class' => 'form-horizontal', 'url' => ['action' => 'edit', $quote->id]]) ?>

<div class="row">
    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Aplica IVA'); ?>:</label>
            <div class="col-xs-8">
                <?= ($quote->commercial_terms_iva)? 'Si' : 'No' ?>
            </div>
        </div>
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Se recibieron planos'); ?>:</label>
            <div class="col-xs-8">
                <?= ($quote->commercial_terms_plans)? 'Si' : 'No' ?>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Cotizar ingeniería'); ?>:</label>
            <div class="col-xs-8">
                <?= ($quote->commercial_terms_engineering)? 'Si' : 'No' ?>
            </div>
        </div>
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Cotizar flete'); ?>:</label>
            <div class="col-xs-8">
                <?= ($quote->commercial_terms_flete)? 'Si' : 'No' ?>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Ver Descuentos en PDF'); ?>:</label>
            <div class="col-xs-8">
                <?= ($quote->commercial_terms_view_discounts)? 'Si' : 'No' ?>
            </div>
        </div>
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('PMS'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->pm->name ?>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Moneda'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->commercial_terms_currency->name ?>
            </div>
        </div>
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Tipo de cambio'); ?>:</label>
            <div class="col-xs-8">
                <?= $this->Form->input('commercial_terms_exchange_rate', [  
                                'label'=>false, 
                                'div'=>false,
                                'class'=>'form-control'
                            ]); ?>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('% de Pago (Anticipo)'); ?>:</label>
            <div class="col-xs-8">
                <?= number_format($quote->commercial_terms_advance_percentage, 2) ?>%
            </div>
        </div>
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Resto (Pendiente)'); ?>:</label>
            <div class="col-xs-8">
                $<?= number_format($quote->totales['pendiente'], 2) ?>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Tipo de Entrega'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->delivery_type->name ?>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="col-xs-12">
            <button type="submit" class="btn btn-submit pull-right" style="margin-left: 10px !important;"><?=__('Guardar')?></button>
        </div>
    </div>
</div>

<?= $this->Form->end() ?>