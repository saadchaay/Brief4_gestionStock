<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/categorie.css">
    <title>Category page</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
                                <span class="iconify" data-icon="carbon:dashboard-reference" ></span>
                                <p> Dashboard </p></a>
                            </li>
                            <li><a active="true" href="category.php">
                                <span class="iconify" data-icon="bx:bxs-category" ></span>
                                <p> Category </p></a>
                            </li>
                            <li><a href="product_list.php">
                                <span class="iconify" data-icon="ci:list-checklist-alt" ></span>
                                <p> Product list </p></a>
                            </li>
                            <li><a href="product_detail.php">
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
                        <li><a href="category.php">/ Category</a></li>
                        <li style="display:none;"><a href="product_detail.php">/ Product detail</a></li>
                    </ul>
                </div>
                <div class="add-product-cta">
                    <button type="submit" onclick="displayForm_category();">
                        <span class="iconify" data-icon="ant-design:appstore-add-outlined"></span>
                        <p>Add Category</p>
                    </button>
                </div>
            </div>
    </section>
    <?php  
        include '../test.php' ;
        $allCategories = GET_CATEGORY($CONNECTION_MYSQL);
    ?>
    <div class="success-msg" id="success-msg">
        <span class="iconify" data-icon="ion:checkmark-done-circle-sharp" style="color: #4ecb71;"></span>
        <p><span> WELL DONE! </span>  Your category has been added successfully.</p>
    </div>
    <section id="add-category-form" class="disabled-form">
        <div class="head-form">
            <img id="close-form" class="close-icon-form" src="../images/icons/close-nav.svg" alt="">
        </div>
        <div class="logo-shop">
            <img src="../images/logo-v2.0.png" alt="logo">
        </div>
        <h4>Please fill this form for add a category</h4>
        <form action="" method="post">
            <div class="div">
                <input required name="_name" type="text" placeholder="Category name...">
            </div>
            <div class="div">
                <textarea required name="_description" id="" cols="30" rows="10" placeholder="Description..."></textarea>
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
                <button name="submit_category" type="submit">Submit</button>
            </div>
        </form>
    </section> 
    <section id="categories" class="all-items-categories">
        <div id="category-item" class="item-category" >
            <img src="../images/veggies 2.jpg" alt="">
            <div class="paragraph_1">
                <h3>Burgger</h3>
            </div>
            <div class="paragraph_2" >
                <div >
                    <p>Total order </p>
                    <span class="price"> 150 </span>
                </div>
                <div>
                    <p>Revenue </p>
                    <span class="price"> 1000 $</span>
                </div>
            </div>
            <div >
                <button class="see_more"> See products</button>
            </div> 
        </div>
    </section>


    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <script src="../js/imageInput.js"></script>
    <script type="module" src="../js/nav.js"></script>
    <script type="module" src="../js/category.js"></script>

    <script>
        const ADD_FORM = document.getElementById('add-category-form');
        const CLOSE_FORM_ICON = document.getElementById('close-form');

            function displayForm_category() {
                ADD_FORM.className = "add-category";
            }
            CLOSE_FORM_ICON.addEventListener('click' , () => {
                ADD_FORM.className = "disabled-form" ;
            });
    </script>
    
</body>
</html>