<?php
namespace app\models\traits\task;

use app\models\History;

trait HistoryMessageTrait
{
    public function getHistoryMessage(History $model)
    {
        return "$model->eventText: " . ($this->title ?? '');
    }
}