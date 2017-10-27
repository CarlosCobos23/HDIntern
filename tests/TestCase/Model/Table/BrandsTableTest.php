<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BrandsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BrandsTable Test Case
 */
class BrandsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BrandsTable
     */
    public $Brands;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.brands',
        'app.items',
        'app.itemcategories',
        'app.layoutcategories',
        'app.layouts',
        'app.branches',
        'app.branchgroups',
        'app.positionbranches',
        'app.positions',
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
        'app.shippers',
        'app.currencies'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Brands') ? [] : ['className' => BrandsTable::class];
        $this->Brands = TableRegistry::get('Brands', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Brands);

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
