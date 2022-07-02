<?php


if (isset($_POST['addCarClick'])) {


    $current_data = file_get_contents('../Model/car.json');
    $array_data = json_decode($current_data, false);

    $extra = array(
        'name' => $cname,
        'model' => $model,
        'price' => $price
    );
    $array_data[] = $extra;
    $final_data = json_encode($array_data);
    file_put_contents('../Model/car.json', $final_data);

    echo "<h3 align='center' style='color:green;'> <b>You have sucessfully add a car</b> </h3>";
}

?>