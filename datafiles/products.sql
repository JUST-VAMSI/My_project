-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 08:02 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data123`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `sno` int(11) NOT NULL,
  `proid` int(11) NOT NULL,
  `proname` varchar(255) NOT NULL,
  `promrp` int(11) NOT NULL,
  `proprice` int(11) NOT NULL,
  `proqty` int(11) NOT NULL,
  `proimg` varchar(255) NOT NULL,
  `prosdes` varchar(255) NOT NULL,
  `prodes` varchar(255) NOT NULL,
  `promtitle` varchar(255) NOT NULL,
  `promdes` varchar(255) NOT NULL,
  `promkeywords` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`sno`, `proid`, `proname`, `promrp`, `proprice`, `proqty`, `proimg`, `prosdes`, `prodes`, `promtitle`, `promdes`, `promkeywords`) VALUES
(1, 1, 'SIMPLE DOOR', 25000, 22000, 1, 'img-644958419e7662.22858400.jpg', 'Teak wood with neat polish', 'Good and neat design door with different polish', 'Simple design door', 'Biscuit color door with border and neat design door', 'Doors, simple plain doors, polish doors.'),
(2, 2, 'PREMIUM DOOR', 35000, 33000, 1, 'img-644958df806d90.94279290.jpg', 'Glass and wood door', 'Door with glass and teak wood', 'Good glass door', 'Plain glass door with teak wood and high quality door', 'Doors, premium doors, high quality doors.'),
(3, 3, 'DOOR WITH WINDOWS', 50000, 45000, 1, 'img-6449599f850fb1.95046795.jpg', 'Big main door with teak wood ', 'Teak wood and side glass windows door', 'window and door', 'Glass side windows and door with teak wood', 'Doors, window and doors , glass doors.'),
(4, 4, 'SIDE CUPBOARD DOOR', 55000, 53000, 1, 'img-64495a0c7243b7.26114529.jpg', 'Door with side cupboards', 'Teak wood cupboards and doors', 'Good corner door', 'Teak wood and methyl orange polish door and cupboards', 'Doors, cupboards and door, corner doors.'),
(5, 5, 'GLASS DOOR', 60000, 58000, 1, 'img-64495aa6595745.00310499.jpg', 'Glass door with border wood', 'Teak wood border and total glass door', 'Door with round lock', 'Premium lock and glass door with teak wood.', 'Doors, round lock doors, glass doors.'),
(6, 6, 'TEAK WOOD DOOR', 55000, 50000, 0, 'img-64495b0c4417d1.60185575.jpg', 'Door with teak wood and glass', 'Top two small glasses and teak wood door and big locker', 'Big locker door', 'Side glass windows and door with top two small glass door', 'Doors, glass doors, big locker doors, top two small glass doors.'),
(7, 7, '5.6 COT WITH POCKET', 70000, 65000, 0, 'img-64495b663e0a36.55005471.jpg', 'Black teak shade wood', 'Cot with rack for storing something files, etc.', 'Good looking cot', 'Teak wood and black shade polish cot', 'Teak wood cot, cot with storage rack, cot, 5.6 cot'),
(8, 8, '4.5 COT WITH LOCKER', 50000, 46000, 1, 'img-64495bdca38d96.32817157.png', 'Teak wood with good shade polish', 'Cot with secret locker beside the cot', 'Two secret lockers cot', 'Teak wood and two secret lockers cot with rose wood polish', 'cots, 4.5 cot, secret locker cot'),
(9, 9, 'BABY COT', 32000, 30000, 0, 'img-64495c2f317129.54092587.jpg', 'Teak wood baby cot', 'Orange polish baby cot with teak wood and side protection', 'Protection baby cot', 'Giving good sleep to babies and protect baby from fell down on to the floor', 'protection cot, cots, baby cot'),
(10, 10, 'SIMPLE PLAIN COT', 40000, 35000, 0, 'img-64495d41dd7fb2.69080652.jpg', 'Teak wood without design but storing cot', 'Five pillars cot with teak wood and neat and clean plain cot', '5.6 cot with teak wood', 'Good wood and plain cot for who do not like any design ', '5 pillars cot, plain cot, cots, 5.6 cot'),
(11, 11, 'BLACK WOOD COT', 80000, 75000, 1, 'img-64495d983e8733.90292700.jpg', '6.6 Black wood cot with premium design ', 'Good designed cot with small height mean near by floor', 'Premium designed cot', 'Black wood and heavy designed cot with lower height', '6.6 cot, cots, premium designed cot, Black wood cot'),
(12, 12, 'SPONGE DESIGNED COT', 92000, 90000, 1, 'img-64495e01dba8a4.90760463.jpg', 'Teak wood with black wood polish', 'Sponge sticky on head and tail with good design ', '6.6 cot with Black wood polish', 'Lower height near the floor cot', '6.6 cot, sponge sticky cot, high quality cot'),
(13, 13, 'SOFA AND TEAPOY TABLE', 55000, 52000, 1, 'img-64495e87ef1678.19754104.jpg', 'Tea table and sofa', 'Sofa with two chairs and table also ', 'Sofa and Chairs', 'Good sponge sofa and chairs and table', 'Sofa with side chairs, sofa, chairs.'),
(14, 14, 'SOFA AND CHAIRS', 89000, 80000, 1, 'img-64495ef5990b15.29561860.jpg', 'Chairs and sofa with table', 'Four members sitting sofa and three chairs and table', 'Sofa with three chairs', 'More members sittings sofa set and used good material', 'Sofa, Sofa set, sofa with table'),
(15, 15, 'PLAIN SOFA', 56000, 52000, 1, 'img-64495f5894f150.93540124.jpg', 'Teak wood with good shade polish', 'Teak wood sofa with two pillows and plain design ', 'plain sofa with Biscuit color cloth', 'Biscuit color cloth sofa with teak wood and polish', 'Sofa, Biscuit color sofa, plain sofa.'),
(16, 16, 'WHITE CLOTH SOFA', 70000, 67000, 1, 'img-64495fbf7fea67.19170181.jpg', 'White cloth big sofa set', 'Sofa set with Good  design and big sofa set', 'Big sofa set', 'Premium white sofa for richness.', 'Sofa, white cloth sofa , big sofa set'),
(17, 17, 'BLACK WOOD SOFA', 100000, 95000, 1, 'img-6449601b4e88d9.27822286.jpeg', 'Black wood sofa with black wood polish', 'Black wood sofa set with two chairs and cloth also premium', 'premium wood and cloth sofa set', 'Good sofa set with black wood and rose cloth', 'sofa, black wood sofa set, rose cloth sofa set.'),
(18, 18, '4 SITTING SOFA', 50000, 46500, 1, 'img-64496096992d02.87846813.jpg', '4 members sitting sofa ', 'white cloth with 4 members sitting and black wood sofa set', 'Black wood and white cloth sofa', 'Good white cloth and black wood sofa set', 'sofa, black wood sofa, white cloth sofa, 4 members sitting sofa.'),
(19, 19, 'DINING TABLE 8 SITTING', 70000, 67000, 1, 'img-644961788f82c0.22975871.jpg', 'Teak wood 9 members sitting dining table', 'Teak wood dining table for two families sitting and methyl orange color polish', 'Dining table with teak wood', 'Model chairs 8 members sitting dining table', 'Dining tables, 8 members sitting dining table, teak wood dining table.'),
(20, 20, 'DINING TABLE', 36000, 30000, 1, 'img-644961e7cd5fd6.51901428.jpg', 'Dining table with 4 chairs', 'Teak wood dining table with rose wood polish', 'Four members sitting dining table', 'Spong and rose wood color polish dining table', 'Dining table , 4 members sitting dining table, rose wood polish dining table'),
(21, 21, 'DINING FOR 2 FAMILY', 50000, 46000, 1, 'img-6449626008c522.10017608.jpg', 'Simple dining table with green cloth', 'White matte table and 8 chairs with good look', 'Good looking while dining table', 'Greenish blue cloth chairs and white table', 'Dining tables, white matte table, greenish blue cloth chairs.'),
(22, 22, 'DINING TABLE ROSEWOOD', 88000, 85000, 1, 'img-644965828f1dc3.66596134.jpg', 'Black wood dining table', 'Dining table with black wood 8 members sitting ', 'Black wood chair for two families sitting', 'Two families sitting black wood dining table', 'Black wood dining tables, dining tables, premium dining tables.'),
(23, 23, 'PREMIUM DINING TABLE', 99000, 97000, 1, 'img-644965cb455e46.00773083.jpeg', 'Teak wood dining table', 'Rotating dining table with 6 members sitting', 'Premium rotating table', 'Heavy designed chairs and rotating table with high quality sponge cloth chairs', '6 members sitting dining table, premium dining tables, teak wood dining tables.'),
(24, 24, 'COFFEE CLOTH TABLE', 78000, 76000, 1, 'img-644966241ed816.22970628.jpg', 'Neat and clean dining table', 'Dining table with soft wood and good looking ', '8 sitting dining table', '8 members sitting dining table and shining table', 'Dining tables, shining table, good cloth dining tables.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
