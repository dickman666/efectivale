<?php
namespace App\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstatusGarantiasTable Test Case
 */
class EstatusGarantiasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EstatusGarantiasTable
     */
    public $EstatusGarantias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.estatus_garantias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EstatusGarantias') ? [] : ['className' => 'App\Model\Table\EstatusGarantiasTable'];
        $this->EstatusGarantias = TableRegistry::get('EstatusGarantias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EstatusGarantias);

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
