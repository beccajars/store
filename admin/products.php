<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>CIS 282 | Product List</title>

    <?php 
        require('includes/config.php');
        require('models/products_model.php');
    ?>
</head>
<body>


<div class="container-fluid">
<h1>Product List</h1>
<a href="add_products.php" class="btn btn-primary">Add Product</a>
    <div class="row text-center">
        <div class="col-1"></div>
        <div class="col-1">Category ID</div>
        <div class="col-1">Product Code</div>
        <div class="col-2">Product Name</div>
        <div class="col-2">Description</div>
        <div class="col-1">List Price</div>
        <div class="col-1">Discount Percent</div>
        <div class="col-1">Date Added</div>
    </div>

</div>

 
<div class="contaniner-fluid">
    <div class="row">
        <?php foreach($productList as $row) { ?>	
                <div class="col-1 text-center">   <?php echo $row['product_id']; ?>   </div>
                <div class="col-1 text-center">   <?php echo $row['category_id']; ?>  </div>
                <div class="col-1 text-center">   <?php echo $row['product_code']; ?> </div>
                <div class="col-2 text-center">   <?php echo $row['product_name']; ?> </div>
                <div class="col-2 text-left">   <?php echo $row['description']; ?>  </div>
                <div class="col-1 text-center">   <?php echo $row['list_price']; ?>   </div>
                <div class="col-1 text-center">   <?php echo $row['discount_percent']; ?> </div>
                <div class="col-1 text-center">   <?php echo $row['date_added']; ?>   </div>
                <div class="col-2">
                    <a href="edit_products.php?edit=<?php echo $row['product_id']; ?>" class="btn btn-primary" >Edit</a>
                    <a href="models/edit_products_model.php?delete=<?php echo $row['product_id']; ?>" class="btn btn-danger">Delete</a>
                </div>
        <?php 
            }
        ?>
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>