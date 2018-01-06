<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use \frontend\controllers\CommonController;
use backend\models\Admin;
use backend\models\TypeList;

/**
 * Site controller
 */
class TypeController extends CommonController
{
    //关闭防csrf验证
    public $enableCsrfValidation = false;

    //工作分类列表
    public function actionTypelist()
    {
        $type = TypeList::find()
            ->asArray()
            ->all();
        $data = $this->GetTree($type,0,0);
        return $this->render('type',['data'=>$data]);
    }

    //添加分类
    public function actionAddtype()
    {
        if(Yii::$app->request->isPost){
            $data = Yii::$app->request->post();
            $model = new TypeList();
            $model->type_name = $data['type_name'];
            $model->parent_id = $data['parent_id'];
            if($model->save()) {
                $this->redirect(['type/typelist']);
            }
        }else{
            $type = TypeList::find()
                ->asArray()
                ->all();
            $data = $this->GetTree($type,0,0);
            return $this->render('addtype',['data'=>$data]);
        }

    }

    //删除操作
    public function actionDel()
    {
        $id = Yii::$app->request->get('id');
        $customer = TypeList::findOne($id);
        $res = $customer->delete();
        if($res){
            $this->redirect(['type/typelist']);
        }
    }

    //修改
    public function actionUpd()
    {
        $id = Yii::$app->request->get('id');
        $info = TypeList::find()
            ->where(['id'=>$id])
            ->asArray()
            ->one()
        ;
        $type = TypeList::find()
            ->asArray()
            ->all();
        $data = $this->GetTree($type,0,0);

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
        $customer = TypeList::findOne($id);
        $customer->type_name = $data['type_name'];
        $customer->parent_id = $data['parent_id'];
        $res = $customer->save();
        if($res){
            $this->redirect(['type/typelist']);
        }
    }

}