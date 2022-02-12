<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VolumetryStatusesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VolumetryStatusesTable Test Case
 */
class VolumetryStatusesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VolumetryStatusesTable
     */
    public $VolumetryStatuses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.volumetry_statuses',
        'app.quotes',
        'app.customers',
        'app.sellers',
        'app.users',
        'app.quote_statuses',
        'app.commercial_terms_currencies',
        'app.delivery_address_municipalities',
        'app.delivery_address_states',
        'app.delivery_address_countries',
        'app.quote_products',
        'app.products'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('VolumetryStatuses') ? [] : ['className' => 'App\Model\Table\VolumetryStatusesTable'];
        $this->VolumetryStatuses = TableRegistry::get('VolumetryStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->VolumetryStatuses);

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
