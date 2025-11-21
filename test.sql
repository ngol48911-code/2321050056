create DATABASE IF not EXISTS quan_ly_web_phim;

1. thể loại1
    - id int primary key
    - ten_the_loai varchar(50)
2. người dùng1
    - id int
    - ten_dang_nhap varchar(50)
    - matKhau varchar(50)
    - ho_ten varchar(50)
    - email varchar(50)
    - sdt varchar(10)
    - vai_tro_id int 
    - ngay_sinh datetime
3. vai_tro1
    - id int
    - ten_vai_tro varchar(20)
4. phim1
    - id int primary key
    - ten_phim varchar
    - dao_dien_id int
    - nam_phat_hanh int
    - poster varchar
    - quoc_gia_id int
    - so_tap int
    - trailer varchar
    - mo_ta text    
5. phim_dien_vien
    - id int
    - phim_id int
    - dien_vien_id int
6. phim_the_loai1
    - id int
    - phim_id int
    - the_loai_id int
7. quốc gia1
    -id int
    -ten_quoc_gia varchar
5. Tập phim1
    - id int
    - so_tap int
    - tieu_de varchar
    - phim_id int
    - thoiLuong float 
    - trailer varchar

- Hoàn thiện CSDL để quản lý web phim
- Viết các câu lệnh để chạy nhiều lần k bị lỗi
- Viết câu lệnh để mỗi 1 bảng tạo 30 dữ liệu
CREATE DATABASE IF NOT EXISTS quan_ly_web_phim;
USE quan_ly_web_phim;
CREATE TABLE IF NOT EXISTS vai_tro (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ten_vai_tro VARCHAR(20)
);
CREATE TABLE IF NOT EXISTS nguoi_dung (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ten_dang_nhap VARCHAR(50),
    mat_khau VARCHAR(50),
    ho_ten VARCHAR(50),
    email VARCHAR(50),
    sdt VARCHAR(15),
    vai_tro_id INT,
    ngay_sinh DATE,
    FOREIGN KEY (vai_tro_id) REFERENCES vai_tro(id)
);
CREATE TABLE IF NOT EXISTS the_loai (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ten_the_loai VARCHAR(50)
);
CREATE TABLE IF NOT EXISTS quoc_gia(
    id INT AUTO_INCREMENT PRIMARY KEY,
    ten_quoc_gia VARCHAR(30)
);
CREATE TABLE IF NOT EXISTS phim(
    id INT AUTO_INCREMENT PRIMARY KEY,
    ten_phim VARCHAR(255),
    nam_phat_hang INT,
    poster VARCHAR(255),
    quoc_gia_id INT,
    so_tap INT,
    trailer VARCHAR(255),
    mo_ta TEXT,
    FOREIGN KEY(quoc_gia_id) REFERENCES quoc_gia(id)
);
CREATE TABLE IF NOT EXISTS phim_the_loai(
    id INT AUTO_INCREMENT PRIMARY KEY,
    phim_id INT,
    the_loai_id INT,
    FOREIGN KEY (the_loai_id) REFERENCES the_loai(id),
    FOREIGN KEY (phim_id) REFERENCES phim(id)
);
CREATE TABLE IF NOT EXISTS phim_dien_vien(
    id INT AUTO_INCREMENT PRIMARY KEY,
    phim_id INT,
    dien_vien_id INT,
    FOREIGN KEY(phim_id) REFERENCES phim(id)

);

CREATE TABLE IF NOT EXISTS tap_phim(
    id INT AUTO_INCREMENT PRIMARY KEY,
    so_tap INT,
    tieu_de VARCHAR(255),
    phim_id INT,
    thoi_luong FLOAT,
    trailer VARCHAR(255),
    FOREIGN KEY (phim_id) REFERENCES phim(id)
);
INSERT INTO vai_tro (ten_vai_tro) VALUES
('Quan tri vien'),('Nguoi dung'),('Editor'),('Manager'),('Tester'),
('Admin'),('Moderator'),('Contributor'),('Viewer'),('Developer'),
('Writer'),('Director'),('Actor'),('Producer'),('Customer'),
('Staff'),('Supervisor'),('Assistant'),('Leader'),('Member'),
('Trainer'),('Guest'),('Host'),('Support'),('Analyst'),
('Coordinator'),('Intern'),('Operator'),('Secretary'),('Agent');

