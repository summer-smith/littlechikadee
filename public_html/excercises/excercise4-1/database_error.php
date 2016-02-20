<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Little Chikadee: My Guitar Shop</title>
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
        <h1>Database Error</h1>
        <p>There was an error connecting to the database.</p>
        <p>The database must be installed as described in the appendix.</p>
        <p>MySQL must be running as described in chapter 1.</p>
        <p>Error message: <?php echo $error_message; ?></p>
        <p>&nbsp;</p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/public_html/modules/footer.php'; ?>
    </footer>
</body>
</html>