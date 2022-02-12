<?php $this->Html->addCrumb(__('Alta Orden de Trabajo'), ['controller' => 'Customers', 'action' => 'addOrdenTrabajo', $customer_id, 'plugin' => 'Customers']); ?>


<div class="panel">
    <div class="panel-heading">
        <span class="panel-title">
            <?php echo __('Alta Orden de Trabajo'); ?>
        </span>
        <span class="panel-title-right">
            <?php echo $this->Html->link(__('Back', true), ['action'=>'index'], ['class'=>'ca-add ca-back']); ?>
        </span>
    </div>
    <div class="panel-body">
        <?= $this->element('Customers.Customers/form_orden_trabajo'); ?>
    </div>
</div>