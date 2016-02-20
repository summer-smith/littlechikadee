<?php
    //get form data
    $product_description = filter_input(INPUT_POST, 'product_description');
    $list_price = filter_input(INPUT_POST, 'list_price', FILTER_VALIDATE_FLOAT);
    $discount_percent = filter_input(INPUT_POST, 'discount_percent', FILTER_VALIDATE_FLOAT);
    
    
    //Validate product_description
    if ( empty($product_description)) {
        $error_message = "Please enter product description.";
    //Validate list_price
    } else if ($list_price === FALSE ) {
        $error_message = 'List Price must be a valid number.'; 
    } else if ( $list_price <= 0 ) {
        $error_message = 'List Price must be greater than zero.'; 
        
    // validate discount_percent
    } else if ( $discount_percent === FALSE )  {
        $error_message = 'Discount Percent must be a valid number.'; 
    } else if ( $discount_percent <= 0 ) {
        $error_message = 'Discount Percent must be greater than zero.'; 
    } else if ( $discount_percent > 100) {
        $error_message = 'Discount Percent must be less that 100.';
        
    //Otherwise, no error message. :) 
    } else {
        $error_message = ''; 
    }
    
    //in case of error, return to index page
    if ($error_message != '') {
        include('index.php');
        exit(); }
    
    //calculations
    $discount = $list_price * $discount_percent * 0.01;
    $discount_price = $list_price - $discount;
    
    //calculate 8% sales tax
    $sales_tax_rate= 8;
    $sales_tax_amount = $discount_price * $sales_tax_rate * 0.01; 
    
    //make it look pretty (currency formatting)
    $list_price_f = "$" . number_format($list_price, 2);
    $discount_percent_f = $discount_percent . "%";
    $discount_f = "$".number_format($discount, 2);
    $discount_price_f = "$".number_format($discount_price, 2);
    $sales_tax_rate_f = $sales_tax_rate."%";
    $sales_tax_amount_f = "$".number_format($sales_tax_amount, 2);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="/public_html/css/main.css" />    
</head>
<body>
    <header> 
        <?php include $_SERVER['DOCUMENT_ROOT'].'/public_html/modules/navBar.php'; ?>
    </header>  
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($product_description); ?></span><br>

        <label>List Price:</label>
        <span><?php echo htmlspecialchars($list_price_f); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo htmlspecialchars($discount_percent_f); ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_f; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_f; ?></span><br>
        
        <br>
        
        <label>Sales Tax Rate:</label>
        <span><?php echo $sales_tax_rate_f; ?></span><br>
        
        <label>Sales Tax Amount:</label>
        <span><?php echo $sales_tax_amount_f ?></span><br>
    </main>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/public_html/modules/footer.php'; ?>  
    </footer    
</body>
</html>