<?php
namespace frontend\controllers;

use Yii;
use frontend\controllers\CommonController;
use yii\web\Controller;

/**
 * Site controller
 */
class UsersController extends CommonController
{
    //关闭防csrf验证
    public $enableCsrfValidation = false;

}