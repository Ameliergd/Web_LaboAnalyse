-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le :  mar. 31 oct. 2017 à 08:35
-- Version du serveur :  5.7.18
-- Version de PHP :  7.0.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Laboratoire_Analyse`
--

-- --------------------------------------------------------

--
-- Structure de la table `analyse`
--

CREATE TABLE `analyse` (
  `idAnalyse` int(11) NOT NULL,
  `idPrelevement` int(11) NOT NULL,
  `nomAnalyse` varchar(30) NOT NULL,
  `resultat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE `medecin` (
  `idMedecin` int(11) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `medecin`
--

INSERT INTO `medecin` (`idMedecin`, `nom`, `prenom`, `email`, `password`) VALUES
(1, 'BOCQUET', 'Bill', 'mail@mail.com', 'password'),
(2, 'Curry', 'Hanna', 'Cum@mattisornarelectus.com', 'password'),
(3, 'Leon', 'Xantha', 'Praesent@parturient.com', 'password'),
(4, 'Leach', 'Lunea', 'eget@adipiscing.edu', 'password'),
(5, 'Levine', 'Travis', 'Duis@arcuMorbisit.net', 'password'),
(6, 'Mayer', 'Risa', 'Donec@dapibus.org', 'password'),
(7, 'Woodard', 'Summer', 'odio.Etiam@penatibus.co.uk', 'password'),
(8, 'Bridges', 'Rebekah', 'Nullam@Maurisvelturpis.edu', 'password'),
(9, 'Contreras', 'Adam', 'tellus@anteipsumprimis.com', 'password'),
(10, 'Simpson', 'Hilel', 'auctor@purusinmolestie.com', 'password'),
(11, 'Rivas', 'Ray', 'mus@mitemporlorem.co.uk', 'password'),
(12, 'Shelton', 'Yen', 'Duis@malesuada.ca', 'password'),
(13, 'Dunlap', 'Bevis', 'congue@telluslorem.co.uk', 'password'),
(14, 'Hess', 'Serina', 'quis@dolor.org', 'password'),
(15, 'Gibbs', 'Dale', 'semper.Nam@iaculis.net', 'password'),
(16, 'Gregory', 'Jason', 'enim@velvulputateeu.com', 'password'),
(17, 'Preston', 'Nyssa', 'leo.in.lobortis@Nunc.net', 'password'),
(18, 'Madden', 'Inez', 'dis.parturient@rhoncus.edu', 'password'),
(19, 'Hendrix', 'Ahmed', 'ac@euodio.co.uk', 'password'),
(20, 'Booth', 'Slade', 'congue.a@adipiscingMauris.net', 'password'),
(21, 'Walters', 'Georgia', 'libero@nonluctussit.co.uk', 'password'),
(22, 'Banks', 'Quintessa', 'mi.eleifend@arcuSedeu.edu', 'password'),
(23, 'Rush', 'Xantha', 'Praesent@pede.ca', 'password'),
(24, 'Mclean', 'Finn', 'sed@liberoProin.org', 'password'),
(25, 'Morgan', 'Akeem', 'Sed@tempus.org', 'password'),
(26, 'Dunlap', 'Chastity', 'tortor@ac.net', 'password'),
(27, 'Hawkins', 'Macaulay', 'vel.mauris@adipiscingnon.com', 'password'),
(28, 'Santiago', 'Carlos', 'elit@velesttempor.ca', 'password'),
(29, 'Hardy', 'Hollee', 'amet@Praesentluctus.org', 'password'),
(30, 'Mcdonald', 'Jermaine', 'elit.Nulla@pretium.edu', 'password'),
(31, 'Frank', 'Lillian', 'mi.lorem@sociis.org', 'password'),
(32, 'Willis', 'Hakeem', 'dui.semper@ultricesDuis.com', 'password'),
(33, 'Kirkland', 'Halee', 'non.bibendum@elementumat.edu', 'password'),
(34, 'Carson', 'Phyllis', 'eros.nec@Aliquam.org', 'password'),
(35, 'Mcmahon', 'Ashton', 'auctor.velit@laoreetipsum.com', 'password');

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `idPatient` int(11) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `sexe` varchar(1) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `num_secu` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`idPatient`, `nom`, `prenom`, `sexe`, `age`, `email`, `password`, `num_secu`) VALUES
(1, 'Parrish', 'Declan', 'F', 27, 'vitae@Uttinciduntorci.co.uk', 'password', 'B8F07987-4E52-A9E3-4073-8DF0F3B63780'),
(2, 'Page', 'Harper', 'M', 17, 'elit@porttitor.com', 'password', '3D779392-D53B-B4AC-302D-6EAC7A1F62BE'),
(3, 'Lowe', 'Carson', 'F', 34, 'luctus@convalliserat.ca', 'password', '4C369F71-1010-721D-D42F-2B93CCFFA373'),
(4, 'Herrera', 'Regan', 'M', 42, 'turpis@nuncIn.net', 'password', '3F8A3245-182C-99C0-2B91-9EFC22BB8755'),
(5, 'Beard', 'Alyssa', 'M', 35, 'magna.Lorem.ipsum@molestie.co.uk', 'password', 'D9EEAE3E-7B9B-30C2-F585-27A7233EBEAC'),
(6, 'Savage', 'Amery', 'F', 50, 'arcu@maurissagittis.com', 'password', 'DE49DC92-B300-B9AD-0C61-48196F0DB51F'),
(7, 'Wynn', 'Lana', 'F', 43, 'neque.vitae@velarcu.com', 'password', 'BCADC9B7-5812-519D-6D67-4FDEE7CBEEB7'),
(8, 'Morin', 'Robert', 'M', 52, 'ultrices.sit@scelerisque.ca', 'password', '4FB666D4-CA24-FFDD-D3FB-9839887420E7'),
(9, 'Dejesus', 'Nicole', 'M', 17, 'a.feugiat@tinciduntcongue.net', 'password', '858BEA16-4908-E3AB-804D-9B6E3987A508'),
(10, 'Booker', 'Molly', 'F', 29, 'commodo@egestaslacinia.net', 'password', 'F4ECB68E-2AB3-25C9-19D9-F5AE1F2A890D'),
(11, 'Hooper', 'Zachary', 'F', 18, 'semper.rutrum.Fusce@nuncestmollis.net', 'password', '936437A0-A584-064F-D4DF-F8DB20ED7A59'),
(12, 'Hammond', 'Laurel', 'F', 45, 'magnis@eu.edu', 'password', 'B818C553-C8A9-8D7D-B118-643F204D4D35'),
(13, 'Robinson', 'Alec', 'M', 44, 'gravida@augueutlacus.net', 'password', '343F34DF-94D5-6420-567B-6CA391785550'),
(14, 'Barron', 'Brett', 'M', 49, 'rutrum@Vivamus.net', 'password', 'FFDBA739-86E4-AB0E-CE61-E84D28756ED5'),
(15, 'Blake', 'Colleen', 'F', 23, 'sagittis.augue@risusNuncac.co.uk', 'password', 'FE3EAC43-F5CC-D15B-9D6A-6113C36D4DDB'),
(16, 'Sanchez', 'Neville', 'F', 35, 'ipsum@eratVivamusnisi.net', 'password', 'E5F7B2F9-E0E9-8EF8-1C52-845DC7DD5B39'),
(17, 'Lawrence', 'Shafira', 'M', 15, 'at.sem.molestie@aliquet.org', 'password', 'B0E730CB-0A1E-1389-B5A0-3DAA79C2C63B'),
(18, 'Stephenson', 'Blake', 'F', 11, 'leo@Donecluctus.org', 'password', '0FC3AA4D-B6D9-FD8E-F7BA-9F2DD599378F'),
(19, 'Olsen', 'Roary', 'M', 25, 'tellus.Aenean@dictumeueleifend.net', 'password', '30BC5AC0-4055-1444-3046-39A427DBDC46'),
(20, 'Vazquez', 'Jemima', 'F', 17, 'aliquam.adipiscing.lacus@erosnon.ca', 'password', '5254B76F-3D2D-B297-7E82-43417AD7D920'),
(21, 'Nelson', 'Charissa', 'F', 24, 'Donec@etmalesuada.edu', 'password', '952ED4D9-C072-817D-CB6A-323B1E763A2C'),
(22, 'Wong', 'Jared', 'M', 27, 'arcu@duiSuspendisseac.co.uk', 'password', 'ABF3C6F1-33FC-0F60-8C15-5C32B46B9378'),
(23, 'Lawrence', 'Tara', 'M', 50, 'ultricies.ligula@orci.co.uk', 'password', 'F88C2CC1-2DCF-3061-2092-3333DDBA0DD1'),
(24, 'Albert', 'Carlos', 'F', 49, 'cursus.Nunc@nonjusto.net', 'password', 'B6C42211-5DB0-1D48-C8BD-D62696597FA4'),
(25, 'Barlow', 'Vladimir', 'F', 38, 'egestas@etpedeNunc.edu', 'password', 'ACB9836F-A02E-9742-7B15-1E4FE552950E'),
(26, 'Stephenson', 'Eleanor', 'F', 37, 'Ut@sedturpisnec.ca', 'password', '9651C694-8987-32F6-2001-E314DAA3B0DB'),
(27, 'Zimmerman', 'Gavin', 'M', 32, 'nec@Crasvulputatevelit.co.uk', 'password', '66C1F582-4208-5D7F-7857-0955A7D8B2A4'),
(28, 'Nielsen', 'Joshua', 'M', 10, 'justo@nuncullamcorper.edu', 'password', '333B47AD-111F-BE1F-3C39-3621ECCD5790'),
(29, 'Gardner', 'Jacqueline', 'F', 25, 'dapibus.ligula.Aliquam@lobortismauris.co.uk', 'password', 'D2C9726B-36CD-A075-D0D4-4C2760523E9C'),
(30, 'Schwartz', 'Dawn', 'F', 18, 'velit@nuncsed.net', 'password', 'B2526C0F-9DC8-D39B-B726-3FA60894EB84'),
(31, 'Mitchell', 'Gabriel', 'F', 57, 'sociis.natoque@at.co.uk', 'password', 'F2AFC2E6-18DA-1588-640B-A9D14403241E'),
(32, 'Irwin', 'Hyacinth', 'M', 15, 'montes.nascetur.ridiculus@estMauriseu.edu', 'password', '767B2CE7-2520-AA7A-AD5E-E59446C763DB'),
(33, 'Davenport', 'Chester', 'F', 25, 'consequat@acturpis.com', 'password', '3A14683C-38FC-6CA1-73DB-880FB4BD9386'),
(34, 'Dotson', 'Castor', 'F', 20, 'ut.nisi.a@gravida.org', 'password', '1B58AC5F-4885-0064-C23C-DDD870EB6A86'),
(35, 'Goff', 'Wyatt', 'M', 32, 'quam.dignissim@nonummyac.net', 'password', '73037E8F-64C7-822F-CC1F-13E49B9BD803'),
(36, 'Preston', 'Branden', 'M', 37, 'lorem.luctus.ut@malesuadafames.net', 'password', '3260EF09-1BAA-F38D-80F6-FEAC14670BDC'),
(37, 'Salazar', 'Summer', 'M', 39, 'tempus@nonummyac.ca', 'password', '753028CC-F619-2DCE-CFA1-1B19DC6825A5'),
(38, 'Kidd', 'Leigh', 'M', 17, 'sociis.natoque@iaculisenimsit.co.uk', 'password', '3057E3CD-027D-1191-4026-2FA801A5E17D'),
(39, 'Hutchinson', 'Abra', 'M', 59, 'nascetur.ridiculus@Fusce.edu', 'password', '894F4920-C1C7-DF87-21CB-D361AA0C4CAB'),
(40, 'Waller', 'Brenden', 'F', 36, 'Vestibulum.ante@dignissim.edu', 'password', '33775973-EA67-7C39-7ACA-764E764C0ABB'),
(41, 'Vinson', 'Rina', 'M', 26, 'orci.consectetuer@luctus.net', 'password', '4D17D7C8-3A17-4FAD-6E7A-3BA2AD676F7D'),
(42, 'Wright', 'Baker', 'M', 29, 'leo.Vivamus@quisturpisvitae.net', 'password', '1590C992-10FF-E394-6098-289B41E6CCE3'),
(43, 'Hines', 'Xerxes', 'M', 56, 'et.magna.Praesent@Aeneaneget.net', 'password', '3FFDF1DB-2B67-9AD3-447D-FD16E8B03C95'),
(44, 'Roberson', 'Quintessa', 'M', 30, 'tellus@fringillapurusmauris.org', 'password', 'A59BC832-3F67-C7DE-3A07-4E24DDB52EEB'),
(45, 'Wells', 'Devin', 'M', 59, 'non@Proin.co.uk', 'password', 'BFF362C0-1264-DB30-2758-0F46B57B8BF1'),
(46, 'Bowman', 'Hammett', 'F', 51, 'eu.odio@vitaerisusDuis.edu', 'password', 'B96DEC5A-A085-4B0C-2D1E-CBBCE73EA1D0'),
(47, 'Pierce', 'Angelica', 'M', 51, 'ligula.elit.pretium@fermentumconvallisligula.org', 'password', 'C6FAC733-E666-07EC-9BC9-BAB5DEC5AD29'),
(48, 'Valentine', 'Gabriel', 'M', 36, 'Donec.feugiat.metus@arcuMorbi.org', 'password', '9C8C0516-82E4-B8F3-3461-C5875C7E3A60'),
(49, 'Skinner', 'Hoyt', 'F', 18, 'ipsum.Phasellus.vitae@elitsed.org', 'password', 'A2894AA9-D0D5-15E9-83D1-46764F9327B5'),
(50, 'Roberts', 'Quinlan', 'F', 37, 'molestie.arcu.Sed@Nullam.org', 'password', '384CBD06-4886-B4BC-6E37-C8ACD8B3A2A6'),
(51, 'Medina', 'Rebekah', 'F', 18, 'Nulla.semper.tellus@pretiumetrutrum.com', 'password', 'F3A6B4D8-5ED1-AB89-AC00-D46DE3684BE1'),
(52, 'Newton', 'Forrest', 'F', 50, 'vel.faucibus.id@duilectusrutrum.edu', 'password', '2A1FA7FA-806C-01AB-34D3-88F50415F0CC'),
(53, 'Morgan', 'Noel', 'F', 12, 'et.ipsum.cursus@iaculis.org', 'password', 'E65F9DFD-7E1E-D137-88BA-BE541F05C8AF'),
(54, 'Rios', 'Lisandra', 'M', 21, 'elit.pede@sagittis.org', 'password', '7385DCB2-A045-8358-105E-970571673582'),
(55, 'Suarez', 'Reese', 'M', 26, 'dui.quis.accumsan@cursus.net', 'password', '110EE4AF-8C6B-B5B0-076B-3737CC0FE0C1'),
(56, 'Freeman', 'Macey', 'F', 60, 'turpis@Fuscediamnunc.edu', 'password', '77BB3A88-FB05-FD7D-2A0E-C460F8579D32'),
(57, 'Steele', 'Rose', 'M', 58, 'et@sapiencursusin.co.uk', 'password', '2F3F767B-0A20-3E2E-CD26-9E5C0EEC2ED7'),
(58, 'Drake', 'Brian', 'F', 29, 'Nunc@fringillaornareplacerat.org', 'password', '519A6725-4F00-B304-6A9F-96AF992820B2'),
(59, 'Puckett', 'Ivan', 'M', 44, 'a.arcu@cursuseteros.co.uk', 'password', 'F0637C76-3452-330D-D951-A029DA97137A'),
(60, 'Mckee', 'Dakota', 'F', 51, 'ligula.Aenean.euismod@sedorcilobortis.org', 'password', '25A2FE0B-8116-7B41-73BB-8831D63A94B7'),
(61, 'Townsend', 'Baxter', 'M', 47, 'pede.Suspendisse@sapienmolestieorci.ca', 'password', 'A44571D9-8752-D585-8B7F-5E0DA973717E'),
(62, 'Donovan', 'Unity', 'F', 12, 'nulla@vel.co.uk', 'password', 'DABCD18B-73D8-4ACB-57F4-2854D311BDB5'),
(63, 'Cobb', 'Aurelia', 'F', 45, 'Duis.a.mi@risusodio.ca', 'password', '0245B44B-785E-955B-EBC9-01E53DB826F4'),
(64, 'Blevins', 'Iona', 'F', 31, 'Curabitur.massa.Vestibulum@tristiquealiquetPhasellus.com', 'password', '719B310B-EFDE-D7AE-2939-B996DFF6E83E'),
(65, 'Delaney', 'Juliet', 'M', 31, 'vel@doloregestasrhoncus.edu', 'password', 'B8352EFB-7010-370B-8FB0-4375E1147A0C'),
(66, 'Walker', 'Reece', 'M', 34, 'venenatis.lacus.Etiam@euismod.net', 'password', 'AEC67DB1-397E-18F8-0749-6D281686821C'),
(67, 'Nichols', 'Armand', 'M', 40, 'diam@molestiearcu.ca', 'password', '4A7E99B2-88B1-59B4-EDD3-F130C1D0306A'),
(68, 'Love', 'Alisa', 'F', 38, 'netus.et@nunc.org', 'password', 'D46D7BB5-AA03-BCC0-6428-B941C2E01FBB'),
(69, 'Horton', 'Indira', 'F', 27, 'id.enim@Duiselementum.com', 'password', 'BB73F9DB-81E3-0A22-BF69-A001C24F3983'),
(70, 'Lowe', 'Knox', 'M', 14, 'ante.iaculis@pellentesquetellus.com', 'password', '93A1C080-07A4-F34B-1CA0-5268EA6AF459'),
(71, 'Wilkinson', 'Mannix', 'M', 23, 'luctus.felis.purus@faucibusMorbi.com', 'password', '4BD53B34-7669-4339-3AC8-3305377CBE9E'),
(72, 'Dotson', 'Geoffrey', 'F', 55, 'placerat.orci.lacus@aliquetdiamSed.net', 'password', '3AB6202B-2CD5-6DC5-FCAA-68128C250131'),
(73, 'Waters', 'Addison', 'M', 55, 'varius.Nam.porttitor@et.co.uk', 'password', 'E5B4D2A6-39A8-F793-EEBB-6F0946FE47F2'),
(74, 'Bishop', 'Tashya', 'M', 34, 'nec@elit.edu', 'password', '65DA0626-1998-7A76-BAB5-E0C7CDB5D2AD'),
(75, 'Strickland', 'Brian', 'M', 13, 'ante.dictum@neccursusa.co.uk', 'password', '1EEE03AF-902D-CF02-C1CB-73F686C033C4'),
(76, 'Burton', 'Jared', 'M', 43, 'dictum.sapien.Aenean@egetvenenatisa.org', 'password', 'B0713845-F485-DE13-15F5-52E5CB12ABCF'),
(77, 'David', 'Len', 'M', 14, 'feugiat.Lorem.ipsum@ipsumsodalespurus.net', 'password', '70C5DD50-1D38-1B2E-57BE-C02104B9A0E1'),
(78, 'James', 'Asher', 'M', 54, 'mollis@Suspendisse.org', 'password', 'F1C5DCD2-1E55-E2DB-757E-43D9A3D29900'),
(79, 'Knox', 'Lev', 'F', 45, 'leo.in@auctorodioa.co.uk', 'password', 'BFF6BFC7-D8FA-7141-4335-9BD28BC7C8FF'),
(80, 'Mathews', 'Silas', 'M', 54, 'malesuada.fames@Duisac.org', 'password', 'B2F8876D-BA01-34A3-68B1-DB7FF17863C0'),
(81, 'Garner', 'Aristotle', 'F', 33, 'in@Cras.edu', 'password', '728E8882-C711-0B3E-4009-CF924C6C7C5D'),
(82, 'Goodwin', 'Rebecca', 'M', 49, 'tempus@Morbi.co.uk', 'password', 'D9529D53-D1E4-7926-D06F-8C25BB8BB3B7'),
(83, 'Butler', 'Ivor', 'F', 49, 'ac@nisinibhlacinia.ca', 'password', '5BC4334C-147F-12CB-751D-3B74A8E748AF'),
(84, 'Owen', 'Bruno', 'F', 48, 'in.felis.Nulla@sodales.ca', 'password', '2942AE5E-CF70-6DA6-03A6-2303C301723D'),
(85, 'Bender', 'Igor', 'F', 43, 'varius@auctorullamcorpernisl.net', 'password', '9C8BB37F-47FC-4978-1E22-753293DDCCE2'),
(86, 'Joyce', 'Vanna', 'F', 50, 'eu@sempertellus.co.uk', 'password', '55B9110B-6694-5999-6887-FF61A2E75D62'),
(87, 'Bird', 'Porter', 'F', 17, 'per.conubia@adipiscingelit.co.uk', 'password', '3D24ED23-FE65-4766-EF81-0C55716D1359'),
(88, 'Lindsay', 'Kiayada', 'F', 17, 'imperdiet.nec@Sed.edu', 'password', 'B52FF318-173C-D13D-5DFF-298A30C5B731'),
(89, 'West', 'Mark', 'F', 41, 'eget.venenatis@semsemper.org', 'password', 'A73BF2E4-FBBE-FCE8-9F89-49E6291576F2'),
(90, 'Byrd', 'Rylee', 'F', 20, 'lobortis.Class@etmagnis.net', 'password', '0A2EE27D-7B08-6026-6ED8-3F63E9D8344C'),
(91, 'Manning', 'Bethany', 'M', 49, 'gravida@suscipitestac.org', 'password', '5C5AF69F-DDF6-6F7D-712D-B43226592951'),
(92, 'Edwards', 'Amir', 'F', 15, 'molestie@egestas.edu', 'password', 'F7A99E2B-4ECD-A44D-E07E-F68B149776E9'),
(93, 'Lopez', 'Adele', 'M', 56, 'arcu.Sed.et@lectusa.org', 'password', 'E1C601D5-6A06-E353-313F-E1B368B6C341'),
(94, 'Hawkins', 'Brady', 'M', 27, 'euismod.et@vitaesodales.edu', 'password', 'A88FEDB8-4523-24D5-3759-B3B89B6EB1BD'),
(95, 'Lara', 'Ahmed', 'F', 23, 'pede.Nunc.sed@Intinciduntcongue.ca', 'password', 'D85DC9F0-107C-DD89-6CDF-0B45762ED251'),
(96, 'Brooks', 'Colin', 'M', 42, 'blandit.Nam@tempor.ca', 'password', '221F992A-50A5-A2DA-F32A-7938CD0AE11E'),
(97, 'Whitehead', 'Wing', 'M', 34, 'non@laoreetposuere.org', 'password', '755D289F-7994-0EC3-4B19-C91FE7172E45'),
(98, 'Kennedy', 'Graiden', 'M', 40, 'Nunc@molestie.org', 'password', '00845102-5E61-A4E8-3FFA-C56949D6837F'),
(99, 'Owens', 'Renee', 'F', 19, 'mauris.sagittis@ornarefacilisis.co.uk', 'password', '74F55F11-29A8-B700-44AD-EEE2ABDD2E87'),
(100, 'King', 'Vladimir', 'F', 25, 'est.Nunc.ullamcorper@at.org', 'password', 'EA2A1824-B4E9-65F2-72B0-773B2BCB4A48');

