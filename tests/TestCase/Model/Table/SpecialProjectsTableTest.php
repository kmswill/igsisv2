<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SpecialProjectsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SpecialProjectsTable Test Case
 */
class SpecialProjectsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SpecialProjectsTable
     */
    public $SpecialProjects;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.special_projects',
        'app.institutions',
        'app.agenda_posters',
        'app.agendas',
        'app.check_productions',
        'app.communications',
        'app.estimate_controls',
        'app.events',
        'app.funds',
        'app.hiring_requests',
        'app.locals',
        'app.users',
        'app.groups',
        'app.permissions',
        'app.call_comments',
        'app.calls',
        'app.formation_effectives',
        'app.formations',
        'app.historics',
        'app.legal_persons',
        'app.log_reopenings',
        'app.logs',
        'app.physical_persons',
        'app.times',
        'app.funds_users',
        'app.locals_users',
        'app.weblogs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SpecialProjects') ? [] : ['className' => 'App\Model\Table\SpecialProjectsTable'];
        $this->SpecialProjects = TableRegistry::get('SpecialProjects', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SpecialProjects);

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