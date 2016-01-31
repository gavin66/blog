<?php

class Test {

	public function __construct(){

	}

	function test($url){
		$check = @fopen($url,"r");
		if($check){
			$status = true;
		}else{
			$status = false;
		}
		return $status;
	}


}

$test = new Test();
echo $test->test('www.baidu.com');