-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Feb 11, 2022 at 01:52 PM
-- Server version: 10.5.8-MariaDB-1:10.5.8+maria~focal-log
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clone_insta`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `time_commentaire` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ip` varchar(255) NOT NULL,
  `commentaire` varchar(255) NOT NULL,
  `id_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

CREATE TABLE `like` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ip` varchar(255) NOT NULL,
  `somme` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `time_post` timestamp NOT NULL DEFAULT current_timestamp(),
  `url_post` text NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `id_user`, `ip`, `time_post`, `url_post`, `description`) VALUES
(1, 17, '172.16.238.1', '2022-02-09 11:01:10', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQu0wVvathXbiGN8THeRTZmPPSqUell_f7DIQ&usqp=CAU', 'e'),
(2, 17, '172.16.238.1', '2022-02-09 09:58:52', 'https://c.tenor.com/SlNLkx5OhsQAAAAC/monkey-nft.gif', 'sdfghj'),
(3, 17, '172.16.238.1', '2022-02-09 12:49:22', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQu0wVvathXbiGN8THeRTZmPPSqUell_f7DIQ&usqp=CAU', 'dfvfd'),
(4, 8, '172.16.238.1', '2022-02-09 13:56:35', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQu0wVvathXbiGN8THeRTZmPPSqUell_f7DIQ&usqp=CAU', 'sdfd'),
(5, 17, '172.16.238.1', '2022-02-09 14:37:35', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrhx9fRZZ4IfCXiuYFzPPMPMZN4ZVzQtkw5Q&usqp=CAU', 'bnpp'),
(6, 17, '172.16.238.1', '2022-02-09 14:38:20', 'data:image/jpeg;base64,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', 'ma copin pecresse'),
(7, 17, '172.16.238.1', '2022-02-09 14:39:15', 'data:image/jpeg;base64,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', 'le z'),
(8, 12, '172.16.238.1', '2022-02-10 08:59:38', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBEREhIREhISEhgREhEYEhISEhgRERkRGBgaGhgYGBgcIS4lHB4rHxgYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHhISHjQrJCQ2NDQxNDQ0NDQ0NjQ0NDQ0MTQ0NDQ0NDExNDQ0MTQxNDQxMTE0NDQ0NDQ0NDE0NDQxNP/AABEIALcBEwMBIgACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAAAQUDBAYCB//EADgQAAIBAgMFBQcDAwUBAAAAAAABAgMRBCExBRJBUWEGInGBkRMyQqGxwfBS0eEjYnIUFVOS8TP/xAAaAQEAAwEBAQAAAAAAAAAAAAAAAQIDBAUG/8QAKREAAgIBAwMDAwUAAAAAAAAAAAECEQMSITEEQVEFMnEiQmETFCOh0f/aAAwDAQACEQMRAD8A+OkgG5QAEgEEkgsAAAQCSCQAAZMPQnUkoQV29CSDGDrcB2YjZOpPN8Mvlcu8J2XoTaTjF9Xm/RWKa0W0s+b2B9QxHZXCR1Tj1hP7Sv8AU5zbGzKND3W5pv33HOK8n9UNaGk5IFhSwSqTlGMuLtlkeMVs6dPX9iykmRTNIE2BYiyASALIBIAsgCwAAFgAAAAAAAQCQRRJ4sD0CKJs8gAqASCSwAABAAJAAAJIM2Fw8qk1CKu39Fqd32f2E4RTjFJv3qks8+Kjz8fkzX7LbIhTgq9ZZyV1B6uPC6+3E6yVe0N+rP2EPhisqkv28DnyTt0jWMe7M2GwVGm7Se/Litc/BZlmsVCEbezqJL9NCb+Zy1btRCl3cLRj/nUW+/F5/U1Z9qdoVLd2k8/dVKMfnqZajTS2W+1MTTlfOcXyqQnDPopHJ42lKT1un9C6jHEVl3oKLetrtXN/ZmwJKcZVFlrZKwUiXBnLQ2dGEklGOaTd1n5XLLHbKjKm503vWXei9U/PhmW1fAf1XvLlu55eT4GWpScNe91Wt', 'fghjk'),
(9, 8, '172.16.238.1', '2022-02-10 10:21:23', 'https://picolio.auto123.com/art-images/110846/bmw-vision-i01.jpg', 'ma nouvelle bm'),
(10, 8, '172.16.238.1', '2022-02-10 10:29:32', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQu0wVvathXbiGN8THeRTZmPPSqUell_f7DIQ&usqp=CAU', 'f'),
(11, 8, '172.16.238.1', '2022-02-10 10:29:39', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFRgVFRUYGBgaGRgYGBgYGBgYGBgZGBgaGRgYGBgcIS4lHB4rIRkYJjgmKy8xNTU1GiQ7QDszPy40NTEBDAwMEA8QHhISHjQrJSs0NDQ2NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQxNDQ0NP/AABEIAJ8BPgMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAEBQMGAQIHAAj/xAA8EAACAQIEBAUBBgUDAwUAAAABAgADEQQSITEFQVFhBiJxgZETMkKhsdHwB1JyweEUYoKiwvFEU1SSsv/EABoBAAIDAQEAAAAAAAAAAAAAAAIDAAEEBQb/xAAtEQADAAICAgECAwgDAAAAAAAAAQIDESExBBJBBSJRcZEUIzJhgaGx4RMWQv/aAAwDAQACEQMRAD8AqqwinBxJkM6xkYywxjnCmIsO0c4VpTIPMOYxpRXhjGlGIotBKCSBZqgkwWAERMsgqLDCJBUWREYurrFuIWNq6xbiBGyAxRXEGywuuIMRGoEyiXgvFKwUZb6yTF4sU1vEah6j5yDbpMPlZlPHydj6Z4jyV7PhDTCEqNCYHxMUzcsfNNeIYplUBVN5X6+Ym7X95yqrfZ6j7Y/hMtUF9Np4GRKskEW0hk032SWnis0LSTD0KjnyIzHsCZSlvoKskz2YAhuHrcowwvhbF1Bf6eX+o/pA8bwTEUj5qTac1GYfhDeG9baAjzMG9Kk/6hSU2M3+h1EHweJJGU6EddDCxh3IuDcRSTZrdTrewc4EsdFvLp4c8Nqqh31PTpBuCY5AAjqA3Uy1YJhk0N5v8TFPtt8nnvq/lZJj1na5/U99MLsAJC4hDmDuZ00eXb2+SBhPIJlplBCBJqaydVmlNYQqwGwkRkSNxCCshqSFglWLcS0YVzFOLeMkFizFPF7GE4l4ETGIgqBkiyISRDLKYbhzH', 'c'),
(12, 3, '172.16.238.1', '2022-02-10 11:18:34', 'https://media.istockphoto.com/vectors/saffron-flower-bud-open-closeup-seasoning-expensive-saffron-vector-id1186720386?k=20&m=1186720386&s=170667a&w=0&h=3bu7z_SV1KRBs9QvlRWYUa5zPp2lpC4HnjjCedXHAdo=', 's'),
(13, 3, '172.16.238.1', '2022-02-10 12:54:42', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFRgVFRUYGBgaGRgYGBgYGBgYGBgZGBgaGRgYGBgcIS4lHB4rIRkYJjgmKy8xNTU1GiQ7QDszPy40NTEBDAwMEA8QHhISHjQrJSs0NDQ2NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQxNDQ0NP/AABEIAJ8BPgMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAEBQMGAQIHAAj/xAA8EAACAQIEBAUBBgUDAwUAAAABAgADEQQSITEFQVFhBiJxgZETMkKhsdHwB1JyweEUYoKiwvFEU1SSsv/EABoBAAIDAQEAAAAAAAAAAAAAAAIDAAEEBQb/xAAtEQADAAICAgECAwgDAAAAAAAAAQIDESExBBJBBSJRcZEUIzJhgaGx4RMWQv/aAAwDAQACEQMRAD8AqqwinBxJkM6xkYywxjnCmIsO0c4VpTIPMOYxpRXhjGlGIotBKCSBZqgkwWAERMsgqLDCJBUWREYurrFuIWNq6xbiBGyAxRXEGywuuIMRGoEyiXgvFKwUZb6yTF4sU1vEah6j5yDbpMPlZlPHydj6Z4jyV7PhDTCEqNCYHxMUzcsfNNeIYplUBVN5X6+Ym7X95yqrfZ6j7Y/hMtUF9Np4GRKskEW0hk032SWnis0LSTD0KjnyIzHsCZSlvoKskz2YAhuHrcowwvhbF1Bf6eX+o/pA8bwTEUj5qTac1GYfhDeG9baAjzMG9Kk/6hSU2M3+h1EHweJJGU6EddDCxh3IuDcRSTZrdTrewc4EsdFvLp4c8Nqqh31PTpBuCY5AAjqA3Uy1YJhk0N5v8TFPtt8nnvq/lZJj1na5/U99MLsAJC4hDmDuZ00eXb2+SBhPIJlplBCBJqaydVmlNYQqwGwkRkSNxCCshqSFglWLcS0YVzFOLeMkFizFPF7GE4l4ETGIgqBkiyISRDLKYbhzH', 'vv'),
(14, 11, '172.16.238.1', '2022-02-10 15:20:03', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQu0wVvathXbiGN8THeRTZmPPSqUell_f7DIQ&usqp=CAU', 'ytfsyffqgygq'),
(15, 19, '172.16.238.1', '2022-02-11 09:57:04', 'https://picolio.auto123.com/art-images/110846/bmw-vision-i01.jpg', 'je m\'anvol'),
(16, 19, '172.16.238.1', '2022-02-11 09:57:38', 'https://media.istockphoto.com/vectors/saffron-flower-bud-open-closeup-seasoning-expensive-saffron-vector-id1186720386?k=20&m=1186720386&s=170667a&w=0&h=3bu7z_SV1KRBs9QvlRWYUa5zPp2lpC4HnjjCedXHAdo=', 'le zzzzz'),
(17, 20, '172.16.238.1', '2022-02-11 11:34:16', 'https://media.istockphoto.com/vectors/saffron-flower-bud-open-closeup-seasoning-expensive-saffron-vector-id1186720386?k=20&m=1186720386&s=170667a&w=0&h=3bu7z_SV1KRBs9QvlRWYUa5zPp2lpC4HnjjCedXHAdo=', 'sdfgh'),
(18, 20, '172.16.238.1', '2022-02-11 11:34:46', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrhx9fRZZ4IfCXiuYFzPPMPMZN4ZVzQtkw5Q&usqp=CAU', 'xn');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `ip_creation` varchar(255) NOT NULL,
  `pseudo` varchar(25) NOT NULL,
  `time_create` datetime NOT NULL DEFAULT current_timestamp(),
  `profil_picture` varchar(255) DEFAULT NULL,
  `description` varchar(350) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_creation`, `pseudo`, `time_create`, `profil_picture`, `description`) VALUES
(1, '172.16.238.1', 'adrientrois', '2022-02-07 11:15:35', 'https://www.cointribune.com/app/uploads/2021/07/Crypto-Punk.png', ''),
(2, '172.16.238.1', 'addddd', '2022-02-07 11:17:02', 'http://www.artrights.me/wp-content/uploads/2021/09/Yuga-Labs-Bored-Ape-Yacht-Club-7940.jpeg', 'dd'),
(3, '172.16.238.1', 'adr', '2022-02-07 11:18:43', 'https://cdn.discordapp.com/attachments/918086011253325885/940926928813183006/137022164_3586744368046044_7505104531956312735_n.png', 'ju\r\n'),
(4, '172.16.238.1', 'adriendeux', '2022-02-07 11:22:42', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-xz_hG9nX5CM9_4Pawm4TkkUo_UD2Yw3Xew&usqp=CAU', 'je suis un pro'),
(5, '172.16.238.1', 'fsg', '2022-02-07 12:35:43', 'https://cdn.shopify.com/s/files/1/0287/6738/7780/products/PHOTO-PROFIL-MEC-ORANGE_300x.png?v=1597638270', ''),
(6, '172.23.19.64', 'Nico', '2022-02-07 13:08:42', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJqOmjQUzZ1_wHnbgB6v34EMET-KPWclcW6A&usqp=CAU', ''),
(7, '172.16.238.1', 'e', '2022-02-07 13:29:47', 'https://media.istockphoto.com/vectors/saffron-flower-bud-open-closeup-seasoning-expensive-saffron-vector-id1186720386?k=20&m=1186720386&s=170667a&w=0&h=3bu7z_SV1KRBs9QvlRWYUa5zPp2lpC4HnjjCedXHAdo=', NULL),
(8, '172.16.238.1', 'riad', '2022-02-07 13:30:00', 'https://cdn.vox-cdn.com/thumbor/2xj1ySLIz1EZ49NvSsPzq8Itjyg=/1400x1050/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/23084330/bored_ape_nft_accidental_.jpg', NULL),
(9, '172.16.238.1', 'riaddeux', '2022-02-07 13:30:05', 'https://pbs.twimg.com/profile_images/1441793667191099398/m46u2_2q_400x400.jpg', 'coucou'),
(10, '172.16.238.1', 'adrienadd', '2022-02-08 12:30:06', NULL, NULL),
(11, '172.16.238.1', 'adrien', '2022-02-08 12:46:51', 'https://lh3.googleusercontent.com/ogw/ADea4I5zDx9k3wpWI7DN7h3NSu-rh92kc0plg3PmdZ8J=s83-c-mo', 'sympat'),
(12, '172.16.238.1', 'add', '2022-02-09 08:04:35', 'https://furxe.com/storage/images/regular_site/img-2.jpeg', NULL),
(13, '172.16.238.1', 'adrz', '2022-02-09 08:06:41', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVbgElWE7pbgzhzdS2b_6OjjFzEM_JqPLF5Q&usqp=CAU', ''),
(15, '172.16.238.1', 'azerty', '2022-02-09 08:08:44', 'https://upload.wikimedia.org/wikipedia/commons/b/b4/Fran%C3%A7ois_ASSELINEAU.jpg', NULL),
(16, '172.16.238.1', 'z', '2022-02-09 08:11:27', 'https://pbs.twimg.com/profile_images/1441793667191099398/m46u2_2q_400x400.jpg', 'rraze'),
(17, '172.16.238.1', 'testing', '2022-02-09 08:16:00', 'https://storage.googleapis.com/billionaire-club-327223.appspot.com/large_orientape_80030ca0e0/large_orientape_80030ca0e0.png', 'Salut\r\n'),
(18, '172.16.238.1', 'addtrois', '2022-02-10 13:03:06', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJqOmjQUzZ1_wHnbgB6v34EMET-KPWclcW6A&usqp=CAU', ''),
(19, '172.16.238.1', 'mathius', '2022-02-11 09:54:59', 'https://storage.googleapis.com/billionaire-club-327223.appspot.com/large_orientape_80030ca0e0/large_orientape_80030ca0e0.png', 'je suis meilleur que adrien'),
(20, '172.16.238.1', 'benji', '2022-02-11 11:31:32', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-xz_hG9nX5CM9_4Pawm4TkkUo_UD2Yw3Xew&usqp=CAU', ''),
(21, '172.16.238.1', 'clovis', '2022-02-11 12:51:55', NULL, NULL),
(22, '172.16.238.1', 'clko', '2022-02-11 12:53:47', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_post` (`id_post`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_post` (`id_post`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id-user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `like`
--
ALTER TABLE `like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`),
  ADD CONSTRAINT `commentaire_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `like`
--
ALTER TABLE `like`
  ADD CONSTRAINT `like_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`),
  ADD CONSTRAINT `like_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `id-user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
