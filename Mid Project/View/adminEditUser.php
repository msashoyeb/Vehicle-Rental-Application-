<h1 align="center">Admin page</h1>

<hr>
<p align="center" style="font-family:Comic Sans MS"><a href="admin.php">Home</a> | <a href="adminAboutMe.php">About me</a> | Edit user | <a href="adminDeleteAccount.php"> Delete user account </a> | <a href="login.php">Logout</a> </p>
<hr>

<?Php
// session_start();
// echo "<h3 align='right' style='color:green;'>login as (" . $_SESSION['user'] . ") </h3>";

// $boxnameold = $boxnamenew = $boxrole = "";
// // $name_old = $name_new = $role = "";
// $count = 0;

// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     $boxnameold = input_data($_POST["name_old"]);
//     $boxnamenew = input_data($_POST["name_new"]);
//     $boxnrole = input_data($_POST["role"]);
// }
// function input_data($data)
// {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }
?>

<table align="center">
    <tr>
        <th></th>
    </tr>
    <tr>

        <td>
            <h3><u>Edit information of user:</u></h3>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> ">
                Enter old username:
                <input type="text" name="name_old" ) <br><br><br>

                Enter new username:
                <input type="text" name="name_new" ) <br><br><br>

                Enter new Role:
                <select name="role">
                    <option value="Customer">Customer</option>
                    <option value="Driver">Driver</option>
                    <option value="Owner">Car Owner</option>
                    <option value="Admin">Admin</option>
                </select>
                <br><br><br>
                <input type="submit" name="changeClick" value="Change">
            </form>
        </td>
    </tr>
</table>



<?Php

// if (isset($_POST['changeClick'])) {

//     $current_data = file_get_contents('../Model/userdata.json');
//     $array_data = json_decode($current_data, true);

//     foreach ($array_data as $b) {
//         if ($b->name == $boxnameold) {
//             $array_data[$count]['name'] = $boxnamenew;
//             $array_data[$count]['role'] = $boxrole;
//             $final_data = json_encode($array_data);
//             file_put_contents('../Model/userdata.json', $final_data);
//             echo "<h3 align='center' style='color:green;'> <b> Data Updated! </b> </h3>";
//             break;
//         } else {
//             echo "<h3 align='center' style='color:red;'> <b>User not found!.</b> </h3>";
//             break;
//         }
//         $count += 1;
//     }
// }

?>