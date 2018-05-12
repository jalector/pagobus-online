##################################################################################
################### Pagobus Online Base de datos prueba ##########################
##################################################################################

use PagobusOnline;
-- Insertamos los grupos de usarios
insert into TipoUsuario (descripcion) values ("master");
insert into TipoUsuario (descripcion) values ("admin");
insert into TipoUsuario (descripcion) values ("user");

-- Insertamos los Empleados 
insert into Empleado values(null, 'Abril', 'Calvillo', 51, 'Country del Lago', 'Convento Del Caudete #255', 'abril_51@hotmail.com', '123asdZXC', '20000425', 2);
insert into Empleado values(null, 'André', 'Montemar', 18, 'Complejo La Cima', 'Armadillo #1861', 'andré_18@hotmail.com', '123asdZXC', '19770801', 2);
insert into Empleado values(null, 'Fiore', 'Felis', 32, 'Chulavista Pro Vivienda Obrera', 'Banano #1476', 'andré_32@hotmail.com', '123asdZXC', '19740430', 2);
insert into Empleado values(null, 'Rodolfo', 'Basgues', 63, 'Barretos', 'Cobre De San José #1909', 'rodolfo_63@hotmail.com', '123asdZXC', '19900109', 2);
insert into Empleado values(null, 'Saul', 'Barron', 61, '8 de Marzo', 'Cabo Del Norte #309', 'rodolfo_61@hotmail.com', '123asdZXC', '19510828', 2);
insert into Empleado values(null, 'Ulises', 'Monteon', 36, 'Condominio Industrial León', 'Cádiz #1761', 'ulises_36@hotmail.com', '123asdZXC', '19570821', 2);
insert into Empleado values(null, 'Cristian', 'Feliciano', 69, 'Caudal del Río', 'El Fontan #841', 'cristian_69@hotmail.com', '123asdZXC', '20070524', 2);
insert into Empleado values(null, 'Abril', 'Montesillo', 27, 'Medina', 'Cerralvo #783', 'abril_27@hotmail.com', '123asdZXC', '20100406', 2);
insert into Empleado values(null, 'Daniel', 'Barrientos', 19, 'Cementos', 'De La Cañada #1614', 'daniel_19@hotmail.com', '123asdZXC', '19921214', 2);
insert into Empleado values(null, 'Alfonso', 'Monteon', 68, 'Cumbres del Sol', 'Chiapas Norte #1545', 'alfonso_68@hotmail.com', '123asdZXC', '19730325', 2);
insert into Empleado values(null, 'Sandra', 'Feliz', 49, 'Aztecas', 'Argón #1430', 'sandra_49@hotmail.com', '123asdZXC', '19580813', 2);

insert into Historial values(null, 'nuevo_usuario', '', 1, 1);
insert into Historial values(null, 'nuevo_usuario', '', 2, 2);
insert into Historial values(null, 'nuevo_usuario', '', 3, 3);
insert into Historial values(null, 'nuevo_usuario', '', 4, 4);
insert into Historial values(null, 'nuevo_usuario', '', 5, 5);
insert into Historial values(null, 'nuevo_usuario', '', 6, 6);
insert into Historial values(null, 'nuevo_usuario', '', 7, 7);
insert into Historial values(null, 'nuevo_usuario', '', 8, 8);
insert into Historial values(null, 'nuevo_usuario', '', 9, 9);
insert into Historial values(null, 'nuevo_usuario', '', 10, 10);
insert into Historial values(null, 'nuevo_usuario', '', 1, 1);
insert into Historial values(null, 'nuevo_usuario', '', 2, 2);
insert into Historial values(null, 'nuevo_usuario', '', 3, 3);
insert into Historial values(null, 'nuevo_usuario', '', 4, 4);
insert into Historial values(null, 'nuevo_usuario', '', 5, 5);
insert into Historial values(null, 'nuevo_usuario', '', 6, 6);
insert into Historial values(null, 'nuevo_usuario', '', 7, 7);
insert into Historial values(null, 'nuevo_usuario', '', 8, 8);
insert into Historial values(null, 'nuevo_usuario', '', 9, 9);
insert into Historial values(null, 'nuevo_usuario', '', 10, 10);

