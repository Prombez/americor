<?php

namespace app\models;


use app\models\interfaces\CustomerQualityInterface;
use app\models\interfaces\CustomerTypeInterface;
use app\models\interfaces\HistoryEventTextInterface;
use app\models\traits\customer\CustomerTypeTextTrait;
use app\models\traits\customer\CustomerQualityTextTrait;
use app\models\traits\customer\HistoryMessageTrait;
use Yii;
use yii\db\ActiveRecord;


/**
 * This is the model class for table "{{%customer}}".
 *
 * @property integer $id
 * @property string $name
 */
class Customer extends ActiveRecord implements CustomerQualityInterface, CustomerTypeInterface, HistoryEventTextInterface
{
    use CustomerTypeTextTrait, CustomerQualityTextTrait, HistoryMessageTrait;


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%customer}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => Yii::t('app', 'Name'),
        ];
    }
}