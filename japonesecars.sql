-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2021 a las 16:55:13
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `japonesecars`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cars`
--

CREATE TABLE `cars` (
  `ID_car` int(11) NOT NULL,
  `Car` varchar(45) NOT NULL,
  `Brand` varchar(45) NOT NULL,
  `Year` int(11) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `Sold` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cars`
--

INSERT INTO `cars` (`ID_car`, `Car`, `Brand`, `Year`, `Description`, `Sold`) VALUES
(1, 'Silvia 200SX', 'Nissan', 1993, 'El denominado Silva en Japón (en su versión S14) y 200SX en Norteamérica, trajo consigo una configuración totalmente orientada al Drift que destacaba por su relación de peso potencia y un robusto pero potente motor SR20DET 2.0 Turbo de 220 caballos de potencia.', 1),
(10, 'RX7', 'Mazda', 1978, 'el coche mítico y su motor Wankel. Donde Citroën, Audi y la mismísima Mercedes-Benz se rindieron, los ingenieros de Mazda consigueron que el motor rotativo ideado por Felix Wankel funcionase correctamente haciednolo ganador, al ser el motor del primer coche japonés en lograr la victoria absoluta en Las 24 Horas de Le Mans.', 0),
(22, 'Skyline 2000GT-R cupe', 'Nissan', 1970, 'dsfasdfsfdf', 1),
(24, 'MR2', 'Toyota', 1989, 'un pequeño y ligero deportivo de motor central, que en su segunda generación deslumbró por un motor de 2.0 litros que, dependiendo del mercado y versión, tenía un rango de potencia de 138 CV. Debido a su peculiar configuración fue nombrado como la Ferrari de los pobres.', 1),
(28, 'MX5', 'Mazda ', 1989, 'Desde el principio, el MX5, se concibió bajo la filosofía \"Jinba-ittai\", que en japonés significa que el jinete y su caballo son uno. Como es de esperar, no poseía un desempeño elevado, pero su manejo era exquisito ', 1),
(29, 'S2000', 'Honda', 1999, 'El Honda S2000 llegó en 1999 para celebrar el primer medio siglo de vida de Honda y dejó una profunda huella. concebido como un roadster clásico escondía bajo su capó el motor de 2 litros con la potencia específica más alta del mundo en una mecánica sin sobrealimentación y un chasis diseñado para una auténtica conducción deportiva.', 1),
(30, 'NSX', 'Honda', 1990, 'Se le conocía como el \"anti Ferrari\" debido a la rivalidad con la marca italiana.  Honda pidio una cabina inspirada en el diseño de burbuja como el avión de combate F-16 Fighting Falcon. Los últimos ajustes se realizaron en 1990, entre otros por el piloto de Fórmula 1 Ayrton Senna9​ en el circuito de Nürburgring.', 1),
(31, 'Civic TypeR', 'Honda', 1997, 'Es el modelo más radical del Honda Civic. no consiste en ser el modelo referencia de su sector en cuanto a rapidez y potencia sino en hacer una máquina precisa en cuanto a conducción técnica se refiere', 1),
(32, 'Lancer Evolution Evo', 'Mitsubishi', 1992, 'Por supuesto que no podíamos olvidar a otro icono del rallismo mundial y del tuning. Este auto tomaba como punto de partida el Lancer, aunque en realidad, las modificaciones eran extremas. El modelo original se presentó en 1992, y desde entonces cada actualización importante se distinguía por añadir un número romano al nombre. En los noventa, convivieron los Evo I, Evo II, Evo III, Evo IV y Evo V. Al heredar mucha de la tecnología del modelo del WRC (donde obtuvo una larga lista de victorias), e', 0),
(34, 'Impreza WRX STI', 'Mitsubishi', 1995, 'Muy asociado al Campeonato Mundial de Rally, ganando varios campeonatos. Ademas lo encontramos en otras disciplinas, destacando su participación en las 24 Horas de Nürburgring, en el campeonato japonés de Super GT o el drift.', 0),
(35, 'Supra mk4 A80', 'Toyota', 1996, 'A80 es sin duda el más famoso de todos los Supra. Toyota encontró en la cuarta generación del Supra un hito que se volvería una parte importante de la cultura automotriz de los años 90. El cambio generacional que recibió contaba con un lenguaje de diseño agresivo, pero fluido, con partes redondeadas y un gran alerón trasero. lograba hacer el 0 a 100 km/h (62 mph) en 4,6 segundos,', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `price`
--

CREATE TABLE `price` (
  `Car` varchar(45) NOT NULL,
  `Euro` float NOT NULL,
  `Dollar` float NOT NULL,
  `Peso` float NOT NULL,
  `Yen` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `price`
--

INSERT INTO `price` (`Car`, `Euro`, `Dollar`, `Peso`, `Yen`) VALUES
('Civic TypeR', 25000, 40000, 2887500, 3244000),
('gdfg', 6000, 9600, 693000, 778560),
('GT 86', 12000, 12000, 1200000, 1200000),
('Impreza WRX STI', 15000, 24000, 1732500, 1946400),
('Lancer Evolution Evo', 50000, 80000, 5775000, 6488000),
('MR2', 1, 2, 3, 4),
('MX5', 43534, 69654.4, 5028180, 5648970),
('NSX', 10000, 16000, 1155000, 1297600),
('RX7', 30000, 31000, 3100000, 3110000),
('S2000', 9, 14.4, 1039.5, 1167.84),
('Silvia 200SX', 21000, 25000, 2400000, 2757000),
('Skyline 2000GT-R cupe', 23000, 23300, 2300000, 2330000),
('Supra mk4 A80', 30000, 48000, 3465000, 3892800);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`ID_car`),
  ADD KEY `fk_cars_Price` (`Car`);

--
-- Indices de la tabla `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`Car`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cars`
--
ALTER TABLE `cars`
  MODIFY `ID_car` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `fk_cars_Price` FOREIGN KEY (`Car`) REFERENCES `price` (`Car`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
