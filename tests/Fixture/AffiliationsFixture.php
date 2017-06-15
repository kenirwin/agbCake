<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AffiliationsFixture
 *
 */
class AffiliationsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'convent_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'religious_order_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'religious_order_convent_fk' => ['type' => 'index', 'columns' => ['religious_order_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['convent_id', 'religious_order_id'], 'length' => []],
            'convent_order_fk' => ['type' => 'foreign', 'columns' => ['convent_id'], 'references' => ['convents', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'religious_order_convent_fk' => ['type' => 'foreign', 'columns' => ['religious_order_id'], 'references' => ['religious_orders', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'convent_id' => 1,
            'religious_order_id' => 1
        ],
    ];
}
