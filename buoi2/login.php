<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php buoi2 </title>
</head>
<body>
<form action="login.php" method="post">
    <h1>Đăng nhập</h1>
    <div>
        <input type="text" name="username" placeholder="Tên đăng nhập">
    </div>
    <div>
        <input type="password" name="password" placeholder="Mật khẩu">
    </div>
    <div>
        <input type="submit" value="Đăng nhập">
    </div>
</form>
<?php
if(isset($_POST['username']) && isset($_POST['password'])){
$tenDangNhap = $_POST['username'];
$matKhau = $_POST['password'];
  //echo $matKhau;
  // neu ten dang nhap la admin mat khau la 123 cho nguoi dung la trang chu
if($tenDangNhap=="admin" && $matKhau=="123"){
       header('location : trangchu.php');
}else{
       
}
}
?>

</form>
</body>
</html>