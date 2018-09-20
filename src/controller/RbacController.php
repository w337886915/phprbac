<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/20
 * Time: 16:42
 */

namespace phprbac\controller;


class RbacController
{
    protected $smarty;
    public function __construct(\Smarty $smarty)
    {
        $this->smarty=$smarty;
        $root_path = dirname(dirname(__FILE__));
        $smarty->setTemplateDir($root_path.'/views/'); //设置所有模板文件存放位置
        $smarty->setCompileDir($root_path.'/templates_c/'); //设置编译过的模板存放的目录
        $smarty->setCacheDir($root_path.'/cache/'); //设置缓存文件存放目录
        $smarty->caching = false; //设置Smarty缓存开关功能
        $smarty->cache_lifetime = 60*60*24; //设置缓存模板有效时间一天
        $smarty->left_delimiter = '<{'; //设置模板语言中的左结束符
        $smarty->right_delimiter = '}>'; //设置模板语言中的右结束符
    }
    //增加权限制控页面
    public function addRole(){
        $this->smarty->display('add_role.html');
    }


}