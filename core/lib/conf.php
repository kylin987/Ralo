<?php
namespace core\lib;

class conf {
	static public $conf = array();
	static public function get($name,$file){
		/*
			* 1 判断配置文件是否存在
			* 2 判断配置是否存在
			* 3 缓存配置
		*/		
		if(isset(self::$conf[$file])){
			return self::$conf[$file][$name];
		}else{			
			$path = CORE.'/config/'.$file.'.php';
			if(is_file($path)){
				$conf_info = include $path;
				if(isset($conf_info[$name])){
					self::$conf[$file] = $conf_info;
					return $conf_info[$name];
				}else{
					throw new \Exception('找不到配置项'.$name);
				}
			}else{
				throw new \Exception('找不到配置文件'.$file);
			}
		}		
	}
	static public function all($file){
		/*
			* 1 判断配置文件是否存在
			* 2 判断配置是否存在
			* 3 缓存配置
		*/	
		
		if(isset(self::$conf[$file])){
			return self::$conf[$file];
		}else{			
			$path = CORE.'/config/'.$file.'.php';			
			if(is_file($path)){
				$conf_info = include $path;				
				self::$conf[$file] = $conf_info;
				return $conf_info;	
			}else{
				throw new \Exception('找不到配置文件'.$file);
			}
		}		
	}
	
}