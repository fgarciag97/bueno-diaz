--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: bancos; Type: TABLE; Schema: public; Owner: jfssibxl; Tablespace: 
--

CREATE TABLE bancos (
    id integer NOT NULL,
    denominacion text NOT NULL,
    url text NOT NULL
);


ALTER TABLE public.bancos OWNER TO jfssibxl;

--
-- Name: bancos_id_seq; Type: SEQUENCE; Schema: public; Owner: jfssibxl
--

CREATE SEQUENCE bancos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.bancos_id_seq OWNER TO jfssibxl;

--
-- Name: bancos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jfssibxl
--

ALTER SEQUENCE bancos_id_seq OWNED BY bancos.id;


--
-- Name: bancos_usa; Type: TABLE; Schema: public; Owner: jfssibxl; Tablespace: 
--

CREATE TABLE bancos_usa (
    id integer NOT NULL,
    denominacion text NOT NULL,
    url text NOT NULL
);


ALTER TABLE public.bancos_usa OWNER TO jfssibxl;

--
-- Name: bancos_usa_id_seq; Type: SEQUENCE; Schema: public; Owner: jfssibxl
--

CREATE SEQUENCE bancos_usa_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.bancos_usa_id_seq OWNER TO jfssibxl;

--
-- Name: bancos_usa_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jfssibxl
--

ALTER SEQUENCE bancos_usa_id_seq OWNED BY bancos_usa.id;


--
-- Name: carrito; Type: TABLE; Schema: public; Owner: jfssibxl; Tablespace: 
--

