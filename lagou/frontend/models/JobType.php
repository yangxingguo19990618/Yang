<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "job_type".
 *
 * @property integer $job_type_id
 * @property string $job_type_name
 * @property integer $parent_id
 * @property integer $clikc_num
 */
class JobType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'job_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'click_num'], 'integer'],
            [['job_type_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'job_type_id' => 'Job Type ID',
            'job_type_name' => 'Job Type Name',
            'parent_id' => 'Parent ID',
            'click_num' => 'Click Num',
        ];
    }
}
