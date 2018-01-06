<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use \frontend\controllers\CommonController;
use backend\models\Admin;
use backend\models\Nav;

/**
 * Site controller
 */
class NavController extends CommonController
{
    //关闭防csrf验证
    public $enableCsrfValidation = false;

    //工作分类列表
    public function actionLists()
    {
        $type = Nav::find()
            ->asArray()
            ->all();

        return $this->render('navlist',['data'=>$type]);
    }

    //添加分类
    public function actionAdd()
    {
        if(Yii::$app->request->isPost){
            $data = Yii::$app->request->post();
            $model = new Nav();
            $model->nav_name = $data['nav_name'];
            $model->nav_link = $data['nav_link'];
            if($model->save()) {
                $this->redirect(['nav/lists']);
            }
        }else{

            return $this->render('add');
        }

    }

    //删除操作
    public function actionDel()
    {
        $id = Yii::$app->request->get('id');
        $customer = Nav::findOne($id);
        $res = $customer->delete();
        if($res){
            $this->redirect(['nav/lists']);
        }
    }

    //修改
    public function actionUpd()
    {
        $id = Yii::$app->request->get('id');
        $info = Nav::find()
            ->where(['id'=>$id])
            ->asArray()
            ->one()
        ;

        return $this->render('edit',[
            'info'=>$info,
        ]);
    }

    public function actionUpd_do()
    {
        $data = Yii::$app->request->post();
        //var_dump($data);exit;
        $id = $data['id'];
        $customer = Nav::findOne($id);
        $customer->nav_name = $data['nav_name'];
        $customer->nav_link = $data['nav_link'];
        $res = $customer->save();
        if($res){
            $this->redirect(['type/typelist']);
        }
    }

}