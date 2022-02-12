<br>

<h5><?= __('CONTACTO DE ENTREGA') ?></h5>

<hr>

<div class="row">
    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Nombre Completo'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->delivery_contact_name ?>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Teléfono'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->delivery_contact_phone ?>
            </div>
        </div>
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Celular'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->delivery_contact_movil ?>
            </div>
        </div>
    </div>
</div>

<h5><?= __('DOMICILIO DE ENTREGA') ?></h5>

<hr>

<div class="row">
    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Calle'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->delivery_address_street ?>
            </div>
        </div>
        <div class="form-group col-xs-6">
            <div class="form-group col-xs-6" style="margin:0px; padding:0px;">
                <label class="col-xs-8" ><?=  __('No. Ext.'); ?>:</label>
                <div class="col-xs-4">
                    <?= $quote->delivery_address_number_exterior ?>
                </div>
            </div>
            <div class="form-group col-xs-6" style="margin:0px; padding:0px;">
                <label class="col-xs-8" ><?=  __('No. Int.'); ?>:</label>
                <div class="col-xs-4">
                    <?= $quote->delivery_address_number_interior ?>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Colonia'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->delivery_address_colony ?>
            </div>
        </div>
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Municipio'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->delivery_address_municipality_text ?>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Ciudad'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->delivery_address_city ?>
            </div>
        </div>
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Estado'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->delivery_address_state_text ?>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Pais'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->delivery_address_country_text ?>
            </div>
        </div>
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('C.P.'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->delivery_address_postal_code ?>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group col-xs-12">
            <label class="col-xs-12" ><?=  __('Notas'); ?>:</label>
            <div class="col-xs-12">
                <?= $quote->comments ?>
            </div>
        </div>
    </div>
</div>