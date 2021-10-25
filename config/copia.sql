--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.19
-- Dumped by pg_dump version 9.5.19

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: bancos; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.bancos (
    id integer NOT NULL,
    denominacion text NOT NULL,
    url text NOT NULL
);


ALTER TABLE public.bancos OWNER TO programacion;

--
-- Name: bancos_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.bancos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.bancos_id_seq OWNER TO programacion;

--
-- Name: bancos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.bancos_id_seq OWNED BY public.bancos.id;


--
-- Name: carrito; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.carrito (
    id integer NOT NULL,
    id_usuario integer NOT NULL,
    hora time without time zone NOT NULL,
    fecha date DEFAULT ('now'::text)::date NOT NULL,
    estatus integer DEFAULT 0 NOT NULL,
    id_cuenta integer,
    referencia text,
    fecha_pago date,
    concepto text,
    direccion_envio text,
    motivo text,
    fecha_asignado date,
    hora_asignado time without time zone,
    fecha_remitido date,
    hora_remitido time without time zone,
    fecha_entrega date,
    hora_entrega time without time zone,
    monto numeric(26,2) DEFAULT 0.00,
    monto_bs numeric(26,2) DEFAULT 0.00
);


ALTER TABLE public.carrito OWNER TO programacion;

--
-- Name: carrito_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.carrito_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.carrito_id_seq OWNER TO programacion;

--
-- Name: carrito_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.carrito_id_seq OWNED BY public.carrito.id;


--
-- Name: carrito_productos; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.carrito_productos (
    id integer NOT NULL,
    id_carrito integer,
    id_producto integer NOT NULL,
    cantidad integer DEFAULT 0 NOT NULL,
    precio numeric(26,2) DEFAULT 0.00 NOT NULL
);


ALTER TABLE public.carrito_productos OWNER TO programacion;

--
-- Name: carrito_productos_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.carrito_productos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.carrito_productos_id_seq OWNER TO programacion;

--
-- Name: carrito_productos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.carrito_productos_id_seq OWNED BY public.carrito_productos.id;


--
-- Name: clasificacion; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.clasificacion (
    id integer NOT NULL,
    id_carrito integer NOT NULL,
    estrellas integer,
    comentario text
);


ALTER TABLE public.clasificacion OWNER TO programacion;

--
-- Name: clasificacion_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.clasificacion_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.clasificacion_id_seq OWNER TO programacion;

--
-- Name: clasificacion_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.clasificacion_id_seq OWNED BY public.clasificacion.id;


--
-- Name: contactos; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.contactos (
    id integer NOT NULL,
    titulo text NOT NULL,
    mensaje text NOT NULL,
    correo text NOT NULL
);


ALTER TABLE public.contactos OWNER TO programacion;

--
-- Name: contactos_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.contactos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.contactos_id_seq OWNER TO programacion;

--
-- Name: contactos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.contactos_id_seq OWNED BY public.contactos.id;


--
-- Name: cuentas; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.cuentas (
    id integer NOT NULL,
    banco integer NOT NULL,
    numero_cuenta text,
    tipo_cuenta text,
    cedula text NOT NULL,
    responsable text,
    telefono text NOT NULL,
    correo text NOT NULL,
    id_usuario integer NOT NULL
);


ALTER TABLE public.cuentas OWNER TO programacion;

--
-- Name: cuentas_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.cuentas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cuentas_id_seq OWNER TO programacion;

--
-- Name: cuentas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.cuentas_id_seq OWNED BY public.cuentas.id;


--
-- Name: estatus; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.estatus (
    id integer NOT NULL,
    denominacion text NOT NULL
);


ALTER TABLE public.estatus OWNER TO programacion;

--
-- Name: estatus_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.estatus_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.estatus_id_seq OWNER TO programacion;

--
-- Name: estatus_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.estatus_id_seq OWNED BY public.estatus.id;


--
-- Name: grupos; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.grupos (
    id integer NOT NULL,
    denominacion text NOT NULL
);


ALTER TABLE public.grupos OWNER TO programacion;

--
-- Name: grupos_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.grupos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.grupos_id_seq OWNER TO programacion;

--
-- Name: grupos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.grupos_id_seq OWNED BY public.grupos.id;


--
-- Name: motorizado; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.motorizado (
    id integer NOT NULL,
    letra character varying(1) NOT NULL,
    cedula text NOT NULL,
    nombre text NOT NULL,
    placa text NOT NULL,
    telefono text NOT NULL,
    correo text NOT NULL,
    estatus boolean DEFAULT true,
    nota text
);


ALTER TABLE public.motorizado OWNER TO programacion;

--
-- Name: motorizado_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.motorizado_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.motorizado_id_seq OWNER TO programacion;

--
-- Name: motorizado_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.motorizado_id_seq OWNED BY public.motorizado.id;


--
-- Name: movimientos; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.movimientos (
    id integer NOT NULL,
    id_producto integer NOT NULL,
    cantidad integer DEFAULT 0 NOT NULL,
    precio numeric(26,2),
    fecha date DEFAULT ('now'::text)::date NOT NULL,
    tipo_movimiento integer,
    id_carrito integer
);


ALTER TABLE public.movimientos OWNER TO programacion;

--
-- Name: movimientos_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.movimientos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.movimientos_id_seq OWNER TO programacion;

