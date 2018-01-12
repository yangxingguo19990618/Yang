<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "education".
 *
 * @property integer $edu_id
 * @property string $school_name
 * @property string $edu
 * @property string $major_name
 * @property string $begin_year
 * @property string $end_year
 * @property integer $user_info_id
 */
class Education extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'education';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_info_id'], 'integer'],
            [['school_name', 'edu', 'major_name', 'begin_year', 'end_year'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'edu_id' => 'Edu ID',
            'school_name' => 'School Name',
            'edu' => 'Edu',
            'major_name' => 'Major Name',
            'begin_year' => 'Begin Year',
            'end_year' => 'End Year',
            'user_info_id' => 'User Info ID',
        ];
    }
}
