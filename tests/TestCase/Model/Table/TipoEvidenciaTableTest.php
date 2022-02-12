<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoEvidenciaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoEvidenciaTable Test Case
 */
class TipoEvidenciaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoEvidenciaTable
     */
    public $TipoEvidencia;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipo_evidencia'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TipoEvidencia') ? [] : ['className' => 'App\Model\Table\TipoEvidenciaTable'];
        $this->TipoEvidencia = TableRegistry::get('TipoEvidencia', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TipoEvidencia);

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
