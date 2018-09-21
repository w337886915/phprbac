<?php
/**
 * Created by PhpStorm.
 * User: 337886915@qq.com
 * Date: 2018/9/21
 * Time: 10:13
 */
call_user_func($argv[1], $argv);

/**
 *description：移动文件
 *auth：337886915@qq.com
 *createtime：2018/9/21 10:22
 * @param $argv
 */
function move($argv)
{

    print_r($argv);
    if(file_exists($argv[2])){
        echo '存在';
    }else{
        echo '不存在';
    }

}
