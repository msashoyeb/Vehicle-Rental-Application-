<h1 align="center">Car owner page</h1>

<hr>
<p align="center" style="font-family:Comic Sans MS"> <a href="owner.php">Home</a> | <a href="ownerAboutMe.php">About Me</a> | Change Password | <a href="ownerAddCar.php">Add car</a> | <a href="ownerShowAllCar.php">Show all car</a> | <a href="login.php">Logout</a> </p>
<hr>
<?php include '../Controller/driverChangePasswordC1.php'; ?>

<table align="center">
    <tr>
        <th></th>
    </tr>
    <tr>

        <td>
            <br>
            <br>
            <br>
            <h3><u>Change password:</u></h3>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> ">

                Enter new password:
                <input type="password" name="name_pass" ) <br><br><br>
                <input type="submit" name="dpchange" value="Change password">
            </form>
        </td>
    </tr>
</table>

<?php include '../Controller/driverChangePasswordC2.php'; ?>