<?php
session_start();

if(isset($_SESSION['login'])) {
	if(isset($_SESSION['login_type'])) {
		$login_type = $_SESSION['login_type'];

		if($login_type == "FB") {
			unset($_SESSION['name']);
			unset($_SESSION['email']);
			unset($_SESSION['picture']);
		}
	}

	unset($_SESSION['login_type']);
	unset($_SESSION['login']);
}

session_destroy();

header("Location: index.php");
exit();

?>