<?php
namespace app\ctrl;
class indexCtrl extends \core\imooc {
	public function index(){
		$temp = \core\lib\conf::get('CTRL','route');
		$temp = \core\lib\conf::get('ACTION','route');
		$title = '首页';
		$data = 'hello world';
		$this->assign('title',$title);
		$this->assign('data',$data);
		$this->display('index.html'); 
	}
}