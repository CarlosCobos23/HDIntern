<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WarehousesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WarehousesTable Test Case
 */
class WarehousesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WarehousesTable
     */
    public $Warehouses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        'app.stockmoves',
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
        'app.stocks',
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
        $config = TableRegistry::exists('Warehouses') ? [] : ['className' => WarehousesTable::class];
        $this->Warehouses = TableRegistry::get('Warehouses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Warehouses);

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
