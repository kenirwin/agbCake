<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReligiousOrdersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReligiousOrdersTable Test Case
 */
class ReligiousOrdersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ReligiousOrdersTable
     */
    public $ReligiousOrders;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.religious_orders'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ReligiousOrders') ? [] : ['className' => 'App\Model\Table\ReligiousOrdersTable'];
        $this->ReligiousOrders = TableRegistry::get('ReligiousOrders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ReligiousOrders);

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
