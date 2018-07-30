<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArchitecturalStylesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArchitecturalStylesTable Test Case
 */
class ArchitecturalStylesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ArchitecturalStylesTable
     */
    public $ArchitecturalStyles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.architectural_styles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ArchitecturalStyles') ? [] : ['className' => 'App\Model\Table\ArchitecturalStylesTable'];
        $this->ArchitecturalStyles = TableRegistry::get('ArchitecturalStyles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ArchitecturalStyles);

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
