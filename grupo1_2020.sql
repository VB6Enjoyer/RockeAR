-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 24, 2020 at 07:27 PM
-- Server version: 5.7.31-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grupo1_2020`
--

-- --------------------------------------------------------

--
-- Table structure for table `bandas`
--

CREATE TABLE `bandas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `apodo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `genero` varchar(64) CHARACTER SET utf8 NOT NULL,
  `localidad` varchar(128) CHARACTER SET utf16 NOT NULL,
  `actividad` varchar(64) CHARACTER SET utf16 NOT NULL,
  `descripcion` text CHARACTER SET utf8 NOT NULL,
  `imagen` varchar(255) CHARACTER SET utf8 NOT NULL,
  `video` varchar(255) CHARACTER SET utf8 NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `creador` varchar(256) NOT NULL,
  `bandcamp` varchar(255) DEFAULT NULL,
  `soundcloud` varchar(255) DEFAULT NULL,
  `spotify` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `paginaweb` varchar(255) DEFAULT NULL,
  `puntaje` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bandas`
--

INSERT INTO `bandas` (`id`, `nombre`, `apodo`, `genero`, `localidad`, `actividad`, `descripcion`, `imagen`, `video`, `fecha`, `creador`, `bandcamp`, `soundcloud`, `spotify`, `facebook`, `instagram`, `paginaweb`, `puntaje`) VALUES
(43, '2 Minutos', 'Dos Minutos, 2\'', 'Punk rock', 'LanÃºs, Buenos Aires', 'Desde 1987', 'Formada en 1987 en ValentÃ­n Alsina, LanÃºs, sus lÃ­ricas hablan de temas como las drogas, el alcohol, la pobreza, y de problemas sociales, todos temas que se pueden \r\nconsiderar "barriales". En sus mÃ¡s de 30 aÃ±os de trayectoria, la agrupaciÃ³n de LanÃºs lanzÃ³ 10 Ã¡lbumes de estudio y 6 Ã¡lbumes en vivo, y es reconocida como una de las \r\nbandas de punk rock mas importantes en latinoamerica.', 'image.png', 'https://www.youtube.com/embed/_-Nq7ViY8VA', '2020-11-22 19:58:38', 'CrepitarLaHojarasca', ' ', ' ', ' ', 'https://www.facebook.com/los2minutos', ' ', ' ', 0),
(46, 'A.N.I.M.A.L.', 'Animal, Acosados Nuestros Indios Murieron Al Luchar', 'Metal alternativo', 'Ciudad de Buenos Aires', '1991-2006, desde 2015', 'A.N.I.M.A.L. (Acosados nuestros indios murieron al luchar) es una de las primeras bandas de metal alternativo de Argentina. Formada por AndrÃ©s Gimenez junto a "El\r\nPolaco" Zelazek tras la separaciÃ³n de Los Violadores, A.N.I.M.A.L. empezÃ³ como una banda de heavy metal tradicional con su primer Ã¡lbum autotitulado. Un aÃ±o despuÃ©s\r\nsu estilo mÃºsical empezÃ³ a cambiar hacia un estilo mÃ¡s moderno y pesado, por el cual es conocido desde entonces. La banda estuvo separada entre 2006 y 2015, pero en\r\nen sus mÃ¡s de 20 aÃ±os de actividad lanzaron 10 Ã¡lbumes de estudio, un compilado, un Ã¡lbum en vivo, y fueron teloneros para actos internacionales de renombre tales como\r\nPantera y Bad Religion, aparte de haber hecho tours por todo AmÃ©rica y Europa.', 'uploads/artist-img/a.n.i.m.a.l._5fbcdbbcc28d74.95898787.jpg', 'https://www.youtube.com/embed/55lbx9eu8oM', '2020-11-24 07:09:00', 'CrepitarLaHojarasca', ' ', ' ', ' ', 'https://www.facebook.com/animaloficial1', 'https://www.instagram.com/animaloficial1/', 'http://animal.com.ar/', 0),
(47, 'Airbag', '', 'Pop rock', 'Don Torcuato, Buenos Aires', 'Desde 1999', 'Formada en 1999 bajo otro nombre, Airbag empezÃ³ como una banda de covers antes de eventualmente empezar a componer y grabar su propia mÃºsica. Tras grabar su primera\r\ndemo, fueron contratados por Warner Music, donde a partir de ese punto hicieron su salto a la fama, con canciones como "Cae el sol" o "Por mil noches". El primer dis\r\nco de la banda recibio el disco de oro y de platino en Argentina, y desde entonces grabaron otros 5 discos, y 2 mÃ¡s en vivo.', 'uploads/artist-img/airbag_5fbcdc5f28c6b6.83858135.jpg', 'https://www.youtube.com/embed/xhNdhqRONSU', '2020-11-24 07:11:43', 'CrepitarLaHojarasca', ' ', ' ', ' ', ' ', ' ', 'http://www.airbag.la/', 0),
(48, 'Almafuerte', '', 'Heavy metal', 'Buenos Aires', '1995-2016', 'Almafuerte fue formada en 1995 por Ricardo Iorio tras la disoluciÃ³n de HermÃ©tica. Iorio decidiÃ³ ser el bajista y vocalista de la banda, aunque mas tarde dejarÃ­a el rol\r\nde bajista para concentrarse exclusivamente en las vocales. La banda inicio con un estilo de heavy metal clÃ¡sico y rÃ¡pido, aunque con los aÃ±os fue cediendo hacÃ­a un es\r\ntilo mÃ¡s melÃ³dico  e inspirado por el folklore. Al dÃ­a de hoy, Almafuerte es reconcoida como una de las bandas de metal mÃ¡s importantes de Argentina y del mundo hispa\r\nnohablante, y a compartido escenario con gigantes del gÃ©nero como Ozzy Osbourne, Metallica y Megadeth. En los 21 aÃ±os de actividad del grupo, Iorio y compaÃ±Ã­a grabaron\r\n8 Ã¡lbumes de estudio y 6 Ã¡lbumes en vivo.', 'uploads/artist-img/almafuerte_5fbcdcfb69c602.44308657.jpg', 'https://www.youtube.com/embed/85AacMfeB_E', '2020-11-24 07:14:19', 'CrepitarLaHojarasca', ' ', ' ', ' ', ' ', ' ', ' ', 0),
(49, 'Attaque 77', 'A77aque', 'Punk rock', 'Buenos Aires', 'Desde 1987', 'Attaque 77 es considerada una de las bandas de punk rock en espaÃ±ol mÃ¡s exitosas en Argentina y el mundo. Se formaron en 1987, y dos aÃ±os despuÃ©s lanzaron su primer\r\nÃ¡lbum. Desde entonces grabaron 12 Ã¡lbumes mÃ¡s, en los cuales su estilo fue alternando entre punk rock y rock alternativo. TambiÃ©n grabaron 5 live albums. Varias de sus\r\ncanciones son hitos del rock argentino, tales como "Hacelo por mÃ­", "Arrancacorazones", "Chance" o su cover de Gilda, "No me arrepiento de este amor".', 'uploads/artist-img/attaque_77_5fbcdd4ff02e32.13084868.jpg', 'https://www.youtube.com/embed/3YFUFdza21o', '2020-11-24 07:15:43', 'CrepitarLaHojarasca', ' ', ' ', ' ', 'https://www.facebook.com/Attaque77oficial/', ' ', 'https://attaque77oficial.com/', 0),
(50, 'BabasÃ³nicos', '', 'Pop rock', 'LanÃºs, Buenos Aires', 'Desde 1991', 'BabasÃ³nicos fue formada en LanÃºs, en 1991. El nombre de la banda es un juego de palabras entre el gurÃº indio Sai Baba y la caricuta Los SupersÃ³nicos. La banda se carac\r\nterÃ­za por su pop rock con elementos de mÃºsica electrÃ³nica y alternativa. La banda ha grabado 12 discos de estudio, y a tenido multiples hits a lo largo de su carrera.', 'uploads/artist-img/babasÃ³nicos_5fbcddaca92324.95520445.jpg', 'https://www.youtube.com/embed/Lrn8XIU1xqM', '2020-11-24 07:17:16', 'CrepitarLaHojarasca', ' ', ' ', ' ', ' ', ' ', 'https://www.babasonicos.com/', 0),
(51, 'Callejeros', 'CJS', 'Rock stone', 'Ciudad Celina, Buenos Aires', '1995-2010', 'Callejeros fue una banda de Rock rolinga formada en 1995. En sus inicios se llamaban Gatos Callejeros, nombre que fue cambiado por RÃ­o Verde (en honor a la canciÃ³n\r\nde Creedence Clearwater Revival, "Green River"), en esos entonces tocaban covers de esta banda, The Rolling Stones y Chuck Berry, hasta que en Enero de 1997 la banda\r\ndecidiÃ³ cambiar su nombre a Callejeros y epezar a componer mÃºsica propia. La banda fue muy conocida durante los principios de los aÃ±os 2000, pero desde entonces es re\r\ncordada de manera infame, tras haber estado involucrada en la Tragedia de CromaÃ±on, en el cual murieron 194 personas. La banda finalmente se separÃ³ en 2010, trÃ¡s 15\r\naÃ±os de trayectoria y 5 discos grabados.', 'uploads/artist-img/callejeros_5fbcddf86f62a9.73458247.jpg', 'https://www.youtube.com/embed/ezlpwCLgiE8', '2020-11-24 07:18:32', 'CrepitarLaHojarasca', ' ', ' ', ' ', ' ', ' ', ' ', 0),
(52, 'Carajo', '', 'Metal alternativo, Punk rock', 'Buenos Aires', '2000-2020', 'Formada en el 2000 por dos ex-miembros de A.N.I.M.A.L., Marcelo CorvalÃ¡n y AndrÃ©s Vilanova, Carajo se caracterizÃ³ por su mezcla entre el nu metal y el punk rock, en\r\nuna vena similar a la de A.N.I.M.A.L. pero mÃ¡s melÃ³dica y basada en el punk. A lo largo de los aÃ±os el sonido de la banda fue variando, implementando influencias del\r\npost-hardcore y el rock alternativo. Carajo se separÃ³ en 2020, tras grabar 6 Ã¡lbumes de estudio y un disco en vivo de re-versiones de sus canciones. El grupo ganÃ³ 3\r\nPremios Carlos Gardel.', 'uploads/artist-img/carajo_5fbcde502140e5.26834390.jpg', 'https://www.youtube.com/embed/lURNpAfpNRA', '2020-11-24 07:20:00', 'CrepitarLaHojarasca', ' ', ' ', ' ', ' ', ' ', ' ', 0),
(53, 'Charly GarcÃ­a', 'Carlos Alberto GarcÃ­a', 'Varios', 'Buenos Aires', 'Desde 1982', 'Carlos Alberto GarcÃ­a (nacido el 23/10/1951), conocido mÃ¡s bien como Charly GarcÃ­a, es un mÃºsico, compositor y productor argentino de rock. Charly empezÃ³ su carrera\r\nmusical en 1969, al formar su primera banda, Sui Generis junto a Nito Mestre. Tras la separaciÃ³n inicial de Sui Generis, Charly formÃ³ parte de varias otras bandas a\r\nlo largo de su vida, estas siendo PorSuiGieco, La Maquina de Hacer PÃ¡jaros y SerÃº GirÃ¡n. \r\n\r\nEn 1982 Charly lanzÃ³ su primer Ã¡lbum como solista, asÃ­ comenzando una trayecto rÃ­a de mas de 35 aÃ±os y 13 Ã¡lbumes de estudio. TambiÃ©n ha colaborado con artistas tales \r\ncomo Pedro Aznar, Mercedes Sosa, y Roberto Pettinato. Charly GarcÃ­a tiene el mÃ©rito de ser uno de los artistas de rock en EspaÃ±ol mÃ¡s reconocidos en el mundo entero, \r\nteniendo en su haber docenas de composiciones famosas que se han convertido en favoritos del rock en espaÃ±ol.', 'uploads/artist-img/charly_garcÃ­a_5fbcdeac37f116.68159052.jpg', 'https://www.youtube.com/embed/ZqV7fvVgHSo', '2020-11-24 07:21:32', 'CrepitarLaHojarasca', ' ', ' ', ' ', ' ', ' ', 'http://www.charlygarcia.com.ar/', 0),
(54, 'Cruzando el Charco', 'CEC', 'Pop rock', 'La Plata, Buenos Aires', 'Desde 2012', 'Cruzando el Charco es una banda de pop rock oriunda de La Plata, formada en 2012. La banda se caracteriza por su fusiÃ³n del pop rock con la cumbia, el candombe, el re\r\nggae y el funk, dandolÃ© asÃ­ un sonido rico y Ãºnico con una rica variedad de influencias y estilos. La banda, a eso de 2020, ha grabado 4 Ã¡lbumes de estudio y un EP.', 'uploads/artist-img/cruzando_el_charco_5fbcdf1db7b4d2.31047814.jpg', 'https://www.youtube.com/embed/2IwRDeyLL14', '2020-11-24 07:23:25', 'CrepitarLaHojarasca', ' ', ' ', ' ', ' ', ' ', 'https://www.cruzandoelcharco.com.ar', 0),
(55, 'Divididos', '', 'Rock alternativo', 'Hurlingham, Buenos Aires', 'Desde 1988', 'Divididos fue formada en 1988 por Ricardo Mollo y Diego Arnedo de MAM, y Omar Mollo de Sumo despues de su disoluciÃ³n. Su sonido es una mezcla entre el hard rock, el\r\nfunk y el folklore, y en su trayectorÃ­a han sido reconocidos multiples veces como una de las bandas de rock mas celebres de Argentina y sudamerica, habÃ­endo ganado un\r\nPremio Gardel de Oro en 2011. La banda ha lanzado 9 Ã¡lbumes de estudio, 4 en vivo y 7 recopilatorios, y han hecho 9 tours a gran escala, el decimo siendo cancelado en\r\n2020 por razÃ³nes de sanidad frente al COVID-19.', 'uploads/artist-img/divididos_5fbcdf50755ba4.51910984.jpg', 'https://www.youtube.com/embed/cdzpf_T2qaA', '2020-11-24 07:24:16', 'CrepitarLaHojarasca', ' ', ' ', ' ', ' ', ' ', ' ', 0),
(56, 'Flema', '', 'Punk rock', 'Gerli, Buenos Aires', '1987-2002, Desde 2007', 'Flema fue formada en 1987 y formÃ³ una parte importante del movimiento de punk rock de finales de los \'80 y de los \'90, junto a artistas como 2 Minutos, Los Violadores\r\ny Attaque 77. La banda se separÃ³ en 2002 tras la muerte de su vocalista, Ricky Espinosa, al caer de un piso alto mientras estaba ebrio. La banda se reuniÃ³ 5 aÃ±os des\r\npuÃ©s, en 2007, y han estado activos desde entonces, grabando su octavo disco de estudio en 2015, y su segundo Ã¡lbum en vivo en 2019.', 'uploads/artist-img/flema_5fbcdf87510e30.70047534.jpg', 'https://www.youtube.com/embed/p8ja5a2O5p8', '2020-11-24 07:25:11', 'CrepitarLaHojarasca', ' ', ' ', ' ', ' ', ' ', ' ', 0),
(57, 'La Beriso', '', 'Rock stone', 'Avellaneda, Buenos Aires', 'Desde 1998', 'La Beriso es una banda de rock stone formada en Avellaneda, Buenos Aires, en 1998. La agrupaciÃ³n grabÃ³ dos demos en 2000, y 2004, pero no fue hasta 2005 que lanzÃ³ su\r\nprimer disco de estudio. La banda, al igual que otras de su Ã©poca, estÃ¡ caracterizada por su sÃ³nido reminiscente a The Rolling Stones, tÃ­pico del rock stone, y por sus\r\nletras de contenido "barrial". La banda grabÃ³ un total 8 Ã¡lbumes de estudio, y es una de las bandas de rock mas conocidas en Argentina en los Ãºltimos aÃ±os.', 'uploads/artist-img/la_beriso_5fbce013442f78.99782671.jpg', 'https://www.youtube.com/embed/uo8qDCDZhK0', '2020-11-24 07:27:31', 'CrepitarLaHojarasca', ' ', ' ', ' ', 'https://www.facebook.com/laberiso.oficial/', ' ', 'https://www.laberiso.com.ar', 0),
(58, 'La Renga', '', 'Hard rock', 'Mataderos, Buenos Aires', 'Desde 1988', 'La Renga se formÃ³ en 1988, en el barrio de Mataderos de la Ciudad de Buenos Aires, por "Chizzo" Napoli y los hermanos "Tete" y "Tanque" Iglesias. La banda toca un es\r\ntilo de rock stone mÃ¡s pesado, mÃ¡s en lÃ­nea con el hard rock e incluso el heavy metal, pero conservando las influencias bluseras de bandas como Pappo\'s Blues. Es una\r\nde las bandas de rock mÃ¡s reconocidas y celebres en Argentina, habiendo lanzado 9 discos y llevado a cabo 11 tours a gran escala a lo largo y ancho del paÃ­s y del con\r\ntinente. Desde el 2002, la banda no estÃ¡ en ninguna discogrÃ¡fica, si no que se autogestiona.', 'uploads/artist-img/la_renga_5fbce04d15a152.86702668.jpg', 'https://www.youtube.com/embed/ZjwCEVLn8V0', '2020-11-24 07:28:29', 'CrepitarLaHojarasca', ' ', ' ', ' ', ' ', ' ', 'https://www.larenga.com', 0),
(59, 'Las Pastillas del Abuelo', '', 'Rock stone', 'Buenos Aires', 'Desde 2002', 'La Pastillas del Abuelo es una banda de rock barrial formada en 2002 en el barrio porteÃ±o de Caballito. La banda tiene un sonido tÃ­pico del rock barrial, con influen\r\ncias de la murga y otras expresiones de la mÃºsica popular. La banda ha grabado 8 Ã¡lbumes hasta 2015, y han lanzado Ã©xitos como "El sensei", entre otros.', 'uploads/artist-img/las_pastillas_del_abuelo_5fbce085af6d22.20882756.jpg', 'https://www.youtube.com/embed/vC33KSOkmk8', '2020-11-24 07:29:25', 'CrepitarLaHojarasca', ' ', ' ', ' ', ' ', ' ', 'https://pastillasdelabuelo.com.ar/', 0),
(60, 'Los Abuelos de la Nada', '', 'Rock clÃ¡sico', 'Buenos Aires', '1967-1969, 1981-1988', 'Los Abuelos de la Nada fue un supergrupo de rock formado originalmente en 1967 por Miguel Abuelo; en esos entonces la banda incluÃ­a a quienes se convertirÃ­an en mÃºsicos\r\nde gran renombre, tales como Norberto "Pappo" Napolitano, Claudio Gabis y Hector "Pomo" Lorenzo. En sus inicios la banda grabÃ³ tressingles en un estilo de rock psico\r\ndÃ©lico. Sin embargo, no fue hasta la reuniÃ³n de la banda 12 aÃ±os mas tarde, en 1981, que adquirirÃ­an su renombre, tocando un estilo de rock llamado "mÃºsica divertida",\r\nque se asemejaba al rock clÃ¡sico bailable de fines de los \'50 y principios de los \'60, con elementos mÃ¡s modernos. Esta incarnaciÃ³n de la banda incluyÃ³ a mÃºsicos como\r\nAndrÃ©s Calamaro y "Cachorro" LÃ³pez.\r\n\r\nLa banda se separÃ³ finalmente en 1988 tras la muerte de su vocalista y fundador, Miguel Abuelo, a raÃ­z de una enfermedad. Desde entonces la banda ha tenido reuniones\r\nen ocasiones especiales, en forma de homenaje a Abuelo. En su tiempo juntos, la banda logrÃ³ grabar y lanzar 5 Ã¡lbumes de estudio.', 'uploads/artist-img/los_abuelos_de_la_nada_5fbce0d1dada80.20174201.jpg', 'https://www.youtube.com/embed/CUdw-urZ3zg', '2020-11-24 07:30:41', 'CrepitarLaHojarasca', ' ', ' ', ' ', ' ', ' ', ' ', 0),
(61, 'MalÃ³n', '', 'Thrash metal', 'Buenos Aires', '1995-1998, 2001-2002, Desde 2011', 'MalÃ³n se formÃ³ tras la separaciÃ³n de HermÃ©tica, tras que O\'Connor, Strunz y Romano (vocalista, baterista y guitarrista respectivamente) terminaran sus relaciones con\r\nRicardo Iorio (quien entonces formÃ³ Almafuerte). La banda reclutÃ³ a Carlos Cuadrado para la posiciÃ³n de bajista, quien habÃ­a reemplazado a Iorio para algunos recitales\r\nde HermÃ©tica en el pasado. La formaciÃ³n original durÃ³ hasta 1998, aÃ±o en el que la banda se separÃ³ tras la salida de O\'Connor quien creÃ³ su proyecto solitario. La banda\r\nretornÃ³ en 2001 con Eduardo Ezcurra en vocales pero esta line-up duro poco, ya que para 2002 la banda se separÃ³ de nuevo. No fue hasta 2011 que la banda original se re\r\nuniÃ³ finalmente. La banda lanzÃ³ dos Ã¡lbumes en su primera formaciÃ³n, un EP con su segunda, y un tercer Ã¡lbum tras su Ãºltima reuniÃ³n. Desde el 2019 el grupo ha estado\r\nhaciendo tours bajo el nombre "La H No MuriÃ³", tocando canciones de HermÃ©tica.', 'uploads/artist-img/malÃ³n_5fbce11aa4b8c5.88673955.jpg', 'https://www.youtube.com/embed/YSSt-r1GVko', '2020-11-24 07:31:54', 'CrepitarLaHojarasca', ' ', ' ', ' ', 'https://www.facebook.com/oficialmalon', 'https://www.instagram.com/malonbandaoficial/', 'www.malonoficial.com', 0),
(62, 'Plan 4', 'Plan Cuatro', 'Groove metal', 'Buenos Aires', 'Desde 2003', 'Plan 4 es una banda de groove metal y metalcore formada en 2003 de las cenizas de la banda de metal alternativo RaÃ­z. La banda combina un sonido de groove metal similar\r\na Pantera, con sonidos del hardcore punk. El grupo grabÃ³ y lanzÃ³ 5 Ã¡lbumes desde su formaciÃ³n.', 'uploads/artist-img/plan_4_5fbce14844e684.47326979.jpg', 'https://www.youtube.com/embed/Ekv0eJv2F1w', '2020-11-24 07:32:40', 'CrepitarLaHojarasca', ' ', ' ', ' ', ' ', ' ', ' ', 0),
(63, 'V8', '', 'Heavy metal', 'Buenos Aires', '1979-1987, 1996-1997', 'V8 fue una banda de heavy metal considerada por muchos como la primer banda de heavy metal argentina. Conformada por mÃºsicos como Osvaldo Civile y Ricardo Iorio, quienes luego se convertirÃ­an en mÃºsicos de gran renombre en el metal argentino, V8 grabÃ³ y lanzÃ³ 3 Ã¡lbumes a lo largo de sus 7 aÃ±os iniciales de actividad, en los que la banda sufriÃ³ bastantes cambios en sus integrantes, lo que llevÃ³ al grupo separandosÃ© en 1987, dandolÃ© lugar a la creaciÃ³n de bandas como Horcas y HermÃ©tica. V8 es considerada una de las bandas mas importantes del heavy metal argentino y en espaÃ±ol y varias de sus canciones como "DestrucciÃ³n" y "Brigadas metÃ¡licas" se consideran himnos del heavy metal argentino.', 'uploads/artist-img/v8_5fbce1952eecd1.22978246.jpg', 'https://www.youtube.com/embed/Zjm-cf0SFsM', '2020-11-24 07:33:57', 'CrepitarLaHojarasca', ' ', ' ', ' ', ' ', ' ', ' ', 0),
(64, 'HermÃ©tica', 'La H', 'Thrash Metal', 'Buenos Aires', '1987-1994', 'HermÃ©tica fue una banda de metal oriunda de Buenos Aires, activa desde finales de los \'80 hasta mediados de los \'90. Formada por Ricardo Iorio tras la disoluciÃ³n de V8, HermÃ©tica fue una de las bandas pioneras del thrash metal en Argentina, gÃ©nero popularizado mundialmente por bandas como Metallica o Slayer para ese entonces, el estilo mÃºsical de la banda era rÃ¡pido y agresivo, pero conservando los toques del heavy metal clÃ¡sico. Es considerada por muchos fans del metal en espaÃ±ol como una banda de culto. El grupo se separÃ³ en 1994 tras una ruptura en la relaciÃ³n entre Iorio y el resto de los integrantes. Esta separaciÃ³n devino en la formaciÃ³n de Almafuerte por parte de Iorio, y de MalÃ³n por parte del resto de la banda. En sus aÃ±os juntos, HermÃ©tica grabÃ³ 3 Ã¡lbumes de estudio, 1 EP de covers, y lanzÃ³ un Ã¡lbum en vivo, mÃ¡s 3 otros tras su separaciÃ³n y una compilaciÃ³n. La banda compartiÃ³ escenario con Black Sabbath, MotÃ¶rhead, Kiss, Slayer y Pantera.', 'uploads/artist-img/hermÃ©tica_5fbcfe657a8984.89462732.png', 'https://www.youtube.com/embed/a4NcijrLwQw', '2020-11-24 09:36:53', 'lucas', ' ', ' ', ' ', ' ', ' ', ' ', 0),
(65, 'Una razÃ³n para continuar', 'UxRxPxC', 'Hardcore Punk', 'Concordia, Entre RÃ­os', '2012-2017', 'Una razÃ³n para continuar (conocida tambiÃ©n por su acrÃ³nimo UxRxPxC) fue una banda de hardcore y skate punk oriunda de Concordia, Entre RÃ­os. El estilo de la banda comenzÃ³ como hardcore punk regular con su primer Ã¡lbum autotitulado lanzado en 2014. Un aÃ±o despuÃ©s la banda lanzarÃ­a el EP "Carpe Diem" el cual mostrarÃ­a un estilo mu sical mÃ¡s cercano al skate punk, incluyendo elementos del ska y el rock alternativo, con composiciones mÃ¡s elaboradas y originales. La banda se separÃ³ por decisiÃ³n de los miembros en 2017 tras lanzar su segundo y Ãºltimo Ã¡lbum, "La semilla del maÃ±ana".', 'uploads/artist-img/una_razÃ³n_para_continuar_5fbd1a085f26e9.09813963.png', 'https://www.youtube.com/embed/MxiaCPE9AWY', '2020-11-24 11:34:48', 'lucas', ' ', ' ', ' ', ' ', ' ', ' ', 0),
(66, 'Luis Alberto Spinetta', 'Spinetta, El Flaco Spinetta, Banda Spinetta', 'Blues Rock, Rock Progresivo, Jaz', 'Buenos Aires', '1971-2012', 'Luis Alberto Spinetta (1950-2012), tambiÃ©n conocido como "El Flaco" Spinetta, fue un cantante, mÃºsico, compositor, poeta y productor discogrÃ¡fico argentino, considerado uno de los mÃ¡s importantes, cÃ©lebres y respetados mÃºsicos latinoamericanos. EmpezÃ³ su carrera musical en 1967 con su banda de blues rock Almendra, con la que grabÃ³ canciones icÃ³nicas como "Muchacha (ojos de papel)" y "Color humano". Tras la separaciÃ³n inicial de Almendra en 1970, lanzÃ³ su primer Ã¡lbum como solista, "Spinettalandia y sus amigos" en 1971, antes de formar Pescado Rabioso ese mismo aÃ±o, con el que grabarÃ­a en 1973 "Artaud", considerado por muchos el mejor disco de la historia del rock argentino, incluyendo canciones conocidÃ­simas como "Bajan", "Cementerio Club", entre otras. Tras Pescado Rabioso, El Flaco experimentarÃ­a con el jazz primero con su banda Invisible y despuÃºs con Spinetta Jade. Tras reunificar a Almendra temporalmente en 1979 y grabar un Ã¡lbum lanzado en 1980 con el grupo, en 1981 se separarÃ­a definitivamente la banda, y "Luisito" se concentrarÃ­a en Spinetta Jade y su carrera como solista a partir de ese punto, y desde 1984 en adelante solamente en su proyecto solitario, con excepciÃ³n de fines de los \'90 cuando tocÃ³ en "Spinetta y los Socios del Desierto". Luis Alberto Spinetta muriÃ³ en 2012 a raÃ³z de un cancer de pulmÃ³n. A lo largo de su extensa y laureada carrera musical, El Flaco lanzÃ³ 31 Ã¡lbumes de estudio, 7 Ã¡lbumes en directo, tres Ã¡lbumes recopilatorios, y una banda sonora. Dos de sus trabajos fueron lanzados postumamente, y al menos 3 Ã¡lbumes suyos no llegaron a ser realizados, incluyendo una colaboraciÃ³n con Charly GarcÃ­a.', 'uploads/artist-img/luis_alberto_spinetta_5fbd1b2bf32bb0.77739091.png', 'https://www.youtube.com/embed/Ea6Kac-Eayc', '2020-11-24 11:39:39', 'lucas', ' ', ' ', ' ', ' ', ' ', ' ', 0),
(67, 'Soda Stereo', '', 'Rock PsicodÃ©lico', 'Buenos Aires', '1982-1997, 2007', 'Soda Stereo fue una banda de new wave y rock psicodÃ©lico formada en 1982 por Gustavo Cerati, Zeta Bosio y Charly Alberti. Inspirados por bandas como "The Cure" y "The Police", el sonido de Soda Stereo siempre se caracterizÃ³ por sus elementos psicodÃ©licos y modernos, con elementos electrÃ³nicos. La banda es una de las mÃ¡s celebres e importantes de la historia del rock iberoamericano y en espaÃ±ol. Canciones de la banda como "En la ciudad de la furia", "Persiana americana", "Signos" y especialmente "De mÃºsica ligera" son consideradas como himnos del rock argentino e importantes piezas del rock en espaÃ±ol. La banda se separÃ³ en 1997 tras 7 discos de estudio, dando su Ãºltimo recital el 20 de septiembre de 1997, cerrando con la frase icÃ³nica de Gustavo Cerati, "Gracias totales". Este concierto fue grabado y lanzado como un doble CD.', 'uploads/artist-img/soda_stereo_5fbd1bdc43c8f6.12318232.png', 'https://www.youtube.com/embed/OX-us7PEfkc', '2020-11-24 11:42:36', 'lucas', ' ', ' ', ' ', ' ', ' ', ' ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `discos`
--

CREATE TABLE `discos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `tipo` varchar(64) NOT NULL,
  `formatos` enum('','','','','','') NOT NULL,
  `tracklist` enum('','','','','','','','','','','','','','','') NOT NULL,
  `cover` int(11) NOT NULL,
  `comprar` varchar(255) NOT NULL,
  `puntaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lugares`
--

CREATE TABLE `lugares` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `localidad` varchar(64) NOT NULL,
  `domicilio` varchar(255) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `foto` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `puntaje` int(11) NOT NULL,
  `horarioapertura` time NOT NULL,
  `horariocierre` time NOT NULL,
  `creador` varchar(255) NOT NULL,
  `existe` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lugares`
--

INSERT INTO `lugares` (`id`, `nombre`, `localidad`, `domicilio`, `capacidad`, `foto`, `descripcion`, `puntaje`, `horarioapertura`, `horariocierre`, `creador`, `existe`) VALUES
(1, 'Pueblo Viejo', 'Concordia, Entre Ríos', 'Alem 230', 0, 1, 'El Espacio Cultural Pueblo Viejo, es un complejo de 2000 metros cuadrados, ubicado en la Ciudad de Concordia, con una innovadora sala para espectáculos.', 0, '20:00:00', '00:00:00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `rol` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`idRol`, `rol`, `descripcion`, `estado`) VALUES
(1, 'Administrador', 'Acceso total', 1),
(2, 'Encargado de Ventas', 'Acceso a clientes y stock', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `lugar` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `horario` time NOT NULL,
  `artistas` varchar(1024) NOT NULL,
  `descripcion` text NOT NULL,
  `flyer` int(11) NOT NULL,
  `organizador` varchar(255) NOT NULL,
  `creador` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Tabla para shows. Flyer debería ser una imagen.';

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`id`, `nombre`, `lugar`, `fecha`, `horario`, `artistas`, `descripcion`, `flyer`, `organizador`, `creador`) VALUES
(1, 'Rarit2s', 'Plaza Sol, Concordia, Entre Ríos', '2020-11-24', '17:00:00', '- Paulo y Facu\r\n- Dr. Bisman\r\n- No Hay Por Que\r\n- Al-Bähäcä\r\n- La Gandharba Ciega', 'Festival autogestivo de música y arte no convencional.', 0, 'Independiente', ''),
(2, 'Flores Negras - Os Mortos', 'El Surtidor', '2020-02-15', '23:00:00', 'Flores Negras, Os Mortos', 'Retorno de Flores Negras a los escenarios. Abre Os Mortos.', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(128) NOT NULL,
  `pass` varchar(128) NOT NULL,
  `preg_sec` varchar(255) NOT NULL,
  `rspta_sec` varchar(128) NOT NULL,
  `foto` varchar(11) DEFAULT NULL,
  `nombrereal` varchar(255) DEFAULT NULL,
  `fechanacimiento` date DEFAULT NULL,
  `artistasfavoritos` varchar(255) DEFAULT NULL,
  `localidad` varchar(255) DEFAULT NULL,
  `descripcion` text,
  `facebook` varchar(512) DEFAULT NULL,
  `instagram` varchar(512) DEFAULT NULL,
  `twitter` varchar(512) DEFAULT NULL,
  `webpage` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usuario`, `pass`, `preg_sec`, `rspta_sec`, `foto`, `nombrereal`, `fechanacimiento`, `artistasfavoritos`, `localidad`, `descripcion`, `facebook`, `instagram`, `twitter`, `webpage`) VALUES
(12, 'Juani', 'd7f8f7ac0c50bb1cda75cc85e944d120', 'pregunta3', 'Velez', '0', 'Juan Ignacio Núñez', '2002-02-08', 'Alice in Chains, Rise Against, In Mourning', 'Concordia, Entre Ríos', 'Me gusta tocar la viola.', 'https://www.facebook.com/JuaniInChains/', 'https://www.instagram.com/juanoidex/', '', 'http://brutalicidio.blogspot.com/'),
(17, 'CrepitarLaHojarasca', '02972eaaaa4ebcbaf4751da1a08914f2', '57189328f58927269fd43af56036fad7', '80b59917dfdb9f52aab4d7a8369694a0', NULL, 'Juani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'lucas', '1308dfed71297a652cc42a390e211489', '3c86f3e2baadaf86efbb41d70f737f11', 'e17da2153e6c23b3da11ce17765ecb7a', NULL, 'Lucas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bandas`
--
ALTER TABLE `bandas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discos`
--
ALTER TABLE `discos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lugares`
--
ALTER TABLE `lugares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bandas`
--
ALTER TABLE `bandas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `discos`
--
ALTER TABLE `discos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lugares`
--
ALTER TABLE `lugares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
