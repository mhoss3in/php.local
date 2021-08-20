<?php
//function sum($a,$b){
//    return $a + $b;
//}

function is_user_logged_in(){
return false;
}

function select_bg($color_name){
    $result= "";
    switch ($color_name){
        case 'blue':
        $result = '#00c';
        break;
        case 'red':
        $result = '#c00';
        break;
        case 'green':
        $result = '#0c0';
        break;

    }
    return $result;
}

function get_users(){
    return array(
        array('id' => 1, 'name' => 'ali', 'email' => 'ali@gmail.com'),
        array('id' => 2, 'name' => 'reza', 'email' => 'reza@gmail.com'),
        array('id' => 3, 'name' => 'hossein', 'email' => 'hossein@gmail.com'),
        array('id' => 4, 'name' => 'farhad', 'email' => 'farhad@gmail.com'),
        array('id' => 5, 'name' => 'milad', 'email' => 'milad@gmail.com'),
        array('id' => 6, 'name' => 'fatemeh', 'email' => 'fatemeh@gmail.com'),
        array('id' => 7, 'name' => 'keyhan', 'email' => 'keyhan@gmail.com'),


    );
}