INSERT INTO nguoi_dung (ten_dang_nhap, mat_khau, ho_ten, email, sdt, vai_tro_id, ngay_sinh) VALUES
('ngoloc1','123456','Ngo Gia Loc','ngoloc1@gmail.com','0901000001',1,'2002-01-01'),
('leduy2','123456','Le Duy Anh','leduy2@gmail.com','0901000002',2,'2002-02-02'),
('laivh3','123456','Lai Van Huy','laivh3@gmail.com','0901000003',2,'2003-03-03'),
('tranht4','123456','Tran Hoang Tai','tranht4@gmail.com','0901000004',3,'2001-04-04'),
('phamnv5','123456','Pham Ngoc Vu','phamnv5@gmail.com','0901000005',1,'2000-05-05'),
('ngoth6','123456','Ngo Thi Hoa','ngoth6@gmail.com','0901000006',2,'2002-06-06'),
('leth7','123456','Le Thi Lan','leth7@gmail.com','0901000007',2,'2003-07-07'),
('tranmt8','123456','Tran Minh Tam','tranmt8@gmail.com','0901000008',3,'2004-08-08'),
('phamth9','123456','Pham Thi Hien','phamth9@gmail.com','0901000009',1,'2001-09-09'),
('ngolv10','123456','Ngo Le Van','ngolv10@gmail.com','0901000010',2,'2002-10-10'),
('user11','123456','Ho Ten 11','user11@gmail.com','0901000011',1,'2000-11-11'),
('user12','123456','Ho Ten 12','user12@gmail.com','0901000012',2,'2001-12-12'),
('user13','123456','Ho Ten 13','user13@gmail.com','0901000013',3,'2002-01-13'),
('user14','123456','Ho Ten 14','user14@gmail.com','0901000014',2,'2003-02-14'),
('user15','123456','Ho Ten 15','user15@gmail.com','0901000015',1,'2004-03-15'),
('user16','123456','Ho Ten 16','user16@gmail.com','0901000016',2,'2002-04-16'),
('user17','123456','Ho Ten 17','user17@gmail.com','0901000017',3,'2001-05-17'),
('user18','123456','Ho Ten 18','user18@gmail.com','0901000018',2,'2000-06-18'),
('user19','123456','Ho Ten 19','user19@gmail.com','0901000019',1,'2003-07-19'),
('user20','123456','Ho Ten 20','user20@gmail.com','0901000020',2,'2002-08-20'),
('user21','123456','Ho Ten 21','user21@gmail.com','0901000021',3,'2001-09-21'),
('user22','123456','Ho Ten 22','user22@gmail.com','0901000022',2,'2000-10-22'),
('user23','123456','Ho Ten 23','user23@gmail.com','0901000023',1,'2003-11-23'),
('user24','123456','Ho Ten 24','user24@gmail.com','0901000024',2,'2002-12-24'),
('user25','123456','Ho Ten 25','user25@gmail.com','0901000025',3,'2001-01-25'),
('user26','123456','Ho Ten 26','user26@gmail.com','0901000026',2,'2000-02-26'),
('user27','123456','Ho Ten 27','user27@gmail.com','0901000027',1,'2003-03-27'),
('user28','123456','Ho Ten 28','user28@gmail.com','0901000028',2,'2002-04-28'),
('user29','123456','Ho Ten 29','user29@gmail.com','0901000029',3,'2001-05-29'),
('user30','123456','Ho Ten 30','user30@gmail.com','0901000030',2,'2000-06-30');

