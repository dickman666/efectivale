<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PmsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PmsTable Test Case
 */
class PmsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PmsTable
     */
    public $Pms;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pms'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Pms') ? [] : ['className' => 'App\Model\Table\PmsTable'];
        $this->Pms = TableRegistry::get('Pms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pms);

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
