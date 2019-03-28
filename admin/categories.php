<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    
    <?php 
        require('includes/config.php');
        require('models/categories_model.php');
    ?>

    <title>CIS 282 | Category List</title>
</head>
<body>
    <div class="container-fluid main-title">
        <div class="row">
            <div class="col">
                <h1>Category List</h1>
                <a href="add_categories.php" class="btn btn-primary">Add Category</a>            
            </div>
        </div>
    </div>

<div class="container-fluid main-headers">
    <div class="row text-center">
        <div class="col-1"></div>
        <div class="col-5 text-left"><strong>Category</strong></div>
    </div>


</div>


    <?php foreach($categoryList as $row) { ?>
    <div class="container-fluid list">
        <div class="row text-center">
                <div class="col-1"><?php echo $row['category_id']; ?></div>
                <div class="col-5 text-left"><?php echo $row['category_name']; ?></div>
                <div class="col-6">
                    <a href="edit_categories.php?edit=<?php echo $row['category_id']; ?>">Edit</a>
                    <a href="models/edit_categories_model.php?delete=<?php echo $row['category_id']; ?>" class="btn btn-danger">Delete</a>
                </div>
        </div>
    </div>
    <?php } ?>
</body>
</html>