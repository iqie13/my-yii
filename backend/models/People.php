<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "m_people".
 *
 * @property int $people_id
 * @property string $people_name
 * @property int $job_title_id
 * @property string $email
 * @property string $join_date
 * @property int $status_id
 * @property string $create_date
 * @property int $create_id
 * @property string $update_date
 * @property int $update_id
 */
class People extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'm_people';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['people_name', 'job_title_id', 'email', 'join_date', 'status_id', 'create_date', 'create_id'], 'required'],
            [['job_title_id', 'status_id', 'create_id', 'update_id'], 'integer'],
            [['join_date', 'create_date', 'update_date'], 'safe'],
            [['people_name'], 'string', 'max' => 500],
            [['email'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'people_id' => 'People ID',
            'people_name' => 'People Name',
            'job_title_id' => 'Job Title ID',
            'email' => 'Email',
            'join_date' => 'Join Date',
            'status_id' => 'Status ID',
            'create_date' => 'Create Date',
            'create_id' => 'Create ID',
            'update_date' => 'Update Date',
            'update_id' => 'Update ID',
        ];
    }
}
