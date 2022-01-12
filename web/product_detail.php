<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product detail</title>
    <link rel="stylesheet" href="./css/productDetail.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="header-contain">
                <div class="left-side">
                    <img id='open-nav' class="open-icon" src="./images/icons/open-nav.svg" alt="">
                    <img id='close-nav' class="close-cta" src="./images/icons/close-nav.svg" alt="" >
                    <img class="logo" src="./images/logo-v2.0.png" alt="">
                </div>
                <div id="navbar-content" class="close-nav">
                    <nav>
                        <ul id="navbar-list">
                            <li class="dash_link"><a href="index.php">
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
                    <img class="pr-admin" src="./images/user_.jpg" alt="">
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
    <section>
        <div class="container">
            <div class="top-side">
                <h4>Product detail</h4>
                <div class="line-title"></div>
                <img class="product-img" src="./images/veggies 2.jpg" alt="">
                <h4>veggies 2</h4>
            </div>
            <div class="bottom-side">
                <div class="product-info">
                    <h5>Product info</h5>
                    <table>
                        <tr>
                            <th>Price</th>
                            <td>$45.99</td>
                        </tr>
                        <tr>
                            <th>Product category</th>
                            <td>Veg</td>
                        </tr>
                        <tr>
                            <th>Avaibility</th>
                            <td><span id='status-stock'>Out stock</span></td>
                        </tr>
                        <tr>
                            <th>SKU identity</th>
                            <td>67098</td>
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
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <script src="./js/nav.js"></script>
    <script src="./js/details.js"></script>
</body>
</html>