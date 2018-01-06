<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use \frontend\controllers\CommonController;
use \yii\data\Pagination ;
use backend\models\Region;

/**
 * Site controller
 */
class AreaController extends CommonController
{
    //关闭防csrf验证
    public $enableCsrfValidation = false;

    //工作分类列表
    public function actionLists()
    {
        $type = Region::find()

            ->asArray()
            ->all();
        $data = $this->GetArea($type,0,0);
        return $this->render('lists',['data'=>$data]);
    }

    //添加分类
    public function actionAdd()
    {
        if(Yii::$app->request->isPost){
            $data = Yii::$app->request->post();
            $model = new Region();
            $model->region_name = $data['region_name'];
            $model->parent_id = $data['parent_id'];
            if($model->save()) {
                $this->redirect(['area/lists']);
            }
        }else{
            $type = Region::find()
                ->asArray()
                ->all();
            $data = $this->GetArea($type,0,0);
            return $this->render('add',['data'=>$data]);
        }

    }

    //删除操作
    public function actionDel()
    {
        $id = Yii::$app->request->get('id');
        $customer = Region::findOne($id);
        $res = $customer->delete();
        if($res){
            $this->redirect(['area/lists']);
        }
    }

    //修改
    public function actionUpd()
    {
        $id = Yii::$app->request->get('id');
        $info = Region::find()
            ->where(['region_id'=>$id])
            ->asArray()
            ->one()
        ;
        $type = Region::find()
            ->asArray()
            ->all();
        $data = $this->GetArea($type,0,0);

        return $this->render('edit',[
            'info'=>$info,
            'data'=>$data
        ]);
    }

    public function actionUpd_do()
    {
        $data = Yii::$app->request->post();
        //var_dump($data);exit;
        $id = $data['id'];
        $customer = Region::findOne($id);
        $customer->region_name = $data['region_name'];
        $customer->parent_id = $data['parent_id'];
        $res = $customer->save();
        if($res){
            $this->redirect(['area/lists']);
        }
    }

}