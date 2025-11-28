<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />

    <title>Document</title>
  </head>
  <body>
    <?php
session_start();
if(!isset($_SESSION["username"])){
    header('location: login.php');
}
?>
    <nav>
      <ul class="">
    <li class=""><a class="" href="index.php?page_layout=trangchu">Trang chủ</a></li>
    <li class=""><a class="" href="index.php?page_layout=phim">Phim</a></li>
    <li class=""><a class="" href="index.php?page_layout=theloai">Thể loại</a></li>
    <li class=""><a class="" href="index.php?page_layout=quocgia">Quốc gia</a></li>
    <li class=""><a class="" href="index.php?page_layout=nguoidung">Người dùng</a></li>
</ul>
<ul class="">
    <li class=""><?php echo "xin chào " . $_SESSION["username"]; ?></li>
    <li class=""><a class="" href="index.php?page_layout=dangxuat">Đăng xuất</a></li>
</ul>
<nav>
<?php
if(isset($_GET['page_layout'])){
    switch($_GET['page_layout']){
        case 'trangchu':
            include "trangchu.php";
            break;
        case 'phim':
            include "phim.php";
            break;
        case 'theloai':
            include "theloai.php";
            break;
        case 'quocgia':
            include "quocgia.php";
            break;
        case 'nguoidung':
            include "nguoidung.php";
            break;
        case 'dangxuat':
          include "dangxuat.php";
          break;
          
    }
}
?>
    </nav>
  </body>
</html>
