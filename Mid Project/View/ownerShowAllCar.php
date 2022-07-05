<h1 align="center">Car owner page</h1>

<body style="background-color:Gainsboro;">
</body>

<hr>
<p align="center" style="font-family:Comic Sans MS"> <a href="owner.php">Home</a> | <a href="ownerAboutMe.php">About Me</a> | <a href="ownerChangePassword.php"> Change Password </a> | <a href="ownerAddCar.php">Add car</a> | Show all car | <a href="login.php">Logout</a> </p>
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

            $current_data = file_get_contents('../Model/car.json');
            $array_data = json_decode($current_data, false);

            foreach ($array_data as $b) {
                echo '<b>Car No. </b>' . $count . "," . "<br>";
                echo "Car name: " . $b->name . "<br>";
                echo "Car Model : " . $b->model . "<br>";
                echo "Per day rental price : " .  $b->price . "<br>";
                echo "Contact for rent : " .  $b->phone . "<br>";
                "<br>";
                "<br>";
                $count += 1;
            }
            ?>
        </td>
    </tr><img src="cr.PNG" align="right" alt="" width="600" height="400">
</table>