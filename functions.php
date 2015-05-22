<?php
function validate($fields){
	foreach ($fields as $value) {
		if (!isset($_POST[$value]) || $_POST[$value] == ""){
			return false;
		}
	}
	return true;
}

function signed_in(){
	if (isset($_SESSION['signed_in'])){
		return true;
	} 
	return false;
}



function redirect($url){
	header("Location: $url");
	exit;
}


function generate_new_password(){
	$password = "";
	$not_key = array( "0", "O", "l", "1", "S", "5", "." );
	$i = 0;
	while ($i<8) {	
		$key = chr(rand(33,127));
		
		if (!in_array($key, $not_key)){
			$password .= $key;
			$i ++;
		}
	}

	return $password;
}

function get_message(){
	if(!isset($_SESSION['msg'])){
		$_SESSION['msg'] = array();
	}
	
	if (count($_SESSION['msg'])){
		$message = $_SESSION['msg'];
		unset($_SESSION['msg']);
		return $message;
	} else {
		return false;
	}
}

function add_message($message, $type){
	$_SESSION['msg'][] = array(
				'message' => $message,
				'type' => $type
			);
}