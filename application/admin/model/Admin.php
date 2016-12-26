<?php 
namespace app\admin\model;
use think\Model;
/**
* 系统用户
*/
class Admin extends Model
{
    function checkAuthority(){
        return true;
    }
}