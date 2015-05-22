<?php
session_start();
include "functions.php";

$db_host = "localhost";
$db_user = "root";
$db_pass = "123";
$db_name = "knb";

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($mysqli->connect_error){
        die ('Ошибка подключения('.mysqli_connect_errno.')'.$mysqli->conncet_error);
}
