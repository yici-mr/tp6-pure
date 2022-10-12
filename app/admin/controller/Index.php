<?php
namespace app\admin\controller;

use app\BaseController;
use app\Structure;
class Index extends BaseController
{
    public function index()
    {
        //{"Data": "number=dsadsa&name=dsafds&color=dsafdsa&structure=fdsfds&displacement=fdsf&seat=2&money=321&brand=fdsfds&amount=1&transmission=1&oil=1"}
       // $data = parse_str($this->request->param("Data"),$car_Data);
        //Structure::Get_Structure(); 赋值字段并且获取要插入表的值
        //print_r(Structure::Get_Structure("test",$car_Data));die;
        $array = ["aa","bb","cc"];
        return $this->fetch("admin/index/index",['aa'=>$array]);
    }
}
