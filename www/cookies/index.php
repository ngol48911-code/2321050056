<?php
// luu tru du lieu tren trinh duyet 
// du lieu nay co the su dung lai trong 1 khgoang thoi gian nhat dinh 
setcookie('name','Loc', time() + 24*3600);
if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}
// xoa cookies c1 xoa bang tay
// c2 set 1 tg trong qua khu 
setcookie('name','', time() - 24*3600);
if(isset($_POST['submit'])){
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>login to your account</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
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
</body>
</html>