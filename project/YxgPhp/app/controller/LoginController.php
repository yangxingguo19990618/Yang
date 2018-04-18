<?php
/**
 * Created by PhpStorm.
 * User: YangXingguo
 * Date: 2018/4/13
 * Time: 9:54
 */
namespace app\controller;

use fastphp\base\Controller;
use app\models\AdminModel;


class LoginController extends Controller
{

    public function login()
    {
        return $this->render();
    }

    public function login_do()
    {
        $data = $_POST;
        $model = new AdminModel();
        $items = $model->fetch();
        $username = $items['username'];
        $pwd = $items['pwd'];
        if($data['username'] == $username && md5($data['pwd']) == $pwd){
            session_start();
            $_SESSION['id'] = $items['id'];
            echo "<script>alert('欢迎登录！');location.href='http://yxg.baowangadmin.com/index/index/'</script>";
        }else{
            echo "<script>alert('账号或密码错误');location.href='http://yxg.baowangadmin.com/login/login/'</script>";
        }

    }

}