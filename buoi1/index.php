<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buoi 1 php</title>
</head>
<body>
    <?php
    // in ra man hinh 
    echo "hello world <br>";
    echo "hi";
    // bien 
    $ten="Gia Loc";
    // $ + ten bien = gia tri cua bien 
    $tuoi=28;
    echo $ten. "" . "$tuoi";
    // hang so
    define("soPi","3.14");
    echo soPi . "<br>";
    
    // phan bien ' ' va ""
    echo '$ten' . "<br>";
    echo "$ten" . "<br>";
    // Chuoi
    // do dai chuoi 
    echo strlen($ten) . "<br>";
    // dem  so tu 
    echo str_word_count($ten) . "<br>";
    // tim kiem ki tu trong chuoi 
    echo strpos($ten,"o") . "<br>";
    // thay the ki tu trong chuoi 
     echo str_replace("Loc","Bao",$ten). "<br>";
     // toan tu 
     $soThuNhat=10;
     $soThuHai=16;
     // += -+ *= /=
     // so sanh == != >= <= === 
     echo $soThuNhat + $soThuHai. "<br>";
     echo $soThuNhat == $soThuHai. "<br>";
     $tong=$soThuHai + $soThuNhat;
     // cau dieu kien   
     // if("dieu kien "){
     //logic}
    //  elseif("dieu kien "){
    //     logic
    //  }
    // kiemm tra tong so thu nhat va so thu 2 
    // neu nho hon 15 thi in ra nho hon 15
    if($tong >15){
        echo ' tonglon hon 15';
    }elseif($tong <15){
        echo '  tong be hon 15 ';
    }else{
        echo 'tong bang 15 ';
    }
    // switch case 
    $color= "red";
    // switch(color):{
    //     case "red":
    //         echo "is red";
    //         break;
    //     case "blue":
    //         echo "is blue";
    //         break;
    //     default:
    //         echo "no color";
    //         break;
    // }
    for($i=0 ; $i<10 ; $i++){
        echo $i . "<br>";
    };
    $mang=["noc","huy"];
    echo count($mang);
    echo $mang[0]  . "<br>";
    print_r($mang);
    mang[0]="danh"; 
    // them phan tu 
    mang[]="kien ";
    print_r($mang);
    // xoa phan tu 
    unset($mang[0]);
    print_r($mang);


    ?>
    
</body>
</html>