
create table municipios(
	id SERIAL PRIMARY KEY NOT NULL,
	denominacion TEXT NOT NULL
);

INSERT INTO municipios(id, denominacion) VALUES (1, 'Acosta');
INSERT INTO municipios(id, denominacion) VALUES (2, 'Bolivar');
INSERT INTO municipios(id, denominacion) VALUES (3, 'Buchivacoa');
INSERT INTO municipios(id, denominacion) VALUES (4, 'Cacique Manaure');
INSERT INTO municipios(id, denominacion) VALUES (5, 'Carirubana');
INSERT INTO municipios(id, denominacion) VALUES (6, 'Colina');
INSERT INTO municipios(id, denominacion) VALUES (7, 'Dabajuro');
INSERT INTO municipios(id, denominacion) VALUES (8, 'Democracia');
INSERT INTO municipios(id, denominacion) VALUES (9, 'Falcon');
INSERT INTO municipios(id, denominacion) VALUES (10, 'Federacion');
INSERT INTO municipios(id, denominacion) VALUES (11, 'Jacura');
INSERT INTO municipios(id, denominacion) VALUES (12, 'Los Taques');
INSERT INTO municipios(id, denominacion) VALUES (13, 'Mauroa');
INSERT INTO municipios(id, denominacion) VALUES (14, 'Miranda');
INSERT INTO municipios(id, denominacion) VALUES (15, 'Monseñor Iturriza');
INSERT INTO municipios(id, denominacion) VALUES (16, 'Palmasola');
INSERT INTO municipios(id, denominacion) VALUES (17, 'Petit');
INSERT INTO municipios(id, denominacion) VALUES (18, 'Piritu');
INSERT INTO municipios(id, denominacion) VALUES (19, 'San Francisco');
INSERT INTO municipios(id, denominacion) VALUES (20, 'Jose Laurencio Silva');
INSERT INTO municipios(id, denominacion) VALUES (21, 'Sucre');
INSERT INTO municipios(id, denominacion) VALUES (22, 'Tocopero');
INSERT INTO municipios(id, denominacion) VALUES (23, 'Union');
INSERT INTO municipios(id, denominacion) VALUES (24, 'Urumaco');
INSERT INTO municipios(id, denominacion) VALUES (25, 'Zamora');


create table parroquias(
	id SERIAL PRIMARY KEY NOT NULL,
	id_municipio INTEGER REFERENCES municipios(id),
	denominacion TEXT NOT NULL
);

INSERT INTO parroquias(id_municipio, denominacion) VALUES (1, 'Capadare');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (1, 'La Pastora');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (1, 'Libertador');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (1, 'San Juan de los Cayos');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (2, 'La Peña');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (2, 'Aracua');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (2, 'San Luis');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (3, 'Bariro');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (3, 'Borojo');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (3, 'Capatarida');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (3, 'Guajiro');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (3, 'Seque');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (3, 'Valle de Eroa');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (3, 'Zazarida');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (4, 'Cacique Manaure');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (5, 'Norte');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (5, 'Carirubana');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (5, 'Santa Ana');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (5, 'Urbana Punta Cardon');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (6, 'La Vela de Coro');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (6, 'Acurigua');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (6, 'Guaibacoa');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (6, 'Las Calderas');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (6, 'Mataruca');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (7, 'Dabajuro');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (8, 'Agua Clara');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (8, 'Avaria');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (8, 'Pedregal');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (8, 'Piedra Grande');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (8, 'Purureche');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (9, 'Adaure');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (9, 'Adícora');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (9, 'Baraived');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (9, 'Buena Vista');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (9, 'Jadacaquiva');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (9, 'El Vinculo');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (9, 'El Hato');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (9, 'Moruy');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (9, 'Pueblo Nuevo');

INSERT INTO parroquias(id_municipio, denominacion) VALUES (10, 'Agua Larga');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (10, 'Churuguara');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (10, 'El Pauji');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (10, 'Independencia');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (10, 'Mapararí');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (11, 'Agua Linda');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (11, 'Araurima');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (11, 'Jacura');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (12, 'Los Taques');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (12, 'Judibana');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (13, 'Mene de Mauroa');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (13, 'San Felix');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (13, 'Casigua');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (14, 'Guzman Guillermo');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (14, 'Mitare');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (14, 'Rio Seco');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (14, 'Sabaneta');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (14, 'San Antonio');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (14, 'San Gabriel');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (14, 'Santa Ana');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (15, 'Boca del Tocuyo');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (15, 'Chichiriviche');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (15, 'Tocuyo de la Costa');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (16, 'Palmasola');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (17, 'Cabure');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (17, 'Colina');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (17, 'Curimagua');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (18, 'Piritu');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (18, 'San Jose de la Costa');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (19, 'Capital San Francisco Mirimire');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (20, 'Tucacas');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (20, 'Boca de Aroa');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (21, 'Sucre');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (21, 'Pecaya');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (22, 'Tocopero');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (23, 'El Charal');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (23, 'Las Vegas del Tuy');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (23, 'Santa Cruz de Bucaral');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (24, 'Urumaco');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (24, 'Bruzual');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (25, 'Puerto Cumarebo');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (25, 'La Cienaga');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (25, 'La Soledad');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (25, 'Pueblo Cumarebo');
INSERT INTO parroquias(id_municipio, denominacion) VALUES (25, 'Zazarida');


