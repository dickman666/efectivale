<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductsCategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductsCategoriesTable Test Case
 */
class ProductsCategoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductsCategoriesTable
     */
    public $ProductsCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.products_categories',
        'app.products',
        'app.quote_products',
        'app.quotes',
        'app.customers',
        'app.sellers',
        'app.users',
        'app.quote_statuses',
        'app.volumetry_statuses',
        'app.commercial_terms_currencies',
        'app.delivery_address_municipalities',
        'app.states',
        'app.countries',
        'app.municipalities',
        'app.delivery_address_states',
        'app.delivery_address_countries',
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
        $config = TableRegistry::exists('ProductsCategories') ? [] : ['className' => 'App\Model\Table\ProductsCategoriesTable'];
        $this->ProductsCategories = TableRegistry::get('ProductsCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductsCategories);

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
