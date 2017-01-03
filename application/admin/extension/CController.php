<?php 
namespace app\admin\extension;
use think\Controller;
/**
* admin权限控制器
*/
class CController extends Controller
{
    
    function __construct()
    {
        parent::__construct();
        $view = $this->view;
        $view->title = "";
        $view->static = [];
    }
}