<?php
namespace app\model;
use core\lib\model;
class usersModel extends model 
{
	public $table = 'users';	
	
	//增
	public function add($data){
		$this->insert($this->table,$data);
		return $this->id();
	}
	//删
	public function del($where){
		$res = $this->delete($this->table,$where);
		return $res->rowCount();
	}
	//改
	public function up_date($data,$where){
		$res = $this->update($this->table,$data,$where);
		return $res->rowCount();
	}
	//查
	public function all($where){
		$res = $this->select($this->table,'*',$where);
		return $res;
	}
	
	public function row($where){
		$res = $this->get($this->table,'*',$where);
		return $res;
	}
	
	public function find($name,$where){
		$res = $this->get($this->table,$name,$where);
		return $res;
	}
}
