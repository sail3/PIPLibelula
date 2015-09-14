<?php


class csrf{
	

	public function get_token_id(){
		if(isset($_SESSION["token_id"])){
			return $_SESSION["token_id"];

		}else{
			$token_id  = $this->random(10);
			$_SESSION["token_id"] = $token_id;
			return $token_id;
		}
	}

	public function get_token(){
		if(isset($_SESSION["token_value"])){
			return $_SESSION["token_value"];
		}else{
			$token = hash("sha256", $this->random(500));
			$_SESSION["token_value"] = $token;
			return $token;
		}
	}

	public function check_valid(){	
		$post = $_POST;
		$get = $_GET;
		$data["token"] = $this->get_token_id();
		$data["post"] = json_encode($_POST);
		//echo json_encode($data);
		
		//|| ( isset($get[$this->get_token_id()]) && ($get[$this->get_token_id()] == $this->get_token()))
		if( ( isset($post[$this->get_token_id()]) && ($post[$this->get_token_id()] == $this->get_token()))  ) {
			return true;
		}else{
			return false;
		}

		
	}

	public function clear_values(){
		$_SESSION["token_id"] = null;
		$_SESSION["token_value"] = null;
		unset($_SESSION["token_id"]);
		unset($_SESSION["token_value"]);
	}


	private function random($len) {
        if (@is_readable('/dev/urandom')) {
                $f=fopen('/dev/urandom', 'r');
                $urandom=fread($f, $len);
                fclose($f);
        }
 
        $return='';
        for ($i=0;$i<$len;++$i) {
                if (!isset($urandom)) {
                        if ($i%2==0) mt_srand(time()%2147 * 1000000 + (double)microtime() * 1000000);
                        $rand=48+mt_rand()%64;
                } else $rand=48+ord($urandom[$i])%64;
 
                if ($rand>57)
                        $rand+=7;
                if ($rand>90)
                        $rand+=6;
 
                if ($rand==123) $rand=52;
                if ($rand==124) $rand=53;
                $return.=chr($rand);
        }
        return $return;
}
}
?>