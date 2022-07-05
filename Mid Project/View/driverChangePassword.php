<h1 align="center">...Car Driver page...</h1>

<hr>
    <p align="center" style="font-family:Comic Sans MS"> 

    <a href="driver.php"> Home </a> |
    <a href="driverAboutMe.php"> About Me </a> |
             Change Password | 
    <a href="driverDeclareSlot.php"> Declare Available Slot </a> |
    <a href="login.php"> Logout </a> 

    </p>
<hr>

<?php include '../Controller/driverChangePasswordC.php'; ?>

<table align="center">
    <tr>
        <th></th>
    </tr>
    <tr>

        <td>
            <br><br><br>
            <h3><u>Change Driver Password:</u></h3><br>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> ">

                Enter new password:
                <input type="password" name="name_pass"> <br><br>
                <input type="submit" name="dpchange" value="Change password">
            </form>
        </td>

        <td>
            <img src="ChangePassword.png" alt="" height=200 width=200 />
        </td><br>

    </tr>
</table>
