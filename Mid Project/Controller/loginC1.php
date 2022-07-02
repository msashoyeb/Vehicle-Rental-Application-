<?php
session_start();
$nameErr = $passErr = "";
$name = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {        //$_SERVER["REQUEST_METHOD"] is default function......this function sent data by post method from php code


	if (empty($_POST["name"])) {
		$nameErr = "Name is required";
	} else {
		$name = input_data($_POST["name"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $name)) {       //preg_match this can check given value valid or not
			$nameErr = "Only alphabets and white space are allowed";
		}
	}

	if (empty($_POST["pass"])) {
		$passErr = "Password is required";
	} else {
		$pass = input_data($_POST["pass"]);
		if (strlen($_POST["pass"]) < 4) {
			$passErr = "Password must be upper than 4 characters";
		}
	}
}
function input_data($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>