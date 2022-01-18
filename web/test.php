<?php
include 'CRUD_category.php' ;
include 'CRUD_product.php' ;

// ADD CATEGORY
if(isset($_POST["submit_category"])){
    $categoryData = array(
        "_NAME" => $_POST['_name'],
        "_DESCRIPTION" => $_POST['_description'],
        "_IMAGE" => $_POST['_image']       
    );
    if(ADD_CATEGORY($CONNECTION_MYSQL,$categoryData)){
        echo "<div id='success-msg'></div>" ;
    } else {
        echo "<div id='failed-msg'></div>" ;
    }
} 

if(isset($_POST["submit_product"])){
    $categoryData = array(
        "SKU_identity" => $_POST['sku_identity'],
        "_NAME" => $_POST['_name'],
        "_DESCRIPTION" => $_POST['_description'],
        "_QUANTITY" => $_POST['_quantity'],
        "_PRICE" => $_POST['_price'],
        "_STATUS" => $_POST['_status'],
        "_CATEGORY" => $_POST['_category'],
        "_IMAGE" => $_POST['_image']      
    );
} 
 


?>