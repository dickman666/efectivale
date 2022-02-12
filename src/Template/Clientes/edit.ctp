    <?= $this->Form->create($cliente, ['url' => '/clientes/add','class' => 'form-horizontal']) ?>
    <div class="row">
        <div class="col-md-12" style="padding: 20px;">
            <div class="form-group">
              <label class="col-md-4 control-label"><?= __('Nombre') ?></label>
                <div class="col-md-6">
                    <?= $this->Form->input('nombre', [
                        'data-validation' => 'required',
                        'class'=>'form-control', 
                        'label'=>false, 
                        'div'=>false, 
                    ]); ?>
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label"><?= __('Apaterno') ?></label>
                <div class="col-md-6">
                    <?= $this->Form->input('apaterno', [
                        'data-validation' => 'required',
                        'class'=>'form-control', 
                        'label'=>false, 
                        'div'=>false, 
                    ]); ?>
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label"><?= __('Amaterno') ?></label>
                <div class="col-md-6">
                    <?= $this->Form->input('amaterno', [
                        'data-validation' => 'required',
                        'class'=>'form-control', 
                        'label'=>false, 
                        'div'=>false, 
                    ]); ?>
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label"><?= __('Telefono') ?></label>
                <div class="col-md-6">
                    <?= $this->Form->input('telefono', [
                        'data-validation' => 'required',
                        'class'=>'form-control', 
                        'label'=>false, 
                        'div'=>false, 
                    ]); ?>
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label"><?= __('Email') ?></label>
                <div class="col-md-6">
                    <?= $this->Form->input('email', [
                        'data-validation' => 'required',
                        'class'=>'form-control', 
                        'label'=>false, 
                        'div'=>false, 
                    ]); ?>
                </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label"><?= __('Visible') ?></label>
                <div class="col-md-6">
                    <?= $this->Form->input('visible', [
                        'data-validation' => 'required',
                        'class'=>'form-control', 
                        'label'=>false, 
                        'div'=>false, 
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>