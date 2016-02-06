<?php
/*========================================
       配    置    文   件    表
========================================*/

#ifndef _CONFIG_
#define _CONFIG_

//摄像头设置
$camip      =  $_SERVER["SERVER_ADDR"];     //摄像头IP
$camport    = '10086';                      //端口

//键位设置
$upkey      = '1';  //上
$downkey    = '2';  //下
$leftkey    = '3';  //左
$rightkey   = '4';  //右
$stopkey    = '5';  //停
$lightkey   = '6';  //灯

$passkey    = '8';  //使能

//管理员账号
$loginuser  = 'admin';          //用户名
$loginpasswd= 'password';       //密　码

#endif
?>