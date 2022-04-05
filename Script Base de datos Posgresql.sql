-- Database: dentidesk

-- DROP DATABASE dentidesk;

CREATE DATABASE dentidesk
    WITH 
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'es_CL.UTF-8'
    LC_CTYPE = 'es_CL.UTF-8'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1;

-- Table: public.totales

-- DROP TABLE public.totales;

CREATE TABLE public.totales
(
    id integer NOT NULL DEFAULT nextval('totales_id_seq'::regclass),
    mes text COLLATE pg_catalog."default",
    anio text COLLATE pg_catalog."default",
    monto integer
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.totales
    OWNER to postgres;