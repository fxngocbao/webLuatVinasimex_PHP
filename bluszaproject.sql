-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 25, 2023 lúc 10:24 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bluszaproject`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `admin_user` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`admin_user`, `admin_password`, `level`) VALUES
('admin', '123', 'CEO');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `information`
--

CREATE TABLE `information` (
  `in4_id` int(25) NOT NULL,
  `in4_name` varchar(255) NOT NULL,
  `level_name` varchar(255) NOT NULL,
  `in4_phone` varchar(255) NOT NULL,
  `in4_email` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `information`
--

INSERT INTO `information` (`in4_id`, `in4_name`, `level_name`, `in4_phone`, `in4_email`, `skype`, `image`) VALUES
(44, 'Đỗ Thị Thu Hà', 'TS.LS-Giám đốc công ty', '0933113366', 'ha@vietanlaw.vn', 'vietanlaw', 'Do-Thi-thu-Ha-Viet-An-Law-Firm-380x280-1-380x280xc.jpg'),
(45, 'Đồng Văn Thức', 'TS.LS-Giám đốc công ty', '0961675566', 'thuc@vietanlaw.vn', 'vietanlaw', 'Dong-Van-Thuc-Viet-An-home-380x280xc.jpg'),
(46, 'Trung Thị Liệu', 'TS.LS-Giám đốc công ty', '0977860808', 'lieutt@vietanlaw.vn', 'vietanlaw', 'Trung-Thi-Lieu-Viet-An-Law-380x280xc.jpg'),
(47, 'Phan Thị Sáng', 'TS.LS-Giám đốc công ty', '0962878166', 'luatsu2@vietanlaw.vn', 'vietanlaw', 'Phan-Thi-Sang-Lawyer-Viet-An-Law-380x280xc.jpg'),
(48, 'Nguyễn Thị Hiệp', 'TS.LS-Giám đốc công ty', '0912379189', 'hiep@vietanlaw.vn', 'vietanlaw', 'Nguyen-Thi-Hiep-Viet-An-Law-380x280xc.jpg'),
(49, 'Đào Mỵ Dung', 'TS.LS-Giám đốc công ty', '0975587958', 'dung@vietanlaw.vn', 'vietanlaw', 'Dao-My-Dung-1-380x280xc.jpg'),
(50, 'Nguyễn Thị Mai Hương', 'TS.LS-Giám đốc công ty', '095775589', 'tuvan1@vietanlaw.vn', 'vietanlaw', 'NGUYEN-THI-MAI-HUONG-LAWYER-VIET-AN-LAW-380x280xc.jpg'),
(51, 'Nguyễn Thị Ngọc Diệp', 'TS.LS-Giám đốc công ty', '0986601277', 'acc1@vietanlaw.vn', 'vietanlaw', 'NGUYEN-THI-NGOC-DIEP-Viet-An-Law-Firm-Tax-and-Accounting-Expert-380x280xc.jpg'),
(52, 'Trần Tiến Quang', 'Thạc sĩ luật, chuyên viên tư vấn luật', '0986924368', 'luatsu6@vietanlaw.vn', 'vietanlaw', 'Tran-Tien-Quang-Master-of-Law-Viet-An-Law-Firm-380x280xc.jpg'),
(53, 'Đỗ Thị Hồng Hạnh', 'Chuyên viên tư vấn luật', '0977520979', 'hcm2@vietanlaw.vn', 'vietanlaw', 'Do-Thi-Hong-Legal-Consultant-Viet-An-Law-Firm-Hanh-380x280xc.jpg'),
(54, 'Lê Đình Cường', 'Chuyên viên tư vấn luật', '0975307068', 'tuvan@luatvietan.vn', 'vietanlaw', 'Le-Dinh-Cuong-Legal-Consultant-Viet-An-Law-Firm-380x280xc.jpg'),
(55, 'Vũ Hà Trang', 'Chuyên viên tư vấn luật', '0976702050', 'tuvan5@luatvietan.vn', 'vietanlaw', 'VU-THI-HA-TRANG-LEGAL-CONSULTANT-VIET-AN-LAW-380x280xc.jpg'),
(56, 'Võ Kim Nhi', 'Chuyên viên tư vấn luật', '0961480248', 'hcm5@vietanlaw.vn', 'vietanlaw', 'Nhi-380x280xc.jpg'),
(57, 'Lê Ngọc Thuỳ Minh', 'Chuyên viên tư vấn luật', '0965601877', 'hcm6@vietanlaw.vn', 'vietanlaw', 'Lam-Ngoc-Thuy-Minh-380x280xc.jpg'),
(58, 'Nguyễn Thị Thanh Hoa', 'Chuyên viên tư vấn thuế và kế toán', '0962915859', 'acc2@luatvietan.vn', 'vietanlaw', 'NGUYEN-THI-THANH-HOA-Tax-and-accounting-expert-380x280xc.jpg'),
(59, 'Hà Thuỳ Dương', 'Chuyên viên tư vấn thuế và kế toán', '0963330299', 'acc2@luatvietan.vn', 'vietanlaw', 'Duong-e1639392050615-380x280xc.jpg'),
(60, 'Trung Văn Định', 'Chuyên viên công nghệ thông tin', '094 611 33 64', 'dinh@luatvietan.vn', 'vietanlaw', 'Trung-Van-Dinh-Viet-An-Law-380x280xc.jpg'),
(61, 'Đoàn Văn Tài', 'Chuyên viên tư vấn luật', '096 889 7553', 'hcm1@vietanlaw.vn', 'vietanlaw', 'TAI-380x280xc.jpg'),
(62, 'Nguyễn Thị Thu', 'Chuyên viên tư vấn luật', '0968 50 51 56', 'luatsu8@luatvietan.vn', 'vietanlaw', 'Thi-Thu-380x280xc.jpg'),
(63, 'Lã Xuân Hoà', 'Trợ lý luật sư', '0978824855', 'tuvan1@luatvietan.vn', 'vietanlaw', 'Hoa-Boy-e1639393209226-380x280xc.jpg'),
(64, 'Dương Xuân Thắng', 'Chuyên viên tư vấn luật', '096 699 59 88', 'tommy@vietanlaw.vn', 'vietanlaw', 'Thang-380x280xc.jpg'),
(65, 'Nguyễn Thị Thuỳ Trang ', 'Tư vấn thuế và kế toán', '097 757 88 93', 'acchcm@luatvietan.vn', 'vietanlaw', 'Anh-Trang-002-380x280xc.jpg'),
(66, 'Kiều Thuý Đạt', 'Chuyên viên tư vấn luật', '096 167 55 66', 'dat@vietanlaw.vn', 'vietanlaw', 'Kieu-Thi-Thuy-Dat-Viet-An-Law-380x280xc.jpg'),
(67, 'Điền Thị Bích Ngọc', 'Tư vấn thuế và kế toán', '09 33 11 33 66 ', 'ngoc-acc@vietanlaw.vn', 'vietanlaw', 'Ngoc-KTT-380x280xc.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `level`
--

CREATE TABLE `level` (
  `level_id` int(25) NOT NULL,
  `level_name` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `level`
--

INSERT INTO `level` (`level_id`, `level_name`) VALUES
(24, 'TS.LS-Giám đốc công ty'),
(25, 'CEO-Giám đốc điều hànhh'),
(29, 'Phó giám đốc công ty'),
(30, 'Luật sư thành viên'),
(31, 'Chuyên viên tư vấn luật'),
(32, 'Quản lý tư vấn thuế và kế toán'),
(33, 'Quản lí Chi nhánh tại Thành phố HCM'),
(34, 'Chuyên viên tư vấn thuế và kế toán'),
(35, 'Chuyên viên công nghệ thông tin'),
(36, 'Trợ lý luật sư'),
(37, 'Tư vấn thuế và kế toán'),
(40, 'Luật sư,Phó giám đốc công ty'),
(41, 'Thạc sĩ luật, chuyên viên tư vấn luật');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `license`
--

CREATE TABLE `license` (
  `gp_id` int(25) NOT NULL,
  `gp_name` varchar(255) NOT NULL,
  `gp_disc` varchar(255) NOT NULL,
  `gp_phone` varchar(255) NOT NULL,
  `gp_email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `license`
