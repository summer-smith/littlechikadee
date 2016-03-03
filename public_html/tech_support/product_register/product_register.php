<?php include '../view/header.php'; ?>
<main>

    <h2>Register Product</h2>
    
    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php else: ?>
        <form action="index.php" method="post" id="register_product_form">
            <input type="hidden" name="action" value="register_product" >   
            <input type="hidden" name="customer_id" value="<?php echo $customer['customerID'] ?>" >
            
            <label>Customer:</label>
            <label><?php echo $customer['firstName'] ?> <?php echo $customer['lastName']?></label>
            <br>
            
            <label>Product:</label>
            <select name="product_code">
                <?php foreach($products as $product) : ?>
                <option value="<?php echo $product['productCode']; ?>">
                    <?php echo $product['name']; ?>
                </option>
                <?php endforeach; ?>
            </select>
            <br><br>
            
            <label>&nbsp;</label>
            <input type="submit" value="Register Product" />       
        </form>
    <?php endif; ?>

</main>
<?php include '../view/footer.php'; ?>