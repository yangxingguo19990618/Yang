<?php
/**
 * Created by PhpStorm.
 * User: YangXingguo
 * Date: 2018/4/13
 * Time: 9:48
 */
namespace app\models;

use fastphp\base\Model;
use fastphp\db\Db;

class ItemModel extends Model
{
    /*
     * 自定义当前模型操作的数据库表名
     * 如果不置顶，默认为类名称的小写字符串
     * 这里就是 item表
     * @var string
     * */

    protected $table = 'item';

    /*
     * 搜索功能 因为Sql父类里面没有现成的like搜索
     * 所以需要自己写SQL语句，对数据库的操作应该都放在Model里面
     * 然后提供给Controller直接调用
     * @param $title string 查询的关键词
     * @return array 返回的数据
     * */

    public function search($keyword)
    {
        $sql = "select * from `$this->table` where `item_name` like :keyword";
        $sth = Db::pdo()->prepare($sql);
        $sth = $this->formatParam($sth, [':keyword' => "%$keyword%"]);
        $sth->execute();

        return $sth->fetchAll();
    }
}