-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 20, 2022 lúc 11:16 AM
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
-- Cơ sở dữ liệu: `xshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id_bl` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `id_hh` int(11) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `ngay_bl` date NOT NULL DEFAULT current_timestamp(),
  `anhbl` text DEFAULT 'sp4.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`id_bl`, `id_kh`, `id_hh`, `noi_dung`, `ngay_bl`, `anhbl`) VALUES
(1, 1, 13, '        Phủ nhôm bóng đẹp có đệm đỡ laptop và đệm dưới chân giúp khi xê dịch không bị trầy xước\r\nChất lượng sản phẩm: đẹp, đã mua lần 2 và sẽ mua lại nhiều\"\r\n     ', '2022-10-12', 'sp14.png'),
(2, 3, 15, '        Sản phẩm này chất lượng nha\r\nKhông có tiếc tiền nha cả nhà \"\r\n     ', '2022-10-12', 'sp5.png'),
(3, 3, 14, 'Sản phẩm này chất lượng nha\r\nKhông có tiếc tiền nha cả nhà ', '2022-10-12', 'sp6.png'),
(4, 1, 14, '         Phủ nhôm bóng đẹp có đệm đỡ laptop và đệm dưới chân giúp khi xê dịch không bị trầy xướcChất lượng sản phẩm: đẹp, đã mua lần 2 và sẽ mua lại nhiều lắm\r\n\r\n    \r\n          ', '2022-10-12', 'sp14.png'),
(13, 1, 16, '        hàng quá chất lượng nhưng web bịp vlaa aa\r\n               ', '2022-10-18', 'sp4.png'),
(14, 1, 33, '        hàng chất lượng ae nên mua nha ', '2022-10-18', 'sp4.png'),
(15, 1, 17, 'hàng sịn vl ae nên mua nhưng web bịp đấy ', '2022-10-18', 'sp4.png'),
(18, 1, 13, 'sản phẩm quá tuyệt vời ', '2022-10-19', 'sp4.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id_bl`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
