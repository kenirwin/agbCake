<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ArchitecturalImage Entity
 *
 * @property int $id
 * @property string $title
 * @property int $convent_id
 * @property string $image_type
 * @property string $image_url
 * @property string $image_dir
 * @property string $image
 * @property string $image_source
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Convent $convent
 */
class ArchitecturalImage extends Entity
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
