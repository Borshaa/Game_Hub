-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2023 at 06:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `Title` varchar(300) NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  `Description` text NOT NULL,
  `Image` varchar(300) NOT NULL,
  `Featured` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `Title`, `Price`, `Description`, `Image`, `Featured`) VALUES
(1, 'Logitech G331 3.5mm Multi Platform Gaming Headphone Black', 6700, 'MPN: 981-000759, \r\nModel: Logitech G331, \r\nFrequency response: 20 Hz-20 KHz, \r\nAudio Sensitivity: 107DB SPL/MW, \r\n6 mm Flitp-To-Mute MIc, \r\n50 mm Drivers', '/project/images/headphone2.jpg', 0),
(2, 'Edifier G4 Gaming Headphone', 5400, 'Model: Edifier G4, \r\nFrequency: 20Hzï½ž20kHz, \r\nImpedance: 24Î©, \r\nConnectivity: USB', '/project/images/headphone1.jpg', 0),
(3, 'Edifier Hecate G5BT Cat Pink Wireless Gaming Headphone', 10000, 'Model: Hecate G5BT Cat, \r\nHecate H+ sound effect specially tuned, \r\n40ms extreme low Bluetooth latency, \r\nAvant-garde look with RGB lighting, \r\nIP54-rated dust and water resistance', '/project/images/headphone.png', 0),
(4, 'PS4 DualShock 4 Wireless Controller Rose Gold (Original)', 7300, 'MPN: CUH-ZCT2E, \r\nModel: PS4 Dualshock 4, \r\nSHARE button, Touchpad, \r\nLightbar, Built-in speaker, \r\nRefined analog sticks and triggers, \r\nMotion sensors, Stereo headset jack', '/project/images/controller2.jpg', 0),
(5, 'Fantech GP12 Revolver Gaming Controller', 1800, 'Model: GP12 Revolver, \r\nUSB Wired Controller, \r\nButtons: 17pcs, \r\nVibration: Yes, \r\nCable Lenght: 1.8M', '/project/images/controller1.jpg', 0),
(6, 'GIGABYTE AORUS AGC310 Gaming Chair\r\n', 27000, 'Model: AORUS AGC310, \r\nAll-Steel Frame & Base, \r\n2D Adjustable Armrest, \r\n160Âº Max Tilting Angle, \r\nCLASS 4 Certified Gas Lift', '/project/images/chair2.jpg', 0),
(7, 'FURGLE Carry Series Racing-Style Gaming Chair White & Red', 22000, 'Model: Carry Series, \r\nQuality Materials & Ergonomics, \r\nMulti-function & large size, \r\nEndurance & Safety, \r\nWeight Capacity: 150kg', '/project/images/chair1.png', 0),
(8, 'Havit HV-KB869L RGB Mechanical Gaming Keyboard', 2400, 'Model: HV-KB869L, \r\n87 keys Mechanical Gaming Keyboard Interface, \r\nSwitch: Content Blue switch, \r\nSupport all keys anti-ghosting, \r\nAdjustable Backlit style', '/project/images/keyboard2.png', 0),
(9, 'Logitech G213 Prodigy Gaming Keyboard', 4500, 'Model: Logitech G213, \r\nType: Membrane, \r\nBacklight: RGB, \r\nPalm Rest: Integrated', '/project/images/keyboard1.png', 0),
(10, 'Lenovo Legion M200 RGB Wired Black Gaming Mouse', 1800, 'Model: Lenovo Legion M200, \r\nInterface Type: USB, \r\nMax DPI: 2400DPI, \r\nLighting: RGB, \r\nConnection Type - Wired', '/project/images/mouse1.png', 0),
(11, 'Astrum MG210 Wired Gaming Mouse', 1000, 'Model: MG210, \r\nResolutions: 1200 - 1800 - 2400 - 3600dpi, \r\nInterface: USB, \r\nButtons: 6 buttons, \r\nCable length: 1.8M', '/project/images/mouse2.jpg', 0),
(12, 'GIGABYTE AMP900 Extended Gaming Mouse Pad', 1000, 'Model: AMP900, \r\nSpill Resistant, \r\nHigh-Density Rubber Base, \r\nMicro Pattern Ensures Precise Tracking, \r\nDimension: (L)900x(W)360x(H)3 mm', '/project/images/Mousepad1.jpg', 0),
(13, 'Fantech Sven MP44 Gaming Mousepad', 450, 'Model: Fantech Sven MP44, \r\nQuick and responsiveness to your mouse, \r\nAnti- slip Rubber Base, \r\nBuilt for maximum precision, \r\nSize: 44cm x 35cm x 4mm', '/project/images/mousepad2.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Dia', 'dia@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
