<?php

// 本类由系统自动生成，仅供测试用途
class PublicAction extends Action
{
    public function login()
    {
        $this->display();
    }

    public function doLogin()
    {
        $name = I('name');
        $pass = md5(I('password'));
        $map['name'] = $name;
        $map['password'] = $pass;
        $res = M('user')->where($map)->find();
//       if($name=='admin'&&I('password')=="123456"){
//           $res=true;
//       }else{
//           $res=false;
//       }
        if ($res) {
            session('ADMIN_ID',1);
            //$this->success('登录成功', U('Staff/index'));
            $this->success('登录成功', U('index/index'));
        } else {
            $this->error('登录失败，请检查用户名');
        }
    }

    public function logout()
    {
        session('ADMIN_ID', '');
        $this->success('登录成功', U('Public/login'));
    }
}