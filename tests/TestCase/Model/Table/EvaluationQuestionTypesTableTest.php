<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EvaluationQuestionTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EvaluationQuestionTypesTable Test Case
 */
class EvaluationQuestionTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EvaluationQuestionTypesTable
     */
    public $EvaluationQuestionTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.evaluation_question_types',
        'app.evaluation_questions',
        'app.evaluation_types',
        'app.evaluations',
        'app.customers',
        'app.users',
        'app.evaluation_answers',
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
        $config = TableRegistry::exists('EvaluationQuestionTypes') ? [] : ['className' => 'App\Model\Table\EvaluationQuestionTypesTable'];
        $this->EvaluationQuestionTypes = TableRegistry::get('EvaluationQuestionTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EvaluationQuestionTypes);

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
