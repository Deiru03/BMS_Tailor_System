-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 20, 2025 at 02:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bms`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `created_by` int(2) DEFAULT NULL,
  `update_at` date DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `name`, `description`, `created_by`, `update_at`, `create_at`) VALUES
(1, 'Processors', 'A processor (CPU) is the logic circuitry that responds to and processes the basic instructions that drive a computer. The CPU is seen as the main and most crucial integrated circuitry (IC) chip in a c', 1, NULL, '2023-07-21 12:29:08'),
(2, 'Motherboards', 'A motherboard (also called mainboard, main circuit board, MB, mboard, backplane board, base board, system board, mobo; or in Apple computers logic board)', 1, NULL, '2023-07-21 12:29:35'),
(3, 'RAM (Memory)', 'Random-access memory is a form of computer memory that can be read and changed in any order, typically used to store working data and machine code.', 1, NULL, '2023-07-21 12:37:27'),
(7, 'Jersey set', 'S, M, L, XL', 1, '2024-12-11', '2024-12-09 07:00:44'),
(9, 'Sando', 'S, M, L, XL', 1, '2025-01-06', '2024-12-09 07:03:02'),
(11, 'Jersey t-shirt', 'S, M, L, XL', 1, NULL, '2024-12-09 07:04:22'),
(12, 'Jersey short', '', 1, NULL, '2024-12-09 07:04:37'),
(13, 'Polo Shirt/ Zipper', 'S, M, L, XL', 1, '2024-12-11', '2024-12-11 11:01:19'),
(14, 'Polo Shirt/ Button', 'S, M, L, XL', 1, NULL, '2024-12-11 11:02:10'),
(15, 'Polo Shirt/ Chinese Collar', 'S, M, L, XL', 1, NULL, '2024-12-11 11:02:45'),
(16, 'Long Sleeve', 'S, M, L, XL', 1, NULL, '2024-12-11 11:05:49'),
(17, 'Long Sleeve/ Hood', 'S, M, L, XL', 1, NULL, '2024-12-11 11:06:19'),
(18, 'Jacket', 'S, M, L, XL', 1, NULL, '2024-12-11 11:07:21'),
(19, 'Jacket/ Hood', 'S, M, L, XL', 1, '2024-12-11', '2024-12-11 11:07:42'),
(23, 'underware', '', 1, NULL, '2025-01-06 04:32:21'),
(24, 'underwear', '', 1, '2025-01-16', '2025-01-16 06:28:56'),
(25, 'jersey', '', 1, NULL, '2025-01-16 09:46:44'),
(26, 'jogging pants', 'small', 1, NULL, '2025-01-20 08:42:52');

-- --------------------------------------------------------

--
-- Table structure for table `customer_balance`
--

CREATE TABLE `customer_balance` (
  `id` int(11) NOT NULL,
  `cus_id` varchar(255) DEFAULT NULL,
  `due_blance` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_balance`
--

INSERT INTO `customer_balance` (`id`, `cus_id`, `due_blance`) VALUES
(22, '23', '0.00'),
(23, '24', '1000'),
(24, '25', '0.00'),
(25, '26', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `ex_date` date NOT NULL,
  `expense_for` varchar(50) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `amount` float(15,2) NOT NULL DEFAULT 0.00,
  `expense_cat` int(10) NOT NULL,
  `ex_description` text NOT NULL,
  `added_by` int(4) DEFAULT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `ex_date`, `expense_for`, `supplier`, `amount`, `expense_cat`, `ex_description`, `added_by`, `added_date`) VALUES
(13, '2024-12-25', 'tailoring', '0', 200.00, 2, '13 yards', 1, '2024-12-20 01:54:19'),
(14, '2024-12-26', 'tailoring', '0', 200.00, 4, '2 liters', 1, '2024-12-20 02:00:08'),
(15, '2024-12-26', 'Gasolina', '0', 120.00, 8, '', 1, '2024-12-26 10:57:53'),
(16, '2024-12-26', 'Gasolina', '0', 120.00, 8, '', 1, '2024-12-26 10:58:02'),
(17, '1970-01-01', 'Sinulid and Canvas', '0', 120.00, 9, '', 1, '2024-12-26 10:59:19'),
(18, '2025-01-20', 'Others', 'Rakesh Jadhav', 900.00, 9, '10 items', 1, '2025-01-20 13:57:22');

