<?php
include "loader.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	if (validate(array("email", "password"))){
		$email = $_POST['email'];
		$password = md5($_POST['password']);

		$sql = "SELECT `id`, `name`, `email` FROM `users` WHERE `email` = '$email' AND `password` = '$password' ";
		$query = mysqli_query($mysqli, $sql);

		if (mysqli_num_rows($query) == 0) {
			add_message("Wrong email password pair!", "danger");
		} else {
			$user = mysqli_fetch_array($query, MYSQLI_BOTH);
			
			$_SESSION['signed_in'] = $user;
			add_message("Sign in successfully!", "success");
			redirect("index.php");
		}
	}
}

include "templates/sign_in.php";