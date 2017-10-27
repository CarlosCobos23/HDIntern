<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StockmovesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StockmovesTable Test Case
 */
class StockmovesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StockmovesTable
     */
    public $Stockmoves;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stockmoves',
        'app.warehouses',
        'app.branches',
        'app.branchgroups',
        'app.layouts',
        'app.positions',
        'app.positionbranches',
        'app.itemcodes',
        'app.items',
        'app.itemcategories',
        'app.layoutcategories',
        'app.currencies',
        'app.brands',
        'app.stockmoves_details',
        'app.stocks',
        'app.invoices',
        'app.suppliers',
        'app.statusitems',
        'app.tickets',
        'app.tickettypes',
        'app.ticket_statuses',
        'app.sources',
        'app.users',
        'app.statususers',
        'app.groups',
        'app.ticketlogs',
        'app.roles',
        'app.articles',
        'app.hdcategories',
        'app.articlefiles',
        'app.articles_roles',
        'app.internalnotes',
        'app.movereasontemplates',
        'app.movereasons',
        'app.publicnotes',
        'app.ticketimpacts',
        'app.ticketurgencies',
        'app.ticketpriorities',
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
        $config = TableRegistry::exists('Stockmoves') ? [] : ['className' => StockmovesTable::class];
        $this->Stockmoves = TableRegistry::get('Stockmoves', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Stockmoves);

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
