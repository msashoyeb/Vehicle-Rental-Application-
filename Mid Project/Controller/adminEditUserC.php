<?Php
session_start();
echo "<h3 align='right' style='color:green;'>login as (" . $_SESSION['user'] . ") </h3>";

$boxnameold = $boxnamenew = $role = "";
$count = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $boxnameold = input_data($_POST["name_old"]);
    $boxnamenew = input_data($_POST["name_new"]);
    $role = input_data($_POST["role"]);
}
function input_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
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

                Change user role:
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
$f = 0;
if (isset($_POST['changeClick'])) {

    $current_data = file_get_contents('../Model/userdata.json');
    $array_data = json_decode($current_data, false);

    $f = 0;
    foreach ($array_data as $b) {
        if ($b->name == $boxnameold) {
            $f = 1;
            break;
        }
        $count += 1;
    }

    if ($f == 1) {
        $current_data = file_get_contents('../Model/userdata.json');
        $array_data = json_decode($current_data, true);
        $array_data[$count]['role'] = $role;
        $array_data[$count]['name'] = $boxnamenew;
        $final_data = json_encode($array_data);
        file_put_contents('../Model/userdata.json', $final_data);
        echo "<h3 align='center' style='color:green;'> <b> Data Updated! </b> </h3>";
    } else {
        echo "<h3 align='center' style='color:red;'> <b>User not found!.</b> </h3>";
    }
}

?>