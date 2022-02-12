<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EvaluationQuestionOptionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EvaluationQuestionOptionsTable Test Case
 */
class EvaluationQuestionOptionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EvaluationQuestionOptionsTable
     */
    public $EvaluationQuestionOptions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.evaluation_question_options',
        'app.evaluation_questions',
        'app.evaluation_types',
        'app.evaluations',
        'app.customers',
        'app.users',
        'app.evaluation_answers',
        'app.evaluation_question_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EvaluationQuestionOptions') ? [] : ['className' => 'App\Model\Table\EvaluationQuestionOptionsTable'];
        $this->EvaluationQuestionOptions = TableRegistry::get('EvaluationQuestionOptions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EvaluationQuestionOptions);

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
