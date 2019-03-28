<?php

session_start();

$mysqli = new mysqli('cis282store.crtglnnryrmm.us-east-1.rds.amazonaws.com', 'baileystore', 'storedb2019', 'cis282store') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$cat_id = 0;
$pro_code = '';
$pro_name = '';
$desc = '';
$list_price = 0;
$discount_percent = 0;


if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM cis282store.products WHERE product_id=$id") or die($mysqli->error());
    
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    
    header("location: ../delete_products_success.php");
}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM cis282store.products WHERE product_id=$id") or die($mysqli->error());
    if (count($result)==1){
        $row = $result->fetch_array();
        $cat_id = $row['category_id'];
        $pro_code = $row['product_code'];
        $pro_name = $row['product_name'];
        $desc = $row['description'];
        $list_price = $row['list_price'];
        $discount_percent = $row['discount_percent'];

        
    }
}

if (isset($_POST['update'])){
    $id = $_POST['product_id'];
    $cat_id = $_POST['category_id'];
    $pro_code = $_POST['product_code'];
    $pro_name = $_POST['product_name'];
    $desc = $_POST['description'];
    $list_price = $_POST['list_price'];
    $discount_percent = $_POST['discount_percent'];
    
    $mysqli->query("UPDATE cis282store.products SET category_id='$cat_id', product_code='$pro_code', product_name='$pro_name', description='$desc', list_price='$list_price', discount_percent='$discount_percent'  WHERE product_id=$id") or
            die($mysqli->error);
    
    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";
    
    header("location: ../edit_products_success.php");
}








// Close Connection
mysqli_close($conn); 

?>