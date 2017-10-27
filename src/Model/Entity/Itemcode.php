<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Itemcode Entity
 *
 * @property int $id
 * @property int $item_id
 * @property string $serial
 * @property int $invoice_id
 * @property int $statusitem_id
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $warranty
 * @property int $positionbranch_id
 * @property string $service_tag
 *
 * @property \App\Model\Entity\Item $item
 * @property \App\Model\Entity\Invoice $invoice
 * @property \App\Model\Entity\Statusitem $statusitem
 * @property \App\Model\Entity\Positionbranch $positionbranch
 * @property \App\Model\Entity\StockmovesDetail[] $stockmoves_details
 * @property \App\Model\Entity\Ticket[] $tickets
 */
class Itemcode extends Entity
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
