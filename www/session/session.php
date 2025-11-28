<?php
session_start();
//session duoc luu tren server 
// no dung de chuyen giua cac trang khac nhau 
if(isset($_POST['submit'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    
    $password = $_POST['password'];
    
    if($email == 'ngol48911@gmail.com' && $password == '123456') {
        $_SESSION['email'] = $email;
        //redirect to another page
        header('Location: ./trangchu.php');
    } else {
        echo "Incorrect email/password";
    }
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
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <h3>login to your account</h3>
         <div>
             <label for="name">Email</label>
             <input type="email" name="email">
         </div>
         <div>
             <label for="password">PASSWORD</label>
             <input type="password" name="password">
         </div>
         <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>