INSERT INTO the_loai (ten_the_loai) VALUES
('Chieu rap'),('Hoat hinh'),('Tieu thuyet'),('Hanh dong'),('Tinh cam'),
('Hai huoc'),('Kinh di'),('Khoa hoc'),('Phieu luu'),('Bi hai'),
('Gia dinh'),('Tam ly'),('Am nhac'),('Trinh tham'),('Gia tuong'),
('Vien tuong'),('Co trang'),('Chien tranh'),('Gia dinh hai'),('Truyen tranh'),
('Vo thuat'),('An mang'),('The thao'),('Tinh yeu'),('Su kien'),
('Tai lieu'),('Moi truong'),('Chien trinh'),('Hanh trinh'),('Nguoi lon');

INSERT INTO quoc_gia (ten_quoc_gia) VALUES
('Viet Nam'),('My'),('Anh'),('Phap'),('Nhat Ban'),
('Han Quoc'),('Trung Quoc'),('Duc'),('Nga'),('Canada'),
('Uc'),('Thai Lan'),('An Do'),('Italy'),('Tay Ban Nha'),
('Brazil'),('Mexico'),('Singapore'),('Malaysia'),('Indonesia'),
('Argentina'),('Chile'),('New Zealand'),('Ireland'),('Thuy Dien'),
('Ha Lan'),('Bi'),('Thuy Si'),('Na Uy'),('Bo Dao Nha');



INSERT INTO phim (ten_phim, nam_phat_hang, poster, quoc_gia_id, so_tap, trailer, mo_ta) VALUES
('Vu mua',2025,'/img/vu_mua.jpg',1,12,'/trailer/vu_mua.mp4','Phim ve mot cau chuyen cam dong'),
('Conan',2008,'/img/conan.jpg',1,1000,'/trailer/conan.mp4','Tham tu nhi huyen bi'),
('Doremon',2010,'/img/doremon.jpg',1,500,'/trailer/doremon.mp4','Chuyen ve chiec tui ky dieu'),
('Phim 4',2023,'/img/phim4.jpg',2,10,'/trailer/phim4.mp4','Mo ta phim 4'),
('Phim 5',2022,'/img/phim5.jpg',3,8,'/trailer/phim5.mp4','Mo ta phim 5'),
('Phim 6',2021,'/img/phim6.jpg',4,15,'/trailer/phim6.mp4','Mo ta phim 6'),
('Phim 7',2020,'/img/phim7.jpg',5,20,'/trailer/phim7.mp4','Mo ta phim 7'),
('Phim 8',2019,'/img/phim8.jpg',6,12,'/trailer/phim8.mp4','Mo ta phim 8'),
('Phim 9',2018,'/img/phim9.jpg',7,16,'/trailer/phim9.mp4','Mo ta phim 9'),
('Phim 10',2017,'/img/phim10.jpg',8,14,'/trailer/phim10.mp4','Mo ta phim 10'),
('Phim 11',2016,'/img/phim11.jpg',9,10,'/trailer/phim11.mp4','Mo ta phim 11'),
('Phim 12',2015,'/img/phim12.jpg',10,8,'/trailer/phim12.mp4','Mo ta phim 12'),
('Phim 13',2014,'/img/phim13.jpg',11,12,'/trailer/phim13.mp4','Mo ta phim 13'),
('Phim 14',2013,'/img/phim14.jpg',12,15,'/trailer/phim14.mp4','Mo ta phim 14'),
('Phim 15',2012,'/img/phim15.jpg',13,20,'/trailer/phim15.mp4','Mo ta phim 15'),
('Phim 16',2011,'/img/phim16.jpg',14,10,'/trailer/phim16.mp4','Mo ta phim 16'),
('Phim 17',2010,'/img/phim17.jpg',15,12,'/trailer/phim17.mp4','Mo ta phim 17'),
('Phim 18',2009,'/img/phim18.jpg',16,14,'/trailer/phim18.mp4','Mo ta phim 18'),
('Phim 19',2008,'/img/phim19.jpg',17,16,'/trailer/phim19.mp4','Mo ta phim 19'),
('Phim 20',2007,'/img/phim20.jpg',18,18,'/trailer/phim20.mp4','Mo ta phim 20'),
('Phim 21',2006,'/img/phim21.jpg',19,20,'/trailer/phim21.mp4','Mo ta phim 21'),
('Phim 22',2005,'/img/phim22.jpg',20,22,'/trailer/phim22.mp4','Mo ta phim 22'),
('Phim 23',2004,'/img/phim23.jpg',21,24,'/trailer/phim23.mp4','Mo ta phim 23'),
('Phim 24',2003,'/img/phim24.jpg',22,26,'/trailer/phim24.mp4','Mo ta phim 24'),
('Phim 25',2002,'/img/phim25.jpg',23,28,'/trailer/phim25.mp4','Mo ta phim 25'),
('Phim 26',2001,'/img/phim26.jpg',24,30,'/trailer/phim26.mp4','Mo ta phim 26'),
('Phim 27',2000,'/img/phim27.jpg',25,32,'/trailer/phim27.mp4','Mo ta phim 27'),
('Phim 28',1999,'/img/phim28.jpg',26,34,'/trailer/phim28.mp4','Mo ta phim 28'),
('Phim 29',1998,'/img/phim29.jpg',27,36,'/trailer/phim29.mp4','Mo ta phim 29'),
('Phim 30',1997,'/img/phim30.jpg',28,38,'/trailer/phim30.mp4','Mo ta phim 30');

