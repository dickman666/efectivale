
<div id="updateClientesIndex">
  <?= $this->Search->searchForm('Clientes', ['legend'=>false, 'updateDivId'=>'updateClientesIndex']); ?>
  <?= $this->element('Usermgmt.paginator', ['updateDivId'=>'updateClientesIndex']); ?>

  <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" data-page-length='50' id="clientesTable" >
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cliente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Estatus') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php                 $page = @$this->request->params['paging']['Clientes']['page'];
                $limit = @$this->request->params['paging']['Clientes']['perPage'];
                $i = ($page-1) * $limit;
            foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= $this->Number->format($cliente->id) ?></td>
                <td><?= h($cliente->nombre).' '.h($cliente->apaterno).' '.h($cliente->amaterno) ?></td>
                <td><?= h($cliente->telefono) ?></td>
                <td><?= h($cliente->email) ?></td>
                <td>
                <?php if($cliente->visible == 1){ ?>
                    Sin llamar
                <?php }else{ ?>
                    Notificado
                <?php } ?>
                </td>
                <td class="actions">
                <?php if($cliente->visible == 1){ ?>
                    <div class='btn-group'>
                        <button 
                                class='btn w-btnBorder578EBE btn-xs btn-outline dropdown-toggle dropdown-toggle btn-actions' data-toggle='dropdown' 
                                aria-expanded='false'>
                            <?= __('Action') ?>
                            <span class='caret'></span>
                        </button>
                        <ul class='dropdown-menu pull-right'>
                            <li>
                            <?php if($cliente->visible == 1){ ?>
                                <?= $this->Form->postLink(__('Llamado'), ['action' => 'notificado', $cliente->id], ['confirm' => __(' ¿Cliente ya fue llamado? ', $cliente->nombre)]) ?>
                            <?php } ?>


                            </li>
                        </ul>
                    </div>
                </td>
                <?php } ?>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php if(!empty($clientes)) { ?>
    <?= $this->element('simple_pagination');?>
  <?php } ?>
</div>
<script type="text/javascript">
  $(document).ready(function(){
        $('#clientesTable').DataTable({
            responsive: true,
            searching: false,
            bSort: false,
            bPaginate: false,
            oLanguage: window.oLanguage,
            columnDefs: [
                { responsivePriority: 1, targets: -1 },
            ]
        });
    });
</script>