<div class="row">
    <div class="col-xs-12">
        <h5 style="margin:0px;"><?= __('GENERAL') ?></h5>
        <h6 class="instructions">Ingrese los datos generales del proyecto</h6>
    </div>
    <hr>
</div>



<div class="row">
    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Vendedor'); ?>:</label>
            <div class="col-xs-8 required-input">
                <?= $this->Form->input('seller_id', ['type'=>'select', 'label'=>false, 'div'=>false, 'multiple'=>false, 'class'=>'form-control select2', 'options'=>$sellers, 'value'=>($quote->seller_id)? $quote->seller_id : $this->UserAuth->getUserId()]); ?>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Nombre del Proyecto'); ?>:</label>
            <div class="col-xs-8 required-input">
                <?= $this->Form->input('project_name', [
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
            <label class="col-xs-4" ><?=  __('No. del Proyecto'); ?>:</label>
            <div class="col-xs-8 required-input">
                <?= $this->Form->input('project_number', [
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
            <label class="col-xs-4" ><?=  __('Revisión'); ?>:</label>
            <div class="col-xs-8">
                <?= ($quote->review)? '<a href="/quotes/view/'.$quote->quote_id.'">Cotización '.$quote->quote_id.' Rev. '.$quote->review.'</a>' : 'Original' ?>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    $(function(){
        $('.select2').select2();
    });

</script>