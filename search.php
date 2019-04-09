<?php
    require('includes/config.php');
    require('models/cart_model.php');
    require('models/search_model.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <title>CIS 282 Store</title>
    

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">CIS282 Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="guitars.php">Guitars</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="basses.php">Basses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="drums.php">Drums</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
      </li>
    </ul>



    <form class="form-inline my-2 my-lg-0" action="search.php" method="post">
      <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" />  
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit" value="Search">Search</button>
    </form>
    
</nav>


<div class="container">
    <div class="row">    
      <div class="col-12 search_results">
        <h2>Search Results for "<?php echo "$search";?>"</h2>
      </div>

     <?php
      while($result = mysqli_fetch_array($searchResult)) { ?>

      <div class="col-2 search_img">
        <?php $resultPicName = str_replace(" ", "_", $result['product_code']); ?>
        <img src="img/<?php echo $result['product_code']; ?>_l.jpg" class="img-fluid" />
      </div>

      <div class="col-10 search_info">
        <h2><a href="product.php?product=<?php echo $result['product_id']; ?>"><?php echo $result['product_name']; ?></a></h2>
        <h4>$<?php echo $result['list_price']; ?></h4>
      </div>
    
      <?php
        }
      ?>    
    
    </div>
</div>










    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>


</html>