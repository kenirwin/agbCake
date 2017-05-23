<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Woman Entity
 *
 * @property int $id
 * @property string $name
 * @property string $viaf_url
 * @property string $name_english
 * @property string $name_spanish
 * @property string $name_portuguese
 * @property string $name_other
 * @property int $birth_approx
 * @property int $birth_year
 * @property int $death_approx
 * @property int $death_year
 * @property string $related_to
 * @property string $religious_order
 * @property string $notes
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Portrait[] $portraits
 * @property \App\Model\Entity\Convent[] $convents
 */
class Woman extends Entity
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
