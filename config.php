<?php
//V1.5.9版本

//数据库地址
$DB_HOST = "127.0.0.1";
//数据库名
$DB_NAME = "BT_DB_NAME";
//数据库登录用户名
$DB_USER = "BT_DB_USERNAME";
//数据库登录密码
$DB_PASS = "BT_DB_PASSWORD";
//管理后台账号
$ADMIN_USER = "kagamine";
//管理后台密码
$ADMIN_PASS = "kagamine1234";
//是否开启伪静态（请先配置伪静态规则后再开启，否则可能导致404）
$REWRITE = false;
//随便一个字符串
$VERIFICATION_KEY = "KAGAMINE YES!";
//上传文件路径
$UPLOAD_PATH = "../static/uploads/";
//上传文件API接口（默认可以不用动
$UPLOAD_API = "/api/upload.php";
//最大上传文件大小（KB）
$MAX_UPLOAD_SIZE = 200;
//是否允许上传文件（可能存在安全风险！
$UPLOAD_IMAGE = true;
//单页允许加载的最多表白数
$PAGEMAX = 10;
/*
伪静态规则
当前只支持nginx，apache规则的话...实在不会写，热心的童鞋可以帮忙写一下啊（谢谢各位大佬了）
*/
