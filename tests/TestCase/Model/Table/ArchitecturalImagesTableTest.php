<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArchitecturalImagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArchitecturalImagesTable Test Case
 */
class ArchitecturalImagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ArchitecturalImagesTable
     */
    public $ArchitecturalImages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.architectural_images',
        'app.convents',
        'app.roles',
        'app.women',
        'app.portraits',
        'app.affiliations',
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
        $config = TableRegistry::exists('ArchitecturalImages') ? [] : ['className' => 'App\Model\Table\ArchitecturalImagesTable'];
        $this->ArchitecturalImages = TableRegistry::get('ArchitecturalImages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ArchitecturalImages);

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
