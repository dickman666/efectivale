
<h1 class="page-title"><?= __('Acceso denegado') ?></h1>
<div class="portlet light bordered ">
  <div class="portlet-title">
    <div class="actions">
    </div>
  </div>
</div>
<div class="portlet-body">
    <?= __('Usted no tiene permisos para acceder a esta sección.'); ?> <?= $this->Html->link(__('Dashboard '), ['controller'=>'Users', 'action'=>'dashboard', 'plugin'=>'Usermgmt']); ?>
</div>
