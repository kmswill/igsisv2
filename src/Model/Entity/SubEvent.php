<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SubEvent Entity
 *
 * @property int $id
 * @property int $event_id
 * @property int $type_event_id
 * @property string $title
 * @property string $description
 * @property int $published
 *
 * @property \App\Model\Entity\Event $event
 * @property \App\Model\Entity\TypeEvent $type_event
 * @property \App\Model\Entity\HistoricOccurrence[] $historic_occurrences
 * @property \App\Model\Entity\Occurrence[] $occurrences
 */
class SubEvent extends Entity
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
