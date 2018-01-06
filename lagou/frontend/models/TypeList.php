<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "type_list".
 *
 * @property integer $id
 * @property string $type_name
 * @property integer $parent_id
 * @property integer $clikc_num
 */
class TypeList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'type_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'clikc_num'], 'integer'],
            [['type_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type_name' => 'Type Name',
            'parent_id' => 'Parent ID',
            'clikc_num' => 'Clikc Num',
        ];
    }
}
