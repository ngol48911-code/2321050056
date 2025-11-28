<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buổi 1 PHP - Code đã sửa lỗi</title>
</head>
<body>
  <?php
  // in ra man hinh 
  echo "hello world <br>";
  echo "hi <br>";
  
  // bien 
  $ten = "Gia Loc";
  // $ + ten bien = gia tri cua bien 
  $tuoi = 28;
  
  // Sử dụng dấu chấm (.) để nối chuỗi
  echo $ten . "" . $tuoi . "<br>"; 
  
  // hang so
  define("soPi", 3.14); // Đổi 3.14 thành kiểu số
  echo soPi . "<br>";
  
  // phan bien ' ' va ""
  echo '$ten' . "<br>";
  echo "$ten" . "<br>";
  
  // Chuoi
  // do dai chuoi 
  echo strlen($ten) . "<br>";
  
  // dem so tu 
  echo str_word_count($ten) . "<br>";
  
  // tim kiem ki tu trong chuoi 
  echo strpos($ten, "o") . "<br>";
  
  // thay the ki tu trong chuoi 
  echo str_replace("Loc", "Bao", $ten) . "<br>";
  
  // toan tu 
  $soThuNhat = 10;
  $soThuHai = 16;
  // += -+ *= /=
  // so sanh == != >= <= === 
  
  echo ($soThuNhat + $soThuHai) . "<br>";
  echo ($soThuNhat == $soThuHai) . "<br>"; // Nên bao quanh bằng dấu () cho rõ ràng
  $tong = $soThuHai + $soThuNhat;
  
  // cau dieu kien  
  // if("dieu kien "){
  //logic}
  // elseif("dieu kien "){
  //   logic
  // }
  
  // kiemm tra tong so thu nhat va so thu 2 
  // neu nho hon 15 thi in ra nho hon 15
  if($tong > 15){
    echo ' tonglon hon 15 <br>'; // Thêm <br> để xuống dòng
  } elseif($tong < 15){
    echo ' tong be hon 15 <br>';
  } else {
    echo 'tong bang 15 <br>';
  }
  
  // switch case 
  $color = "red";
  switch($color){ // Khối switch đã được hoàn thiện
    case "red":
      echo "is red <br>";
      break;
    case "blue":
      echo "is blue <br>";
      break;
    default:
      echo "no color <br>";
      break;
  }

  // Vòng lặp For
  for($i = 0; $i < 10; $i++){
    echo $i . "<br>";
  };
  
  // Mảng
  $mang = ["noc", "huy"];
  echo count($mang) . "<br>"; // Thêm <br>
  echo $mang[0] . "<br>";
  print_r($mang);
  echo "<br>";
  
  // Lỗi cú pháp mảng đã được sửa bằng cách thêm dấu $
  $mang[0] = "danh"; 
  
  // them phan tu 
  $mang[] = "kien ";
  print_r($mang);
  echo "<br>";
  
  // xoa phan tu 
  unset($mang[0]);
  print_r($mang);
  echo "<br>";
  
  // sap xep phan tu trong mang 
  $mang_ky_tu = ["c", "a", "b"]; // Tạo mảng mới để sắp xếp
  sort($mang_ky_tu); 
  print_r($mang_ky_tu);
  echo "<br>";
  // kiem tra bien co ton tai hay khong 
  $bienA='hello';
  if(isset($bienA)){
    echo "bien a co ton tai ";
  }else{
    echo 'bien a khong ton tai ';
  }
  // check emty
  $check="";
  if(isset($check)){
    echo "empty";
  }else{
    echo "no empty";
  }
  function xinChao(){
    return "hello";
  }
  echo xinChao() . "<br>";
  function xinChao2($ten){
    return "hello" . $ten;
  }
  echo xinChao2("Loc") . "<br>";

  ?>
  
</body>
</html>