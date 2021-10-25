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
-- Name: bancos_usa; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.bancos_usa (
    id integer NOT NULL,
    denominacion text NOT NULL,
    url text NOT NULL
);


ALTER TABLE public.bancos_usa OWNER TO programacion;

--
-- Name: bancos_usa_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.bancos_usa_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.bancos_usa_id_seq OWNER TO programacion;

--
-- Name: bancos_usa_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.bancos_usa_id_seq OWNED BY public.bancos_usa.id;


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
    monto_bs numeric(26,2) DEFAULT 0.00,
    descripcion_billete text,
    tipo_pago text
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
    correo text NOT NULL,
    fecha date DEFAULT now()
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
    denominacion text NOT NULL,
    photo text,
    photo_dir text
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
    precio_promocion numeric(26,2) DEFAULT 0.00,
    status boolean DEFAULT true,
    id_subcategoria integer
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
-- Name: subcategorias; Type: TABLE; Schema: public; Owner: programacion
--

CREATE TABLE public.subcategorias (
    id integer NOT NULL,
    id_grupos integer,
    denominacion text
);


ALTER TABLE public.subcategorias OWNER TO programacion;

--
-- Name: subcategorias_id_seq; Type: SEQUENCE; Schema: public; Owner: programacion
--

CREATE SEQUENCE public.subcategorias_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.subcategorias_id_seq OWNER TO programacion;

--
-- Name: subcategorias_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: programacion
--

ALTER SEQUENCE public.subcategorias_id_seq OWNED BY public.subcategorias.id;


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
    cedula integer,
    letra character varying(1),
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
    disponible boolean DEFAULT true,
    password2 text,
    apellidos text,
    city text,
    state text,
    code text,
    movil2 text,
    company text,
    condiciones boolean,
    autenticado boolean DEFAULT false,
    cod_autenticado text
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
    a.monto_bs,
    a.tipo_pago,
    ( SELECT count(*) AS count
           FROM public.carrito_productos
          WHERE (carrito_productos.id_carrito = a.id)
         LIMIT 1) AS n_c,
    ( SELECT usuarios.company
           FROM public.usuarios
          WHERE (usuarios.id = a.id_usuario)
         LIMIT 1) AS compania,
    ( SELECT usuarios.apellidos
           FROM public.usuarios
          WHERE (usuarios.id = a.id_usuario)
         LIMIT 1) AS apellidos,
    ( SELECT usuarios.direccion
           FROM public.usuarios
          WHERE (usuarios.id = a.id_usuario)
         LIMIT 1) AS direccion,
    ( SELECT usuarios.code
           FROM public.usuarios
          WHERE (usuarios.id = a.id_usuario)
         LIMIT 1) AS code,
    ( SELECT usuarios.state
           FROM public.usuarios
          WHERE (usuarios.id = a.id_usuario)
         LIMIT 1) AS state,
    ( SELECT usuarios.city
           FROM public.usuarios
          WHERE (usuarios.id = a.id_usuario)
         LIMIT 1) AS city,
    a.fecha_entrega,
    a.hora_entrega
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
         LIMIT 1) AS cantidad,
    a.photo_dir,
    a.photo
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
    a.id_carrito,
    ( SELECT productos.id_grupo
           FROM public.productos
          WHERE (productos.id = a.id_producto)
         LIMIT 1) AS grupo
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
         LIMIT 1)) AS precio_bs,
    a.status,
    a.id_subcategoria,
    ( SELECT subcategorias.denominacion
           FROM public.subcategorias
          WHERE (subcategorias.id = a.id_subcategoria)
         LIMIT 1) AS subcategorias
   FROM public.productos a
  ORDER BY a.id;


ALTER TABLE public.view_productos OWNER TO programacion;

--
-- Name: view_sub; Type: VIEW; Schema: public; Owner: programacion
--

CREATE VIEW public.view_sub AS
 SELECT a.id,
    a.id_grupos,
    ( SELECT grupos.denominacion
           FROM public.grupos
          WHERE (grupos.id = a.id_grupos)
         LIMIT 1) AS grupo,
    a.denominacion
   FROM public.subcategorias a
  ORDER BY a.id;


ALTER TABLE public.view_sub OWNER TO programacion;

--
-- Name: bancos id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.bancos ALTER COLUMN id SET DEFAULT nextval('public.bancos_id_seq'::regclass);


