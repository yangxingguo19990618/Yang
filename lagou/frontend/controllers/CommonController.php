<?php

namespace frontend\controllers;
use \yii\web\Controller;
use Yii;

class CommonController extends Controller
{
    public $enableCsrfValidation = false;

    //Yii中的Ajax返回
    public function returnAjax($value){
        Yii::$app->response->format= \yii\web\Response::FORMAT_JSON;
        return ['result'=>$value];
    }
    //普通ajax返回
    public function ajaxReturn($data, $type='') {
        if(empty($type)) $type  =   'JSON';
        switch (strtoupper($type)){
            case 'JSON' :
                // 返回JSON数据格式到客户端 包含状态信息
                header('Content-Type:application/json; charset=utf-8');
                return json_encode($data);
            case 'XML'  :
                // 返回xml格式数据
                header('Content-Type:text/xml; charset=utf-8');
                return xml_encode($data);
            case 'JSONP':
                // 返回JSON数据格式到客户端 包含状态信息
                header('Content-Type:application/json; charset=utf-8');
                $handler  =   isset($_GET['callback']) ? $_GET['callback'] : 'chatcallback';
                return $handler.'('.json_encode($data).');';
            case 'EVAL' :
                // 返回可执行的js脚本
                header('Content-Type:text/html; charset=utf-8');
                return $data;
            default     :
                // 返回JSON数据格式到客户端 包含状态信息
                header('Content-Type:application/json; charset=utf-8');
                return json_encode($data);
        }
    }

    public function GetTree($arr,$pid,$step){
        global $tree;
        foreach($arr as $key=>$val) {
            if($val['parent_id'] == $pid) {
                $flg = str_repeat('--',$step);
                $val['job_type_name'] = $flg.$val['job_type_name'];
                $tree[] = $val;
                $this->GetTree($arr , $val['job_type_id'] ,$step+1);
            }
        }
        return $tree;
    }

    public function GetArea($arr,$pid,$step){
        global $tree;
        foreach($arr as $key=>$val) {
            if($val['parent_id'] == $pid) {
                $flg = str_repeat('--',$step);
                $val['region_name'] = $flg.$val['region_name'];
                $tree[] = $val;
                $this->GetArea($arr , $val['region_id'] ,$step+1);
            }
        }
        return $tree;
    }

    public function Category($categories)
    {
        $tree = array();
//第一步，将分类id作为数组key,并创建children单元
        foreach($categories as $category){
            $tree[$category['job_type_id']] = $category;
            $tree[$category['job_type_id']]['children'] = array();
        }
       // echo '<pre>';
        //print_r($tree);die;
//第二步，利用引用，将每个分类添加到父类children数组中，这样一次遍历即可形成树形结构。
        foreach($tree as $key=>$item){
            if($item['parent_id'] != 0){
                $tree[$item['parent_id']]['children'][] = &$tree[$key];//注意：此处必须传引用否则结果不对
               /* if($tree[$key]['children']     == null){
                    unset($tree[$key]['children']); //如果children为空，则删除该children元素（可选）
                }*/
            }
        }

////第三步，删除无用的非根节点数
        foreach($tree as $key=>$value){
            if($value['parent_id'] != 0){
                unset($tree[$key]);
            }
        }

        return $tree;
    }


}
