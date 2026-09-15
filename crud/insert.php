<?php

include('config.php');

if (isset($_POST['uploadImage'])) {

    $product_name = filter_input(INPUT_POST, 'productName');
    $product_price = $_POST['productPrice'];
    $product_qty = $_POST['productQty'];

    // Get image information
    $img_loc = $_FILES['productImage']['tmp_name'];
    $img_name = $_FILES['productImage']['name'];

    // Move image to upload folder
    move_uploaded_file($img_loc, 'uploadImage/' . $img_name);

    // Insert data into database
    try {

        mysqli_query($conn, "INSERT INTO add_new_product 
        (product_name, product_price, product_image, product_qty)
        VALUES 
        ('$product_name', $product_price, '$img_name', $product_qty)");
        header("Location:index.php");
    } catch (mysqli_sql_exception $e) {

        echo "Error: " . mysqli_error($conn);
    }
    
}

?>