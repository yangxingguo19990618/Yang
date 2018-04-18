<?php
/**
 * Created by PhpStorm.
 * User: YangXingguo
 * Date: 2018/4/13
 * Time: 9:54
 */
namespace app\controller;

use fastphp\base\Controller;
use app\models\NavModel;


class NavController extends Controller
{
    public function nav_lists()
    {
        session_start();
        if(empty($_SESSION['id']))
        {
            echo "<script>alert('您还没有登陆，点击确定返回登录');location.href='http://yxg.baowangadmin.com/login/login/'</script>";
        }
        $model = new NavModel();
        //var_dump($model);die;
        $nav_info = $model->fetchAll();

        $this->assign('nav_info', $nav_info);
        return $this->render();
    }
    public function nav_add()

    {
        session_start();
        if(empty($_SESSION['id']))
        {
            echo "<script>alert('您还没有登陆，点击确定返回登录');location.href='http://yxg.baowangadmin.com/login/login/'</script>";
        }
        return $this->render();
    }

    public function nav_add_do()
    {

        $data['nav_name'] = $_POST['nav_name'];
        $data['nav_link'] = $_POST['nav_link'];
        $data['datetime'] = date('Y-m-d H:i:s');
        $count = (new NavModel)->add($data);
        if($count){
            echo "<script>alert('添加成功!');location.href='http://yxg.baowangadmin.com/nav/nav_lists/'</script>";
        }


    }

    public function delete($id = null)
    {
        //var_dump($id);die;
        $nav_del = (new NavModel)->delete($id);
        if($nav_del)
        {
            echo "<script>location.href='http://yxg.baowangadmin.com/nav/nav_lists/'</script>";
        }
    }

    public function nav_edit($id = 0)
    {
        $nav_upd_info = array();
        if ($id) {
            // 通过名称占位符传入参数
            $nav_upd_info = (new NavModel())->where(["id = :id"], [':id' => $id])->fetch();
        }
        $this->assign('nav_upd_info',$nav_upd_info);
        $this->render('friend_edit.php');

    }

    public function update()
    {
        $data = array('id' => $_POST['id'], 'nav_name' => $_POST['nav_name'],'nav_link' => $_POST['nav_link']);
        $nav_upd = (new NavModel)->where(['id = :id'], [':id' => $data['id']])->update($data);
        if($nav_upd){
            echo "<script>alery('修改成功！');location.href=''</script>";
        }
    }

}