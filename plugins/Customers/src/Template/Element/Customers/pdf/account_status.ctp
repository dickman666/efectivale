<style type="text/css">
    .box{
        padding-left: 30px;
        padding-right: 30px;
    }
    .main{
        font-family: 'DejaVuSans';
        font-size: 12px;
    }
    .grey{
        color: #7b828d;
    }
    .blue{
        color: #00b0f0;
    }
    .white-txt{
        color: white;
    }
    .light-grey-bg{
        background-color: #f2f2f2;
    }
    .grey-bg{
        background-color: silver;
    }
    .blue-bg{
        background-color: #30cad6;
    }
    .site-logo{
        width: 130px;
    }
    .separator{
        width: 100% !important;
        border-top: 2px solid #333;
    }
    .ligth{
        font-weight: lighter;
    }
    .bold{
        font-weight: bold;
    }
    .centered{
        text-align: center;
    }
    .big-font{
        font-size: 24px !important;
    }
    .mid-font{
        font-size: 12px !important;
    }
    .fullwidth{
        width: 100%;
    }
    .ralign{
        text-align: right;
    }
    .tpad{
        padding-top: 20px;
    }
    table thead td {
        font-weight: bold;
    }
</style>

<div class="main box">

    <table class="main fullwidth" cellspacing="0" border="0">
        <tbody>
            <tr>
                <td class="centered" style="width:20%;">
                    <img src="<?=WWW_ROOT?>/assets/layouts/layout/img/purifik-logo.png" class="site-logo">
                </td>
                <td class="centered" style="width:30%;">
                    <?= $franquicia->title ?> <br>
                    <?= $franquicia->street ?> #<?= $franquicia->num_ext_fiscal ?> <?= $franquicia->number ? '(Int. #' . $franquicia->number . ')' : '' ?> <br>
                    <?= $franquicia->col_fiscal ?> <br>
                    <?= $franquicia->municipality ?>, <?= $franquicia->state ?> <br>
                    <?= $franquicia->country ?>, <?= $franquicia->postal_code ?> <br>
                    <?= $franquicia->tel_2 ?> <br>
                    <!-- SISTEMAS PURIFIKA SA DE CV <br> -->
                    <!-- Norteamerica no. 143 <br> -->
                    <!-- Fracc. Unidad Nacional II, <br> -->
                    <!-- Sta Catarina, N.L., Mex., 66367 <br> -->
                    <!-- Tel (81) 8388 0800 <br> -->
                    www.purifika.com <br>
                </td>
                <td class="centered" style="width:50%;"></td>
            </tr>
        </tbody>
    </table>


    <br>
    <br>


    <table class="main fullwidth" cellspacing="0" border="0">
        <tbody>
            <tr class="blue-bg">
                <td class="centered">
                    <h2 class="white-txt">ESTADO DE CUENTA CLIENTE</h2>
                </td>
            </tr>
        </tbody>
    </table>

    <table class="main fullwidth" cellspacing="0" border="0">
        <tbody>
            <tr>
                <td class="centered" style="width:40%;">
                    <table class="main fullwidth" cellspacing="0" border="0">
                        <tbody>
                            <tr>
                                <td style="width:40%;">
                                    <b>Fecha:</b>
                                </td>
                                <td style="width:60%;">
                                    <span><?= date('d/m/Y') ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:40%;">
                                    <b>Cliente</b>
                                </td>
                                <td style="width:60%;">
                                    <span><?= $customer->business_name ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:40%;">
                                    <b>Saldo Total:</b>
                                </td>
                                <td style="width:60%;">
                                    <span>$<?= number_format($total, 2) ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:40%;">
                                    <b>Saldo Vencido:</b>
                                </td>
                                <td style="width:60%;">
                                    <span>$<?= number_format(0, 2) ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:40%;">
                                    <span>01 a 15 Días</span>
                                </td>
                                <td style="width:60%;">
                                    <span>$<?= number_format(0, 2) ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:40%;">
                                    <span>16 a 30 Días</span>
                                </td>
                                <td style="width:60%;">
                                    <span>$<?= number_format(0, 2) ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:40%;">
                                    <span>Más de 31 Días</span>
                                </td>
                                <td style="width:60%;">
                                    <span>$<?= number_format(0, 2) ?></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class="centered" style="width:60%;">
                    <h2>AVISO DE SUSPENSIÓN DE SERVICIO</h2>
                    <p>Favor de liquidar su saldo vencido a la brevedad</p>
                </td>
            </tr>
        </tbody>
    </table>

<br>
<br>

    <table class="main fullwidth" cellspacing="0" border="0">
        <tbody>
            <tr class="blue-bg">
                <td class="centered">
                    <h2 class="white-txt">LISTADO DE FACTURACIÓN</h2>
                </td>
            </tr>
        </tbody>
    </table>

    <table class="main fullwidth" cellspacing="0" border="0">
        <thead>
            <tr>
                <td>OC</td>
                <td>Grupo</td>
                <td>Fecha Factura</td>
                <td>Fecha Vencimiento</td>
                <td>No. Factura</td>
                <td>Importe</td>
                <td>Saldo</td>
            </tr>
        </thead>
        <tbody>
            <?php if ($accountStatusList): ?>
                <?php foreach ($accountStatusList as $accountStatus): ?>
                    <tr>
                        <td><?= $accountStatus->billing_group->purchase_order ?></td>
                        <td><?= $accountStatus->billing_group->name ?></td>
                        <td><?= $accountStatus->billing_date ? $accountStatus->billing_date->format('d/m/Y') : '' ?></td>
                        <td><?= $accountStatus->credit_limit ? $accountStatus->credit_limit->format('d/m/Y') : '' ?></td>
                        <td></td>
                        <td>$<?= number_format($accountStatus->period_amount, 2) ?></td>
                        <td>$<?= number_format($accountStatus->balance, 2) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <span class="bold">Favor de realizar sus pagos a las siguientes cuentas bancarias:</span>

    <table class="main fullwidth" cellspacing="0" border="0">
        <thead>
            <tr>
                <td>Banco</td>
                <td>Cuenta</td>
                <td>CLABE interbancaria</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>BANORTE</td>
                <td>0506464078</td>
                <td>07258000506464078</td>
            </tr>
            <tr>
                <td>SANTANDER</td>
                <td>092000365900</td>
                <td>01458092000365900</td>
            </tr>
            <tr>
                <td>BANCOMER</td>
                <td>0159732535</td>
                <td>0125800159732535</td>
            </tr>
        </tbody>
    </table>

    <br>
    <br>
    <h3 class="bold">Gracias por su preferencia</h3>

</div>
