<?php

include 'CRUD_category.php' ;
include 'CRUD_product.php' ;
include 'connection.php' ;

/*                    CRUD category                    */

        // ADD CATEGORY
        if(isset($_POST["submit-category"])){
            $catgData = array(
                "_NAME" => $_POST['_name'],
                "_DESCRIPTION" => $_POST['_description'],
                "_IMAGE" => $_POST['_image']       
            );
            if(ADD_CATEGORY($CONNECTION_MYSQL,$catgData)){
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

        // DELETE category
        if(isset($_POST["delete-category"])){
            if(DELETE_CATEGORY($CONNECTION_MYSQL,$_POST["delete-category"])){
                echo "<div class='success-msg'>
                        <span class='iconify' data-icon='ion:checkmark-done-circle-sharp' style='color: #4ecb71;'></span>
                        <p><span> SUCCESS! </span>  Your category has been deleted successfully.</p>
                    </div>" ;
            } else {
                echo "<div class='failed-msg'>
                        <span class='iconify' data-icon='ci:error' style='color: #f9423c;'></span>
                        <p><span> ERROR ! </span>  This category doesn't exists.</p>
                    </div>" ;
            }
        }

        // UPDATE category
        if(isset($_POST["update-category"])){
            $itemData = array(
                "_NAME" => $_POST['_name'],
                "_DESCRIPTION" => $_POST['_description'],
                "_IMAGE" => $_POST['_image']      
            );
            if(EDIT_CATEGORY($CONNECTION_MYSQL,$itemData,$_POST["update-category"])){
                echo "<div class='success-msg'>
                        <span class='iconify' data-icon='ion:checkmark-done-circle-sharp' style='color: #4ecb71;'></span>
                        <p><span> SUCCESS! </span>  Your category has been updated successfully.</p>
                    </div>" ;
            } else {
                echo "<div class='failed-msg'>
                        <span class='iconify' data-icon='ci:error' style='color: #f9423c;'></span>
                        <p><span> ERROR ! </span>  This category doesn't exists.</p>
                    </div>" ;
            } 
        }


/*                    CRUD product                    */

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
            if(!empty($_POST['status_stock'])){
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
            } else {
                $itemData = array(
                    "SKU_identity" => $_POST['sku_identity'],
                    "_NAME" => $_POST['_name'],
                    "_DESCRIPTION" => $_POST['_description'],
                    "_QUANTITY" => $_POST['_quantity'],
                    "_PRICE" => $_POST['_price'],
                    "_STATUS" => 1,
                    "_CATEGORY" => $_POST['_category'],
                    "_IMAGE" => $_POST['_image']      
                );
            }
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