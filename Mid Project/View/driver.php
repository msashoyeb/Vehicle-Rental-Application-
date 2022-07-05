<h1 align="center">...Car Driver page...</h1>

<hr>
<p align="center" style="font-family:Comic Sans MS"> 
             Home | 
    <a href="driverAboutMe.php">About Me</a> | 
    <a href="driverChangePassword.php"> Change Password </a> | 
    <a href="driverDeclareSlot.php">Declare Available Slot</a> | 
    <a href="login.php">Logout</a> </p>
<hr>


<?php
session_start();
echo "<h3 style='color:green;'> Welcome " . $_SESSION['user'] . " to Car Driver Page... </h3>";
?>

<table align="center">
    <tr>
        <th></th>
        <th></th>
    </tr>
    <tr>

        <td>
            <h3><u>About Driver:</u></h3>
            Well-trained drivers can make the road safe for everyone.<br> 
            Aside from that, they also make a good value for businesses <br> 
            and organizations alike. Having up-to-date knowledge on <br>
            road safety can help prevent the dangers of the road and <br>
            save the business from damages and liabilities.
     

        </td>

        <td><img src="driver.jpg" alt="" height=300 width=350 /></td>
    </tr>
</table>