--
-- Name: bancos_usa id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.bancos_usa ALTER COLUMN id SET DEFAULT nextval('public.bancos_usa_id_seq'::regclass);


--
-- Name: carrito id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.carrito ALTER COLUMN id SET DEFAULT nextval('public.carrito_id_seq'::regclass);


--
-- Name: carrito_productos id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.carrito_productos ALTER COLUMN id SET DEFAULT nextval('public.carrito_productos_id_seq'::regclass);


--
-- Name: clasificacion id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.clasificacion ALTER COLUMN id SET DEFAULT nextval('public.clasificacion_id_seq'::regclass);


--
-- Name: contactos id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.contactos ALTER COLUMN id SET DEFAULT nextval('public.contactos_id_seq'::regclass);


--
-- Name: cuentas id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.cuentas ALTER COLUMN id SET DEFAULT nextval('public.cuentas_id_seq'::regclass);


--
-- Name: estatus id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.estatus ALTER COLUMN id SET DEFAULT nextval('public.estatus_id_seq'::regclass);


--
-- Name: grupos id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.grupos ALTER COLUMN id SET DEFAULT nextval('public.grupos_id_seq'::regclass);


--
-- Name: motorizado id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.motorizado ALTER COLUMN id SET DEFAULT nextval('public.motorizado_id_seq'::regclass);


--
-- Name: movimientos id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.movimientos ALTER COLUMN id SET DEFAULT nextval('public.movimientos_id_seq'::regclass);


--
-- Name: municipios id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.municipios ALTER COLUMN id SET DEFAULT nextval('public.municipios_id_seq'::regclass);


--
-- Name: parroquias id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.parroquias ALTER COLUMN id SET DEFAULT nextval('public.parroquias_id_seq'::regclass);


--
-- Name: privilegios id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.privilegios ALTER COLUMN id SET DEFAULT nextval('public.privilegios_id_seq'::regclass);


--
-- Name: productos id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.productos ALTER COLUMN id SET DEFAULT nextval('public.productos_id_seq'::regclass);


--
-- Name: subcategorias id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.subcategorias ALTER COLUMN id SET DEFAULT nextval('public.subcategorias_id_seq'::regclass);


--
-- Name: tasas id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.tasas ALTER COLUMN id SET DEFAULT nextval('public.tasas_id_seq'::regclass);


--
-- Name: tipos_movimientos id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.tipos_movimientos ALTER COLUMN id SET DEFAULT nextval('public.tipos_movimientos_id_seq'::regclass);


--
-- Name: usuarios id; Type: DEFAULT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.usuarios ALTER COLUMN id SET DEFAULT nextval('public.usuarios_id_seq'::regclass);


--
-- Name: bancos bancos_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.bancos
    ADD CONSTRAINT bancos_pkey PRIMARY KEY (id);


--
-- Name: bancos_usa bancos_usa_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.bancos_usa
    ADD CONSTRAINT bancos_usa_pkey PRIMARY KEY (id);


--
-- Name: carrito carrito_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.carrito
    ADD CONSTRAINT carrito_pkey PRIMARY KEY (id);


--
-- Name: carrito_productos carrito_productos_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.carrito_productos
    ADD CONSTRAINT carrito_productos_pkey PRIMARY KEY (id);


--
-- Name: clasificacion clasificacion_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.clasificacion
    ADD CONSTRAINT clasificacion_pkey PRIMARY KEY (id);


--
-- Name: usuarios company; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT company UNIQUE (company);


--
-- Name: contactos contactos_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.contactos
    ADD CONSTRAINT contactos_pkey PRIMARY KEY (id);


--
-- Name: usuarios correo; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT correo UNIQUE (correo);


--
-- Name: cuentas cuentas_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.cuentas
    ADD CONSTRAINT cuentas_pkey PRIMARY KEY (id);


--
-- Name: estatus estatus_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.estatus
    ADD CONSTRAINT estatus_pkey PRIMARY KEY (id);


--
-- Name: grupos grupos_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.grupos
    ADD CONSTRAINT grupos_pkey PRIMARY KEY (id);


--
-- Name: motorizado motorizado_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.motorizado
    ADD CONSTRAINT motorizado_pkey PRIMARY KEY (id);


--
-- Name: movimientos movimientos_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.movimientos
    ADD CONSTRAINT movimientos_pkey PRIMARY KEY (id);


--
-- Name: municipios municipios_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.municipios
    ADD CONSTRAINT municipios_pkey PRIMARY KEY (id);


