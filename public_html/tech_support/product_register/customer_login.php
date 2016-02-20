<?php include '../view/header.php'; ?>
<main>

    <h2>Customer Login</h2>
    <p>You must login before you can register a product.</p>
    <!-- login form -->
    <form action="index.php" method="post" id="log_in_form">
        <input type="hidden" name="action" value="log_in">
        
        <label>Email:</label>
        <input type="text" value="kelly@example.com" name="email" />
        <input type="submit" value="Login" />
        
    </form>
    

</main>
<?php include '../view/footer.php'; ?>