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
    public function relation()
    {
        session_start();
        if(empty($_SESSION['id']))
        {
            echo "<script>alert('您还没有登陆，点击确定返回登录');location.href='http://yxg.baowangadmin.com/login/login/'</script>";
        }

        $data= (new RelationModel())->where(["id = :id"], [':id' => 1])->fetch();

        $this->assign('data', $data);
        return $this->render();
    }

    public function add_company()
    {
        session_start();
        if(empty($_SESSION['id']))
        {
            echo "<script>alert('您还没有登陆，点击确定返回登录');location.href='http://yxg.baowangadmin.com/login/login/'</script>";
        }
        return $this->render();
    }

    public function add_invite_do()
    {

    }
}