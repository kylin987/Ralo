<?php

namespace core;

class imooc {
	static public function run(){
		p('OK');
		$route = new \core\route();  
	}
	static public function load($class){
		//自动加载类库		
		$class = str_replace('\\','/',$class);
		$file = IMOOC.'/'.$class.'.php';
		if(is_file($file)){
			include $file;
		}		
	}
}