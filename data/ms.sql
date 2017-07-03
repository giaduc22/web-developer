-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2017 at 06:50 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ms`
--

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `DonHang` (
  `id` int(11) NOT NULL,
  `sanpham` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `ghichu` text NOT NULL,
  `soluong` int(11) NOT NULL,
  `giaban` double NOT NULL,
  `trangthai` int(11) NOT NULL,
  `diachi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE `LoaiSanPham` (
  `maloai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `LoaiSanPham` (`maloai`, `ten`) VALUES
('l1', 'Son Môi'),
('l2', 'Tắm trắng'),
('l3', 'Bộ mỹ phẩm'),
('l4', 'Phấn nền - Phấn phủ'),
('l5', 'Chì cọ'),
('l6', 'Nước hoa'),
('l7', 'Dưỡng da');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `SanPham` (
  `mahang` int(20) NOT NULL,
  `tenhang` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giatien` int(20) NOT NULL,
  `slogan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maloai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sogr1sp` int(5) NOT NULL,
  `chitiet` text COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `SanPham` (`mahang`, `tenhang`, `alias`, `giatien`, `slogan`, `maloai`, `sogr1sp`, `chitiet`, `hinhanh`) VALUES
(64, 'SON THẠCH BAMILA', '', 59000, '						Tinh chất trái cây và dưỡng chất giúp đôi môi trở nên mềm mại, đàn hồi hơn. ', 'l1', 300, '										Với công thức giữ ẩm, lên màu nhanh, không lem, không trôi, duy trì màu sắc lâu dài cho môi thích hợp dùng khi đi chơi, dạo phố, du lịch mang đến vẻ đẹp cuốn hút và sang trọng cho bạn gái mỗi khi xuất hiện	  	  ', 'home-1461175475.jpg'),
(67, 'kem tắm trăng ngọc trai', '', 119000, 'ự tin tỏa sáng cùng làn da trắng hồng rạng rỡ, tự nhiên với KEM TẮM CÁT SIÊU TRẮNG', 'l2', 300, 'Nhập khẩu nguyên phụ liệu từ Thái Lan, đóng gói thành phẩm tại Công ty TNHH SXTM Nghĩa Phong.				  	  ', 'home-1461175648.jpg'),
(68, 'SON MAC DITA VON TEESE', '', 100000, 'Son Mac phiên bản đặc biệt Dita Von Teese. Dòng son môi rất nổi tiếng với những gam màu đỏ ửng cà chua sinh động thú vị giúp thấm sâu, làm mềm, tăng hiệu quả giữ ẩm cho môi và độ bền màu.', 'l1', 100, 'Màu son đỏ quyến rũ mang vẻ đẹp mê hoặc cùng thân hình bốc lửa của Dita Von Teese dù đã qua tuổi 40 nhưng vẫn khiến đàn ông phải xuýt xoa mỗi khi nhìn ngắm. Giờ đây, các cô gái đã có thể tô màu son đỏ của Dita Von Teese để cảm nhận được sự quyến rũ của một quý cô thực sự.', 'home-1461174234.jpg'),
(69, 'SON DƯỠNG MÔI LIP ON LIP GLOSS', '', 50000, 'Màu sắc lấp lánh thời trang, công thức đặc biệt giữ cho môi luôn mềm mại, bóng bẩy tạo nét môi trong mọng tự nhiên, óng ánh.', 'l1', 100, 'Dòng mỹ phẩm cao cấp chiết xuất từ các thành phần thiên nhiên như Vitamin E, Jojoba Oil, Aloe Vera cùng chất chống nắng nhẹ nhàng nuôi dưỡng và bảo vệ làn môi khỏi ánh nắng mặt trời, cho đôi môi luôn mềm mại, mịn màng và tràn đầy sức sống', 'home-1461174388.JPG'),
(70, 'SON MÔI NỮ HOÀNG MFN', '', 100000, 'Son môi nữ hoàng MFN Hàn Quốc cực đẹp. Kiểu dáng vô cùng độc đáo, Màu sắc trẻ trung cùng độ bám lâu, không bị trôi suốt thời gian dài sử dụng thể hiện được cá tính, đẳng cấp của người dùng.', 'l1', 100, 'Thiết kế cây son môi mang hình viên đạn với một đầu nhọn, màu đen hoặc vàng kim và phần nắp bằng kim loại kết hợp giữa vàng và bạc. Một điểm độc đáo là chỉ cần luồn một sợi dây qua lỗ nhỏ trên nắp là bạn có thể đeo như dây chuyền, vừa có một món trang sức tuyệt đẹp vừa dễ dàng mang theo khi cần.', 'home-1461174576.JPG'),
(71, 'SON MÔI MAC MATTE LIPSTICK', '', 200000, 'Son môi cao cấp MAC Matte Lipstick. Cấu trúc dễ thoa, bám vào môi, độ dưỡng tương đối giúp phái đẹp tự tin thể hiện cá tính thật nổi bật', 'l1', 200, 'Loại son chuyên nghiệp với nhiều màu sắc trung thực, ấn tượng thích hợp cho mọi lứa tuổi. Với Son môi M.A.C Matte Lipstick bạn sẽ có một đôi môi gợi cảm, quyến rũ say đắm lòng người.', 'home-1461174719.jpg'),
(72, 'SON NƯỚC CUSHION TINT MCQUEEN ', '', 150000, 'Son nước Cushion Tint Mcqueen Lip And Cheek. Kiểu dáng đáng yêu và lạ mắt, là dòng son có chất kem lì, mùi thơm như kẹo ngọt.', 'l1', 100, 'huộc dòng mỹ phẩm trang điểm cao cấp cung cấp độ ẩm thiết yếu cho da môi nhạy cảm, hạn chế tối đa hiện tượng bong tróc hay khô môi, đôi môi trưở nên căng mướt, mọng nước đầy sức sống thu hút mọi người.', 'home-1461174864.jpg'),
(73, 'ON THỎI LACVERT ESSANCE PETAL ', '', 100000, 'Son thỏi lacvert essance Petal lip cao cấp. Làm mềm môi hiệu quả, tái tạo sức sống cho đôi môi giúp thấm sâu, làm mềm, tăng hiệu quả giữ ẩm cho môi và độ bền màu', 'l1', 50, 'Sắc màu ngọt ngào đầy ấm áp sử dụng lúc cùng nhau gặp gỡ người thân, gia đình mang lại nét cá tính cho bạn gái', 'home-1461174952.jpg'),
(74, 'SON THỎI DOG FESTIVAL LOVE MAR', '', 90000, 'Son thỏi DOG Festival love mark mang đến đôi môi căng mọng, bóng bẩy mà còn bám màu cao, không bị phai khi ăn uống', 'l1', 70, 'Son thỏi DOG Festival love mark với công thức đặc biệt từ vitamin A & E cùng dưỡng chất làm mềm môi kết hợp với thành phần khoáng chất và mùi hương dịu nhẹ, giúp thấm sâu, làm mềm, tăng hiệu quả giữ ẩm cho môi và độ bền màu', 'home-1461175030.jpg'),
(75, 'SON THỎI TUTU MOUSSE', '', 60000, 'Son thỏi Tutu mousse dạng bút có thể vặn lên vặn xuống, với thiết kế thanh mảnh hỗ trợ tô son đến tận những khu vực sát viền môi hay khóe miệng một cách dễ dàng, giúp đôi môi của bạn trở nên mịn màng.', 'l1', 90, ' Sản phẩm có tác dụng dưỡng môi, chống tia UV, chống thâm, nhăn môi.', 'home-1461175101.jpg'),
(76, 'SON KEM MINI 3CE', '', 120000, 'Son dạng kem với công thức làm từ khoáng chất tự nhiên và tinh chất làm mềm cung cấp độ ẩm cho môi, giúp môi đẹp như lụa.', 'l1', 100, ' Chất son mịn và mượt mà, không bóng lên môi giữ màu lâu và giữ ẩm cho môi', 'home-1461175178.jpg'),
(77, 'SON NƯỚC THE FACE SHOP HEART S', '', 160000, 'Son nước cao cấp The Face Shop Heart Seductive chứa chất kem cực mịn, thấm rất nhanh cho bạn một làn môi bóng đẹp quyến rũ.', 'l1', 70, 'Thành phần của son: Vitamin A, C, E, tinh chất sữa ..... Nhờ các dưỡng chất đặc biệt này mà khi tô, bạn không còn sợ bị khô hay son phai màu.', 'home-1461175249.jpg'),
(78, 'SON THỎI DOG MOIST LIPSTICK', '', 100000, 'Son thỏi DOG moist lipstick. Làm mềm môi hiệu quả, tái tạo sức sống cho đôi môi.', 'l1', 100, 'Thiết kế sang trọng, màu sắc rực rỡ, lên màu chuẩn và bền màu dùng để sử dụng khi đi chơi hay dạo phố với bạn bè giú.p bạn yên tâm làm đẹp cho đôi môi mà vẫn không sợ ảnh hưởng đến sức khỏe của mình', 'home-1461175318.JPG'),
(79, 'SON GIÓ DIOR', '', 60000, 'on gió Dior tươi tắn, quyến rũ cho bạn phong cách quý phái và rạng rỡ.', 'l1', 50, 'Hương thơm nhẹ nhàng, quyến rũ. Độ bền cao, lâu phai.', 'home-1461175391.jpg'),
(80, 'TẮM TRẮNG LINH CHI LÔ HỘI', '', 1000000, '			thành phần dịu nhẹ cùng chiết xuất thiên nhiên giúp da mềm mại và trắng sáng tự nhiên cùng hương thơm quyến rũ nồng nàn.	  ', 'l2', 200, '			Công thức đột phá, phù hợp mọi làn da cho da căng mịn và sáng khỏe hơn chắc chắn bạn gái sẽ hoàn toàn hài lòng về chất lượng và hiệu quả mà sản phẩm mang lại	  ', 'home-1461175732.JPG'),
(81, 'SỮA TẮM NƯỚC HOA COCO PERFUME', '', 190000, 'thành phần nguyên liệu chiết xuất từ hoa hồng cao cấp, giúp làm sạch da, lấy bụi bẩn trên da và dưỡng da trắng hồng mịn màng.', 'l2', 200, 'Cung cấp độ ẩm và dưỡng chất thiết yếu cho làn da giúp bảo vệ và trắng da một cách hiệu quả nhất biến giấc mơ sở hữu làn da trắng nõn nà của bạn sẽ trở thành hiện thực', 'home-1461175839.jpg'),
(82, 'SỮA NON TRẮNG DA HELLO KITTY', '', 200000, 'Giúp chăm sóc và nuôi dưỡng da toàn thân mặt một cách tự nhiên nhất.', 'l2', 80, ' Sản phẩm chứa nhiều dưỡng chất dưỡng da, ngăn ngừa thâm da, se khít lỗ chân lông, chống lão hóa, mang lại làn da trắng hồng tự nhiên.', 'home-1461175928.jpg'),
(83, 'BỘ TẮM TRẮNG SNOW WHITE BODY W', '', 200000, 'Bộ tắm trắng toàn thân Snow White Body White Shower ngăn ngừa mụn hiệu quả, dưỡng trắng da, tạo sự thu hút, lôi cuốn mọi ánh nhìn xung quanh', 'l2', 100, 'Bộ tắm trắng toàn thân Snow White Body White Shower với công nghệ tiên tiến, thành phần nguyên liệu chiết xuất từ thiên nhiên đem đến hiệu quả làm trắng không thua kém bất cứ loại kem trắng da toàn thân cao cấp nào ', 'home-1461176029.jpg'),
(84, 'TẮM TRẮNG TOÀN THÂN HELLO KITT', '', 100000, 'Tắm trắng toàn thân Hello Kitty Coffee với thành phần chính là L- Gluthione và caffein, giúp dưỡng da, chống nắng', 'l2', 100, 'Kem có tác dụng nuôi dưỡng tế bào da, loại bỏ các tế bào lão hóa, kích thích quá trình hình thành tế bào mới non trẻ, se khít lỗ chân lông, giúp làn da sáng hồng tự nhiên, cải thiện sắc tố cho da trở nên rạng rỡ, đầy sức sống.', 'home-1461176123.JPG'),
(85, 'SỮA TẮM TRẮNG MUỐI KHOÁNG ABON', '', 20000, 'Chất dưỡng trắng chiết xuất từ thiên nhiên, sẽ mang đến cho bạn làn da trắng hồng rạng rỡ.', 'l2', 100, 'Tẩy sạch bụi bẩn, tế bào chết,  xoá mờ vết thâm ở các vùng như đầu gối, nách, vùng bikini. Protein từ sữa sẽ nuôi dưỡng làn da trở nên mềm mại và mịn màng, trắng hồng rạng rỡ.', 'home-1461176191.jpg'),
(86, 'SỮA NON TRẮNG DA QUALU LALU', '', 90000, 'Với sữa tắm tinh chất sữa non QUALU LALU làm trắng da, mịn da, thu hẹp lỗ chân lông, liền da, cho làn da mịn màng mà không gây kích ứng da.', 'l2', 100, 'Sữa tắm tinh chất sữa non QUALU LALU Chocolate làm trắng da, mịn da, thu hẹp lỗ chân lông, liền da, cho làn da mịn màng.', 'home-1461176272.jpg'),
(87, 'BỘT TẮM TRẮNG HANAMI HƯƠNG KHỔ', '', 90000, 'Bột tắm trắng HANAMI hương khổ qua Collagen 340g (bộ 5 gói) với chiết xuất tinh chất thiên nhiên, có mùi thơm dễ chịu không hôi chuyên dùng trong thẩm mỹ viện SPA mang lại làn da mịn màng, trắng không vàng lông.', 'l2', 100, 'Sản phẩm cho các bạn gái phong cách trang điểm nhẹ nhàng, tự nhiên lại không có tỳ vết, trong mịn mà vẫn che được toàn bộ khuyết điểm trên gương mặt.', 'home-1461176342.jpg'),
(88, 'TẮM TRẮNG SIÊU TỐC QUALU LALU ', '', 20000, ' Sản phẩm tắm ủ trắng đang rất Hot cho những bạn có làn da không đều màu,da ngâm,hay thường xuyên xài kem mà lâu trắng', 'l2', 100, 'Tắm trắng siêu tốc Qualu Lalu Thái Lan ủ trắng siêu tốc trong 9 phút, ko cần đợi lâu 20 - 30 phút như các loại ủ thông thường, các nàng sẽ sở hữu ngay làn da trắng tức thì', 'home-1461176411.jpg'),
(89, 'BỘ MỸ PHẨM 6 MÓN ESSANCE', '', 200000, 'trọn bộ mỹ phẩm cao cấp của Essance đem đến cho bạn gái vẻ đẹp hoàn hảo đến từng centimét', 'l3', 200, 'Bộ trang điểm essance thuộc dòng mỹ phẩm hàn quốc chính hãng giúp bạn gái trang điểm và làm đẹp dễ dàng và tiện lợi hơn.', 'home-1461176486.jpg'),
(90, 'BỘ 4 MỸ PHẨM LÀM ĐẸP MAYBELINE', '', 200000, 'Bộ 4 mỹ phẩm làm đẹp Maybeline với phấn trang điểm, masscara, phấn má hồng và kem nền BB giúp cho gương mặt xinh đẹp, cho bạn gái trang điểm thật tự nhiên và hoàn hảo. ', 'l3', 200, 'Bộ sản phẩm là sự kết hợp giữa trình độ khoa học hiện đại và những thành phần chiết xuất từ thiên nhiên. Đem đến vẻ ngoài tươi trẻ, sành điệu và đẳng cấp cho phái đẹp.', 'home-1461176558.jpg'),
(91, 'BỘ MỸ PHẨM CHANEL 9 MÓN', '', 400000, ' Thiết kế đầy đủ các mỹ phẩm trang điểm cao cấp, màu sắc hiện đại cực chuẩn cho bạn luôn xuất hiện rạng ngời và thu hút.', 'l3', 300, 'Sản phẩm mỹ phẩm cao cấp phổ biến và ưa chuộng trên khắp thế giới. Tông màu tự nhiên mang lại cho bạn gái vẻ đẹp rạng rỡ tươi tắn suốt cả ngày', 'home-1461176613.JPG'),
(92, 'BỘ TRANG ĐIỂM CAVIER BEAUTY QU', '', 100000, 'Thiết kế độc đáo, kiểu dáng nhỏ gọn là phụ kiện trang điểm không thể thiếu dành cho phái đẹp.', 'l3', 300, 'Thiết kế trẻ trung và các màu sắc hoàn hảo, bộ phấn với đầy đủ những gì bạn cần để biến tấu cho khuôn mặt lung lịnh tỏa sáng ngay tức khắc!', 'home-1461176669.jpg'),
(93, 'BỘ TRANG ĐIỂM ADS', '', 200000, 'Bộ trang điểm ADS cao cấp gồm 24 màu mắt, 4 màu má, 3 màu phấn nền và 8 màu son môi nổi bật', 'l3', 100, 'Bộ sản phẩm có 3 tầng bao gồm: 24 màu phấn mắt, 3 màu phấn phủ, phấn nền, 4 màu phấn má hồng, 8 màu son, cọ trang điểm, bông phấn và gương.', 'home-1461176733.jpg'),
(94, 'BỘ KIT MINI TẨY TRANG SIÊU SẠC', '', 200000, 'Nhẹ nhàng loại bỏ lớp trang điểm một cách êm dịu, giúp làn da thật sáng sạch và cấp dưỡng ẩm hiệu quả', 'l3', 200, 'Bộ kit mini tẩy trang siêu sạch Laneige Hàn Quốc. Bộ kit tẩy trang giúp làn da thật sáng sạch và cấp dưỡng ẩm hiệu quả! Nhẹ nhàng loại bỏ lớp trang điểm một cách êm dịu, cung cấp độ ẩm cho da trong lúc tẩy trang và duy trì lớp màng dưỡng, giúp làn da luôn mềm mịn trắng sáng.', 'home-1461176794.jpg'),
(95, 'BỘ KIT TRANG ĐIỂM MAKE-UP REVL', '', 150000, 'Thiết kế tiện lợi, chất liệu cao cấp giúp bạn gái dễ dàng trang điểm mọi nơi, mọi lúc.', 'l3', 100, 'Kiểu dáng sang trọng, thanh lịch, hợp thời trang, thiết kế các ngăn độc đáo, kèm gương lớn tiện lợi cho việc trang điểm của bạn, dễ dàng mang theo bên mình', 'home-1461176856.JPG'),
(96, 'BỘ 3 SẢN PHẨM MAYBELLINE CAO C', '', 150000, 'Cho bạn gái vẻ ngoài tươi trẻ, sành điệu và đẳng cấp nhờ bộ sản phẩm trang điểm cực chuyên nghiệp.', 'l3', 150, ' Bộ 3 mỹ phẩm trang điểm Maybelline cao cấp đem đến cho bạn gái nét đẹp hoàn hảo', 'home-1461176916.jpg'),
(97, 'MAYBELLINE COLOSSAL EXTREME CA', '', 109000, 'Bộ sản phẩm Maybelline Colossal Extreme cao cấp 3 in 1 tạo cơ hội cho phụ nữ khẳng định chính mình, khám phá những vẻ đẹp mới, thể hiện sự sáng tạo và cá tính', 'l3', 190, 'Bộ sản phẩm Maybelline Colossal Extreme cao cấp 3 in 1 gồm: Mascara Maybelline Colossal Go Extreme, kẻ mắt nước Maybelline Colossal Go Extreme, Phấn phủ Maybelline Colossal Go Extreme', 'home-1461176982.jpg'),
(98, 'BỘ KIT TRANG ĐIỂM MAC 78 MÀU', '', 200000, 'Bộ kit trang điểm gồm 78 màu mắt kèm 2 cọ và gương ', 'l3', 100, 'Bộ kit trag điểm  78 màu với kiểu dáng sang trọng, thanh lịch, hợp thời trang gồm: Bộ kit trang điểm gồm 78 màu mắt kèm 2 cọ,  gương trang điểm', 'home-1461177043.jpg'),
(99, 'PHẤN TƯƠI HERA UV MIST CUSHION', '', 90000, 'Sản phẩm cao cấp với tông màu dành cho sắc da tự nhiên giúp làm sáng da, cung cấp độ ẩm, lâu trôi đến 12h và hiệu quả làm mát sảng khoái mỗi khi sử dụng mang lại cho bạn gái vẻ xinh đẹp và quyến rũ hơn.', 'l4', 100, 'Giúp đem lại lớp trang điểm tự nhiên, rạng rỡ như make up chuyên nghiệp, đồng thời cung cấp độ ẩm, bảo vệ da khỏi tia cực tím với spf 50+pa+++.', 'home-1461177140.JPG'),
(100, 'PHẤN NỀN TRANG ĐIỂM NYN POWDER', '', 70000, 'hấn nền trang điểm NYN Powder có chức năng phủ trang điểm kiểm soát dầu nhờn và che khuyết điểm giúp cho làn da tươi tắn và khô thoáng suốt cả ngày. ', 'l4', 100, ' Phấn nền trang điểm NYN Powder có khả năng che phủ hoàn hảo các khuyết điểm trên da. Với 2 công dụng tiện lợi, kết cấu hạt phấn cực mịn và giàu độ ẩm giúp duy trì sự ẩm mượt và mịn màng cho da suốt cả ngày.', 'home-1461177185.jpg'),
(101, 'PHẤN NÉN TẠO KHỐI HIGHLIGHT WO', '', 20000, 'Phấn nén tạo khối highlight wod wod giúp bạn khắc phục các nhược điểm hình dáng khuôn mặt, cũng như tạo độ sắc nét làm nổi bật những đường nét của gương mặt.', 'l4', 100, 'Dòng phấn phủ highlight cao cấp được chiết xuất từ những hạt phấn siêu mịn mang đến một lớp phấn mỏng mịn, tự nhiên như không hề trang điểm.', 'home-1461177276.jpg'),
(102, 'PHẤN PHỦ MAYBELINE', '', 90000, 'Cấu trúc hạt phấn siêu mịn thấm dầu, loại bỏ sự bóng nhờn trên da cho cảm giác thoáng nhẹ dễ chịu, làn da đẹp tự nhiên không tì vết', 'l4', 100, ' Các sản phẩm Maybeline là sự kết hợp giữa trình độ khoa học kỹ thuật hiện đại và những thành phần chiết xuất từ thiên nhiên trong lành.', 'home-1461177329.jpg'),
(103, 'PHẤN NỀN TRANG ĐIỂM LOREAL 5 T', '', 100000, 'Không chỉ cho bạn lớp trang điểm mịn màng mà còn tăng cường khả năng kiểm soát bã nhờn trên da và giữ cho bề mặt da luôn thông thoáng', 'l4', 10, 'Hộp phấn thuộc dòng mỹ phẩm cao cấp độc đáo với màu sắc cực kỳ cá tính thích hợp sử dụng khi cùng nhau gặp gỡ bạn bè, người thân cho bạn gái thêm tươi tắn lung linh rạng ngời.	  	  ', 'home-1461177507.jpg'),
(104, 'PHẤN TRANG ĐIỂM MỊN DA ESSANCE', '', 80000, 'Sản phẩm phấn trang điểm mịn da Essance SILKY TWO WAY CAKE 13G giúp các bạn gái sẽ trở nên rạng rỡ hơn với làn da tươi tắn, hồng hào.', 'l4', 100, 'rang điểm đẹp tự nhiên, đem lại cho da cảm giác mịn màng, thoải mái mang sức sống thiên nhiên từ những hương hoa quý giá', 'home-1461177621.jpg'),
(105, 'PHẤN TRANG ĐIỂM SIÊU MỊN MAYBE', '', 100000, 'Hạt phấn cực mịn, tinh chất Silk Essence và chiết xuất rễ dâu tằm cho làn da sáng mịn màng suốt 12 giờ.', 'l4', 20, 'Để có lớp nền đẹp, làn da cần được vệ sinh sạch và dưỡng ẩm hàng ngày, ngoài ra nên tẩy tế bào chết mỗi tuần từ 1 - 2 lần. ', 'home-1461177679.jpg'),
(106, 'PHẤN TƯƠI HÀN QUỐC CAO CẤP VER', '', 180000, 'Che phủ tốt cho da trắng mịn tức thì một cách tự nhiên.', 'l4', 100, 'Phấn không có chất bảo quản, phấn mềm ấn tay vào tạo độ lún nhưng không hề ướt, nếu lỡ làm rơi hộp phấn thì hoàn toàn yên tâm vì chỉ cần dùng tay ấn nhẹ là phấn lại ăn khớp vào với nhau nhé. Sau khi đánh 1 lúc phấn sẽ tiệp vào da, nhìn cực tự nhiên trong suốt như không', 'home-1461177771.jpg'),
(107, 'PHẤN PHỦ MISTINE WINGS SPF 25 ', '', 100000, 'Chiết xuất từ tinh chất thiên nhiên dưỡng da mềm mịn, đảm bảo an toàn và thích hợp cho mọi loại da.', 'l4', 100, 'lớp phủ giúp cho làn da sau khi được trang điểm kỹ bằng kem nền và che khuyết điểm trở nên thật sự hoàn thiện. Bột phấn siêu nhẹ sẽ giữ cho vẻ đẹp tự nhiên cả ngày.', 'home-1461177888.JPG'),
(108, 'BỘ PHẤN TRANG ĐIỂM MINI VÀ BB ', '', 200000, 'Bộ trang điểm hoàn hảo với khả năng che khuyết điểm, lỗ chân lông cực hiệu quả đem đến cho bạn gái làn da trắng sáng trên cả mong đợi.', 'l4', 100, 'Được chiết xuất từ những thành phần tự nhiên đem đến cho bạn gái làn da trắng sáng trên cả mong đợi', 'home-1461177942.jpg'),
(109, 'BỘ CỌ TRANG ĐIỂM 12 CÂY MAC', '', 180000, 'Đầu lông siêu mềm mịn, đứng dáng, không làm hư mỹ phẩm.', 'l5', 100, 'Bộ cọ trang điểm cá nhân tan rất đều và dịu nhẹ với làn da của bạn, góp phần chăm sóc làn da nhạy cảm. Là bộ mỹ phẩm cao cấp thích hợp cho các bạn học trang điểm chuyên sâu hay sử dụng hàng ngày.', 'home-1461178047.jpg'),
(110, 'BỘ CỌ TRANG ĐIỂM 12 CÂY NAKED', '', 130000, 'chất liệu nhựa cứng ánh kim rất đẹp cầm khá đầm tay cảm giác như các loại cọ cán gỗ cao cấp.', 'l5', 150, 'Thiết kế đa dạng gồm nhiều loại cọ chuyên dụng, đầu cọ mềm mại cán tay cầm thoải mái giúp bạn giá thực hiện đầy đủ các bước make up', 'home-1461178104.jpg'),
(111, 'BỘ CỌ TRANG ĐIỂM 16 CÂY', '', 500000, 'Bộ cọ trang điểm 16 cây cao cấp, thiết kế chuyên nghiệp, lông cọ mềm với tone màu cực nổi bật.', 'l5', 150, 'Bộ cọ trang điểm 16 cây cao cấp được làm từ sợi nhân tạo, có chất lượng chuyên nghiệp giống như những dòng loại cọ trang điểm cao cấp.', 'home-1461178168.jpg'),
(112, 'BỘ CỌ TRANG ĐIỂM 7 CÂY HỘP DOR', '', 150000, 'Bộ cọ trang điểm 7 cây hộp doremon xinh xắn trong hộp sắt, lông cọ mềm mịn, khá đầy đủ những cọ chức năng cơ bản cho trang điểm cá nhân', 'l5', 170, 'Hộp cọ thiết kế nhỏ gọn dễ dàng bỏ túi mang theo đi học, đi làm, đi chơi, du lịch,...', 'home-1461178238.jpg'),
(113, 'BÚT LÔNG KẺ MẮT NƯỚC 3CE', '', 90000, 'Là dụng cụ kẻ mắt nước đẹp được làm từ nguyên liệu cao cấp, đảm bảo không gây ra bất cứ kích ứng nào cho mắt hoặc da của bạn.', 'l5', 120, 'Sửa khuyết điểm và làm cho mắt thêm to tròn, long lanh. Phù hợp với nhiều loại mỹ phẩm cao cấp khác nhau.', 'home-1461178314.jpg'),
(114, 'BÚT KẺ MẮT MAC 2 ĐẦU', '', 10000, 'Sản phẩm chiết xuất thiên nhiên nên hoàn toàn không gây kích ứng da. Phù hợp với nhiều loại mỹ phẩm cao cấp', 'l5', 80, 'Công dụng:\r\n+ Tạo dáng chuẩn cho đôi mắt.\r\n+ Làm dài đuôi mi mắt.\r\n+ Nhấn mạnh rõ đường mi mắt.\r\n+ Có thể sửa những khuyết điểm của hình dáng đôi mắt.\r\n+ Làm dày đôi mi.\r\n+ Tạo chiều sâu cho đôi mắt.', 'home-1461178367.jpg'),
(115, 'BỘ 5 CỌ TRANG ĐIỂM TRẮNG ĐEN', '', 69000, 'Bộ 5 cọ trang điểm trắng đen có 5 cây tiện dụng cho từng công đoạn trang điểm khác nhau.Bộ cọ trang điểm cao cấp được làm từ loại lông tự nhiên có đặc tính mềm mại, độ đàn hồi tốt, tạo cảm giác dễ chịu khi tiếp xúc với da, dễ ăn phấn.', 'l1', 80, 'Cọ đánh má hồng: cọ dùng để phủ phấn má hồng tự nhiên cho gò má.Cọ có đầu lông tròn, to, lấy ít phấn cho vẻ đẹp ửng hồng của gò má thật tự nhiên. Nhúng cọ vào phấn, chấm lên vùng xương cao nhất của gò má và tán đều theo - hình tròn về phía thái dương. Có thể tạo khối hình khác tùy theo loại gương mặt.', 'home-1461178418.jpg'),
(116, 'CHÌ KẺ MÀY NGANG THEFACESHOP', '', 70000, 'Bộ cọ trang điểm được thiết kế rất đơn giản, thân bằng nhựa màu nâu đậm có 2 nắp ở 2 đầu. Đầu thứ nhất là đầu kẻ mày ngang, khi xài đến đâu thì vặn ra đến đó. Đầu thứ 2 là cọ chải mày để tán màu ra cho đều', 'l5', 90, 'Thiết kế giúp kẻ mày ngang rất dễ dàng, tiện lợi, bạn chỉ cần cầm chì xoay ngang kẻ 2/3 chân mày và xoay dọc lại để kẻ 1/3 đuôi chân mày.', 'home-1461178483.jpg'),
(117, 'BÚT LÔNG KẺ MẮT NƯỚC 2 ĐẦU 3GS', '', 80000, 'Thiết kế 2 đầu nổi bật với một đầu bút lông và 1 đầu in trái tim giúp bạn tô điểm cho đôi mắt thêm \"hút hồn\"', 'l5', 90, 'Dễ vẽ, nét mảnh, mềm, nhanh khô và đặc biệt không lem Sản phẩm độc đáo với thiết kế 01 đầu là bút kẻ mắt nước, 01 đầu dùng để in hình trái tim cực độc đáo', 'home-1461178536.jpg'),
(118, 'CHÌ KẺ MẮT NƯỚC MAYBELLINE COL', '', 80000, 'Bổ sung thành phần dưỡng chất cho da, khả năng chịu nước cao, bền màu tới 6 giờ', 'l5', 80, 'Là bút kẻ mắt nước đẹp với kiểu dáng thon nhỏ vừa vặn và cầm rất chắc tay, giúp bạn sử dụng dễ dàng và nhanh chóng. ', 'home-1461178612.jpg'),
(119, 'CHÌ KẺ CHÂN MÀY DRAWING 2 ĐẦU ', '', 70000, 'Chì kẻ chân mày Drawing 2 đầu Etude house thiết kế như chiếc bút nhỏ với 2 đầu: 1 đầu là chì với đầu nhọn dễ dàng vẽ nét mày thật tự nhiên và 1 đầu là chuốt mày để tạo dáng đôi mày vào nếp', 'l5', 68, ' Không trôi lem, chống thấm nước giúp duy trì hiệu quả trang điểm lâu dài.', 'home-1461178674.jpg'),
(120, 'BỘ 5 CHAI NƯỚC HOA MINI DIOR', '', 260000, 'Bộ 5 chai nước hoa mini Dior Les Parfums cao cấp gồm: Nước hoa Dior Addict Shine, Miss Dior, Jadore, Addict2.', 'l6', 300, 'Là sản phẩm của Dior - Thương hiệu nước hoa nổi tiếng, với nhiều sản phẩm nước hoa chinh phục người dùng ở khắp nơi trên thế giới.', 'home-1461178770.jpg'),
(121, 'NƯỚC HOA NAM FERRARI RED FOR M', '', 150000, 'hương thơm tươi mát và mạnh mẽ dành cho nam với hỗn hợp hương gỗ, tinh dầu quả cam, cam hương và cỏ roi ngựa.', 'l6', 250, 'Mùi hương: Hương gỗ, Cam, Cam hương, Cỏ roi ngựa.', 'home-1461178838.jpg'),
(122, 'NƯỚC HOA NỮ RALPH LAUREN POLO ', '', 210000, 'Hương thơm ẩn chứa sự quyến rũ, lôi cuốn, nhưng rất dịu dàng, nữ tính góp phần tạo nên phong cách thời trang sành điệu cho riêng bạn', 'l6', 100, 'Hương thơm mạnh mẽ nhưng không kém phần tinh tế là biểu tượng của tình yêu dịu dàng, đầy say mê mang đến sự tươi mát với hương thơm trẻ trung, quyến rũ', 'home-1461178905.jpg'),
(123, 'BỘ 4 NƯỚC HOA CHANEL MINI 5ML', '', 160000, 'Bộ 4 nước hoa Chanel mini 5ml. Mùi hương thích hợp cho nhiều đối tượng, đặc biệt là những cô nàng vui tính, phóng khoáng và tự tin', 'l6', 100, 'Chanel là hãng nước hoa lâu đời và danh tiếng trên thế giới. Chanel N°5 là dòng nước hoa bán chạy nhất thế giới và trở thành biểu tượng về danh tiếng và sự sáng tạo của Chanel.', 'home-1461178964.jpg'),
(124, 'NƯỚC HOA NỮ BVL AQUA DIVINA 65', '', 190000, '			Siêu phẩm Aqva Divina được sinh ra từ bọt biển và với những ngọn gió thổi vào bờ như tặng phẩm của thần Mặt Trời gửi đến con người	  ', 'l6', 160, '			Divina là chai nước hoa cho nữ với cảm hứng từ vẻ đẹp của thần Vệ Nữ, một vị thần sở hữu nhan sắc và sự quyến rũ đầy mê hoặc trong truyền thuyết. 	  ', 'home-1461179016.jpg'),
(125, 'NƯỚC HOA NAM BVLGARI BVL POUR ', '', 100000, 'Nước hoa nam BVLGARI BVL Pour Homme EDT 100ml. Thiết kế mạnh mẽ, cá tính cùng hương thơm sang trọng, nam tính', 'l6', 150, 'Thiết kế dòng nước hoa cho nam sành điệu nhưng không kém phần nam tính hương thơm dành cho người đàn ông mạnh mẽ, đam mê và luôn muốn là người dẫn đường cho chính bản thân mình tạo cảm hứng sống mới và sáng tạo cho riêng mình', 'home-1461179094.jpg'),
(126, 'NƯỚC HOA NỮ SÌ GIORGIO ARMANI ', '', 190000, 'Hương thơm mạnh mẽ nhưng không kém phần tinh tế là sự lựa chọn hoàn hảo của những cô nàng yêu sự nhẹ nhàng, cổ điển mang đến cho bạn sức hấp dẫn đầy ma lực với người đối diện', 'l6', 170, 'Hương thơm mang phong cách ấm áp, dễ chịu phù hợp sử dụng trong mọi hoàn cảnh sự lựa chọn thông minh, đem đến cho bạn một hương thơm quyến rũ và vô cùng lôi cuốn', 'home-1461179145.jpg'),
(127, 'NƯỚC HOA NỮ AMOUR LALIQUE 100M', '', 210000, 'Một mùi hương mềm mại và tươi mát bất ngờ thích hợp cho những bạn trẻ yêu thích nước hoa mang đến sự dịu dàng tràn đầy nữ tính', 'l6', 170, 'Thiết kế nhỏ gọn, thuận tiện sử dụng phù hợp để sử dụng trong những buổi tiệc hay những buổi gặp mặt bạn bè thân mật mang đến sự ấm áp, thân mật, đầy lôi cuốn cho bạn gái', 'home-1461179254.jpg'),
(128, 'NƯỚC HOA AVON BLUE FOR HIM 50M', '', 190000, 'Hương thơm Nước hoa Avon Blue for Him 50ML thể hiện một hình ảnh các chàng trai thành thị sành điệu và rất biết cách thể hiện mình, đặc biệt muốn tạo ấn tượng và thể hiện sức quyến rũ đối với nam giới.', 'l6', 160, 'Hương thơm Nước hoa Avon Blue for Him 50ML là sự kết hợp tuyệt vời của Oải hương, Xô thơm và Quýt. Hương thơm tươi mát, dễ chịu', 'home-1461179306.jpg'),
(129, ' NƯỚC HOA NAM CK BE 100ML', '', 170000, 'Nước hoa nam CK be 100ml rất thích hợp cho những ngày đông lạnh giá hay khi khí trời mát mẻ.', 'l6', 170, 'Nước hoa nam CK be 100ml mang mùi hương phảng phất, tạo cảm giác sạch sẽ, tươi mát và tinh tế.', 'home-1461179354.jpg'),
(130, 'KEM DƯỠNG THÁI LAN NAKED2 SPF5', '', 120000, 'Sản phẩm kem dưỡng da chiết xuất từ vitamin và khoáng chất chống lão hóa, tuyệt đối không có chất kích thích hoặc hóa chất gì, cảm thấy làn da của mình trắng mịn mát mẻ và hồng hào.', 'l7', 120, 'Kem không tẩy da mà cung cấp dưỡng chất nuôi dưỡng da ngoài ra kem còn tạo thành 1 lớp màng bao bọc da lại. Lớp màng này tan rất ít trong nước, thậm chí vừa bôi kem vừa tắm biển kem cũng trôi ít.', 'home-1461179493.jpg'),
(131, 'KEM CHỐNG NẮNG AVENE EAUTHERMA', '', 120000, 'Kem chống nắng Avene Eauthermale SPF 50. Chống nắng, chống thấm nước, chống ôxi hóa, giảm nhờn và làm dịu da.', 'l7', 140, 'Mỹ phẩm kem chống nắng an toàn từ Avène, một trong những thương hiệu chăm sóc da hàng đầu tại các hiệu thuốc của Pháp cũng như khắp châu Âu. Sản phẩm thích hợp cho mọi thành viên trong gia đình, mọi loại da, kể cả làn da khá nhạy cảm, dễ bị kích ứng.', 'home-1461179558.JPG'),
(132, 'BỘ DƯỠNG DA INNISFREE GREEN TE', '', 160000, 'Bộ dưỡng da Innisfree Green Tea Balancing. Sản phẩm mỹ phẩm cao cấp chuyên dành riêng cho da thường, da hỗn hợp thiên dầu & da mụn.', 'l7', 100, 'Sản phẩm dưỡng da mặt được sản xuất ngay tại cánh đồng trà xanh trên đảo Jeju, nơi khí hậu lý tưởng quanh năm, trà xanh được trồng, thu hoạch và thực hiện quy trình chiết xuất ngay tại trụ sở sản xuất của Innisfree trên đảo.', 'home-1461179629.jpg'),
(133, 'TUÝP TRANG ĐIỂM TRẮNG DA BODY ', '', 180000, 'Sản phẩm trang điểm dưỡng trắng da mới nhất của Hàn quốc đem đến cho bạn gái làn da trắng hồng, rạng rở chỉ trong một thời gian ngắn', 'l7', 160, 'Dùng mỗi ngày để đạt kết quả nhanh nhất. Sản phẩm chỉ sử dụng ngoài da, hiệu quả nhanh chóng sau lần đầu tiên sử dụng làn da của bạn lập tức cải thiện, trắng mịn và mềm mại hơn.', 'home-1461179723.jpg'),
(134, 'KEM DƯỠNG THỂ THÁI LAN NAKED4 ', '', 150000, 'Bổ sung tinh chất làm ẩm giúp cải thiện làn da khô trở nên giàu độ ẩm và mềm mại hơn', 'l7', 150, 'Mùi hương dễ chịu lưu lại suốt cả ngày. Có thể sử dụng cho mọi loại da, nên bôi vào buối sáng và buổi tối để đạt được hiệu quả dưỡng ẩm và dưỡng trắng tốt nhất.', 'home-1461179771.jpg'),
(135, 'KEM DƯỠNG TRẮNG HÀN QUỐC JOLAS', '', 150000, 'Sở hữu mùi hương nhẹ nhàng mang lại giây phút thư giãn thoải mái xua tan những căng thẳng và mệt mỏi sau mỗi lần sử dụng. ', 'l7', 160, 'Thành phần: Bột ngọc trai, tinh chất Colagen, tinh chất tế bào gốc, Tảo Spirulila, Chiết xuất dầu oliu, vitamin E, Vitamin C tinh khiết, vitamin A, tinh chất Omega 3, tinh chất nha đam, chất chống nắng.', 'home-1461179841.jpg'),
(136, 'KEM LOTION VELVET THÁI LAN', '', 180000, 'Kem lotion Velvet Thái Lan. Làm trắng da từ bên trong, nuôi dưỡng và tái tạo lại làn da xấu thành 1 làn da trắng khỏe, an', 'l7', 90, 'Là sản phẩm dưỡng trắng da cao cấp với chiết xuất từ cánh hoa Velvet và dầu Jojoba nuôi dưỡng cho làn da mềm mại tức thì và dài lâu.', 'home-1461179899.jpg'),
(137, 'DƯỠNG THỂ HELLO KITTY SPF70++', 'duong-the-hello-kitty-spf70-', 180000, '			Dưỡng thể Hello Kitty SPF70++. Với chỉ số chống nắng SPF 70 PA + + + , bạn không cần lo ngại da bị bắt nắng hay bị mẩn đỏ khi tiếp xúc trực tiếp dưới nắng.	  ', 'l7', 170, '			đẩy lùi các hắc tố melanin ra khỏi lỗ chân lông khiến da bạn trắng sáng dần lên từng ngày.	  ', 'home-1461179949.jpg'),
(139, 'KEM DƯỠNG TRẮNG TOÀN THÂN CHỐN', 'kem-duong-trang-toan-than-chon', 100000, '						Kem dưỡng trắng toàn thân chống nắng Linh Chi được chiết xuất từ 100% nấm Linh Chi, cam thảo và các nguyên liệu cao cấp từ Nhật Bản giúp dưỡng trắng da chống nắng toàn thân nhanh chóng và hiệu quả với làn da mềm mịn.	  	  ', 'l7', 170, '						Vì là chiết xuất từ Linh chi nên sẽ không có mùi thơm bằng những loại kem dưỡng thể khác (lúc đầu khi chưa sử dụng bạn sẽ ngửi thấy mùi lạ - mùi LINH CHI nhưng khi thoa vào da, sẽ không còn mùi đó nữa, thơm dịu - nhẹ.	  	  ', 'home-1461180088.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE `KhachHang` (
  `hoten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date DEFAULT NULL,
  `quequan` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quyen` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `KhachHang` (`hoten`, `ngaysinh`, `quequan`, `dienthoai`, `username`, `password`, `quyen`) VALUES
('Nguyễn Văn Hạnh', '1997-05-02', 'Hải Dương', '0123', 'admin', '98e3b8cd5cd05ea9b969396f0a591d6c', '1'),
('Nguyễn Văn Hạnh', '1997-05-02', 'Hải Dương', '0123', 'user', '98e3b8cd5cd05ea9b969396f0a591d6c', '0');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `donhang`
--
ALTER TABLE `DonHang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaisp`
--
ALTER TABLE `LoaiSanPham`
  ADD PRIMARY KEY (`maloai`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `SanPham`
  ADD PRIMARY KEY (`mahang`);

--
-- Indexes for table `thanhvien`
--
ALTER TABLE `KhachHang`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `DonHang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `SanPham`
  MODIFY `mahang` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
