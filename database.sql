-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 11, 2021 at 11:09 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sneakerzfreaks`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `blog_ID` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_date` date NOT NULL,
  `intro` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_content` longtext COLLATE utf8mb4_unicode_ci,
  `conclusion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_img` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  UNIQUE KEY `blog_ID` (`blog_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_ID`, `title`, `author`, `blog_date`, `intro`, `main_content`, `sub_content`, `conclusion`, `author_img`) VALUES
('blog01', 'DUNK LOW PRO GULF', 'Matt Damon', '2021-03-18', 'The Nike Dunk has lived a lot of lives for a sneaker. It has gone from basketball shoe in the 80s to forgotten throughout most of the 90s, then disregarded when it first retro-ed, to existing as a skate shoe, a hype shoe, back to a forgotten shoe, and now an adored sneaker once again.', '     Initially teased in October 2020, the Nike SB Dunk Low Pro Gulf has recently emerged in official images ahead of its Orange Label-exclusive release on Saturday, February 27th. Inspired by a Porsche 917 race car from 1970, the forthcoming pair boasts an eye-catching Blue Chill/Safety Orange color palette. The former tone takes over the upper suede paneling and puffy mesh tongue, while the latter is almost exclusively isolated to the Air Jordan 1-reminiscent outsole. Traditional branding indulges in a black or black and white arrangement that nods to detailing on the decades-old automobile, but they\'re overshadowed by the sign stitched onto the tongue label and lateral heel, a playful copy of the numbers found on race-ready vehicles. Previous propositions under the Nike SB brand have donned the two-digit number, but none have fully committed to such a theme.\r\n\r\nA trademark colourway that made its debut on a pair of Gulfhawk II airplanes in 1936, Gulf Oil instantly recognisable colour scheme has been the focal point of many sponsorships and promotional debuts over the countless decades that followed the oil company\'s establishment in 1901. Moving further into the field of racing after Gulf Oil vice-president Grady Davis Ford GT40 entrance into the both the Daytona International Speedway and Sebring International Raceway events in â€˜67, Gulf Oil\'s striking two-tone colourway went on to find itself commonplace on one of the world\'s most famous sports-racing silhouettes, the Porsche 917. Featuring in King of Cool Steve McQueen\'s 1971 film \'Le Mans\' and the assigned livery to both Pedro Rodriguez and Jo Siffert\'s exploits at events hosted at locales such as Brands Hatch, Spa Francorchamps, Daytona, the Nurburgring and the legendary Le Mans, Gulf Oil\'s infamous complexion is one that finds itself joint-placed alongside similar liveries including Hans Dieter Dechent\'s psychedelic Martini-inspired aesthetic and the patriotic 917 Salzberg inspired by the colours of the Austrian flag.', 'Undeniably one of the hottest releases this year is the Nike SB Dunk Low Gulf Club 58. This latest variant of the Swoosh brand\'s timeless classic SB Dunk Low silhouette sees a beautiful colour arrangement that will no doubt elevate your sneaker collection to a whole new level. Official images of the pair are now live so keep reading on for a closer look.', 'This product will be available from 5th of April onwards.\r\n\r\nPrice: RM450', 'photo/blog_author/mattdamon.jpg'),
('blog02', 'CACTUS JACK AIR FORCE 1', 'Travis Jack', '2020-09-17', 'Cactus Jack, also known as Travis Scott is one of the biggest Hip Hop artist in the music industry.\r\nFollowing the previous success of the Air Jordan 1 Cactus Jack model, Nike continued their latest release with their classic sneaker Air Force 1 along with the collaboration with Travis Scott.\r\n', 'In 1982, Bruce Kilgore designed the first ever athletic shoes that use the Nike Air technology and the shoes was later release with the name of Nike Air Force 1. The name Air Force 1 is a reference to Air Force One, the plane that carries the president of the United States. The shoe is bringing in an approximately 800 million USD per year in revenue since its debut. \r\n\r\nThe design of the Cactus Jack model took inspiration on his own triple platinum album Astroworld. Astroworld is a commercial success that made 537,000 sales in the first week. The design uses both fabrics and burlap accents along with multiple colours that created a unique sneaker that will catch anyone\'s attention. \r\n', 'Rapper Travis Scott with the latest sneaker release on Nike\'s classic model Air Force 1.', 'The Cactus Jack Air Force 1 is such a sneaker with high collection value especially to Travis Scott\'s fan that adore him and his work. The design of the sneaker itself is one of the kind with the classic model. ', 'photo/blog_author/travis.jpg'),
('blog03', 'OFF WHITE AIR JORDAN 1 CHICAGO', 'Freya', '2020-03-20', 'From Pyrex Vision to OFF-WHITE, Virgil Abloh is a main stayer on the modern day streetwear scene.\r\nThe history of OFF-WHITE started with a \'vision from Virgil\', and soon went onto become a brand on everyone\'s lips.\r\n', 'Virgil Abloh\'s OFF WHITE imprint showcased some truly experimental takes on the Nike Air Force 1 Low and the Nike Blazer, but those pale in comparison to what the designer did with the iconic Air Jordan 1 model. The avant-garde take on Michael Jordan\'s first signature silhouette takes inspiration from the Air Jordan 1 Chicago colorway, but deconstructs the numerous panels for a head-turning what are those aesthetic that\'s part high-fashion part straight up ballsy.', 'Virgil Abloh\'s OFF-WHITE Collection dubbed, \"The Ten\" that will be split into two groups: \"REVEALING\" designed to look accessible: hand-cut, open-source and reconstructed. The second, \"GHOSTING,\" was designed with translucent uppers', 'The OFF WHITE Jordan 1 concept features the \"Everything In Quotes\" motif through labeling each individual shoelace and the \"AIR\" on the midsole, oversizing the Swoosh and connecting it to the model in contrast blue and orange stitching, and even adding additional off-white panels on the heel for a literal nod to the brand\'s name.', 'photo/blog_author/freya.png'),
('blog04', 'FAKE VS REAL AIR JORDAN 1 - HOW TO SPOT FAKE AIR JORDAN 1', 'Megumin', '2021-04-14', 'Wondering how to spot fake Air Jordan 1? Afraid of scammers and fake sneakers?\r\n\r\nIf you are looking to learn how to authenticate Air Jordan 1 sneakers, we\'ve got you covered.\r\n\r\nIn this fake vs real Air Jordan 1 legit check guide, we are going to teach you how to spot fake AJ1 sneakers in just a few simple steps to follow.\r\n\r\nAlong with each step of our guide on how to authenticate Air Jordan 1 sneaker, we are going to link reference real vs fake AJ1 images so that each step will be clear and easy to understand.', 'The highlighted points show some quick giveaways for the thinner font, but the most important one is the \"CHINA\" text comparison.\r\n\r\nAs you can see, the \"A\" is not entirely legible in the fake example, while the H letter is wider. Naturally, it\'s not easy for you to remember these things, so we recommend either coming back to this legit check\'s guide pictures or keeping an eye out for weakly-printed text.\r\n\r\nWhat do I mean by weakly printed text? Look at the highlighted french \"VOTRE\" on the Jordan 1 tag. Can you notice how the \"E\" is not entirely printed?\r\n\r\nMaybe a better example is the \"E\" in \"GARANTIE\", the neighbour word. If we compare that to the authentic example, yes, they\'re not printed with the utmost precision - but we can see the difference in quality.\r\n\r\nWorth mentioning as well is that this is a high-quality replica, thus wavy text does not occur as often as we\'ll see soon - but even so, you can notice how the \"SWOOSH \" text is not straight on the fake Jordan tag.', 'As you can see, the fake Air Jordan 1 is almost straight when it comes to this angle\'s view. On the other hand, the original AJ1 is curving in two places: above and below the medial line.\r\n\r\nBelow the medial line, keep in mind that the sneaker has to have almost a bell-shaped bottom in order for it to be authentic.\r\n\r\nPlease note that this flaw is hard to spot when wearing the Jordans but it must be a dead giveaway for a fake.\r\n\r\nTop-tier replicas sometimes get this thing right so it\'s not the most reliable tell. Nonetheless, it might save you minutes when authenticating since the large majority of fakes are not from the top-tier category.\r\n\r\nIn other words, knowing this flaw will enable you to spot most of the fakes in a few seconds.', 'Naturally, the visual comparisons above will assist you in authenticating the J\'s, but we\'ve carved this checklist out so that you can have a quick, go-to place if you need bite-sized reminders.', 'photo/blog_author/megumin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog_image`
--

