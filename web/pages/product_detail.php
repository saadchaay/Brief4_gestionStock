<?php 
    session_start();
 // Check if the user is already logged in, if yes then redirect him to welcome page
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
    <title>Product detail</title>
    <link rel="stylesheet" href="../css/productDetail.css">
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
                                <span class="iconify" data-icon="carbon:dashboard-reference" ></span>
                                <p> Dashboard </p></a>
                            </li>
                            <li><a href="category.php">
                                <span class="iconify" data-icon="bx:bxs-category" ></span>
                                <p> Category </p></a>
                            </li>
                            <li><a href="product_list.php">
                                <span class="iconify" data-icon="ci:list-checklist-alt" ></span>
                                <p> Product list </p></a>
                            </li>
                            <li><a active="true" href="product_detail.php">
                                <span class="iconify" data-icon="fluent:production-checkmark-20-filled" ></span>
                                <p> Product detail </p></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="right-side">
                    <form action="">
                        <input class="input-search" type="text" name="search" placeholder="Search here...">
                        <span class="iconify" data-icon="el:search" style="color: #888;"></span>
                    </form>
                    <a href="../logoutAdmin.php"><span class="iconify" data-icon="ls:logout" style="color: #ff9a62;"></span></a>
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
    <section class="sec-direction">
            <div class="container">
                <div class="path-direction">
                    <ul>
                        <span class="iconify" data-icon="entypo:home" style="color: #f24e1e;"></span>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="product_list.php">/ Menu</a></li>
                        <li><a href="product_detail.php">/ Product detail</a></li>
                    </ul>
                </div>
            </div>
    </section>
    <?php 
        include '../controller.php' ;
    ?>
    <section>
        <div class="container">
            <?php 
                if(isset($_POST["show-details"])) {
                    $id = $_POST["show-details"];
                    $item = GET_PRODUCT($CONNECTION_MYSQL,$id);
                    $status = stock($item["_status"]);
                    $name_catg = GetName_category($CONNECTION_MYSQL,$item["ID_category"]);
                    echo '<div class="top-side">
                        <h4>Product detail</h4>
                        <div class="line-title"></div>
                        <img class="product-img" src="../images/'.$item["image"].'" alt="">
                        <h4>'.$item["_name"].'</h4>
                    </div>
                    <div class="bottom-side">
                        <div class="product-info">
                            <h5>Product info</h5>
                            <table>
                                <tr>
                                    <th>Price</th>
                                    <td>$ '. $item["_price"] .'</td>
                                </tr>
                                <tr>
                                    <th>Product category</th>
                                    <td>'.$name_catg.'</td>
                                </tr>
                                <tr>
                                    <th>Avaibility</th>
                                    <td><span id="status-stock">'. $status .'</span></td>
                                </tr>
                                <tr>
                                    <th>SKU identity</th>
                                    <td>'.$item["SKU_identity"].'</td>
                                </tr>
                                <tr>
                                    <th>
                                        <form action=""><button type="submit">Remove</button></form>
                                    </th>
                                    <td>
                                        <form action=""><button type="submit">Edit</button></form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="product-desc">
                            <h5>Product description</h5>
                            <p>'.$item["_description"].'</p>
                        </div>
                    </div>' ;
                } 
                else {
                    echo '<div class="alert alert-warning" role="alert">
                           <p>No Product Selected To Show! <a href="dashboard.php">Go back Home</a></p>
                        </div>' ;
                }  
            ?>
            
        </div>
    </section>

    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <script src="../js/nav.js"></script>
    <script src="../js/details.js"></script>

</body>
</html>