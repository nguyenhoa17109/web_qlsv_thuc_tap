-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2020 at 02:54 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlsv`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `mabv` int(11) NOT NULL,
  `madn` int(11) DEFAULT NULL,
  `tencv` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ngaydang` date NOT NULL,
  `ngayapdung` date NOT NULL,
  `ngayhethan` date NOT NULL,
  `tendn` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `aboutus` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `motacv` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `diachi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `quyenloi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `soluong` int(2) NOT NULL,
  `aicothenop` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `trangthai` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`mabv`, `madn`, `tencv`, `ngaydang`, `ngayapdung`, `ngayhethan`, `tendn`, `aboutus`, `motacv`, `diachi`, `quyenloi`, `soluong`, `aicothenop`, `trangthai`) VALUES
(80000, 11, 'Web Dev', '2020-07-04', '2020-07-04', '2020-08-20', 'DH', 'Với kinh nghiệm phổ cập hoá viễn thông tại nhiều quốc gia \r\nđang phát triển, chúng tôi hiểu rằng được kết nối là một nhu cầu rất cơ bản của con người. Chúng tôi cũng hiểu rằng, \r\nkết nối con người giờ đây không chỉ là thoại và tin nhắn, đó còn là phương tiện để con người tận hưởng cuộc sống, \r\nsáng tạo và làm giàu. Bởi vậy, bằng cách tiếp cận sáng tạo của mình, chúng tôi luôn nỗ lực để kết nối con người vào bất \r\ncứ lúc nào cho dù họ là ai và họ đang ở bất kỳ đâu.\r\n\r\nBên cạnh viễn thông, DH còn tham gia vào lĩnh vực nghiên cứu sản xuất công nghệ cao và một số lĩnh vực khác như bưu \r\nchính, xây lắp công trình, thương mại và XNK, IDC.', '- Cài đặt, sửa chữa các thiết bị văn phòng công ty (máy tính, máy in, camera, \r\nphần mềm máy tính, windowns, phần cứng máy tính, …), cài đặt phần mềm và hỗ trợ cách sử dụng cho các nhân viên trong công ty.\r\n- Thiết lập và cài đặt quản trị hệ thống mạng Lan, Wifi trong công ty đảm bảo chạy ổn định, khắc phục sự cố về mạng khi có vấn đề xảy ra.\r\n- Quản lí mail server cpanel, backup dữ liệu, tạo và xóa email theo yêu cầu của Phòng Nhân sự / Ban Giám đốc.', 'Hà Nội', 'Cấp chứng chỉ', 5, 'SV năm 3 trở lên. CPA > 2.5', 1),
(80001, 11, 'Java Core', '2020-07-04', '2020-07-05', '2020-08-20', 'DH', 'Với kinh nghiệm phổ cập hoá viễn thông tại nhiều quốc gia \r\nđang phát triển, chúng tôi hiểu rằng được kết nối là một nhu cầu rất cơ bản của con người. Chúng tôi cũng hiểu rằng, \r\nkết nối con người giờ đây không chỉ là thoại và tin nhắn, đó còn là phương tiện để con người tận hưởng cuộc sống, \r\nsáng tạo và làm giàu. Bởi vậy, bằng cách tiếp cận sáng tạo của mình, chúng tôi luôn nỗ lực để kết nối con người vào bất \r\ncứ lúc nào cho dù họ là ai và họ đang ở bất kỳ đâu.\r\n\r\nBên cạnh viễn thông, DH còn tham gia vào lĩnh vực nghiên cứu sản xuất công nghệ cao và một số lĩnh vực khác như bưu \r\nchính, xây lắp công trình, thương mại và XNK, IDC.', '- Cài đặt, sửa chữa các thiết bị văn phòng công ty (máy tính, máy in, camera, \r\nphần mềm máy tính, windowns, phần cứng máy tính, …), cài đặt phần mềm và hỗ trợ cách sử dụng cho các nhân viên trong công ty.\r\n- Thiết lập và cài đặt quản trị hệ thống mạng Lan, Wifi trong công ty đảm bảo chạy ổn định, khắc phục sự cố về mạng khi có vấn đề xảy ra.\r\n- Quản lí mail server cpanel, backup dữ liệu, tạo và xóa email theo yêu cầu của Phòng Nhân sự / Ban Giám đốc.', 'Hà Nội', 'Cấp chứng chỉ', 5, 'SV năm 3 trở lên. CPA > 2.7', 0),
(80002, 12, 'C/c++', '2020-07-05', '2020-07-09', '2020-09-20', 'Viettel', 'Với kinh nghiệm phổ cập hoá viễn thông tại nhiều quốc gia \r\nđang phát triển, chúng tôi hiểu rằng được kết nối là một nhu cầu rất cơ bản của con người. Chúng tôi cũng hiểu rằng, \r\nkết nối con người giờ đây không chỉ là thoại và tin nhắn, đó còn là phương tiện để con người tận hưởng cuộc sống, \r\nsáng tạo và làm giàu. Bởi vậy, bằng cách tiếp cận sáng tạo của mình, chúng tôi luôn nỗ lực để kết nối con người vào bất \r\ncứ lúc nào cho dù họ là ai và họ đang ở bất kỳ đâu.\r\n\r\nBên cạnh viễn thông, Viettel còn tham gia vào lĩnh vực nghiên cứu sản xuất công nghệ cao và một số lĩnh vực khác như bưu \r\nchính, xây lắp công trình, thương mại và XNK, IDC.', '- Cài đặt, sửa chữa các thiết bị văn phòng công ty (máy tính, máy in, camera, \r\nphần mềm máy tính, windowns, phần cứng máy tính, …), cài đặt phần mềm và hỗ trợ cách sử dụng cho các nhân viên trong công ty.\r\n- Thiết lập và cài đặt quản trị hệ thống mạng Lan, Wifi trong công ty đảm bảo chạy ổn định, khắc phục sự cố về mạng khi có vấn đề xảy ra.\r\n- Quản lí mail server cpanel, backup dữ liệu, tạo và xóa email theo yêu cầu của Phòng Nhân sự / Ban Giám đốc.', 'Hà Nội', 'Cấp chứng chỉ', 5, 'SV năm 3 trở lên. CPA > 3.0', 0),
(80005, 12, 'abc', '1111-11-11', '2222-02-22', '1111-11-11', '', 'abc', 'abc', '', '', 4, 'abc', 0),
(80006, 12, 'q', '1111-11-11', '1111-11-11', '1111-11-11', '', 'abc', 'abc', '', '', 2, 'abc', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doanhnghiep`
--

CREATE TABLE `tbl_doanhnghiep` (
  `madn` int(11) NOT NULL,
  `ma_nguoidung` int(11) DEFAULT NULL,
  `tendn` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `diachi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_doanhnghiep`
--

INSERT INTO `tbl_doanhnghiep` (`madn`, `ma_nguoidung`, `tendn`, `diachi`) VALUES
(11, NULL, 'DH', 'Hà Nội'),
(12, 1006, 'Viettel', 'Hà Nôi'),
(13, NULL, 'Vinaphone', 'Hồ Chí Minh'),
(14, NULL, 'Headphone', 'Hải dương'),
(15, NULL, 'Min', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lichhen`
--

CREATE TABLE `tbl_lichhen` (
  `malh` int(11) NOT NULL,
  `manvong` int(11) DEFAULT NULL,
  `ngayhen` datetime NOT NULL,
  `diachihen` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lichhen`
--

INSERT INTO `tbl_lichhen` (`malh`, `manvong`, `ngayhen`, `diachihen`) VALUES
(800, 20000, '2020-07-09 13:23:00', 'Tòa nhà Sông Đà'),
(801, 20001, '2020-07-23 15:45:00', 'Tòa nhà DH'),
(802, 20002, '2020-07-08 15:45:00', 'Tòa nhà Viettel'),
(803, NULL, '2020-07-11 15:45:00', 'Tòa nhà Bkav'),
(804, 20004, '2020-07-12 12:45:00', 'Tòa nhà Sông Đà'),
(805, 20005, '2020-07-09 15:45:00', 'Tòa nhà DH'),
(806, 20006, '2020-07-03 15:45:00', 'Tòa nhà Sông Đà'),
(807, 20007, '2020-07-04 09:45:00', 'Tòa nhà Sông Đà'),
(808, 20008, '2020-07-05 08:45:00', 'Tòa nhà Laka'),
(809, 20009, '2020-07-09 07:45:00', 'Tòa nhà Sông Đà');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nguoidung`
--

CREATE TABLE `tbl_nguoidung` (
  `ma` int(11) NOT NULL,
  `tenDangNhap` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `matKhau` longtext NOT NULL,
  `email` tinytext NOT NULL,
  `quyen` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nguoidung`
--

INSERT INTO `tbl_nguoidung` (`ma`, `tenDangNhap`, `matKhau`, `email`, `quyen`) VALUES
(1002, 'hoa', '81dc9bdb52d04dc20036dbd8313ed055', 'hoant@gmail.com', 'sinhvien'),
(1006, 'nguyenhoa', '81dc9bdb52d04dc20036dbd8313ed055', 'hoamobi@gmail.com', 'nhanvien'),
(1008, 'nguyenminh', '81dc9bdb52d04dc20036dbd8313ed055', 'minhmun@gmail.com', 'admin'),
(1009, 'hoangthithao', 'ad078569b64f6627509e98d027bae876', 'hoangthithao@gmail.com', 'admin'),
(1010, 'nguyenthihoa', 'ad078569b64f6627509e98d027bae876', 'nguyenthihoa@gmail.com', 'admin'),
(1011, 'nthoa', '81dc9bdb52d04dc20036dbd8313ed055', 'nthoa@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nguyenvong`
--

CREATE TABLE `tbl_nguyenvong` (
  `manvong` int(11) NOT NULL,
  `masv` int(11) DEFAULT NULL,
  `mavtdn` int(11) DEFAULT NULL,
  `stt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nguyenvong`
--

INSERT INTO `tbl_nguyenvong` (`manvong`, `masv`, `mavtdn`, `stt`) VALUES
(20000, 102, 11111, 1),
(20001, 102, 11112, 2),
(20002, 102, 11115, 3),
(20004, 103, 11112, 1),
(20005, 103, 11116, 2),
(20006, 103, 11119, 3),
(20007, 104, 11117, 1),
(20008, 104, 11113, 2),
(20009, 104, 11114, 3),
(20010, 104, 11115, 4),
(20012, 103, 11117, 4),
(20013, 103, 11113, 5),
(20014, 103, 11114, 6),
(20016, 102, 11113, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sinhvien`
--

CREATE TABLE `tbl_sinhvien` (
  `masv` int(11) NOT NULL,
  `ma_nguoidung` int(11) DEFAULT NULL,
  `ho` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ten` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` tinytext NOT NULL,
  `ngaysinh` date NOT NULL,
  `nganh` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `diem` float NOT NULL,
  `quequan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sinhvien`
--

INSERT INTO `tbl_sinhvien` (`masv`, `ma_nguoidung`, `ho`, `ten`, `email`, `ngaysinh`, `nganh`, `diem`, `quequan`) VALUES
(102, 1002, 'Nguyễn Thị', 'Hoa', 'hoant@gmail.com', '1999-10-17', 'ATTT', 3.09, 'Hải Dương'),
(103, NULL, 'Đinh Thị Thanh', 'Huong', 'huongdtt@gmail.com', '1999-02-25', 'ATTT', 3.24, 'Hà Nội'),
(104, NULL, 'Nguyễn Ngọc Minh', 'Minh', 'minhnn@gmail.com', '1999-06-12', 'ATTT', 2.89, 'Hòa Bình'),
(105, NULL, 'o', 'o', 'o', '1111-11-11', 'An toàn thông tin', 2.6, 'o'),
(106, NULL, 'qa', 'x', 'x', '2222-02-22', 'An toàn thông tin', 3, 'x'),
(107, NULL, 'a', 'b', 'abc', '2020-07-01', 'An toàn thông tin', 2.1, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vitri`
--

CREATE TABLE `tbl_vitri` (
  `ma` int(11) NOT NULL,
  `ten` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `mota` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_vitri`
--

INSERT INTO `tbl_vitri` (`ma`, `ten`, `mota`) VALUES
(900, 'Java', 'linh tinh '),
(901, 'PHP', 'linh tinh '),
(902, 'css', 'linh tinh '),
(903, 'html', 'linh tinh '),
(904, 'ajax', 'linh tinh '),
(905, 'Jquery', 'linh tinh '),
(906, 'C/C++', 'linh tinh '),
(907, 'C#', 'linh tinh '),
(908, 'Assembly', 'linh tinh '),
(909, 'Python', 'linh tinh ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vitridn`
--

CREATE TABLE `tbl_vitridn` (
  `ma` int(11) NOT NULL,
  `madn` int(11) DEFAULT NULL,
  `mavt` int(11) DEFAULT NULL,
  `diem` float NOT NULL,
  `mota` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_vitridn`
--

INSERT INTO `tbl_vitridn` (`ma`, `madn`, `mavt`, `diem`, `mota`) VALUES
(11111, 11, 900, 2.5, ''),
(11112, 11, 901, 2.7, ''),
(11113, 12, 900, 2.7, ''),
(11114, 12, 902, 3, ''),
(11115, 12, 903, 3.1, ''),
(11116, 12, 904, 3, ''),
(11117, 13, 906, 3.2, ''),
(11118, 13, 908, 3, ''),
(11119, 13, 903, 2, ''),
(11120, 13, 902, 2.9, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`mabv`),
  ADD KEY `tbl_baiviet_ibfk_1` (`madn`);

--
-- Indexes for table `tbl_doanhnghiep`
--
ALTER TABLE `tbl_doanhnghiep`
  ADD PRIMARY KEY (`madn`),
  ADD KEY `tbl_doanhnghiep_ibfk_1` (`ma_nguoidung`);

--
-- Indexes for table `tbl_lichhen`
--
ALTER TABLE `tbl_lichhen`
  ADD PRIMARY KEY (`malh`),
  ADD KEY `tbl_lichhen_ibfk_2` (`manvong`);

--
-- Indexes for table `tbl_nguoidung`
--
ALTER TABLE `tbl_nguoidung`
  ADD PRIMARY KEY (`ma`),
  ADD UNIQUE KEY `tenDangNhap` (`tenDangNhap`);

--
-- Indexes for table `tbl_nguyenvong`
--
ALTER TABLE `tbl_nguyenvong`
  ADD PRIMARY KEY (`manvong`),
  ADD KEY `tbl_nguyenvong_ibfk_1` (`masv`),
  ADD KEY `tbl_nguyenvong_ibfk_2` (`mavtdn`);

--
-- Indexes for table `tbl_sinhvien`
--
ALTER TABLE `tbl_sinhvien`
  ADD PRIMARY KEY (`masv`),
  ADD KEY `tbl_sinhvien_ibfk_1` (`ma_nguoidung`);

--
-- Indexes for table `tbl_vitri`
--
ALTER TABLE `tbl_vitri`
  ADD PRIMARY KEY (`ma`);

--
-- Indexes for table `tbl_vitridn`
--
ALTER TABLE `tbl_vitridn`
  ADD PRIMARY KEY (`ma`),
  ADD KEY `tbl_vitridn_ibfk_1` (`madn`),
  ADD KEY `tbl_vitridn_ibfk_2` (`mavt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `mabv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80007;

--
-- AUTO_INCREMENT for table `tbl_doanhnghiep`
--
ALTER TABLE `tbl_doanhnghiep`
  MODIFY `madn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_lichhen`
--
ALTER TABLE `tbl_lichhen`
  MODIFY `malh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=810;

--
-- AUTO_INCREMENT for table `tbl_nguoidung`
--
ALTER TABLE `tbl_nguoidung`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1017;

--
-- AUTO_INCREMENT for table `tbl_nguyenvong`
--
ALTER TABLE `tbl_nguyenvong`
  MODIFY `manvong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20017;

--
-- AUTO_INCREMENT for table `tbl_sinhvien`
--
ALTER TABLE `tbl_sinhvien`
  MODIFY `masv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `tbl_vitri`
--
ALTER TABLE `tbl_vitri`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=910;

--
-- AUTO_INCREMENT for table `tbl_vitridn`
--
ALTER TABLE `tbl_vitridn`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11121;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD CONSTRAINT `tbl_baiviet_ibfk_1` FOREIGN KEY (`madn`) REFERENCES `tbl_doanhnghiep` (`madn`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `tbl_doanhnghiep`
--
ALTER TABLE `tbl_doanhnghiep`
  ADD CONSTRAINT `tbl_doanhnghiep_ibfk_1` FOREIGN KEY (`ma_nguoidung`) REFERENCES `tbl_nguoidung` (`ma`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `tbl_lichhen`
--
ALTER TABLE `tbl_lichhen`
  ADD CONSTRAINT `tbl_lichhen_ibfk_2` FOREIGN KEY (`manvong`) REFERENCES `tbl_nguyenvong` (`manvong`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `tbl_nguyenvong`
--
ALTER TABLE `tbl_nguyenvong`
  ADD CONSTRAINT `tbl_nguyenvong_ibfk_1` FOREIGN KEY (`masv`) REFERENCES `tbl_sinhvien` (`masv`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `tbl_nguyenvong_ibfk_2` FOREIGN KEY (`mavtdn`) REFERENCES `tbl_vitridn` (`ma`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `tbl_sinhvien`
--
ALTER TABLE `tbl_sinhvien`
  ADD CONSTRAINT `tbl_sinhvien_ibfk_1` FOREIGN KEY (`ma_nguoidung`) REFERENCES `tbl_nguoidung` (`ma`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `tbl_vitridn`
--
ALTER TABLE `tbl_vitridn`
  ADD CONSTRAINT `tbl_vitridn_ibfk_1` FOREIGN KEY (`madn`) REFERENCES `tbl_doanhnghiep` (`madn`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `tbl_vitridn_ibfk_2` FOREIGN KEY (`mavt`) REFERENCES `tbl_vitri` (`ma`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