-- --------------------------------------------------------

--
-- Table structure for table `expense_catagory`
--

CREATE TABLE `expense_catagory` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `added_by` int(4) NOT NULL,
  `added_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `expense_catagory`
--

INSERT INTO `expense_catagory` (`id`, `name`, `description`, `added_by`, `added_time`) VALUES
(1, 'Petrol', 'Petrol for transport', 1, '2023-07-21 12:34:59'),
(2, 'sinulid', 'dasfaddgs', 1, '2024-12-08 10:54:44'),
(3, 'tela', 'asdf', 1, '2024-12-08 10:54:58'),
(4, 'Ink', 'sample ink', 1, '2024-12-08 10:57:34'),
(5, 'machine', 'sample', 1, '2024-12-08 22:07:33'),
(6, 'papers', 'sample', 1, '2024-12-08 22:11:35'),
(7, 'machine', 'sample d', 1, '2024-12-19 23:43:19'),
(8, 'sssssss', 'ssss', 1, '2024-12-20 01:46:23'),
(9, 'Stitching Tools', '', 1, '2024-12-26 10:58:56');

-- --------------------------------------------------------

--
-- Table structure for table `factory_products`
--

CREATE TABLE `factory_products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `catagory_id` int(11) NOT NULL,
  `catagory_name` varchar(100) NOT NULL,
  `sku` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `alert_quantity` int(4) NOT NULL,
  `product_expense` float(15,2) NOT NULL DEFAULT 0.00,
  `sell_price` float(15,2) NOT NULL DEFAULT 0.00,
  `added_by` int(4) NOT NULL,
  `last_update_at` date NOT NULL,
  `added_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `invoice_number` varchar(100) DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `sub_total` float(15,2) NOT NULL DEFAULT 0.00,
  `discount` float(15,2) NOT NULL DEFAULT 0.00,
  `pre_cus_due` float(15,2) NOT NULL DEFAULT 0.00,
  `net_total` float(15,2) NOT NULL DEFAULT 0.00,
  `paid_amount` float(15,2) NOT NULL DEFAULT 0.00,
  `due_amount` float(15,2) NOT NULL DEFAULT 0.00,
  `payment_type` varchar(20) NOT NULL,
  `return_status` varchar(30) NOT NULL DEFAULT 'no',
  `last_update` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `invoice_number`, `customer_id`, `customer_name`, `order_date`, `sub_total`, `discount`, `pre_cus_due`, `net_total`, `paid_amount`, `due_amount`, `payment_type`, `return_status`, `last_update`) VALUES
(119, 'S1736152007', 23, 'carlo', '2025-01-06', 7200.00, 0.00, 0.00, 7200.00, 7500.00, -300.00, 'Cash', 'no', NULL),
(120, 'S1737009108', 25, 'lara', '1970-01-01', 250.00, 0.00, 0.00, 250.00, 0.00, 0.00, 'Cash', 'no', NULL),
(121, 'S1737342491', 25, 'lara', '1970-01-01', 400.00, 0.00, 0.00, 400.00, 400.00, 0.00, 'Cash', 'no', NULL),
(122, 'S1737362768', 26, 'julie anne', '2025-01-20', 3500.00, 0.00, 0.00, 3500.00, 0.00, 0.00, 'Cash', 'no', NULL),
(123, 'S1737362790', 26, 'julie anne', '2025-01-20', 3500.00, 0.00, 0.00, 3500.00, 3600.00, -100.00, 'Cash', 'no', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_details`
--

