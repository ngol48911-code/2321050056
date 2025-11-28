<?php
session_start();

// Kiểm tra phiên đăng nhập
// SỬA LỖI: Kiểm tra $_SESSION["username"] thay vì $_SESSION["name"]
if(!isset( $_SESSION["username"])){
    // SỬA LỖI CÚ PHÁP HEADER: dùng 'Location:'
    header('Location: login.php');
    exit(); // Rất quan trọng để dừng script
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
</head>
<body>
    
    <h1>Trang Chủ</h1>
    
    <?php
   
    echo "Xin chào " . $_SESSION["username"] . "!";
    ?>
    
    <p><a href="logout.php">Đăng xuất</a></p>
    
</body>
</html>