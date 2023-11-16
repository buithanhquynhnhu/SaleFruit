-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 09, 2023 lúc 04:03 PM
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
-- Cơ sở dữ liệu: `shptc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`user`, `password`) VALUES
('ngoc', '123456'),
('quynhnhu', '1596321'),
('ngocnhu', 'ngocnhu190'),
('quynhnhu1802', 'quynhnhu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthoadon`
--

CREATE TABLE `cthoadon` (
  `masohd` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cthoadon`
--

INSERT INTO `cthoadon` (`masohd`, `mahh`, `soluongmua`, `thanhtien`, `tinhtrang`) VALUES
(1, 24, 1, 185000, 0),
(44, 23, 1, 135000, 0),
(44, 24, 1, 185000, 0),
(45, 23, 1, 135000, 0),
(45, 24, 2, 370000, 0),
(46, 24, 1, 185000, 0),
(47, 22, 1, 165000, 0),
(47, 24, 1, 185000, 0),
(48, 2, 3, 555000, 0),
(48, 4, 2, 480000, 0),
(49, 2, 3, 555000, 0),
(49, 4, 2, 480000, 0),
(50, 2, 1, 185000, 0),
(50, 4, 1, 240000, 0),
(51, 2, 1, 185000, 0),
(51, 4, 1, 240000, 0),
(52, 6, 2, 580000, 0),
(52, 24, 2, 370000, 0),
(53, 18, 3, 300000, 0),
(54, 18, 3, 300000, 0),
(54, 23, 2, 270000, 0),
(55, 18, 3, 300000, 0),
(55, 23, 2, 270000, 0),
(55, 24, 3, 555000, 0),
(56, 7, 2, 860000, 0),
(56, 18, 3, 300000, 0),
(56, 21, 2, 220000, 0),
(56, 23, 2, 270000, 0),
(56, 24, 3, 555000, 0),
(57, 1, 1, 400, 0),
(57, 2, 1, 185000, 0),
(57, 3, 1, 185000, 0),
(57, 7, 2, 860000, 0),
(57, 18, 3, 300000, 0),
(57, 21, 2, 220000, 0),
(57, 23, 2, 270000, 0),
(57, 24, 3, 555000, 0),
(58, 1, 1, 400, 0),
(58, 2, 1, 185000, 0),
(58, 3, 1, 185000, 0),
(58, 7, 2, 860000, 0),
(58, 21, 2, 220000, 0),
(58, 23, 2, 270000, 0),
(58, 24, 3, 555000, 0),
(59, 1, 1, 400, 0),
(59, 2, 1, 185000, 0),
(59, 3, 1, 185000, 0),
(59, 7, 2, 860000, 0),
(59, 21, 2, 220000, 0),
(59, 23, 2, 270000, 0),
(59, 24, 3, 555000, 0),
(60, 1, 3, 1200, 0),
(60, 2, 1, 185000, 0),
(60, 8, 1, 85000, 0),
(60, 24, 1, 185000, 0),
(61, 2, 2, 370000, 0),
(61, 19, 2, 280000, 0),
(62, 6, 1, 290000, 0),
(62, 8, 2, 170000, 0),
(62, 9, 1, 250000, 0),
(62, 18, 1, 100000, 0),
(63, 8, 2, 170000, 0),
(63, 9, 1, 250000, 0),
(63, 18, 1, 100000, 0),
(63, 24, 1, 185000, 0),
(64, 8, 2, 170000, 0),
(64, 9, 1, 250000, 0),
(64, 18, 1, 100000, 0),
(64, 24, 1, 185000, 0),
(65, 24, 1, 185000, 0),
(66, 2, 1, 400000, 0),
(67, 2, 1, 400000, 0),
(68, 2, 1, 400000, 0),
(69, 2, 1, 400000, 0),
(70, 24, 1, 40000, 0),
(71, 3, 1, 40000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahh` int(11) NOT NULL,
  `tenhh` varchar(60) NOT NULL,
  `binhluan` varchar(2000) NOT NULL,
  `soxem` int(11) NOT NULL,
  `ngaytao` date NOT NULL,
  `dongia` float NOT NULL,
  `giamgia` float NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `maloai` int(20) NOT NULL,
  `donvi` varchar(11) NOT NULL,
  `trongluong` varchar(50) NOT NULL,
  `xuatxu` varchar(50) NOT NULL,
  `tinhtrang` varchar(50) NOT NULL,
  `dathang` int(11) NOT NULL,
  `mota` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`mahh`, `tenhh`, `binhluan`, `soxem`, `ngaytao`, `dongia`, `giamgia`, `hinh`, `maloai`, `donvi`, `trongluong`, `xuatxu`, `tinhtrang`, `dathang`, `mota`) VALUES
