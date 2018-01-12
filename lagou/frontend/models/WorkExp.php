<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "work_exp".
 *
 * @property integer $id
 * @property string $company_name
 * @property string $occ_name
 * @property string $begin_year
 * @property string $begin_month
 * @property string $end_year
 * @property string $end_month
 * @property integer $user_info_id
 */
class WorkExp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'work_exp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_info_id'], 'integer'],
            [['company_name', 'occ_name', 'begin_year', 'begin_month', 'end_year', 'end_month'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_name' => 'Company Name',
            'occ_name' => 'Occ Name',
            'begin_year' => 'Begin Year',
            'begin_month' => 'Begin Month',
            'end_year' => 'End Year',
            'end_month' => 'End Month',
            'user_info_id' => 'User Info ID',
        ];
    }
}
