<?php 

//get all products
$strSQL = 
    "SELECT *

    FROM 
    cis282store.products p

    ORDER BY 
    p.product_id
    ";

//get results
$result = mysqli_query($conn, $strSQL);

//fetch data
$productList = mysqli_fetch_all($result, MYSQLI_ASSOC);