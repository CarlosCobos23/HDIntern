<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ItemcategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ItemcategoriesTable Test Case
 */
class ItemcategoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ItemcategoriesTable
     */
    public $Itemcategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.itemcategories',
        'app.items',
        'app.currencies',
        'app.brands',
        'app.itemcodes',
        'app.invoices',
        'app.suppliers',
        'app.statusitems',
        'app.positionbranches',
        'app.branches',
        'app.branchgroups',
        'app.layouts',
        'app.positions',
        'app.layoutcategories',
        'app.warehouses',
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
        'app.stockmoves_details',
        'app.stocks'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Itemcategories') ? [] : ['className' => ItemcategoriesTable::class];
        $this->Itemcategories = TableRegistry::get('Itemcategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Itemcategories);

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
