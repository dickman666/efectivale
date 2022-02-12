<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TareasDetalleFixture
 *
 */
class TareasDetalleFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tareas_detalle';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'tarea_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'inventario_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'estatus' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha_alta' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'comentario' => ['type' => 'text', 'length' => 4294967295, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'comment' => '', 'precision' => null],
        'tipo_escaneo_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'motivo_tipo_escaneo_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'requiere_evidencia' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'tipo_evidencia_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'usuario_ultima_modificacion' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha_ultima_modificacion' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created_at' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'updated_at' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'tareas_detalle_tarea_id_foreign' => ['type' => 'index', 'columns' => ['tarea_id'], 'length' => []],
            'tareas_detalle_inventario_id_foreign' => ['type' => 'index', 'columns' => ['inventario_id'], 'length' => []],
            'tareas_detalle_estatus_foreign' => ['type' => 'index', 'columns' => ['estatus'], 'length' => []],
            'tareas_detalle_tipo_escaneo_id_foreign' => ['type' => 'index', 'columns' => ['tipo_escaneo_id'], 'length' => []],
            'tareas_detalle_motivo_tipo_escaneo_id_foreign' => ['type' => 'index', 'columns' => ['motivo_tipo_escaneo_id'], 'length' => []],
            'tareas_detalle_tipo_evidencia_id_foreign' => ['type' => 'index', 'columns' => ['tipo_evidencia_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'tareas_detalle_estatus_foreign' => ['type' => 'foreign', 'columns' => ['estatus'], 'references' => ['tarea_detalle_estatus', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'tareas_detalle_inventario_id_foreign' => ['type' => 'foreign', 'columns' => ['inventario_id'], 'references' => ['inventarios', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'tareas_detalle_motivo_tipo_escaneo_id_foreign' => ['type' => 'foreign', 'columns' => ['motivo_tipo_escaneo_id'], 'references' => ['motivo_tipo_escaneo', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'tareas_detalle_tarea_id_foreign' => ['type' => 'foreign', 'columns' => ['tarea_id'], 'references' => ['tareas', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'tareas_detalle_tipo_escaneo_id_foreign' => ['type' => 'foreign', 'columns' => ['tipo_escaneo_id'], 'references' => ['tipo_escaneo', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'tareas_detalle_tipo_evidencia_id_foreign' => ['type' => 'foreign', 'columns' => ['tipo_evidencia_id'], 'references' => ['tipo_evidencia', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'tarea_id' => 1,
            'inventario_id' => 1,
            'estatus' => 1,
            'fecha_alta' => '2020-01-02 08:39:56',
            'comentario' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'tipo_escaneo_id' => 1,
            'motivo_tipo_escaneo_id' => 1,
            'requiere_evidencia' => 1,
            'tipo_evidencia_id' => 1,
            'usuario_ultima_modificacion' => 1,
            'fecha_ultima_modificacion' => '2020-01-02 08:39:56',
            'created_at' => 1577954396,
            'updated_at' => 1577954396
        ],
    ];
}
