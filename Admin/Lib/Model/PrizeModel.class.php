<?php
/**
 * Created by PhpStorm.
 * User: zhongshan
 * Date: 2016/8/4
 * Time: 10:15
 */
class PrizeModel extends CommonModel{
    protected $_validate = array(
        array('title','require','奖品名称必须！'), //默认情况下用正则进行验证
        array('all_count','require','总库存数必须！'), //默认情况下用正则进行验证
        array('percentage','require','概率必须！'), //默认情况下用正则进行验证
        array('percentage','number','概率必须为数字！','1'), //默认情况下用正则进行验证

//        array('name','','帐号名称已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
//        array('value',array(1,2,3),'值的范围不正确！',2,'in'), // 当值不为空的时候判断是否在一个范围内
//        array('repassword','password','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致
//        array('password','checkPwd','密码格式不正确',0,'function'), // 自定义函数验证密码格式
    );
}