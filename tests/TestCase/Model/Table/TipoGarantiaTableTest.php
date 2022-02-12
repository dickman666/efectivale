<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoGarantiaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoGarantiaTable Test Case
 */
class TipoGarantiaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoGarantiaTable
     */
    public $TipoGarantia;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipo_garantia'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TipoGarantia') ? [] : ['className' => 'App\Model\Table\TipoGarantiaTable'];
        $this->TipoGarantia = TableRegistry::get('TipoGarantia', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TipoGarantia);

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
