<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Stockmove Entity
 *
 * @property int $id
 * @property int $warehouse_id
 * @property int $warehouse_2
 * @property int $receiver
 * @property string $receiver_sign
 * @property int $movereason_id
 * @property int $shipper_id
 * @property string $guide_number
 * @property int $packages
 * @property int $user_id
 * @property string $notes
 * @property int $confirmed
 * @property int $parent_id
 *
 * @property \App\Model\Entity\Warehouse $warehouse
 * @property \App\Model\Entity\Movereason $movereason
 * @property \App\Model\Entity\Shipper $shipper
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\StockmovesDetail[] $stockmoves_details
 */
class Stockmove extends Entity
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
