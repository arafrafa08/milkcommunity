<?php
    error_reporting(0);
    include_once("database/db_connection.php");
    include_once("database/db_database.php");
    include_once("database/db_users.php");
    $conn = new Database($host, $user, $pass, $database);
    $db = new Users($conn);

    $act = $_GET['act'];
	if($act == "register"){
		if (isset($_POST['upload'])) {
			$db->registerUsers($_POST['username'],md5($_POST['password']));
		}
	}
?>