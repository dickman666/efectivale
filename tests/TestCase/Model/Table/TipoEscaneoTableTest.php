<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoEscaneoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoEscaneoTable Test Case
 */
class TipoEscaneoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoEscaneoTable
     */
    public $TipoEscaneo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipo_escaneo',
        'app.tareas_detalle'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TipoEscaneo') ? [] : ['className' => 'App\Model\Table\TipoEscaneoTable'];
        $this->TipoEscaneo = TableRegistry::get('TipoEscaneo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TipoEscaneo);

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
