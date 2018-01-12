<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "friend".
 *
 * @property integer $friend_id
 * @property string $friend_name
 * @property string $friend_src
 * @property string $del_status
 */
class Friend extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'friend';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['friend_name', 'friend_src', 'del_status'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'friend_id' => 'Friend ID',
            'friend_name' => 'Friend Name',
            'friend_src' => 'Friend Src',
            'del_status' => 'Del Status',
        ];
    }
}
