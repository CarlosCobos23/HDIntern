<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Layoutcategory Entity
 *
 * @property int $id
 * @property int $itemcategory_id
 * @property int $layout_id
 * @property int $qty
 * @property int $compare
 *
 * @property \App\Model\Entity\Itemcategory $itemcategory
 * @property \App\Model\Entity\Layout $layout
 */
class Layoutcategory extends Entity
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
