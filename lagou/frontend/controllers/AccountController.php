<?php
namespace frontend\controllers;

use frontend\models\UsersInfo;
use Yii;
use frontend\models\Users;
use frontend\controllers\CommonController;
use yii\web\Controller;

/**
 * Site controller
 */
class AccountController extends CommonController
{
    //关闭防csrf验证
    public $enableCsrfValidation = false;

    public function actionIndex()
    {

        //当前账号信息
        $now_account = $this->Now_account();

        return $this->render('accountBind',[
            'now_account'=>$now_account
        ]);
    }

    public function actionPassword()
    {
        if(Yii::$app->request->isAjax)
        {
            $data = Yii::$app->request->post();
            $session = \Yii::$app->session;
            $id = $session->get('u_id' );
            $customer = Users::findOne($id);
            $customer->password = md5($data['newPassword']);
            $res = $customer->save();
            if($res){
                Yii::$app->response->format= \yii\web\Response::FORMAT_JSON;
                return ['resubmitToken'=>1];
            }
            die;
        }
        //获取当前账号信息
        $now_account = $this->Now_account();
        return $this->render('updatePwd',[
            'now_account'=>$now_account
        ]);
    }
    //当前登录账号
    protected function Now_account()
    {
        $session = \Yii::$app->session;
        $id = $session->get('u_id' );
        $info = Users::find()
            ->where(['id'=>$id])
            ->asArray()
            ->one()
        ;
        return $info;
    }

}