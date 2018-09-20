<?php

/**
 * Created by PhpStorm.
 * User: wangheng
 * Date: 2018/9/20
 * Time: 16:20
 */
    require "../vendor/autoload.php";
    $controller = new \phprbac\controller\RbacController(new \Smarty());
    $controller->addRole();