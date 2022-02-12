<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductsRelatedTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductsRelatedTable Test Case
 */
class ProductsRelatedTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductsRelatedTable
     */
    public $ProductsRelated;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.products_related',
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
        'app.delivery_types',
        'app.product_relateds',
        'app.unit_bases',
        'app.units',
        'app.products_equivalences'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProductsRelated') ? [] : ['className' => 'App\Model\Table\ProductsRelatedTable'];
        $this->ProductsRelated = TableRegistry::get('ProductsRelated', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductsRelated);

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
