<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
       $this->prize=M('prize')->order('sort ASC')->select();
       $this->display();
    }
}