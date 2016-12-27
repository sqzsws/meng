<?php
namespace app\admin\controller;
use think\Controller;
class Login extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
    public function login()
    {
        $data = ["id"=>1,"name"=>"admin"];
        session("adminInfo",$data);
        $this->success("登陆成功","admin/index/index");
    }
    public function logout(){
        session("adminInfo",null);
        $this->success("退出登录成功","admin/login/index");
    }
}