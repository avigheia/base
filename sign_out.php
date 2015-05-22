<?php
include "loader.php";

add_message("Hope to see you again!", "success");

unset($_SESSION['signed_in']);

redirect("index.php");