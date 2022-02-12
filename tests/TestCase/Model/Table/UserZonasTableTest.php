<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserZonasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserZonasTable Test Case
 */
class UserZonasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserZonasTable
     */
    public $UserZonas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_zonas',
        'app.users',
        'app.zonas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UserZonas') ? [] : ['className' => 'App\Model\Table\UserZonasTable'];
        $this->UserZonas = TableRegistry::get('UserZonas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserZonas);

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
