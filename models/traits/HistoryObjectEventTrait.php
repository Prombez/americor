<?php

namespace app\models\traits;

trait HistoryObjectEventTrait
{
    public static $objectClass = [
        'task' => 'task',
        'sms' => 'sms',
        'lead' => 'customer',
        'fax' => 'fax',
        'deal' => 'deal',
        'customer' => 'customer',
        'call_ytel' => 'call',
        'call' => 'call',
    ];
    
    public function getObjectEvent()
    {
        $attribute = self::$objectClass[$this->object];
        return $this->$attribute;
    }
}