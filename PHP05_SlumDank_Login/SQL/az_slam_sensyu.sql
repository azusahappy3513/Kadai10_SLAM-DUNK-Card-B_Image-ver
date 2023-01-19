-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-01-19 23:20:51
-- サーバのバージョン： 10.4.27-MariaDB
-- PHP のバージョン: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_az`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `az_slam_sensyu`
--

CREATE TABLE `az_slam_sensyu` (
  `id` int(12) NOT NULL,
  `name` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sensyu` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `school` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `word` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `img` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `az_slam_sensyu`
--

INSERT INTO `az_slam_sensyu` (`id`, `name`, `email`, `sensyu`, `school`, `word`, `content`, `date`, `img`) VALUES
(1, 'あづさ', 'azusa.azu.franny@gmail.com', '安西先生', '', '諦めたらそこで試合終了ですよ', 0, 2147483647, NULL),
(2, '', '', '', '', '', 0, 0, NULL),
(3, '宮瀬　あづさ', 'azusa.azu.franny@gmail.com', '桜木', '湘北高校', '天才ですから', 0, 2147483647, NULL),
(4, '宮瀬　あづさ', 'azusa.azu.franny@gmail.com', '桜木', '湘北高校', '天才ですから', 0, 2147483647, ''),
(5, '', '', '', '', '', 0, 2147483647, ''),
(6, '', '', '', '', '', 0, 2147483647, ''),
(7, '', '', '', '', '', 0, 2147483647, ''),
(8, '', '', '', '', '', 0, 2147483647, ''),
(9, '', '', '', '', '', 0, 2147483647, ''),
(10, '', '', '', '', '', 0, 2147483647, ''),
(11, '', '', '', '', '', 0, 2147483647, ''),
(12, '', '', '', '', '', 0, 2147483647, ''),
(13, '', '', '', '', '', 0, 2147483647, ''),
(14, '', '', '', '', '', 0, 2147483647, ''),
(15, '', '', '', '', '', 0, 2147483647, '');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `az_slam_sensyu`
--
ALTER TABLE `az_slam_sensyu`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `az_slam_sensyu`
--
ALTER TABLE `az_slam_sensyu`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
