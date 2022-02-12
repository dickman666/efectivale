<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductsEquivalencesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductsEquivalencesTable Test Case
 */
class ProductsEquivalencesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductsEquivalencesTable
     */
    public $ProductsEquivalences;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.products_equivalences',
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
        'app.units',
        'app.products_related'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProductsEquivalences') ? [] : ['className' => 'App\Model\Table\ProductsEquivalencesTable'];
        $this->ProductsEquivalences = TableRegistry::get('ProductsEquivalences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductsEquivalences);

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
