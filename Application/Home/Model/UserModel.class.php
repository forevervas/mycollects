<?php
namespace Home\Model;
class UserModel extends \Think\Model{
	/**
	*获取用户信息
	*@param $uid 用户id
	*
	*/
	public function get_user_info($uid){
		// $array = array('' => , );
		return $this->where(array('uid' => $uid))->cache('key',60)->select();
	}
}