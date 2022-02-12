<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TransportistasConductoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TransportistasConductoresTable Test Case
 */
class TransportistasConductoresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TransportistasConductoresTable
     */
    public $TransportistasConductores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.transportistas_conductores',
        'app.transportistas',
        'app.direccion',
        'app.estados',
        'app.ciudad',
        'app.colonia',
        'app.transportistas_estatus',
        'app.users',
        'app.equipo_statuses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TransportistasConductores') ? [] : ['className' => 'App\Model\Table\TransportistasConductoresTable'];
        $this->TransportistasConductores = TableRegistry::get('TransportistasConductores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TransportistasConductores);

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
