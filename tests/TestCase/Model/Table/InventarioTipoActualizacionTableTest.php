<?php
namespace App\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InventarioTipoActualizacionTable Test Case
 */
class InventarioTipoActualizacionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InventarioTipoActualizacionTable
     */
    public $InventarioTipoActualizacion;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.inventario_tipo_actualizacion'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('InventarioTipoActualizacion') ? [] : ['className' => 'App\Model\Table\InventarioTipoActualizacionTable'];
        $this->InventarioTipoActualizacion = TableRegistry::get('InventarioTipoActualizacion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InventarioTipoActualizacion);

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
}
