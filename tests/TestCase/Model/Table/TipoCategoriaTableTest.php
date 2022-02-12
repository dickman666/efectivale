<?php
namespace App\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoCategoriaTable Test Case
 */
class TipoCategoriaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoCategoriaTable
     */
    public $TipoCategoria;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipo_categoria'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TipoCategoria') ? [] : ['className' => 'App\Model\Table\TipoCategoriaTable'];
        $this->TipoCategoria = TableRegistry::get('TipoCategoria', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TipoCategoria);

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