-- --------------------------------------------------------

--
-- Structure de la table `prelevement`
--

CREATE TABLE `prelevement` (
  `idPrelevement` int(11) NOT NULL,
  `idPatient` int(11) NOT NULL,
  `idMedecin` int(11) NOT NULL,
  `datePrel` date NOT NULL,
  `typePrel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `prelevement`
--

INSERT INTO `prelevement` (`idPrelevement`, `idPatient`, `idMedecin`, `datePrel`, `typePrel`) VALUES
(1, 71, 8, '2018-03-29', 'Peaux'),
(2, 61, 34, '2018-10-07', 'Selles'),
(3, 55, 34, '2018-07-17', 'Peaux'),
(4, 73, 5, '2016-11-15', 'Urine'),
(5, 32, 32, '2017-02-25', 'Cheveux'),
(6, 95, 9, '2017-02-23', 'Sang'),
(7, 32, 21, '2018-01-31', 'Sang'),
(8, 41, 28, '2018-07-05', 'Selles'),
(9, 53, 18, '2018-09-27', 'Sang'),
(10, 75, 28, '2018-03-11', 'Selles'),
(11, 51, 1, '2018-05-04', 'Selles'),
(12, 30, 21, '2017-03-16', 'Urine'),
(13, 22, 22, '2017-10-24', 'Peaux'),
(14, 82, 21, '2017-08-03', 'Sang'),
(15, 27, 6, '2018-07-04', 'Peaux'),
(16, 89, 24, '2017-07-26', 'Peaux'),
(17, 49, 4, '2018-07-21', 'Peaux'),
(18, 61, 11, '2017-11-15', 'Selles'),
(19, 7, 9, '2018-06-20', 'Sang'),
(20, 44, 24, '2018-09-09', 'Peaux'),
(21, 64, 26, '2018-05-21', 'Selles'),
(22, 69, 16, '2018-05-15', 'Peaux'),
(23, 8, 17, '2017-07-22', 'Cheveux'),
(24, 69, 17, '2017-08-23', 'Salive'),
(25, 12, 4, '2017-09-21', 'Cheveux'),
(26, 54, 9, '2018-08-08', 'Salive'),
(27, 39, 32, '2017-11-11', 'Urine'),
(28, 19, 14, '2017-10-21', 'Peaux'),
(29, 84, 13, '2017-04-02', 'Selles'),
(30, 15, 23, '2017-11-18', 'Peaux'),
(31, 43, 4, '2017-06-21', 'Sang'),
(32, 41, 29, '2017-12-28', 'Selles'),
(33, 33, 16, '2018-01-04', 'Selles'),
(34, 7, 7, '2018-08-14', 'Salive'),
(35, 46, 35, '2018-07-02', 'Selles'),
(36, 92, 20, '2017-09-17', 'Sang'),
(37, 74, 27, '2017-01-29', 'Selles'),
(38, 58, 22, '2018-06-28', 'Cheveux'),
(39, 97, 25, '2017-05-01', 'Salive'),
(40, 59, 3, '2018-09-02', 'Cheveux'),
(41, 57, 26, '2018-06-19', 'Salive'),
(42, 71, 6, '2018-09-29', 'Selles'),
(43, 71, 10, '2018-06-21', 'Selles'),
(44, 26, 20, '2018-06-28', 'Urine'),
(45, 32, 14, '2017-10-12', 'Cheveux'),
(46, 11, 3, '2018-01-18', 'Selles'),
(47, 60, 33, '2018-09-01', 'Selles'),
(48, 54, 20, '2018-06-16', 'Urine'),
(49, 37, 31, '2018-03-18', 'Selles'),
(50, 11, 26, '2017-12-22', 'Urine'),
(51, 92, 14, '2016-11-05', 'Selles'),
(52, 16, 10, '2017-12-18', 'Peaux'),
(53, 96, 13, '2018-04-16', 'Cheveux'),
(54, 83, 11, '2018-08-03', 'Selles'),
(55, 49, 26, '2018-01-04', 'Sang'),
(56, 89, 9, '2018-03-04', 'Sang'),
(57, 18, 35, '2016-11-26', 'Sang'),
(58, 7, 9, '2018-02-09', 'Salive'),
(59, 52, 25, '2016-12-02', 'Selles'),
(60, 27, 3, '2017-09-23', 'Urine'),
(61, 3, 28, '2016-12-31', 'Salive'),
(62, 62, 24, '2018-08-25', 'Peaux'),
(63, 40, 35, '2017-05-02', 'Sang'),
(64, 15, 5, '2017-11-06', 'Peaux'),
(65, 59, 14, '2017-06-02', 'Urine'),
(66, 48, 22, '2018-09-28', 'Selles'),
(67, 51, 17, '2016-12-19', 'Urine'),
(68, 58, 16, '2018-08-05', 'Urine'),
(69, 59, 20, '2017-01-15', 'Salive'),
(70, 76, 24, '2018-03-25', 'Urine'),
(71, 96, 20, '2017-12-10', 'Urine'),
(72, 24, 21, '2018-10-08', 'Salive'),
(73, 8, 19, '2018-10-01', 'Cheveux'),
(74, 3, 2, '2018-05-29', 'Cheveux'),
(75, 91, 7, '2017-08-05', 'Selles'),
(76, 63, 18, '2018-04-18', 'Cheveux'),
(77, 27, 21, '2016-12-02', 'Sang'),
(78, 88, 7, '2017-10-02', 'Cheveux'),
(79, 78, 8, '2017-04-19', 'Sang'),
(80, 82, 35, '2017-08-27', 'Sang'),
(81, 99, 14, '2018-03-15', 'Urine'),
(82, 19, 35, '2017-05-29', 'Urine'),
(83, 85, 14, '2017-05-29', 'Salive'),
(84, 55, 33, '2017-12-04', 'Peaux'),
(85, 75, 25, '2018-07-31', 'Salive'),
(86, 99, 14, '2018-08-11', 'Salive'),
(87, 50, 34, '2017-11-04', 'Urine'),
(88, 5, 19, '2018-05-29', 'Urine'),
(89, 43, 8, '2017-09-22', 'Sang'),
(90, 9, 30, '2017-08-18', 'Cheveux'),
(91, 58, 21, '2018-10-07', 'Sang'),
(92, 13, 34, '2017-05-14', 'Selles'),
(93, 52, 9, '2017-03-28', 'Sang'),
(94, 93, 19, '2018-10-03', 'Salive'),
(95, 13, 19, '2017-08-12', 'Cheveux'),
(96, 10, 28, '2017-03-05', 'Selles'),
(97, 55, 10, '2018-08-30', 'Sang'),
(98, 23, 4, '2018-02-20', 'Selles'),
(99, 42, 2, '2017-04-29', 'Sang'),
(100, 45, 17, '2017-03-25', 'Salive'),
(101, 51, 14, '2018-05-17', 'Peaux'),
(102, 96, 28, '2018-01-10', 'Cheveux'),
(103, 88, 4, '2017-09-10', 'Salive'),
(104, 32, 28, '2018-08-23', 'Urine'),
(105, 70, 21, '2016-11-01', 'Selles'),
(106, 63, 25, '2016-11-27', 'Urine'),
(107, 98, 16, '2016-12-28', 'Salive'),
(108, 36, 27, '2017-08-01', 'Urine'),
(109, 73, 2, '2018-08-27', 'Cheveux'),
(110, 48, 16, '2017-12-25', 'Salive'),
(111, 82, 20, '2017-11-11', 'Cheveux'),
(112, 45, 3, '2016-12-13', 'Peaux'),
(113, 43, 13, '2017-07-16', 'Cheveux'),
(114, 92, 23, '2018-02-03', 'Urine'),
(115, 75, 25, '2018-03-11', 'Sang'),
(116, 42, 24, '2018-10-15', 'Salive'),
(117, 50, 32, '2017-08-26', 'Salive'),
(118, 38, 18, '2018-08-05', 'Salive'),
(119, 60, 33, '2017-08-12', 'Selles'),
(120, 62, 24, '2018-05-20', 'Salive'),
(121, 40, 23, '2017-05-20', 'Salive'),
(122, 15, 33, '2018-04-01', 'Peaux'),
(123, 77, 17, '2018-07-09', 'Urine'),
(124, 83, 21, '2018-05-19', 'Urine'),
(125, 8, 33, '2018-06-06', 'Salive'),
(126, 55, 2, '2017-03-05', 'Sang'),
(127, 97, 3, '2018-01-15', 'Peaux'),
(128, 6, 17, '2017-10-12', 'Salive'),
(129, 94, 10, '2016-11-08', 'Sang'),
(130, 63, 30, '2018-07-23', 'Salive'),
(131, 64, 16, '2018-04-22', 'Sang'),
(132, 71, 21, '2016-12-27', 'Cheveux'),
(133, 41, 34, '2017-10-04', 'Sang'),
(134, 3, 10, '2018-04-03', 'Urine'),
(135, 17, 8, '2018-07-15', 'Peaux'),
(136, 8, 7, '2018-07-19', 'Selles'),
(137, 29, 19, '2018-07-22', 'Selles'),
(138, 29, 33, '2018-03-10', 'Selles'),
(139, 37, 16, '2018-04-01', 'Peaux'),
(140, 44, 22, '2017-03-02', 'Selles'),
(141, 92, 9, '2018-04-16', 'Salive'),
(142, 93, 16, '2017-10-18', 'Selles'),
(143, 71, 34, '2017-08-01', 'Peaux'),
(144, 55, 11, '2017-10-07', 'Cheveux'),
(145, 84, 1, '2017-11-30', 'Sang'),
(146, 93, 27, '2017-05-21', 'Urine'),
(147, 79, 5, '2018-02-18', 'Sang'),
(148, 74, 33, '2017-02-14', 'Selles'),
(149, 45, 33, '2018-02-20', 'Salive'),
(150, 54, 8, '2018-03-07', 'Salive'),
(151, 46, 28, '2017-05-13', 'Selles'),
(152, 52, 8, '2018-04-22', 'Selles'),
(153, 91, 33, '2018-04-06', 'Urine'),
(154, 48, 21, '2018-08-11', 'Peaux'),
(155, 36, 29, '2017-09-27', 'Peaux'),
(156, 94, 27, '2018-05-26', 'Urine'),
(157, 37, 5, '2017-10-07', 'Cheveux'),
(158, 45, 1, '2018-04-29', 'Salive'),
(159, 13, 4, '2017-10-23', 'Urine'),
(160, 78, 11, '2018-01-19', 'Selles'),
(161, 55, 20, '2018-01-12', 'Peaux'),
(162, 18, 9, '2017-07-19', 'Selles'),
(163, 82, 35, '2018-01-05', 'Peaux'),
(164, 46, 31, '2018-03-04', 'Selles'),
(165, 73, 14, '2018-02-27', 'Sang'),
(166, 100, 1, '2018-09-07', 'Sang'),
(167, 96, 13, '2017-12-17', 'Selles'),
(168, 41, 23, '2017-04-06', 'Peaux'),
(169, 15, 10, '2018-06-01', 'Urine'),
(170, 28, 18, '2017-05-10', 'Urine'),
(171, 52, 28, '2018-02-08', 'Peaux'),
(172, 77, 29, '2017-06-11', 'Selles'),
(173, 51, 16, '2018-03-22', 'Selles'),
(174, 14, 25, '2017-05-11', 'Sang'),
(175, 65, 8, '2017-03-20', 'Peaux'),
(176, 63, 29, '2018-01-25', 'Selles'),
(177, 86, 10, '2018-01-29', 'Peaux'),
(178, 58, 13, '2017-07-25', 'Urine'),
(179, 52, 23, '2017-11-27', 'Salive'),
(180, 89, 28, '2018-08-31', 'Salive'),
(181, 40, 7, '2017-05-15', 'Selles'),
(182, 65, 2, '2017-09-25', 'Selles'),
(183, 2, 32, '2016-12-03', 'Salive'),
(184, 21, 25, '2018-01-22', 'Peaux'),
(185, 52, 14, '2017-07-17', 'Peaux'),
(186, 8, 18, '2017-12-02', 'Selles'),
(187, 35, 5, '2017-10-25', 'Selles'),
(188, 37, 8, '2018-01-12', 'Urine'),
(189, 14, 35, '2016-12-31', 'Selles'),
(190, 84, 25, '2017-04-06', 'Peaux'),
(191, 1, 2, '2018-01-17', 'Cheveux'),
(192, 36, 19, '2018-05-20', 'Cheveux'),
(193, 65, 16, '2016-11-21', 'Cheveux'),
(194, 93, 22, '2018-01-29', 'Cheveux'),
(195, 71, 22, '2017-12-17', 'Salive'),
(196, 56, 4, '2017-01-07', 'Selles'),
(197, 41, 13, '2018-08-13', 'Peaux'),
(198, 80, 15, '2017-12-24', 'Cheveux'),
(199, 63, 3, '2018-09-26', 'Sang'),
(200, 65, 13, '2017-09-28', 'Salive');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `analyse`
--
ALTER TABLE `analyse`
  ADD PRIMARY KEY (`idAnalyse`),
  ADD KEY `pk_id_prelevement` (`idPrelevement`);

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`idMedecin`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`idPatient`);

--
-- Index pour la table `prelevement`
--
ALTER TABLE `prelevement`
  ADD PRIMARY KEY (`idPrelevement`),
  ADD KEY `pk_id_medecin` (`idMedecin`),
  ADD KEY `pk_id_patient` (`idPatient`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `analyse`
--
ALTER TABLE `analyse`
  MODIFY `idAnalyse` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `medecin`
--
ALTER TABLE `medecin`
  MODIFY `idMedecin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `idPatient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT pour la table `prelevement`
--
ALTER TABLE `prelevement`
  MODIFY `idPrelevement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `analyse`
--
ALTER TABLE `analyse`
  ADD CONSTRAINT `pk_id_prelevement` FOREIGN KEY (`idPrelevement`) REFERENCES `prelevement` (`idPrelevement`) ON DELETE CASCADE;

--
-- Contraintes pour la table `prelevement`
--
ALTER TABLE `prelevement`
  ADD CONSTRAINT `pk_id_medecin` FOREIGN KEY (`idMedecin`) REFERENCES `medecin` (`idMedecin`) ON DELETE CASCADE,
  ADD CONSTRAINT `pk_id_patient` FOREIGN KEY (`idPatient`) REFERENCES `patient` (`idPatient`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
