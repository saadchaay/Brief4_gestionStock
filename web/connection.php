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

?>