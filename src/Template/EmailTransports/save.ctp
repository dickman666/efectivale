<style type="text/css">
    .form-horizontal .control-label{
        text-align: left;
    }
</style>

<?php $this->Html->addCrumb(
    __($page),
    [
        'controller' => 'BillingGroups',
        'action' => $this->request->action . '/' . $emailTransport->id,
        'plugin' => false
    ]
); ?>

<?= $this->Form->create($emailTransport, [
    'enctype' => 'multipart/form-data',
    'id' => 'save-item-form',
    'class' => 'form-horizontal',
    'autocomplete' => 'rnd-str',
    'data-parsley-validate',
]) ?>

    <?= $this->Form->input('id', [
        'value' => $emailTransport->id,
        'type' => 'hidden',
    ]); ?>

    <div class="row padding-left">
        <div class="col-xs-5 w-title" style="text-align: right;">
            <h1 class="page-title"><?= __($page) ?></h1>
        </div>
        <div class="col-xs-5 w-title" style="text-align: right;">
            <a class="btn btn-default" style="float: right;margin-top: 11px;" href="/billing-groups">
                Regresar
            </a>
        </div>
        <div class="col-xs-1 w-title" style="text-align: right;">
            <button id="submit-button" class="btn btn-submit" style="float: right;margin-top: 11px;" type="submit">Guardar</button>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-7" style="padding: 20px;">

            <div class="form-group">
                <label class="col-md-4 control-label"><?= __('Servidor') ?></label>
                <div class="col-md-5 ca-form">
                    <?= $this->Form->input('host', [
                        'class' => 'form-control',
                        'required' => 'required',
                        'label' => false,
                        'type' => 'text',
                        'div' => false,
                    ]); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label"><?= __('Puerto') ?></label>
                <div class="col-md-5 ca-form">
                    <?= $this->Form->input('port', [
                        'data-parsley-type' => 'number',
                        'class' => 'form-control',
                        'required' => 'required',
                        'label' => false,
                        'type' => 'text',
                        'div' => false,
                    ]); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label"><?= __('Usuario') ?></label>
                <div class="col-md-5 ca-form">
                    <?= $this->Form->input('username', [
                        'data-parsley-type' => 'email',
                        'required' => 'required',
                        'class' => 'form-control',
                        'label' => false,
                        'type' => 'text',
                        'div' => false,
                    ]); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label"><?= __('Contraseña') ?></label>
                <div class="col-md-5 ca-form">
                    <?= $this->Form->input('password', [
                        'required' => 'required',
                        'class' => 'form-control',
                        'type' => 'password',
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div>

            <!--div class="form-group">
                <label class="col-md-4 control-label"><?= __('TLS') ?></label>
                <div class="col-md-5 ca-form">
                    <div class="onoffswitch">
                        <input value="0" type="hidden" name="tls">
                        <?php $checked = $emailTransport->tls == 1 ? 'checked' : ''; ?>
                        <input value="1" type="checkbox" name="tls" class="onoffswitch-checkbox" id="tls" <?= $checked ?>>
                        <label id="label-tls" class="onoffswitch-label" for="tls"></label>
                    </div>
                </div>
            </div-->

        </div>
    </div>

<?= $this->Form->end() ?>

<script type="text/javascript">
    $(function(){
        $('#save-item-form').parsley().on('form:success', function() {
            $('#submit-button').prop('disabled', 'disabled');
        });
    });
</script>
