<?php
namespace frontend\controllers;

use Yii;
use frontend\controllers\CommonController;
use yii\web\Controller;

/**
 * Site controller
 */
class CompanyController extends CommonController
{
    //关闭防csrf验证
    public $enableCsrfValidation = false;

    public function actionIndex()
    {
        return $this->render('companylist');
    }

}