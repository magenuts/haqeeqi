SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
--
-- Database: `haqeeqi`
--




CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO categories VALUES
("2","Home Appliances","home appliances","15736678181486144528home-appliances-png-quality.png","2019-11-12 17:25:50","2019-11-13 17:56:58"),
("3","Electronics","electronics","1573668094HP-Laptop-PNG-Image-Background.png","2019-11-12 17:26:13","2019-11-13 18:01:34"),
("4","Sports","sports","1573667100PNGPIX-COM-Aston-Martin-V12-Zagato-Red-Sports-Car-PNG-Image.png","2019-11-12 17:26:22","2019-11-13 17:45:00"),
("5","Cars","cars","1573666984purepng.com-black-mclaren-570s-gt4-sports-carcarvehicletransportmclarensports-car-961524643995s7kcd.png","2019-11-12 17:27:45","2019-11-13 17:43:04"),
("6","Games","games","1573668130controller-2923485_960_720.png","2019-11-12 17:28:33","2019-11-13 18:02:10"),
("7","Fashion","fashion","1573667701fashion-1213161_960_720.png","2019-11-12 17:32:03","2019-11-13 17:55:01"),
("8","Real Estate","real estate","1573667462building-hd-png-city-png-clipart-1600.png","2019-11-12 17:32:58","2019-11-13 17:51:02"),
("9","House","house","1573667231house_PNG52.webp","2019-11-12 17:33:25","2019-11-13 17:47:11"),
("10","Mobiles","mobiles","1573667160IPhone-X-Download-PNG-Image.png","2019-11-12 17:37:29","2019-11-13 17:46:00"),
("13","Vehicles","vehicles","1573667519motorcycle_PNG5344.webp","2019-11-12 17:39:17","2019-11-13 17:51:59"),
("14","Furniture","furniture","1573652796Furniture-Download-PNG.png","2019-11-13 13:45:26","2019-11-13 13:46:36");




CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;






CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO migrations VALUES
("1","2014_10_12_000000_create_users_table","1"),
("2","2014_10_12_100000_create_password_resets_table","1"),
("3","2019_08_19_000000_create_failed_jobs_table","1"),
("4","2019_11_11_133552_create_categories_table","1"),
("5","2019_11_11_134300_create_subcategories_table","1");




CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;






CREATE TABLE `subcategories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO subcategories VALUES
("4","Racing Cars","racing cars","5","1573649930adl.jpg","2019-11-13 10:06:53","2019-11-13 12:59:07"),
("5","Mobiles","mobiles","3","1573639628iPhone-11-iPhone-XI.jpg","2019-11-13 10:07:08","2019-11-13 10:07:08"),
("6","LED","led","2","1573639644high-definition-led-tv-500x500.jpg","2019-11-13 10:07:24","2019-11-13 12:57:22"),
("8","Wrestling","wrestling","4","1573639797bray-wyatt.png","2019-11-13 10:09:57","2019-11-13 10:09:57"),
("11","Cricket","cricket","4","1573640118India-s-captain-Virat-Kohli-reacts-_16bdcd6dc45_large.jpg","2019-11-13 10:15:18","2019-11-13 10:15:18"),
("12","Basketball","basketball","4","1573640240BA3EElitePlus.jpg","2019-11-13 10:17:20","2019-11-13 10:17:20"),
("13","Sofa","sofa","14","1573654550kisspng-oil-painting-canvas-print-art-furniture-5a6c2911f23830.8414876515170378419921.jpg","2019-11-13 14:15:51","2019-11-13 14:15:51"),
("14","Cars","cars","13","1573654581574377fe5aece2df37e2aaa962184882-700.jpg","2019-11-13 14:16:21","2019-11-13 14:16:21"),
("15","Apple","apple","10","1573654601iPhone-11-PRODUCT-RED-600x400.jpg","2019-11-13 14:16:41","2019-11-13 14:16:41"),
("16","Bike Race","bike race","6","1573654635harley-davidson-1628420-unsplash.jpg","2019-11-13 14:17:15","2019-11-13 14:17:15"),
("17","Mansion","mansion","9","1573654662Amazing-House-in-Amazing-Place-HD-Wallpaper.jpg","2019-11-13 14:17:42","2019-11-13 14:17:42"),
("18","Residential","residential","8","1573654766luxury-houses-with-yellow-light-in-modern-villa-at-night-04-HD-picture.jpg","2019-11-13 14:19:26","2019-11-13 14:19:26"),
("19","Clothes","clothes","7","157365487271-ZjtOGH9L._UX679_.jpg","2019-11-13 14:21:12","2019-11-13 14:21:12"),
("20","Shoes","shoes","7","1573654930Masorini-Mesh-Men-Shoes-Casual-Breathable-Men-Sneakers-Mens-Fashion-Shoe-For-Male-Footwear-Spring-Autumn.jpg","2019-11-13 14:22:10","2019-11-13 14:22:10"),
("21","Laptop","laptop","3","1573668345HP-Laptop-PNG-Image-Background.png","2019-11-13 18:05:45","2019-11-13 18:05:45"),
("22","MotorBikes","motorbikes","13","1573668431motorcycle_PNG5344.webp","2019-11-13 18:07:12","2019-11-13 18:07:12");




CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `userimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO users VALUES
("1","Admin","admin@haqeeqi.com","","$2y$10$6aiDplM882vRAGiznmLecOKXeaiyb79B0Di1QrxG6V/zvoSTz6iOe","","","","admin","","","");




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;