--
-- Name: movimientos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.movimientos_id_seq OWNED BY public.movimientos.id;


--
-- Name: municipios; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.municipios (
    id integer NOT NULL,
    denominacion text NOT NULL
);


ALTER TABLE public.municipios OWNER TO programacion;

--
-- Name: municipios_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.municipios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.municipios_id_seq OWNER TO programacion;

--
-- Name: municipios_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.municipios_id_seq OWNED BY public.municipios.id;


--
-- Name: parroquias; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.parroquias (
    id integer NOT NULL,
    id_municipio integer,
    denominacion text NOT NULL
);


ALTER TABLE public.parroquias OWNER TO programacion;

--
-- Name: parroquias_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.parroquias_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.parroquias_id_seq OWNER TO programacion;

--
-- Name: parroquias_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.parroquias_id_seq OWNED BY public.parroquias.id;


--
-- Name: privilegios; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.privilegios (
    id integer NOT NULL,
    denominacion text NOT NULL
);


ALTER TABLE public.privilegios OWNER TO programacion;

--
-- Name: privilegios_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.privilegios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.privilegios_id_seq OWNER TO programacion;

--
-- Name: privilegios_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.privilegios_id_seq OWNED BY public.privilegios.id;


--
-- Name: productos; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.productos (
    id integer NOT NULL,
    id_grupo integer NOT NULL,
    denominacion text NOT NULL,
    descripcion text NOT NULL,
    precio numeric(26,2),
    photo text,
    photo_dir text,
    codigo text,
    promocion boolean DEFAULT false,
    precio_promocion numeric(26,2) DEFAULT 0.00
);


ALTER TABLE public.productos OWNER TO programacion;

--
-- Name: productos_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.productos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.productos_id_seq OWNER TO programacion;

--
-- Name: productos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.productos_id_seq OWNED BY public.productos.id;


--
-- Name: tasas; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.tasas (
    id integer NOT NULL,
    fecha date,
    monto numeric(26,2) NOT NULL
);


ALTER TABLE public.tasas OWNER TO programacion;

--
-- Name: tasas_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.tasas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tasas_id_seq OWNER TO programacion;

--
-- Name: tasas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.tasas_id_seq OWNED BY public.tasas.id;


--
-- Name: tipos_movimientos; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.tipos_movimientos (
    id integer NOT NULL,
    denominacion text NOT NULL
);


ALTER TABLE public.tipos_movimientos OWNER TO programacion;

--
-- Name: tipos_movimientos_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.tipos_movimientos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tipos_movimientos_id_seq OWNER TO programacion;

--
-- Name: tipos_movimientos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.tipos_movimientos_id_seq OWNED BY public.tipos_movimientos.id;


--
-- Name: usuarios; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.usuarios (
    id integer NOT NULL,
    cedula integer NOT NULL,
    letra character varying(1) NOT NULL,
    nombres text NOT NULL,
    correo text NOT NULL,
    password text NOT NULL,
    movil text,
    fijo text,
    direccion text,
    fecha_registro date NOT NULL,
    privilegio integer NOT NULL,
    estatus boolean DEFAULT true,
    nota text,
    placa text,
    fecha_disponible date,
    disponible boolean DEFAULT true
);


ALTER TABLE public.usuarios OWNER TO programacion;

--
-- Name: usuarios_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.usuarios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usuarios_id_seq OWNER TO programacion;

--
-- Name: usuarios_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.usuarios_id_seq OWNED BY public.usuarios.id;


--
-- Name: view_carrito; Type: VIEW; Schema: public; Owner: programacion
--

CREATE VIEW public.view_carrito AS
 SELECT a.id,
    a.id_usuario,
    ( SELECT usuarios.cedula
           FROM public.usuarios
          WHERE (usuarios.id = a.id_usuario)
         LIMIT 1) AS usuario_cedula,
    ( SELECT usuarios.nombres
           FROM public.usuarios
          WHERE (usuarios.id = a.id_usuario)
         LIMIT 1) AS usuario,
    ( SELECT usuarios.correo
           FROM public.usuarios
          WHERE (usuarios.id = a.id_usuario)
         LIMIT 1) AS usuario_correo,
    ( SELECT usuarios.movil
           FROM public.usuarios
          WHERE (usuarios.id = a.id_usuario)
         LIMIT 1) AS usuario_movil,
    ( SELECT usuarios.fijo
           FROM public.usuarios
          WHERE (usuarios.id = a.id_usuario)
         LIMIT 1) AS usuario_fijo,
    a.hora,
    a.fecha,
    a.estatus,
    ( SELECT sum(((carrito_productos.cantidad)::numeric * carrito_productos.precio)) AS sum
           FROM public.carrito_productos
          WHERE (a.id = carrito_productos.id_carrito)) AS monto_a_pagar,
    a.id_cuenta,
    ( SELECT bancos.denominacion
           FROM public.bancos
          WHERE (bancos.id = ( SELECT cuentas.banco
                   FROM public.cuentas
                  WHERE (cuentas.id = a.id_cuenta)
                 LIMIT 1))
         LIMIT 1) AS banco,
    ( SELECT cuentas.numero_cuenta
           FROM public.cuentas
          WHERE (cuentas.id = a.id_cuenta)
         LIMIT 1) AS numero_cuenta,
    ( SELECT cuentas.tipo_cuenta
           FROM public.cuentas
          WHERE (cuentas.id = a.id_cuenta)
         LIMIT 1) AS tipo_cuenta,
    ( SELECT cuentas.cedula
           FROM public.cuentas
          WHERE (cuentas.id = a.id_cuenta)
         LIMIT 1) AS identificacion,
    ( SELECT cuentas.responsable
           FROM public.cuentas
          WHERE (cuentas.id = a.id_cuenta)
         LIMIT 1) AS titular,
    ( SELECT cuentas.telefono
           FROM public.cuentas
          WHERE (cuentas.id = a.id_cuenta)
         LIMIT 1) AS telefono,
    ( SELECT cuentas.correo
           FROM public.cuentas
          WHERE (cuentas.id = a.id_cuenta)
         LIMIT 1) AS correo,
    a.referencia,
    a.fecha_pago,
    a.concepto,
    a.direccion_envio,
    ( SELECT estatus.denominacion
           FROM public.estatus
          WHERE (estatus.id = a.estatus)
         LIMIT 1) AS status,
    a.motivo,
    a.monto,
    a.monto_bs
   FROM public.carrito a
  ORDER BY a.id;


