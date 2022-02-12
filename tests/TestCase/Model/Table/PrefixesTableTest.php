<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PrefixesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PrefixesTable Test Case
 */
class PrefixesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PrefixesTable
     */
    public $Prefixes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.prefixes',
        'app.customers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Prefixes') ? [] : ['className' => 'App\Model\Table\PrefixesTable'];
        $this->Prefixes = TableRegistry::get('Prefixes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Prefixes);

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
