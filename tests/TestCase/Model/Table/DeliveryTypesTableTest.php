<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DeliveryTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DeliveryTypesTable Test Case
 */
class DeliveryTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DeliveryTypesTable
     */
    public $DeliveryTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.delivery_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DeliveryTypes') ? [] : ['className' => 'App\Model\Table\DeliveryTypesTable'];
        $this->DeliveryTypes = TableRegistry::get('DeliveryTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DeliveryTypes);

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
