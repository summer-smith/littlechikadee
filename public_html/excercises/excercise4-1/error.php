<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Little Chikadee: Error</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
    <link rel="stylesheet" type="text/css" href="/public_html/css/main.css" />
</head>

<!-- the body section -->
<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/public_html/modules/navBar.php'; ?>
        <h1>My Guitar Shop</h1>
    </header>

    <main>
        <h2 class="top">Error</h2>
        <p><?php echo $error; ?></p>
       <p><a href="index.php">View Product List</a></p>        
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/public_html/modules/footer.php'; ?>
    </footer>
</body>
</html>