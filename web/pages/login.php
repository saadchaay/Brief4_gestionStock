
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login_css.css">
    <title>Login page</title>
</head>
<body>
    <section class="login-part">
        <div class="container">
            <div class="div_form"> 
                <div class="admin_image">
                    <img src="../images/user_.jpg" alt="">
                </div>
                <form action="../check_login.php" class="form_login" method="POST">
                        <span>Login below to get started</span>
                        <input type="text" name="username" placeholder="Email Adresse">
                        <input type="password"  name="password" placeholder="password">
                        <button type="submit" name="check-login">Login</button>
                    </form>
            </div>
        </div>
    </section>
    
</body>
</html>