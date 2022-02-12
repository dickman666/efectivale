<?php
namespace App\Test\TestCase\Controller;

use App\Controller\QuotesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\QuotesController Test Case
 */
class QuotesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        'app.quote_products'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
