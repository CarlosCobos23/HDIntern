<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * StockmovesDetail Entity
 *
 * @property int $id
 * @property int $stockmove_id
 * @property int $item_id
 * @property int $itemcode_id
 * @property int $qty
 * @property \Cake\I18n\FrozenTime $deliverydate
 *
 * @property \App\Model\Entity\Stockmove $stockmove
 * @property \App\Model\Entity\Item $item
 * @property \App\Model\Entity\Itemcode $itemcode
 */
class StockmovesDetail extends Entity
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
