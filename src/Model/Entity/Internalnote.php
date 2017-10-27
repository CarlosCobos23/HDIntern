<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Internalnote Entity
 *
 * @property int $id
 * @property string $name
 * @property int $ticket_id
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Ticket $ticket
 * @property \App\Model\Entity\User $user
 */
class Internalnote extends Entity
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
