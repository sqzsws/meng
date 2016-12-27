<?php 
namespace app\admin\extension;
use app\admin\extension\CController;
use app\admin\model\Admin;
/**
* admin权限控制器
*/
class AdminController extends CController
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
