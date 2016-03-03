<?php
//MAIN CONTROLLER
ini_set('display_errors', 1);

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'login_page';
    }
    
if ($action == login_page){
    include('login.php');
} else if ($action == home){
    include('home.php');
} else if ($action == log_in){
    //TODO:
    //validate login info in database
}
}