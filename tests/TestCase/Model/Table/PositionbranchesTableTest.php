<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PositionbranchesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PositionbranchesTable Test Case
 */
class PositionbranchesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PositionbranchesTable
     */
    public $Positionbranches;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.positionbranches',
        'app.branches',
        'app.branchgroups',
        'app.layouts',
        'app.positions',
        'app.layoutcategories',
        'app.itemcategories',
        'app.items',
        'app.currencies',
        'app.brands',
        'app.itemcodes',
        'app.invoices',
        'app.suppliers',
        'app.statusitems',
        'app.stockmoves_details',
        'app.stockmoves',
        'app.warehouses',
        'app.stocks',
        'app.movereasons',
        'app.movereasontemplates',
        'app.users',
        'app.statususers',
        'app.groups',
        'app.ticketlogs',
        'app.tickets',
        'app.tickettypes',
        'app.ticket_statuses',
        'app.sources',
        'app.ticketimpacts',
        'app.ticketurgencies',
        'app.ticketpriorities',
        'app.hdcategories',
        'app.articles',
        'app.articlefiles',
        'app.roles',
        'app.articles_roles',
        'app.internalnotes',
        'app.publicnotes',
        'app.ticketsfiles',
        'app.shippers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Positionbranches') ? [] : ['className' => PositionbranchesTable::class];
        $this->Positionbranches = TableRegistry::get('Positionbranches', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Positionbranches);

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
