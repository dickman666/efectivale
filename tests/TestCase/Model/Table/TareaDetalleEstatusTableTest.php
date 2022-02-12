<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TareaDetalleEstatusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TareaDetalleEstatusTable Test Case
 */
class TareaDetalleEstatusTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TareaDetalleEstatusTable
     */
    public $TareaDetalleEstatus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tarea_detalle_estatus'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TareaDetalleEstatus') ? [] : ['className' => 'App\Model\Table\TareaDetalleEstatusTable'];
        $this->TareaDetalleEstatus = TableRegistry::get('TareaDetalleEstatus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TareaDetalleEstatus);

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
