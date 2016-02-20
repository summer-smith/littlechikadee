<?php include '../view/header.php'; ?>
<main>

    <h2>Register Product</h2>
    <h4>PHP echo statements:</h4>
        <?php echo $customer ?><br>
    <?php echo $customer['firstName'] ?> <br>
    <?php echo $customer['lastName'] ?> <br>
    <?php echo $email ?><br>
    <h4>End echos</h4>
    
    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php else: ?>
        <form action="index.php" method="post" id="register_product_form">
            <label>Customer:</label>
            <label><?php echo $customer['firstName']; echo $customer['lastName']?></label>
            <br>
            
            <label>Product:</label>
            <select name="products">
                <? phpforeach() ?>
            </select>
        </form>
    <?php endif; ?>

</main>
<?php include '../view/footer.php'; ?>