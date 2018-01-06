<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nav".
 *
 * @property integer $id
 * @property string $nav_name
 * @property string $nav_link
 */
class Nav extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nav';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nav_name', 'nav_link'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nav_name' => 'Nav Name',
            'nav_link' => 'Nav Link',
        ];
    }
}
