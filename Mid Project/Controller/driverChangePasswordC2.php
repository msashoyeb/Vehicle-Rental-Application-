<?Php
$f = 0;
if (isset($_POST['dpchange'])) {

    $current_data = file_get_contents('../Model/userdata.json');
    $array_data = json_decode($current_data, false);

    $f = 0;
    foreach ($array_data as $b) {
        if ($b->name == $_SESSION['user']) {
            $f = 1;
            break;
        }
        $count += 1;
    }

    if ($f == 1) {
        $current_data = file_get_contents('../Model/userdata.json');
        $array_data = json_decode($current_data, true);
        $array_data[$count]['pass'] = $pass;
        $final_data = json_encode($array_data);
        file_put_contents('../Model/userdata.json', $final_data);
        echo "<h3 align='center' style='color:green;'> <b> Password changed! </b> </h3>";
    } else {
        echo "<h3 align='center' style='color:red;'> <b>Password not changed!.</b> </h3>";
    }
}

?>