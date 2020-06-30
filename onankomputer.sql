-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jun 2020 pada 09.32
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onankomputer`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Admin', '123456789', 'admin@gmail.com', NULL, '$2y$12$dMY5vrhg4kz.iP5sr.pH3uV.VlPhgEP30QR1PHY8s0F8vMXGyOvwq', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id` int(10) UNSIGNED NOT NULL,
  `products_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(255,2) NOT NULL,
  `quantity` int(255) NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id`, `products_id`, `product_name`, `product_code`, `color`, `price`, `quantity`, `user_email`, `session_id`, `created_at`, `updated_at`) VALUES
(63, 40, 'Asus VivoBook Ultra A412FA', 'asusvivo1', 'purple + black', 7500000.00, 2, '', 'OC6y8vzdSnSFYWX8apBdkY1uzfNMh0mS9ZcueHsE', '2020-06-12 00:13:43', '2020-06-12 00:13:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `description`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(28, 0, 'Flashdrive', 'Flasdisk Sub Category of Computer Accessories', 1, NULL, '2020-05-04 05:37:08', '2020-05-05 10:39:47'),
(29, 0, 'Hardisk', 'Hardisk Category', 1, NULL, '2020-05-04 05:37:53', '2020-05-04 05:41:38'),
(30, 0, 'Mouse', 'Mouse Sub Category', 1, NULL, '2020-05-04 05:38:32', '2020-05-05 10:40:04'),
(31, 0, 'Keyboard', 'Keyboard Category', 1, NULL, '2020-05-04 05:38:56', '2020-05-04 05:41:47'),
(25, 0, 'Notebook', 'Notebook Category', 1, NULL, '2020-05-04 05:33:54', '2020-05-04 05:42:08'),
(26, 0, 'Computer Accessories', 'Computer Accessories Category', 1, NULL, '2020-05-04 05:35:35', '2020-05-04 05:41:16'),
(27, 0, 'Laptop', 'Laptop Category', 1, NULL, '2020-05-04 05:36:14', '2020-05-04 05:41:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `compare`
--

CREATE TABLE `compare` (
  `id` int(10) NOT NULL,
  `products_id` int(10) UNSIGNED NOT NULL,
  `products_categories_id` int(10) NOT NULL,
  `products_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_price` double(255,2) NOT NULL,
  `session_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `compare`
--

INSERT INTO `compare` (`id`, `products_id`, `products_categories_id`, `products_code`, `products_name`, `products_description`, `products_price`, `session_id`, `created_at`, `updated_at`) VALUES
(26, 43, 27, 'MSI1', 'MSI GF63 Thin 10SCSR 258ID', 'Brand : MSI\r\nWeight : 1860 Gr\r\nScreen : 15,6 inch Full HD IPS\r\nCPU : Intel Core i7-10750H\r\nGPU : Intel Graphics 630 and Nvidia GeForce GTX 1650\r\nRAM : 8 GB\r\nStorage : 512 GB SSD', 19000000.00, '', '2020-06-11 22:17:12', '2020-06-11 22:17:12'),
(27, 41, 27, '1234', 'HP 14S CF0131TU', 'Brand : HP\r\nWeight :1430 Gr \r\nScreen : 14inch HD TFT \r\nCPU : Intel Core i3-8130U\r\nGPU : Intel\r\nGraphics 620\r\nRAM : 4 GB\r\nStorage :1 TB HDD', 6700000.00, '', '2020-06-11 22:26:01', '2020-06-11 22:26:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `delivery_address`
--

CREATE TABLE `delivery_address` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `users_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barangay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `delivery_address`
--

INSERT INTO `delivery_address` (`id`, `users_id`, `users_email`, `name`, `address`, `city`, `region`, `province`, `barangay`, `country`, `postal_code`, `phone_number`, `created_at`, `updated_at`) VALUES
(3, 1, 'demo@gmail.com', 'WeShare', '123 Street', 'Phnom Penh', 'PP', '', '', 'Cambodia', '12252', '010313234', NULL, NULL),
(4, 5, 'heppymarias@gmail.com', 'Heppy', 'Jl.Balige', 'Porsea', 'Sumatera Utara', '', '', 'Indonesia', '22384', '081329431519', NULL, NULL),
(5, 7, 'heppymarias@gmail.com', 'Heppy', 'Jl.Balige', 'Porsea', 'Sumatera Utara', '', '', 'Indonesia', '22384', '081329431519', NULL, NULL),
(6, 8, 'heppymarias@gmail.com', 'Heppy', 'Jl.Balige', 'Porsea', 'Toba Samosir', 'Sumatera Utara', 'Parparean I', 'Indonesia', '22384', '081329431519', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2012_09_04_000000_create_users_table', 2),
(2, '2020_09_04_100000_create_password_resets_table', 1),
(8, '2020_09_04_040609_create_categories_table', 3),
(9, '2020_10_04_075802_create_products_table', 4),
(10, '2020_09_04_024109_create_product_att_table', 5),
(11, '2020_10_04_055123_create_tblgallery_table', 6),
(12, '2020_09_04_070031_create_cart_table', 7),
(13, '2020_09_04_072535_create_coupons_table', 8),
(15, '2020_09_04_042342_create_countries_table', 10),
(19, '2020_09_04_043804_add_more_fields_to_users_table', 14),
(17, '2020_09_04_093548_create_delivery_address_table', 12),
(18, '2020_09_04_024718_create_orders_table', 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barangay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_cost` double(255,2) DEFAULT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grand_total` double(255,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `users_id`, `users_email`, `name`, `address`, `city`, `region`, `postal_code`, `country`, `barangay`, `province`, `phone_number`, `delivery_cost`, `order_status`, `payment_method`, `products_name`, `grand_total`, `created_at`, `updated_at`) VALUES
(29, '8', 'heppymarias@gmail.com', 'Heppy Maria Simanungkalit', 'Jl.Balige', 'Porsea', 'Toba Samosir', '22384', 'Indonesia', 'Parparean I', 'Sumatera Utara', '081329431519', 0.00, 'on process', 'COD', 'Asus VivoBook Ultra A412FA', 43500000.00, '2020-06-10 06:15:47', '2020-06-10 06:15:47'),
(30, '8', 'heppymarias@gmail.com', 'Heppy', 'Jl.Balige', 'Porsea', 'Toba Samosir', '22384', 'Indonesia', 'Parparean I', 'Sumatera Utara', '081329431519', 0.00, 'on process', 'COD', 'HP 14S CF0131TU', 0.00, '2020-06-11 22:55:52', '2020-06-11 22:55:52'),
(31, '8', 'heppymarias@gmail.com', 'Heppy', 'Jl.Balige', 'Porsea', 'Toba Samosir', '22384', 'Indonesia', 'Parparean I', 'Sumatera Utara', '081329431519', 0.00, 'on process', 'COD', 'Acer Aspire 3 A315-42', 15000000.00, '2020-06-11 23:39:54', '2020-06-11 23:39:54'),
(32, '8', 'heppymarias@gmail.com', 'Heppy', 'Jl.Balige', 'Porsea', 'Sumatera Utara', '22384', 'Indonesia', 'Parparean I', 'Sumatera Utara', '081329431519', 0.00, 'on process', 'COD', NULL, 20100000.00, '2020-06-11 23:42:37', '2020-06-11 23:42:37'),
(33, '8', 'heppymarias@gmail.com', 'Heppy', 'Jl.Balige', 'Porsea', 'Toba Samosir', '22384', 'Indonesia', 'Parparean I', 'Sumatera Utara', '081329431519', 0.00, 'on process', 'COD', 'HP Pavilion 14 CE3072TX', 20100000.00, '2020-06-12 00:04:05', '2020-06-12 00:04:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `categories_id` int(10) NOT NULL,
  `p_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `categories_id`, `p_name`, `p_code`, `description`, `price`, `image`, `created_at`, `updated_at`) VALUES
(40, 27, 'Asus VivoBook Ultra A412FA', 'As01', 'Brand : Asus\r\nWeight : 1500 Gr\r\nScreen : 14 inch FHD TFT \r\nCPU : Intel Core i3-8415U\r\nGPU : Intel\r\nGraphics 620\r\nRAM : 4 GB\r\nstorage :512 GB SSD', 7500000, '1588606344-asus-vivobook-ultra-a412fa.jpg', '2020-05-04 08:32:24', '2020-06-11 20:51:01'),
(41, 27, 'HP 14S CF0131TU', '1234', 'Brand : HP\r\nWeight :1430 Gr \r\nScreen : 14inch HD TFT \r\nCPU : Intel Core i3-8130U\r\nGPU : Intel\r\nGraphics 620\r\nRAM : 4 GB\r\nStorage :1 TB HDD', 6700000, '1588606464-hp-14s-cf0131tu.jpg', '2020-05-04 08:34:24', '2020-06-11 22:08:49'),
(42, 27, 'Apple MacBook Pro MPXU2', 'Mac01', 'Brand : HP\r\nWeight : 1600 Gr\r\nScreen : 14 inch Full HD IPS\r\nCPU : Intel Core i7-1065G7\r\nGPU : Intel Graphics G7 and Nvidia GeForce MX250\r\nRAM : 8 GB', 22400000, '1588608152-apple-macbook-pro-mpxu2.jpg', '2020-05-04 09:02:32', '2020-06-11 22:07:40'),
(76, 27, 'Acer Aspire 3 A315-42', 'aspire11', 'Brand : Acer\r\nWeight : 1900 Gr\r\nScreen : 15,6 inch Full HD IPS\r\nCPU : AMD Ryzen 5 3500U\r\nGPU : AMD Radeon RX Vega 8\r\nRAM : 8 GB\r\nStorage : 256 GB SSD + 1 TB HDD', 7800000, '1591938628-acer-aspire-3-a315-42.jpg', '2020-06-11 22:10:28', '2020-06-11 22:10:28'),
(43, 27, 'MSI GF63 Thin 10SCSR 258ID', 'MSI1', 'Brand : MSI\r\nWeight : 1860 Gr\r\nScreen : 15,6 inch Full HD IPS\r\nCPU : Intel Core i7-10750H\r\nGPU : Intel Graphics 630 and Nvidia GeForce GTX 1650\r\nRAM : 8 GB\r\nStorage : 512 GB SSD', 19000000, '1588608364-msi-gf63-thin-10scsr-258id.jpg', '2020-05-04 09:06:04', '2020-06-11 22:07:12'),
(75, 27, 'HP Pavilion 14 CE3072TX', '0987', 'Brand : HP\r\nWeight : 1600 Gr\r\nScreen : 14 inch Full HD IPS\r\nCPU : Intel Core i7-1065G7\r\nGPU : Intel Graphics G7 and Nvidia GeForce MX250\r\nRAM : 8 GB', 14000000, '1591937136-hp-pavilion-14-ce3072tx.jpg', '2020-06-11 21:45:36', '2020-06-11 21:45:36'),
(46, 27, 'Asus VivoBook S432FLC', 'A123', 'Brand : Asus\r\nWeight : 1400 Gr\r\nScreen : 14 inch Full HD IPS + 5,65 inch Full HD SuperIPS\r\nCPU : Intel Core i7-10510U\r\nGPU : Intel Graphics 620 and Nvidia GeForce MX250\r\nRAM : 8 GB\r\nStorage : 1 TB SSD', 12500000, '1588608700-asus-vivobook-s432flc.jpg', '2020-05-04 09:11:40', '2020-06-11 22:06:43'),
(47, 30, 'DELL WM126', 'M01', 'Brand :\r\nDELL\r\n\r\n<br>Type : Mouse\r\n\r\n<br>Weight :\r\n150 Gr\r\n\r\n<br>Movement\r\nResolution :&nbsp; 1000 DPI\r\n\r\n<br>Wireless :\r\nYes\r\n\r\n<br>Compatible\r\nOS : Windows/7/8/10', 80000, '1588608811-hp-m100.jpg', '2020-05-04 09:13:32', '2020-05-04 09:14:50'),
(48, 29, 'HP M100', 'M02', 'Brand : HP\r\n\r\n<br>Type : Mouse\r\n\r\n<br>Weight :\r\n300 Gr\r\n<br>Movement\r\nResolution :&nbsp; 1000 DPI\r\n\r\n<br>Wireless :\r\nNo<br>\r\n\r\nCompatible\r\nOS : Windows/7/8/10', 99000, '1588609006-hp-m100.jpg', '2020-05-04 09:16:46', '2020-05-04 09:16:46'),
(49, 30, 'Alcatroz Airmouse', 'M03', 'Brand :\r\nAlcatroz\r\n\r\n<br>Weight :\r\n200 Gr\r\n\r\n<br>Description\r\n:\r\n\r\nMovement\r\nResolution : 3000 <br>DPI\r\n\r\nWireless :\r\nYes\r\n\r\nCompatible\r\n<br>OS : Windows/7/8/10', 60000, '1588609078-alcatroz-airmouse.jpg', '2020-05-04 09:17:58', '2020-05-04 09:17:58'),
(50, 30, 'Targus W571', 'M04', 'Brand :\r\nTargus\r\n\r\n<br>Weight :\r\n300 Gr\r\n\r\n<br>Movement\r\nResolution : 1.600 DPI\r\n\r\n<br>Wireless :\r\nYes\r\n\r\n<br>Compatible\r\nOS : Windows/7/8/10', 96000, '1588609151-targus-w571.jpg', '2020-05-04 09:19:12', '2020-05-04 09:19:12'),
(51, 30, 'Robot M210', 'M05', 'Brand :\r\nRobot\r\n\r\n<br>Weight :\r\n150 Gr\r\n\r\n<br>Movement\r\nResolution :&nbsp; 1.600 DPI\r\n\r\n<br>Wireless :\r\nYes <br>\r\n\r\nCompatible\r\nOS : Windows/7/8/10\r\n\r\nMouse6', 50000, '1588609235-robot-m210.jpg', '2020-05-04 09:20:35', '2020-05-04 09:20:35'),
(52, 30, 'Razer Deathadder Chroma', 'M06', 'Brand :\r\nRazer\r\n\r\n<br>Weight :\r\n300 Gr\r\n<br>Movement\r\nResolution : 10.000 DPI\r\n\r\n<br>Wireless :\r\nNo\r\n\r\n<br>Compatible\r\nOS : Windows/7/8/10', 800000, '1588609295-razer-deathadder-chroma.jpg', '2020-05-04 09:21:35', '2020-05-04 09:21:35'),
(53, 30, 'Anker Vertical Ergonomic Optical Mouse', 'M07', 'Brand :\r\nAnker\r\n\r\n<br>Weight :\r\n200 Gr\r\n\r\n<br>Description\r\n:\r\n\r\nMovement\r\nResolution : 1600 DPI\r\n\r\n<br>Wireless :\r\nYes\r\n\r\n<br>Compatible\r\nOS : Windows/7/8/10<br>', 450000, '1588609364-anker-vertical-ergonomic-optical-mouse.jpg', '2020-05-04 09:22:45', '2020-05-04 09:22:45'),
(54, 30, 'Logitech M331 Silent Mouse', 'M08', 'Brand :\r\nLogitech\r\n\r\n<br>Weight :\r\n200 Gr\r\n<br>Movement\r\nResolution : 1000 DPI<br>\r\n\r\nWireless :\r\nYes\r\n\r\n<br>Compatible\r\nOS : Windows/7/8/10', 225000, '1588609440-logitech-m331-silent-mouse.jpg', '2020-05-04 09:24:00', '2020-05-04 09:24:00'),
(55, 30, 'Logitech M337', 'M09', 'Brand :\r\nLogitech\r\n\r\n<br>Weight :\r\n140 Gr\r\n<br>Movement\r\nResolution : 1000 DPI\r\n\r\n<br>Wireless :\r\nYes\r\n\r\n<br>Compatible\r\nOS : Windows/7/8/10<br>', 420000, '1588609509-logitech-m337.jpg', '2020-05-04 09:25:10', '2020-05-04 09:25:10'),
(56, 28, 'HP X750W 32GB', 'F01', 'Brand : HP\r\n\r\n<br>Type : Flash\r\ndrive\r\n\r\n<br>Weight :\r\n35 Gr\r\n\r\n<br>Capacity :\r\n32 GB\r\n\r\n<br>Interface\r\n: USB 3.0\r\n\r\n<br>USB\r\nConnector : Type A\r\n<br>Read\r\nPerformance : up to 70 MB/s\r\n\r\n<br>Write\r\nPerformance : up to 20 MB/s\r\n\r\n<br>Compatible\r\nOS : Windows 7/8/10 or later', 100000, '1588609620-hp-x750w-32gb.jpg', '2020-05-04 09:27:00', '2020-05-04 09:27:00'),
(57, 28, 'HP X796 32GB', 'F02', 'Type\r\n: Flash drive\r\n\r\n<br>Weight\r\n: 30 Gr\r\n\r\n<br>Capacity\r\n: 32 GB\r\n\r\n<br>Interface\r\n: USB 3.1\r\n\r\n<br>USB\r\nConnector : Type A\r\n\r\n<br>Read\r\nPerformance : up to 140 MB/s\r\n\r\n<br>Write\r\nPerformance : up to 40 MB/s\r\n\r\n<br>Compatible\r\nOS : Windows 7/8/10 or later', 170000, '1588610142-hp-x796-32gb.jpg', '2020-05-04 09:35:43', '2020-05-04 09:35:43'),
(58, 28, 'Kingston DataTraveller 106 32GB', 'F03', 'Brand : Kingston\r\nWeight : 50 Gr\r\nCapacity : 32 GB\r\nInterface : USB 3.1\r\nUSB Connector : Type A\r\nRead Performance : up to 140 MB/s\r\nWrite Performance : up to 40 MB/s\r\nCompatible OS : Windows 7/8/10, Mac OS 10.10 or later, Linux 2.6.10 or later', 120000, '1588610254-kingston-datatraveller-106-32gb.jpg', '2020-05-04 09:37:34', '2020-06-11 22:02:49'),
(59, 28, 'Kingston DataTraveller DT20 32 GB', 'F04', 'Brand :\r\nKingston\r\n\r\n<br>Type :\r\nFlash drive\r\n\r\n<br>Weight :\r\n65 Gr\r\n<br>Capacity :\r\n32 GB\r\n\r\n<br>Interface\r\n: USB 2.0\r\n\r\n<br>USB\r\nConnector : Type A\r\n\r\n<br>Read\r\nPerformance : up to 14 MB/s\r\n\r\n<br>Write\r\nPerformance : up to 4 MB/s\r\n\r\n<br>Compatible\r\nOS : Windows 7/8/10', 75000, '1588610348-kingston-datatraveller-dt20-32-gb.jpg', '2020-05-04 09:39:08', '2020-05-04 09:39:08'),
(60, 28, 'Toshiba Hayabusa 32GB', 'F05', 'Brand : Toshiba\r\nWeight : 150 Gr\r\nCapacity : 32 GB\r\nInterface : USB 2.0\r\nUSB Connector : Type A\r\nRead Performance : up to 18 MB/s\r\nWrite Performance : up to 5 MB/s\r\nCompatible OS : Windows 7/8/10', 130000, '1588610435-toshiba-hayabusa-32gb.jpg', '2020-05-04 09:40:35', '2020-06-11 22:02:01'),
(61, 28, 'SanDisk Ultra Fit 32GB', 'F06', 'Brand : SanDisk\r\nWeight : 10 Gr\r\nCapacity : 32 GB\r\nInterface : USB 3.1\r\nUSB Connector : Type A\r\nRead Performance : up to 130 MB/s\r\nWrite Performance : up to 30 MB/s\r\nCompatible OS : Windows 7/8/10', 175000, '1588610533-sandisk-ultra-fit-32gb.jpg', '2020-05-04 09:42:13', '2020-06-11 22:01:36'),
(62, 28, 'SanDisk Cruzer Force 32GB', 'F07', 'Brand : SanDIsk\r\nWeight : 20 Gr\r\nCapacity : 32 GB\r\nInterface : USB 2.0\r\nUSB Connector : Type A\r\nRead Performance : up to 14 MB/s\r\nWrite Performance : up to 4 MB/s\r\nCompatible OS : Windows 7/8/10', 150000, '1588610611-sandisk-cruzer-force-32gb.jpg', '2020-05-04 09:43:31', '2020-06-11 22:00:56'),
(63, 28, 'SanDisk Ultra Loop 32GB', 'F08', 'Brand : SanDisk\r\nWeight : 100 Gr\r\nCapacity : 32 GB\r\nInterface : USB 3.0\r\nUSB Connector : Type A\r\nRead Performance : up to 130 MB/s\r\nWrite Performance : up to 30 MB/s\r\nCompatible OS : Windows 7/8/10', 230000, '1588610684-sandisk-ultra-loop-32gb.jpg', '2020-05-04 09:44:44', '2020-06-11 22:00:08'),
(64, 29, 'Adata UV150 32GB', 'F09', 'Brand : Adata\r\nWeight : 200 Gr\r\nCapacity : 32 GB\r\nInterface : USB 3.1\r\nUSB Connector : Type A\r\nRead Performance : up to 140 MB/s\r\nWrite Performance : up to 40 MB/s\r\nCompatible OS : Windows 7/8/10', 125000, '1588610778-adata-uv150-32gb.jpg', '2020-05-04 09:46:18', '2020-06-11 21:59:34'),
(77, 27, 'Lenovo Ideapad S340 14IML', 'len009', 'Brand : Lenovo\r\nWeight : 1600 Gr\r\nScreen : 14 inch Full HD IPS\r\nCPU : Intel Core i7-10510U\r\nGPU : Intel Graphics 620 and Nvidia GeForce MX230\r\nRAM : 8 GB\r\nStorage : 512 GB SSD', 13400000, '1591938734-lenovo-ideapad-s340-14iml.jpg', '2020-06-11 22:12:14', '2020-06-11 22:12:14'),
(65, 28, 'V-Gen Titans 32Gb', 'F10', 'Brand : V-Gen\r\nWeight : 10 Gr\r\nCapacity : 32 GB\r\nInterface : USB 3.0\r\nUSB Connector : Type A\r\nRead Performance : up to 132 MB/s\r\nWrite Performance : up to 108 MB/s\r\nCompatible OS : Windows 7/8/10', 120000, '1588610874-v-gen-titans-32gb.jpg', '2020-05-04 09:47:54', '2020-06-11 21:58:59'),
(66, 29, 'Seagate BarraCuda 500GB SATA3', 'HD01', 'Brand : Seagate\r\nWeight : 800 Gr\r\nCapacity : 500 GB\r\nInterface : SATA 6 Gb/s\r\nRPM : 7200\r\nCache : 32 MB\r\nForm Factor : 3.5 inch', 720000, '1588610975-seagate-barracuda-500gb-sata3.jpg', '2020-05-04 09:49:35', '2020-06-11 21:58:15'),
(67, 29, 'Seagate FireCuda SSHD 1TB', 'HD02', 'Brand : Seagate\r\nWeight : 800 Gr\r\nCapacity : 1 TB\r\nInterface : SATA 6 Gb/s \r\nRPM : 7200\r\nCache : 64 MB\r\nForm Factor : 3.5  inch', 1420000, '1588611085-seagate-firecuda-sshd-1tb.jpg', '2020-05-04 09:51:25', '2020-06-11 21:57:03'),
(68, 29, 'Toshiba P300 HDD 1TB', 'HD03', 'Brand : Toshiba\r\nWeight : 500 Gr\r\nCapacity : 1 TB\r\nInterface : SATA 6 Gb/s\r\nRPM : 7200\r\nCache : 64 MB\r\nForm Factor : 3.5 inch', 780000, '1588611195-toshiba-p300-hdd-1tb.jpg', '2020-05-04 09:53:15', '2020-06-11 21:57:45'),
(69, 29, 'Toshiba L200 HDD 500GB', 'HD04', 'Brand : Toshiba\r\nWeight : 150 Gr\r\nCapacity : 500 GB\r\nInterface : SATA 6 Gb/s\r\nRPM : 5400\r\nCache : 8 MB\r\nForm Factor : 2.5 inch', 675000, '1588611309-toshiba-l200-hdd-500gb.jpg', '2020-05-04 09:55:09', '2020-06-11 21:56:34'),
(70, 29, 'WD Caviar Blue HDD 1TB', 'HD05', 'Brand : Western Digital\r\nWeight : 1000 Gr\r\nCapacity : 1 TB\r\nInterface : SATA 6 Gb/s', 720000, '1588611382-wd-caviar-blue-hdd-1tb.jpg', '2020-05-04 09:56:22', '2020-06-11 21:55:56'),
(71, 29, 'Seagate Backup Plus Ultra Slim HDD 1TB', 'HD06', 'Brand : Seagate\r\nWeight : 300 Gr\r\nPlug and Play\r\nCapacity : 1 TB\r\nInterface : USB 3.0\r\nTransfer Data Rate : 120 MB/s up to 5 GB/s\r\nOS Support : Windows 7/8/10 and Mac OS 10.7 or later\r\nForm Factor : 2.5 inch', 1120000, '1588611536-seagate-backup-plus-ultra-slim-hdd-1tb.jpg', '2020-05-04 09:58:57', '2020-06-11 21:55:24'),
(72, 31, 'Logitech K380', 'K01', 'Brand : Logitech\r\nWeight : 423 Gr\r\nDescription :\r\nWireless : Yes\r\nRGB : No\r\nSilent : No\r\nCompatible OS : Windows, Mac OS, Android, iOS', 460000, '1588611626-logitech-k380.jpg', '2020-05-04 10:00:26', '2020-06-11 21:54:42'),
(73, 31, 'Logitech K400 Plus', 'K02', 'Brand : Logitech\r\nWeight : 380 Gr\r\nWireless : Yes \r\nRGB : No\r\nSilent : No\r\nCompatible OS : Windows, Mac OS, TV', 610000, '1588611705-logitech-k400-plus.jpg', '2020-05-04 10:01:46', '2020-06-11 21:53:25'),
(74, 27, 'Asus VivoBook S14', '0987', 'Brand : Asus\r\nWeight : 1400 Gr\r\nScreen : 14 inch Full HD IPS\r\nCPU : Intel Core i3-8130U \r\nGPU : NVIDIA GeForce MX150 \r\nRAM : 8 GB \r\nStorage : 128 GB SSD + 1 TB HDD', 6000000, '1591931553-asus-vivobook-s14.jpg', '2020-06-11 20:12:34', '2020-06-11 21:49:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_att`
--

CREATE TABLE `product_att` (
  `id` int(10) UNSIGNED NOT NULL,
  `products_id` int(10) NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(255) NOT NULL,
  `stock` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_att`
--

INSERT INTO `product_att` (`id`, `products_id`, `sku`, `color`, `price`, `stock`, `created_at`, `updated_at`) VALUES
(35, 73, '1234', 'black', 610000, 10, '2020-05-06 04:42:33', '2020-06-10 19:39:23'),
(36, 44, 'PO1121', 'white', 14000000, 7, '2020-05-08 10:04:52', '2020-06-10 20:15:30'),
(37, 72, 'K011', 'black', 640000, 6, '2020-05-08 10:05:27', '2020-06-10 09:16:29'),
(38, 46, 'vivobook1', 'silver', 12500000, 3, '2020-05-13 22:10:52', '2020-06-10 09:11:21'),
(39, 45, 'LenovoS3401', 'one size', 13400000, 3, '2020-05-18 23:39:52', '2020-05-18 23:39:52'),
(40, 44, 'hppavilion14', 'silver', 14000000, 2, '2020-05-18 23:40:27', '2020-06-10 20:15:30'),
(41, 43, 'msi1', 'black', 19000000, 2, '2020-05-18 23:41:14', '2020-06-10 20:16:11'),
(42, 42, 'mackbok1', 'white', 22400000, 3, '2020-05-18 23:41:46', '2020-06-10 20:16:31'),
(43, 41, 'hp14s1', 'silver', 6700000, 3, '2020-05-18 23:42:15', '2020-06-10 20:16:44'),
(44, 40, 'asusvivo1', 'purple + black', 7500000, 2, '2020-05-18 23:42:58', '2020-06-10 20:16:58'),
(45, 39, 'lenl3401', 'silver', 6450000, 3, '2020-05-18 23:44:07', '2020-06-10 20:17:10'),
(46, 38, 'acerasire1', 'black', 7800000, 4, '2020-05-18 23:44:34', '2020-06-10 20:17:25'),
(47, 37, 'asuss141', 'silver', 6000000, 5, '2020-05-18 23:45:02', '2020-06-10 20:17:37'),
(48, 46, 'vivobook2', 'white', 12500000, 1, '2020-06-10 09:11:58', '2020-06-10 09:11:58'),
(49, 71, 'h9949', 'white', 1120000, 2, '2020-06-10 09:17:26', '2020-06-10 09:17:26'),
(50, 70, 'HD000', 'silver', 720000, 2, '2020-06-10 19:40:21', '2020-06-10 19:40:21'),
(51, 69, '133', 'silver', 675000, 3, '2020-06-10 19:40:48', '2020-06-10 19:40:48'),
(52, 68, 'HD009', 'silver', 780000, 3, '2020-06-10 19:41:10', '2020-06-10 19:41:10'),
(53, 67, '0097', 'white', 1420000, 4, '2020-06-10 19:41:50', '2020-06-10 19:41:50'),
(54, 66, '567', 'silver', 720000, 4, '2020-06-10 19:42:10', '2020-06-10 19:42:10'),
(55, 65, '895', 'blue', 120000, 4, '2020-06-10 19:42:36', '2020-06-10 19:42:36'),
(56, 64, '45', 'red', 125000, 5, '2020-06-10 19:43:28', '2020-06-10 19:43:28'),
(57, 63, '7865', 'silver', 230000, 3, '2020-06-10 19:45:53', '2020-06-10 19:45:53'),
(58, 61, '8765', 'black', 175000, 6, '2020-06-10 19:51:36', '2020-06-10 19:51:36'),
(59, 60, 'F009', 'white', 130000, 3, '2020-06-10 19:52:58', '2020-06-10 19:52:58'),
(60, 59, '789', 'black', 75000, 6, '2020-06-10 20:05:27', '2020-06-10 20:05:27'),
(61, 58, '9876', 'black', 120000, 7, '2020-06-10 20:05:50', '2020-06-10 20:05:50'),
(62, 57, '3451', 'silver', 170000, 8, '2020-06-10 20:06:26', '2020-06-10 20:06:26'),
(63, 55, 'M009', 'black', 420000, 7, '2020-06-10 20:07:20', '2020-06-10 20:07:27'),
(64, 54, '8760', 'blue', 225000, 8, '2020-06-10 20:08:14', '2020-06-10 20:08:14'),
(65, 54, '000', 'black', 225000, 5, '2020-06-10 20:08:30', '2020-06-10 20:08:30'),
(66, 54, '9876', 'red', 225000, 10, '2020-06-10 20:08:46', '2020-06-10 20:08:46'),
(67, 53, 'moo9', 'black', 450000, 10, '2020-06-10 20:09:48', '2020-06-10 20:09:48'),
(68, 52, '0j08', 'black', 800000, 9, '2020-06-10 20:10:15', '2020-06-10 20:10:15'),
(69, 51, '0987', 'black', 50000, 10, '2020-06-10 20:10:39', '2020-06-10 20:10:39'),
(70, 51, '6g89', 'white', 50000, 9, '2020-06-10 20:12:15', '2020-06-10 20:12:15'),
(71, 50, '8hji0', 'black', 96000, 8, '2020-06-10 20:13:13', '2020-06-10 20:13:13'),
(72, 49, 'm009h', 'black8', 60000, 8, '2020-06-10 20:14:00', '2020-06-10 20:14:00'),
(73, 49, 'm001', 'white', 60000, 7, '2020-06-10 20:14:16', '2020-06-10 20:14:16'),
(74, 48, 'jh98', 'black', 90000, 20, '2020-06-10 20:14:41', '2020-06-10 20:14:41'),
(75, 47, '98gj', 'black', 80000, 8, '2020-06-10 20:15:12', '2020-06-10 20:15:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblgallery`
--

CREATE TABLE `tblgallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `products_id` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tblgallery`
--

INSERT INTO `tblgallery` (`id`, `products_id`, `image`, `created_at`, `updated_at`) VALUES
(35, 73, '7009821591805763.jpg', '2020-06-10 09:16:04', '2020-06-10 09:16:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(4) DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `barangay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`, `address`, `city`, `barangay`, `region`, `province`, `country`, `postal_code`, `phone_number`) VALUES
(8, 'Heppy', 'heppymarias@gmail.com', NULL, '$2y$10$/dOVPPcFg0/wZ9z6bZR.k.YxMogMyxijM2.ed2i4.AASozHSKEq0m', NULL, 'CJYRzmKrkSzrMVsrHDhha42AYYZEvu6hhAqlHtJHMRVU3qlLbfHvlROBjKss', '2020-06-10 04:45:12', '2020-06-10 04:45:12', 'Jl.Balige', 'Porsea', 'Parparean', 'Toba Samosir', 'Sumatera Utara', 'Indonesia', '22384', '081329431519'),
(9, 'onankomputer', 'onankomputer@gmail.com', NULL, '$2y$10$AccZBdZj8qrM5NKyEEYlBOrEwNJ76NrHeJzIlCewiwVOj0V/vZ0fa', 1, 'qwUNOUFEE5emHDwMVtcesqWC0UTKyE4SP3K76HESTVNTPt1qwleIUukrKQH4', '2020-06-10 04:47:13', '2020-06-10 04:47:13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`name`) USING HASH;

--
-- Indeks untuk tabel `compare`
--
ALTER TABLE `compare`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `delivery_address`
--
ALTER TABLE `delivery_address`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product_att`
--
ALTER TABLE `product_att`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tblgallery`
--
ALTER TABLE `tblgallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`) USING HASH;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `compare`
--
ALTER TABLE `compare`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `delivery_address`
--
ALTER TABLE `delivery_address`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT untuk tabel `product_att`
--
ALTER TABLE `product_att`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT untuk tabel `tblgallery`
--
ALTER TABLE `tblgallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
