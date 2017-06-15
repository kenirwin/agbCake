<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Affiliation Entity
 *
 * @property int $convent_id
 * @property int $religious_order_id
 *
 * @property \App\Model\Entity\Convent $convent
 * @property \App\Model\Entity\ReligiousOrder $religious_order
 */
class Affiliation extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'convent_id' => false,
        'religious_order_id' => false
    ];
}
