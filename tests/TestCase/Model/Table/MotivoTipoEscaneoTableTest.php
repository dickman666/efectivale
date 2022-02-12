<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MotivoTipoEscaneoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MotivoTipoEscaneoTable Test Case
 */
class MotivoTipoEscaneoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MotivoTipoEscaneoTable
     */
    public $MotivoTipoEscaneo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.motivo_tipo_escaneo',
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
        $config = TableRegistry::exists('MotivoTipoEscaneo') ? [] : ['className' => 'App\Model\Table\MotivoTipoEscaneoTable'];
        $this->MotivoTipoEscaneo = TableRegistry::get('MotivoTipoEscaneo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MotivoTipoEscaneo);

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
