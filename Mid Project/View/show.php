<?php
session_start();
echo $_SESSION['username'] . "<br>";
echo $_SESSION['password']. "<br>";
echo $_SESSION['gender']. "<br>";
echo $_SESSION['role']. "<br>";
foreach ($_SESSION['sess_have'] as $h) {
	echo $h . "<br>";
}
"<br>";
echo $_SESSION['address']. "<br>";
?>