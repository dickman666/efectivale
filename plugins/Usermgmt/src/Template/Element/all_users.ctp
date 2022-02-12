

<div id="updateUsersIndex">
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-dark">
            <i class="icon-settings font-dark"></i>
            <span class="caption-subject bold uppercase">Listado de Usuarios</span>
        </div>
        <div class="tools"> </div>
    </div>
    <div class="portlet-body">

  <?= $this->Search->searchForm('Users', ['legend'=>false, 'updateDivId'=>'updateUsersIndex']); ?>
  <?= $this->element('Usermgmt.paginator', ['updateDivId'=>'updateUsersIndex']); ?>
  <table class="table table-striped table-bordered table-hover dt-responsive" id="UserTable" width="100%" data-page-length='50' >
    <thead>
      <tr>
        <th scope="col" class="sorting-link" style="min-width:150px;"><?= $this->Paginator->sort('first_name', __('Name')); ?></th>
        <th scope="col" class="sorting-link" style="min-width:150px;"><?= $this->Paginator->sort('email', __('Email')); ?></th>
        <th scope="col" class="sorting-link" style="min-width:150px;"><?= $this->Paginator->sort('user_group_id', __('Perfil')); ?></th>
        <th scope="col" class="sorting-link" style="min-width:150px;"><?= $this->Paginator->sort('user_status_id', __('Status')); ?></th>
        <th style="min-width:80px;"><?= __('Action'); ?></th>
      </tr>
    </thead>
    <tbody>
      <?php     if(!empty($users)) {
        $page = @$this->request->params['paging']['Users']['page'];
        $limit = @$this->request->params['paging']['Users']['perPage'];
        $i = ($page-1) * $limit;
        foreach($users as $row) {
                $i++;

                echo "<tr>";
                        echo "<td>".h($row['first_name']).' '.h($row['last_name']).' '.h($row['clast_name'])."</td>";
                        echo "<td>".h($row['email'])."</td>";
                        echo "<td>".$row['user_group_name']."</td>";
                        echo "<td>";
                                echo "<span class='index-status' style='color:".$row['user_status']['color'].";'>".$row['user_status']['name']."</span>";
                        echo"</td>";

                        echo "<td>";
                                        echo "<div class='btn-group'>";
                                        //btn btn-danger dropdown-toggle btn-actions
                                                echo "<button class='btn red btn-xs dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>".__('Action')." <span class='caret'></span></button>";
                                                echo "<ul class='dropdown-menu pull-right'>";
        
        
                                                        if(!$row['active']) {
                                                          if($this->UserAuth->isSuper()/*$this->UserAuth->HP('Users', 'setActive', 'Usermgmt')*/) { // FU-2
                                                            echo "<li>".$this->Form->postLink(__('Permitir Acceso'), ['controller'=>'Users', 'action'=>'setActive', $row['id'], 'page'=>$page], ['escape'=>false, 'confirm'=>__('Permitir acceso a plataforma?')])."</li>";
                                                        }      
                                                        }

        
                                                echo "</ul>";
                                echo "</div>";
                        echo "</td>";
                echo "</tr>";
        }
        } ?>
    </tbody>
  </table>

  <?php if(!empty($users)) { ?>
    <?= $this->element('simple_pagination');?>
  <?php } ?>
  
</div></div></div>
<script type="text/javascript">
  $(document).ready(function(){
        $('#UserTable').DataTable({
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
