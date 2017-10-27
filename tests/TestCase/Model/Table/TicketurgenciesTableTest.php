<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TicketurgenciesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TicketurgenciesTable Test Case
 */
class TicketurgenciesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TicketurgenciesTable
     */
    public $Ticketurgencies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ticketurgencies',
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
        'app.articles',
        'app.hdcategories',
        'app.articlefiles',
        'app.articles_roles',
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
        'app.ticketpriorities',
        'app.ticketsfiles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Ticketurgencies') ? [] : ['className' => TicketurgenciesTable::class];
        $this->Ticketurgencies = TableRegistry::get('Ticketurgencies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ticketurgencies);

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
