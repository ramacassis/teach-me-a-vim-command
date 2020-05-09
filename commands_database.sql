SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
--
-- Database: `teach_me_vim`
--

USE teach_me_vim

-- --------------------------------------------------------

--
-- Table structure for table `vim_commands`
--

DROP TABLE IF EXISTS `vim_commands`;

CREATE TABLE `vim_commands` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `difficulty` varchar(255) NOT NULL,
  `command` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `tips` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Adding data for table `vim_commands`
--

INSERT INTO `vim_commands` (`difficulty`, `command`, `category`, `description`, `tips`)

VALUES
(
    'basic|medium|advanced',
    'command_here',
    'category_here',
    'description_here',
    'tips_here'
),
(
    'medium',
    'command_example',
    'category_example',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dignissim risus ex, convallis hendrerit massa tempor ut. Fusce vulputate quam id leo convallis ornare. Nunc efficitur lacinia urna vel interdum. Donec accumsan felis ultrices sodales dapibus. Praesent a ligula mauris. Aliquam at tellus ut enim mollis mattis. Proin mollis, turpis efficitur porta interdum, arcu ipsum semper quam, vitae ultrices ipsum libero at nisl. Proin congue in eros quis posuere. Ut nulla magna, cursus id luctus in, elementum nec eros. Nam diam sapien, porttitor vitae metus posuere, tincidunt auctor dui.',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dignissim risus ex, convallis hendrerit massa tempor ut.'
);
