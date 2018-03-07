<?php
namespace app\ctrl;
class indexCtrl {
	public function index(){
		p('this is index');
		$model = new \core\lib\model();
		$sql = "SELECT * FROM admin";
		$res = $model->query($sql);
		p($res->fetchAll());
	}
}