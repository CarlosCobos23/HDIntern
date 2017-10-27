<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HdtemplateTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HdtemplateTable Test Case
 */
class HdtemplateTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HdtemplateTable
     */
    public $Hdtemplate;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hdtemplate',
        'app.hdcategories',
        'app.articles',
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
        'app.internalnotes',
        'app.publicnotes',
        'app.ticketsfiles',
        'app.statususers',
        'app.roles',
        'app.articles_roles',
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
        $config = TableRegistry::exists('Hdtemplate') ? [] : ['className' => HdtemplateTable::class];
        $this->Hdtemplate = TableRegistry::get('Hdtemplate', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Hdtemplate);

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