INSERT INTO phim_the_loai (phim_id, the_loai_id) VALUES
(1,1),(1,2),(2,1),(2,5),(3,2),
(3,3),(4,4),(5,5),(6,6),(7,7),
(8,8),(9,9),(10,10),(11,11),(12,12),
(13,13),(14,14),(15,15),(16,16),(17,17),
(18,18),(19,19),(20,20),(21,21),(22,22),
(23,23),(24,24),(25,25),(26,26),(27,27);

INSERT INTO phim_dien_vien (phim_id, dien_vien_id) VALUES
(1,1),(1,2),(2,3),(2,4),(3,5),
(3,6),(4,7),(4,8),(5,9),(5,10),
(6,11),(6,12),(7,13),(7,14),(8,15),
(8,16),(9,17),(9,18),(10,19),(10,20),
(11,21),(11,22),(12,23),(12,24),(13,25),
(13,26),(14,27),(14,28),(15,29),(15,30);

INSERT INTO tap_phim (so_tap, tieu_de, phim_id, thoi_luong, trailer) VALUES
(1,'Tap 1',1,45,'/trailer/vu_mua_1.mp4'),
(2,'Tap 2',1,50,'/trailer/vu_mua_2.mp4'),
(1,'Tap 1',2,25,'/trailer/conan_1.mp4'),
(2,'Tap 2',2,30,'/trailer/conan_2.mp4'),
(1,'Tap 1',3,22,'/trailer/doremon_1.mp4'),
(2,'Tap 2',3,24,'/trailer/doremon_2.mp4'),
(10,'Tap 10',30,40,'/trailer/phim30_10.mp4');
SELECT 
    p.ten_phim, 
    qg.ten_quoc_gia
FROM 
    phim p
JOIN 
    quoc_gia qg ON p.quoc_gia_id = qg.id
WHERE 
    p.ten_phim = 'Doremon';
    SELECT
    p.ten_phim,
    nd.ho_ten AS ten_dien_vien
FROM
    phim p
JOIN
    phim_dien_vien pdv ON p.id = pdv.phim_id
JOIN
    nguoi_dung nd ON pdv.dien_vien_id = nd.id
WHERE
    p.ten_phim = 'Doremon'
SELECT p.ten_phim, qg.ten_quoc_gia, nd.ho_ten as dao_dien, dv.ho_ten as dien_vien from phim p join quoc_gia qg on p.quoc_gia_id = qg.id join nguoi_dung nd on p.dao_dien_id = nd.id join phim_dien_vien pdv on p.id = pdv.phim_id join nguoi_dung dv on pdv.dien_vien_id = dv.id where p.id = 10;