CREATE TABLE `invoice_details` (
  `id` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `invoice_details`
--

INSERT INTO `invoice_details` (`id`, `invoice_no`, `pid`, `product_name`, `price`, `quantity`) VALUES
(43, 119, 60, 'Jersey', '7200', 9),
(44, 120, 79, 'brief', '250', 5),
(45, 121, 62, 'Jersey', '400', 10),
(46, 122, 82, 'jogging pants', '3500', 7),
(47, 123, 82, 'jogging pants', '3500', 7);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `member_id` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `con_num` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `total_buy` float(15,2) NOT NULL DEFAULT 0.00,
  `total_paid` float(15,2) NOT NULL DEFAULT 0.00,
  `total_due` float(15,2) NOT NULL DEFAULT 0.00,
  `reg_date` date NOT NULL,
  `update_by` int(8) DEFAULT NULL,
  `update_at` date DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `member_id`, `name`, `company`, `address`, `con_num`, `email`, `total_buy`, `total_paid`, `total_due`, `reg_date`, `update_by`, `update_at`, `create_at`) VALUES
(1, 'C1689940620', 'Nilesh Pandit', 'Nilesh Pandit Pvt Ltd', '2nd floor, Nikhil Pride Building, Lokmanya Bal Gangadhar Tilak Rd, near Kaka Halwai, Pune, Maharasht', '9090909090', 'nilesh@gmail.com', 19000.00, 19000.00, 0.00, '2023-07-21', 1, NULL, '2023-07-21 11:57:00'),
(23, 'C1736151653', 'carlo', 'carlo', 'san jose', '123456', 'carlo@gmail.com', 7200.00, 7500.00, -300.00, '2025-01-06', 1, NULL, '2025-01-06 08:20:53'),
(24, 'C1736214949', 'leiza', 'omsc', 'hfgmhjffbsber', '03124966', 'abc@gmail.com', 0.00, 0.00, 1000.00, '2025-01-07', 1, NULL, '2025-01-07 01:55:49'),
(25, 'C1737009075', 'lara', '', 'san jose', '123455', 'cerdick@gmail.com', 400.00, 400.00, 0.00, '2025-01-16', 1, NULL, '2025-01-16 06:31:15'),
(26, 'C1737362716', 'julie anne', 'juilsshop', 'camburay', '123456', 'juls@gmail.com', 3500.00, 3600.00, -100.00, '2025-01-20', 1, NULL, '2025-01-20 08:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `paymethode`
--

CREATE TABLE `paymethode` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `added_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `paymethode`
--

INSERT INTO `paymethode` (`id`, `name`, `added_by`, `added_time`) VALUES
(1, 'Cash', NULL, '2023-06-27 04:28:58'),
(2, 'G cash', NULL, '2023-06-27 04:29:29');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_id` varchar(50) DEFAULT NULL,
  `brand_name` varchar(255) DEFAULT NULL,
  `catagory_id` int(10) NOT NULL,
  `catagory_name` varchar(100) DEFAULT NULL,
  `product_source` varchar(20) DEFAULT NULL,
  `sku` varchar(50) DEFAULT NULL,
  `quantity` int(10) DEFAULT 0,
  `alert_quanttity` int(3) DEFAULT NULL,
  `buy_price` varchar(10) DEFAULT NULL,
  `sell_price` varchar(10) DEFAULT NULL,
  `added_by` int(4) DEFAULT NULL,
  `last_update_at` date NOT NULL,
  `added_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_id`, `brand_name`, `catagory_id`, `catagory_name`, `product_source`, `sku`, `quantity`, `alert_quanttity`, `buy_price`, `sell_price`, `added_by`, `last_update_at`, `added_time`) VALUES