DROP TABLE IF EXISTS `blog_image`;
CREATE TABLE IF NOT EXISTS `blog_image` (
  `blogImg_ID` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_ID` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro_img` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_img` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtubeID` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  UNIQUE KEY `blogImg_ID` (`blogImg_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_image`
--

INSERT INTO `blog_image` (`blogImg_ID`, `blog_ID`, `intro_img`, `sub_img`, `img`, `youtubeID`) VALUES
('img01', 'blog01', 'photo/blog_image/nike-sb-dunk-low-pro-gulf-1.jpg', 'photo/blog_image/nike-sb-dunk-low-pro-gulf-2.jpg', 'photo/blog_image/nike-sb-dunk-low-pro-gulf-3.jpg', 'https://www.youtube.com/embed/u2Ua2KX88Fg'),
('img06', 'blog03', 'photo/blog_image/aj1ow1', 'photo/blog_image/aj1ow2', 'photo/blog_image/aj1ow3', 'https://www.youtube.com/embed/VEdH5iaNMNo'),
('img02', 'blog01', NULL, NULL, 'photo/blog_image/nike-sb-dunk-low-pro-gulf-4.jpg', NULL),
('img03', 'blog02', 'photo/blog_image/cactusaf1.jpg', 'photo/blog_image/travis_stage.jpg', 'photo/blog_image/cactusaf2.jpg', 'https://www.youtube.com/embed/fdKvQ2bXwC0'),
('img04', 'blog02', NULL, NULL, 'photo/blog_image/cactusaf3.jpg', NULL),
('img05', 'blog02', NULL, NULL, 'photo/blog_image/cactusaf4.jpg', NULL),
('img07', 'blog03', NULL, NULL, 'photo/blog_image/aj1ow4', NULL),
('img08', 'blog04', 'photo/blog_image/lc1.jpg', 'photo/blog_image/lc2.jpg', NULL, 'https://www.youtube.com/embed/iNAWhGsXhLs');

-- --------------------------------------------------------

--
-- Table structure for table `cartitem`
--

DROP TABLE IF EXISTS `cartitem`;
CREATE TABLE IF NOT EXISTS `cartitem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` decimal(11,1) NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `model` (`model`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `title`, `content`, `date`, `status`) VALUES
(1, 'yoyo@gmail.com', 'hehehe', 'hohoho', '2021-03-08 16:00:00', 1),
(2, 'asdafa', 'dfdsfdsf', 'gsdfgdsgf', '2021-03-07 16:00:00', 1),
(3, ' agggg@gmail.com', ' adfdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa adfdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', ' adfdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa adfdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa adfdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa adfdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2021-03-25 16:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `category`, `question`, `answer`) VALUES
(1, 'delivery', 'Do you deliver during weekends and holidays?', 'Unfortunately, our courier partner is unable to deliver during weekends and holidays.'),
(2, 'delivery', 'How can I get Free Delivery?', 'Free Delivery is applicable for all the orders above a minimum spend of RM250.'),
(3, 'delivery', 'How can I change the delivery address for my order?', 'You can only change your delivery address before the order is made. Once the payment is successfully completed, no changes can be made. However, you may attempt to contact the courier to see if they can deliver the order to another address.'),
(4, 'return', 'How do I return my order?', 'If you wish to return your order, you can do so within 14 days of the receipt on your orders. Please contact our Customer Service for more information.'),
(5, 'return', 'How soon will I receive my refund after returning the orders?', 'Once we\'ve received your items at our return centre, we\'ll process your return and issue a refund to you via the same payment method, usually within three working days. Please note that the time taken for a payment services provider to provide you with your refund can vary depending upon the provider.'),
(6, 'return', 'What are the conditions for returning my order?', 'In order for a return to be accepted, it must meet the following conditions:\r\n\r\n1. Product must be unused and unworn.\r\n2. Product must be in its original state and packaging.\r\n3. Product with tags must still be intact.');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`username`, `password`, `email`, `name`, `gender`) VALUES
('john', 'john', 'john123@gmail.com', 'John Cena', 'male'),
('jennie', 'jennie', 'jennie123@gmail.com', 'Jennie', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `model` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `year` int(11) NOT NULL,
  `brand` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`model`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`model`, `name`, `category`, `gender`, `description`, `price`, `discount`, `year`, `brand`, `image`) VALUES
('nk001', 'Nike Zoom Kobe 6 Del Sol', 'basketball', 'men', 'Dubbed \"Del Sol,\" this Kobe 6 was one of Bryant\'s go-to pairs during the 2010-11 season. The Eric Avar-led design is highlighted by its polyurethane \"scaled\" upper, which mimics Bryant\'s \"Black Mamba\" nickname. Del Sol alludes to the bright yellow accent color that became a staple in the line.', '742.00', '0.10', 2021, 'nike', 'photo/product/nk001.png'),
('nk002', 'Nike Jordan 1 Retro High Off-White Chicago', 'basketball', 'men', 'The OFF-WHITE x Air Jordan 1 is created by designer Virgil Abloh in the classic Chicago colorway. Some of the half-finished characteristics of the sneaker include an OFF-WHITE zip tie on the collar, a Swoosh linked to the shoe with noticeable blue stitching, \'Air\' printed on the midsole. The box is deconstructed as it is turned inward with the inside consisting of a black structure and a gold Jumpman logo, while the outside is plain cardboard with the words \'Jumpman\' printed on it. The Virgil OFF-WHITE collection included Air VaporMax, Air Presto, Air Max 90, Blazer, Air Max 97, Hyperdunk 2017, Air Force 1, Zoom Fly, and Chuck Taylor remixed iterations', '20799.00', '0.00', 2017, 'nike', 'photo/product/nk002.png'),
('ua001', 'Under Armour Curry 6 Fox Theater', 'basketball', 'men', 'Under Armour revealed the Stephen Curry’s new signature sneaker, the Curry 6. The first iteration, dubbed “Fox Theater,” pays homage to the iconic landmark in the Golden State Warriors‘ hometown of Oakland.  Continuing on from the Curry 5, it seems the two-time NBA MVP has opted to continue with an in-trend, lower profile model. The shoe’s upper is made from a black knit material, accented by vibrant neon hits of green, yellow, and orange throughout the sneaker. Like all of Curry’s signature sneakers, the SC30 logo remains intact, this time placed on the lateral side of the midsole. Under Armour’s shield branding hit is located on the tongue and heel portions atop the brand’s new HOVR cushioning technology.', '392.00', '0.00', 2019, 'under armour', 'photo/product/ua001.png'),
('ad001', 'Adidas NMD R1 Primeknit OG - Core Black Lush Red', 'running', 'men', 'he adidas NMD R1 is also known as the adidas NMD Runner. It is a low-top sneaker that features Primeknit, mesh, or neoprene above a Boost sole. After debuting in December 2015, several different versions of the sneaker have released. It is currently one of the most popular running shoes to date.', '690.00', '0.00', 2017, 'adidas', 'photo/product/ad001.png'),
('nk003', 'Nike Air Jordan 35 Center of Gravity', 'basketball', 'men', 'The use of the midfoot Eclipse plate that debuted on the Air Jordan 34 last year, along with Nike Air-branded heel tags and in honor of the Air Jordan 5’s 30th anniversary, Jordan 5 mesh-like mid panels and similarly-designed tongues all point to this being the brand’s next marquee performance release.', '928.00', '0.00', 2021, 'nike', 'photo/product/nk003.png'),
('pm001', 'Puma Ignite Running Shoes - Deep Blue/Navy/Fluorescent Peach', 'running', 'men', 'Puma ignite is built with Puma\'s new cushioning material of the same name that disperse impact while providing optimal responsiveness, high rebound and ultimate comfort. Chevron flex grooves in the midsole are designed to compress during landing and rebound to provide energy return.\r\n\r\nThe Ignite\'s upper is constructed with flexible air mesh, seamless overlays and a soft, ultra-thin suede tongue that delivers breathability, flexibility and comfort. A moulded EVA sockliner hugs the arch for extra support and fit. \r\n\r\nOn the outsole, Forefoot Flex Grooves allow for a smoother transition and a smoother toe-off, while the deep guidance groove runs from heel to toe mimicking the natural gait and providing a fluid ride.', '350.00', '0.00', 2019, 'puma', 'photo/product/pm001.png'),
('ad002', 'Adidas Phenom junior - Screaming pink/Orange', 'tennis', 'girls', 'The adidas Phenom junior tennis shoes are inspired from the Stycon, a higher profile tennis shoes with a breathable heavy duty upper with supportive bootie construction, and an Adiwear outsole for ultimate durability and traction for any court surface.', '330.00', '0.00', 2019, 'adidas', 'photo/product/ad002.png'),
('ad003', 'Adidas Adizero Club K - Signal Green/White', 'tennis', 'boys', 'The adidas Juniors` Adizero Club K Tennis Shoes are designed to be lightweight and agile on the tennis court. These low-profile shoes are inspired by the adult Ubersonic 3 with its high breathability and fast feel. They\'re built with Climacool® technology for 360-degree cooling, and a full Bootie construction for an adaptive fit.', '225.00', '0.00', 2018, 'adidas', 'photo/product/ad003.png'),
('sk001', 'Skechers Women D\'Lux Walker Shoes', 'running', 'women', 'Soft woven flat knit mesh fabric upper\r\nStretch Fit design with two-color woven in detail\r\nSlip on athletic comfort walking sneaker design\r\nStitching accents\r\nWoven in contrast colored detail\r\nKnit stretchable mesh fabric with cooling panels\r\nContrast color fabric heel overlay with top pull on loop\r\nSide S logo\r\nLaced-look non adjustable front panel with contrast color detail/li>\r\nStretch Fit collar and instep panels for easy slip on comfort\r\nPadded collar with contrast colored padded heel area\r\nSoft fabric shoe lining\r\nRelaxed Fit® for roomier feel at toe and forefoot\r\nAir Cooled Memory Foam cushioned comfort insole\r\nSkech-Foam cushioned supportive walking midsole design\r\nMidsole with contrast colored dual-density top layer\r\nSculpted midsole detail for natural walking flex\r\nFlexible rubber traction outsole\r\n2 inch heel\r\nWeight: 7 oz. per shoe in a women\'s size 8', '359.00', '0.20', 2019, 'skechers', 'photo/product/sk001.png'),
('sk002', 'Skechers Women One Punch Man Stamina V2', 'running', 'women', 'Multi-material stitching and color contrast, retro and trendy are intertwined.\r\nSimple foot protection, low-cut shoe mouth, three-dimensional fit ankle.\r\nThe heel is equipped with a lifting strap, which is easy to put on and take off and is rich in storage.\r\nThe rubber outsole gives consideration to comfort and abrasion resistance.\r\nBreathable memory insole: Multifunctional three-layer structure high resilience memory foam provides better comfort, support and breathability for wearing.', '410.00', '0.10', 2019, 'skechers', 'photo/product/sk002.png'),
('pm002', 'Puma Ultra 4.1 FG/AG', 'football', 'men', 'Step up to the challenge with a lightning-fast performance in our lightweight, durable ULTRA 4.1 FG/AG. This is your go-to boot for speed and agility when the pressure is really on. It boasts a bold look with an embossed and printed PU upper to support explosive bursts of speed. This is fused to a running spike-inspired SpeedUnit outsole, engineered for rapid acceleration. Welcome to a new era of fast.', '229.00', '0.10', 2021, 'puma', 'photo/product/pm002.png'),
('nk004', 'Nike Mercurial Superfly VI Academy FG/MG - Grey', 'football', 'men', 'The Nike Mercurial Superfly 6 Academy MG combines exceptional touch with explosive speed on natural- and artificial grass fields. The durable design fits like a second skin and is textured to help you control the ball. Durable synthetic leather and Dynamic Fit collar conform to your foot for a streamlined, natural fit. An overall micro-texture makes it easy to control the ball at full speed. A versatile multi-ground plate provides traction on natural- and artificial-grass surfaces.', '369.00', '0.20', 2019, 'nike', 'photo/product/nk004.png'),
('pm003', 'Puma One 5.3 FG - Red', 'football', 'men', 'The PUMA ONE 5.3 is engineered to perfectly fit on the foot, be fast on the pitch, and have great feel on the ball. The PUMA ONE 5.3 is ready to give players the confidence they need to play at their best. - Knitted sock creates a supportive and snug fit around the ankle - Reactive outsole with a stud configuration that supports speed - Full grain leather vamp provides touch and control over the ball ', '309.00', '0.50', 2018, 'puma', 'photo/product/pm003.png'),
('ln001', 'Li-Ning Halberd - Orange/Red', 'badminton', 'women', 'Unique upper body mesh combined with side panel support structures to provide excellent foot support and comfort. Full BOOM Pebax midsole foam effectively improves front agility and responsiveness as well as back heel cushioning and support. Carbon-fibre arch plating with double TPU support for improved anti-torsion properties. Li-Ning logos on each tongue. Special strap on the heel for efficient wearing and taking off.', '699.00', '0.00', 2021, 'li-ning', 'photo/product/ln001.png'),
('ln002', 'Li-Ning Saga Lite - Red/Yellow', 'badminton', 'men', 'Leather-based heel design combined with a uniquely-designed TPU stabling structure not only adds eye-catching aesthetics but also improves locks your ankle in place for better stability.\r\n\r\nShock Absorption Technology Full Li-Ning CLOUD lightweight and soft midsole improves cushioning and rebound response, absorbing shock impact and transforming the energy into enhancing your every jump.\r\n\r\nFoot Arch Stabiliser Enhanced foot arch stability technology that provides improved arch support and protection, reducing burden and impact while improving stability during action.\r\n\r\nToe Durability TUFF TIP is a toe tip material that provides better wear-and-tear durability than regular materials, preventing premature damage to the toe box and outsole.\r\n\r\nThe broad outsole design at the forefront of the shoe provides steady lateral support for rollover-proof movement stability.\r\n\r\nThe parametric pattern design combined with strategic bending grooves on the outsole delivers a strong surface grip with amazing flexibility during action.', '359.00', '0.00', 2020, 'li-ning', 'photo/product/ln002.png'),
('pm004', 'Puma Flourish FS Metal - Grey', 'running', 'women', 'Let your style flourish in this runway-inspired design, featuring a ruched upper with a statement patent leather PUMA Formstrip and dynamic lacing for superior lock-down. This trainer is ready to take your style to the next level.', '155.00', '0.00', 2019, 'puma', 'photo/product/pm004.png'),
('ln003', 'Li-Ning Attack G5 - PINK', 'badminton', 'women', 'The Attack G5, is the fifth generation of the Attack Series of Badminton shoes. It uses a non-marking Diamond Rubber Outsole, to provide you with an optimal grip on the court. This shoe also comes with Cushion Technology built into the heel to dampen the jerks felt during your movement.\r\nThe Attack G5 is designed to keep up with and aid attacking players on the court.', '159.00', '0.00', 2020, 'li-ning', 'photo/product/ln003.png'),
('ua002', 'Under Armour Grade School Curry Flow 8', 'basketball', 'boys', 'You\'ve never felt a shoe like this before. The Curry Flow 8 is totally rubberless, making it lighter and ridiculously grippy. It gives you a better court feel, lets you start and stop on a dime, and get off the ground faster.', '535.00', '0.10', 2020, 'under armour', 'photo/product/ua002.png'),
('nk005', 'Nike Jordan \'Why Not?\' Zer0.4 \'Marathon\'', 'basketball', 'men', 'Winning starts with Russ\'s engine, an inner drive to be number one at all costs. No matter who the competition is, for Russ that race is non-stop. The rubber-burning speed and zeroed-in focus of someone with this type of motor are not enough alone to win, but require a team that together work like a well-oiled machine. Drawing inspiration from the legendary Indianapolis motorsport competition and iconic racing suit designs, the Jordan Why Not? Zer0.4 \'Marathon\' celebrates Russ\'s will to win and the belief that success stops at nothing.', '715.00', '0.00', 2021, 'nike', 'photo/product/nk005.png'),
('sk003', 'Skechers Girls Modern Jogger', 'running', 'girls', 'Construction\r\nSporty woven sparkle finish mesh fabric upper\r\nShiny metallic patent synthetic overlays and instep strap\r\nBungee laced slip on light up sporty casual sneaker design\r\nColorful embroidered heart designs on side panel\r\nSide logo detail inside embroidered heart detail\r\nSynthetic panels with pretty glitter look\r\nBungee stretch laced front panel for easy slip on fit\r\nGlitter finish synthetic instep strap with Heart Lights logo\r\nAdjustable side hook and loop closure\r\nPadded collar and tongue\r\nContrast colored mesh fabric tongue and collar trim\r\nSoft fabric shoe lining\r\nSculpted 3D heart designs on midsole panel\r\nColorful lights in heart centers at midsole blink and chase with every step!\r\nHeart shaped detail on strap (KIDS SIZES ONLY) is an on/off switch for the lights feature\r\nFlexible non-marking traction outsole\r\n1 inch heel', '259.00', '0.00', 2019, 'skechers', 'photo/product/sk003.png'),
('ua003', 'Under Armour Curry Flow 8 \'International Women\'s Day\'', 'basketball', 'women', 'Breathable, lightweight flat knit upper with synthetic overlays for strategic support\r\n\r\nBi-directional internal fit structure with independent layers for lockdown & lateral containment\r\n\r\nBootie construction provides a sock-like fit & feel with a high-stretch collar for easy entry\r\n\r\nNew UA Flow cushioning technology is super-light, bouncy & provides insane grip\r\n\r\nFlexible Pebax® plate adds support & stability to every move\r\nDurable UA Flow outsole provides better court feel so you can cut & stop/start faster than ever before', '659.00', '0.00', 2021, 'under armour', 'photo/product/ua003.png'),
('nk006', 'Nike Jr. Phantom GT Academy Dynamic Fit MG', 'football', 'boys', 'The Nike Jr. Phantom GT Academy Dynamic Fit MG is engineered for precise play. Sticky texture across the top and specialised traction on the bottom let you take control of the game. A stretchy collar creates a secure feel, so you can focus on your footwork.', '359.99', '0.00', 2020, 'nike', 'photo/product/nk006.png'),
('ad004', 'Adidas Courtjam Bounce Shoes - Core Black/Core Black/Grey Two', 'tennis', 'men', 'Boss the courts in comfort. The breathable mesh forefoot on these adidas CourtJam Bounce tennis shoes keeps you cool, while TPU overlays let you slide with confidence. Underneath, a responsive Bounce midsole ignites launches and cushions landings. The midfoot keeps you stable through every change of direction.', '329.00', '0.00', 2019, 'adidas', 'photo/product/ad004.png'),
('pm005', 'Puma Smash v2 Summer Animals - Apricot Blush-Tigerlily', 'running', 'girls', 'Our all-time classic Smash v2 design meets the Mini Paws pack in this fun and adorable mashup that\'s perfect for kids. PUMA\'s cutest collection is featured on our coolest gear for a ferociously adorable look that will get respect on the streets...even if you\'re only six.', '199.00', '0.00', 2018, 'puma', 'photo/product/pm005.png'),
('ad005', 'Adidas Harden Step-back 2.0', 'basketball', 'girls', 'James Harden loves to frustrate defenders on the court. Bring some of Harden\'s signature vibes to your game every time you lace up these adidas basketball shoes. Run the court in comfort thanks to a breathable mesh upper. Step back and rise up with confidence in lightweight Bounce cushioning.', '319.00', '0.00', 2020, 'adidas', 'photo/product/ad005.png'),
('ln004', 'Li-Ning Ranger IV TD - White', 'badminton', 'men', 'Li-Ning Ranger IV TD Men’s Badminton Shoe –  White Li-Ning company has released ranger badminton shoes series again after ranger 1, ranger 2, ranger 3. The simple version of ranger 4.0 for men adopts stylish colourway. Rubber outsole with biomimetic lizard’s feet can provide strong grip and good durability.', '359.00', '0.00', 2021, 'li-ning', 'photo/product/ln004.png'),
('nk007', 'NikeCourt React Vapor NXT - Dark Obsidian/Blue', 'tennis', 'men', 'LOOK FAST. PLAY FAST.\r\n\r\nMeet the next generation of tennis performance. Built using years of athlete data, the NikeCourt React Vapor NXT brings top-notch traction and an innovative cushioning system, so you can play at your best during your fastest and fiercest matches.\r\n\r\n\r\nData-Informed Design\r\n\r\nBuilt to withstand the force of sliding, the generative design uses data to integrate durable rubber and tough plastic in high-wear areas—like the medial side of the forefoot.\r\n\r\n\r\nCloser to the Ground\r\n\r\nNike React technology delivers an extremely smooth ride. Placed near your arch, the soft foam works in tandem with a firmer foam along the outside of your foot, to help make it easier to get closer to the ground. This alignment is designed to help you push off during fast movements.\r\n\r\n\r\nInnovative Grip\r\n\r\nThe herringbone outsole uses a data-informed design to provide optimal grip without impacting your ability to slide.', '917.00', '0.30', 2019, 'nike', 'photo/product/nk007.png'),
('ad006', 'Adidas Ultraboost 20 - Cloud White/Signal Pink/Signal Pink', 'running', 'boys', 'Every four years, the world unites to celebrate its greatest athletes. These juniors\' adidas Ultraboost 20 Running Shoes were created in a shade of pink as a symbol of the global movement towards unity. They have a stretchy knit upper that\'s made with Parley Ocean Plastic, upcycled plastic waste collected on ocean shores. Stitched-in midfoot reinforcement keeps you feeling supported, and responsive cushioning gives you a comfortable ride.', '700.00', '0.35', 2019, 'adidas', 'photo/product/ad006.png'),
('sk004', 'Skechers Boys Mega-Craft', 'running', 'boys', 'Construction\r\nSoft woven mesh fabric upper\r\nSmooth synthetic overlays at toe, heel and instep for added durability\r\nSlip on stretch laced athletic sporty sneaker design\r\nStitching accents\r\nPixel block themed design with pixelated print fabric\r\nFront and heel overlays with pixel-edged detail and color accents\r\nFront and heel panel bright contrast color detailing\r\nHeel overlay with fabric pull on top loop\r\nSide S logo with block-textured finish\r\nPrinted SKECHERS Mega-Craft logo on front strap\r\nStretch fabric laced front panel for easy slip on fit\r\nAdjustable side hook and loop strap closure for a precise fit\r\nPadded collar and tongue\r\nSoft fabric shoe lining\r\nAir Cooled Memory Foam cushioned comfort insole\r\nPixel block textured midsole sides with color detailing\r\nShock absorbing lightweight midsole\r\nHighly flexible traction nonmarking outsole\r\n1 1/4 inch heel height\r\nMachine Washable - Gentle cycle cold, hang to air dry', '259.00', '0.00', 2018, 'skechers', 'photo/product/sk004.png'),
('ln005', 'Li-Ning Storm II - OCEAN BLUE', 'badminton', 'women', 'Cushioned comfort.\r\n\r\nCloud cushioning.\r\n\r\nIts secure feel helps contain your foot with every step.\r\n\r\nAsymmetrical lacing helps keep your foot secure and in place.\r\n\r\nHeel loop for easy on and off.', '299.00', '0.00', 2019, 'li-ning', 'photo/product/ln005.png');

-- --------------------------------------------------------

--
-- Table structure for table `productquantity`
--

DROP TABLE IF EXISTS `productquantity`;
CREATE TABLE IF NOT EXISTS `productquantity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` decimal(11,1) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `model` (`model`)
) ENGINE=MyISAM AUTO_INCREMENT=232 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productquantity`
--

INSERT INTO `productquantity` (`id`, `model`, `size`, `quantity`) VALUES
(1, 'nk001', '6.0', 10),
(2, 'nk001', '7.0', 15),
(3, 'nk001', '7.5', 24),
(4, 'nk001', '8.0', 40),
(5, 'nk001', '8.5', 50),
(6, 'nk001', '9.0', 50),
(7, 'nk001', '9.5', 39),
(8, 'nk001', '10.0', 0),
(9, 'nk001', '10.5', 0),
(10, 'nk001', '11.0', 1),
(11, 'nk001', '11.5', 0),
(12, 'nk001', '12.0', 0),
(13, 'nk002', '7.5', 1),
(14, 'nk002', '8.0', 1),
(15, 'nk002', '8.5', 1),
(16, 'nk002', '9.0', 1),
(17, 'nk002', '9.5', 1),
(18, 'ua001', '6.0', 0),
(19, 'ua001', '7.0', 10),
(20, 'ua001', '7.5', 20),
(21, 'ua001', '8.0', 40),
(22, 'ua001', '8.5', 30),
(23, 'ua001', '9.0', 41),
(24, 'ua001', '9.5', 39),
(25, 'ua001', '10.0', 50),
(26, 'ua001', '10.5', 50),
(27, 'ua001', '11.0', 50),
(28, 'ua001', '11.5', 50),
(29, 'ua001', '12.0', 50),
(30, 'ad001', '4.0', 10),
(31, 'ad001', '4.5', 10),
(32, 'ad001', '5.0', 0),
(33, 'ad001', '5.5', 30),
(34, 'ad001', '6.0', 29),
(35, 'ad001', '6.5', 20),
(36, 'ad001', '7.0', 20),
(37, 'ad001', '7.5', 27),
(38, 'ad001', '8.0', 25),
(39, 'ad001', '8.5', 40),
(40, 'ad001', '9.0', 39),
(41, 'ad001', '9.5', 28),
(42, 'ad001', '10.0', 30),
(43, 'ad001', '10.5', 50),
(44, 'ad001', '11.0', 50),
(45, 'ad001', '11.5', 50),
(46, 'ad001', '12.0', 50),
(47, 'ad001', '12.5', 50),
(48, 'nk003', '6.0', 0),
(49, 'nk003', '6.5', 0),
(50, 'nk003', '7.0', 40),
(51, 'nk003', '7.5', 38),
(52, 'nk003', '8.0', 41),
(53, 'nk003', '8.5', 50),
(54, 'nk003', '9.0', 44),
(55, 'nk003', '9.5', 47),
(56, 'nk003', '10.0', 30),
(57, 'nk003', '10.5', 48),
(58, 'nk003', '11.0', 50),
(59, 'nk003', '11.5', 47),
(60, 'nk003', '12.0', 50),
(61, 'nk003', '12.5', 0),
(62, 'nk003', '13.0', 0),
(63, 'pm001', '7.0', 0),
(64, 'pm001', '7.5', 30),
(65, 'pm001', '8.0', 35),
(66, 'pm001', '8.5', 40),
(67, 'pm001', '9.0', 31),
(68, 'pm001', '9.5', 48),
(69, 'pm001', '10.0', 49),
(70, 'pm001', '10.5', 50),
(71, 'pm001', '11.0', 50),
(72, 'pm001', '11.5', 50),
(73, 'ad002', '1.0', 50),
(74, 'ad002', '2.0', 50),
(75, 'ad002', '2.5', 50),
(76, 'ad002', '3.0', 49),
(77, 'ad002', '3.5', 30),
(78, 'ad002', '4.0', 38),
(79, 'ad002', '4.5', 29),
(80, 'ad002', '5.0', 36),
(81, 'ad002', '5.5', 21),
(82, 'ad002', '6.0', 32),
(83, 'ad002', '6.5', 50),
(84, 'ad002', '7.0', 50),
(85, 'ad003', '10.0', 50),
(86, 'ad003', '11.0', 50),
(87, 'sk001', '5.0', 50),
(88, 'sk001', '6.0', 30),
(89, 'sk001', '7.0', 41),
(90, 'sk001', '8.0', 39),
(91, 'sk001', '9.0', 50),
(92, 'sk001', '10.0', 50),
(93, 'sk002', '5.0', 48),
(94, 'sk002', '6.0', 38),
(95, 'sk002', '7.0', 41),
(96, 'sk002', '8.0', 49),
(97, 'sk002', '9.0', 50),
(98, 'sk002', '10.0', 50),
(99, 'pm002', '9.0', 32),
(100, 'pm002', '9.5', 43),
(101, 'pm002', '10.0', 50),
(102, 'pm002', '10.5', 50),
(103, 'pm002', '11.0', 50),
(104, 'pm002', '11.5', 50),
(105, 'nk004', '7.0', 40),
(106, 'nk004', '7.5', 41),
(107, 'nk004', '8.0', 45),
(108, 'nk004', '8.5', 50),
(109, 'nk004', '9.0', 50),
(110, 'nk004', '9.5', 50),
(111, 'nk004', '10.0', 50),
(112, 'pm003', '9.0', 50),
(113, 'pm003', '9.5', 50),
(114, 'pm003', '10.0', 50),
(115, 'pm003', '10.5', 50),
(116, 'pm003', '11.0', 50),
(117, 'pm003', '11.5', 50),
(118, 'ln001', '5.0', 0),
(119, 'ln001', '5.5', 39),
(120, 'ln001', '6.0', 35),
(121, 'ln001', '6.5', 48),
(122, 'ln001', '7.0', 50),
(123, 'ln001', '7.5', 50),
(124, 'ln001', '8.0', 50),
(125, 'ln002', '7.0', 47),
(126, 'ln002', '8.0', 42),
(127, 'ln002', '8.5', 38),
(128, 'ln002', '9.0', 47),
(129, 'ln002', '9.5', 41),
(130, 'ln002', '10.0', 50),
(131, 'ln002', '10.5', 50),
(132, 'ln002', '11.0', 50),
(133, 'pm004', '6.0', 0),
(134, 'pm004', '6.0', 0),
(135, 'pm004', '7.0', 42),
(136, 'pm004', '7.5', 50),
(137, 'ln003', '4.0', 50),
(138, 'ln003', '5.0', 50),
(139, 'ln003', '6.0', 40),
(140, 'ln003', '6.5', 50),
(141, 'ua002', '3.0', 0),
(142, 'ua002', '4.0', 0),
(143, 'ua002', '4.5', 0),
(144, 'ua002', '5.0', 42),
(145, 'ua002', '5.5', 50),
(146, 'ua002', '6.0', 30),
(147, 'nk005', '6.0', 44),
(148, 'nk005', '6.5', 46),
(149, 'nk005', '7.0', 35),
(150, 'nk005', '7.5', 41),
(151, 'nk005', '8.0', 28),
(152, 'nk005', '8.5', 27),
(153, 'nk005', '9.0', 0),
(154, 'nk005', '9.5', 41),
(155, 'nk005', '10.0', 0),
(156, 'nk005', '10.5', 0),
(157, 'nk005', '11.0', 0),
(158, 'sk003', '1.0', 50),
(159, 'sk003', '2.0', 50),
(160, 'ua003', '6.0', 0),
(161, 'ua003', '12.0', 50),
(162, 'ua003', '13.0', 50),
(163, 'nk006', '1.0', 49),
(164, 'nk006', '2.0', 48),
(165, 'nk006', '2.5', 50),
(166, 'nk006', '3.0', 37),
(167, 'nk006', '3.5', 20),
(168, 'nk006', '4.0', 21),
(169, 'nk006', '4.5', 10),
(170, 'nk006', '5.0', 16),
(171, 'nk006', '5.5', 37),
(172, 'nk006', '6.0', 42),
(173, 'ad004', '6.5', 40),
(174, 'ad004', '7.0', 46),
(175, 'ad004', '7.5', 45),
(176, 'ad004', '8.0', 36),
(177, 'ad004', '8.5', 41),
(178, 'ad004', '9.0', 50),
(179, 'ad004', '9.5', 50),
(180, 'ad004', '10.0', 50),
(181, 'ad004', '11.0', 49),
(182, 'ad004', '12.0', 50),
(183, 'ad004', '12.5', 50),
(184, 'pm005', '1.0', 40),
(185, 'pm005', '2.0', 46),
(186, 'pm005', '10.0', 45),
(187, 'pm005', '11.0', 32),
(188, 'pm005', '12.0', 50),
(189, 'pm005', '13.0', 50),
(190, 'ad005', '3.0', 30),
(191, 'ad005', '4.0', 28),
(192, 'ad005', '5.0', 0),
(193, 'ad005', '6.0', 42),
(194, 'ln004', '6.0', 30),
(195, 'ln004', '7.0', 40),
(196, 'ln004', '7.5', 0),
(197, 'ln004', '8.0', 0),
(198, 'ln004', '8.5', 20),
(199, 'ln004', '9.0', 17),
(200, 'ln004', '9.5', 50),
(201, 'ln004', '10.0', 47),
(202, 'ln004', '10.5', 50),
(203, 'ln004', '11.0', 40),
(204, 'ln004', '12.0', 36),
(205, 'nk007', '6.0', 2),
(206, 'nk007', '7.0', 0),
(207, 'nk007', '7.5', 6),
(208, 'nk007', '8.0', 0),
(209, 'nk007', '8.5', 0),
(210, 'nk007', '9.0', 0),
(211, 'nk007', '9.5', 0),
(212, 'nk007', '10.0', 0),
(213, 'nk007', '10.5', 0),
(214, 'nk007', '11.0', 0),
(215, 'nk007', '11.5', 0),
(216, 'ad006', '3.0', 42),
(217, 'ad006', '4.0', 38),
(218, 'ad006', '5.0', 27),
(219, 'ad006', '6.0', 38),
(220, 'sk004', '11.0', 5),
(221, 'sk004', '12.0', 5),
(222, 'sk004', '13.0', 6),
(223, 'sk004', '1.0', 6),
(224, 'sk004', '2.0', 6),
(225, 'ln005', '5.0', 30),
(226, 'ln005', '5.5', 0),
(227, 'ln005', '6.0', 0),
(228, 'ln005', '6.5', 0),
(229, 'ln005', '7.0', 10),
(230, 'ln005', '7.5', 29),
(231, 'ln005', '8.0', 26);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`name`),
  KEY `model` (`model`)
) ENGINE=MyISAM AUTO_INCREMENT=133 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `model`, `review`, `rating`, `name`) VALUES
(125, 'ad001', 'I love this shoe so much! The price is reasonable as well! This shoe is comfortable to wear and looks fashionable. The primeknit material provides enough support and allow good ventilation to keep my feet cool at all time. The boost mid sole is also bouncy making it comfortable to walk on.', 4, 'john'),
(126, 'ln003', 'I bought this shoe for my badminton training. This shoe is affordable and the quality is nice as well. For RM159, this shoe is a must buy for new badminton player for training purpose. It also serves well for everyday use.', 5, 'Sharon'),
(127, 'nk007', 'I am a professional tennis player, I bought this shoe for use for my tournaments and competitions. This shoe is fast and reliable which helps a lot in my tennis game performance. Although the price is quite high, I would say that it is worth buying for professional player.', 5, 'Johan'),
(128, 'pm001', 'This shoe is so lightweight, it is definitely comfortable for casual running. The design is also quite attractive and the cushioning material is really comfortable. I like it so much!', 4, 'Divan'),
(129, 'sk002', 'I can\'t believe that skechers released shoe in collab with one punch man! This is my favorite anime since it\'s release. Being able to wear a shoe collaborated with this anime makes me so happy!', 5, 'Saitama'),
(130, 'ua001', 'I\'m quite disappointed to receive my shoe with it\'s box in quite a bad condition. Although it is the courier\'s fault for not handling the package well, I hope that Sneaker Freakz can choose a better courier partner for their product delivery.', 3, 'Quintin'),
(131, 'nk004', 'The delivery is fast! I received my product the next day after completing my purchase! Thumbs up for the delivery speed. The shoe came in fine as well, appreciate your package handling.', 5, 'Hariharan'),
(132, 'ad001', 'The product is well packaged and the delivery process is quite fast. The shoe itself is original. It is comfortable to wear in all occasion. It is also quite fashionable as well.', 5, 'jennie');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
