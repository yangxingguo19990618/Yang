<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\controllers\CommonController;
use frontend\models\JobType;
use frontend\models\JobInfo;
use frontend\models\Friend;
use frontend\models\Adver;


/**
 * Site controller
 */
class IndexController extends CommonController
{
    //首页面
    public function actionIndex()
    {
        //左侧分类列表
        $type =$this->Job_type();
        //调用Category方法将数据进行整合
        $tree = $this->Category($type);
        //热门职位信息
        $hot_job_info = $this->Hot_job_info();
        //最新职位信息
        $new_job_info = $this->New_job_info();
        //友情链接信息
        $friend = $this->Friend_link();
        //查询热门搜索
        $hot_search = $this->Hot_search();
        //查询广告信息
        $adver_info = $this->Adver_inno();
        //渲染视图层
        return $this->render('index',[
            'type'=>$tree,
            'hot_job_info'=>$hot_job_info,
            'new_job_info'=>$new_job_info,
            'friend'      =>$friend,
            'hot_search'  =>$hot_search,
            'adver_info'  =>$adver_info
        ]);
    }
    //查询所有工作分类
    protected function Job_type()
    {
        $type = JobType::find()
            ->orderBy(['job_type_id'=>SORT_ASC])
            ->asArray()
            ->all();
        return $type;
    }

    //查询热门职位信息
    protected function Hot_job_info()
    {
        $job_info = JobInfo::find()
            ->orderBy(['job_clicks'=>SORT_ASC])
            ->asArray()
            ->all();
        return $job_info;
    }

    //查询最新职位
    protected function New_job_info()
    {
        $new_job = JobInfo::find()
            ->orderBy(['job_addtime'=>SORT_DESC])
            ->asArray()
            ->all();
        return $new_job;
    }
    //友情链接
    protected function Friend_link()
    {
        $friend = Friend::find()
            ->asArray()
            ->all();
        return $friend;
    }

    protected function Hot_search()
    {
        $hot_search = JobType::find()
            ->orderBy(['click_num'=>SORT_DESC])
            ->limit(5)
            ->asArray()
            ->all();
        return $hot_search;
    }

    protected function Adver_inno()
    {
        $adver_info = Adver::find()
            ->orderBy(['adver_sort'=>SORT_ASC])
            ->limit(5)
            ->asArray()
            ->all();
        return $adver_info;

    }



}