ALTER TABLE public.view_carrito OWNER TO programacion;

--
-- Name: view_carrito_productos; Type: VIEW; Schema: public; Owner: programacion
--

CREATE VIEW public.view_carrito_productos AS
 SELECT a.id,
    a.id_carrito,
    ( SELECT carrito.id_usuario
           FROM public.carrito
          WHERE (carrito.id = a.id_carrito)
         LIMIT 1) AS id_usuario,
    ( SELECT carrito.hora
           FROM public.carrito
          WHERE (carrito.id = a.id_carrito)
         LIMIT 1) AS hora,
    ( SELECT carrito.fecha
           FROM public.carrito
          WHERE (carrito.id = a.id_carrito)
         LIMIT 1) AS fecha,
    ( SELECT carrito.estatus
           FROM public.carrito
          WHERE (carrito.id = a.id_carrito)
         LIMIT 1) AS estatus,
    a.id_producto,
    ( SELECT grupos.denominacion
           FROM public.grupos
          WHERE (grupos.id = ( SELECT productos.id_grupo
                   FROM public.productos
                  WHERE (productos.id = a.id_producto)
                 LIMIT 1))
         LIMIT 1) AS grupo,
    ( SELECT productos.denominacion
           FROM public.productos
          WHERE (productos.id = a.id_producto)
         LIMIT 1) AS denominacion,
    ( SELECT productos.descripcion
           FROM public.productos
          WHERE (productos.id = a.id_producto)
         LIMIT 1) AS descripcion,
    ( SELECT productos.photo
           FROM public.productos
          WHERE (productos.id = a.id_producto)
         LIMIT 1) AS photo,
    ( SELECT productos.photo_dir
           FROM public.productos
          WHERE (productos.id = a.id_producto)
         LIMIT 1) AS photo_dir,
    a.cantidad,
    a.precio,
    ( SELECT usuarios.correo
           FROM public.usuarios
          WHERE (usuarios.id = ( SELECT carrito.id_usuario
                   FROM public.carrito
                  WHERE (carrito.id = a.id_carrito)
                 LIMIT 1))
         LIMIT 1) AS correo,
    ( SELECT carrito.motivo
           FROM public.carrito
          WHERE (carrito.id = a.id_carrito)
         LIMIT 1) AS motivo,
    (a.precio * ( SELECT tasas.monto
           FROM public.tasas
          ORDER BY tasas.id DESC
         LIMIT 1)) AS precio_bs
   FROM public.carrito_productos a
  ORDER BY a.id;


ALTER TABLE public.view_carrito_productos OWNER TO programacion;

--
-- Name: view_cuentas; Type: VIEW; Schema: public; Owner: programacion
--

CREATE VIEW public.view_cuentas AS
 SELECT a.id,
    a.banco AS id_banco,
    ( SELECT bancos.denominacion
           FROM public.bancos
          WHERE (bancos.id = a.banco)
         LIMIT 1) AS banco,
    a.numero_cuenta,
    a.tipo_cuenta,
    a.cedula,
    a.responsable,
    a.telefono,
    a.correo,
    a.id_usuario AS id_empresa
   FROM public.cuentas a
  ORDER BY a.id;


ALTER TABLE public.view_cuentas OWNER TO programacion;

--
-- Name: view_grupos; Type: VIEW; Schema: public; Owner: programacion
--

CREATE VIEW public.view_grupos AS
 SELECT a.id,
    a.denominacion,
    ( SELECT count(*) AS count
           FROM public.productos
          WHERE (productos.id_grupo = a.id)
         LIMIT 1) AS cantidad
   FROM public.grupos a
  ORDER BY a.id;


ALTER TABLE public.view_grupos OWNER TO programacion;

--
-- Name: view_movimientos; Type: VIEW; Schema: public; Owner: programacion
--

