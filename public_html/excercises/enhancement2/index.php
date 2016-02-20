<?php 
    //set default value of variables for initial page load
    if (!isset($product_description)) { $product_description = ''; } 
    if (!isset($list_price)) { $list_price = ''; } 
    if (!isset($discount_percent)) { $discount_percent = ''; } 
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
         
        <form action="display_discount.php" method="post">

            <div id="data">
                <label>Product Description:</label>
                <input type="text" name="product_description"
                    value = "<?php echo htmlspecialchars($product_description); ?>">
                <br>

                <label>List Price:</label>
                <input type="text" name="list_price"
                    value = "<?php echo htmlspecialchars($list_price); ?>">
                <br>

                <label>Discount Percent:</label>
                <input type="text" name="discount_percent"
                    value = "<?php echo htmlspecialchars($discount_percent); ?>">
                
                <span>%</span><br>
                
                <?php if (!empty($error_message)) { ?>
                    <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
                <?php } ?>
            </div>

            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate Discount"><br>
            </div>

        </form>
    </main>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/public_html/modules/footer.php'; ?>  
    </footer>
</body>
</html>