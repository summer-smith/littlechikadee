<?php
require('database.php');
$query = 'SELECT *
          FROM categories
          ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>

<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Little Chikadee: My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="/public_html/css/main.css" />    
</head>

<!-- the body section -->
<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/public_html/modules/navBar.php'; ?>
        <h1>Category Manager</h1>
    </header>

    <main>
        <h1>Add Category</h1>
        <form action="add_category.php" method="post"
              id="add_category_form">

            <label>Category name:</label>
            <input type="text" name="category_name"><br>
            
            <br>
            
            <label>&nbsp;</label>
            <input type="submit" value="Add Category"><br>
        </form>
        <p><a href="index.php">View Product List</a></p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/public_html/modules/footer.php'; ?>  
    </footer>
</body>
</html>