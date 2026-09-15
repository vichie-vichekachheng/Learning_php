
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - adding products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body style="margin:0; padding:0; box-sizing:border-box">
    <div class="row p-5" >
        <div class="col-4">
            <form action="insert.php" method="post" class="p-4 shadow-sm " enctype="multipart/form-data">
                <h3 class="text-warning text-center">Add a product</h3><hr>  
                <label for="" class="form-label fw-bold">Product name : </label>
                <input type="text" class="form-control" name="productName" placeholder="Enter a product name">
                <label for="" class="form-label fw-bold">Product price : </label>
                <input type="text" class="form-control" name="productPrice" placeholder="Enter a product price">
                <label for="" class="form-label fw-bold">Product quantity : </label>
                <input type="text" class="form-control" name="productQty" placeholder="Enter a product quantity"><br>
                <label for="" class="form-label fw-bold">Product image : </label><br><br>
                <div class="text-center bg-secondary-subtle rounded-3" style="line-height:55px">
                    <i class="bi bi-card-image display-1"></i>
                    <h5 >Upload File here</h5>
                     <input type="file" name="productImage" class="ms-5 px-5" style="line-height:30px"><br><br>

                </div><br>
                <button class="btn btn-primary w-100 fw-bold p-2" name="uploadImage">Add Product</button><br><br>
               
                
        </form>
        </div>
        <div class="col-8">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>Product Id</th>
                        <th>Product name</th>
                        <th>Product price</th>
                        <th>Product image</th>
                        <th>Product quantity</th>
                        <th>Actions</th>
                    </tr>

                </thead>
                <tbody>
                   <tbody>
<?php
include("config.php");

$result = mysqli_query($conn, "SELECT * FROM add_new_product");

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

while ($row = mysqli_fetch_assoc($result)) {
    echo "
    <tr>
        <td>{$row['Product_id']}</td>
        <td>{$row['Product_name']}</td>
        <td>$ {$row['Product_price']}</td>
        <td> <img src='uploadImage/{$row['product_image']}' width='110px'></td>
        <td>{$row['product_qty']}</td>
        <td>
            <button class='btn btn-danger' name='delete-btn'><a href='delete.php ? Product_id= $row[Product_id]' class='text-white text-decoration-none'>Delete</button>
           <button class='btn btn-success' name='update-btn'><a href='update.php ? Product_id = $row[Product_id]' class='text-white text-decoration-none' >Update</a></button>
        </td>
    </tr>
    ";
}
?>
            </table>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
?>