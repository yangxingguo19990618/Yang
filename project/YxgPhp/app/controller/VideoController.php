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


class VideoController extends Controller
{
    public function video()
    {
        session_start();
        if(empty($_SESSION['id']))
        {
            echo "<script>alert('您还没有登陆，点击确定返回登录');location.href='http://yxg.baowangadmin.com/login/login/'</script>";
        }
        //if(file_exists('D:/phpStudy/WWW/YxgPhp/static')){echo 1;die;}else{echo 0;die;}
        $video_info= (new VideoModel())->where(["id = :id"], [':id' => 1])->fetch();
        //var_dump($video_info);die;

        $this->assign('video_info', $video_info);
        return $this->render();
    }

    public function add_video()
    {
        session_start();
        if(empty($_SESSION['id']))
        {
            echo "<script>alert('您还没有登陆，点击确定返回登录');location.href='http://yxg.baowangadmin.com/login/login/'</script>";
        }
        return $this->render();
    }

    public function add_video_do()
    {
        $data['video_name'] = $_POST['video_name'];
        //var_dump($data['video_name']);
        //var_dump($_FILES);die;





        if ($_FILES["file"]["error"] > 0)
        {
            echo "Error: " . $_FILES["file"]["error"] . "<br />";
        }

        /*if(file_exists("static/upload/fei4.jpg")){
            echo 1;
        }else{
            echo 0;
        }
        die;*/

        if (file_exists("static/upload/" . $_FILES["file"]["name"]))
        {
            echo $_FILES["file"]["name"] . " 已经存在 ";die;
        }
        else
        {
            move_uploaded_file($_FILES["file"]["tmp_name"],"static/upload/" . $_FILES["file"]["name"]);

        }
        $video_src = '/static/upload/'.$_FILES['file']['name'];
        $data['video_src'] = $video_src;
        $data['addtime'] = date("Y-m-d H:is");
        $count = (new VideoModel)->add($data);
        if($count){
            echo "<script>alert('添加成功!');location.href='http://yxg.baowangadmin.com/video/video/'</script>";
        }

    }
}