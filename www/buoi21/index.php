<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   
    if(!isset($_SESSION['username'])){
        header('location: login.php');
        
        exit; 
    }
    ?>
    <nav>
        <ul>
            <li><a class="" href="index.php?page_layout=trangchu">trangchu</a></li>
            <li><a href="index.php?page_layout=phim">phim</a> </li>
            <li><a href="index.php?page_layout=quocgia">quoc gia</a></li>
            <li><a href="index.php?page_layout=theloai">the loai</a></li>
        </ul>
        <ul>
            <li><?php echo "xin chao " . $_SESSION['username'];?></li> 
            <li><a href="index.php?page_layout=dangxuat">dang xuat</a></li>
        </ul>
    </nav>
    
    <?php
    if(isset($_GET['page_layout'])){
       
        switch($_GET['page_layout']){
            case 'trangchu':
                include('trangchu.php');
                break;
            case 'phim':
                include('phim.php');
                break;
            case 'quocgia':
                include('quocgia.php');
                break;
            case 'theloai':
                include('theloai.php');
                break;
            
            case 'dangxuat':
                session_unset(); 
                session_destroy(); 
                header('location: login.php'); 
                exit;
            
            default:
                include('trangchu.php');
                break;
        }
    } else {
        
        include('trangchu.php');
    }
    ?>
</body>
</html>