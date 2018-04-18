<?php
/**
 * Created by PhpStorm.
 * User: YangXingguo
 * Date: 2018/4/13
 * Time: 9:54
 */
namespace app\controller;

use fastphp\base\Controller;
use app\models\RelationModel;


class RelationController extends Controller
{
    //首页方法，测试框架自定义DB、查询
    public function index()
    {
        $model = new RelationModel();
        $data = $model->where()->fetch();
        $this->assign('data',$data);
        $this->render();
    }
}