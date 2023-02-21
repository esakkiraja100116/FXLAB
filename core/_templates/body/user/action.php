<?php

$db = new Unique("category", "-");

if (isset($_POST['add'])) {
    
    $add_arr = array(
        "name" => Filter::input($_POST['name'])
    );

    $result = $db->insert_data($add_arr);
    if ($result) {
        alert::insert();
    } else {
        alert::custom("Error in database");
    }
}


if (isset($_POST['update'])) {
    $update_arr = array(
        "id" => Filter::input($_POST['id']),
        "name" => Filter::input($_POST['name'])        
    );
    $result = $db->update_data($update_arr);

    if ($result) {
        alert::update();
    } else {
        alert::custom("Error in database");
    }
}