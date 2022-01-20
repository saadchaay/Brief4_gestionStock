<?php

    $CONNECTION_MYSQL = new PDO(
        'mysql:host=localhost;dbname=gestionstock_db;charset=utf8',
        'root',
        '',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    //check cnx
    function linked_DB($connection){
        try {
            $connection ;
            echo "connection successfully" ;
        } catch (Exception $th) {
            die('Error:  '. $th->getMessage());
        }
    }

    //Get ID CATEGORY
    function GetID_CATEGORY($conn,$_name):int {
        $_Query = "SELECT id_category FROM category WHERE _name = :_NAME";
        $_QUERY_ = $conn->prepare($_Query);
        $_QUERY_->execute([
            "_NAME" => $_name
        ]);
        $ID = $_QUERY_->fetchColumn();
        if(empty($ID))
            return 0;
        else return $ID;
    }

    function GetName_category($conn,$id_catg):string {
        $_Query = "SELECT _name FROM category WHERE id_category = :ID_catg ";
        $result = $conn->prepare($_Query);
        $result->execute([
            "ID_catg" => $id_catg
        ]);
        return $result->fetchColumn();
    }
    
    //CHECK SKU_identity
    function CHECK_CATEGORY_byName($conn,$_name):bool {
        $count = 0;
        $_Query = "SELECT _name FROM category";
        $_QUERY_ = $conn->prepare($_Query);
        $_QUERY_->execute();
        $all_category = $_QUERY_->fetchAll();
        foreach ($all_category as $name_) {
            if($name_[0] == $_name){
                $count += 1 ;
            }
        }
        if($count == 0) {
            return false ;
        } else {
            return true ;
        }
    }

    // get ALL CATEGORYs
    function GET_CATEGORY($conn) {
        $getItems = 'SELECT * FROM category' ;
        $_Query = $conn->prepare($getItems);
        $_Query->execute();
        return $_Query->fetchAll();
    }

    // ADD a CATEGORY
    function ADD_CATEGORY($conn,$category):bool {
        if(!CHECK_CATEGORY_byName($conn,$category['_NAME'])) {
            $_Query = "INSERT INTO category(_name, _description, `image`) VALUES (:NAME_, :DESC_, :IMG)";
            $_QUERY_ = $conn->prepare($_Query);
            $_QUERY_->execute([
                'NAME_' => $category["_NAME"] ,
                'DESC_' => $category["_DESCRIPTION"] ,
                'IMG' => $category["_IMAGE"]
            ]) or die(print_r($conn->errorInfo()));
            return true;
        }
        else {
            return false;
        }
    }

    // Edit a CATEGORY
    function EDIT_CATEGORY($conn,$category):bool {
        if(CHECK_CATEGORY_byName($conn,$category["_NAME"])){
            $_Query = "UPDATE category SET  `image` = :IMG, _name = :NAME_, _description = :DESC_ WHERE _name = :NAME_" ;
            $_QUERY_ = $conn->prepare($_Query);
            $_QUERY_->execute([
                'NAME_' => $category["_NAME"] ,
                'DESC_' => $category["_DESCRIPTION"] ,
                'IMG' => $category["_IMAGE"]
            ]) or die(print_r($conn->errorInfo()));
            return true;
        } else {
            return false;
        }
    }

    //DELETE CATEGORY
    function DELETE_CATEGORY($conn,$_name):bool {
        if(CHECK_CATEGORY_byName($conn,$_name)) {
            $_Query = "DELETE FROM category WHERE _name = :NAME_";
            $_QUERY_ = $conn->prepare($_Query);
            $_QUERY_->execute([ "NAME_" => $_name ]) or die(print_r($conn->errorInfo()));
            return true;
        } else {
            return false;
        }
    }

?>