
DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`id`, `category_id`, `title`)
VALUES
	(1,5,'AJAX'),
	(2,5,'PSV'),
	(3,5,'AZ'),
	(5,NULL,'sport'),
	(6,NULL,'weer'),
	(7,6,'regen'),
	(8,6,'zon'),
	(9,NULL,'Techniek'),
	(10,NULL,'Media');

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_url` varchar(255) NOT NULL DEFAULT '-',
  `title` varchar(255) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `message` text NOT NULL,
  `image_source` varchar(255) NOT NULL DEFAULT '',
  `publish_date` datetime DEFAULT NULL,
  `creation_date` datetime NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `post_url`, `title`, `intro`, `message`, `image_source`, `publish_date`, `creation_date`, `last_updated`)
VALUES
	(1,1,2,'Opvolger_De_Boer_hoeft_geen_oud-speler_van_Ajax_te_zijn','Opvolger De Boer hoeft geen oud-speler van Ajax te zijn','De opvolger van Frank de Boer als trainer van Ajax hoeft geen verleden bij de Amsterdamse club te hebben.','\"Maar hij moet wel in de filosofie van onze club handelen en dus bijvoorbeeld talenten blijven inpassen\'\', aldus directeur Edwin van der Sar donderdag.\r\n\r\nDe voorzitter van het zogeheten Technisch Hart verwacht dat ook een trainer zonder achtergrond bij Ajax kan slagen in Amsterdam.\r\n\r\n\"Ik denk dat Dennis Bergkamp onze grootste cultuurbewaker is. Hij houdt zich ook veel bezig met de jeugd sinds het vertrek van Wim Jonk. Met Patrick Kluivert hebben we een nieuwe trainer voor de A1 die het DNA van onze club heeft. Hetzelfde geldt voor mij en Marc Overmars.\'\'\r\n\r\nDe Boer maakte eerder op donderdag bekend dat hij na 5,5 jaar zal vertrekken bij Ajax. Ook assistent-trainer Orlando Trustfull neemt afscheid, terwijl assistent-trainer Hennie Spijkerman en keeperstrainer Carlo l\'Ami wel bij de club blijven..','','2016-05-12 00:00:00','2016-05-12 10:15:16','2018-01-05 09:10:35'),
	(3,2,1,'Groenendijk_al_na_Ã©Ã©n_seizoen_weg_als_trainer_Excelsior_','Groenendijk al na Ã©Ã©n seizoen weg als trainer Excelsior ','Alfons Groenendijk vertrekt bij Excelsior. De 51-jarige trainer, die pas Ã©Ã©n seizoen actief was in Rotterdam, is toe aan een nieuwe uitdaging.','Excelsior handhaafde zich zondag in de Eredivisie door SC Cambuur met 2-0 te verslaan.\r\n\r\n\"Natuurlijk zijn we allemaal enorm trots op wat we hebben bereikt met Excelsior\", aldus Groenendijk op de website van Excelsior. \"We wisten dat het een lastig jaar zou worden en ik denk dat we uiteindelijk hartstikke blij kunnen zijn dat we ons als Excelsior rechtstreeks hebben kunnen handhaven.\"\r\n\r\nGroenendijk spreekt ook van een \"zwaar\" seizoen. \"Na zondag heb ik alles voor mezelf op een rij gezet en geconcludeerd dat ik toe ben aan een nieuwe uitdaging. Dat heb ik zo ook aan de clubleiding laten weten.\"\r\n\r\nDe Haan\r\nTechnisch directeur Ferry de Haan van Excelsior respecteert het besluit van Groenendijk, hoewel de oefenmeester nog een doorlopend contract tot medio 2017 had.\r\n\r\n\"Wij zijn heel erg trots dat we ons voor het tweede achtereenvolgende seizoen hebben weten te handhaven in de Eredivisie. Voor Excelsior een prima prestatie.\"\r\n\r\nDe Rotterdammers beginnen op 25 juni aan de voorbereiding op het nieuwe seizoen. \"Ook met het oog op het samenstellen van de selectie hopen wij zo snel mogelijk een opvolger te kunnen aanstellen\", aldus De Haan.\r\n\r\nEerder fungeerde Groenendijk als hoofdtrainer van Willem II, FC Den Bosch en Jong Ajax. De oud-speler van onder meer Roda JC, Ajax, Manchester City, Sparta Rotterdam en FC Utrecht volgde vorig jaar Marinus Dijkhuizen op bij Excelsior. Dijkhuizen vertrok na een goed seizoen naar Engeland.','','2016-01-01 00:00:00','2016-05-12 13:48:38','2016-05-12 15:06:13'),
	(4,5,2,'degradatie-newcastle-komt-niet-als-verrassing-clubicoon','Degradatie Newcastle komt niet als een verrassing voor clubicoon Shearer','Clubicoon Alan Shearer vindt dat Newcastle United met de degradatie uit de Premier League de tol betaalt voor fouten die het zelf heeft gemaakt.','\"We kunnen niet doen alsof we dit niet aan zagen komen\", meldt de oud-topspits op Twitter.\n\nShearer degradeerde zelf zeven jaar geleden als interim-manager met Newcastle. \"Er is niets geleerd van 2009. Het kost me veel moeite, maar de felicitaties gaan uit naar Sunderland.\"\n\nHet lot van Newcastle United - waar de Nederlanders Tim Krul, Daryl Janmaat, Siem de Jong, Vurnon Anita en Georginio Wijnaldum onder contract staan - werd woensdagavond bezegeld door een 3-0 overwinning van concurrent Sunderland op Everton.\n\n\"Ik weet dat iedereen die deze club een warm hart toedraagt enorm aangeslagen is\", aldus directeur Lee Charley op de website van Newcastle. \"Bij deze wil ik alle supporters bedanken voor de steun. We zijn al begonnen met het in kaart brengen van wat er is fout gegaan.\"','','2016-05-12 09:48:38','2016-05-12 09:48:38','2016-05-12 15:04:28'),
	(5,2,4,'Zeven_voormalig_Eredivisiespelers_in_EK-selectie_Zweden.','Zeven voormalig Eredivisiespelers in EK-selectie Zweden.','In navolging van IJsland heeft ook Zweden zijn EK-selectie bekendgemaakt. Zeven van de 23 spelers in het keurkorps van bondscoach Erik Hamrï¿½n hebben een verleden in de Eredivisie.','Oud-Ajacied Zlatan Ibrahimovic is de grote vedette in de Zweedse selectie.\r\n\r\nOok Andreas Isaksson (ex-PSV), Andreas Granqvist (ex-FC Groningen), Oscar Hiljemark (ex-PSV), Pontus Wernbloom (ex-AZ), Marcus Berg (ex-PSV en ex-FC Groningen) en John Guidetti (ex-Feyenoord) kwamen ooit uit in de Nederlandse competitie.\r\n\r\nHamrï¿½n, die na het EK stopt als bondscoach, had ook Rasmus Elm (ex-AZ) graag opgeroepen, maar de middenvelder is door twee amandelinfecties niet fit genoeg.\r\n\r\nZweden, dat zich via een play-off tegen Denemarken plaatste voor het toernooi in Frankrijk, neemt het volgende maand bij zijn zesde deelname aan een EK in groep E op tegen Belgiï¿½, Italiï¿½ en Ierland.','','2016-05-12 00:00:00','2016-05-12 10:49:51','2016-05-12 15:01:27'),
	(16,10,1,'douwe-bob-en-the-common-linnets-zingen-samen-in-zweden','Douwe Bob en The Common Linnets zingen samen in Zweden','Songfestivaldeelnemer Douwe Bob heeft woensdagavond in zijn eigen bar in Stockholm zijn lied Slow Down gezongen samen met The Common Linnets. De band met zangeres Ilse DeLange werd twee jaar geleden tweede op het Eurovisiesongfestival.','Douwe Bob wist dinsdagavond een ticket voor de finale van het songfestival aanstaande zaterdag te bemachtigen. De zanger heeft tijdens zijn verblijf in de Zweedse hoofdstad, waar het liedjesfestijn dit jaar gehouden wordt, zijn eigen bar geopend. Daar komen de hele week al andere deelnemers langs om samen te zingen. Woensdagavond was The Bar afgeladen vol. Het optreden is op de Periscope van Lammert de Bruin te zien.\nThe Common Linnets zongen ook hun eigen succesvolle nummer Calm after the Storm, waarmee twee jaar geleden de tweede plek werd behaald. Dat is de hoogste notering voor Nederland sinds 1975, toen won Teach-in met Ding-a-dong.\nDouwe Bob staat momenteel op een achtste plek bij de bookmakers. Rusland is favoriet voor de overwinning. Donderdagavond is de tweede halve finale.','','2016-05-11 13:49:51','2016-05-11 13:49:51','2016-05-12 13:51:59'),
	(17,9,1,'echblog-hacker-hackt-website-hackers-serie-mr-robot','Techblog - Hacker hackt website hackers-serie Mr. Robot','Ironie ten top of een uitgekookte promotiecampagne? Net nu het tweede seizoen van Mr. Robot eraan zit te komen, blijkt de website van de poplulaire serie - die draait om de hacker Elliot Alderson - zelf te zijn gehackt. De indringer, bekend onder de naam Zemnmez, had gelukkig geen kwaad in de zin: hij stelde de makers van de website op de hoogte, en zij hebben het lek inmiddels gedicht.','\nDit schrijft het Amerikaanse blad Forbes. Zemnmez had de kwetsbaarheid op de site van Mr. Robot naar eigen zeggen al meteen ontdekt, maar kon aanvankelijk geen contactgegevens vinden. Journalisten van Forbes verwezen hem uiteidelijk door naar het e-mailadres van Sam Esmail, de schrijver van de serie.\n\nFacebookgegevens\n Beeld uit de serie Mr. Robot\nBeeld uit de serie Mr. Robot © YouTube\nHet ging om een zogenoemd XSS-lek, de meest voorkomende kwetsbaarheid op het internet. \'Als ik kwaad in de zin had gehad, had ik hiermee de Facebookgegevens van gebruikers kunnen stelen\', aldus Zemnmez tegenover Forbes.\n\nEen quiz op de website vroeg gebruikers namelijk om hun Facebookgegevens in te voeren. Met een beetje technische kennis was een script zodanig aan te passen dat gegevens als naam, leeftijd, sekse, e-mailadres en alle Facebookfoto\'s (inclusief de foto\'s waarin zij getagd waren) naar een derde partij konden worden doorgestuurd. Inmiddels is het lek gedicht en is de quiz nog gewoon te spelen op de site.\n\nRechtvaardigheidsgevoel\nMr. Robot\n\nMr. Robot belooft een van de intrigerendste series van het jaar te worden, schreef de Volkskrant begin dit jaar. Kijk mee in het hoofd van een hacker. (+)\n\nMr. Robot draait om een jongen die een dubbelleven leidt: overdag werkt hij als IT\'er in de computerbeveilingsindustrie, \'s nachts is hij een hacker die met een mengeling van frustratie en rechtvaardigheidsgevoel het kwaad wil straffen. De serie won twee Golden Globes.\n\nHet nieuws over de kwetsbaarheid kwam - toevallig of niet - naar buiten op hetzelfde moment dat de makers van Mr. Robot een nieuwe campagne en website lanceerden om het tweede seizoen te promoten. Dat begint op 13 juli in de Verenigde Staten. Een Nederlandse datum is nog niet bekendgemaakt.','','2016-05-10 13:49:51','2016-05-10 13:49:51','2016-05-12 14:02:58'),
	(18,9,1,'techblog-google-wil-nieuwe-vrouwelijke-emoji-introduceren~a4298850','Techblog - Google wil nieuwe vrouwelijke emoji introduceren','','Wie zich wil uitdrukken met emoji\'s kan kiezen uit honderden officiële symbolen. Maar terwijl de boer, de loodgieter, de ingenieur en de scheikundige allemaal vertegenwoordigd zijn in de lijst van officiële unicode-tekens, ontbreken de vrouwelijke versies daarvan. Google wil daar verandering in brengen.','','2016-05-09 13:29:51','2016-05-09 13:49:51','2016-05-12 14:02:59'),
	(19,9,1,'Is_Apple_zichzelf_aan_het_opeten?','Is Apple zichzelf aan het opeten?','Intro tekst hier','Apple is het duurste bedrijf ter wereld, dat zich voorstaat op geweldige vindingen en een uitgekiende marketing. Maar de laatste successen dateren alweer uit de dagen van Steve Jobs: de lancering van de iPhone en iPad. Sindsdien teert Apple op de oude roem.','','2016-05-09 00:00:00','2016-05-09 10:00:00','2016-05-12 15:07:12'),
	(20,10,1,'','','','','','1970-01-01 01:00:00','2016-05-12 14:02:59','2016-05-12 15:01:08'),
	(21,5,1,'Mijn_bericht','Mijn bericht','Mijn intro','','','2016-05-12 00:00:00','2016-05-12 15:10:27','0000-00-00 00:00:00');

/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` char(128) NOT NULL DEFAULT '',
  `firstname` varchar(150) NOT NULL DEFAULT '',
  `middlename` varchar(150) DEFAULT '',
  `lastname` varchar(255) NOT NULL DEFAULT '',
  `gender` enum('male','female') NOT NULL DEFAULT 'male',
  `email` varchar(50) DEFAULT NULL,
  `registration_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `middlename`, `lastname`, `gender`, `email`, `registration_date`)
VALUES
	(1,'jasper','7a8708b15b6b89a13415a7a59148ed49413bfe66','Jasper','','Heidebrink','male','jasper@heidebrink.nl','2016-07-08 15:02:25'),
	(3,'bert','','Bert','de','Vries','male','bert@bert.nl','2016-11-25 00:00:00'),
	(4,'truus','','Truus','de','Boer','female','truus@deboer.nl','2016-11-25 00:00:00');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


