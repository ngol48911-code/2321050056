<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đặt Phòng Của Tôi</title>
    <style>
      main {
        padding: 80px 0;
      }

      h1 {
        color: #2c3e50;
        margin-bottom: 10px;
        font-size: 32px;
        font-weight: 700;
      }

      h4 {
        color: rgb(135, 138, 138);
        font-weight: 400;
        margin-bottom: 20px;
      }

      .tin2 {
        margin-top: 40px;
        position: relative;
      }

      .timkiem {
        padding: 5px 5px;
        width: 100%;
      }

      .tin2 .timkiem {
        width: 100%;
        padding: 14px 14px 14px 45px;
        border: 2px solid #e0e0e0;
        border-radius: 10px;
        font-size: 15px;
        margin-top: 15px;
        transition: all 0.3s ease;
        background-color: white;
      }

      .tin2 .timkiem:focus {
        outline: none;
        border-color: #07a5fe;
        box-shadow: 0 0 0 3px rgba(138, 43, 226, 0.1);
      }

      .tin2 i {
        position: absolute;
        margin-top: 28px;
        margin-left: 18px;
        color: #999;
        font-size: 16px;
      }

      .box {
        background-color: white;
        width: 100%;
        height: 270px;
        margin: 25px 0px;
        display: flex;
        border-radius: 12px;
        padding: 15px 15px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        border: 1px solid rgba(0, 0, 0, 0.05);
      }

      .box:hover {
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.12);
        transform: translateY(-2px);
      }

      .box img {
        width: 250px;
        height: 240px;
        object-fit: cover;
        align-self: center;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      }

      li {
        list-style: none;
      }

      .box1 {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        margin-left: 20px;
        flex: 1;
        padding: 5px 0;
      }

      .box1 li b {
        font-size: 22px;
        color: #2c3e50;
        font-weight: 600;
      }

      .box1 p {
        color: #7a7a7a;
        margin: 12px 0px;
        font-size: 15px;
        line-height: 1.5;
      }

      .box1 b {
        font-size: 20px;
        color: #2c3e50;
        font-weight: 600;
      }

      .box10 {
        margin-top: -10px;
      }

      .box11 {
        display: flex;
        gap: 15px;
        align-items: center;
        margin-top: 10px;
      }

      .nutbox11 {
        border: 1px solid #07a5fe;
        padding: 10px 20px;
        border-radius: 8px;
        color: white;
        background-color: #07a5fe;
        font-weight: 500;
        font-size: 14px;
        transition: all 0.3s ease;
        box-shadow: 0 2px 6px rgba(138, 43, 226, 0.2);
      }

      .nutbox11:hover {
        /* background-color:  #0567a0; */
        /* border-color:  #07a5fe; */
        transform: translateY(-1px);
        /* box-shadow: 0 4px 12px rgba(138, 43, 226, 0.3); */
      }

      .nutbox12 {
        border: 1px solid rgb(200, 200, 200);
        padding: 10px 20px;
        border-radius: 8px;
        color: #333;
        background-color: rgba(240, 240, 240, 0.97);
        font-weight: 500;
        font-size: 14px;
        transition: all 0.3s ease;
      }

      .nutbox12:hover {
        background-color: rgba(220, 220, 220, 0.97);
        border-color: rgb(180, 180, 180);
        transform: translateY(-1px);
      }

      .nutbox13 {
        color: #e74c3c;
        font-weight: 500;
        font-size: 14px;
        padding: 10px 0;
        transition: all 0.3s ease;
      }

      .nutbox13:hover {
        color: #c0392b;
        text-decoration: underline;
      }

      .tinhtrang {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 5px;
      }

      .tinhtranh1 {
        border: 1px solid #4caf50;
        background-color: #4caf50;
        color: white;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 500;
      }

      .box2 {
        border: 2px dashed #d0d0d0;
        height: auto;
        min-height: 450px;
        padding: 60px 40px;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background: linear-gradient(
          to bottom,
          rgba(255, 255, 255, 0.95),
          rgba(250, 250, 250, 0.95)
        );
      }

      .box21 {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        width: 100%;
        max-width: 500px;
      }

      .icon {
        font-size: 90px;
        color: #07a5fe;
        margin-bottom: 25px;
      }

      .title {
        font-size: 26px;
        font-weight: 700;
        margin-bottom: 18px;
        color: #2c3e50;
      }

      .text {
        color: #666;
        margin: 10px 0;
        font-size: 16px;
        line-height: 1.6;
      }

      .timkiemcuoi {
        margin-top: 35px;
        padding: 14px 40px;
        border-radius: 8px;
        color: white;
        background-color: #07a5fe;
        border: 1px solid #07a5fe;
        font-size: 16px;
        font-weight: 600;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(138, 43, 226, 0.25);
      }

      .timkiemcuoi:hover {
        background-color: #07a5fe;
        border-color: #07a5fe;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(138, 43, 226, 0.35);
      }
    </style>
  </head>
  <body>
    <main>
      <div class="main__content">
        <div class="tin2">
          <h1>Đặt phòng của tôi</h1>
          <h4>Xem và quản lí các chuyến đi sắp tới của bạn</h4>
          <i class="fa fa-search" aria-hidden="true"></i>
          <input
            class="timkiem"
            type="text"
            name=""
            id=""
            placeholder="Tìm theo tên khách sạn hoặc mã đặt phòng "
          />
        </div>
        <div class="box">
          <img src="./assets/img/hotelBD1.webp" alt="" />
          <div class="box1">
            <div class="box10">
              <div class="tinhtrang">
                <li><b>Khách sạn Luxe Paradise</b></li>
                <p clas="tinhtranh1">Đã xác thực</p>
              </div>
              <p>123 Cầu Giấy, Hà Nội</p>
              <p>Ngày 15 tháng 10 - 18 tháng 10, 2024 2 Người lớn, 1 phòng</p>
              <b>Tổng cộng : 570.000 VND</b>
            </div>
            <div class="box11">
              <a class="nutbox11" href="">Xem chi tiết</a>
              <a class="nutbox12" href="">Sửa đổi</a>
              <a class="nutbox13" href="">Hủy</a>
            </div>
          </div>
        </div>
        <div class="box">
          <img src="./assets/img/hotelDD1.webp" alt="" />
          <div class="box1">
            <div class="box10">
              <div class="tinhtrang">
                <li><b>Khách sạn Hanoi Emotion</b></li>
                <p clas="tinhtranh1">Đã xác thực</p>
              </div>
              <p>456 Đống Đa, Hà Nội</p>
              <p>Ngày 20 tháng 10 - 22 tháng 10, 2024 1 Người lớn, 1 phòng</p>
              <b>Tổng cộng : 450.000 VND</b>
            </div>
            <div class="box11">
              <a class="nutbox11" href="">Xem chi tiết</a>
              <a class="nutbox12" href="">Sửa đổi</a>
              <a class="nutbox13" href="">Hủy</a>
            </div>
          </div>
        </div>
        <div class="box">
          <img src="./assets/img/hotelHBT1.webp" alt="" />
          <div class="box1">
            <div class="box10">
              <div class="tinhtrang">
                <li><b>Khách sạn Sunrise Hanoi</b></li>
                <p clas="tinhtranh1">Đã xác thực</p>
              </div>
              <p>789 Hai Bà Trưng, Hà Nội</p>
              <p>Ngày 25 tháng 10 - 27 tháng 10, 2024 3 Người lớn, 2 phòng</p>
              <b>Tổng cộng : 1.200.000 VND</b>
            </div>
            <div class="box11">
              <a class="nutbox11" href="">Xem chi tiết</a>
              <a class="nutbox12" href="">Sửa đổi</a>
              <a class="nutbox13" href="">Hủy</a>
            </div>
          </div>
        </div>
        <div class="box">
          <img src="./assets/img/hotelHBT2.webp" alt="" />
          <div class="box1">
            <div class="box10">
              <div class="tinhtrang">
                <li><b>Khách sạn Ben's Premier</b></li>
                <p clas="tinhtranh1">Đã xác thực</p>
              </div>
              <p>321 Hai Bà Trưng, Hà Nội</p>
              <p>Ngày 1 tháng 11 - 3 tháng 11, 2024 2 Người lớn, 1 phòng</p>
              <b>Tổng cộng : 680.000 VND</b>
            </div>
            <div class="box11">
              <a class="nutbox11" href="">Xem chi tiết</a>
              <a class="nutbox12" href="">Sửa đổi</a>
              <a class="nutbox13" href="">Hủy</a>
            </div>
          </div>
        </div>
        <div class="box">
          <img src="./assets/img/hotelHK1.webp" alt="" />
          <div class="box1">
            <div class="box10">
              <div class="tinhtrang">
                <li><b>Khách sạn THE LEGEND</b></li>
                <p clas="tinhtranh1">Đã xác thực</p>
              </div>
              <p>654 Hoàn Kiếm, Hà Nội</p>
              <p>Ngày 5 tháng 11 - 7 tháng 11, 2024 2 Người lớn, 1 phòng</p>
              <b>Tổng cộng : 750.000 VND</b>
            </div>
            <div class="box11">
              <a class="nutbox11" href="">Xem chi tiết</a>
              <a class="nutbox12" href="">Sửa đổi</a>
              <a class="nutbox13" href="">Hủy</a>
            </div>
          </div>
        </div>
        <div class="box">
          <img src="./assets/img/hotelHk2.webp" alt="" />
          <div class="box1">
            <div class="box10">
              <div class="tinhtrang">
                <li><b>Khách sạn An Nguyen Boutique</b></li>
                <p clas="tinhtranh1">Đã xác thực</p>
              </div>
              <p>987 Hoàn Kiếm, Hà Nội</p>
              <p>Ngày 10 tháng 11 - 12 tháng 11, 2024 1 Người lớn, 1 phòng</p>
              <b>Tổng cộng : 520.000 VND</b>
            </div>
            <div class="box11">
              <a class="nutbox11" href="">Xem chi tiết</a>
              <a class="nutbox12" href="">Sửa đổi</a>
              <a class="nutbox13" href="">Hủy</a>
            </div>
          </div>
        </div>
        <div class="box box2">
          <div class="box21">
            <i class="fa fa-suitcase icon" aria-hidden="true"></i>
            <h2 class="title">Không tìm thấy đặt phòng</h2>
            <p class="text">Bạn chưa có chuyến đi nào sắp tới.</p>
            <p class="text">
              Hãy bắt đầu lên kế hoạch cho chuyến phiêu lưu tiếp theo của bạn!
            </p>
            <a class="timkiemcuoi" href="">Bắt đầu tìm kiếm</a>
          </div>
        </div>
      </div>
    </main>
    <script></script>
  </body>
</html>
