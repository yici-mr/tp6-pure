<?php
namespace app\index\controller;

use app\BaseController;
use think\facade\Db;


class Index extends BaseController
{
    public function index()
    {
        $array = ["aa","bb","cc"];
        $this->assign("aa",$array);

        return $this->fetch("index/index/index");
    }
}
