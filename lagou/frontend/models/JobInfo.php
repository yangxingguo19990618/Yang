<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "job_info".
 *
 * @property integer $job_id
 * @property integer $commpany_id
 * @property string $job_name
 * @property integer $job_type_id
 * @property string $job_money
 * @property integer $area_id
 * @property string $job_address
 * @property integer $school_id
 * @property string $job_pay
 * @property string $job_addtime
 * @property string $job_clicks
 * @property string $show_status
 * @property string $job_people
 * @property string $job_content
 * @property string $del_status
 */
class JobInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'job_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['commpany_id', 'job_type_id', 'area_id', 'study_id'], 'integer'],
            [['job_name', 'job_money', 'job_pay', 'job_addtime', 'job_clicks', 'show_status', 'job_people', 'job_content', 'del_status'], 'string', 'max' => 255],
            [['job_address'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'job_id' => 'Job ID',
            'commpany_id' => 'Commpany ID',
            'job_name' => 'Job Name',
            'job_type_id' => 'Job Type ID',
            'job_money' => 'Job Money',
            'area_id' => 'Area ID',
            'job_address' => 'Job Address',
            'study_id' => 'Study ID',
            'job_pay' => 'Job Pay',
            'job_addtime' => 'Job Addtime',
            'job_clicks' => 'Job Clicks',
            'show_status' => 'Show Status',
            'job_people' => 'Job People',
            'job_content' => 'Job Content',
            'del_status' => 'Del Status',
        ];
    }
}
