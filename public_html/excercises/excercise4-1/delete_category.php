<?php
require_once('database.php');

// Get IDs
$categoryName = filter_input(INPUT_POST, 'categoryName');

// Delete the product from the database
if ($categoryName != false) {
    $query = 'DELETE FROM categories
              WHERE categoryName = :categoryName';
    $statement = $db->prepare($query);
    $statement->bindValue(':categoryName', $categoryName);
    $success = $statement->execute();
    $statement->closeCursor();    
} else {
    $error = "Something is wrong";
    inlcude ('error.php');
}

// Display the Category list
include('category_list.php');