CREATE TABLE bancos(
	id SERIAL NOT NULL PRIMARY KEY,
	denominacion TEXT NOT NULL,
	url TEXT NOT NULL
);
CREATE TABLE contactos(
	id SERIAL NOT NULL PRIMARY KEY,
	titulo TEXT NOT NULL,
	mensaje TEXT NOT NULL,
	correo TEXT NOT NULL
);


CREATE TABLE privilegios(
	id SERIAL PRIMARY KEY NOT NULL,
	denominacion TEXT NOT NULL
);

CREATE TABLE clasificacion(
	id SERIAL PRIMARY KEY NOT NULL,
	id_carrito INTEGER NOT NULL REFERENCES carrito(id),
	estrellas INTEGER NOT NULL,
	comentario TEXT NOT NULL
);



CREATE TABLE usuarios(
	id SERIAL NOT NULL PRIMARY KEY,
	cedula INTEGER  NOT NULL,
	letra VARCHAR(1) NOT NULL,
	nombres TEXT NOT NULL,
	correo TEXT NOT NULL,
	password TEXT NOT NULL,
	movil TEXT,
	fijo TEXT,
	id_municipio INTEGER NOT NULL REFERENCES municipios(id),
	id_parroquia INTEGER NOT NULL REFERENCES parroquias(id),
	direccion TEXT,
	fecha_registro DATE NOT NULL,
	privilegio INTEGER NOT NULL REFERENCES privilegios(id),
	estatus BOOLEAN DEFAULT 'true',
	placa text,
	nota TEXT,
	fecha_disponible DATE,
	disponible BOOLEAN DEFAULT 'true'
	password2 text,
	apellidos text,
	city text,
	state text,
	code text,
	movil2 text,
	company text,
);

CREATE TABLE cuentas (
	id SERIAL primary key,
	banco integer NOT NULL REFERENCES bancos(id),
	numero_cuenta TEXT,
	tipo_cuenta TEXT,
	cedula TEXT NOT NULL,
	responsable TEXT,
	telefono TEXT NOT NULL,
	correo TEXT NOT NULL,
	id_usuario integer NOT NULL REFERENCES usuarios(id)
);

CREATE TABLE grupos(
	id SERIAL PRIMARY KEY NOT NULL,
	denominacion TEXT NOT NULL
	
);


CREATE TABLE productos(
	id SERIAL NOT NULL PRIMARY KEY,
	id_usuario INTEGER NOT NULL REFERENCES usuarios(id),
	id_grupo INTEGER NOT NULL REFERENCES grupos(id),
	denominacion TEXT NOT NULL,
	descripcion TEXT NOT NULL,
	precio numeric (26,2),
	photo TEXT,
	photo_dir TEXT,
	codigo TEXT
);


CREATE TABLE estatus (
	id SERIAL PRIMARY KEY NOT NULL,
	denominacion TEXT NOT NULL

);


CREATE TABLE carrito(
	id SERIAL NOT NULL PRIMARY KEY,
	id_empresa  INTEGER NOT NULL REFERENCES usuarios(id),
	id_usuario INTEGER NOT NULL REFERENCES usuarios(id),
	hora TIME NOT NULL,
	fecha DATE NOT NULL DEFAULT CURRENT_DATE,
	id_motorizado INTEGER REFERENCES usuarios(id),	
	estatus INTEGER NOT NULL REFERENCES estatus(id) DEFAULT 0,
	id_cuenta INTEGER REFERENCES cuentas(id),
	referencia TEXT,
	fecha_pago DATE,
	concepto TEXT,
	direccion_envio TEXT,
	motivo TEXT
);

CREATE TABLE carrito_productos (
	id SERIAL NOT NULL PRIMARY KEY,	
	id_carrito INTEGER REFERENCES carrito(id),
	id_producto INTEGER NOT NULL REFERENCES productos(id),
	cantidad INTEGER NOT NULL DEFAULT 0,
	precio numeric (26,2) NOT NULL DEFAULT 0.00
);

