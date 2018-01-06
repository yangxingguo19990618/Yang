<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\Admin;

/**
 * Site controller
 */
class LoginController extends Controller
{
    //关闭防csrf验证
    public $enableCsrfValidation = false;

    //超级管理员登录
    public function actionLogin()
    {
        if(Yii::$app->request->isPost) {
            $data = Yii::$app->request->post();
            $res = Admin::find()
                ->where([
                    'username'=>$data['username'],
                    'password'=>md5($data['password'])
                    ])
                ->asArray()
                ->one();
            //var_dump($res);exit;
            if($res) {
                $session = \Yii::$app->session;
                $session->set('u_id' ,$res['id']);
                $this->redirect(['index/index']);
            }
        }
        $this->layout = false;
        return $this->render('login');
    }

    public function actionExits()
    {
        $session = \Yii::$app->session;
        $remove = $session->remove('u_id');
        if($remove)
        {
            $this->redirect(['index/index']);
        }
    }
}