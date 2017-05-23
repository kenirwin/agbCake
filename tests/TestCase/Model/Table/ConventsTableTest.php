<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConventsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConventsTable Test Case
 */
class ConventsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ConventsTable
     */
    public $Convents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.convents',
        'app.women',
        'app.portraits',
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
        $config = TableRegistry::exists('Convents') ? [] : ['className' => 'App\Model\Table\ConventsTable'];
        $this->Convents = TableRegistry::get('Convents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Convents);

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
