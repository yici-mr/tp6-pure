<?php
// +----------------------------------------------------------------------
// | 模板设置
// +----------------------------------------------------------------------

return [
    // 模板引擎类型使用Think
    'type'          => 'Think',
    // 默认模板渲染规则 1 解析为小写+下划线 2 全部转换小写 3 保持操作方法
    'auto_rule'     => 1,
    // 模板目录名
    'view_dir_name' => 'template',
    // 模板路径
    'view_path'    => ROOT_PATH.'template/',

    // 模板后缀
    'view_suffix'   => 'html',
    // 模板文件名分隔符
    'view_depr'     => DIRECTORY_SEPARATOR,
    // 模板引擎普通标签开始标记
    'tpl_begin'     => '{',
    // 模板引擎普通标签结束标记
    'tpl_end'       => '}',
    // 标签库标签开始标记
    'taglib_begin'  => '{',
    // 标签库标签结束标记
    'taglib_end'   => '}',
    'layout_on'    =>true,
    'layout_name'  =>'layout',
    // 视图输出字符串内容替换
    'tpl_replace_string'       => [
        '__PUBLIC_FRONT__'=>'/static/front',
        '__ROOT__' => $_SERVER['DOCUMENT_ROOT'],
        '__HOSTNAME__' => 'TP6 纯净版本',
        '__PUBLIC_ADMIN__'=>'/static/admin',

    ],
    'tpl_cache'   => false
];
