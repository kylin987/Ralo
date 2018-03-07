<?php
/**
	* 入口文件
	* 1.定义常量
	* 2.加载函数库	
	* 3.启动框架
	*/
	
define('IMOOC',realpath('./'));
define('CORE',IMOOC.'/core');
define('APP',IMOOC.'/app');
define('MODULE','app');

define('DEBUG',true);

if(DEBUG){
	@ini_set('display_error','On');
	error_reporting(E_ALL ^ E_NOTICE); // 除了notice提示，其他类型的错误都报告
}else{
	@ini_set('display_error','Off');
	error_reporting(0); // 把错误报告，全部屏蔽
}

include CORE.'/common/function.php';
include CORE.'/imooc.php';

spl_autoload_register('\core\imooc::load');

\core\imooc::run();