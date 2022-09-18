-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 18, 2022 lúc 05:35 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Cơ sở dữ liệu: `ql_events`
--
CREATE DATABASE IF NOT EXISTS `ql_events` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `ql_events`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `event_infor`
--
-- Tạo: Th8 09, 2022 lúc 06:15 PM
--

DROP TABLE IF EXISTS `event_infor`;
CREATE TABLE `event_infor` (
  `EventID` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Event_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Event_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Start_time` date DEFAULT NULL,
  `Ending_time` date DEFAULT NULL,
  `gioihan_soluong_nguoi` tinyint(1) DEFAULT NULL,
  `SoLuong_nguoi_thamgia` bigint(20) DEFAULT NULL,
  `Event_sponsor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Event_taking` tinyint(1) DEFAULT NULL,
  `Event_done` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `event_infor`:
--

--
-- Đang đổ dữ liệu cho bảng `event_infor`
--

INSERT INTO `event_infor` (`EventID`, `Event_name`, `Event_description`, `Start_time`, `Ending_time`, `gioihan_soluong_nguoi`, `SoLuong_nguoi_thamgia`, `Event_sponsor`, `Event_taking`, `Event_done`) VALUES
('EVI10012330', 'HOI CHO CONG NGHE MAY TINH - ROBOT', '<p>Gioi thieu ve nhung anh chang Robot !!</p>\r\n<p>Duoc chinh tay cac nha ky su cong nghe cao den tu Vien Cong nghe Tri tue nhan tao nghien cuu va phat trien.</p>\r\n<p>Artificial intelligence (AI) is intelligence demonstrated by machines, as opposed to the natural intelligence displayed by animals including humans. AI research has been defined as the field of study of intelligent agents, which refers to any system that perceives its environment and takes actions that maximize its chance of achieving its goals.</p>', '2022-08-08', '2022-08-21', 1, 154887999, 'Ruby Fenrir sponsored the event', 0, 1),
('EVI10012331', 'HOI CHO COSPLAYER LAN THU 24', '<p>Cosplay, a portmanteau of \"costume play\", is an activity and performance art in which participants called cosplayers wear costumes and fashion accessories to represent a specific character.</p><p>Cosplayers often interact to create a subculture, and a broader use of the term \"cosplay\" applies to any costumed role-playing in venues apart from the stage. Any entity that lends itself to dramatic interpretation may be taken up as a subject. Favorite sources include anime, cartoons, comic books, manga, television series, and video games. The term is composed of the two aforementioned counterparts – costume and role play.</p>\r\n', '2022-08-07', '2022-08-21', 1, 154887999, 'Ruby Fenrir sponsored the event', 0, 1),
('EVI10012332', 'HOI THAO XAY DUNG KIEN TRUC DO THI MOI', '<p>If you’re considering self-building, renovating or improving an existing property, you may want to pay a visit to a show to get some ideas for your build. With so many suppliers and like-minded self-builders attending, shows are great opportunities to make connections and help you plan your project. As well as talking to other self-builders and learning from them, you can see the latest innovations the industry has to offer and how these could be applied to your future home.</p>', '2022-08-08', '2022-08-21', 0, 100000, 'Ruby Fenrir sponsored the event', 0, 1),
('EVI10012333', 'HOI CHO SACH', '<p>2019 Public Library Events & Book Sales Survey</p>\r\n<p>Every year, public libraries across the United States produce and host thousands of readings, literary festivals, book clubs, and other experiential events that directly connect local readers to books and authors.</p>', '2022-08-09', '2022-08-21', 1, 124564999, 'Ruby Fenrir sponsored the event', 0, 1),
('EVI10012334', 'HOI CHO COSPLAYER LAN THU 25', '<p>Cosplay, a portmanteau of \"costume play\", is an activity and performance art in which participants called cosplayers wear costumes and fashion accessories to represent a specific character.</p><p>Cosplayers often interact to create a subculture, and a broader use of the term \"cosplay\" applies to any costumed role-playing in venues apart from the stage. Any entity that lends itself to dramatic interpretation may be taken up as a subject. Favorite sources include anime, cartoons, comic books, manga, television series, and video games. The term is composed of the two aforementioned counterparts – costume and role play.</p>', '2022-08-11', '2022-08-21', 1, 145875999, 'Ruby Fenrir sponsored the event', 0, 1),
('EVI10012335', 'HOI CHO COSPLAYER LAN THU 26', '<p>Cosplay, a portmanteau of \"costume play\", is an activity and performance art in which participants called cosplayers wear costumes and fashion accessories to represent a specific character.</p><p>Cosplayers often interact to create a subculture, and a broader use of the term \"cosplay\" applies to any costumed role-playing in venues apart from the stage. Any entity that lends itself to dramatic interpretation may be taken up as a subject. Favorite sources include anime, cartoons, comic books, manga, television series, and video games. The term is composed of the two aforementioned counterparts – costume and role play.</p>', '2022-08-13', '2022-08-23', 1, 115488777, 'Ruby Fenrir sponsored the event', 0, 1),
('EVI10012336', 'HOI THAO DO GO MY NGHE - CONG NGHE 3D', '<p>If you’re considering self-building, renovating or improving an existing property, you may want to pay a visit to a show to get some ideas for your build. With so many suppliers and like-minded self-builders attending, shows are great opportunities to make connections and help you plan your project.</p>\r\n<p>Feeling inspired? If you\'d like to know how much it might cost to insure your self-build project, click below to get an online quote, or call us on 0800 031 8468.</p>\r\n', '2022-08-10', '2022-08-22', 0, 100000, 'Ruby Fenrir sponsored the event', 0, 1),
('EVI10012337', 'HOI CHO DO GO MY NGHE', '<p>If you’re considering self-building, renovating or improving an existing property, you may want to pay a visit to a show to get some ideas for your build. With so many suppliers and like-minded self-builders attending, shows are great opportunities to make connections and help you plan your project.</p>\r\n<p>Because of the ongoing COVID-19 situation, some shows are being cancelled or postponed. We do our best to keep this page up to date; please visit the show\'s website for the latest information.</p>', '2022-08-07', '2022-08-21', 0, 100000, 'Ruby Fenrir sponsored the event', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `event_sign_up`
--
-- Tạo: Th8 17, 2022 lúc 10:02 AM
--

DROP TABLE IF EXISTS `event_sign_up`;
CREATE TABLE `event_sign_up` (
  `Username` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EventID` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DieuKien_thamgia` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DaDu_dieukien` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `event_sign_up`:
--   `EventID`
--       `event_infor` -> `EventID`
--   `Username`
--       `infor_login_user` -> `Username`
--

--
-- Đang đổ dữ liệu cho bảng `event_sign_up`
--

INSERT INTO `event_sign_up` (`Username`, `EventID`, `DieuKien_thamgia`, `DaDu_dieukien`) VALUES
('user02', 'EVI10012331', 'Khong co dien kien bat buoc', 0),
('user02', 'EVI10012334', 'Khong co dien kien bat buoc', 0),
('user02', 'EVI10012335', 'Khong co dien kien bat buoc', 0),
('user03', 'EVI10012331', 'Khong co dien kien bat buoc', 0),
('user03', 'EVI10012334', 'Khong co dien kien bat buoc', 0),
('user03', 'EVI10012335', 'Khong co dien kien bat buoc', 0),
('user01', 'EVI10012330', 'Tren 18 tuoi', 0),
('user01', 'EVI10012331', 'ChÆ°a cÃ³ hiá»‡n thá»‹ yÃªu cáº§u cáº§n cÃ³', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `infor_login_user`
--
-- Tạo: Th8 15, 2022 lúc 11:16 AM
--

DROP TABLE IF EXISTS `infor_login_user`;
CREATE TABLE `infor_login_user` (
  `Username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hoten` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Soluong_events_dangky` int(11) DEFAULT NULL,
  `Madinhdanh` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `infor_login_user`:
--   `Username`
--       `login_control` -> `Username`
--

--
-- Đang đổ dữ liệu cho bảng `infor_login_user`
--

INSERT INTO `infor_login_user` (`Username`, `Hoten`, `Age`, `Email`, `Soluong_events_dangky`, `Madinhdanh`) VALUES
('user01', 'Nguyen Tan', 22, 'tan25102000@gmail.com', 2, 'USER012022'),
('user02', 'Tran Thi Anh Minh', 19, 'tminh@gmail.com', 3, 'USER022022'),
('user03', 'Nguyen Tan', 22, 'tan251020@gmail.com', 3, 'USER032022');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login_control`
--
-- Tạo: Th8 09, 2022 lúc 06:15 PM
--

DROP TABLE IF EXISTS `login_control`;
CREATE TABLE `login_control` (
  `Leveluser` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Hoten` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` int(20) DEFAULT NULL,
  `Edit_right` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `login_control`:
--

--
-- Đang đổ dữ liệu cho bảng `login_control`
--

INSERT INTO `login_control` (`Leveluser`, `Hoten`, `Username`, `Password`, `Edit_right`) VALUES
('admin', 'Nguyen Tan', 'admin01', 123, 0),
('admin', 'Tran Anh Minh', 'admin02', 123, 0),
('user', 'Nguyen Tan', 'user01', 123, 1),
('user', 'Tran Thi Anh Minh', 'user02', 123, 1),
('user', 'Nguyen Tan', 'user03', 123, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `event_infor`
--
ALTER TABLE `event_infor`
  ADD PRIMARY KEY (`EventID`);

--
-- Chỉ mục cho bảng `event_sign_up`
--
ALTER TABLE `event_sign_up`
  ADD KEY `f_user_signup` (`Username`),
  ADD KEY `f_infor_signup` (`EventID`);

--
-- Chỉ mục cho bảng `infor_login_user`
--
ALTER TABLE `infor_login_user`
  ADD PRIMARY KEY (`Username`);

--
-- Chỉ mục cho bảng `login_control`
--
ALTER TABLE `login_control`
  ADD PRIMARY KEY (`Username`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `event_sign_up`
--
ALTER TABLE `event_sign_up`
  ADD CONSTRAINT `f_infor_signup` FOREIGN KEY (`EventID`) REFERENCES `event_infor` (`EventID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `f_user_signup` FOREIGN KEY (`Username`) REFERENCES `infor_login_user` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `infor_login_user`
--
ALTER TABLE `infor_login_user`
  ADD CONSTRAINT `f_login` FOREIGN KEY (`Username`) REFERENCES `login_control` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;


--
-- Siêu dữ liệu
--
USE `phpmyadmin`;

--
-- Siêu dữ liệu cho bảng event_infor
--

--
-- Đang đổ dữ liệu cho bảng `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'ql_events', 'event_infor', '{\"sorted_col\":\"`EventID` ASC\"}', '2022-08-14 14:52:27');

--
-- Siêu dữ liệu cho bảng event_sign_up
--

--
-- Đang đổ dữ liệu cho bảng `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'ql_events', 'event_sign_up', '{\"CREATE_TIME\":\"2022-08-14 21:38:59\"}', '2022-08-17 10:00:18');

--
-- Siêu dữ liệu cho bảng infor_login_user
--

--
-- Đang đổ dữ liệu cho bảng `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'ql_events', 'infor_login_user', '{\"sorted_col\":\"`Username` ASC\"}', '2022-08-18 02:00:17');

--
-- Siêu dữ liệu cho bảng login_control
--

--
-- Siêu dữ liệu cho cơ sở dữ liệu ql_events
--
-- Error reading data for table phpmyadmin.pma__central_columns: #1932 - Table &#039;phpmyadmin.pma__central_columns&#039; doesn&#039;t exist in engine
COMMIT;