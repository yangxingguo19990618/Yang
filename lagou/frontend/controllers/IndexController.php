<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use app\models\News;
use  \yii\data\Pagination ;
use yii\web\Response;
use frontend\models\TypeList;


/**
 * Site controller
 */
class IndexController extends Controller
{
    public function actionIndex()
    {
        //父级ID为0的数据
        $type = TypeList::find()
            ->where(['parent_id'=>0])
            ->asArray()
            ->all();
        $type2 = TypeList::find()
            ->where(['NOT','parent_id'=>0])
            ->limit(5)
            ->orderBy(['clikc_num'=>SORT_ASC])
            ->asArray()
            ->all();
        //var_dump($type2);
        return $this->render('index',[
            'type'=>$type,
            'type2'=>$type2
        ]);
    }

    private function GetTree($arr,$pid,$step){
        global $tree;
        foreach($arr as $key=>$val) {
            if($val['parent_id'] == $pid) {
                $flg = str_repeat('└―',$step);
                $val['type_name'] = $flg.$val['type_name'];
                $tree[] = $val;
                $this->GetTree($arr , $val['id'] ,$step+1);
            }
        }
        return $tree;
    }

}