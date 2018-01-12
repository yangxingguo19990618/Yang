<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use \frontend\controllers\CommonController;
use backend\models\Admin;
use backend\models\Friend;

/**
 * Site controller
 */
class FriendController extends CommonController
{
    //关闭防csrf验证
    public $enableCsrfValidation = false;

    //工作分类列表
    public function actionLists()
    {
        $links = Friend::find()
            ->asArray()
            ->all();

        return $this->render('lists',['data'=>$links]);
    }

    //添加分类
    public function actionAdd()
    {
        if(Yii::$app->request->isPost){
            $data = Yii::$app->request->post();
            $model = new Friend();
            $model->friend_name = $data['friend_name'];
            $model->friend_src = $data['friend_src'];
            if($model->save()) {
                $this->redirect(['friend/lists']);
            }
        }else{

            return $this->render('add');
        }

    }

    //删除操作
    public function actionDel()
    {
        $id = Yii::$app->request->get('id');
        $customer = Friend::findOne($id);
        $res = $customer->delete();
        if($res){
            $this->redirect(['friend/lists']);
        }
    }

    //修改
    public function actionUpd()
    {
        $id = Yii::$app->request->get('id');
        $info = Friend::find()
            ->where(['friend_id'=>$id])
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
        $customer = Friend::findOne($id);
        $customer->friend_name = $data['friend_name'];
        $customer->friend_src = $data['friend_src'];
        $res = $customer->save();
        if($res){
            $this->redirect(['friend/lists']);
        }
    }

}