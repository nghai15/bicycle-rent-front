<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEADER</title>
    <link href="../css/style.css" rel="stylesheet" />
    <link href="../css/header-footer.css" rel="stylesheet" />
    <script src="../js/jquery-3.7.1.js"></script>
    <script src="../js/main.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
</head>
<body>
    <div id="topbar">
        <div class="topbar-left">
            <a href="main.php">
                <img src="../img/face.jpg" alt="Logo BikeRent" id="logo">
            </a>
            <a href="index.php" class="brand-link">
                <span class="brand">
                    <span class="brand-main">BikeRental</span>
                    <span class="brand-sub">.com</span>
                    <div class="brand-slogan">Nâng tầm phong cách sống</div>
                </span>
            </a>
            <span class="hours">
                <i class="fa-solid fa-clock"></i>
                <b>24/7 </b>
            </span>
        </div>
        <div class="topbar-right">
            <a href="#">Liên Hệ</a>
            <span class="divider">|</span>
            <a href="gioithieu.php">Giới Thiệu</a>
            <span class="divider">|</span>
            <a href="#">Dịch vụ chính</a>
            <span class="divider">|</span>
            
           <!-- Giỏ hàng -->
        <a href="cart.php" class="cart-icon">
            <i class="fa-solid fa-shopping-cart"></i>
            <span class="cart-count" id="cart-count">0</span>
        </a>
        <span class="divider">|</span>
        
        <span class="icon user-icon">👤</span>
        
            <a href="logout.php" class="top-bar__right__item">Đăng xuất</a><span class="pipe2">|</span>
        
            <a href="register.php" class="top-bar__right__item">Đăng ký</a><span class="pipe2">|</span>
            <a href="login.php" class="top-bar__right__item">Đăng nhập</a>
        
    </div>
</div>
<script src="../jquery-3.7.1.js"></script>



    <!-- Main bar -->
    <nav id="main-nav">
        <a href="main.php">TRANG CHỦ</a>
        <a href="gioithieu.php">GIỚI THIỆU</a>
        <a href="dichvu.php">DỊCH VỤ</a>
        <a href="tintuc.php">TIN TỨC</a>
    </nav>
    

</body>
</html>