<?php
//TODO:update connection info
    $dsn = 'mysql:host=localhost;dbname=ittlech8_dealshop';
    $username = 'ittlech8_iClient';
    $password = 'BucKet22#';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../model/databaseError.php');
        exit();
    }