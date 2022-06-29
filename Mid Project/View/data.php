<?php
$uname = "ehfghe";
$uid = 1003;
$ucity = "D";

$current_data = file_get_contents('../Model/data.json');
$array_data = json_decode($current_data, false);
$f = 1;

foreach ($array_data as $b) {
    if ($b->name == $uname) {
        $f = 0;
    }
}

if ($f == 0) {
    echo "No";
} else {
    echo "yes";
    $extra = array(
        'name' => $uname,
        'id' => $uid,
        'city' => $ucity
    );
    $array_data[] = $extra;
    $final_data = json_encode($array_data);
    file_put_contents('../Model/data.json', $final_data);
}
