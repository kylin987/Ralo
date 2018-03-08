<?php
namespace core\lib\drive\log;
use core\lib\conf;
date_default_timezone_set("PRC");
//存储日志到文件

class file{
	public $path; //日志存储位置
	public function __construct(){
		$path = conf::get('OPTION','log');
		$this->path = $path['PATH'];
	}
	public function log($message,$file = 'log'){
		$this->path = $this->path.'/'.date('YmdH').'/';
		if(!is_dir($this->path)){
			mkdir($this->path,'0777',true);
		}
		$message = date('Y-m-d H:i:s').' ### '.json_encode($message);
		return file_put_contents($this->path.$file.'.php',$message.PHP_EOL,FILE_APPEND);
	}
}
