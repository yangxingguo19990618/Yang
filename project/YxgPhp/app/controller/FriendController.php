<?php
/**
 * Created by PhpStorm.
 * User: YangXingguo
 * Date: 2018/4/13
 * Time: 9:54
 */
namespace app\controller;

use fastphp\base\Controller;
use app\models\FriendModel;


class FriendController extends Controller
{
    public function friend_lists()
    {
        session_start();
        if(empty($_SESSION['id']))
        {
            echo "<script>alert('您还没有登陆，点击确定返回登录');location.href='http://yxg.baowangadmin.com/login/login/'</script>";
        }
        $model = new FriendModel();
        //var_dump($model);die;
        $friend_info = $model->fetchAll();

        $this->assign('friend_info', $friend_info);
        return $this->render();
    }
    public function friend_add()
    {
        session_start();
        if(empty($_SESSION['id']))
        {
            echo "<script>alert('您还没有登陆，点击确定返回登录');location.href='http://yxg.baowangadmin.com/login/login/'</script>";
        }
        return $this->render();
    }

    public function friend_add_do()
    {

        $data['friend_name'] = $_POST['friend_name'];
        $data['friend_link'] = $_POST['friend_link'];
        $data['datetime'] = date('Y-m-d H:i:s');
        $count = (new FriendModel)->add($data);
        if($count){
            echo "<script>alert('添加成功!');location.href='http://yxg.baowangadmin.com/friend/friend_lists/'</script>";
        }


    }

    public function delete($id = null)
    {
        //var_dump($id);die;
        $nav_del = (new FriendModel)->delete($id);
        if($nav_del)
        {
            echo "<script>location.href='http://yxg.baowangadmin.com/friend/friend_lists/'</script>";
        }
    }

    public function friend_edit($id = 0)
    {
        $nav_upd_info = array();
        if ($id) {
            // 通过名称占位符传入参数
            $friend_upd_info = (new FriendModel())->where(["id = :id"], [':id' => $id])->fetch();
        }
        $this->assign('friend_upd_info',$friend_upd_info);
        $this->render();

    }

    public function update()
    {
        $data = array('id' => $_POST['id'], 'friend_name' => $_POST['friend_name'],'friend_link' => $_POST['friend_link']);
        $friend_upd = (new FriendModel)->where(['id = :id'], [':id' => $data['id']])->update($data);
        if($friend_upd){
            echo "<script>alert('修改成功！');location.href='http://yxg.baowangadmin.com/friend/friend_lists/'</script>";
        }
    }

}