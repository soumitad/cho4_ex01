<?php
// Get the product data

$category = filter_input(INPUT_POST, 'category');
$categoryId = filter_input(INPUT_POST, 'categoryId');


// Validate inputs
if ($category == null) {
    $error = "Invalid Category data. Check the field and try again.";
    include('error.php');
} else {
    require_once('database.php');

    // Add the product to the database  
    $query = 'INSERT INTO categories_guitar_shop1
                 (categoryID, categoryName)
              VALUES
                 (:categoryId, :category)';
    $statement = $db->prepare($query);
    $statement->bindValue(':category', $category);
    $statement->bindValue(':categoryId', $categoryId);
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('index.php');
}
?>
