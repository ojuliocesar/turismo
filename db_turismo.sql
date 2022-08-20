-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.22-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para db_turismo
CREATE DATABASE IF NOT EXISTS `db_turismo` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `db_turismo`;

-- Copiando estrutura para tabela db_turismo.tb_login
CREATE TABLE IF NOT EXISTS `tb_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `ativo` bit(1) NOT NULL DEFAULT b'1',
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela db_turismo.tb_login: ~0 rows (aproximadamente)
INSERT INTO `tb_login` (`id`, `email`, `senha`, `ativo`, `data_cadastro`) VALUES
	(1, 'juliocesarjc025@gmail.com', 'juliocesarjc', b'1', '2022-08-16 22:01:03');

-- Copiando estrutura para tabela db_turismo.tb_viagens
CREATE TABLE IF NOT EXISTS `tb_viagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `local` varchar(50) NOT NULL,
  `valor` float(7,2) NOT NULL,
  `desc` varchar(200) DEFAULT NULL,
  `status` bit(1) NOT NULL DEFAULT b'1',
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  `imagem` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela db_turismo.tb_viagens: ~5 rows (aproximadamente)
INSERT INTO `tb_viagens` (`id`, `titulo`, `local`, `valor`, `desc`, `status`, `data_cadastro`, `imagem`) VALUES
	(1, 'Pacote de inverno', 'Gramado', 1700.00, '5 dias de viagem', b'1', '2022-08-02 19:49:15', '3af5e0844b8a35959679966b9c98e3ab.jpg'),
	(3, 'Praia com a família', 'Rio de Janeiro', 5000.00, '6 dias de Hotel com café da manhã', b'1', '2022-08-02 19:51:09', 'b80bf29d71d8ac975916761a53491c3b.jpg'),
	(4, 'Férias nas Montanhas', 'Montanhas Verde', 1400.00, '3 dias de pura alegria', b'1', '2022-08-02 22:21:45', 'bbb74ecfe832d1ffa58f2f39d0e38429.jpg'),
	(10, 'Pacote de Verão', 'Praia', 130.00, 'Melhor verão do mundo!', b'1', '2022-08-19 22:17:10', '2d071b19cacb843385657da3ef3446c7.jpg');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
