<br>

<div class="row">
    <div class="col-xs-6">
        <h5 style="margin:0px;"><?= __('DETALLES VOLUMETRICOS') ?></h5>
    </div>
    <div class="col-xs-6">
        
    </div>
</div>

<hr>

<div class="row">
    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Requiere volumetria'); ?>:</label>
            <div class="col-xs-8">
                Si
            </div>
        </div>
        <div class="form-group col-xs-12">
            <div class="col-xs-12">
                <?= $quote->volumetry_details ?>
            </div>
        </div>
    </div>
</div>

<h5><?= __('ESPECIFICACIONES TECNICAS') ?></h5>

<hr>

<div class="row">
    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Aislamiento térmico mínimo'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->technical_minimum_thermal_insulation ?>
            </div>
        </div>
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Aislamiento acústico mínimo'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->technical_minimum_acoustic_insulation ?>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Resistencia al fuego mínimno'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->technical_minimum_fire_resistance ?>
            </div>
        </div>
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Cargas especiales'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->technical_special_cagos ?>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Comentarios Generales'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->technical_comments ?>
            </div>
        </div>
    </div>
</div>