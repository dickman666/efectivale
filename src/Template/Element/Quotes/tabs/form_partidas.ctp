
<table class="table table-hover dt-responsive dataTable no-footer dtr-inline w-AvenirLight" width="100%">
  <thead>
    <tr>
      <th>Partida</th>
      <th>Código</th>
      <th>Descripción</th>
      <th>Unidad</th>
      <th>Cantidad</th>
      <th>PU</th>
      <th>Desc.</th>
      <th>Total</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      if(isset($quote->quote_products) && $quote->quote_products){
          foreach ($quote->quote_products as $k => $product) { ?>
    <tr>
      <td><?= $k+1 ?></td>
      <td><?= $product->code_xm ?></td>
      <td><?= $product->article ?> <br> <?= $product->equivalencias['equivalencias_text'] ?></td>
      <td><?= $product->unit ?></td>
      <td align="right"><?= number_format($product->amount, 4) ?></td>
      <td align="right">$<?= number_format($product->totales['price_e'],2) ?> <?= $quote->commercial_terms_currency->code ?></td>
      <td align="right"><?= number_format($product->discount,2) ?>%</td>
      <td align="right">$<?= number_format($product->totales['importe'],2) ?> <?= $quote->commercial_terms_currency->code ?></td>
      <td>
        <?php 
          echo $this->Html->link(__('<i class="fa fa-trash-o" aria-hidden="true"></i>'), ['controller'=>'Quotes', 'action'=>'deleteProduct', $product->id, $template],[
                  'class'=>'ca-action', 
                  'escape'=>false,
                  'onclick'=>"return confirm(( ($product->complement_id == 0)? 'Confirma que quieres eliminar esta partida?' : 'Al eliminar esta partida no se respetará la garantía' ))"
              ]);
          
          if($product->product_id > 0 || $addPartidaManual){
              echo $this->Html->link(__('<i class="fa fa-pencil-square-o" aria-hidden="true"></i>'), '/quotes/editProduct/'.$product->id.'/'.$template,[
                  'class'=>'ca-action', 
                  'escape'=>false,
                  'data-remote'=>'false',
                  'data-target'=>'#modalURL',
                  'data-toggle'=>'modal',
                  'style'=>'margin-right:10px;'
              ] );
          }
          ?>
      </td>
    </tr>
    <?php }}else{?>
    <tr>
      <td colspan="9" align="center" style="color: #c6c6c6;">
        Cotización sin Partidas
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php  
  if($quote->id){
      if($quote->commercial_terms_currencies_id != 1 && $quote->commercial_terms_exchange_rate < 1){
          echo $this->Html->link(__('Agregar Partida'), '/quotes/'.$template.'/'.$quote->id.'/c-comerciales',[
              'class'=>'ca-add cbg', 
              'escape'=>false,
              'onclick'=>"return confirm('Para continuar es necesario proporcionar el tipo de cambio. ¿Confirma para actualizar este dato?');"
          ] );
      }else{
          echo $this->Html->link(__('Agregar Partida'), '/quotes/addProduct/'.$quote->id.'/'.$template,[
              'class'=>'ca-add cbg', 
              'escape'=>false,
              'data-remote'=>'false',
              'data-target'=>'#modalURL',
              'data-toggle'=>'modal'
          ] );
      }
  }else{
      echo $this->Html->link(__('Agregar Partida'), '#',[
              'class'=>'ca-add cbg', 
              'escape'=>false,
              'onclick'=>"return alert('Favor de guardar la cotización para agregar partidas');"
          ] );
  }
  
  ?>  