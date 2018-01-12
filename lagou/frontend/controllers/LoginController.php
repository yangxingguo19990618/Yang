<?php
namespace frontend\controllers;

use Yii;
use app\models\News;
use  \yii\data\Pagination ;
use yii\web\Response;
use frontend\models\Users;
use frontend\controllers\CommonController;
use yii\web\Controller;

/**
 * Site controller
 */
class LoginController extends CommonController
{
    //关闭防csrf验证
    public $enableCsrfValidation = false;

    //验证码
    public function actions(){
        return [
            'captchatest' => [
                'class' => 'yii\captcha\CaptchaAction',
                'maxLength' => 4, //生成的验证码最大长度
                'minLength' => 4  //生成的验证码最短长度
            ]
        ];
    }

    public function actionLogin()
    {
        if(Yii::$app->request->isAjax) {
            $data = Yii::$app->request->post();
            //$model =  new Users();
            $res = Users::find()
                ->where([
                    'email'=>$data['email'],
                    'password'=>md5($data['password'])
                ])
                ->asArray()
                ->one();
            if($res) {
                $session = \Yii::$app->session;
                $session->set('u_id' ,$res['id']);
                Yii::$app->response->format= \yii\web\Response::FORMAT_JSON;
                return ['result'=>1];
            }
        }
        return $this->render('login');
    }

    public function actionReg()
    {

        if(Yii::$app->request->isAjax){
            $data = Yii::$app->request->post();
            //var_dump($data['email']);exit;
            $model = new Users();
            $model->email = $data['email'];
            $model->password = md5($data['password']);
            $model->status = $data['type'];
            $res = $model->save();
            if($res) {
                Yii::$app->response->format= \yii\web\Response::FORMAT_JSON;
                return ['result'=>$res];
            }
        }else{
            return $this->render('register');
        }
    }

    public function actionExit()
    {
        $session = \Yii::$app->session;
        $remove = $session->remove('u_id');
        if($remove){
            $this->redirect(['index/index']);
        }
    }
}