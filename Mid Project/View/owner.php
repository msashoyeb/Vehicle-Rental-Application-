<body style="background-color:Gainsboro;">
</body>

<h1 align="center">Car owner page</h1>

<hr>
<p align="center" style="font-family:Comic Sans MS"> Home | <a href="ownerAboutMe.php">About Me</a> | <a href="ownerChangePassword.php"> Change Password </a> | <a href="ownerAddCar.php">Add car</a> | <a href="ownerShowAllCar.php">Show all car</a> | <a href="login.php">Logout</a> </p>
<hr>

<?php
session_start();
echo "<h3 style='color:green;'> Welcome " . $_SESSION['user'] . ", </h3>";
?>

<table align="center">
    <tr>
        <th></th>
        <th></th>
    </tr>
    <tr>

        <td>
            <h2><u>Main motive:</u></h2>
            We are willing to make ease people's<br>
            suffering regarding transportation system.<br>
            For this reason we are vowing to complete our <br>
            service in a proper and effective way.<br>
        </td>

        <td><img src="5.PNG" align="" alt="" width="700" height="400">
    </tr>
</table>