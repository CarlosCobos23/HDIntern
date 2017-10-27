<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatususersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatususersTable Test Case
 */
class StatususersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatususersTable
     */
    public $Statususers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.statususers',
        'app.users',
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
        'app.shippers',
        'app.tickets',
        'app.tickettypes',
        'app.ticket_statuses',
        'app.sources',
        'app.groups',
        'app.ticketlogs',
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
        $config = TableRegistry::exists('Statususers') ? [] : ['className' => StatususersTable::class];
        $this->Statususers = TableRegistry::get('Statususers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Statususers);

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
