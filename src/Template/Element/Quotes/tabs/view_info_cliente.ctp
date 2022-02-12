<br>
<h5><?= __('GENERAL') ?></h5>

<hr>

<div class="row">
    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Nombre Comercial'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->customer->business_name ?>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Razón Social'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->customer->title ?>
            </div>
        </div>
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('RFC'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->customer->rfc ?>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Clasificación'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->customer->customer_category->name ?>
            </div>
        </div>
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Fecha de Registro'); ?>:</label>
            <div class="col-xs-8">
                <?= ($quote->customer->created)? $quote->customer->created->format('d/m/Y') : '' ?>
            </div>
        </div>
    </div>
</div>

<h5><?= __('CONTACTO') ?></h5>

<hr>

<div class="row">
    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Prefijo'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->customer->prefix->name ?>
            </div>
        </div>
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Nombre Completo'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->customer->contact_name ?>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Cumpleaños'); ?>:</label>
            <div class="col-xs-8">
                <?= ($quote->customer->contact_bday)? $quote->customer->contact_bday->format('d/m/Y') : '' ?>
            </div>
        </div>
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Teléfono fijo/oficina'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->customer->contact_phone ?>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Celular'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->customer->contact_movil ?>
            </div>
        </div>
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Correo Electrónico'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->customer->contact_email ?>
            </div>
        </div>
    </div>
</div>

<h5><?= __('DOMICILIO FISCAL') ?></h5>

<hr>

<div class="row">
    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Calle'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->customer->street ?>
            </div>
        </div>
        <div class="form-group col-xs-6">
            <div class="form-group col-xs-6" style="margin:0px; padding:0px;">
                <label class="col-xs-8" ><?=  __('No. Ext.'); ?>:</label>
                <div class="col-xs-4">
                    <?= $quote->customer->number_exterior ?>
                </div>
            </div>
            <div class="form-group col-xs-6" style="margin:0px; padding:0px;">
                <label class="col-xs-8" ><?=  __('No. Int.'); ?>:</label>
                <div class="col-xs-4">
                    <?= $quote->customer->number_interior ?>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Colonia'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->customer->colony ?>
            </div>
        </div>
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Municipio'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->customer->municipality_text ?>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Ciudad'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->customer->city ?>
            </div>
        </div>
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Estado'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->customer->state_text ?>
            </div>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('Pais'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->customer->country_text ?>
            </div>
        </div>
        <div class="form-group col-xs-6">
            <label class="col-xs-4" ><?=  __('C.P.'); ?>:</label>
            <div class="col-xs-8">
                <?= $quote->customer->postal_code ?>
            </div>
        </div>
    </div>
</div>