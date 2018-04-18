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


class ProductController extends Controller
{
    public function product_lists()
    {
        session_start();
        if(empty($_SESSION['id']))
        {
            echo "<script>alert('您还没有登陆，点击确定返回登录');location.href='http://yxg.baowangadmin.com/login/login/'</script>";
        }
        $model = new ProductModel();
        //var_dump($model);die;
        $data = $model->fetchAll();

        $this->assign('data', $data);
        return $this->render();
    }
    public function product_add()

    {
        session_start();
        if(empty($_SESSION['id']))
        {
            echo "<script>alert('您还没有登陆，点击确定返回登录');location.href='http://yxg.baowangadmin.com/login/login/'</script>";
        }
        return $this->render();
    }

    public function product_add_do()
    {

        $data = $_POST;
        //检测文件是否上传成功
        if ($_FILES["product_img"]["error"] > 0)
        {
            echo "Error: " . $_FILES["product_img"]["error"] . "<br />";
        }
        //检测文件是否已经存在
        if (file_exists("static/upload/" . $_FILES["product_img"]["name"]))
        {
            echo $_FILES["product_img"]["name"] . " 已经存在 ";die;
        }
        else
        {
            move_uploaded_file($_FILES["product_img"]["tmp_name"],"static/upload/" . $_FILES["product_img"]["name"]);

        }
        $product_img = '/static/upload/'.$_FILES['product_img']['name'];
        $data['product_img'] = $product_img;
        $data['addtime'] = date("Y-m-d H:i:s");

        $add = (new ProductModel)->add($data);
        if($add){
            echo "<script>alert('添加成功!');location.href='http://yxg.baowangadmin.com/product/product_lists/'</script>";
        }


    }

    public function delete($id = null)
    {
        //var_dump($id);die;
        $del = (new ProductModel)->delete($id);
        if($del)
        {
            echo "<script>location.href='http://yxg.baowangadmin.com/product/product_lists/'</script>";
        }
    }

    public function product_edit($id = 0)
    {
        $product_upd_info = array();
        if ($id) {
            // 通过名称占位符传入参数
            $product_upd_info = (new PRoductModel())->where(["id = :id"], [':id' => $id])->fetch();
        }
        $this->assign('product_upd_info',$product_upd_info);
        $this->render('product_edit.php');

    }

    public function update()
    {
        $data = array('id' => $_POST['id'], 'product_name' => $_POST['product_name'],'product_show' => $_POST['product_show'],'main_role' => $_POST['main_role'],'product_term'=>$_POST['product_term'],'addtime'=>date("Y-m-d H:i:s"));
        $product_upd = (new ProductModel)->where(['id = :id'], [':id' => $data['id']])->update($data);
        if($product_upd)
        {
            echo "<script>alert('修改成功');location.href='http://yxg.baowangadmin.com/product/product_lists/'</script>";
        }
    }

}