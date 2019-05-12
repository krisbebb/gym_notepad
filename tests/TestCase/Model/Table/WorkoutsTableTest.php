<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WorkoutsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WorkoutsTable Test Case
 */
class WorkoutsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\WorkoutsTable
     */
    public $Workouts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Workouts',
        'app.Exercises'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Workouts') ? [] : ['className' => WorkoutsTable::class];
        $this->Workouts = TableRegistry::getTableLocator()->get('Workouts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Workouts);

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
