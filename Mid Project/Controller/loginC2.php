<?php

$_SESSION['user'] = $name;

if (isset($_POST['logClick'])) {


	$flag = true;

	if (!$nameErr == "")
		$flag = false;

	if (!$passErr == "")
		$flag = false;


	if (!empty($_POST["remember"])) {
		setcookie("name", $name, time() + 180);
		setcookie("pass", $pass, time() + 180);
	}

	if ($flag == true) {

		$current_data = file_get_contents('../Model/userdata.json');
		$array_data = json_decode($current_data, false);
		$f = 0;

		$c_role = "";

		foreach ($array_data as $b) {
			if ($b->name == $name && $b->pass == $pass) {
				$f = 1;
				$c_role = $b->role;
			}
		}


		if ($f == 0) {
			echo "<h3 align='center' style='color:red;'> <b>This user is not found in the system.</b> </h3>";
		} else {
			if ($c_role == "Admin") {
				header("Location: admin.php");
			}
			if ($c_role == "Customer") {
				header("Location: customer.php");
			}
			if ($c_role == "Driver") {
				header("Location: driver.php");
			}
			if ($c_role == "Owner") {
				header("Location: owner.php");
			}
		}
	}
}

if (isset($_POST['regClick'])) {
	header("Location: registration.php");
}
