<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Portrait Entity
 *
 * @property int $id
 * @property string $title
 * @property int $woman_id
 * @property string $painter
 * @property string $painter_viaf
 * @property int $date_painted
 * @property string $date_painted_approx
 * @property string $notes
 * @property string|resource $image_file
 * @property string $image_path_lo
 * @property string $image_path_hi
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Woman $woman
 */
class Portrait extends Entity
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
