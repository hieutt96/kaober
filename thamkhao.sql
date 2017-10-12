-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2017 at 03:31 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kaober`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_pages`
--

CREATE TABLE `admin_pages` (
  `page_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'page.png',
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `order` int(11) NOT NULL DEFAULT '1',
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci,
  `meta_keyword` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_page_translations`
--

CREATE TABLE `admin_page_translations` (
  `trans_id` int(10) UNSIGNED NOT NULL,
  `page_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci,
  `meta_keyword` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_settings`
--

CREATE TABLE `admin_settings` (
  `set_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_settings`
--

INSERT INTO `admin_settings` (`set_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'theme', 'Tùy chỉnh giao diện admin theo các chủ đề khác nhau', NULL, NULL),
(2, 'fix sidebar', 'Tùy chỉnh cố định sidebar', NULL, NULL),
(3, 'toggle', 'Đóng hoặc mở sidebar', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_setting_options`
--

CREATE TABLE `admin_setting_options` (
  `opt_id` int(10) UNSIGNED NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `set_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_setting_options`
--

INSERT INTO `admin_setting_options` (`opt_id`, `value`, `set_id`, `created_at`, `updated_at`) VALUES
(1, 'skin-green', 1, NULL, NULL),
(2, 'skin-blue', 1, NULL, NULL),
(3, 'skin-black', 1, NULL, NULL),
(4, 'skin-purple', 1, NULL, NULL),
(5, 'skin-red', 1, NULL, NULL),
(6, 'skin-yellow', 1, NULL, NULL),
(7, 'skin-blue-light', 1, NULL, NULL),
(8, 'skin-black-light', 1, NULL, NULL),
(9, 'skin-purple-light', 1, NULL, NULL),
(10, 'skin-green-light', 1, NULL, NULL),
(11, 'skin-red-light', 1, NULL, NULL),
(12, 'skin-yellow-light', 1, NULL, NULL),
(13, 'fixed', 2, NULL, NULL),
(14, 'nofixed', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `cate_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'blogcate.png',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`cate_id`, `title`, `slug`, `description`, `thumbnail`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Khởi nghiệp', 'khoi-nghiep', 'Khởi nghiệp', 'blogcate.png', 1, NULL, NULL),
(9, 'khởi nghiệp tinh gọn', 'khoi-nghiep-tinh-gon', 'khởi nghiệp tinh gọn', 'blogcate.png', 0, '2017-05-10 09:31:25', '2017-05-10 09:31:25'),
(10, 'Kinh nghiệm thương mại điện tử', 'kinh-nghiem-thuong-mai-dien-tu', 'Kinh nghiệm thương mại điện tử', 'blogcate.png', 1, '2017-06-28 21:22:29', '2017-06-28 21:22:29'),
(13, 'asga', 'aegaeg', 'aewg', 'blogcate.png', 1, '2017-08-22 16:43:15', '2017-08-22 16:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category_translations`
--

CREATE TABLE `blog_category_translations` (
  `trans_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_category_translations`
--

INSERT INTO `blog_category_translations` (`trans_id`, `title`, `description`, `cate_id`, `lang_id`, `created_at`, `updated_at`) VALUES
(5, 'khởi nghiệp tinh gọn', 'khởi nghiệp tinh gọn', 9, 2, '2017-05-10 09:31:25', '2017-05-10 09:31:25'),
(6, 'Kinh nghiệm thương mại điện tử', 'Kinh nghiệm thương mại điện tử', 10, 2, '2017-06-28 21:22:29', '2017-06-28 21:22:29'),
(8, 'aegae', 'gaeg', 13, 2, '2017-08-22 16:43:15', '2017-08-22 16:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post.png',
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci,
  `meta_keyword` mediumtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `cate_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`post_id`, `title`, `slug`, `content`, `thumbnail`, `meta_description`, `meta_keyword`, `status`, `cate_id`, `user_id`, `created_at`, `updated_at`) VALUES
(13, 'sfjsjdfsd', 'sfs-df', '<p>sdfsdfsdf</p>', 'sfjsjdfsd-mtLMSF3imE.jpg', 'ádasdasd', 'sdsdasd', 1, 9, 1, '2017-06-19 07:46:01', '2017-06-19 07:46:01'),
(14, 'Big Idea', 'big-idea', '<p>Hắn thi khởi nghiệp. Sau nhiều v&ograve;ng tranh đấu khốc liệt, với đủ đợt phản biện kịch t&iacute;nh từ c&aacute;c ban gi&aacute;m khảo lẫn kh&aacute;n giả, cuối c&ugrave;ng đội của hắn cũng đạt giải nhất.</p>\r\n\r\n<p>Sau khi l&atilde;nh giải thưởng xong, cả đội lao v&agrave;o thực hiện &yacute; tưởng, biến ước mơ th&agrave;nh sự thật. Người ta thấy hắn v&agrave; đồng bọn c&agrave;y ng&agrave;y c&agrave;y đ&ecirc;m, tập trung lắm, đến hẹn c&agrave; ph&ecirc; cũng kh&ocirc;ng được. Thậm ch&iacute; người y&ecirc;u cũng &iacute;t khi thấy mặt. Lần cuối c&ugrave;ng người y&ecirc;u thấy hắn l&agrave; sau khi hắn l&atilde;nh giải xong. Hắn chỉ n&oacute;i vẻn vẹn v&agrave;i c&acirc;u, rằng cố gắng chờ anh, hai năm sau anh sẽ đổi đời v&agrave; hỏi cưới em l&agrave;m vợ. N&oacute;i t&oacute;m lại l&agrave; hắn sắp gi&agrave;u đến nơi rồi.</p>\r\n\r\n<p>Thế nhưng chả hiểu v&igrave; sao người y&ecirc;u v&agrave; cả x&atilde; hội chờ m&atilde;i vẫn chưa thấy &yacute; tưởng lớn th&agrave;nh h&igrave;nh. Rồi bỗng hắn xuất hiện trở lại, im ỉm chẳng n&oacute;i chẳng rằng. Cả x&atilde; hội thấy lạ, b&egrave;n hỏi thăm c&aacute;i c&ocirc;ng ty khởi nghiệp của hắn tới đ&acirc;u rồi.</p>\r\n\r\n<p>Kh&ocirc;ng th&egrave;m quay lại nh&igrave;n, hắn đ&aacute;p gọn lỏn:</p>\r\n\r\n<p>&ldquo;&Yacute; tưởng lớn qu&aacute;.&rdquo;</p>\r\n\r\n<p>Ngập ngừng một ch&uacute;t, hắn n&oacute;i nốt:</p>\r\n\r\n<p>&ldquo;L&agrave;m m&eacute;o&nbsp;nổi.&rdquo;</p>', 'big-idea-VyVcRvotxb.jpg', 'Big Idea', 'Big Idea', 1, 1, 1, '2017-06-27 01:26:30', '2017-06-27 01:26:30'),
(15, 'Niềm tin có cơ sở?', 'niem-tin-co-co-so', '<p>Hắn biết bay.</p>\r\n\r\n<p>Thực ra th&igrave; hắn chưa bay lần n&agrave;o, nhưng hắn nghĩ l&agrave; hắn biết bay.</p>\r\n\r\n<p>Hắn đ&atilde; nh&igrave;n thấy lo&agrave;i chim bay kh&ocirc;ng biết bao nhi&ecirc;u lần trong đời, v&agrave; trong th&acirc;m t&acirc;m hắn nghĩ biết bay l&agrave; điều tốt. Khi bạn b&egrave; hắn gặp bế tắc, hắn đều khuy&ecirc;n họ n&ecirc;n bay. Chẳng ai l&agrave;m theo, v&agrave; họ đều tiếp tục bế tắc. Vậy n&ecirc;n hắn tin chắc rằng bay l&agrave; tốt. Bởi nếu mấy thằng bạn hắn chịu bay th&igrave; đ&atilde; chẳng bế tắc rồi!</p>\r\n\r\n<p>Nhiều thằng bạn bảo rằng bay kh&ocirc;ng được, nhưng r&otilde; r&agrave;ng đ&oacute; l&agrave; vấn đề của th&aacute;i độ m&agrave; th&ocirc;i. Kh&ocirc;ng ai c&oacute; thể bay được nếu họ tự bảo bản th&acirc;n rằng m&igrave;nh kh&ocirc;ng biết bay. Mấy đứa bạn thậm ch&iacute; c&ograve;n th&aacute;ch thức hắn bay. Nhưng chẳng hề g&igrave;. &ldquo;Lũ thiển cận,&rdquo; hắn nghĩ. &ldquo;M&igrave;nh đ&atilde; nghi&ecirc;n cứu kh&ocirc;ng biết bao nhi&ecirc;u s&aacute;ch vở về c&aacute;ch lo&agrave;i chim bay, v&agrave; chắc chắn rằng m&igrave;nh c&oacute; thể bay được như chim một c&aacute;ch dễ d&agrave;ng.&rdquo;</p>\r\n\r\n<p>N&oacute;i t&oacute;m lại, hắn tin rằng biết bay l&agrave; tốt, v&agrave; hắn tin rằng hắn biết bay. Bay giỏi l&agrave; đằng kh&aacute;c. Tuy chưa bao giờ c&oacute; cơ hội bay thử, nhưng đ&oacute; chỉ l&agrave; vấn đề về thời gian v&agrave; cơ hội. Khi c&oacute; cơ hội cần bay, hắn sẽ bay cho mọi người l&aacute;c mắt ra.</p>\r\n\r\n<p>Niềm tin ấy ng&agrave;y c&agrave;ng lớn. Ng&agrave;y nọ, hắn leo l&ecirc;n ban c&ocirc;ng t&ograve;a nh&agrave; cao nhất Việt Nam h&oacute;ng gi&oacute;. Gi&oacute; l&agrave;m cơ thể hắn nhẹ hơn hẳn. Hắn cảm thấy cảm gi&aacute;c n&agrave;y rất quen thuộc, cứ như m&igrave;nh đ&atilde; bay rất nhiều lần rồi. Cứ như kiếp trước hắn l&agrave; chim vậy.</p>\r\n\r\n<p>Bay l&agrave; tốt. Hắn biết bay.</p>\r\n\r\n<p>Thế l&agrave; hắn nhẹ nh&agrave;ng nhảy xuống, h&ograve;a v&agrave;o l&agrave;n gi&oacute;&hellip;</p>\r\n\r\n<p>Ng&agrave;y h&ocirc;m đ&oacute;, mọi người hốt hoảng khi thấy hắn nằm tr&ecirc;n n&oacute;c một chiếc &ocirc; t&ocirc; bẹp d&uacute;m. Đ&ocirc;i mắt mở to ngỡ ng&agrave;ng.</p>\r\n\r\n<p>Hắn đ&atilde; chết v&igrave; c&oacute; niềm tin khi kh&ocirc;ng hề c&oacute; đ&ocirc;i c&aacute;nh. Một c&aacute;i chết được b&aacute;o trước.</p>\r\n\r\n<p>Bạn c&oacute; đang ngẫu nhi&ecirc;n nghĩ m&igrave;nh giỏi c&aacute;i g&igrave; kh&ocirc;ng?</p>', 'niem-tin-co-co-so-9X851Vu5DN.jpg', 'Niềm tin có cơ sở?', 'Niềm tin có cơ sở?', 1, 1, 1, '2017-06-27 01:27:17', '2017-06-27 01:27:17'),
(16, 'Công thức đơn giản mà sâu sắc về sản phẩm giúp startup thành công', 'cong-thuc-don-gian-ma-sau-sac-ve-san-pham-giup-startup-thanh-cong', '<p>Để tạo lập v&agrave; giữ vững th&agrave;nh c&ocirc;ng n&agrave;y, Startup của bạn cần c&oacute; một c&ocirc;ng thức ri&ecirc;ng cho chiến lược kinh doanh của m&igrave;nh. Đ&acirc;y l&agrave; những c&ocirc;ng thức&nbsp;gi&uacute;p c&aacute;c startup giữ vững vị thế của m&igrave;nh.</p>\r\n\r\n<h4>1. Chăm s&oacute;c kỹ cộng đồng của bạn</h4>\r\n\r\n<p>Khỏi n&oacute;i cũng biết, bạn l&agrave;m sản phẩm về lĩnh vực g&igrave; th&igrave; bạn v&agrave; ch&iacute;nh team của bạn sẽ phải hiểu rất r&otilde; về c&aacute;i m&igrave;nh đang l&agrave;m, tập kh&aacute;ch h&agrave;ng m&igrave;nh đang hướng tới.</p>\r\n\r\n<h4>2. Đảm bảo kh&aacute;ch h&agrave;ng biết r&otilde; họ sẽ nhận được g&igrave;</h4>\r\n\r\n<p>H&atilde;y cho kh&aacute;ch h&agrave;ng của bạn nhận biết được gi&aacute; trị m&agrave; sản phẩm của bạn sẽ mang lại cho họ. Mẹo nhỏ nh&eacute;: Bạn c&oacute; thể quảng c&aacute;o, hoặc đơn giản l&agrave; chia sẻ về gi&aacute; trị của sản phẩm, nhưng h&atilde;y để cho kh&aacute;ch h&agrave;ng cảm nhận được rằng gi&aacute; trị thực sự của sản phẩm m&agrave; bạn đem lại cho họ cao hơn nhiều so với c&aacute;i gi&aacute; m&agrave; họ phải trả cho bạn.</p>', 'cong-thuc-don-gian-ma-sau-sac-ve-san-pham-giup-startup-thanh-cong-KVfuxK1pNT.jpg', 'Công thức đơn giản mà sâu sắc về sản phẩm giúp startup thành công', 'Công thức đơn giản mà sâu sắc về sản phẩm giúp startup thành công', 1, 9, 1, '2017-06-27 01:28:27', '2017-06-27 01:28:27'),
(17, 'Những đám đông mù quáng', 'nhung-dam-dong-mu-quang', '<p>Khi Nikola Tesla lần đầu giới thiệu cho cả thế giới d&ograve;ng điện xoay chiều c&aacute;ch đ&acirc;y khoảng 100 năm, kh&ocirc;ng những kh&ocirc;ng được xem trọng, &ocirc;ng c&ograve;n vấp phải kh&ocirc;ng &iacute;t sự phản đối. L&uacute;c bấy giờ, Thomas Edison l&agrave; một t&ecirc;n tuổi nổi tiếng của giới ph&aacute;t minh. &Ocirc;ng muốn chứng minh d&ograve;ng điện một chiều của m&igrave;nh mới l&agrave; sản phẩm của thời đại. V&agrave; với danh tiếng của bản th&acirc;n, Edison đ&atilde; ph&aacute;t động một cuộc chiến m&agrave; sau n&agrave;y đi v&agrave;o lịch sử với c&aacute;i t&ecirc;n &ldquo;cuộc chiến d&ograve;ng điện&rdquo;.</p>\r\n\r\n<p>Nếu quay lại thời điểm khoảng 150 năm trước v&agrave; hỏi bất k&igrave; người n&agrave;o ta gặp về quyền bầu cử của người phụ nữ, hẳn người đ&oacute; tưởng rằng ta bị đi&ecirc;n. M&atilde;i cho đến cuối thế kỷ XIX, sau những cuộc biểu t&igrave;nh diễn ra khắp nơi đ&ograve;i quyền lợi, nhiều quốc gia phương T&acirc;y mới bắt đầu trao cho phụ nữ quyền đi bầu. C&ograve;n c&aacute;ch đ&oacute; nửa v&ograve;ng tr&aacute;i đất, đừng n&oacute;i đến đi bầu, phụ nữ của c&aacute;c quốc gia Đ&ocirc;ng Nam &Aacute; l&uacute;c n&agrave;y c&ograve;n phải sống m&ograve;n theo lễ nghĩa Nho gi&aacute;o, với đủ thứ hủ tục tam t&ograve;ng tứ đức. (M&atilde;i cho đến ng&agrave;y nay n&oacute; vẫn cắm rễ trong quan niệm của nhiều người). C&aacute;i kh&aacute;i niệm quyền lợi của phụ nữ thời điểm ấy quả l&agrave; &ldquo;kh&ocirc;ng thể n&agrave;o chấp nhận được.&rdquo;</p>\r\n\r\n<p>Con người hẳn l&agrave; một lo&agrave;i động vật th&iacute;ch dối l&ograve;ng bậc nhất. Mở miệng ra l&agrave; khuyến kh&iacute;ch tư duy kh&aacute;c biệt nhưng l&uacute;c n&agrave;o cũng muốn mọi người phải nghĩ giống m&igrave;nh, hay n&oacute;i đ&uacute;ng hơn l&agrave;, phải giống với quan niệm đ&aacute;m đ&ocirc;ng. Chả thế m&agrave; khi Galileo tuy&ecirc;n bố &ldquo;tr&aacute;i đất quay quanh mặt trời&rdquo;, cả hội đồng b&ocirc; l&atilde;o kh&ocirc;ng thể n&agrave;o đồng t&igrave;nh nổi. Rồi thế l&agrave; &ocirc;ng bị xử quản th&uacute;c suốt phần đời c&ograve;n lại bởi những kẻ c&oacute; địa vị v&agrave; tiếng n&oacute;i l&uacute;c bấy giờ.</p>\r\n\r\n<p>May mắn hơn Galileo, d&ugrave; d&ograve;ng điện xoay chiều của m&igrave;nh c&oacute; ưu điểm hơn hẳn nhưng v&igrave; thiếu l&ograve;ng tin của đ&aacute;m đ&ocirc;ng, phải sau một thời gian rất d&agrave;i Tesla mới cơ bản gi&agrave;nh được chiến thắng. Tuy vậy, thắng m&agrave; như bại, những đ&oacute;ng g&oacute;p to lớn của Tesla vẫn kh&ocirc;ng được coi trọng. Cuối c&ugrave;ng, &ocirc;ng chết trong ngh&egrave;o đ&oacute;i v&agrave; t&uacute;ng quẫn. M&atilde;i cho đến sau n&agrave;y, hơn 50 năm kể từ l&uacute;c mất đi, người ta mới bắt đầu ghi nhận gi&aacute; trị nghi&ecirc;n cứu của Tesla. Nếu c&oacute; sai lầm th&igrave; c&aacute;i sai lớn nhất của &ocirc;ng ch&iacute;nh l&agrave; sinh ra kh&ocirc;ng hợp thời. Cũng như Warren Buffett từng thừa nhận &ldquo;May mắn lớn nhất của t&ocirc;i ch&iacute;nh l&agrave; sinh ra tại nước Mỹ, nếu t&ocirc;i sinh ra ở tại một nơi n&agrave;o đ&oacute; v&agrave;o thời điểm kh&aacute;c th&igrave; c&oacute; lẽ t&ocirc;i đ&atilde; kh&ocirc;ng c&oacute; được th&agrave;nh c&ocirc;ng như h&ocirc;m nay.&rdquo;</p>\r\n\r\n<p>Số phận của c&aacute;c nh&acirc;n vật v&agrave; &yacute; tưởng đi trước thời đại thường chẳng mấy c&oacute; hậu. Đ&oacute;ng g&oacute;p phần lớn v&agrave;o kết cục bi đ&aacute;t của họ ch&iacute;nh l&agrave; sự n&eacute;m đ&aacute; của đ&aacute;m đ&ocirc;ng với thứ quan niệm m&ugrave; qu&aacute;ng tuyệt đối. Nhưng lịch sử đ&atilde; chứng minh nếu c&oacute; một thứ tuyệt đối th&igrave; chỉ c&oacute; sự ngu dốt của con người theo thời gian. Như kiến thức của một nh&agrave; hiền triết thời tiền sử khi đem so với những học sinh tiểu học thời nay ắt phải l&agrave; những thứ ng&ocirc; ngh&ecirc; ngờ nghệch. Nhưng chả phải &yacute; kiến của họ đ&atilde; từng được cả bầy đ&agrave;n thời ấy xem trọng đ&oacute; sao?</p>\r\n\r\n<p>Thế mới thấy, những &yacute; tưởng c&aacute;ch t&acirc;n tưởng chừng khi nghe qua rất đ&aacute;ng được ủng hộ ng&agrave;y nay đ&atilde; từng c&oacute; thời bị ăn gạch kh&ocirc;ng thương tiếc. Vậy n&ecirc;n, lần tới khi đứng trước một thứ mới lạ kh&aacute;c biệt, trước khi đ&aacute;nh gi&aacute;, h&atilde;y b&igrave;nh tĩnh xem x&eacute;t thật kỹ. V&igrave; biết đ&acirc;u, ch&iacute;nh ta, chứ kh&ocirc;ng ai kh&aacute;c, cũng đang tham gia v&agrave;o đ&aacute;m đ&ocirc;ng m&ugrave; qu&aacute;ng năm xưa.</p>', 'nhung-dam-dong-mu-quang-iXh9Uy5lG9.jpg', 'Những đám đông mù quáng', 'Những đám đông mù quáng', 1, 1, 1, '2017-06-27 01:30:14', '2017-06-27 01:30:14'),
(18, 'Sự cân bằng', 'su-can-bang', '<p>&ldquo;Bao nhi&ecirc;u bạn ở đ&acirc;y nghĩ rằng mục ti&ecirc;u của đời m&igrave;nh l&agrave; c&acirc;n bằng &ndash; c&acirc;n bằng giữa c&ocirc;ng việc v&agrave; cuộc sống?&rdquo; Vị thầy gi&aacute;o hỏi, &aacute;nh mắt chếch l&ecirc;n chờ đợi.</p>\r\n\r\n<p>Đ&oacute; l&agrave; một buổi học tiếng Anh tại một trung t&acirc;m ngoại ngữ mấy năm về trước. Kh&aacute; nhiều học sinh trong lớp giơ tay. Tất cả chờ đợi c&acirc;u trả lời từ người thầy của m&igrave;nh.</p>\r\n\r\n<p>Người ta thường kể về những t&ecirc;n tuổi lớn với sự nghiệp vĩ đại. Kh&ocirc;ng ai kh&ocirc;ng biết c&acirc;u chuyện về Steve Jobs, Bill Gates, Warren Buffett, Mark Zukerberg&hellip; v&agrave; c&ograve;n rất nhiều c&aacute;i t&ecirc;n kh&aacute;c. Nhưng đ&acirc;u đ&oacute; vẫn c&ograve;n một điều lẳng lặng.</p>\r\n\r\n<p>&ldquo;Con trai l&agrave; vật hi sinh cho sự nghiệp của Jack Ma.&rdquo;</p>\r\n\r\n<p>Dĩ nhi&ecirc;n ai m&agrave; kh&ocirc;ng biết đến Alibaba hay những thứ Jack Ma l&agrave;m được. Tuy nhi&ecirc;n, c&oacute; một lời được chia sẻ thật từ bản th&acirc;n &ocirc;ng v&agrave; vợ m&igrave;nh. Trong những năm th&aacute;ng gầy dựng Alibaba, họ đ&atilde; phải hy sinh cuộc sống gia đ&igrave;nh b&igrave;nh thường, thậm ch&iacute; cả thời thơ ấu của con. Đổi lại, thế giới c&oacute; một Alibaba như ng&agrave;y nay.</p>\r\n\r\n<p>Jack Ma kh&ocirc;ng phải trường hợp duy nhất hy sinh nhưng l&agrave; trường hợp ti&ecirc;u biểu nhất d&aacute;m thừa nhận. Hoặc l&agrave; anh chọn l&agrave;m c&aacute;i n&agrave;y, hoặc l&agrave; anh chọn lấy c&aacute;i kia. Nếu lưng chừng giữa đường, kh&oacute; l&ograve;ng c&oacute; điều vĩ đại xuất hiện.</p>', 'su-can-bang-gcla3k6Ttg.jpg', 'Sự cân bằng', 'Sự cân bằng', 1, 9, 1, '2017-06-27 01:33:25', '2017-06-27 01:33:25'),
(19, 'Airbnb and Flight Centre Travel Group Partner to Expand Accommodation Options for Business Travellers', 'airbnb-and-flight-centre-travel-group-partner-to-expand-accommodation-options-for-business-travellers', '<p>In an Australian and New Zealand first, Airbnb, the world&rsquo;s leading community driven marketplace, has partnered with Flight Centre Travel Group&rsquo;s (FCTG) corporate division to provide &nbsp;customers with more options when travelling for business.</p>\r\n\r\n<p>With five different corporate travel brands, FCTG corporate, offers the broadest range of travel management services for organisations across Australia and New Zealand. The new partnership with Airbnb means that FCTG&rsquo;s corporate brands will now have an unrivalled pool of accommodation options to offer its corporate customers.</p>\r\n\r\n<p>FCTG&rsquo;s corporate brands, including FCm Travel Solutions, Corporate Traveller, Campus Travel and Stage and Screen, will have access to Airbnb for Business. The new accommodation offering will give FCTG&rsquo;s corporate customers access to more than three million listings worldwide, which are available to be booked through the home-sharing platform.</p>\r\n\r\n<p>Since its founding in 2008, Airbnb hosts have welcomed more than 180 million guest arrivals at Airbnb listings worldwide. Approximately 10 per cent of all travellers on Airbnb are business travellers, and in 2016, the number of business trips on Airbnb tripled.</p>', 'airbnb-and-flight-centre-travel-group-partner-to-expand-accommodation-options-for-business-travellers-khSnZQASap.jpg', 'Airbnb and Flight Centre Travel Group Partner to Expand Accommodation Options for Business Travellers', 'Airbnb and Flight Centre Travel Group Partner to Expand Accommodation Options for Business Travellers', 1, 1, 1, '2017-06-27 01:35:24', '2017-06-27 01:35:24'),
(20, 'Cảm xúc cần tạo ra trong một sản phẩm ?', 'cam-xuc-can-tao-ra-trong-mot-san-pham', '<p>Một sản phẩm c&oacute; trải nghiệm người d&ugrave;ng tốt hay kh&ocirc;ng, cần c&oacute; :</p>\r\n\r\n<ul>\r\n	<li>Phải tạo được cảm gi&aacute;c cho người d&ugrave;ng về việc họ c&oacute; thể điều khiển, nắm bắt (control)&hellip; được sản phẩm của bạn. H&atilde;y l&agrave;m ra 1 sản phẩm đủ th&ocirc;ng minh, thiết kế dễ chịu &ndash; đẹp đẽ, về mặt tiềm thức người d&ugrave;ng sẽ cho rằng đ&oacute; l&agrave; một thứ dễ điều khiển dễ sử dụng. H&atilde;y l&agrave;m ra những thứ sinh động, đ&aacute;ng y&ecirc;u, l&agrave;m mọi c&aacute;ch cho người d&ugrave;ng y&ecirc;u th&iacute;ch v&agrave; vui vẻ. Khi tiềm thức của họ vui vẻ, tất cả mọi thứ đều &ldquo;OK&rdquo;!</li>\r\n	<li>Phải tạo được cảm gi&aacute;c về sự an to&agrave;n. &ldquo;Ok c&aacute;i đ&oacute; t&ocirc;i biết l&agrave; sẽ l&agrave;m được, n&oacute; ko l&agrave;m hỏng vỡ điều g&igrave; đ&oacute;, ko l&agrave;m ai bị thương. N&oacute; an to&agrave;n!&rdquo;</li>\r\n	<li>Phải tạo được cảm gi&aacute;c về sự &ldquo;tự ng&atilde;&rdquo; hay c&ograve;n gọi l&agrave; t&iacute;nh c&aacute; nh&acirc;n của sản phẩm. Ok, t&ocirc;i d&ugrave;ng n&oacute; v&igrave; ko ai c&oacute; một thứ như vậy cả, t&ocirc;i d&ugrave;ng n&oacute; v&igrave; t&ocirc;i cảm thấy t&ocirc;i mạnh mẽ hơn, s&agrave;nh điệu hơn, xinh đẹp</li>\r\n</ul>', 'cam-xuc-can-tao-ra-trong-mot-san-pham-5zeZoInyNN.jpg', 'Cảm xúc cần tạo ra trong một sản phẩm ?', 'Cảm xúc cần tạo ra trong một sản phẩm ?', 1, 9, 1, '2017-06-29 13:25:54', '2017-06-29 13:25:54');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post_translations`
--

CREATE TABLE `blog_post_translations` (
  `trans_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci,
  `meta_keyword` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_post_translations`
--

INSERT INTO `blog_post_translations` (`trans_id`, `title`, `content`, `post_id`, `lang_id`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(9, 'sdfsdf', '<p>shdfjshdfjsh</p>', 13, 2, 'sdfsdfsdf', 'shfsjd', '2017-06-19 07:46:01', '2017-06-19 07:46:01'),
(10, 'Big Idea', '<p>Hắn thi khởi nghiệp. Sau nhiều v&ograve;ng tranh đấu khốc liệt, với đủ đợt phản biện kịch t&iacute;nh từ c&aacute;c ban gi&aacute;m khảo lẫn kh&aacute;n giả, cuối c&ugrave;ng đội của hắn cũng đạt giải nhất.</p>\r\n\r\n<p>Sau khi l&atilde;nh giải thưởng xong, cả đội lao v&agrave;o thực hiện &yacute; tưởng, biến ước mơ th&agrave;nh sự thật. Người ta thấy hắn v&agrave; đồng bọn c&agrave;y ng&agrave;y c&agrave;y đ&ecirc;m, tập trung lắm, đến hẹn c&agrave; ph&ecirc; cũng kh&ocirc;ng được. Thậm ch&iacute; người y&ecirc;u cũng &iacute;t khi thấy mặt. Lần cuối c&ugrave;ng người y&ecirc;u thấy hắn l&agrave; sau khi hắn l&atilde;nh giải xong. Hắn chỉ n&oacute;i vẻn vẹn v&agrave;i c&acirc;u, rằng cố gắng chờ anh, hai năm sau anh sẽ đổi đời v&agrave; hỏi cưới em l&agrave;m vợ. N&oacute;i t&oacute;m lại l&agrave; hắn sắp gi&agrave;u đến nơi rồi.</p>\r\n\r\n<p>Thế nhưng chả hiểu v&igrave; sao người y&ecirc;u v&agrave; cả x&atilde; hội chờ m&atilde;i vẫn chưa thấy &yacute; tưởng lớn th&agrave;nh h&igrave;nh. Rồi bỗng hắn xuất hiện trở lại, im ỉm chẳng n&oacute;i chẳng rằng. Cả x&atilde; hội thấy lạ, b&egrave;n hỏi thăm c&aacute;i c&ocirc;ng ty khởi nghiệp của hắn tới đ&acirc;u rồi.</p>\r\n\r\n<p>Kh&ocirc;ng th&egrave;m quay lại nh&igrave;n, hắn đ&aacute;p gọn lỏn:</p>\r\n\r\n<p>&ldquo;&Yacute; tưởng lớn qu&aacute;.&rdquo;</p>\r\n\r\n<p>Ngập ngừng một ch&uacute;t, hắn n&oacute;i nốt:</p>\r\n\r\n<p>&ldquo;L&agrave;m m&eacute;o&nbsp;nổi.&rdquo;</p>', 14, 2, 'Big Idea', 'Big Idea', '2017-06-27 01:26:31', '2017-06-27 01:26:31'),
(11, 'Niềm tin có cơ sở?', '<p>Hắn biết bay.</p>\r\n\r\n<p>Thực ra th&igrave; hắn chưa bay lần n&agrave;o, nhưng hắn nghĩ l&agrave; hắn biết bay.</p>\r\n\r\n<p>Hắn đ&atilde; nh&igrave;n thấy lo&agrave;i chim bay kh&ocirc;ng biết bao nhi&ecirc;u lần trong đời, v&agrave; trong th&acirc;m t&acirc;m hắn nghĩ biết bay l&agrave; điều tốt. Khi bạn b&egrave; hắn gặp bế tắc, hắn đều khuy&ecirc;n họ n&ecirc;n bay. Chẳng ai l&agrave;m theo, v&agrave; họ đều tiếp tục bế tắc. Vậy n&ecirc;n hắn tin chắc rằng bay l&agrave; tốt. Bởi nếu mấy thằng bạn hắn chịu bay th&igrave; đ&atilde; chẳng bế tắc rồi!</p>\r\n\r\n<p>Nhiều thằng bạn bảo rằng bay kh&ocirc;ng được, nhưng r&otilde; r&agrave;ng đ&oacute; l&agrave; vấn đề của th&aacute;i độ m&agrave; th&ocirc;i. Kh&ocirc;ng ai c&oacute; thể bay được nếu họ tự bảo bản th&acirc;n rằng m&igrave;nh kh&ocirc;ng biết bay. Mấy đứa bạn thậm ch&iacute; c&ograve;n th&aacute;ch thức hắn bay. Nhưng chẳng hề g&igrave;. &ldquo;Lũ thiển cận,&rdquo; hắn nghĩ. &ldquo;M&igrave;nh đ&atilde; nghi&ecirc;n cứu kh&ocirc;ng biết bao nhi&ecirc;u s&aacute;ch vở về c&aacute;ch lo&agrave;i chim bay, v&agrave; chắc chắn rằng m&igrave;nh c&oacute; thể bay được như chim một c&aacute;ch dễ d&agrave;ng.&rdquo;</p>\r\n\r\n<p>N&oacute;i t&oacute;m lại, hắn tin rằng biết bay l&agrave; tốt, v&agrave; hắn tin rằng hắn biết bay. Bay giỏi l&agrave; đằng kh&aacute;c. Tuy chưa bao giờ c&oacute; cơ hội bay thử, nhưng đ&oacute; chỉ l&agrave; vấn đề về thời gian v&agrave; cơ hội. Khi c&oacute; cơ hội cần bay, hắn sẽ bay cho mọi người l&aacute;c mắt ra.</p>\r\n\r\n<p>Niềm tin ấy ng&agrave;y c&agrave;ng lớn. Ng&agrave;y nọ, hắn leo l&ecirc;n ban c&ocirc;ng t&ograve;a nh&agrave; cao nhất Việt Nam h&oacute;ng gi&oacute;. Gi&oacute; l&agrave;m cơ thể hắn nhẹ hơn hẳn. Hắn cảm thấy cảm gi&aacute;c n&agrave;y rất quen thuộc, cứ như m&igrave;nh đ&atilde; bay rất nhiều lần rồi. Cứ như kiếp trước hắn l&agrave; chim vậy.</p>\r\n\r\n<p>Bay l&agrave; tốt. Hắn biết bay.</p>\r\n\r\n<p>Thế l&agrave; hắn nhẹ nh&agrave;ng nhảy xuống, h&ograve;a v&agrave;o l&agrave;n gi&oacute;&hellip;</p>\r\n\r\n<p>Ng&agrave;y h&ocirc;m đ&oacute;, mọi người hốt hoảng khi thấy hắn nằm tr&ecirc;n n&oacute;c một chiếc &ocirc; t&ocirc; bẹp d&uacute;m. Đ&ocirc;i mắt mở to ngỡ ng&agrave;ng.</p>\r\n\r\n<p>Hắn đ&atilde; chết v&igrave; c&oacute; niềm tin khi kh&ocirc;ng hề c&oacute; đ&ocirc;i c&aacute;nh. Một c&aacute;i chết được b&aacute;o trước.</p>\r\n\r\n<p>Bạn c&oacute; đang ngẫu nhi&ecirc;n nghĩ m&igrave;nh giỏi c&aacute;i g&igrave; kh&ocirc;ng?</p>', 15, 2, 'Niềm tin có cơ sở?', 'Niềm tin có cơ sở?', '2017-06-27 01:27:17', '2017-06-27 01:27:17'),
(12, 'Công thức đơn giản mà sâu sắc về sản phẩm giúp startup thành công', '<p>Để tạo lập v&agrave; giữ vững th&agrave;nh c&ocirc;ng n&agrave;y, Startup của bạn cần c&oacute; một c&ocirc;ng thức ri&ecirc;ng cho chiến lược kinh doanh của m&igrave;nh. Đ&acirc;y l&agrave; những c&ocirc;ng thức&nbsp;gi&uacute;p c&aacute;c startup giữ vững vị thế của m&igrave;nh.</p>\r\n\r\n<h4>1. Chăm s&oacute;c kỹ cộng đồng của bạn</h4>\r\n\r\n<p>Khỏi n&oacute;i cũng biết, bạn l&agrave;m sản phẩm về lĩnh vực g&igrave; th&igrave; bạn v&agrave; ch&iacute;nh team của bạn sẽ phải hiểu rất r&otilde; về c&aacute;i m&igrave;nh đang l&agrave;m, tập kh&aacute;ch h&agrave;ng m&igrave;nh đang hướng tới.</p>\r\n\r\n<h4>2. Đảm bảo kh&aacute;ch h&agrave;ng biết r&otilde; họ sẽ nhận được g&igrave;</h4>\r\n\r\n<p>H&atilde;y cho kh&aacute;ch h&agrave;ng của bạn nhận biết được gi&aacute; trị m&agrave; sản phẩm của bạn sẽ mang lại cho họ. Mẹo nhỏ nh&eacute;: Bạn c&oacute; thể quảng c&aacute;o, hoặc đơn giản l&agrave; chia sẻ về gi&aacute; trị của sản phẩm, nhưng h&atilde;y để cho kh&aacute;ch h&agrave;ng cảm nhận được rằng gi&aacute; trị thực sự của sản phẩm m&agrave; bạn đem lại cho họ cao hơn nhiều so với c&aacute;i gi&aacute; m&agrave; họ phải trả cho bạn.</p>', 16, 2, 'Công thức đơn giản mà sâu sắc về sản phẩm giúp startup thành công', 'Công thức đơn giản mà sâu sắc về sản phẩm giúp startup thành công', '2017-06-27 01:28:27', '2017-06-27 01:28:27'),
(13, 'Những đám đông mù quáng', '<p>Khi Nikola Tesla lần đầu giới thiệu cho cả thế giới d&ograve;ng điện xoay chiều c&aacute;ch đ&acirc;y khoảng 100 năm, kh&ocirc;ng những kh&ocirc;ng được xem trọng, &ocirc;ng c&ograve;n vấp phải kh&ocirc;ng &iacute;t sự phản đối. L&uacute;c bấy giờ, Thomas Edison l&agrave; một t&ecirc;n tuổi nổi tiếng của giới ph&aacute;t minh. &Ocirc;ng muốn chứng minh d&ograve;ng điện một chiều của m&igrave;nh mới l&agrave; sản phẩm của thời đại. V&agrave; với danh tiếng của bản th&acirc;n, Edison đ&atilde; ph&aacute;t động một cuộc chiến m&agrave; sau n&agrave;y đi v&agrave;o lịch sử với c&aacute;i t&ecirc;n &ldquo;cuộc chiến d&ograve;ng điện&rdquo;.</p>\r\n\r\n<p>Nếu quay lại thời điểm khoảng 150 năm trước v&agrave; hỏi bất k&igrave; người n&agrave;o ta gặp về quyền bầu cử của người phụ nữ, hẳn người đ&oacute; tưởng rằng ta bị đi&ecirc;n. M&atilde;i cho đến cuối thế kỷ XIX, sau những cuộc biểu t&igrave;nh diễn ra khắp nơi đ&ograve;i quyền lợi, nhiều quốc gia phương T&acirc;y mới bắt đầu trao cho phụ nữ quyền đi bầu. C&ograve;n c&aacute;ch đ&oacute; nửa v&ograve;ng tr&aacute;i đất, đừng n&oacute;i đến đi bầu, phụ nữ của c&aacute;c quốc gia Đ&ocirc;ng Nam &Aacute; l&uacute;c n&agrave;y c&ograve;n phải sống m&ograve;n theo lễ nghĩa Nho gi&aacute;o, với đủ thứ hủ tục tam t&ograve;ng tứ đức. (M&atilde;i cho đến ng&agrave;y nay n&oacute; vẫn cắm rễ trong quan niệm của nhiều người). C&aacute;i kh&aacute;i niệm quyền lợi của phụ nữ thời điểm ấy quả l&agrave; &ldquo;kh&ocirc;ng thể n&agrave;o chấp nhận được.&rdquo;</p>\r\n\r\n<p>Con người hẳn l&agrave; một lo&agrave;i động vật th&iacute;ch dối l&ograve;ng bậc nhất. Mở miệng ra l&agrave; khuyến kh&iacute;ch tư duy kh&aacute;c biệt nhưng l&uacute;c n&agrave;o cũng muốn mọi người phải nghĩ giống m&igrave;nh, hay n&oacute;i đ&uacute;ng hơn l&agrave;, phải giống với quan niệm đ&aacute;m đ&ocirc;ng. Chả thế m&agrave; khi Galileo tuy&ecirc;n bố &ldquo;tr&aacute;i đất quay quanh mặt trời&rdquo;, cả hội đồng b&ocirc; l&atilde;o kh&ocirc;ng thể n&agrave;o đồng t&igrave;nh nổi. Rồi thế l&agrave; &ocirc;ng bị xử quản th&uacute;c suốt phần đời c&ograve;n lại bởi những kẻ c&oacute; địa vị v&agrave; tiếng n&oacute;i l&uacute;c bấy giờ.</p>\r\n\r\n<p>May mắn hơn Galileo, d&ugrave; d&ograve;ng điện xoay chiều của m&igrave;nh c&oacute; ưu điểm hơn hẳn nhưng v&igrave; thiếu l&ograve;ng tin của đ&aacute;m đ&ocirc;ng, phải sau một thời gian rất d&agrave;i Tesla mới cơ bản gi&agrave;nh được chiến thắng. Tuy vậy, thắng m&agrave; như bại, những đ&oacute;ng g&oacute;p to lớn của Tesla vẫn kh&ocirc;ng được coi trọng. Cuối c&ugrave;ng, &ocirc;ng chết trong ngh&egrave;o đ&oacute;i v&agrave; t&uacute;ng quẫn. M&atilde;i cho đến sau n&agrave;y, hơn 50 năm kể từ l&uacute;c mất đi, người ta mới bắt đầu ghi nhận gi&aacute; trị nghi&ecirc;n cứu của Tesla. Nếu c&oacute; sai lầm th&igrave; c&aacute;i sai lớn nhất của &ocirc;ng ch&iacute;nh l&agrave; sinh ra kh&ocirc;ng hợp thời. Cũng như Warren Buffett từng thừa nhận &ldquo;May mắn lớn nhất của t&ocirc;i ch&iacute;nh l&agrave; sinh ra tại nước Mỹ, nếu t&ocirc;i sinh ra ở tại một nơi n&agrave;o đ&oacute; v&agrave;o thời điểm kh&aacute;c th&igrave; c&oacute; lẽ t&ocirc;i đ&atilde; kh&ocirc;ng c&oacute; được th&agrave;nh c&ocirc;ng như h&ocirc;m nay.&rdquo;</p>\r\n\r\n<p>Số phận của c&aacute;c nh&acirc;n vật v&agrave; &yacute; tưởng đi trước thời đại thường chẳng mấy c&oacute; hậu. Đ&oacute;ng g&oacute;p phần lớn v&agrave;o kết cục bi đ&aacute;t của họ ch&iacute;nh l&agrave; sự n&eacute;m đ&aacute; của đ&aacute;m đ&ocirc;ng với thứ quan niệm m&ugrave; qu&aacute;ng tuyệt đối. Nhưng lịch sử đ&atilde; chứng minh nếu c&oacute; một thứ tuyệt đối th&igrave; chỉ c&oacute; sự ngu dốt của con người theo thời gian. Như kiến thức của một nh&agrave; hiền triết thời tiền sử khi đem so với những học sinh tiểu học thời nay ắt phải l&agrave; những thứ ng&ocirc; ngh&ecirc; ngờ nghệch. Nhưng chả phải &yacute; kiến của họ đ&atilde; từng được cả bầy đ&agrave;n thời ấy xem trọng đ&oacute; sao?</p>\r\n\r\n<p>Thế mới thấy, những &yacute; tưởng c&aacute;ch t&acirc;n tưởng chừng khi nghe qua rất đ&aacute;ng được ủng hộ ng&agrave;y nay đ&atilde; từng c&oacute; thời bị ăn gạch kh&ocirc;ng thương tiếc. Vậy n&ecirc;n, lần tới khi đứng trước một thứ mới lạ kh&aacute;c biệt, trước khi đ&aacute;nh gi&aacute;, h&atilde;y b&igrave;nh tĩnh xem x&eacute;t thật kỹ. V&igrave; biết đ&acirc;u, ch&iacute;nh ta, chứ kh&ocirc;ng ai kh&aacute;c, cũng đang tham gia v&agrave;o đ&aacute;m đ&ocirc;ng m&ugrave; qu&aacute;ng năm xưa.</p>', 17, 2, 'Những đám đông mù quáng', 'Những đám đông mù quáng', '2017-06-27 01:30:14', '2017-06-27 01:30:14'),
(14, 'Sự cân bằng', '<p>&ldquo;Bao nhi&ecirc;u bạn ở đ&acirc;y nghĩ rằng mục ti&ecirc;u của đời m&igrave;nh l&agrave; c&acirc;n bằng &ndash; c&acirc;n bằng giữa c&ocirc;ng việc v&agrave; cuộc sống?&rdquo; Vị thầy gi&aacute;o hỏi, &aacute;nh mắt chếch l&ecirc;n chờ đợi.</p>\r\n\r\n<p>Đ&oacute; l&agrave; một buổi học tiếng Anh tại một trung t&acirc;m ngoại ngữ mấy năm về trước. Kh&aacute; nhiều học sinh trong lớp giơ tay. Tất cả chờ đợi c&acirc;u trả lời từ người thầy của m&igrave;nh.</p>\r\n\r\n<p>Người ta thường kể về những t&ecirc;n tuổi lớn với sự nghiệp vĩ đại. Kh&ocirc;ng ai kh&ocirc;ng biết c&acirc;u chuyện về Steve Jobs, Bill Gates, Warren Buffett, Mark Zukerberg&hellip; v&agrave; c&ograve;n rất nhiều c&aacute;i t&ecirc;n kh&aacute;c. Nhưng đ&acirc;u đ&oacute; vẫn c&ograve;n một điều lẳng lặng.</p>\r\n\r\n<p>&ldquo;Con trai l&agrave; vật hi sinh cho sự nghiệp của Jack Ma.&rdquo;</p>\r\n\r\n<p>Dĩ nhi&ecirc;n ai m&agrave; kh&ocirc;ng biết đến Alibaba hay những thứ Jack Ma l&agrave;m được. Tuy nhi&ecirc;n, c&oacute; một lời được chia sẻ thật từ bản th&acirc;n &ocirc;ng v&agrave; vợ m&igrave;nh. Trong những năm th&aacute;ng gầy dựng Alibaba, họ đ&atilde; phải hy sinh cuộc sống gia đ&igrave;nh b&igrave;nh thường, thậm ch&iacute; cả thời thơ ấu của con. Đổi lại, thế giới c&oacute; một Alibaba như ng&agrave;y nay.</p>\r\n\r\n<p>Jack Ma kh&ocirc;ng phải trường hợp duy nhất hy sinh nhưng l&agrave; trường hợp ti&ecirc;u biểu nhất d&aacute;m thừa nhận. Hoặc l&agrave; anh chọn l&agrave;m c&aacute;i n&agrave;y, hoặc l&agrave; anh chọn lấy c&aacute;i kia. Nếu lưng chừng giữa đường, kh&oacute; l&ograve;ng c&oacute; điều vĩ đại xuất hiện.</p>', 18, 2, 'Sự cân bằng', 'Sự cân bằng', '2017-06-27 01:33:25', '2017-06-27 01:33:25'),
(15, 'Airbnb and Flight Centre Travel Group Partner to Expand Accommodation Options for Business Travellers', '<p>In an Australian and New Zealand first, Airbnb, the world&rsquo;s leading community driven marketplace, has partnered with Flight Centre Travel Group&rsquo;s (FCTG) corporate division to provide &nbsp;customers with more options when travelling for business.</p>\r\n\r\n<p>With five different corporate travel brands, FCTG corporate, offers the broadest range of travel management services for organisations across Australia and New Zealand. The new partnership with Airbnb means that FCTG&rsquo;s corporate brands will now have an unrivalled pool of accommodation options to offer its corporate customers.</p>\r\n\r\n<p>FCTG&rsquo;s corporate brands, including FCm Travel Solutions, Corporate Traveller, Campus Travel and Stage and Screen, will have access to Airbnb for Business. The new accommodation offering will give FCTG&rsquo;s corporate customers access to more than three million listings worldwide, which are available to be booked through the home-sharing platform.</p>\r\n\r\n<p>Since its founding in 2008, Airbnb hosts have welcomed more than 180 million guest arrivals at Airbnb listings worldwide. Approximately 10 per cent of all travellers on Airbnb are business travellers, and in 2016, the number of business trips on Airbnb tripled.</p>', 19, 2, 'Airbnb and Flight Centre Travel Group Partner to Expand Accommodation Options for Business Travellers', 'Airbnb and Flight Centre Travel Group Partner to Expand Accommodation Options for Business Travellers', '2017-06-27 01:35:24', '2017-06-27 01:35:24'),
(16, 'Cảm xúc cần tạo ra trong một sản phẩm ?', '<p>Một sản phẩm c&oacute; trải nghiệm người d&ugrave;ng tốt hay kh&ocirc;ng, cần c&oacute; :</p>\r\n\r\n<ul>\r\n	<li>Phải tạo được cảm gi&aacute;c cho người d&ugrave;ng về việc họ c&oacute; thể điều khiển, nắm bắt (control)&hellip; được sản phẩm của bạn. H&atilde;y l&agrave;m ra 1 sản phẩm đủ th&ocirc;ng minh, thiết kế dễ chịu &ndash; đẹp đẽ, về mặt tiềm thức người d&ugrave;ng sẽ cho rằng đ&oacute; l&agrave; một thứ dễ điều khiển dễ sử dụng. H&atilde;y l&agrave;m ra những thứ sinh động, đ&aacute;ng y&ecirc;u, l&agrave;m mọi c&aacute;ch cho người d&ugrave;ng y&ecirc;u th&iacute;ch v&agrave; vui vẻ. Khi tiềm thức của họ vui vẻ, tất cả mọi thứ đều &ldquo;OK&rdquo;!</li>\r\n	<li>Phải tạo được cảm gi&aacute;c về sự an to&agrave;n. &ldquo;Ok c&aacute;i đ&oacute; t&ocirc;i biết l&agrave; sẽ l&agrave;m được, n&oacute; ko l&agrave;m hỏng vỡ điều g&igrave; đ&oacute;, ko l&agrave;m ai bị thương. N&oacute; an to&agrave;n!&rdquo;</li>\r\n	<li>Phải tạo được cảm gi&aacute;c về sự &ldquo;tự ng&atilde;&rdquo; hay c&ograve;n gọi l&agrave; t&iacute;nh c&aacute; nh&acirc;n của sản phẩm. Ok, t&ocirc;i d&ugrave;ng n&oacute; v&igrave; ko ai c&oacute; một thứ như vậy cả, t&ocirc;i d&ugrave;ng n&oacute; v&igrave; t&ocirc;i cảm thấy t&ocirc;i mạnh mẽ hơn, s&agrave;nh điệu hơn, xinh đẹp</li>\r\n</ul>', 20, 2, 'Cảm xúc cần tạo ra trong một sản phẩm ?', 'Cảm xúc cần tạo ra trong một sản phẩm ?', '2017-06-29 13:25:54', '2017-06-29 13:25:54');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post_views`
--

CREATE TABLE `blog_post_views` (
  `view_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `view` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `name`, `postcode`, `slug`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Hà Nội', '100000', 'ha-noi', 1, NULL, NULL),
(3, 'Hưng Yên', '160000', 'hung-yen', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Việt Nam', 'viet-nam', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `lang_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`lang_id`, `name`, `slug`, `description`, `status`) VALUES
(1, 'Tiếng Việt', 'vi', 'Tiếng Việt', 1),
(2, 'English', 'en', 'English', 1);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `log_id` int(10) UNSIGNED NOT NULL,
  `logname_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `log` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_admins`
--

CREATE TABLE `log_admins` (
  `log_id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_admins`
--

INSERT INTO `log_admins` (`log_id`, `user_id`, `email`, `ip`, `action`, `description`, `type`, `created_at`, `updated_at`) VALUES
(17, '1', 'buihuycuong1510@gmail.com', '::1', 'Created', 'Created Product', 'normal', '2017-06-03 01:26:57', '2017-06-03 01:26:57'),
(18, '1', 'buihuycuong1510@gmail.com', '::1', 'Created', 'Created Blog', 'normal', '2017-06-03 01:32:34', '2017-06-03 01:32:34'),
(19, '1', 'buihuycuong1510@gmail.com', '::1', 'Deleted', 'Delete Blog', 'normal', '2017-06-03 01:43:38', '2017-06-03 01:43:38'),
(20, '1', 'buihuycuong1510@gmail.com', '::1', 'Deleted', 'Delete Blog', 'normal', '2017-06-04 21:21:07', '2017-06-04 21:21:07'),
(21, '1', 'buihuycuong1510@gmail.com', '::1', 'Deleted', 'Delete Blog', 'normal', '2017-06-05 07:55:44', '2017-06-05 07:55:44'),
(22, '1', 'buihuycuong1510@gmail.com', '::1', 'Created', 'Created Product', 'normal', '2017-06-17 21:42:32', '2017-06-17 21:42:32'),
(23, '1', 'buihuycuong1510@gmail.com', '::1', 'Created', 'Created Product', 'normal', '2017-06-17 21:52:57', '2017-06-17 21:52:57'),
(24, '1', 'buihuycuong1510@gmail.com', '::1', 'Created', 'Created Product', 'normal', '2017-06-17 21:54:57', '2017-06-17 21:54:57'),
(25, '1', 'buihuycuong1510@gmail.com', '::1', 'Created', 'Created Product', 'normal', '2017-06-17 21:56:40', '2017-06-17 21:56:40'),
(26, '1', 'buihuycuong1510@gmail.com', '::1', 'Created', 'Created Product', 'normal', '2017-06-19 07:42:24', '2017-06-19 07:42:24'),
(27, '1', 'buihuycuong1510@gmail.com', '::1', 'Created', 'Created Blog', 'normal', '2017-06-19 07:46:01', '2017-06-19 07:46:01'),
(28, '1', 'buihuycuong1510@gmail.com', '::1', 'Created', 'Created Product', 'normal', '2017-06-26 01:40:34', '2017-06-26 01:40:34'),
(29, '1', 'buihuycuong1510@gmail.com', '::1', 'Created', 'Created Product', 'normal', '2017-06-26 01:43:41', '2017-06-26 01:43:41'),
(30, '1', 'buihuycuong1510@gmail.com', '::1', 'Created', 'Created Product', 'normal', '2017-06-26 02:09:21', '2017-06-26 02:09:21'),
(31, '1', 'buihuycuong1510@gmail.com', '::1', 'Created', 'Created Product', 'normal', '2017-06-26 02:23:35', '2017-06-26 02:23:35'),
(32, '1', 'buihuycuong1510@gmail.com', '::1', 'Created', 'Created Product', 'normal', '2017-06-26 03:13:15', '2017-06-26 03:13:15'),
(33, '1', 'buihuycuong1510@gmail.com', '::1', 'Created', 'Created Product', 'normal', '2017-06-26 19:41:39', '2017-06-26 19:41:39'),
(34, '1', 'buihuycuong1510@gmail.com', '::1', 'Created', 'Created Blog', 'normal', '2017-06-27 01:26:31', '2017-06-27 01:26:31'),
(35, '1', 'buihuycuong1510@gmail.com', '::1', 'Created', 'Created Blog', 'normal', '2017-06-27 01:27:17', '2017-06-27 01:27:17'),
(36, '1', 'buihuycuong1510@gmail.com', '::1', 'Created', 'Created Blog', 'normal', '2017-06-27 01:28:27', '2017-06-27 01:28:27'),
(37, '1', 'buihuycuong1510@gmail.com', '::1', 'Created', 'Created Blog', 'normal', '2017-06-27 01:30:14', '2017-06-27 01:30:14'),
(38, '1', 'buihuycuong1510@gmail.com', '::1', 'Created', 'Created Blog', 'normal', '2017-06-27 01:33:25', '2017-06-27 01:33:25'),
(39, '1', 'buihuycuong1510@gmail.com', '::1', 'Created', 'Created Blog', 'normal', '2017-06-27 01:35:24', '2017-06-27 01:35:24'),
(40, '1', 'buihuycuong1510@gmail.com', '45.252.249.198', 'Created', 'Created Blog', 'normal', '2017-06-29 13:25:54', '2017-06-29 13:25:54'),
(41, '1', 'buihuycuong1510@gmail.com', '45.252.249.198', 'Created', 'Created Product', 'normal', '2017-07-05 13:48:41', '2017-07-05 13:48:41'),
(42, '1', 'buihuycuong1510@gmail.com', '45.252.249.198', 'Cancel', 'Cancel order', 'hight', '2017-07-12 11:31:31', '2017-07-12 11:31:31'),
(43, '1', 'buihuycuong1510@gmail.com', '45.252.249.198', 'Success', 'Success order', 'hight', '2017-07-12 11:40:15', '2017-07-12 11:40:15'),
(44, '1', 'buihuycuong1510@gmail.com', '45.252.249.198', 'Deleted', 'Cancel order', 'hight', '2017-07-12 11:40:29', '2017-07-12 11:40:29'),
(45, '17', 'demo.south.1907@gmail.com', '::1', 'Success', 'Success order', 'hight', '2017-09-11 11:46:44', '2017-09-11 11:46:44'),
(46, '17', 'demo.south.1907@gmail.com', '::1', 'Success', 'Success order', 'hight', '2017-09-23 05:42:31', '2017-09-23 05:42:31'),
(47, '17', 'demo.south.1907@gmail.com', '::1', 'Success', 'Success order', 'hight', '2017-09-23 05:42:38', '2017-09-23 05:42:38'),
(48, '17', 'demo.south.1907@gmail.com', '::1', 'Success', 'Success order', 'hight', '2017-09-23 05:42:43', '2017-09-23 05:42:43'),
(49, '17', 'demo.south.1907@gmail.com', '::1', 'Deleted', 'Cancel order', 'hight', '2017-09-23 05:42:49', '2017-09-23 05:42:49'),
(50, '17', 'demo.south.1907@gmail.com', '::1', 'Success', 'Success order', 'hight', '2017-09-23 05:45:17', '2017-09-23 05:45:17'),
(51, '17', 'demo.south.1907@gmail.com', '::1', 'Deleted', 'Cancel order', 'hight', '2017-09-23 05:45:42', '2017-09-23 05:45:42');

-- --------------------------------------------------------

--
-- Table structure for table `log_names`
--

CREATE TABLE `log_names` (
  `logname_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_05_04_033803_create_languages_table', 1),
(4, '2017_05_04_034309_create_blog_categories_table', 1),
(5, '2017_05_04_034435_create_shops_table', 1),
(6, '2017_05_04_034531_create_shop_categories_table', 1),
(7, '2017_05_04_034615_create_shop_products_table', 1),
(8, '2017_05_04_034936_create_shop_product_attributes_table', 1),
(9, '2017_05_04_035933_create_shop_product_values_table', 1),
(10, '2017_05_04_040100_create_shop_product_orders_table', 1),
(11, '2017_05_04_040142_create_shop_product_rates_table', 1),
(12, '2017_05_04_040224_create_blog_posts_table', 1),
(13, '2017_05_04_040304_create_blog_post_translations_table', 1),
(14, '2017_05_04_040342_create_blog_post_views_table', 1),
(15, '2017_05_04_040435_create_shop_product_comments_table', 1),
(16, '2017_05_04_040508_create_shop_product_views_table', 1),
(17, '2017_05_04_040630_create_admin_pages_table', 1),
(18, '2017_05_04_040710_create_admin_page_translations_table', 1),
(19, '2017_05_04_041415_create_log_names_table', 1),
(20, '2017_05_04_041443_create_logs_table', 1),
(21, '2017_05_10_034344_create_blog_categories_translation_table', 2),
(22, '2017_05_10_034752_create_product_categories_translation_table', 2),
(23, '2017_05_11_063222_create_shop_product_translation_table', 3),
(24, '2017_05_11_101912_add_discount_to_products_table', 4),
(26, '2017_05_13_033921_add_gender_to_users_table', 5),
(29, '2017_05_13_060106_create_orders_table', 6),
(30, '2017_05_13_061805_create_order_products_table', 6),
(31, '2017_05_13_063149_create_countries_table', 7),
(32, '2017_05_13_063416_create_cities_table', 7),
(35, '2017_06_01_073917_create_permissions_table', 8),
(36, '2017_06_01_082622_create_shop_product_reviews_table', 8),
(37, '2017_06_01_133047_add_hotline_to_shop_table', 8),
(38, '2017_06_01_144507_add_title_unique_to_shops', 9),
(39, '2017_06_02_121900_create_admin_settings_table', 10),
(40, '2017_06_02_122154_create_admin_setting_options_table', 10),
(43, '2017_06_03_043618_add_column_quantity_to_product_orders', 11),
(44, '2017_06_03_062516_create_moneys_table', 12),
(45, '2017_06_03_070233_create_log_admins_table', 13),
(46, '2017_06_13_093737_create_shoppingcart_table', 14),
(47, '2017_06_18_015036_add_facebookid_into_user', 14),
(48, '2017_06_07_125911_create_shoppingcart_table', 15),
(49, '2017_06_26_051605_create_quanhuyens_table', 15),
(50, '2017_06_26_093500_add_column_star_into_reviews', 16),
(51, '2017_06_26_094233_add_column_user_id_into_reviews', 17),
(54, '2017_06_28_092054_create_order_books_table', 18),
(55, '2017_06_29_081827_create_sub_email_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `moneys`
--

CREATE TABLE `moneys` (
  `money_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` double(8,4) NOT NULL DEFAULT '0.0000',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `keyorder` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Việt Nam',
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `keyorder`, `name`, `email`, `phone`, `country`, `city`, `district`, `address`, `status`, `created_at`, `updated_at`) VALUES
(7, 'hC81-M6gh-Pdax-Y4rB', 'buihuycuong', 'buichuc1510@gmail.com', '1234567890', 'Việt Nam', 'Hưng Yên', NULL, 'số 8, ngõ 191', 2, '2017-07-03 20:39:57', '2017-07-03 21:09:58'),
(8, 'op4h-pgvs-TGlp-NdtR', 'buihuycuonga', 'buichuc1510@gmail.com', '1234567890', 'Việt Nam', 'Hưng Yên', NULL, 'số 8, ngõ 191', 2, '2017-07-03 20:40:26', '2017-07-03 21:09:44'),
(9, 'qIsO-CHPX-HeMm-I5dU', 'buihuycuong', 'buichuc1510@gmail.com', '1234567890', 'Việt Nam', 'Hưng Yên', NULL, 'số 8, ngõ 191', 1, '2017-07-03 20:40:45', '2017-07-03 21:10:19'),
(10, 'T4A8-mIKu-A1A7-qMWG', 'buihuycuongaq', 'buichuc1510@gmail.com', '01234567890', 'Việt Nam', 'Hà Nội', NULL, 'số 8, ngõ 191', 3, '2017-07-03 20:52:18', '2017-07-04 07:02:22'),
(11, 'K62V-UInj-zsP4-Uxxv', 'buihuycuong', 'buichuc1510@gmail.com', '1234567890', 'Việt Nam', 'Hưng Yên', NULL, 'số 8, ngõ 191', 3, '2017-07-03 21:00:11', '2017-07-04 07:13:01'),
(12, 'lA7B-oeDJ-5jns-SWuo', 'buihuycuong', 'buichuc1510@gmail.com', '1234567890', 'Việt Nam', 'Hưng Yên', NULL, 'số 8, ngõ 191', 2, '2017-07-03 21:09:25', '2017-07-12 11:26:55'),
(13, 'b2F9-P8ok-nipe-oRZX', 'buihuycuonga', 'buichuc1510@gmail.com', '1234567890', 'Việt Nam', 'Hưng Yên', NULL, 'số 8, ngõ 191', 1, '2017-07-04 07:41:28', '2017-09-11 11:46:44'),
(14, 'kofI-FtsS-PZjV-pSiU', 'buihuycuonga', 'buichuc1510@gmail.com', '1234567890', 'Việt Nam', 'Hưng Yên', NULL, 'số 8, ngõ 191', 3, '2017-07-04 08:21:30', '2017-07-12 11:31:31'),
(15, 'L90D-bLJq-GMkr-R0Rf', 'nam anh', 'namanh@kaober.com', '0981288934', 'Việt Nam', 'Hà Nội', NULL, 'minh khai hai ba trung', 3, '2017-07-04 11:34:02', '2017-09-23 05:42:49'),
(16, 'VmLC-9yoT-AvAO-2fRO', 'nam anh 1', 'namanh@kaober.com', '981288932', 'Việt Nam', 'Hà Nội', NULL, 'minh khai hai ba trung', 1, '2017-07-04 20:04:08', '2017-07-12 11:26:59'),
(17, 'BcpE-A7N8-rEgo-3k9z', 'buihuycuong', 'buihuycuong1510@gmail.com', '1234567890', 'Việt Nam', 'Hưng Yên', NULL, 'số 8, ngõ 191', 1, '2017-07-05 12:15:02', '2017-09-23 05:42:43'),
(18, '0Qtw-mqbU-DAJi-XQ3n', 'bui huy cuong', 'buihuycuong1510@gmail.com', '0979599045', 'Việt Nam', 'Hà Nội', NULL, 'số 8, ngõ 191', 0, '2017-07-05 12:16:49', '2017-07-05 12:16:49'),
(19, 'sUhD-Acux-3Tvr-rqvg', 'bui huy cuong', 'buihuycuong1510@gmail.com', '1234567890', 'Việt Nam', 'Hưng Yên', NULL, 'số 8, ngõ 191', 0, '2017-07-05 12:29:06', '2017-09-23 05:45:36'),
(20, 'm7ip-OGWI-hKJn-1Nf5', 'bui huy cuong', 'buihuycuong1510@gmail.com', '1234567890', 'Việt Nam', 'Hưng Yên', NULL, 'số 8, ngõ 191', 2, '2017-07-05 12:42:08', '2017-09-23 05:44:58'),
(21, 'w4bx-oxH9-JrSB-ViUm', 'buihuycuong', 'buichuc1510@gmail.com', '1234567890', 'Việt Nam', 'Hưng Yên', NULL, 'số 8, ngõ 191', 2, '2017-07-06 13:09:05', '2017-09-23 05:45:52'),
(22, 'sc64-VeDu-jqN6-rjnp', 'Huu Nam', 'demo.south.1907@gmail.com', '0976081803', 'Việt Nam', 'Hà Nội', NULL, 'Bach Mai', 0, '2017-09-15 08:22:49', '2017-09-15 08:22:49'),
(23, 'Sasw-Xv45-z0HD-Rt3P', 'Huu Nam', 'demo.south.1907@gmail.com', '0976081803', 'Việt Nam', 'Hà Nội', NULL, 'Bach Mai', 0, '2017-09-15 08:23:05', '2017-09-15 08:23:05'),
(24, 'c37K-bcOH-0LcQ-PoRy', 'Huu Nam', 'demo.south.1907@gmail.com', '0976081803', 'Việt Nam', 'Hà Nội', NULL, 'Bach Mai', 0, '2017-09-15 08:25:41', '2017-09-15 08:25:41'),
(25, 'n8is-SqWW-vyZF-wz5Q', 'Huu Nam', 'demo.south.1907@gmail.com', '0976081803', 'Việt Nam', 'Hà Nội', NULL, 'Bach Mai', 0, '2017-09-15 08:25:51', '2017-09-23 05:44:02'),
(26, 'GmEK-3xC3-Ukj8-2jEF', 'Huu Nam', 'demo.south.1907@gmail.com', '0976081803', 'Việt Nam', 'Hà Nội', NULL, 'Bach Mai', 2, '2017-09-15 08:26:01', '2017-09-23 05:44:30');

-- --------------------------------------------------------

--
-- Table structure for table `order_books`
--

CREATE TABLE `order_books` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_books`
--

INSERT INTO `order_books` (`order_id`, `title`, `email`, `phone`, `username`, `status`, `created_at`, `updated_at`) VALUES
(1, 'bạn hãy nói với chúng tôi', 'buihuycuong1510@gmail.com', '0979599045', 'Bùi Huy Cường', 0, '2017-06-28 03:03:00', '2017-06-28 03:03:00'),
(2, 'Thiện ác smartphone', 'buichuc1510@gmail.com', '0979599045', 'Bùi Huy Cường', 0, '2017-06-28 09:11:11', '2017-06-28 09:11:11'),
(3, 'thiên đường tình yêu', 'buihuycuong1510@gmail.com', '0979599045', 'Bùi Huy Cường', 0, '2017-06-29 13:14:33', '2017-06-29 13:14:33'),
(4, 'kaober', 'buihuycuong1510@gmail.com', '1234567890', 'buihuycuong1510', 0, '2017-07-05 12:46:22', '2017-07-05 12:46:22'),
(5, 'kaober', 'buihuycuong1510@gmail.com', '979599045', 'buihuycuong1510', 0, '2017-07-05 13:31:21', '2017-07-05 13:31:21');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `module` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_category_translations`
--

CREATE TABLE `product_category_translations` (
  `trans_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_category_translations`
--

INSERT INTO `product_category_translations` (`trans_id`, `title`, `description`, `cate_id`, `lang_id`, `created_at`, `updated_at`) VALUES
(1, 'Book', 'book', 3, 2, '2017-05-23 04:25:35', '2017-05-23 04:25:35'),
(2, 'Truyện ngắn', 'Truyện ngắn', 4, 2, '2017-06-28 08:47:52', '2017-06-28 08:47:52'),
(3, 'Kinh doanh', 'Kinh doanh', 5, 2, '2017-07-06 11:55:05', '2017-07-06 11:55:05');

-- --------------------------------------------------------

--
-- Table structure for table `product_orders`
--

CREATE TABLE `product_orders` (
  `po_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL DEFAULT '0',
  `quantity` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_orders`
--

INSERT INTO `product_orders` (`po_id`, `product_id`, `order_id`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(13, 17, 7, 122, 1, '2017-07-03 20:39:57', '2017-07-03 20:39:57'),
(14, 14, 7, 200, 1, '2017-07-03 20:39:57', '2017-07-03 20:39:57'),
(15, 15, 7, 135, 1, '2017-07-03 20:39:57', '2017-07-03 20:39:57'),
(16, 16, 8, 205, 3, '2017-07-03 20:40:26', '2017-07-03 20:40:26'),
(17, 17, 9, 122, 3, '2017-07-03 20:40:45', '2017-07-03 20:40:45'),
(18, 16, 10, 205, 2, '2017-07-03 20:52:18', '2017-07-03 20:52:18'),
(19, 17, 10, 122, 2, '2017-07-03 20:52:18', '2017-07-03 20:52:18'),
(20, 15, 11, 135, 2, '2017-07-03 21:00:11', '2017-07-03 21:00:11'),
(21, 14, 12, 200, 3, '2017-07-03 21:09:25', '2017-07-03 21:09:25'),
(22, 13, 12, 145, 1, '2017-07-03 21:09:25', '2017-07-03 21:09:25'),
(23, 15, 13, 135, 2, '2017-07-04 07:41:28', '2017-07-04 07:41:28'),
(24, 12, 14, 1000, 2, '2017-07-04 08:21:30', '2017-07-04 08:21:30'),
(25, 10, 14, 199, 3, '2017-07-04 08:21:30', '2017-07-04 08:21:30'),
(26, 17, 14, 122, 1, '2017-07-04 08:21:30', '2017-07-04 08:21:30'),
(27, 15, 14, 135, 1, '2017-07-04 08:21:30', '2017-07-04 08:21:30'),
(28, 15, 15, 135, 1, '2017-07-04 11:34:02', '2017-07-04 11:34:02'),
(29, 15, 16, 135, 2, '2017-07-04 20:04:08', '2017-07-04 20:04:08'),
(30, 13, 16, 145, 2, '2017-07-04 20:04:08', '2017-07-04 20:04:08'),
(31, 15, 17, 135, 4, '2017-07-05 12:15:02', '2017-07-05 12:15:02'),
(32, 16, 17, 205, 1, '2017-07-05 12:15:02', '2017-07-05 12:15:02'),
(33, 15, 18, 135, 2, '2017-07-05 12:16:49', '2017-07-05 12:16:49'),
(34, 14, 18, 200, 1, '2017-07-05 12:16:49', '2017-07-05 12:16:49'),
(35, 17, 19, 122, 1, '2017-07-05 12:29:06', '2017-07-05 12:29:06'),
(36, 16, 20, 205, 1, '2017-07-05 12:42:08', '2017-07-05 12:42:08'),
(37, 16, 21, 205, 1, '2017-07-06 13:09:05', '2017-07-06 13:09:05'),
(38, 17, 22, 122, 1, '2017-09-15 08:22:49', '2017-09-15 08:22:49'),
(39, 16, 22, 205, 1, '2017-09-15 08:22:49', '2017-09-15 08:22:49'),
(40, 17, 23, 122, 1, '2017-09-15 08:23:05', '2017-09-15 08:23:05'),
(41, 16, 23, 205, 1, '2017-09-15 08:23:05', '2017-09-15 08:23:05'),
(42, 17, 24, 122, 1, '2017-09-15 08:25:41', '2017-09-15 08:25:41'),
(43, 16, 24, 205, 1, '2017-09-15 08:25:41', '2017-09-15 08:25:41'),
(44, 13, 24, 145, 1, '2017-09-15 08:25:41', '2017-09-15 08:25:41'),
(45, 15, 24, 135, 1, '2017-09-15 08:25:41', '2017-09-15 08:25:41'),
(46, 17, 25, 122, 1, '2017-09-15 08:25:51', '2017-09-15 08:25:51'),
(47, 16, 25, 205, 1, '2017-09-15 08:25:51', '2017-09-15 08:25:51'),
(48, 13, 25, 145, 1, '2017-09-15 08:25:51', '2017-09-15 08:25:51'),
(49, 15, 25, 135, 1, '2017-09-15 08:25:51', '2017-09-15 08:25:51'),
(50, 17, 26, 122, 1, '2017-09-15 08:26:01', '2017-09-15 08:26:01'),
(51, 16, 26, 205, 1, '2017-09-15 08:26:01', '2017-09-15 08:26:01'),
(52, 13, 26, 145, 1, '2017-09-15 08:26:01', '2017-09-15 08:26:01'),
(53, 15, 26, 135, 1, '2017-09-15 08:26:01', '2017-09-15 08:26:01');

-- --------------------------------------------------------

--
-- Table structure for table `quanhuyens`
--

CREATE TABLE `quanhuyens` (
  `quan_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `shop_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slogan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'shop.png',
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci,
  `meta_keyword` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hotline` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`shop_id`, `title`, `description`, `slug`, `status`, `address`, `slogan`, `user_id`, `thumbnail`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`, `hotline`) VALUES
(1, 'Kaober', 'Kaober - giải pháp thương mại điện tử đa quốc gia.', 'kaober', 1, 'Số 1 Lương Yên, Hà Nội', 'Trí tuệ làm nên tính thượng lưu', 1, 'kaober.png', 'kaober.com', 'kaober.com', NULL, NULL, 1236368360),
(2, 'Taodex', '<p>Taodex: huy động vốn cộng đồng</p>', 'taodex', 1, 'Số 1, Lương Yên, Hai Bà Trưng, Hà Nội', 'Hơn cả niềm tin', 1, 'taodex-23sq705vzF.jpg', 'taodex', NULL, '2017-06-02 00:05:00', '2017-06-02 00:05:00', 98765432);

-- --------------------------------------------------------

--
-- Table structure for table `shop_categories`
--

CREATE TABLE `shop_categories` (
  `cate_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'shopcate.png',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_categories`
--

INSERT INTO `shop_categories` (`cate_id`, `title`, `slug`, `description`, `thumbnail`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Iphone', 'iphone', 'The iPhone Upgrade Program is available to qualified customers and requires service with AT&T, Sprint, T-Mobile or Verizon. A two-year installment loan and iPhone activation are required. Terms apply.', 'iphone.png', 1, NULL, NULL),
(2, 'Ipad', 'ipad', 'The iPhone Upgrade Program is available to qualified customers and requires service with AT&T, Sprint, T-Mobile or Verizon. A two-year installment loan and iPhone activation are required. Terms apply.', 'iphone.png', 1, NULL, NULL),
(3, 'Sách', 'sach', 'sách các loại', 'shopcate.png', 1, '2017-05-23 04:25:35', '2017-05-23 04:25:35'),
(4, 'Truyện ngắn', 'truyen-ngan', 'Truyện ngắn', 'shopcate.png', 1, '2017-06-28 08:47:52', '2017-06-28 08:47:52'),
(5, 'Kinh doanh', 'kinh-doanh', 'Kinh doanh', 'shopcate.png', 1, '2017-07-06 11:55:05', '2017-07-06 11:55:05');

-- --------------------------------------------------------

--
-- Table structure for table `shop_products`
--

CREATE TABLE `shop_products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL DEFAULT '0',
  `discount` int(11) NOT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'thumbproduct.png',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `cate_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `shop_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci,
  `meta_keyword` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_products`
--

INSERT INTO `shop_products` (`product_id`, `title`, `description`, `price`, `discount`, `thumbnail`, `slug`, `status`, `cate_id`, `shop_id`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(1, 'iphone 7', '<p><strong>iphone 7&nbsp;iphone </strong>7&nbsp;iphone 7&nbsp;iphone 7&nbsp;iphone 7v&nbsp;iphone 7</p>', 102, 100, 'iphone-7-ncpq1u4HYX.jpg', 'iphone-7', 1, 1, 1, 'iphone 7', 'iphone 7', '2017-06-01 03:35:19', '2017-06-18 01:14:40'),
(2, 'Sách trò chơi lớn trong kinh doanh', '<p>S&aacute;ch tr&ograve; chơi lớn trong kinh doanh</p>', 89, 80, 'sach-tro-choi-lon-trong-kinh-doanh-2ZVtDA0t9E.jpg', 'sach-tro-choi-lon-trong-kinh-doanh', 1, 3, 1, 'Sách trò chơi lớn trong kinh doanh', 'Sách trò chơi lớn trong kinh doanh', '2017-06-02 00:13:14', '2017-06-18 01:14:23'),
(3, 'Dám nghĩ lớn', '<p>D&aacute;m nghĩ lớn</p>', 69, 69, 'dam-nghi-lon-vHbzI7DD18.jpg', 'dam-nghi-lon', 1, 3, 2, 'Dám nghĩ lớn', 'Dám nghĩ lớn', '2017-06-02 00:46:52', '2017-06-18 01:15:13'),
(6, 'Sức mạnh của ngôn từ', '<p>Sức mạnh của ng&ocirc;n từ</p>', 80, 72, 'suc-manh-cua-ngon-tu-WeTqOuxe2Q.jpg', 'suc-manh-cua-ngon-tu', 1, 3, 2, 'Sức mạnh của ngôn từ', 'Sức mạnh của ngôn từ', '2017-06-03 01:11:47', '2017-06-24 19:37:26'),
(7, 'Quốc Gia Khởi Nghiệp', '<h2>Quốc Gia Khởi Nghiệp</h2>', 100, 100, 'quoc-gia-khoi-nghiep-vHQEfzSrTz.jpg', 'quoc-gia-khoi-nghiep', 1, 3, 1, 'Quốc Gia Khởi Nghiệp', 'Quốc Gia Khởi Nghiệp', '2017-06-17 21:42:32', '2017-06-24 19:36:06'),
(8, 'Chiến Lược Đại Dương Xanh (Tái Bản)', '<p>Vậy Chiến lược Đại dương xanh l&agrave; g&igrave;? C&aacute;c t&aacute;c giả đ&atilde; giải th&iacute;ch bằng c&aacute;ch so s&aacute;nh với chiến lược đại dương đỏ, tức l&agrave; lối suy nghĩ truyền thống th&ocirc;ng thường:<br />\r\n<br />\r\n1. ĐỪNG cạnh tranh trong khoảng thị trường đang tồn tại, H&Atilde;Y tạo ra một thị trường kh&ocirc;ng c&oacute; cạnh tranh.<br />\r\n2. ĐỪNG đ&aacute;nh bại đối thủ cạnh tranh, H&Atilde;Y l&agrave;m cho cạnh tranh trở n&ecirc;n kh&ocirc;ng cần thiết.<br />\r\n3. ĐỪNG khai th&aacute;c tiếp c&aacute;c nhu cầu hiện c&oacute;, H&Atilde;Y tạo ra v&agrave; gi&agrave;nh lấy c&aacute;c nhu cầu mới.<br />\r\n4. ĐỪNG cố gắng c&acirc;n bằng gi&aacute; trị/chi ph&iacute;, H&Atilde;Y ph&aacute; vỡ c&acirc;n bằng gi&aacute; trị/chi ph&iacute;.<br />\r\n5. ĐỪNG đặt to&agrave;n bộ hoạt động của c&ocirc;ng ty trong việc theo đuổi sự kh&aacute;c biệt hoặc theo đuổi chi ph&iacute; thấp, H&Atilde;Y đặt to&agrave;n bộ hoạt động của c&ocirc;ng ty trong chiến lược vừa theo đuổi sự kh&aacute;c biệt, đồng thời vừa theo đuổi chi ph&iacute; thấp.</p>', 139, 139, 'chien-luoc-dai-duong-xanh-tai-ban-7kRz6a1K4H.jpg', 'chien-luoc-dai-duong-xanh-tai-ban', 1, 3, 1, 'Chiến Lược Đại Dương Xanh', 'Chiến Lược Đại Dương Xanh', '2017-06-17 21:52:56', '2017-06-17 21:52:56'),
(9, 'Business Model Generation - Tạo Lập Mô Hình Kinh Doanh', '<p><strong>Tạo lập m&ocirc; h&igrave;nh kinh doanh&nbsp;</strong>l&agrave; cuốn sổ tay d&agrave;nh cho những doanh nh&acirc;n c&oacute; khao kh&aacute;t thay đổi, khao kh&aacute;t vươn l&ecirc;n.<br />\r\nQua cuốn s&aacute;ch bạn sẽ:&nbsp;<br />\r\n- Biết được c&aacute;ch thiết kế v&agrave; thực hiện c&oacute; hệ thống m&ocirc; h&igrave;nh kinh doanh mang t&iacute;nh đột ph&aacute; - hoặc ph&acirc;n t&iacute;ch v&agrave; t&aacute;i tạo một m&ocirc; h&igrave;nh cũ.<br />\r\n- Hiểu r&otilde; hơn về kh&aacute;ch h&agrave;ng, c&aacute;c k&ecirc;nh ph&acirc;n phối, đối t&aacute;c, d&ograve;ng doanh thu, chi ph&iacute; v&agrave; gi&aacute; trị cốt l&otilde;i của m&igrave;nh....<br />\r\n<br />\r\n<strong>Tạo lập m&ocirc; h&igrave;nh kinh doanh</strong>&nbsp;mang đến cho bạn những kỹ thuật s&aacute;ng tạo thiết thực đang được c&aacute;c nh&agrave; tư vấn kinh doanh v&agrave; c&aacute;c c&ocirc;ng ty h&agrave;ng đầu thế giới sử dụng. Với đối tượng độc giả mục ti&ecirc;u l&agrave; những con người h&agrave;nh động, cuốn s&aacute;ch được thiết kế theo hướng trực quan, dễ hiểu, dễ &aacute;p dụng. Cuốn s&aacute;ch d&agrave;nh cho những người sẵn s&agrave;ng vứt bỏ đường lối tư duy cũ để tiếp nhận những m&ocirc; h&igrave;nh s&aacute;ng tạo gi&aacute; trị mới. Do đ&oacute;, n&oacute; ph&ugrave; hợp với c&aacute;c l&atilde;nh đạo, cố vấn v&agrave; c&aacute;c doanh nh&acirc;n của mọi tổ chức.<br />\r\nNếu bạn đ&atilde; sẵn s&agrave;ng thay đổi th&ocirc;ng lệ, ch&agrave;o mừng bạn đến với &quot;Tạo lập m&ocirc; h&igrave;nh kinh doanh&quot;.</p>', 199, 199, 'business-model-generation-tao-lap-mo-hinh-kinh-doanh-N62Ie92AcU.jpg', 'business-model-generation-tao-lap-mo-hinh-kinh-doanh', 1, 3, 1, 'Tạo Lập Mô Hình Kinh Doanh', 'Tạo Lập Mô Hình Kinh Doanh', '2017-06-17 21:54:57', '2017-06-18 01:16:14'),
(10, 'Tư Duy Nhanh Và Chậm', '<p><strong><em>Thinking fast and slow</em></strong><em>&nbsp;-&nbsp;<strong>Tư duy nhanh v&agrave; chậm&nbsp;</strong>&nbsp;- cuốn s&aacute;ch&nbsp;được Tạp ch&iacute; T&agrave;i ch&iacute;nh Mỹ đặc biệt đ&aacute;nh gi&aacute; l&agrave; &ldquo;một kiệt t&aacute;c&rdquo; trong việc n&oacute;i về t&iacute;nh hợp l&yacute;, phi l&yacute; của con người trong tư duy, trong việc đ&aacute;nh gi&aacute; v&agrave; ra quyết định.</em><br />\r\n<br />\r\nTrong cuộc sống, d&ugrave; bạn c&oacute; cẩn trọng đến mức n&agrave;o th&igrave; vẫn c&oacute; những l&uacute;c bạn đưa ra những quyết định dựa tr&ecirc;n cảm t&igrave;nh chủ quan của m&igrave;nh.&nbsp;<strong>Thinking fast and slow</strong>, cuốn s&aacute;ch nổi tiếng tổng hợp tất cả nghi&ecirc;n cứu được tiến h&agrave;nh qua nhiều thập kỷ của nh&agrave; t&acirc;m l&yacute; học từng đạt giải Nobel Kinh tế&nbsp;<strong>Daniel Kahneman</strong>&nbsp;sẽ cho bạn thấy những sư hợp l&yacute; v&agrave; phi l&yacute; trong tư duy bản th&acirc;n. Cuốn s&aacute;ch được đ&aacute;nh gi&aacute; l&agrave; &ldquo;kiệt t&aacute;c&rdquo; trong việc thay đổi h&agrave;nh vi của con người,&nbsp;<strong>Thinking fast and slow</strong>&nbsp;đ&atilde; gi&agrave;nh được v&ocirc; số giải thưởng danh gi&aacute;, lọt v&agrave;o Top 11 cuốn&nbsp;<a href=\"http://bizspace.vn/kinh-doanh/bai-hoc-kinh-doanh\">s&aacute;ch kinh doanh</a>&nbsp;hấp dẫn nhất năm 2011. Cuốn s&aacute;ch được Alpha Books mua bản quyền v&agrave; xuất bản v&agrave;o Qu&yacute; I năm nay.&nbsp;<strong>Thinking fast and slow</strong>&nbsp;d&ugrave; l&agrave; cuốn s&aacute;ch c&oacute; t&iacute;nh h&agrave;n l&acirc;m cao nhưng được truyền tải một c&aacute;ch vui nhộn v&agrave; dễ hiểu, hứa hẹn sẽ mang lại cho bạn đọc nhiều kiến thức mới mẻ, bổ &iacute;ch.<br />\r\n<br />\r\n<strong>Thinking fast and slow</strong>&nbsp;sẽ đưa ra v&agrave; l&yacute; giải hai hệ thống tư duy t&aacute;c động đến con đường nhận thức của bạn. Kahneman gọi đ&oacute; l&agrave;: hệ thống 1 v&agrave; hệ thống 2. Hệ thống 1, c&ograve;n gọi l&agrave; cơ chế nghĩ nhanh, tự động, thường xuy&ecirc;n được sử dụng, cảm t&iacute;nh, rập khu&ocirc;n v&agrave; tiềm thức. Hệ thống 2, c&ograve;n gọi l&agrave; cơ chế nghĩ chậm, đ&ograve;i hỏi &iacute;t nỗ lực, &iacute;t được sử dụng, d&ugrave;ng logic c&oacute; t&iacute;nh to&aacute;n v&agrave; &yacute; thức. Trong một loạt th&iacute; nghiệm t&acirc;m l&yacute; mang t&iacute;nh ti&ecirc;n phong, Kahneman v&agrave; Tversky chứng minh rằng, con người ch&uacute;ng ta thường đi đến quyết định theo cơ chế nghĩ nhanh hơn l&agrave; ghĩ chậm. Phần lớn nội dung của cuốn s&aacute;ch chỉ ra những sai lầm của con người khi suy nghĩ theo hệ thống 1. Kahneman chứng minh rằng ch&uacute;ng ta tệ hơn những g&igrave; ch&uacute;ng ta tưởng: đ&oacute; l&agrave; ch&uacute;ng ta kh&ocirc;ng biết những g&igrave; ch&uacute;ng ta kh&ocirc;ng biết!<br />\r\n<br />\r\n<strong>Thinking fast and slow&nbsp;</strong>đ&aacute;p ứng hai ti&ecirc;u ch&iacute; của một cuốn s&aacute;ch hay, thứ nhất n&oacute; th&aacute;ch thức quan điểm của người đọc, thứ hai, n&oacute; kh&ocirc;ng phải l&agrave; những trang s&aacute;ch với những con chữ kh&ocirc; cứng m&agrave; v&ocirc; c&ugrave;ng vui nhộn v&agrave; hấp dẫn. Kh&ocirc;ng nghi ngờ g&igrave; nữa, đ&acirc;y l&agrave; cuốn s&aacute;ch h&agrave;n l&acirc;m d&agrave;nh cho tất cả mọi người.!<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>Th&ocirc;ng tin t&aacute;c giả: Daniel Kahneman</strong>, sinh năm 1934, nh&agrave; t&acirc;m l&yacute; học người Mỹ&nbsp; gốc Israel đ&atilde; d&agrave;nh giải Nobel Kinh tế năm 2002. &Ocirc;ng d&agrave;nh cả cuộc đời của m&igrave;nh để nghi&ecirc;n cứu về t&acirc;m l&yacute; học h&agrave;nh vi con người. C&ugrave;ng với người cộng sự đ&atilde; qua đời Amos Tversky, hai &ocirc;ng đ&atilde; c&oacute; được những nghi&ecirc;n cứu s&acirc;u sắc về con đường tư duy v&agrave; nhận thức của con người.</p>', 199, 199, 'tu-duy-nhanh-va-cham-lMlBpPJusM.jpg', 'tu-duy-nhanh-va-cham', 1, 3, 1, 'Tư Duy Nhanh Và Chậm', 'Tư Duy Nhanh Và Chậm', '2017-06-17 21:56:40', '2017-06-24 19:34:10'),
(11, 'lean startup', '<p>lean startup</p>', 100, 100, 'lean-startup-6ZARNDtqb2.jpg', 'khh-xc', 1, 3, 1, 'lean startup', 'lean startup', '2017-06-19 07:42:24', '2017-06-24 19:31:57'),
(12, 'Trại Trẻ Đặc Biệt Của Cô Peregrine', '<p>Jacob lớn l&ecirc;n c&ugrave;ng những c&acirc;u chuyện &ocirc;ng nội thường hay kể. C&acirc;u chuyện về thưở thiếu thời &ocirc;ng đ&atilde; trải qua tại một trại trẻ đ&atilde; được ph&ugrave; ph&eacute;p, nơi sinh sống của những đứa trẻ sở hữu năng lực phi thường: một c&ocirc; b&eacute; biết bay, một cậu b&eacute; t&agrave;ng h&igrave;nh, một c&ocirc; b&eacute; c&oacute; thể tạo ra lửa...</p>\r\n\r\n<p>Năm th&aacute;ng qua đi, Jacob dần kh&ocirc;ng c&ograve;n tin v&agrave;o những điều ph&ugrave; phiếm, cậu đặt những bước đi đầu ti&ecirc;n v&agrave;o một cuộc sống nhung lụa &ecirc;m đềm do bố mẹ b&agrave;y sẵn trước mắt. Nhưng c&aacute;i c&aacute;i chết đột ngột của người &ocirc;ng cậu k&iacute;nh y&ecirc;u nhất đ&atilde; l&agrave;m thay đổi tất cả. Theo lời trăng trối của &ocirc;ng, cậu l&ecirc;n t&agrave;u t&igrave;m kiếm trại trẻ từng được nhắc đến trong những c&acirc;u chuyện xa xưa. V&agrave; ch&iacute;nh tại đ&acirc;y, cậu kh&ocirc;ng chỉ kh&aacute;m ph&aacute; ra b&iacute; mật động trời về th&acirc;n thế của m&igrave;nh, m&agrave; c&ograve;n bước ch&acirc;n v&agrave;o một cuộc phi&ecirc;u lưu sẽ biến cuộc đời tầm thường tẻ nhạt vốn c&oacute; của cậu sang một trang mới vĩnh viễn kh&ocirc;ng thể quay đầu...</p>', 1000, 1000, 'trai-tre-dac-biet-cua-co-peregrine-rSIlqVSEuj.jpg', 'trai-tre-dac-biet-cua-co-peregrine', 1, 3, 1, 'Trại Trẻ Đặc Biệt Của Cô Peregrine', 'Trại Trẻ Đặc Biệt Của Cô Peregrine', '2017-06-26 01:40:34', '2017-06-26 01:40:34'),
(13, 'Chân Trời Đảo Ngược', '<p><strong>Ch&acirc;n Trời Đảo Ngược</strong></p>\r\n\r\n<p>&Yacute; thức của ch&uacute;ng ta nằm ở đ&acirc;u?</p>\r\n\r\n<p>Liệu ch&uacute;ng ta c&oacute; thể sao ch&eacute;p v&agrave; lưu giữ k&yacute; ức b&ecirc;n ngo&agrave;i th&acirc;n x&aacute;c con người kh&ocirc;ng?</p>\r\n\r\n<p>Liệu&nbsp;<a href=\"http://tiki.vn/tieu-thuyet-tinh-cam-lang-man/c844\">t&igrave;nh y&ecirc;u</a>&nbsp;c&oacute; thể đảo ngược quy luật khắc nghiệt về sự hữu hạn của cuộc sống trong thời gian v&agrave; kh&ocirc;ng gian?</p>\r\n\r\n<p>X&uacute;c động, ly kỳ nhưng cũng đầy h&agrave;i hước v&agrave; lạc quan, Marc Levy đưa ch&uacute;ng ta đến với c&acirc;u chuyện t&igrave;nh th&aacute;ch thức thời gian, kh&ocirc;ng gian v&agrave; bệnh tật, khiến ta tr&acirc;n trọng hơn những điều tưởng chừng nhỏ b&eacute; trong cuộc sống.</p>\r\n\r\n<p>&quot;Một trong những&nbsp;<a href=\"http://tiki.vn/sach-truyen-tieng-viet/sach-van-hoc.html\">tiểu thuyết</a>&nbsp;x&uacute;c động nhất của Marc Levy.&nbsp;<strong>Người đẹp ngủ trong rừng&nbsp;</strong>phi&ecirc;n bản 2.0, với một trong những nh&acirc;n vật nữ th&agrave;nh c&ocirc;ng nhất.&quot;</p>', 145, 145, 'chan-troi-dao-nguoc-uqYDxf1DMK.jpg', 'chan-troi-dao-nguoc', 1, 3, 1, 'Chân Trời Đảo Ngược', 'Chân Trời Đảo Ngược', '2017-06-26 01:43:41', '2017-06-26 01:43:41'),
(14, 'Chuyến Du Hành Kỳ Lạ Của Ngài Daldry', '<p><strong>Chuyến Du H&agrave;nh Kỳ Lạ Của Ng&agrave;i Daldry</strong></p>\r\n\r\n<p><em>&ldquo;Người đ&agrave;n &ocirc;ng quan trọng nhất đời con vừa mới đ&acirc;y th&ocirc;i đ&atilde; lướt qua ph&iacute;a sau con. Giờ th&igrave; người đ&oacute; kh&ocirc;ng c&ograve;n ở đ&acirc;y nữa. Để t&igrave;m được anh ta, con sẽ phải trải qua một h&agrave;nh tr&igrave;nh d&agrave;i v&agrave; con phải gặp s&aacute;u người kh&aacute;c rồi mới tới người đ&oacute;&hellip;</em></p>\r\n\r\n<p><em>Trong con c&oacute; hai cuộc đời Alice ạ. Một l&agrave; cuộc đời m&agrave; con đang sống v&agrave; một cuộc đời kh&aacute;c đ&atilde; chờ đợi con bấy l&acirc;u nay.&rdquo;</em></p>\r\n\r\n<p>Lu&acirc;n Đ&ocirc;n, 1950</p>\r\n\r\n<p>Sau lời ti&ecirc;n đo&aacute;n đầy b&iacute; hiểm của b&agrave; thầy b&oacute;i tại Brighton, Alice quyết định từ bỏ cuộc sống b&igrave;nh lặng để l&ecirc;n đường với người h&agrave;ng x&oacute;m c&ugrave;ng tầng, Ng&agrave;i Daldry, khởi đầu một h&agrave;nh tr&igrave;nh đầy kỳ lạ. V&agrave; rồi hạnh ph&uacute;c được t&igrave;m thấy ở ch&iacute;nh nơi &iacute;t ai ngờ tới nhất...</p>\r\n\r\n<p>Hồi hộp, &aacute;m ảnh, giằng x&eacute;, nhưng cũng đầy chất thơ c&ugrave;ng cảm gi&aacute;c &ecirc;m đềm từ những k&yacute; ức m&ugrave;i hương, tất cả những cảm x&uacute;c ấy h&ograve;a trộn tạo n&ecirc;n một trong những&nbsp;<a href=\"http://tiki.vn/sach-truyen-tieng-viet/sach-van-hoc.html\">tiểu thuyết</a>&nbsp;được coi l&agrave; xuất sắc nhất của Marc Levy.</p>', 200, 200, 'chuyen-du-hanh-ky-la-cua-ngai-daldry-mKLNgkGB6j.jpg', 'chuyen-du-hanh-ky-la-cua-ngai-daldry', 1, 3, 1, 'Chuyến Du Hành Kỳ Lạ Của Ngài Daldry', 'Chuyến Du Hành Kỳ Lạ Của Ngài Daldry', '2017-06-26 02:09:21', '2017-06-26 02:09:21'),
(15, 'Em Ở Đâu', '<p><strong>Em ở đ&acirc;u?</strong>&nbsp;chia l&agrave;m hai phần r&otilde; rệt với nh&acirc;n vật ch&iacute;nh l&agrave; Phillip, một ch&agrave;ng thanh ni&ecirc;n to&agrave;n diện. Đẹp trai, th&ocirc;ng minh, t&agrave;i giỏi v&agrave; chứa chan t&igrave;nh cảm, Phillip lẽ ra đ&atilde; xứng đ&aacute;ng hưởng hạnh ph&uacute;c tr&ograve;n vẹn nếu kh&ocirc;ng c&oacute; những trớ tr&ecirc;u của số phận.C&acirc;u chuyện bắt đầu tr&ecirc;n phi trường Neward, trong cuộc chia tay kh&ocirc;ng hẹn trước của Phillip v&agrave; Susan - một mối t&igrave;nh thanh mai tr&uacute;c m&atilde;, đắm say nhất, thực sự nhất, m&atilde;i m&atilde;i &aacute;m ảnh cuộc đời Phillip. Kh&ocirc;ng biết tự bao giờ, hai người bạn nhỏ h&agrave;ng x&oacute;m lớn l&ecirc;n b&ecirc;n nhau, họ y&ecirc;u nhau như lẽ tự nhi&ecirc;n của trời đất. C&ugrave;ng chia sẻ tuổi thơ, c&ugrave;ng chia sẻ nụ h&ocirc;n thứ nhất, rồi đam m&ecirc; t&igrave;nh y&ecirc;u đầu đời, tưởng chừng họ sinh ra để d&agrave;nh cho nhau.</p>\r\n\r\n<p>Nhưng năm 14 tuổi, bi kịch xảy ra với Susan khi cha mẹ c&ocirc; bị tai nạn xe hơi v&agrave; qua đời. Phillip chia sẻ c&ugrave;ng c&ocirc; mọi mất m&aacute;t. D&ugrave; vậy, tr&aacute;i tim Susan đ&atilde; bị tổn thương s&acirc;u nặng, v&agrave; c&ocirc; d&agrave;nh hết mơ ước đời người cho việc l&agrave;m từ thiện, để xoa dịu những ai đ&atilde; phải đau khổ như c&ocirc;. Vừa học hết trung cấp, rất trẻ, Susan quyết định đến Hondurat - đất nước Trung Mỹ đang ngập trong thảm họa thi&ecirc;n nhi&ecirc;n. Họ xa nhau, v&agrave; chỉ c&ograve;n c&oacute; thể y&ecirc;u nhau, chia sẻ cuộc đời tr&ecirc;n những l&aacute; thư. Susan đối mặt với cuộc sống gian khổ ở Hondurat, trở th&agrave;nh một nh&acirc;n vi&ecirc;n trợ cứu nh&acirc;n đạo c&oacute; uy t&iacute;n, được y&ecirc;u mến. Phillip bước v&agrave;o đại học. Mỗi người một l&yacute; tưởng, họ vẫn y&ecirc;u nhau, nhưng nỗi c&ocirc; đơn dần x&acirc;m chiếm họ. O&aacute;i ăm hơn cho Phillip, khi Susan trở về, c&ocirc; chỉ c&oacute; v&agrave;i giờ để gặp anh, cũng tr&ecirc;n s&acirc;n bay Neward, v&agrave; rồi lại ra đi, vội v&agrave;ng, kh&ocirc;ng hứa hẹn. Lần sau nữa, cũng l&agrave; như vậy. Họ biết rằng, sẽ l&agrave; c&ocirc;ng bằng hơn, nếu họ chia sẻ nỗi c&ocirc; đơn của m&igrave;nh với những cuộc đời kh&aacute;c. Nhưng điều đ&oacute; thật kh&ocirc;ng dễ d&agrave;ng. Susan t&igrave;m hơi ấm ở nhiều người kh&ocirc;ng quen biết. Phillip kết h&ocirc;n với một người con g&aacute;i kh&aacute;c, đ&oacute; l&agrave; Mary. Một v&agrave;i l&aacute; thư nữa, rồi họ mất dấu trong đời, d&ugrave; m&atilde;i &aacute;m ảnh nhau.</p>', 135, 135, 'em-o-dau-0k4oFUoQvN.jpg', 'em-o-dau', 1, 3, 1, 'Em Ở Đâu', 'Em Ở Đâu', '2017-06-26 02:23:34', '2017-06-26 02:23:34'),
(16, 'Ngày Đầu Tiên (Tái Bản 2014)', '<p>Một vật kỳ lạ được t&igrave;m thấy trong l&ograve;ng ngọn n&uacute;i lửa đ&atilde; tắt đảo lộn to&agrave;n bộ những g&igrave; con người tưởng rằng đ&atilde; biết về sự ra đời của thế giới.</p>\r\n\r\n<p>Ch&agrave;ng l&agrave; nh&agrave; vật l&yacute; thi&ecirc;n văn, n&agrave;ng l&agrave; nh&agrave; khảo cổ học. Họ c&ugrave;ng nhau trải nghiệm chuyến phi&ecirc;u lưu l&agrave;m thay đổi cả cuộc đời&hellip;</p>\r\n\r\n<p>Marc Levy l&agrave; một trong những&nbsp;<a href=\"http://tiki.vn/sach-truyen-tieng-viet/sach-van-hoc.html\">tiểu thuyết</a>&nbsp;gia nổi tiếng nhất nước Ph&aacute;p, hiện sống tại Lu&acirc;n Đ&ocirc;n.</p>\r\n\r\n<p>Những t&aacute;c phẩm của Marc Levy được Nh&atilde;&nbsp;Nam&nbsp;xuất bản</p>\r\n\r\n<p>-<em>&nbsp;Nếu em kh&ocirc;ng phải một giấc mơ</em></p>\r\n\r\n<p><em>- Kiếp sau</em></p>\r\n\r\n<p><em>- Bảy ng&agrave;y cho m&atilde;i m&atilde;i</em></p>\r\n\r\n<p><em>- Bạn t&ocirc;i t&igrave;nh t&ocirc;i</em></p>\r\n\r\n<p><em>- Gặp lại</em></p>\r\n\r\n<p><em>- Em ở đ&acirc;u?</em></p>\r\n\r\n<p><em>- Những đứa con của tự do</em></p>\r\n\r\n<p><em>- Mọi điều ta chưa n&oacute;i</em></p>\r\n\r\n<p><em>- Ng&agrave;y đầu ti&ecirc;n</em></p>', 205, 205, 'ngay-dau-tien-tai-ban-2014-tptaP49DQJ.jpg', 'ngay-dau-tien-tai-ban-2014', 1, 3, 2, 'Ngày Đầu Tiên (Tái Bản 2014)', 'Ngày Đầu Tiên (Tái Bản 2014)', '2017-06-26 03:13:15', '2017-06-26 03:13:15'),
(17, 'Chú Chó Không Nhà', '<p>T&ecirc;n t&ocirc;i l&agrave; Cally Louise Fisher v&agrave; t&ocirc;i đ&atilde; kh&ocirc;ng n&oacute;i chuyện trong 31 ng&agrave;y.</p>\r\n\r\n<p>N&oacute;i chuyện kh&ocirc;ng phải l&uacute;c n&agrave;o cũng gi&uacute;p mang đến mọi điều, d&ugrave; cho bạn mong muốn rất nhiều.</p>\r\n\r\n<p>Cally Fisher thấy người mẹ đ&atilde; mất của c&ocirc; tươi s&aacute;ng, thực tế v&agrave; sống động. Nhưng kh&ocirc;ng ai tin c&ocirc; b&eacute;, v&igrave; vậy Cally kh&ocirc;ng n&oacute;i nữa. Rồi c&oacute; một ch&uacute; ch&oacute; săn lu&ocirc;n d&otilde;i theo Cally mọi nơi. C&oacute; lẽ n&oacute; biết c&ocirc; b&eacute; n&oacute;i thật&hellip;</p>\r\n\r\n<p>Nhưng l&agrave;m thế n&agrave;o Cally c&oacute; thể thuyết phục bất cứ ai vẫn tin rằng mẹ vẫn c&ograve;n, &ldquo;Ch&uacute; ch&oacute; kh&ocirc;ng nh&agrave;&rdquo; l&agrave; li&ecirc;n kết cuối c&ugrave;ng của mọi người trong gia đ&igrave;nh với c&ocirc; ấy?</p>', 122, 122, 'chu-cho-khong-nha-iqgfcGhbUV.jpg', 'chu-cho-khong-nha', 1, 3, 1, 'Chú Chó Không Nhà', 'Chú Chó', '2017-06-26 19:41:39', '2017-06-26 19:41:39'),
(18, 'Quyền Năng Bí Ẩn', '<p>\r\n\r\n</p><p>Càng đọc, tôi càng hiểu được mục đích của tác giả qua cuốn sách này là gì! Anh đang nỗ lực dùng những năm tháng mày mò về PR, dùng những quan sát quý báu đúc kết được để thức tỉnh những con người đang bị nhiều thế lực vô hình ngấm ngầm điều khiển hành vi mua hàng của họ. Chúng ta đang chỉ như những người bị mất kiểm soát đối với quyền quyết định lựa chọn của chính mình. Tôi đã dần nhận ra lý do vì sao mình lại mua món hàng này mà không phải món hàng kia, tại sao lại thích điều này hơn điều kia, tại sao lại chọn thứ này, tại sao lại thích đội bóng này hơn đội kia, tại sao mình lại không có đức tin trong khi anh em mình thì lại có...Quyền năng bí ẩn, cái tên khi thoáng đọc lên, tôi mường tượng ra một quyển sách viết về những câu chuyện nào ấy cổ xưa lắm. Cầm trên tay quyển sách bìa ngả vàng sau khi rút nó ra khỏi vỏ họp, cảm nhận sức nặng từ cuốn sách, đoán chắc cũng khoảng 400 trang. Tôi tin rằng đây là cả một tâm huyết lớn lao của người viết, một quyển sách của đam mê.<br></p>\r\n\r\n<br><p></p>', 105, 105, 'quyen-nang-bi-an-Ex1JPuWoQ0.jpg', 'quyen-nang-bi-an', 1, 1, 2, 'Quyền Năng Bí Ẩn', 'Quyền Năng Bí Ẩn', '2017-07-05 13:48:41', '2017-07-05 13:48:41');

-- --------------------------------------------------------

--
-- Table structure for table `shop_product_attributes`
--

CREATE TABLE `shop_product_attributes` (
  `attribute_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_product_attributes`
--

INSERT INTO `shop_product_attributes` (`attribute_id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Nhà xuất bản', 'Nhà xuất bản', 1, NULL, NULL),
(6, 'Công ty phát hành', 'Công ty phát hành', 1, NULL, NULL),
(7, 'Tác giả', 'Tác giả', 1, NULL, NULL),
(8, 'Số trang', 'Số trang', 1, NULL, NULL),
(9, 'Kích thước', 'Kích thước', 1, NULL, NULL),
(10, 'SKU', 'SKU', 1, NULL, NULL),
(11, 'Trọng lượng vận chuyển', 'Trọng lượng vận chuyển', 1, NULL, NULL),
(12, 'Ngày xuất bản', 'Ngày xuất bản', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shop_product_comments`
--

CREATE TABLE `shop_product_comments` (
  `comment_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop_product_orders`
--

CREATE TABLE `shop_product_orders` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `keyorder` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop_product_rates`
--

CREATE TABLE `shop_product_rates` (
  `rate_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop_product_reviews`
--

CREATE TABLE `shop_product_reviews` (
  `review_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `star` int(11) NOT NULL DEFAULT '5',
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_product_reviews`
--

INSERT INTO `shop_product_reviews` (`review_id`, `product_id`, `review`, `lang_id`, `status`, `created_at`, `updated_at`, `star`, `user_id`) VALUES
(5, 17, 'awesome book', 1, 1, '2017-06-26 19:50:21', '2017-06-26 19:50:21', 5, 1),
(6, 17, 'done', 1, 0, '2017-06-26 19:58:17', '2017-06-26 19:58:17', 5, 1),
(7, 17, 'sdfsdfs', 1, 0, '2017-06-26 20:12:16', '2017-06-26 20:12:16', 5, 1),
(8, 17, 'aaaaa', 1, 0, '2017-06-26 20:13:14', '2017-06-26 20:13:14', 5, 1),
(9, 17, 'efesfs', 1, 0, '2017-06-26 20:13:50', '2017-06-26 20:13:50', 5, 1),
(10, 17, 'awdadas', 1, 0, '2017-06-26 20:14:38', '2017-06-26 20:14:38', 5, 1),
(11, 17, 'a', 1, 0, '2017-06-26 20:15:22', '2017-06-26 20:15:22', 5, 1),
(12, 17, 'adadas', 1, 0, '2017-06-26 20:16:44', '2017-06-26 20:16:44', 5, 1),
(13, 17, 'sefses', 1, 0, '2017-06-26 20:18:34', '2017-06-26 20:18:34', 5, 1),
(14, 17, 'esfsfs', 1, 0, '2017-06-26 20:19:44', '2017-06-26 20:19:44', 5, 1),
(15, 17, 'sesefs', 1, 0, '2017-06-26 20:20:14', '2017-06-26 20:20:14', 5, 1),
(16, 17, 'sdfs', 1, 0, '2017-06-26 20:21:29', '2017-06-26 20:21:29', 5, 1),
(17, 17, 'sefsefsef', 1, 0, '2017-06-26 20:23:04', '2017-06-26 20:23:04', 5, 1),
(18, 17, 'adad', 1, 0, '2017-06-26 20:24:13', '2017-06-26 20:24:13', 5, 1),
(19, 17, 'sedse', 1, 0, '2017-06-26 20:24:38', '2017-06-26 20:24:38', 5, 1),
(20, 17, 'daas', 1, 0, '2017-06-26 20:26:53', '2017-06-26 20:26:53', 5, 1),
(21, 17, 'sdsd', 1, 0, '2017-06-26 20:27:51', '2017-06-26 20:27:51', 5, 1),
(22, 17, 's', 1, 0, '2017-06-26 20:29:49', '2017-06-26 20:29:49', 5, 1),
(23, 17, 'sde', 1, 0, '2017-06-26 20:31:03', '2017-06-26 20:31:03', 5, 1),
(24, 17, 'f', 1, 0, '2017-06-26 20:32:42', '2017-06-26 20:32:42', 5, 1),
(25, 16, 'Kiếp sau\r\n- Bảy ngày cho mãi mãi\r\n- Bạn tôi tình tôi\r\n- Gặp lại\r\n- Em ở đâu?\r\n- Những đứa con của tự do\r\n- Mọi điều ta chưa nói\r\n- Ngày đầu tiên', 1, 0, '2017-06-28 02:42:26', '2017-06-28 02:42:26', 5, 1),
(26, 12, 'a lo', 1, 0, '2017-07-01 18:13:10', '2017-07-01 18:13:10', 5, 1),
(27, 14, 'Chuyến Du Hành Kỳ Lạ Của Ngài Daldry', 1, 0, '2017-07-03 20:24:36', '2017-07-03 20:24:36', 5, 1),
(28, 14, '“Người đàn ông quan trọng nhất đời con vừa mới đây thôi đã lướt qua phía sau con. Giờ thì người đó không còn ở đây nữa. Để tìm được anh ta, con sẽ phải trải qua một hành trình dài và con phải gặp sáu người khác rồi mới tới người đó…', 1, 0, '2017-07-03 20:24:46', '2017-07-03 20:24:46', 5, 1),
(29, 18, 'Càng đọc, tôi càng hiểu được mục đích của tác giả qua cuốn sách này là gì', 1, 0, '2017-07-05 14:00:15', '2017-07-05 14:00:15', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shop_product_translations`
--

CREATE TABLE `shop_product_translations` (
  `trans_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci,
  `meta_keyword` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_product_translations`
--

INSERT INTO `shop_product_translations` (`trans_id`, `title`, `description`, `product_id`, `lang_id`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(1, 'iphone 7', '<p>iphone 7&nbsp;iphone 7&nbsp;ip<strong>hone 7&nbsp;iphone 7&nbsp;iphone 7</strong></p>', 1, 2, 'iphone 7', 'iphone 7', '2017-06-01 03:35:19', '2017-06-18 01:14:40'),
(2, 'Sách trò chơi lớn trong kinh doanh', '<p>S&aacute;ch tr&ograve; chơi lớn trong kinh doanh</p>', 2, 2, 'Sách trò chơi lớn trong kinh doanh', 'Sách trò chơi lớn trong kinh doanh', '2017-06-02 00:13:14', '2017-06-18 01:14:23'),
(3, 'Dám nghĩ lớn', '<p>D&aacute;m nghĩ lớn</p>', 3, 2, 'Dám nghĩ lớn', 'Dám nghĩ lớn', '2017-06-02 00:46:52', '2017-06-18 01:15:13'),
(6, 'Sức mạnh của ngôn từ', '<p>Sức mạnh của ng&ocirc;n từ</p>', 6, 2, 'Sức mạnh của ngôn từ', 'Sức mạnh của ngôn từ', '2017-06-03 01:11:47', '2017-06-24 19:37:26'),
(7, 'Quốc Gia Khởi Nghiệp', '<h2>Quốc Gia Khởi Nghiệp</h2>', 7, 2, 'Quốc Gia Khởi Nghiệp', 'Quốc Gia Khởi Nghiệp', '2017-06-17 21:42:32', '2017-06-24 19:36:06'),
(8, 'Chiến Lược Đại Dương Xanh (Tái Bản)', '<p>Vậy Chiến lược Đại dương xanh l&agrave; g&igrave;? C&aacute;c t&aacute;c giả đ&atilde; giải th&iacute;ch bằng c&aacute;ch so s&aacute;nh với chiến lược đại dương đỏ, tức l&agrave; lối suy nghĩ truyền thống th&ocirc;ng thường:<br />\r\n<br />\r\n1. ĐỪNG cạnh tranh trong khoảng thị trường đang tồn tại, H&Atilde;Y tạo ra một thị trường kh&ocirc;ng c&oacute; cạnh tranh.<br />\r\n2. ĐỪNG đ&aacute;nh bại đối thủ cạnh tranh, H&Atilde;Y l&agrave;m cho cạnh tranh trở n&ecirc;n kh&ocirc;ng cần thiết.<br />\r\n3. ĐỪNG khai th&aacute;c tiếp c&aacute;c nhu cầu hiện c&oacute;, H&Atilde;Y tạo ra v&agrave; gi&agrave;nh lấy c&aacute;c nhu cầu mới.<br />\r\n4. ĐỪNG cố gắng c&acirc;n bằng gi&aacute; trị/chi ph&iacute;, H&Atilde;Y ph&aacute; vỡ c&acirc;n bằng gi&aacute; trị/chi ph&iacute;.<br />\r\n5. ĐỪNG đặt to&agrave;n bộ hoạt động của c&ocirc;ng ty trong việc theo đuổi sự kh&aacute;c biệt hoặc theo đuổi chi ph&iacute; thấp, H&Atilde;Y đặt to&agrave;n bộ hoạt động của c&ocirc;ng ty trong chiến lược vừa theo đuổi sự kh&aacute;c biệt, đồng thời vừa theo đuổi chi ph&iacute; thấp.</p>', 8, 2, NULL, NULL, '2017-06-17 21:52:56', '2017-06-17 21:52:56'),
(9, 'Business Model Generation', '<p><strong>Tạo lập m&ocirc; h&igrave;nh kinh doanh&nbsp;</strong>l&agrave; cuốn sổ tay d&agrave;nh cho những doanh nh&acirc;n c&oacute; khao kh&aacute;t thay đổi, khao kh&aacute;t vươn l&ecirc;n.<br />\r\nQua cuốn s&aacute;ch bạn sẽ:&nbsp;<br />\r\n- Biết được c&aacute;ch thiết kế v&agrave; thực hiện c&oacute; hệ thống m&ocirc; h&igrave;nh kinh doanh mang t&iacute;nh đột ph&aacute; - hoặc ph&acirc;n t&iacute;ch v&agrave; t&aacute;i tạo một m&ocirc; h&igrave;nh cũ.<br />\r\n- Hiểu r&otilde; hơn về kh&aacute;ch h&agrave;ng, c&aacute;c k&ecirc;nh ph&acirc;n phối, đối t&aacute;c, d&ograve;ng doanh thu, chi ph&iacute; v&agrave; gi&aacute; trị cốt l&otilde;i của m&igrave;nh....<br />\r\n<br />\r\n<strong>Tạo lập m&ocirc; h&igrave;nh kinh doanh</strong>&nbsp;mang đến cho bạn những kỹ thuật s&aacute;ng tạo thiết thực đang được c&aacute;c nh&agrave; tư vấn kinh doanh v&agrave; c&aacute;c c&ocirc;ng ty h&agrave;ng đầu thế giới sử dụng. Với đối tượng độc giả mục ti&ecirc;u l&agrave; những con người h&agrave;nh động, cuốn s&aacute;ch được thiết kế theo hướng trực quan, dễ hiểu, dễ &aacute;p dụng. Cuốn s&aacute;ch d&agrave;nh cho những người sẵn s&agrave;ng vứt bỏ đường lối tư duy cũ để tiếp nhận những m&ocirc; h&igrave;nh s&aacute;ng tạo gi&aacute; trị mới. Do đ&oacute;, n&oacute; ph&ugrave; hợp với c&aacute;c l&atilde;nh đạo, cố vấn v&agrave; c&aacute;c doanh nh&acirc;n của mọi tổ chức.<br />\r\nNếu bạn đ&atilde; sẵn s&agrave;ng thay đổi th&ocirc;ng lệ, ch&agrave;o mừng bạn đến với &quot;Tạo lập m&ocirc; h&igrave;nh kinh doanh&quot;.</p>', 9, 2, 'Business Model Generation', 'Business Model Generation', '2017-06-17 21:54:57', '2017-06-18 01:16:14'),
(10, 'Tư Duy Nhanh Và Chậm', '<p><strong><em>Thinking fast and slow</em></strong><em>&nbsp;-&nbsp;<strong>Tư duy nhanh v&agrave; chậm&nbsp;</strong>&nbsp;- cuốn s&aacute;ch&nbsp;được Tạp ch&iacute; T&agrave;i ch&iacute;nh Mỹ đặc biệt đ&aacute;nh gi&aacute; l&agrave; &ldquo;một kiệt t&aacute;c&rdquo; trong việc n&oacute;i về t&iacute;nh hợp l&yacute;, phi l&yacute; của con người trong tư duy, trong việc đ&aacute;nh gi&aacute; v&agrave; ra quyết định.</em><br />\r\n<br />\r\nTrong cuộc sống, d&ugrave; bạn c&oacute; cẩn trọng đến mức n&agrave;o th&igrave; vẫn c&oacute; những l&uacute;c bạn đưa ra những quyết định dựa tr&ecirc;n cảm t&igrave;nh chủ quan của m&igrave;nh.&nbsp;<strong>Thinking fast and slow</strong>, cuốn s&aacute;ch nổi tiếng tổng hợp tất cả nghi&ecirc;n cứu được tiến h&agrave;nh qua nhiều thập kỷ của nh&agrave; t&acirc;m l&yacute; học từng đạt giải Nobel Kinh tế&nbsp;<strong>Daniel Kahneman</strong>&nbsp;sẽ cho bạn thấy những sư hợp l&yacute; v&agrave; phi l&yacute; trong tư duy bản th&acirc;n. Cuốn s&aacute;ch được đ&aacute;nh gi&aacute; l&agrave; &ldquo;kiệt t&aacute;c&rdquo; trong việc thay đổi h&agrave;nh vi của con người,&nbsp;<strong>Thinking fast and slow</strong>&nbsp;đ&atilde; gi&agrave;nh được v&ocirc; số giải thưởng danh gi&aacute;, lọt v&agrave;o Top 11 cuốn&nbsp;<a href=\"http://bizspace.vn/kinh-doanh/bai-hoc-kinh-doanh\">s&aacute;ch kinh doanh</a>&nbsp;hấp dẫn nhất năm 2011. Cuốn s&aacute;ch được Alpha Books mua bản quyền v&agrave; xuất bản v&agrave;o Qu&yacute; I năm nay.&nbsp;<strong>Thinking fast and slow</strong>&nbsp;d&ugrave; l&agrave; cuốn s&aacute;ch c&oacute; t&iacute;nh h&agrave;n l&acirc;m cao nhưng được truyền tải một c&aacute;ch vui nhộn v&agrave; dễ hiểu, hứa hẹn sẽ mang lại cho bạn đọc nhiều kiến thức mới mẻ, bổ &iacute;ch.<br />\r\n<br />\r\n<strong>Thinking fast and slow</strong>&nbsp;sẽ đưa ra v&agrave; l&yacute; giải hai hệ thống tư duy t&aacute;c động đến con đường nhận thức của bạn. Kahneman gọi đ&oacute; l&agrave;: hệ thống 1 v&agrave; hệ thống 2. Hệ thống 1, c&ograve;n gọi l&agrave; cơ chế nghĩ nhanh, tự động, thường xuy&ecirc;n được sử dụng, cảm t&iacute;nh, rập khu&ocirc;n v&agrave; tiềm thức. Hệ thống 2, c&ograve;n gọi l&agrave; cơ chế nghĩ chậm, đ&ograve;i hỏi &iacute;t nỗ lực, &iacute;t được sử dụng, d&ugrave;ng logic c&oacute; t&iacute;nh to&aacute;n v&agrave; &yacute; thức. Trong một loạt th&iacute; nghiệm t&acirc;m l&yacute; mang t&iacute;nh ti&ecirc;n phong, Kahneman v&agrave; Tversky chứng minh rằng, con người ch&uacute;ng ta thường đi đến quyết định theo cơ chế nghĩ nhanh hơn l&agrave; ghĩ chậm. Phần lớn nội dung của cuốn s&aacute;ch chỉ ra những sai lầm của con người khi suy nghĩ theo hệ thống 1. Kahneman chứng minh rằng ch&uacute;ng ta tệ hơn những g&igrave; ch&uacute;ng ta tưởng: đ&oacute; l&agrave; ch&uacute;ng ta kh&ocirc;ng biết những g&igrave; ch&uacute;ng ta kh&ocirc;ng biết!<br />\r\n<br />\r\n<strong>Thinking fast and slow&nbsp;</strong>đ&aacute;p ứng hai ti&ecirc;u ch&iacute; của một cuốn s&aacute;ch hay, thứ nhất n&oacute; th&aacute;ch thức quan điểm của người đọc, thứ hai, n&oacute; kh&ocirc;ng phải l&agrave; những trang s&aacute;ch với những con chữ kh&ocirc; cứng m&agrave; v&ocirc; c&ugrave;ng vui nhộn v&agrave; hấp dẫn. Kh&ocirc;ng nghi ngờ g&igrave; nữa, đ&acirc;y l&agrave; cuốn s&aacute;ch h&agrave;n l&acirc;m d&agrave;nh cho tất cả mọi người.!<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>Th&ocirc;ng tin t&aacute;c giả: Daniel Kahneman</strong>, sinh năm 1934, nh&agrave; t&acirc;m l&yacute; học người Mỹ&nbsp; gốc Israel đ&atilde; d&agrave;nh giải Nobel Kinh tế năm 2002. &Ocirc;ng d&agrave;nh cả cuộc đời của m&igrave;nh để nghi&ecirc;n cứu về t&acirc;m l&yacute; học h&agrave;nh vi con người. C&ugrave;ng với người cộng sự đ&atilde; qua đời Amos Tversky, hai &ocirc;ng đ&atilde; c&oacute; được những nghi&ecirc;n cứu s&acirc;u sắc về con đường tư duy v&agrave; nhận thức của con người.</p>', 10, 2, 'Tư Duy Nhanh Và Chậm', 'Tư Duy Nhanh Và Chậm', '2017-06-17 21:56:40', '2017-06-24 19:34:11'),
(11, 'lean startup', '<p>lean startup</p>', 11, 2, 'lean startup', 'lean startupdsdfsg', '2017-06-19 07:42:24', '2017-06-24 19:31:58'),
(12, 'Trại Trẻ Đặc Biệt Của Cô Peregrine', '<p>Jacob lớn l&ecirc;n c&ugrave;ng những c&acirc;u chuyện &ocirc;ng nội thường hay kể. C&acirc;u chuyện về thưở thiếu thời &ocirc;ng đ&atilde; trải qua tại một trại trẻ đ&atilde; được ph&ugrave; ph&eacute;p, nơi sinh sống của những đứa trẻ sở hữu năng lực phi thường: một c&ocirc; b&eacute; biết bay, một cậu b&eacute; t&agrave;ng h&igrave;nh, một c&ocirc; b&eacute; c&oacute; thể tạo ra lửa...</p>\r\n\r\n<p>Năm th&aacute;ng qua đi, Jacob dần kh&ocirc;ng c&ograve;n tin v&agrave;o những điều ph&ugrave; phiếm, cậu đặt những bước đi đầu ti&ecirc;n v&agrave;o một cuộc sống nhung lụa &ecirc;m đềm do bố mẹ b&agrave;y sẵn trước mắt. Nhưng c&aacute;i c&aacute;i chết đột ngột của người &ocirc;ng cậu k&iacute;nh y&ecirc;u nhất đ&atilde; l&agrave;m thay đổi tất cả. Theo lời trăng trối của &ocirc;ng, cậu l&ecirc;n t&agrave;u t&igrave;m kiếm trại trẻ từng được nhắc đến trong những c&acirc;u chuyện xa xưa. V&agrave; ch&iacute;nh tại đ&acirc;y, cậu kh&ocirc;ng chỉ kh&aacute;m ph&aacute; ra b&iacute; mật động trời về th&acirc;n thế của m&igrave;nh, m&agrave; c&ograve;n bước ch&acirc;n v&agrave;o một cuộc phi&ecirc;u lưu sẽ biến cuộc đời tầm thường tẻ nhạt vốn c&oacute; của cậu sang một trang mới vĩnh viễn kh&ocirc;ng thể quay đầu...</p>', 12, 2, 'Trại Trẻ Đặc Biệt Của Cô Peregrine', 'Trại Trẻ Đặc Biệt Của Cô Peregrine', '2017-06-26 01:40:34', '2017-06-26 01:40:34'),
(13, 'Chân Trời Đảo Ngược', '<p><strong>Ch&acirc;n Trời Đảo Ngược</strong></p>\r\n\r\n<p>&Yacute; thức của ch&uacute;ng ta nằm ở đ&acirc;u?</p>\r\n\r\n<p>Liệu ch&uacute;ng ta c&oacute; thể sao ch&eacute;p v&agrave; lưu giữ k&yacute; ức b&ecirc;n ngo&agrave;i th&acirc;n x&aacute;c con người kh&ocirc;ng?</p>\r\n\r\n<p>Liệu&nbsp;<a href=\"http://tiki.vn/tieu-thuyet-tinh-cam-lang-man/c844\">t&igrave;nh y&ecirc;u</a>&nbsp;c&oacute; thể đảo ngược quy luật khắc nghiệt về sự hữu hạn của cuộc sống trong thời gian v&agrave; kh&ocirc;ng gian?</p>\r\n\r\n<p>X&uacute;c động, ly kỳ nhưng cũng đầy h&agrave;i hước v&agrave; lạc quan, Marc Levy đưa ch&uacute;ng ta đến với c&acirc;u chuyện t&igrave;nh th&aacute;ch thức thời gian, kh&ocirc;ng gian v&agrave; bệnh tật, khiến ta tr&acirc;n trọng hơn những điều tưởng chừng nhỏ b&eacute; trong cuộc sống.</p>\r\n\r\n<p>&quot;Một trong những&nbsp;<a href=\"http://tiki.vn/sach-truyen-tieng-viet/sach-van-hoc.html\">tiểu thuyết</a>&nbsp;x&uacute;c động nhất của Marc Levy.&nbsp;<strong>Người đẹp ngủ trong rừng&nbsp;</strong>phi&ecirc;n bản 2.0, với một trong những nh&acirc;n vật nữ th&agrave;nh c&ocirc;ng nhất.&quot;</p>', 13, 2, 'Chân Trời Đảo Ngược', 'Chân Trời Đảo Ngược', '2017-06-26 01:43:41', '2017-06-26 01:43:41'),
(14, 'Chuyến Du Hành Kỳ Lạ Của Ngài Daldry', '<p><strong>Chuyến Du H&agrave;nh Kỳ Lạ Của Ng&agrave;i Daldry</strong></p>\r\n\r\n<p><em>&ldquo;Người đ&agrave;n &ocirc;ng quan trọng nhất đời con vừa mới đ&acirc;y th&ocirc;i đ&atilde; lướt qua ph&iacute;a sau con. Giờ th&igrave; người đ&oacute; kh&ocirc;ng c&ograve;n ở đ&acirc;y nữa. Để t&igrave;m được anh ta, con sẽ phải trải qua một h&agrave;nh tr&igrave;nh d&agrave;i v&agrave; con phải gặp s&aacute;u người kh&aacute;c rồi mới tới người đ&oacute;&hellip;</em></p>\r\n\r\n<p><em>Trong con c&oacute; hai cuộc đời Alice ạ. Một l&agrave; cuộc đời m&agrave; con đang sống v&agrave; một cuộc đời kh&aacute;c đ&atilde; chờ đợi con bấy l&acirc;u nay.&rdquo;</em></p>\r\n\r\n<p>Lu&acirc;n Đ&ocirc;n, 1950</p>\r\n\r\n<p>Sau lời ti&ecirc;n đo&aacute;n đầy b&iacute; hiểm của b&agrave; thầy b&oacute;i tại Brighton, Alice quyết định từ bỏ cuộc sống b&igrave;nh lặng để l&ecirc;n đường với người h&agrave;ng x&oacute;m c&ugrave;ng tầng, Ng&agrave;i Daldry, khởi đầu một h&agrave;nh tr&igrave;nh đầy kỳ lạ. V&agrave; rồi hạnh ph&uacute;c được t&igrave;m thấy ở ch&iacute;nh nơi &iacute;t ai ngờ tới nhất...</p>\r\n\r\n<p>Hồi hộp, &aacute;m ảnh, giằng x&eacute;, nhưng cũng đầy chất thơ c&ugrave;ng cảm gi&aacute;c &ecirc;m đềm từ những k&yacute; ức m&ugrave;i hương, tất cả những cảm x&uacute;c ấy h&ograve;a trộn tạo n&ecirc;n một trong những&nbsp;<a href=\"http://tiki.vn/sach-truyen-tieng-viet/sach-van-hoc.html\">tiểu thuyết</a>&nbsp;được coi l&agrave; xuất sắc nhất của Marc Levy.</p>', 14, 2, 'Chuyến Du Hành Kỳ Lạ Của Ngài Daldry', 'Chuyến Du Hành Kỳ Lạ Của Ngài Daldry', '2017-06-26 02:09:21', '2017-06-26 02:09:21'),
(15, 'Em Ở Đâu', '<p><strong>Em ở đ&acirc;u?</strong>&nbsp;chia l&agrave;m hai phần r&otilde; rệt với nh&acirc;n vật ch&iacute;nh l&agrave; Phillip, một ch&agrave;ng thanh ni&ecirc;n to&agrave;n diện. Đẹp trai, th&ocirc;ng minh, t&agrave;i giỏi v&agrave; chứa chan t&igrave;nh cảm, Phillip lẽ ra đ&atilde; xứng đ&aacute;ng hưởng hạnh ph&uacute;c tr&ograve;n vẹn nếu kh&ocirc;ng c&oacute; những trớ tr&ecirc;u của số phận.C&acirc;u chuyện bắt đầu tr&ecirc;n phi trường Neward, trong cuộc chia tay kh&ocirc;ng hẹn trước của Phillip v&agrave; Susan - một mối t&igrave;nh thanh mai tr&uacute;c m&atilde;, đắm say nhất, thực sự nhất, m&atilde;i m&atilde;i &aacute;m ảnh cuộc đời Phillip. Kh&ocirc;ng biết tự bao giờ, hai người bạn nhỏ h&agrave;ng x&oacute;m lớn l&ecirc;n b&ecirc;n nhau, họ y&ecirc;u nhau như lẽ tự nhi&ecirc;n của trời đất. C&ugrave;ng chia sẻ tuổi thơ, c&ugrave;ng chia sẻ nụ h&ocirc;n thứ nhất, rồi đam m&ecirc; t&igrave;nh y&ecirc;u đầu đời, tưởng chừng họ sinh ra để d&agrave;nh cho nhau.</p>\r\n\r\n<p>Nhưng năm 14 tuổi, bi kịch xảy ra với Susan khi cha mẹ c&ocirc; bị tai nạn xe hơi v&agrave; qua đời. Phillip chia sẻ c&ugrave;ng c&ocirc; mọi mất m&aacute;t. D&ugrave; vậy, tr&aacute;i tim Susan đ&atilde; bị tổn thương s&acirc;u nặng, v&agrave; c&ocirc; d&agrave;nh hết mơ ước đời người cho việc l&agrave;m từ thiện, để xoa dịu những ai đ&atilde; phải đau khổ như c&ocirc;. Vừa học hết trung cấp, rất trẻ, Susan quyết định đến Hondurat - đất nước Trung Mỹ đang ngập trong thảm họa thi&ecirc;n nhi&ecirc;n. Họ xa nhau, v&agrave; chỉ c&ograve;n c&oacute; thể y&ecirc;u nhau, chia sẻ cuộc đời tr&ecirc;n những l&aacute; thư. Susan đối mặt với cuộc sống gian khổ ở Hondurat, trở th&agrave;nh một nh&acirc;n vi&ecirc;n trợ cứu nh&acirc;n đạo c&oacute; uy t&iacute;n, được y&ecirc;u mến. Phillip bước v&agrave;o đại học. Mỗi người một l&yacute; tưởng, họ vẫn y&ecirc;u nhau, nhưng nỗi c&ocirc; đơn dần x&acirc;m chiếm họ. O&aacute;i ăm hơn cho Phillip, khi Susan trở về, c&ocirc; chỉ c&oacute; v&agrave;i giờ để gặp anh, cũng tr&ecirc;n s&acirc;n bay Neward, v&agrave; rồi lại ra đi, vội v&agrave;ng, kh&ocirc;ng hứa hẹn. Lần sau nữa, cũng l&agrave; như vậy. Họ biết rằng, sẽ l&agrave; c&ocirc;ng bằng hơn, nếu họ chia sẻ nỗi c&ocirc; đơn của m&igrave;nh với những cuộc đời kh&aacute;c. Nhưng điều đ&oacute; thật kh&ocirc;ng dễ d&agrave;ng. Susan t&igrave;m hơi ấm ở nhiều người kh&ocirc;ng quen biết. Phillip kết h&ocirc;n với một người con g&aacute;i kh&aacute;c, đ&oacute; l&agrave; Mary. Một v&agrave;i l&aacute; thư nữa, rồi họ mất dấu trong đời, d&ugrave; m&atilde;i &aacute;m ảnh nhau.</p>', 15, 2, 'Em Ở Đâu', 'Em Ở Đâu', '2017-06-26 02:23:35', '2017-06-26 02:23:35'),
(16, 'Ngày Đầu Tiên (Tái Bản 2014)', '<p>Một vật kỳ lạ được t&igrave;m thấy trong l&ograve;ng ngọn n&uacute;i lửa đ&atilde; tắt đảo lộn to&agrave;n bộ những g&igrave; con người tưởng rằng đ&atilde; biết về sự ra đời của thế giới.</p>\r\n\r\n<p>Ch&agrave;ng l&agrave; nh&agrave; vật l&yacute; thi&ecirc;n văn, n&agrave;ng l&agrave; nh&agrave; khảo cổ học. Họ c&ugrave;ng nhau trải nghiệm chuyến phi&ecirc;u lưu l&agrave;m thay đổi cả cuộc đời&hellip;</p>\r\n\r\n<p>Marc Levy l&agrave; một trong những&nbsp;<a href=\"http://tiki.vn/sach-truyen-tieng-viet/sach-van-hoc.html\">tiểu thuyết</a>&nbsp;gia nổi tiếng nhất nước Ph&aacute;p, hiện sống tại Lu&acirc;n Đ&ocirc;n.</p>\r\n\r\n<p>Những t&aacute;c phẩm của Marc Levy được Nh&atilde;&nbsp;Nam&nbsp;xuất bản</p>\r\n\r\n<p>-<em>&nbsp;Nếu em kh&ocirc;ng phải một giấc mơ</em></p>\r\n\r\n<p><em>- Kiếp sau</em></p>\r\n\r\n<p><em>- Bảy ng&agrave;y cho m&atilde;i m&atilde;i</em></p>\r\n\r\n<p><em>- Bạn t&ocirc;i t&igrave;nh t&ocirc;i</em></p>\r\n\r\n<p><em>- Gặp lại</em></p>\r\n\r\n<p><em>- Em ở đ&acirc;u?</em></p>\r\n\r\n<p><em>- Những đứa con của tự do</em></p>\r\n\r\n<p><em>- Mọi điều ta chưa n&oacute;i</em></p>\r\n\r\n<p><em>- Ng&agrave;y đầu ti&ecirc;n</em></p>', 16, 2, 'Ngày Đầu Tiên (Tái Bản 2014)', 'Ngày Đầu Tiên (Tái Bản 2014)', '2017-06-26 03:13:15', '2017-06-26 03:13:15'),
(17, 'Chú Chó Không Nhà', '<p>T&ecirc;n t&ocirc;i l&agrave; Cally Louise Fisher v&agrave; t&ocirc;i đ&atilde; kh&ocirc;ng n&oacute;i chuyện trong 31 ng&agrave;y.</p>\r\n\r\n<p>N&oacute;i chuyện kh&ocirc;ng phải l&uacute;c n&agrave;o cũng gi&uacute;p mang đến mọi điều, d&ugrave; cho bạn mong muốn rất nhiều.</p>\r\n\r\n<p>Cally Fisher thấy người mẹ đ&atilde; mất của c&ocirc; tươi s&aacute;ng, thực tế v&agrave; sống động. Nhưng kh&ocirc;ng ai tin c&ocirc; b&eacute;, v&igrave; vậy Cally kh&ocirc;ng n&oacute;i nữa. Rồi c&oacute; một ch&uacute; ch&oacute; săn lu&ocirc;n d&otilde;i theo Cally mọi nơi. C&oacute; lẽ n&oacute; biết c&ocirc; b&eacute; n&oacute;i thật&hellip;</p>\r\n\r\n<p>Nhưng l&agrave;m thế n&agrave;o Cally c&oacute; thể thuyết phục bất cứ ai vẫn tin rằng mẹ vẫn c&ograve;n, &ldquo;Ch&uacute; ch&oacute; kh&ocirc;ng nh&agrave;&rdquo; l&agrave; li&ecirc;n kết cuối c&ugrave;ng của mọi người trong gia đ&igrave;nh với c&ocirc; ấy?</p>', 17, 2, 'Chú Chó Không Nhà', 'Chú Chó Không Nhà', '2017-06-26 19:41:39', '2017-06-26 19:41:39'),
(18, 'Quyền Năng Bí Ẩn', '<p>C&agrave;ng đọc, t&ocirc;i c&agrave;ng hiểu được mục đ&iacute;ch của t&aacute;c giả qua cuốn s&aacute;ch n&agrave;y l&agrave; g&igrave;! Anh đang nỗ lực d&ugrave;ng những năm th&aacute;ng m&agrave;y m&ograve; về PR, d&ugrave;ng những quan s&aacute;t qu&yacute; b&aacute;u đ&uacute;c kết được để thức tỉnh những con người đang bị nhiều thế lực v&ocirc; h&igrave;nh ngấm ngầm điều khiển h&agrave;nh vi mua h&agrave;ng của họ. Ch&uacute;ng ta đang chỉ như những người bị mất kiểm so&aacute;t đối với quyền quyết định lựa chọn của ch&iacute;nh m&igrave;nh. T&ocirc;i đ&atilde; dần nhận ra l&yacute; do v&igrave; sao m&igrave;nh lại mua m&oacute;n h&agrave;ng n&agrave;y m&agrave; kh&ocirc;ng phải m&oacute;n h&agrave;ng kia, tại sao lại th&iacute;ch điều n&agrave;y hơn điều kia, tại sao lại chọn thứ n&agrave;y, tại sao lại th&iacute;ch đội b&oacute;ng n&agrave;y hơn đội kia, tại sao m&igrave;nh lại kh&ocirc;ng c&oacute; đức tin trong khi anh em m&igrave;nh th&igrave; lại c&oacute;...Quyền năng b&iacute; ẩn, c&aacute;i t&ecirc;n khi tho&aacute;ng đọc l&ecirc;n, t&ocirc;i mường tượng ra một quyển s&aacute;ch viết về những c&acirc;u chuyện n&agrave;o ấy cổ xưa lắm. Cầm tr&ecirc;n tay quyển s&aacute;ch b&igrave;a ngả v&agrave;ng sau khi r&uacute;t n&oacute; ra khỏi vỏ họp, cảm nhận sức nặng từ cuốn s&aacute;ch, đo&aacute;n chắc cũng khoảng 400 trang. T&ocirc;i tin rằng đ&acirc;y l&agrave; cả một t&acirc;m huyết lớn lao của người viết, một quyển s&aacute;ch của đam m&ecirc;.</p>', 18, 2, 'Quyền Năng Bí Ẩn', 'Quyền Năng Bí Ẩn', '2017-07-05 13:48:41', '2017-07-05 13:48:41');

-- --------------------------------------------------------

--
-- Table structure for table `shop_product_values`
--

CREATE TABLE `shop_product_values` (
  `value_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `attribute_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop_product_views`
--

CREATE TABLE `shop_product_views` (
  `view_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `view` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `sub_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`sub_id`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'buihuycuong1510@gmail.com', 0, NULL, NULL),
(2, 'buichuc1510@gmail.com', 0, NULL, NULL),
(3, 'toantapbachkhoa@gmail.com', 0, NULL, NULL),
(4, 'buihuycuong1510@gmail.com', 0, NULL, NULL),
(5, 'buihuycuong1510@gmail.com', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('NONE','MALE','FEMALE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NONE',
  `facebook_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `level` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `address` text COLLATE utf8mb4_unicode_ci,
  `slogan` text COLLATE utf8mb4_unicode_ci,
  `about` text COLLATE utf8mb4_unicode_ci,
  `cardnumber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cardkey` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `phone`, `gender`, `facebook_id`, `avatar`, `level`, `status`, `address`, `slogan`, `about`, `cardnumber`, `cardkey`, `birthday`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Cường', 'Bùi Huy', 'buihuycuong1510@gmail.com', '$2y$10$wC1XqBeea0Uv6tLNKZaU8OS5dwZLXuDJ.zSUTm/iyK.MO5eyGFH22', '0979599045', 'FEMALE', '0', 'avatar.png', 1, 1, 'Số 8, ngõ 191, Minh Khai, Hà Nội', 'Hãy đi thật xa để biết bạn đi được bao xa.', 'Simplae is the best !', NULL, NULL, '1995-10-15', 'ndq1qdD2pZuUGE07DhHoAdiZkAToOe2qzUMkqiNQ3mjls1ouXMpXcpSvNUpI', '2017-05-07 06:46:10', '2017-06-05 02:13:00'),
(3, 'Trần Phi', 'Long', 'tranphilong123@gmail.com', '$2y$10$S.mFCGYA30jJeY.llEy25.X8/7FqHsdCp2DalRZeTf63AFKGnaTVW', '0948699045', 'NONE', '0', 'avatar.png', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '6fHaQjXCmvTi11k1ems7wJeRQfReCNAjEDPVuX0tQYTjFikQWTSdNP2I2F5RUfnn', '2017-05-22 07:25:41', '2017-06-01 03:40:36'),
(4, 'Nhà Cung', 'Cấp', 'nhacungcap1234@gmail.com', '$2y$10$TYllHjZIdEr75n0KeH8CpOdyS9VC5HmF.gALv2EXitRyt4NhOF2.O', '0979086045', 'NONE', '0', 'avatar.png', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'tf03kryvM9BMByBizVlGzyfJcwJEbJ3txExAVSFQs8ArS5yg05cUciI7AhwcI6ER', '2017-06-01 00:53:25', '2017-06-19 07:51:43'),
(14, 'Bùi', 'Chức', 'buichuc1510@gmail.com', '$2y$10$5aLMJctF.2YKixUk4pwT5.vZiiJxwcPQ/DZ2QTrldIloxy7fV9KEe', NULL, 'NONE', '0', 'avatar.png', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'raXT5vvOWipM2S8FfMlzmc8HMp5DYHgINNPqMpkBzNh0nBa7UnYvjyB0AdT7', '2017-06-29 13:34:23', '2017-06-29 13:34:44'),
(15, 'Phạm Nam', 'Anh', 'namanh3101@gmail.com', '$2y$10$kO1n0HaaSZg8XXv9plyB6ue1XfirU8kwdM9L.0zLCtS.Oc6NbOfVK', NULL, 'NONE', '0', 'avatar.png', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'rUZlvP0bJqrhaVzdK9h654UtpLiuawJHSLs5Et64pcb994qnSOOHyEj4ZmWX', '2017-06-30 10:08:36', '2017-06-30 10:09:08'),
(16, 'Cuong', 'Bui', 'me@buihuycuong.com', '$2y$10$waAKnYErebrMsmGm/1TaH.NN0bPsYu2E96fcu0cHy3wVXaBWuMAfm', NULL, 'NONE', '0', 'avatar.png', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, '', '2017-07-04 20:10:33', '2017-07-04 20:10:51'),
(17, 'Huu', 'Nam', 'demo.south.1907@gmail.com', '$2y$10$inteff5MjljZvCIpc46u6OsMIwAmiLZRtgAWfWWXR4rovmkbMBxFy', NULL, 'NONE', '0', 'avatar.png', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'FMH49KVpo9h3hj5gVMpO8inrtrUg3zQXF45f0HsjsinZ05abaQPXUi0WHd00', '2017-08-18 23:49:14', '2017-09-11 11:42:52'),
(18, 'Huu', 'Nam', 'south.1907@gmail.com', '$2y$10$JrBsniHKDs1VYnjyHZxcuuLzzWrt.3r.YdxqVNuCbV/hkHVgTDvyu', NULL, 'NONE', '0', 'avatar.png', 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'ywjVyyXJr1nUAQG8Qq0lBVEuWjCJT4WRMXgHeTLolAU5ZfcvoQXwhPbtvjLLUBid', '2017-08-18 23:52:13', '2017-09-11 11:44:51'),
(19, 'Huu', 'Nam', 'uth.1907@gmail.com', '$2y$10$1ryTOFBWC7W07iYlxj1zmOcWtEOyruHlrDEPboxlr1Zk0ZA0Dx/d6', NULL, 'NONE', '0', 'avatar.png', 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'h3mXjlNMNW9ksO2D4uOVQJO1r5ZbJoxPMKc3r5Nl5ugQgBj0YkfJWVy8a7Z83GIP', '2017-08-18 23:54:46', '2017-09-11 11:45:16'),
(20, 'Huu', 'Nam', 'th.1907@gmail.com', '$2y$10$ropoJyWw7pn1ns/B.jPKg.4BVph.3NpUiJalyKEQUKNb3pGFTxRLK', NULL, 'NONE', '0', 'avatar.png', 2, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'GrN9gP78wUsIXtRZeU8r9MKfnHsLo8YmqQlvkc8KyLE9YW4V0XqnJ1Ji1plx0J8R', '2017-08-18 23:57:52', '2017-09-11 11:42:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_pages`
--
ALTER TABLE `admin_pages`
  ADD PRIMARY KEY (`page_id`),
  ADD UNIQUE KEY `admin_pages_slug_unique` (`slug`);

--
-- Indexes for table `admin_page_translations`
--
ALTER TABLE `admin_page_translations`
  ADD PRIMARY KEY (`trans_id`),
  ADD KEY `admin_page_translations_page_id_foreign` (`page_id`);

--
-- Indexes for table `admin_settings`
--
ALTER TABLE `admin_settings`
  ADD PRIMARY KEY (`set_id`),
  ADD UNIQUE KEY `admin_settings_title_unique` (`title`);

--
-- Indexes for table `admin_setting_options`
--
ALTER TABLE `admin_setting_options`
  ADD PRIMARY KEY (`opt_id`),
  ADD UNIQUE KEY `admin_setting_options_value_unique` (`value`),
  ADD KEY `admin_setting_options_set_id_foreign` (`set_id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`cate_id`),
  ADD UNIQUE KEY `blog_categories_slug_unique` (`slug`);

--
-- Indexes for table `blog_category_translations`
--
ALTER TABLE `blog_category_translations`
  ADD PRIMARY KEY (`trans_id`),
  ADD KEY `blog_category_translations_cate_id_foreign` (`cate_id`),
  ADD KEY `blog_category_translations_lang_id_foreign` (`lang_id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `blog_posts_slug_unique` (`slug`),
  ADD KEY `blog_posts_cate_id_foreign` (`cate_id`),
  ADD KEY `blog_posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `blog_post_translations`
--
ALTER TABLE `blog_post_translations`
  ADD PRIMARY KEY (`trans_id`),
  ADD KEY `blog_post_translations_post_id_foreign` (`post_id`),
  ADD KEY `blog_post_translations_lang_id_foreign` (`lang_id`);

--
-- Indexes for table `blog_post_views`
--
ALTER TABLE `blog_post_views`
  ADD PRIMARY KEY (`view_id`),
  ADD KEY `blog_post_views_product_id_foreign` (`product_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`),
  ADD UNIQUE KEY `cities_name_unique` (`name`),
  ADD KEY `cities_country_id_foreign` (`country_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`),
  ADD UNIQUE KEY `countries_name_unique` (`name`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`lang_id`),
  ADD UNIQUE KEY `languages_slug_unique` (`slug`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `logs_logname_id_foreign` (`logname_id`);

--
-- Indexes for table `log_admins`
--
ALTER TABLE `log_admins`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `log_names`
--
ALTER TABLE `log_names`
  ADD PRIMARY KEY (`logname_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moneys`
--
ALTER TABLE `moneys`
  ADD PRIMARY KEY (`money_id`),
  ADD UNIQUE KEY `moneys_type_unique` (`type`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `orders_keyorder_unique` (`keyorder`);

--
-- Indexes for table `order_books`
--
ALTER TABLE `order_books`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`permission_id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `product_category_translations`
--
ALTER TABLE `product_category_translations`
  ADD PRIMARY KEY (`trans_id`),
  ADD KEY `product_category_translations_cate_id_foreign` (`cate_id`),
  ADD KEY `product_category_translations_lang_id_foreign` (`lang_id`);

--
-- Indexes for table `product_orders`
--
ALTER TABLE `product_orders`
  ADD PRIMARY KEY (`po_id`),
  ADD KEY `product_orders_product_id_foreign` (`product_id`),
  ADD KEY `product_orders_order_id_foreign` (`order_id`);

--
-- Indexes for table `quanhuyens`
--
ALTER TABLE `quanhuyens`
  ADD PRIMARY KEY (`quan_id`),
  ADD UNIQUE KEY `quanhuyens_name_unique` (`name`),
  ADD KEY `quanhuyens_city_id_foreign` (`city_id`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`,`instance`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`shop_id`),
  ADD UNIQUE KEY `shops_slug_unique` (`slug`),
  ADD UNIQUE KEY `shops_title_unique` (`title`),
  ADD KEY `shops_user_id_foreign` (`user_id`);

--
-- Indexes for table `shop_categories`
--
ALTER TABLE `shop_categories`
  ADD PRIMARY KEY (`cate_id`),
  ADD UNIQUE KEY `shop_categories_slug_unique` (`slug`);

--
-- Indexes for table `shop_products`
--
ALTER TABLE `shop_products`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `shop_products_slug_unique` (`slug`),
  ADD KEY `shop_products_cate_id_foreign` (`cate_id`),
  ADD KEY `shop_products_shop_id_foreign` (`shop_id`);

--
-- Indexes for table `shop_product_attributes`
--
ALTER TABLE `shop_product_attributes`
  ADD PRIMARY KEY (`attribute_id`),
  ADD UNIQUE KEY `shop_product_attributes_title_unique` (`title`);

--
-- Indexes for table `shop_product_comments`
--
ALTER TABLE `shop_product_comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `shop_product_comments_product_id_foreign` (`product_id`),
  ADD KEY `shop_product_comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `shop_product_orders`
--
ALTER TABLE `shop_product_orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `shop_product_orders_product_id_foreign` (`product_id`),
  ADD KEY `shop_product_orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `shop_product_rates`
--
ALTER TABLE `shop_product_rates`
  ADD PRIMARY KEY (`rate_id`),
  ADD KEY `shop_product_rates_product_id_foreign` (`product_id`),
  ADD KEY `shop_product_rates_user_id_foreign` (`user_id`);

--
-- Indexes for table `shop_product_reviews`
--
ALTER TABLE `shop_product_reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `shop_product_reviews_product_id_foreign` (`product_id`),
  ADD KEY `shop_product_reviews_lang_id_foreign` (`lang_id`),
  ADD KEY `shop_product_reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `shop_product_translations`
--
ALTER TABLE `shop_product_translations`
  ADD PRIMARY KEY (`trans_id`),
  ADD KEY `shop_product_translations_product_id_foreign` (`product_id`),
  ADD KEY `shop_product_translations_lang_id_foreign` (`lang_id`);

--
-- Indexes for table `shop_product_values`
--
ALTER TABLE `shop_product_values`
  ADD PRIMARY KEY (`value_id`),
  ADD KEY `shop_product_values_product_id_foreign` (`product_id`),
  ADD KEY `shop_product_values_attribute_id_foreign` (`attribute_id`),
  ADD KEY `shop_product_values_lang_id_foreign` (`lang_id`);

--
-- Indexes for table `shop_product_views`
--
ALTER TABLE `shop_product_views`
  ADD PRIMARY KEY (`view_id`),
  ADD KEY `shop_product_views_product_id_foreign` (`product_id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_pages`
--
ALTER TABLE `admin_pages`
  MODIFY `page_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin_page_translations`
--
ALTER TABLE `admin_page_translations`
  MODIFY `trans_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin_settings`
--
ALTER TABLE `admin_settings`
  MODIFY `set_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admin_setting_options`
--
ALTER TABLE `admin_setting_options`
  MODIFY `opt_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `cate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `blog_category_translations`
--
ALTER TABLE `blog_category_translations`
  MODIFY `trans_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `post_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `blog_post_translations`
--
ALTER TABLE `blog_post_translations`
  MODIFY `trans_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `blog_post_views`
--
ALTER TABLE `blog_post_views`
  MODIFY `view_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `country_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `lang_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log_admins`
--
ALTER TABLE `log_admins`
  MODIFY `log_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `log_names`
--
ALTER TABLE `log_names`
  MODIFY `logname_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `moneys`
--
ALTER TABLE `moneys`
  MODIFY `money_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `order_books`
--
ALTER TABLE `order_books`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `permission_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_category_translations`
--
ALTER TABLE `product_category_translations`
  MODIFY `trans_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product_orders`
--
ALTER TABLE `product_orders`
  MODIFY `po_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `quanhuyens`
--
ALTER TABLE `quanhuyens`
  MODIFY `quan_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `shop_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `shop_categories`
--
ALTER TABLE `shop_categories`
  MODIFY `cate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `shop_products`
--
ALTER TABLE `shop_products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `shop_product_attributes`
--
ALTER TABLE `shop_product_attributes`
  MODIFY `attribute_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `shop_product_comments`
--
ALTER TABLE `shop_product_comments`
  MODIFY `comment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shop_product_orders`
--
ALTER TABLE `shop_product_orders`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shop_product_rates`
--
ALTER TABLE `shop_product_rates`
  MODIFY `rate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shop_product_reviews`
--
ALTER TABLE `shop_product_reviews`
  MODIFY `review_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `shop_product_translations`
--
ALTER TABLE `shop_product_translations`
  MODIFY `trans_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `shop_product_values`
--
ALTER TABLE `shop_product_values`
  MODIFY `value_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shop_product_views`
--
ALTER TABLE `shop_product_views`
  MODIFY `view_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `sub_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_page_translations`
--
ALTER TABLE `admin_page_translations`
  ADD CONSTRAINT `admin_page_translations_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `admin_pages` (`page_id`) ON DELETE CASCADE;

--
-- Constraints for table `admin_setting_options`
--
ALTER TABLE `admin_setting_options`
  ADD CONSTRAINT `admin_setting_options_set_id_foreign` FOREIGN KEY (`set_id`) REFERENCES `admin_settings` (`set_id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_category_translations`
--
ALTER TABLE `blog_category_translations`
  ADD CONSTRAINT `blog_category_translations_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `blog_categories` (`cate_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_category_translations_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `languages` (`lang_id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD CONSTRAINT `blog_posts_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `blog_categories` (`cate_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_post_translations`
--
ALTER TABLE `blog_post_translations`
  ADD CONSTRAINT `blog_post_translations_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `languages` (`lang_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_post_translations_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `blog_posts` (`post_id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_post_views`
--
ALTER TABLE `blog_post_views`
  ADD CONSTRAINT `blog_post_views_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `shop_products` (`product_id`) ON DELETE CASCADE;

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`country_id`) ON DELETE CASCADE;

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_logname_id_foreign` FOREIGN KEY (`logname_id`) REFERENCES `log_names` (`logname_id`) ON DELETE CASCADE;

--
-- Constraints for table `product_category_translations`
--
ALTER TABLE `product_category_translations`
  ADD CONSTRAINT `product_category_translations_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `shop_categories` (`cate_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_category_translations_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `languages` (`lang_id`) ON DELETE CASCADE;

--
-- Constraints for table `product_orders`
--
ALTER TABLE `product_orders`
  ADD CONSTRAINT `product_orders_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `shop_products` (`product_id`) ON DELETE CASCADE;

--
-- Constraints for table `quanhuyens`
--
ALTER TABLE `quanhuyens`
  ADD CONSTRAINT `quanhuyens_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`city_id`) ON DELETE CASCADE;

--
-- Constraints for table `shops`
--
ALTER TABLE `shops`
  ADD CONSTRAINT `shops_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shop_products`
--
ALTER TABLE `shop_products`
  ADD CONSTRAINT `shop_products_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `shop_categories` (`cate_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `shop_products_shop_id_foreign` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`shop_id`) ON DELETE CASCADE;

--
-- Constraints for table `shop_product_comments`
--
ALTER TABLE `shop_product_comments`
  ADD CONSTRAINT `shop_product_comments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `shop_products` (`product_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `shop_product_comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shop_product_orders`
--
ALTER TABLE `shop_product_orders`
  ADD CONSTRAINT `shop_product_orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `shop_products` (`product_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `shop_product_orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shop_product_rates`
--
ALTER TABLE `shop_product_rates`
  ADD CONSTRAINT `shop_product_rates_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `shop_products` (`product_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `shop_product_rates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shop_product_reviews`
--
ALTER TABLE `shop_product_reviews`
  ADD CONSTRAINT `shop_product_reviews_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `languages` (`lang_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `shop_product_reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `shop_products` (`product_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `shop_product_reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shop_product_translations`
--
ALTER TABLE `shop_product_translations`
  ADD CONSTRAINT `shop_product_translations_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `languages` (`lang_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `shop_product_translations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `shop_products` (`product_id`) ON DELETE CASCADE;

--
-- Constraints for table `shop_product_values`
--
ALTER TABLE `shop_product_values`
  ADD CONSTRAINT `shop_product_values_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `shop_product_attributes` (`attribute_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `shop_product_values_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `languages` (`lang_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `shop_product_values_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `shop_products` (`product_id`) ON DELETE CASCADE;

--
-- Constraints for table `shop_product_views`
--
ALTER TABLE `shop_product_views`
  ADD CONSTRAINT `shop_product_views_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `shop_products` (`product_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
