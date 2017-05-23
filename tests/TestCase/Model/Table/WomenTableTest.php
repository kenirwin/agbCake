<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WomenTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WomenTable Test Case
 */
class WomenTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WomenTable
     */
    public $Women;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.women',
        'app.portraits',
        'app.convents',
        'app.women_convents'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Women') ? [] : ['className' => 'App\Model\Table\WomenTable'];
        $this->Women = TableRegistry::get('Women', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Women);

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
