<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "m_job_title".
 *
 * @property int $job_title_id
 * @property string $job_title_name
 * @property int $create_id
 * @property string $create_date
 */
class JobTitle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'm_job_title';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['job_title_name', 'create_id', 'create_date'], 'required'],
            [['create_id'], 'integer'],
            [['create_date'], 'safe'],
            [['job_title_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'job_title_id' => 'Job Title ID',
            'job_title_name' => 'Job Title Name',
            'create_id' => 'Create ID',
            'create_date' => 'Create Date',
        ];
    }
}
