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

<!-- <body background="front.jpg">
</body> -->
<table align="center">
	<tr>
		<th></th>
	</tr>

	<tr>
		<td>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
				<br><br><br><br><br><br><br><br><br>
				<h2 align="center">Login Form</h2>
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
		</td>
	</tr>
</table>

<?php

$_SESSION['user'] = $name;

if (isset($_POST['logClick'])) {


	$flag = true;

	if (!$nameErr == "")
		$flag = false;

	if (!$passErr == "")
		$flag = false;


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
?>