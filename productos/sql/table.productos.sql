-- 
-- Editor SQL for DB table productos
-- Created by http://editor.datatables.net/generator
-- 

CREATE TABLE `productos` (
	`id` int(10) NOT NULL auto_increment,
	`descripcion` varchar(255),
	`Talla` varchar(255),
	`categoria` varchar(255),
	`precio` varchar(255),
	`existencia` varchar(255),
	PRIMARY KEY( `id` )
);