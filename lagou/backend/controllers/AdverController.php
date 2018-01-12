<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use \frontend\controllers\CommonController;
use backend\models\Region;
use backend\models\Adver;
use yii\web\UploadedFile;

/**
 * Site controller
 */
class AdverController extends CommonController
{
    //关闭防csrf验证
    public $enableCsrfValidation = false;

    //工作分类列表
    public function actionLists()
    {
        $data = Adver::find()
            ->asArray()
            ->all();
        return $this->render('lists',['data'=>$data]);
    }

    //添加分类
    public function actionAdd()
    {
        $type = Region::find()
            ->where(['parent_id'=>1])
            ->asArray()
            ->all();
        //$data = $this->GetArea($type,0,0);
        return $this->render('add',[
            'data'=>$type
        ]);
    }



    //删除操作
    public function actionDel()
    {
        $id = Yii::$app->request->get('id');
        $customer = Adver::findOne($id);
        $res = $customer->delete();
        if($res){
            $this->redirect(['area/lists']);
        }
    }

    //修改
    public function actionUpd()
    {
        $id = Yii::$app->request->get('id');
        $info = Adver::find()
            ->where(['adver_id'=>$id])
            ->asArray()
            ->one()
        ;
        $data = Region::find()
            ->where(['parent_id'=>1])
            ->asArray()
            ->all()
        ;

        return $this->render('edit',[
            'info'=>$info,
            'data'=>$data
        ]);
    }

    public function actionUpd_do()
    {
        if(\Yii::$app->request->isPost) {
            $id = Yii::$app->request->post('id');
            //接收图片的信息值
            $image = UploadedFile::getInstanceByName('adver_img');
            //可以打印看看
            //上传目录，进行命名
            $dir='upload/';
            //这个文件要创建到web的目录下
            //文件的绝对路径
            $name = $dir.$image->name;
            //保存文件函数，在手册上有，将图片保存到本地
            $status = $image->saveAs($name,true);
            //这个打印出来的是1！！
            //进行判断,保存本地失败，输出3
            if ($status) {
                //实例化model层，model层用GII创建，否则报错
                $model = new Adver();
                $model = $model->findOne($id);
                //定义将添加的图片路径
                $model->adver_img=$name;
                //调用model层attributes方法，将post接值数据一起（这是将表单中的其他值接受过来，一起入库使的）
                $model->attributes = \Yii::$app->request->post();
//
                //$moell->save 等同与 $model->insert();
                //进行判断，如果添加成功，将进行提示跳转
                if ($model->save())
                {
                    //成功  输出1
                    $this->redirect(['adver/lists']);
                }
                else
                {
                    //失败  输出2
                    echo 2;
                }

            }else {
                echo 3;
            }

        }else{
            return $this->render('add');
        }
    }

    public function actionAdd_info()
    {
        //echo 1;die;
        //首先判断是否是POST提交，不是post提交的输出4
        if(\Yii::$app->request->isPost) {
            //接收图片的信息值
            $image = UploadedFile::getInstanceByName('adver_img');
            //可以打印看看
            //上传目录，进行命名
            $dir='upload/';
            //这个文件要创建到web的目录下
            //文件的绝对路径
            $name = $dir.$image->name;
            //保存文件函数，在手册上有，将图片保存到本地
            $status = $image->saveAs($name,true);
            //var_dump($status);exit;
            //这个打印出来的是1！！
            //进行判断,保存本地失败，输出3
            if ($status) {
                //实例化model层，model层用GII创建，否则报错
                $model = new Adver();
                //定义将添加的图片路径
                $model->adver_img=$name;
                //调用model层attributes方法，将post接值数据一起（这是将表单中的其他值接受过来，一起入库使的）
                $model->attributes = \Yii::$app->request->post();
//
                //$moell->save 等同与 $model->insert();
                //进行判断，如果添加成功，将进行提示跳转
                if ($model->save())
                {
                    //成功  输出1
                    $this->redirect(['adver/lists']);
                }
                else
                {
                    //失败  输出2
                    echo 2;
                }

            }else {
                echo 3;
            }

        }else{
            return $this->render('add');
        }
    }

}