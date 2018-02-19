<?php

namespace deadly299\notification\models;

use Yii;

/**
 * This is the model class for table "notification".
 *
 * @property integer $id
 * @property string $model_name
 * @property integer $item_id
 * @property integer $user_send
 * @property integer $user_recipient
 */
class Notification extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'notification';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id', 'user_send', 'user_recipient'], 'integer'],
            [['model_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'model_name' => 'Model Name',
            'item_id' => 'Item ID',
            'user_send' => 'User Send',
            'user_recipient' => 'User Recipient',
        ];
    }
}
