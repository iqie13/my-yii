<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "avatar".
 *
 * @property int $ava_id
 * @property int $user_id
 * @property string $ava_name
 * @property string $ava_url
 * @property int $status_id
 */
class Avatar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'avatar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'ava_name', 'ava_url', 'status_id'], 'required'],
            [['user_id', 'status_id'], 'integer'],
            [['ava_name'], 'string', 'max' => 200],
            [['ava_url'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ava_id' => 'Ava ID',
            'user_id' => 'User ID',
            'ava_name' => 'Ava Name',
            'ava_url' => 'Ava Url',
            'status_id' => 'Status ID',
        ];
    }
}
