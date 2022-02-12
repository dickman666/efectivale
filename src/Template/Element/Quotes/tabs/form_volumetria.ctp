<div class="row">
    <div class="col-xs-12">
        <h5 style="margin:0px;"><?= __('DETALLES VOLUMETRICOS') ?></h5>
    <h6 class="instructions">Ingrese las notas para el volumetrista. Estas notas son son de uso interno y no serán visibles para el cliente</h6>
</div>
    <hr>
</div>


<div class="row">
    <div class="col-xs-12">
        <div class="form-group col-xs-12">
            <div class="col-xs-12">
                <?= $this->Form->input('volumetry_details', [
                            'data-validation' => 'required',
                            'class'=>'form-control', 
                            'label'=>false, 
                            'div'=>false, 
                        ]); ?>
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
                <?= $this->Form->input('technical_minimum_thermal_insulation', [
                            'data-validation' => 'required',
                            'class'=>'form-control', 
                            'label'=>false, 
                            'div'=>false, 
                        ]); ?>
            </div>
        </div>
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Aislamiento acústico mínimo'); ?>:</label>
            <div class="col-xs-8">
                <?= $this->Form->input('technical_minimum_acoustic_insulation', [
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
            <label class="col-xs-4" ><?=  __('Resistencia al fuego mínimno'); ?>:</label>
            <div class="col-xs-8">
                <?= $this->Form->input('technical_minimum_fire_resistance', ['type'=>'select', 'label'=>false, 'div'=>false, 'multiple'=>false, 'class'=>'form-control select2', 'options'=>['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', 'N/A'=>'N/A'], 'empty'=>'Selecciona una Resistencia']); ?>
            </div>
        </div>
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Cargas especiales'); ?>:</label>
            <div class="col-xs-8">
                <?= $this->Form->input('technical_special_cagos', [
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
            <label class="col-xs-4" ><?=  __('Comentarios Generales'); ?>:</label>
            <div class="col-xs-8">
                <?= $this->Form->input('technical_comments', [
                            'data-validation' => 'required',
                            'class'=>'form-control', 
                            'label'=>false, 
                            'div'=>false, 
                        ]); ?>
            </div>
        </div>
    </div>
</div>