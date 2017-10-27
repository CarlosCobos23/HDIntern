<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MovereasonsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MovereasonsTable Test Case
 */
class MovereasonsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MovereasonsTable
     */
    public $Movereasons;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.movereasons',
        'app.movereasontemplates',
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
        'app.ticketsfiles',
        'app.statususers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Movereasons') ? [] : ['className' => MovereasonsTable::class];
        $this->Movereasons = TableRegistry::get('Movereasons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Movereasons);

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
