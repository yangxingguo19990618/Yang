<?php
namespace backend\controllers;

use Yii;
//调用Url跳转
use yii\helpers\Url;
use yii\web\Controller;
//调用模型层
use yii\web\UploadedFile;

/**
 * Site controller
 */
class IndexController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionIndex()
    {

        $session = \Yii::$app->session;
        $id = $session->get('u_id');
        if(empty($id)) {
            echo "<script>alert('请先登录');location.href='http://yxg.lagouadmin.com/index.php?r=login/login'</script>";
        }
        return $this->render('index');
    }

}