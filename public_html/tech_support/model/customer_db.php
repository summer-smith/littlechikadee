<?php

function get_customer_by_email($email) {
    global $db;
    $query = 'SELECT * FROM customers WHERE email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(":email", $email);
    $statement->execute();
    $customer = $statement->fetch();
    $statement->closeCursor();
    
    //Verify quiry obtained data
    //$name = $customer['firstName'];
    //echo "<script type='text/javascript'>alert('$email' + '$name');</script>";
    return $customer;    
}