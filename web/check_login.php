<?php
    session_start();

    if(isset($_POST['check-login'])){
        if($_POST['username'] === 'ch_saad' && $_POST['password'] === 'password'){
            $_SESSION['loggedin'] = true ;
            header("location: ./pages/dashboard.php");
        }
        else {
            $_SESSION['loggedin'] = false ;
            header("location: ./pages/login.php");
        }
    }

?>