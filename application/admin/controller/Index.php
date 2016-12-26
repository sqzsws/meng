<?php
namespace app\admin\controller;
use app\admin\extension\AdminController;
class Index extends AdminController
{
    public function index()
    {
        return $this->fetch();
    }
}