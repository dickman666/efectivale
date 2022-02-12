<br>

<h5><?= __('GENERAL') ?></h5>

<hr>

<div class="row">
    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Vendedor'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->seller->first_name. ' ' .$quote->seller->last_name. ' ' .$quote->seller->clast_name ?>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Nombre del Proyecto'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->project_name ?>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('No. del Proyecto'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->project_number ?>
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