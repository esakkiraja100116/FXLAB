<?php

include "core/libs/load.php";
Session::start();

// print_r($_POST);
$id = $_POST['id'];
Session::set('member1_id',$id);



// from DB
// $arr = [
//     "1" => "ansar",
//     "2" => "vijay",
//     "3" => "nattu"4
// ];
$data = [];
$filter_name = unique::get_distinctdata();
foreach($filter_name as $key => $values){
    if($values['id'] != $id){
        $data[] = $values;
        

    }
}

echo json_encode($data);
    ?>



