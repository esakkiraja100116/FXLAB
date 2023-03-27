<?php

include "core/libs/load.php";
Session::start();

// print_r($_POST);
$id_one = $_POST['id'];


Session::set('member1_id',$id);

$data = [];
$filter_name = unique::get_distinctdata();
foreach($filter_name as $key => $values){
    if($values['id'] != $id_one){
        $data[] = $values;
        

    }
}

echo json_encode($data);
    ?>



