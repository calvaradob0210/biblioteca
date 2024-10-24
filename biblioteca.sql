-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-08-2024 a las 00:07:31
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bases_datos`
--

CREATE TABLE `bases_datos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `contenido` text NOT NULL,
  `area` varchar(255) NOT NULL,
  `enlace` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `bases_datos`
--

INSERT INTO `bases_datos` (`id`, `titulo`, `imagen`, `contenido`, `area`, `enlace`) VALUES
(3, 'EBSCO Business Source', 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 'Base de datos con acceso a revistas académicas, informes y publicaciones en el área de negocios.', 'Administración', 'https://www.ebsco.com/products/research-databases/business-source-complete'),
(4, 'ProQuest Business', 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 'Base de datos que ofrece acceso a una gran cantidad de publicaciones de negocios, incluyendo revistas, informes y artículos.', 'Administración', 'https://www.proquest.com/products-services/business/'),
(5, 'JSTOR Business', 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 'Plataforma digital que proporciona acceso a revistas académicas en el campo de los negocios.', 'Administración', 'https://www.jstor.org/subject/business'),
(6, 'IEEE Xplore', 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 'Base de datos con acceso a publicaciones y conferencias en ingeniería y tecnología.', 'Ingeniería', 'https://ieeexplore.ieee.org/'),
(7, 'Engineering Village', 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 'Plataforma que proporciona acceso a literatura en ingeniería, incluyendo artículos y patentes.', 'Ingeniería', 'https://www.engineeringvillage.com/'),
(8, 'ScienceDirect', 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 'Base de datos con acceso a artículos y libros en diversas áreas de ciencia y tecnología.', 'Ingeniería', 'https://www.sciencedirect.com/'),
(9, 'Business Source Complete', 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 'Base de datos que ofrece acceso a una amplia gama de recursos en administración y negocios.', 'Ciencias Administrativas', 'https://www.ebsco.com/products/research-databases/business-source-complete'),
(10, 'ABI/INFORM', 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 'Base de datos que proporciona acceso a publicaciones en administración y negocios.', 'Ciencias Administrativas', 'https://www.proquest.com/products-services/abi-inform/'),
(11, 'Emerald Insight', 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 'Plataforma que ofrece acceso a publicaciones académicas en administración, negocios y economía.', 'Ciencias Administrativas', 'https://www.emerald.com/insight/'),
(12, 'EconLit', 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 'Base de datos con acceso a literatura económica, incluyendo artículos y publicaciones académicas.', 'Ciencias Económicas', 'https://www.aeaweb.org/econlit/'),
(13, 'RePEc (Research Papers in Economics)', 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 'Base de datos que proporciona acceso a trabajos de investigación y literatura en economía.', 'Ciencias Económicas', 'https://repec.org/'),
(14, 'NBER (National Bureau of Economic Research)', 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 'Institución que ofrece acceso a trabajos de investigación y publicaciones en economía.', 'Ciencias Económicas', 'https://www.nber.org/'),
(15, 'PubMed', 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 'Base de datos de literatura biomédica y de ciencias de la salud.', 'Ciencias de la Salud', 'https://pubmed.ncbi.nlm.nih.gov/'),
(16, 'Cochrane Library', 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 'Base de datos que ofrece acceso a revisiones sistemáticas y literatura en salud.', 'Ciencias de la Salud', 'https://www.cochranelibrary.com/'),
(17, 'PsycINFO', 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 'Base de datos con acceso a publicaciones en psicología y áreas relacionadas.', 'Ciencias de la Salud', 'https://www.apa.org/pubs/databases/psycinf'),
(18, 'Social Science Research Network (SSRN)', 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 'Plataforma para la difusión de investigaciones en ciencias sociales y áreas relacionadas.', 'Ciencias Sociales', 'https://www.ssrn.com/'),
(19, 'JSTOR Social Sciences', 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 'Plataforma que proporciona acceso a revistas académicas en ciencias sociales.', 'Ciencias Sociales', 'https://www.jstor.org/subject/social-sciences'),
(20, 'SAGE Journals', 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 'Base de datos con acceso a revistas académicas en ciencias sociales y humanidades.', 'Ciencias Sociales', 'https://journals.sagepub.com/'),
(21, 'HeinOnline', 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 'Base de datos que proporciona acceso a publicaciones legales y de derecho.', 'Derecho', 'https://home.heinonline.org/'),
(22, 'Westlaw', 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 'Plataforma que ofrece acceso a recursos legales y bases de datos en derecho.', 'Derecho', 'https://legal.thomsonreuters.com/en/westlaw.html'),
(23, 'LexisNexis', 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 'Base de datos que proporciona acceso a información legal y recursos relacionados con el derecho.', 'Derecho', 'https://legal.thomsonreuters.com/en/westlaw.html'),
(24, 'Project MUSE', 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 'Plataforma que ofrece acceso a revistas académicas en humanidades y ciencias sociales.', 'Humanidades', 'https://muse.jhu.edu/'),
(25, 'Humanities International Complete', 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 'Base de datos que proporciona acceso a literatura en humanidades.', 'Humanidades', 'https://www.ebsco.com/products/research-databases/humanities-international-complete'),
(26, 'Google Scholar', 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 'Plataforma para buscar literatura académica y científica en diversas áreas.', 'Humanidades', 'https://scholar.google.com/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre_categoria`) VALUES
(1, 'Literatura'),
(2, 'Matemática'),
(3, 'Física'),
(4, 'Quimíca'),
(5, 'Biología'),
(6, 'Administración'),
(7, 'Economía'),
(8, 'Contabilidad'),
(9, 'Sistemas'),
(10, 'Industrial'),
(11, 'Agroindustrial'),
(12, 'Transporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuelas`
--

CREATE TABLE `escuelas` (
  `id` int(2) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `escuelas`
--

INSERT INTO `escuelas` (`id`, `nombre`) VALUES
(1, 'Ingenieria de Sistemas'),
(2, 'Ingenieria Industrial'),
(3, 'Ingenieria de Transporte'),
(4, 'Ingenieria Agroindustrial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libro` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `genero` varchar(255) DEFAULT NULL,
  `editorial` varchar(255) DEFAULT NULL,
  `stock` int(11) DEFAULT 0,
  `disponibilidad` tinyint(1) GENERATED ALWAYS AS (`stock` > 0) STORED,
  `imagen` varchar(255) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libro`, `titulo`, `autor`, `genero`, `editorial`, `stock`, `imagen`, `id_categoria`) VALUES
(1, 'Cien Años de Soledad', 'Gabriel García Márquez', 'Realismo Mágico', 'Sudamericana', 10, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 1),
(2, 'El Quijote', 'Miguel de Cervantes', 'Novela', 'Francisco de Robles', 5, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 1),
(3, '1984', 'George Orwell', 'Distopía', 'Secker & Warburg', 8, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 1),
(4, 'El Señor de los Anillos', 'J.R.R. Tolkien', 'Fantasía', 'Allen & Unwin', 12, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 1),
(5, 'Donde los árboles cantan', 'Laura Gallego', 'Fantasía', 'SM', 6, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 1),
(6, 'Los Miserables', 'Victor Hugo', 'Drama', 'A. Lacroix, Verboeckhoven & Cie.', 4, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 1),
(7, 'Crónica de una Muerte Anunciada', 'Gabriel García Márquez', 'Novela', 'Plaza & Janés', 7, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 1),
(8, 'El nombre del viento', 'Patrick Rothfuss', 'Fantasía', 'DAW Books', 9, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 1),
(9, 'Fahrenheit 451', 'Ray Bradbury', 'Distopía', 'Ballantine Books', 11, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 1),
(10, 'Orgullo y Prejuicio', 'Jane Austen', 'Romance', 'T. Egerton', 3, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 1),
(11, 'Matemáticas: Un enfoque moderno', 'John Doe', 'Matemáticas', 'Editorial ABC', 10, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 2),
(12, 'Física para todos', 'Jane Smith', 'Física', 'Editorial XYZ', 8, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 3),
(13, 'Química general', 'Emily Johnson', 'Química', 'Editorial DEF', 5, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 4),
(14, 'Biología celular', 'Michael Brown', 'Biología', 'Editorial GHI', 7, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 5),
(15, 'Administración moderna', 'Sarah Davis', 'Administración', 'Editorial JKL', 6, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 6),
(16, 'Economía avanzada', 'David Wilson', 'Economía', 'Editorial MNO', 9, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 7),
(17, 'Contabilidad básica', 'Laura Martinez', 'Contabilidad', 'Editorial PQR', 4, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 8),
(18, 'Sistemas informáticos', 'James Anderson', 'Sistemas', 'Editorial STU', 12, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 9),
(19, 'Ingeniería industrial', 'Linda Thomas', 'Industrial', 'Editorial VWX', 8, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 10),
(20, 'Agroindustria y desarrollo', 'Robert Lee', 'Agroindustrial', 'Editorial YZA', 11, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 11),
(21, 'Transporte y logística', 'Karen Walker', 'Transporte', 'Editorial BCD', 7, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 12),
(22, 'Cálculo Infinitesimal', 'John Doe', 'Matemáticas', 'Editorial ABC', 15, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 2),
(23, 'Álgebra Lineal', 'Jane Smith', 'Matemáticas', 'Editorial XYZ', 12, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 2),
(24, 'Geometría Analítica', 'Emily Johnson', 'Matemáticas', 'Editorial DEF', 10, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 2),
(25, 'Matemáticas Discretas', 'Michael Brown', 'Matemáticas', 'Editorial GHI', 8, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 2),
(26, 'Mecánica Cuántica', 'Sarah Davis', 'Física', 'Editorial JKL', 10, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 3),
(27, 'Termodinámica', 'David Wilson', 'Física', 'Editorial MNO', 7, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 3),
(28, 'Electromagnetismo', 'Laura Martinez', 'Física', 'Editorial PQR', 9, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 3),
(29, 'Óptica Física', 'James Anderson', 'Física', 'Editorial STU', 6, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 3),
(30, 'Química Orgánica', 'Linda Thomas', 'Química', 'Editorial VWX', 11, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 4),
(31, 'Química Inorgánica', 'Robert Lee', 'Química', 'Editorial YZA', 8, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 4),
(32, 'Bioquímica', 'Karen Walker', 'Química', 'Editorial BCD', 10, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 4),
(33, 'Química Analítica', 'Steven Clark', 'Química', 'Editorial EFG', 5, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 4),
(34, 'Biología Molecular', 'Nancy Adams', 'Biología', 'Editorial HIJ', 12, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 5),
(35, 'Ecología', 'Paul Harris', 'Biología', 'Editorial KLM', 9, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 5),
(36, 'Genética', 'Alice Young', 'Biología', 'Editorial NOP', 8, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 5),
(37, 'Microbiología', 'Tim Lee', 'Biología', 'Editorial QRS', 7, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 5),
(38, 'Administración Estratégica', 'Sara Thompson', 'Administración', 'Editorial TUV', 14, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 6),
(39, 'Gestión de Recursos Humanos', 'Mark Lewis', 'Administración', 'Editorial WXY', 11, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 6),
(40, 'Contabilidad Gerencial', 'Julia Wright', 'Administración', 'Editorial ZAB', 13, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 6),
(41, 'Finanzas Corporativas', 'Gregory Allen', 'Administración', 'Editorial CDE', 12, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 6),
(42, 'Principios de Economía', 'Emily Walker', 'Economía', 'Editorial FGH', 10, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 7),
(43, 'Economía Internacional', 'Robert White', 'Economía', 'Editorial IJK', 8, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 7),
(44, 'Economía del Desarrollo', 'Linda Adams', 'Economía', 'Editorial LMN', 7, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 7),
(45, 'Economía Pública', 'James Scott', 'Economía', 'Editorial OPQ', 6, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 7),
(46, 'Contabilidad Financiera', 'Charles Davis', 'Contabilidad', 'Editorial RST', 11, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 8),
(47, 'Contabilidad de Costos', 'Elizabeth Moore', 'Contabilidad', 'Editorial UVW', 10, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 8),
(48, 'Contabilidad Administrativa', 'Michael Clark', 'Contabilidad', 'Editorial XYZ', 12, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 8),
(49, 'Auditoría', 'Sophia Wilson', 'Contabilidad', 'Editorial YZA', 9, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 8),
(50, 'Sistemas de Información', 'James Martin', 'Sistemas', 'Editorial BCD', 13, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 9),
(51, 'Redes de Computadores', 'Lisa Taylor', 'Sistemas', 'Editorial EFG', 11, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 9),
(52, 'Bases de Datos', 'Daniel Garcia', 'Sistemas', 'Editorial HIJ', 9, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 9),
(53, 'Desarrollo de Software', 'Nina Evans', 'Sistemas', 'Editorial KLM', 8, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 9),
(54, 'Ingeniería Industrial Avanzada', 'Paul Thompson', 'Industrial', 'Editorial NOP', 12, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 10),
(55, 'Logística Industrial', 'Anna White', 'Industrial', 'Editorial QRS', 9, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 10),
(56, 'Control de Calidad', 'Frank Harris', 'Industrial', 'Editorial TUV', 10, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 10),
(57, 'Gestión de la Producción', 'Ella King', 'Industrial', 'Editorial WXY', 8, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 10),
(58, 'Tecnología Agroindustrial', 'George Wright', 'Agroindustrial', 'Editorial ZAB', 7, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 11),
(59, 'Gestión Agroindustrial', 'Rebecca Young', 'Agroindustrial', 'Editorial CDE', 9, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 11),
(60, 'Producción Agroindustrial', 'Samuel Evans', 'Agroindustrial', 'Editorial FGH', 8, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 11),
(61, 'Agroindustria y Tecnología', 'Natalie Adams', 'Agroindustrial', 'Editorial IJK', 6, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 11),
(62, 'Logística y Transporte', 'Robert Brown', 'Transporte', 'Editorial LMN', 14, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 12),
(63, 'Transporte Internacional', 'Sarah Johnson', 'Transporte', 'Editorial OPQ', 12, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 12),
(64, 'Gestión del Transporte', 'James Lee', 'Transporte', 'Editorial RST', 10, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 12),
(65, 'Tecnología en Transporte', 'Laura Wilson', 'Transporte', 'Editorial UVW', 9, 'https://png.pngtree.com/background/20230612/original/pngtree-wolf-animals-images-wallpaper-for-pc-384x480-picture-image_3180467.jpg', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `contenido` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `fecha_noticia` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `nombre`, `contenido`, `imagen`, `fecha_noticia`) VALUES
(1, 'Facultad de Sistemas atrasa a los alumnos', 'La Facultad atrasa con los tramites de las notas de los alumnos de la carrera de Sistemas', 'https://mentor.pe/wp-content/uploads/2023/11/sede-UNFV.jpg', '2024-08-14 19:10:34'),
(2, 'Karin rojas ayuda a los alumnos', 'La docente de PPP 1 y PPP2 ayuda a los estudiantes con sus practicas pre profesionales', 'https://mentor.pe/wp-content/uploads/2023/11/sede-UNFV.jpg', '2024-08-14 19:11:49'),
(3, 'Piero acabo su avance', 'Piero dejo de ser mirón y acabo su avance, pero se sospecha que aún hay otro colaborador que no avanzo su parte, las autoridades aún no han dado que dicho integrante.', 'https://mentor.pe/wp-content/uploads/2023/11/sede-UNFV.jpg', '2024-08-14 19:11:49'),
(4, 'OCRACC esta de vacaciones', 'OCRACC esta de vacaciones y retrasa a los alumnos en sus notas', 'https://mentor.pe/wp-content/uploads/2023/11/sede-UNFV.jpg', '2024-08-14 19:12:28'),
(5, 'Termindado las noticias de la UNFV', 'Se termino izi', 'https://mentor.pe/wp-content/uploads/2023/11/sede-UNFV.jpg', '2024-08-14 19:23:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id_prestamo` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_libro` int(11) DEFAULT NULL,
  `fecha_prestamo` datetime DEFAULT current_timestamp(),
  `fecha_devolucion` datetime DEFAULT NULL,
  `devuelto` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id_reserva` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_libro` int(11) DEFAULT NULL,
  `fecha_reserva` datetime DEFAULT current_timestamp(),
  `estado` enum('pendiente','confirmada','cancelada') DEFAULT 'pendiente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tesis`
--

CREATE TABLE `tesis` (
  `id_tesis` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `idescuela` int(2) NOT NULL,
  `resumen` text DEFAULT NULL,
  `año` year(4) DEFAULT NULL,
  `enlace` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tesis`
--

INSERT INTO `tesis` (`id_tesis`, `titulo`, `autor`, `idescuela`, `resumen`, `año`, `enlace`) VALUES
(1, 'Desarrollo de un Sistema de Gestión de Inventarios', 'Juan Pérez', 1, 'Este trabajo presenta el desarrollo de un sistema de gestión de inventarios para pequeñas empresas, utilizando tecnologías de software libre.', '2023', 'https://www.youtube.com/watch?v=mCdA4bJAGGk'),
(2, 'Optimización de Procesos Productivos en la Industria Textil', 'Ana García', 2, 'La tesis aborda la implementación de técnicas de optimización en los procesos productivos de una empresa textil para mejorar la eficiencia y reducir costos.', '2022', 'https://www.youtube.com/watch?v=mCdA4bJAGGk'),
(3, 'Innovaciones en Logística de Transporte para Mercancías', 'Luis Martínez', 3, 'Este estudio investiga nuevas estrategias logísticas para mejorar la eficiencia del transporte de mercancías a nivel nacional e internacional.', '2023', 'https://www.youtube.com/watch?v=mCdA4bJAGGk'),
(4, 'Implementación de Buenas Prácticas en la Industria Agroalimentaria', 'María López', 4, 'La investigación se centra en la adopción de buenas prácticas agrícolas y de manufactura en la industria agroalimentaria para asegurar la calidad del producto.	', '2021', 'https://www.youtube.com/watch?v=mCdA4bJAGGk');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `nombre_usuario` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` enum('usuario','administrador') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `nombre_usuario`, `email`, `password`, `rol`) VALUES
(2, 'Admin', 'Admin', 'Admin', 'Admin@gmail.com', '$2y$10$aJsvaAGS4hA0NC6J373JlevFqYrliMN9q/FohI5Zy9T2ZqrFu5d/a', 'administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bases_datos`
--
ALTER TABLE `bases_datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `escuelas`
--
ALTER TABLE `escuelas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`id_prestamo`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_libro` (`id_libro`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_libro` (`id_libro`);

--
-- Indices de la tabla `tesis`
--
ALTER TABLE `tesis`
  ADD PRIMARY KEY (`id_tesis`),
  ADD KEY `idescuela` (`idescuela`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bases_datos`
--
ALTER TABLE `bases_datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `escuelas`
--
ALTER TABLE `escuelas`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `id_prestamo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tesis`
--
ALTER TABLE `tesis`
  MODIFY `id_tesis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libros_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`);

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `prestamos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `prestamos_ibfk_2` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`);

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`);

--
-- Filtros para la tabla `tesis`
--
ALTER TABLE `tesis`
  ADD CONSTRAINT `tesis_ibfk_1` FOREIGN KEY (`idescuela`) REFERENCES `escuelas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
