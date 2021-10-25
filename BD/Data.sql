--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.25
-- Dumped by pg_dump version 10.17 (Ubuntu 10.17-0ubuntu0.18.04.1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Data for Name: bancos; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.bancos (id, denominacion, url) VALUES (2, 'BANK OF AMERICA', 'HTTPS://SECURE.BANKOFAMERICA.COM/LOGIN/SIGN-IN/SIGNONV2SCREEN.GO?REQUEST_LOCALE=ES-US');
INSERT INTO public.bancos (id, denominacion, url) VALUES (5, 'FSDFCC', 'DFFSDF');


--
-- Data for Name: bancos_usa; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.bancos_usa (id, denominacion, url) VALUES (1, 'Bank Of America', 'https://secure.bankofamerica.com/login/sign-in/signOnV2Screen.go?request_locale=es-us');


--
-- Data for Name: privilegios; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.privilegios (id, denominacion) VALUES (3, 'MOTORIZADO');
INSERT INTO public.privilegios (id, denominacion) VALUES (0, 'SUPERADMINISTRADOR');
INSERT INTO public.privilegios (id, denominacion) VALUES (1, 'ADMINISTRADOR');
INSERT INTO public.privilegios (id, denominacion) VALUES (2, 'CLIENTES');


--
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.usuarios (id, cedula, letra, nombres, correo, password, movil, fijo, direccion, fecha_registro, privilegio, estatus, nota, placa, fecha_disponible, disponible, password2, apellidos, city, state, code, movil2, company, condiciones, autenticado, cod_autenticado) VALUES (78, NULL, 'V', '2', '2@PRUEBA.COM', '$2y$10$QZfEG2yzfzKWPdxFZ4d2Nuhadd5fUsQ9JlB/8LclckCtK27TwgGJq', '2', '2', '2', '2020-08-04', 2, true, '2', NULL, NULL, true, '1', '2', '2', '2', '2', '2', '2', NULL, false, NULL);
INSERT INTO public.usuarios (id, cedula, letra, nombres, correo, password, movil, fijo, direccion, fecha_registro, privilegio, estatus, nota, placa, fecha_disponible, disponible, password2, apellidos, city, state, code, movil2, company, condiciones, autenticado, cod_autenticado) VALUES (67, NULL, 'V', 'ELIEZER', 'SOLTECNOLOGICAS@HOTMAIL.COM', '$2y$10$CKMgRIi93Vn99HEmw7HhaO1ThNQGSt6uDMi2NmXxsOMNAsyWXvqMS', '17863406298', '', '4768 Nw 114th Ave Unit 102', '2020-07-13', 2, false, 'Manager', NULL, NULL, true, '123456789', 'BUENO', 'Doral', 'Florida', '33178', '', 'Bueno & Diaz Services Corp', true, false, NULL);
INSERT INTO public.usuarios (id, cedula, letra, nombres, correo, password, movil, fijo, direccion, fecha_registro, privilegio, estatus, nota, placa, fecha_disponible, disponible, password2, apellidos, city, state, code, movil2, company, condiciones, autenticado, cod_autenticado) VALUES (42, 1111, 'V', 'PRUEBA', 'PRUEBA@GMAIL.COM', '$2y$10$DNh4TsQ0WSapWwEQBrygmO/Oc2FPNCM0c5x1WSnJDLBZUrbQ1fxWG', '123', NULL, 'PRUEBA', '2020-05-21', 2, false, NULL, NULL, NULL, true, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, false, NULL);
INSERT INTO public.usuarios (id, cedula, letra, nombres, correo, password, movil, fijo, direccion, fecha_registro, privilegio, estatus, nota, placa, fecha_disponible, disponible, password2, apellidos, city, state, code, movil2, company, condiciones, autenticado, cod_autenticado) VALUES (62, NULL, 'V', 'ELIEZER', 'TECHSOLUTION2@HOTMAIL.COM', '$2y$10$6Tzftkb5uaZJBDmP3kJh6.D1QTNJ96pOpjot57uorC7FgvUju2yQO', '17863406298', '', '4768 NW 114TH AVE UNIT 102', '2020-07-09', 2, false, 'MANAGER', NULL, NULL, true, '311244221', 'BUENO', 'DORAL', 'FLORIDA', '33178', '', 'COMPANIA DE PRUEBA', true, false, NULL);
INSERT INTO public.usuarios (id, cedula, letra, nombres, correo, password, movil, fijo, direccion, fecha_registro, privilegio, estatus, nota, placa, fecha_disponible, disponible, password2, apellidos, city, state, code, movil2, company, condiciones, autenticado, cod_autenticado) VALUES (61, NULL, 'V', 'LUIS', 'LUISLEAL98E2131@GMAIL.COM', '$2y$10$5SVuvRw9Hj7gkK2M0NJ4QOaVV0nqDKszwBxBi3P.37Y6GBvGeBoby', '15213', '', '02684041660', '2020-07-07', 2, false, 'COMOESTAS', NULL, NULL, true, '1', 'DIAZ', 'LA CRUZ DE TARATARA', 'EDO.FALCON, M.SUCRE', '4041', '', 'EPALE', true, false, NULL);
INSERT INTO public.usuarios (id, cedula, letra, nombres, correo, password, movil, fijo, direccion, fecha_registro, privilegio, estatus, nota, placa, fecha_disponible, disponible, password2, apellidos, city, state, code, movil2, company, condiciones, autenticado, cod_autenticado) VALUES (75, NULL, 'V', 'jose', 'J@J.COM', '$2y$10$/P90OxJ4oQRz8GPyTLrHqOKoTmfgW4A/zmAknkobPGhSl9psfxDjS', '0', '0', '0', '2020-07-30', 2, true, '0', NULL, NULL, true, '25457921', 'sanchez', '0', '0', '0', '0', '0.', true, false, NULL);
INSERT INTO public.usuarios (id, cedula, letra, nombres, correo, password, movil, fijo, direccion, fecha_registro, privilegio, estatus, nota, placa, fecha_disponible, disponible, password2, apellidos, city, state, code, movil2, company, condiciones, autenticado, cod_autenticado) VALUES (79, NULL, 'V', 'ELIEZER I', 'BUENELII@GMAIL.COM', '$2y$10$fySvLbkB9hKo1RQhEm4fNOzwHn1BTz3Gx88oIkQQFqFArTLr3a8m.', '7863406298', '', '4768 NW 114TH AVE', '2020-09-26', 2, true, 'Manager', NULL, NULL, true, '311244220', 'MEDINA', 'Doral', 'Florida', '33178', '', 'Bueno & Diaz', true, false, NULL);
INSERT INTO public.usuarios (id, cedula, letra, nombres, correo, password, movil, fijo, direccion, fecha_registro, privilegio, estatus, nota, placa, fecha_disponible, disponible, password2, apellidos, city, state, code, movil2, company, condiciones, autenticado, cod_autenticado) VALUES (80, NULL, 'V', 'Eliezer Bueno', 'BUENODIAZCORP@GMAIL.COM', '$2y$10$sp85Sh6JLMWSIbsdbiy.q.dfcmecmKfa5X6BRPnONpZ2tawm/I6GO', NULL, NULL, '4768 Nw 114th Ave Unit 102 Doral Fl 33178', '2020-09-27', 1, true, NULL, NULL, NULL, true, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, false, NULL);
INSERT INTO public.usuarios (id, cedula, letra, nombres, correo, password, movil, fijo, direccion, fecha_registro, privilegio, estatus, nota, placa, fecha_disponible, disponible, password2, apellidos, city, state, code, movil2, company, condiciones, autenticado, cod_autenticado) VALUES (83, NULL, 'V', '1', '1@12', '$2y$10$/SA2tqngFZ6YGKQy1qZkwuIs7TAr3vhkS72ppD6GRaYd.ch7BmU/a', '1', '1', '1', '2020-09-30', 2, true, '1', NULL, NULL, true, '1', '1', '1', '1', '1', '1', '12', true, false, NULL);
INSERT INTO public.usuarios (id, cedula, letra, nombres, correo, password, movil, fijo, direccion, fecha_registro, privilegio, estatus, nota, placa, fecha_disponible, disponible, password2, apellidos, city, state, code, movil2, company, condiciones, autenticado, cod_autenticado) VALUES (26677875, NULL, 'V', 'Fely', 'FGARCIAG97@GMAIL.COM', '$2y$10$qT7hUOKF1rJMKPNZim6/xeZBNhVluYpFTaubpTlPy2sGecDP4NXma', '04121267875', '', 'Velitas', '2020-09-30', 1, true, 'Programador', NULL, NULL, true, 'FAGG', 'Garcia', 'Coro', 'Falcon', '4101', '04121267875', 'Systec', true, false, NULL);
INSERT INTO public.usuarios (id, cedula, letra, nombres, correo, password, movil, fijo, direccion, fecha_registro, privilegio, estatus, nota, placa, fecha_disponible, disponible, password2, apellidos, city, state, code, movil2, company, condiciones, autenticado, cod_autenticado) VALUES (90, NULL, 'V', 'caralos', 'CARLOSNIETOR13@GMAIL.COM', '$2y$10$HomISkiJw4u6p3V6bWfXHOUmnA4IIVX0N.QQlxMcxvwrNVHAD4kSu', '972881140', '', 'chile', '2020-09-30', 2, true, 'buyer', NULL, NULL, true, '123456', 'nieto', 'santiago', 'santiago', '590000', '972881140', 'suministros quimicos', true, false, NULL);
INSERT INTO public.usuarios (id, cedula, letra, nombres, correo, password, movil, fijo, direccion, fecha_registro, privilegio, estatus, nota, placa, fecha_disponible, disponible, password2, apellidos, city, state, code, movil2, company, condiciones, autenticado, cod_autenticado) VALUES (69, NULL, 'V', 'Luis', 'LUISLEAL98E@GMAIL.COM', '$2y$10$bILq4xomAVjFiHpPqh0n7eZLCyrhe4RLnmfkSALkfMSXVDVZ0Le9O', '123', '132', '02684041660', '2020-07-13', 2, false, '123', NULL, NULL, true, 'UFXBRPPGVE', 'Diaz', 'La Cruz De Taratara', 'Edo.Falcon, M.Sucre', '4041', '123', '123', true, false, NULL);
INSERT INTO public.usuarios (id, cedula, letra, nombres, correo, password, movil, fijo, direccion, fecha_registro, privilegio, estatus, nota, placa, fecha_disponible, disponible, password2, apellidos, city, state, code, movil2, company, condiciones, autenticado, cod_autenticado) VALUES (46, 5, 'V', 'usuario', '5@5', '$2y$10$qT7hUOKF1rJMKPNZim6/xeZBNhVluYpFTaubpTlPy2sGecDP4NXma', '04261604273', NULL, 'gobernacion principal', '2020-06-01', 1, true, 'programacion', NULL, NULL, true, NULL, 'prueba', 'coro', 'falcon', '4101', NULL, 'SysTecSQL', NULL, false, NULL);
INSERT INTO public.usuarios (id, cedula, letra, nombres, correo, password, movil, fijo, direccion, fecha_registro, privilegio, estatus, nota, placa, fecha_disponible, disponible, password2, apellidos, city, state, code, movil2, company, condiciones, autenticado, cod_autenticado) VALUES (68, NULL, 'V', 'prueba de sisatema ', 'JOSEFSANCHEZ2511@GMAIL.COM', '$2y$10$CAlPtvi4DG3aZf5vd6K0kuKLTxqzNIkxJzyigbv63zh24FvwUGqA2', '0', '0', '0', '2020-07-13', 2, false, '0', NULL, NULL, true, '1', 'programacion', '0', '0', '0', '0', '0', true, false, NULL);
INSERT INTO public.usuarios (id, cedula, letra, nombres, correo, password, movil, fijo, direccion, fecha_registro, privilegio, estatus, nota, placa, fecha_disponible, disponible, password2, apellidos, city, state, code, movil2, company, condiciones, autenticado, cod_autenticado) VALUES (92, NULL, 'V', '1', '1@GMAIL.COM', '$2y$10$3PC/uXTwjpTC/d/LJg2lR.wSo0AyNsrUBV7a9z3A/vJEKl4p.Clhq', '1', '1', '1', '2020-11-06', 2, true, '1', NULL, NULL, true, '1', '1', '1', '1', '1', '1', '1', true, false, '48Z8XVKT3ZYLK3HM42ZE26S6RTHSEDIILHQJDBCGBB1VEJIJLIXOOQUGKB9YORH998TMK53VG5RVOAFASCYH3SXN36MSY427DVTX');


--
-- Data for Name: cuentas; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- Data for Name: estatus; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.estatus (id, denominacion) VALUES (6, 'DELIVERED');
INSERT INTO public.estatus (id, denominacion) VALUES (5, 'ON WAY');
INSERT INTO public.estatus (id, denominacion) VALUES (4, 'TO SEND');
INSERT INTO public.estatus (id, denominacion) VALUES (3, 'APPROVED');
INSERT INTO public.estatus (id, denominacion) VALUES (1, 'PENDING');
INSERT INTO public.estatus (id, denominacion) VALUES (2, 'CANCELLED');
INSERT INTO public.estatus (id, denominacion) VALUES (0, 'PENDING.');


--
-- Data for Name: carrito; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.carrito (id, id_usuario, hora, fecha, estatus, id_cuenta, referencia, fecha_pago, concepto, direccion_envio, motivo, fecha_asignado, hora_asignado, fecha_remitido, hora_remitido, fecha_entrega, hora_entrega, monto, monto_bs, descripcion_billete, tipo_pago) VALUES (129, 67, '21:08:16', '2020-08-22', 2, NULL, NULL, NULL, 'Bueno & Diaz Services Corp', '4768 Nw 114th Ave Unit 102', 'Products no stock', NULL, NULL, NULL, NULL, NULL, NULL, 13.78, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO public.carrito (id, id_usuario, hora, fecha, estatus, id_cuenta, referencia, fecha_pago, concepto, direccion_envio, motivo, fecha_asignado, hora_asignado, fecha_remitido, hora_remitido, fecha_entrega, hora_entrega, monto, monto_bs, descripcion_billete, tipo_pago) VALUES (130, 46, '13:09:50', '2020-09-02', 3, NULL, NULL, NULL, 'SysTecSQL', 'gobernacion', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13.78, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO public.carrito (id, id_usuario, hora, fecha, estatus, id_cuenta, referencia, fecha_pago, concepto, direccion_envio, motivo, fecha_asignado, hora_asignado, fecha_remitido, hora_remitido, fecha_entrega, hora_entrega, monto, monto_bs, descripcion_billete, tipo_pago) VALUES (164, 90, '23:09:56', '2020-09-30', 6, NULL, NULL, NULL, 'suministros quimicos', '', NULL, NULL, NULL, NULL, NULL, '2020-10-01', '02:10:00', 232.56, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO public.carrito (id, id_usuario, hora, fecha, estatus, id_cuenta, referencia, fecha_pago, concepto, direccion_envio, motivo, fecha_asignado, hora_asignado, fecha_remitido, hora_remitido, fecha_entrega, hora_entrega, monto, monto_bs, descripcion_billete, tipo_pago) VALUES (171, 46, '14:10:43', '2020-10-06', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, NULL, NULL);
INSERT INTO public.carrito (id, id_usuario, hora, fecha, estatus, id_cuenta, referencia, fecha_pago, concepto, direccion_envio, motivo, fecha_asignado, hora_asignado, fecha_remitido, hora_remitido, fecha_entrega, hora_entrega, monto, monto_bs, descripcion_billete, tipo_pago) VALUES (140, 46, '15:09:22', '2020-09-04', 1, NULL, NULL, NULL, 'SysTecSQL', 'prueba', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13.78, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO public.carrito (id, id_usuario, hora, fecha, estatus, id_cuenta, referencia, fecha_pago, concepto, direccion_envio, motivo, fecha_asignado, hora_asignado, fecha_remitido, hora_remitido, fecha_entrega, hora_entrega, monto, monto_bs, descripcion_billete, tipo_pago) VALUES (138, 46, '13:09:41', '2020-09-03', 2, NULL, NULL, NULL, 'SysTecSQL', 'gobernacion11', 'prueba j', NULL, NULL, NULL, NULL, NULL, NULL, 13.78, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO public.carrito (id, id_usuario, hora, fecha, estatus, id_cuenta, referencia, fecha_pago, concepto, direccion_envio, motivo, fecha_asignado, hora_asignado, fecha_remitido, hora_remitido, fecha_entrega, hora_entrega, monto, monto_bs, descripcion_billete, tipo_pago) VALUES (141, 46, '12:09:49', '2020-09-08', 1, NULL, NULL, NULL, 'SysTecSQL', 'prueba de direccion de envio 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13.78, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO public.carrito (id, id_usuario, hora, fecha, estatus, id_cuenta, referencia, fecha_pago, concepto, direccion_envio, motivo, fecha_asignado, hora_asignado, fecha_remitido, hora_remitido, fecha_entrega, hora_entrega, monto, monto_bs, descripcion_billete, tipo_pago) VALUES (143, 46, '13:09:06', '2020-09-08', 6, NULL, NULL, NULL, 'SysTecSQL', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13.78, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO public.carrito (id, id_usuario, hora, fecha, estatus, id_cuenta, referencia, fecha_pago, concepto, direccion_envio, motivo, fecha_asignado, hora_asignado, fecha_remitido, hora_remitido, fecha_entrega, hora_entrega, monto, monto_bs, descripcion_billete, tipo_pago) VALUES (145, 46, '14:09:08', '2020-09-08', 6, NULL, NULL, NULL, 'SysTecSQL', 'direccion 12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13.78, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO public.carrito (id, id_usuario, hora, fecha, estatus, id_cuenta, referencia, fecha_pago, concepto, direccion_envio, motivo, fecha_asignado, hora_asignado, fecha_remitido, hora_remitido, fecha_entrega, hora_entrega, monto, monto_bs, descripcion_billete, tipo_pago) VALUES (151, 67, '03:09:26', '2020-09-11', 6, NULL, NULL, NULL, 'Bueno & Diaz Services Corp', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13.78, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO public.carrito (id, id_usuario, hora, fecha, estatus, id_cuenta, referencia, fecha_pago, concepto, direccion_envio, motivo, fecha_asignado, hora_asignado, fecha_remitido, hora_remitido, fecha_entrega, hora_entrega, monto, monto_bs, descripcion_billete, tipo_pago) VALUES (153, 46, '11:09:43', '2020-09-24', 1, NULL, NULL, NULL, 'SysTecSQL', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13.78, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO public.carrito (id, id_usuario, hora, fecha, estatus, id_cuenta, referencia, fecha_pago, concepto, direccion_envio, motivo, fecha_asignado, hora_asignado, fecha_remitido, hora_remitido, fecha_entrega, hora_entrega, monto, monto_bs, descripcion_billete, tipo_pago) VALUES (154, 46, '11:09:53', '2020-09-24', 1, NULL, NULL, NULL, 'SysTecSQL', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13.78, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO public.carrito (id, id_usuario, hora, fecha, estatus, id_cuenta, referencia, fecha_pago, concepto, direccion_envio, motivo, fecha_asignado, hora_asignado, fecha_remitido, hora_remitido, fecha_entrega, hora_entrega, monto, monto_bs, descripcion_billete, tipo_pago) VALUES (156, 62, '16:09:33', '2020-09-26', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, NULL, NULL);
INSERT INTO public.carrito (id, id_usuario, hora, fecha, estatus, id_cuenta, referencia, fecha_pago, concepto, direccion_envio, motivo, fecha_asignado, hora_asignado, fecha_remitido, hora_remitido, fecha_entrega, hora_entrega, monto, monto_bs, descripcion_billete, tipo_pago) VALUES (150, 67, '03:09:20', '2020-09-11', 6, NULL, NULL, NULL, 'Bueno & Diaz Services Corp', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13.78, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO public.carrito (id, id_usuario, hora, fecha, estatus, id_cuenta, referencia, fecha_pago, concepto, direccion_envio, motivo, fecha_asignado, hora_asignado, fecha_remitido, hora_remitido, fecha_entrega, hora_entrega, monto, monto_bs, descripcion_billete, tipo_pago) VALUES (159, 79, '15:09:16', '2020-09-27', 3, NULL, NULL, NULL, 'Bueno & Diaz', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 46.50, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO public.carrito (id, id_usuario, hora, fecha, estatus, id_cuenta, referencia, fecha_pago, concepto, direccion_envio, motivo, fecha_asignado, hora_asignado, fecha_remitido, hora_remitido, fecha_entrega, hora_entrega, monto, monto_bs, descripcion_billete, tipo_pago) VALUES (160, 67, '22:09:50', '2020-09-27', 1, NULL, NULL, NULL, 'Bueno & Diaz Services Corp', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 29.96, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO public.carrito (id, id_usuario, hora, fecha, estatus, id_cuenta, referencia, fecha_pago, concepto, direccion_envio, motivo, fecha_asignado, hora_asignado, fecha_remitido, hora_remitido, fecha_entrega, hora_entrega, monto, monto_bs, descripcion_billete, tipo_pago) VALUES (131, 46, '14:09:04', '2020-09-02', 6, NULL, NULL, NULL, 'SysTecSQL', 'gobernacion', NULL, NULL, NULL, NULL, NULL, '2020-09-30', NULL, 33.18, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO public.carrito (id, id_usuario, hora, fecha, estatus, id_cuenta, referencia, fecha_pago, concepto, direccion_envio, motivo, fecha_asignado, hora_asignado, fecha_remitido, hora_remitido, fecha_entrega, hora_entrega, monto, monto_bs, descripcion_billete, tipo_pago) VALUES (137, 46, '13:09:30', '2020-09-03', 6, NULL, NULL, NULL, 'SysTecSQL', 'prueba 1', NULL, NULL, NULL, NULL, NULL, '2020-09-30', '12:09:00', 20.18, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO public.carrito (id, id_usuario, hora, fecha, estatus, id_cuenta, referencia, fecha_pago, concepto, direccion_envio, motivo, fecha_asignado, hora_asignado, fecha_remitido, hora_remitido, fecha_entrega, hora_entrega, monto, monto_bs, descripcion_billete, tipo_pago) VALUES (161, 46, '12:09:30', '2020-09-30', 1, NULL, NULL, NULL, 'SysTecSQL', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 39.12, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO public.carrito (id, id_usuario, hora, fecha, estatus, id_cuenta, referencia, fecha_pago, concepto, direccion_envio, motivo, fecha_asignado, hora_asignado, fecha_remitido, hora_remitido, fecha_entrega, hora_entrega, monto, monto_bs, descripcion_billete, tipo_pago) VALUES (163, 67, '18:09:58', '2020-09-30', 1, NULL, NULL, NULL, 'Bueno & Diaz Services Corp', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 65.98, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO public.carrito (id, id_usuario, hora, fecha, estatus, id_cuenta, referencia, fecha_pago, concepto, direccion_envio, motivo, fecha_asignado, hora_asignado, fecha_remitido, hora_remitido, fecha_entrega, hora_entrega, monto, monto_bs, descripcion_billete, tipo_pago) VALUES (173, 69, '13:10:58', '2020-10-12', 1, NULL, NULL, NULL, '123', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 49.99, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO public.carrito (id, id_usuario, hora, fecha, estatus, id_cuenta, referencia, fecha_pago, concepto, direccion_envio, motivo, fecha_asignado, hora_asignado, fecha_remitido, hora_remitido, fecha_entrega, hora_entrega, monto, monto_bs, descripcion_billete, tipo_pago) VALUES (176, 67, '00:10:14', '2020-10-13', 3, NULL, NULL, NULL, 'Bueno & Diaz Services Corp', '', NULL, NULL, NULL, NULL, NULL, '2020-10-13', '00:10:00', 16.96, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO public.carrito (id, id_usuario, hora, fecha, estatus, id_cuenta, referencia, fecha_pago, concepto, direccion_envio, motivo, fecha_asignado, hora_asignado, fecha_remitido, hora_remitido, fecha_entrega, hora_entrega, monto, monto_bs, descripcion_billete, tipo_pago) VALUES (177, 68, '13:11:50', '2020-11-06', 1, NULL, NULL, NULL, '0', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23.99, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO public.carrito (id, id_usuario, hora, fecha, estatus, id_cuenta, referencia, fecha_pago, concepto, direccion_envio, motivo, fecha_asignado, hora_asignado, fecha_remitido, hora_remitido, fecha_entrega, hora_entrega, monto, monto_bs, descripcion_billete, tipo_pago) VALUES (178, 68, '13:11:52', '2020-11-06', 1, NULL, NULL, NULL, '0', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 53.60, NULL, NULL, 'TRANSFERENCIA');


--
-- Data for Name: grupos; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.grupos (id, denominacion, photo, photo_dir) VALUES (36, 'Grocery', 'Grocery 2.png', '505f3912-c716-4c21-ae72-80e5db05aec2');
INSERT INTO public.grupos (id, denominacion, photo, photo_dir) VALUES (38, 'Personal Care', 'Loreal.png', '505f3912-c716-4c21-ae72-80e5db05aec2');
INSERT INTO public.grupos (id, denominacion, photo, photo_dir) VALUES (37, 'Household Essentials', 'Household-Essentials.png', '505f3912-c716-4c21-ae72-80e5db05aec2');
INSERT INTO public.grupos (id, denominacion, photo, photo_dir) VALUES (39, 'Electronics', 'Tv.png', '505f3912-c716-4c21-ae72-80e5db05aec2');


--
-- Data for Name: subcategorias; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.subcategorias (id, id_grupos, denominacion) VALUES (14, 38, 'Deodorants');
INSERT INTO public.subcategorias (id, id_grupos, denominacion) VALUES (15, 38, 'Hair Care');
INSERT INTO public.subcategorias (id, id_grupos, denominacion) VALUES (16, 38, 'Baby and Child-Specific');
INSERT INTO public.subcategorias (id, id_grupos, denominacion) VALUES (17, 36, 'Beberages');
INSERT INTO public.subcategorias (id, id_grupos, denominacion) VALUES (19, 36, 'Energy Drinks');
INSERT INTO public.subcategorias (id, id_grupos, denominacion) VALUES (18, 36, 'Sport Drinks');
INSERT INTO public.subcategorias (id, id_grupos, denominacion) VALUES (20, 36, 'Juice');
INSERT INTO public.subcategorias (id, id_grupos, denominacion) VALUES (21, 36, 'Bottled Water');
INSERT INTO public.subcategorias (id, id_grupos, denominacion) VALUES (22, 36, 'Peanut Butter & Chocolate');
INSERT INTO public.subcategorias (id, id_grupos, denominacion) VALUES (23, 36, 'Cofee Drink');
INSERT INTO public.subcategorias (id, id_grupos, denominacion) VALUES (24, 37, 'Paper Towels');
INSERT INTO public.subcategorias (id, id_grupos, denominacion) VALUES (25, 37, 'Dishwashing');
INSERT INTO public.subcategorias (id, id_grupos, denominacion) VALUES (26, 37, 'Tissue Paper');
INSERT INTO public.subcategorias (id, id_grupos, denominacion) VALUES (27, 36, 'Sugar');
INSERT INTO public.subcategorias (id, id_grupos, denominacion) VALUES (28, 37, 'Disinfectant Cleaners');
INSERT INTO public.subcategorias (id, id_grupos, denominacion) VALUES (29, 37, 'Bleach');
INSERT INTO public.subcategorias (id, id_grupos, denominacion) VALUES (30, 36, 'Salt');
INSERT INTO public.subcategorias (id, id_grupos, denominacion) VALUES (31, 36, 'Oil');
INSERT INTO public.subcategorias (id, id_grupos, denominacion) VALUES (32, 36, 'Canned & Powdered Milk');
INSERT INTO public.subcategorias (id, id_grupos, denominacion) VALUES (33, 39, 'Wireless Chargers');
INSERT INTO public.subcategorias (id, id_grupos, denominacion) VALUES (34, 39, 'Printer');
INSERT INTO public.subcategorias (id, id_grupos, denominacion) VALUES (35, 39, 'Ink & Toner');
INSERT INTO public.subcategorias (id, id_grupos, denominacion) VALUES (36, 37, 'Cleaning Supplies');
INSERT INTO public.subcategorias (id, id_grupos, denominacion) VALUES (37, 38, 'Body Lotion');
INSERT INTO public.subcategorias (id, id_grupos, denominacion) VALUES (38, 38, 'Bar Sop');
INSERT INTO public.subcategorias (id, id_grupos, denominacion) VALUES (39, 38, 'Shampoo');


--
-- Data for Name: productos; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (138, 36, 'Coca Cola Zero Sugar 16.9oz - 24pk', 'Specifications
24 bottles - 16.9 fluid ounces each
Net volume: 11.99 Liters (405.6 fluid ounces)', 13.78, 'Coca-Cola-Zero-Sugar 16.9oz-24pk.png', 'f79fe1db-3a07-4ee5-bed6-319de54f06cc', '', true, 0.00, true, 17);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (137, 36, 'Diet Coke 16.9oz - 24pk', 'Specifications
24 bottles - 16.9 fluid ounces each
Calorie-free
Sugar-free
Net volume: 12 Liters (405.6 fluid ounces)
Buy sodas in bulk so the fridge is always stocked', 13.78, 'Diet-cola-16.9oz-24pk.png', '1c799e63-4659-4957-ad18-394abad9480f', '', true, 0.00, true, 17);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (164, 36, 'Diet Coke 12oz - 12pk', 'A delicious, crisp, sparkling cola for the refreshment you want
No calories, sugar-free
46 mg of caffeine per 12 fl oz serving
12 FL OZ per can of diet soda', 4.50, 'diet-coke-12oz-24pak.png', '62c116d1-b364-4b3a-bd3f-53533d3a6040', '', false, 0.00, true, 17);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (128, 38, 'Dove Men+Care', '2.7 oz, 2 unidades ', 6.40, '81Ghp96X77L._SX522_.jpg', '6e57b524-4490-4f67-83ea-02f51ead53f4', 'asdasd', false, 0.00, false, 14);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (127, 38, 'Dove Deodorant', '2.6 oz', 8.48, '41k+ZXPLtgL.jpg', 'c16d9417-ad6b-41af-af3a-d5b3ae9cb752', 'asd64a6d', false, 0.00, false, 14);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (140, 36, 'Gatorade Fruit Punch 32oz - 12pk', 'Loaded with carbohydrates and electrolytes that can keep you energized
Tested and used by professional athletes
Ideal for convenience stores and concession stands', 13.50, 'gatorade-fruitpunch32.png', '92aaf97f-792e-4b69-8dd7-543a84fd9036', '', false, 0.00, true, 18);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (139, 36, 'Gatorade Orange 32oz - 12pk', 'When you sweat, you lose more than water. Gatorade Thirst Quencher contains critical electrolytes to help replace what’s lost in sweat
Top off your fuel stores with carbohydrate energy, your body''s preferred source of fuel
Tested in the lab and used by the pros
Orange flavor
32oz bottles Pack of 12', 13.50, 'gatorade-orange32.png', '6598ca4b-e5ec-47fc-9bd1-c2a42fb30956', '', false, 0.00, true, 18);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (143, 36, 'Gatorade Cool Blue 20oz - 24pk', 'When you sweat, you lose more than water. Gatorade Thirst Quencher contains critical electrolytes to help replace what’s lost in sweat
Top off your fuel stores with carbohydrate energy, your body''s preferred source of fuel
Tested in the lab and used by the pros
Cool Blue flavor
20 oz. bottles (Pack of 24)', 15.50, 'gatodade-coolblue20.png', '87066bd3-7af7-42f3-b39c-3cd052919f83', '', false, 0.00, true, 18);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (145, 36, 'Gatorade Orange 20oz - 24pk', 'When you sweat, you lose more than water. Gatorade Thirst Quencher contains critical electrolytes to help replace what’s lost in sweat
Top off your fuel stores with carbohydrate energy, your body''s preferred source of fuel
Tested in the lab and used by the pros
Orange flavor
20 oz. bottles (Pack of 24)', 15.50, 'gatorade-orange-20oz.png', '07a58522-6b79-4e9b-9845-190f897a7f03', '', false, 0.00, true, 18);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (142, 36, 'Gatorade Cool Blue 32oz - 12pk', 'When you sweat, you lose more than water. Gatorade Thirst Quencher contains critical electrolytes to help replace what’s lost in sweat
Top off your fuel stores with carbohydrate energy, your body''s preferred source of fuel
Tested in the lab and used by the pros
Cool Blue flavor
32 oz. bottles (Pack of 12)', 13.50, 'gatorade-coolblue32.png', '535d00e0-1bc1-459b-8f81-14fe146b1bbe', '', false, 0.00, true, 18);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (141, 36, 'Gatorade Lemon-Lime 32oz - 12pk', 'When you sweat, you lose more than water. Gatorade Thirst Quencher contains critical electrolytes to help replace what’s lost in sweat
Top off your fuel stores with carbohydrate energy, your body''s preferred source of fuel
Tested in the lab and used by the pros
Lemon-Lime flavor
32oz. bottles (Pack of 12)', 13.50, 'gatodade-lemon32.png', '377f0077-3c92-4feb-bf66-3cee0321f664', '', false, 0.00, true, 18);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (144, 36, 'Gatorade Lemon-Lime 20oz - 24pk', 'When you sweat, you lose more than water. Gatorade Thirst Quencher contains critical electrolytes to help replace what’s lost in sweat
Top off your fuel stores with carbohydrate energy, your body''s preferred source of fuel
Tested in the lab and used by the pros
Lemon-Lime flavor
20 oz. bottles (Pack of 24)', 15.50, 'gatorade-lemon20.png', 'c134dbc5-e51b-461f-b87f-c59d16d97f60', '', false, 0.00, true, 18);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (146, 36, 'Gatorade Fruit Punch 20oz - 24pk', 'Loaded with carbohydrates and electrolytes that can keep you energized
Tested and used by professional athletes
Ideal for convenience stores and concession stands', 15.50, 'gatodade-fruitpunch20.png', 'cdbe3b06-0f34-4135-862c-45376649ce7c', '', false, 0.00, true, 18);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (136, 36, 'Coca Cola 16.9oz - 24 pk', 'Specifications
24 bottles - 16.9 fluid ounces each
Net volume: 12 Liters (405.6 fluid ounces)', 13.78, 'coca-cola-16.9oz-24pk.png', '3fee569a-dc3a-4787-a8c1-0e8b583e39be', '', false, 0.00, true, 17);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (167, 36, 'Tropicana 100% Orange Juice 10oz - 24pk', 'Specifications
24 bottles, 10 oz. each
100% daily value of vitamin C
140 calories per bottle
Ideal for foodservice', 14.98, 'Tropicana-orange-juice-10oz-24pk.png', '1986b717-42b2-4ff3-8e3d-54a4ce90a646', '', false, 0.00, true, 20);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (131, 38, 'Carrington Farms', '54 onzas ', 16.59, '81Lav7nDZpL._SL1500_.jpg', '36ec0da7-3c64-461d-81d3-6e412eb5bf7b', '', false, 0.00, false, 15);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (147, 36, 'Red Bull Energy Drink 8.4oz - 24pk', 'Designed to help you focus and enhance concentration, this Red Bull Energy Drink is an absolute essential for anyone interested crushing the competition.
Specifications
24 cans - 8.4 fluid ounces each
80 mg per can
Net volume: 5.96 Liters (201.6 fluid ounces)', 32.98, 'Redbull-8.4.png', '242f995d-a4a4-4703-9a09-c602104ba161', '', true, 0.00, true, 19);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (148, 36, 'Red Bull Energy Sugarfree 8.4oz - 24pk', 'Red Bull is very aware of its environmental responsibility and is constantly striving for improvement. Red Bull has made a conscious decision to use 100% recyclable aluminium cans, and we developed our environmentally friendly Red Bull Coolers which use up to 45% less energy than conventional fridges.

Red Bull Sugarfree: Wings Without Sugar
Red Bull Sugarfree is a beverage perfect for when you''re in need of wings without sugar and only 5 calories per 8.4-fluid ounces
Made with High-Quality Ingredients such as Caffeine, Taurine, B-Group Vitamins, Aspartame & Acesulfame K, Water
Add this 6 count of Red Bull Sugarfree Energy Drink 4 Packs to your basket and get twenty-four Red Bull Sugarfree cans, 8.4 Fl Oz (250mL) per can, 100%-recyclable can
Red Bull Vitalizes Body and Mind', 32.98, 'Redbull-sugarfree-8.png', '75be6349-6c01-4f74-a0f6-c9e80a9a88a3', '', false, 0.00, true, 19);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (160, 36, 'Monster Energy Original 16oz - 24pk', 'Specifications
24 cans - 16 fluid ounces each
Net volume: 11.36 liters (384 oz.)
**Not Recommended for children, people sensitive to caffeine, pregnant women or women who are nursing.', 33.98, 'Monster-Original-16oz-24pk.png', '7d8a0341-194b-4b30-8035-a1d41a5ed9a2', '', false, 0.00, true, 19);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (153, 36, 'Zephyrhills 100% Natural Spring Water 23.7oz (700ml) - 24pk', 'Specifications
24 bottles - 23.7 fluid ounces each
No calories
No sweeteners
No artificial colors or flavors
Every bottle is 100% recyclable (excluding label and cap)
Net volume: 16.82 Liters (568.8 fluid ounces)', 6.98, 'zephyrhills-700ml-24pk.png', '89ee6a5b-aeb8-49a7-892d-970943b6f35d', '', false, 0.00, true, 21);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (149, 36, 'Mott''s Apple Juice 64oz - 8pk plastic bottles', 'Nothing satisfies quite like Mott’s Apple Juice. Packed with ripe apple flavor, Mott’s Original is 100% fruit juice and delivers 2 servings of fruit* in each 8 fl oz cup. There’s plenty to enjoy and share in this 64 fl oz bottle, perfect for after school or mealtime refreshment. It is an excellent source of vitamin C, with no added sugar and a delicious taste the entire family will love. Treat your family to the classic taste of Mott’s 100% Apple Juice. *2 fruit servings per 8 fl oz 1 serving = ½ cup per current USDA Dietary Guidelines.', 22.50, 'Motts-64oz.png', '0e2afae1-83a3-4012-ad59-2b8479cbe2be', '', false, 0.00, true, 20);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (162, 36, 'Monster Energy Lo-Carb 16oz - 24pk', 'Specifications
24 cans - 16 fluid ounces each
15 calories per serving
Net volume: 11.36 Liters (384 fluid ounces)
**Not Recommended for children, people sensitive to caffeine, pregnant women or women who are nursing.', 33.98, 'Monster-Lob-Carb-16oz-24pk.png', 'af8609bd-fdd2-42a2-91f5-67cd379e263a', '', false, 0.00, true, 19);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (151, 36, 'Tropicana Apple Juice 15.2oz - 12pk', '210 calories per bottle.
100% Vitamin C
Apple Juice from Concentrate with Other Natural Flavors and Ingredients
100% Juice
Kosher', 15.58, 'tropicana-appeljuice-15.png', '5310c235-a9b6-46b4-a423-25139e874cca', '', false, 0.00, true, 20);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (161, 36, 'Monster Energy Zero Ultra 16oz - 24pk', 'Specifications
24 cans - 16 fluid ounces each
Zero calories
Zero sugar
Net volume: 11.36 liters (384 fluid ounces)
**Not Recommended for children, people sensitive to caffeine, pregnant women or women who are nursing.', 33.98, 'Monster-Zero-Ultra-16oz-24pk.png', '2a0bcbb4-5787-4a2d-88c6-cd99944ff081', '', false, 0.00, true, 19);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (154, 36, 'Zephyrhills 100% Natural Spring Water 1L - 15pk', 'Specifications
15 bottles - 33.81 fluid ounces each
No calories
No sweeteners
No artificial colors or flavors
Every bottle is 100% recyclable (excluding label and cap)
Net volume: 15 Liters (507.21 fluid ounces)', 6.98, 'zephyrhills-1lt-15pk.png', '03e8acf4-705a-4a52-a279-76231af9480a', '', false, 0.00, true, 21);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (155, 36, 'S.Pellegrino Sparkling Natural Mineral Water 16.9oz - 24pk', 'Specifications
24 bottles - 16.9 fluid ounces each
Imported from Italy
Zero calories
Net volume: 12 Liters (405.6 fluid ounces)', 18.98, 'S.Pellegrino-16.9-24pk.png', 'e2484aaf-9fb1-437d-b724-37f7d24f32db', '', false, 0.00, true, 21);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (156, 36, 'Perrier Sparkling Natural Mineral Water 16.9oz - 24pk', 'Specifications
24 bottles - 16.9 fluid ounces each
Fits in any refrigerator or pantry
Net volume: 12 Liters (405.6 fluid ounces)', 18.98, 'Perrier-16.9oz-24pk.png', '29abe5be-2ad1-4996-bcc1-e115f82298e0', '', false, 0.00, true, 21);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (157, 36, 'Evian Natural Spring Water 1L - 12pk', 'Specifications
12 bottles - 1 Liter each
Filtered naturally, without chemicals
100% natural, 0% processed
Contains naturally occurring electrolytes
Net volume: 12 Liters (405.77 fluid ounces)', 15.48, 'Evian-1L-12pk.png', '61d4c900-b632-4099-948b-8662dc4c1923', '', false, 0.00, true, 21);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (152, 36, 'Zephyrhills 100% Natural Spring Water 16.9oz - 40pk', 'Specifications
40 bottles - 16.9 fluid ounces each
No sweeteners
No calories
No artificial flavors or colors
Every bottle is 100% recyclable (excluding label and cap)
Net volume: 20 Liters (676 fluid ounces)', 5.98, 'zephyrhills-16.9oz-40pk.png', 'b4722cb7-dd36-4d26-9d83-7a5660e59290', '', false, 0.00, true, 21);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (158, 36, 'Perrier Sparkling Natural Mineral Water 11.15oz - 24pk', 'Specifications
24 bottles - 11.15 fluid ounces each
6 individual packs of 4 bottles
Low mineral content
No calories
No carbs
No sugar
Net volume: 7.91 Liters (267.6 fluid ounces)', 16.98, 'Perrier-11.15oz-24pk.png', 'c8639365-bf5e-4830-a469-171e2226430a', '', false, 0.00, true, 21);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (163, 36, 'Sprite 16.9oz - 24 pk', 'Specifications
24 bottles - 16.9 fluid ounces each
Net volume: 12 Liters (405.6 fluid ounces)', 13.78, 'sprite-16.9oz-24pk.png', '64d2d3a0-5994-42eb-a4d6-82921ddf9d9c', '', false, 0.00, true, 17);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (165, 36, 'Coke Zero Sugar 12oz - 12pk', 'Enjoy Coke Zero''s real Coca-Cola taste and zero calories with meals, on the go, or to share. Serve ice cold for maximum refreshment.


Great Coca-Cola taste, zero sugar
Refreshing, crisp taste pairs perfectly with a meal or with friends
34 mg of caffeine in each 12 oz serving
12 FL OZ in each can', 4.50, 'zero-coke-12oz.png', 'df3b9319-76fa-4331-9dc5-9a7517cf6863', '', false, 0.00, true, 17);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (166, 36, 'Coca Cola Soda Soft Drink, 12oz - 12pk', '12 cans of Coca-Cola Original Taste the refreshing, crisp taste you know and love
Great taste since 1886
34 mg of caffeine in each 12 oz serving
12 FL OZ in each can', 4.50, 'coca-cola-12oz-24pak.png', '52ff3bd0-c19f-48e4-8312-302c7612221d', '', false, 0.00, true, 17);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (159, 36, 'Glaceau SmartWater 1 L - 15 pk', 'Specifications
15 bottles - 1 Liter each
Zero calories
Zero sodium
Plant bottle, up to 30% made from plants
Clean, crisp taste
Net volume: 15 Liters (507.21 fluid ounces)', 16.48, 'Smart-water-1L-15pk.png', '072618b0-1942-48c5-934e-ec2c106a4070', '', false, 0.00, true, 21);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (169, 36, 'Nutella Hazelnut Spread 13oz - 15pk', 'Size : 13 Ounce (Pack of 1)
The Original Hazelnut Spread…unique in all the world.
Made from quality ingredients like roasted hazelnuts and cocoa.
Packaged in the iconic Nutella jar.
Handy size for everyday enjoyment – great for the office, too.', 48.53, 'Nutella-13oz-15pk.png', '56041975-269c-4303-a170-5099d9251d49', '', false, 0.00, true, 22);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (170, 36, 'Nutella & Go 1.8oz - 16 ct.', 'Specifications
16 packs - 1.8 ounces each
Net weight: 1.8 pounds (28.8 ounces)', 14.98, 'Nutella-Go-16pk.png', '36f2b10e-474a-4767-ad8c-4a0b85853fcb', '', false, 0.00, true, 22);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (171, 36, 'Starbucks Frappuccino Coffee Drink 9.5oz - 15pk', 'Specifications
15 bottles - 9.5 fluid ounces each
No trans fat
Net volume: 4.21 Liters (142.5 fluid ounces)', 17.98, 'Starbucks-Cofee-15pk.png', 'ab8de689-9fb2-4e8a-bda8-c37f1fae7a48', '', false, 0.00, true, 23);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (172, 36, 'Starbucks Frappuccino Coffee Drink, Vanilla 9.5oz - 15pk', 'Specifications
15 glass bottles - 9.5 fluid ounces each
Net volume: 4.21 Liters (142.5 fluid ounces)', 17.98, 'Starbucks-vanilla-15pk.png', 'fff8f26d-1270-4fc5-bbf1-1079d7ed54d0', '', false, 0.00, true, 23);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (173, 36, 'Starbucks Frappuccino Coffee Drink, Mocha 9.5oz - 15pk', 'Specifications
15 bottles - 9.5 ounces each
Net volume: 4.21 Liters (142.5 fluid ounces)', 17.98, 'Starbucks-Mocha-15pk.png', '95bee707-8c64-4876-adb5-0c80efaa4310', '', false, 0.00, true, 23);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (182, 37, 'Ajax Advanced Citrus Blast Dishwashing Liquid 102oz - 6pk', '•	Great at eliminating odors
•	Ajax dishwashing liquid cuts through tough grease
•	Very effective at removing stains
•	Refeshing citrus scent freshens up the whole room
•	Reputable cleaning power of Ajax', 34.56, 'Ajax-Citrus-102oz.png', '6bd8b82d-04d4-4c25-bc11-601290c245a4', '', false, 0.00, true, 25);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (183, 37, 'Ajax Dish Liquid, Tropical Lime Twist 28oz - 9pk', 'Tough on grease and powerful on plastic. Gets dishes sparkling clean. Leaves behind a pleasant scent.
• Washes away bacteria from hands while leaving dishes sparkling clean
• Keeps dishes clean and odor free
• Stronger than grease - cuts right through
• Gentle and phosphate free
• Tough on grease and powerful on plastic.
• Gets dishes sparkling clean.
• Leaves behind a pleasant scent Ajax Dish Liquid, Tropical Lime Twist 28oz (Pack of 9)', 18.72, 'Ajax-Lime-Tropical-Lime-Twist-28oz-9pk.png', 'b0b1492c-4ed0-4737-bf30-4f0a50bec488', '', false, 0.00, true, 25);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (184, 37, 'AJAX Ultra Triple Action Liquid Dish Orange 28oz - 9pk', 'AJAX Ultra Triple Action Liquid Dish Soap, Orange, 9pk
•	Strips the grease
•	Removes stuck-on food
•	Leaves dishes sparkling clean
•	Washes away bacteria from hands', 18.72, 'Ajax-Orange-28oz-9pk.png', '508abb7c-c62c-49f2-93f3-3a02061a92ac', '', false, 0.00, true, 25);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (177, 36, 'Snapple Mango Tea 16oz - 12pk', 'Ingredients:
Filtered water, sugar, citric acid, tea, natural flavors', 12.22, 'snapple-Mango-16floz-1.png', 'ae79c847-849f-43fc-9ae2-a0802a550f29', '', false, 0.00, true, 20);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (180, 37, 'Palmolive Ultra Strength Dishwashing Liquid, Original 20oz - 9pk', '•	Instantly cuts through grease
•	Max strength formula (vs Palmolive Essential Clean original formula)
•	Tough on grease, soft on hands
•	Removes 24-hour stuck-on food
•	Concentrated dish liquid formula
•	Phosphate free
•	Fights odor
•	Residue free', 19.59, 'Palmolive-Original-20oz-2.png', '6e3055e8-0700-441b-8bf7-d158703a3180', '', false, 0.00, true, 25);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (181, 37, 'Palmolive Dishwashing Original 28oz - 9pk', 'Palmolive Original dish liquid leaves your toughest dishes, pots and pans sparkling clean.

•	Tough on Grease, Soft on Hands
•	Refreshing Original Fragrance
•	No food residue
•	Non concentrated
•	Made in USA and Phosphate Free', 19.59, 'Palmolive-Original-28oz-9pk.png', 'e2954131-5e4b-4d39-8d03-594ccf7c2af0', '', false, 0.00, true, 25);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (187, 37, 'Ajax Ultra Liquid Dish Soap, Vinegar + Lime - 28oz - 9pk', 'Ajax Ultra Liquid Dish Soap, Vinegar + Lime - 28oz – 9pk
•	Strips the grease, guaranteed
•	Removes stuck-on-food
•	Contains fresh lime scent
•	Leaves dishes sparkling clean', 18.72, 'Ajax-Vineger-Lime-28oz-9pk.png', 'edb55e9e-039d-4061-9015-536b89989f15', '', false, 0.00, true, 25);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (185, 37, 'Ajax Ultra Super Degreaser Liquid Dish Soap, Lemon 28oz -9pk', 'Ajax Ultra Super Degreaser Liquid Dish Soap, Lemon – 28 oz (9 Pack)
•	Strips the grease on contact
•	Removes stuck-on-food
•	Contains fresh lemon scent
•	Leaves dishes sparkling clean 
•	With 100% real citrus extracts
•	America''s #1 Value Dish Brand
•	Can be used for other tough jobs beyond dishwashing (ex. pre-treat laundry, wash tires, wipe 
 appliances)
•	Contains 9 28oz bottles of Ajax Ultra Super Degreaser Liquid Dish Soap
•	Every hero needs a sidekick', 18.72, 'Ajax-Lemon-28oz-9pk.png', '26ad66d2-460b-4d83-a435-a8c49534f946', '', false, 0.00, true, 25);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (186, 37, 'Ajax Ultra Triple Action Liquid Dish Soap Orange 52oz  - 6pk', 'Ajax Ultra Triple Action Liquid Dish Soap, Orange 52oz:
•	Strips the grease
•	Removes stuck-on food
•	Leaves dishes sparkling clean
•	Washes away bacterial from hands (when used as a handsoap, to wash away dirt and bacteria from hands, wash them for 20 seconds under clean running water)', 22.79, 'Ajax-Orange-52oz-6pk.png', 'e95d7c9f-6548-4201-aab7-8ae8c9fca434', '', false, 0.00, true, 25);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (188, 37, 'Ajax Ultra Triple Action Liquid Dish Soap Orange - 14oz - 20pk', 'Ajax Ultra Triple Action Liquid Dish Soap, Orange – 14oz – 20pk
•	Strips the grease
•	Removes stuck-on food
•	Leaves dishes sparkling clean
•	Washes away bacterial from hands (when used as a handsoap, to wash away dirt and bacteria from hands, wash them for 20 seconds under clean running water)', 21.87, 'Ajax-Orange-14oz-20pk.png', 'b09e60ff-306e-40e3-a1bc-396b5bca3868', '', false, 0.00, true, 25);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (189, 37, 'Ajax Ultra Triple Action Liquid Dish Soap Lemon 14oz - 20pk', 'Ajax Ultra Triple Action Liquid Dish Soap, Lemon – 14oz – 20pk
•	Strips the grease, guaranteed
•	Removes stuck-on-food
•	Contains fresh lemon scent
•	Leaves dishes sparkling clean', 21.87, 'Ajax-Lemon-14oz-20pk.png', '88fe033f-4c42-4edf-aaf8-71059af1d0b7', '', false, 0.00, true, 25);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (179, 37, 'Plenty Paper Towel 15 Rolls', 'Surface Layer
Quickly wicks moisture. Gentle to the touch.
Inner Layer
Pulls in and holds liquid from the surface.
Bottom Layer
Adds strength and durability in scrubbing.
15 ROLLS, 52 2-PLY SHEETS PER ROLL
', 13.64, 'Plenty-15Roll.png', '62daa40b-66d2-44e6-bce0-bd0cb6e30f18', '0183689182738', false, 0.00, true, 24);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (190, 37, 'Panda Bath Tissue 4x1 / 6pk 24 rolls', '12 ROLLS, 176 2-PLY SHEETS PER ROLL
234.7 SQ FT (21.8 M2) - 4 IN X 4 IN (10.1 CM X 10.1 CM', 12.86, 'Pandax4.png', '852ba52e-39a4-4ddb-b06f-aa11f1f611f2', '0183689001381', false, 0.00, true, 26);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (175, 36, 'Snapple Kiwi Strawberry 16oz - 12pk', 'Ingredients:
Filtered water, sugar, kiwi juice concentrate, citric acid, strawberry juice concentrate, acacia gum, natural flavors, vegetable juice concentrates (for color), ester gum', 12.22, 'snapple-Kiwi-Strawberry-tea-16floz-1.png', 'f75fee0e-4f68-4f5f-899a-477724aac074', '', false, 0.00, true, 20);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (191, 37, 'Bounty Select-A-Size Paper Towels White 12 rolls', 'This pack contains Bounty white Select-A-Size paper towels that are 2x more absorbent** and strong when wet, so you can get the job done quickly.Bounty Select-A-Size Paper Towels, White (12 rolls)', 19.98, 'Bounty-12Roll.png', '78695e18-ae07-42fa-902a-5b421a4fb347', '', false, 0.00, true, 24);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (192, 36, 'Snow White Sugar 4 LB - 10pk', ' Sugar is essential for baking warm fresh pies, mixing into cold brewed tea, and for creating many other irresistibly sweet menu items. This sugar is the perfect addition to baking, beverages, confectionery treats, or even for filling table containers for self-service. Guests will love the sweet taste of this fine granulated sugar', 24.96, 'Snow-White-4lb.png', '4a07a472-1803-457c-9947-aeef7c42b613', '', false, 0.00, true, 27);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (194, 36, 'Fanta Orange Soda 12oz - 12 Pack', '•	Bright, bubbly and instantly refreshing, Fanta is made with 100% natural flavors and is caffeine-free
•	Its bright color, bold fruit taste, and tingly carbonation liven up special times with friends and family
•	Fanta is fun and has a great fruity taste with 100% natural flavors
•	Choose from a range of bold fruit flavors', 4.50, 'Fanta-Orange-12oz-24pak.png', '5b99d029-a6da-4bf7-b158-f2a4844eeb68', '', false, 0.00, true, 17);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (195, 36, 'Ocean Spray Cranberry Juice 96oz - 2 pk', 'Specifications
•	100% of the recommended daily amount of vitamin C
•	Each 8 oz. serving provides 1 delicious serving of fruit
•	No preservatives and no artificial colors or flavors
•	Farmer-owned so 100% of the profits from the farmer-owners'' fruit go back to them', 7.98, 'Ocean-Spray-Juice-96oz-2pk.png', '60d136a0-f5a4-41e4-b7d8-c74ab1564bc9', '', false, 0.00, true, 20);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (168, 36, 'Ocean Spray Cranberry Cocktail Juice 96oz - 2pk', 'Specifications
2 jugs - 96 fluid ounces each
No high fructose corn syrup
No preservatives
No artificial colors or flavors
Net volume: 5.68 Liters (192 fluid ounces)', 7.98, 'Ocean-Spray-Original-96oz-2pk.png', '66c0e24f-a957-4060-9b8e-5239b52424a5', '', false, 0.00, true, 20);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (197, 36, 'Fiji Natural Artesian Water 16.9oz - 24pk', '•	Everyday hydration: Perfect for quenching thirst on the go, in the office, and at events
•	Natural electrolytes: As tropical rain filters through volcanic rock, it gathers electrolytes naturally, giving Fiji Water significantly more electrolytes than other brands
•	Natural artesian: Bottled from a natural artesian aquifer in the remote Fiji Islands
•	Soft, smooth taste: As it filters through ancient rock, water naturally acquires that silica that gives Fiji its signature soft, smooth tast', 22.98, 'Water-Fiji-16.png', '37583d5d-a7c3-4ef5-b872-cd119b46ac10', '', false, 0.00, true, 21);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (198, 36, 'Fiji Natural Artesian Water 1 L - 12pk', 'Case includes 12, 1.0L (33.8oz) bottles of FIJI Water. The 1.0L size is perfect for hiking, traveling, and everyday hydration. Its soft, smooth taste comes from its extraordinary source -- a protected artesian aquifer found deep underground in the remote Fiji Islands. FIJI Water is the choice of discerning top chefs, fine restaurants and hotels around the world.
o	PACK SIZE: Pack of 12, 1L (33.8oz) bottles
o	EVERYDAY HYDRATION: Perfect for quenching thirst on the go, in the office, or while traveling
o	NATURAL ELECTROLYTES: As tropical rain filters through volcanic rock, it gathers electrolytes naturally, giving FIJI Water significantly more electrolytes than other brands
o	NATURAL ARTESIAN: Bottled from a natural artesian aquifer in the remote Fiji Islands', 21.98, 'Water-Fiji-1L.png', '84daf710-2c21-43f5-b587-9bb1ff6a3a97', '', false, 0.00, true, 21);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (200, 36, 'Vita Coco Coconut Water 11.1oz - 12pk', 'Specifications
•	12 bottles - 11.1 fluid ounces each
•	Fat free
•	Net volume: 3.94 Liters (133.2 fluid ounces)', 11.82, 'Vitta-coco-11oz-12pk.png', '2aa9bc15-fac9-49e3-b092-af18ad8a97e7', '', false, 0.00, true, 17);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (196, 36, 'Coca Cola de Mexico 12oz - 24pk', 'Specifications
24 bottles - 12 fluid ounces each
Net volume: 8.52 Liters (288 fluid ounces)', 22.00, 'Coca-Cola-Mexico-12oz-24pk.png', 'f4610a0d-6963-460d-b995-4504fbe1a465', '', false, 0.00, true, 17);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (203, 37, 'Pine-Sol All-Purpose Cleaner, Original Pine 24oz -12pk', 'With Pine-Sol All Purpose Cleaner, you only need one cleaner to fight dirt, grime and grease, while EPA registered to disinfect and kill 99% of germs on most surfaces throughout your home. Pine-Sol gives you 4X cleaning action and a great, long lasting scent. It deodorizes and wipes out odor causing bacteria leaving a pleasant Pine scent. This concentrated formula cleaner can tackle any challenge, just mix Pine-Sol All Purpose Cleaner with water at different strengths to adjust your cleaning power each time, unlike premixed cleaners.', 28.13, 'Pinesol-Original-24oz-12pk.png', '5005f17a-4066-4775-acc7-df5044caeb00', '', false, 0.00, true, 28);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (202, 36, 'Canada Dry Ginger Ale 16.9oz - 24pk', '•	Refreshing ginger taste
•	Caffeine free
•	Crisp and refreshing beverage and cocktail mixer
•	24-pack of .5 liter bottles
Ingredients:
Ingredients: carbonated water, high fructose corn syrup, citric acid, sodium benzoate preservative, natural flavors, caramel color', 13.78, 'Ginger-Ale-16.png', '6447fc76-69be-4d55-839c-43cd42dbd974', '', false, 0.00, true, 17);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (205, 37, 'Clorox Concentrated Germicidal Bleach, 121oz - 3pk', 'Clorox Concentrated Germicidal Bleach is EPA-registered to kill 39 organisms, including multiple strains of MRSA, norovirus, flu virus, E. Coli, listeria and Salmonella when used as directed. Works on countertops, floors, toilets and other hard surfaces. Removes stains and kills mold and mildew. Ideal for use in busy healthcare environments, offices, schools and other commercial facilities. Pack of three 121 oz bottles.', 19.18, 'Germicidal-Bleach-121oz.png', 'baec778a-85c9-4341-b5df-16ce3470ca62', '10044600309665', false, 0.00, true, 29);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (204, 37, 'Pure Bright Germicidal Ultra Bleach  Concentrate 6 gal - 6pk', 'Germicidal bleach is specifically formulated for the tough cleaning needs of institutions and industrial cleaning settings, including clinics, hospitals, fitness clubs and restaurants. Pure Bright Germicidal Ultra Bleach contains no phosphates and is EPA-registered and NSF-approved with 27 CDC-approved germ kill claims. Use the bleach to provide a safe and germ-free environment in the kitchen, bathroom and work areas. General cleaning dilution ratio is 6 oz. to one gallon of water.', 18.56, 'Pure-Brigth.png', 'a12aef91-c437-4f4c-b3fa-fc4ccf091a22', '0059647210181', false, 0.00, true, 29);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (201, 36, 'Nestle Pure Life Purified Water 16.9oz - 40pk', 'Specifications
•	40 bottles - 16.9 fluid ounces each
•	No calories
•	No sweeteners
•	No artificial colors or flavors
•	Net volume: 19.99 Liters (676 fluid ounces)', 4.98, 'Nestle-16.png', '2100d5e9-ccac-4b4e-9a11-4f4293e45dd9', '', false, 0.00, true, 21);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (199, 36, 'Materva Yerba Mate Soda 12oz  24pk', 'Specifications
24 cans - 12 fluid ounces each
Net volume: 8.52 Liters (288 fluid ounces)', 9.54, '0007718633003_A.png', 'be25ab9d-8b8c-4acd-b73f-dc42894610f6', '', false, 0.00, true, 17);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (206, 37, 'Clorox Performance Bleach 121oz - 3pk', 'Specifications
•CLOROX™ CLEAN: Get more cleaning power per drop with this concentrated formula with 50% more uses reducing the amount required for cleaning (compared to Clorox® Performance Bleach)
•CONCENTRATED BLEACH: More concentrated bleach with the Clorox™ whitening, dirt-fighting and disinfecting power you love and trust for your household surfaces and white laundry
•DISINFECTING BLEACH: This cleaning bleach kills 99.9% of household germs and bacteria including norovirus, flu virus, MRSA, E. Coli, and Salmonella left on household surfaces with cleaning and disinfecting power
•STAIN REMOVER: Packed with the power of CloroMax™ Technology, this bleach delivers brighter and longer-lasting whites, protects surfaces by reducing soil adhesion to make cleaning quicker and easier
•AMERICA’S #1 BLEACH: Get the whitest whites with this concentrated laundry bleach that is filtered three times to deliver the purest bleach to remove 70% more stains than detergents alone', 15.98, 'Clorox-Performance-121oz-3pk.png', '08544a8f-fffc-4435-852d-76ccf1e8e62e', '', false, 0.00, true, 29);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (207, 36, 'Red & White Plain Salt 26oz - 24pk', 'Red & White Table Salt is an all-purpose salt perfect for everything from cooking and baking to filling the shakers on your table. Simplify your time in the kitchen with Red & White Table Salt. At Red & White Salt, we make sure only the best salt crystals reach your plate, so every dish you create will be as flavorful as you intend.', 16.62, 'Red-White-salt-26oz-24pk', 'b913ffc4-b847-4627-ac6a-70df696f0797', '', false, 0.00, true, 30);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (209, 36, 'Coffee mate The Original Powdered Coffee Creamer 56oz - 1pk', 'Specifications
•	Cholesterol free
•	Lactose free
•	Gluten free
•	Kosher dairy
•	56 ounces', 6.98, 'Coffe-Mate-56oz.png', '0d0a515a-1b10-4c4a-a921-95f5478d1aa8', '', false, 0.00, true, 23);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (210, 36, 'Coffee Mate Original Powder Coffee Creamer 11 oz - 8pk', '•	Specifications
•	Coffee-Mate® Powder Coffee Creamer
•	(8) 11 oz. canisters
•	Gluten-free
•	Cholesterol-free
•	Coffee''s perfect mate
•	Non-dairy, lactose-free coffee creamer
•	Unique easy-to-pour lid is perfect for home or office', 10.98, 'Coffe-Mate-11oz-8pk.png', '1ff89e78-1be4-442d-8e88-58ca1b751fb4', '', false, 0.00, true, 23);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (211, 36, 'Coffee Mate The Orginial Liquid Creamer Singles 180 ct.', 'Transform the coffee you like into the coffee you love with Coffee mate The Original coffee creamer. It''s rich and smooth with a classic taste that is lactose-free, cholesterol-free, and gluten-free. With Coffee mate non-dairy coffee creamer single creamer tubs, you can create your perfect cup of velvety goodness by adding the right amount of flavor you want every time morning, noon, or night. Check out the variety of delicious flavors Coffee mate has to offer.', 10.98, 'Coffee-mate-180pk.png', '2e1404d4-5874-4860-941b-5bfeafe9a8fb', '', false, 0.00, true, 23);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (212, 36, 'Splenda No Calorie Sweetener 1,200 ct.', 'Specifications
•	Splenda No Calorie Sweetener Packets
•	1,200 Individual Packets
•	Made in the USA
•	0 Calories
•	Great for coffee, tea, fruit, cereals and more!', 21.98, 'Splendar-1200pk.png', 'dd4b8d49-4251-4c54-921b-68a73eb404c2', '', false, 0.00, true, 27);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (213, 36, 'Truvia Calorie Free Natural Sweetener 400 ct.', 'Specifications
•	Gluten free
•	Contains three ingredients: Erythritol, Stevia Leaf Extract and Natural Flavors
•	400 Individual Packets', 14.98, 'Truvia-400pk.png', '5e693ea5-eb2a-420a-abee-66553e07ce59', '', false, 0.00, true, 27);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (193, 36, 'Red Bull Summer Edition Watermelon Energy Drink 8.4oz - 24pk', 'Flavor Name:Watermelon | Size:8.4 Fl Oz (Pack of 24)

Red Bull gives you Wings in 1987, Red Bull not only launched a completely new product, It created a whole new product category — energy drinks. From Day one, Red Bull has been giving wings to people and ideas, setting many milestones in sports and culture. When TO DRINK Red Bull is appreciated worldwide by top athletes, busy professionals, college students and travelers on long journeys. For those who wish to have red Bulls benefits without sugars, Red Bull Sugar Free provides the wings of Red Bull Energy Drink without sugars. ', 35.45, 'Redbull-watermelon-8.png', 'bd2d45ce-f4bf-4d43-9fdd-771ccfa7ebf9', '', true, 0.00, true, 19);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (214, 37, 'Fabuloso Cleaner Lavender Scent 16.9oz (500ml) / 24pk', 'Fabuloso Multi-Use Cleaner, Lavender Scent, 16.9 oz Bottle, 24/Carton - An all-purpose cleaner. Cleans floors, bathrooms, kitchens, walls and other surfaces. Pleasant, long-lasting scent. pH neutral formula won''t damage surfaces.
•	All-purpose cleaner for floors, bathrooms, kitchens, walls and other surfaces.
•	Pleasant, long-lasting scent.
•	pH neutral formula.', 23.57, 'Fabuloso-Lavander-500ml.png', 'a24d671a-7875-44a7-80c6-a4f9a9fc7400', '', false, 0.00, true, 28);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (208, 37, 'Scott Bath Tissue 1-ply 36 Rolls Individually Wrapped Toilet Paper', 'Enjoy a gentle clean with the Scott® 1100 Unscented Bath Tissue Bonus Pack (1-ply, 36 Rolls). With 1000 sheets per roll, it provides an economical option for homes and businesses.
Specifications
Bonus 100 extra sheets per roll
1 roll = 1,100 sheets
1-ply sheets
4.1', 24.88, 'scott-tissue.png', '0e9ffce3-c137-4dfb-b909-2c90b7208f11', '0054000123344', false, 0.00, true, 26);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (217, 36, 'Mazola Vegetable Oil Plus 40oz -12 Bottle', 'Great for: Salad dressings, stir-frying, sautéing and baking
Product can be stored for 1–2 years (depending on bottle type) under normal storage conditions (70°–80°F). Storage below 45°F may cause clouding, and exposure to ultraviolet light can cause off flavors.', 41.72, 'Mazola-vegetal-oil-40oz.png', '2710a3e9-bd30-4c0c-aa0e-3ec6073127f2', '', false, 0.00, true, 31);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (216, 36, 'Mazola Canola Oil 40oz - 12 Bottle', '•	40-Ounce of Mazola Canola Oil
•	Great for baking, grilling, sautÃ©ing,  and marinating
•	Neutral taste to let the true flavors of food shine through
•	Canola oil is a cholesterol free food with 14g of total fat per serving.
•	0g trans fat per serving.', 41.72, 'Mazola-canola-oil-40oz.png', '17f54537-d710-4ca6-af76-2ee865acd6fa', '', false, 0.00, true, 31);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (215, 36, 'Mazola Corn Oil 40oz - 12 Bottle', 'Mazola® Corn Oil is an ideal cooking oil for getting great flavor out of your food and not your oil. Mazola corn oil contains no additives; it is just 100% pure oil. It is also cholesterol-free and contains zero grams of trans fat.
•	Great for cooking, frying and baking
•	Cholesterol-free
•	No trans fat', 41.72, 'Mazola-corn-oil-40oz.png', '755bd6f6-924e-43e3-aaf9-ede5305ac3fc', '', false, 0.00, true, 31);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (218, 36, 'Mazola Corn Oil 24oz - 12 Bottle', '•	24-Ounce of Mazola Corn Oil
•	Mazola Corn Oil great for baking, grilling, sautéing, and marinating
•	Neutral taste to let the true flavors of food shine through
•	Naturally cholesterol free and 100% pure
•	4x More Natural Plant Sterols than Olive Oil and 40% more Natural Plant Sterols than Canola Oil', 36.52, 'Mazola-corn-oil-24oz.png', '01af1433-f7e1-4054-b099-b0823670f10a', '', false, 0.00, true, 31);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (219, 36, 'Magnolia Sweetened Condensed Milk 14oz - cans 24pk', 'Magnolia Sweetened Condensed Milk is a great addition in any of your favorite recipes. This sweetened condensed milk has been specifically formulated using an exclusive vacuum process to be used in dessert dishes like flan and tres leches cake, but it has many more uses and is a good addition to your kitchen''s pantry. You will get a consistent flavor, that is slightly sweeter than other brands of condensed milk, in a ready-to-use can when you choose Magnolia Sweetened Condensed Milk.', 39.12, 'Magnolia-sweetened-condensed-14oz.png', '89d8dd6f-ff84-47d6-9dd3-749a533480a4', '', false, 0.00, true, 32);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (221, 39, 'Ubio Labs Wireless Qi Charging Pad - 2pk', 'Enjoy the convenience of fast wireless charging for your compatible iOS or Android device. 
This wireless charging pad offers up to 10W of wireless charging power for Samsung and 
other compatible Android devices, and 7.5W for compatible iPhone devices.
•	10W Fast wireless charging
•	Charge additional device with 12W USB-A port
•	Includes wall adapter with 6'' cable', 49.99, 'Wireless-Charging-Pad-2pk.png', '546bef91-6a96-4996-83d0-496594698b98', '', false, 0.00, true, 33);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (222, 39, 'Epson EcoTank 3760SE All-in-One Wireless Printer With 2 Bonus Black Ink Bottles', '3-in-1 with Wireless & Ethernet: Print / Copy / Scan
Ink: Four EcoTank Ink Bottles
ISO Print Speed: Black: 15 ISO ppm†; Color: 8.0 ISO ppm†', 349.99, 'Epson-ET3760SE.png', '1f7357ae-0856-409d-89b7-9ad1fb0f98f0', '', false, 0.00, true, 34);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (223, 39, 'Epson EcoTank 502 Ink Bottles', 'Specifications
-DEVICE TYPE: Inkjet Printer
-COLOR(S): Black
-CMY SUPPLY TYPE: Ink
-COMPATIBLE WITH: Epson EcoTank ET-2700 and 3700 Series Printers
-GENUINE REPLACEMENT INK: Yes
-YIELD TYPE: Extra-High Capacity Bottles', 65.98, '502-Ink-Bottles.png', '4dd6128d-c6a7-4885-898f-bd70957ad47d', '', false, 0.00, true, 35);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (224, 36, 'Snapple Lemon Tea 16oz - 12pk', 'DETAILS: Ingredients: Filtered water, sugar, citric acid, tea, natural flavors', 12.22, 'snapple-lemon-tea-16floz.png', '14e89ced-a6b1-4bc2-b135-4b126bf5cd9d', '', false, 0.00, true, 20);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (150, 36, 'Snapple - Diet Lemon Tea 16oz - 12pk', 'Made from the Best Stuff on Earth.Snapple All Natural, Naturally Flavored, 16 fl oz Glass Bottles (DIET Lemon, Pack of 12)
Ingredients:
Filtered water, citric acid, tea, aspartame, potassium citrate, natural flavors', 12.22, 'snapple-diet-lemon-tea-16floz.png', '47229932-1a04-4bf5-a75d-3984543e5731', '', false, 0.00, true, 20);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (235, 38, 'Dove Beauty Bar Sensitive Skin 3.75oz - 16 ct.', 'About this item
•	Made with ¼ moisturizing cream
•	Unscented and hypoallergenic
•	Dermatologist recommended soap for sensitive skin
•	Can be used for infants and children
•	Won’t leave skin feeling dry or tight like ordinary bar soap', 17.98, 'Dove-Sop-Sensitive-Skin-16bar.png', 'b112a82c-de4a-46ed-b463-b5d62cc71bfc', '', false, 0.00, true, 38);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (225, 36, 'Snapple Fruit Punch 16oz -12pk', 'Ingredients:
Filtered water, sugar, apple, pear and grape juice concentrates, citric acid, natural flavors', 12.22, 'snapple-Fruit-Punch-16floz.png', '902f9a74-22e8-417a-9deb-afad4ccd4fe5', '', false, 0.00, true, 20);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (227, 36, 'Mott''s Apple Juice 10oz - 24 glass bottles', 'Nothing satisfies quite like Mott’s Apple Juice. Packed with ripe apple flavor, these 10oz glass bottles are 100% fruit juice', 16.96, 'Motts-10oz-24pk.png', 'c22c129e-e438-4ded-b95d-1d77ff18f3c1', '', false, 0.00, true, 20);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (229, 37, 'Clorox Disinfecting Wipes Fresh Scent 35ct', '•	DISINFECTING WIPES: Clorox Disinfecting Wipes are triple-layered to clean disinfect and remove allergens for 5x cleaning power and leave a clean Fresh scent.
•	ALL-PURPOSE WIPE: These all-purpose disposable wipes remove common allergens germs and messes on surfaces like kitchen counters bathroom surfaces and more.
•	MULTI-SURFACE CLEANER: Wipes are safe for finished wood sealed granite and stainless steel and on non-food-contact surfaces in the home office classroom pet area dorm and locker room.
•	DISPOSABLE WIPES: This 35-count canister easily dispenses disposable antibacterial wipes that have a clean Fresh scent. Dispose of wipes according to manufacturer instructions.
•	NO BLEACH: Disinfect and deodorize with Clorox Disinfecting Wipes for a bleach-free, all-in-one cleaning alternative that’s safe to use on toys and more.', 3.90, 'Desinfecting-Wipes-35sheets.png', '8d15d5bc-2c74-41fa-8aea-35b5b53282ac', '', false, 0.00, true, 36);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (230, 37, 'Clorox Disinfecting Wipes, Bleach Free Cleaning Wipes 5pk - 425 wipes', '•	Clorox® Disinfecting Wipes are triple-layered to clean, disinfect and remove allergens for 5x cleaning power and leave a pleasant scent.
•	Kills 99.9% of Viruses* & Bacteria
•	Kills 99.999% of Bacteria* in 10 seconds', 28.96, 'Clorox-Wipes-425wipes.png', 'e516c58c-7ac9-4ce1-9416-e2b97dfc1713', '', false, 0.00, true, 36);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (231, 37, 'Lysol Disinfecting Wipes Lemon & Lime Blossom 320ct - (4pk x 80ct)', '•	Kills 99.9% of viruses & bacteria, including 8 cold & flu viruses when used as directed (EPA #777-114)
•	Unique Micro-Pocket Pattern ideal to quickly trap & lift everyday messes
•	Removes allergens
•	Safe to use on electronics: Smartphones, Tablets & Remote Controls
•	3X stronger vs. a paper towel: clean more, use less
•	Specially crafted, uplifting fragrance', 26.68, 'Lysol-Wipes-Lemon-Lema-Blossom-320wipes.png', '7a8f529c-c4b8-4408-b03d-906130c7ef8f', '', false, 0.00, true, 36);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (232, 38, 'Nivea Body Express Hydration Lotion 400 ml', 'Ingredients: Aqua, Glycerin, Isopropyl Palmitate, Glyceryl Glucoside, Glyceryl Stearate SE, C1215 Alkyl Benzoate, Cetearyl Alcohol, Maris Sal, Sodium Carbomer, Sodium Cetearyl Sulfate, Dimethicone, Methylisothiazolinone, Phenoxyethanol, Linalool, Benzyl Alcohol, Limonene, Citronellol, Parfum
', 6.00, 'Nivea-400ml.png', '200be67c-3db4-4886-af80-ac6a1b884b9f', '', false, 0.00, true, 37);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (220, 36, 'Red & White Sweetened Condensed Milk 14oz - cans 24pk', 'Specifications
24/12 oz. cans
With Vitamin D added', 35.61, 'Red&White-sweetened-condensed-14oz.png', '92c22e7c-fa85-4115-af7e-5519de99ff6b', '', false, 0.00, true, 32);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (234, 38, 'Lubriderm Daily Moisture Lotion 24oz - 2 pk & Advanced Therapy Lotion 6oz - 1pk', 'Ingredients
Water, mineral oil, glycerin, caprylic/capric triglyceride, stearic acid, cetyl alcohol, phenoxyethanol, cetearyl alcohol, dimethicone, carbomer, ceteareth-20, sodium hydroxide, sodium citrate, methylparaben, propylparaben, fragrance, citric acid, ethylparaben, panthenol
Specifications
•	Helps hydrate, replenish, and strengthen skin moisture barrier
•	For extra-dry skin
•	Moisturizer contains Vitamins E and B5 plus skin-essential lipids
•	Clinically proven to help moisturize for 24 hours
•	Non-greasy lotion formula with a clean feel', 15.48, 'Lubriderm-3pk.png', '8063a3e9-23b8-4377-84c4-e9216103b7a6', '', false, 0.00, true, 37);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (236, 38, 'Dove Beauty Bar White 3.75oz - 16 ct.', 'Specifications
•	With 1/4 moisturizing cream and mild cleansers, Dove helps your skin maintain its natural moisture.
•	Since Dove White Beauty Bar is made with gentle cleansers, you can use it every day on both your body and face.
•	Classic formula leaves skin soft and smooth
•	It''s not soap; it''s a beauty bar.', 17.98, 'Dove-Sop-White-16bar.png', 'a726793a-abf6-4f7e-b435-b0e0b76ff6c7', '', false, 0.00, true, 38);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (233, 38, 'Dove Nourishing Secrets Restoring Ritual Coconut Body Lotion 400ml', 'Dove Nourishing Secrets Restoring Ritual Coconut Body Lotion 400ml', 6.00, 'Dove-Restourig-Ritual-400ml.png', '88e3cbde-b25f-4166-bde2-e368ff0d1dc3', '', false, 0.00, true, 37);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (238, 38, 'Irish Spring Original Deodorant Soap 3.7oz - 20 ct.', 'Inactive Ingredients: Soap (Sodium Tallowate and/or Sodium Palmate, Sodium Cocoate and/or Sodium Palm Kernelate), Water, Glycerin (Skin Conditioner), Hydrogenated Tallow Acid, Coconut Acid, Fragrance, Sodium Chloride, Pentasodium Pentetate, Pentaerythrityl Tetra-Di-T-Butyl Hydroxyhydrocinnamate, Titanium Dioxide, D&C Green No.8, FD&C Green No.3.
Specifications
•	20 bar value pack
•	Made in USA
•	Recyclable
•	Bath-size bar', 10.84, 'Irish-20bar.png', '59002aca-3c59-4d5a-86b5-ba736f9fbc53', '', false, 0.00, true, 38);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (240, 36, 'Red Bull Energy Sugarfree 12oz - 24pk', 'Ingredients: Carbonated Water, Citric Acid, Taurine, Sodium Bicarbonate, Magnesium Carbonate, Caffeine, Acesulfame K, Aspartame, Niacinamide, Calcium Pantothenate, Pyridoxine HCl, Vitamin B12, Xanthan Gum, Natural and Artificial Flavors, Colors.Phenyketonurics: Contains Phenylalanine.', 50.98, 'Redbull-Sugarfree-12oz.png', '5cd3b451-0e3b-45a4-a606-b43094bb0f95', '', false, 0.00, true, 19);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (239, 36, 'Red Bull Energy 12oz - 24pk', 'Specifications
•	24 cans - 12 fluid ounces each
•	Made with high-quality ingredients 
•	Caffeine content: 114 mg/12 fl oz.
•	Net volume: 8.52 Liters (288 fluid ounces)', 50.98, 'Redbull-Original-12oz.png', 'dcb7bc36-c82c-4c5d-a38f-b669d240eab5', '', false, 0.00, true, 19);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (241, 36, 'Arizona Iced Tea Lemon Cans 16oz - 24pk', 'This drink created 25 years ago is still one of its most popular flavors. Its secret is simple: it is made with real Black Tea and lemon juice that creates a drink with a slightly sweet and very refreshing taste.', 16.94, 'Arizona-Iced-te-Lemon-24pk.png', '37dd2fa7-6bf7-4add-a6e4-032917f87359', '', false, 0.00, true, 17);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (242, 36, 'Arizona Green Tea With Ginseng and Honey 23oz - 24pk', 'Specifications
•	24 cans - 23 fluid ounces each
•	No additives or preservatives
•	Net volume: 16.32 Liters (552 fluid ounces)', 16.94, 'Arizona-Green-te-24pk.png', '2c0bc0a9-b2e0-46cf-be40-39d8f391e504', '', false, 0.00, true, 17);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (246, 36, 'Morton Salt Plain 26oz - 24pk', '•	Great for everyday use - This is a non-iodized salt, perfect for everything from cooking and baking to filling table salt shakers
•	All-purpose - This all-purpose salt features uniformly shaped crystals, making it the perfect salt when precise measurements are critical
•	Easy to use - Simplify your cooking needs in the kitchen with Morton all-purpose table salt
•	This table salt is available in a 26 oz. canister
•	This is not an iodized salt
•	At Morton Salt, we make sure only the best salt crystals reach your plate, so every dish you create will be as flavorful as you intend.', 23.70, 'Morton-Salt-26oz-24pk.png', 'dd8635ec-0ecd-46b4-a5e3-165a837b14bd', '', false, 0.00, true, 30);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (250, 36, 'Sprite Lemon Soda 20oz - 24pk', 'Features
•	Sprite, 20 Fl Oz Bottle – 24 Pack
•	Lemon-Lime Soda, 100% Natural Flavors
•	Clean, Crisp, Fresh Tasting and No Caffeine
•	Perfect Size for Drinking with Meals, On-The-Go, or Any Time
•	What''s in a Sprite? Its Perfectly Clear. Natural Flavors and No Caffeine', 23.99, 'Sprite-20oz-24pk.png', '194eed62-c36f-4e22-8b51-ad31a85fe502', '', false, 0.00, true, 17);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (245, 36, 'Arizona Watermelon Juice Drink 23oz - 24pk', 'AriZona made it possible and now you can refresh yourself in the best way with this new incredible flavor, perfectly balanced and delicious, also 100% natural!
Filtered water, high fructose corn syrup, watermelon juice, concentrated kiwi, pear and pineapple juice, mango puree, citric acid, natural flavors, carrot juice, Acacia gum, SUCRALOSE (0.48 mg / SERVING - 0.2 mg / 100ml). Fortified with Vitamins C. Very low in Sodium. Without gas.', 16.94, 'Arizona-Watermelon-te-24pk.png', '8cb74ac8-f028-410d-b78b-ba800b74ffac', '', false, 0.00, true, 17);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (244, 36, 'Arizona Iced Tea Peach Flavor 23oz - 24pk', 'Arizona Diet Peach Tea a perfect and unusual balance between Diet, sweet and refreshing! Contains no calories, carbohydrates, or artificial ingredients.', 16.94, 'Arizona-Iced-te-Peach-24pk.png', '398efe10-0cd3-472d-93ed-4ba441cf72e6', '', false, 0.00, true, 17);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (243, 36, 'Arizona Raspberry Tea 15.5oz - 24pk', 'It is a unique drink, made with Premium Black Tea preparation and real raspberry juice. It has a perfect balance, sweet and fresh, which combines perfectly with a tasty touch of flavor for Black Tea.', 15.50, 'Arizona-Iced-te-Raspberry-24pk.png', '2b527b7a-e834-4d12-8320-70c40bf3091b', '', false, 0.00, true, 17);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (251, 36, 'Red & White Evaporated Milk 12oz - 24pk', 'Features
Red and white Evaporated Milk', 21.67, 'Red&White-Evaporate-Milk-12oz.png', 'aa6bbfdf-8546-4954-9041-54a3833023bf', '', false, 0.00, true, 32);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (249, 36, 'Coke Zero Sugar 20oz - 24pk', 'Ingredients
Carbonated Water, Caramel Color, Phosphoric Acid, Aspartame, Potassium Benzoate (to Protect Taste), Natural Flavors, Potassium Citrate, Acesulfame Potassium, Caffeine.', 23.99, 'Coca-Cola-Zero-Sugar-20oz-24pk.png', 'efceefdb-4221-482c-addf-8f9c33dcdd5e', '', false, 0.00, true, 17);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (248, 36, 'Diet Coke 20oz - 24pk', 'Ingredients
Carbonated Water, Caramel Color, Aspartame, Phosphoric Acid, Potassium Benzoate (to Protect Taste), Natural Flavors, Citric Acid, Caffeine.', 23.99, 'Diet-Coke-20oz-24pk.png', '52358ec6-140c-41e6-8cff-83a06d389343', '', false, 0.00, true, 17);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (247, 36, 'Coca Cola 20oz - 24pk', 'Ingredients:
Carbonated Water, High Fructose Corn Syrup, Caramel Color, Phosphoric Acid, Natural Flavors, Caffeine.', 23.99, 'Coca-Cola-20oz-24pk.png', '2d3c2906-b89d-4cfb-939a-3aff74a394e0', '', false, 0.00, true, 17);
INSERT INTO public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion, status, id_subcategoria) VALUES (228, 36, 'Red & White Vegetable Oil 48 oz - 9pk', 'Red & White Vegetable Oil 48 oz - 9pk', 22.05, 'Red&White-Vegetal-Oil-48oz-2.png', 'a1db770a-57bf-4441-ba13-3cd0245a3b86', '', false, 0.00, true, 31);


--
-- Data for Name: carrito_productos; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (227, 130, 137, 1, 13.78);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (282, 171, 202, 1, 13.78);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (228, 131, 131, 2, 16.59);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (284, 173, 221, 1, 49.99);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (287, 176, 227, 1, 16.96);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (288, 177, 249, 1, 23.99);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (289, 178, 179, 1, 13.64);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (290, 178, 191, 2, 19.98);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (237, 137, 138, 1, 13.78);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (238, 137, 128, 1, 6.40);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (239, 138, 137, 1, 13.78);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (241, 140, 137, 1, 13.78);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (242, 141, 138, 1, 13.78);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (244, 143, 137, 1, 13.78);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (246, 145, 138, 1, 13.78);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (251, 150, 138, 1, 13.78);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (252, 151, 137, 1, 13.78);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (254, 153, 202, 1, 13.78);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (255, 154, 202, 1, 13.78);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (257, 156, 146, 1, 15.50);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (258, 156, 145, 1, 15.50);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (259, 156, 144, 1, 15.50);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (265, 159, 145, 1, 15.50);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (266, 159, 144, 1, 15.50);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (267, 160, 213, 2, 14.98);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (268, 161, 219, 1, 39.12);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (270, 163, 223, 1, 65.98);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (271, 164, 151, 1, 15.58);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (272, 164, 162, 5, 33.98);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (273, 164, 127, 1, 8.48);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (274, 164, 192, 1, 24.96);
INSERT INTO public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) VALUES (275, 164, 179, 1, 13.64);


--
-- Data for Name: clasificacion; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- Data for Name: contactos; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- Data for Name: motorizado; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- Data for Name: tipos_movimientos; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.tipos_movimientos (id, denominacion) VALUES (1, 'ENTRADA');
INSERT INTO public.tipos_movimientos (id, denominacion) VALUES (2, 'SALIDA');
INSERT INTO public.tipos_movimientos (id, denominacion) VALUES (3, 'AJUSTE');


--
-- Data for Name: movimientos; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.movimientos (id, id_producto, cantidad, precio, fecha, tipo_movimiento, id_carrito) VALUES (110, 137, 1, 13.78, '2020-09-02', 2, 130);
INSERT INTO public.movimientos (id, id_producto, cantidad, precio, fecha, tipo_movimiento, id_carrito) VALUES (111, 131, 2, 16.59, '2020-09-03', 2, 131);
INSERT INTO public.movimientos (id, id_producto, cantidad, precio, fecha, tipo_movimiento, id_carrito) VALUES (112, 131, 2, 16.59, '2020-09-03', 2, 131);
INSERT INTO public.movimientos (id, id_producto, cantidad, precio, fecha, tipo_movimiento, id_carrito) VALUES (113, 137, 1, 13.78, '2020-09-08', 2, 143);
INSERT INTO public.movimientos (id, id_producto, cantidad, precio, fecha, tipo_movimiento, id_carrito) VALUES (114, 137, 1, 13.78, '2020-09-08', 2, 143);
INSERT INTO public.movimientos (id, id_producto, cantidad, precio, fecha, tipo_movimiento, id_carrito) VALUES (115, 138, 1, 13.78, '2020-09-08', 2, 145);
INSERT INTO public.movimientos (id, id_producto, cantidad, precio, fecha, tipo_movimiento, id_carrito) VALUES (116, 138, 1, 13.78, '2020-09-08', 2, 145);
INSERT INTO public.movimientos (id, id_producto, cantidad, precio, fecha, tipo_movimiento, id_carrito) VALUES (117, 137, 1, 13.78, '2020-09-11', 2, 151);
INSERT INTO public.movimientos (id, id_producto, cantidad, precio, fecha, tipo_movimiento, id_carrito) VALUES (118, 137, 1, 13.78, '2020-09-11', 2, 151);
INSERT INTO public.movimientos (id, id_producto, cantidad, precio, fecha, tipo_movimiento, id_carrito) VALUES (119, 138, 1, 13.78, '2020-09-27', 2, 150);
INSERT INTO public.movimientos (id, id_producto, cantidad, precio, fecha, tipo_movimiento, id_carrito) VALUES (120, 138, 1, 13.78, '2020-09-27', 2, 150);
INSERT INTO public.movimientos (id, id_producto, cantidad, precio, fecha, tipo_movimiento, id_carrito) VALUES (121, 145, 1, 15.50, '2020-09-27', 2, 159);
INSERT INTO public.movimientos (id, id_producto, cantidad, precio, fecha, tipo_movimiento, id_carrito) VALUES (122, 144, 1, 15.50, '2020-09-27', 2, 159);
INSERT INTO public.movimientos (id, id_producto, cantidad, precio, fecha, tipo_movimiento, id_carrito) VALUES (123, 138, 1, 13.78, '2020-09-30', 2, 137);
INSERT INTO public.movimientos (id, id_producto, cantidad, precio, fecha, tipo_movimiento, id_carrito) VALUES (124, 128, 1, 6.40, '2020-09-30', 2, 137);
INSERT INTO public.movimientos (id, id_producto, cantidad, precio, fecha, tipo_movimiento, id_carrito) VALUES (125, 138, 1, 13.78, '2020-09-30', 2, 137);
INSERT INTO public.movimientos (id, id_producto, cantidad, precio, fecha, tipo_movimiento, id_carrito) VALUES (126, 128, 1, 6.40, '2020-09-30', 2, 137);
INSERT INTO public.movimientos (id, id_producto, cantidad, precio, fecha, tipo_movimiento, id_carrito) VALUES (127, 151, 1, 15.58, '2020-10-01', 2, 164);
INSERT INTO public.movimientos (id, id_producto, cantidad, precio, fecha, tipo_movimiento, id_carrito) VALUES (128, 162, 5, 33.98, '2020-10-01', 2, 164);
INSERT INTO public.movimientos (id, id_producto, cantidad, precio, fecha, tipo_movimiento, id_carrito) VALUES (129, 127, 1, 8.48, '2020-10-01', 2, 164);
INSERT INTO public.movimientos (id, id_producto, cantidad, precio, fecha, tipo_movimiento, id_carrito) VALUES (130, 192, 1, 24.96, '2020-10-01', 2, 164);
INSERT INTO public.movimientos (id, id_producto, cantidad, precio, fecha, tipo_movimiento, id_carrito) VALUES (131, 179, 1, 13.64, '2020-10-01', 2, 164);
INSERT INTO public.movimientos (id, id_producto, cantidad, precio, fecha, tipo_movimiento, id_carrito) VALUES (132, 151, 1, 15.58, '2020-10-01', 2, 164);
INSERT INTO public.movimientos (id, id_producto, cantidad, precio, fecha, tipo_movimiento, id_carrito) VALUES (133, 162, 5, 33.98, '2020-10-01', 2, 164);
INSERT INTO public.movimientos (id, id_producto, cantidad, precio, fecha, tipo_movimiento, id_carrito) VALUES (134, 127, 1, 8.48, '2020-10-01', 2, 164);
INSERT INTO public.movimientos (id, id_producto, cantidad, precio, fecha, tipo_movimiento, id_carrito) VALUES (135, 192, 1, 24.96, '2020-10-01', 2, 164);
INSERT INTO public.movimientos (id, id_producto, cantidad, precio, fecha, tipo_movimiento, id_carrito) VALUES (136, 179, 1, 13.64, '2020-10-01', 2, 164);
INSERT INTO public.movimientos (id, id_producto, cantidad, precio, fecha, tipo_movimiento, id_carrito) VALUES (137, 227, 1, 16.96, '2020-10-13', 2, 176);


--
-- Data for Name: municipios; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.municipios (id, denominacion) VALUES (1, 'Acosta');
INSERT INTO public.municipios (id, denominacion) VALUES (2, 'Bolivar');
INSERT INTO public.municipios (id, denominacion) VALUES (3, 'Buchivacoa');
INSERT INTO public.municipios (id, denominacion) VALUES (4, 'Cacique Manaure');
INSERT INTO public.municipios (id, denominacion) VALUES (5, 'Carirubana');
INSERT INTO public.municipios (id, denominacion) VALUES (6, 'Colina');
INSERT INTO public.municipios (id, denominacion) VALUES (7, 'Dabajuro');
INSERT INTO public.municipios (id, denominacion) VALUES (8, 'Democracia');
INSERT INTO public.municipios (id, denominacion) VALUES (9, 'Falcon');
INSERT INTO public.municipios (id, denominacion) VALUES (10, 'Federacion');
INSERT INTO public.municipios (id, denominacion) VALUES (11, 'Jacura');
INSERT INTO public.municipios (id, denominacion) VALUES (12, 'Los Taques');
INSERT INTO public.municipios (id, denominacion) VALUES (13, 'Mauroa');
INSERT INTO public.municipios (id, denominacion) VALUES (14, 'Miranda');
INSERT INTO public.municipios (id, denominacion) VALUES (15, 'Monseñor Iturriza');
INSERT INTO public.municipios (id, denominacion) VALUES (16, 'Palmasola');
INSERT INTO public.municipios (id, denominacion) VALUES (17, 'Petit');
INSERT INTO public.municipios (id, denominacion) VALUES (18, 'Piritu');
INSERT INTO public.municipios (id, denominacion) VALUES (19, 'San Francisco');
INSERT INTO public.municipios (id, denominacion) VALUES (20, 'Jose Laurencio Silva');
INSERT INTO public.municipios (id, denominacion) VALUES (21, 'Sucre');
INSERT INTO public.municipios (id, denominacion) VALUES (22, 'Tocopero');
INSERT INTO public.municipios (id, denominacion) VALUES (23, 'Union');
INSERT INTO public.municipios (id, denominacion) VALUES (24, 'Urumaco');
INSERT INTO public.municipios (id, denominacion) VALUES (25, 'Zamora');


--
-- Data for Name: parroquias; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (1, 1, 'Capadare');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (2, 1, 'La Pastora');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (3, 1, 'Libertador');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (4, 1, 'San Juan de los Cayos');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (5, 2, 'La Peña');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (6, 2, 'Aracua');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (7, 2, 'San Luis');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (8, 3, 'Bariro');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (9, 3, 'Borojo');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (10, 3, 'Capatarida');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (11, 3, 'Guajiro');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (12, 3, 'Seque');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (13, 3, 'Valle de Eroa');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (14, 3, 'Zazarida');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (15, 4, 'Cacique Manaure');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (16, 5, 'Norte');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (17, 5, 'Carirubana');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (18, 5, 'Santa Ana');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (19, 5, 'Urbana Punta Cardon');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (20, 6, 'La Vela de Coro');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (21, 6, 'Acurigua');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (22, 6, 'Guaibacoa');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (23, 6, 'Las Calderas');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (24, 6, 'Mataruca');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (25, 7, 'Dabajuro');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (26, 8, 'Agua Clara');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (27, 8, 'Avaria');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (28, 8, 'Pedregal');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (29, 8, 'Piedra Grande');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (30, 8, 'Purureche');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (31, 9, 'Adaure');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (32, 9, 'Adícora');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (33, 9, 'Baraived');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (34, 9, 'Buena Vista');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (35, 9, 'Jadacaquiva');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (36, 9, 'El Vinculo');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (37, 9, 'El Hato');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (38, 9, 'Moruy');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (39, 9, 'Pueblo Nuevo');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (40, 10, 'Agua Larga');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (41, 10, 'Churuguara');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (42, 10, 'El Pauji');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (43, 10, 'Independencia');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (44, 10, 'Mapararí');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (45, 11, 'Agua Linda');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (46, 11, 'Araurima');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (47, 11, 'Jacura');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (48, 12, 'Los Taques');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (49, 12, 'Judibana');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (50, 13, 'Mene de Mauroa');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (51, 13, 'San Felix');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (52, 13, 'Casigua');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (53, 14, 'Guzman Guillermo');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (54, 14, 'Mitare');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (55, 14, 'Rio Seco');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (56, 14, 'Sabaneta');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (57, 14, 'San Antonio');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (58, 14, 'San Gabriel');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (59, 14, 'Santa Ana');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (60, 15, 'Boca del Tocuyo');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (61, 15, 'Chichiriviche');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (62, 15, 'Tocuyo de la Costa');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (63, 16, 'Palmasola');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (64, 17, 'Cabure');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (65, 17, 'Colina');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (66, 17, 'Curimagua');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (67, 18, 'Piritu');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (68, 18, 'San Jose de la Costa');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (69, 19, 'Capital San Francisco Mirimire');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (70, 20, 'Tucacas');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (71, 20, 'Boca de Aroa');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (72, 21, 'Sucre');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (73, 21, 'Pecaya');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (74, 22, 'Tocopero');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (75, 23, 'El Charal');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (76, 23, 'Las Vegas del Tuy');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (77, 23, 'Santa Cruz de Bucaral');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (78, 24, 'Urumaco');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (79, 24, 'Bruzual');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (80, 25, 'Puerto Cumarebo');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (81, 25, 'La Cienaga');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (82, 25, 'La Soledad');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (83, 25, 'Pueblo Cumarebo');
INSERT INTO public.parroquias (id, id_municipio, denominacion) VALUES (84, 25, 'Zazarida');


--
-- Data for Name: tasas; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.tasas (id, fecha, monto) VALUES (7, '2020-06-04', 195000.00);


--
-- Name: bancos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.bancos_id_seq', 5, true);


--
-- Name: bancos_usa_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.bancos_usa_id_seq', 1, false);


--
-- Name: carrito_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.carrito_id_seq', 178, true);


--
-- Name: carrito_productos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.carrito_productos_id_seq', 290, true);


--
-- Name: clasificacion_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.clasificacion_id_seq', 6, true);


--
-- Name: contactos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.contactos_id_seq', 27, true);


--
-- Name: cuentas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.cuentas_id_seq', 41, true);


--
-- Name: estatus_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.estatus_id_seq', 1, false);


--
-- Name: grupos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.grupos_id_seq', 44, true);


--
-- Name: motorizado_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.motorizado_id_seq', 1, true);


--
-- Name: movimientos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.movimientos_id_seq', 137, true);


--
-- Name: municipios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.municipios_id_seq', 1, false);


--
-- Name: parroquias_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.parroquias_id_seq', 84, true);


--
-- Name: privilegios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.privilegios_id_seq', 1, false);


--
-- Name: productos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.productos_id_seq', 251, true);


--
-- Name: subcategorias_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.subcategorias_id_seq', 40, true);


--
-- Name: tasas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.tasas_id_seq', 7, true);


--
-- Name: tipos_movimientos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.tipos_movimientos_id_seq', 1, false);


--
-- Name: usuarios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.usuarios_id_seq', 92, true);


--
-- PostgreSQL database dump complete
--