(5, 'Chà Là Khô Nguyên Cành Galilee Israel Hộp 500g', '0', 10780, '2022-12-13', 185000, 0, '2.jpg', 1, 'hộp', '500g', 'Israel', 'Còn hàng', 1, '-Chà Là Khô Nguyên Cành  xuất xứ từ Israel, hiện tại  có thể nói đây chính là dòng chà là cành best seller tính đến thời điểm hiện tại qua bao mùa. Sau 1 thời gian thử nghiệm các loại chà là, thì thương hiệu Galilee Product Of Israel này có thể nói là ngon nhất vì được khách hàng ưu ái nhiều nhất.'),
(6, ' Xuân Đào Úc Size Jumbo | V.F Siciliano & Sons', '15', 2391, '2022-12-12', 290000, 0, '5.jpg', 1, 'kg', '170-200g/trái', 'Úc', 'Còn hàng', 1, 'Đào Trơn còn gọi là Du Đào,Xuân Đào là giống đào mà quả có lớp vỏ trơn láng, không lông tơ. Mặc dù về mặt thương mại, Đào Lông và Đào Trơn được xem là những loại quả khác nhau và người ta thường nhầm rằng Đào Trơn là giống lai tạo giữa Đào Lông và Mận nhưng thực tế thì Đào Trơn thuộc về cùng một loài với Đào Lông. \\r\\nXuân Đào có hình dáng giống hình trái tim, vỏ mỏng căng mịn, không có lông như các loại đào khác. Xuân Đào có màu đỏ thẫm xen lẫn sắc hồng rất bắt mắt. Phần thịt giòn và rất mọng nước vị ngọt thơm đặc trưng.'),
(7, 'Táo Envy Mỹ Size 24', '0', 18188, '2022-12-13', 240000, 0, '4.jpg', 1, 'kg', '3 trái tầm 1kg', 'Mỹ', 'Còn hàng', 1, ' -Là loại táo nhập khẩu, quả to tròn, với vỏ màu đỏ điểm thêm các sọc màu vàng, thịt giòn, ngọt, thơm đã trở thành giống táo cao cấp nhất trên thế giới hiện nay\\r\\n- Envy là loại  hiện nay, được lai tạo giữa Royal Gala và Braeburn vào năm 2008 tại New Zealand. Bắt đầu được đưa vào trồng và phát triển tại Mỹ từ năm 2009 và nhanh chóng trở thành cây trồng chủ lực, đem lại giá trị kinh tế cao'),
(8, 'Táo Vàng Kinsei Nhật Bản', '15', 22853, '2022-12-12', 290000, 0, '6.jpg', 1, 'kg', '400-700g /trái', 'Nhật Bản', 'Còn hàng', 1, 'Táo Vàng Kinsei là giống táo khá nổi tiếng ở Nhật Bản. Loại này có lớp vỏ căng bóng, nhẵn mịn, màu vàng bắt mắt. Sản phẩm có hương thơm hấp dẫn và vị ngọt mát dịu nhẹ. Để có những trái táo Kinsei thơm ngon nổi tiếng, những nông dân trồng táo của Nhật Bản phải có chế độ chăm sóc hết sức cầu kì, gieo trồng và thu hoạch hoàn toàn tự nhiên. Các trái táo Kinsei được lựa chọn một cách nghiêm ngặt, phải trải qua công đoạn đo các chỉ số về màu sắc, độ lớn, độ ngọt, độ chua, độ chín của từng quả, từ đó đánh giá và phân loại táo.'),
(9, 'Mãng Cầu Dai (Na Dai) Đài Loan', '15', 23674, '2022-12-06', 430000, 0, '7.jpg', 1, 'kg', '800-1,2kg/trái', 'Đài Loan', 'Còn hàng', 1, '- Khối lượng khoảng 800g-1,2kg/ trái\\r\\n- Lớp vỏ mỏng, thịt màu trắng\\r\\n- Thịt dai, thơm và ngậy vị sữa\\r\\n- Trồng và nhập khẩu trực tiếp từ Đài Loan'),
(10, ' Quả Việt Quất Peru | Ozblu - Hộp 125g', '15', 4663, '2022-12-05', 85000, 0, '8.jpg', 1, 'hộp', '150g', 'Peru', 'Còn hàng', 1, '-Chứa nhiều anhthocyanidins giúp tăng cường hệ miễn dịch cũng như vô hiệu hóa các gốc tự do dẫn đến ung thư hay các bệnh liên quan đến tuổi tác.\\r\\n- Trong Trái Việt Quất chứa nhiều các chất polyphenols, anthocyanins và axit ellagic làm giảm quá trình oxy hóa LDL, cholesterol, kết nối tiểu cầu và viêm rất tốt cho tim mạch và làm hạ cholesterol xấu. Đồng thời với bà bầu cũng có cực kì nhiều tác dụng.'),
(11, ' Sầu Riêng Musang King Malaysia', '15', 200058, '2022-11-21', 590000, 0, '11.jpg', 1, 'khay', '400g', 'Malaysia', 'Còn hàng', 1, '- Thơm ngon khó cưỡng lại, hương vị đậm đà \\r\\n- Là loại sầu riêng thuộc hàng ngon nhất thế giới, múi to còn hạt thì cực lép. Không quá ngọt nhưng độ béovà thơm  vượt trội. Sầu riêng chuẩn Musang King 100% là giống D197.\\r\\nSầu Riêng Musang King Malaysia(hay Musang King Durian) là loại sầu riêng thuộc hàng ngon nhất và trở thành “biểu tượng” của Malaysia khi được chính thủ tướng Malaysia đem tặng thủ tướng Singapre nhân sự kiện Nông sản Quốc gia Malaysia năm nay.'),
(12, 'Nho Mẫu Đơn Shine Muscat Nagano Nhật Bản', '15', 12765, '2022-11-21', 1250000, 0, '12.jpg', 1, 'kg', 'Khoảng 600-700g/chùm', 'Nhật Bản', 'Còn hàng', 1, '- Thơm ngon khó cưỡng lại, hương vị đậm đà \\r\\n- Là loại sầu riêng thuộc hàng ngon nhất thế giới, múi to còn hạt thì cực lép. Không quá ngọt nhưng độ béovà thơm  vượt trội. Sầu riêng chuẩn Musang King 100% là giống D197.\\r\\nSầu Riêng Musang King Malaysia(hay Musang King Durian) là loại sầu riêng thuộc hàng ngon nhất và trở thành “biểu tượng” của Malaysia khi được chính thủ tướng Malaysia đem tặng thủ tướng Singapre nhân sự kiện Nông sản Quốc gia Malaysia năm nay.'),
(13, ' Lê Xanh QTee Bỉ - Lê Má Hồng QTee Bỉ', '15', 6759, '2022-11-21', 150000, 0, '13.jpg', 1, 'kg', '1kg', 'Bỉ', 'Còn hàng', 1, 'Lê Xanh QTee Bỉ là loại Lê có vỏ trái màu xanh và 1 phần vỏ có màu đỏ hồng nên còn được gọi là Lê Má Hồng QTee Bỉ hình dáng nhỏ gọn, bắt mắt, thịt quả có màu trắng kem, cứng, giòn,…chứa một lượng lớn Pectin, đây là loại chất xơ hòa tan giúp tiêu hóa tốt, góp phần đào thải các chất thải và các chất gây ung thư trong cơ thể, hỗ trợ giảm lượng Cholesterol và duy trì mức đường huyết cân bằng. Đây còn là chất dễ tiêu hóa, làm giảm gánh nặng cho hệ tiêu hóa và là nguồn năng lượng giải phóng chậm…'),
(14, 'Dâu Tây Hàn Quốc Premium | Joy Farm Hộp 350g - New', '15', 4723, '2022-11-21', 360000, 0, '14.jpg', 1, '1 hộp', '330g', 'Hàn Quốc ', 'Còn hàng', 1, '- Được trồng trong nhà kính thông minh, được chăm sóc hoàn toàn tự động. Chính phủ Hàn Quốc thường xuyên tổ chức các chương trình đào tạo về kỹ thuật trồng và quản lý sản xuất nghiêm ngặt nên dâu Hàn trở thành thương hiệu được yêu thích trên toàn thế giới.\\r\\nNgay sau khi thu hoạch,  được đóng gói bằng công nghệ xử lý CO2 nồng độ cao đựng trong bao bì chuyên dụng. Được xuất khẩu bằng đường hàng không ngay trong ngày để đảm bảo về độ an toàn và tươi ngon, chỉ sau 2 ngày nó sẽ xuất hiện trên các kệ của siêu thị, cửa hàng\\r\\n- Nhập khẩu trực tiếp từ Korea'),
(15, 'Hồng Mật Đen Wakayama Nhật Bản', '15', 14277, '2022-11-18', 1200000, 0, '15.jpg', 1, 'kg', '250-300g/trái', 'Nhật Bản', 'Còn hàng', 1, '- Loại hồng giòn ngon nhất thế giới.\\r\\n- Màu sắc hấp dẫn, mùi vị vô cùng đặc biệt.\\r\\n- Quả không hề chát mà rất ngọt, giòn và thậm chí còn có vị giống như socola.\r\n- Chất chống oxi hoá có trong quả Hồng Đen gấp nhiều lần trà xanh.\r\n- Món quà tinh tế của người Nhật trong các dịp lễ tết.\r\n- Quà tặng cực kì sang trọng và cao cấp.\r\n- Nhập khẩu trực tiếp từ Nhật Bản.'),
(16, 'Dưa Hấu Không Hạt Tiểu Hắc Long', '15', 6568, '2022-12-13', 60000, 0, '16.jpg', 2, 'kg', '4-6kg', 'Long An', 'Còn hàng', 1, 'Dâu Tây Snow Pink Hàn Quốc thường được bán trên thị trường với màu hồng nhạt như cánh hoa anh đào, sự kết hợp giữa tông màu trắng và hồng tinh tế.- Nguyên nhân cho màu sắc lạ mắt này là vì sự hấp thụ ít Anthocyanin (hợp chất tạo nên màu sắc cho các loại trái cây và rau củ , có tác dụng chống oxy hóa mạnh, tăng cường hệ thống miễn dịch cho cơ thể), do hạn chế ánh sáng mặt trời trong quá trình canh tác tạo ra màu hồng nhạt cho trái. Bên trong bề mặt trái, các sắc thái màu hồng tiếp tục ăn sâu vào phần thịt, cuối cùng chuyển thành màu trắng ở giữa.Dâu Snow Pink được đánh giá cao bởi mùi thơm, hương vị, hình thức và kết cấu mọng nước, mướt trái mang lại sự cân bằng tuyệt vời cho người dùng.'),
(17, 'Dưa Lưới Nhật Saito Orange Melon', '15', 9315, '2022-12-13', 130000, 0, '17.jpg', 2, 'kg', '1,4-2kg/trái', 'Giống Thuần Nhật Bản - Trồng Buôn Mê Thuột', 'Còn hàng', 1, '* 100% hạt giống F1 nhập khẩu Nhật Bản\\r\\n* 100% trồng theo công nghệ Nhật Bản\\r\\n* 100% chăm sóc và thu hoạch bởi kỹ sư người Nhật\\r\\n* Trồng hoàn toàn trong nhà màng công nghệ cao\\r\\n* Chất lượng Dưa tuyệt hảo như trồng tại Nhật Bản\\r\\n* Vân lưới nổi 3D rất dày, đẹp mắt và sang trọng\\r\\n* Chuẩn xuất khẩu Nhật Bản'),
(18, ' Bưởi Da Xanh Miền Tây | Bảo An', '15', 171, '2022-12-06', 100000, 0, '18.jpg', 2, 'Trái', '1 trái khoảng 1,1-1,2 kg', 'Miền Tây- Việt Nam', 'Còn hàng', 1, 'có giấy chứng nhận đạt tiêu chuẩn VIETGAP.\\r\\n đảm bảo không phun thuốc bảo vệ thực vật, chất kích thích\\r\\n- Bưởi có vị thanh, không hạt, nước vừa phải, tép bưởi có màu hồng đỏ, bó chặt, ít hạt và dễ tách khỏi múi. Với những ưu điểm hàng đầu như vậy nên  đang rất được ưu chuộng hiện nay. Đặc biệt hơn, Bưởi Da Xanh có mùi thơm rất đặc trưng.'),
(19, 'Mãng Cầu Dai (Na Dai) Hoàng Hậu Giống Thái Lan', '15', 1296, '2022-12-06', 140000, 0, '19.jpg', 2, 'Trái', '0,5-1kg/trái', 'Giống Thái Lan trồng Việt Nam', 'Còn hàng', 1, ' có giấy chứng nhận đạt tiêu chuẩn VIETGAP.\\r\\n đảm bảo không phun thuốc bảo vệ thực vật, chất kích thích\\r\\n- Bưởi có vị thanh, không hạt, nước vừa phải, tép bưởi có màu hồng đỏ, bó chặt, ít hạt và dễ tách khỏi múi. Với những ưu điểm hàng đầu như vậy nên  đang rất được ưu chuộng hiện nay. Đặc biệt hơn, Bưởi Da Xanh có mùi thơm rất đặc trưng.'),
(20, 'Bắp Nữ Hoàng Đỏ - Ngô Đỏ Nữ Hoàng', '15', 16998, '2022-12-06', 20000, 0, '20.jpg', 2, 'Trái', '350g/trái', 'Giống Thái Lan trồng Tiền Giang', 'Còn hàng', 1, 'Bắp Nữ Hoàng Đỏ hay còn gọi là Ngô Đỏ Nữ Hoàng, có nguồn gốc từ Peru, sau đó được nhân rộng ra nhiều nước trong nước có Thái Lan, hiện nay hạt giống được Công Ty NOVA nhập độc quyền từ Thái Lan và trồng rộng rãi tại các tĩnh đồng bằng sông cửu long\\r\\n- Giống lai tự nhiên, hoàn toàn không biến đổi GEN -Non GMO. Bắp Nữ Hoàng đỏ trồng theo tiêu chuẩn VietGap. Ăn tươi được, giòn, ngọt, vị tan ngay trong miệng.'),
(21, 'Quýt Đường Núi Lửa - Quýt Đường Hữu Cơ', '15', 148, '2022-12-01', 110000, 0, '21.jpg', 2, 'kg', '7,8 trái/kg', 'Đăk Nông - Việt Nam', 'Còn hàng', 1, 'Quýt Đường Núi Lửa được hấp thụ các dưỡng chất đầy đủ tươi tốt từ đất mẹ giàu dinh dưỡng và khoáng chất, đem lại chất vị riêng cho những quả quýt.\\r\\n- Quả Quýt Đường được neo trên cây cho đến khi chín vàng nên cực kỳ mọng nước, độ ngọt xuất sắc và để lại hậu vị sâu.\\r\\n- Ưu thế của Quýt Đường Núi Lửa là quy trình canh tác thuận tự nhiên, không sử dụng hoá chất theo tiêu chuẩn hữu cơ Nhật Bản, nguồn đất và nước ngầm sâu đạt tiêu chí sạch, cho ra sản phẩm chất lượng tuyệt hảo và bảo quản lâu trong điều kiện thông thường.'),
(22, 'Hồng Xiêm Mexico - Sapoche Mexico', '15', 19427, '2022-12-15', 165000, 0, '22.jpg', 2, 'kg', '350-500g /trái', 'Tiền Giang - Việt Nam', 'Còn hàng', 1, 'Hồng Xiêm Mêxico được trồng tại xã Song Thuận, huyện Châu Thành, tỉnh Tiền Giang, Song Thuận hiện có hơn 200 ha hồng xiêm, trong đó, diện tích hồng xiêm Mêxicô khoảng gần 10 ha. Hồng xiêm Mêxicô là loại cây dễ trồng và cho trái quanh năm.\\r\\n- Giống Sapoche Mêhicô có ưu điểm là trái to, dạng tròn, mềm, vỏ da cám, ăn rất ngọt và thơm lâu. Giá bán lúc nào cũng cao hơn hẳn các loại hồng xiêm khác. Vỏ trái mỏng, được bao phủ bởi một lớp phấn nâu, lớp này bị tróc loang lổ khi trái chín.\\r\\n- Giống Sapoche Mêhicô thịt trái có màu vàng đến nâu đỏ, mềm mọng nước, thơm ngon, ngọt, sớ thịt mịn hay thô (cát) tùy giống.\\r\\nTrái Hồng Xiêm Giống Mexico non chứa nhiều mủ trắng, lượng mủ này giảm dần khi trái già. Trái có 0-10 hột (thường từ 1-4). Hột dẹp, màu nâu sậm hay đen bóng, có ngạnh bén với vỏ cứng.'),
(23, ' Vú Sữa Bơ Hồng Lò Rèn Vĩnh Kim', '15', 13383, '2022-11-09', 135000, 0, '23.jpg', 2, 'kg', '400-550g /trái', 'Vĩnh Kim Tiền Giang', 'Còn hàng', 1, '- Ưu điểm của Vú Sữa Bơ Hồng Lò Rèn là trái to, tròn, sai quả, bình quân 3 trái/kg, thịt ngon, ngọt thanh, mềm và có vị béo giống như bơ.\\r\\nVú Sữa Bơ Hồng Lò Rèn Vĩnh Kim trái khoảng 400g - 550g /trái, được trồng nhiều ở Bến Tre, Tiền Giang ...  khi chín có vỏ màu hồng tím, da bóng láng, thơm mùi bơ sữa rất hấp dẫn, nhiều chất dinh dưỡng, trái chín ăn không có mủ.\\r\\nTrái Vú Sữa Bơ Hồng  được bao trái từ nhỏ nên tránh được sâu bọ, ruồi đục và không giòi như hàng chợ. Vú Sữa Bơ Hồng chuẩn ngon là phải đủ ngày và chín cây thì da quả mới ửng màu hồng tím, da còn xanh thì không phải loại Vú Sữa Bơ Hồng ngon.'),
(24, 'Xoài Cát Hòa Lộc MP Fruits Cao Lãnh Đồng Tháp', '15', 7037, '2022-11-08', 185000, 0, '24.jpg', 2, 'kg', '1kg', 'Cao Lãnh Đồng Tháp', 'Còn hàng', 1, 'Xoài được mệnh danh là Vua của các loại trái cây, và xoài giống\\r\\n Xoài Cát Hòa Lộc thì nức tiếng bao đời nay. Với vị ngọt sắc, mùi thơm ngào ngạt, dáng thì thuôn dài đẹp đẽ, lại thêm cái “sang chảnh” vì rất khó để cho cây ra hoa và đậu trái. Chắc có lẽ có nhiều yếu tố giống “người đẹp” nên nó được gọi mỹ miều là ” Hoa Hậu” các loại xoài cũng là vì đó.'),
(25, 'Dưa Hấu Hắc Mỹ Nhân', '15', 9940, '2022-11-09', 47000, 0, '25.jpg', 2, 'kg', '2,5-3,5kg/trái', 'Long An', 'Còn hàng', 1, 'Dưa hấu Hắc Mỹ Nhân do MP Fruit phân phối là loại quả to, mỏng vỏ, đỏ thịt và hương vị ngon ngọt đặc biệt. Sản phẩm được trồng hữu cơ, đảm bảo không chứa chất kích thích tăng trưởng, nên rất an toàn cho sức khỏe của người sử dụng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `masohd` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`masohd`, `makh`, `ngaydat`, `tongtien`) VALUES
(1, 24, '2023-02-16', 185000),
(44, 24, '2023-02-16', 320000),
(45, 24, '2023-02-16', 505000),
(46, 24, '2023-02-16', 185000),
(47, 24, '2023-02-16', 350000),
(48, 25, '2023-02-16', 1035000),
(49, 25, '2023-02-16', 1035000),
(50, 25, '2023-02-16', 425000),
(51, 25, '2023-02-16', 425000),
(52, 25, '2023-02-17', 950000),
(53, 25, '2023-02-17', 300000),
(54, 25, '2023-02-17', 570000),
(55, 27, '2023-02-17', 1125000),
(56, 27, '2023-02-17', 2205000),
(57, 27, '2023-02-17', 2575400),
(58, 27, '2023-02-17', 0),
(59, 27, '2023-02-17', 2275400),
(60, 24, '2023-02-20', 456200),
(61, 24, '2023-02-23', 650000),
(62, 24, '2023-02-24', 810000),
(63, 23, '2023-02-24', 705000),
(64, 23, '2023-02-24', 705000),
(65, 32, '2023-03-02', 185000),
(66, 24, '2023-03-03', 0),
(67, 24, '2023-03-03', 400000),
(68, 24, '2023-03-03', 400000),
(69, 24, '2023-03-03', 400000),
(70, 24, '2023-03-03', 40000),
(71, 24, '2023-03-03', 40000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(80) NOT NULL,
  `username` varchar(60) NOT NULL,
  `matkhau` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` varchar(60) NOT NULL,
  `sodienthoai` varchar(12) NOT NULL,
  `vaitro` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `username`, `matkhau`, `email`, `diachi`, `sodienthoai`, `vaitro`) VALUES
(16, 'ti', 'titi', 'a690c6ff2b1e01d53daa', 'ti@gmail.com', 'hcm', '1234t', 0),
(17, 'nhu', 'quynhnhu20', 'b1a291e0694f6114dc25', 'nhubui1825@gmail.com', '53 Trinh Dinh Thao', '0883639521', 0),
(18, 'binh', 'binh1', 'bae0bac12014b34363d5', 'nhubui1825@gmail.com', '49 Trinh Dinh Thao', '0883639669', 0),
(19, 'như như', 'nhunhu', '3eabd13c4eb9e2df91d4', 'nhubui1825@gmail.com', 'hcm', '1234', 0),
(20, 'như mai', 'nhumai', '3eabd13c4eb9e2df91d4', 'nhubui1825@gmail.com', 'hcm', '1234', 0),
(21, 'nhumainhu', 'nhumainhu', '3eabd13c4eb9e2df91d4178c1415efef', 'nhubui1825@gmail.com', 'hcm', '12345', 0),
(22, 'nhoc', 'ngoc12', 'f588ab1e5c9442cb49a2ea447b16a8ff', 'binh@gmail.com', 'hcm', '0883639669', 0),
(23, 'Nhat', 'nhat16', '3eabd13c4eb9e2df91d4178c1415efef', 'nhat@gmail.com', 'hcm', '1234567', 0),
(24, 'duong', 'duong67', '3eabd13c4eb9e2df91d4178c1415efef', 'duong@gmail.com', 'hcm', '1234567', 0),
(25, 'anh', 'anh12', '3eabd13c4eb9e2df91d4178c1415efef', 'anh@gmail.com', ' Trinh Dinh Thao', '1234567', 0),
(26, 'nhu18', 'quynhnhu18', '3eabd13c4eb9e2df91d4178c1415efef', 'nhubui1825@gmail.com', '53 Trinh Dinh Thao', '1234567', 0),
(27, 'nhu02', 'quynhnhu52', '3eabd13c4eb9e2df91d4178c1415efef', 'nhubui1825@gmail.com', '53 Trinh Dinh Thao', '0883639521', 0),
(28, 'BT Quynh Nhu', 'btquynhnhu', '3eabd13c4eb9e2df91d4178c1415efef', 'nhubui1825@gmail.com', '53 Trinh Dinh Thao', '0883639521', 0),
(29, 'Ngoc Nhu', 'ngocnhu', '3eabd13c4eb9e2df91d4178c1415efef', 'nhubui1825@gmail.com', '49 Trinh Dinh Thao', '0883639669', 0),
(30, 'nhi', 'nhi89', '3eabd13c4eb9e2df91d4178c1415efef', 'nhubui1825@gmail.com', 'hcm', '0839366218', 0),
(31, 'lyan', 'lyan', '3eabd13c4eb9e2df91d4178c1415efef', 'buiquynhnhu1802@gmail.com', ' Trinh Dinh Thao', '0839366218', 0),
(32, 'Linh', 'NgocLinh', '3eabd13c4eb9e2df91d4178c1415efef', 'linh@gmail.com', ' Trinh Dinh Thao', '0883639756', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `maloai` int(20) NOT NULL,
  `tenloai` varchar(200) NOT NULL,
  `menu` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`, `menu`) VALUES
(1, 'Trái cây nhập khẩu ', 0),
(2, 'Trái cây nội địa', 0),
(3, 'Trái cây ngoại nhập', 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`masohd`,`mahh`),
  ADD KEY `mahh` (`mahh`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahh`),
  ADD KEY `maloai` (`maloai`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`masohd`),
  ADD KEY `makh` (`makh`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `mahh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `masohd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `maloai` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
