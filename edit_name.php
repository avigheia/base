<?php
include "loader.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	if (validate(array("name"))){
		$name = $_POST['name'];
		$id = $_SESSION['signed_in']['id'];
		$_SESSION['signed_in']['name'] = $name;

		$sql = "UPDATE `users` SET `name` = '$name' WHERE `id` = '$id' ";
		$query = mysqli_query($mysqli, $sql);

		add_message("Your name was updated successfully!", "success");

		redirect("index.php");
	} else {

		add_message("Insert name!", "danger");
	}
}

include "templates/edit_name.php";