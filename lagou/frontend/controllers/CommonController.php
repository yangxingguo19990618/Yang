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
                $val['type_name'] = $flg.$val['type_name'];
                $tree[] = $val;
                $this->GetTree($arr , $val['id'] ,$step+1);
            }
        }
        return $tree;
    }
    //地区无限极分类
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


}
