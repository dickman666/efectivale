
<h1 class="page-title"><?= __('Órdenes de Trabajo') ?></h1>
<div class="portlet light bordered ">
  <div class="portlet-title">
    <div class="actions">
        <div class="col-lg-6">            
        </div>
        <div class="col-lg-6">
            <div title="Agregar Nueva Orden de Trabajo" class="helper-tooltip" data-placement="bottom">                
                    <?= $this->Html->link(
                    __('<i class="fa fa-plus-circle"></i> Agregar Nueva Orden de Trabajo'),
                    '/customers/customers/addOrdenTrabajo/%20/'.$customer->id,
                    ['class'=>'ca-add',
                    'escape'=>false]
                    ); ?>                
            </div>
        </div>
    </div>
  </div>
</div>



<div class="table-reponsive customers" style="margin-top:10px;">
    <table id="ordenesTable" class="table table-striped table-bordered table-condensed table-hover" width="100%" data-page-length='20'>
        
        <thead>
            <tr>
                <th class="text-center"><?= __('Número de OT') ?></th>
                <th class="text-center"><?= __('Tipo de OT') ?></th>
                <th class="text-center"><?= __('Tipo de Operación') ?></th>
                <th class="text-center"><?=  __('Estatus') ?></th>
                <th class="text-center"><?=  __('Creada Por') ?></th>
                <th class="text-center"><?= __('Fecha de Creación') ?></th>
                <th class="text-center"><?= __('Fecha Tentativa') ?></th>
                <th class="text-center"><?= __('Hora Tentativa') ?></th>
                <th class="text-center"><?= __('Fecha de Inicio') ?></th>
                <th class="text-center"><?= __('Hora de Inicio') ?></th>
                <th class="text-center"><?= __('Fecha de Fin') ?></th>
                <th class="text-center"><?= __('Hora de Fin') ?></th>
                <th class="text-center"><?=  __('Técnico Atendió OT') ?></th>
                <th class="text-center"><?= __('Contacto Autoriza') ?></th>
                <th class="text-center"><?= __('Ubicación ') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customer->ordenes_trabajos as $orden): ?>
            <tr>
                <td><?= $orden->numero_ot ?></td>
                <td><?= $orden->tipo_orden_trabajo->nombre  ?></td>
                <td><?= $orden->tipo_orden_trabajo_operacione->nombre ?></td>
                <td><?= $orden->orden_trabajo_status->status ?></td>
                <td><?= $orden->user->first_name.' '.$orden->user->last_name.' '.$orden->user->middle_name ?></td>
                <td><?= $orden->created->format('d/m/Y') ?></td>
                <td><?= ($orden->equipo_tecnico_fecha_tentativa)? $orden->equipo_tecnico_fecha_tentativa->format('d/m/Y') : '' ?></td>
                <td><?= ($orden->equipo_tecnico_hora_tentativa)? $orden->equipo_tecnico_hora_tentativa->format('H:i') : '' ?></td>
                

                <td><?= ($orden->equipo_tecnico_fecha_inicio)? $orden->equipo_tecnico_fecha_inicio->format('d/m/Y') : '' ?></td>
                <td><?= ($orden->equipo_tecnico_hora_inicio)? $orden->equipo_tecnico_hora_inicio->format('H:i') : '' ?></td>

                <td><?= ($orden->equipo_tecnico_fecha_fin)? $orden->equipo_tecnico_fecha_fin->format('d/m/Y') : '' ?></td>
                <td><?= ($orden->equipo_tecnico_hora_fin)? $orden->equipo_tecnico_hora_fin->format('H:i') : '' ?></td>

                <td><?= $orden->tecnico->first_name.' '.$orden->tecnico->last_name.' '.$orden->tecnico->middle_name ?></td>
                <td><?= $orden->autoriza_contact->first_name.' '.$orden->autoriza_contact->last_name.' '.$orden->autoriza_contact->middle_name ?></td>
                <td><?= $orden->ubicacion->nombre ?></td>
                <td></td>         
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $('#ordenesTable').dataTable({ 
        searching: false,
        responsive: true,
        bSort: false,
        bPaginate: false,
        columnDefs: [
            { responsivePriority: 1, targets: 0 },
            { responsivePriority: 2, targets: -1 },
            { targets: 6, orderable: false }
        ]
    }); 
});
</script>

