<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AffiliationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AffiliationsTable Test Case
 */
class AffiliationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AffiliationsTable
     */
    public $Affiliations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.affiliations',
        'app.convents',
        'app.roles',
        'app.women',
        'app.portraits',
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
        $config = TableRegistry::exists('Affiliations') ? [] : ['className' => 'App\Model\Table\AffiliationsTable'];
        $this->Affiliations = TableRegistry::get('Affiliations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Affiliations);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
