<?php
if (!defined("HDPHP_PATH"))exit('No direct script access allowed');
//更多配置请查看hdphp/Config/config.php
return array(
	"DEBUG_SHOW" =>TRUE, //true显示
	"DB_DRIVER"  =>"mysqli",//数据库驱动
	"D_CHARSET"  =>"utf8",//数据库字符集
	"DB_HOST"    =>"127.0.0.1",//数据库主机地址
	"DB_PORT"	 =>3306,//数据库端口号
	"DB_USER"    =>"root",//数据库用户名
	"DB_PASSWORD"=>"",//数据库密码
	"DB_DATABASE"=>"v5",//数据库名称
	"DB_PREFIX"	 =>"",//表前缀
);
?>