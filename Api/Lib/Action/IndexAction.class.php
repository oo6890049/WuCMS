<?php

/**
 * Created by PhpStorm.
 * User: zhongshan
 * Date: 2016/6/15
 * Time: 9:11
 */
class IndexAction extends CommonAction
{
    private $param;

    public function  index()
    {
        $raw_data = $GLOBALS['HTTP_RAW_POST_DATA'];
        if (empty($raw_data)) {
            $raw_data = $_POST;
        }
        if (!is_array($raw_data)) {
            $raw_data = str_replace(PHP_EOL, '', $raw_data);
            $raw_data = json_decode($raw_data, true);
        }
        $this->param = $raw_data;
        header('Content-type: application/json');

        $action = $this->param['api_action'];
        $this->$action($this->param);

        exit;
    }

    function do_draw($data)
    {
        $order_no=$data['order_no'];
        if(!$order_no){
            $this->ajaxError('请输入订单号');
        }else{
            if($re=M('result')->where('order_no='.$order_no)->find()){
                $prize_title=M('prize')->where('id='.$re['prize_id'])->getField('title');
                $this->ajaxError("该订单已经抽过了，奖品为$prize_title");
            }
            $prize_info=M('prize')->select();

           foreach($prize_info as $prize){

               if($prize['used_count']>=$prize['all_count']){
                  //如果库存不足不参与计算
                   continue;
               }
               $arr[$prize['id']] = $prize['percentage'];
           }

            $rid =$this->get_rand($arr);
            $add['order_no']=$order_no;
            $add['prize_id']=$rid;
            $add['create_time']=time();
            $re=M('result')->add($add);
            if($re){
                $prize_data=M('prize')->getByid($rid);
                M('prize')->where("id=".$rid)->setField('used_count',$prize_data['used_count']+1);
                $message="抽奖结果为：$prize_data[title]";
                $this->ajaxSuccess($message);
            }else{
                $this->ajaxError('系统错误，请联系技术人员');
            }
        }
    }

    function get_rand($proArr) {
        $result = '';

        //概率数组的总概率精度
        $proSum = array_sum($proArr);
        //概率数组循环
        foreach ($proArr as $key => $proCur) {
            $randNum = mt_rand(1, $proSum);
            if ($randNum <= $proCur) {
                $result = $key;
                break;
            } else {
                $proSum -= $proCur;
            }
        }
        unset ($proArr);

        return $result;
    }


}