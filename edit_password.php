<?php
include "loader.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	if (validate(array("password", "password_new"))){
		$password = md5($_POST['password']);
		$password_new = $_POST['password_new'];

		$sql = "SELECT `id` FROM `users` WHERE `password` = '$password' ";
		$query = mysqli_query($mysqli, $sql);

		if (mysqli_num_rows($query) != 0){
			$user = mysqli_fetch_array($query);
			$id = $user['id'];
			$sql = "UPDATE `users` SET `password` = MD5('$password_new') WHERE `id` = $id";
			mysqli_query($mysqli, $sql);

			add_message("Your password was changed successfuly!", "success");

			redirect("index.php");
		} else {

			add_message("Wrong password!", "danger");
		}

	} else {

		add_message("Some fields are missing!", "danger");
	}
}

include "templates/edit_password.php";