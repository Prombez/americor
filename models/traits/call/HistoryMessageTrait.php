<?php
namespace app\models\traits\call;

use app\models\History;

trait HistoryMessageTrait
{
    public function getHistoryMessage(History $model)
    {
        return $this->totalStatusText . ($this->getTotalDisposition(false) ? " <span class='text-grey'>" . $this->getTotalDisposition(false) . "</span>" : "");
    }
}