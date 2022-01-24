<?php
    // Initialize the session
    session_start();
    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="header-contain">
                <div class="left-side">
                    <img id='open-nav' class="open-icon" src="../images/icons/open-nav.svg" alt="">
                    <img id='close-nav' class="close-cta" src="../images/icons/close-nav.svg" alt="" >
                    <a href="dashboard.php"><img class="logo" src="../images/logo-v2.0.png" alt=""></a>
                </div>
                <div id="navbar-content" class="close-nav">
                    <nav>
                        <ul id="navbar-list">
                            <li class="dash_link"><a href="dashboard.php">
                                <span class="iconify" data-icon="carbon:dashboard-reference" ></span> <p>Dashboard</p></a>
                            </li>
                            <li><a href="category.php">
                                <span class="iconify" data-icon="bx:bxs-category" ></span> <p>Category</p></a>
                            </li>
                            <li><a active="true" href="product_list.php">
                                <span class="iconify" data-icon="ci:list-checklist-alt" ></span> <p>Product list</p></a>
                            </li>
                            <li><a href="product_detail.php">
                                <span class="iconify" data-icon="fluent:production-checkmark-20-filled" ></span> <p>Product detail</p></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="right-side">
                    <form action="">
                        <input class="input-search" type="text" name="search" placeholder="Search here...">
                        <span class="iconify" data-icon="el:search" style="color: #888;"></span>
                    </form>
                    <img class="pr-admin" src="../images/user_.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="search-form">
            <form action="">
                <input class="input-search" type="text" name="search" placeholder="Search here...">
                <span class="iconify" data-icon="el:search" style="color: #888;"></span>
            </form>
        </div>
    </header>

    <section class="statistic">
        <div class="container">
            <div class="part-div">
                <h3>Categories</h3>
                <p><?php echo "234"; ?></p>
            </div>
            <div class="part-div">
                <h3>Products</h3>
                <p><?php echo "34"; ?></p>
            </div>
            <div class="part-div">
                <h3>Orders</h3>
                <p><?php echo "234"; ?></p>
            </div>
            <div class="part-div">
                <h3>Revenue</h3>
                <p><?php echo '$ 3290'; ?></p>
            </div>
        </div>
    </section>
</body>
</html>