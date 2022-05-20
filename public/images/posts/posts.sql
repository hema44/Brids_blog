-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 12:44 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brides`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `body`, `published_at`, `image`, `category_id`, `user_id`, `tages`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Dehydration Treatment', 'Dehydration Treatment', 'Dehydration \r\nsimple description : Indicators include listlessness, sunken appearance in the crop region, whitish crystals around the vent, and the crop found to be empty or containing dry feed.\r\nTreatment : Closely monitor water consumption in poults until they are drinking well. Monitor birds if something new has been added to the water source. Provide suffiient water for the flck at all times', '2021-06-18 22:29:00', 'chicken1.jpg', 1, 1, 'listlessness,whitish crystals around the vent', '2021-06-18 20:30:31', '2021-06-18 20:30:31', NULL),
(2, 'Dehydration Treatment', 'Dehydration Treatment', 'Dehydration \r\nsimple description : Indicators include listlessness, sunken appearance in the crop region, whitish crystals around the vent, and the crop found to be empty or containing dry feed.\r\nTreatment : Closely monitor water consumption in poults until they are drinking well. Monitor birds if something new has been added to the water source. Provide suffiient water for the flck at all times', '2021-06-18 22:29:00', 'duck1.jpg', 2, 1, 'listlessness,whitish crystals around the vent', '2021-06-18 20:30:31', '2021-06-18 20:30:31', NULL),
(3, 'Dehydration Treatment', 'Dehydration Treatment', 'Dehydration \r\nsimple description : Indicators include listlessness, sunken appearance in the crop region, whitish crystals around the vent, and the crop found to be empty or containing dry feed.\r\nTreatment : Closely monitor water consumption in poults until they are drinking well. Monitor birds if something new has been added to the water source. Provide suffiient water for the flck at all times', '2021-06-18 22:29:00', 'dove.jpg', 3, 1, 'listlessness,whitish crystals around the vent', '2021-06-18 20:30:31', '2021-06-18 20:30:31', NULL),
(4, 'Milkweed Poisoning Treatment', 'Milkweed Poisoning Treatment', 'Milkweed Poisoning \r\nsimple description : This condition includes a number of problems including the softening of leg bones, enlarged hocks, slipped tendons, twisted shanks, bowlegs, misshapen hock, spraddle-leg, and lameness .\r\nTreatment : Start poults off with nutritionally balanced diet and continue it throughout the birds’ lives. Allow the birds access to natural sunlight as soon as possible. Avoid housing birds on slippery floring. Birds that are permanently crippled should be culled', '2021-06-18 22:36:00', 'chicken.jpg', 1, 1, 'drowsiness,convulsions,exhaustion,coma,death', '2021-06-18 20:36:38', '2021-06-18 20:36:38', NULL),
(5, 'Milkweed Poisoning Treatment', 'Milkweed Poisoning Treatment', 'Milkweed Poisoning \r\nsimple description : This condition includes a number of problems including the softening of leg bones, enlarged hocks, slipped tendons, twisted shanks, bowlegs, misshapen hock, spraddle-leg, and lameness .\r\nTreatment : Start poults off with nutritionally balanced diet and continue it throughout the birds’ lives. Allow the birds access to natural sunlight as soon as possible. Avoid housing birds on slippery floring. Birds that are permanently crippled should be culled', '2021-06-18 22:36:00', 'duck.jpg', 1, 1, 'drowsiness,convulsions,exhaustion,coma,death', '2021-06-18 20:36:38', '2021-06-18 20:37:48', NULL),
(6, 'Milkweed Poisoning Treatment', 'Milkweed Poisoning Treatment', 'Milkweed Poisoning \r\nsimple description : This condition includes a number of problems including the softening of leg bones, enlarged hocks, slipped tendons, twisted shanks, bowlegs, misshapen hock, spraddle-leg, and lameness .\r\nTreatment : Start poults off with nutritionally balanced diet and continue it throughout the birds’ lives. Allow the birds access to natural sunlight as soon as possible. Avoid housing birds on slippery floring. Birds that are permanently crippled should be culled', '2021-06-18 22:36:00', 'dove.jpg', 3, 1, 'drowsiness,convulsions,exhaustion,coma,death', '2021-06-18 20:36:38', '2021-06-18 20:37:48', NULL),
(7, 'Avian Influenza Treatment', 'Avian Influenza Treatment', 'Avian Influenza \r\nsimple description : AI is caused by a virus. There are 256 different types of AI virus. It is\r\nfound worldwide. Almost all birds are susceptible, especially turkeys. One type, HPH5N1, can be especially severe and under certain circumstances can infect humans.\r\nMild forms produce listlessness, respiratory involvement, diarrhea and low mortality in birds. Some infected birds show no symptoms. Acute forms produce facial swelling,\r\ncyanosis, dehydration and respiratory distress, lesions and small hemorrhages throughout the body, and high mortality rates.\r\nTreatment : Keep wild birds, especially migratory waterfowl, away from the flck. Implement basic biosecurity measures on the farm to reduce chances of transmission from other sources (such as other poultry farms or feed stores). A vaccine from USDA may be\r\navailable for use (prior to flck exposure to AI) during times of pandemic. Notify state disease regulatory offiials if AI is suspected. Flocks confimed with AI should be depopulated', '2021-06-18 22:42:00', 'chicken1.jpg', 1, 1, 'cyanosis,dehydration,respiratory,distress,hemorrhages', '2021-06-18 20:43:13', '2021-06-18 20:43:13', NULL),
(8, 'Avian Influenza Treatment', 'Avian Influenza Treatment', 'Avian Influenza \r\nsimple description : AI is caused by a virus. There are 256 different types of AI virus. It is\r\nfound worldwide. Almost all birds are susceptible, especially turkeys. One type, HPH5N1, can be especially severe and under certain circumstances can infect humans.\r\nMild forms produce listlessness, respiratory involvement, diarrhea and low mortality in birds. Some infected birds show no symptoms. Acute forms produce facial swelling,\r\ncyanosis, dehydration and respiratory distress, lesions and small hemorrhages throughout the body, and high mortality rates.\r\nTreatment : Keep wild birds, especially migratory waterfowl, away from the flck. Implement basic biosecurity measures on the farm to reduce chances of transmission from other sources (such as other poultry farms or feed stores). A vaccine from USDA may be\r\navailable for use (prior to flck exposure to AI) during times of pandemic. Notify state disease regulatory offiials if AI is suspected. Flocks confimed with AI should be depopulated', '2021-06-18 22:42:00', 'duck1.jpg', 2, 1, 'cyanosis,dehydration,respiratory,distress,hemorrhages', '2021-06-18 20:43:13', '2021-06-18 20:43:13', NULL),
(9, 'Avian Influenza Treatment', 'Avian Influenza Treatment', 'Avian Influenza \r\nsimple description : AI is caused by a virus. There are 256 different types of AI virus. It is\r\nfound worldwide. Almost all birds are susceptible, especially turkeys. One type, HPH5N1, can be especially severe and under certain circumstances can infect humans.\r\nMild forms produce listlessness, respiratory involvement, diarrhea and low mortality in birds. Some infected birds show no symptoms. Acute forms produce facial swelling,\r\ncyanosis, dehydration and respiratory distress, lesions and small hemorrhages throughout the body, and high mortality rates.\r\nTreatment : Keep wild birds, especially migratory waterfowl, away from the flck. Implement basic biosecurity measures on the farm to reduce chances of transmission from other sources (such as other poultry farms or feed stores). A vaccine from USDA may be\r\navailable for use (prior to flck exposure to AI) during times of pandemic. Notify state disease regulatory offiials if AI is suspected. Flocks confimed with AI should be depopulated', '2021-06-18 22:42:00', 'dove.jpg', 3, 1, 'cyanosis,dehydration,respiratory,distress,hemorrhages', '2021-06-18 20:43:13', '2021-06-18 20:43:13', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
