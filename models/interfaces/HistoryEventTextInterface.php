<?php

namespace app\models\interfaces;

use app\models\History;

interface HistoryEventTextInterface
{
    public function getHistoryMessage(History $model);
}