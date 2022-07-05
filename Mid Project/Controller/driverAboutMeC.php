<?Php
session_start();
$name = $pass = $gender = $role = $have = $address = "";

echo "<h3 align='right' style='color:green;'>login as (" . $_SESSION['user'] . ") </h3>";


$current_data = file_get_contents('../Model/userdata.json');
$array_data = json_decode($current_data, false);

foreach ($array_data as $b) {
    if ($b->name == $_SESSION['user']) {
        $name = $b->name;
        $pass = $b->pass;
        $gender = $b->gender;
        $role = $b->role;
        $have = $b->have;
        $address = $b->address;
    }
}
?>

<table align="center">


    <tr>
        <td>
             <h3><u>Driver Details:</u></h3><br><br><br>
        </td>

        <td>
            <br><br><br><br><br>
            <?php
            echo "Username : " . $name . "<br>";
            echo "Password : " . $pass . "<br>";
            echo "Gender : " . $gender . "<br>";
            echo "Role : " . $role . "<br>";
            echo "I have : " . $have . "<br>";
            echo "Address : " . $address . "<br>";
            ?>
        </td>

        <td>
              <img src="DriverProfile.jpg" alt="" height=250 width=250 />
        </td>
    </tr>
</table>