CREATE VIEW public.view_movimientos AS
 SELECT a.id,
    a.id_producto,
    ( SELECT productos.denominacion
           FROM public.productos
          WHERE (productos.id = a.id_producto)
         LIMIT 1) AS producto,
    ( SELECT productos.photo
           FROM public.productos
          WHERE (productos.id = a.id_producto)
         LIMIT 1) AS photo,
    ( SELECT productos.photo_dir
           FROM public.productos
          WHERE (productos.id = a.id_producto)
         LIMIT 1) AS photo_dir,
    a.cantidad,
    a.precio,
    a.fecha,
    a.tipo_movimiento,
    ( SELECT tipos_movimientos.denominacion
           FROM public.tipos_movimientos
          WHERE (tipos_movimientos.id = a.tipo_movimiento)
         LIMIT 1) AS estatu,
    a.id_carrito
   FROM public.movimientos a
  ORDER BY a.id;


ALTER TABLE public.view_movimientos OWNER TO programacion;

--
-- Name: view_productos; Type: VIEW; Schema: public; Owner: programacion
--

CREATE VIEW public.view_productos AS
 SELECT a.id,
    a.id_grupo,
    ( SELECT grupos.denominacion
           FROM public.grupos
          WHERE (grupos.id = a.id_grupo)
         LIMIT 1) AS grupo,
    a.denominacion,
    a.descripcion,
    a.precio,
    a.photo,
    a.photo_dir,
    a.codigo,
    a.promocion,
    a.precio_promocion,
    (a.precio * ( SELECT tasas.monto
           FROM public.tasas
          ORDER BY tasas.id DESC
         LIMIT 1)) AS precio_bs
   FROM public.productos a
  ORDER BY a.id;


ALTER TABLE public.view_productos OWNER TO programacion;

