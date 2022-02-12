<?php $this->Html->addCrumb(__('Alta Orden de Trabajo'), ['controller' => 'Customers', 'action' => 'addOrdenTrabajo', $customer_id, 'plugin' => 'Customers']); ?>

<style type="text/css">
    h5{
        text-transform: uppercase;
    }
</style>
<div class="panel">
    <div class="panel-heading">
        <span class="panel-title">
            <?php echo __('Alta Orden de Trabajo'); ?>
        </span>
        <span class="panel-title-right">
            <?php echo $this->Html->link(__('Back', true), ['action'=>'index'], ['class'=>'ca-add ca-back']); ?>
        </span>
    </div>
    <div class="panel-body">
        <?php echo $this->Form->create(null, ['class'=>'form-horizontal', 'data-parsley-validate']); ?>
        <div class="ca-form">
            <div class="col-md-4">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('Número de OT'); ?></label>
                    <div class="col-md-12">
                        <span class="lbl-span">&nbsp; <?= 'a';?></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('Creó'); ?></label>
                    <div class="col-md-12">
                        <span class="lbl-span">&nbsp; <?= 'a';?></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('Fecha Creación'); ?></label>
                    <div class="col-md-12">
                        <span class="lbl-span">&nbsp; <?= 'a';?></span>
                    </div>
                </div>
            </div>

        <div class="col-md-12"><hr><h5>Tipo de Orden de Trabajo</h5></div>

            <div class="col-md-4">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('Tipo OT'); ?></label>
                    <div class="col-md-12">
                        <span class="lbl-span">&nbsp; <?= 'a';?></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('Tipo de Operación'); ?></label>
                    <div class="col-md-12">
                        <span class="lbl-span">&nbsp; <?= 'a';?></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('Fin de Prueba'); ?></label>
                    <div class="col-md-12">
                        <span class="lbl-span">&nbsp; <?= 'a';?></span>
                    </div>
                </div>
            </div>

        <div class="col-md-12"><hr><h5>Equipo Técnico que Atiende OT</h5></div>

            <div class="col-md-4">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('Técnico'); ?></label>
                    <div class="col-md-12">
                        <span class="lbl-span">&nbsp; <?= 'a';?></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('Fecha Tentativa'); ?></label>
                    <div class="col-md-12">
                        <span class="lbl-span">&nbsp; <?= 'a';?></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('Hora Tentativa'); ?></label>
                    <div class="col-md-12">
                        <span class="lbl-span">&nbsp; <?= 'a';?></span>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('Fecha Inicio'); ?></label>
                    <div class="col-md-12">
                        <span class="lbl-span">&nbsp; <?= 'a';?></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('Hora Inicio'); ?></label>
                    <div class="col-md-12">
                        <span class="lbl-span">&nbsp; <?= 'a';?></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('Fecha Fin'); ?></label>
                    <div class="col-md-12">
                        <span class="lbl-span">&nbsp; <?= 'a';?></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('Hora Fin'); ?></label>
                    <div class="col-md-12">
                        <span class="lbl-span">&nbsp; <?= 'a';?></span>
                    </div>
                </div>
            </div>

        <div class="col-md-12"><hr><h5>Contacto que Autoriza</h5></div>

            <div class="col-md-4">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('Contacto'); ?></label>
                    <div class="col-md-12">
                        <span class="lbl-span">&nbsp; <?= 'a';?></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('Correo'); ?></label>
                    <div class="col-md-12">
                        <span class="lbl-span">&nbsp; <?= 'a';?></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('Télefono'); ?></label>
                    <div class="col-md-12">
                        <span class="lbl-span">&nbsp; <?= 'a';?></span>
                    </div>
                </div>
            </div>


        <div class="col-md-12"><hr><h5>Ubicación Fisica</h5></div>

            <div class="col-md-4">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('Ubicación'); ?></label>
                    <div class="col-md-12">
                        <span class="lbl-span">&nbsp; <?= 'a';?></span>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp;</label>
                    <div class="col-md-12">
                        <span class="lbl-span">&nbsp; <?= 'a a a aa a a a a a a  a a a a a a a a a a a  a a';?></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('TDS'); ?></label>
                    <div class="col-md-12">
                        <span class="lbl-span">&nbsp; <?= 'a';?></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('Referencias'); ?></label>
                    <div class="col-md-12">
                        <span class="lbl-span">&nbsp; <?= 'a';?></span>
                    </div>
                </div>
            </div>


        <div class="col-md-12"><hr><h5>Recepción de Equipo</h5></div>

            <div class="col-md-12" style="padding:0px;">
                <div class="col-md-4">
                    <div class="um-form-row form-group">
                        <label class="col-md-12 control-label">&nbsp; <?= __('Contacto'); ?></label>
                        <div class="col-md-12">
                            <span class="lbl-span">&nbsp; <?= 'a';?></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6" style="padding:0px;">
                <div class="col-md-12">
                    <div class="um-form-row form-group">
                        <label class="col-md-12 control-label">&nbsp; <?= __('Nombre 1'); ?></label>
                        <div class="col-md-12">
                            <span class="lbl-span">&nbsp; <?= 'a';?></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="um-form-row form-group">
                        <label class="col-md-12 control-label">&nbsp; <?= __('Correo 1'); ?></label>
                        <div class="col-md-12">
                            <span class="lbl-span">&nbsp; <?= 'a';?></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="um-form-row form-group">
                        <label class="col-md-12 control-label">&nbsp; <?= __('Teléfono 1'); ?></label>
                        <div class="col-md-12">
                            <span class="lbl-span">&nbsp; <?= 'a';?></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="um-form-row form-group">
                        <label class="col-md-12 control-label">&nbsp; <?= __('Celular 1'); ?></label>
                        <div class="col-md-12">
                            <span class="lbl-span">&nbsp; <?= 'a';?></span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6" style="padding:0px;">
                <div class="col-md-12">
                    <div class="um-form-row form-group">
                        <label class="col-md-12 control-label">&nbsp; <?= __('Nombre 2'); ?></label>
                        <div class="col-md-12">
                            <span class="lbl-span">&nbsp; <?= 'a';?></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="um-form-row form-group">
                        <label class="col-md-12 control-label">&nbsp; <?= __('Correo 2'); ?></label>
                        <div class="col-md-12">
                            <span class="lbl-span">&nbsp; <?= 'a';?></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="um-form-row form-group">
                        <label class="col-md-12 control-label">&nbsp; <?= __('Teléfono 2'); ?></label>
                        <div class="col-md-12">
                            <span class="lbl-span">&nbsp; <?= 'a';?></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="um-form-row form-group">
                        <label class="col-md-12 control-label">&nbsp; <?= __('Celular 2'); ?></label>
                        <div class="col-md-12">
                            <span class="lbl-span">&nbsp; <?= 'a';?></span>
                        </div>
                    </div>
                </div>
            </div>



        <div class="col-md-12"><hr><h5>Ubicación dentro de la Empresa</h5></div>

            
            <div class="col-md-6" style="padding:0px;">
                <div class="um-form-row form-group">
                    <div class="col-md-8" style="text-align:right;">&nbsp; <strong><?= __('Total de Personas con Acceso al Servicio'); ?></strong></div>
                    <div class="col-md-4">
                        <span class="lbl-span">&nbsp; <?= 'a';?></span>
                    </div>
                </div>
            
                <div class="um-form-row form-group">
                    <div class="col-md-8" style="text-align:right;">&nbsp; <strong><?= __('Personas Promedio por Equipo'); ?></strong></div>
                    <div class="col-md-4">
                        <span class="lbl-span">&nbsp; <?= 'a';?></span>
                    </div>
                </div>
            
                <div class="um-form-row form-group">
                    <div class="col-md-8" style="text-align:right;">&nbsp; <strong><?= __('Horario Inicio de Acceso'); ?></strong></div>
                    <div class="col-md-4">
                        <span class="lbl-span">&nbsp; <?= 'a';?></span>
                    </div>
                </div>
            
                <div class="um-form-row form-group">
                    <div class="col-md-8" style="text-align:right;">&nbsp; <strong><?= __('Horario Fin de Acceso'); ?></strong></div>
                    <div class="col-md-4">
                        <span class="lbl-span">&nbsp; <?= 'a';?></span>
                    </div>
                </div>
            </div>

            <div class="col-md-6" style="padding:0px;">
                <div class="um-form-row form-group">
                    <div class="col-md-8" style="text-align:right;">&nbsp; <strong><?= __('¿Cuenta con Estacionamiento?'); ?></strong></div>
                    <div class="col-md-4">
                        <span class="lbl-span">&nbsp; <?= 'a';?></span>
                    </div>
                </div>
            
                <div class="um-form-row form-group">
                    <div class="col-md-8" style="text-align:right;">&nbsp; <strong><?= __('¿Ocupa Plataforma?'); ?></strong></div>
                    <div class="col-md-4">
                        <span class="lbl-span">&nbsp; <?= 'a';?></span>
                    </div>
                </div>
            
                <div class="um-form-row form-group">
                    <div class="col-md-8" style="text-align:right;">&nbsp; <strong><?= __('¿Ocupa Escalera de mas de 5 Mts?'); ?></strong></div>
                    <div class="col-md-4">
                        <span class="lbl-span">&nbsp; <?= 'a';?></span>
                    </div>
                </div>
            
                <div class="um-form-row form-group">
                    <div class="col-md-8" style="text-align:right;">&nbsp; <strong><?= __('Ocupa Tramite de Permiso de Acceso'); ?></strong></div>
                    <div class="col-md-4">
                        <span class="lbl-span">&nbsp; <?= 'a';?></span>
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


            <div class="col-md-4">
                <div class="um-form-row form-group">
                    <label class="col-md-12 control-label">&nbsp; <?= __('Observaciones'); ?></label>
                    <div class="col-md-12">
                        <span class="lbl-span">&nbsp; <?= 'a';?></span>
                    </div>
                </div>
            </div>


            <div class="col-md-12 split-btn">
              <div class="submit">
                <?= $this->Form->Submit(__('Agregar Franquicia'), ['div'=>false, 'class'=>'btn btn-span btn-md btn-submit']); ?>
              </div>
              <a href="/franquicias/" class="btn btn-back"><?= __('Cancelar') ?></a>
            </div>
        </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>