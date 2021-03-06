<div class="usermgmtSearchForm">
<?php
use Cake\Utility\Inflector;
use Cake\Routing\Router;
use Cake\Utility\Security;

$isAjax = true;
if(isset($options['useAjax']) && !$options['useAjax']) {
        $isAjax = false;
}
$clear = true;
if(isset($options['clear']) && !$options['clear']) {
        $clear = false;
}
$targetUrl = $this->request->here;
$page_limit = '';
if(!empty($this->request->params['paging'])) {
  $modelName = str_replace(' ', '', $modelName);
        $page_limit = $this->request->params['paging'][$modelName]['perPage'];
}
if($isAjax) {?>
        <script type="text/javascript">
                //&lt;![CDATA[
                $(document).ready(function () {
                        $("#<?php echo $modelName;?>Usermgmt").bind("submit", function (event) {
                                $.ajax({
                                        async:true,
                                        beforeSend:function (XMLHttpRequest) {
                                                $("#<?php echo $options['updateDivId'];?>").html('<div class="loadning-indicator"></div>');
                                        },
                                        data:$("#<?php echo $modelName;?>Usermgmt").serialize(),
                                        dataType:"html",
                                        success:function (data, textStatus) {
                                                $("#<?php echo $options['updateDivId'];?>").html(data);
                                                $('#searchClearId').val(0);
                                                if(window.history.pushState) {
                                                        window.history.pushState({},"", "<?php echo $targetUrl;?>");
                                                }
                                        },
                                        type:"POST",
                                        url:"<?php echo $targetUrl;?>"
                                });
                                return false;
                        });
                });
                //]]&gt;
        </script>
<?php }?>
<?php
        echo $this->Form->create(false, ['url'=>'/'.$this->request->url, 'id'=>$modelName.'Usermgmt', 'role'=>'form']);
        if(!empty($options['legend'])) {
                echo "<div class='searchTitle'>".$options['legend']."</div>";
        }
        echo $this->Form->input('Usermgmt.searchFormId', ['type'=>'hidden', 'value'=>$modelName]);

        if(isset($viewSearchParams)) {
                $jq = "<script type='text/javascript'>";
                foreach($viewSearchParams as $field) {
                        if(!$field['options']['adminOnly'] || ($field['options']['adminOnly'] && $this->UserAuth->isAdmin())) {
                                $search_options = $field['options'];
                                $input_options = $search_options['inputOptions'];
                                $input_options['label'] = false;
                                $input_options['autoComplete'] = "off";
                                $input_options['type'] = $search_options['type'];
                                $input_options['value'] = $search_options['value'];
                                $input_options['default'] = $search_options['default'];
                                if($search_options['type'] != 'text') {
                                        $input_options['options'] = $search_options['options'];
                                }
                                if($search_options['type'] == 'checkbox' && isset($search_options['checked'])) {
                                        unset($input_options['options']);
                                        $input_options['checked'] = $search_options['checked'];
                                }
                                $input_options['class'] = (isset($input_options['class'])) ? $input_options['class']." form-control" : "form-control";

                                echo "<div class='searchBlock'>";
                                        if($search_options['label']) {
                                                echo "<div class='searchLabel'>".$this->Form->label($search_options['label'])."</div>";
                                        }
                                        echo "<div class='searchField'>";
                                                if(!empty($search_options['tagline'])) {
                                                        echo "<span class='searchTagline'>".$search_options['tagline']."</span>";
                                                }
                                                if($search_options['labelImage']) {
                                                        echo "<span class='searchLabelImage'>".$this->Html->image(SITE_URL.$search_options['labelImage'], ['title'=>$search_options['labelImageTitle']])."</span>";
                                                }
                                                echo $this->Form->input($field['name'], $input_options);
                                                $loadingId = uniqid();
                                                if($search_options['type'] == 'text' && ($search_options['condition'] != 'multiple' || !empty($search_options['searchFunc']))) {
                                                        echo "<span id='".$loadingId."' class='searchLoadingImage'>".$this->Html->image(SITE_URL.'usermgmt/img/loading-circle.gif')."</span>";
                                                }
                                        echo "</div>";
                                echo "</div>";
                                if($search_options['type'] == 'text' && ($search_options['condition'] != 'multiple' || !empty($search_options['searchFunc']))) {
                                        list($fieldModel, $fieldName) = explode('.', $field['name']);
                                        $fieldId = mb_strtolower(Inflector::slug($field['name'], '-'));
                                        if(!empty($search_options['searchFunc'])) {
                                                $plugin = false;
                                                if(!empty($search_options['searchFunc']['plugin'])) {
                                                        $plugin = $search_options['searchFunc']['plugin'];
                                                }
                                                $url = Router::url(['controller'=>$search_options['searchFunc']['controller'], 'action'=>$search_options['searchFunc']['function'], 'plugin'=>$plugin]);
                                        } else {
                                                $fieldNameEncrypt = base64_encode($fieldName.'.'.Security::salt());
                                                $url = SITE_URL."usermgmt/Autocomplete/fetch/".$fieldModel."/".$fieldNameEncrypt;
                                        }
                                        $jq .=  "$(function() {
                                                                if($.isFunction($.fn.typeahead)) {
                                                                        $('#".$fieldId."').typeahead({
                                                                                ajax: {
                                                                                        url: '".$url."',
                                                                                        timeout: 500,
                                                                                        triggerLength: 1,
                                                                                        method: 'get',
                                                                                        preDispatch: function (query) {
                                                                                                $('#".$loadingId."').css('display', '');
                                                                                                return {
                                                                                                        term: query
                                                                                                }
                                                                                        },
                                                                                        preProcess: function (data) {
                                                                                                $('#".$loadingId."').hide();
                                                                                                return data;
                                                                                        }
                                                                                }
                                                                        });
                                                                }
                                                        });";
                                }
                        }
                }
                $jq .="$(function() {
                                        $('#searchButtonId').click(function(){
                                                $('#searchClearId').val(1);
                                                $('#searchSubmitId').trigger('click');
                                        });
                                        $('#searchPageLimit').change(function() {
                                                $('#searchSubmitId').trigger('click');
                                        });
                                });";
                $jq .="</script>";
                echo $jq;
        }
        echo "<div class='searchSubmit'>";
                echo "<div title='Filtrar' data-placement='top' class='helper-tooltip searchBtn'>".$this->Form->submit(__('Search'), ['id'=>'searchSubmitId', 'class'=>'btn btn-primary'])."</div>";
                if($clear) {
                        echo "<div title='Borrar Filtros' data-placement='top' class='helper-tooltip searchBtn'>".$this->Form->hidden('search_clear', ['id'=>'searchClearId', 'value'=>0])."<button type='button' id='searchButtonId' class='btn btn-danger'>".__('Clear')."</button></div>";
                }
                if(isset($this->request->params['paging'])) {
                        echo "<div title='N??mero de registros en la lista' data-placement='top' class='helper-tooltip searchBtn'>".$this->Form->input('page_limit', ['label'=>false, 'type'=>'select', 'options'=>[''=>'Limit', '10'=>'10', '20'=>'20', '30'=>'30', '40'=>'40', '50'=>'50', '60'=>'60', '70'=>'70', '80'=>'80', '90'=>'90', '100'=>'100', '200'=>'200', '500'=>'500', '1000'=>'1000'], 'default'=>$page_limit, 'autocomplete'=>'off', 'id'=>'searchPageLimit', 'class'=>'form-control select-filtro'])."</div>";
                }
        echo "</div>";
        echo "<div style='clear:both'></div>";
        $this->Form->unlockField('search_clear');
        echo $this->Form->end();
?>
</div>
