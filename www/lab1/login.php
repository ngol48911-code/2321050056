<?php
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <h2>LOGIN</h2>
        <form action="" method="post" <?php echo $_SERVER['PHP_SELF']?>>
            <input type="text" name="tendm" id="">
            <input type="submit" name="themm oi" value="Thêm mới">
        </form>
    </div>
</body>
</html>