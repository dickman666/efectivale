<style type="text/css">
    .info-table .data{
        padding-top: 10px;
        padding-left: 0px;
    }
</style>
<table class="info-table">
    <thead>
        <th style="width: 150px; font-weight: bold;">Franquiciatarios</th>
    </thead>
    <tbody>
        <?php foreach ($customer->customer_franchises_display_list as $franquiciaId => $franquiciaName): ?>
            <tr>
                <td class="data"><?= $franquiciaName ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
