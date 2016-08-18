-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2016 at 11:51 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batdongsan`
--

-- --------------------------------------------------------

--
-- Table structure for table `loaihinh`
--

CREATE TABLE `loaihinh` (
  `IDLoaiHinh` int(11) NOT NULL,
  `TenLoaiHinh` varchar(50) NOT NULL,
  `ThuTu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaihinh`
--

INSERT INTO `loaihinh` (`IDLoaiHinh`, `TenLoaiHinh`, `ThuTu`) VALUES
(1, 'Căn Hộ', 1),
(2, 'Nhà Ở', 2),
(3, 'Nhà Thuê', 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(75) NOT NULL,
  `ProductImage` varchar(255) NOT NULL,
  `ProductPrice` double(15,4) NOT NULL,
  `ProductDesc` text NOT NULL,
  `IDLoaiHinh` int(11) NOT NULL,
  `NbRoom` varchar(150) NOT NULL,
  `ND` text NOT NULL,
  `KhuVuc` varchar(150) NOT NULL,
  `Luotxem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `ProductImage`, `ProductPrice`, `ProductDesc`, `IDLoaiHinh`, `NbRoom`, `ND`, `KhuVuc`, `Luotxem`) VALUES
(1, 'Căn hộ mini', 'sb2.jpg', 7500000.0000, 'Với tổng diện tích 20m2...', 2, '2 phòng ngủ và 1 phòng khách', '', '', 0),
(2, 'Căn hộ Phú Mỹ Hưng Q.7 TP.HCM', 'sb4.jpg', 8000000.0000, 'Nằm sát khu mua sắm , cách quận 1 10km...', 1, '2 phòng ngủ và 1 phòng khách', '', '', 0),
(3, 'Nhà cho thuê Bình Thạnh', 'sb4.jpg', 10000000.0000, 'Nằm gần đường Bạch Đằng , đầu đủ tiện ích ...', 1, '2 phòng ngủ và 1 phòng khách', '', '', 0),
(4, 'Nhà nguyên căn, Quận 2', 'sb5.jpg', 9000000.0000, 'Nằm ngay đường Mai chí Thọ cách hàng xanh 4km....', 2, '2 phòng ngủ và 1 phòng khách', '', '', 0),
(5, 'Nhà nguyên căn Thủ Đức', 'sb3.jpg', 7600000.0000, 'Nằm ngay đường Lê Văn Việt thuận lợi cho việt mua bán ....', 3, '2 phòng ngủ và 1 phòng khách', '', '', 0),
(6, 'Căn hộ Nguyễn Bĩnh Khiêm', 'sb.jpg', 6500000.0000, 'Với không gian thoáng đảng cho gia đình...', 1, '2 phòng ngủ và 1 phòng khách', 'Dự án ở phường Thạnh Xuân, quận 12 có quy mô nhỏ, nằm trên thửa đất rộng 2.000 m2, lọt thỏm trong khu dân cư hiện hữu nhưng vẫn có cổng bảo vệ. 17 sản phẩm còn lại đang nhận đặt cọc và được chủ đầu tư dự báo sẽ bán xong trong vòng 1-2 tháng nữa, giống như chuỗi các dự án nhà phố xây sẵn doanh nghiệp từng bung hàng những quý trước đây. Nhờ thanh khoản tốt, sản phẩm tiêu thụ nhanh nên doanh nghiệp này lên kế hoạch đẩy mạnh xây 250 căn trong năm 2016, tức tăng gần gấp đôi lượng nhà giá rẻ tung ra thị trường so với năm 2015.', 'Sơn Trà, Đà Nẵng', 4),
(7, 'Căn hộ Novaland Q.9', 'sb6.jpg', 9600000.0000, '', 3, '2 phòng ngủ và 1 phòng khách', '', '', 2),
(10, 'Căn hộ mini Q.8 Bình Thạnh', 'sb2.jpg', 5200000.0000, '', 1, '2 phòng ngủ 1 phòng khách', 'Dự án', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `IDSlide` int(11) NOT NULL,
  `UrlImage` varchar(255) NOT NULL,
  `ThuTu` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `slide_qc`
--

CREATE TABLE `slide_qc` (
  `SlideID` int(11) NOT NULL,
  `Url` varchar(255) NOT NULL,
  `Title` varchar(150) NOT NULL,
  `Slogan` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide_qc`
--

INSERT INTO `slide_qc` (`SlideID`, `Url`, `Title`, `Slogan`) VALUES
(1, '2.jpg', 'Căn Hộ', 'Đặng Lê Nguyên'),
(2, '4.jpg', 'Nhà Ở', 'Lê Đặng Nguyên'),
(3, '5.jpg', 'Nhà Đất', 'Nguyên Lê Đặng');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(150) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `Fullname` varchar(250) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Permissions` varchar(10) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Username`, `Password`, `Fullname`, `Email`, `Permissions`, `Address`) VALUES
(2, 'admin', 'admin', 'Đặng Lê Anh', 'nguyendlps02134@gmail.com', 'admin', ''),
(3, 'danglenguyen', '123456', 'Đặng Lê Nguyên', 'nguyendlps02134@fpt.edu.vn', 'admin', 'Bình Định'),
(4, 'aloaloalo', '0913448385', 'Lê Thành Đạt', 'datltps02134@fpt.edu.vn', 'user', 'Sài GÒn'),
(5, 'kfchihi', '13456798', 'Trần Bảo Trân', 'trankf0214@fpt.edu.vn', 'user', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loaihinh`
--
ALTER TABLE `loaihinh`
  ADD PRIMARY KEY (`IDLoaiHinh`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`IDSlide`);

--
-- Indexes for table `slide_qc`
--
ALTER TABLE `slide_qc`
  ADD PRIMARY KEY (`SlideID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loaihinh`
--
ALTER TABLE `loaihinh`
  MODIFY `IDLoaiHinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `IDSlide` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slide_qc`
--
ALTER TABLE `slide_qc`
  MODIFY `SlideID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
