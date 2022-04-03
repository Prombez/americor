<?php
namespace app\models\traits\sms;

use app\models\History;

trait HistoryMessageTrait
{
    public function getHistoryMessage(History $model)
    {
        return $this->message ? $this->message : '';
    }
}