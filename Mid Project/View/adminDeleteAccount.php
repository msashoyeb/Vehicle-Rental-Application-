<h1 align="center">Admin page</h1>

<hr>
<p align="center" style="font-family:Comic Sans MS"><a href="admin.php">Home</a> | <a href="adminAboutMe.php">About me</a>| <a href="adminShowAllUser.php"> Show All user </a> | <a href="adminEditUser.php">Edit user</a>  | Delete user account | <a href="login.php">Logout</a> </p>
<hr>

<?Php
session_start();
$name =  $role = $boxname = "";
$count = 0;
echo "<h3 align='right' style='color:green;'>login as (" . $_SESSION['user'] . ") </h3>";
$current_data = file_get_contents('../Model/userdata.json');
$array_data = json_decode($current_data, false);

foreach ($array_data as $b) {
    if ($b->name == $_SESSION['user']) {
        $name = $b->name;
        break;
    }
    $count += 1;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $boxname = input_data($_POST["name"]);
}
function input_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<table align="center">
    <tr>
        <th></th>
    </tr>
    <tr>

        <td>
            <h3><u>Delete account:</u></h3>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                Enter the username for delete account:
                <input type="text" name="name" value="<?php echo $name; ?>" ) <br><br>

                <br><br><br>
                <input type="submit" name="deleteClick" value="Delete account">
            </form>
        </td>
    </tr>
</table>


<?Php
if (isset($_POST['deleteClick'])) {
    $current_data = file_get_contents('../Model/userdata.json');
    $array_data = json_decode($current_data, true);
    unset($array_data[$count]);
    $final_data = json_encode($array_data);
    file_put_contents('../Model/userdata.json', $final_data);
    echo "<h3 align='center' style='color:red;'> <b>Account deleted!.</b> </h3>";
    $click = 0;
}
?>