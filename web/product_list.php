<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product list</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="header-contain">
                <div class="left-side">
                    <img id='open-nav' class="open-icon" src="./images/icons/open-nav.svg" alt="">
                    <img id='close-nav' class="close-cta" src="./images/icons/close-nav.svg" alt="" >
                    <img class="logo" src="./images/logo_.jpg" alt="">
                </div>
                <div id="navbar-content" class="close-nav">
                    <nav>
                        <ul id="navbar-list">
                            <li class="dash_link"><a href="index.php">
                                <span class="iconify" data-icon="carbon:dashboard-reference" ></span> <p> Dashboard </p></a>
                            </li>
                            <li><a href="category.php">
                                <span class="iconify" data-icon="bx:bxs-category" ></span> <p> Category </p></a>
                            </li>
                            <li><a href="product_list.php">
                                <span class="iconify" data-icon="ci:list-checklist-alt" ></span> <p> Product list </p></a>
                            </li>
                            <li><a href="product_detail.php">
                                <span class="iconify" data-icon="fluent:production-checkmark-20-filled" ></span> <p> Product detail </p></a>
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
                        <li style=""><a href="product_detail.php">/ Product detail</a></li>
                    </ul>
                </div>
                <div class="add-product-cta">
                    <button type="submit" onclick="">
                        <span class="iconify" data-icon="ant-design:appstore-add-outlined" style="color: #f24e1e;"></span>
                        <p>Add product</p>
                    </button>
                </div>
            </div>
    </section>
    
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>