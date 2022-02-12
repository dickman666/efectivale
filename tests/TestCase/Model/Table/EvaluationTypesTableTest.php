<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EvaluationTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EvaluationTypesTable Test Case
 */
class EvaluationTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EvaluationTypesTable
     */
    public $EvaluationTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.evaluation_types',
        'app.evaluation_questions',
        'app.evaluations',
        'app.customers',
        'app.users',
        'app.evaluation_answers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EvaluationTypes') ? [] : ['className' => 'App\Model\Table\EvaluationTypesTable'];
        $this->EvaluationTypes = TableRegistry::get('EvaluationTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EvaluationTypes);

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
