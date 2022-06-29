<?php
session_start();
$nameErr = $passErr = $genderErr = $roleErr = $haveErr = "";
$name = $pass = $gender = $address = $role = "";
$havearr[] = "";
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

	if (empty($_POST["gender"])) {
		$genderErr = "Gender is required";
	} else {
		$gender = input_data($_POST["gender"]);
	}

	if ($_POST["role"] == "selected") {
		$roleErr = "Please select a role";
	} else {
		$role = input_data($_POST["role"]);
	}

	if (empty($_POST["have"])) {
		$haveErr = "Please fill this field";
	} else {
		foreach ($_POST["have"] as $have) {
			$havearr[] = $have;
		}
	}

	$address = input_data($_POST["address"]);
}
function input_data($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<h2>Registration Form</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

	<span class="error" style='color:red;'>* required field </span>
	<br><br>

	Username:
	<input type="text" name="name">
	<span class="error" style='color:red;'>* <?php echo $nameErr; ?> </span>
	<br><br>
	Password:
	<input type="password" name="pass">
	<span class="error" style='color:red;'>* <?php echo $passErr; ?> </span>
	<br><br>

	Gender:
	<input type="radio" name="gender" value="male"> Male
	<input type="radio" name="gender" value="female"> Female
	<input type="radio" name="gender" value="other"> Other
	<span class="error" style='color:red;'>* <?php echo $genderErr; ?> </span>
	<br><br>

	Select a role:
	<select name="role">
		<option value="selected">--Selected--</option>
		<option value="customer">Customer</option>
		<option value="driver">Driver</option>
		<option value="owner">Car Owner</option>
	</select>
	<span class="error" style='color:red;'>* <?php echo $roleErr; ?> </span>
	<br><br>

	I have:

	<input type="checkbox" name="have[]" value="car">Car
	<input type="checkbox" name="have[]" value="bus">Bus
	<input type="checkbox" name="have[]" value="truck">Truck
	<input type="checkbox" name="have[]" value="driving licence">Driving license
	<input type="checkbox" name="have[]" value="none">None
	<span class="error" style='color:red;'>* <?php echo $haveErr; ?> </span>
	<br><br>

	Address:
	<textarea name="address" rowspan="1" colspan="1"></textarea>
	<br><br>
	<br><br>

	<input type="submit" name="subClick" value="Submit">
	<input type="submit" name="logClick" value="Already have an account? Login">
</form>

<?php


if (isset($_POST['subClick'])) {
	$flag = true;
	if ($nameErr == "")
		$_SESSION['username'] = $name;
	else
		$flag = false;

	if ($passErr == "")
		$_SESSION['password'] = $pass;
	else
		$flag = false;

	if ($genderErr == "")
		$_SESSION['gender'] = $gender;
	else
		$flag = false;

	if ($roleErr == "")
		$_SESSION['role'] = $role;
	else
		$flag = false;

	if ($haveErr == "")
		$_SESSION['sess_have'] = $havearr;
	else
		$flag = false;

	$_SESSION['address'] = $address;

	if ($flag == true)
		header("Location: show.php");
}

if (isset($_POST['logClick'])) {
	header("Location: login.php");
}

?>