--
-- Name: id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.bancos ALTER COLUMN id SET DEFAULT nextval('public.bancos_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.carrito ALTER COLUMN id SET DEFAULT nextval('public.carrito_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.carrito_productos ALTER COLUMN id SET DEFAULT nextval('public.carrito_productos_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.clasificacion ALTER COLUMN id SET DEFAULT nextval('public.clasificacion_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.contactos ALTER COLUMN id SET DEFAULT nextval('public.contactos_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.cuentas ALTER COLUMN id SET DEFAULT nextval('public.cuentas_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.estatus ALTER COLUMN id SET DEFAULT nextval('public.estatus_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.grupos ALTER COLUMN id SET DEFAULT nextval('public.grupos_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.motorizado ALTER COLUMN id SET DEFAULT nextval('public.motorizado_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.movimientos ALTER COLUMN id SET DEFAULT nextval('public.movimientos_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.municipios ALTER COLUMN id SET DEFAULT nextval('public.municipios_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.parroquias ALTER COLUMN id SET DEFAULT nextval('public.parroquias_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.privilegios ALTER COLUMN id SET DEFAULT nextval('public.privilegios_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.productos ALTER COLUMN id SET DEFAULT nextval('public.productos_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.tasas ALTER COLUMN id SET DEFAULT nextval('public.tasas_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.tipos_movimientos ALTER COLUMN id SET DEFAULT nextval('public.tipos_movimientos_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.usuarios ALTER COLUMN id SET DEFAULT nextval('public.usuarios_id_seq'::regclass);


--
-- Data for Name: bancos; Type: TABLE DATA; Schema: public; Owner: programacion
--

COPY public.bancos (id, denominacion, url) FROM stdin;
1	BANCO DE VENEZUELA	http://www.bancodevenezuela.com/
2	BANCO DEL TESORO	http://www.bt.gob.ve/
4	BANCO OCCIDENTAL DE DESCUENTO	http://www.bod.com.ve/
3	BANESCO BANCO UNIVERSAL	https://www.banesco.com/
5	BANCO BICENTENARIO	http://www.bicentenariobu.com/
6	VENEZOLANO DE CRÉDITO, S.A. BANCO UNIVERSAL	http://www.venezolano.com/
7	BANCO MERCANTIL, C.A. S.A.C.A. BANCO UNIVERSAL	https://www.mercantilbanco.com/mercprod/index.html
8	BANCO PROVINCIAL, S.A. BANCO UNIVERSAL	https://www.provincial.com/
9	BANCO DEL CARIBE, C.A. BANCO UNIVERSAL	https://www.bancaribe.com.ve/
10	BANCO EXTERIOR, C.A. BANCO UNIVERSAL	http://www.bancoexterior.com/
11	BANCO CARONI, C.A. BANCO UNIVERSAL	http://www.bancocaroni.com.ve/
12	BANCO SOFITASA BANCO UNIVERSAL, C.A.	http://www.sofitasa.com/certificar/site/p_contenido.asp
13	BANCO PLAZA, BANCO UNIVERSAL C.A.	http://www.bancoplaza.com/
14	BANCO DE LA GENTE EMPRENDEDORA BANGENTE, C.A.	http://www.bangente.com.ve/
15	BFC BANCO FONDO COMUN C.A. BANCO UNIVERSAL	https://www.bfc.com.ve/
16	DELSUR BANCO UNIVERSAL, C.A.	http://www.delsur.com.ve/
17	BANCO AGRICOLA DE VENEZUELA, C.A. BANCO UNIVERSAL	http://www.bav.com.ve/
18	BANCRECER S.A. BANCO DE DESARROLLO'	https://www.bancrecer.com.ve/
19	BANPLUS BANCO UNIVERAL, C.A.	http://www.banplus.com/site/p_contenido.php?id=1
20	BANCO DE LA FUERZA ARMADA NACIONAL BOLIVARIANA, B.U.	http://www.banfanb.com.ve/
21	CITIBANK N.A.	https://www.citibank.com.ve/VEGCB/JSO/signoff/Signoff.do
22	BANCO NACIONAL CRÉDITO, C.A. BANCO UNIVERSAL	http://www.bnc.com.ve/
\.


--
-- Name: bancos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.bancos_id_seq', 1, false);


--
-- Data for Name: carrito; Type: TABLE DATA; Schema: public; Owner: programacion
--

COPY public.carrito (id, id_usuario, hora, fecha, estatus, id_cuenta, referencia, fecha_pago, concepto, direccion_envio, motivo, fecha_asignado, hora_asignado, fecha_remitido, hora_remitido, fecha_entrega, hora_entrega, monto, monto_bs) FROM stdin;
70	47	22:06:56	2020-06-05	0	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	0.00	0.00
72	46	14:06:15	2020-06-08	3	40	149753	2020-06-08	TENGO SED	INDEPENDENCIA	\N	\N	\N	\N	\N	\N	\N	1.00	195.00
73	46	14:06:35	2020-06-08	2	40	213214	2020-06-08	PRUEBA 2	PRUEBA 2	PRUEBA, ESTO HA SIDO RECHAZADO POR TAL RAZON	\N	\N	\N	\N	\N	\N	1.00	195.00
74	46	20:06:10	2020-06-08	1	40	1232512	2020-06-08	CONCEPTO	CONCEPTO	\N	\N	\N	\N	\N	\N	\N	18.00	3.68
\.


--
-- Name: carrito_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.carrito_id_seq', 74, true);


--
-- Data for Name: carrito_productos; Type: TABLE DATA; Schema: public; Owner: programacion
--

COPY public.carrito_productos (id, id_carrito, id_producto, cantidad, precio) FROM stdin;
105	70	39	1	0.50
106	70	32	1	5.00
108	70	38	1	2.00
109	72	39	2	0.50
110	73	48	1	1.00
112	74	32	1	5.00
113	74	38	1	2.00
116	74	47	3	0.75
115	74	45	6	1.00
114	74	54	2	0.30
111	74	48	3	1.00
\.


--
-- Name: carrito_productos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.carrito_productos_id_seq', 116, true);


--
-- Data for Name: clasificacion; Type: TABLE DATA; Schema: public; Owner: programacion
--

COPY public.clasificacion (id, id_carrito, estrellas, comentario) FROM stdin;
\.


--
-- Name: clasificacion_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.clasificacion_id_seq', 6, true);


--
-- Data for Name: contactos; Type: TABLE DATA; Schema: public; Owner: programacion
--

COPY public.contactos (id, titulo, mensaje, correo) FROM stdin;
\.


--
-- Name: contactos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.contactos_id_seq', 8, true);


--
-- Data for Name: cuentas; Type: TABLE DATA; Schema: public; Owner: programacion
--

COPY public.cuentas (id, banco, numero_cuenta, tipo_cuenta, cedula, responsable, telefono, correo, id_usuario) FROM stdin;
40	1	01024169184408	AHORRO	27503872	LUIS LEAL	04261604273	LUISLEAL98ESW@GMAIL.COM	37
\.


--
-- Name: cuentas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.cuentas_id_seq', 40, true);


--
-- Data for Name: estatus; Type: TABLE DATA; Schema: public; Owner: programacion
--

COPY public.estatus (id, denominacion) FROM stdin;
0	PENDIENTE
1	PAGADO
2	RECHAZADO
3	APROBADO
6	ENTREGADO
5	EN CAMINO
4	POR REMITIR
\.


--
-- Name: estatus_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.estatus_id_seq', 1, false);


--
-- Data for Name: grupos; Type: TABLE DATA; Schema: public; Owner: programacion
--

COPY public.grupos (id, denominacion) FROM stdin;
14	COMIDAS
15	BEBIDAS
16	POSTRES
\.


--
-- Name: grupos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.grupos_id_seq', 16, true);


--
-- Data for Name: motorizado; Type: TABLE DATA; Schema: public; Owner: programacion
--

COPY public.motorizado (id, letra, cedula, nombre, placa, telefono, correo, estatus, nota) FROM stdin;
\.


--
-- Name: motorizado_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.motorizado_id_seq', 1, true);


--
-- Data for Name: movimientos; Type: TABLE DATA; Schema: public; Owner: programacion
--

COPY public.movimientos (id, id_producto, cantidad, precio, fecha, tipo_movimiento, id_carrito) FROM stdin;
70	48	3	1.00	2020-06-09	2	74
71	32	1	5.00	2020-06-09	2	74
72	38	1	2.00	2020-06-09	2	74
73	54	2	0.30	2020-06-09	2	74
74	45	6	1.00	2020-06-09	2	74
75	47	3	0.75	2020-06-09	2	74
\.


--
-- Name: movimientos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.movimientos_id_seq', 75, true);


--
-- Data for Name: municipios; Type: TABLE DATA; Schema: public; Owner: programacion
--

COPY public.municipios (id, denominacion) FROM stdin;
1	Acosta
2	Bolivar
3	Buchivacoa
4	Cacique Manaure
5	Carirubana
6	Colina
7	Dabajuro
8	Democracia
9	Falcon
10	Federacion
11	Jacura
12	Los Taques
13	Mauroa
14	Miranda
15	Monseñor Iturriza
16	Palmasola
17	Petit
18	Piritu
19	San Francisco
20	Jose Laurencio Silva
21	Sucre
22	Tocopero
23	Union
24	Urumaco
25	Zamora
\.


--
-- Name: municipios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.municipios_id_seq', 1, false);


--
-- Data for Name: parroquias; Type: TABLE DATA; Schema: public; Owner: programacion
--

COPY public.parroquias (id, id_municipio, denominacion) FROM stdin;
1	1	Capadare
2	1	La Pastora
3	1	Libertador
4	1	San Juan de los Cayos
5	2	La Peña
6	2	Aracua
7	2	San Luis
8	3	Bariro
9	3	Borojo
10	3	Capatarida
11	3	Guajiro
12	3	Seque
13	3	Valle de Eroa
14	3	Zazarida
15	4	Cacique Manaure
16	5	Norte
17	5	Carirubana
18	5	Santa Ana
19	5	Urbana Punta Cardon
20	6	La Vela de Coro
21	6	Acurigua
22	6	Guaibacoa
23	6	Las Calderas
24	6	Mataruca
25	7	Dabajuro
26	8	Agua Clara
27	8	Avaria
28	8	Pedregal
29	8	Piedra Grande
30	8	Purureche
31	9	Adaure
32	9	Adícora
33	9	Baraived
34	9	Buena Vista
35	9	Jadacaquiva
36	9	El Vinculo
37	9	El Hato
38	9	Moruy
39	9	Pueblo Nuevo
40	10	Agua Larga
41	10	Churuguara
42	10	El Pauji
43	10	Independencia
44	10	Mapararí
45	11	Agua Linda
46	11	Araurima
47	11	Jacura
48	12	Los Taques
49	12	Judibana
50	13	Mene de Mauroa
51	13	San Felix
52	13	Casigua
53	14	Guzman Guillermo
54	14	Mitare
55	14	Rio Seco
56	14	Sabaneta
57	14	San Antonio
58	14	San Gabriel
59	14	Santa Ana
60	15	Boca del Tocuyo
61	15	Chichiriviche
62	15	Tocuyo de la Costa
63	16	Palmasola
64	17	Cabure
65	17	Colina
66	17	Curimagua
67	18	Piritu
68	18	San Jose de la Costa
69	19	Capital San Francisco Mirimire
70	20	Tucacas
71	20	Boca de Aroa
72	21	Sucre
73	21	Pecaya
74	22	Tocopero
75	23	El Charal
76	23	Las Vegas del Tuy
77	23	Santa Cruz de Bucaral
78	24	Urumaco
79	24	Bruzual
80	25	Puerto Cumarebo
81	25	La Cienaga
82	25	La Soledad
83	25	Pueblo Cumarebo
84	25	Zazarida
\.


--
-- Name: parroquias_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.parroquias_id_seq', 84, true);


--
-- Data for Name: privilegios; Type: TABLE DATA; Schema: public; Owner: programacion
--

COPY public.privilegios (id, denominacion) FROM stdin;
3	MOTORIZADO
0	SUPERADMINISTRADOR
1	ADMINISTRADOR
2	CLIENTES
\.


--
-- Name: privilegios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.privilegios_id_seq', 1, false);


--
-- Data for Name: productos; Type: TABLE DATA; Schema: public; Owner: programacion
--

COPY public.productos (id, id_grupo, denominacion, descripcion, precio, photo, photo_dir, codigo, promocion, precio_promocion) FROM stdin;
34	14	PIZZA DE MAÍZ	60% HECHA DE MAÍZ	4.00	pizza3-removebg-preview.png	05b612d5-62df-4ba6-ac73-0e3d98f5e474	ÑWS-654	f	0.00
35	14	PIZZA DE JAMÓN Y QUESO	50% DE AMBOS INGREDIENTES	5.00	pizza1-removebg-preview.png	74090f67-7955-4c2b-9f8b-ceb184cb4288	QYS-741	f	0.00
33	14	PIZZA DE TOCINO	TOCINO Y TOMATE	6.00	pizza4-removebg-preview.png	ab208f46-c0be-4e49-9497-11e41ddf9275	PWL-951	f	0.00
38	14	PASTA	CON SALSA DE AJO Y CARNE MOLIDA	2.00	pasta1-removebg-preview.png	016861fc-4c42-4ed7-a1f5-8264b790e83e	QAZ-963	f	0.00
40	15	CHINOTTO	2L	0.50	chinotto-removebg-preview.png	5e708b76-9011-4a8e-8b67-484692fe77b4	YHN-167	f	0.00
41	15	MALTA	1.5L	0.50	malta-removebg-preview.png	3616fc00-27f2-4b82-90a5-946a828514f3	TKD-918	f	0.00
43	15	COCA-COLA	1.5L	0.50	2-removebg-preview (1).png	f1f6299c-7706-48d9-b642-ae207e3bd820	PWL-636	f	0.00
44	16	HELADO	TRES SABORES ELEGIDOS POR EL CLIENTE	1.50	helado-removebg-preview.png	0bb06908-1b1e-4434-a43a-8a4bd55a1515	PWU-878	f	0.00
45	16	GALLETA	CON CHISPAS DE CHOCOLATE	1.00	4-removebg-preview.png	a32809db-b494-4ad2-a57b-fb2de4ca1c83	WPS-231	f	0.00
46	16	TORTA	UN TROZO POR PEDIDO	1.00	torta-removebg-preview.png	0301c521-f355-4926-8364-98e85ad6f082	PWS-164	f	0.00
49	16	GELATINA	DE FRESA	0.30	321-removebg-preview.png	380814eb-9169-4068-83f1-fd50547cfea1	PWS-863	f	0.00
53	15	JUGO DE NARANJA	NATURAL	0.50	naranja.png	db272584-e53f-415b-ac29-feebd2257deb	PWS-492	f	0.00
32	14	PIZZA DE QUESO	BORDES DE QUESO	5.00	pizza2-removebg-preview.png	97bddaa2-553b-4023-84a2-d4db0a233c60	SPW-753	t	0.00
36	14	ARROZ CHINO	TOCINETA Y MORTADELA	2.00	arroz1-removebg-preview.png	21b9c796-8419-4ed4-a678-fd85dd559ef2	PHT-852	t	0.00
48	16	BABANA SPLIS	PORCIÓN DEPENDIENDO AL PEDIDO	1.00	123-removebg-preview.png	844ca5aa-286a-479a-9715-abf0e1ce187e	HWS-754	t	0.00
39	15	PEPSI	1.5L	0.50	pepsi-removebg-preview.png	175f960f-ec11-4e9b-acba-c5ed7400b496	POI-846	t	0.00
47	16	ROSQUILLA	GLASEADO DE FRESA	0.75	rosquilla-removebg-preview.png	e40df784-8cc5-4426-9dc3-5645bdcc51bd	PWS-183	f	0.00
54	15	FRESCOLITA	DE LATA	0.30	14-removebg-preview.png	77124612-d732-451f-ba76-26d1293b0b81	PWS-846	f	0.00
\.


--
-- Name: productos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.productos_id_seq', 54, true);


--
-- Data for Name: tasas; Type: TABLE DATA; Schema: public; Owner: programacion
--

COPY public.tasas (id, fecha, monto) FROM stdin;
7	2020-06-04	195000.00
\.


--
-- Name: tasas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.tasas_id_seq', 7, true);


--
-- Data for Name: tipos_movimientos; Type: TABLE DATA; Schema: public; Owner: programacion
--

COPY public.tipos_movimientos (id, denominacion) FROM stdin;
1	ENTRADA
2	SALIDA
3	AJUSTE
\.


--
-- Name: tipos_movimientos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.tipos_movimientos_id_seq', 1, false);


--
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: programacion
--

COPY public.usuarios (id, cedula, letra, nombres, correo, password, movil, fijo, direccion, fecha_registro, privilegio, estatus, nota, placa, fecha_disponible, disponible) FROM stdin;
43	12312	V	AAAAAAAAAAAAA	ASDA@GMAIL.COM	$2y$10$Mm75dGVGSfkbS.TCkXa/TOnQrSarZZMg9ieeHIBjwaqD9/SGU8rE2	324234	\N	234234	2020-05-21	2	f	\N	\N	\N	t
9	26677875	V	FELY GARCIA	FGARCIAG97@GMAIL.COM	$2y$10$nUrO1id2iY58kLC2tX1R/ekRmb1JXf.UXCqwxD4qEV9Fv2B8z7B7S	123	123	LAS VELITAS I	2020-04-14	0	t	\N	\N	\N	t
36	25457921	V	25457921	25457921@GMAIL.COM	$2y$10$t.7J3X6tXy3LB7tSWhSLh.Hs3IkMq/HMQWWdOlXuYivHvr88W5/ge	25457921	25457921	25457921	2020-05-20	2	t	\N	\N	\N	t
37	4	V	LUIS LEAL	4@GMAIL.COPM	$2y$10$r8PliwXlYUOCU79ZRHUgMOmH0fmR71rcU7RGTEYCcLGOPdxDfdI2K	4	4	EPALE	2020-05-21	0	t	\N	\N	\N	t
44	266778755	V	FELY GARCIA	TUMAMA@GMAIL.COM	$2y$10$aXeHVz1.0dMH5GALsNv7puwjr7MCw9H/J40SEEFfXqxqz5Ah3kv06	12312312	\N	ASDASDSA	2020-05-22	1	t	\N	\N	\N	t
46	5	V	LUIS LEAL	5@GMAIL.COM	$2y$10$cjv8q4HHWVeRbrGbd6a94OQa7WTvZoSOPUrULZ8OhzEDTG2QbPb6m	04261604273	\N	INDEPENDENCIA	2020-06-01	2	t	\N	\N	\N	t
45	1	V	1	1@GMAIL.COM	$2y$10$yd0SPDhmu4KgjnomEwvxEObCK4N6l9PXDrzt9XmrAkETwqT0VRQBy	1	1	1	2020-05-29	1	t	\N	\N	\N	t
47	2	V	PRUEBA	2@GMAIL.COM	$2y$10$vz0vKF4giqNV/SSRbZ6LRe1oTv/9/DvmJHaXK67Ss5mbxLb865GJu	2	2	2	2020-06-01	2	t	\N	\N	\N	t
42	1111	V	CARE CULO	ASDASD@GMAIL.COM	$2y$10$6M6jZ/HH23vL9H5juAPLleB7iMYs8i9sP.9LD65/4Ohzl9e3xF5cW	12312	\N	ASDASD	2020-05-21	2	t	\N	\N	\N	t
\.


--
-- Name: usuarios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.usuarios_id_seq', 47, true);


--
-- Name: bancos_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.bancos
    ADD CONSTRAINT bancos_pkey PRIMARY KEY (id);


--
-- Name: carrito_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.carrito
    ADD CONSTRAINT carrito_pkey PRIMARY KEY (id);


--
-- Name: carrito_productos_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.carrito_productos
    ADD CONSTRAINT carrito_productos_pkey PRIMARY KEY (id);


--
-- Name: clasificacion_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.clasificacion
    ADD CONSTRAINT clasificacion_pkey PRIMARY KEY (id);


--
-- Name: contactos_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.contactos
    ADD CONSTRAINT contactos_pkey PRIMARY KEY (id);


--
-- Name: cuentas_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.cuentas
    ADD CONSTRAINT cuentas_pkey PRIMARY KEY (id);


--
-- Name: estatus_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.estatus
    ADD CONSTRAINT estatus_pkey PRIMARY KEY (id);


--
-- Name: grupos_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.grupos
    ADD CONSTRAINT grupos_pkey PRIMARY KEY (id);


--
-- Name: motorizado_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.motorizado
    ADD CONSTRAINT motorizado_pkey PRIMARY KEY (id);


--
-- Name: movimientos_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.movimientos
    ADD CONSTRAINT movimientos_pkey PRIMARY KEY (id);


--
-- Name: municipios_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.municipios
    ADD CONSTRAINT municipios_pkey PRIMARY KEY (id);


--
-- Name: parroquias_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.parroquias
    ADD CONSTRAINT parroquias_pkey PRIMARY KEY (id);


--
-- Name: privilegios_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.privilegios
    ADD CONSTRAINT privilegios_pkey PRIMARY KEY (id);


--
-- Name: productos_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.productos
    ADD CONSTRAINT productos_pkey PRIMARY KEY (id);


--
-- Name: tasas_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.tasas
    ADD CONSTRAINT tasas_pkey PRIMARY KEY (id);


--
-- Name: tipos_movimientos_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.tipos_movimientos
    ADD CONSTRAINT tipos_movimientos_pkey PRIMARY KEY (id);


--
-- Name: usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (id);


--
-- Name: carrito_estatus_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.carrito
    ADD CONSTRAINT carrito_estatus_fkey FOREIGN KEY (estatus) REFERENCES public.estatus(id);


--
-- Name: carrito_id_cuenta_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.carrito
    ADD CONSTRAINT carrito_id_cuenta_fkey FOREIGN KEY (id_cuenta) REFERENCES public.cuentas(id);


--
-- Name: carrito_id_usuario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.carrito
    ADD CONSTRAINT carrito_id_usuario_fkey FOREIGN KEY (id_usuario) REFERENCES public.usuarios(id);


--
-- Name: carrito_productos_id_carrito_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.carrito_productos
    ADD CONSTRAINT carrito_productos_id_carrito_fkey FOREIGN KEY (id_carrito) REFERENCES public.carrito(id);


--
-- Name: carrito_productos_id_producto_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.carrito_productos
    ADD CONSTRAINT carrito_productos_id_producto_fkey FOREIGN KEY (id_producto) REFERENCES public.productos(id);


--
-- Name: clasificacion_id_carrito_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.clasificacion
    ADD CONSTRAINT clasificacion_id_carrito_fkey FOREIGN KEY (id_carrito) REFERENCES public.carrito(id);


--
-- Name: cuentas_banco_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.cuentas
    ADD CONSTRAINT cuentas_banco_fkey FOREIGN KEY (banco) REFERENCES public.bancos(id);


--
-- Name: cuentas_id_usuario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.cuentas
    ADD CONSTRAINT cuentas_id_usuario_fkey FOREIGN KEY (id_usuario) REFERENCES public.usuarios(id);


--
-- Name: movimientos_id_carrito_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.movimientos
    ADD CONSTRAINT movimientos_id_carrito_fkey FOREIGN KEY (id_carrito) REFERENCES public.carrito(id);


--
-- Name: movimientos_id_producto_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.movimientos
    ADD CONSTRAINT movimientos_id_producto_fkey FOREIGN KEY (id_producto) REFERENCES public.productos(id);


--
-- Name: movimientos_tipo_movimiento_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.movimientos
    ADD CONSTRAINT movimientos_tipo_movimiento_fkey FOREIGN KEY (tipo_movimiento) REFERENCES public.tipos_movimientos(id);


--
-- Name: parroquias_id_municipio_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.parroquias
    ADD CONSTRAINT parroquias_id_municipio_fkey FOREIGN KEY (id_municipio) REFERENCES public.municipios(id);


--
-- Name: productos_id_grupo_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.productos
    ADD CONSTRAINT productos_id_grupo_fkey FOREIGN KEY (id_grupo) REFERENCES public.grupos(id);


--
-- Name: usuarios_privilegio_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_privilegio_fkey FOREIGN KEY (privilegio) REFERENCES public.privilegios(id);


--
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

