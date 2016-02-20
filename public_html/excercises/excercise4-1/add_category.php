<?php
//Get user input from form
$category_name = filter_input(INPUT_POST, 'category_name');

//Validate
if($category_name == null){
    $error = "Please enter a category name.";
            include ('error.php');
} else {
       require_once('database.php');

    // Add the product to the database  
    $query = 'INSERT INTO categories
                 (categoryName)
              VALUES
                 (:category_name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_name', $category_name);
    $statement->execute();
    $statement->closeCursor();

    // Display the Category List page
    include('category_list.php'); 
}

?>
