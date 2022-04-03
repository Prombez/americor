<?php

namespace app\widgets\HistoryList\helpers;

use app\models\Call;
use app\models\Customer;
use app\models\History;

class HistoryListHelper
{
    public static function getBodyByModel(History $model)
    {
        if ($model->objectEvent !== null) return $model->objectEvent->getHistoryMessage($model);
        return '<i>Deleted</i>';
    }
}