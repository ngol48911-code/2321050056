let d = new Date();
let theDay = d.getDay();
switch (theDay) {
  case 5:
    document.writeln("Finally Friday");
    break;
  case 6:
    document.writeln("Super Satuday");
    break;
  case 0:
    document.writeln("Sleepy Sunday");
    x;
    break;
  case 1:
  case 2:
  case 3:
    document.writeln("I'm looking forward to this weekend");
  default:
    document.writeln("I'm looking forward to this weekend");
}
for (let i = 1; i <= 10; i++) {
  document.writeln("Hau ngu nhu cho" + "<br>");
}
let danhSach = [
  "pham quang nui ",
  "ngo gia loc ",
  "nguyen van tien ",
  "do trung kien ",
  "binh gold ",
];
for (let i = 0; i < danhSach.length; i++) {
  document.writeln("chao thang em " + danhSach[i] + "<br>");
}
let danhSach1 = [
  "Dương Trần Nhật	Anh ",
  "Dương Vũ	Anh ",
  "Trần Vũ Hải	Anh ",
  "Bùi Ngọc	Bích ",
  "Phạm Quốc	Bình ",
  "Nguyễn Văn	Chung ",
  "Hoàng Mạnh	Cường ",
  "Ngô Hoàng	Dương ",
  "Phạm Văn	Đại ",
  "Nguyễn Đình	Đạt ",
  "Phạm	Đức ",
  "Vũ Trung	Đức ",
  "Phạm Hương	Giang ",
  "Phạm Quang	Hậu ",
  "Trần Văn	Hiệp ",
  "Nguyễn Văn	Hoàng ",
  "Phạm Quốc	Hoàng ",
  "Phạm Thị	Huế ",
  "Trần Công	Hùng ",
  "Đào Thế	Huy ",
  "Đỗ Quang	Huy ",
  "Phạm Quang	Huy ",
  "Phạm Thành	Khang ",
  "Bùi Văn	Khiêm ",
  "Nguyễn Tiến	Khởi ",
  "Đỗ Trung	Kiên ",
  "Vương Hà	Linh ",
  "Đào Quang	Lộc ",
  "Ngô Gia Lộc ",
  "Bùi Văn	Mạnh ",
  "Nguyễn Văn	Mạnh ",
  "Phan Văn	Mạnh ",
  "Trương Công	Minh ",
  "Đỗ Thành	Nam ",
  "Lê Duy	Nam ",
  "Nguyễn Hoàng	Nam ",
  "Nguyễn Anh	Quân ",
  "Cao Thị Thu	Quyên ",
  "Phạm Gia	Tài ",
  "Nguyễn Thị Thanh	Tâm © ",
  "Nguyễn Đình	Thái ",
  "Lưu Tiến	Thành ",
  "Trần Văn	Thành ",
  "Nguyễn Thị	Thúy ",
  "Nguyễn Thị	Thúy ",
  "Bùi Duy	Tiến ",
  "Nguyễn Văn	Tiến ",
  "Đỗ Văn	Trung ",
  "Phạm Đan	Trường ",
  "Lê Thị Cẩm	Tú ",
  "Phan Văn	Tuân ",
  "Cao Thái	Tuấn ",
  "Nguyễn Duy	Tuấn ",
  "Nguyễn Huy	Tuấn ",
  "Thiều Văn	Việt ",
  "Nguyễn Kiều	Vy",
];
let dem = 0;
for (let i = 0; i < danhSach1.length; i++) {
  let ten = danhSach1[i].trim();
  if (ten.startsWith("Nguyễn") == true) {
    dem++;
  }
}
document.writeln(dem);
//alert("heloo");
// let a = confirm("siyuuui");
if (a == true) {
  document.writeln("bam ok");
} else {
  document.writeln("bam cancel ");
}
let ten1 = prompt("nhap ten e di e ");
document.writeln(ten1);
function chao() {
  document.writeln("chao anh em " + ten1 + "<br>");
}

chao();
function chao2(ten, namSinh) {
  document.writeln("xin chao " + ten + "nam sinh " + namSinh);
}
chao2("jack", 97);
function chao3(ten, namSinh, vo, con) {
  document.writeln(
    "ca si " + ten + "sinh nam " + namSinh + "ten vo " + vo + "ten con " + con
  );
}
chao3("trinh tran phuong tuan ", 1997, "thien an ", "be son");
