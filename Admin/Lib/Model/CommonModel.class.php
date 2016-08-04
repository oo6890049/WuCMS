<?php
/**
 * Created by PhpStorm.
 * User: zhongshan
 * Date: 2016/8/4
 * Time: 10:15
 */
class CommonModel extends Model{
    protected $_auto = array (
        array('state','1'),  // 新增的时候把status字段设置为1
//        array('password','md5',1,'function') , // 对password字段在新增的时候使md5函数处理
//        array('name','getName',1,'callback'), // 对name字段在新增的时候回调getName方法
        array('create_time','time',1,'function'), // 对create_time字段在更新的时候写入当前时间戳

    );
}