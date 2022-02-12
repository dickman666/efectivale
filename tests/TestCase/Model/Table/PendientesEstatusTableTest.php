<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PendientesEstatusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PendientesEstatusTable Test Case
 */
class PendientesEstatusTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PendientesEstatusTable
     */
    public $PendientesEstatus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pendientes_estatus'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PendientesEstatus') ? [] : ['className' => 'App\Model\Table\PendientesEstatusTable'];
        $this->PendientesEstatus = TableRegistry::get('PendientesEstatus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PendientesEstatus);

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
