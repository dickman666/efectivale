<style type="text/css">
  .box{
  padding-left: 30px;
  padding-right: 30px;
  }
  .main, td{
  font-family: dejavusanscondensed;
  font-size: 11px;
  color: #000000;
  }
  table{
  border-collapse: collapse;
  }
  td{
  padding: 2px;
  white-space: nowrap;
  }
  .table1-td{
  padding: 8px 10px;
  width:50%;
  border-bottom:1px solid #cccccc;
  }
  .table2-td{
  padding: 8px 10px;
  border-bottom:1px solid #ffffff;
  }
  .table3-td{
  padding: 8px 10px;
  background: #e5e5e5;
  border-bottom:1px solid #ffffff;
  }
  .table4-td{
  padding: 8px 10px;
  background: #757575;
  color: white;
  }
  .td-simple{
  padding: 8px 10px;
  }
  h3{
  text-align: center;
  }
  p{
  margin-bottom: 5px;
  white-space: nowrap;
  }
</style>


<page backtop="35mm" backbottom="35mm">
    <page_header>
        <img src="<?=WWW_ROOT?>/img/hebel_header.png" style="width:100%;">
    </page_header>

    <page_footer>
      <img src="<?=WWW_ROOT?>/img/hebel_footer.png" style="width:100%;">
    </page_footer>

    <h3>COTIZACION</h3>
    <table style="width:100%;">
      <tbody>
        <tr>
          <td style="width:60%;">
            <table>
              <tbody>
                <tr>
                  <td class="table1-td">
                    PROYECTO
                  </td>
                  <td class="table1-td">
                    CLIENTE
                  </td>
                </tr>
                <tr>
                  <td class="table1-td">
                    <?= $quote->project_number ?> - <?= $quote->project_name ?>
                  </td>
                  <td class="table1-td">
                    <?= $quote->customer->business_name ?>
                  </td>
                </tr>
                <tr>
                  <td class="table1-td">
                    CONTACTO
                  </td>
                  <td class="table1-td">
                    FECHA
                  </td>
                </tr>
                <tr>
                  <td class="table1-td">
                    <?= $quote->customer->contact_name ?> 
                  </td>
                  <td class="table1-td">
                    <?= $quote->created->format('d/m/Y') ?>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
          <td style="width:40%;">
            <table>
              <tbody>
                <tr>
                  <td class="table2-td" colspan="2" style="width:50%;">
                    PEDIDO TOTAL (<?= ($quote->commercial_terms_currency)? $quote->commercial_terms_currency->code : '' ?>)
                  </td>
                  <td class="table2-td" align="right" style="width:50%;">
                    $<?= number_format($quote->totales['total'],2) ?>
                  </td>
                </tr>
                <tr>
                  <td class="table3-td" style="width:25%;">
                    Pago
                  </td>
                  <td class="table3-td" style="width:25%;">
                    <?= number_format($quote->commercial_terms_advance_percentage, 2) ?>%
                  </td>
                  <td class="table3-td" align="right" style="width:50%;">
                    $<?= number_format($quote->totales['anticipo'], 2) ?>
                  </td>
                </tr>
                <tr>
                  <td class="table3-td">
                    Resto
                  </td>
                  <td class="table3-td">
                    Contado
                  </td>
                  <td class="table3-td" align="right">
                    $<?= number_format($quote->totales['pendiente'], 2) ?>
                  </td>
                </tr>
                <tr>
                  <td class="table3-td">
                    Entrega
                  </td>
                  <td class="table3-td" colspan="2">
                    <?= ($quote->delivery_type)? $quote->delivery_type->name : '' ?>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
    <table style="width:100%; margin-top:20px;">
      <tbody>
        <tr>
          <td class="table4-td" style="width:10%;">
            PARTIDA
          </td>
          <td class="table4-td" style="width:10%;">
            CODIGO
          </td>
          <td class="table4-td" style="width:<?= ($quote->commercial_terms_view_discounts)? '25%' : '35%'; ?>;">
            DESCRIPCIÓN
          </td>
          <td class="table4-td" style="width:10%;">
            UNIDAD
          </td>
          <td class="table4-td" style="width:10%;">
            CANTIDAD
          </td>
          <td class="table4-td" style="width:10%;">
            P.U.
          </td>
          <?php if($quote->commercial_terms_view_discounts){ ?>
            <td class="table4-td" style="width:10%;">
              DESC
            </td>
          <?php } ?>
          <td class="table4-td" style="width:15%;">
            TOTAL
          </td>
        </tr>
        <?php $count = 1; foreach ($quote->quote_products as $k => $product) { ?>
          <tr>
            <td class="td-simple" style="width:10%;">
              <?= $count++; ?>
            </td>
            <td class="td-simple" style="width:10%;">
              <?= $product->code_xm ?>
            </td>
            <td class="td-simple" style="width:<?= ($quote->commercial_terms_view_discounts)? '25%' : '35%'; ?>;">
              <?php 
                if($product->product){
                    echo ($product->product->products_category)? '<b>'.$product->product->products_category->name.'</b><br>' : '';
                }else{
                    echo '<b>Partida Manual</b><br>';
                }
                ?>
              <?= $product->article ?> <br> <?= $product->equivalencias['equivalencias_text'] ?>
            </td>
            <td class="td-simple" style="width:10%;">
              <?= $product->unit ?>
            </td>
            <td class="td-simple" align="right" style="width:10%;">
              <?= number_format($product->amount, 2) ?>
            </td>
            <td class="td-simple" align="right" style="width:10%;">
              $<?= number_format($product->totales['price_e'],2) ?>
            </td>
            <?php if($quote->commercial_terms_view_discounts){ ?>
              <td class="td-simple" align="right" style="width:10%;">
                <?= number_format($product->discount,2) ?>%
              </td>
            <?php } ?>
            <td class="td-simple" align="right" style="width:15%;">
              $<?= number_format($product->totales['importe'],2) ?>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <table style="width:100%; margin-top:20px;">
      <tbody>
        <tr>
          <td class="td-simple" style="width:60%;">
          </td>
          <td class="td-simple" style="width:20%;" align="right">
            SUBTOTAL
          </td>
          <td class="td-simple" style="width:20%;" align="right">
            $<?= number_format($quote->totales['subtotal'],2) ?>
          </td>
        </tr>
        <tr>
          <td class="td-simple" style="width:60%;">
          </td>
          <td class="td-simple" align="right" style="width:20%;">
            16% IVA
          </td>
          <td class="td-simple" style="width:20%;" align="right">
            $<?= number_format($quote->totales['iva'],2) ?>
          </td>
        </tr>
        <tr>
          <td class="td-simple" style="width:60%;">
          </td>
          <td class="td-simple" align="right" style="width:20%;">
            4% RET. PARCIAL
          </td>
          <td class="td-simple" align="right" style="width:20%;">
            $<?= number_format($quote->totales['retencion'],2) ?>
          </td>
        </tr>
        <tr>
          <td class="td-simple" style="width:60%;">
          </td>
          <td class="table4-td" style="background:#a7a7a7; width:20%;" align="right">
            TOTAL (<?= ($quote->commercial_terms_currency)? $quote->commercial_terms_currency->code : '' ?>)
          </td>
          <td class="table4-td" align="right" style="width:20%;">
            $<?= number_format($quote->totales['total'],2) ?>
          </td>
        </tr>
      </tbody>
    </table>
    <table style="width:100%; margin-top:30px;">
      <tr>
        <td style="width:100%; color:#f06200; font-weight:bold; font-size:9px;">
          * LAS TARIMAS Y BARROTES SON PROPIEDAD DE XELLA MEXICANA, S.A. DE C.V.
        </td>
      </tr>
    </table>

    <table style="width:100%; margin-top:30px;">
      <tbody>
        <tr>
          <td style="color:#f06200; width:100%;">
            <h4>NOTAS</h4>
          </td>
        </tr>
        <tr>
          <td style="background:#ececec; padding:5px 10px; width:100%;">
            Volumetria Preliminar Variable.
          </td>
        </tr>
        <tr>
          <td style="background:#ececec; padding:5px 10px; width:100%;">
            Se requerira servicio de Ingenieria. *
          </td>
        </tr>
        
        <tr>
          <td style="background:#ececec; padding:5px 10px; width:100%;">
            El material suministrado puede contener un 3 a 5% de merma por daños durante su transporte y manejo. 
          </td>
        </tr>
        <tr>
          <td style="background:#ececec; padding:5px 10px; width:100%;">
            Este material es re-utilizable eliminando mediante corte la parte con daño o resanando esa zona.
          </td>
        </tr>
        <tr>
          <td style="background:#ececec; padding:5px 10px; width:100%;">
            La informacion de precios de fletes mostrada es unicamente como referencia; estos precios NO deben de asumirse como fijos ya que pueden variar al momento de solicitar el servicio. El precio que se aplicara al flete es el que rija en el mercado el dia de la operación de transporte, por lo que puede variar durante el suministro de materiales de un proyecto. Los precios de fletes mostrados no estan bajo el control y manejo de Xella Mexicana, por lo que de existir alguna diferencia entre el precio de referencia indicado y el precio real del mismo al momento del transporte, esta debera ser absorbida por el cliente Xella Mexicana no absorbera ninguna diferencia.
          </td>
        </tr>
        <tr>
          <td style="background:#ececec; padding:5px 10px; width:100%;">
            Material L.A.B. Obra.
          </td>
        </tr>
        <tr>
          <td style="background:#ececec; padding:5px 10px; width:100%;">
            Se consideró altura de muros según planos.
          </td>
        </tr>
        <tr>
          <td style="background:#ececec; padding:5px 10px; width:100%;">
            Se requiere pago anticipado del 100% antes del embarque
          </td>
        </tr>
        <tr>
          <td style="background:#ececec; padding:5px 10px; width:100%;">
            Solamente se venden tarimas completas
          </td>
        </tr>
        <tr>
          <td style="background:#ececec; padding:5px 10px; width:100%;">
            Consultar con el asesor comercial para conocer la capacidad de carga adecuada a su proyecto.
          </td>
        </tr>
        <tr>
          <td style="background:#ececec; padding:5px 10px; width:100%;">
            Se recomienda el uso de acabados Hebel® (no inlcuidos en cotización)
          </td>
        </tr>
        <tr>
          <td style="background:#ececec; padding:5px 10px; width:100%;">
            Las tarimas y barrotes son propiedad de Xella Mexicana y se retirarán de la obra por personal de Xella Mexicana.
          </td>
        </tr>
        <tr>
          <td style="background:#ececec; padding:5px 10px; width:100%;">
            Precios sujetos cambio de acuerdo a precio vigente en el momento de la compra.
          </td>
        </tr>
        <tr>
          <td style="background:#ececec; padding:5px 10px; width:100%;">
            Los Sistemas Hebel® deben ser instalados con los adhesivos y accesorios recomendados por Hebel® para cada Sistema Constructivo. Hebel® no se hará responsable de mal funcionamiento por el uso de adhesivos y/o accesorios no recomendados. En estos casos no aplica la garantía de Hebel®.
          </td>
        </tr>
        <tr>
          <td style="background:#ececec; padding:5px 10px; width:100%;">
            La descarga del material es por cuenta del cliente, excepto en Monterrey y área metropolitana.
          </td>
        </tr>
        <tr>
          <td style="background:#ececec; padding:5px 10px; width:100%;">
            El tiempo estimado para descarga de material es de 4 hrs.  En caso de que la plataforma no se termine de descargar el día que llega a la obra genera un costo aprox. de $ 3,000 por día.
          </td>
        </tr>

        <tr>
          <td style="background:#ececec; padding:5px 10px; width:100%; color:#f06200; font-weight:bold; font-size:9px;">
            <br>* SOLO DEBE CONSIDERARSE EN CASO DE PANEL DE MURO Y LOSA, Y MAMPOSTERIA REFORZADA
          </td>
        </tr>

        <!-- <tr>
          <td style="background:#ececec; padding:5px 10px; width:100%; color:#f06200; font-weight:bold; font-size:9px;">
            <br>** EXCEPTO EN MONTERREY Y ÁREA METROPOLITANA (CONSULTAR CON EJECUTIVO DE VENTAS)
          </td>
        </tr> -->

      </tbody>
    </table>
    

    <table style="width:100%; margin-top:30px;">
      <tr>
        <td style="width:100%; line-height: 1.6;">
          <strong>Atentamente</strong><br><br>
          <?= $quote->seller->first_name.' '.$quote->seller->last_name.' '.$quote->seller->clast_name.'<br>' ?>
          Ejecutivo Comercial<br>
          <?= $quote->seller->email.'<br>' ?>
          <?= $quote->seller->phone.'<br>' ?>
        </td>
      </tr>
    </table>
    
</page>

