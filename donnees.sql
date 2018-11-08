-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 08, 2018 at 10:30 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mspr`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `body` text NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `id_event`, `id_user`, `body`, `date_created`) VALUES
(1, 4, 1, 'abc de ', '2018-11-06 17:36:48'),
(2, 4, 1, 'coucou !', '2018-11-06 17:36:56'),
(3, 10, 1, 'bof', '2018-11-06 22:56:33'),
(4, 9, 1, 'coucou je participe !', '2018-11-06 23:00:41'),
(5, 14, 2, 'salut', '2018-11-07 11:39:14');

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
  `picture` varchar(255) NOT NULL,
  `is_published` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `id_user`, `name`, `date_start`, `hour_start`, `date_end`, `hour_end`, `zip_code`, `name_city`, `street_address`, `description`, `limited_number_participant`, `date_created`, `picture`, `is_published`) VALUES
(12, 2, 'Les Utopiales', '2018-12-01', '18:00:00', '2018-12-05', '22:00:00', '44000 ', 'Nantes', '5 rue de Valmy ', 'Après avoir guetté les lendemains de la machine en 2016, puis observé le long labeur du temps en 2017, Les Utopiales, Festival International de Science-Fiction de Nantes, célèbreront en 2018 le Corps dans tous ses états.\r\n\r\nPresque tous les arts et presque toutes les sciences prennent le corps pour objet d’études : des corps célestes de l’astrophysique aux corps inertes de la physique, des corps vivants de la biologie à l’organisation chimique de la matière, et jusqu’aux particules du monde subatomique, en passant par cette organisation plurielle qu’est l’humanité, mosaïque de corps sociaux\r\nCorps physique, corps virtuel, corps psychique et corps social nourriront la programmation pluridisciplinaire de cette nouvelle édition des Utopiales où se mêleront, comme toujours, littérature, bande dessinée, cinéma, sciences, art plastiques, pôle ludique, jeux vidéo\r\n\r\nTables rondes, conférences, expositions à destination du grand public verront se croiser les points de vue, convergents ou opposés, des auteurs, artistes, créateurs, chercheurs, scientifiques et essayistes qui, ensemble, échangeront pour mieux nous apporter leur vision prospective et humaine.\r\nLors de cette 19e édition, Les Utopiales auront le plaisir et l’honneur d’accueillir Elisabeth Vonarburg, Lewis Trondheim, Étienne Klein, Robert Jackson Bennett Et c’est l’artiste Beb-deum qui signe l’affiche.\r\n\r\n« Les Utopiales réunissent tous ceux qui, jour après jour, réfléchissent aux transformations de notre monde et envisagent la science-fiction comme une pédagogie du réel ».\r\nRoland Lehoucq', 8000, '2018-11-07 10:31:47', 'Les Utopiales utopiales2018.jpg', 1),
(13, 2, 'Hellfest', '2019-06-21', '18:00:00', '2019-06-23', '01:00:00', '44190', 'Clisson', 'Rue du Champ Louet', 'Le Hellfest, également appelé Hellfest Summer Open Air, est un festival de musique français spécialisé dans les musiques extrêmes, annuellement organisé au mois de juin à Clisson en Loire-Atlantique. Sa forte fréquentation le fait figurer parmi les plus importants festivals de musique français. Il est aussi l\'un des plus grands festivals de metal en Europe et le premier en France.', 50000, '2018-11-07 10:37:52', 'Hellfest Helfest 2019.png', 1),
(14, 1, 'Festival Soy', '2019-01-25', '17:00:00', '2019-02-04', '18:00:00', '44000', 'Nantes', '4 Boulevard Léon Bureau', 'Le festival SOY se déroule chaque année, fin octobre, dans la ville de Nantes.\r\n\r\nSur cinq jours, il met en avant des artistes internationaux de la scène rock, antifolk, post-punk, electronica, hip-pop et post-rock.\r\n\r\nConçu comme un parcours musical dans la ville, le festival se déroule dans différents lieux nantais : Stereolux, le lieu unique, le Musée d\'Arts de Nantes, la maison de quartier de Doulon, ...\r\n\r\nLe festival est organisé par Yamoy\', association créée en 1999 qui organise des concerts à Nantes.\r\nUne vingtaine de bénévoles participent chaque année à l\'organisation du festival.\r\n\r\nP.S. : SOY ne veut pas dire Soja mais Sounds of Yamoy.', 5000, '2018-11-07 10:47:47', 'Festival Soy festival soy2018.jpg', 1),
(15, 1, 'Culture bar-bars', '2018-11-22', '10:00:00', '2018-11-24', '19:00:00', '44000', 'Nantes ', '5 rue de Valmy', 'De bars en bars, une programmation de vidéos issus du catalogue de l’association présentera une vingtaine d’artistes nationaux et internationaux. Pendant la semaine du Festival Culture Bar-Bars, des lives expérimentaux et des performances artistiques et poétiques vous attendent sur le parcours. Cette année, la rue aussi se met en scène, et devient lieu de projection ! Du 10 au 24, venez dériver entre les images et aux sons des lives cosmiques qu’on vous prépare ! \r\n\r\nUne soirée d’ouverture le 10 novembre au Baroudeur lancera les festivités, présentation du projet et de l’asso, merch, concert live/perf. ', 3000, '2018-11-07 10:56:13', 'Culture bar-bars festival bar-bars .jpg', 1),
(16, 2, 'Tisse Metisse', '2018-12-15', '15:00:00', '2018-12-15', '19:00:00', '44000', 'Nantes', '5 Rue de Valmy', 'Le SAMEDI 15 DÉCEMBRE 2018 à la Cité de Nantes de 16h à 1h aura lieu la 26ème édition de LA FETE ! Pour une soirée riche en festivités et en dialogue. Plus d’une quinzaine de concerts et de spectacles sur 4 scènes, des débats et des animations seront proposés. Cet évènement se veut accessible pour tous les publics. La Fête Tissé Métisse est un lieu de rencontres interculturelles, intergénérationnelles et engagées. \r\n\r\nNous vous donnons donc rendez-vous le SAMEDI 15 DÉCEMBRE 2018 à la Cité des Congrès de Nantes de 16h à 1h pour la 26e édition de La Fête ! NOTEZ LA DATE !', 3000, '2018-11-07 11:28:35', 'Tisse Metisse tisse metisse.png', 1),
(17, 2, 'Midi Minuit Poesie', '2018-11-15', '12:00:00', '2018-11-16', '19:00:00', '44000', 'Nantes', '5 Rue de Valmy', 'Le festival Midiminuitpoésie établit des passerelles entre la poésie et d’autres pratiques artistiques, telles que la musique, les arts visuels, avec lesquelles elle entretient depuis toujours des liens créatifs.\r\n\r\nLe festival présente la poésie contemporaine sous toutes ses formes en privilégiant la lecture à voix haute comme mode de contact avec l’émotion poétique. À chaque édition, une quarantaine d’auteurs, artistes, éditeurs sont invités pour des lectures, lectures-concerts, entretiens d’auteurs, performances artistiques, installations, actions dans l’espace public au cours de cinq jours de programmation en différents lieux à Nantes.', 1000, '2018-11-08 11:05:37', 'Midi Minuit Poesie midi.jpg', 1),
(18, 2, 'L\'ete Indien aux Nefs ', '2018-11-19', '23:00:00', '2018-11-20', '06:00:00', '44000', 'Nantes', '2 place de la Croix Bonneau', '\r\nÉTÉ INDIEN AUX NEFS\r\nChaque automne, les Nefs s’animent avec une programmation de spectacle vivant : théâtre, musique, danse, cirque, spectacles pour enfants et arts visuels. C’est le deuxième cycle de programmation, de fin septembre à début novembre, souvent les plus beaux jours de l’année à Nantes : l’été indien.\r\nLa gratuité des spectacles ou leurs petits prix, la puissance évocatrice du lieu et le choix des invités, artistes internationaux et créateurs nantais, facilitent l’accès à tous les publics et assurent le succès de ces saisons. Jusqu’à 15 000 personnes assistent aux différents spectacles de chaque Été indien aux Nefs.', 10000, '2018-11-08 11:11:33', 'L\'ete Indien aux Nefs  eteindienaunefs.jpg', 1),
(19, 1, 'Festival des 3 continents', '2018-11-26', '10:00:00', '2018-11-27', '10:00:00', '44000', 'Nantes', '10 boulevard Léon ', 'Chaque année depuis 1979, à la fin du mois de novembre à Nantes, le Festival des 3 Continents propose des films de fictions et des documentaires d’Afrique, d’Amérique latine et d’Asie.\r\n\r\nCette spécialisation géographique, pionnière en son temps, ne résume pas l’identité du Festival, elle est une des formes de ce qui l’anime et le distingue : la passion et la curiosité, le goût de la découverte et des rencontres, l’amour des films du Sud et la volonté de les servir.\r\n\r\nDepuis sa création, le Festival des 3 Continents a constamment fait preuve d’un flair certain dans sa programmation. De nombreux hommages ont fait date : Raj Kapoor (Inde) en 1984, nouvelle vague argentine dès 1997 et à nouveau en 2002, Melvin Van Peebles en 1979 (USA), Tolomouch Okeev (Kirghistan) en 2002, Satyajit Ray (Inde) en 2006…\r\n\r\nLa Compétition a également ses titres de gloire : Souleymane Cissé (Mali) en 1979, Hou Hsiao-hsien (Taïwan) en 1984, Abbas Kiarostami (Iran) en 1987, Wong Kar-wai (Hong-Kong) en 1991, Tsai Ming-liang (Taïwan) en 1993, Jia Zhang-ke (Chine) en 1998 et bien d’autres encore…\r\n\r\nLe Festival des 3 Continents a été et restera un lieu de découvertes et de rencontres, un lieu d’échange et de passion.', 1000, '2018-11-08 11:15:54', 'Festival des 3 continents festival des 3 continents.jpg', 1),
(20, 1, 'Scopitone', '2018-12-10', '09:00:00', '2018-12-14', '23:30:00', '44000', 'Nantes', '10 rue du calvaire', 'Le Festival Scopitone est un festival annuel transdisciplinaire d’art numérique se déroulant dans plusieurs endroits de la ville de Nantes au mois de septembre. Créé en 2002 et organisé par l\'association Songo, Scopitone souhaite être la rencontre entre la musique, l’image, le spectacle vivant et les arts numériques.', 30000, '2018-11-08 11:26:27', 'Scopitone scopitone.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id_event` int(11) NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id_event`, `id_users`) VALUES
(9, 1),
(4, 1),
(12, 2),
(14, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `date_birthday` datetime NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `date_birthday`, `username`, `email`, `password`, `role`, `date_created`) VALUES
(1, 'Logan', 'Le Saux', '1998-08-20 00:00:00', 'LoganLS', 'logan.lesaux@gmail.com', '3447adfd742cdfb9048a3b29baf1ae7d', 'administrateur', '2018-11-05 18:06:24'),
(2, 'Chloé', 'Gautreau', '1998-12-15 00:00:00', 'chloé', 'chloe.gautreau@laposte.net', '559a7f208866f0063b1ea8d5ca2ee816', 'administrateur', '2018-11-07 10:28:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
