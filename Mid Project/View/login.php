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

<h2>Login Form</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	Username:
	<input type="text" name="name">
	<span class="error" style='color:red;'>* <?php echo $nameErr; ?> </span>
	<br><br>
	Password:
	<input type="password" name="pass">
	<span class="error" style='color:red;'>* <?php echo $passErr; ?> </span>
	<br><br>

	<span class="error" style='color:red;'>* required field </span>
	<br><br>

	<input type="submit" name="logClick" value="Login">
	<input type="submit" name="regClick" value="No account yet! Click to register">
	<br><br>
</form>

<?php


if (isset($_POST['logClick'])) {
	$flag = true;
	if ($nameErr == "")
		$_SESSION['username'] = $name;
	else
		$flag = false;

	if ($passErr == "")
		$_SESSION['password'] = $pass;
	else
		$flag = false;


	if ($flag == true)
		header("Location: show.php");
}


if (isset($_POST['regClick'])) {
	header("Location: registration.php");
}


?>