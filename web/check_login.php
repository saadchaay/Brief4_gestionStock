<?php
    session_start();
    include 'connection.php' ;

    
    function get_user($con) {
        $REQ = "SELECT * FROM admin" ;
        $QUERY = $con->prepare($REQ) ;
        $QUERY->execute();
        return $QUERY->fetchAll();
    }

    $admins = get_user($CONNECTION_MYSQL) ;
    
    $temp = array(
        "username" => '',
        "password" => ''
    );


    $allAdmin = array();

    foreach ($admins as $admin) {
        $temp['username'] = $admin['username'];
        $temp['password'] = $admin['password'];
        array_push($allAdmin,$temp);
    }
    // print_r($allAdmin);

    if(isset($_POST['check-login'])){
        for ($i=0; $i < count($allAdmin); $i++) {
            if($_POST['username'] === $allAdmin[$i]['username'] && $_POST['password'] === $allAdmin[$i]['password']){
                $_SESSION['loggedin'] = true ;
                header("location: ./pages/dashboard.php");
                break;
            }
            else {
                $_SESSION['loggedin'] = false ;
                header("location: ./pages/login.php");
            }
        }
    }

?>