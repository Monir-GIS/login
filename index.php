<?php
    session_name("myApp");
    session_start([
    "cookie_lifetime" => 60 // 1 Miniute
]);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIS BREB</title>

    <meta name="keywords" content="Bangladesh Rural Electrification Board (BREB), REB, BREB"/>
    <meta name="description" content="Bangladesh Rural Electrification Board (BREB), REB, BREB"/>
    <meta name="author" content="Bangladesh Rural Electrification Board (BREB)"/>

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    <!-- Favicon -->
    <link rel="icon" href="img/icon/globe-4.png" type="image/png">
    <link rel="icon" href="img/icon/globe.ico"  type="image/x-icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css" type="text/css" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./style.css" type="text/css" media="all">
</head>

<body>
    <div class="container d-flex align-items-center justify-content-center">
        <!-- Card Start Here -->
        <div class="card signin_card">
            <!-- Card Header -->
            <div class="card-header">
                <h3 class="text-center">Sign In</h3>

                <?php
                if(true == $_SESSION['loggedin']){
                    echo "Hello Admin, Welcome";
                }else{
                    echo "Hello Stranger, Login Below!";
                }
                ?>
            </div>

            <!-- Card Body -->
            <div class="card-body">
                <form action="" method = "POST">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                        <input type="text" id="username" name="username" class="form-control" placeholder="Enter Your Username" required autocomplete="off">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter Your Password" required autocomplete="off">
                    </div>

                    <div class="form-group">
                        <input type="submit" name="signin" id="signin" value="Sign In" class="btn registration_btn">
                    </div>
                </form>
            </div >

            <!-- Card Footer -->
            <div class="card-footer text-center text-light signin">
                Don't have an account? <a href="signUp.php">Sign Up</a>
            </div>
        </div>
        <!-- Card End Here -->
    </div>
</body>

</html>
