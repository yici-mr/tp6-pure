<?php

namespace app;



class Structure
{
    public static function Get_Structure(string $classname,array $data): array
    {
        $arr = [];
        // TableStructure 是存放表字段，定义前端id的类。
        $new_obj = '\\app\\TableStructure\\'.$classname;
        $obj_arr = (array)new $new_obj;
        foreach ($data as $k => $v){
            if(in_array($k,$obj_arr)){
                $arr[array_search($k,$obj_arr)] = $v;
            }
        }
        return  $arr;
    }

}