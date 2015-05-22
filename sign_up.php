<?php
include "loader.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	if (validate(array("name", "email", "password", "rep_password"))){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$rep_password = md5($_POST['rep_password']);

		if ($password == $rep_password) {

			$sql = "SELECT `id` FROM `users` WHERE `email` = '$email' ";
			$query = mysqli_query($mysqli, $sql);

			if (mysqli_num_rows($query) == 0){
				$sql = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
				mysqli_query($mysqli, $sql);

				add_message("Congratulations! Your user was created successfully!", "success");

			} else {
				add_message("This email is already taken!", "danger");

			}
			
		} else {
			add_message("Password error!", "danger");
		}

	} else {
		add_message("Some fields are missing!", "danger");
	}
}

include "templates/sign_up.php";
