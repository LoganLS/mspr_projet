-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 07, 2018 at 10:21 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mspr`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date_start` date NOT NULL,
  `hour_start` time NOT NULL,
  `date_end` date NOT NULL,
  `hour_end` time NOT NULL,
  `zip_code` varchar(50) NOT NULL,
  `name_city` varchar(50) NOT NULL,
  `street_address` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `limited_number_participant` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `picture` varchar(50) NOT NULL,
  `is_published` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `id_user`, `name`, `date_start`, `hour_start`, `date_end`, `hour_end`, `zip_code`, `name_city`, `street_address`, `description`, `limited_number_participant`, `date_created`, `picture`, `is_published`) VALUES
(12, 2, 'Les Utopiales', '2018-10-31', '18:00:00', '2018-11-05', '22:00:00', '44000 ', 'Nantes', '5 rue de Valmy ', 'Après avoir guetté les lendemains de la machine en 2016, puis observé le long labeur du temps en 2017, Les Utopiales, Festival International de Science-Fiction de Nantes, célèbreront en 2018 le Corps dans tous ses états.\r\n\r\nPresque tous les arts et presque toutes les sciences prennent le corps pour objet d’études : des corps célestes de l’astrophysique aux corps inertes de la physique, des corps vivants de la biologie à l’organisation chimique de la matière, et jusqu’aux particules du monde subatomique, en passant par cette organisation plurielle qu’est l’humanité, mosaïque de corps sociaux\r\nCorps physique, corps virtuel, corps psychique et corps social nourriront la programmation pluridisciplinaire de cette nouvelle édition des Utopiales où se mêleront, comme toujours, littérature, bande dessinée, cinéma, sciences, art plastiques, pôle ludique, jeux vidéo\r\n\r\nTables rondes, conférences, expositions à destination du grand public verront se croiser les points de vue, convergents ou opposés, des auteurs, artistes, créateurs, chercheurs, scientifiques et essayistes qui, ensemble, échangeront pour mieux nous apporter leur vision prospective et humaine.\r\nLors de cette 19e édition, Les Utopiales auront le plaisir et l’honneur d’accueillir Elisabeth Vonarburg, Lewis Trondheim, Étienne Klein, Robert Jackson Bennett Et c’est l’artiste Beb-deum qui signe l’affiche.\r\n\r\n« Les Utopiales réunissent tous ceux qui, jour après jour, réfléchissent aux transformations de notre monde et envisagent la science-fiction comme une pédagogie du réel ».\r\nRoland Lehoucq', 8000, '2018-11-07 10:31:47', 'Les Utopiales utopiales2018.jpg', 1),
(13, 2, 'Hellfest', '2019-06-21', '18:00:00', '2019-06-23', '01:00:00', '44190', 'Clisson', 'Rue du Champ Louet', 'Le Hellfest, également appelé Hellfest Summer Open Air, est un festival de musique français spécialisé dans les musiques extrêmes, annuellement organisé au mois de juin à Clisson en Loire-Atlantique. Sa forte fréquentation le fait figurer parmi les plus importants festivals de musique français. Il est aussi l\'un des plus grands festivals de metal en Europe et le premier en France.', 50000, '2018-11-07 10:37:52', 'Hellfest Helfest 2019.png', 1),
(14, 1, 'Festival Soy', '2018-10-30', '17:00:00', '2018-11-04', '18:00:00', '44000', 'Nantes', '4 Boulevard Léon Bureau', 'Le festival SOY se déroule chaque année, fin octobre, dans la ville de Nantes.\r\n\r\nSur cinq jours, il met en avant des artistes internationaux de la scène rock, antifolk, post-punk, electronica, hip-pop et post-rock.\r\n\r\nConçu comme un parcours musical dans la ville, le festival se déroule dans différents lieux nantais : Stereolux, le lieu unique, le Musée d\'Arts de Nantes, la maison de quartier de Doulon, ...\r\n\r\nLe festival est organisé par Yamoy\', association créée en 1999 qui organise des concerts à Nantes.\r\nUne vingtaine de bénévoles participent chaque année à l\'organisation du festival.\r\n\r\nP.S. : SOY ne veut pas dire Soja mais Sounds of Yamoy.', 5000, '2018-11-07 10:47:47', 'Festival Soy festival soy2018.jpg', 1),
(15, 1, 'Culture bar-bars', '2018-11-22', '10:00:00', '2018-11-24', '19:00:00', '44000', 'Nantes ', '5 rue de Valmy', 'De bars en bars, une programmation de vidéos issus du catalogue de l’association présentera une vingtaine d’artistes nationaux et internationaux. Pendant la semaine du Festival Culture Bar-Bars, des lives expérimentaux et des performances artistiques et poétiques vous attendent sur le parcours. Cette année, la rue aussi se met en scène, et devient lieu de projection ! Du 10 au 24, venez dériver entre les images et aux sons des lives cosmiques qu’on vous prépare ! \r\n\r\nUne soirée d’ouverture le 10 novembre au Baroudeur lancera les festivités, présentation du projet et de l’asso, merch, concert live/perf. ', 3000, '2018-11-07 10:56:13', 'Culture bar-bars festival bar-bars .jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
