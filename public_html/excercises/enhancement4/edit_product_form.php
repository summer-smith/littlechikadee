<?php
    require('database.php');

    // Get IDs
    $product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
    $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

    // Get name for selected category
    $queryCategory = 'SELECT * FROM categories
                           ORDER BY categoryID';
    $statement1 = $db->prepare($queryCategory);
    $statement1->execute();
    $categories = $statement1->fetchAll();
    $statement1->closeCursor();


    $query = 'SELECT productCode, productName, listPrice, categoryID
             FROM products
              WHERE productID = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $statement->execute();
    $product = $statement->fetch();
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
            <h1>Product Manager</h1>
        </header>

        <main>
            <h1>Edit Product</h1>
     
  
            <form action="edit_product.php" method="post"
                  id="add_product_form">

            <label>Category:</label>
            <select name="category_ID">
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category['categoryID']; ?>"
                        <?php if($category_id == $category['categoryID']){echo("selected");}?>>
                    <?php echo $category['categoryID']; ?>
                </option>
            <?php endforeach; ?>
            </select><br>

                <label>Code:</label>
                <input type="text" value="<?php echo $product['productCode'] ?>" name="code" /><br>

                <label>Name:</label>
                <input type="text" value="<?php echo $product['productName'] ?>" name="name"><br>

                <label>List Price:</label>
                <input type="text" value="<?php echo $product['listPrice'] ?>" name="price"><br>

                <input type="hidden" name="product_id"
                    value="<?php echo $product_id; ?>">
                               
                <label>&nbsp;</label>
                <input type="submit" value="Edit Product"><br>
 
            </form>
            <p><a href="index.php">View Product List</a></p>
        </main>

        <footer>
            <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/public_html/modules/footer.php'; ?>
        </footer>
    </body>
</html>