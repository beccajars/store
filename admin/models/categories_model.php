<?php 

//get all products
$strSQL = 
    "SELECT *

    FROM 
    cis282store.categories c

    ORDER BY 
    c.category_id
    ";

//get results
$result = mysqli_query($conn, $strSQL);

//fetch data
$categoryList = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result
mysqli_free_result($result);

//close connection
mysqli_close($conn);

?>