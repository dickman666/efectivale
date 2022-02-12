<?= $this->Form->create(null, ['id' => 'select-modal', 'data-parsley-validate' => '', 'url' => '/customers/customers/select-franchise/']) ?>
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title"><?= __('Seleccionar Franquicia') ?></h3>
    </div>
    <div class="row">
        <div class="col-md-12" style="padding: 20px;">
            <div class="form-group">
                <div class="col-md-12">
                    <?= $this->Form->input('customer_id', [
                        'value' => $customerId,
                        'type' => 'hidden',
                    ]); ?>
                </div>
                <div class="col-md-12">
                    <?= $this->Form->input('franquicia_id', [
                        'label' => __('Franquicia'),
                        'options' => $franquicias,
                        'class' => 'form-control',
                        'div' => false,
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="col-md-6" style="text-align: left;">
            <button type="button" class="btn btn-default" data-dismiss="modal"><?= __('Cancel') ?></button>
        </div>
        <div class="col-md-6" style="text-align: right;">
            <?= $this->Form->button(__('Enviar'), ['id' => 'select-modal-submit', 'class' => 'btn btn-span btn-success-green']) ?>
        </div>
    </div>
<?= $this->Form->end() ?>
<script type="text/javascript">
    $('#select-modal').parsley().on('form:success', function() {
        $('#select-modal-submit').prop('disabled', 'disabled')
    });
</script>