CREATE TABLE tipos_movimientos (
	id SERIAL PRIMARY KEY NOT NULL,
	denominacion TEXT NOT NULL
);

CREATE TABLE movimientos(
	id SERIAL NOT NULL PRIMARY KEY,
	id_producto INTEGER NOT NULL REFERENCES productos(id),
	cantidad INTEGER NOT NULL DEFAULT 0,
	precio DECIMAL(26,2),
	fecha DATE NOT NULL DEFAULT CURRENT_DATE, 
	tipo_movimiento INTEGER REFERENCES tipos_movimientos(id),
	id_carrito INTEGER REFERENCES carrito(id)
);


CREATE TABLE tasas
(
  id serial not null primary key,
  fecha date,
  monto numeric(26,2) not null
);







CREATE OR REPLACE VIEW view_cuentas AS 
	SELECT 
	 	a.id,
	 	a.banco as id_banco,
		(SELECT denominacion FROM bancos WHERE id = a.banco limit 1) as banco,
	 	a.numero_cuenta,
	 	a.tipo_cuenta,
	 	a.cedula,
	 	a.responsable,
	 	a.telefono,
	 	a.correo,
	 	a.id_usuario as id_empresa
	FROM cuentas a ORDER BY a.id ASC;


CREATE OR REPLACE VIEW view_grupos AS 
	SELECT 
	 	a.id,
	 	a.denominacion,
	 	(SELECT count(*) FROM productos WHERE id_grupo = a.id limit 1) as cantidad
	FROM grupos a ORDER BY a.id ASC;


CREATE OR REPLACE VIEW view_productos AS 
	SELECT 
	 	a.id,
	 	a.id_usuario,
	 	(SELECT nombres FROM usuarios WHERE id = a.id_usuario limit 1) as empresa,
	 	a.id_grupo,
		(SELECT denominacion FROM grupos WHERE id = a.id_grupo limit 1) as grupo,
	 	a.denominacion,
	 	a.descripcion,
	 	a.precio,
	 	a.photo,
	 	a.photo_dir,
	 	(SELECT sum(cantidad) FROM movimientos WHERE id_producto = a.id and tipo_movimiento = 1)  as entrada,
	 	(SELECT sum(cantidad) FROM movimientos WHERE id_producto = a.id and tipo_movimiento = 2)  as salida,
	 	(SELECT sum(cantidad) FROM movimientos WHERE id_producto = a.id and tipo_movimiento = 3)  as ajuste,
	 	a.codigo
	FROM productos a ORDER BY a.id ASC;

CREATE OR REPLACE VIEW view_carrito AS 
	SELECT 
	 	a.id,
		a.id_empresa,
		(SELECT nombres FROM usuarios WHERE id = a.id_empresa limit 1) as empresa,
		a.id_usuario,
		(SELECT cedula FROM usuarios WHERE id = a.id_usuario limit 1) as usuario_cedula,
		(SELECT nombres FROM usuarios WHERE id = a.id_usuario limit 1) as usuario,
		(SELECT correo FROM usuarios WHERE id = a.id_usuario limit 1) as usuario_correo,
		(SELECT movil FROM usuarios WHERE id = a.id_usuario limit 1) as usuario_movil,
		(SELECT fijo FROM usuarios WHERE id = a.id_usuario limit 1) as usuario_fijo,
		a.hora,
		a.fecha,
		a.id_motorizado,
		a.estatus,
		(SELECT SUM(cantidad*precio) FROM carrito_productos WHERE a.id = id_carrito) as monto_a_pagar,
		a.id_cuenta,
		(SELECT denominacion FROM bancos WHERE id = (SELECT banco FROM cuentas WHERE id = a.id_cuenta limit 1) limit 1) as banco,
		(SELECT numero_cuenta FROM cuentas WHERE id = a.id_cuenta limit 1) as numero_cuenta,
		(SELECT tipo_cuenta FROM cuentas WHERE id = a.id_cuenta limit 1) as tipo_cuenta,
		(SELECT cedula FROM cuentas WHERE id = a.id_cuenta limit 1) as identificacion,
		(SELECT responsable FROM cuentas WHERE id = a.id_cuenta limit 1) as titular,
		(SELECT telefono FROM cuentas WHERE id = a.id_cuenta limit 1) as telefono,
		(SELECT correo FROM cuentas WHERE id = a.id_cuenta limit 1) as correo,
		a.referencia,
		a.fecha_pago,
		a.concepto,
		a.direccion_envio,
		(SELECT denominacion FROM estatus WHERE id = a.estatus limit 1) as status,
		(SELECT nombres FROM usuarios WHERE id = a.id_motorizado limit 1) as motorizado,
		(SELECT placa FROM usuarios WHERE id = a.id_motorizado limit 1) as placa,
		(SELECT nombres FROM usuarios WHERE id = a.id_motorizado limit 1) as motorizado_nombres,
		(SELECT movil FROM usuarios WHERE id = a.id_motorizado limit 1) as motorizado_movil,
		(SELECT fijo FROM usuarios WHERE id = a.id_motorizado limit 1) as motorizado_fijo,
		(SELECT cedula FROM usuarios WHERE id = a.id_motorizado limit 1) as motorizado_cedula,
		a.motivo,
		(SELECT nota FROM usuarios WHERE id = a.id_motorizado limit 1) as motorizado_descripcion,
		(SELECT estrellas FROM clasificacion WHERE id_carrito = a.id limit 1) as estrellas
	FROM carrito a ORDER BY a.id ASC;

