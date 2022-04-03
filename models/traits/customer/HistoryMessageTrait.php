<?php

namespace app\models\traits\customer;

use app\models\Customer;
use app\models\History;

trait HistoryMessageTrait
{
    public function getHistoryMessage(History $model)
    {
        switch ($model->event) {
            case History::EVENT_CUSTOMER_CHANGE_TYPE:
                return "$model->eventText " .
                    (self::getTypeTextByType($model->getDetailOldValue('type')) ?? "not set") . ' to ' .
                    (self::getTypeTextByType($model->getDetailNewValue('type')) ?? "not set");
            case History::EVENT_CUSTOMER_CHANGE_QUALITY:
                return "$model->eventText " .
                    (self::getQualityTextByQuality($model->getDetailOldValue('quality')) ?? "not set") . ' to ' .
                    (self::getQualityTextByQuality($model->getDetailNewValue('quality')) ?? "not set");
        }
        return '';
    }
}