(60, 'Jersey', 'P1736131345', 'BMS', 7, 'Jersey set', 'factory', '', 1, 5, NULL, '800', 1, '2025-01-06', '2025-01-06 02:42:25'),
(61, 'Jersey', 'P1736131476', 'BMS', 9, 'Sando', 'factory', '', 10, 5, NULL, '400', 1, '2025-01-06', '2025-01-06 02:44:36'),
(62, 'Jersey', 'P1736131495', 'BMS', 12, 'Jersey short', 'factory', '', 0, 5, NULL, '400', 1, '2025-01-06', '2025-01-06 02:44:55'),
(63, 'Polo', 'P1736131561', 'BMS', 13, 'Polo Shirt/ Zipper', 'factory', '', 10, 5, NULL, '500', 1, '2025-01-06', '2025-01-06 02:46:01'),
(64, 'Polo', 'P1736131576', 'BMS', 14, 'Polo Shirt/ Button', 'factory', '', 5, 5, NULL, '550', 1, '2025-01-06', '2025-01-06 02:46:16'),
(65, 'Polo', 'P1736131588', 'BMS', 15, 'Polo Shirt/ Chinese Collar', 'factory', '', 20, 5, NULL, '500', 1, '2025-01-06', '2025-01-06 02:46:28'),
(66, 'Long Sleeve', 'P1736131606', 'BMS', 16, 'Long Sleeve', 'factory', '', 20, 5, NULL, '650', 1, '2025-01-06', '2025-01-06 02:46:46'),
(67, 'Long Sleeve', 'P1736131633', 'BMS', 17, 'Long Sleeve/ Hood', 'factory', '', 20, 5, NULL, '700', 1, '2025-01-06', '2025-01-06 02:47:13'),
(68, 'Jacket', 'P1736131657', 'BMS', 18, 'Jacket', 'factory', '', 20, 5, NULL, '1000', 1, '2025-01-06', '2025-01-06 02:47:37'),
(69, 'Jacket', 'P1736131673', 'BMS', 19, 'Jacket/ Hood', 'factory', '', 20, 5, NULL, '1050', 1, '2025-01-06', '2025-01-06 02:47:53'),
(70, 'Jersey', 'P1736131766', 'BMS', 11, 'Jersey t-shirt', 'factory', '', 20, 5, NULL, '450', 1, '2025-01-06', '2025-01-06 02:49:26'),
(79, 'brief', 'P1737009028', 'bms', 24, 'underwear', 'factory', '', 10, 5, NULL, '50', 1, '2025-01-16', '2025-01-16 06:30:28'),
(80, 'sando', 'P1737020858', 'bms', 25, 'jersey', 'factory', '', 10, 5, NULL, '500', 1, '2025-01-16', '2025-01-16 09:47:38'),
(81, 'Sando', 'P1737342590', 'BMS tank', 9, 'Sando', 'factory', 'dsa', 80, 20, NULL, '150', 1, '2025-01-20', '2025-01-20 03:09:50'),
(82, 'jogging pants', 'P1737362613', 'bms', 26, 'jogging pants', 'factory', '', 3, 5, NULL, '500', 1, '2025-01-20', '2025-01-20 08:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_payment`
--

CREATE TABLE `purchase_payment` (
  `id` int(11) NOT NULL,
  `suppliar_id` int(11) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `payment_amount` float(15,2) NOT NULL DEFAULT 0.00,
  `payment_type` varchar(20) DEFAULT NULL,
  `pay_description` text NOT NULL,
  `added_by` int(4) DEFAULT NULL,
  `last_update` date DEFAULT NULL,
  `added_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `purchase_payment`
--

INSERT INTO `purchase_payment` (`id`, `suppliar_id`, `payment_date`, `payment_amount`, `payment_type`, `pay_description`, `added_by`, `last_update`, `added_time`) VALUES
(1, 1111, '2024-12-09', 190.00, 'cash', 'sample', NULL, NULL, '2024-12-09 08:13:29');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_products`
--

CREATE TABLE `purchase_products` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `purchase_suppliar` int(11) DEFAULT NULL,
  `suppliar_name` varchar(255) DEFAULT NULL,
  `prev_quantity` int(11) DEFAULT NULL,
  `purchase_quantity` int(11) DEFAULT NULL,
  `purchase_price` float(15,2) DEFAULT 0.00,
  `purchase_sell_price` float(15,2) DEFAULT 0.00,
  `purchase_subtotal` float(15,2) DEFAULT 0.00,
  `prev_total_due` float(15,2) DEFAULT 0.00,
  `purchase_net_total` float(15,2) DEFAULT 0.00,
  `purchase_paid_bill` float(15,2) DEFAULT 0.00,
  `purchase_due_bill` float(15,2) DEFAULT 0.00,
  `purchase_pamyent_by` varchar(20) DEFAULT NULL,
  `return_status` varchar(50) NOT NULL DEFAULT 'no',
  `added_by` int(4) DEFAULT NULL,
  `added_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `purchase_products`
--

INSERT INTO `purchase_products` (`id`, `product_id`, `product_name`, `purchase_date`, `purchase_suppliar`, `suppliar_name`, `prev_quantity`, `purchase_quantity`, `purchase_price`, `purchase_sell_price`, `purchase_subtotal`, `prev_total_due`, `purchase_net_total`, `purchase_paid_bill`, `purchase_due_bill`, `purchase_pamyent_by`, `return_status`, `added_by`, `added_time`) VALUES
(1, 1, 'AMD Ryzen 9 5900X Processor', '2023-07-27', 1, 'Rakesh Jadhav', 0, 50, 3653.00, 4500.00, 182650.00, 500.00, 183150.00, 180000.00, 3150.00, 'Gpay', 'no', 1, '2023-07-21 12:34:03'),
(2, 3, 'Adata XPG Gammix D30 8GB 3200MHz DDR4 CL16 RAM Memory Module', '2023-07-19', 1, 'Rakesh Jadhav', 0, 5, 1839.00, 2000.00, 9195.00, 3150.00, 12345.00, 9195.00, 3150.00, 'Debit Card', 'no', 1, '2023-07-21 12:40:07');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_return`
--

CREATE TABLE `purchase_return` (
  `id` int(11) NOT NULL,
  `sell_id` int(11) DEFAULT NULL,
  `suppliar_id` int(11) DEFAULT NULL,
  `suppliar_name` varchar(50) NOT NULL,
  `return_date` date NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `return_quantity` int(11) NOT NULL,
  `subtotal` float(15,2) NOT NULL DEFAULT 0.00,
  `discount` float(15,2) NOT NULL DEFAULT 0.00,
  `netTotal` float(15,2) NOT NULL DEFAULT 0.00,
  `create_by` int(4) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sell_payment`
--

CREATE TABLE `sell_payment` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `payment_date` date NOT NULL,
  `payment_amount` float(15,2) NOT NULL DEFAULT 0.00,
  `payment_type` varchar(20) NOT NULL,
  `pay_description` text NOT NULL,
  `added_by` int(4) NOT NULL,
  `last_update` date DEFAULT NULL,
  `added_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sell_payment`
--

INSERT INTO `sell_payment` (`id`, `customer_id`, `payment_date`, `payment_amount`, `payment_type`, `pay_description`, `added_by`, `last_update`, `added_time`) VALUES
(40, 22, '2025-01-06', 8250.00, 'Cash', '', 1, NULL, '2025-01-06 08:10:15'),
(41, 23, '2025-01-06', 7500.00, 'Cash', '', 1, NULL, '2025-01-06 08:26:47'),
(42, 25, '1970-01-01', 0.00, 'Cash', '', 1, NULL, '2025-01-16 06:31:48'),
(43, 25, '1970-01-01', 400.00, 'Cash', '', 1, NULL, '2025-01-20 03:08:11'),
(44, 26, '2025-01-20', 0.00, 'Cash', '', 1, NULL, '2025-01-20 08:46:08'),
(45, 26, '2025-01-20', 3600.00, 'Cash', '', 1, NULL, '2025-01-20 08:46:30');

-- --------------------------------------------------------

--
-- Table structure for table `sell_return`
--

CREATE TABLE `sell_return` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `amount` float(15,2) NOT NULL DEFAULT 0.00,
  `added_by` int(11) DEFAULT NULL,
  `added_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `con_no` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `added_by` int(4) DEFAULT NULL,
  `added_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `designation`, `con_no`, `email`, `address`, `added_by`, `added_time`) VALUES
(1, 'Sushant Kolhe', 'Manager', '8708708702', 'sushant@gmail.com', 'besides maruti temple, Shahupuri 5th Ln, E Ward, Shahupuri, Kolhapur, Maharashtra 416001', 1, '2023-07-21 12:36:40');

-- --------------------------------------------------------

--
-- Table structure for table `suppliar`
--

CREATE TABLE `suppliar` (
  `id` int(11) NOT NULL,
  `suppliar_id` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `con_num` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `total_buy` float(15,2) NOT NULL DEFAULT 0.00,
  `total_paid` float(15,2) NOT NULL DEFAULT 0.00,
  `total_due` float(15,2) NOT NULL DEFAULT 0.00,
  `reg_date` date DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `update_at` date DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `suppliar`
--

INSERT INTO `suppliar` (`id`, `suppliar_id`, `name`, `company`, `address`, `con_num`, `email`, `total_buy`, `total_paid`, `total_due`, `reg_date`, `update_by`, `update_at`, `create_at`) VALUES
(1, 'S1689942181', 'Rakesh Jadhav', 'Rakesh Jadhav Pvt Ltd.', 'Level 2, Hermes Palazzo, opposite St Anne\'s School, Camp, Pune, Maharashtra 411001', '7070707070', 'rakesh@gmail.com', 191845.00, 189195.00, 3150.00, '2023-07-21', 1, NULL, '2023-07-21 12:23:01'),
(4, 'S1735120317', 'Dale Decain', 'Deeds Company', '', '', '', 0.00, 0.00, 0.00, '1970-01-01', 1, NULL, '2024-12-25 09:51:57'),
(5, 'S1735320633', 'Reesay', 'RCD', '', '0912309', 'rcd@rcd.com', 0.00, 0.00, 0.00, '1970-01-01', 1, NULL, '2024-12-27 17:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `suppliar_balance`
--

CREATE TABLE `suppliar_balance` (
  `id` int(11) NOT NULL,
  `supliar_id` varchar(255) DEFAULT NULL,
  `due_blance` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliar_balance`
--

INSERT INTO `suppliar_balance` (`id`, `supliar_id`, `due_blance`) VALUES
(1, '2', '0.00'),
(2, '3', '0.00'),
(3, '4', '0.00'),
(4, '5', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `user_role` varchar(10) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `last_update_at` int(11) DEFAULT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `user_role`, `update_by`, `last_update_at`, `added_date`) VALUES
(1, 'Bmsadmin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1, 0, '2023-08-24 18:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_balance`
--
ALTER TABLE `customer_balance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_catagory`
--
ALTER TABLE `expense_catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `factory_products`
--
ALTER TABLE `factory_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_no` (`invoice_no`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `member_id` (`member_id`);

--
-- Indexes for table `paymethode`
--
ALTER TABLE `paymethode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_payment`
--
ALTER TABLE `purchase_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_products`
--
ALTER TABLE `purchase_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_return`
--
ALTER TABLE `purchase_return`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell_payment`
--
ALTER TABLE `sell_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell_return`
--
ALTER TABLE `sell_return`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliar`
--
ALTER TABLE `suppliar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliar_balance`
--
ALTER TABLE `suppliar_balance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `customer_balance`
--
ALTER TABLE `customer_balance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `expense_catagory`
--
ALTER TABLE `expense_catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `factory_products`
--
ALTER TABLE `factory_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `invoice_details`
--
ALTER TABLE `invoice_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `paymethode`
--
ALTER TABLE `paymethode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `purchase_payment`
--
ALTER TABLE `purchase_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase_products`
--
ALTER TABLE `purchase_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase_return`
--
ALTER TABLE `purchase_return`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sell_payment`
--
ALTER TABLE `sell_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `sell_return`
--
ALTER TABLE `sell_return`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suppliar`
--
ALTER TABLE `suppliar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `suppliar_balance`
--
ALTER TABLE `suppliar_balance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
