<?php
namespace core\lib\drive\log;
use core\lib\conf;
date_default_timezone_set("PRC");
//存储日志到数据库

class mysql{
	public $table;
	public function log($message,$table=''){		
		$log_conf = conf::get('OPTION','log');
		$this->table = $log_conf['TABLE'];
		$model = new \core\lib\model();
		$message = json_encode($message);
		$ip = getIp();
		$time = date('Y-m-d H:i:s');
		$sql = "INSERT INTO " . $this->table . " (qq,ip,time) VALUES ('" . $message . "','" . $ip . "','" .$time ."')";
		$res = $model->query($sql);
		
		
	}
}
