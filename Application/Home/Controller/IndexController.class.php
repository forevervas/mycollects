<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $uid = I('uid');
        $user = D('user');
        $userInfo = $user->get_user_info($uid);
        dump($userInfo);
        dump(S($uid));
        dump(S('0'));
        dump(S('1'));
        dump(range(0,255));

    }

    public function testCache(){
    	if(S('key')!=NULL){
    		dump(S('key'));
    	}else{
    		dump(S('key'));
    		echo 'cache is null';
    	}
    }

    public function showtpl(){
    	$this->display();
    }

    // public function sho+wtpl(){
    // 	// $this->show('hello');
    // }
    public function code(){
    	// header("content:text/html,charset=utf8");
    	// echo authcode('12345','ENCODE','asc13');
    	echo chr(52);
		echo chr(052);
		echo chr(0x52);
    }

    public function en() {
    	for($i=0;$i<100;$i++) {
    		$str_rand.=rand(0,9);
    	}
    	dump($str_rand);
    	echo $str = think_encrypt($str_rand,'qa1huhugu');
    	echo think_decrypt($str,'qa1huhugu');
    	dump(time());
    }

    public function enc() {
    	echo $str = think_encrypt('123fejf','fjejf339fd3j',15);
    	$str1 = think_decrypt($str,'fjejf339fd3j');
    	S('t',$str);
    	dump(S('t'));
    }
    public function dec() {
    	dump(S('t'));
    	$str = $_GET['tt'];
    	$r1 = think_decrypt(S('t'),'fjejf339fd3j');
    	dump($r1);
    	if($r1){
    		echo 'r1';
    	}
    	dump(think_decrypt($str,'fjejf339fd3j'));
    }

    protected function setcache() {
    	if(S('user')==NULL) {
	    	$user = M('user');
	    	$info = $user->where(array('uid'=>'0'))->cache('user',60)->find();
	    	// dump($info);
	    	// dump(S('user'));
	    	return $info;
	    }
    }
    public function getcache() {
    	echo '1='.$this->setcache();
    	dump(S('user'));
    }
    public function tcache() {
    	if(S('user')!=NULL){
    		dump(S('user'));
    	}else{
    		dump(S('user'));
    		echo 'cache is null';
    	}
    }
    public function limitInput() {
    	$this->display();
    }

}