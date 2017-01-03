<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
class Index extends Controller
{
    public function index()
    {
        if (session("mm") == "ok") {
           return $this->fetch("index/chat");
        }
        return $this->fetch();
    }
    public function check()
    {
        $code = Request::instance()->param('code');
        $data = array();
        if ($code == "二狗我爱你") {
            session("mm","ok");
            $data["status"] = 1;
        }else{
            $data["status"] = 0;
        }
        header('Content-type: application/json');
        return json_encode($data);
    }
    public function chat()
    {
        if (session("mm") == "ok") {
           return $this->fetch();
        }
        else
        {
            die("我告诉你你不要乱闯进来");
        }
    }
    public function leave()
    {
        session("mm",null);
        $this->redirect("index/index");
    }
}
