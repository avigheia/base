<?php
include "loader.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	if (validate(array("email"))){
		$email = $_POST['email'];
		$sql = "SELECT `id` FROM `users` WHERE `email` = '$email' ";
		$query = mysqli_query($mysqli, $sql);

		if (mysqli_num_rows($query) != 0){
			$password = generate_new_password();
			var_dump($password);
			$sql = "UPDATE `users` SET `password` = MD5('$password') WHERE `email` = '$email'";
			mysqli_query($mysqli, $sql);
			
			add_message("Please check your email!", "success");

			redirect("index.php");
		} else {

			add_message("Wrong email!", "danger");		
		}

	} else {

			add_message("Some fields are missing!", "danger");
	}
}

include "templates/change_password.php";