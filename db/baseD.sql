    create database baseD;
use baseD;



CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
   `genero` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `cargo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Administrador edita,lee,crea,elimina
INSERT INTO `usuarios` (`id`, `nombre`,`apellido`, `genero`,`email`, `clave`, `cargo`) VALUES
(1, 'andres','zuelta', 'Femenino','andru9365@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1');
-- usuario #1  lee crea y edita
INSERT INTO `usuarios` (`id`, `nombre`,`apellido`, `genero`,`email`, `clave`, `cargo`) VALUES
(2, 'jessica',' medina', 'masculino','jessica@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2');
-- usuario #2  lee y crea 
INSERT INTO `usuarios` (`id`, `nombre`,`apellido`, `genero`,`email`, `clave`, `cargo`) VALUES
(3, 'juana','de arco','masculino', 'juanita@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '3');
-- usuario #3  lee 
INSERT INTO `usuarios` (`id`, `nombre`,`apellido`, `genero`,`email`, `clave`, `cargo`) VALUES
(4, 'homero','simpson','Femenino', 'homerjs@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '4');

CREATE TABLE platos (
id int primary key AUTO_INCREMENT,
nombre varchar(20) NOT NULL,
cantidad varchar(20) NOT NULL,
descripcion text NOT NULL,
imagen text NOT NULL,
precio double NOT NULL);


INSERT INTO `platos`(`id`, `nombre`, `cantidad`,`descripcion`, `imagen`, `precio`) VALUES ('1','Bandeja Paisa','7','Arroz blanco Carne de res en polvo, sudada o asada Chicharrón, que es la fritura de la piel del cerdo con un poco de carne. Tajadas de plátano maduro o patacón. Chorizo antioqueño con limón (es un chorizo blanco que se asa, no se toma crudo) Arepa antioqueña, que se hace con harina de maíz amarillo o blanco ya descascarado. Hogao (viene a ser como un sofrito) con tomate y cebolla Fríjoles cargamento o pintos Tomate natural en rodajas Aguacate.', 'bandejaP.jpg','15000'); 
INSERT INTO `platos`(`id`, `nombre`, `cantidad`,`descripcion`, `imagen`, `precio`) VALUES ('2','Ajiaco','6','1 taza de arroz 2 tazas de agua 1 cucharada de aceite de oliva virgen extra 1 diente de ajo entero con piel 1 cucharadita de sal', 'ajiaco.jpg','5000'); 
INSERT INTO `platos`(`id`, `nombre`, `cantidad`,`descripcion`, `imagen`, `precio`) VALUES ('3','Sancocho','6','2 cocos 3 tazas de arroz 1 taza de uvas pasas 3 cucharadas de azucar Sal y tazas de agua incluyendo el agua de los cocos', 'sancocho.jpg','5000');
INSERT INTO `platos`(`id`, `nombre`, `cantidad`,`descripcion`, `imagen`, `precio`) VALUES ('4','Lechona','5','2 cocos 3 tazas de arroz 1 taza de uvas pasas 3 cucharadas de azucar Sal y tazas de agua incluyendo el agua de los cocos', 'lechona1.jpg','5000'); 
INSERT INTO `platos`(`id`, `nombre`, `cantidad`,`descripcion`, `imagen`, `precio`) VALUES ('5','Arroz con Pollo','6','2 cocos 3 tazas de arroz 1 taza de uvas pasas 3 cucharadas de azucar Sal y tazas de agua incluyendo el agua de los cocos', 'Apollo.jpg','10000'); 
INSERT INTO `platos`(`id`, `nombre`, `cantidad`,`descripcion`, `imagen`, `precio`) VALUES ('6','Mute Santanderiano','4','2 cocos 3 tazas de arroz 1 taza de uvas pasas 3 cucharadas de azucar Sal y tazas de agua incluyendo el agua de los cocos', 'muteSantanderiano.jpg','5000'); 
INSERT INTO `platos`(`id`, `nombre`, `cantidad`,`descripcion`, `imagen`, `precio`) VALUES ('7','Tamal','4','2 cocos 3 tazas de arroz 1 taza de uvas pasas 3 cucharadas de azucar Sal y tazas de agua incluyendo el agua de los cocos', 'tamal.jpg','5000');
INSERT INTO `platos`(`id`, `nombre`, `cantidad`,`descripcion`, `imagen`, `precio`) VALUES ('8','Arroz Atollado','7','2 cocos 3 tazas de arroz 1 taza de uvas pasas 3 cucharadas de azucar Sal y tazas de agua incluyendo el agua de los cocos', 'arrozAtollado.jpg','10000');
INSERT INTO `platos`(`id`, `nombre`, `cantidad`,`descripcion`, `imagen`, `precio`) VALUES ('9','Pescado Frito','4','2 cocos 3 tazas de arroz 1 taza de uvas pasas 3 cucharadas de azucar Sal y tazas de agua incluyendo el agua de los cocos', 'pescado.jpg','10000');
INSERT INTO `platos`(`id`, `nombre`, `cantidad`,`descripcion`, `imagen`, `precio`) VALUES ('10','Changua','4','2 cocos 3 tazas de arroz 1 taza de uvas pasas 3 cucharadas de azucar Sal y tazas de agua incluyendo el agua de los cocos', 'changua.jpg','3000');

create table factura(
Num_factura int primary key AUTO_INCREMENT,
correo varchar(40) not null,
cedulaU int not null,
nombre varchar(40) not null,
ciudad varchar(40) not null,
direccion varchar(40) not null,
Tipo_tarjeta varchar(10)not null,
N_tarjeta varchar(15) not null,
F_caducidad date not null,
C_seguridad int (4) not null

);

create table compras(
id_Compra int primary key AUTO_INCREMENT,
numeroventa int not null,
nombre text not null,
imagen text not null,
precio text not null,
cantidad text not null,
subtotal text not null
);
 



 
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


