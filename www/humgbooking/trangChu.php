<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang Chủ</title>
    <style>
      :root {
        --primary-color: #07a5fe;
      }
      .slide__main {
        position: relative;
        margin-top: 150px;
        width: 100%;
        height: 500px;
        background: url(./assets/img/slide10.jpg);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        border-radius: 10px;
      }
      .slide__main::after {
        content: "";
        position: absolute;
        top: 0;
        left: 100%;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        transition: left 0.8s ease;
      }

      .slide__main.slide::after {
        left: 0;
      }
      .slide__main button {
        width: 40px;
        height: 50px;
        font-size: 18px;
        border: 0;
        outline: none;
        background-color: rgba(255, 255, 255, 0.84);
        cursor:pointer;
        position: absolute;
        border-radius: 10px;
      }
      button.slide__main__next{
        right: 5px;
        top: 50%;
      }
      .slide__main__prev{
        left: 5px;
        top: 50%;
      }
      .slide__main i {
        color: var(--primary-color);
      }

      /* phần hotels */

      .hotels {
        padding: 100px 0;
      }
      .hotels__content {
        position: relative;
      }
      .hotels h2 {
        font-size: 28px;
        font-weight: 600;
        margin-bottom: 30px;
      }
      .hotels__list {
        display: flex;
        /* gap: 40px; */
        width: 100%;
        flex-wrap: wrap;
        justify-content: space-between;
      }
      .hotels__card {
        padding: 15px;
        background-color: #f5f4fa;
        position: relative;
        width: 24%;
        z-index: 1;
        margin-bottom: 30px;
        border-radius: 10px;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px,
          rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
        transition: all 0.2s ease;
      }
      .hotels__card img {
        width: 100%;
        border-radius: 10px;
      }
      .hotels__card:hover {
        transform: scale(1.03);
      }
      .hotels__card p {
        color: #00000088;
        font-size: 15px;
        margin-top: 5px;
      }
      .hotels__card h3,
      span {
        color: black;
        font-size: 15px;
        font-weight: bold;
        margin-top: 10px;
      }
      .hotels button {
        position: absolute;
        color: var(--primary-color);
        background: #f5f4fa;
        cursor: pointer;
        right: 0;
      }
      .hotels.active button.hotels__less {
        right: 93%;
        left: 0;
      }
      .hotels button:hover {
        text-decoration: underline;
      }
      /* phần services */
      .services {
        padding: 50px 0 150px;
      }
      .services__main {
        padding: 60px 10px;
        width: 100%;
        display: flex;
        justify-content: space-between;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
        border-radius: 10px;
      }
      .services__box {
        width: 30%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }
      .services__box i {
        font-size: 28px;
      }
      .services__box h3 {
        font-size: 18px;
        margin: 20px 0;
        font-weight: bold;
      }
      .services__box p {
        font-size: 16px;
        text-align: center;
        color: gray;
      }
    </style>
  </head>
  <body>
    <div class="slide">
      <div class="main__content">
        <div class="slide__main">
          <button class="slide__main__prev">
            <i class="fa-solid fa-angle-left"></i>
          </button>
          <button class="slide__main__next">
            <i class="fa-solid fa-angle-right"></i>
          </button>
        </div>
      </div>
    </div>
    <div class="hotels">
      <div class="main__content">
        <div class="hotels__content">
          <h2>Chỗ ở nổi bật</h2>
          <div class="hotels__list">
            <div class="hotels__card">
              <a class="hotels__card__img" href=""
                ><img src="./assets/img/hotelHK1.webp" alt=""
              /></a>
              <h3 class="hotels__card__name">Khách sạn THE LEGEND</h3>
              <p class="hotels__card__location">Hoàn Kiếm , Hà Nội</p>
              <p class="hotels__card__total">
                <span class="hotels__card__price">500.000 vnd</span>/đêm
              </p>
            </div>
            <div class="hotels__card">
              <a class="hotels__card__img" href=""
                ><img src="./assets/img/hotelHBT2.webp" alt=""
              /></a>
              <h3 class="hotels__card__name">Khách sạn Ben's Premier</h3>
              <p class="hotels__card__location">Hai Bà Trưng , Hà Nội</p>
              <p class="hotels__card__total">
                <span class="hotels__card__price">300.000 vnd</span>/đêm
              </p>
            </div>
            <div class="hotels__card">
              <a class="hotels__card__img" href=""
                ><img src="./assets/img/hotelHk2.webp" alt=""
              /></a>
              <h3 class="hotels__card__name">Khách sạn An Nguyen Boutique</h3>
              <p class="hotels__card__location">Hoàn Kiếm , Hà Nội</p>
              <p class="hotels__card__total">
                <span class="hotels__card__price">700.000 vnd</span>/đêm
              </p>
            </div>
            <div class="hotels__card">
              <a class="hotels__card__img" href=""
                ><img src="./assets/img/hotelBD1.webp" alt=""
              /></a>
              <h3 class="hotels__card__name">Khách sạn Luxe Paradise</h3>
              <p class="hotels__card__location">Ba Đình , Hà Nội</p>
              <p class="hotels__card__total">
                <span class="hotels__card__price">200.000 vnd</span>/đêm
              </p>
            </div>
          </div>
          <button class="hotels__less">Ẩn bớt</button>
          <button class="hotels__more">Xem thêm</button>
        </div>
      </div>
    </div>
    <div class="services">
      <div class="main__content">
        <div class="services__main">
          <div class="services__box">
            <i class="fa-solid fa-check-to-slot"></i>
            <h3>Đảm bảo đánh giá tốt nhất</h3>
            <p>
              Tìm được giá thấp hơn và chúng tôi sẽ khớp giá. Không cần hỏi.
            </p>
          </div>
          <div class="services__box">
            <i class="fa-solid fa-microphone"></i>
            <h3>Hỗ trợ khách hàng 24/7</h3>
            <p>
              Đội ngũ của chúng tôi luôn sẵn sàng giúp đỡ bạn suốt ngày đêm, bất
              cứ khi nào bạn cần.
            </p>
          </div>
          <div class="services__box">
            <i class="fa-solid fa-calendar-check"></i>
            <h3>Miễn phí hủy phòng</h3>
            <p>
              Linh hoạt với các tùy chọn hủy miễn phí trên hầu hết các phòng.
            </p>
          </div>
        </div>
      </div>
    </div>
    <script>
      // phần trượt slide
      // const slideBox = document.querySelector(".slide__main");
      // const slideNext = document.querySelector(".slide__main__next")
      // const slidePrev = document.querySelector(".slide__main__prev")
      // let listSlide = ["./assets/img/slide1.jpg" , "./assets/img/slide10.jpg"];
      // let numSlide = 0;
      // slideNext.addEventListener("click" , function(){
      //   numSlide += 1;
      //   for (let index = 0; index < listSlide.length; index++) {
      //     if(numSlide == listSlide[index]){
      //       slideBox.style.background = "url(listSlide[index])";
      //       console.log(numSlide);
            
      //     }
          
      //   }
      // })

      // phần xem thêm và ẩn bớt
      const xemThem = document.querySelector(".hotels__more");
      const anBot = document.querySelector(".hotels__less");
      const quanLyKhachSan = document.querySelector(".hotels__list");
      const khachSan = document.querySelector(".hotels");

      let listHotels = [
        {
          nameHotel: "Khách sạn THE LEGEND",
          imgHotel: "./assets/img/hotelHK1.webp",
          locationHotel: "Hoàn Kiếm , Hà Nội",
          priceHotel: "500.000 vnd",
        },
        {
          nameHotel: "Khách sạn Ben's Premier",
          imgHotel: "./assets/img/hotelHBT2.webp",
          locationHotel: "Hai Bà Trưng , Hà Nội",
          priceHotel: "300.000 vnd",
        },
        {
          nameHotel: "Khách sạn An Nguyen Boutique",
          imgHotel: "./assets/img/hotelHK2.webp",
          locationHotel: "Hoàn Kiếm , Hà Nội",
          priceHotel: "700.000 vnd",
        },
        {
          nameHotel: "Khách sạn Luxe Paradise",
          imgHotel: "./assets/img/hotelBD1.webp",
          locationHotel: "Ba Đình , Hà Nội",
          priceHotel: "200.000 vnd",
        },
      ];

      function hienThiKhachSan() {
        quanLyKhachSan.innerHTML = "";
        for (let index = 0; index < listHotels.length; index++) {
          quanLyKhachSan.innerHTML += `<div class="hotels__card">
                <a class="hotels__card__img" href=""
                  ><img src=${listHotels[index].imgHotel} alt=""
                /></a>
                <h3 class="hotels__card__name">${listHotels[index].nameHotel}</h3>
                <p class="hotels__card__location">${listHotels[index].locationHotel}</p>
                <p class="hotels__card__total">
                  <span class="hotels__card__price">${listHotels[index].priceHotel}</span>/đêm
                </p>
              </div>`;
        }
      }
      function themKhachSan() {
        listHotels.push(
          {
            nameHotel: "Khách sạn Hanoi Emotion",
            imgHotel: "./assets/img/hotelDD1.webp",
            locationHotel: "Đống Đa , Hà Nội",
            priceHotel: "400.000 vnd",
          },
          {
            nameHotel: "Khách sạn Sunrise Hanoi",
            imgHotel: "./assets/img/hotelHBT1.webp",
            locationHotel: "Hai Bà Trưng , Hà Nội",
            priceHotel: "600.000 vnd",
          },
          {
            nameHotel: "Khách sạn Luxeden",
            imgHotel: "./assets/img/hotelCG1.webp",
            locationHotel: "Cầu Giấy , Hà Nội",
            priceHotel: "500.000 vnd",
          },
          {
            nameHotel: "Khách sạn First Eden",
            imgHotel: "./assets/img/hotelBD2.webp",
            locationHotel: "Ba Đình , Hà Nội",
            priceHotel: "600.000 vnd",
          }
        );
        hienThiKhachSan();
      }

      function xoaKhachSan() {
        listHotels.splice(4, listHotels.length - 1);
        hienThiKhachSan();
      }

      xemThem.addEventListener("click", function () {
        themKhachSan();
        khachSan.classList.add("active");
      });
      anBot.addEventListener("click", function () {
        xoaKhachSan();
        khachSan.classList.remove("active");
      });
    </script>
  </body>
</html>
