<?php

namespace app\models\traits;

trait HistoryDetailAttributeTrait
{
    public $detail;
    /**
     * @param $attribute
     * @return null
     */
    public function getDetailChangedAttribute($attribute)
    {
        return $this->detail->changedAttributes->{$attribute} ?? null;
    }

    /**
     * @param $attribute
     * @return null
     */
    public function getDetailOldValue($attribute)
    {
        $detail = $this->getDetailChangedAttribute($attribute);
        return $detail->old ?? null;
    }

    /**
     * @param $attribute
     * @return null
     */
    public function getDetailNewValue($attribute)
    {
        $detail = $this->getDetailChangedAttribute($attribute);
        return $detail->new ?? null;
    }

    /**
     * @param $attribute
     * @return null
     */
    public function getDetailData($attribute)
    {
        return $this->detail->data->{$attribute} ?? null;
    }

}