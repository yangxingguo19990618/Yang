<?php
namespace frontend\controllers;

use Yii;
use yii\web\Response;

use frontend\controllers\CommonController;
use yii\web\Controller;

/**
 * Site controller
 */
class ResumeController extends CommonController
{
    //关闭防csrf验证
    public $enableCsrfValidation = false;

}