<?php
ini_set('display_errors', 1);
// Connection to tech support database
require('../model/database.php');


require('../model/customer_db.php');
require('../model/registration_db.php');
require('../model/product_db.php');


$action = filter_input(INPUT_POST, 'action');

/* 
 *   5. Automatically enter the user's name in the product registration form
 *   6. When the page loads the product list should be a drop down menu of 
 *       products built from a resultset queried out of the database
 *   7. If the product registration data is submitted, register the product
 *   8. If the product is registered successfully, confirm it to the user.
 */

if($action == NULL){                                        //  1. The product_register application should default to the customer_login view
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'customer_login';
    }    
}

if($action == 'customer_login'){
    include('customer_login.php');
} else if ($action == 'log_in'){
    $email = filter_input(INPUT_POST, 'email');
    if ($email == NULL){                                    //  2. If the email address is not provided, make them enter one
        $message = "Email required for login.";
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){  //   3. Check if the email entered is valid, if so get the user information from the database
         $message = "Invalid entry.";
    } else {
        header("Location: .?action=register_product");    //   4. Send the logged-in user to the product registration page
    }
} else if ($action == 'register_product'){
    $email = filter_input(INPUT_POST, 'email');    
    $customer = get_customer_by_email($email);          //   5. Automatically enter the user's name in the product registration form
    $products = get_products();
    include('product_register.php');
}

