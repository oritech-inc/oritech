<?php
session_start();

$user_data = array(
    'username'  => 'origin',
    'password'  => 'ori@1234',
    'logged'    => 1,
);

if(isset($_POST['authUser'])){
//    session_destroy();
    $_SESSION['user'] = array(
        'name'  => '',
        'type'  => 'Super Admin',
        'level'  => '5',
        'logged'  => 1,
    );
    if($_POST['user'] === $user_data['username'] && $_POST['pass'] === $user_data['password']){
        echo json_encode(array('results' => 'success'));
    }
    else{
        echo json_encode(array('results' => 'error'));
    }
}

if(isset($_POST['logoutUser'])){
    if (isset($_SESSION['user'])){
        session_destroy();
        echo json_encode(array('results'=>"done"));
    }
    else{
        echo json_encode(array('results'=>"fail"));
    }
}
