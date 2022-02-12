<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TareasDetalleTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TareasDetalleTable Test Case
 */
class TareasDetalleTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TareasDetalleTable
     */
    public $TareasDetalle;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tareas_detalle',
        'app.tareas',
        'app.sucursales',
        'app.sucursales_estatus',
        'app.procesos',
        'app.alertas_reglas',
        'app.subprocesos',
        'app.incidencias',
        'app.inventarios',
        'app.ubicaciones',
        'app.ubicaciones_lugar',
        'app.tipo_mueble',
        'app.ubicaciones_estatus',
        'app.estatus_garantia',
        'app.tipo_categoria',
        'app.inventario_tipo_actualizacion',
        'app.inventario_log_actualizacion',
        'app.tipo_escaneo',
        'app.motivo_tipo_escaneo',
        'app.tipo_evidencia'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TareasDetalle') ? [] : ['className' => 'App\Model\Table\TareasDetalleTable'];
        $this->TareasDetalle = TableRegistry::get('TareasDetalle', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TareasDetalle);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
