<?php 
ini_set('display_errors', 1);    
$action = filter_input(INPUT_POST, 'action');

//Calculate future value
function calculateFutureValue($compoundMonthly = FALSE, $investment, $years, $interestRate){
        if($compoundMonthly){
        $is_monthly_f = "Yes";
        // calculate the future value
        $futureValue = $investment;
        $time = $years *  12;
        for ($i = 1; $i <= $time; $i++) {
            $futureValue = $futureValue + ($futureValue * (($interestRate * .01)/12));
        }
    }else {
        $is_monthly_f = "No";
        // calculate the future value
        $futureValue = $investment;
        for ($i = 1; $i <= $years; $i++) {
            $futureValue = $futureValue + ($futureValue * $interestRate * .01);
        }
    }
    return $futureValue;
}

//Apply currency formatting
function formatMoney($string){
    return ('$'.number_format($string, 2));
}

//Apply percent formatting
function formatPercent($string){
    return ($string.'%');
}

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
    $compound_monthly = isset($_POST['compound_monthly']);

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

    //Set monthly compound var for display
    $is_monthly_f = "No";    
    if($compound_monthly){
        $is_monthly_f = "Yes";
    }
    
    $future_value = calculateFutureValue($compound_monthly,$investment, $years, $interest_rate);

    $investment_f = formatMoney($investment);
    $yearly_rate_f = formatPercent($interest_rate);
    $future_value_f = formatMoney($future_value);
    include('display_results.php');
}

?>