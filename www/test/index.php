<?php
    // echo " super globol php<br>";
    // // voi doi  tuong $_GET $_POST
    // if(isset($_GET['name']))
    // echo $_GET['name'];
    // echo $_GET['age'] ;
    // de tramh hacker su dunng 1 cau lenh de nhap lenh o input nham lay ra  thong tin 
    // ta su dung  htmlspancialchars
    $email=htmlspecialchars($_POST['email'] ?? '');
    $password=$_POST['password'] ?? '';
    echo $email;
    echo $password;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- the form o day la de khai bao du lieu gui tu trinh duyet len sever  -->
    <form action="index.php" method="POST">
        <!-- doi tuong $_SERVER['PHP_SELF'] tra  ve chinh cai ten  file php -->
         <!-- method = get la gui tham so qua trinh duyet  -->
          <!-- method post du lieu duoc dong goi thanh 1 doi tuong sau do gui di  -->
           <h3>login to your account</h3>
         <div>
             <label for="name">Email</label>
             <input type="email " name= "email">
         </div>
         <div>
             <label for="password">PASSWORD       </label>
             <input type="password " name= "password">
         </div>
         <input type="submit" value= "Submit" name="submit">
    </form>
    <?php
    if(isset($_POST['email']) && isset($_POST['password'])){
        $tenDangNhap=$_POST['email'];
        $password= $_POST['password'];
        echo "$tenDangNhap<br>";
        echo "$password<br>";

        
    }
    ?>
</body>
</html>