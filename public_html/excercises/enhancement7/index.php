<?php 
ini_set('display_errors', 1);    
$action = filter_input(INPUT_POST, 'action');


if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'display_form';
    }
} 

if ($action == 'display_form'){
    if (!isset($investment)) { $investment = ''; } 
    if (!isset($interest_rate)) { $interest_rate = ''; } 
    if (!isset($years)) { $years = ''; } 
    include('display_form.php');
} else if ($action == 'display_results') {  
    // get the data from the form
    $investment = filter_input(INPUT_POST, 'investment', 
            FILTER_VALIDATE_FLOAT);
    $interest_rate = filter_input(INPUT_POST, 'interest_rate', 
            FILTER_VALIDATE_FLOAT);
    $years = filter_input(INPUT_POST, 'years', 
            FILTER_VALIDATE_INT);
    $compound_monthley = isset($_POST['compound_monthly']);

    // validate investment
    if ( $investment === NULL || $investment === FALSE ) {
        $error_message = 'Investment must be a valid number.'; }
    else if ( $investment <= 0 ) {
        $error_message = 'Investment must be greater than zero.'; }

    // validate interest rate
    else if ( $interest_rate === NULL || $interest_rate === FALSE ) {
        $error_message = 'Interest rate must be a valid number.'; }
    else if ( $interest_rate <= 0 ) {
        $error_message = 'Interest rate must be greater than zero.'; }
        
    // validate years
    else if ( $years === NULL || $years === FALSE ) {
        $error_message = 'Number of years must be a valid whole number.'; }
    else if ( $years <= 0 ) {
        $error_message = 'Numbr of years must be greater than zero.'; }

    // set error message to empty string if no invalid entries
    else {
        $error_message = ''; }

    // if an error message exists, go to the index page
    if ($error_message != '') {
        include('index.php');
        exit();
    }

    if($compound_monthley){
        $is_monthly_f = "Yes";
        // calculate the future value
        $future_value = $investment;
        $time = $years *  12;
        for ($i = 1; $i <= $time; $i++) {
            $future_value = $future_value + ($future_value * (($interest_rate * .01)/12));
        }
    }else {
        $is_monthly_f = "No";
        // calculate the future value
        $future_value = $investment;
        for ($i = 1; $i <= $years; $i++) {
            $future_value = $future_value + ($future_value * $interest_rate * .01);
        }
    }

    // apply currency and percent formatting
    $investment_f = '$'.number_format($investment, 2);
    $yearly_rate_f = $interest_rate.'%';
    $future_value_f = '$'.number_format($future_value, 2);
    //$debug = "got here";
    //echo "<script type='text/javascript'>alert('$debug');</script>";
    include('display_results.php');
}

?>