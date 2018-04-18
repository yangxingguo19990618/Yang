<?php
/**
 * Created by PhpStorm.
 * User: YangXingguo
 * Date: 2018/4/13
 * Time: 9:54
 */
namespace app\controller;

use fastphp\base\Controller;
use app\models\VideoModel;
use app\models\ProductModel;


class IndexController extends Controller
{
    //首页方法，测试框架自定义DB、查询
    public function index()
    {

        $vmodel = new VideoModel();
        $pmodel = new ProductModel();
        //var_dump($model);die;
        //查询视频
        $video = $vmodel->where()->order(['addtime ASC'])->fetch();
        //查询最新添加的五条产品信息
        $product_info = $pmodel->where(['id <=5'])->fetchAll();
        $this->assign('video',$video);
        $this->assign('product',$product_info);
        $this->render();
    }
}