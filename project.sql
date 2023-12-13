-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 05:12 PM
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
use project;

-- --------------------------------------------------------

--
-- Table structure for table `dev_game_store`
--

CREATE TABLE `dev_game_store` (
  `dev_id` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Details` text NOT NULL,
  `Image` text NOT NULL,
  `Link` text NOT NULL,
  `Developer` text NOT NULL,
  `Dev_contact` text NOT NULL,
  `Dev_donation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Feedback_ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Contact` text NOT NULL,
  `Feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `Id` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Image` text NOT NULL,
  `Details` text NOT NULL,
  `Link` text NOT NULL,
  `Developer/s` text NOT NULL,
  `Dev_contact` text NOT NULL,
  `Dev_donation` text NOT NULL,
  `Featured` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`Id`, `Title`, `Image`, `Details`, `Link`, `Developer/s`, `Dev_contact`, `Dev_donation`, `Featured`) VALUES
(1, 'Easy Game - Brain Test', './images/game1.jpg', 'Challenge your brain with Easy Game and have tons of fun! Think outside the box to make your grey cells work. Train your mind with the tricky riddles - prove that you’re the smartest!\r\n\r\nGain a new experience with Easy game, that offers funny puzzles and unexpected solutions. Test your brain, creative thinking, logic, memory and imagination. Apply common sense and focus on the details. Don’t solve the brain teasers in the ordinary way, some riddles really trick your brain!', 'https://play.google.com/store/apps/details?id=com.easybrain.brain.test.easy.game&pcampaignid=web_share', 'Sadia Afrin', 'sadia_dev@gmail.com', '01234567891', 1),
(2, 'Interactive Buddy', './images/game2.jpg', 'Interactive Buddy is a free game that allows you to interact with a real fake friend. Poke, prod, explode and customize your interactive buddy. This isn\'t so much a game as it is an activity. You will grind for cash and then use that cash to customize your buddy before finally torturing them with everything from hand grenades to laser beams. Every imaginable form of fun is available in interactive buddy, you just have to pay for it. At first, you\'ll have to poke and prod your buddy to make money, pick him up and throw him around the screen. It\'s fun, you\'ll become addicted. In. the bottom left-hand corner of the screen there is a counter which tells you how much money you have made. Keep your eye on it and when you get to over 60$ you\'ll be able to upgrade and customize the look of your buddy. There are also other menus that you can interact with. These menus let you buy weapons and other gadgets you can use to mess around with your buddy.\r\n\r\nUse your mouse to select options from all of the in-game menus. The mouse is also responsible for touching the buddy. Interact with him and customize him by poking and prodding him.', 'https://www.crazygames.com/game/interactive-buddy', 'Zubair Ahmed', 'zubair_dev@gmail.com', '01102345678', 1),
(3, 'GTA San Andreas', './images/game3.jpg', 'Grand Theft Auto: San Andreas is an action-adventure game with role-playing and stealth elements. Structured similarly to the previous two games in the series, the core gameplay consists of elements of third-person shooter and driving games, affording the player a large, open world environment in which to move around.', '', 'Zubair Ahmed & Sadia Afrin', 'zub_dev@gmail.com', '01234567891', 1),
(4, 'GTA Five', './images/game4.jpg', 'Grand Theft Auto V is an action-adventure game played from either a third-person or first-person perspective. Players complete missions—linear scenarios with set objectives—to progress through the story. Outside of the missions, players may freely roam the open world.', '', 'Zubair Ahmed', 'zub_dev@gmail.com', '01102345678', 1),
(5, 'Crazy Roll 3D', './images/game5.jpg', 'Crazy Roll 3D is an addictive endless running game inspired by Slope. Control a ball that’s thrust down a series of slanted and sloped platforms. Avoid all the obstacles, collect diamonds, and roll as far you can! Some features are - collectible crystals that can be used to buy power-ups and unlock new ball models, new challenges: waving platforms and moving obstacles, fun and fast-paced gameplay with funky music, endless: go as far as you can!', 'https://www.crazygames.com/game/crazy-roll-3d', 'Sadia Afrin', 'sadia_dev@gmail.com', '01234567891', 1);

-- --------------------------------------------------------

--
-- Table structure for table `del_man`
--

CREATE TABLE `del_man` (
  `del_man_id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `number` varchar(55) NOT NULL,
  PRIMARY KEY (`del_man_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `del_man`
--

INSERT INTO `del_man` (`del_man_id`, `name`, `number`) VALUES
(1, 'Xenon', '01329394959'),
(2, 'Rona', '01012345678'),
(3, 'Riponda', '01969696969');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `track_id` varchar(55) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` varchar(55) NOT NULL,
  `order_total` int(11) NOT NULL,
  `number` int(55) NOT NULL,
  `del_man_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 'Logitech G331 3.5mm Multi Platform Gaming Headphone Black', 6700, 'MPN: 981-000759, \r\nModel: Logitech G331, \r\nFrequency response: 20 Hz-20 KHz, \r\nAudio Sensitivity: 107DB SPL/MW, \r\n6 mm Flitp-To-Mute MIc, \r\n50 mm Drivers', './images/headphone2.jpg', 0),
(2, 'Edifier G4 Gaming Headphone', 5400, 'Model: Edifier G4, \r\nFrequency: 20Hzï½ž20kHz, \r\nImpedance: 24Î©, \r\nConnectivity: USB', './images/headphone1.jpg', 0),
(3, 'Edifier Hecate G5BT Cat Pink Wireless Gaming Headphone', 10000, 'Model: Hecate G5BT Cat, \r\nHecate H+ sound effect specially tuned, \r\n40ms extreme low Bluetooth latency, \r\nAvant-garde look with RGB lighting, \r\nIP54-rated dust and water resistance', './images/headphone.png', 0),
(4, 'PS4 DualShock 4 Wireless Controller Rose Gold (Original)', 7300, 'MPN: CUH-ZCT2E, \r\nModel: PS4 Dualshock 4, \r\nSHARE button, Touchpad, \r\nLightbar, Built-in speaker, \r\nRefined analog sticks and triggers, \r\nMotion sensors, Stereo headset jack', './images/controller2.jpg', 0),
(5, 'Fantech GP12 Revolver Gaming Controller', 1800, 'Model: GP12 Revolver, \r\nUSB Wired Controller, \r\nButtons: 17pcs, \r\nVibration: Yes, \r\nCable Lenght: 1.8M', './images/controller1.jpg', 0),
(6, 'GIGABYTE AORUS AGC310 Gaming Chair\r\n', 27000, 'Model: AORUS AGC310, \r\nAll-Steel Frame & Base, \r\n2D Adjustable Armrest, \r\n160Âº Max Tilting Angle, \r\nCLASS 4 Certified Gas Lift', './images/chair2.jpg', 0),
(7, 'FURGLE Carry Series Racing-Style Gaming Chair White & Red', 22000, 'Model: Carry Series, \r\nQuality Materials & Ergonomics, \r\nMulti-function & large size, \r\nEndurance & Safety, \r\nWeight Capacity: 150kg', './images/chair1.png', 0),
(8, 'Havit HV-KB869L RGB Mechanical Gaming Keyboard', 2400, 'Model: HV-KB869L, \r\n87 keys Mechanical Gaming Keyboard Interface, \r\nSwitch: Content Blue switch, \r\nSupport all keys anti-ghosting, \r\nAdjustable Backlit style', './images/keyboard2.png', 0),
(9, 'Logitech G213 Prodigy Gaming Keyboard', 4500, 'Model: Logitech G213, \r\nType: Membrane, \r\nBacklight: RGB, \r\nPalm Rest: Integrated', './images/keyboard1.png', 0),
(10, 'Lenovo Legion M200 RGB Wired Black Gaming Mouse', 1800, 'Model: Lenovo Legion M200, \r\nInterface Type: USB, \r\nMax DPI: 2400DPI, \r\nLighting: RGB, \r\nConnection Type - Wired', './images/mouse1.png', 0),
(11, 'Astrum MG210 Wired Gaming Mouse', 1000, 'Model: MG210, \r\nResolutions: 1200 - 1800 - 2400 - 3600dpi, \r\nInterface: USB, \r\nButtons: 6 buttons, \r\nCable length: 1.8M', './images/mouse2.jpg', 0),
(12, 'GIGABYTE AMP900 Extended Gaming Mouse Pad', 1000, 'Model: AMP900, \r\nSpill Resistant, \r\nHigh-Density Rubber Base, \r\nMicro Pattern Ensures Precise Tracking, \r\nDimension: (L)900x(W)360x(H)3 mm', './images/Mousepad1.jpg', 0),
(13, 'Fantech Sven MP44 Gaming Mousepad', 450, 'Model: Fantech Sven MP44, \r\nQuick and responsiveness to your mouse, \r\nAnti- slip Rubber Base, \r\nBuilt for maximum precision, \r\nSize: 44cm x 35cm x 4mm', './images/mousepad2.jpg', 0);

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
-- Indexes for table `dev_game_store`
--
ALTER TABLE `dev_game_store`
  ADD PRIMARY KEY (`dev_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Feedback_ID`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dev_game_store`
--
ALTER TABLE `dev_game_store`
  MODIFY `dev_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Feedback_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- NEW TABLE