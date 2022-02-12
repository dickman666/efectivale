<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuoteProductsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuoteProductsTable Test Case
 */
class QuoteProductsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\QuoteProductsTable
     */
    public $QuoteProducts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.quote_products',
        'app.quotes',
        'app.customers',
        'app.sellers',
        'app.users',
        'app.quote_statuses',
        'app.volumetry_statuses',
        'app.commercial_terms_currencies',
        'app.delivery_address_municipalities',
        'app.delivery_address_states',
        'app.delivery_address_countries',
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
        $config = TableRegistry::exists('QuoteProducts') ? [] : ['className' => 'App\Model\Table\QuoteProductsTable'];
        $this->QuoteProducts = TableRegistry::get('QuoteProducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->QuoteProducts);

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
