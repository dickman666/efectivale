<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InventariosFixture
 *
 */
class InventariosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'SVA' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'RFID' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'sucursal_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ubicacion_cadena' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'comment' => '', 'precision' => null],
        'ubicacion_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha_registro' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'estatus_garantia_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipo_categoria_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'descripcion' => ['type' => 'text', 'length' => 4294967295, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'comment' => '', 'precision' => null],
        'precio_anterior' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'precio_actual' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'tipo_actualizacion_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha_inicio_venta' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created_at' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'updated_at' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'inventarios_sucursal_id_foreign' => ['type' => 'index', 'columns' => ['sucursal_id'], 'length' => []],
            'inventarios_ubicacion_id_foreign' => ['type' => 'index', 'columns' => ['ubicacion_id'], 'length' => []],
            'inventarios_estatus_garantia_id_foreign' => ['type' => 'index', 'columns' => ['estatus_garantia_id'], 'length' => []],
            'inventarios_tipo_categoria_id_foreign' => ['type' => 'index', 'columns' => ['tipo_categoria_id'], 'length' => []],
            'inventarios_tipo_actualizacion_id_foreign' => ['type' => 'index', 'columns' => ['tipo_actualizacion_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'inventarios_estatus_garantia_id_foreign' => ['type' => 'foreign', 'columns' => ['estatus_garantia_id'], 'references' => ['estatus_garantia', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'inventarios_sucursal_id_foreign' => ['type' => 'foreign', 'columns' => ['sucursal_id'], 'references' => ['sucursales', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'inventarios_tipo_actualizacion_id_foreign' => ['type' => 'foreign', 'columns' => ['tipo_actualizacion_id'], 'references' => ['inventario_tipo_actualizacion', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'inventarios_tipo_categoria_id_foreign' => ['type' => 'foreign', 'columns' => ['tipo_categoria_id'], 'references' => ['tipo_categoria', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'inventarios_ubicacion_id_foreign' => ['type' => 'foreign', 'columns' => ['ubicacion_id'], 'references' => ['ubicaciones', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'SVA' => 'Lorem ipsum dolor sit amet',
            'RFID' => 'Lorem ipsum dolor sit amet',
            'sucursal_id' => 1,
            'ubicacion_cadena' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'ubicacion_id' => 1,
            'fecha_registro' => '2019-12-31 16:33:38',
            'estatus_garantia_id' => 1,
            'tipo_categoria_id' => 1,
            'descripcion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'precio_anterior' => 1,
            'precio_actual' => 1,
            'tipo_actualizacion_id' => 1,
            'fecha_inicio_venta' => '2019-12-31',
            'created_at' => 1577810018,
            'updated_at' => 1577810018
        ],
    ];
}
