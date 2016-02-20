<?php
    $dsn = 'mysql:host=localhost;dbname=ittlech8_my_guitar_shop1';
    $username = 'ittlech8_iClient';
    $password = 'BucKet22#';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>  