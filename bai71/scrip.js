function chonPhim(stt) {
  let danhSachPhim = [
    {
      id: 1,
      ten: " mua do ",
      namPhatHanh: 2025,
      tuoi: 16,
      quocGia: "Viet Nam",
      poster: "./pic/phosonhai.jpg",
      theLoai: "chieu rap",
    },
    {
      id: 2,
      ten: "conan",
      namPhatHanh: 2008,
      tuoi: 16,
      quocGia: "Nhat Ban",
      poster: "./pic/conan.jpg",
      theLoai: "phim hoat hinh ",
    },
    {
      id: 3,
      ten: "The Matrix",
      namPhatHanh: 1999,
      tuoi: 16,
      quocGia: "USA",
      poster: "./pic/matr.webp",
      theLoai: "khoa hoc vien tuong",
    },
  ];

  stt = parseInt(stt);
  let ptChon = document.getElementById("poster");
  let content = document.getElementById("content_poster");
  let phim = null;
  for (let i = 0; i < danhSachPhim.length; i++) {
    if (danhSachPhim[i].id === stt) {
      phim = danhSachPhim[i];
      break;
    }
  }
  if (!phim) {
    alert("khong co phim");
  }
  ptChon.setAttribute("src", phim.poster);
  let noiDungHTML = `
    <div class="film-content">
      <h2 class="film-title">${phim.ten.trim()}</h2>
      <div class="film-details">
        <div class="film-info-row">
          <p>${phim.namPhatHanh}</p>
          <p>${phim.tuoi}+</p>
          <p>${phim.quocGia}</p>
          <p>${phim.theLoai.trim()}</p>
        </div>
      </div>
      <div class="film-actions">
        <button class="watch-btn">
          <i class="fa-solid fa-play"></i>
          Xem thêm
        </button>
      </div>
    </div>
  `;
  content.innerHTML = noiDungHTML;
}
