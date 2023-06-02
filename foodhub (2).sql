-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2023 a las 04:17:05
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `foodhub`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `descuento` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `restaurante` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `offers`
--

INSERT INTO `offers` (`id`, `codigo`, `descuento`, `descripcion`, `restaurante`) VALUES
(1, '2023Il', 25, 'Promoción del mes', 'Ilforno'),
(2, '2023Roc', 30, 'prueba', 'Rocoto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `precio` int(11) NOT NULL,
  `restaurante` varchar(255) NOT NULL,
  `off` int(11) NOT NULL,
  `cod_off` varchar(255) DEFAULT NULL,
  `destacado` tinyint(1) NOT NULL,
  `nuevo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `nombre`, `img`, `descripcion`, `categoria`, `tipo`, `precio`, `restaurante`, `off`, `cod_off`, `destacado`, `nuevo`) VALUES
(1, 'Ceviche', 'https://cdn.inoutdelivery.com/poke.inoutdelivery.com/xs/1613670040142-Ceviche_.png', 'Pescado blanco, aguacate, maíz peruano, cebolla morada, pimentón, cilantro y leche de tigre.', 'entradas', 'Comida', 24500, 'Poke Colombia', 1, '2023Il', 0, 1),
(2, 'Kani Nachos', 'https://cdn.inoutdelivery.com/poke.inoutdelivery.com/lg/1613670111001-KANI%20NACHOS.png', 'Totopos chicanos, Palmito de cangrejo, aguacate, seaweed salad, ajonjolí, rodaja de Limón, cebollín y sriracha mayo.', 'entradas', 'Comida', 28900, 'Poke Colombia', 1, '2023Roc', 0, 1),
(3, 'Tuna Nachos', 'https://cdn.inoutdelivery.com/poke.inoutdelivery.com/lg/1613670067335-TUNA%20NACHOS.png', 'Totopos chicanos, Atún, aguacate, pico de gallo, cilantro, rodaja de Limón, chipotle mayo.', 'Entradas', 'Comida', 28900, 'Poke Colombia', 0, NULL, 0, 1),
(4, 'Tuna Tartar', 'https://cdn.inoutdelivery.com/poke.inoutdelivery.com/lg/1613670085214-Tar%20Tar.png', 'Atún, aguacate, mango, cebolla crunch, ajonjolí y sriracha mayo.', 'Desayunos', 'Comida', 26500, 'Poke Colombia', 0, NULL, 1, 1),
(5, 'Acai Bowl', 'https://cdn.inoutdelivery.com/poke.inoutdelivery.com/lg/1637766371369-ACAIBOWL.PW-100.jpg', 'Açaí, fresas, arándanos, granola, semillas de chía y crema de maní.', 'desayunos', 'Comida', 20500, 'Poke Colombia', 0, NULL, 0, 1),
(6, 'Avocado Bacon Bowl', 'https://cdn.inoutdelivery.com/poke.inoutdelivery.com/lg/1614287702092-avocado%20bacon%20bowl.png', 'Quinoa , dos huevos pochados, guacamole, tocineta, pico de gallo, totopos chicanos y cilantro. ', 'Desayunos', 'Comida', 18500, 'Poke Colombia', 0, NULL, 0, 1),
(7, 'Chia Pudding Bowl', 'https://cdn.inoutdelivery.com/poke.inoutdelivery.com/lg/1637789221266-CHIAPUDDIN.PW-100.jpg', 'Pudín de chía, kiwi, mango, granola, coco deshidratado, canela en polvo, miel de abejas.', 'Desayunos', 'Comida', 17500, 'Poke Colombia', 0, NULL, 0, 1),
(8, 'Choco Greek Bowl', 'https://cdn.inoutdelivery.com/poke.inoutdelivery.com/lg/1669395902222-CHOCOGREEK.PW-100.jpg', 'Yogurt griego, fresa, almendras, cacao nibs, arándano, granola, miel.', 'Desayunos', 'Comida', 21000, 'Poke Colombia', 0, NULL, 1, 0),
(9, 'Agua con Gas', 'https://cdn.inoutdelivery.com/poke.inoutdelivery.com/lg/1589502862855-37.png', 'Agua Nacimiento 300 ml', 'Bebidas', 'Bebida', 6000, 'Poke Colombia', 0, NULL, 0, 0),
(10, 'Agua Sin Gas', 'https://cdn.inoutdelivery.com/poke.inoutdelivery.com/lg/1596653630191-Agua.png', 'Agua Nacimiento 300 ml', 'Bebidas', 'Bebida', 6000, 'Poke Colombia', 0, NULL, 0, 0),
(11, 'Coca Cola Cero', 'https://cdn.inoutdelivery.com/poke.inoutdelivery.com/lg/1596653738139-coca-cola%20zero.png', '330 ml', 'Bebidas', 'Bebida', 6000, 'Poke Colombia', 0, NULL, 0, 0),
(12, 'Coca Cola Normal', 'https://cdn.inoutdelivery.com/poke.inoutdelivery.com/lg/1596653760832-coca-cola%20normal.png', '330 ml', 'Bebidas', 'Bebida', 6000, 'Poke Colombia', 0, NULL, 0, 0),
(13, 'Maui', 'https://cdn.inoutdelivery.com/poke.inoutdelivery.com/lg/1675789544020-MAUI-INOUT-100.jpg', 'Arroz de sushi, Salmon, Aguacate, Piña, Crispy noodles, Quinoa crocante,Salsa Wasabi mayo.', 'Plato fuerte', 'Comida', 43900, 'Poke Colombia', 0, NULL, 1, 0),
(14, 'Luau', 'https://cdn.inoutdelivery.com/poke.inoutdelivery.com/lg/1637789363263-LUAU.PW-100.jpg', 'Arroz de sushi, salmón, aguacate, mango, cilantro, jalapeño, veggie tempura, sriracha mayo.', 'Plato fuerte', 'Comida', 35, 'Poke Colombia', 0, NULL, 0, 0),
(15, 'Ebi', 'https://cdn.inoutdelivery.com/poke.inoutdelivery.com/sm/1637789331371-EBI.PW-100.jpg', 'Arroz de sushi, camarones salteados, aguacate, maíz tierno, cebolla crunch, cilantro, sriracha mayo.', 'Plato fuerte', 'Comida', 33900, 'Poke Colombia', 0, NULL, 0, 0),
(16, 'De Origen', 'https://cdn.inoutdelivery.com/poke.inoutdelivery.com/lg/1637789295806-DEORIGEN.PW-100.jpg', 'Arroz con cilantro, cerdo, platano maduro, pico de gallo, guacamole y cilantro.', 'Plato fuerte', 'Comida', 25, 'Poke Colombia', 0, NULL, 0, 0),
(17, 'Pulled Pork', 'https://cdn.inoutdelivery.com/poke.inoutdelivery.com/lg/1637789681148-PULLEDPORK.PW-100.jpg', 'Arroz de sushi o arroz blanco, cerdo desmechado, aguacate, zanahoria, cebolla crunch, cilantro, chipotle mayo. ', 'Plato fuerte', 'Comida', 28900, 'Poke Colombia', 0, 'xx30', 1, 0),
(18, 'Chips', 'https://static.wixstatic.com/media/213c2b_76ebc1e4923b4178bf2e0c65b5960c83~mv2.png/v1/fill/w_543,h_385,al_c,q_85,enc_auto/213c2b_76ebc1e4923b4178bf2e0c65b5960c83~mv2.png', 'Crocantes de yuca y plátano con salsa huancaína y guacamole.', 'Postres', 'Comida', 11, 'Rocoto', 0, NULL, 0, 0),
(19, 'Chicharroncitos Acevichados', 'https://static.wixstatic.com/media/e5e7e2_db0337fe92804d0890c3007374974696~mv2.jpg/v1/fill/w_543,h_385,al_c,q_80,enc_auto/e5e7e2_db0337fe92804d0890c3007374974696~mv2.jpg', 'Crujientes de chicharrón sobre una salsa cítrica de ají amarillo, acompañados de salsa criolla peruana, chips de plátano y aguacate.', 'Entradas', 'Comida', 37, 'Rocoto', 0, NULL, 0, 0),
(20, 'SPRING ROLLS AJÍ DE GALLINA', 'https://static.wixstatic.com/media/e5e7e2_f56d5d813f094a56a0354264e685632f~mv2.jpg/v1/fill/w_543,h_385,al_c,q_80,enc_auto/e5e7e2_f56d5d813f094a56a0354264e685632f~mv2.jpg', 'Rollos crocantes rellenos de una clásica preparación peruana a base pollo con salsa huancaína.', 'Entradas', 'Comida', 22, 'Rocoto', 0, NULL, 0, 0),
(21, 'ATÚN DE LA SIERRA', 'https://static.wixstatic.com/media/e5e7e2_aa0a77254cd4451bb884df96d797b1c2~mv2.jpg/v1/fill/w_543,h_385,al_c,q_80,enc_auto/e5e7e2_aa0a77254cd4451bb884df96d797b1c2~mv2.jpg', 'Bocados de lomo de atún saltados en una salsa de tomate artesanal, acompañados de papa criollla con guacamole, chimichurri y crocantes de zanahoria.', 'Entradas', 'Comida', 40, 'Rocoto', 0, NULL, 0, 0),
(22, 'CHANCHO A LA CRIOLLA', 'https://static.wixstatic.com/media/e5e7e2_d6cd9f046a10433cb7bbced04e38c685~mv2.jpg/v1/fill/w_543,h_385,al_c,q_80,enc_auto/e5e7e2_d6cd9f046a10433cb7bbced04e38c685~mv2.jpg', 'Tocino marinado hecho al barril, servido sobre una plancha, con salsa criolla peruana y huancaína, acompañado de papas criollas y bastones de yuca fritos.', 'Entradas', 'Comida', 32, 'Rocoto', 0, NULL, 0, 0),
(23, 'Ceviche Rocoto', 'https://static.wixstatic.com/media/213c2b_aeb37d51293d4a30be4d1ca31e29b706~mv2.jpg/v1/fill/w_543,h_385,al_c,q_80,enc_auto/213c2b_aeb37d51293d4a30be4d1ca31e29b706~mv2.jpg', 'Pescado, calamar, camarón y palta en leche de tigre al ají rocoto aromatizado con aceite de ajonjolí, acompañado de pescado crocante.', 'Entradas', 'Comida', 43, 'Rocoto', 0, NULL, 0, 0),
(24, 'Ceviche Peruano', 'https://static.wixstatic.com/media/e5e7e2_af0c0119db194809adc298ad78847dea~mv2.jpg/v1/fill/w_543,h_385,al_c,q_80,enc_auto/e5e7e2_af0c0119db194809adc298ad78847dea~mv2.jpg', 'Pescado fresco del día en leche de tigre tradicional, acompañado de palta, maíz cancha y camote.', 'Entradas', 'Comida', 42, 'Rocoto', 0, NULL, 0, 0),
(25, 'Ceviche Andino', 'https://static.wixstatic.com/media/e5e7e2_1720591d78ce497e8ff1700fb65cd472~mv2.jpg/v1/fill/w_543,h_385,al_c,q_80,enc_auto/e5e7e2_1720591d78ce497e8ff1700fb65cd472~mv2.jpg', 'Pescado, calamar, camarón y maíz choclo en leche de tigre al ají amarillo con crocante de surimi en tinta de calamar y palta.', 'Entradas', 'Comida', 43, 'Rocoto', 0, NULL, 0, 0),
(26, 'Ceviche Vegetariano', 'https://static.wixstatic.com/media/e5e7e2_8800826d94114e1492bdaf553e1aeafc~mv2.jpg/v1/fill/w_543,h_385,al_c,q_80,enc_auto/e5e7e2_8800826d94114e1492bdaf553e1aeafc~mv2.jpg', 'Garbanzos, mango, tofu, palta, maíz cancha y tomates perla en leche de tigre tradicional, finalizado con zanahoria crocante.', 'Entradas', 'Comida', 27, 'Rocoto', 0, NULL, 0, 0),
(27, 'Ceviche Trufado', 'https://static.wixstatic.com/media/e5e7e2_45a6dac9993d4c79855136ac9be6da2d~mv2.jpg/v1/fill/w_543,h_385,al_c,q_80,enc_auto/e5e7e2_45a6dac9993d4c79855136ac9be6da2d~mv2.jpg', 'Pescado, calamar y camarón en leche de tigre trufada acompañado de calamares crocantes, cubos de camote y palta.', 'Entradas', 'Comida', 45, 'Rocoto', 0, NULL, 0, 0),
(28, 'Bowl oriental atún', 'https://cdn.shopify.com/s/files/1/0247/8768/1379/products/ecommerce-bowl-oriental-atun_720x.png?v=1674654960', 'Atún en cubos marinados en salsa teriyaki y ajonjolí, con espárragos salteados, tomates San Marzano, aguacate, mezcla de quinua con albahaca y aceite de oliva; sobre variedad de lechugas, acompañado con aderezo oriental.', 'Plato fuerte', 'Comida', 29, 'ilforno', 0, NULL, 0, 0),
(29, 'Arroz Crunch Camarón', 'https://vibowls.vtexassets.com/arquivos/ids/155428/arroz-camaron-crunch.jpg?v=637854599384530000', 'Arroz con soja, cebollín y jengibre, verduras salteadas con salsa\r\nStir Fry, aguacate y un toque de salsa teriyaki, ajonjolí y 130 gr de camarón apanada en panko (proteína).', 'Plato fuerte', 'Comida', 28, 'Vibowls', 0, NULL, 0, 0),
(30, 'Tex Mex Pollo', 'https://vibowls.vtexassets.com/arquivos/ids/155410/tex-mex-pollo.jpg?v=637854599290770000', '125 gr de pechuga a la plancha (proteína), arroz con cilantro, aguacate, fríjol refrito, maíz, tomate y suero. Decorado con tortillas fritas.', 'Plato fuerte', 'Comida', 19, 'Vibowls', 0, NULL, 0, 0),
(31, 'Arroz Crunch Pollo', 'https://vibowls.vtexassets.com/arquivos/ids/155431/arroz-crunch-pollo.jpg?v=637854599399700000', 'Arroz con soja, cebollín y jengibre, verduras salteadas con salsa\r\nStir Fry, aguacate y un toque de salsa teriyaki, ajonjolí y 125 gr de pechuga de pollo apanada en panko (proteína).', 'Plato fuerte', 'Comida', 21, 'Vibowls', 0, NULL, 0, 0),
(32, 'Arroz Oriental Pollo', 'https://vibowls.vtexassets.com/arquivos/ids/155415/arroz-oriental-pollo.jpg?v=637854599311430000', '125 gr de pechuga de pollo a la plancha (proteína), mezcla de arroz con verduras salteadas (zanahoria, raíces chinas y zucchini), con salsa de soja, jengibre, ajo, un toque de ajonjolí.', 'Plato fuerte', 'Comida', 21, 'Vibowls', 0, NULL, 0, 0),
(33, 'Pollo Fettuccine', 'https://vibowls.vtexassets.com/arquivos/ids/155425/pollo-fettuccine.jpg?v=637854599366670000', 'Fettuccine con champiñones y zucchini con crema de leche y\r\nparmesano. Decorado con rúgula, tomate cherry y 125 gr pechuga de pollo (proteína).', 'Plato fuerte', 'Comida', 21, 'Vibowls', 0, NULL, 0, 0),
(34, 'Burrata', 'https://vibowls.vtexassets.com/arquivos/ids/155403/burrata.jpg?v=637854599255430000', 'Queso burrata 65 grs, mix de lechugas, quinua, cascos de\r\nnaranja, tomate cherry y nueces caramelizadas; con\r\nreducción de balsámico.', 'Plato fuerte', 'Comida', 29, 'Vibowls', 0, NULL, 0, 0),
(35, 'Árabe', 'https://vibowls.vtexassets.com/arquivos/ids/155397/arabe.jpg?v=637854593848730000', '4 unidades (8 mitades) de Falafel, tabule de quinua (quinua, perejil, hierbabuena, tomate, limón y aceite de oliva), salsa árabe hummus, salsa de yogur y tahini con pepino. Acompañado con pan árabe frito.', 'Plato fuerte', 'Comida', 26, 'Vibowls', 0, NULL, 0, 0),
(36, 'Lomo  Saltado', 'https://vibowls.vtexassets.com/arquivos/ids/155808/lomo-saltado--1-.jpg?v=637867542349100000', 'Arroz blanco y papa en casco, 150 gr de lomo saltado al estilo peruano (proteína) con cebolla roja, tomate en casco, ají amarillo, soja, vinagre, limón y cilantro.', 'Plato fuerte', 'Comida', 39, 'Vibowls', 0, NULL, 0, 0),
(37, 'Pulled Pork', 'https://vibowls.vtexassets.com/arquivos/ids/155809/pulled-pork.jpg?v=637867542844770000', '140 gr  de pulled Pork  BBQ (proteína), arroz con cilantro, coleslaw,  guacamole,  tomate y cebollitas locas con salsa BBQ.', 'Plato fuerte', 'Comida', 21, 'Vibowls', 0, NULL, 0, 0),
(38, 'Arepa Paisa', 'https://images-mini.cluvi.com/GXY2usFs6e/w_1200_GXY2usFs6e_img_3650.jpg', 'Rellena con chicharrón, chorizo, carne  desmechada, queso mozzarella, maduro,  hogao y guacamole.', 'Desayunos', 'Comida', 23, 'El rancherito', 0, NULL, 0, 0),
(39, 'Arepa Choriqueso', 'https://images-mini.cluvi.com/5uFgKDeLyf/w_1200_5uFgKDeLyf_img_4632.JPG', 'Arepa rellena de chorizo  y queso mozzarella.', 'Desayunos', 'Comida', 17, 'El rancherito', 0, NULL, 0, 0),
(40, 'Arepitas con Todo', 'https://images-mini.cluvi.com/KshZM1KkTn/w_1200_KshZM1KkTn_jllo_050422964.jpg', 'Arepitas fritas ( al estilo molde mexicano) con carne demechada con un toque dulce, trocitos de chicharrón, quesito molido, sour cream, pico de gallo y guacamole.', 'Desayunos', 'Comida', 39, 'El rancherito', 0, NULL, 0, 0),
(41, 'Huevos Rancheros', 'https://images-mini.cluvi.com/WeCMESMWi9/w_1200_WeCMESMWi9_huevos_rancheros.jpeg', 'Revueltos con jamón, queso mozzarella, tomate y trocitos de maduro con arepa tela y quesito.', 'Desayunos', 'Comida', 21, 'El rancherito', 0, NULL, 0, 0),
(42, 'Cacerola El Rancherito', 'https://images-mini.cluvi.com/mbJsVeFWPD/w_1200_mbJsVeFWPD_cacerola_el_rancherito_2.JPG', '2 huevos revueltos o fritos con hogao, tocineta, maíz tierno, queso mozzarella, acompañados de arepa de chócolo y arepa de mote.', 'Desayunos', 'Comida', 21, 'El rancherito', 0, NULL, 0, 0),
(43, 'Calentao Montañero', 'https://images-mini.cluvi.com/oBeAjzuZQi/w_1200_oBeAjzuZQi_66e93819-0e92-40b9-b0d8-f1a6435c96ba.JPG', 'Calentao montañero de migao de papa, carne desmechada, hogao, huevo frito, arepa tela y quesito.', 'Desayunos', 'Comida', 22, 'El rancherito', 0, NULL, 0, 0),
(44, 'Calentao Mexicano', 'https://images-mini.cluvi.com/VfkmeHcyFj/w_1200_VfkmeHcyFj_fotos_el_rancherito_-218.jpg', 'Calentao de carne desmechada, maicitos, arroz y hogao, con un toque picante acompañado de huevo frito, arepa, plátano maduro y quesito.', 'Desayunos', 'Comida', 26, 'El rancherito', 0, NULL, 0, 0),
(45, 'Tostones de Chicharrón', 'https://images-mini.cluvi.com/Q6ElBpwS9c/w_1200_Q6ElBpwS9c_jllo_0504221358.jpg', 'Lonja delgadas de chicharrón con chips de plátano  verde, guacamole, hogao y pico de gallo al limón.', 'Entradas', 'Comida', 35, 'El rancherito', 0, NULL, 0, 0),
(46, 'Picada de Chicharrones', 'https://images-mini.cluvi.com/b6NgcCPhB6/w_1200_b6NgcCPhB6_jllo_050422925.jpg', 'Tostones de chicharrón, chicharrón  ahumado, chicharrón tradicional  con medallones de plátano maduro,  arepa, tomate y limón.', 'Entradas', 'Comida', 53, 'El rancherito', 0, NULL, 0, 0),
(47, 'Costilla BBQ', 'https://images-mini.cluvi.com/v9NEb6vvYl/w_1200_v9NEb6vvYl_jllo_0504221231.jpg', 'Con papa salada, tomate y arepa.', 'Entradas', 'Comida', 48, 'El rancherito', 0, NULL, 0, 0),
(48, 'Media Sierra Frita', 'https://images-mini.cluvi.com/zPS1S7JUzq/w_1200_zPS1S7JUzq_sierra_frita_-1.jpeg', 'Con arroz de coco y patacones.', 'Plato fuerte', 'Comida', 0, 'El rancherito', 0, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reseñas`
--

CREATE TABLE `reseñas` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `calificacion` int(11) NOT NULL,
  `producto` varchar(255) NOT NULL,
  `reseña` text NOT NULL,
  `recomendacion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reseñas`
--

INSERT INTO `reseñas` (`id`, `usuario`, `calificacion`, `producto`, `reseña`, `recomendacion`) VALUES
(1, '', 5, 'Ceviche', 'Excelente!', 'si'),
(2, 'user2', 3, 'Ceviche', 'Muy pequeño para mi gusto', 'si'),
(3, 'user3', 2, 'Ceviche', 'Muy mal producto, me salió en la comida.', 'no'),
(4, 'user4', 5, 'Ceviche', 'Me gustó mucho', 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `restaurant`
--

INSERT INTO `restaurant` (`id`, `name`, `img`, `link`) VALUES
(1, 'Poke Colombia', 'https://www.pokecolombia.co/wp-content/uploads/2020/08/Logo-Footer-Pagina-web_Sin-Fondo-Fondo-Logo-Negro-300x289.png', 'https://i.imgur.com/PXnhDPZ.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `user`, `email`, `img`, `phone`, `password`, `status`, `role`) VALUES
(1, 'Administrador', 'admin', '', 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png', '0', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'active', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reseñas`
--
ALTER TABLE `reseñas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `reseñas`
--
ALTER TABLE `reseñas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
