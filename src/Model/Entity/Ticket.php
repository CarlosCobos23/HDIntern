<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ticket Entity
 *
 * @property int $id
 * @property int $tickettype_id
 * @property int $ticket_status_id
 * @property string $source_id
 * @property string $title
 * @property string $description
 * @property string $solution
 * @property string $resolution
 * @property int $itemcode_id
 * @property int $user_id
 * @property int $group_id
 * @property int $user_autor
 * @property int $user_requeried
 * @property \Cake\I18n\FrozenTime $created
 * @property int $ticketimpact_id
 * @property int $ticketurgency_id
 * @property int $ticketpriority_id
 * @property int $parent_id
 * @property int $hdcategory_id
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Tickettype $tickettype
 * @property \App\Model\Entity\Ticketstatus $ticket_status
 * @property \App\Model\Entity\Source $source
 * @property \App\Model\Entity\Itemcode $itemcode
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Group $group
 * @property \App\Model\Entity\Ticketimpact $ticketimpact
 * @property \App\Model\Entity\Ticketurgency $ticketurgency
 * @property \App\Model\Entity\Ticketpriority $ticketpriority
 * @property \App\Model\Entity\Hdcategory $hdcategory
 * @property \App\Model\Entity\Internalnote[] $internalnotes
 * @property \App\Model\Entity\Publicnote[] $publicnotes
 * @property \App\Model\Entity\Ticketlog[] $ticketlogs
 * @property \App\Model\Entity\Ticketsfile[] $ticketsfiles
 */
class Ticket extends Entity
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
