<?php
# section thong tin dang nhap , gio hang 
// cokie
# dung cho thong tin it quan trong 
    $cookieName="user";
    $cookieValue="Gia Loc";
    // $cookieValue="dark";
    setcookie($cookieName, $cookieValue,time()+(86400), "/");
    if(isset($_COOKIE[$cookieName])){
        echo " cookie da ton tai ";
    }else{
        echo "cooki chua ton tai";
    }
    session_start();
    $_SESSION["name"]="gia loc ";
    echo $_SESSION["name"];
?>
