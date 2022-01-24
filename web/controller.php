<?php
// session_start();
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
        echo "<div class='success-msg'>
                <span class='iconify' data-icon='ion:checkmark-done-circle-sharp' style='color: #4ecb71;'></span>
                <p><span> SUCCESS! </span>  Your category has been added successfully.</p>
            </div>" ;
    } else {
        echo "<div class='failed-msg'>
                <span class='iconify' data-icon='ci:error' style='color: #f9423c;'></span>
                <p><span> ERROR ! </span>  This category is already exists, try to change the category name.</p>
            </div>" ;
    }
} 

// ADD PRODUCT
if(isset($_POST["submit_product"])){
    $itemData = array(
        "SKU_identity" => $_POST['sku_identity'],
        "_NAME" => $_POST['_name'],
        "_DESCRIPTION" => $_POST['_description'],
        "_QUANTITY" => $_POST['_quantity'],
        "_PRICE" => $_POST['_price'],
        "_STATUS" => $_POST['status_stock'],
        "_CATEGORY" => $_POST['_category'],
        "_IMAGE" => $_POST['_image']      
    );
    if(ADD_PRODUCT($CONNECTION_MYSQL,$itemData)){
        echo "<div class='success-msg'>
                <span class='iconify' data-icon='ion:checkmark-done-circle-sharp' style='color: #4ecb71;'></span>
                <p><span> SUCCESS! </span>  Your product has been added successfully.</p>
            </div>" ;
    } else {
        echo "<div class='failed-msg'>
                <span class='iconify' data-icon='ci:error' style='color: #f9423c;'></span>
                <p><span> ERROR ! </span>  This product is already exists, try to change the product SKU.</p>
            </div>" ;
    }
} 

// DELETE product
if(isset($_POST["delete-product"])){
    if(DELETE_PRODUCT($CONNECTION_MYSQL,$_POST["delete-product"])){
        echo "<div class='success-msg'>
                <span class='iconify' data-icon='ion:checkmark-done-circle-sharp' style='color: #4ecb71;'></span>
                <p><span> SUCCESS! </span>  Your product has been deleted successfully.</p>
            </div>" ;
    } else {
        echo "<div class='failed-msg'>
                <span class='iconify' data-icon='ci:error' style='color: #f9423c;'></span>
                <p><span> ERROR ! </span>  This product doesn't exists.</p>
            </div>" ;
    }
}

// UPDATE product
if(isset($_POST["update-product"])){
    $itemData = array(
        "SKU_identity" => $_POST['sku_identity'],
        "_NAME" => $_POST['_name'],
        "_DESCRIPTION" => $_POST['_description'],
        "_QUANTITY" => $_POST['_quantity'],
        "_PRICE" => $_POST['_price'],
        "_STATUS" => $_POST['status_stock'],
        "_CATEGORY" => $_POST['_category'],
        "_IMAGE" => $_POST['_image']      
    );
    if(EDIT_PRODUCT($CONNECTION_MYSQL,$itemData)){
        echo "<div class='success-msg'>
                <span class='iconify' data-icon='ion:checkmark-done-circle-sharp' style='color: #4ecb71;'></span>
                <p><span> SUCCESS! </span>  Your product has been updated successfully.</p>
            </div>" ;
    } else {
        echo "<div class='failed-msg'>
                <span class='iconify' data-icon='ci:error' style='color: #f9423c;'></span>
                <p><span> ERROR ! </span>  This product doesn't exists.</p>
            </div>" ;
    } 
}


?>