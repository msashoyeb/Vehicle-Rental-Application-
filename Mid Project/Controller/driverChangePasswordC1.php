<?Php
session_start();
echo "<h3 align='right' style='color:green;'>login as (" . $_SESSION['user'] . ") </h3>";

$pass = "";
$count = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $pass = input_data($_POST["name_pass"]);
}
function input_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>