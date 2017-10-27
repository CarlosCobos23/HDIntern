<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PositionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PositionsTable Test Case
 */
class PositionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PositionsTable
     */
    public $Positions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.positions',
        'app.layouts',
        'app.branches',
        'app.branchgroups',
        'app.positionbranches',
        'app.itemcodes',
        'app.items',
        'app.itemcategories',
        'app.layoutcategories',
        'app.currencies',
        'app.brands',
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
        'app.shippers',
        'app.invoices',
        'app.suppliers',
        'app.statusitems'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Positions') ? [] : ['className' => PositionsTable::class];
        $this->Positions = TableRegistry::get('Positions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Positions);

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
