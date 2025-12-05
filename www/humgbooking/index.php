<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- reset css -->
    <link rel="stylesheet" href="./assets/css/reset.css" />
    <!-- nhúng font chữ -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&family=Sora:wght@100..800&display=swap"
      rel="stylesheet"
    />
    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
      integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- favicon -->
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
    <!-- style css -->
    <link rel="stylesheet" href="./assets/css/style.css" />

    <title>HUMG Booking</title>
    <title>Document</title>
</head>
<body>
    <header>
       <div class="navigation">
        <div class="main__content">
          <div class="navigation__main">
            <a href="index.php?chuyen_trang=trangChu"><img src="./img/logo.png" alt="" /></a>
             <div class="nav__link">
              <div class="nav__link__a">
                <a class="<?php if($_GET["chuyen_trang"] == "trangChu"){echo "link__active";}?>" href="index.php?chuyen_trang=trangChu">Trang Chủ</a>
                <a class="<?php if($_GET["chuyen_trang"] == "diemDen" ){echo "link__active";}?>" href="index.php?chuyen_trang=diemDen">Điểm Đến</a>
                <a class="<?php if($_GET["chuyen_trang"] == "datPhong"){echo "link__active";}?>" href="index.php?chuyen_trang=datPhong">Đặt Phòng Của Tôi</a>
              </div>
              <div class="nav__link__button">
                <button class="sign__up">
                  <a href="dangNhap.php" style="color: white"
                    >Đăng Nhập</a
                  >
                </button>
                <button class="register">
                  <a href="dangKy.php">Đăng Ký</a>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main>
  <?php
      if(isset($_GET["chuyen_trang"])){
       switch($_GET["chuyen_trang"]){
          case "trangChu":
              include "trangChu.php";
              break;
          case "diemDen":
              include "diemDen.php";
              break;
          case "datPhong":  
              include "datPhong.php";
              break;  

        } 
     }else{
      //  include "trangChu.php";
        header("Location: index.php?chuyen_trang=trangChu");
     }
  ?>
    </main>
    <footer>
      <div class="main__content">
        <div class="footer-container">
          <div class="footer-section">
            <h4>Liên hệ</h4>
            <p><i class="fa-solid fa-location-dot"></i> Hà Nội, Việt Nam</p>
            <p><i class="fa-solid fa-phone"></i> +84 345 446 102</p>
            <p><i class="fa-solid fa-envelope"></i> HUMGbooking@gmail.com</p>
          </div>

          <div class="footer-section">
            <h4>Liên kết nhanh</h4>
            <ul>
              <li><a href="index.php?chuyen_trang=trangChu">Trang chủ</a></li>
              <li><a href="index.php?chuyen_trang=diemDen">Tìm khách sạn</a></li>
              <li>
                <a href="index.php?chuyen_trang=datPhong">Phòng của tôi</a>
              </li>
            </ul>
          </div>

          <div class="footer-section">
            <h4>Kết nối</h4>
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
          </div>
        </div>
        <div class="footer-bottom">
          <p>© 2025 HUMG Booking. All rights reserved.</p>
        </div>
      </div>
    </footer>
    <script src="./assets/js/main.js"></script>
</body>
</html>