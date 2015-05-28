-- 
-- Editor SQL for DB table clientes
-- Created by http://editor.datatables.net/generator
-- 

CREATE TABLE `clientes` (
	`id` int(10) NOT NULL auto_increment,
	`nombre` varchar(255),
	`apellidos` varchar(255),
	`estado` varchar(255),
	`municipio` varchar(255),
	`direccion` varchar(255),
	`codigopostal` varchar(255),
	`correo` varchar(255),
	`telefono` varchar(255),
	PRIMARY KEY( `id` )
);