--
-- Name: parroquias parroquias_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.parroquias
    ADD CONSTRAINT parroquias_pkey PRIMARY KEY (id);


--
-- Name: privilegios privilegios_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.privilegios
    ADD CONSTRAINT privilegios_pkey PRIMARY KEY (id);


--
-- Name: productos productos_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.productos
    ADD CONSTRAINT productos_pkey PRIMARY KEY (id);


--
-- Name: subcategorias subcategorias_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.subcategorias
    ADD CONSTRAINT subcategorias_pkey PRIMARY KEY (id);


--
-- Name: tasas tasas_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.tasas
    ADD CONSTRAINT tasas_pkey PRIMARY KEY (id);


--
-- Name: tipos_movimientos tipos_movimientos_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.tipos_movimientos
    ADD CONSTRAINT tipos_movimientos_pkey PRIMARY KEY (id);


--
-- Name: estatus unico; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.estatus
    ADD CONSTRAINT unico UNIQUE (denominacion);


--
-- Name: usuarios usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (id);


--
-- Name: carrito carrito_estatus_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.carrito
    ADD CONSTRAINT carrito_estatus_fkey FOREIGN KEY (estatus) REFERENCES public.estatus(id);


--
-- Name: carrito carrito_id_cuenta_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.carrito
    ADD CONSTRAINT carrito_id_cuenta_fkey FOREIGN KEY (id_cuenta) REFERENCES public.cuentas(id);


--
-- Name: carrito carrito_id_usuario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.carrito
    ADD CONSTRAINT carrito_id_usuario_fkey FOREIGN KEY (id_usuario) REFERENCES public.usuarios(id);


--
-- Name: carrito_productos carrito_productos_id_carrito_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.carrito_productos
    ADD CONSTRAINT carrito_productos_id_carrito_fkey FOREIGN KEY (id_carrito) REFERENCES public.carrito(id);


--
-- Name: carrito_productos carrito_productos_id_producto_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.carrito_productos
    ADD CONSTRAINT carrito_productos_id_producto_fkey FOREIGN KEY (id_producto) REFERENCES public.productos(id);


--
-- Name: clasificacion clasificacion_id_carrito_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.clasificacion
    ADD CONSTRAINT clasificacion_id_carrito_fkey FOREIGN KEY (id_carrito) REFERENCES public.carrito(id);


--
-- Name: cuentas cuentas_banco_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.cuentas
    ADD CONSTRAINT cuentas_banco_fkey FOREIGN KEY (banco) REFERENCES public.bancos(id);


--
-- Name: cuentas cuentas_id_usuario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.cuentas
    ADD CONSTRAINT cuentas_id_usuario_fkey FOREIGN KEY (id_usuario) REFERENCES public.usuarios(id);


--
-- Name: movimientos movimientos_id_carrito_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.movimientos
    ADD CONSTRAINT movimientos_id_carrito_fkey FOREIGN KEY (id_carrito) REFERENCES public.carrito(id);


--
-- Name: movimientos movimientos_id_producto_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.movimientos
    ADD CONSTRAINT movimientos_id_producto_fkey FOREIGN KEY (id_producto) REFERENCES public.productos(id);


--
-- Name: movimientos movimientos_tipo_movimiento_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.movimientos
    ADD CONSTRAINT movimientos_tipo_movimiento_fkey FOREIGN KEY (tipo_movimiento) REFERENCES public.tipos_movimientos(id);


--
-- Name: parroquias parroquias_id_municipio_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.parroquias
    ADD CONSTRAINT parroquias_id_municipio_fkey FOREIGN KEY (id_municipio) REFERENCES public.municipios(id);


--
-- Name: productos productos_id_grupo_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.productos
    ADD CONSTRAINT productos_id_grupo_fkey FOREIGN KEY (id_grupo) REFERENCES public.grupos(id);


--
-- Name: productos productos_id_subcategoria_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.productos
    ADD CONSTRAINT productos_id_subcategoria_fkey FOREIGN KEY (id_subcategoria) REFERENCES public.subcategorias(id);


--
-- Name: subcategorias subcategorias_id_grupos_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
--

ALTER TABLE ONLY public.subcategorias
    ADD CONSTRAINT subcategorias_id_grupos_fkey FOREIGN KEY (id_grupos) REFERENCES public.grupos(id);


--
-- Name: usuarios usuarios_privilegio_fkey; Type: FK CONSTRAINT; Schema: public; Owner: programacion
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

