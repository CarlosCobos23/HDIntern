<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Item Entity
 *
 * @property int $id
 * @property string $name
 * @property int $itemcategory_id
 * @property int $currency_id
 * @property string $model
 * @property string $color
 * @property float $unit_cost
 * @property int $brand_id
 *
 * @property \App\Model\Entity\Itemcategory $itemcategory
 * @property \App\Model\Entity\Currency $currency
 * @property \App\Model\Entity\Brand $brand
 * @property \App\Model\Entity\Itemcode[] $itemcodes
 * @property \App\Model\Entity\StockmovesDetail[] $stockmoves_details
 * @property \App\Model\Entity\Stock[] $stocks
 */
class Item extends Entity
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
