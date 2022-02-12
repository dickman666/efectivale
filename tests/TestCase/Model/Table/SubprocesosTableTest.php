<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubprocesosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubprocesosTable Test Case
 */
class SubprocesosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SubprocesosTable
     */
    public $Subprocesos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.subprocesos',
        'app.alertas_reglas',
        'app.tareas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Subprocesos') ? [] : ['className' => 'App\Model\Table\SubprocesosTable'];
        $this->Subprocesos = TableRegistry::get('Subprocesos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Subprocesos);

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
