-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 06 2016 г., 18:56
-- Версия сервера: 10.1.16-MariaDB
-- Версия PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `database_test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `configs`
--

CREATE TABLE `configs` (
  `id` int(11) UNSIGNED NOT NULL,
  `option_group` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `configs`
--

INSERT INTO `configs` (`id`, `option_group`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, 'name', 'test_company', '2016-09-29 19:58:03', '2016-09-29 19:58:03'),
(2, 1, 'address', 'No.25 test_avenue, <br>Test City, Super Country', '2016-09-29 19:59:09', '0000-00-00 00:00:00'),
(3, 1, 'email', 'test@gmail.com', '2016-09-29 19:59:41', '0000-00-00 00:00:00'),
(4, 1, 'fax', '000-00-00', '2016-09-29 20:00:08', '0000-00-00 00:00:00'),
(5, 1, 'phone', '+380960000000, +380960000001, +380960000002, +380960000003', '2016-09-29 20:01:17', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `leads`
--

CREATE TABLE `leads` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` enum('pending','canceled','success') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `option_group`
--

CREATE TABLE `option_group` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `option_group`
--

INSERT INTO `option_group` (`id`, `name`, `count`) VALUES
(1, 'Main', 0),
(2, 'Optional', 0),
(3, 'administrators', 0),
(4, 'test', 0),
(5, 'users_test', 0),
(6, 'users_test', 0),
(7, 'users_test', 0),
(8, 'users_test', 0),
(9, 'users_test', 0),
(10, 'users_test', 0),
(11, 'users_test', 0),
(12, 'users_test', 0),
(13, 'users_test', 0),
(14, 'users_test', 0),
(15, 'users_test', 0),
(16, 'users_test', 0),
(17, 'users_test', 0),
(18, 'users_test', 0),
(19, 'users_test', 0),
(20, 'users_test', 0),
(21, 'users_test', 0),
(22, 'users_test', 0),
(23, 'users_test', 0),
(24, 'users_test', 0),
(25, 'users_test', 0),
(26, 'users_test', 0),
(27, 'users_test', 0),
(28, 'users_test', 0),
(29, 'users_test', 0),
(30, 'users_test', 0),
(31, 'users_test', 0),
(32, 'users_test', 0),
(33, 'users_test', 0),
(34, 'users_test', 0),
(35, 'users_test', 0),
(36, 'users_test', 0),
(37, 'users_test', 0),
(38, 'users_test', 0),
(39, 'users_test', 0),
(40, 'users_test', 0),
(41, 'users_test', 0),
(42, 'users_test', 0),
(43, 'users_test', 0),
(44, 'users_test', 0),
(45, 'users_test', 0),
(46, 'users_test', 0),
(47, 'users_test', 0),
(48, 'users_test', 0),
(49, 'users_test', 0),
(50, 'users_test', 0),
(51, 'users_test', 0),
(52, 'users_test', 0),
(53, 'users_test', 0),
(54, 'users_test', 0),
(55, 'users_test', 0),
(56, 'users_test', 0),
(57, 'users_test', 0),
(58, 'users_test', 0),
(59, 'users_test', 0),
(60, 'users_test', 0),
(61, 'users_test', 0),
(62, 'users_test', 0),
(63, 'users_test', 0),
(64, 'users_test', 0),
(65, 'users_test', 0),
(66, 'users_test', 0),
(67, 'users_test', 0),
(68, 'users_test', 0),
(69, 'users_test', 0),
(70, 'users_test', 0),
(71, 'users_test', 0),
(72, 'users_test', 0),
(73, 'users_test', 0),
(74, 'users_test', 0),
(75, 'users_test', 0),
(76, 'users_test', 0),
(77, 'users_test', 0),
(78, 'users_test', 0),
(79, 'users_test', 0),
(80, 'users_test', 0),
(81, 'users_test', 0),
(82, 'users_test', 0),
(83, 'users_test', 0),
(84, 'users_test', 0),
(85, 'users_test', 0),
(86, 'users_test', 0),
(87, 'users_test', 0),
(88, 'users_test', 0),
(89, 'users_test', 0),
(90, 'users_test', 0),
(91, 'users_test', 0),
(92, 'users_test', 0),
(93, 'users_test', 0),
(94, 'users_test', 0),
(95, 'users_test', 0),
(96, 'users_test', 0),
(97, 'users_test', 0),
(98, 'users_test', 0),
(99, 'users_test', 0),
(100, 'users_test', 0),
(101, 'users_test', 0),
(102, 'users_test', 0),
(103, 'users_test', 0),
(104, 'users_test', 0),
(105, 'users_test', 0),
(106, 'users_test', 0),
(107, 'users_test', 0),
(108, 'users_test', 0),
(109, 'users_test', 0),
(110, 'users_test', 0),
(111, 'users_test', 0),
(112, 'users_test', 0),
(113, 'users_test', 0),
(114, 'users_test', 0),
(115, 'users_test', 0),
(116, 'users_test', 0),
(117, 'users_test', 0),
(118, 'users_test', 0),
(119, 'users_test', 0),
(120, 'users_test', 0),
(121, 'users_test', 0),
(122, 'users_test', 0),
(123, 'users_test', 0),
(124, 'users_test', 0),
(125, 'users_test', 0),
(126, 'users_test', 0),
(127, 'users_test', 0),
(128, 'users_test', 0),
(129, 'users_test', 0),
(130, 'users_test', 0),
(131, 'users_test', 0),
(132, 'users_test', 0),
(133, 'users_test', 0),
(134, 'users_test', 0),
(135, 'users_test', 0),
(136, 'users_test', 0),
(137, 'users_test', 0),
(138, 'users_test', 0),
(139, 'users_test', 0),
(140, 'users_test', 0),
(141, 'users_test', 0),
(142, 'users_test', 0),
(143, 'users_test', 0),
(144, 'users_test', 0),
(145, 'users_test', 0),
(146, 'users_test', 0),
(147, 'users_test', 0),
(148, 'users_test', 0),
(149, 'users_test', 0),
(150, 'users_test', 0),
(151, 'users_test', 0),
(152, 'users_test', 0),
(153, 'users_test', 0),
(154, 'users_test', 0),
(155, 'users_test', 0),
(156, 'users_test', 0),
(157, 'users_test', 0),
(158, 'users_test', 0),
(159, 'users_test', 0),
(160, 'users_test', 0),
(161, 'users_test', 0),
(162, 'users_test', 0),
(163, 'users_test', 0),
(164, 'users_test', 0),
(165, 'users_test', 0),
(166, 'users_test', 0),
(167, 'users_test', 0),
(168, 'users_test', 0),
(169, 'users_test', 0),
(170, 'users_test', 0),
(171, 'users_test', 0),
(172, 'users_test', 0),
(173, 'users_test', 0),
(174, 'users_test', 0),
(175, 'users_test', 0),
(176, 'users_test', 0),
(177, 'users_test', 0),
(178, 'users_test', 0),
(179, 'users_test', 0),
(180, 'users_test', 0),
(181, 'users_test', 0),
(182, 'users_test', 0),
(183, 'users_test', 0),
(184, 'users_test', 0),
(185, 'users_test', 0),
(186, 'users_test', 0),
(187, 'users_test', 0),
(188, 'users_test', 0),
(189, 'users_test', 0),
(190, 'users_test', 0),
(191, 'users_test', 0),
(192, 'users_test', 0),
(193, 'users_test', 0),
(194, 'users_test', 0),
(195, 'users_test', 0),
(196, 'users_test', 0),
(197, 'users_test', 0),
(198, 'users_test', 0),
(199, 'users_test', 0),
(200, 'users_test', 0),
(201, 'users_test', 0),
(202, 'users_test', 0),
(203, 'users_test', 0),
(204, 'users_test', 0),
(205, 'users_test', 0),
(206, 'users_test', 0),
(207, 'users_test', 0),
(208, 'users_test', 0),
(209, 'users_test', 0),
(210, 'users_test', 0),
(211, 'users_test', 0),
(212, 'users_test', 0),
(213, 'users_test', 0),
(214, 'users_test', 0),
(215, 'users_test', 0),
(216, 'users_test', 0),
(217, 'users_test', 0),
(218, 'users_test', 0),
(219, 'users_test', 0),
(220, 'users_test', 0),
(221, 'users_test', 0),
(222, 'users_test', 0),
(223, 'users_test', 0),
(224, 'users_test', 0),
(225, 'users_test', 0),
(226, 'users_test', 0),
(227, 'users_test', 0),
(228, 'users_test', 0),
(229, 'users_test', 0),
(230, 'users_test', 0),
(231, 'users_test', 0),
(232, 'users_test', 0),
(233, 'users_test', 0),
(234, 'users_test', 0),
(235, 'users_test', 0),
(236, 'users_test', 0),
(237, 'users_test', 0),
(238, 'users_test', 0),
(239, 'users_test', 0),
(240, 'users_test', 0),
(241, 'users_test', 0),
(242, 'users_test', 0),
(243, 'users_test', 0),
(244, 'users_test', 0),
(245, 'users_test', 0),
(246, 'users_test', 0),
(247, 'users_test', 0),
(248, 'users_test', 0),
(249, 'users_test', 0),
(250, 'users_test', 0),
(251, 'users_test', 0),
(252, 'users_test', 0),
(253, 'users_test', 0),
(254, 'users_test', 0),
(255, 'users_test', 0),
(256, 'users_test', 0),
(257, 'users_test', 0),
(258, 'users_test', 0),
(259, 'users_test', 0),
(260, 'users_test', 0),
(261, 'users_test', 0),
(262, 'users_test', 0),
(263, 'users_test', 0),
(264, 'users_test', 0),
(265, 'users_test', 0),
(266, 'users_test', 0),
(267, 'users_test', 0),
(268, 'users_test', 0),
(269, 'users_test', 0),
(270, 'users_test', 0),
(271, 'users_test', 0),
(272, 'users_test', 0),
(273, 'users_test', 0),
(274, 'users_test', 0),
(275, 'users_test', 0),
(276, 'users_test', 0),
(277, 'users_test', 0),
(278, 'users_test', 0),
(279, 'users_test', 0),
(280, 'users_test', 0),
(281, 'users_test', 0),
(282, 'users_test', 0),
(283, 'users_test', 0),
(284, 'users_test', 0),
(285, 'users_test', 0),
(286, 'users_test', 0),
(287, 'users_test', 0),
(288, 'users_test', 0),
(289, 'users_test', 0),
(290, 'users_test', 0),
(291, 'users_test', 0),
(292, 'users_test', 0),
(293, 'users_test', 0),
(294, 'users_test', 0),
(295, 'users_test', 0),
(296, 'users_test', 0),
(297, 'users_test', 0),
(298, 'users_test', 0),
(299, 'users_test', 0),
(300, 'users_test', 0),
(301, 'users_test', 0),
(302, 'users_test', 0),
(303, 'users_test', 0),
(304, 'users_test', 0),
(305, 'users_test', 0),
(306, 'users_test', 0),
(307, 'users_test', 0),
(308, 'users_test', 0),
(309, 'users_test', 0),
(310, 'users_test', 0),
(311, 'users_test', 0),
(312, 'users_test', 0),
(313, 'users_test', 0),
(314, 'users_test', 0),
(315, 'users_test', 0),
(316, 'users_test', 0),
(317, 'users_test', 0),
(318, 'users_test', 0),
(319, 'users_test', 0),
(320, 'users_test', 0),
(321, 'users_test', 0),
(322, 'users_test', 0),
(323, 'users_test', 0),
(324, 'users_test', 0),
(325, 'users_test', 0),
(326, 'users_test', 0),
(327, 'users_test', 0),
(328, 'users_test', 0),
(329, 'users_test', 0),
(330, 'users_test', 0),
(331, 'users_test', 0),
(332, 'users_test', 0),
(333, 'users_test', 0),
(334, 'users_test', 0),
(335, 'users_test', 0),
(336, 'users_test', 0),
(337, 'users_test', 0),
(338, 'users_test', 0),
(339, 'users_test', 0),
(340, 'users_test', 0),
(341, 'users_test', 0),
(342, 'users_test', 0),
(343, 'users_test', 0),
(344, 'users_test', 0),
(345, 'users_test', 0),
(346, 'users_test', 0),
(347, 'users_test', 0),
(348, 'users_test', 0),
(349, 'users_test', 0),
(350, 'users_test', 0),
(351, 'users_test', 0),
(352, 'users_test', 0),
(353, 'users_test', 0),
(354, 'users_test', 0),
(355, 'users_test', 0),
(356, 'users_test', 0),
(357, 'users_test', 0),
(358, 'users_test', 0),
(359, 'users_test', 0),
(360, 'users_test', 0),
(361, 'users_test', 0),
(362, 'users_test', 0),
(363, 'users_test', 0),
(364, 'users_test', 0),
(365, 'users_test', 0),
(366, 'users_test', 0),
(367, 'users_test', 0),
(368, 'users_test', 0),
(369, 'users_test', 0),
(370, 'users_test', 0),
(371, 'users_test', 0),
(372, 'users_test', 0),
(373, 'users_test', 0),
(374, 'users_test', 0),
(375, 'users_test', 0),
(376, 'users_test', 0),
(377, 'users_test', 0),
(378, 'users_test', 0),
(379, 'users_test', 0),
(380, 'users_test', 0),
(381, 'users_test', 0),
(382, 'users_test', 0),
(383, 'users_test', 0),
(384, 'users_test', 0),
(385, 'users_test', 0),
(386, 'users_test', 0),
(387, 'users_test', 0),
(388, 'users_test', 0),
(389, 'users_test', 0),
(390, 'users_test', 0),
(391, 'users_test', 0),
(392, 'users_test', 0),
(393, 'users_test', 0),
(394, 'users_test', 0),
(395, 'users_test', 0),
(396, 'users_test', 0),
(397, 'users_test', 0),
(398, 'users_test', 0),
(399, 'users_test', 0),
(400, 'users_test', 0),
(401, 'users_test', 0),
(402, 'users_test', 0),
(403, 'users_test', 0),
(404, 'users_test', 0),
(405, 'users_test', 0),
(406, 'users_test', 0),
(407, 'users_test', 0),
(408, 'users_test', 0),
(409, 'users_test', 0),
(410, 'users_test', 0),
(411, 'users_test', 0),
(412, 'users_test', 0),
(413, 'users_test', 0),
(414, 'users_test', 0),
(415, 'users_test', 0),
(416, 'users_test', 0),
(417, 'users_test', 0),
(418, 'users_test', 0),
(419, 'users_test', 0),
(420, 'users_test', 0),
(421, 'users_test', 0),
(422, 'users_test', 0),
(423, 'users_test', 0),
(424, 'users_test', 0),
(425, 'users_test', 0),
(426, 'users_test', 0),
(427, 'users_test', 0),
(428, 'users_test', 0),
(429, 'users_test', 0),
(430, 'users_test', 0),
(431, 'users_test', 0),
(432, 'users_test', 0),
(433, 'users_test', 0),
(434, 'users_test', 0),
(435, 'users_test', 0),
(436, 'users_test', 0),
(437, 'users_test', 0),
(438, 'users_test', 0),
(439, 'users_test', 0),
(440, 'users_test', 0),
(441, 'users_test', 0),
(442, 'users_test', 0),
(443, 'users_test', 0),
(444, 'users_test', 0),
(445, 'users_test', 0),
(446, 'users_test', 0),
(447, 'users_test', 0),
(448, 'users_test', 0),
(449, 'users_test', 0),
(450, 'users_test', 0),
(451, 'users_test', 0),
(452, 'users_test', 0),
(453, 'users_test', 0),
(454, 'users_test', 0),
(455, 'users_test', 0),
(456, 'users_test', 0),
(457, 'users_test', 0),
(458, 'users_test', 0),
(459, 'users_test', 0),
(460, 'users_test', 0),
(461, 'users_test', 0),
(462, 'users_test', 0),
(463, 'users_test', 0),
(464, 'users_test', 0),
(465, 'users_test', 0),
(466, 'users_test', 0),
(467, 'users_test', 0),
(468, 'users_test', 0),
(469, 'users_test', 0),
(470, 'users_test', 0),
(471, 'users_test', 0),
(472, 'users_test', 0),
(473, 'users_test', 0),
(474, 'users_test', 0),
(475, 'users_test', 0),
(476, 'users_test', 0),
(477, 'users_test', 0),
(478, 'users_test', 0),
(479, 'users_test', 0),
(480, 'users_test', 0),
(481, 'users_test', 0),
(482, 'users_test', 0),
(483, 'users_test', 0),
(484, 'users_test', 0),
(485, 'users_test', 0),
(486, 'users_test', 0),
(487, 'users_test', 0),
(488, 'users_test', 0),
(489, 'users_test', 0),
(490, 'users_test', 0),
(491, 'users_test', 0),
(492, 'users_test', 0),
(493, 'users_test', 0),
(494, 'users_test', 0),
(495, 'users_test', 0),
(496, 'users_test', 0),
(497, 'users_test', 0),
(498, 'users_test', 0),
(499, 'users_test', 0),
(500, 'users_test', 0),
(501, 'users_test', 0),
(502, 'users_test', 0),
(503, 'users_test', 0),
(504, 'users_test', 0),
(505, 'users_test', 0),
(506, 'users_test', 0),
(507, 'users_test', 0),
(508, 'users_test', 0),
(509, 'users_test', 0),
(510, 'users_test', 0),
(511, 'users_test', 0),
(512, 'users_test', 0),
(513, 'users_test', 0),
(514, 'users_test', 0),
(515, 'users_test', 0),
(516, 'users_test', 0),
(517, 'users_test', 0),
(518, 'users_test', 0),
(519, 'users_test', 0),
(520, 'users_test', 0),
(521, 'users_test', 0),
(522, 'users_test', 0),
(523, 'users_test', 0),
(524, 'users_test', 0),
(525, 'users_test', 0),
(526, 'users_test', 0),
(527, 'users_test', 0),
(528, 'users_test', 0),
(529, 'users_test', 0),
(530, 'users_test', 0),
(531, 'users_test', 0),
(532, 'users_test', 0),
(533, 'users_test', 0),
(534, 'users_test', 0),
(535, 'users_test', 0),
(536, 'users_test', 0),
(537, 'users_test', 0),
(538, 'users_test', 0),
(539, 'users_test', 0),
(540, 'users_test', 0),
(541, 'users_test', 0),
(542, 'users_test', 0),
(543, 'users_test', 0),
(544, 'users_test', 0),
(545, 'users_test', 0),
(546, 'users_test', 0),
(547, 'users_test', 0),
(548, 'users_test', 0),
(549, 'users_test', 0),
(550, 'users_test', 0),
(551, 'users_test', 0),
(552, 'users_test', 0),
(553, 'users_test', 0),
(554, 'users_test', 0),
(555, 'users_test', 0),
(556, 'users_test', 0),
(557, 'users_test', 0),
(558, 'users_test', 0),
(559, 'users_test', 0),
(560, 'users_test', 0),
(561, 'users_test', 0),
(562, 'users_test', 0),
(563, 'users_test', 0),
(564, 'users_test', 0),
(565, 'users_test', 0),
(566, 'users_test', 0),
(567, 'users_test', 0),
(568, 'users_test', 0),
(569, 'users_test', 0),
(570, 'users_test', 0),
(571, 'users_test', 0),
(572, 'users_test', 0),
(573, 'users_test', 0),
(574, 'users_test', 0),
(575, 'users_test', 0),
(576, 'users_test', 0),
(577, 'users_test', 0),
(578, 'users_test', 0),
(579, 'users_test', 0),
(580, 'users_test', 0),
(581, 'users_test', 0),
(582, 'users_test', 0),
(583, 'users_test', 0),
(584, 'users_test', 0),
(585, 'users_test', 0),
(586, 'users_test', 0),
(587, 'users_test', 0),
(588, 'users_test', 0),
(589, 'users_test', 0),
(590, 'users_test', 0),
(591, 'users_test', 0),
(592, 'users_test', 0),
(593, 'users_test', 0),
(594, 'users_test', 0),
(595, 'users_test', 0),
(596, 'users_test', 0),
(597, 'users_test', 0),
(598, 'users_test', 0),
(599, 'users_test', 0),
(600, 'users_test', 0),
(601, 'users_test', 0),
(602, 'users_test', 0),
(603, 'users_test', 0),
(604, 'users_test', 0),
(605, 'users_test', 0),
(606, 'users_test', 0),
(607, 'users_test', 0),
(608, 'users_test', 0),
(609, 'users_test', 0),
(610, 'users_test', 0),
(611, 'users_test', 0),
(612, 'users_test', 0),
(613, 'users_test', 0),
(614, 'users_test', 0),
(615, 'users_test', 0),
(616, 'users_test', 0),
(617, 'users_test', 0),
(618, 'users_test', 0),
(619, 'users_test', 0),
(620, 'users_test', 0),
(621, 'users_test', 0),
(622, 'users_test', 0),
(623, 'users_test', 0),
(624, 'users_test', 0),
(625, 'users_test', 0),
(626, 'users_test', 0),
(627, 'users_test', 0),
(628, 'users_test', 0),
(629, 'users_test', 0),
(630, 'users_test', 0),
(631, 'users_test', 0),
(632, 'users_test', 0),
(633, 'users_test', 0),
(634, 'users_test', 0),
(635, 'users_test', 0),
(636, 'users_test', 0),
(637, 'users_test', 0),
(638, 'users_test', 0),
(639, 'users_test', 0),
(640, 'users_test', 0),
(641, 'users_test', 0),
(642, 'users_test', 0),
(643, 'users_test', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` enum('draft','public') NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `name`, `content`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'bla bla bla', 'bla bla bla bla bla bla bla bla bla bla bla bla <br> bla bla bla bla bla bla bla bla bla bla bla bla <br>bla bla bla bla bla bla bla bla bla bla bla bla <br>bla bla bla bla bla bla bla bla bla bla bla bla <br>bla bla bla bla bla bla bla bla bla bla bla bla <br>bla bla bla bla bla bla bla bla bla bla bla bla <br>bla bla bla bla bla bla bla bla bla bla bla bla <br>bla bla bla bla bla bla bla bla bla bla bla bla <br>bla bla bla bla bla bla bla bla bla bla bla bla <br>vvbla bla bla bla bla bla bla bla bla bla bla bla <br>bla bla bla bla bla bla bla bla bla bla bla bla <br>bla bla bla bla bla bla bla bla bla bla bla bla <br>', 'draft', 'bla bla bla', '2016-11-02 06:48:38', '0000-00-00 00:00:00'),
(3, 'bla bla bla', 'bla bla bla bla bla bla bla bla bla bla bla bla <br> bla bla bla bla bla bla bla bla bla bla bla bla <br>bla bla bla bla bla bla bla bla bla bla bla bla <br>bla bla bla bla bla bla bla bla bla bla bla bla <br>bla bla bla bla bla bla bla bla bla bla bla bla <br>bla bla bla bla bla bla bla bla bla bla bla bla <br>bla bla bla bla bla bla bla bla bla bla bla bla <br>bla bla bla bla bla bla bla bla bla bla bla bla <br>bla bla bla bla bla bla bla bla bla bla bla bla <br>vvbla bla bla bla bla bla bla bla bla bla bla bla <br>bla bla bla bla bla bla bla bla bla bla bla bla <br>bla bla bla bla bla bla bla bla bla bla bla bla <br>', 'draft', 'bla bla bla', '2016-11-02 06:48:38', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` enum('draft','public') NOT NULL,
  `slug` varchar(255) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `currency` enum('UAH','USD','EUR') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `role` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lastlogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `password`, `lastlogin`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 'a029d0df84eb5549c641e04a9ef389e5', '2016-10-16 15:44:09'),
(2, 'user', 'test', 'test@test.com', 'c4ca4238a0b923820dcc509a6f75849b', '2016-10-23 17:27:11'),
(3, 'user', 'test1', 'test1@test.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '2016-10-31 18:58:29'),
(4, 'user', 'test12', 'test11@test.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '2016-10-31 18:59:47');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_congig_opt_id_optgroup_id` (`option_group`);

--
-- Индексы таблицы `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `option_group`
--
ALTER TABLE `option_group`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `option_group`
--
ALTER TABLE `option_group`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=644;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `configs`
--
ALTER TABLE `configs`
  ADD CONSTRAINT `fk_congig_opt_id_optgroup_id` FOREIGN KEY (`option_group`) REFERENCES `option_group` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
