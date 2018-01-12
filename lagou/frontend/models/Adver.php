<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "adver".
 *
 * @property integer $adver_id
 * @property string $adver_name
 * @property integer $adver_place_id
 * @property string $adver_img
 * @property string $adver_link
 * @property string $adver_content
 * @property string $adver_start_time
 * @property string $adver_end_time
 * @property integer $adver_sort
 * @property integer $show_status
 * @property integer $del_status
 */
class Adver extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adver';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['adver_place_id', 'adver_sort', 'show_status', 'del_status'], 'integer'],
            [['adver_name', 'adver_img', 'adver_link', 'adver_content', 'adver_start_time', 'adver_end_time'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'adver_id' => 'Adver ID',
            'adver_name' => 'Adver Name',
            'adver_place_id' => 'Adver Place ID',
            'adver_img' => 'Adver Img',
            'adver_link' => 'Adver Link',
            'adver_content' => 'Adver Content',
            'adver_start_time' => 'Adver Start Time',
            'adver_end_time' => 'Adver End Time',
            'adver_sort' => 'Adver Sort',
            'show_status' => 'Show Status',
            'del_status' => 'Del Status',
        ];
    }
}
