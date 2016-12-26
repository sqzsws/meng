<?php 
namespace app\admin\extension;
use think\Controller;
use app\admin\model\Admin;
/**
* admin前置控制器
*/
class AdminController extends Controller
{
    
    function __construct()
    {
        parent::__construct();
        $user = model("admin");
        if(!$user->checkAuthority()){
            $this->redirect("admin/login/index");
        }
    }
}