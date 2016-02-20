<?php
/* 
 * Validation for the contact page found in public_html->contact.php
 */
if ($_POST['action'] == 'Send'){
    
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['address'];
    $zip = $_POST['zip'];
    $phone = $_POST['phone1'] + $_POST['phone2'] + $_POST['phone3'];
    $message = $_POST['message'];
    $sendTo = "smmr.smith128@gmail.com";
    
    if(empty($firstName) || empty($lastName) || empty($email) || empty($message)) {
        $reply = 'All fields are required.';
        include 'contact.php';
        exit;
    } else {
       $body = "<HTML>
            <h3>Email Sent</h3>
            <p>From: $fistName $lastName at $email</p>
            <p>With the following message:</p>
            <p>$message</p>
        </HTML>"; 
       mail($sendTo, "email from EZFREEZY", $message);
    }
    
} else {
    include 'contact.php';
}
?>