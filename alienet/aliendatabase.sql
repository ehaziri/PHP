--
-- Database: `aliendatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `aliens_abduction`
--

CREATE TABLE `aliens_abduction` (
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `when_it_happened` varchar(30) DEFAULT NULL,
  `how_long` varchar(30) DEFAULT NULL,
  `how_many` varchar(30) DEFAULT NULL,
  `alien_description` varchar(100) DEFAULT NULL,
  `what_they_did` varchar(100) DEFAULT NULL,
  `fang_spotted` varchar(10) DEFAULT NULL,
  `other` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aliens_abduction`
--

INSERT INTO `aliens_abduction` (`first_name`, `last_name`, `when_it_happened`, `how_long`, `how_many`, `alien_description`, `what_they_did`, `fang_spotted`, `other`, `email`) VALUES
('Sally', 'Jones', '2014-05-11', '1 dite', 'kater', 'te gjelber me gjashte kembe', ' Vetem kemi biseduar dhe kemi luajtur me nje qen', 'po', 'Mund ta kem pare qenin tend. Me kontakto.', 'sally@gregs-list.net'),
('Ridvan', 'Bunjaku', '15.5.2014', '2 dite', '3', 'Te gjelber, te shkurter, me veshe te medhenj', 'Kemi luajtur me nje qen.', '', 'Po lidhemi me MySQL', 'rbunjaku@yahoo.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
