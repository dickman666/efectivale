<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuoteStatusesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuoteStatusesTable Test Case
 */
class QuoteStatusesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\QuoteStatusesTable
     */
    public $QuoteStatuses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.quote_statuses',
        'app.quotes',
        'app.customers',
        'app.sellers',
        'app.users',
        'app.volumetry_statuses',
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
        $config = TableRegistry::exists('QuoteStatuses') ? [] : ['className' => 'App\Model\Table\QuoteStatusesTable'];
        $this->QuoteStatuses = TableRegistry::get('QuoteStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->QuoteStatuses);

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
