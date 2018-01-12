<?php
namespace frontend\controllers;

use Yii;
use frontend\controllers\CommonController;
use yii\web\Controller;
use frontend\models\UsersInfo;
use frontend\models\Education;
use frontend\models\WorkExp;

/**
 * Site controller
 */
class JianliController extends CommonController
{
    //关闭防csrf验证
    public $enableCsrfValidation = false;

    public function actionIndex()
    {

        //基本信息
        $session = \Yii::$app->session;
        $id = $session->get('u_id');
        //var_dump($id);die;
        $basic = UsersInfo::find()
            ->where(['id'=>$id])
            ->asArray()
            ->one();
        //var_dump($basic);die;

        //教育背景信息
        $edu = Education::find()
            ->where(['edu_id'=>$basic['id']])
            ->asArray()
            ->one();
        //var_dump($edu);die;

        //工作经验信息
        $work = WorkExp::find()
            ->where(['id'=>$basic['id']])
            ->asArray()
            ->one();

        return $this->render('jianli',[
            'basic'=>$basic,
            'edu'=>$edu,
            'work'=>$work,

        ]);
    }

    //工作经验信息
    protected function Work_exp()
    {

        return $work;
    }


    //基本信息
    public function actionBasic()
    {
        $data = Yii::$app->request->post();
        var_dump($data);
    }

}