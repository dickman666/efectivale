<?php
namespace App\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InventariosTable Test Case
 */
class InventariosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InventariosTable
     */
    public $Inventarios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.inventarios',
        'app.sucursales',
        'app.sucursales_estatus',
        'app.ubicaciones',
        'app.ubicaciones_lugar',
        'app.tipo_mueble',
        'app.ubicaciones_estatus',
        'app.estatus_garantia',
        'app.tipo_garantia',
        'app.inventario_tipo_actualizacion',
        'app.inventario_log_actualizacion',
        'app.tareas_detalle'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Inventarios') ? [] : ['className' => 'App\Model\Table\InventariosTable'];
        $this->Inventarios = TableRegistry::get('Inventarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Inventarios);

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
