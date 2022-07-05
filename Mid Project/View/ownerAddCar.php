<h1 align="center">Car owner page</h1>
<body style="background-color:Gainsboro;">
</body>
<hr>
<p align="center" style="font-family:Comic Sans MS"> <a href="owner.php">Home</a> | <a href="ownerAboutMe.php">About Me</a> | <a href="ownerChangePassword.php"> Change Password </a> | Add car | <a href="ownerShowAllCar.php">Show all car</a> | <a href="login.php">Logout</a> </p>
<hr>

<?php include '../Controller/ownerAddCarC1.php'; ?>

<table align="center">
    <tr>
        <th></th>
    </tr>

    <tr>
        <td>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <br><br><br><br><br>

                <h3><u>Add car:</u></h3>
                Car name:
                <input type="text" name="car_name">
                <br><br>

                Car model:
                <input type="text" name="car_model">
                <br><br>

                Price per day:
                <input type="text" name="car_price">
                <br><br>

                <input type="submit" name="addCarClick" value="Post car addition">

            </form>
        </td>
    </tr><img src="c2.PNG" align="right" alt="" width="600" height="400">
</table>

<?php include '../Controller/ownerAddCarC2.php'; ?>