<?php
// Get the product data
$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
$category_ID = filter_input(INPUT_POST, 'category_ID', FILTER_VALIDATE_INT);
$code = filter_input(INPUT_POST, 'code');
$name = filter_input(INPUT_POST, 'name');
$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);

$message = "Category ID:" + categoryID;



// Validate inputs
if ($category_ID == null || $category_ID == false ||
        $code == null || $name == null || $price == null || $price == false) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');

    // Update product in the database
    $query = 'UPDATE products
            SET categoryID = :category_ID, productCode = :code, 
            productName = :name, listPrice = :price
            WHERE productID = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_ID', $category_ID);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':product_id', $product_id);
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('index.php');
}
?>