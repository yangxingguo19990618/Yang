<?php
/**
 * Created by PhpStorm.
 * User: YangXingguo
 * Date: 2018/4/13
 * Time: 9:54
 */
namespace app\controller;

use fastphp\base\Controller;
use app\models\CshowModel;


class CShowController extends Controller
{
    //首页方法，测试框架自定义DB、查询
    public function index()
    {
        $model = new CshowModel();
        $c_show = $model->where()->fetch();
        $this->assign('show',$c_show);
        $this->render();
    }
}