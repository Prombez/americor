<?php
namespace app\models\traits\customer;

use \Yii;

trait CustomerTypeTextTrait
{
    /**
     * @return array
     */
    public static function getTypeTexts()
    {
        return [
            self::TYPE_LEAD => Yii::t('app', 'Lead'),
            self::TYPE_DEAL => Yii::t('app', 'Deal'),
            self::TYPE_LOAN => Yii::t('app', 'Loan'),
        ];
    }

    /**
     * @param $type
     * @return mixed
     */
    public static function getTypeTextByType($type)
    {
        return self::getTypeTexts()[$type] ?? $type;
    }
}