<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EvaluationQuestionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EvaluationQuestionsTable Test Case
 */
class EvaluationQuestionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EvaluationQuestionsTable
     */
    public $EvaluationQuestions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.evaluation_questions',
        'app.evaluation_types',
        'app.evaluations',
        'app.customers',
        'app.users',
        'app.evaluation_answers',
        'app.evaluation_question_types',
        'app.evaluation_question_options'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EvaluationQuestions') ? [] : ['className' => 'App\Model\Table\EvaluationQuestionsTable'];
        $this->EvaluationQuestions = TableRegistry::get('EvaluationQuestions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EvaluationQuestions);

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
