<?php

$db = new Unique("team", "-");

if (isset($_POST['add'])) {
    $user_one = new Unique('user',$_POST['member1']);
    $user1 = $user_one->getName();
    $user_two = new Unique('user',$_POST['member2']);
    $user2 = $user_two->getName();
    $user_three = new Unique('user',$_POST['member3']);
    $user3 = $user_three->getName();
    $user_four = new Unique('user',$_POST['member4']);
    $user4 = $user_four->getName();
    
    $add_arr = array(
        "team_name" => Filter::input($_POST['team_name']),
        "leader_name" => Filter::input($_POST['leader_name']),
        "user_one" => Filter::input($user1),
        "user_two" => Filter::input($user2),
        "user_three" => Filter::input($user3),
        "user_four" => Filter::input($user4),



        
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
        "name" => Filter::input($_POST['name']),
        "dept_id" => Filter::input($_POST['dept']),
        "email" => Filter::input($_POST['email']),
        "phone" => Filter::input($_POST['phone']),
        "lab_name" => Filter::input($_POST['lab']),        
    );
    $result = $db->update_data($update_arr);

    if ($result) {
        alert::update();
    } else {
        alert::custom("Error in database");
    }
}