<?php
session_start();
echo "<h3 align='right' style='color:green;'>login as (" . $_SESSION['user'] . ") </h3>";

$cname = $model = $price = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cname = input_data($_POST["car_name"]);
    $model = input_data($_POST["car_model"]);
    $price = input_data($_POST["car_price"]);
}

function input_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
