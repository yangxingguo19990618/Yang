<?php
/**
 * Created by PhpStorm.
 * User: YangXingguo
 * Date: 2018/4/16
 * Time: 9:03
 */
namespace app\models;

use fastphp\base\Model;
use fastphp\db\Db;

class ProductModel extends Model
{
    /*
     * 自定义当前模型操作的数据库表名
     * 如果不置顶，默认为类名称的小写字符串
     * 这里就是 item表
     * @var string
     * */

    protected $table = 'bw_product';


}