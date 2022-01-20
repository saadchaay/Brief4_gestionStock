<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product list</title>
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/productList.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="header-contain">
                <div class="left-side">
                    <img id='open-nav' class="open-icon" src="../images/icons/open-nav.svg" alt="">
                    <img id='close-nav' class="close-cta" src="../images/icons/close-nav.svg" alt="" >
                    <img class="logo" src="../images/logo-v2.0.png" alt="">
                </div>
                <div id="navbar-content" class="close-nav">
                    <nav>
                        <ul id="navbar-list">
                            <li class="dash_link"><a href="index.php">
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
    <section class="sec-direction">
            <div class="container">
                <div class="path-direction">
                    <ul>
                        <span class="iconify" data-icon="entypo:home" style="color: #f24e1e;"></span>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="product_list.php">/ Menu</a></li>
                        <li style="display:none;"><a href="product_detail.php">/ Product detail</a></li>
                    </ul>
                </div>
                <div class="add-product-cta">
                    <button type="submit" onclick="displayForm();">
                        <span class="iconify" data-icon="ant-design:appstore-add-outlined"></span>
                        <p>Add product</p>
                    </button>
                </div>
            </div>
    </section>
    <?php  
        include '../test.php' ;
        $allCategories = GET_CATEGORY($CONNECTION_MYSQL);
        $allItems = GET_PRODUCTS($CONNECTION_MYSQL);
    ?>
    <section id="add-product-form" class="disabled-form">
        <div class="head-form">
            <img id="close-form" class="close-icon-form" src="../images/icons/close-nav.svg" alt="">
        </div>
        <div class="logo-shop">
            <img src="../images/logo-v2.0.png" alt="logo">
        </div>
        <h4 id="heading">Please fill this form for add a product</h4>
        <form action="./product_list.php" method="post">
            <div class="div">
                <input id="_name" required name="_name" type="text" placeholder="Product name...">
            </div>
            <div class="div">
                <input required id="_sku" name="sku_identity" type="number" placeholder="SKU idenity...">
                <select  name="_category" id="category-select">
                    <option id="_category" value="_category">Select category...</option>
                    <?php 
                        foreach ($allCategories as $category) {
                            echo '<option value="'.$category["id_category"].'">'. $category["_name"] .'</option>' ;
                        }
                    ?>
                </select>
            </div>
            <div class="div">
                <input required id="_quantity" name="_quantity" type="number" placeholder="Quantity...">
                <input required id="_price" name="_price" type="number" placeholder="Price...">
            </div>
            <div class="div">
                <textarea id="_description" name="_description" id="" cols="30" rows="10" placeholder="Description..."></textarea>
            </div>
            
            <div class="file-upload">
                <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Choose file...</button>
                <div class="image-upload-wrap">
                    <input required name="_image" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                    <div class="drag-text">
                        <h3>Drag and drop a file or select add Image</h3>
                    </div>
                </div>
                <div class="file-upload-content">
                    <img class="file-upload-image" src="#" alt="your image" />
                    <div class="image-title-wrap">
                        <button type="button" onclick="removeUpload()" class="remove-image">Remove 
                        <span class="image-title">Uploaded Image</span></button>
                    </div>
                </div>
            </div>
            <div class="btns">
                <button type="reset">Reset</button>
                <button id="btn-submit" type="submit">Submit</button>
            </div>
        </form>
    </section>

    <section id="confirm-form" class="disabled-form">
        <div class="container">
                <p>
                    Are you sure you want to delete this item ?
                </p>
            <form action="./product_list.php" method="post">
                <button class="cancel-cta" type="submit">Cancel</button>
                <button id="confirm-msg" class="ok-cta" name="delete-product" type="submit">Confirm</button>
            </form>
        </div>
    </section>

    <section class="items">
        <div id="container" class="container">
            <?php
                foreach ($allItems as $item) {
                    $categ = Get_categoryName($CONNECTION_MYSQL,$item["id_product"]);
                    $status = stock($item["_status"]);
                    echo '
                    <div id="item" class="item">
                        <div class="top-side">
                            <img src="../images/'.$item["image"].'" alt="">
                            <div>
                                <form action="./product_detail.php" method= "POST">
                                    <button type="submit" name="show-details" value="'.$item["id_product"].'">
                                        <h4 name="name" id="name_item">'.$item["_name"].'</h4>
                                    </button>
                                </form>
                                <p> Qty: '.$item["_quantity"].'</p> 
                            </div>
                            <div>
                                <span > $'.$item["_price"].'</span>
                                <span class="stock-status">'. $status .'</span>
                            </div>
                        </div>
                        <div class="center-side">
                            <p name="desc">'.$item["_description"].'</p>
                        </div>
                        <div class="bottom-side">
                            <button onclick="displayDelete(\''.$item["SKU_identity"].'\');" value="'.$item["SKU_identity"].'">Remove</button>
                            <button onclick="displayFormEdit(\''.$item["_name"].'\',\''.$item["_description"].'\',\''.$item["_price"].'\',\''.$item["_quantity"].'\',\''.$item["SKU_identity"].'\',\''.$categ["_name"].'\');">Edit</button>
                        </div>
                    </div>' ;
                }
            ?>
        </div>
    </section>

    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <script src="../js/imageInput.js"></script>
    <script src="../js/nav.js"></script>
    <script type="module" src="../js/list.js"></script>
    
    <script>
        var ADD_FORM = document.getElementById('add-product-form');
        const CLOSE_FORM_ICON = document.getElementById('close-form');
        var input_name = document.getElementById('_name');
        var input_sku = document.getElementById('_sku');
        var input_desc = document.getElementById('_description');
        var input_price = document.getElementById('_price');
        var input_quantity = document.getElementById('_quantity');
        var input_catg = document.getElementById('_category');
        var heading = document.getElementById('heading');
        var btn_update = document.getElementById('btn-submit');
        var form_delete = document.getElementById('confirm-form');
        var btn_delete = document.getElementById('confirm-msg');
            function displayForm() {
                ADD_FORM.className = "add-product";
                input_name.setAttribute('value',"");
                input_sku.setAttribute('value',"");
                input_sku.removeAttribute('disabled');
                input_sku.setAttribute('style','background: none;');
                input_desc.textContent = "" ;
                input_price.setAttribute('value',"");
                input_quantity.setAttribute('value',"");
                input_catg.setAttribute('value',"");
                btn_update.textContent = "Submit";
                heading.textContent = "Please fill this form for add a product";
                btn_update.setAttribute('name','submit_product');
            }

            function displayFormEdit(name, description, price, quantity, sku_id) {
                ADD_FORM.className = "add-product";
                input_name.setAttribute('value',name);
                // input_sku.setAttribute('disabled',true);
                input_sku.setAttribute('value',sku_id);
            //TODO: keep disabled SKU input ....
                input_sku.setAttribute('style','background: #f1f1f1;');
                input_sku.setAttribute('value',sku_id);
                input_desc.textContent = description ;
                input_price.setAttribute('value',price);
                input_quantity.setAttribute('value',quantity);
                heading.textContent = "Please change this data form for update a product";
                btn_update.textContent = "Update";
                btn_update.setAttribute('name','update-product');
            }

            function displayDelete(sku_id){
                form_delete.className = "confirmation-msg" ;
                btn_delete.setAttribute('value',sku_id);
            }

            CLOSE_FORM_ICON.addEventListener('click' , () => {
                ADD_FORM.className = "disabled-form" ;
            });
    </script>

</body>
</html>

