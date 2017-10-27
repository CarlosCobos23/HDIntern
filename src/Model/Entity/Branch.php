<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Branch Entity
 *
 * @property int $id
 * @property string $name
 * @property int $branchgroup_id
 *
 * @property \App\Model\Entity\Branchgroup $branchgroup
 * @property \App\Model\Entity\Layout[] $layouts
 * @property \App\Model\Entity\Positionbranch[] $positionbranches
 * @property \App\Model\Entity\Warehouse[] $warehouses
 */
class Branch extends Entity
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
