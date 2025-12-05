<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="username"  placeholder="Tên đăng nhập">
        <input type="password" name="password"  placeholder="mat khau ">
        <input type="submit" name="dangnhap" value="dang nhap">
    </form>
    <?php 
    include ('connect.php');
    if(isset($_POST['username'])&& isset($_POST['password'])){
        $tenDangNhap= $_POST['username'];
        $matKhau= $_POST['password'];
        $sql="select *from nguoi_dung where ten_dang_nhap=' $tenDangNhap' and mat_khau='$matKhau'";
        $reresult=mysqli_query($conn, $sql);
        if(mysqli_num_rows($reresult)>0){
            session_start();
            $_SESSION['username']=$tenDangNhap;
            header("location:index.php");
        }else{
            echo "khong tim thay thong tin dang nhap ";
        }

    }
    ?>
</body>
</html>