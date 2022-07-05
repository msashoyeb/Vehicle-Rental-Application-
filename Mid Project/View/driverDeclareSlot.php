<h1 align="center">...Car Driver page...</h1>

<hr>
<p align="center" style="font-family:Comic Sans MS"> 
    <a href="driver.php"> Home </a> | 
    <a href="driverAboutMe.php"> About Me </a> | 
    <a href="driverChangePassword.php"> Change Password </a> | 
             Declare Available Slot | 
    <a href="login.php"> Logout </a> 
</p>
<hr>

<?php
session_start();
echo "<h3 align='right' style='color:green;'>login as (" . $_SESSION['user'] . ") </h3>";
?>

<p align = "center">

<img src="download.png" alt="" height=225 width=275 />

</p>

<table align="center">
    <tr>
        <th></th>
        <th></th>
    </tr>
    <tr>
   
           <td>
            <?php
            $myXMLData =
                "<?xml version= '1.0' encoding= 'UTF-8'?>
            <driver>
                <time>
                    Saturday: 8 AM to 8 PM
                    Sunday: 8 AM to 8 PM
                    Monday: 8 AM to 8 PM
                    Tuesday: 8 AM to 8 PM
                    Wednesday: 8 AM to 8 PM
                    Thursday: 8 AM to 8 PM
                </time>
            </driver>";

            $xml = simplexml_load_string($myXMLData) or die("Error");

            echo "<h3 style='color:'> I am available on: </h3>" . "<br>";
            echo $xml->time;
            ?>
        </td>
    </tr>

</table>