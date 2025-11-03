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
    theLoai: "phim hoat hinh   ",
  },
];
let phimHienTai = danhSachPhim[0];
let banner = document.getElementsByClassName("poster");
function choPhim(idPhim) {
  for (let i = 0; i < danhSachPhim.length; i++) {
    if ((danhSachPhim[i].backgroundImage = danhSachPhim[i].poster)) {
    }
  }
}
