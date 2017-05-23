<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Convent Entity
 *
 * @property int $id
 * @property string $name
 * @property string $name_english
 * @property string $name_spanish
 * @property string $name_portuguese
 * @property string $name_other
 * @property string $city
 * @property string $country
 * @property int $date_founding
 * @property int $date_closing
 * @property string $latitude
 * @property string $longitude
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Woman[] $women
 */
class Convent extends Entity
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
        'id' => false
    ];
}
