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
        $smarty->setTemplateDir($root_path.'/views/');
        $smarty->setCompileDir($root_path.'/templates_c/');
        $smarty->setCacheDir($root_path.'/cache/');
        $smarty->caching = false;
        $smarty->cache_lifetime = 60*60*24;
        $smarty->left_delimiter = '<{';
        $smarty->right_delimiter = '}>';
        
    }
    //增加权限制控页面
    public function addRole(){
        $this->smarty->display('add_role.html');
    }


}