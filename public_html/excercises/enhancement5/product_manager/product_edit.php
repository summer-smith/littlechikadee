<?php include '../view/header.php'; ?>

        <main>
            <h1>Edit Product</h1>
  
            <form action="index.php" method="post" id="edit_product_form">
                <input type="hidden" name="action" value="edit_product">
                
                <label>Category:</label>
                <select name="category_ID">
                <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category['categoryID']; ?>"
                            <?php if($category_id == $category['categoryID']){echo("selected");}?>>
                        <?php echo $category['categoryID']; ?>
                    </option>
                <?php endforeach; ?>
                </select>
                <br>

                <label>Code:</label>
                <input type="text" value="<?php echo $product['productCode'] ?>" name="code" />
                <br>

                <label>Name:</label>
                <input type="text" value="<?php echo $product['productName'] ?>" name="name">
                <br>

                <label>List Price:</label>
                <input type="text" value="<?php echo $product['listPrice'] ?>" name="price">
                <br>

                <input type="hidden" name="product_id"
                    value="<?php echo $product_id; ?>">
                               
                <label>&nbsp;</label>
                <input type="submit" value="Edit Product"><br>
 
            </form>
            <p><a href="index.php">View Product List</a></p>   
        </main>

