<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <nav class="navbar bg-warning navbar-expand-lg">
        <a href="home.php" class="navbar-brand fs-1 fw-bold mx-auto" style="letter-spacing:12px">
    TECHSHOP
</a>
<form action="logout.php" method="post">
    <input type="submit" value="Logout" name="logout" class="btn btn-secondary me-5">
</form>
    </nav>
    <div class="container-fluid p-4">
        <h2>ALL PRODUCTS</h2>
        <div class="row p-4">
    <?php        
        $products = mysqli_query($conn, "SELECT * FROM add_new_product");
if(!$products){
    echo "Error : ". mysqli_error($products);
}
while($row= mysqli_fetch_assoc($products)){

    echo "
   <div class='col-md-2 mb-3'>
    <div class='card shadow-sm text-center p-2' style='max-width:400px;max-height:400px'>
        <img src='uploadImage/{$row['product_image']}' class='card-img-top img-fluid' style='max-width:300px;height:235px' alt='{$row['Product_name']}'>
        <div class='card-body'>
            <h5 class='card-title'>{$row['Product_name']}</h5>
            <div>
                <h4 class='text-danger fw-bold'>$ {$row['Product_price']}</h4>
            </div>
        </div>
    </div>
</div>
    ";
}
    ?>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>