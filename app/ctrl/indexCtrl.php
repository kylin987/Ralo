<?php
namespace app\ctrl;
use core\lib\model;
class indexCtrl extends \core\imooc {
	public function index(){
		$model = new \app\model\usersModel();
		$where = array();
		$where['id'] = 17;
		$data = array();
		$data['username'] = 'kylin987';
		$data['sex'] = '1';
		$data['reg_time'] = time();
		
		//$res = $model->add($data);
		//$res = $model->del($where);
		$res = $model->up_date($data,$where);
		
		dump($res);
	}
}