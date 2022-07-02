<h1 align="center">Admin page</h1>

<hr>
<p align="center" style="font-family:Comic Sans MS"><a href="admin.php">Home</a>| <a href="adminAboutMe.php">About me</a> | Show all user | <a href="adminEditUser.php">Edit user</a> | <a href="adminDeleteAccount.php"> Delete user account </a> | <a href="login.php">Logout</a> </p>
<hr>

<?Php
session_start();
echo "<h3 align='right' style='color:green;'>login as (" . $_SESSION['user'] . ") </h3>";

?>

<table align="center">
    <tr>
        <th></th>
    </tr>
    <tr>
        <td>
            <?php
            $count = 1;

            $current_data = file_get_contents('../Model/userdata.json');
            $array_data = json_decode($current_data, false);

            foreach ($array_data as $b) {
                echo '<b>User No. </b>' . $count . "," . "<br>";
                echo "Username: " . $b->name . "<br>";
                echo "Gender : " . $b->gender . "<br>";
                echo "Role : " .  $b->role . "<br>";
                echo "I have : " . $b->have . "<br>";
                echo "Address : " . $b->address . "<br>";
                "<br>";
                "<br>";
                $count += 1;
            }
            ?>
        </td>
    </tr>
</table>