CREATE OR REPLACE VIEW view_carrito_productos AS 
	SELECT 
	 	a.id,	
		a.id_carrito,
		(SELECT id_empresa FROM carrito WHERE id = a.id_carrito limit 1) as id_empresa,
		(SELECT id_usuario FROM carrito WHERE id = a.id_carrito limit 1) as id_usuario,
		(SELECT hora FROM carrito WHERE id = a.id_carrito limit 1) as hora,
		(SELECT fecha FROM carrito WHERE id = a.id_carrito limit 1) as fecha,
		(SELECT id_motorizado FROM carrito WHERE id = a.id_carrito limit 1) as id_motorizado,
		(SELECT estatus FROM carrito WHERE id = a.id_carrito limit 1) as estatus,
		a.id_producto,
		(SELECT id_usuario FROM productos WHERE id = a.id_producto limit 1) as empresa,
		(SELECT denominacion FROM grupos WHERE id = (SELECT id_grupo FROM productos WHERE id = a.id_producto limit 1) limit 1) as grupo,
		(SELECT denominacion FROM productos WHERE id = a.id_producto limit 1) as denominacion,
		(SELECT descripcion FROM productos WHERE id = a.id_producto limit 1) as descripcion,
		(SELECT photo FROM productos WHERE id = a.id_producto limit 1) as photo,
		(SELECT photo_dir FROM productos WHERE id = a.id_producto limit 1) as photo_dir,
		a.cantidad,
		a.precio,
		(SELECT correo FROM usuarios WHERE id = (SELECT id_usuario FROM carrito WHERE id = a.id_carrito limit 1) limit 1) as correo,
		(SELECT motivo FROM carrito WHERE id = a.id_carrito limit 1) as motivo
	FROM carrito_productos a ORDER BY a.id ASC;


CREATE OR REPLACE VIEW view_movimientos AS 
	SELECT 
	 	a.id,
	 	a.id_producto,
	 	(SELECT denominacion FROM productos WHERE id = a.id_producto limit 1) as producto,
	 	(SELECT photo FROM productos WHERE id = a.id_producto limit 1) as photo,
	 	(SELECT photo_dir FROM productos WHERE id = a.id_producto limit 1) as photo_dir,
	 	a.cantidad,
	 	a.precio,
	 	a.fecha,
	 	a.tipo_movimiento,
	 	(SELECT denominacion FROM tipos_movimientos WHERE id = a.tipo_movimiento limit 1) as estatu,
	 	(SELECT nombres FROM usuarios WHERE id = (SELECT id_usuario FROM productos WHERE id = a.id_producto limit 1) limit 1) as empresa,
	 	a.id_carrito
	FROM movimientos a ORDER BY a.id ASC;

	CREATE OR REPLACE VIEW view_clasificacion AS 
	SELECT 
	 	a.id,
	 	a.id_carrito,
	 	(SELECT fecha_asignado FROM carrito WHERE id = a.id_carrito limit 1) as fecha_asignado,
	 	(SELECT hora_asignado FROM carrito WHERE id = a.id_carrito limit 1) as hora_asignado,
	 	(SELECT fecha_remitido FROM carrito WHERE id = a.id_carrito limit 1) as fecha_remitido,
	 	(SELECT hora_remitido FROM carrito WHERE id = a.id_carrito limit 1) as hora_remitido,
	 	(SELECT fecha_entrega FROM carrito WHERE id = a.id_carrito limit 1) as fecha_entrega,
	 	(SELECT hora_entrega FROM carrito WHERE id = a.id_carrito limit 1) as hora_entrega,
	 	a.estrellas,
	 	a.comentario,
	 	(SELECT id_motorizado FROM carrito WHERE id = a.id_carrito limit 1) as id_motorizado
	FROM clasificacion a ORDER BY a.id ASC;
