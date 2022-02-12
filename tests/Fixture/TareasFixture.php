<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TareasFixture
 *
 */
class TareasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'sucursal_origen_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'sucursal_destino_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'proceso_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'subproceso_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tarea_manual' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'geolocalizacion' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'comment' => '', 'precision' => null],
        'fecha_inicio' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'hora_inicio' => ['type' => 'time', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'fecha_fin' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'hora_fin' => ['type' => 'time', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'incidencia' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'estatus' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha_registro' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'usuario_ejecuta' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'comentarios' => ['type' => 'text', 'length' => 4294967295, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'comment' => '', 'precision' => null],
        'fecha_hora_ultima_modificacion' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'usuario_ultima_modificacion' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'eliminado' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'created_at' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'updated_at' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'tareas_sucursal_origen_id_foreign' => ['type' => 'index', 'columns' => ['sucursal_origen_id'], 'length' => []],
            'tareas_sucursal_destino_id_foreign' => ['type' => 'index', 'columns' => ['sucursal_destino_id'], 'length' => []],
            'tareas_proceso_id_foreign' => ['type' => 'index', 'columns' => ['proceso_id'], 'length' => []],
            'tareas_subproceso_id_foreign' => ['type' => 'index', 'columns' => ['subproceso_id'], 'length' => []],
            'tareas_estatus_foreign' => ['type' => 'index', 'columns' => ['estatus'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'tareas_estatus_foreign' => ['type' => 'foreign', 'columns' => ['estatus'], 'references' => ['pendientes_estatus', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'tareas_proceso_id_foreign' => ['type' => 'foreign', 'columns' => ['proceso_id'], 'references' => ['procesos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'tareas_subproceso_id_foreign' => ['type' => 'foreign', 'columns' => ['subproceso_id'], 'references' => ['subprocesos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'tareas_sucursal_destino_id_foreign' => ['type' => 'foreign', 'columns' => ['sucursal_destino_id'], 'references' => ['sucursales', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'tareas_sucursal_origen_id_foreign' => ['type' => 'foreign', 'columns' => ['sucursal_origen_id'], 'references' => ['sucursales', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'sucursal_origen_id' => 1,
            'sucursal_destino_id' => 1,
            'proceso_id' => 1,
            'subproceso_id' => 1,
            'tarea_manual' => 1,
            'geolocalizacion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'fecha_inicio' => '2019-12-31',
            'hora_inicio' => '18:11:19',
            'fecha_fin' => '2019-12-31',
            'hora_fin' => '18:11:19',
            'incidencia' => 1,
            'estatus' => 1,
            'fecha_registro' => '2019-12-31 18:11:19',
            'usuario_ejecuta' => 1,
            'comentarios' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'fecha_hora_ultima_modificacion' => '2019-12-31 18:11:19',
            'usuario_ultima_modificacion' => 1,
            'eliminado' => 1,
            'created_at' => 1577815879,
            'updated_at' => 1577815879
        ],
    ];
}
