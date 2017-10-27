<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArticlesRolesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArticlesRolesTable Test Case
 */
class ArticlesRolesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ArticlesRolesTable
     */
    public $ArticlesRoles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.articles_roles',
        'app.articles',
        'app.hdcategories',
        'app.tickets',
        'app.tickettypes',
        'app.ticket_statuses',
        'app.sources',
        'app.itemcodes',
        'app.items',
        'app.itemcategories',
        'app.layoutcategories',
        'app.layouts',
        'app.branches',
        'app.branchgroups',
        'app.positionbranches',
        'app.positions',
        'app.users',
        'app.statususers',
        'app.groups',
        'app.ticketlogs',
        'app.roles',
        'app.internalnotes',
        'app.movereasontemplates',
        'app.movereasons',
        'app.stockmoves',
        'app.warehouses',
        'app.stocks',
        'app.shippers',
        'app.stockmoves_details',
        'app.publicnotes',
        'app.currencies',
        'app.brands',
        'app.invoices',
        'app.suppliers',
        'app.statusitems',
        'app.ticketimpacts',
        'app.ticketurgencies',
        'app.ticketpriorities',
        'app.ticketsfiles',
        'app.articlefiles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ArticlesRoles') ? [] : ['className' => ArticlesRolesTable::class];
        $this->ArticlesRoles = TableRegistry::get('ArticlesRoles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ArticlesRoles);

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
