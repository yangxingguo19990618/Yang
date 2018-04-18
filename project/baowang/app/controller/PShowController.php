<?php
/**
 * Created by PhpStorm.
 * User: YangXingguo
 * Date: 2018/4/13
 * Time: 9:54
 */
namespace app\controller;

use fastphp\base\Controller;
use app\models\ProductModel;


class PShowController extends Controller
{
    //首页方法，测试框架自定义DB、查询
    public function index()
    {
        $model = new ProductModel();
        $data = $model->where(['id <=6'])->fetchAll();
        $this->assign('data',$data);
        $this->render();
    }
}