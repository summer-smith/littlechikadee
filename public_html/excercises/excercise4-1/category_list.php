<?php
require_once('database.php');

// Get all categories
$query = 'SELECT * FROM categories
                       ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<?php

// Get all categories
$query = 'SELECT * FROM categories
                       ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();


?>
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
    <h1>Product Manager</h1>
</header>
<main>
    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
        
        <?php foreach ($categories as $category) : ?>
        <tr>
            <td><?php echo $category['categoryName']; ?></td>
            <td><form action="delete_category.php" method="post">
                <input type="hidden" name="categoryName"
                    value="<?php echo $category['categoryName']; ?>">
                <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
    
    </table>

    <br>
    <p><a href="add_category_form.php"> Add Category</a></p>
    <p><a href="index.php">List Products</a></p>

    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/public_html/modules/footer.php'; ?>  
    </footer>
</body>
</html>