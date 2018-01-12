<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "users_info".
 *
 * @property integer $id
 * @property string $user_name
 * @property string $user_sex
 * @property string $user_age
 * @property string $user_email
 * @property string $user_card
 * @property string $user_img
 * @property string $user_really_name
 * @property string $user_tel
 * @property string $work_exp
 * @property string $status
 * @property integer $edu_id
 */
class UsersInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['edu_id'], 'integer'],
            [['user_name', 'user_sex', 'user_age', 'user_email', 'user_card', 'user_img', 'user_really_name', 'user_tel', 'work_exp', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_name' => 'User Name',
            'user_sex' => 'User Sex',
            'user_age' => 'User Age',
            'user_email' => 'User Email',
            'user_card' => 'User Card',
            'user_img' => 'User Img',
            'user_really_name' => 'User Really Name',
            'user_tel' => 'User Tel',
            'work_exp' => 'Work Exp',
            'status' => 'Status',
            'edu_id' => 'Edu ID',
        ];
    }
}