--

INSERT INTO `license` (`gp_id`, `gp_name`, `gp_disc`, `gp_phone`, `gp_email`, `image`, `link_details`) VALUES
(6, 'Giấy phép lao động', 'Dịch vụ xin giấy phép lao động', '096 167 55 66', 'giayphep@vietanlaw.vn', 'Giay-phep-lao-dong-VN-e1603340445573-380x280xc.jpg', '            <a href=\"index.php?action=link&act=dautu\" class=\"a-for-link\" title=\"Giay phep lao dong\">Giay phep lao dong</a>'),
(8, 'Lữ hành quốc tế', 'Dịch vụ xin giấy phép kinh doanh lữ hành quốc tế', '0961675566', 'giayphep@vietanlaw.vn', 'Noi-Mong-91340266401_340x250-380x280xc.jpg', '            <a href=\"index.php?action=link&act=doanhnghiep\" class=\"a-for-link\" title=\"lu hanh quoc te\">Giay phep lao dong</a>'),
(9, 'Lữ hành nội địa', 'Dịch vụ xin giấy phép kinh doanh lữ hành nội địa', '0961675566', 'giayphep@vietanlaw.vn', 'Quang-Ninh-380x280xc.jpg', ''),
(10, 'Giấy phép mạng xã hội', 'Dịch vụ xin giấy phép kinh mạng xã hội', '0961675566', 'giayphep@vietanlaw.vn', 'mang-xa-hoi-380x280xc.jpg', ''),
(11, 'An toàn vệ sinh thực phẩm', 'Dịch vụ xin giấy vệ sinh an toàn thực phẩm', '0961675566', 'giayphep@vietanlaw.vn', 'lva-bao-ve-an-toan-380x280xc.jpg', ''),
(12, 'Công bố', 'Dịch vụ xin giấy phép công bố phù hợp an toàn thực phẩm', '0961675566', 'giayphep@vietanlaw.vn', 'lva-Kiem-toan-380x280xc.jpg', ''),
(13, 'Visa cho người nước ngoài', 'Dịch vụ xin visa với người nước ngoài', '0961675566', 'giayphep@vietanlaw.vn', 'dich-vu-visa-380x280xc.jpg', ''),
(14, 'Thẻ tạm trú', 'Dịch vụ xin thẻ tạm trú cho người nước ngoài', '0961675566', 'giayphep@vietanlaw.vn', 'the-tam-tru-380x280xc.jpg', ''),
(15, 'Công bố lưu hành mỹ phẩm', 'Dịch vụ công bố lưu hành mỹ phẩm', '0961675566', 'giayphep@vietanlaw.vn', 'luu-hanh-my-pham-380x280xc.jpg', ''),
(16, 'Trung tâm ngoại ngữ', 'Dịch vụ thành lập trung tâm ngoại ngữ', '0961675566', 'giayphep@vietanlaw.vn', 'ngoai-ngu-380x280xc.jpg', ''),
(17, 'Giấy phép bưu chính', 'Dịch vụ giấy phép bưu chính', '0961675566', 'giayphep@vietanlaw.vn', 'lva-Kinh-doanh-buu-chinh-380x280xc.jpg', ''),
(18, 'Giấy phép games', 'Dịch vụ giấy phép game', '0961675566', 'giayphep@vietanlaw.vn', 'lva-game-play-380x280xc.jpg', ''),
(19, 'Thông tin điện tử', 'Dịch vụ trang thông tin điện tử', '0961675566', 'giayphep@vietanlaw.vn', 'lva-Thuong-mai-dien-tu-380x280xc.jpg', ''),
(20, 'Vận tải', 'Dịch vụ xin giấy phép vận tải', '0961675566', 'giayphep@vietanlaw.vn', 'van-tai-380x280xc.jpg', ''),
(22, 'Mã số mã vạch', 'Dịch vụ xin cấp mã số mã vạch', '0961675566', 'giayphep@vietanlaw.vn', 'tu-van-ma-so-ma-vach-380x280xc.jpg', ''),
(23, 'Giấy phép bán lẻ', 'Dịch vụ cấp giấy phép bán lẻ', '0961675566', 'giayphep@vietanlaw.vn', 'ban-le-thuoc-380x280xc.jpg', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`in4_id`);

--
-- Chỉ mục cho bảng `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`level_id`);

--
-- Chỉ mục cho bảng `license`
--
ALTER TABLE `license`
  ADD PRIMARY KEY (`gp_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `information`
--
ALTER TABLE `information`
  MODIFY `in4_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `level`
--
ALTER TABLE `level`
  MODIFY `level_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `license`
--
ALTER TABLE `license`
  MODIFY `gp_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
