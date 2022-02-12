<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EvaluationAnswersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EvaluationAnswersTable Test Case
 */
class EvaluationAnswersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EvaluationAnswersTable
     */
    public $EvaluationAnswers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.evaluation_answers',
        'app.evaluations',
        'app.customers',
        'app.evaluation_types',
        'app.evaluation_questions',
        'app.evaluation_question_types',
        'app.evaluation_question_options',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EvaluationAnswers') ? [] : ['className' => 'App\Model\Table\EvaluationAnswersTable'];
        $this->EvaluationAnswers = TableRegistry::get('EvaluationAnswers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EvaluationAnswers);

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
