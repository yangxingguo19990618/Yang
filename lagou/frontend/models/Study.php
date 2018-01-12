<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "study".
 *
 * @property integer $study_id
 * @property string $school_name
 * @property string $study_name
 * @property string $start_time
 * @property string $end_time
 * @property string $study_extent
 * @property string $del_status
 */
class Study extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'study';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['end_time'], 'safe'],
            [['school_name', 'study_name', 'start_time', 'study_extent', 'del_status'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'study_id' => 'Study ID',
            'school_name' => 'School Name',
            'study_name' => 'Study Name',
            'start_time' => 'Start Time',
            'end_time' => 'End Time',
            'study_extent' => 'Study Extent',
            'del_status' => 'Del Status',
        ];
    }
}