insert into Estado values(null, 'pendiente', curdate(), 1);
insert into Estado values(null, 'pendiente', curdate(), 2);
insert into Estado values(null, 'pendiente', curdate(), 3);
insert into Estado values(null, 'pendiente', curdate(), 4);
insert into Estado values(null, 'pendiente', curdate(), 5);
insert into Estado values(null, 'pendiente', curdate(), 6);
insert into Estado values(null, 'pendiente', curdate(), 7);
insert into Estado values(null, 'pendiente', curdate(), 8);
insert into Estado values(null, 'pendiente', curdate(), 9);
insert into Estado values(null, 'pendiente', curdate(), 10);
insert into Estado values(null, 'pendiente', curdate(), 11);
insert into Estado values(null, 'pendiente', curdate(), 12);
insert into Estado values(null, 'pendiente', curdate(), 13);
insert into Estado values(null, 'pendiente', curdate(), 14);
insert into Estado values(null, 'pendiente', curdate(), 15);
insert into Estado values(null, 'pendiente', curdate(), 16);
insert into Estado values(null, 'pendiente', curdate(), 17);
insert into Estado values(null, 'pendiente', curdate(), 18);
insert into Estado values(null, 'pendiente', curdate(), 19);
insert into Estado values(null, 'pendiente', curdate(), 20);


-- Usuarios
insert into Usuario values(null, '123asdZXC', 'Sandra', 'Fajardo', '19920822', 'default', 'Club Loyola', 'Coba Sur #1791', 'sandra_73@hotmail.com', null, 3, 1);
insert into Usuario values(null, '123asdZXC', 'Iraís', 'Cama', '19931018', 'default', 'Bellavista', 'Dos Oriente #565', 'iraís_57@hotmail.com', null, 3, 2);
insert into Usuario values(null, '123asdZXC', 'Cristian', 'Barron', '19950109', 'default', 'Cerrito de La Joya', 'De La Aparición #131', 'cristian_21@hotmail.com', null, 3, 3);
insert into Usuario values(null, '123asdZXC', 'Sandra', 'Farfan', '19940101', 'default', 'Antenas de Arriba', 'Chícharo #343', 'sandra_54@hotmail.com', null, 3, 4);
insert into Usuario values(null, '123asdZXC', 'Saul', 'Calletano', '20031017', 'default', 'Cumbres de la Gloria', 'Coliflor #1673', 'saul_29@hotmail.com', null, 3, 5);
insert into Usuario values(null, '123asdZXC', 'Jorge', 'Montez', '20020805', 'default', 'Adquirientes de Ibarrilla', 'Cádiz #630', 'jorge_26@hotmail.com', null, 3, 6);
insert into Usuario values(null, '123asdZXC', 'Alfonso', 'Montez', '19921017', 'default', 'Balcón de las Hilamas', 'Contratista De Aurora #1813', 'alfonso_28@hotmail.com', null, 3, 7);
insert into Usuario values(null, '123asdZXC', 'Luis', 'Cama', '20020716', 'default', 'Colina de La Hacienda', 'Drepeo #1700', 'luis_66@hotmail.com', null, 3, 8);
insert into Usuario values(null, '123asdZXC', 'Jorge', 'Barreda', '19970727', 'default', 'Cima Diamante', 'Extremadura #1148', 'jorge_64@hotmail.com', null, 3, 9);
insert into Usuario values(null, '123asdZXC', 'Angelica', 'Barvosa', '19910110', 'default', 'Complejo La Cima', 'Baloncesto #1677', 'angelica_46@hotmail.com', null, 3, 10);
insert into Usuario values(null, '123asdZXC', 'Abril', 'Juarez', '20011016', 'default', 'Colinas de la Fragua', 'Coco #598', 'abril_18@hotmail.com', null, 3, 11);
insert into Usuario values(null, '123asdZXC', 'José', 'Falcon', '19990420', 'default', 'Centro de Prevención Social', 'Areneros De Echeveste #1571', 'josé_38@hotmail.com', null, 3, 12);
insert into Usuario values(null, '123asdZXC', 'Alfonso', 'Calles', '19921022', 'default', 'Colinas de Santa Julia', 'Cobre De Echeveste #1028', 'alfonso_25@hotmail.com', null, 3, 13);
insert into Usuario values(null, '123asdZXC', 'Analuisa', 'Barvosa', '20020611', 'default', 'Aztecas', 'Canela #1240', 'analuisa_22@hotmail.com', null, 3, 14);
insert into Usuario values(null, '123asdZXC', 'Juan', 'Montemar', '19960714', 'default', 'Colinas San Francisco', 'Cacho #774', 'juan_26@hotmail.com', null, 3, 15);
