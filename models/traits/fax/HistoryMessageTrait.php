<?php
namespace app\models\traits\fax;

use app\models\History;

trait HistoryMessageTrait
{
    public function getHistoryMessage(History $model)
    {
        return $model->eventText;
    }
}