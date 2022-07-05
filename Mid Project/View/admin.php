<h1 align="center">Admin page</h1>

<hr>
<p align="center" style="font-family:Comic Sans MS"> Home | <a href="adminAboutMe.php">About me</a> | <a href="adminShowAllUser.php"> Show All user </a> | <a href="adminEditUser.php">Edit user</a> | <a href="adminShowAllUser.php"> Delete user account </a> | <a href="login.php">Logout</a> </p>
<hr>

<?php
session_start();
echo "<h3 style='color:green;'>Welcome " . $_SESSION['user'] . ", </h3>";
?>

<table align="center">
    <tr>
        <th></th>
        <th></th>
    </tr>
    <tr>

        <td>
            <h3><u>Our goal:</u></h3>
            Our main goal is to deliver the car <br>
            according to the customer's demand <br>
            and to make the service head in the <br>
            right way. <br>
        </td>

        <td><img src="carImg.jpg" alt="" height=400 width=400 /></td>
    </tr>
</table>