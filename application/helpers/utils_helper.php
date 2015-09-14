<?php

class utils_helper {

	function cleanString($str)
	{
		//echo $str;
		//return mysqli::real_escape_string($str);
	}
	
	function validateEmail($email)
	{
		return filter_var($email, FILTER_VALIDATE_EMAIL);
	}
	
	function sha1($str){
		return sha1($str);
	}

	function prepare_fields(&$var)
	{
		if(!is_array($var)){
			$var = remove_tags(xss_clean(trim($var)));	
		}
		return $var;
	}

	function remove_tags($var){
		$taglist=array( "iframe", "script", "style", "embed", "object",'<','>','</','width','height','frameborder','allowfullscreen');
		if(!is_array($var)){
			for ($i=0; $i < count($taglist); $i++) { 
				$var=strip_tags(str_replace($taglist[$i],'', $var));
			}
		}
		return $var;
	}


}

?>