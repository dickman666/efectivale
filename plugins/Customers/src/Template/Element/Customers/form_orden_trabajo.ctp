<style type="text/css">
    h5{
        text-transform: uppercase;
    }

    .checkbox{
        margin-top: -5px !important;
        right: 0px !important;
    }
</style>

<?php echo $this->Form->create($ordenTrabajo, ['class'=>'form-horizontal', 'id'=>'form']); ?>
    <div class="ca-form">
        <div class="col-md-4">
            <div class="um-form-row form-group">
                <label class="col-md-12 control-label">&nbsp; <?= __('Número de OT'); ?></label>
                <div class="col-md-12">
                    <?php echo $this->Form->input('numero_ot', [
                                'type'  =>  'text',
                                'label' =>  false,
                                'div'   =>  false,
                                'disabled'=>true,
                                'value'=> ($ordenTrabajo->numero_ot)? $ordenTrabajo->numero_ot : 'MTY-OT-000000',
                                'class' =>  'form-control']); ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="um-form-row form-group">
                <label class="col-md-12 control-label">&nbsp; <?= __('Creó'); ?></label>
                <div class="col-md-12">
                    <?php echo $this->Form->input('creo_', [
                                'type'  =>  'text',
                                'label' =>  false,
                                'div'   =>  false,
                                'disabled'=>true,
                                'value'=> ($ordenTrabajo->user)? $ordenTrabajo->user->first_name. ' ' .$ordenTrabajo->user->last_name : '',
                                'class' =>  'form-control']); ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="um-form-row form-group">
                <label class="col-md-12 control-label">&nbsp; <?= __('Fecha Creación'); ?></label>
                <div class="col-md-12">
                    <?php echo $this->Form->input('created_', [
                                'type'  =>  'text',
                                'label' =>  false,
                                'div'   =>  false,
                                'disabled'=>true,
                                'value'=> ($ordenTrabajo->created)? $ordenTrabajo->created->format('d/m/Y') : '',
                                'class' =>  'form-control']); ?>
                </div>
            </div>
        </div>

    <div class="col-md-12"><hr><h5>Tipo de Orden de Trabajo</h5></div>

        <div class="col-md-4">
            <div class="um-form-row form-group">
                <label class="col-md-12 control-label">&nbsp; <?= __('Tipo OT'); ?></label>
                <div class="col-md-12">
                    <?= $this->Form->input('tipo_orden_trabajo_id', [
                        'options' => $tipoOrdenTrabajos,
                        'empty' => 'Selecciona',
                        'class' => 'form-control',
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="um-form-row form-group">
                <label class="col-md-12 control-label">&nbsp; <?= __('Tipo de Operación'); ?></label>
                <div class="col-md-12">
                    <?= $this->Form->input('tipo_orden_trabajo_operacion_id', [
                        'options' => $tipoOrdenTrabajoOperaciones,
                        'empty' => 'Selecciona',
                        'class' => 'form-control',
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="um-form-row form-group" id="fin_prueba">
                <label class="col-md-12 control-label">&nbsp; <?= __('Fin de Prueba'); ?></label>
                <div class="col-md-12">
                    <?= $this->Form->input('fin_prueba', [
                        'type' => 'text',
                        'value' => $ordenTrabajo->fin_prueba ? $ordenTrabajo->fin_prueba->format(DATE_DISPLAY_FORMAT) : '',
                        'class' => 'form-control custom-datepicker',
                        'empty' => true,
                        'label' => false,
                        'div' => false
                    ]); ?>
                </div>
            </div>
        </div>

    <div class="col-md-12"><hr><h5>Equipo Técnico que Atiende OT</h5></div>

        <div class="col-md-4">
            <div class="um-form-row form-group">
                <label class="col-md-12 control-label">&nbsp; <?= __('Técnico'); ?></label>
                <div class="col-md-12">
                    <?= $this->Form->input('tecnico_id', [
                        'options' => $tecnicos,
                        'empty' => 'Selecciona',
                        'class' => 'form-control',
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="um-form-row form-group">
                <label class="col-md-12 control-label">&nbsp; <?= __('Fecha Tentativa'); ?></label>
                <div class="col-md-12">
                    <?= $this->Form->input('equipo_tecnico_fecha_tentativa', [
                        'type' => 'text',
                        'class' => 'form-control custom-datepicker',
                        'value' => $ordenTrabajo->equipo_tecnico_fecha_tentativa ? $ordenTrabajo->equipo_tecnico_fecha_tentativa->format(DATE_DISPLAY_FORMAT) : '',
                        'empty' => true,
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="um-form-row form-group">
                <label class="col-md-12 control-label">&nbsp; <?= __('Hora Tentativa'); ?></label>
                <div class="col-md-12">
                    <?= $this->Form->input('equipo_tecnico_hora_tentativa', [
                        'type' => 'text',
                        'class' => 'form-control custom-timepicker',
                        'value' => $ordenTrabajo->equipo_tecnico_hora_tentativa ? $ordenTrabajo->equipo_tecnico_hora_tentativa->format('h:i A') : '',
                        'empty' => true,
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="um-form-row form-group">
                <label class="col-md-12 control-label">&nbsp; <?= __('Fecha Inicio'); ?></label>
                <div class="col-md-12">
                    <?= $this->Form->input('equipo_tecnico_fecha_inicio', [
                        'type' => 'text',
                        'class' => 'form-control custom-datepicker',
                        'value' => $ordenTrabajo->equipo_tecnico_fecha_inicio ? $ordenTrabajo->equipo_tecnico_fecha_inicio->format(DATE_DISPLAY_FORMAT) : '',
                        'empty' => true,
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="um-form-row form-group">
                <label class="col-md-12 control-label">&nbsp; <?= __('Hora Inicio'); ?></label>
                <div class="col-md-12">
                    <?= $this->Form->input('equipo_tecnico_hora_inicio', [
                        'type' => 'text',
                        'class' => 'form-control custom-timepicker',
                        'value' => $ordenTrabajo->equipo_tecnico_hora_inicio ? $ordenTrabajo->equipo_tecnico_hora_inicio->format('h:i A') : '',
                        'empty' => true,
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="um-form-row form-group">
                <label class="col-md-12 control-label">&nbsp; <?= __('Fecha Fin'); ?></label>
                <div class="col-md-12">
                    <?= $this->Form->input('equipo_tecnico_fecha_fin', [
                        'type' => 'text',
                        'class' => 'form-control custom-datepicker',
                        'value' => $ordenTrabajo->equipo_tecnico_fecha_fin ? $ordenTrabajo->equipo_tecnico_fecha_fin->format(DATE_DISPLAY_FORMAT) : '',
                        'empty' => true,
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="um-form-row form-group">
                <label class="col-md-12 control-label">&nbsp; <?= __('Hora Fin'); ?></label>
                <div class="col-md-12">
                    <?= $this->Form->input('equipo_tecnico_hora_fin', [
                        'type' => 'text',
                        'class' => 'form-control custom-timepicker',
                        'value' => $ordenTrabajo->equipo_tecnico_hora_fin ? $ordenTrabajo->equipo_tecnico_hora_fin->format('h:i A') : '',
                        'empty' => true,
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div>
        </div>

    <div class="col-md-12"><hr><h5>Contacto que Autoriza</h5></div>

        <div class="col-md-4">
            <div class="um-form-row form-group">
                <label class="col-md-12 control-label">&nbsp; <?= __('Contacto'); ?></label>
                <div class="col-md-12">
                    <?= $this->Form->input('autoriza_contact_id', [
                        'options' => $contactos,
                        'empty' => 'Selecciona',
                        'class' => 'form-control',
                        'label' => false,
                        'div' => false,
                    ]); ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="um-form-row form-group">
                <label class="col-md-12 control-label">&nbsp; <?= __('Correo'); ?></label>
                <div class="col-md-12">
                    <?php echo $this->Form->input('autoriza_contact_correo', [
                                'type'  =>  'text',
                                'label' =>  false,
                                'div'   =>  false,
                                'class' =>  'form-control']); ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="um-form-row form-group">
                <label class="col-md-12 control-label">&nbsp; <?= __('Télefono'); ?></label>
                <div class="col-md-12">
                    <?php echo $this->Form->input('autoriza_contact_tel', [
                                'type'  =>  'text',
                                'label' =>  false,
                                'div'   =>  false,
                                'class' =>  'form-control']); ?>
                </div>
            </div>
        </div>


    <div class="col-md-12"><hr><h5>Ubicación Fisica</h5></div>

        <div class="col-md-12" style="padding:0px;">
            <div class="col-md-4">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('Ubicación'); ?></label>
                    <div class="col-md-12">
                        <?= $this->Form->input('ubicacion_id', [
                            'options' => $ubicaciones,
                            'empty' => 'Selecciona',
                            'class' => 'form-control',
                            'label' => false,
                            'div' => false,
                        ]); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp;</label>
                    <div class="col-md-12">
                        <span class="lbl-span" id="ubicacion-fisica">Selecciona una dirección</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="um-form-row form-group">
                <label class="col-md-12 control-label">&nbsp; <?= __('TDS'); ?></label>
                <div class="col-md-12">
                    <?php echo $this->Form->input('ubicacion_tds', [
                                'type'  =>  'text',
                                'label' =>  false,
                                'div'   =>  false,
                                'class' =>  'form-control']); ?>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="um-form-row form-group">
                <label class="col-md-12 control-label">&nbsp; <?= __('Referencias'); ?></label>
                <div class="col-md-12">
                    <?php echo $this->Form->input('ubicacion_referencias', [
                                'type'  =>  'text',
                                'label' =>  false,
                                'div'   =>  false,
                                'class' =>  'form-control']); ?>
                </div>
            </div>
        </div>


    <div class="col-md-12"><hr><h5>Recepción de Equipo</h5></div>

        <div class="col-md-12" style="padding:0px;">
            <div class="col-md-4">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('Contacto'); ?></label>
                    <div class="col-md-12">
                        <?= $this->Form->input('recepcion_contact_id', [
                            'options' => $contactos,
                            'empty' => 'Selecciona',
                            'class' => 'form-control',
                            'label' => false,
                            'div' => false,
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="padding:0px;">
            <div class="col-md-12">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('Nombre 1'); ?></label>
                    <div class="col-md-12">
                        <?php echo $this->Form->input('recepcion_nombre1', [
                                'type'  =>  'text',
                                'label' =>  false,
                                'div'   =>  false,
                                'class' =>  'form-control']); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('Correo 1'); ?></label>
                    <div class="col-md-12">
                        <?php echo $this->Form->input('recepcion_correo1', [
                                'type'  =>  'text',
                                'label' =>  false,
                                'div'   =>  false,
                                'class' =>  'form-control']); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('Teléfono 1'); ?></label>
                    <div class="col-md-12">
                        <?php echo $this->Form->input('recepcion_tel1', [
                                'type'  =>  'text',
                                'label' =>  false,
                                'div'   =>  false,
                                'class' =>  'form-control']); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('Celular 1'); ?></label>
                    <div class="col-md-12">
                        <?php echo $this->Form->input('recepcion_cel1', [
                                'type'  =>  'text',
                                'label' =>  false,
                                'div'   =>  false,
                                'class' =>  'form-control']); ?>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-6" style="padding:0px;">
            <div class="col-md-12">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('Nombre 2'); ?></label>
                    <div class="col-md-12">
                        <?php echo $this->Form->input('recepcion_nombre2', [
                                'type'  =>  'text',
                                'label' =>  false,
                                'div'   =>  false,
                                'class' =>  'form-control']); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('Correo 2'); ?></label>
                    <div class="col-md-12">
                        <?php echo $this->Form->input('recepcion_correo2', [
                                'type'  =>  'text',
                                'label' =>  false,
                                'div'   =>  false,
                                'class' =>  'form-control']); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('Teléfono 2'); ?></label>
                    <div class="col-md-12">
                        <?php echo $this->Form->input('recepcion_tel2', [
                                'type'  =>  'text',
                                'label' =>  false,
                                'div'   =>  false,
                                'class' =>  'form-control']); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('Celular 2'); ?></label>
                    <div class="col-md-12">
                        <?php echo $this->Form->input('recepcion_cel2', [
                                'type'  =>  'text',
                                'label' =>  false,
                                'div'   =>  false,
                                'class' =>  'form-control']); ?>
                    </div>
                </div>
            </div>
        </div>



    <div class="col-md-12"><hr><h5>Ubicación dentro de la Empresa</h5></div>

        
        <div class="col-md-6" style="padding:0px;">
            <div class="um-form-row form-group">
                <div class="col-md-8" style="text-align:right;">&nbsp; <strong><?= __('Total de Personas con Acceso al Servicio'); ?></strong></div>
                <div class="col-md-4">
                    <?php echo $this->Form->input('ubicacion_empresa_total_personal_acceso', [
                                'type'  =>  'text',
                                'label' =>  false,
                                'div'   =>  false,
                                'class' =>  'form-control']); ?>
                </div>
            </div>
        
            <div class="um-form-row form-group">
                <div class="col-md-8" style="text-align:right;">&nbsp; <strong><?= __('Personas Promedio por Equipo'); ?></strong></div>
                <div class="col-md-4">
                    <?php echo $this->Form->input('ubicacion_empresa_personas_promedio_equipo', [
                                'type'  =>  'text',
                                'label' =>  false,
                                'div'   =>  false,
                                'class' =>  'form-control']); ?>
                </div>
            </div>
        
            <div class="um-form-row form-group">
                <div class="col-md-8" style="text-align:right;">&nbsp; <strong><?= __('Horario Inicio de Acceso'); ?></strong></div>
                <div class="col-md-4">
                    <?php echo $this->Form->input('ubicacion_empresa_horarios_inicio_acceso', [
                                'type'  =>  'text',
                                'label' =>  false,
                                'div'   =>  false,
                                'value' => $ordenTrabajo->ubicacion_empresa_horarios_inicio_acceso ? $ordenTrabajo->ubicacion_empresa_horarios_inicio_acceso->format('h:i A') : '',
                                'class' =>  'form-control custom-timepicker']); ?>
                </div>
            </div>
        
            <div class="um-form-row form-group">
                <div class="col-md-8" style="text-align:right;">&nbsp; <strong><?= __('Horario Fin de Acceso'); ?></strong></div>
                <div class="col-md-4">
                    <?php echo $this->Form->input('ubicacion_empresa_horarios_fin_acceso', [
                                'type'  =>  'text',
                                'label' =>  false,
                                'div'   =>  false,
                                'value' => $ordenTrabajo->ubicacion_empresa_horarios_fin_acceso ? $ordenTrabajo->ubicacion_empresa_horarios_fin_acceso->format('h:i A') : '',
                                'class' =>  'form-control custom-timepicker']); ?>
                </div>
            </div>
        </div>

        <div class="col-md-6" style="padding:0px;">
            <div class="um-form-row form-group">
                <div class="col-md-8" style="text-align:right;">&nbsp; <strong><?= __('¿Cuenta con Estacionamiento?'); ?></strong></div>
                <div class="col-md-4">
                    <?php echo $this->Form->input('ubicacion_empresa_cuenta_estacionamiento', [
                                'label' =>  false,
                                'div'   =>  false,
                                'class' =>  'form-control checkbox']); ?>
                </div>
            </div>
        
            <div class="um-form-row form-group">
                <div class="col-md-8" style="text-align:right;">&nbsp; <strong><?= __('¿Ocupa Plataforma?'); ?></strong></div>
                <div class="col-md-4">
                    <?php echo $this->Form->input('ubicacion_empresa_ocupa_plataforma', [
                                'label' =>  false,
                                'div'   =>  false,
                                'class' =>  'form-control checkbox']); ?>
                </div>
            </div>
        
            <div class="um-form-row form-group">
                <div class="col-md-8" style="text-align:right;">&nbsp; <strong><?= __('¿Ocupa Escalera de mas de 5 Mts?'); ?></strong></div>
                <div class="col-md-4">
                    <?php echo $this->Form->input('ubicacion_empresa_ocupa_escalera', [
                                'label' =>  false,
                                'div'   =>  false,
                                'class' =>  'form-control checkbox']); ?>
                </div>
            </div>
        
            <div class="um-form-row form-group">
                <div class="col-md-8" style="text-align:right;">&nbsp; <strong><?= __('Ocupa Tramite de Permiso de Acceso'); ?></strong></div>
                <div class="col-md-4">
                    <?php echo $this->Form->input('ubicacion_empresa_ocupa_tramite_permiso', [
                                'label' =>  false,
                                'div'   =>  false,
                                'class' =>  'form-control checkbox']); ?>
                </div>
            </div>
        </div>
        

    <div class="col-md-12"><hr>
        <div class="col-md-6" style="padding:0px;">
            <h5>Listado de Equipos</h5>
        </div>
        <div class="col-md-6" style="padding:0px;">
            Listado de Equipos
        </div>
    </div>

        <div class="col-md-12">
            <table class="table table-striped table-bordered table-condensed table-hover" width="100%" data-page-length='20' data-order='[[ 1, "asc" ]]'>
    
                <thead>
                    <tr>
                        <th class="text-center"><?= __('Planta/Edificio') ?></th>
                        <th class="text-center"><?= __('Piso') ?></th>
                        <th class="text-center"><?= __('Area') ?></th>
                        <th class="text-center"><?= __('Agua') ?></th>
                        <th class="text-center"><?=  __('Desague') ?></th>
                        <th class="text-center"><?=  __('Altura') ?></th>
                        <th class="text-center"><?= __('Energía') ?></th>
                        <th class="text-center"><?= __('Equipo Sugerido') ?></th>
                        <th class="text-center"><?= __('Periodo Cambio Filtro') ?></th>
                        <th class="text-center"><?= __('Precio Renta') ?></th>
                        <th class="text-center"><?= __('Numero de Activación') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ([] as $customer): ?>
                    <tr>
                      <td></td>          
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>


        <div class="col-md-12">
            <div class="um-form-row form-group">
                <label class="col-md-12 control-label">&nbsp; <?= __('Observaciones'); ?></label>
                <div class="col-md-12">
                    <?php echo $this->Form->input('observacion', [
                                'label' =>  false,
                                'div'   =>  false,
                                'class' =>  'form-control']); ?>
                </div>
            </div>
        </div>


        <div class="col-md-12 split-btn">
          <div class="submit">
            <?= $this->Form->Submit(__('Guardar'), ['div'=>false, 'class'=>'btn btn-span btn-md btn-submit']); ?>
          </div>
          <a href="//" class="btn btn-back"><?= __('Cancelar') ?></a>
        </div>
    </div>
<?php echo $this->Form->end(); ?>

<script type="text/javascript">

  $(function(){

    $('#fin_prueba').hide();
    
    $('.select2').select2();
    
    $('.custom-datepicker').pickadate({
      'format': 'dd/mm/yyyy',
      'formatSubmit': 'yyyy-mm-dd',
      hiddenName: true,
      selectYears: true,
      selectMonths: true,
      min: new Date()
    });

    $('.custom-timepicker').pickatime({
      format: 'h:i A',
      formatSubmit: 'HH:i',
      hiddenPrefix: '',
      hiddenSuffix: '',
      min: [9,0],
      max: [21,0]
    });

    $(".phone").inputmask("+52 (99) 9999 9999", {
        placeholder: " ",
        clearMaskOnLostFocus: true
    });
    $(".postal-code").inputmask("99999", {
        placeholder: " ",
        clearMaskOnLostFocus: true
    });

    function showFinPrueba() {
        var id = $('#tipo-orden-trabajo-operacion-id').val();
        if(id == 1){
            $('#fin_prueba').show();
        }else{
            $('#fin_prueba').hide();
        }
    }

    showFinPrueba();
    $('#tipo-orden-trabajo-operacion-id').change(function () {
        showFinPrueba();
    });

    
    $('#autoriza-contact-id').change(function () {

        var id = $('#autoriza-contact-id').val();

        if (id > 0) {

            $.ajax({
  
              type: 'POST',
              url: "/customers/customers/getContactinfo/"+id,
              data: {id:id},
              dataType: 'json',
              beforeSend: function() {
                 document.getElementById("autoriza-contact-correo").disabled = true;
                 document.getElementById("autoriza-contact-tel").disabled = true;
              },
              success: function(data){
               
                document.getElementById("autoriza-contact-correo").value = data.email;
                document.getElementById("autoriza-contact-tel").value = data.phone;

                document.getElementById("autoriza-contact-correo").disabled = false;
                document.getElementById("autoriza-contact-tel").disabled = false;        
            
              }
          });

        }             

    });



    $('#recepcion-contact-id').change(function () {

        var id = $('#recepcion-contact-id').val();

        if (id > 0) {

            $.ajax({
  
              type: 'POST',
              url: "/customers/customers/getContactinfo/"+id,
              data: {id:id},
              dataType: 'json',
              beforeSend: function() {
                 document.getElementById("recepcion-nombre1").disabled = true;
                 document.getElementById("recepcion-correo1").disabled = true;
                 document.getElementById("recepcion-tel1").disabled = true;
                 document.getElementById("recepcion-cel1").disabled = true;
              },
              success: function(data){
               
                document.getElementById("recepcion-nombre1").value = data.first_name + ' ' + data.last_name + ' ' + data.middle_name;
                document.getElementById("recepcion-correo1").value = data.email;
                document.getElementById("recepcion-tel1").value = data.phone;
                document.getElementById("recepcion-cel1").value = data.mobile_phone;

                document.getElementById("recepcion-nombre1").disabled = false;
                document.getElementById("recepcion-correo1").disabled = false;
                document.getElementById("recepcion-tel1").disabled = false;
                document.getElementById("recepcion-cel1").disabled = false;       
            
              }
          });

        }             

    });

    function ubicacionFisica() {

        var id = $('#ubicacion-id').val();

        if (id > 0) {

            $.ajax({
  
              type: 'POST',
              url: "/customers/customers/getUbicacioninfo/"+id,
              data: {id:id},
              dataType: 'json',
              beforeSend: function() {
    
              },
              success: function(data){
                
                var direccion = data.calle +' #'+ data.numero +', Col. '+ data.colonia +', C.P. '+ data.codigo_postal +', '+ data.municipio +', '+ data.estado;
                
                $('#ubicacion-fisica').text(direccion);
            
              }
          });

        }else{

            $('#ubicacion-fisica').text('Selecciona una dirección');
        }
    }

    ubicacionFisica();
    $('#ubicacion-id').change(function () {
        ubicacionFisica();   
    });


    $('#form').submit(function() {
      if ( $('#tipo-orden-trabajo-operacion-id').val() == 1 && $('#fin-prueba').val() == '' ) {
        alert('Fin de prueba es obligatorio');
        return false;
      }
      
      return true;
    });

  });

</script>