CREATE TABLE carrito (
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


ALTER TABLE public.carrito OWNER TO jfssibxl;

--
-- Name: carrito_id_seq; Type: SEQUENCE; Schema: public; Owner: jfssibxl
--

CREATE SEQUENCE carrito_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.carrito_id_seq OWNER TO jfssibxl;

--
-- Name: carrito_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jfssibxl
--

ALTER SEQUENCE carrito_id_seq OWNED BY carrito.id;


--
-- Name: carrito_productos; Type: TABLE; Schema: public; Owner: jfssibxl; Tablespace: 
--

CREATE TABLE carrito_productos (
    id integer NOT NULL,
    id_carrito integer,
    id_producto integer NOT NULL,
    cantidad integer DEFAULT 0 NOT NULL,
    precio numeric(26,2) DEFAULT 0.00 NOT NULL
);


ALTER TABLE public.carrito_productos OWNER TO jfssibxl;

--
-- Name: carrito_productos_id_seq; Type: SEQUENCE; Schema: public; Owner: jfssibxl
--

CREATE SEQUENCE carrito_productos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.carrito_productos_id_seq OWNER TO jfssibxl;

--
-- Name: carrito_productos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jfssibxl
--

ALTER SEQUENCE carrito_productos_id_seq OWNED BY carrito_productos.id;


--
-- Name: clasificacion; Type: TABLE; Schema: public; Owner: jfssibxl; Tablespace: 
--

CREATE TABLE clasificacion (
    id integer NOT NULL,
    id_carrito integer NOT NULL,
    estrellas integer,
    comentario text
);


ALTER TABLE public.clasificacion OWNER TO jfssibxl;

--
-- Name: clasificacion_id_seq; Type: SEQUENCE; Schema: public; Owner: jfssibxl
--

CREATE SEQUENCE clasificacion_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.clasificacion_id_seq OWNER TO jfssibxl;

--
-- Name: clasificacion_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jfssibxl
--

ALTER SEQUENCE clasificacion_id_seq OWNED BY clasificacion.id;


--
-- Name: contactos; Type: TABLE; Schema: public; Owner: jfssibxl; Tablespace: 
--

CREATE TABLE contactos (
    id integer NOT NULL,
    titulo text NOT NULL,
    mensaje text NOT NULL,
    correo text NOT NULL,
    fecha date DEFAULT now()
);


ALTER TABLE public.contactos OWNER TO jfssibxl;

--
-- Name: contactos_id_seq; Type: SEQUENCE; Schema: public; Owner: jfssibxl
--

CREATE SEQUENCE contactos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.contactos_id_seq OWNER TO jfssibxl;

--
-- Name: contactos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jfssibxl
--

ALTER SEQUENCE contactos_id_seq OWNED BY contactos.id;


--
-- Name: cuentas; Type: TABLE; Schema: public; Owner: jfssibxl; Tablespace: 
--

CREATE TABLE cuentas (
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


ALTER TABLE public.cuentas OWNER TO jfssibxl;

--
-- Name: cuentas_id_seq; Type: SEQUENCE; Schema: public; Owner: jfssibxl
--

CREATE SEQUENCE cuentas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cuentas_id_seq OWNER TO jfssibxl;

--
-- Name: cuentas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jfssibxl
--

ALTER SEQUENCE cuentas_id_seq OWNED BY cuentas.id;


--
-- Name: estatus; Type: TABLE; Schema: public; Owner: jfssibxl; Tablespace: 
--

CREATE TABLE estatus (
    id integer NOT NULL,
    denominacion text NOT NULL
);


ALTER TABLE public.estatus OWNER TO jfssibxl;

--
-- Name: estatus_id_seq; Type: SEQUENCE; Schema: public; Owner: jfssibxl
--

CREATE SEQUENCE estatus_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.estatus_id_seq OWNER TO jfssibxl;

--
-- Name: estatus_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jfssibxl
--

ALTER SEQUENCE estatus_id_seq OWNED BY estatus.id;


--
-- Name: grupos; Type: TABLE; Schema: public; Owner: jfssibxl; Tablespace: 
--

CREATE TABLE grupos (
    id integer NOT NULL,
    denominacion text NOT NULL,
    photo text,
    photo_dir text
);


ALTER TABLE public.grupos OWNER TO jfssibxl;

--
-- Name: grupos_id_seq; Type: SEQUENCE; Schema: public; Owner: jfssibxl
--

CREATE SEQUENCE grupos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.grupos_id_seq OWNER TO jfssibxl;

--
-- Name: grupos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jfssibxl
--

ALTER SEQUENCE grupos_id_seq OWNED BY grupos.id;


--
-- Name: motorizado; Type: TABLE; Schema: public; Owner: jfssibxl; Tablespace: 
--

CREATE TABLE motorizado (
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


ALTER TABLE public.motorizado OWNER TO jfssibxl;

--
-- Name: motorizado_id_seq; Type: SEQUENCE; Schema: public; Owner: jfssibxl
--

CREATE SEQUENCE motorizado_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.motorizado_id_seq OWNER TO jfssibxl;

--
-- Name: motorizado_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jfssibxl
--

ALTER SEQUENCE motorizado_id_seq OWNED BY motorizado.id;


--
-- Name: movimientos; Type: TABLE; Schema: public; Owner: jfssibxl; Tablespace: 
--

CREATE TABLE movimientos (
    id integer NOT NULL,
    id_producto integer NOT NULL,
    cantidad integer DEFAULT 0 NOT NULL,
    precio numeric(26,2),
    fecha date DEFAULT ('now'::text)::date NOT NULL,
    tipo_movimiento integer,
    id_carrito integer
);


ALTER TABLE public.movimientos OWNER TO jfssibxl;

--
-- Name: movimientos_id_seq; Type: SEQUENCE; Schema: public; Owner: jfssibxl
--

CREATE SEQUENCE movimientos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.movimientos_id_seq OWNER TO jfssibxl;

--
-- Name: movimientos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jfssibxl
--

ALTER SEQUENCE movimientos_id_seq OWNED BY movimientos.id;


--
-- Name: municipios; Type: TABLE; Schema: public; Owner: jfssibxl; Tablespace: 
--

CREATE TABLE municipios (
    id integer NOT NULL,
    denominacion text NOT NULL
);


ALTER TABLE public.municipios OWNER TO jfssibxl;

--
-- Name: municipios_id_seq; Type: SEQUENCE; Schema: public; Owner: jfssibxl
--

CREATE SEQUENCE municipios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.municipios_id_seq OWNER TO jfssibxl;

--
-- Name: municipios_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jfssibxl
--

ALTER SEQUENCE municipios_id_seq OWNED BY municipios.id;


--
-- Name: parroquias; Type: TABLE; Schema: public; Owner: jfssibxl; Tablespace: 
--

CREATE TABLE parroquias (
    id integer NOT NULL,
    id_municipio integer,
    denominacion text NOT NULL
);


ALTER TABLE public.parroquias OWNER TO jfssibxl;

--
-- Name: parroquias_id_seq; Type: SEQUENCE; Schema: public; Owner: jfssibxl
--

CREATE SEQUENCE parroquias_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.parroquias_id_seq OWNER TO jfssibxl;

--
-- Name: parroquias_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jfssibxl
--

ALTER SEQUENCE parroquias_id_seq OWNED BY parroquias.id;


--
-- Name: privilegios; Type: TABLE; Schema: public; Owner: jfssibxl; Tablespace: 
--

CREATE TABLE privilegios (
    id integer NOT NULL,
    denominacion text NOT NULL
);


ALTER TABLE public.privilegios OWNER TO jfssibxl;

--
-- Name: privilegios_id_seq; Type: SEQUENCE; Schema: public; Owner: jfssibxl
--

CREATE SEQUENCE privilegios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.privilegios_id_seq OWNER TO jfssibxl;

--
-- Name: privilegios_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jfssibxl
--

ALTER SEQUENCE privilegios_id_seq OWNED BY privilegios.id;


--
-- Name: productos; Type: TABLE; Schema: public; Owner: jfssibxl; Tablespace: 
--

CREATE TABLE productos (
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


ALTER TABLE public.productos OWNER TO jfssibxl;

--
-- Name: productos_id_seq; Type: SEQUENCE; Schema: public; Owner: jfssibxl
--

CREATE SEQUENCE productos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.productos_id_seq OWNER TO jfssibxl;

--
-- Name: productos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jfssibxl
--

ALTER SEQUENCE productos_id_seq OWNED BY productos.id;


--
-- Name: subcategorias; Type: TABLE; Schema: public; Owner: jfssibxl; Tablespace: 
--

CREATE TABLE subcategorias (
    id integer NOT NULL,
    id_grupos integer,
    denominacion text
);


ALTER TABLE public.subcategorias OWNER TO jfssibxl;

--
-- Name: subcategorias_id_seq; Type: SEQUENCE; Schema: public; Owner: jfssibxl
--

CREATE SEQUENCE subcategorias_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.subcategorias_id_seq OWNER TO jfssibxl;

--
-- Name: subcategorias_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jfssibxl
--

ALTER SEQUENCE subcategorias_id_seq OWNED BY subcategorias.id;


--
-- Name: tasas; Type: TABLE; Schema: public; Owner: jfssibxl; Tablespace: 
--

CREATE TABLE tasas (
    id integer NOT NULL,
    fecha date,
    monto numeric(26,2) NOT NULL
);


ALTER TABLE public.tasas OWNER TO jfssibxl;

--
-- Name: tasas_id_seq; Type: SEQUENCE; Schema: public; Owner: jfssibxl
--

CREATE SEQUENCE tasas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tasas_id_seq OWNER TO jfssibxl;

--
-- Name: tasas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jfssibxl
--

ALTER SEQUENCE tasas_id_seq OWNED BY tasas.id;


--
-- Name: tipos_movimientos; Type: TABLE; Schema: public; Owner: jfssibxl; Tablespace: 
--

CREATE TABLE tipos_movimientos (
    id integer NOT NULL,
    denominacion text NOT NULL
);


ALTER TABLE public.tipos_movimientos OWNER TO jfssibxl;

--
-- Name: tipos_movimientos_id_seq; Type: SEQUENCE; Schema: public; Owner: jfssibxl
--

CREATE SEQUENCE tipos_movimientos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tipos_movimientos_id_seq OWNER TO jfssibxl;

--
-- Name: tipos_movimientos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jfssibxl
--

ALTER SEQUENCE tipos_movimientos_id_seq OWNED BY tipos_movimientos.id;


--
-- Name: usuarios; Type: TABLE; Schema: public; Owner: jfssibxl; Tablespace: 
--

CREATE TABLE usuarios (
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


ALTER TABLE public.usuarios OWNER TO jfssibxl;

--
-- Name: usuarios_id_seq; Type: SEQUENCE; Schema: public; Owner: jfssibxl
--

CREATE SEQUENCE usuarios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usuarios_id_seq OWNER TO jfssibxl;

--
-- Name: usuarios_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jfssibxl
--

ALTER SEQUENCE usuarios_id_seq OWNED BY usuarios.id;


--
-- Name: view_carrito; Type: VIEW; Schema: public; Owner: jfssibxl
--

CREATE VIEW view_carrito AS
    SELECT a.id, a.id_usuario, (SELECT usuarios.cedula FROM usuarios WHERE (usuarios.id = a.id_usuario) LIMIT 1) AS usuario_cedula, (SELECT usuarios.nombres FROM usuarios WHERE (usuarios.id = a.id_usuario) LIMIT 1) AS usuario, (SELECT usuarios.correo FROM usuarios WHERE (usuarios.id = a.id_usuario) LIMIT 1) AS usuario_correo, (SELECT usuarios.movil FROM usuarios WHERE (usuarios.id = a.id_usuario) LIMIT 1) AS usuario_movil, (SELECT usuarios.fijo FROM usuarios WHERE (usuarios.id = a.id_usuario) LIMIT 1) AS usuario_fijo, a.hora, a.fecha, a.estatus, (SELECT sum(((carrito_productos.cantidad)::numeric * carrito_productos.precio)) AS sum FROM carrito_productos WHERE (a.id = carrito_productos.id_carrito)) AS monto_a_pagar, a.id_cuenta, (SELECT bancos.denominacion FROM bancos WHERE (bancos.id = (SELECT cuentas.banco FROM cuentas WHERE (cuentas.id = a.id_cuenta) LIMIT 1)) LIMIT 1) AS banco, (SELECT cuentas.numero_cuenta FROM cuentas WHERE (cuentas.id = a.id_cuenta) LIMIT 1) AS numero_cuenta, (SELECT cuentas.tipo_cuenta FROM cuentas WHERE (cuentas.id = a.id_cuenta) LIMIT 1) AS tipo_cuenta, (SELECT cuentas.cedula FROM cuentas WHERE (cuentas.id = a.id_cuenta) LIMIT 1) AS identificacion, (SELECT cuentas.responsable FROM cuentas WHERE (cuentas.id = a.id_cuenta) LIMIT 1) AS titular, (SELECT cuentas.telefono FROM cuentas WHERE (cuentas.id = a.id_cuenta) LIMIT 1) AS telefono, (SELECT cuentas.correo FROM cuentas WHERE (cuentas.id = a.id_cuenta) LIMIT 1) AS correo, a.referencia, a.fecha_pago, a.concepto, a.direccion_envio, (SELECT estatus.denominacion FROM estatus WHERE (estatus.id = a.estatus) LIMIT 1) AS status, a.motivo, a.monto, a.monto_bs, a.tipo_pago, (SELECT count(*) AS count FROM carrito_productos WHERE (carrito_productos.id_carrito = a.id) LIMIT 1) AS n_c, (SELECT usuarios.company FROM usuarios WHERE (usuarios.id = a.id_usuario) LIMIT 1) AS compania, (SELECT usuarios.apellidos FROM usuarios WHERE (usuarios.id = a.id_usuario) LIMIT 1) AS apellidos, (SELECT usuarios.direccion FROM usuarios WHERE (usuarios.id = a.id_usuario) LIMIT 1) AS direccion, (SELECT usuarios.code FROM usuarios WHERE (usuarios.id = a.id_usuario) LIMIT 1) AS code, (SELECT usuarios.state FROM usuarios WHERE (usuarios.id = a.id_usuario) LIMIT 1) AS state, (SELECT usuarios.city FROM usuarios WHERE (usuarios.id = a.id_usuario) LIMIT 1) AS city, a.fecha_entrega, a.hora_entrega FROM carrito a ORDER BY a.id;


ALTER TABLE public.view_carrito OWNER TO jfssibxl;

--
-- Name: view_carrito_productos; Type: VIEW; Schema: public; Owner: jfssibxl
--

CREATE VIEW view_carrito_productos AS
    SELECT a.id, a.id_carrito, (SELECT carrito.id_usuario FROM carrito WHERE (carrito.id = a.id_carrito) LIMIT 1) AS id_usuario, (SELECT carrito.hora FROM carrito WHERE (carrito.id = a.id_carrito) LIMIT 1) AS hora, (SELECT carrito.fecha FROM carrito WHERE (carrito.id = a.id_carrito) LIMIT 1) AS fecha, (SELECT carrito.estatus FROM carrito WHERE (carrito.id = a.id_carrito) LIMIT 1) AS estatus, a.id_producto, (SELECT grupos.denominacion FROM grupos WHERE (grupos.id = (SELECT productos.id_grupo FROM productos WHERE (productos.id = a.id_producto) LIMIT 1)) LIMIT 1) AS grupo, (SELECT productos.denominacion FROM productos WHERE (productos.id = a.id_producto) LIMIT 1) AS denominacion, (SELECT productos.descripcion FROM productos WHERE (productos.id = a.id_producto) LIMIT 1) AS descripcion, (SELECT productos.photo FROM productos WHERE (productos.id = a.id_producto) LIMIT 1) AS photo, (SELECT productos.photo_dir FROM productos WHERE (productos.id = a.id_producto) LIMIT 1) AS photo_dir, a.cantidad, a.precio, (SELECT usuarios.correo FROM usuarios WHERE (usuarios.id = (SELECT carrito.id_usuario FROM carrito WHERE (carrito.id = a.id_carrito) LIMIT 1)) LIMIT 1) AS correo, (SELECT carrito.motivo FROM carrito WHERE (carrito.id = a.id_carrito) LIMIT 1) AS motivo, (a.precio * (SELECT tasas.monto FROM tasas ORDER BY tasas.id DESC LIMIT 1)) AS precio_bs FROM carrito_productos a ORDER BY a.id;


ALTER TABLE public.view_carrito_productos OWNER TO jfssibxl;

--
-- Name: view_cuentas; Type: VIEW; Schema: public; Owner: jfssibxl
--

CREATE VIEW view_cuentas AS
    SELECT a.id, a.banco AS id_banco, (SELECT bancos.denominacion FROM bancos WHERE (bancos.id = a.banco) LIMIT 1) AS banco, a.numero_cuenta, a.tipo_cuenta, a.cedula, a.responsable, a.telefono, a.correo, a.id_usuario AS id_empresa FROM cuentas a ORDER BY a.id;


ALTER TABLE public.view_cuentas OWNER TO jfssibxl;

--
-- Name: view_grupos; Type: VIEW; Schema: public; Owner: jfssibxl
--

CREATE VIEW view_grupos AS
    SELECT a.id, a.denominacion, (SELECT count(*) AS count FROM productos WHERE (productos.id_grupo = a.id) LIMIT 1) AS cantidad, a.photo_dir, a.photo FROM grupos a ORDER BY a.id;


ALTER TABLE public.view_grupos OWNER TO jfssibxl;

--
-- Name: view_movimientos; Type: VIEW; Schema: public; Owner: jfssibxl
--

CREATE VIEW view_movimientos AS
    SELECT a.id, a.id_producto, (SELECT productos.denominacion FROM productos WHERE (productos.id = a.id_producto) LIMIT 1) AS producto, (SELECT productos.photo FROM productos WHERE (productos.id = a.id_producto) LIMIT 1) AS photo, (SELECT productos.photo_dir FROM productos WHERE (productos.id = a.id_producto) LIMIT 1) AS photo_dir, a.cantidad, a.precio, a.fecha, a.tipo_movimiento, (SELECT tipos_movimientos.denominacion FROM tipos_movimientos WHERE (tipos_movimientos.id = a.tipo_movimiento) LIMIT 1) AS estatu, a.id_carrito, (SELECT productos.id_grupo FROM productos WHERE (productos.id = a.id_producto) LIMIT 1) AS grupo FROM movimientos a ORDER BY a.id;


ALTER TABLE public.view_movimientos OWNER TO jfssibxl;

--
-- Name: view_productos; Type: VIEW; Schema: public; Owner: jfssibxl
--

CREATE VIEW view_productos AS
    SELECT a.id, a.id_grupo, (SELECT grupos.denominacion FROM grupos WHERE (grupos.id = a.id_grupo) LIMIT 1) AS grupo, a.denominacion, a.descripcion, a.precio, a.photo, a.photo_dir, a.codigo, a.promocion, a.precio_promocion, (a.precio * (SELECT tasas.monto FROM tasas ORDER BY tasas.id DESC LIMIT 1)) AS precio_bs, a.status, a.id_subcategoria, (SELECT subcategorias.denominacion FROM subcategorias WHERE (subcategorias.id = a.id_subcategoria) LIMIT 1) AS subcategorias FROM productos a ORDER BY a.id;


ALTER TABLE public.view_productos OWNER TO jfssibxl;

--
-- Name: view_sub; Type: VIEW; Schema: public; Owner: jfssibxl
--

CREATE VIEW view_sub AS
    SELECT a.id, a.id_grupos, (SELECT grupos.denominacion FROM grupos WHERE (grupos.id = a.id_grupos) LIMIT 1) AS grupo, a.denominacion FROM subcategorias a ORDER BY a.id;


ALTER TABLE public.view_sub OWNER TO jfssibxl;

--
-- Name: id; Type: DEFAULT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY bancos ALTER COLUMN id SET DEFAULT nextval('bancos_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY bancos_usa ALTER COLUMN id SET DEFAULT nextval('bancos_usa_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY carrito ALTER COLUMN id SET DEFAULT nextval('carrito_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY carrito_productos ALTER COLUMN id SET DEFAULT nextval('carrito_productos_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY clasificacion ALTER COLUMN id SET DEFAULT nextval('clasificacion_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY contactos ALTER COLUMN id SET DEFAULT nextval('contactos_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY cuentas ALTER COLUMN id SET DEFAULT nextval('cuentas_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY estatus ALTER COLUMN id SET DEFAULT nextval('estatus_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY grupos ALTER COLUMN id SET DEFAULT nextval('grupos_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY motorizado ALTER COLUMN id SET DEFAULT nextval('motorizado_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY movimientos ALTER COLUMN id SET DEFAULT nextval('movimientos_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY municipios ALTER COLUMN id SET DEFAULT nextval('municipios_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY parroquias ALTER COLUMN id SET DEFAULT nextval('parroquias_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY privilegios ALTER COLUMN id SET DEFAULT nextval('privilegios_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY productos ALTER COLUMN id SET DEFAULT nextval('productos_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY subcategorias ALTER COLUMN id SET DEFAULT nextval('subcategorias_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY tasas ALTER COLUMN id SET DEFAULT nextval('tasas_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY tipos_movimientos ALTER COLUMN id SET DEFAULT nextval('tipos_movimientos_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY usuarios ALTER COLUMN id SET DEFAULT nextval('usuarios_id_seq'::regclass);


--
-- Data for Name: bancos; Type: TABLE DATA; Schema: public; Owner: jfssibxl
--

INSERT INTO bancos VALUES (2, 'BANK OF AMERICA', 'HTTPS://SECURE.BANKOFAMERICA.COM/LOGIN/SIGN-IN/SIGNONV2SCREEN.GO?REQUEST_LOCALE=ES-US');
INSERT INTO bancos VALUES (5, 'FSDFCC', 'DFFSDF');


--
-- Name: bancos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jfssibxl
--

SELECT pg_catalog.setval('bancos_id_seq', 5, true);


--
-- Data for Name: bancos_usa; Type: TABLE DATA; Schema: public; Owner: jfssibxl
--

INSERT INTO bancos_usa VALUES (1, 'Bank Of America', 'https://secure.bankofamerica.com/login/sign-in/signOnV2Screen.go?request_locale=es-us');


--
-- Name: bancos_usa_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jfssibxl
--

SELECT pg_catalog.setval('bancos_usa_id_seq', 1, false);


--
-- Data for Name: carrito; Type: TABLE DATA; Schema: public; Owner: jfssibxl
--

INSERT INTO carrito VALUES (182, 96, '01:11:32', '2020-11-02', 6, NULL, NULL, NULL, 'Farm Store', 'GABY VAQUITA 2407 ', NULL, NULL, NULL, NULL, NULL, '2020-11-02', '18:11:00', 108.03, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO carrito VALUES (183, 97, '16:11:15', '2020-11-03', 6, NULL, NULL, NULL, 'farm store ', '', NULL, NULL, NULL, NULL, NULL, '2020-11-04', '13:11:00', 182.48, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO carrito VALUES (215, 100, '23:12:26', '2020-12-14', 6, NULL, NULL, NULL, 'Farm Sebas, LLC ', '', NULL, NULL, NULL, NULL, NULL, '2020-12-17', '18:12:00', 194.82, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO carrito VALUES (185, 100, '15:11:39', '2020-11-05', 6, NULL, NULL, NULL, 'Farm Sebas, LLC ', '8753 sw 157 Ave, Miami FL. 33193', NULL, NULL, NULL, NULL, NULL, '2020-11-07', '01:11:00', 245.96, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO carrito VALUES (216, 98, '18:12:15', '2020-12-17', 6, NULL, NULL, NULL, 'FARM STORE 106', '', NULL, NULL, NULL, NULL, NULL, '2020-12-18', '00:12:00', 196.94, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO carrito VALUES (186, 96, '23:11:50', '2020-11-08', 6, NULL, NULL, NULL, 'Farm Store', '', NULL, NULL, NULL, NULL, NULL, '2020-11-09', '18:11:00', 14.50, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO carrito VALUES (184, 96, '02:11:09', '2020-11-05', 6, NULL, NULL, NULL, 'Farm Store', '', NULL, NULL, NULL, NULL, NULL, '2020-11-09', '18:11:00', 127.79, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO carrito VALUES (189, 98, '17:11:41', '2020-11-12', 6, NULL, NULL, NULL, 'FARM STORE 106', '', NULL, NULL, NULL, NULL, NULL, '2020-11-13', '14:11:00', 135.47, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO carrito VALUES (218, 100, '23:01:03', '2021-01-06', 6, NULL, NULL, NULL, 'Farm Sebas, LLC ', '', NULL, NULL, NULL, NULL, NULL, '2021-01-09', '01:01:00', 113.17, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO carrito VALUES (191, 102, '15:11:23', '2020-11-13', 6, NULL, NULL, NULL, 'E & J BROTHERS GROUP LLC ( FS 1306)', '', NULL, NULL, NULL, NULL, NULL, '2020-11-14', '01:11:00', 207.23, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO carrito VALUES (190, 97, '18:11:50', '2020-11-12', 6, NULL, NULL, NULL, 'farm store ', '', NULL, NULL, NULL, NULL, NULL, '2020-11-14', '01:11:00', 139.94, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO carrito VALUES (192, 97, '11:11:36', '2020-11-14', 6, NULL, NULL, NULL, 'farm store ', '', NULL, NULL, NULL, NULL, NULL, '2020-11-14', '16:11:00', 81.95, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO carrito VALUES (188, 96, '20:11:31', '2020-11-11', 6, NULL, NULL, NULL, 'Farm Store', '', NULL, NULL, NULL, NULL, NULL, '2020-11-17', '01:11:00', 83.51, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO carrito VALUES (207, 102, '15:11:54', '2020-11-24', 6, NULL, NULL, NULL, 'E & J BROTHERS GROUP LLC ( FS 1306)', '', NULL, NULL, NULL, NULL, NULL, '2020-11-24', '22:11:00', 180.18, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO carrito VALUES (193, 97, '12:11:52', '2020-11-17', 6, NULL, NULL, NULL, 'farm store ', '', NULL, NULL, NULL, NULL, NULL, '2020-11-18', '17:11:00', 180.17, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO carrito VALUES (194, 102, '12:11:50', '2020-11-18', 6, NULL, NULL, NULL, 'E & J BROTHERS GROUP LLC ( FS 1306)', '', NULL, NULL, NULL, NULL, NULL, '2020-11-19', '15:11:00', 337.28, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO carrito VALUES (196, 107, '16:11:31', '2020-11-20', 6, NULL, NULL, NULL, 'farm stores 104', '', NULL, NULL, NULL, NULL, NULL, '2020-11-20', '16:11:00', 79.50, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO carrito VALUES (208, 96, '02:11:13', '2020-11-25', 6, NULL, NULL, NULL, 'Farm Store', '', NULL, NULL, NULL, NULL, NULL, '2020-11-25', '22:11:00', 99.32, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO carrito VALUES (219, 102, '14:01:48', '2021-01-13', 6, NULL, NULL, NULL, 'E & J BROTHERS GROUP LLC ( FS 1306)', '', NULL, NULL, NULL, NULL, NULL, '2021-01-15', '01:01:00', 581.94, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO carrito VALUES (195, 96, '21:11:24', '2020-11-18', 6, NULL, NULL, NULL, 'Farm Store', '', NULL, NULL, NULL, NULL, NULL, '2020-11-22', '15:11:00', 109.79, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO carrito VALUES (209, 102, '14:11:09', '2020-11-25', 6, NULL, NULL, NULL, 'E & J BROTHERS GROUP LLC ( FS 1306)', '', NULL, NULL, NULL, NULL, NULL, '2020-11-25', '22:11:00', 23.94, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO carrito VALUES (220, 100, '16:01:13', '2021-01-14', 6, NULL, NULL, NULL, 'Farm Sebas, LLC ', '', NULL, NULL, NULL, NULL, NULL, '2021-01-17', '16:01:00', 172.29, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO carrito VALUES (210, 102, '15:11:51', '2020-11-27', 6, NULL, NULL, NULL, 'E & J BROTHERS GROUP LLC ( FS 1306)', '', NULL, NULL, NULL, NULL, NULL, '2020-11-27', '16:11:00', 64.81, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO carrito VALUES (221, 100, '17:01:49', '2021-01-26', 6, NULL, NULL, NULL, 'Farm Sebas, LLC ', '', NULL, NULL, NULL, NULL, NULL, '2021-01-29', '15:01:00', 88.83, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO carrito VALUES (212, 98, '16:12:59', '2020-12-03', 6, NULL, NULL, NULL, 'FARM STORE 106', '', NULL, NULL, NULL, NULL, NULL, '2020-12-03', '23:12:00', 152.44, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO carrito VALUES (211, 100, '14:12:45', '2020-12-03', 6, NULL, NULL, NULL, 'Farm Sebas, LLC ', '', NULL, NULL, NULL, NULL, NULL, '2020-12-04', '00:12:00', 184.47, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO carrito VALUES (222, 100, '17:02:37', '2021-02-11', 3, NULL, NULL, NULL, 'Farm Sebas, LLC ', '', NULL, NULL, NULL, NULL, NULL, '2021-02-11', '18:02:00', 46.63, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO carrito VALUES (213, 98, '14:12:14', '2020-12-08', 6, NULL, NULL, NULL, 'FARM STORE 106', '', NULL, NULL, NULL, NULL, NULL, '2020-12-08', '19:12:00', 134.15, NULL, NULL, 'TRANSFERENCIA');
INSERT INTO carrito VALUES (214, 97, '14:12:45', '2020-12-10', 6, NULL, NULL, NULL, 'farm store ', '', NULL, NULL, NULL, NULL, NULL, '2020-12-11', '02:12:00', 133.86, NULL, NULL, 'TRANSFERENCIA');


--
-- Name: carrito_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jfssibxl
--

SELECT pg_catalog.setval('carrito_id_seq', 222, true);


--
-- Data for Name: carrito_productos; Type: TABLE DATA; Schema: public; Owner: jfssibxl
--

INSERT INTO carrito_productos VALUES (293, 182, 147, 1, 33.98);
INSERT INTO carrito_productos VALUES (295, 182, 192, 1, 24.96);
INSERT INTO carrito_productos VALUES (296, 182, 179, 1, 13.64);
INSERT INTO carrito_productos VALUES (297, 183, 139, 1, 14.50);
INSERT INTO carrito_productos VALUES (298, 183, 146, 1, 16.98);
INSERT INTO carrito_productos VALUES (299, 183, 145, 1, 16.98);
INSERT INTO carrito_productos VALUES (300, 183, 144, 1, 16.98);
INSERT INTO carrito_productos VALUES (301, 183, 143, 1, 16.98);
INSERT INTO carrito_productos VALUES (302, 183, 140, 1, 14.50);
INSERT INTO carrito_productos VALUES (303, 183, 141, 1, 14.50);
INSERT INTO carrito_productos VALUES (304, 183, 142, 1, 14.50);
INSERT INTO carrito_productos VALUES (305, 183, 190, 3, 12.86);
INSERT INTO carrito_productos VALUES (306, 183, 171, 1, 17.98);
INSERT INTO carrito_productos VALUES (308, 184, 202, 1, 13.78);
INSERT INTO carrito_productos VALUES (417, 210, 215, 1, 42.76);
INSERT INTO carrito_productos VALUES (312, 185, 142, 1, 14.50);
INSERT INTO carrito_productos VALUES (313, 185, 141, 1, 14.50);
INSERT INTO carrito_productos VALUES (314, 185, 140, 1, 14.50);
INSERT INTO carrito_productos VALUES (316, 185, 148, 1, 33.99);
INSERT INTO carrito_productos VALUES (419, 211, 201, 8, 4.98);
INSERT INTO carrito_productos VALUES (315, 185, 192, 1, 24.96);
INSERT INTO carrito_productos VALUES (421, 211, 147, 1, 33.99);
INSERT INTO carrito_productos VALUES (422, 211, 193, 1, 36.45);
INSERT INTO carrito_productos VALUES (320, 184, 152, 5, 5.98);
INSERT INTO carrito_productos VALUES (324, 184, 192, 1, 24.96);
INSERT INTO carrito_productos VALUES (325, 184, 246, 1, 23.70);
INSERT INTO carrito_productos VALUES (326, 186, 139, 1, 14.50);
INSERT INTO carrito_productos VALUES (423, 211, 267, 1, 29.64);
INSERT INTO carrito_productos VALUES (328, 188, 241, 1, 16.94);
INSERT INTO carrito_productos VALUES (329, 189, 160, 2, 33.98);
INSERT INTO carrito_productos VALUES (330, 189, 169, 1, 48.53);
INSERT INTO carrito_productos VALUES (331, 189, 156, 1, 18.98);
INSERT INTO carrito_productos VALUES (332, 190, 239, 1, 49.98);
INSERT INTO carrito_productos VALUES (333, 190, 197, 1, 21.98);
INSERT INTO carrito_productos VALUES (334, 190, 147, 1, 33.99);
INSERT INTO carrito_productos VALUES (335, 190, 148, 1, 33.99);
INSERT INTO carrito_productos VALUES (336, 191, 139, 1, 13.50);
INSERT INTO carrito_productos VALUES (337, 191, 142, 1, 13.50);
INSERT INTO carrito_productos VALUES (338, 191, 141, 1, 13.50);
INSERT INTO carrito_productos VALUES (339, 191, 140, 1, 13.50);
INSERT INTO carrito_productos VALUES (340, 191, 192, 1, 24.96);
INSERT INTO carrito_productos VALUES (341, 191, 196, 1, 22.92);
INSERT INTO carrito_productos VALUES (342, 191, 163, 1, 13.78);
INSERT INTO carrito_productos VALUES (343, 191, 136, 2, 13.78);
INSERT INTO carrito_productos VALUES (344, 191, 137, 2, 13.78);
INSERT INTO carrito_productos VALUES (345, 191, 193, 1, 36.45);
INSERT INTO carrito_productos VALUES (346, 192, 152, 6, 5.98);
INSERT INTO carrito_productos VALUES (347, 192, 180, 1, 19.59);
INSERT INTO carrito_productos VALUES (348, 192, 252, 1, 16.94);
INSERT INTO carrito_productos VALUES (349, 192, 199, 1, 9.54);
INSERT INTO carrito_productos VALUES (350, 188, 193, 1, 36.45);
INSERT INTO carrito_productos VALUES (351, 188, 179, 1, 13.64);
INSERT INTO carrito_productos VALUES (352, 188, 159, 1, 16.48);
INSERT INTO carrito_productos VALUES (353, 193, 147, 1, 33.99);
INSERT INTO carrito_productos VALUES (354, 193, 239, 1, 49.98);
INSERT INTO carrito_productos VALUES (355, 193, 251, 1, 21.67);
INSERT INTO carrito_productos VALUES (357, 193, 158, 1, 16.98);
INSERT INTO carrito_productos VALUES (358, 193, 156, 1, 18.98);
INSERT INTO carrito_productos VALUES (359, 193, 155, 1, 18.98);
INSERT INTO carrito_productos VALUES (360, 193, 181, 1, 19.59);
INSERT INTO carrito_productos VALUES (361, 194, 219, 1, 32.32);
INSERT INTO carrito_productos VALUES (362, 194, 251, 1, 21.67);
INSERT INTO carrito_productos VALUES (363, 194, 170, 4, 14.98);
INSERT INTO carrito_productos VALUES (364, 194, 141, 1, 13.50);
INSERT INTO carrito_productos VALUES (365, 194, 140, 1, 13.50);
INSERT INTO carrito_productos VALUES (366, 194, 144, 1, 16.50);
INSERT INTO carrito_productos VALUES (367, 194, 143, 1, 16.50);
INSERT INTO carrito_productos VALUES (370, 194, 197, 1, 21.98);
INSERT INTO carrito_productos VALUES (371, 194, 159, 2, 16.48);
INSERT INTO carrito_productos VALUES (372, 194, 157, 2, 15.48);
INSERT INTO carrito_productos VALUES (373, 194, 149, 1, 22.50);
INSERT INTO carrito_productos VALUES (374, 194, 148, 1, 33.99);
INSERT INTO carrito_productos VALUES (378, 195, 148, 1, 33.99);
INSERT INTO carrito_productos VALUES (380, 195, 190, 1, 12.86);
INSERT INTO carrito_productos VALUES (381, 195, 179, 1, 13.64);
INSERT INTO carrito_productos VALUES (383, 195, 165, 4, 4.85);
INSERT INTO carrito_productos VALUES (384, 196, 146, 1, 16.50);
INSERT INTO carrito_productos VALUES (385, 196, 145, 1, 16.50);
INSERT INTO carrito_productos VALUES (386, 196, 144, 1, 16.50);
INSERT INTO carrito_productos VALUES (387, 196, 143, 1, 16.50);
INSERT INTO carrito_productos VALUES (388, 196, 139, 1, 13.50);
INSERT INTO carrito_productos VALUES (377, 195, 152, 5, 5.98);
INSERT INTO carrito_productos VALUES (424, 211, 180, 1, 19.59);
INSERT INTO carrito_productos VALUES (400, 207, 139, 2, 13.50);
INSERT INTO carrito_productos VALUES (401, 207, 141, 2, 13.50);
INSERT INTO carrito_productos VALUES (402, 207, 140, 1, 13.50);
INSERT INTO carrito_productos VALUES (403, 207, 142, 1, 13.50);
INSERT INTO carrito_productos VALUES (404, 207, 146, 1, 16.50);
INSERT INTO carrito_productos VALUES (405, 207, 137, 1, 13.78);
INSERT INTO carrito_productos VALUES (406, 207, 138, 2, 13.78);
INSERT INTO carrito_productos VALUES (407, 207, 136, 1, 13.78);
INSERT INTO carrito_productos VALUES (408, 207, 163, 2, 13.78);
INSERT INTO carrito_productos VALUES (409, 208, 145, 1, 16.50);
INSERT INTO carrito_productos VALUES (411, 208, 143, 1, 16.50);
INSERT INTO carrito_productos VALUES (412, 208, 146, 1, 16.50);
INSERT INTO carrito_productos VALUES (413, 208, 280, 1, 17.50);
INSERT INTO carrito_productos VALUES (414, 208, 219, 1, 32.32);
INSERT INTO carrito_productos VALUES (415, 209, 195, 3, 7.98);
INSERT INTO carrito_productos VALUES (416, 210, 228, 1, 22.05);
INSERT INTO carrito_productos VALUES (420, 211, 192, 1, 24.96);
INSERT INTO carrito_productos VALUES (425, 212, 148, 2, 33.99);
INSERT INTO carrito_productos VALUES (426, 212, 160, 2, 33.98);
INSERT INTO carrito_productos VALUES (427, 212, 143, 1, 16.50);
INSERT INTO carrito_productos VALUES (428, 213, 251, 1, 21.67);
INSERT INTO carrito_productos VALUES (429, 213, 241, 1, 16.94);
INSERT INTO carrito_productos VALUES (430, 213, 137, 2, 13.78);
INSERT INTO carrito_productos VALUES (431, 213, 148, 2, 33.99);
INSERT INTO carrito_productos VALUES (434, 214, 140, 1, 13.50);
INSERT INTO carrito_productos VALUES (435, 214, 146, 1, 16.50);
INSERT INTO carrito_productos VALUES (436, 214, 144, 1, 16.50);
INSERT INTO carrito_productos VALUES (437, 214, 142, 1, 13.50);
INSERT INTO carrito_productos VALUES (432, 214, 285, 2, 6.98);
INSERT INTO carrito_productos VALUES (445, 215, 201, 5, 4.98);
INSERT INTO carrito_productos VALUES (433, 214, 152, 5, 5.98);
INSERT INTO carrito_productos VALUES (438, 214, 143, 1, 16.50);
INSERT INTO carrito_productos VALUES (439, 214, 141, 1, 13.50);
INSERT INTO carrito_productos VALUES (444, 215, 158, 1, 16.98);
INSERT INTO carrito_productos VALUES (442, 215, 145, 1, 16.50);
INSERT INTO carrito_productos VALUES (452, 216, 139, 2, 13.50);
INSERT INTO carrito_productos VALUES (443, 215, 143, 1, 16.50);
INSERT INTO carrito_productos VALUES (441, 215, 139, 1, 13.50);
INSERT INTO carrito_productos VALUES (440, 215, 142, 1, 13.50);
INSERT INTO carrito_productos VALUES (454, 216, 145, 1, 16.50);
INSERT INTO carrito_productos VALUES (446, 215, 147, 1, 33.99);
INSERT INTO carrito_productos VALUES (455, 216, 144, 1, 16.50);
INSERT INTO carrito_productos VALUES (447, 215, 192, 1, 24.96);
INSERT INTO carrito_productos VALUES (448, 215, 148, 1, 33.99);
INSERT INTO carrito_productos VALUES (449, 216, 147, 2, 33.99);
INSERT INTO carrito_productos VALUES (450, 216, 173, 2, 17.98);
INSERT INTO carrito_productos VALUES (451, 216, 143, 1, 16.50);
INSERT INTO carrito_productos VALUES (457, 218, 284, 1, 19.59);
INSERT INTO carrito_productos VALUES (458, 218, 285, 1, 6.98);
INSERT INTO carrito_productos VALUES (459, 218, 215, 1, 42.76);
INSERT INTO carrito_productos VALUES (460, 218, 201, 5, 4.98);
INSERT INTO carrito_productos VALUES (461, 218, 153, 1, 6.98);
INSERT INTO carrito_productos VALUES (463, 219, 278, 1, 27.54);
INSERT INTO carrito_productos VALUES (462, 218, 152, 2, 5.98);
INSERT INTO carrito_productos VALUES (465, 219, 193, 1, 36.45);
INSERT INTO carrito_productos VALUES (466, 219, 160, 1, 33.98);
INSERT INTO carrito_productos VALUES (467, 219, 148, 1, 33.99);
INSERT INTO carrito_productos VALUES (468, 219, 147, 1, 33.99);
INSERT INTO carrito_productos VALUES (469, 219, 227, 1, 16.96);
INSERT INTO carrito_productos VALUES (470, 219, 149, 1, 22.50);
INSERT INTO carrito_productos VALUES (471, 219, 165, 5, 4.49);
INSERT INTO carrito_productos VALUES (472, 219, 159, 2, 16.48);
INSERT INTO carrito_productos VALUES (473, 219, 157, 2, 15.48);
INSERT INTO carrito_productos VALUES (474, 219, 146, 1, 16.50);
INSERT INTO carrito_productos VALUES (475, 219, 145, 1, 16.50);
INSERT INTO carrito_productos VALUES (476, 219, 143, 1, 16.50);
INSERT INTO carrito_productos VALUES (477, 219, 142, 2, 13.50);
INSERT INTO carrito_productos VALUES (478, 219, 141, 2, 13.50);
INSERT INTO carrito_productos VALUES (479, 219, 138, 1, 13.78);
INSERT INTO carrito_productos VALUES (480, 219, 137, 2, 13.78);
INSERT INTO carrito_productos VALUES (481, 219, 136, 2, 13.78);
INSERT INTO carrito_productos VALUES (482, 219, 163, 1, 13.78);
INSERT INTO carrito_productos VALUES (484, 219, 140, 2, 13.50);
INSERT INTO carrito_productos VALUES (483, 219, 139, 2, 13.50);
INSERT INTO carrito_productos VALUES (485, 220, 285, 2, 6.98);
INSERT INTO carrito_productos VALUES (487, 220, 143, 1, 16.50);
INSERT INTO carrito_productos VALUES (488, 220, 139, 1, 13.50);
INSERT INTO carrito_productos VALUES (489, 220, 142, 1, 13.50);
INSERT INTO carrito_productos VALUES (490, 220, 141, 1, 13.50);
INSERT INTO carrito_productos VALUES (486, 220, 201, 7, 4.98);
INSERT INTO carrito_productos VALUES (491, 220, 152, 3, 5.98);
INSERT INTO carrito_productos VALUES (492, 220, 169, 1, 48.53);
INSERT INTO carrito_productos VALUES (493, 221, 201, 6, 4.98);
INSERT INTO carrito_productos VALUES (494, 221, 192, 1, 24.96);
INSERT INTO carrito_productos VALUES (495, 221, 147, 1, 33.99);
INSERT INTO carrito_productos VALUES (497, 222, 251, 1, 21.67);
INSERT INTO carrito_productos VALUES (496, 222, 192, 1, 24.96);


--
-- Name: carrito_productos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jfssibxl
--

SELECT pg_catalog.setval('carrito_productos_id_seq', 497, true);


--
-- Data for Name: clasificacion; Type: TABLE DATA; Schema: public; Owner: jfssibxl
--



--
-- Name: clasificacion_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jfssibxl
--

SELECT pg_catalog.setval('clasificacion_id_seq', 6, true);


--
-- Data for Name: contactos; Type: TABLE DATA; Schema: public; Owner: jfssibxl
--

INSERT INTO contactos VALUES (41, '', 'DOMAIN SERVICES EXPIRATION NOTICE FOR buenodiaz.com

Domain Notice Expiry ON: Dec 22, 2020

We have actually not obtained a settlement from you.
We''ve tried to contact you however were not able to contact you.


Go To: https://bit.ly/3auhAYW

For details and to make a discretionary settlement for your domain website service.





122220201748313753688578798buenodiaz.com', 'buenodiaz.com@buenodiaz.com', '2020-12-22');
INSERT INTO contactos VALUES (45, '', 'DOMAIN SERVICES EXPIRATION NOTICE FOR buenodiaz.com

Domain Notice Expiry ON: Jan 06, 2021


We have actually not received a payment from you.
We have actually attempted to email you but were not able to contact you.


Go To: https://cutt.ly/Cjf8dU9

For details and also to process a discretionary settlement for your domain website solutions.




010620211732383753688578798buenodiaz.com', 'buenodiaz.com@buenodiaz.com', '2021-01-06');
INSERT INTO contactos VALUES (47, '', 'DOMAIN SERVICES EXPIRATION NOTICE FOR buenodiaz.com

Domain Notice Expiry ON: Jan 09, 2021


We have not obtained a payment from you.
We have actually attempted to email you yet were incapable to contact you.


Browse Through: https://bit.ly/3nwvZ9G

For details and also to process a discretionary settlement for your domain website service.




010920212006213753688578798buenodiaz.com', 'buenodiaz.com@buenodiaz.com', '2021-01-10');
INSERT INTO contactos VALUES (50, '', 'DOMAIN SERVICES EXPIRATION NOTICE FOR buenodiaz.com

Domain Notice Expiry ON: Jan 14, 2021


We have actually not gotten a payment from you.
We''ve tried to call you however were not able to contact you.


Browse Through: https://bit.ly/3qlJ8EE

For information as well as to process a discretionary settlement for your domain website service.




011420212017283753688578798buenodiaz.com', 'buenodiaz.com@buenodiaz.com', '2021-01-15');
INSERT INTO contactos VALUES (57, '', 'Hi|Hey|Good evening|Good morning|Good Afternoon} people at buenodiaz.com,
Hope you’re excellent. 
I''m , I hope that the company is good and you’ve been achieving a lot throughout the current situation.
I assume you will want to have a better blocker form unwanted emails, you''ll need this one.
https://slimex365.com/antispam169398
In case you are not interested, simply ignore this email , we won''t contact you again.
Kind regards,

OneTwo GmbH', 'leatherman.francesca@hotmail.com', '2021-02-04');
INSERT INTO contactos VALUES (58, '', 'Hey, my name’s Eric and for just a second, imagine this…

- Someone does a search and winds up at buenodiaz.com.

- They hang out for a minute to check it out.  “I’m interested… but… maybe…”

- And then they hit the back button and check out the other search results instead. 

- Bottom line – you got an eyeball, but nothing else to show for it.

- There they go.

This isn’t really your fault – it happens a LOT – studies show 7 out of 10 visitors to any site disappear without leaving a trace.

But you CAN fix that.

Talk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It lets you know right then and there – enabling you to call that lead while they’re literally looking over your site.

CLICK HERE https://talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.

Time is money when it comes to connecting with leads – the difference between contacting someone within 5 minutes versus 30 minutes later can be huge – like 100 times better!

Plus, now that you have their phone number, with our new SMS Text With Lead feature you can automatically start a text (SMS) conversation… so even if you don’t close a deal then, you can follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.

Strong stuff.

CLICK HERE https://talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business.

You could be converting up to 100X more leads today!

Eric
PS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. 
You have customers waiting to talk with you right now… don’t keep them waiting. 
CLICK HERE https://talkwithwebvisitors.com to try Talk With Web Visitor now.

If you''d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=buenodiaz.com
', 'eric.jones.z.mail@gmail.com', '2021-02-06');
INSERT INTO contactos VALUES (59, '', 'Hi people at buenodiaz.com,
Hope you’re great. 
I''m , I hope that clients are good and you’ve been doing well through the entire current situation.
 Hi, I’m an IT specialist, I see that your particular site might not have efficient protection from unwanted messages. On our website, you will probably find an anti-spam filter for your site. I hope you''ll find it useful. I will be glad to resolve all of your questions. You can contact me using the the info below.
https://jtbtigers.com/blockspam937444
In case you are not interested, simply erase this message and that we won''t contact you again.
Kind regards,

OneTwo GmbH
', 'brabyn.van@gmail.com', '2021-02-06');


--
-- Name: contactos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jfssibxl
--

SELECT pg_catalog.setval('contactos_id_seq', 59, true);


--
-- Data for Name: cuentas; Type: TABLE DATA; Schema: public; Owner: jfssibxl
--



--
-- Name: cuentas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jfssibxl
--

SELECT pg_catalog.setval('cuentas_id_seq', 41, true);


--
-- Data for Name: estatus; Type: TABLE DATA; Schema: public; Owner: jfssibxl
--

INSERT INTO estatus VALUES (6, 'DELIVERED');
INSERT INTO estatus VALUES (5, 'ON WAY');
INSERT INTO estatus VALUES (4, 'TO SEND');
INSERT INTO estatus VALUES (3, 'APPROVED');
INSERT INTO estatus VALUES (1, 'PENDING');
INSERT INTO estatus VALUES (2, 'CANCELLED');
INSERT INTO estatus VALUES (0, 'PENDING.');


--
-- Name: estatus_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jfssibxl
--

SELECT pg_catalog.setval('estatus_id_seq', 1, false);


--
-- Data for Name: grupos; Type: TABLE DATA; Schema: public; Owner: jfssibxl
--

INSERT INTO grupos VALUES (36, 'Grocery', 'Grocery 2.png', '505f3912-c716-4c21-ae72-80e5db05aec2');
INSERT INTO grupos VALUES (38, 'Personal Care', 'Loreal.png', '505f3912-c716-4c21-ae72-80e5db05aec2');
INSERT INTO grupos VALUES (37, 'Household Essentials', 'Household-Essentials.png', '505f3912-c716-4c21-ae72-80e5db05aec2');
INSERT INTO grupos VALUES (39, 'Electronics', 'Tv.png', '505f3912-c716-4c21-ae72-80e5db05aec2');


--
-- Name: grupos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jfssibxl
--

SELECT pg_catalog.setval('grupos_id_seq', 44, true);


--
-- Data for Name: motorizado; Type: TABLE DATA; Schema: public; Owner: jfssibxl
--



--
-- Name: motorizado_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jfssibxl
--

SELECT pg_catalog.setval('motorizado_id_seq', 1, true);


--
-- Data for Name: movimientos; Type: TABLE DATA; Schema: public; Owner: jfssibxl
--

INSERT INTO movimientos VALUES (140, 147, 1, 33.98, '2020-11-02', 2, 182);
INSERT INTO movimientos VALUES (141, 192, 1, 24.96, '2020-11-02', 2, 182);
INSERT INTO movimientos VALUES (142, 179, 1, 13.64, '2020-11-02', 2, 182);
INSERT INTO movimientos VALUES (143, 147, 1, 33.98, '2020-11-02', 2, 182);
INSERT INTO movimientos VALUES (144, 192, 1, 24.96, '2020-11-02', 2, 182);
INSERT INTO movimientos VALUES (145, 179, 1, 13.64, '2020-11-02', 2, 182);
INSERT INTO movimientos VALUES (146, 139, 1, 14.50, '2020-11-03', 2, 183);
INSERT INTO movimientos VALUES (147, 146, 1, 16.98, '2020-11-03', 2, 183);
INSERT INTO movimientos VALUES (148, 145, 1, 16.98, '2020-11-03', 2, 183);
INSERT INTO movimientos VALUES (149, 144, 1, 16.98, '2020-11-03', 2, 183);
INSERT INTO movimientos VALUES (150, 143, 1, 16.98, '2020-11-03', 2, 183);
INSERT INTO movimientos VALUES (151, 140, 1, 14.50, '2020-11-03', 2, 183);
INSERT INTO movimientos VALUES (152, 141, 1, 14.50, '2020-11-03', 2, 183);
INSERT INTO movimientos VALUES (153, 142, 1, 14.50, '2020-11-03', 2, 183);
INSERT INTO movimientos VALUES (154, 190, 3, 12.86, '2020-11-03', 2, 183);
INSERT INTO movimientos VALUES (155, 171, 1, 17.98, '2020-11-03', 2, 183);
INSERT INTO movimientos VALUES (156, 139, 1, 14.50, '2020-11-04', 2, 183);
INSERT INTO movimientos VALUES (157, 146, 1, 16.98, '2020-11-04', 2, 183);
INSERT INTO movimientos VALUES (158, 145, 1, 16.98, '2020-11-04', 2, 183);
INSERT INTO movimientos VALUES (159, 144, 1, 16.98, '2020-11-04', 2, 183);
INSERT INTO movimientos VALUES (160, 143, 1, 16.98, '2020-11-04', 2, 183);
INSERT INTO movimientos VALUES (161, 140, 1, 14.50, '2020-11-04', 2, 183);
INSERT INTO movimientos VALUES (162, 141, 1, 14.50, '2020-11-04', 2, 183);
INSERT INTO movimientos VALUES (163, 142, 1, 14.50, '2020-11-04', 2, 183);
INSERT INTO movimientos VALUES (164, 190, 3, 12.86, '2020-11-04', 2, 183);
INSERT INTO movimientos VALUES (165, 171, 1, 17.98, '2020-11-04', 2, 183);
INSERT INTO movimientos VALUES (166, 142, 1, 14.50, '2020-11-07', 2, 185);
INSERT INTO movimientos VALUES (167, 141, 1, 14.50, '2020-11-07', 2, 185);
INSERT INTO movimientos VALUES (168, 140, 1, 14.50, '2020-11-07', 2, 185);
INSERT INTO movimientos VALUES (169, 192, 1, 24.96, '2020-11-07', 2, 185);
INSERT INTO movimientos VALUES (170, 148, 1, 33.99, '2020-11-07', 2, 185);
INSERT INTO movimientos VALUES (171, 142, 1, 14.50, '2020-11-07', 2, 185);
INSERT INTO movimientos VALUES (172, 141, 1, 14.50, '2020-11-07', 2, 185);
INSERT INTO movimientos VALUES (173, 140, 1, 14.50, '2020-11-07', 2, 185);
INSERT INTO movimientos VALUES (174, 192, 1, 24.96, '2020-11-07', 2, 185);
INSERT INTO movimientos VALUES (175, 148, 1, 33.99, '2020-11-07', 2, 185);
INSERT INTO movimientos VALUES (176, 139, 1, 14.50, '2020-11-09', 2, 186);
INSERT INTO movimientos VALUES (177, 202, 1, 13.78, '2020-11-09', 2, 184);
INSERT INTO movimientos VALUES (178, 152, 5, 5.98, '2020-11-09', 2, 184);
INSERT INTO movimientos VALUES (179, 192, 1, 24.96, '2020-11-09', 2, 184);
INSERT INTO movimientos VALUES (180, 246, 1, 23.70, '2020-11-09', 2, 184);
INSERT INTO movimientos VALUES (181, 139, 1, 14.50, '2020-11-09', 2, 186);
INSERT INTO movimientos VALUES (182, 202, 1, 13.78, '2020-11-09', 2, 184);
INSERT INTO movimientos VALUES (183, 152, 5, 5.98, '2020-11-09', 2, 184);
INSERT INTO movimientos VALUES (184, 192, 1, 24.96, '2020-11-09', 2, 184);
INSERT INTO movimientos VALUES (185, 246, 1, 23.70, '2020-11-09', 2, 184);
INSERT INTO movimientos VALUES (186, 160, 2, 33.98, '2020-11-12', 2, 189);
INSERT INTO movimientos VALUES (187, 169, 1, 48.53, '2020-11-12', 2, 189);
INSERT INTO movimientos VALUES (188, 156, 1, 18.98, '2020-11-12', 2, 189);
INSERT INTO movimientos VALUES (189, 239, 1, 49.98, '2020-11-12', 2, 190);
INSERT INTO movimientos VALUES (190, 197, 1, 21.98, '2020-11-12', 2, 190);
INSERT INTO movimientos VALUES (191, 147, 1, 33.99, '2020-11-12', 2, 190);
INSERT INTO movimientos VALUES (192, 148, 1, 33.99, '2020-11-12', 2, 190);
INSERT INTO movimientos VALUES (193, 160, 2, 33.98, '2020-11-13', 2, 189);
INSERT INTO movimientos VALUES (194, 169, 1, 48.53, '2020-11-13', 2, 189);
INSERT INTO movimientos VALUES (195, 156, 1, 18.98, '2020-11-13', 2, 189);
INSERT INTO movimientos VALUES (196, 139, 1, 13.50, '2020-11-13', 2, 191);
INSERT INTO movimientos VALUES (197, 142, 1, 13.50, '2020-11-13', 2, 191);
INSERT INTO movimientos VALUES (198, 141, 1, 13.50, '2020-11-13', 2, 191);
INSERT INTO movimientos VALUES (199, 140, 1, 13.50, '2020-11-13', 2, 191);
INSERT INTO movimientos VALUES (200, 192, 1, 24.96, '2020-11-13', 2, 191);
INSERT INTO movimientos VALUES (201, 196, 1, 22.92, '2020-11-13', 2, 191);
INSERT INTO movimientos VALUES (202, 163, 1, 13.78, '2020-11-13', 2, 191);
INSERT INTO movimientos VALUES (203, 136, 2, 13.78, '2020-11-13', 2, 191);
INSERT INTO movimientos VALUES (204, 137, 2, 13.78, '2020-11-13', 2, 191);
INSERT INTO movimientos VALUES (205, 193, 1, 36.45, '2020-11-13', 2, 191);
INSERT INTO movimientos VALUES (206, 139, 1, 13.50, '2020-11-14', 2, 191);
INSERT INTO movimientos VALUES (207, 142, 1, 13.50, '2020-11-14', 2, 191);
INSERT INTO movimientos VALUES (208, 141, 1, 13.50, '2020-11-14', 2, 191);
INSERT INTO movimientos VALUES (209, 140, 1, 13.50, '2020-11-14', 2, 191);
INSERT INTO movimientos VALUES (210, 192, 1, 24.96, '2020-11-14', 2, 191);
INSERT INTO movimientos VALUES (211, 196, 1, 22.92, '2020-11-14', 2, 191);
INSERT INTO movimientos VALUES (212, 163, 1, 13.78, '2020-11-14', 2, 191);
INSERT INTO movimientos VALUES (213, 136, 2, 13.78, '2020-11-14', 2, 191);
INSERT INTO movimientos VALUES (214, 137, 2, 13.78, '2020-11-14', 2, 191);
INSERT INTO movimientos VALUES (215, 193, 1, 36.45, '2020-11-14', 2, 191);
INSERT INTO movimientos VALUES (216, 239, 1, 49.98, '2020-11-14', 2, 190);
INSERT INTO movimientos VALUES (217, 197, 1, 21.98, '2020-11-14', 2, 190);
INSERT INTO movimientos VALUES (218, 147, 1, 33.99, '2020-11-14', 2, 190);
INSERT INTO movimientos VALUES (219, 148, 1, 33.99, '2020-11-14', 2, 190);
INSERT INTO movimientos VALUES (220, 152, 6, 5.98, '2020-11-14', 2, 192);
INSERT INTO movimientos VALUES (221, 180, 1, 19.59, '2020-11-14', 2, 192);
INSERT INTO movimientos VALUES (222, 252, 1, 16.94, '2020-11-14', 2, 192);
INSERT INTO movimientos VALUES (223, 199, 1, 9.54, '2020-11-14', 2, 192);
INSERT INTO movimientos VALUES (224, 152, 6, 5.98, '2020-11-14', 2, 192);
INSERT INTO movimientos VALUES (225, 180, 1, 19.59, '2020-11-14', 2, 192);
INSERT INTO movimientos VALUES (226, 252, 1, 16.94, '2020-11-14', 2, 192);
INSERT INTO movimientos VALUES (227, 199, 1, 9.54, '2020-11-14', 2, 192);
INSERT INTO movimientos VALUES (228, 241, 1, 16.94, '2020-11-14', 2, 188);
INSERT INTO movimientos VALUES (229, 193, 1, 36.45, '2020-11-14', 2, 188);
INSERT INTO movimientos VALUES (230, 179, 1, 13.64, '2020-11-14', 2, 188);
INSERT INTO movimientos VALUES (231, 159, 1, 16.48, '2020-11-14', 2, 188);
INSERT INTO movimientos VALUES (232, 241, 1, 16.94, '2020-11-17', 2, 188);
INSERT INTO movimientos VALUES (233, 193, 1, 36.45, '2020-11-17', 2, 188);
INSERT INTO movimientos VALUES (234, 179, 1, 13.64, '2020-11-17', 2, 188);
INSERT INTO movimientos VALUES (235, 159, 1, 16.48, '2020-11-17', 2, 188);
INSERT INTO movimientos VALUES (236, 147, 1, 33.99, '2020-11-18', 2, 193);
INSERT INTO movimientos VALUES (237, 239, 1, 49.98, '2020-11-18', 2, 193);
INSERT INTO movimientos VALUES (238, 251, 1, 21.67, '2020-11-18', 2, 193);
INSERT INTO movimientos VALUES (239, 158, 1, 16.98, '2020-11-18', 2, 193);
INSERT INTO movimientos VALUES (240, 156, 1, 18.98, '2020-11-18', 2, 193);
INSERT INTO movimientos VALUES (241, 155, 1, 18.98, '2020-11-18', 2, 193);
INSERT INTO movimientos VALUES (242, 181, 1, 19.59, '2020-11-18', 2, 193);
INSERT INTO movimientos VALUES (243, 147, 1, 33.99, '2020-11-18', 2, 193);
INSERT INTO movimientos VALUES (244, 239, 1, 49.98, '2020-11-18', 2, 193);
INSERT INTO movimientos VALUES (245, 251, 1, 21.67, '2020-11-18', 2, 193);
INSERT INTO movimientos VALUES (246, 158, 1, 16.98, '2020-11-18', 2, 193);
INSERT INTO movimientos VALUES (247, 156, 1, 18.98, '2020-11-18', 2, 193);
INSERT INTO movimientos VALUES (248, 155, 1, 18.98, '2020-11-18', 2, 193);
INSERT INTO movimientos VALUES (249, 181, 1, 19.59, '2020-11-18', 2, 193);
INSERT INTO movimientos VALUES (250, 219, 1, 32.32, '2020-11-19', 2, 194);
INSERT INTO movimientos VALUES (251, 251, 1, 21.67, '2020-11-19', 2, 194);
INSERT INTO movimientos VALUES (252, 170, 4, 14.98, '2020-11-19', 2, 194);
INSERT INTO movimientos VALUES (253, 141, 1, 13.50, '2020-11-19', 2, 194);
INSERT INTO movimientos VALUES (254, 140, 1, 13.50, '2020-11-19', 2, 194);
INSERT INTO movimientos VALUES (255, 144, 1, 16.50, '2020-11-19', 2, 194);
INSERT INTO movimientos VALUES (256, 143, 1, 16.50, '2020-11-19', 2, 194);
INSERT INTO movimientos VALUES (257, 197, 1, 21.98, '2020-11-19', 2, 194);
INSERT INTO movimientos VALUES (258, 159, 2, 16.48, '2020-11-19', 2, 194);
INSERT INTO movimientos VALUES (259, 157, 2, 15.48, '2020-11-19', 2, 194);
INSERT INTO movimientos VALUES (260, 149, 1, 22.50, '2020-11-19', 2, 194);
INSERT INTO movimientos VALUES (261, 148, 1, 33.99, '2020-11-19', 2, 194);
INSERT INTO movimientos VALUES (262, 219, 1, 32.32, '2020-11-19', 2, 194);
INSERT INTO movimientos VALUES (263, 251, 1, 21.67, '2020-11-19', 2, 194);
INSERT INTO movimientos VALUES (264, 170, 4, 14.98, '2020-11-19', 2, 194);
INSERT INTO movimientos VALUES (265, 141, 1, 13.50, '2020-11-19', 2, 194);
INSERT INTO movimientos VALUES (266, 140, 1, 13.50, '2020-11-19', 2, 194);
INSERT INTO movimientos VALUES (267, 144, 1, 16.50, '2020-11-19', 2, 194);
INSERT INTO movimientos VALUES (268, 143, 1, 16.50, '2020-11-19', 2, 194);
INSERT INTO movimientos VALUES (269, 197, 1, 21.98, '2020-11-19', 2, 194);
INSERT INTO movimientos VALUES (270, 159, 2, 16.48, '2020-11-19', 2, 194);
INSERT INTO movimientos VALUES (271, 157, 2, 15.48, '2020-11-19', 2, 194);
INSERT INTO movimientos VALUES (272, 149, 1, 22.50, '2020-11-19', 2, 194);
INSERT INTO movimientos VALUES (273, 148, 1, 33.99, '2020-11-19', 2, 194);
INSERT INTO movimientos VALUES (274, 146, 1, 16.50, '2020-11-20', 2, 196);
INSERT INTO movimientos VALUES (275, 145, 1, 16.50, '2020-11-20', 2, 196);
INSERT INTO movimientos VALUES (276, 144, 1, 16.50, '2020-11-20', 2, 196);
INSERT INTO movimientos VALUES (277, 143, 1, 16.50, '2020-11-20', 2, 196);
INSERT INTO movimientos VALUES (278, 139, 1, 13.50, '2020-11-20', 2, 196);
INSERT INTO movimientos VALUES (279, 146, 1, 16.50, '2020-11-20', 2, 196);
INSERT INTO movimientos VALUES (280, 145, 1, 16.50, '2020-11-20', 2, 196);
INSERT INTO movimientos VALUES (281, 144, 1, 16.50, '2020-11-20', 2, 196);
INSERT INTO movimientos VALUES (282, 143, 1, 16.50, '2020-11-20', 2, 196);
INSERT INTO movimientos VALUES (283, 139, 1, 13.50, '2020-11-20', 2, 196);
INSERT INTO movimientos VALUES (284, 152, 5, 5.98, '2020-11-22', 2, 195);
INSERT INTO movimientos VALUES (285, 148, 1, 33.99, '2020-11-22', 2, 195);
INSERT INTO movimientos VALUES (286, 190, 1, 12.86, '2020-11-22', 2, 195);
INSERT INTO movimientos VALUES (287, 179, 1, 13.64, '2020-11-22', 2, 195);
INSERT INTO movimientos VALUES (288, 165, 4, 4.85, '2020-11-22', 2, 195);
INSERT INTO movimientos VALUES (289, 152, 5, 5.98, '2020-11-22', 2, 195);
INSERT INTO movimientos VALUES (290, 148, 1, 33.99, '2020-11-22', 2, 195);
INSERT INTO movimientos VALUES (291, 190, 1, 12.86, '2020-11-22', 2, 195);
INSERT INTO movimientos VALUES (292, 179, 1, 13.64, '2020-11-22', 2, 195);
INSERT INTO movimientos VALUES (293, 165, 4, 4.85, '2020-11-22', 2, 195);
INSERT INTO movimientos VALUES (294, 139, 2, 13.50, '2020-11-24', 2, 207);
INSERT INTO movimientos VALUES (295, 141, 2, 13.50, '2020-11-24', 2, 207);
INSERT INTO movimientos VALUES (296, 140, 1, 13.50, '2020-11-24', 2, 207);
INSERT INTO movimientos VALUES (297, 142, 1, 13.50, '2020-11-24', 2, 207);
INSERT INTO movimientos VALUES (298, 146, 1, 16.50, '2020-11-24', 2, 207);
INSERT INTO movimientos VALUES (299, 137, 1, 13.78, '2020-11-24', 2, 207);
INSERT INTO movimientos VALUES (300, 138, 2, 13.78, '2020-11-24', 2, 207);
INSERT INTO movimientos VALUES (301, 136, 1, 13.78, '2020-11-24', 2, 207);
INSERT INTO movimientos VALUES (302, 163, 2, 13.78, '2020-11-24', 2, 207);
INSERT INTO movimientos VALUES (303, 139, 2, 13.50, '2020-11-24', 2, 207);
INSERT INTO movimientos VALUES (304, 141, 2, 13.50, '2020-11-24', 2, 207);
INSERT INTO movimientos VALUES (305, 140, 1, 13.50, '2020-11-24', 2, 207);
INSERT INTO movimientos VALUES (306, 142, 1, 13.50, '2020-11-24', 2, 207);
INSERT INTO movimientos VALUES (307, 146, 1, 16.50, '2020-11-24', 2, 207);
INSERT INTO movimientos VALUES (308, 137, 1, 13.78, '2020-11-24', 2, 207);
INSERT INTO movimientos VALUES (309, 138, 2, 13.78, '2020-11-24', 2, 207);
INSERT INTO movimientos VALUES (310, 136, 1, 13.78, '2020-11-24', 2, 207);
INSERT INTO movimientos VALUES (311, 163, 2, 13.78, '2020-11-24', 2, 207);
INSERT INTO movimientos VALUES (312, 145, 1, 16.50, '2020-11-25', 2, 208);
INSERT INTO movimientos VALUES (313, 143, 1, 16.50, '2020-11-25', 2, 208);
INSERT INTO movimientos VALUES (314, 146, 1, 16.50, '2020-11-25', 2, 208);
INSERT INTO movimientos VALUES (315, 280, 1, 17.50, '2020-11-25', 2, 208);
INSERT INTO movimientos VALUES (316, 219, 1, 32.32, '2020-11-25', 2, 208);
INSERT INTO movimientos VALUES (317, 145, 1, 16.50, '2020-11-25', 2, 208);
INSERT INTO movimientos VALUES (318, 143, 1, 16.50, '2020-11-25', 2, 208);
INSERT INTO movimientos VALUES (319, 146, 1, 16.50, '2020-11-25', 2, 208);
INSERT INTO movimientos VALUES (320, 280, 1, 17.50, '2020-11-25', 2, 208);
INSERT INTO movimientos VALUES (321, 219, 1, 32.32, '2020-11-25', 2, 208);
INSERT INTO movimientos VALUES (322, 195, 3, 7.98, '2020-11-25', 2, 209);
INSERT INTO movimientos VALUES (323, 195, 3, 7.98, '2020-11-25', 2, 209);
INSERT INTO movimientos VALUES (324, 228, 1, 22.05, '2020-11-27', 2, 210);
INSERT INTO movimientos VALUES (325, 215, 1, 42.76, '2020-11-27', 2, 210);
INSERT INTO movimientos VALUES (326, 228, 1, 22.05, '2020-11-27', 2, 210);
INSERT INTO movimientos VALUES (327, 215, 1, 42.76, '2020-11-27', 2, 210);
INSERT INTO movimientos VALUES (328, 228, 1, 22.05, '2020-11-27', 2, 210);
INSERT INTO movimientos VALUES (329, 215, 1, 42.76, '2020-11-27', 2, 210);
INSERT INTO movimientos VALUES (330, 148, 2, 33.99, '2020-12-03', 2, 212);
INSERT INTO movimientos VALUES (331, 160, 2, 33.98, '2020-12-03', 2, 212);
INSERT INTO movimientos VALUES (332, 143, 1, 16.50, '2020-12-03', 2, 212);
INSERT INTO movimientos VALUES (333, 201, 8, 4.98, '2020-12-03', 2, 211);
INSERT INTO movimientos VALUES (334, 192, 1, 24.96, '2020-12-03', 2, 211);
INSERT INTO movimientos VALUES (335, 147, 1, 33.99, '2020-12-03', 2, 211);
INSERT INTO movimientos VALUES (336, 193, 1, 36.45, '2020-12-03', 2, 211);
INSERT INTO movimientos VALUES (337, 267, 1, 29.64, '2020-12-03', 2, 211);
INSERT INTO movimientos VALUES (338, 180, 1, 19.59, '2020-12-03', 2, 211);
INSERT INTO movimientos VALUES (339, 148, 2, 33.99, '2020-12-03', 2, 212);
INSERT INTO movimientos VALUES (340, 160, 2, 33.98, '2020-12-03', 2, 212);
INSERT INTO movimientos VALUES (341, 143, 1, 16.50, '2020-12-03', 2, 212);
INSERT INTO movimientos VALUES (342, 201, 8, 4.98, '2020-12-04', 2, 211);
INSERT INTO movimientos VALUES (343, 192, 1, 24.96, '2020-12-04', 2, 211);
INSERT INTO movimientos VALUES (344, 147, 1, 33.99, '2020-12-04', 2, 211);
INSERT INTO movimientos VALUES (345, 193, 1, 36.45, '2020-12-04', 2, 211);
INSERT INTO movimientos VALUES (346, 267, 1, 29.64, '2020-12-04', 2, 211);
INSERT INTO movimientos VALUES (347, 180, 1, 19.59, '2020-12-04', 2, 211);
INSERT INTO movimientos VALUES (348, 251, 1, 21.67, '2020-12-08', 2, 213);
INSERT INTO movimientos VALUES (349, 241, 1, 16.94, '2020-12-08', 2, 213);
INSERT INTO movimientos VALUES (350, 137, 2, 13.78, '2020-12-08', 2, 213);
INSERT INTO movimientos VALUES (351, 148, 2, 33.99, '2020-12-08', 2, 213);
INSERT INTO movimientos VALUES (352, 251, 1, 21.67, '2020-12-08', 2, 213);
INSERT INTO movimientos VALUES (353, 241, 1, 16.94, '2020-12-08', 2, 213);
INSERT INTO movimientos VALUES (354, 137, 2, 13.78, '2020-12-08', 2, 213);
INSERT INTO movimientos VALUES (355, 148, 2, 33.99, '2020-12-08', 2, 213);
INSERT INTO movimientos VALUES (356, 285, 2, 6.98, '2020-12-10', 2, 214);
INSERT INTO movimientos VALUES (357, 152, 5, 5.98, '2020-12-10', 2, 214);
INSERT INTO movimientos VALUES (358, 140, 1, 13.50, '2020-12-10', 2, 214);
INSERT INTO movimientos VALUES (359, 146, 1, 16.50, '2020-12-10', 2, 214);
INSERT INTO movimientos VALUES (360, 144, 1, 16.50, '2020-12-10', 2, 214);
INSERT INTO movimientos VALUES (361, 142, 1, 13.50, '2020-12-10', 2, 214);
INSERT INTO movimientos VALUES (362, 143, 1, 16.50, '2020-12-10', 2, 214);
INSERT INTO movimientos VALUES (363, 141, 1, 13.50, '2020-12-10', 2, 214);
INSERT INTO movimientos VALUES (364, 285, 2, 6.98, '2020-12-11', 2, 214);
INSERT INTO movimientos VALUES (365, 152, 5, 5.98, '2020-12-11', 2, 214);
INSERT INTO movimientos VALUES (366, 140, 1, 13.50, '2020-12-11', 2, 214);
INSERT INTO movimientos VALUES (367, 146, 1, 16.50, '2020-12-11', 2, 214);
INSERT INTO movimientos VALUES (368, 144, 1, 16.50, '2020-12-11', 2, 214);
INSERT INTO movimientos VALUES (369, 142, 1, 13.50, '2020-12-11', 2, 214);
INSERT INTO movimientos VALUES (370, 143, 1, 16.50, '2020-12-11', 2, 214);
INSERT INTO movimientos VALUES (371, 141, 1, 13.50, '2020-12-11', 2, 214);
INSERT INTO movimientos VALUES (372, 142, 1, 13.50, '2020-12-15', 2, 215);
INSERT INTO movimientos VALUES (373, 139, 1, 13.50, '2020-12-15', 2, 215);
INSERT INTO movimientos VALUES (374, 145, 1, 16.50, '2020-12-15', 2, 215);
INSERT INTO movimientos VALUES (375, 143, 1, 16.50, '2020-12-15', 2, 215);
INSERT INTO movimientos VALUES (376, 158, 1, 16.98, '2020-12-15', 2, 215);
INSERT INTO movimientos VALUES (377, 201, 5, 4.98, '2020-12-15', 2, 215);
INSERT INTO movimientos VALUES (378, 147, 1, 33.99, '2020-12-15', 2, 215);
INSERT INTO movimientos VALUES (379, 192, 1, 24.96, '2020-12-15', 2, 215);
INSERT INTO movimientos VALUES (380, 148, 1, 33.99, '2020-12-15', 2, 215);
INSERT INTO movimientos VALUES (381, 142, 1, 13.50, '2020-12-17', 2, 215);
INSERT INTO movimientos VALUES (382, 139, 1, 13.50, '2020-12-17', 2, 215);
INSERT INTO movimientos VALUES (383, 145, 1, 16.50, '2020-12-17', 2, 215);
INSERT INTO movimientos VALUES (384, 143, 1, 16.50, '2020-12-17', 2, 215);
INSERT INTO movimientos VALUES (385, 158, 1, 16.98, '2020-12-17', 2, 215);
INSERT INTO movimientos VALUES (386, 201, 5, 4.98, '2020-12-17', 2, 215);
INSERT INTO movimientos VALUES (387, 147, 1, 33.99, '2020-12-17', 2, 215);
INSERT INTO movimientos VALUES (388, 192, 1, 24.96, '2020-12-17', 2, 215);
INSERT INTO movimientos VALUES (389, 148, 1, 33.99, '2020-12-17', 2, 215);
INSERT INTO movimientos VALUES (390, 147, 2, 33.99, '2020-12-17', 2, 216);
INSERT INTO movimientos VALUES (391, 173, 2, 17.98, '2020-12-17', 2, 216);
INSERT INTO movimientos VALUES (392, 143, 1, 16.50, '2020-12-17', 2, 216);
INSERT INTO movimientos VALUES (393, 139, 2, 13.50, '2020-12-17', 2, 216);
INSERT INTO movimientos VALUES (394, 145, 1, 16.50, '2020-12-17', 2, 216);
INSERT INTO movimientos VALUES (395, 144, 1, 16.50, '2020-12-17', 2, 216);
INSERT INTO movimientos VALUES (396, 147, 2, 33.99, '2020-12-18', 2, 216);
INSERT INTO movimientos VALUES (397, 173, 2, 17.98, '2020-12-18', 2, 216);
INSERT INTO movimientos VALUES (398, 143, 1, 16.50, '2020-12-18', 2, 216);
INSERT INTO movimientos VALUES (399, 139, 2, 13.50, '2020-12-18', 2, 216);
INSERT INTO movimientos VALUES (400, 145, 1, 16.50, '2020-12-18', 2, 216);
INSERT INTO movimientos VALUES (401, 144, 1, 16.50, '2020-12-18', 2, 216);
INSERT INTO movimientos VALUES (402, 284, 1, 19.59, '2021-01-09', 2, 218);
INSERT INTO movimientos VALUES (403, 285, 1, 6.98, '2021-01-09', 2, 218);
INSERT INTO movimientos VALUES (404, 215, 1, 42.76, '2021-01-09', 2, 218);
INSERT INTO movimientos VALUES (405, 201, 5, 4.98, '2021-01-09', 2, 218);
INSERT INTO movimientos VALUES (406, 153, 1, 6.98, '2021-01-09', 2, 218);
INSERT INTO movimientos VALUES (407, 152, 2, 5.98, '2021-01-09', 2, 218);
INSERT INTO movimientos VALUES (408, 284, 1, 19.59, '2021-01-09', 2, 218);
INSERT INTO movimientos VALUES (409, 285, 1, 6.98, '2021-01-09', 2, 218);
INSERT INTO movimientos VALUES (410, 215, 1, 42.76, '2021-01-09', 2, 218);
INSERT INTO movimientos VALUES (411, 201, 5, 4.98, '2021-01-09', 2, 218);
INSERT INTO movimientos VALUES (412, 153, 1, 6.98, '2021-01-09', 2, 218);
INSERT INTO movimientos VALUES (413, 152, 2, 5.98, '2021-01-09', 2, 218);
INSERT INTO movimientos VALUES (414, 278, 1, 27.54, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (415, 193, 1, 36.45, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (416, 160, 1, 33.98, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (417, 148, 1, 33.99, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (418, 147, 1, 33.99, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (419, 227, 1, 16.96, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (420, 149, 1, 22.50, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (421, 165, 5, 4.49, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (422, 159, 2, 16.48, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (423, 157, 2, 15.48, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (424, 146, 1, 16.50, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (425, 145, 1, 16.50, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (426, 143, 1, 16.50, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (427, 142, 2, 13.50, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (428, 141, 2, 13.50, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (429, 138, 1, 13.78, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (430, 137, 2, 13.78, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (431, 136, 2, 13.78, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (432, 163, 1, 13.78, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (433, 139, 2, 13.50, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (434, 140, 2, 13.50, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (435, 285, 2, 6.98, '2021-01-15', 2, 220);
INSERT INTO movimientos VALUES (436, 201, 7, 4.98, '2021-01-15', 2, 220);
INSERT INTO movimientos VALUES (437, 143, 1, 16.50, '2021-01-15', 2, 220);
INSERT INTO movimientos VALUES (438, 139, 1, 13.50, '2021-01-15', 2, 220);
INSERT INTO movimientos VALUES (439, 142, 1, 13.50, '2021-01-15', 2, 220);
INSERT INTO movimientos VALUES (440, 141, 1, 13.50, '2021-01-15', 2, 220);
INSERT INTO movimientos VALUES (441, 152, 3, 5.98, '2021-01-15', 2, 220);
INSERT INTO movimientos VALUES (442, 169, 1, 48.53, '2021-01-15', 2, 220);
INSERT INTO movimientos VALUES (443, 278, 1, 27.54, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (444, 193, 1, 36.45, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (445, 160, 1, 33.98, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (446, 148, 1, 33.99, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (447, 147, 1, 33.99, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (448, 227, 1, 16.96, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (449, 149, 1, 22.50, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (450, 165, 5, 4.49, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (451, 159, 2, 16.48, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (452, 157, 2, 15.48, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (453, 146, 1, 16.50, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (454, 145, 1, 16.50, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (455, 143, 1, 16.50, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (456, 142, 2, 13.50, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (457, 141, 2, 13.50, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (458, 138, 1, 13.78, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (459, 137, 2, 13.78, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (460, 136, 2, 13.78, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (461, 163, 1, 13.78, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (462, 139, 2, 13.50, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (463, 140, 2, 13.50, '2021-01-15', 2, 219);
INSERT INTO movimientos VALUES (464, 285, 2, 6.98, '2021-01-17', 2, 220);
INSERT INTO movimientos VALUES (465, 201, 7, 4.98, '2021-01-17', 2, 220);
INSERT INTO movimientos VALUES (466, 143, 1, 16.50, '2021-01-17', 2, 220);
INSERT INTO movimientos VALUES (467, 139, 1, 13.50, '2021-01-17', 2, 220);
INSERT INTO movimientos VALUES (468, 142, 1, 13.50, '2021-01-17', 2, 220);
INSERT INTO movimientos VALUES (469, 141, 1, 13.50, '2021-01-17', 2, 220);
INSERT INTO movimientos VALUES (470, 152, 3, 5.98, '2021-01-17', 2, 220);
INSERT INTO movimientos VALUES (471, 169, 1, 48.53, '2021-01-17', 2, 220);
INSERT INTO movimientos VALUES (472, 201, 6, 4.98, '2021-01-26', 2, 221);
INSERT INTO movimientos VALUES (473, 192, 1, 24.96, '2021-01-26', 2, 221);
INSERT INTO movimientos VALUES (474, 147, 1, 33.99, '2021-01-26', 2, 221);
INSERT INTO movimientos VALUES (475, 201, 6, 4.98, '2021-01-29', 2, 221);
INSERT INTO movimientos VALUES (476, 192, 1, 24.96, '2021-01-29', 2, 221);
INSERT INTO movimientos VALUES (477, 147, 1, 33.99, '2021-01-29', 2, 221);
INSERT INTO movimientos VALUES (478, 192, 1, 24.96, '2021-02-11', 2, 222);
INSERT INTO movimientos VALUES (479, 251, 1, 21.67, '2021-02-11', 2, 222);


--
-- Name: movimientos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jfssibxl
--

SELECT pg_catalog.setval('movimientos_id_seq', 479, true);


--
-- Data for Name: municipios; Type: TABLE DATA; Schema: public; Owner: jfssibxl
--

INSERT INTO municipios VALUES (1, 'Acosta');
INSERT INTO municipios VALUES (2, 'Bolivar');
INSERT INTO municipios VALUES (3, 'Buchivacoa');
INSERT INTO municipios VALUES (4, 'Cacique Manaure');
INSERT INTO municipios VALUES (5, 'Carirubana');
INSERT INTO municipios VALUES (6, 'Colina');
INSERT INTO municipios VALUES (7, 'Dabajuro');
INSERT INTO municipios VALUES (8, 'Democracia');
INSERT INTO municipios VALUES (9, 'Falcon');
INSERT INTO municipios VALUES (10, 'Federacion');
INSERT INTO municipios VALUES (11, 'Jacura');
INSERT INTO municipios VALUES (12, 'Los Taques');
INSERT INTO municipios VALUES (13, 'Mauroa');
INSERT INTO municipios VALUES (14, 'Miranda');
INSERT INTO municipios VALUES (15, 'Monseñor Iturriza');
INSERT INTO municipios VALUES (16, 'Palmasola');
INSERT INTO municipios VALUES (17, 'Petit');
INSERT INTO municipios VALUES (18, 'Piritu');
INSERT INTO municipios VALUES (19, 'San Francisco');
INSERT INTO municipios VALUES (20, 'Jose Laurencio Silva');
INSERT INTO municipios VALUES (21, 'Sucre');
INSERT INTO municipios VALUES (22, 'Tocopero');
INSERT INTO municipios VALUES (23, 'Union');
INSERT INTO municipios VALUES (24, 'Urumaco');
INSERT INTO municipios VALUES (25, 'Zamora');


--
-- Name: municipios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jfssibxl
--

SELECT pg_catalog.setval('municipios_id_seq', 1, false);


--
-- Data for Name: parroquias; Type: TABLE DATA; Schema: public; Owner: jfssibxl
--

INSERT INTO parroquias VALUES (1, 1, 'Capadare');
INSERT INTO parroquias VALUES (2, 1, 'La Pastora');
INSERT INTO parroquias VALUES (3, 1, 'Libertador');
INSERT INTO parroquias VALUES (4, 1, 'San Juan de los Cayos');
INSERT INTO parroquias VALUES (5, 2, 'La Peña');
INSERT INTO parroquias VALUES (6, 2, 'Aracua');
INSERT INTO parroquias VALUES (7, 2, 'San Luis');
INSERT INTO parroquias VALUES (8, 3, 'Bariro');
INSERT INTO parroquias VALUES (9, 3, 'Borojo');
INSERT INTO parroquias VALUES (10, 3, 'Capatarida');
INSERT INTO parroquias VALUES (11, 3, 'Guajiro');
INSERT INTO parroquias VALUES (12, 3, 'Seque');
INSERT INTO parroquias VALUES (13, 3, 'Valle de Eroa');
INSERT INTO parroquias VALUES (14, 3, 'Zazarida');
INSERT INTO parroquias VALUES (15, 4, 'Cacique Manaure');
INSERT INTO parroquias VALUES (16, 5, 'Norte');
INSERT INTO parroquias VALUES (17, 5, 'Carirubana');
INSERT INTO parroquias VALUES (18, 5, 'Santa Ana');
INSERT INTO parroquias VALUES (19, 5, 'Urbana Punta Cardon');
INSERT INTO parroquias VALUES (20, 6, 'La Vela de Coro');
INSERT INTO parroquias VALUES (21, 6, 'Acurigua');
INSERT INTO parroquias VALUES (22, 6, 'Guaibacoa');
INSERT INTO parroquias VALUES (23, 6, 'Las Calderas');
INSERT INTO parroquias VALUES (24, 6, 'Mataruca');
INSERT INTO parroquias VALUES (25, 7, 'Dabajuro');
INSERT INTO parroquias VALUES (26, 8, 'Agua Clara');
INSERT INTO parroquias VALUES (27, 8, 'Avaria');
INSERT INTO parroquias VALUES (28, 8, 'Pedregal');
INSERT INTO parroquias VALUES (29, 8, 'Piedra Grande');
INSERT INTO parroquias VALUES (30, 8, 'Purureche');
INSERT INTO parroquias VALUES (31, 9, 'Adaure');
INSERT INTO parroquias VALUES (32, 9, 'Adícora');
INSERT INTO parroquias VALUES (33, 9, 'Baraived');
INSERT INTO parroquias VALUES (34, 9, 'Buena Vista');
INSERT INTO parroquias VALUES (35, 9, 'Jadacaquiva');
INSERT INTO parroquias VALUES (36, 9, 'El Vinculo');
INSERT INTO parroquias VALUES (37, 9, 'El Hato');
INSERT INTO parroquias VALUES (38, 9, 'Moruy');
INSERT INTO parroquias VALUES (39, 9, 'Pueblo Nuevo');
INSERT INTO parroquias VALUES (40, 10, 'Agua Larga');
INSERT INTO parroquias VALUES (41, 10, 'Churuguara');
INSERT INTO parroquias VALUES (42, 10, 'El Pauji');
INSERT INTO parroquias VALUES (43, 10, 'Independencia');
INSERT INTO parroquias VALUES (44, 10, 'Mapararí');
INSERT INTO parroquias VALUES (45, 11, 'Agua Linda');
INSERT INTO parroquias VALUES (46, 11, 'Araurima');
INSERT INTO parroquias VALUES (47, 11, 'Jacura');
INSERT INTO parroquias VALUES (48, 12, 'Los Taques');
INSERT INTO parroquias VALUES (49, 12, 'Judibana');
INSERT INTO parroquias VALUES (50, 13, 'Mene de Mauroa');
INSERT INTO parroquias VALUES (51, 13, 'San Felix');
INSERT INTO parroquias VALUES (52, 13, 'Casigua');
INSERT INTO parroquias VALUES (53, 14, 'Guzman Guillermo');
INSERT INTO parroquias VALUES (54, 14, 'Mitare');
INSERT INTO parroquias VALUES (55, 14, 'Rio Seco');
INSERT INTO parroquias VALUES (56, 14, 'Sabaneta');
INSERT INTO parroquias VALUES (57, 14, 'San Antonio');
INSERT INTO parroquias VALUES (58, 14, 'San Gabriel');
INSERT INTO parroquias VALUES (59, 14, 'Santa Ana');
INSERT INTO parroquias VALUES (60, 15, 'Boca del Tocuyo');
INSERT INTO parroquias VALUES (61, 15, 'Chichiriviche');
INSERT INTO parroquias VALUES (62, 15, 'Tocuyo de la Costa');
INSERT INTO parroquias VALUES (63, 16, 'Palmasola');
INSERT INTO parroquias VALUES (64, 17, 'Cabure');
INSERT INTO parroquias VALUES (65, 17, 'Colina');
INSERT INTO parroquias VALUES (66, 17, 'Curimagua');
INSERT INTO parroquias VALUES (67, 18, 'Piritu');
INSERT INTO parroquias VALUES (68, 18, 'San Jose de la Costa');
INSERT INTO parroquias VALUES (69, 19, 'Capital San Francisco Mirimire');
INSERT INTO parroquias VALUES (70, 20, 'Tucacas');
INSERT INTO parroquias VALUES (71, 20, 'Boca de Aroa');
INSERT INTO parroquias VALUES (72, 21, 'Sucre');
INSERT INTO parroquias VALUES (73, 21, 'Pecaya');
INSERT INTO parroquias VALUES (74, 22, 'Tocopero');
INSERT INTO parroquias VALUES (75, 23, 'El Charal');
INSERT INTO parroquias VALUES (76, 23, 'Las Vegas del Tuy');
INSERT INTO parroquias VALUES (77, 23, 'Santa Cruz de Bucaral');
INSERT INTO parroquias VALUES (78, 24, 'Urumaco');
INSERT INTO parroquias VALUES (79, 24, 'Bruzual');
INSERT INTO parroquias VALUES (80, 25, 'Puerto Cumarebo');
INSERT INTO parroquias VALUES (81, 25, 'La Cienaga');
INSERT INTO parroquias VALUES (82, 25, 'La Soledad');
INSERT INTO parroquias VALUES (83, 25, 'Pueblo Cumarebo');
INSERT INTO parroquias VALUES (84, 25, 'Zazarida');


--
-- Name: parroquias_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jfssibxl
--

SELECT pg_catalog.setval('parroquias_id_seq', 84, true);


--
-- Data for Name: privilegios; Type: TABLE DATA; Schema: public; Owner: jfssibxl
--

INSERT INTO privilegios VALUES (3, 'MOTORIZADO');
INSERT INTO privilegios VALUES (0, 'SUPERADMINISTRADOR');
INSERT INTO privilegios VALUES (1, 'ADMINISTRADOR');
INSERT INTO privilegios VALUES (2, 'CLIENTES');


--
-- Name: privilegios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jfssibxl
--

SELECT pg_catalog.setval('privilegios_id_seq', 1, false);


--
-- Data for Name: productos; Type: TABLE DATA; Schema: public; Owner: jfssibxl
--

INSERT INTO productos VALUES (136, 36, 'Coca Cola 16.9oz - 24 pk', 'Specifications
24 bottles - 16.9 fluid ounces each
Net volume: 12 Liters (405.6 fluid ounces)', 13.78, 'coca-cola-16.9oz-24pk.png', '3fee569a-dc3a-4787-a8c1-0e8b583e39be', '', false, 0.00, true, 17);
INSERT INTO productos VALUES (167, 36, 'Tropicana 100% Orange Juice 10oz - 24pk', 'Specifications
24 bottles, 10 oz. each
100% daily value of vitamin C
140 calories per bottle
Ideal for foodservice', 14.98, 'Tropicana-orange-juice-10oz-24pk.png', '1986b717-42b2-4ff3-8e3d-54a4ce90a646', '', false, 0.00, true, 20);
INSERT INTO productos VALUES (153, 36, 'Zephyrhills 100% Natural Spring Water 23.7oz (700ml) - 24pk', 'Specifications
24 bottles - 23.7 fluid ounces each
No calories
No sweeteners
No artificial colors or flavors
Every bottle is 100% recyclable (excluding label and cap)
Net volume: 16.82 Liters (568.8 fluid ounces)', 6.98, 'zephyrhills-700ml-24pk.png', '89ee6a5b-aeb8-49a7-892d-970943b6f35d', '', false, 0.00, true, 21);
INSERT INTO productos VALUES (149, 36, 'Mott''s Apple Juice 64oz - 8pk plastic bottles', 'Nothing satisfies quite like Mott’s Apple Juice. Packed with ripe apple flavor, Mott’s Original is 100% fruit juice and delivers 2 servings of fruit* in each 8 fl oz cup. There’s plenty to enjoy and share in this 64 fl oz bottle, perfect for after school or mealtime refreshment. It is an excellent source of vitamin C, with no added sugar and a delicious taste the entire family will love. Treat your family to the classic taste of Mott’s 100% Apple Juice. *2 fruit servings per 8 fl oz 1 serving = ½ cup per current USDA Dietary Guidelines.', 22.50, 'Motts-64oz.png', '0e2afae1-83a3-4012-ad59-2b8479cbe2be', '', false, 0.00, true, 20);
INSERT INTO productos VALUES (138, 36, 'Coca Cola Zero Sugar 16.9oz - 24pk', 'Specifications
24 bottles - 16.9 fluid ounces each
Net volume: 11.99 Liters (405.6 fluid ounces)', 13.78, 'Coca-Cola-Zero-Sugar 16.9oz-24pk.png', 'f79fe1db-3a07-4ee5-bed6-319de54f06cc', '', false, 0.00, true, 17);
INSERT INTO productos VALUES (137, 36, 'Diet Coke 16.9oz - 24pk', 'Specifications
24 bottles - 16.9 fluid ounces each
Calorie-free
Sugar-free
Net volume: 12 Liters (405.6 fluid ounces)
Buy sodas in bulk so the fridge is always stocked', 13.78, 'Diet-cola-16.9oz-24pk.png', '1c799e63-4659-4957-ad18-394abad9480f', '', false, 0.00, true, 17);
INSERT INTO productos VALUES (164, 36, 'Diet Coke 12oz - 12pk', 'A delicious, crisp, sparkling cola for the refreshment you want
No calories, sugar-free
46 mg of caffeine per 12 fl oz serving
12 FL OZ per can of diet soda', 4.50, 'diet-coke-12oz-24pak.png', '62c116d1-b364-4b3a-bd3f-53533d3a6040', '', false, 0.00, true, 17);
INSERT INTO productos VALUES (142, 36, 'Gatorade Cool Blue 32oz - 12pk', 'When you sweat, you lose more than water. Gatorade Thirst Quencher contains critical electrolytes to help replace what’s lost in sweat
Top off your fuel stores with carbohydrate energy, your body''s preferred source of fuel
Tested in the lab and used by the pros
Cool Blue flavor
32 oz. bottles (Pack of 12)', 13.50, 'gatorade-coolblue32.png', '535d00e0-1bc1-459b-8f81-14fe146b1bbe', '', false, 0.00, true, 18);
INSERT INTO productos VALUES (141, 36, 'Gatorade Lemon-Lime 32oz - 12pk', 'When you sweat, you lose more than water. Gatorade Thirst Quencher contains critical electrolytes to help replace what’s lost in sweat
Top off your fuel stores with carbohydrate energy, your body''s preferred source of fuel
Tested in the lab and used by the pros
Lemon-Lime flavor
32oz. bottles (Pack of 12)', 13.50, 'gatodade-lemon32.png', '377f0077-3c92-4feb-bf66-3cee0321f664', '', false, 0.00, true, 18);
INSERT INTO productos VALUES (140, 36, 'Gatorade Fruit Punch 32oz - 12pk', 'Loaded with carbohydrates and electrolytes that can keep you energized
Tested and used by professional athletes
Ideal for convenience stores and concession stands', 13.50, 'gatorade-fruitpunch32.png', '92aaf97f-792e-4b69-8dd7-543a84fd9036', '', false, 0.00, true, 18);
INSERT INTO productos VALUES (139, 36, 'Gatorade Orange 32oz - 12pk', 'When you sweat, you lose more than water. Gatorade Thirst Quencher contains critical electrolytes to help replace what’s lost in sweat
Top off your fuel stores with carbohydrate energy, your body''s preferred source of fuel
Tested in the lab and used by the pros
Orange flavor
32oz bottles Pack of 12', 13.50, 'gatorade-orange32.png', '6598ca4b-e5ec-47fc-9bd1-c2a42fb30956', '', false, 0.00, true, 18);
INSERT INTO productos VALUES (145, 36, 'Gatorade Orange 20oz - 24pk', 'When you sweat, you lose more than water. Gatorade Thirst Quencher contains critical electrolytes to help replace what’s lost in sweat
Top off your fuel stores with carbohydrate energy, your body''s preferred source of fuel
Tested in the lab and used by the pros
Orange flavor
20 oz. bottles (Pack of 24)', 16.50, 'gatorade-orange-20oz.png', '07a58522-6b79-4e9b-9845-190f897a7f03', '', false, 0.00, true, 18);
INSERT INTO productos VALUES (144, 36, 'Gatorade Lemon-Lime 20oz - 24pk', 'When you sweat, you lose more than water. Gatorade Thirst Quencher contains critical electrolytes to help replace what’s lost in sweat
Top off your fuel stores with carbohydrate energy, your body''s preferred source of fuel
Tested in the lab and used by the pros
Lemon-Lime flavor
20 oz. bottles (Pack of 24)', 16.50, 'gatorade-lemon20.png', 'c134dbc5-e51b-461f-b87f-c59d16d97f60', '', false, 0.00, true, 18);
INSERT INTO productos VALUES (146, 36, 'Gatorade Fruit Punch 20oz - 24pk', 'Loaded with carbohydrates and electrolytes that can keep you energized
Tested and used by professional athletes
Ideal for convenience stores and concession stands', 16.50, 'gatodade-fruitpunch20.png', 'cdbe3b06-0f34-4135-862c-45376649ce7c', '', false, 0.00, true, 18);
INSERT INTO productos VALUES (160, 36, 'Monster Energy Original 16oz - 24pk', 'Specifications
24 cans - 16 fluid ounces each
Net volume: 11.36 liters (384 oz.)
**Not Recommended for children, people sensitive to caffeine, pregnant women or women who are nursing.', 33.98, 'Monster-Original-16oz-24pk-Nw.png', '7d8a0341-194b-4b30-8035-a1d41a5ed9a2', '', true, 0.00, true, 19);
INSERT INTO productos VALUES (143, 36, 'Gatorade Cool Blue 20oz - 24pk', 'When you sweat, you lose more than water. Gatorade Thirst Quencher contains critical electrolytes to help replace what’s lost in sweat
Top off your fuel stores with carbohydrate energy, your body''s preferred source of fuel
Tested in the lab and used by the pros
Cool Blue flavor
20 oz. bottles (Pack of 24)', 16.50, 'gatodade-coolblue20.png', '87066bd3-7af7-42f3-b39c-3cd052919f83', '', false, 0.00, true, 18);
INSERT INTO productos VALUES (147, 36, 'Red Bull Energy Drink 8.4oz - 24pk', 'Designed to help you focus and enhance concentration, this Red Bull Energy Drink is an absolute essential for anyone interested crushing the competition.
Specifications
24 cans - 8.4 fluid ounces each
80 mg per can
Net volume: 5.96 Liters (201.6 fluid ounces)', 33.99, 'Redbull-8.4oz.png', '242f995d-a4a4-4703-9a09-c602104ba161', '', true, 0.00, true, 19);
INSERT INTO productos VALUES (162, 36, 'Monster Energy Lo-Carb 16oz - 24pk', 'Specifications
24 cans - 16 fluid ounces each
15 calories per serving
Net volume: 11.36 Liters (384 fluid ounces)
**Not Recommended for children, people sensitive to caffeine, pregnant women or women who are nursing.', 33.98, 'Monster-Lob-Carb-16oz-24pk.png', 'af8609bd-fdd2-42a2-91f5-67cd379e263a', '', false, 0.00, true, 19);
INSERT INTO productos VALUES (151, 36, 'Tropicana Apple Juice 15.2oz - 12pk', '210 calories per bottle.
100% Vitamin C
Apple Juice from Concentrate with Other Natural Flavors and Ingredients
100% Juice
Kosher', 15.58, 'tropicana-appeljuice-15.png', '5310c235-a9b6-46b4-a423-25139e874cca', '', false, 0.00, true, 20);
INSERT INTO productos VALUES (154, 36, 'Zephyrhills 100% Natural Spring Water 1L - 15pk', 'Specifications
15 bottles - 33.81 fluid ounces each
No calories
No sweeteners
No artificial colors or flavors
Every bottle is 100% recyclable (excluding label and cap)
Net volume: 15 Liters (507.21 fluid ounces)', 6.98, 'zephyrhills-1lt-15pk.png', '03e8acf4-705a-4a52-a279-76231af9480a', '', false, 0.00, true, 21);
INSERT INTO productos VALUES (155, 36, 'S.Pellegrino Sparkling Natural Mineral Water 16.9oz - 24pk', 'Specifications
24 bottles - 16.9 fluid ounces each
Imported from Italy
Zero calories
Net volume: 12 Liters (405.6 fluid ounces)', 18.98, 'S.Pellegrino-16.9-24pk.png', 'e2484aaf-9fb1-437d-b724-37f7d24f32db', '', false, 0.00, true, 21);
INSERT INTO productos VALUES (156, 36, 'Perrier Sparkling Natural Mineral Water 16.9oz - 24pk', 'Specifications
24 bottles - 16.9 fluid ounces each
Fits in any refrigerator or pantry
Net volume: 12 Liters (405.6 fluid ounces)', 18.98, 'Perrier-16.9oz-24pk.png', '29abe5be-2ad1-4996-bcc1-e115f82298e0', '', false, 0.00, true, 21);
INSERT INTO productos VALUES (157, 36, 'Evian Natural Spring Water 1L - 12pk', 'Specifications
12 bottles - 1 Liter each
Filtered naturally, without chemicals
100% natural, 0% processed
Contains naturally occurring electrolytes
Net volume: 12 Liters (405.77 fluid ounces)', 15.48, 'Evian-1L-12pk.png', '61d4c900-b632-4099-948b-8662dc4c1923', '', false, 0.00, true, 21);
INSERT INTO productos VALUES (152, 36, 'Zephyrhills 100% Natural Spring Water 16.9oz - 40pk', 'Specifications
40 bottles - 16.9 fluid ounces each
No sweeteners
No calories
No artificial flavors or colors
Every bottle is 100% recyclable (excluding label and cap)
Net volume: 20 Liters (676 fluid ounces)', 5.98, 'zephyrhills-16.9oz-40pk.png', 'b4722cb7-dd36-4d26-9d83-7a5660e59290', '', false, 0.00, true, 21);
INSERT INTO productos VALUES (158, 36, 'Perrier Sparkling Natural Mineral Water 11.15oz - 24pk', 'Specifications
24 bottles - 11.15 fluid ounces each
6 individual packs of 4 bottles
Low mineral content
No calories
No carbs
No sugar
Net volume: 7.91 Liters (267.6 fluid ounces)', 16.98, 'Perrier-11.15oz-24pk.png', 'c8639365-bf5e-4830-a469-171e2226430a', '', false, 0.00, true, 21);
INSERT INTO productos VALUES (163, 36, 'Sprite 16.9oz - 24 pk', 'Specifications
24 bottles - 16.9 fluid ounces each
Net volume: 12 Liters (405.6 fluid ounces)', 13.78, 'sprite-16.9oz-24pk.png', '64d2d3a0-5994-42eb-a4d6-82921ddf9d9c', '', false, 0.00, true, 17);
INSERT INTO productos VALUES (159, 36, 'Glaceau SmartWater 1 L - 15 pk', 'Specifications
15 bottles - 1 Liter each
Zero calories
Zero sodium
Plant bottle, up to 30% made from plants
Clean, crisp taste
Net volume: 15 Liters (507.21 fluid ounces)', 16.48, 'Smart-water-1L-15pk.png', '072618b0-1942-48c5-934e-ec2c106a4070', '', false, 0.00, true, 21);
INSERT INTO productos VALUES (169, 36, 'Nutella Hazelnut Spread 13oz - 15pk', 'Size : 13 Ounce (Pack of 1)
The Original Hazelnut Spread…unique in all the world.
Made from quality ingredients like roasted hazelnuts and cocoa.
Packaged in the iconic Nutella jar.
Handy size for everyday enjoyment – great for the office, too.', 48.53, 'Nutella-13oz-15pk.png', '56041975-269c-4303-a170-5099d9251d49', '', false, 0.00, true, 22);
INSERT INTO productos VALUES (170, 36, 'Nutella & Go 1.8oz - 16 ct.', 'Specifications
16 packs - 1.8 ounces each
Net weight: 1.8 pounds (28.8 ounces)', 14.98, 'Nutella-Go-16pk.png', '36f2b10e-474a-4767-ad8c-4a0b85853fcb', '', false, 0.00, true, 22);
INSERT INTO productos VALUES (171, 36, 'Starbucks Frappuccino Coffee Drink 9.5oz - 15pk', 'Specifications
15 bottles - 9.5 fluid ounces each
No trans fat
Net volume: 4.21 Liters (142.5 fluid ounces)', 17.98, 'Starbucks-Cofee-15pk.png', 'ab8de689-9fb2-4e8a-bda8-c37f1fae7a48', '', false, 0.00, true, 23);
INSERT INTO productos VALUES (172, 36, 'Starbucks Frappuccino Coffee Drink, Vanilla 9.5oz - 15pk', 'Specifications
15 glass bottles - 9.5 fluid ounces each
Net volume: 4.21 Liters (142.5 fluid ounces)', 17.98, 'Starbucks-vanilla-15pk.png', 'fff8f26d-1270-4fc5-bbf1-1079d7ed54d0', '', false, 0.00, true, 23);
INSERT INTO productos VALUES (173, 36, 'Starbucks Frappuccino Coffee Drink, Mocha 9.5oz - 15pk', 'Specifications
15 bottles - 9.5 ounces each
Net volume: 4.21 Liters (142.5 fluid ounces)', 17.98, 'Starbucks-Mocha-15pk.png', '95bee707-8c64-4876-adb5-0c80efaa4310', '', false, 0.00, true, 23);
INSERT INTO productos VALUES (182, 37, 'Ajax Advanced Citrus Blast Dishwashing Liquid 102oz - 6pk', '•	Great at eliminating odors
•	Ajax dishwashing liquid cuts through tough grease
•	Very effective at removing stains
•	Refeshing citrus scent freshens up the whole room
•	Reputable cleaning power of Ajax', 34.56, 'Ajax-Citrus-102oz.png', '6bd8b82d-04d4-4c25-bc11-601290c245a4', '', false, 0.00, true, 25);
INSERT INTO productos VALUES (177, 36, 'Snapple Mango Tea 16oz - 12pk', 'Ingredients:
Filtered water, sugar, citric acid, tea, natural flavors', 12.22, 'snapple-Mango-16floz-1.png', 'ae79c847-849f-43fc-9ae2-a0802a550f29', '', false, 0.00, true, 20);
INSERT INTO productos VALUES (180, 37, 'Palmolive Ultra Strength Dishwashing Liquid, Original 20oz - 9pk', '•	Instantly cuts through grease
•	Max strength formula (vs Palmolive Essential Clean original formula)
•	Tough on grease, soft on hands
•	Removes 24-hour stuck-on food
•	Concentrated dish liquid formula
•	Phosphate free
•	Fights odor
•	Residue free', 19.59, 'Palmolive-Original-20oz-2.png', '6e3055e8-0700-441b-8bf7-d158703a3180', '', false, 0.00, true, 25);
INSERT INTO productos VALUES (166, 36, 'Coca Cola Soda Soft Drink, 12oz - 12pk', '12 cans of Coca-Cola Original Taste the refreshing, crisp taste you know and love
Great taste since 1886
34 mg of caffeine in each 12 oz serving
12 FL OZ in each can', 4.50, 'coca-cola-12oz-24pak.png', '52ff3bd0-c19f-48e4-8312-302c7612221d', '', false, 0.00, true, 17);
INSERT INTO productos VALUES (161, 36, 'Monster Energy Zero Ultra 16oz - 24pk', 'Specifications
24 cans - 16 fluid ounces each
Zero calories
Zero sugar
Net volume: 11.36 liters (384 fluid ounces)
**Not Recommended for children, people sensitive to caffeine, pregnant women or women who are nursing.', 33.98, 'Monster-Zero-Ultra-16oz-24pk.png', '2a0bcbb4-5787-4a2d-88c6-cd99944ff081', '', false, 0.00, true, 19);
INSERT INTO productos VALUES (165, 36, 'Coke Zero Sugar 12oz - 12pk', 'Enjoy Coke Zero''s real Coca-Cola taste and zero calories with meals, on the go, or to share. Serve ice cold for maximum refreshment.


Great Coca-Cola taste, zero sugar
Refreshing, crisp taste pairs perfectly with a meal or with friends
34 mg of caffeine in each 12 oz serving
12 FL OZ in each can', 4.49, 'zero-coke-12oz.png', 'df3b9319-76fa-4331-9dc5-9a7517cf6863', '', false, 0.00, true, 17);
INSERT INTO productos VALUES (186, 37, 'Ajax Ultra Triple Action Liquid Dish Soap Orange 52oz  - 6pk', 'Ajax Ultra Triple Action Liquid Dish Soap, Orange 52oz:
•	Strips the grease
•	Removes stuck-on food
•	Leaves dishes sparkling clean
•	Washes away bacterial from hands (when used as a handsoap, to wash away dirt and bacteria from hands, wash them for 20 seconds under clean running water)', 22.79, 'Ajax-Orange-52oz-6pk.png', 'e95d7c9f-6548-4201-aab7-8ae8c9fca434', '', false, 0.00, true, 25);
INSERT INTO productos VALUES (189, 37, 'Ajax Ultra Triple Action Liquid Dish Soap Lemon 14oz - 20pk', 'Ajax Ultra Triple Action Liquid Dish Soap, Lemon – 14oz – 20pk
•	Strips the grease, guaranteed
•	Removes stuck-on-food
•	Contains fresh lemon scent
•	Leaves dishes sparkling clean', 21.87, 'Ajax-Lemon-14oz-20pk.png', '88fe033f-4c42-4edf-aaf8-71059af1d0b7', '', false, 0.00, true, 25);
INSERT INTO productos VALUES (175, 36, 'Snapple Kiwi Strawberry 16oz - 12pk', 'Ingredients:
Filtered water, sugar, kiwi juice concentrate, citric acid, strawberry juice concentrate, acacia gum, natural flavors, vegetable juice concentrates (for color), ester gum', 12.22, 'snapple-Kiwi-Strawberry-tea-16floz-1.png', 'f75fee0e-4f68-4f5f-899a-477724aac074', '', false, 0.00, true, 20);
INSERT INTO productos VALUES (192, 36, 'Snow White Sugar 4 LB - 10pk', ' Sugar is essential for baking warm fresh pies, mixing into cold brewed tea, and for creating many other irresistibly sweet menu items. This sugar is the perfect addition to baking, beverages, confectionery treats, or even for filling table containers for self-service. Guests will love the sweet taste of this fine granulated sugar', 24.96, 'Snow-White-4lb.png', '4a07a472-1803-457c-9947-aeef7c42b613', '', false, 0.00, true, 27);
INSERT INTO productos VALUES (195, 36, 'Ocean Spray Cranberry Juice 96oz - 2 pk', 'Specifications
•	100% of the recommended daily amount of vitamin C
•	Each 8 oz. serving provides 1 delicious serving of fruit
•	No preservatives and no artificial colors or flavors
•	Farmer-owned so 100% of the profits from the farmer-owners'' fruit go back to them', 7.98, 'Ocean-Spray-Juice-96oz-2pk.png', '60d136a0-f5a4-41e4-b7d8-c74ab1564bc9', '', false, 0.00, true, 20);
INSERT INTO productos VALUES (168, 36, 'Ocean Spray Cranberry Cocktail Juice 96oz - 2pk', 'Specifications
2 jugs - 96 fluid ounces each
No high fructose corn syrup
No preservatives
No artificial colors or flavors
Net volume: 5.68 Liters (192 fluid ounces)', 7.98, 'Ocean-Spray-Original-96oz-2pk.png', '66c0e24f-a957-4060-9b8e-5239b52424a5', '', false, 0.00, true, 20);
INSERT INTO productos VALUES (185, 37, 'Ajax Ultra Super Degreaser Liquid Dish Soap, Lemon 28oz -9pk', 'Ajax Ultra Super Degreaser Liquid Dish Soap, Lemon – 28 oz (9 Pack)
•	Strips the grease on contact
•	Removes stuck-on-food
•	Contains fresh lemon scent
•	Leaves dishes sparkling clean 
•	With 100% real citrus extracts
•	America''s #1 Value Dish Brand
•	Can be used for other tough jobs beyond dishwashing (ex. pre-treat laundry, wash tires, wipe 
 appliances)
•	Contains 9 28oz bottles of Ajax Ultra Super Degreaser Liquid Dish Soap
•	Every hero needs a sidekick', 17.69, 'Ajax-Lemon-28oz-9pk.png', '26ad66d2-460b-4d83-a435-a8c49534f946', '', false, 0.00, true, 25);
INSERT INTO productos VALUES (194, 36, 'Fanta Orange Soda 12oz - 12 Pack', '•	Bright, bubbly and instantly refreshing, Fanta is made with 100% natural flavors and is caffeine-free
•	Its bright color, bold fruit taste, and tingly carbonation liven up special times with friends and family
•	Fanta is fun and has a great fruity taste with 100% natural flavors
•	Choose from a range of bold fruit flavors', 4.50, 'Fanta-Orange-12oz-24pak.png', '5b99d029-a6da-4bf7-b158-f2a4844eeb68', '', false, 0.00, true, 17);
INSERT INTO productos VALUES (197, 36, 'Fiji Natural Artesian Water 16.9oz - 24pk', '•	Everyday hydration: Perfect for quenching thirst on the go, in the office, and at events
•	Natural electrolytes: As tropical rain filters through volcanic rock, it gathers electrolytes naturally, giving Fiji Water significantly more electrolytes than other brands
•	Natural artesian: Bottled from a natural artesian aquifer in the remote Fiji Islands
•	Soft, smooth taste: As it filters through ancient rock, water naturally acquires that silica that gives Fiji its signature soft, smooth tast', 21.98, 'Water-Fiji-16.png', '37583d5d-a7c3-4ef5-b872-cd119b46ac10', '', false, 0.00, true, 21);
INSERT INTO productos VALUES (190, 37, 'Panda Bath Tissue 4x1 / 6pk 24 rolls', '12 ROLLS, 176 2-PLY SHEETS PER ROLL
234.7 SQ FT (21.8 M2) - 4 IN X 4 IN (10.1 CM X 10.1 CM', 12.86, 'Pandax4.png', '852ba52e-39a4-4ddb-b06f-aa11f1f611f2', '0183689001381', false, 0.00, true, 26);
INSERT INTO productos VALUES (187, 37, 'Ajax Ultra Liquid Dish Soap, Vinegar + Lime - 28oz - 9pk', 'Ajax Ultra Liquid Dish Soap, Vinegar + Lime - 28oz – 9pk
•	Strips the grease, guaranteed
•	Removes stuck-on-food
•	Contains fresh lime scent
•	Leaves dishes sparkling clean', 17.69, 'Ajax-Vineger-Lime-28oz-9pk.png', 'edb55e9e-039d-4061-9015-536b89989f15', '', false, 0.00, true, 25);
INSERT INTO productos VALUES (179, 37, 'Plenty Paper Towel 15 Rolls', 'Surface Layer
Quickly wicks moisture. Gentle to the touch.
Inner Layer
Pulls in and holds liquid from the surface.
Bottom Layer
Adds strength and durability in scrubbing.
15 ROLLS, 52 2-PLY SHEETS PER ROLL
', 14.64, 'Plenty-15Roll.png', '62daa40b-66d2-44e6-bce0-bd0cb6e30f18', '0183689182738', true, 0.00, true, 24);
INSERT INTO productos VALUES (181, 37, 'Palmolive Dishwashing Original 28oz - 9pk', 'Palmolive Original dish liquid leaves your toughest dishes, pots and pans sparkling clean.

•	Tough on Grease, Soft on Hands
•	Refreshing Original Fragrance
•	No food residue
•	Non concentrated
•	Made in USA and Phosphate Free', 19.59, 'Palmolive-Original-28oz-9pk.png', 'e2954131-5e4b-4d39-8d03-594ccf7c2af0', '', false, 0.00, false, 25);
INSERT INTO productos VALUES (191, 37, 'Bounty Select-A-Size Paper Towels White 12 rolls', 'This pack contains Bounty white Select-A-Size paper towels that are 2x more absorbent** and strong when wet, so you can get the job done quickly.Bounty Select-A-Size Paper Towels, White (12 rolls)', 20.98, 'Bounty-12Roll.png', '78695e18-ae07-42fa-902a-5b421a4fb347', '', false, 0.00, false, 24);
INSERT INTO productos VALUES (196, 36, 'Coca Cola de Mexico 12oz - 24pk', 'Specifications
24 bottles - 12 fluid ounces each
Net volume: 8.52 Liters (288 fluid ounces)', 23.98, 'Coca-Cola-Mexico-12oz-24pk.png', 'f4610a0d-6963-460d-b995-4504fbe1a465', '', false, 0.00, true, 17);
INSERT INTO productos VALUES (203, 37, 'Pine-Sol All-Purpose Cleaner, Original Pine 24oz -12pk', 'With Pine-Sol All Purpose Cleaner, you only need one cleaner to fight dirt, grime and grease, while EPA registered to disinfect and kill 99% of germs on most surfaces throughout your home. Pine-Sol gives you 4X cleaning action and a great, long lasting scent. It deodorizes and wipes out odor causing bacteria leaving a pleasant Pine scent. This concentrated formula cleaner can tackle any challenge, just mix Pine-Sol All Purpose Cleaner with water at different strengths to adjust your cleaning power each time, unlike premixed cleaners.', 28.13, 'Pinesol-Original-24oz-12pk.png', '5005f17a-4066-4775-acc7-df5044caeb00', '', false, 0.00, true, 28);
INSERT INTO productos VALUES (202, 36, 'Canada Dry Ginger Ale 16.9oz - 24pk', '•	Refreshing ginger taste
•	Caffeine free
•	Crisp and refreshing beverage and cocktail mixer
•	24-pack of .5 liter bottles
Ingredients:
Ingredients: carbonated water, high fructose corn syrup, citric acid, sodium benzoate preservative, natural flavors, caramel color', 13.78, 'Ginger-Ale-16.png', '6447fc76-69be-4d55-839c-43cd42dbd974', '', false, 0.00, true, 17);
INSERT INTO productos VALUES (201, 36, 'Nestle Pure Life Purified Water 16.9oz - 40pk', 'Specifications
•	40 bottles - 16.9 fluid ounces each
•	No calories
•	No sweeteners
•	No artificial colors or flavors
•	Net volume: 19.99 Liters (676 fluid ounces)', 4.98, 'Nestle-16.png', '2100d5e9-ccac-4b4e-9a11-4f4293e45dd9', '', false, 0.00, true, 21);
INSERT INTO productos VALUES (206, 37, 'Clorox Performance Bleach 121oz - 3pk', 'Specifications
•CLOROX™ CLEAN: Get more cleaning power per drop with this concentrated formula with 50% more uses reducing the amount required for cleaning (compared to Clorox® Performance Bleach)
•CONCENTRATED BLEACH: More concentrated bleach with the Clorox™ whitening, dirt-fighting and disinfecting power you love and trust for your household surfaces and white laundry
•DISINFECTING BLEACH: This cleaning bleach kills 99.9% of household germs and bacteria including norovirus, flu virus, MRSA, E. Coli, and Salmonella left on household surfaces with cleaning and disinfecting power
•STAIN REMOVER: Packed with the power of CloroMax™ Technology, this bleach delivers brighter and longer-lasting whites, protects surfaces by reducing soil adhesion to make cleaning quicker and easier
•AMERICA’S #1 BLEACH: Get the whitest whites with this concentrated laundry bleach that is filtered three times to deliver the purest bleach to remove 70% more stains than detergents alone', 15.98, 'Clorox-Performance-121oz-3pk.png', '08544a8f-fffc-4435-852d-76ccf1e8e62e', '', false, 0.00, true, 29);
INSERT INTO productos VALUES (209, 36, 'Coffee mate The Original Powdered Coffee Creamer 56oz - 1pk', 'Specifications
•	Cholesterol free
•	Lactose free
•	Gluten free
•	Kosher dairy
•	56 ounces', 6.98, 'Coffe-Mate-56oz.png', '0d0a515a-1b10-4c4a-a921-95f5478d1aa8', '', false, 0.00, true, 23);
INSERT INTO productos VALUES (211, 36, 'Coffee Mate The Orginial Liquid Creamer Singles 180 ct.', 'Transform the coffee you like into the coffee you love with Coffee mate The Original coffee creamer. It''s rich and smooth with a classic taste that is lactose-free, cholesterol-free, and gluten-free. With Coffee mate non-dairy coffee creamer single creamer tubs, you can create your perfect cup of velvety goodness by adding the right amount of flavor you want every time morning, noon, or night. Check out the variety of delicious flavors Coffee mate has to offer.', 10.98, 'Coffee-mate-180pk.png', '2e1404d4-5874-4860-941b-5bfeafe9a8fb', '', false, 0.00, true, 23);
INSERT INTO productos VALUES (212, 36, 'Splenda No Calorie Sweetener 1,200 ct.', 'Specifications
•	Splenda No Calorie Sweetener Packets
•	1,200 Individual Packets
•	Made in the USA
•	0 Calories
•	Great for coffee, tea, fruit, cereals and more!', 21.98, 'Splendar-1200pk.png', 'dd4b8d49-4251-4c54-921b-68a73eb404c2', '', false, 0.00, true, 27);
INSERT INTO productos VALUES (213, 36, 'Truvia Calorie Free Natural Sweetener 400 ct.', 'Specifications
•	Gluten free
•	Contains three ingredients: Erythritol, Stevia Leaf Extract and Natural Flavors
•	400 Individual Packets', 14.98, 'Truvia-400pk.png', '5e693ea5-eb2a-420a-abee-66553e07ce59', '', false, 0.00, true, 27);
INSERT INTO productos VALUES (214, 37, 'Fabuloso Cleaner Lavender Scent 16.9oz (500ml) / 24pk', 'Fabuloso Multi-Use Cleaner, Lavender Scent, 16.9 oz Bottle, 24/Carton - An all-purpose cleaner. Cleans floors, bathrooms, kitchens, walls and other surfaces. Pleasant, long-lasting scent. pH neutral formula won''t damage surfaces.
•	All-purpose cleaner for floors, bathrooms, kitchens, walls and other surfaces.
•	Pleasant, long-lasting scent.
•	pH neutral formula.', 23.57, 'Fabuloso-Lavander-500ml.png', 'a24d671a-7875-44a7-80c6-a4f9a9fc7400', '', false, 0.00, true, 28);
INSERT INTO productos VALUES (207, 36, 'Red & White Plain Salt 26oz - 24pk', 'Red & White Table Salt is an all-purpose salt perfect for everything from cooking and baking to filling the shakers on your table. Simplify your time in the kitchen with Red & White Table Salt. At Red & White Salt, we make sure only the best salt crystals reach your plate, so every dish you create will be as flavorful as you intend.', 17.62, 'Red-White-salt-26oz-24pk', 'b913ffc4-b847-4627-ac6a-70df696f0797', '', false, 0.00, true, 30);
INSERT INTO productos VALUES (204, 37, 'Pure Bright Germicidal Ultra Bleach  Concentrate 6 gal - 6pk', 'Germicidal bleach is specifically formulated for the tough cleaning needs of institutions and industrial cleaning settings, including clinics, hospitals, fitness clubs and restaurants. Pure Bright Germicidal Ultra Bleach contains no phosphates and is EPA-registered and NSF-approved with 27 CDC-approved germ kill claims. Use the bleach to provide a safe and germ-free environment in the kitchen, bathroom and work areas. General cleaning dilution ratio is 6 oz. to one gallon of water.', 16.99, 'Pure-Brigth.png', 'a12aef91-c437-4f4c-b3fa-fc4ccf091a22', '0059647210181', false, 0.00, true, 29);
INSERT INTO productos VALUES (199, 36, 'Materva Yerba Mate Soda 12oz - 24pk', 'Specifications
24 cans - 12 fluid ounces each
Net volume: 8.52 Liters (288 fluid ounces)', 9.54, '0007718633003_A.png', 'be25ab9d-8b8c-4acd-b73f-dc42894610f6', '', false, 0.00, true, 17);
INSERT INTO productos VALUES (193, 36, 'Red Bull Summer Edition Watermelon Energy Drink 8.4oz - 24pk', 'Flavor Name:Watermelon | Size:8.4 Fl Oz (Pack of 24)

Red Bull gives you Wings in 1987, Red Bull not only launched a completely new product, It created a whole new product category — energy drinks. From Day one, Red Bull has been giving wings to people and ideas, setting many milestones in sports and culture. When TO DRINK Red Bull is appreciated worldwide by top athletes, busy professionals, college students and travelers on long journeys. For those who wish to have red Bulls benefits without sugars, Red Bull Sugar Free provides the wings of Red Bull Energy Drink without sugars. ', 36.45, 'Redbull-watermelon-8.png', 'bd2d45ce-f4bf-4d43-9fdd-771ccfa7ebf9', '', false, 0.00, true, 19);
INSERT INTO productos VALUES (221, 39, 'Ubio Labs Wireless Qi Charging Pad - 2pk', 'Enjoy the convenience of fast wireless charging for your compatible iOS or Android device. 
This wireless charging pad offers up to 10W of wireless charging power for Samsung and 
other compatible Android devices, and 7.5W for compatible iPhone devices.
•	10W Fast wireless charging
•	Charge additional device with 12W USB-A port
•	Includes wall adapter with 6'' cable', 49.99, 'Wireless-Charging-Pad-2pk.png', '546bef91-6a96-4996-83d0-496594698b98', '', false, 0.00, true, 33);
INSERT INTO productos VALUES (222, 39, 'Epson EcoTank 3760SE All-in-One Wireless Printer With 2 Bonus Black Ink Bottles', '3-in-1 with Wireless & Ethernet: Print / Copy / Scan
Ink: Four EcoTank Ink Bottles
ISO Print Speed: Black: 15 ISO ppm†; Color: 8.0 ISO ppm†', 349.99, 'Epson-ET3760SE.png', '1f7357ae-0856-409d-89b7-9ad1fb0f98f0', '', false, 0.00, true, 34);
INSERT INTO productos VALUES (223, 39, 'Epson EcoTank 502 Ink Bottles', 'Specifications
-DEVICE TYPE: Inkjet Printer
-COLOR(S): Black
-CMY SUPPLY TYPE: Ink
-COMPATIBLE WITH: Epson EcoTank ET-2700 and 3700 Series Printers
-GENUINE REPLACEMENT INK: Yes
-YIELD TYPE: Extra-High Capacity Bottles', 65.98, '502-Ink-Bottles.png', '4dd6128d-c6a7-4885-898f-bd70957ad47d', '', false, 0.00, true, 35);
INSERT INTO productos VALUES (224, 36, 'Snapple Lemon Tea 16oz - 12pk', 'DETAILS: Ingredients: Filtered water, sugar, citric acid, tea, natural flavors', 12.22, 'snapple-lemon-tea-16floz.png', '14e89ced-a6b1-4bc2-b135-4b126bf5cd9d', '', false, 0.00, true, 20);
INSERT INTO productos VALUES (150, 36, 'Snapple - Diet Lemon Tea 16oz - 12pk', 'Made from the Best Stuff on Earth.Snapple All Natural, Naturally Flavored, 16 fl oz Glass Bottles (DIET Lemon, Pack of 12)
Ingredients:
Filtered water, citric acid, tea, aspartame, potassium citrate, natural flavors', 12.22, 'snapple-diet-lemon-tea-16floz.png', '47229932-1a04-4bf5-a75d-3984543e5731', '', false, 0.00, true, 20);
INSERT INTO productos VALUES (235, 38, 'Dove Beauty Bar Sensitive Skin 3.75oz - 16 ct.', 'About this item
•	Made with ¼ moisturizing cream
•	Unscented and hypoallergenic
•	Dermatologist recommended soap for sensitive skin
•	Can be used for infants and children
•	Won’t leave skin feeling dry or tight like ordinary bar soap', 17.98, 'Dove-Sop-Sensitive-Skin-16bar.png', 'b112a82c-de4a-46ed-b463-b5d62cc71bfc', '', false, 0.00, true, 38);
INSERT INTO productos VALUES (225, 36, 'Snapple Fruit Punch 16oz -12pk', 'Ingredients:
Filtered water, sugar, apple, pear and grape juice concentrates, citric acid, natural flavors', 12.22, 'snapple-Fruit-Punch-16floz.png', '902f9a74-22e8-417a-9deb-afad4ccd4fe5', '', false, 0.00, true, 20);
INSERT INTO productos VALUES (227, 36, 'Mott''s Apple Juice 10oz - 24 glass bottles', 'Nothing satisfies quite like Mott’s Apple Juice. Packed with ripe apple flavor, these 10oz glass bottles are 100% fruit juice', 16.96, 'Motts-10oz-24pk.png', 'c22c129e-e438-4ded-b95d-1d77ff18f3c1', '', false, 0.00, true, 20);
INSERT INTO productos VALUES (219, 36, 'Magnolia Sweetened Condensed Milk 14oz - cans 24pk', 'Magnolia Sweetened Condensed Milk is a great addition in any of your favorite recipes. This sweetened condensed milk has been specifically formulated using an exclusive vacuum process to be used in dessert dishes like flan and tres leches cake, but it has many more uses and is a good addition to your kitchen''s pantry. You will get a consistent flavor, that is slightly sweeter than other brands of condensed milk, in a ready-to-use can when you choose Magnolia Sweetened Condensed Milk.', 32.32, 'Magnolia-sweetened-condensed-14oz.png', '89d8dd6f-ff84-47d6-9dd3-749a533480a4', '', false, 0.00, true, 32);
INSERT INTO productos VALUES (218, 36, 'Mazola Corn Oil 24oz - 12 Bottle', '•	24-Ounce of Mazola Corn Oil
•	Mazola Corn Oil great for baking, grilling, sautéing, and marinating
•	Neutral taste to let the true flavors of food shine through
•	Naturally cholesterol free and 100% pure
•	4x More Natural Plant Sterols than Olive Oil and 40% more Natural Plant Sterols than Canola Oil', 34.52, 'Mazola-corn-oil-24oz.png', '01af1433-f7e1-4054-b099-b0823670f10a', '', false, 0.00, true, 31);
INSERT INTO productos VALUES (217, 36, 'Mazola Vegetable Oil Plus 40oz -12 Bottle', 'Great for: Salad dressings, stir-frying, sautéing and baking
Product can be stored for 1–2 years (depending on bottle type) under normal storage conditions (70°–80°F). Storage below 45°F may cause clouding, and exposure to ultraviolet light can cause off flavors.', 42.76, 'Mazola-vegetal-oil-40oz.png', '2710a3e9-bd30-4c0c-aa0e-3ec6073127f2', '', false, 0.00, true, 31);
INSERT INTO productos VALUES (231, 37, 'Lysol Disinfecting Wipes Lemon & Lime Blossom 80ct - 1pk', '•	Kills 99.9% of viruses & bacteria, including 8 cold & flu viruses when used as directed (EPA #777-114)
•	Unique Micro-Pocket Pattern ideal to quickly trap & lift everyday messes
•	Removes allergens
•	Safe to use on electronics: Smartphones, Tablets & Remote Controls
•	3X stronger vs. a paper towel: clean more, use less
•	Specially crafted, uplifting fragrance', 6.99, 'Lysol-wipes-80ct.png', '7a8f529c-c4b8-4408-b03d-906130c7ef8f', '', false, 0.00, true, 36);
INSERT INTO productos VALUES (215, 36, 'Mazola Corn Oil 40oz - 12 Bottle', 'Mazola® Corn Oil is an ideal cooking oil for getting great flavor out of your food and not your oil. Mazola corn oil contains no additives; it is just 100% pure oil. It is also cholesterol-free and contains zero grams of trans fat.
•	Great for cooking, frying and baking
•	Cholesterol-free
•	No trans fat', 42.76, 'Mazola-corn-oil-40oz.png', '755bd6f6-924e-43e3-aaf9-ede5305ac3fc', '', false, 0.00, true, 31);
INSERT INTO productos VALUES (216, 36, 'Mazola Canola Oil 40oz - 12 Bottle', '•	40-Ounce of Mazola Canola Oil
•	Great for baking, grilling, sautÃ©ing,  and marinating
•	Neutral taste to let the true flavors of food shine through
•	Canola oil is a cholesterol free food with 14g of total fat per serving.
•	0g trans fat per serving.', 42.76, 'Mazola-canola-oil-40oz.png', '17f54537-d710-4ca6-af76-2ee865acd6fa', '', false, 0.00, true, 31);
INSERT INTO productos VALUES (208, 37, 'Scott Bath Tissue 1-ply 36 Rolls Individually Wrapped Toilet Paper', 'Enjoy a gentle clean with the Scott® 1100 Unscented Bath Tissue Bonus Pack (1-ply, 36 Rolls). With 1000 sheets per roll, it provides an economical option for homes and businesses.
Specifications
Bonus 100 extra sheets per roll
1 roll = 1,100 sheets
1-ply sheets
4.1', 28.88, 'scott-tissue.png', '0e9ffce3-c137-4dfb-b909-2c90b7208f11', '0054000123344', false, 0.00, true, 26);
INSERT INTO productos VALUES (220, 36, 'Red & White Sweetened Condensed Milk 14oz - cans 24pk', 'Specifications
24/12 oz. cans
With Vitamin D added', 35.61, 'Red&White-sweetened-condensed-14oz.png', '92c22e7c-fa85-4115-af7e-5519de99ff6b', '', false, 0.00, true, 32);
INSERT INTO productos VALUES (234, 38, 'Lubriderm Daily Moisture Lotion 24oz - 2 pk & Advanced Therapy Lotion 6oz - 1pk', 'Ingredients
Water, mineral oil, glycerin, caprylic/capric triglyceride, stearic acid, cetyl alcohol, phenoxyethanol, cetearyl alcohol, dimethicone, carbomer, ceteareth-20, sodium hydroxide, sodium citrate, methylparaben, propylparaben, fragrance, citric acid, ethylparaben, panthenol
Specifications
•	Helps hydrate, replenish, and strengthen skin moisture barrier
•	For extra-dry skin
•	Moisturizer contains Vitamins E and B5 plus skin-essential lipids
•	Clinically proven to help moisturize for 24 hours
•	Non-greasy lotion formula with a clean feel', 15.48, 'Lubriderm-3pk.png', '8063a3e9-23b8-4377-84c4-e9216103b7a6', '', false, 0.00, true, 37);
INSERT INTO productos VALUES (236, 38, 'Dove Beauty Bar White 3.75oz - 16 ct.', 'Specifications
•	With 1/4 moisturizing cream and mild cleansers, Dove helps your skin maintain its natural moisture.
•	Since Dove White Beauty Bar is made with gentle cleansers, you can use it every day on both your body and face.
•	Classic formula leaves skin soft and smooth
•	It''s not soap; it''s a beauty bar.', 17.98, 'Dove-Sop-White-16bar.png', 'a726793a-abf6-4f7e-b435-b0e0b76ff6c7', '', false, 0.00, true, 38);
INSERT INTO productos VALUES (233, 38, 'Dove Nourishing Secrets Restoring Ritual Coconut Body Lotion 400ml', 'Dove Nourishing Secrets Restoring Ritual Coconut Body Lotion 400ml', 6.00, 'Dove-Restourig-Ritual-400ml.png', '88e3cbde-b25f-4166-bde2-e368ff0d1dc3', '', false, 0.00, true, 37);
INSERT INTO productos VALUES (238, 38, 'Irish Spring Original Deodorant Soap 3.7oz - 20 ct.', 'Inactive Ingredients: Soap (Sodium Tallowate and/or Sodium Palmate, Sodium Cocoate and/or Sodium Palm Kernelate), Water, Glycerin (Skin Conditioner), Hydrogenated Tallow Acid, Coconut Acid, Fragrance, Sodium Chloride, Pentasodium Pentetate, Pentaerythrityl Tetra-Di-T-Butyl Hydroxyhydrocinnamate, Titanium Dioxide, D&C Green No.8, FD&C Green No.3.
Specifications
•	20 bar value pack
•	Made in USA
•	Recyclable
•	Bath-size bar', 10.84, 'Irish-20bar.png', '59002aca-3c59-4d5a-86b5-ba736f9fbc53', '', false, 0.00, true, 38);
INSERT INTO productos VALUES (242, 36, 'Arizona Green Tea With Ginseng and Honey 23oz - 24pk', 'Specifications
•	24 cans - 23 fluid ounces each
•	No additives or preservatives
•	Net volume: 16.32 Liters (552 fluid ounces)', 16.94, 'Arizona-Green-te-24pk.png', '2c0bc0a9-b2e0-46cf-be40-39d8f391e504', '', false, 0.00, true, 17);
INSERT INTO productos VALUES (246, 36, 'Morton Salt Plain 26oz - 24pk', '•	Great for everyday use - This is a non-iodized salt, perfect for everything from cooking and baking to filling table salt shakers
•	All-purpose - This all-purpose salt features uniformly shaped crystals, making it the perfect salt when precise measurements are critical
•	Easy to use - Simplify your cooking needs in the kitchen with Morton all-purpose table salt
•	This table salt is available in a 26 oz. canister
•	This is not an iodized salt
•	At Morton Salt, we make sure only the best salt crystals reach your plate, so every dish you create will be as flavorful as you intend.', 23.70, 'Morton-Salt-26oz-24pk.png', 'dd8635ec-0ecd-46b4-a5e3-165a837b14bd', '', false, 0.00, true, 30);
INSERT INTO productos VALUES (245, 36, 'Arizona Watermelon Juice Drink 23oz - 24pk', 'AriZona made it possible and now you can refresh yourself in the best way with this new incredible flavor, perfectly balanced and delicious, also 100% natural!
Filtered water, high fructose corn syrup, watermelon juice, concentrated kiwi, pear and pineapple juice, mango puree, citric acid, natural flavors, carrot juice, Acacia gum, SUCRALOSE (0.48 mg / SERVING - 0.2 mg / 100ml). Fortified with Vitamins C. Very low in Sodium. Without gas.', 16.94, 'Arizona-Watermelon-te-24pk.png', '8cb74ac8-f028-410d-b78b-ba800b74ffac', '', false, 0.00, true, 17);
INSERT INTO productos VALUES (244, 36, 'Arizona Iced Tea Peach Flavor 23oz - 24pk', 'Arizona Diet Peach Tea a perfect and unusual balance between Diet, sweet and refreshing! Contains no calories, carbohydrates, or artificial ingredients.', 16.94, 'Arizona-Iced-te-Peach-24pk.png', '398efe10-0cd3-472d-93ed-4ba441cf72e6', '', false, 0.00, true, 17);
INSERT INTO productos VALUES (228, 36, 'Red & White Vegetable Oil 48 oz - 9pk', 'Red & White Vegetable Oil 48 oz - 9pk', 22.05, 'Red&White-Vegetal-Oil-48oz.png', 'a1db770a-57bf-4441-ba13-3cd0245a3b86', '', false, 0.00, true, 31);
INSERT INTO productos VALUES (241, 36, 'Arizona Iced Tea Lemon Cans 23oz - 24pk', 'This drink created 25 years ago is still one of its most popular flavors. Its secret is simple: it is made with real Black Tea and lemon juice that creates a drink with a slightly sweet and very refreshing taste.', 16.94, 'Arizona-Iced-te-Lemon-24pk.png', '37dd2fa7-6bf7-4add-a6e4-032917f87359', '', false, 0.00, true, 17);
INSERT INTO productos VALUES (250, 36, 'Sprite Lemon Soda 20oz - 24pk', 'Features
•	Sprite, 20 Fl Oz Bottle – 24 Pack
•	Lemon-Lime Soda, 100% Natural Flavors
•	Clean, Crisp, Fresh Tasting and No Caffeine
•	Perfect Size for Drinking with Meals, On-The-Go, or Any Time
•	What''s in a Sprite? Its Perfectly Clear. Natural Flavors and No Caffeine', 23.99, 'Sprite-20oz-24pk.png', '194eed62-c36f-4e22-8b51-ad31a85fe502', '', false, 0.00, false, 17);
INSERT INTO productos VALUES (232, 38, 'Nivea Body Express Hydration Lotion 400 ml', 'Ingredients: Aqua, Glycerin, Isopropyl Palmitate, Glyceryl Glucoside, Glyceryl Stearate SE, C1215 Alkyl Benzoate, Cetearyl Alcohol, Maris Sal, Sodium Carbomer, Sodium Cetearyl Sulfate, Dimethicone, Methylisothiazolinone, Phenoxyethanol, Linalool, Benzyl Alcohol, Limonene, Citronellol, Parfum
', 4.50, 'Nivea-400ml.png', '200be67c-3db4-4886-af80-ac6a1b884b9f', '', false, 0.00, true, 37);
INSERT INTO productos VALUES (249, 36, 'Coke Zero Sugar 20oz - 24pk', 'Ingredients
Carbonated Water, Caramel Color, Phosphoric Acid, Aspartame, Potassium Benzoate (to Protect Taste), Natural Flavors, Potassium Citrate, Acesulfame Potassium, Caffeine.', 23.99, 'Coca-Cola-Zero-Sugar-20oz-24pk.png', 'efceefdb-4221-482c-addf-8f9c33dcdd5e', '', false, 0.00, false, 17);
INSERT INTO productos VALUES (248, 36, 'Diet Coke 20oz - 24pk', 'Ingredients
Carbonated Water, Caramel Color, Aspartame, Phosphoric Acid, Potassium Benzoate (to Protect Taste), Natural Flavors, Citric Acid, Caffeine.', 23.99, 'Diet-Coke-20oz-24pk.png', '52358ec6-140c-41e6-8cff-83a06d389343', '', false, 0.00, false, 17);
INSERT INTO productos VALUES (247, 36, 'Coca Cola 20oz - 24pk', 'Ingredients:
Carbonated Water, High Fructose Corn Syrup, Caramel Color, Phosphoric Acid, Natural Flavors, Caffeine.', 23.99, 'Coca-Cola-20oz-24pk.png', '2d3c2906-b89d-4cfb-939a-3aff74a394e0', '', false, 0.00, false, 17);
INSERT INTO productos VALUES (251, 36, 'Red & White Evaporated Milk 12oz - 24pk', 'Features
Red and white Evaporated Milk', 21.67, 'Red&White-Evaporate-Milk-12oz-New.png', 'aa6bbfdf-8546-4954-9041-54a3833023bf', '', false, 0.00, true, 32);
INSERT INTO productos VALUES (239, 36, 'Red Bull Energy 12oz - 24pk', 'Specifications
•	24 cans - 12 fluid ounces each
•	Made with high-quality ingredients 
•	Caffeine content: 114 mg/12 fl oz.
•	Net volume: 8.52 Liters (288 fluid ounces)', 49.98, 'Redbull-Original-12oz.png', 'dcb7bc36-c82c-4c5d-a38f-b669d240eab5', '', false, 0.00, false, 19);
INSERT INTO productos VALUES (243, 36, 'Arizona Raspberry Tea 23oz - 24pk', 'It is a unique drink, made with Premium Black Tea preparation and real raspberry juice. It has a perfect balance, sweet and fresh, which combines perfectly with a tasty touch of flavor for Black Tea.', 16.94, 'Arizona-Iced-te-Raspberry-24pk.png', '2b527b7a-e834-4d12-8320-70c40bf3091b', '', false, 0.00, true, 17);
INSERT INTO productos VALUES (252, 36, 'Arizona Fruit Punch 23oz - 24pk', 'AriZona Fruit Punch, 23-Ounce (Pack of 24)
Pack of twenty four, 23-ounce bottles (total of 552 ounces) | Very low sodium | Product of USA
All of our consumable products are within expiration date. ', 16.94, 'Arizona-Fruit-Punch-24pk.png', '6bd6b00d-6096-4fc2-ac95-6eed4a24a7a7', '', false, 0.00, true, 17);
INSERT INTO productos VALUES (230, 37, 'Clorox Disinfecting Wipes, Bleach Free Cleaning Wipes 5pk - 425 wipes', '•	Clorox® Disinfecting Wipes are triple-layered to clean, disinfect and remove allergens for 5x cleaning power and leave a pleasant scent.
•	Kills 99.9% of Viruses* & Bacteria
•	Kills 99.999% of Bacteria* in 10 seconds', 24.00, 'Clorox-Wipes-425wipes.png', 'e516c58c-7ac9-4ce1-9416-e2b97dfc1713', '', false, 0.00, true, 36);
INSERT INTO productos VALUES (210, 36, 'Coffee Mate Original Powder Coffee Creamer 11 oz - 8pk', '•	Specifications
•	Coffee-Mate® Powder Coffee Creamer
•	(8) 11 oz. canisters
•	Gluten-free
•	Cholesterol-free
•	Coffee''s perfect mate
•	Non-dairy, lactose-free coffee creamer
•	Unique easy-to-pour lid is perfect for home or office', 11.98, 'Coffe-Mate-11oz-8pk.png', '1ff89e78-1be4-442d-8e88-58ca1b751fb4', '', false, 0.00, true, 23);
INSERT INTO productos VALUES (205, 37, 'Clorox Concentrated Germicidal Bleach, 121oz - 3pk', 'Clorox Concentrated Germicidal Bleach is EPA-registered to kill 39 organisms, including multiple strains of MRSA, norovirus, flu virus, E. Coli, listeria and Salmonella when used as directed. Works on countertops, floors, toilets and other hard surfaces. Removes stains and kills mold and mildew. Ideal for use in busy healthcare environments, offices, schools and other commercial facilities. Pack of three 121 oz bottles.', 20.18, 'Germicidal-Bleach-121oz.png', 'baec778a-85c9-4341-b5df-16ce3470ca62', '10044600309665', false, 0.00, true, 29);
INSERT INTO productos VALUES (188, 37, 'Ajax Ultra Triple Action Liquid Dish Soap Orange 14oz - 20pk', 'Ajax Ultra Triple Action Liquid Dish Soap, Orange – 14oz – 20pk
•	Strips the grease
•	Removes stuck-on food
•	Leaves dishes sparkling clean
•	Washes away bacterial from hands (when used as a handsoap, to wash away dirt and bacteria from hands, wash them for 20 seconds under clean running water)', 21.87, 'Ajax-Orange-14oz-20pk.png', 'b09e60ff-306e-40e3-a1bc-396b5bca3868', '', false, 0.00, true, 25);
INSERT INTO productos VALUES (255, 36, 'Red & White Canola Oil 48oz - 9 Bottles', '•	40-Ounce of Red & White Canola Oil
•	Great for baking, grilling and marinating
•	Neutral taste to let the true flavors of food shine through
•	Canola oil is a cholesterol free food with 14g of total fat per serving.
•	0g trans fat per serving.', 23.71, 'Red&White-Canola-Oil-48oz.png', 'ba4be051-ceb7-47b9-b733-a635ce7227bb', '', false, 0.00, true, 31);
INSERT INTO productos VALUES (257, 36, 'Mott''s Clamato Juice 32oz - 12 plastic bottles', '-Twelve 32 fluid ounce bottles
-An authentic, invigorating blend of tomato juices and spices
-Great for mixed drinks
-A zesty addition to meals; pairs well with seafood, poultry and various other dishes', 29.99, 'Clamato-Juice-32oz-12pk.png', '4e71856d-67d1-4ffe-b732-2ea73d099cc9', '', false, 0.00, true, 20);
INSERT INTO productos VALUES (256, 36, 'Canada Dry Club Soda 1L Plastic bottles - 15pk', '•	Refreshment that fits every situation
•	Great as a mixer and sparkling beverage
•	Zero calories and caffeine free
•	One 1 liter bottle', 18.98, 'Club-Soda-1L-15pk-2.png', '11b5b364-a16d-4928-89ea-c06607248aa0', '', false, 0.00, true, 17);
INSERT INTO productos VALUES (253, 37, 'Pine-Sol - All Purpose Cleaner 40oz - 8 bottles', 'Pine-Sol original 40 fl.oz each bottles.
kills 99.9% of germs, cleaner and disinfectant', 30.24, 'Pinesol-Original-40oz-8pk.png', '068fec37-47b8-4b2e-a18d-33c23f32f813', '', false, 0.00, true, 28);
INSERT INTO productos VALUES (184, 37, 'AJAX Ultra Triple Action Liquid Dish Orange 28oz - 9pk', 'AJAX Ultra Triple Action Liquid Dish Soap, Orange, 9pk
•	Strips the grease
•	Removes stuck-on food
•	Leaves dishes sparkling clean
•	Washes away bacteria from hands', 17.69, 'Ajax-Orange-28oz-9pk.png', '508abb7c-c62c-49f2-93f3-3a02061a92ac', '', false, 0.00, true, 25);
INSERT INTO productos VALUES (200, 36, 'Vita Coco Coconut Water 11.1oz - 12pk', 'Specifications
•	12 bottles - 11.1 fluid ounces each
•	Fat free
•	Net volume: 3.94 Liters (133.2 fluid ounces)', 14.98, 'Vitta-coco-11oz-12pk.png', '2aa9bc15-fac9-49e3-b092-af18ad8a97e7', '', false, 0.00, true, 17);
INSERT INTO productos VALUES (240, 36, 'Red Bull Energy Sugarfree 12oz - 24pk', 'Ingredients: Carbonated Water, Citric Acid, Taurine, Sodium Bicarbonate, Magnesium Carbonate, Caffeine, Acesulfame K, Aspartame, Niacinamide, Calcium Pantothenate, Pyridoxine HCl, Vitamin B12, Xanthan Gum, Natural and Artificial Flavors, Colors.Phenyketonurics: Contains Phenylalanine.', 49.98, 'Redbull-Sugarfree-12oz.png', '5cd3b451-0e3b-45a4-a606-b43094bb0f95', '', false, 0.00, false, 19);
INSERT INTO productos VALUES (183, 37, 'Ajax Dish Liquid, Tropical Lime Twist 28oz - 9pk', 'Tough on grease and powerful on plastic. Gets dishes sparkling clean. Leaves behind a pleasant scent.
• Washes away bacteria from hands while leaving dishes sparkling clean
• Keeps dishes clean and odor free
• Stronger than grease - cuts right through
• Gentle and phosphate free
• Tough on grease and powerful on plastic.
• Gets dishes sparkling clean.
• Leaves behind a pleasant scent Ajax Dish Liquid, Tropical Lime Twist 28oz (Pack of 9)', 17.69, 'Ajax-Lime-Tropical-Lime-Twist-28oz-9pk.png', 'b0b1492c-4ed0-4737-bf30-4f0a50bec488', '', false, 0.00, true, 25);
INSERT INTO productos VALUES (254, 37, 'Bounty Napkin 200 Ct - 8pk', 'Single-ply napkins feature a quilted surface to handle your sticky messes with a soft touch. Absorbent napkins stay strong when wet to keep you covered throughout your meal. Plus, its durable design allows you to wipe down dirty areas for quick cleanings as needed. Napkins are perfect for foodservice industries, schools, offices and more.', 27.44, 'Bounty-Napkin-200ct.png', 'c4ce9154-1fa1-4dab-aa31-be9c1d328f5f', '', false, 0.00, true, 41);
INSERT INTO productos VALUES (258, 37, 'Bounty Essentials Paper Towels, 40 Sheets - 30 Rolls - Per Box', 'Specifications
•	Global Product Type: Towels & Wipes-Perforated Paper Towel Roll
•	Material(s): Paper
•	Width: 11
•	Application: General Purpose
•	Packaging: Plastic
•	Scent: Unscented
•	Length: 10.2', 39.46, 'Bounty-Essentials-30Roll.png', '70f1f13f-a55c-492f-8b9d-1f7f6bd0e2f2', '', false, 0.00, true, 24);
INSERT INTO productos VALUES (198, 36, 'Fiji Natural Artesian Water 1 L - 12pk', 'Case includes 12, 1.0L (33.8oz) bottles of FIJI Water. The 1.0L size is perfect for hiking, traveling, and everyday hydration. Its soft, smooth taste comes from its extraordinary source -- a protected artesian aquifer found deep underground in the remote Fiji Islands. FIJI Water is the choice of discerning top chefs, fine restaurants and hotels around the world.
o	PACK SIZE: Pack of 12, 1L (33.8oz) bottles
o	EVERYDAY HYDRATION: Perfect for quenching thirst on the go, in the office, or while traveling
o	NATURAL ELECTROLYTES: As tropical rain filters through volcanic rock, it gathers electrolytes naturally, giving FIJI Water significantly more electrolytes than other brands
o	NATURAL ARTESIAN: Bottled from a natural artesian aquifer in the remote Fiji Islands', 20.98, 'Water-Fiji-1L.png', '84daf710-2c21-43f5-b587-9bb1ff6a3a97', '', false, 0.00, true, 21);
INSERT INTO productos VALUES (259, 38, 'Nivea Body Irresistibly Smooth Lotion 400ml', 'Sold in packs of 6 Bottles of Nivea Body Irresistibly Smooth Lotion 400ml', 4.50, 'Nivea-Smooth-400ml.png', '1e233ef4-7ad9-4356-84fa-6832ca8695e6', '', false, 0.00, true, 37);
INSERT INTO productos VALUES (260, 36, 'Sunny D Tangy Original, 11.3oz - 24pk ', 'ired of just drinking bottled water all the time? Get this 24-Count case of Sunny D with Tangy Original flavor and start drinking a deliciously sweet and tangy juice drink! Each 11.3-Fluid Ounce bottle has 100% of your daily recommended value of Vitamin C, and with only 80 Calories, too. This case is perfect for storing in the break room, to enjoy with lunch or to grab when someone''s on-the-go. Taste the refreshingly tangy flavor of these Sunny D bottles and change up your drinking routine!
•	A 24-Count case of 11.3-Ounce bottles of Sunny D in Tangy Orignal flavor
•	100% Daily Value of Vitamin C per bottle
•	Only 80 Calories per Sunny D bottle
', 16.24, 'sunnyD-Original-11.3oz-24pk.png', '593c67b0-9177-43c9-ab80-31c2f643c738', '', false, 0.00, true, 20);
INSERT INTO productos VALUES (261, 36, 'Sunny D Original Tangy 6.75oz - 48pk', 'SunnyD Tangy Original Orange Flavored Citrus Punch has 25% less sugar, with the same great taste. Perfect for packed lunches, vending machines, or for grabbing and going when you need a to-go drink! SUNNY D Tangy Original Orange Flavored Citrus Punch, 6.75 oz, 48 Count', 22.42, 'sunnyD-Original-6.75oz-24pk.png', 'ef99b429-e595-4e65-b73d-f77da1d28933', '', false, 0.00, true, 20);
INSERT INTO productos VALUES (262, 36, 'Sunny D Smooth Orange Juice 64oz - 8pk', 'ired of just drinking bottled water all the time? Get this 24-Count case of Sunny D with Tangy Original flavor and start drinking a deliciously sweet and tangy juice drink! Each 64-Fluid Ounce bottle has 100% of your daily recommended value of Vitamin C, and with only 80 Calories, too. This case is perfect for storing in the break room, to enjoy with lunch or to grab when someone''s on-the-go. Taste the refreshingly tangy flavor of these Sunny D bottles and change up your drinking routine!', 18.10, 'sunnyD-Smooth-64oz-8pk.png', 'd21ab155-05fb-4dff-bfca-a589e11d9984', '', false, 0.00, true, 20);
INSERT INTO productos VALUES (263, 36, 'Florida Crystal Brown Sugar 2 Lb - 12pk', 'Florida Crystal Brown Sugar 2 Lb - 12pk', 32.65, 'Florida-Crystals-Brown-Sugar-2lb.png', 'f6e7ede9-966b-4c27-a7f4-8474cf5792e0', '', false, 0.00, true, 27);
INSERT INTO productos VALUES (267, 37, 'Tide 2X Liquid Detergent 25 oz - 6 Bottle', 'Tide 2x ultra liquid detergent, original, 16 loads
2X Concentrated.
More effective, use less (As compared to non-concentrated Tide on stain removal).
One small cap of Ultra Tide helps remove virtually every type of stain.
2X Concentrated so you can use half as much.
If you have a High Efficiency washer, we recommend using Tide High Efficiency.
Contains no phosphate.', 29.64, 'Tide-2x-6pk.png', '20ec7c1d-437e-41b5-a3cf-9c481eb5b62d', '', false, 0.00, true, 43);
INSERT INTO productos VALUES (268, 37, 'Tide Original Scent Liquid Detergent 10 oz - 12pk', 'Product Description

For an amazing clean you know and love, there’s only one original: Tide Original Scent Laundry Detergent. Its revitalizing scent is infused with aloe and floral notes to help keep your family’s clothes smelling as great as they look. 10x cleaning power. Amazing Tide clean from America’s #1 detergent based on sales. #1 recommended by washing machine manufacturers. Brilliant cleaning performance that leaves behind a refreshing Original Scent ', 26.30, 'Tide-original-10oz-12pk.png', 'd956553f-b52c-4ffc-b49a-4a1c88cb31f7', '', false, 0.00, true, 43);
INSERT INTO productos VALUES (269, 37, 'Tide Original Liquid 46 Oz - 6pk', 'Liquid laundry detergent features a more concentrated formula for increased stain removal and freshness using less water. Original scent keeps your clothes smelling as great as they look. Plus, the handy cap doubles as a convenient measuring tool to accurately portion the proper amount of detergent. Use this liquid detergent to pretreat a stain on a blouse or to wash a whole load of dirty clothes.

Increased strength provides more power to remove stains
Original scent keeps your fabrics smelling great
Handy cap allows easy measurements to prevent wasteful use
Versatile formula can also be used to pretreat stains', 53.03, 'Tide-original-46oz-6pk.png', 'f37b94ad-4e02-4ee4-ad6c-3299409e879e', '', false, 0.00, true, 43);
INSERT INTO productos VALUES (264, 37, 'Foca - Powdered Laundry Detergent 2 lb - 18 Bag', 'Foca Detergent, 2 lbs:
Phosphate-free laundry detergent
With biodegradable surfactants and enzymes
Leaves whites bright and clean and colors vibrant
2-lb bag', 37.82, 'Foca-2lb-18pk.png', '3657a717-e960-4d2d-a915-f8fa2af946a3', '', false, 0.00, true, 42);
INSERT INTO productos VALUES (265, 37, 'Foca - Powdered Laundry Detergent 1 lb - 36 Bag', 'Foca Detergent, 1 lbs:
Phosphate-free laundry detergent
With biodegradable surfactants and enzymes
Leaves whites bright and clean and colors vibrant
1Lb - 36 bag', 37.82, 'Foca-2lb-18pk.png', '02cb30a0-f7f2-47fc-99ba-d09198615a78', '', false, 0.00, true, 42);
INSERT INTO productos VALUES (266, 37, 'Foca - Powdered Laundry Detergent 11 lb - 4 Bag', 'Foca Detergent, 11 lbs:
Phosphate-free laundry detergent
With biodegradable surfactants and enzymes
Leaves whites bright and clean and colors vibrant
11Lb - 4 bag', 38.24, 'Foca-2lb-18pk.png', 'eea7f68b-b7f8-4a48-a2ce-bb23b8992b05', '', false, 0.00, true, 42);
INSERT INTO productos VALUES (281, 36, 'Sprite Lemon Lime Soda Soft Drinks 12 oz - 12 Pack', '•	The OG Sprite, lemon-lime flavored soda for bold personalities
•	100% natural flavors
•	Caffeine-free
•	12 FL OZ per can
•	Crisp, cool, mouthwatering citrus taste
Ingredients:
Ingredients: CARBONATED WATER, HIGH FRUCTOSE CORN SYRUP, CITRIC ACID, NATURAL FLAVORS, SODIUM CITRATE, SODIUM BENZOATE (TO PROTECT TASTE).
', 4.50, 'Sprite-12oz-12pk.png', '9f6a4550-0772-4b37-92a1-18eae36823cf', '', false, 0.00, true, 17);
INSERT INTO productos VALUES (270, 37, 'Gain Liquid Original 10 oz - 12pk', 'Gain Liquid Detergent Original with Fresh Lock is designed to keep freshness in your clothes even after two weeks. The Gain Detergent 6 Loads, 10 fl oz ( each bottle ), comes in the original scent that combines overtones of orange, lemon and blossoms with a modern fruity, green twist with undertones of white floral jasmine with a hint of woody amber. This liquid laundry detergent can be used with Gain Liquid Fabric Softener or Gain Dryer Sheets (sold separately), for a matching scent. Contains no phosphate', 12.94, 'Gain-10oz-12pk.png', 'b1734dcd-60f7-4ad3-9e59-da0d9d68c04f', '', false, 0.00, true, 43);
INSERT INTO productos VALUES (271, 37, 'Gain Liquid Laundry Detergent 100 oz - 1 Bottle', 'Gain + Aroma Boost Liquid Laundry Detergent, Original, 64 Loads 100 Fl oz: Liquid laundry detergent with brilliant cleaning performance that leaves behind a refreshing Gain Original scent. Smells great because it cleans great!
7 weeks of freshness from wash until wear.
Freshness of 1 cap of Gain liquid laundry detergent = 1 bottle of the leading baking soda detergent. In wear freshness of 1 large dose of Gain vs. 50 oz bottle of leading baking soda detergent scent.
Regular Washer and HE Compatible
Like any household detergent, keep away from children.', 10.99, 'Gain-100oz-1pk.png', '53751ecb-9380-4f6a-ac80-1e1b252c4c8f', '', false, 0.00, true, 43);
INSERT INTO productos VALUES (272, 37, 'Gain Original 32 Loads Liquid Laundry Detergent 50 oz - 6pk', 'Gain Aroma Boost Liquid Laundry Detergent, Original, 32 Loads 50 Fl Oz:

Liquid laundry detergent with brilliant cleaning performance that leaves behind a refreshing Gain Original scent. Smells great because it cleans great
6 weeks of freshness from wash until wear.
Freshness of 1 cap of Gain liquid laundry detergent = 1 bottle of the leading baking soda detergent. In-wear freshness of 1 large dose of Gain vs. 50 oz bottle of leading baking soda detergent/ scent.
Regular Washer and HE Compatible.
Like any household detergent, keep away from children.', 31.72, 'Gain-50oz-6pk.png', '6da5f354-0f37-439e-8edf-1b1b91d791d7', '', false, 0.00, true, 43);
INSERT INTO productos VALUES (276, 37, 'Roma Laundry Detergent 11.02 lb - 4 Bag', 'Details
Biodegradable. Economical and effective. Phosphate-free. www.lacorona.com.mx. For all fabrics. Leaves your fabrics sparkling clean. Quality products since 1920. 
Ingredients
Cleaning Agent (Lineal Anionic Surfactant), Water Softener (Aluminosilicates and Silicate), Soil Suspending Agent (CMC), Optical Brightener and Perfume.', 37.24, 'Roma-1lb-36pk.png', 'c0ace1de-6288-4bee-8c30-a20a46fdafa4', '', false, 0.00, true, 42);
INSERT INTO productos VALUES (148, 36, 'Red Bull Energy Sugarfree 8.4oz - 24pk', 'Red Bull is very aware of its environmental responsibility and is constantly striving for improvement. Red Bull has made a conscious decision to use 100% recyclable aluminium cans, and we developed our environmentally friendly Red Bull Coolers which use up to 45% less energy than conventional fridges.

Red Bull Sugarfree: Wings Without Sugar
Red Bull Sugarfree is a beverage perfect for when you''re in need of wings without sugar and only 5 calories per 8.4-fluid ounces
Made with High-Quality Ingredients such as Caffeine, Taurine, B-Group Vitamins, Aspartame & Acesulfame K, Water
Add this 6 count of Red Bull Sugarfree Energy Drink 4 Packs to your basket and get twenty-four Red Bull Sugarfree cans, 8.4 Fl Oz (250mL) per can, 100%-recyclable can
Red Bull Vitalizes Body and Mind', 33.99, 'Redbull-Sugarfree-8.4oz.png', '75be6349-6c01-4f74-a0f6-c9e80a9a88a3', '', true, 0.00, true, 19);
INSERT INTO productos VALUES (273, 37, 'Roma Laundry Detergent 1.10 lb - 36 Bag', 'Details
Ingredients
Cleaning Agent (Lineal Anionic Surfactant), Water Softener (Polymer and Silicate), Soil Suspending Agent (C.M.C), Optical Brightener and Perfume
Product features
Roma Laundry Detergent 1 lb', 39.60, 'Roma-1lb-36pk.png', 'e6f35b00-3ffc-4cba-8287-1b6ded724244', '', false, 0.00, true, 42);
INSERT INTO productos VALUES (274, 37, 'Roma Laundry Detergent 2.20 lb - 18 Bag', 'Details
Biodegradable. Economical and effective. Phosphate-free. www.lacorona.com.mx. For all fabrics. Leaves your fabrics sparkling clean. Quality products since 1920.
Ingredients
Cleaning Agent (Lineal Anionic Surfactant), Water Softener (Aluminosilicates and Silicate), Soil Suspending Agent (CMC), Optical Brightener and Perfume.', 39.60, 'Roma-1lb-36pk.png', 'b801c245-ece8-492d-824e-d0a5398fb7a5', '', false, 0.00, true, 42);
INSERT INTO productos VALUES (275, 37, 'Roma Laundry Detergent 4.40 lb - 10 Bag', 'Details
Biodegradable. Economical and effective. Phosphate-free. www.lacorona.com.mx. For all fabrics. Leaves your fabrics sparkling clean. Quality products since 1920. 
Ingredients
Cleaning Agent (Lineal Anionic Surfactant), Water Softener (Aluminosilicates and Silicate), Soil Suspending Agent (CMC), Optical Brightener and Perfume.', 40.93, 'Roma-1lb-36pk.png', '601d2813-b3c7-4fbd-968e-4905251da4b8', '', false, 0.00, true, 42);
INSERT INTO productos VALUES (229, 37, 'Clorox Disinfecting Wipes Fresh Scent 35ct', '•	DISINFECTING WIPES: Clorox Disinfecting Wipes are triple-layered to clean disinfect and remove allergens for 5x cleaning power and leave a clean Fresh scent.
•	ALL-PURPOSE WIPE: These all-purpose disposable wipes remove common allergens germs and messes on surfaces like kitchen counters bathroom surfaces and more.
•	MULTI-SURFACE CLEANER: Wipes are safe for finished wood sealed granite and stainless steel and on non-food-contact surfaces in the home office classroom pet area dorm and locker room.
•	DISPOSABLE WIPES: This 35-count canister easily dispenses disposable antibacterial wipes that have a clean Fresh scent. Dispose of wipes according to manufacturer instructions.
•	NO BLEACH: Disinfect and deodorize with Clorox Disinfecting Wipes for a bleach-free, all-in-one cleaning alternative that’s safe to use on toys and more.', 4.93, 'Desinfecting-Wipes-35sheets.png', '8d15d5bc-2c74-41fa-8aea-35b5b53282ac', '', false, 0.00, true, 36);
INSERT INTO productos VALUES (278, 36, 'Riceland Extra Long Grain White Rice 5 lb - 8 Bag', 'Riceland Enriched Extra Long Grain Rice, 5 Lb:
Grown in U.S.A.
5 lbs of Riceland enriched rice per bag
Extra long grain
Easy to cook up
Suitable for use in all sorts of cuisines', 27.54, 'Riceland-5lb-8pk.png', '03073314-db23-4c58-b4bb-add84784ad65', '', false, 0.00, true, 44);
INSERT INTO productos VALUES (280, 36, 'Perrier Sparkling Mineral Water 25.3 oz - 12 glass bottles', 'DESCRIPTION: PERRIER SPARKLING WATER IS A CERTIFIED KOSHER-PARVE CARBONATED BEVERAGE. THIS SPARKLING MINERAL WATER COMES IN ONE 750 ML. BOTTLE AND IS NOT A SIGNIFICANT SOURCE OF FAT CALORIES. EACH SERVING CONTAINS 0 G. OF SODIUM, 0 G. OF SUGARS AND 4% OF THE DAILY VALUE OF CALCIUM. IT IS CAPTURED AT THE SOURCE IN FRANCE.,

INGRIDIENS: CARBONATED MINERAL WATER', 17.50, 'Perrier-25.3oz-12pk-glass.png', '95a62023-273d-469d-8d62-3ca850e32bfb', '', false, 0.00, true, 21);
INSERT INTO productos VALUES (279, 36, 'Fiji Water 23.7oz (700 ml) Sports Cap - 12 Bottles', 'PRODUCT DETAILS
Designed for your active lifestyle
Slim, sleek shape made to fit everywhere from cup holders to treadmills
Case of 12 bottles (2 packs of 6 bottles)
700mL (23.7oz) Sports Cap bottles', 20.88, 'Fiji-Sport-Cap-700ml-12pk.png', '4846f35b-92ec-4570-9a07-817e00ce0f2a', '', false, 0.00, true, 21);
INSERT INTO productos VALUES (282, 36, 'S. Pellegrino Sparkling Natural Mineral Water 25.3 oz (750 ml) - 15 Glass bottles', 'About this item
Naturally filtered by the Italian Alps during a 30-year underground journey and bottled at the source, San Pellegrino Terme (Bergamo) Italy
Imported from Italy and embracing the Italian way of life
Convenient to keep on hand for dining and special occasions
Crisp and refreshing sparkling mineral water with a clean taste and refreshing with medium-size bubbles
Perfect for cleansing the palate and amplifying subtle flavors', 18.30, 'S.Pellegrino-750ml-15pk.png', 'e07a179b-df0a-4e4e-9171-dc3d858d4ede', '', false, 0.00, true, 21);
INSERT INTO productos VALUES (277, 37, 'Tide Powder Laundry Detergent Original 15 Loads 20 oz - 6pk', 'Tide Powder Laundry Detergent, Original, 15 Loads 20 oz:
1 scoop of Tide = 10 scoops of detergent with Oxi
Attacks Even 7 Day-Old Stains
Acti-Lift Crystals
10x the cleaning power - 1 dose of Tide HE Turbo Clean in quick cycle vs. 10 doses of the next leading liquid HE compatible detergent in normal cycle
HE Turbo technology gives you 10x cleaning power in the quick cycle vs. next leading detergent in normal cycle
Specially designed for regular and high efficiency machines - #1 recommended by washing machine manufacturers based on co-marketing agreements', 28.74, 'Tide-Powder-20oz.png', '408f0f12-7650-4196-abf8-5a6167c72956', '', false, 0.00, false, 42);
INSERT INTO productos VALUES (283, 36, 'Pepsi Soda 12 oz - 12pk', 'he bold, refreshing cola born in New Bern, NC in 1898 and still bottled in the USA.
The bold, refreshing cola born in New Bern, NC in 1898 and still bottled in the USA
Perfect for parties, meals, and celebrations big and small
Includes (12) 12 oz cans
150 calories per can
Ingredients:
Ingredients: CARBONATED WATER, HIGH FRUCTOSE CORN SYRUP, CARAMEL COLOR, SUGAR, PHOSPHORIC ACID, CAFFEINE, CITRIC ACID, NATURAL FLAVOR.', 4.10, 'Pepsi-12oz-12pk.png', '1b957be6-3231-4f98-8102-87c3fe1658c7', '', false, 0.00, true, 17);
INSERT INTO productos VALUES (284, 37, 'Palmolive Ultra Strength Dishwashing Liquid, Original 25oz - 9pk', 'DETAILS: • Instantly cuts through grease • Max strength formula (vs Palmolive Essential Clean original formula) • Tough on grease, soft on hands • Removes 24-hour stuck-on food • Concentrated dish liquid formula • Phosphate free • Fights odor • Residue free', 19.59, 'Palmolive-Original-28oz-9pk.png', '50ea01a1-68d1-4a9e-9bdd-30bd8315ea89', '', false, 0.00, true, 25);
INSERT INTO productos VALUES (285, 36, 'Zephyrhills 100% Natural Spring Water 1gal - 6pk', 'Zephyrhills 100% Natural Spring Water is water as nature intended and as your body wants it. It''s delicious, crisp, refreshing and supremely hydrating bottled water straight from carefully selected natural springs in Florida. The water is packed with naturally occurring minerals that give it a fresh, clean taste and mouthfeel.
Specifications
6 jugs - 1 gallon each
No calories
No sweeteners
No artificial colors or flavors
Net volume: 22.71 Liters (768 fluid ounces)', 6.98, 'zephyrhills-1gal-6pk.png', '44664e1d-ba1e-45c4-a788-eb31cb8e3570', '', false, 0.00, true, 21);
INSERT INTO productos VALUES (286, 36, 'Jupina Pineapple Soda 12oz - 24pk', 'Jupina soda offers tropical juice flavor with soda refreshment
Multipack includes four 6-packs of cans', 9.64, 'Jupina-24pk.png', 'a4864ba8-7155-407d-b39e-23fb68784cf4', '', false, 0.00, true, 17);
INSERT INTO productos VALUES (287, 36, 'Colombiana Kola Flavored Soda - 12oz - 24pk', 'Soda Colombiana Kola Flavored Soda:
Low fat
Very low sodium*NEW_LINE*
Ingredients:
Ingredients: CARBONATED WATER, HIGH FRUCTOSE CORN SYRUP, CITRIC ACID, NATURAL AND ARTIFICIAL FLAVORS, SODIUM BENZOATE (PRESERVATIVE) AND ARTIFICIAL COLORS (FD&C YELLOW 5, FD&C RED 40, FD&C BLUE 1).', 12.12, 'Kola-Colombiana-24pk.png', 'c644fabf-12ef-4b25-b20b-d5f4543e9eb3', '', false, 0.00, true, 17);


--
-- Name: productos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jfssibxl
--

SELECT pg_catalog.setval('productos_id_seq', 287, true);


--
-- Data for Name: subcategorias; Type: TABLE DATA; Schema: public; Owner: jfssibxl
--

INSERT INTO subcategorias VALUES (14, 38, 'Deodorants');
INSERT INTO subcategorias VALUES (15, 38, 'Hair Care');
INSERT INTO subcategorias VALUES (19, 36, 'Energy Drinks');
INSERT INTO subcategorias VALUES (18, 36, 'Sport Drinks');
INSERT INTO subcategorias VALUES (20, 36, 'Juice');
INSERT INTO subcategorias VALUES (21, 36, 'Bottled Water');
INSERT INTO subcategorias VALUES (22, 36, 'Peanut Butter & Chocolate');
INSERT INTO subcategorias VALUES (23, 36, 'Cofee Drink');
INSERT INTO subcategorias VALUES (24, 37, 'Paper Towels');
INSERT INTO subcategorias VALUES (25, 37, 'Dishwashing');
INSERT INTO subcategorias VALUES (26, 37, 'Tissue Paper');
INSERT INTO subcategorias VALUES (27, 36, 'Sugar');
INSERT INTO subcategorias VALUES (28, 37, 'Disinfectant Cleaners');
INSERT INTO subcategorias VALUES (29, 37, 'Bleach');
INSERT INTO subcategorias VALUES (30, 36, 'Salt');
INSERT INTO subcategorias VALUES (31, 36, 'Oil');
INSERT INTO subcategorias VALUES (32, 36, 'Canned & Powdered Milk');
INSERT INTO subcategorias VALUES (33, 39, 'Wireless Chargers');
INSERT INTO subcategorias VALUES (34, 39, 'Printer');
INSERT INTO subcategorias VALUES (35, 39, 'Ink & Toner');
INSERT INTO subcategorias VALUES (36, 37, 'Cleaning Supplies');
INSERT INTO subcategorias VALUES (37, 38, 'Body Lotion');
INSERT INTO subcategorias VALUES (38, 38, 'Bar Sop');
INSERT INTO subcategorias VALUES (39, 38, 'Shampoo');
INSERT INTO subcategorias VALUES (41, 37, 'Paper Napkins');
INSERT INTO subcategorias VALUES (42, 37, 'Powder Detergent');
INSERT INTO subcategorias VALUES (43, 37, 'Liquid Laundry Detergent');
INSERT INTO subcategorias VALUES (17, 36, 'Beverages');
INSERT INTO subcategorias VALUES (44, 36, 'Rice');


--
-- Name: subcategorias_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jfssibxl
--

SELECT pg_catalog.setval('subcategorias_id_seq', 44, true);


--
-- Data for Name: tasas; Type: TABLE DATA; Schema: public; Owner: jfssibxl
--

INSERT INTO tasas VALUES (7, '2020-06-04', 195000.00);


--
-- Name: tasas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jfssibxl
--

SELECT pg_catalog.setval('tasas_id_seq', 7, true);


--
-- Data for Name: tipos_movimientos; Type: TABLE DATA; Schema: public; Owner: jfssibxl
--

INSERT INTO tipos_movimientos VALUES (1, 'ENTRADA');
INSERT INTO tipos_movimientos VALUES (2, 'SALIDA');
INSERT INTO tipos_movimientos VALUES (3, 'AJUSTE');


--
-- Name: tipos_movimientos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jfssibxl
--

SELECT pg_catalog.setval('tipos_movimientos_id_seq', 1, false);


--
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: jfssibxl
--

INSERT INTO usuarios VALUES (106, NULL, 'V', 'Jose', 'JOSEFSANCHEZ2511@GMAIL.COM', '$2y$10$InNvzxX8dsqZ8V1rG6TQiuQgOmPDw4eyCrdA7cjwwDW69TxdyW5gq', '04246939253', '04246939253', 'Venezuela', '2020-11-06', 1, true, 'Programador', NULL, NULL, true, '25457921JOSE25805673', 'Sanchez', 'Coro', 'Falcon', '4101', '04246939253', 'SystecSGL.', true, true, 'Z3HIIRUBA31UQCS59IQ5D30LTGWD98W95QMJYO2JD67L1FU2PB5W5XSTPQOVV0WE9AG75HTM11LOURB5UO6CKGZFPOJW9F84C5E5');
INSERT INTO usuarios VALUES (95, NULL, 'V', 'ELIEZER', 'SOLTECNOLOGICAS@HOTMAIL.COM', '$2y$10$2uFrgYc4UG0Ov3imMiqKJuaDrnWG..YqFr2Jw12bBRYv7EAvAtyhK', '7863406298', '', '4768 NW 114th ave', '2020-10-29', 2, true, 'OWNER', NULL, NULL, true, '311244220', 'BUENO', 'Doral', 'Fl', '33178', '', 'Bueno & Diaz Services Corp', true, true, NULL);
INSERT INTO usuarios VALUES (80, NULL, 'V', 'Eliezer Bueno', 'BUENODIAZCORP@GMAIL.COM', '$2y$10$sp85Sh6JLMWSIbsdbiy.q.dfcmecmKfa5X6BRPnONpZ2tawm/I6GO', NULL, NULL, '4768 Nw 114th Ave Unit 102 Doral Fl 33178', '2020-09-27', 1, true, NULL, NULL, NULL, true, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, true, NULL);
INSERT INTO usuarios VALUES (126, NULL, 'V', 'QZgaCqLpe', 'DOHKEJVULKMPP', '$2y$10$T91VhHWZPfExF/mXsxwDOOIeqJbqAHx2nHhDl/O8mROj0PAzX9Sb6', 'LvNHyDnlzeKYqO', 'wYyimOlPKxkpufVS', 'lkUgqvmjyGXRTa', '2021-01-28', 2, true, 'IgcFaHPD', NULL, NULL, true, '3LNXpBw4Pu0t!', 'QbuYPvaizoKcAHS', 'boTxgRUNtVHL', 'JDZORljYGSKMyeCi', 'FdRqiXAJ', 'fjMCVKtnFzToZ', 'pWSPOAULVR', true, false, 'FGQQ61BAIJMIEUE26E9CGKGR493XXTS4P2CCQD2IK44F6ME24P13EUY3WQNSYII857SZE94LN5I6CFLR6KQUEX7O3L81OZDZ7WZG');
INSERT INTO usuarios VALUES (100, NULL, 'V', 'Doris ', 'FARMSEBAS@HOTMAIL.COM', '$2y$10$qEYb9YtspHZ/53YrHZlObO.tyhM.XmcaYCeDWD.74ZRrl4P1w2kA6', '3058904032', '', '8753 Sw 157 Ave ', '2020-11-05', 2, true, 'Farm stores 110', NULL, NULL, true, 'COMPRAS123*', 'Rodriguez', 'Miami', 'FL', '33193', '', 'Farm Sebas, LLC ', true, true, NULL);
INSERT INTO usuarios VALUES (102, NULL, 'V', 'Joao', 'MIAMIWEST.1306@FARMSTORES.COM', '$2y$10$0/o/UL2dI0sr8nx/plwsyedVmfFeZknqRy7qCf3nVz.MXdV/nKNN.', '3053352796', '', '7420 sw 57 ave', '2020-11-06', 2, true, 'CONVINIENCE STORE', NULL, NULL, true, 'VAQUITA1306', 'Da Silva', 'miami', 'fl', '33143', '3057831416', 'E & J BROTHERS GROUP LLC ( FS 1306)', true, true, NULL);
INSERT INTO usuarios VALUES (107, NULL, 'V', 'mildrem', 'MILDREMCARRERA1974@GMAIL.COM', '$2y$10$JErMCPpdqBtMyV5Nf7mS6.xUbkCzr19ZX5W.3ABhUf90iE9TKNNh.', '7863157476', '', '15000 sw 56 st', '2020-11-11', 2, true, 'manager', NULL, NULL, true, 'PONKY15', 'carrera', 'miami', 'fl', '33185', '', 'farm stores 104', true, true, '8M3FA78UQ3HRK7KHWIMXKK4ZEZN93NKKFVTT75KDWRE5QW5FG8YG1Q2K3FWGVC2YNFRNG2NOV0YIECOTEBU13IO5R7UYVY7CXNV7');
INSERT INTO usuarios VALUES (105, NULL, 'V', 'Fely', 'FGARCIAG97@GMAIL.COM', '$2y$10$cc903pCrldXE5ChuLxv.EOvytiAS2z31Q2nV48tGQ6X2GlCjtGEWa', '04121267875', '', 'Venezuela', '2020-11-06', 1, true, 'Programacion', NULL, NULL, true, 'FAGG', 'Garcia', 'Coro', 'Falcon', '4101', '', 'SystecSGL', true, true, '');
INSERT INTO usuarios VALUES (118, NULL, 'V', 'reysy', 'MIAMIEAST.0801@FARMSTORE.COM', '$2y$10$6Dpbxfclyath7x5uaBNa4OfCk9Akf7afs4CGvhAgQf6FlBzJkJ.jK', '7865879650', '', '3270 nw 7st', '2020-12-17', 2, true, 'farm store', NULL, NULL, true, '0801', 'ortega', 'miami', 'florida', '33125', '3054562177', 'farm store 801', true, false, '3E8FW0PTGLT2RZRQLJZSZJEFXG1504Q5AVG0QIIVP5223J3OD0YAJFJHRVA62FF655VLGYYH0C4VLM4QKWRDSLU6HDDKBMY6IBP8');
INSERT INTO usuarios VALUES (97, NULL, 'V', 'roxana', 'ROXANARDS98@GMAIL.COM', '$2y$10$A7EOG6ocRLOFxgTSd4x2uuxD6qu1vxy99LuEr65v52kwoCyC5l0Za', '7868036711', '', '10760 caribbean blvd', '2020-11-02', 2, false, 'farm store', NULL, NULL, true, 'Roxana.98', 'rodriguez', 'cutler bay ', 'fl', '33189', '7868036711', 'farm store ', true, true, NULL);
INSERT INTO usuarios VALUES (96, NULL, 'V', 'gaby rauseo', 'RYASTORELLC@GMAIL.COM', '$2y$10$AsVr021v8M.dz5yz8lMGSuFGXLbFlPsB8RIRlgsHCiTipGcJkvycO', '3059341670', '', '9601sw 160th street', '2020-10-31', 2, false, 'Dedicated to selling detail products', NULL, NULL, true, '251160', 'vaquita2407', 'Miami', 'FL', '33157', '7862503045', 'Farm Store', true, true, NULL);
INSERT INTO usuarios VALUES (98, NULL, 'V', 'DARLYN', 'FORTUNDARLYN@GMAIL.COM', '$2y$10$3Hw/Q/zK3wHgPxi.sJoXlO5nB3S1tr1bW5N5shkuhLf0RRd16w/u.', '7864864963', '', '20191 OLD CUTLER BAY ', '2020-11-03', 2, false, 'MANAGER', NULL, NULL, true, 'FS0106', 'FORTUN', 'MIAMI', 'FL', '33189', '7864864963', 'FARM STORE 106', true, true, NULL);


--
-- Name: usuarios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jfssibxl
--

SELECT pg_catalog.setval('usuarios_id_seq', 128, true);


--
-- Name: bancos_pkey; Type: CONSTRAINT; Schema: public; Owner: jfssibxl; Tablespace: 
--

ALTER TABLE ONLY bancos
    ADD CONSTRAINT bancos_pkey PRIMARY KEY (id);


--
-- Name: bancos_usa_pkey; Type: CONSTRAINT; Schema: public; Owner: jfssibxl; Tablespace: 
--

ALTER TABLE ONLY bancos_usa
    ADD CONSTRAINT bancos_usa_pkey PRIMARY KEY (id);


--
-- Name: carrito_pkey; Type: CONSTRAINT; Schema: public; Owner: jfssibxl; Tablespace: 
--

ALTER TABLE ONLY carrito
    ADD CONSTRAINT carrito_pkey PRIMARY KEY (id);


--
-- Name: carrito_productos_pkey; Type: CONSTRAINT; Schema: public; Owner: jfssibxl; Tablespace: 
--

ALTER TABLE ONLY carrito_productos
    ADD CONSTRAINT carrito_productos_pkey PRIMARY KEY (id);


--
-- Name: clasificacion_pkey; Type: CONSTRAINT; Schema: public; Owner: jfssibxl; Tablespace: 
--

ALTER TABLE ONLY clasificacion
    ADD CONSTRAINT clasificacion_pkey PRIMARY KEY (id);


--
-- Name: company; Type: CONSTRAINT; Schema: public; Owner: jfssibxl; Tablespace: 
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT company UNIQUE (company);


--
-- Name: contactos_pkey; Type: CONSTRAINT; Schema: public; Owner: jfssibxl; Tablespace: 
--

ALTER TABLE ONLY contactos
    ADD CONSTRAINT contactos_pkey PRIMARY KEY (id);


--
-- Name: correo; Type: CONSTRAINT; Schema: public; Owner: jfssibxl; Tablespace: 
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT correo UNIQUE (correo);


--
-- Name: cuentas_pkey; Type: CONSTRAINT; Schema: public; Owner: jfssibxl; Tablespace: 
--

ALTER TABLE ONLY cuentas
    ADD CONSTRAINT cuentas_pkey PRIMARY KEY (id);


--
-- Name: estatus_pkey; Type: CONSTRAINT; Schema: public; Owner: jfssibxl; Tablespace: 
--

ALTER TABLE ONLY estatus
    ADD CONSTRAINT estatus_pkey PRIMARY KEY (id);


--
-- Name: grupos_pkey; Type: CONSTRAINT; Schema: public; Owner: jfssibxl; Tablespace: 
--

ALTER TABLE ONLY grupos
    ADD CONSTRAINT grupos_pkey PRIMARY KEY (id);


--
-- Name: motorizado_pkey; Type: CONSTRAINT; Schema: public; Owner: jfssibxl; Tablespace: 
--

ALTER TABLE ONLY motorizado
    ADD CONSTRAINT motorizado_pkey PRIMARY KEY (id);


--
-- Name: movimientos_pkey; Type: CONSTRAINT; Schema: public; Owner: jfssibxl; Tablespace: 
--

ALTER TABLE ONLY movimientos
    ADD CONSTRAINT movimientos_pkey PRIMARY KEY (id);


--
-- Name: municipios_pkey; Type: CONSTRAINT; Schema: public; Owner: jfssibxl; Tablespace: 
--

ALTER TABLE ONLY municipios
    ADD CONSTRAINT municipios_pkey PRIMARY KEY (id);


--
-- Name: parroquias_pkey; Type: CONSTRAINT; Schema: public; Owner: jfssibxl; Tablespace: 
--

ALTER TABLE ONLY parroquias
    ADD CONSTRAINT parroquias_pkey PRIMARY KEY (id);


--
-- Name: privilegios_pkey; Type: CONSTRAINT; Schema: public; Owner: jfssibxl; Tablespace: 
--

ALTER TABLE ONLY privilegios
    ADD CONSTRAINT privilegios_pkey PRIMARY KEY (id);


--
-- Name: productos_pkey; Type: CONSTRAINT; Schema: public; Owner: jfssibxl; Tablespace: 
--

ALTER TABLE ONLY productos
    ADD CONSTRAINT productos_pkey PRIMARY KEY (id);


--
-- Name: subcategorias_pkey; Type: CONSTRAINT; Schema: public; Owner: jfssibxl; Tablespace: 
--

ALTER TABLE ONLY subcategorias
    ADD CONSTRAINT subcategorias_pkey PRIMARY KEY (id);


--
-- Name: tasas_pkey; Type: CONSTRAINT; Schema: public; Owner: jfssibxl; Tablespace: 
--

ALTER TABLE ONLY tasas
    ADD CONSTRAINT tasas_pkey PRIMARY KEY (id);


--
-- Name: tipos_movimientos_pkey; Type: CONSTRAINT; Schema: public; Owner: jfssibxl; Tablespace: 
--

ALTER TABLE ONLY tipos_movimientos
    ADD CONSTRAINT tipos_movimientos_pkey PRIMARY KEY (id);


--
-- Name: unico; Type: CONSTRAINT; Schema: public; Owner: jfssibxl; Tablespace: 
--

ALTER TABLE ONLY estatus
    ADD CONSTRAINT unico UNIQUE (denominacion);


--
-- Name: usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: jfssibxl; Tablespace: 
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (id);


--
-- Name: carrito_estatus_fkey; Type: FK CONSTRAINT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY carrito
    ADD CONSTRAINT carrito_estatus_fkey FOREIGN KEY (estatus) REFERENCES estatus(id);


--
-- Name: carrito_id_cuenta_fkey; Type: FK CONSTRAINT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY carrito
    ADD CONSTRAINT carrito_id_cuenta_fkey FOREIGN KEY (id_cuenta) REFERENCES cuentas(id);


--
-- Name: carrito_id_usuario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY carrito
    ADD CONSTRAINT carrito_id_usuario_fkey FOREIGN KEY (id_usuario) REFERENCES usuarios(id);


--
-- Name: carrito_productos_id_carrito_fkey; Type: FK CONSTRAINT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY carrito_productos
    ADD CONSTRAINT carrito_productos_id_carrito_fkey FOREIGN KEY (id_carrito) REFERENCES carrito(id);


--
-- Name: carrito_productos_id_producto_fkey; Type: FK CONSTRAINT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY carrito_productos
    ADD CONSTRAINT carrito_productos_id_producto_fkey FOREIGN KEY (id_producto) REFERENCES productos(id);


--
-- Name: clasificacion_id_carrito_fkey; Type: FK CONSTRAINT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY clasificacion
    ADD CONSTRAINT clasificacion_id_carrito_fkey FOREIGN KEY (id_carrito) REFERENCES carrito(id);


--
-- Name: cuentas_banco_fkey; Type: FK CONSTRAINT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY cuentas
    ADD CONSTRAINT cuentas_banco_fkey FOREIGN KEY (banco) REFERENCES bancos(id);


--
-- Name: cuentas_id_usuario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY cuentas
    ADD CONSTRAINT cuentas_id_usuario_fkey FOREIGN KEY (id_usuario) REFERENCES usuarios(id);


--
-- Name: movimientos_id_carrito_fkey; Type: FK CONSTRAINT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY movimientos
    ADD CONSTRAINT movimientos_id_carrito_fkey FOREIGN KEY (id_carrito) REFERENCES carrito(id);


--
-- Name: movimientos_id_producto_fkey; Type: FK CONSTRAINT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY movimientos
    ADD CONSTRAINT movimientos_id_producto_fkey FOREIGN KEY (id_producto) REFERENCES productos(id);


--
-- Name: movimientos_tipo_movimiento_fkey; Type: FK CONSTRAINT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY movimientos
    ADD CONSTRAINT movimientos_tipo_movimiento_fkey FOREIGN KEY (tipo_movimiento) REFERENCES tipos_movimientos(id);


--
-- Name: parroquias_id_municipio_fkey; Type: FK CONSTRAINT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY parroquias
    ADD CONSTRAINT parroquias_id_municipio_fkey FOREIGN KEY (id_municipio) REFERENCES municipios(id);


--
-- Name: productos_id_grupo_fkey; Type: FK CONSTRAINT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY productos
    ADD CONSTRAINT productos_id_grupo_fkey FOREIGN KEY (id_grupo) REFERENCES grupos(id);


--
-- Name: productos_id_subcategoria_fkey; Type: FK CONSTRAINT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY productos
    ADD CONSTRAINT productos_id_subcategoria_fkey FOREIGN KEY (id_subcategoria) REFERENCES subcategorias(id);


--
-- Name: subcategorias_id_grupos_fkey; Type: FK CONSTRAINT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY subcategorias
    ADD CONSTRAINT subcategorias_id_grupos_fkey FOREIGN KEY (id_grupos) REFERENCES grupos(id);


--
-- Name: usuarios_privilegio_fkey; Type: FK CONSTRAINT; Schema: public; Owner: jfssibxl
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT usuarios_privilegio_fkey FOREIGN KEY (privilegio) REFERENCES privilegios(id);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- Name: bancos; Type: ACL; Schema: public; Owner: jfssibxl
--

REVOKE ALL ON TABLE bancos FROM PUBLIC;
REVOKE ALL ON TABLE bancos FROM jfssibxl;
GRANT ALL ON TABLE bancos TO jfssibxl;
GRANT ALL ON TABLE bancos TO jfssibxl_eliecer;


--
-- Name: bancos_usa; Type: ACL; Schema: public; Owner: jfssibxl
--

REVOKE ALL ON TABLE bancos_usa FROM PUBLIC;
REVOKE ALL ON TABLE bancos_usa FROM jfssibxl;
GRANT ALL ON TABLE bancos_usa TO jfssibxl;
GRANT ALL ON TABLE bancos_usa TO jfssibxl_eliecer;


--
-- Name: carrito; Type: ACL; Schema: public; Owner: jfssibxl
--

REVOKE ALL ON TABLE carrito FROM PUBLIC;
REVOKE ALL ON TABLE carrito FROM jfssibxl;
GRANT ALL ON TABLE carrito TO jfssibxl;
GRANT ALL ON TABLE carrito TO jfssibxl_eliecer;


--
-- Name: carrito_productos; Type: ACL; Schema: public; Owner: jfssibxl
--

REVOKE ALL ON TABLE carrito_productos FROM PUBLIC;
REVOKE ALL ON TABLE carrito_productos FROM jfssibxl;
GRANT ALL ON TABLE carrito_productos TO jfssibxl;
GRANT ALL ON TABLE carrito_productos TO jfssibxl_eliecer;


--
-- Name: clasificacion; Type: ACL; Schema: public; Owner: jfssibxl
--

REVOKE ALL ON TABLE clasificacion FROM PUBLIC;
REVOKE ALL ON TABLE clasificacion FROM jfssibxl;
GRANT ALL ON TABLE clasificacion TO jfssibxl;
GRANT ALL ON TABLE clasificacion TO jfssibxl_eliecer;


--
-- Name: contactos; Type: ACL; Schema: public; Owner: jfssibxl
--

REVOKE ALL ON TABLE contactos FROM PUBLIC;
REVOKE ALL ON TABLE contactos FROM jfssibxl;
GRANT ALL ON TABLE contactos TO jfssibxl;
GRANT ALL ON TABLE contactos TO jfssibxl_eliecer;


--
-- Name: cuentas; Type: ACL; Schema: public; Owner: jfssibxl
--

REVOKE ALL ON TABLE cuentas FROM PUBLIC;
REVOKE ALL ON TABLE cuentas FROM jfssibxl;
GRANT ALL ON TABLE cuentas TO jfssibxl;
GRANT ALL ON TABLE cuentas TO jfssibxl_eliecer;


--
-- Name: estatus; Type: ACL; Schema: public; Owner: jfssibxl
--

REVOKE ALL ON TABLE estatus FROM PUBLIC;
REVOKE ALL ON TABLE estatus FROM jfssibxl;
GRANT ALL ON TABLE estatus TO jfssibxl;
GRANT ALL ON TABLE estatus TO jfssibxl_eliecer;


--
-- Name: grupos; Type: ACL; Schema: public; Owner: jfssibxl
--

REVOKE ALL ON TABLE grupos FROM PUBLIC;
REVOKE ALL ON TABLE grupos FROM jfssibxl;
GRANT ALL ON TABLE grupos TO jfssibxl;
GRANT ALL ON TABLE grupos TO jfssibxl_eliecer;


--
-- Name: motorizado; Type: ACL; Schema: public; Owner: jfssibxl
--

REVOKE ALL ON TABLE motorizado FROM PUBLIC;
REVOKE ALL ON TABLE motorizado FROM jfssibxl;
GRANT ALL ON TABLE motorizado TO jfssibxl;
GRANT ALL ON TABLE motorizado TO jfssibxl_eliecer;


--
-- Name: movimientos; Type: ACL; Schema: public; Owner: jfssibxl
--

REVOKE ALL ON TABLE movimientos FROM PUBLIC;
REVOKE ALL ON TABLE movimientos FROM jfssibxl;
GRANT ALL ON TABLE movimientos TO jfssibxl;
GRANT ALL ON TABLE movimientos TO jfssibxl_eliecer;


--
-- Name: municipios; Type: ACL; Schema: public; Owner: jfssibxl
--

REVOKE ALL ON TABLE municipios FROM PUBLIC;
REVOKE ALL ON TABLE municipios FROM jfssibxl;
GRANT ALL ON TABLE municipios TO jfssibxl;
GRANT ALL ON TABLE municipios TO jfssibxl_eliecer;


--
-- Name: parroquias; Type: ACL; Schema: public; Owner: jfssibxl
--

REVOKE ALL ON TABLE parroquias FROM PUBLIC;
REVOKE ALL ON TABLE parroquias FROM jfssibxl;
GRANT ALL ON TABLE parroquias TO jfssibxl;
GRANT ALL ON TABLE parroquias TO jfssibxl_eliecer;


--
-- Name: privilegios; Type: ACL; Schema: public; Owner: jfssibxl
--

REVOKE ALL ON TABLE privilegios FROM PUBLIC;
REVOKE ALL ON TABLE privilegios FROM jfssibxl;
GRANT ALL ON TABLE privilegios TO jfssibxl;
GRANT ALL ON TABLE privilegios TO jfssibxl_eliecer;


--
-- Name: productos; Type: ACL; Schema: public; Owner: jfssibxl
--

REVOKE ALL ON TABLE productos FROM PUBLIC;
REVOKE ALL ON TABLE productos FROM jfssibxl;
GRANT ALL ON TABLE productos TO jfssibxl;
GRANT ALL ON TABLE productos TO jfssibxl_eliecer;


--
-- Name: subcategorias; Type: ACL; Schema: public; Owner: jfssibxl
--

REVOKE ALL ON TABLE subcategorias FROM PUBLIC;
REVOKE ALL ON TABLE subcategorias FROM jfssibxl;
GRANT ALL ON TABLE subcategorias TO jfssibxl;
GRANT ALL ON TABLE subcategorias TO jfssibxl_eliecer;


--
-- Name: tasas; Type: ACL; Schema: public; Owner: jfssibxl
--

REVOKE ALL ON TABLE tasas FROM PUBLIC;
REVOKE ALL ON TABLE tasas FROM jfssibxl;
GRANT ALL ON TABLE tasas TO jfssibxl;
GRANT ALL ON TABLE tasas TO jfssibxl_eliecer;


--
-- Name: tipos_movimientos; Type: ACL; Schema: public; Owner: jfssibxl
--

REVOKE ALL ON TABLE tipos_movimientos FROM PUBLIC;
REVOKE ALL ON TABLE tipos_movimientos FROM jfssibxl;
GRANT ALL ON TABLE tipos_movimientos TO jfssibxl;
GRANT ALL ON TABLE tipos_movimientos TO jfssibxl_eliecer;


--
-- Name: usuarios; Type: ACL; Schema: public; Owner: jfssibxl
--

REVOKE ALL ON TABLE usuarios FROM PUBLIC;
REVOKE ALL ON TABLE usuarios FROM jfssibxl;
GRANT ALL ON TABLE usuarios TO jfssibxl;
GRANT ALL ON TABLE usuarios TO jfssibxl_eliecer;


--
-- PostgreSQL database dump complete
--

