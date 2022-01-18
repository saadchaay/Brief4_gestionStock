<?php
$item = array(
    "SKU_identity" => 890762,
    "_NAME" => "product name",
    "_DESCRIPTION" => "Description produit",
    "_QUANTITY" => 24,
    "_PRICE" => 467,
    "_STATUS" => 1,
    "_CATEGORY" => 1,
    "_IMAGE" => "../images/veggin 2.png" 
) ; 

/* $CONNECTION_MYSQL = new PDO(
    'mysql:host=localhost;dbname=gestionstock_db;charset=utf8',
    'root',
    '',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
); */

//check cnx
/* function linked_DB($connection){
    try {
        $connection ;
        echo "connection successfully" ;
    } catch (Exception $th) {
        die('Error:  '. $th->getMessage());
    }
} */

//Get ID product
function GetID_PRODUCT($conn,$SKU_id):int {
    $_Query = "SELECT id_product FROM product WHERE SKU_identity = :SKU_";
    $_QUERY_ = $conn->prepare($_Query);
    $_QUERY_->execute([
        "SKU_" => $SKU_id
    ]);
    $ID = $_QUERY_->fetchColumn();
    if(empty($ID))
        return 0;
    else return $ID;
}

//CHECK SKU_identity
function CHECK_PRODUCT_bySKU($conn,$SKU_id):bool {
    $count = 0;
    $_Query = "SELECT SKU_identity FROM product";
    $_QUERY_ = $conn->prepare($_Query);
    $_QUERY_->execute();
    $SKUs = $_QUERY_->fetchAll();
    foreach ($SKUs as $sku_) {
        if($sku_[0] == $SKU_id){
            $count += 1 ;
        }
    }
    if($count == 0) {
        return false ;
    } else {
        return true ;
    }
}

// get ALL products
function GET_PRODUCTS($conn) {
    $getItems = 'SELECT * FROM product' ;
    $_Query = $conn->prepare($getItems);
    $_Query->execute();
    return $_Query->fetchAll();
}

// ADD a product
function ADD_PRODUCT($conn,$item):bool {
    if(!CHECK_PRODUCT_bySKU($conn,$item['SKU_identity'])) {
        $_Query = "INSERT INTO product(SKU_identity, `image`, _name, _description, _status, _quantity, _price, ID_category) VALUES (:SKU, :IMG, :NAME_, :DESC_, :STATUS_, :QTY, :PRICE, :ID_C)";
        $_QUERY_ = $conn->prepare($_Query);
        $_QUERY_->execute([
            'SKU' => $item['SKU_identity'],
            'NAME_' => $item["_NAME"] ,
            'DESC_' => $item["_DESCRIPTION"] ,
            'STATUS_' => $item["_STATUS"] ,
            'QTY' => $item["_QUANTITY"] ,
            'PRICE' => $item["_PRICE"] ,
            'IMG' => $item["_IMAGE"],
            'ID_C' => $item["_CATEGORY"] 
        ]) or die(print_r($conn->errorInfo()));
        return true;
    }
    else {
        return false;
    }
}

// Edit a product
function EDIT_PRODUCT($conn,$item):bool {
    if(CHECK_PRODUCT_bySKU($conn,$item["SKU_identity"])){
        $_Query = "UPDATE product SET  `image` = :IMG, _name = :NAME_, _description = :DESC_, _status = :STATUS_, _quantity = :QTY, _price = :PRICE WHERE SKU_identity = :SKU" ;
        $_QUERY_ = $conn->prepare($_Query);
        $_QUERY_->execute([
            'SKU' => $item['SKU_identity'],
            'NAME_' => $item["_NAME"] ,
            'DESC_' => $item["_DESCRIPTION"] ,
            'STATUS_' => $item["_STATUS"] ,
            'QTY' => $item["_QUANTITY"] ,
            'PRICE' => $item["_PRICE"] ,
            'IMG' => $item["_IMAGE"]
        ]) or die(print_r($conn->errorInfo()));
        return true;
    } else {
        return false;
    }
}

//DELETE product
function DELETE_PRODUCT($conn,$SKU_id):bool {
    if(CHECK_PRODUCT_bySKU($conn,$SKU_id)) {
        $_Query = "DELETE FROM product WHERE SKU_identity = :SKU";
        $_QUERY_ = $conn->prepare($_Query);
        $_QUERY_->execute([ "SKU" => $SKU_id ]) or die(print_r($conn->errorInfo()));
        return true;
    } else {
        return false;
    }
}

?>