<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Itemcategory Entity
 *
 * @property int $id
 * @property string $name
 * @property int $parent_id
 *
 * @property \App\Model\Entity\Itemcategory $parent_itemcategory
 * @property \App\Model\Entity\Itemcategory[] $child_itemcategories
 * @property \App\Model\Entity\Item[] $items
 * @property \App\Model\Entity\Layoutcategory[] $layoutcategories
 */
class Itemcategory extends Entity
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
