<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UbicacionesFixture
 *
 */
class UbicacionesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'codigo' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'comment' => '', 'precision' => null],
        'sucursal_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ubicaciones_lugar_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipo_mueble_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipo_mueble_letras' => ['type' => 'string', 'fixed' => true, 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'comment' => '', 'precision' => null],
        'mueble_consecutivo' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nivel' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ubicaciones_estatus_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'eliminado' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'ultima_modificacion' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created_at' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'updated_at' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'ubicaciones_sucursal_id_foreign' => ['type' => 'index', 'columns' => ['sucursal_id'], 'length' => []],
            'ubicaciones_ubicaciones_lugar_id_foreign' => ['type' => 'index', 'columns' => ['ubicaciones_lugar_id'], 'length' => []],
            'ubicaciones_tipo_mueble_id_foreign' => ['type' => 'index', 'columns' => ['tipo_mueble_id'], 'length' => []],
            'ubicaciones_ubicaciones_estatus_id_foreign' => ['type' => 'index', 'columns' => ['ubicaciones_estatus_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'ubicaciones_sucursal_id_foreign' => ['type' => 'foreign', 'columns' => ['sucursal_id'], 'references' => ['sucursales', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'ubicaciones_tipo_mueble_id_foreign' => ['type' => 'foreign', 'columns' => ['tipo_mueble_id'], 'references' => ['tipo_mueble', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'ubicaciones_ubicaciones_estatus_id_foreign' => ['type' => 'foreign', 'columns' => ['ubicaciones_estatus_id'], 'references' => ['ubicaciones_estatus', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'ubicaciones_ubicaciones_lugar_id_foreign' => ['type' => 'foreign', 'columns' => ['ubicaciones_lugar_id'], 'references' => ['ubicaciones_lugar', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'codigo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'sucursal_id' => 1,
            'ubicaciones_lugar_id' => 1,
            'tipo_mueble_id' => 1,
            'tipo_mueble_letras' => 'Lorem ipsum dolor sit amet',
            'mueble_consecutivo' => 1,
            'nivel' => 1,
            'ubicaciones_estatus_id' => 1,
            'eliminado' => 1,
            'ultima_modificacion' => '2019-12-31 15:08:10',
            'created_at' => 1577804890,
            'updated_at' => 1577804890
        ],
    ];
}
