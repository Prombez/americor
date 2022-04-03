<?php

namespace app\widgets\HistoryList\helpers;

use app\models\Call;
use app\models\Customer;
use app\models\History;

class HistoryListHelper
{
    public static function getBodyByModel(History $model)
    {
        $entity = self::getTypeNames()[$model->event] ?? null;
        if ($entity) {
            if (isset($model->$entity)) return $model->$entity->getHistoryMessage($model);
            return '<i>Deleted</i>';
        }
        return $model->eventText;
    }

    // Можно переписать чтобы искало по тексу в event
    // TODO: Надо перенести чтобы определялось автоматом по списку классов которые у нас есть, чтобы не надо было дополнять

    public static function getTypeNames()
    {
        return [
            History::EVENT_CREATED_TASK => 'task',
            History::EVENT_COMPLETED_TASK => 'task',
            History::EVENT_UPDATED_TASK => 'task',
            History::EVENT_INCOMING_SMS => 'sms',
            History::EVENT_OUTGOING_SMS => 'sms',
            History::EVENT_OUTGOING_FAX => 'fax',
            History::EVENT_INCOMING_FAX => 'fax',
            History::EVENT_INCOMING_CALL => 'call',
            History::EVENT_OUTGOING_CALL => 'call',
            History::EVENT_CUSTOMER_CHANGE_TYPE => 'customer',
            History::EVENT_CUSTOMER_CHANGE_QUALITY => 'customer',
        ];
    }
}