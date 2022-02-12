<div class="portlet light bordered">
<?php
        $this->Html->addCrumb(__('Listado de Clientes'), ['controller' => 'Clientes', 'action' => 'index']);
    ?>
        <?php $this->assign('title', __('Listado de Clientes')   );  ?>
    
    <div class="portlet-title">
        <div class="caption font-dark">
            <i class="icon-settings font-dark"></i>
            <span class="caption-subject bold uppercase">
            <?php $this->assign('header_title', __('Listado de Clientes')   );  ?>
            </span>

            <!--<?= ($this->UserAuth->HP('Clientes', 'add', false)) ? $this->Html->link(__('AGREGAR NUEVO', true), ['controller' => 'Clientes','action' => 'add'],['class'=>'btn btn-primary btn-agregar', 'escape'=>false, 'style'=>'float:right;'])
                                        : '<span style="display: block; position: relative; width: 30px; height: 42px;"></span>' /*FU-2*/
    ?>-->
        </div>
        <div class="tools"> </div>
    </div>
    <div class="portlet-body">

        <?php echo $this->element('Clientes/cliente');?>
    </div>
</div>

