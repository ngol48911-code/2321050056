<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Thêm Người Dùng</title>
  <style>
    .container{
      /* margin-top: 50px */
      display: flex;
      align-item: center;
      justify-content:center;
      padding: 10px;
      border: 1px solid black;


    }
    .body{
     margin-top: 50px
    }
    /* Thêm kiểu để các label và input thẳng hàng hơn */
    .container form div {
      display: flex;
      justify-content: space-between;
      margin-bottom: 5px;
    }
    .container form div label {
      width: 120px; /* Giúp label có độ rộng cố định */
    }
  </style>
</head>
<body>
<div class="body">
  <div class="container">
      <form action="index.php?page_layout=themphim" method="post">
     
           <div>
          <label for="">Tên phim </label>
          <input type="text" name="ten_phim" placeholder="Tên phim">
     </div>

            <div>
          <label for=""> Năm phát hành </label>
          <input type="number" name="nam_phat_hanh" placeholder="nam phat hanh ">
      </div>

            <div>
          <label for="">Quốc gia </label>
          <input type="text" name="ten_quoc_gia" placeholder="nhap ten quoc gia ">
       </div>

              <div>
          <label for="">Số tập </label>
          <input type="number" name="so_tap" placeholder="Nhập  so tap ">
       </div>

              <div>
          <label for=""> Thể loại </label>
          <input type="text" name="ten_the_loai" placeholder="Nhập the loai ">
       </div>
       <div>
        <label for="">Mo ta </label>
        <textarea name="mo_ta" id=""></textarea>
       </div>
          
       <div><input type="submit" value="them phim"></div>
      </form>
  </div>
</div>
   <?php
  include('connect.php');
  // Thêm kiểm tra cho 'ngaysinh'
  if(!empty($_POST['ten_phim']) &&
  !empty($_POST['nam_phat_hanh']) &&
  !empty($_POST['ten_quoc_gia']) &&
  !empty($_POST['so_tap']) &&
  !empty($_POST['ten_the_loai']) &&
  !empty($_POST['mo_ta']) 
 ) { 

  $tenphim=$_POST['ten_phim'];
  $namPhatHanh=$_POST['nam_phat_hanh'];
  $tenQuocGia=$_POST['ten_quoc_gia'];
  $soTap=$_POST['so_tap'];
  $tenTheLoai=$_POST['ten_the_loai']; 
  $moTa=$_POST['mo_ta']; 
  

  $sql="INSERT INTO `phim`(`ten_phim`, `nam_phat_hang`, `quoc_gia_id`, `so_tap`, `mo_ta`,`ten_the_loai`) 
  VALUES ('$tenphim','$namPhatHanh','$tenQuocGia','$soTap','$moTa','$tenTheLoai')";
  // echo $sql;
   // kiem tra dtb co them vao duoc khong 
             if(mysqli_query($conn,$sql)){
                header("Location: index.php?page_layout=phim");
             }else{
                echo "loi sql". mysqli_error($conn);
             }
        } else {
           if($_SERVER['REQUEST_METHOD']== 'POST'){
                echo "<p class= 'warning'> Vui lòng nhập đầy đủ thông tin ! </p>";
           }
        }



  

?>

</body>
</html>