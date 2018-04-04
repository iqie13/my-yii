<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "m_menu".
 *
 * @property int $menu_id
 * @property string $menu_name
 * @property string $menu_url
 * @property string $menu_condition
 * @property int $menu_parent_id
 * @property int $active_status
 * @property string $menu_icon
 * @property string $create_date
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'm_menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['menu_id', 'menu_name', 'menu_url', 'menu_condition', 'menu_parent_id', 'active_status', 'menu_icon', 'create_date'], 'required'],
            [['menu_id', 'menu_parent_id', 'active_status'], 'integer'],
            [['create_date'], 'safe'],
            [['menu_name'], 'string', 'max' => 100],
            [['menu_url'], 'string', 'max' => 200],
            [['menu_condition'], 'string', 'max' => 300],
            [['menu_icon'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'menu_id' => 'Menu ID',
            'menu_name' => 'Menu Name',
            'menu_url' => 'Menu Url',
            'menu_condition' => 'Menu Condition',
            'menu_parent_id' => 'Menu Parent ID',
            'active_status' => 'Active Status',
            'menu_icon' => 'Menu Icon',
            'create_date' => 'Create Date',
        ];
    }
}
