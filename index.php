<?php
include "loader.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (validate(array('user_choice'))) {
		
		$computer_choice = $elements[array_rand($elements)];

		$your_choice = $elements[$_POST['user_choice']];

		if($computer_choice == $your_choice){
			$result = "Draw";
		} elseif (in_array($_POST['user_choice'], $computer_choice['wins'])) {
			$result = "Loose";
		} else {
			$result = "Win";
		}

	} else {
		add_message("Please select somthing!", "danger");
		redirect("index.php");
	}
}

include "templates/index.php";