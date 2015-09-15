<?php

class Controller {

	protected $token_ID;
	protected $token_value;
	protected $signature;

	// propiedad para enmascarar los datos del metodo post.
	protected $input = array();

	public function __construct(){
		//Generate Token value y token ID
		require_once APP_DIR."plugins/csrf.php";
		global $config;
		$csrf_obj = new csrf();
		$this->token_ID = $csrf_obj->get_token_id();
		$this->token_value = $csrf_obj->get_token();

		//Generate signature
		// $hash_mac =  hash_hmac("sha256",$config["platforms"][0]["api_key"].$config["platforms"][0]["secret_key"].$_SESSION["token_value"], $config["platforms"][0]["secret_key"],true);
		// $this->signature = base64_encode($hash_mac);
	}
	/**
	* Inserta datos en la variable input.
	* @param $value Array con valores a almacenar en la funcion.
	*/
	public function setInput($value = array())
	{
		$raw = file_get_contents("php://input");
		print_r(json_encode($raw));exit;
		// print_r(json_decode(file_get_contents("php://input")), true);exit;
		$utils = $this->loadHelper('utils_helper');
		$this->input = $utils->prepare_fields($value);
	}
  private function onLineGame(){

    $data = array();
    $data["error"] = false;

    return $data;
  }

	public function loadModel($name)
	{
		require(APP_DIR .'models/'. strtolower($name) .'.php');

		$model = new $name;
		return $model;
	}

	public function loadView($name)
	{
		$view = new View($name);
		return $view;
	}

	public function loadPlugin($name)
	{
		require(APP_DIR .'plugins/'. strtolower($name) .'.php');
	}

	public function loadHelper($name)
	{
		require(APP_DIR .'helpers/'. strtolower($name) .'.php');
		$helper = new $name;
		return $helper;
	}

	public function redirect($loc)
	{
		global $config;

		header('Location: '. $config['base_url'] . $loc);
	}



	public function make_response($response){
		require_once(APP_DIR."plugins/csrf.php");
		$csrf_obj = new csrf();
		$csrf_obj->clear_values();
		$token_id = $csrf_obj->get_token_id();
		$token = $csrf_obj->get_token();

		$response["token_id"] = $token_id;
		$response["token"] = $token;

		echo (json_encode($response));

	}
}

?>
