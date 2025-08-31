--
-- PostgreSQL database dump
--

\restrict yViVJajBT7fxCWDPveEdU9rtBjIwD8NTtjRMrOxwg6DajyjuPQ8Zoc1ymDhbEDU

-- Dumped from database version 17.6
-- Dumped by pg_dump version 17.6

-- Started on 2025-08-31 21:56:28

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET transaction_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 218 (class 1259 OID 16434)
-- Name: departemen; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.departemen (
    id integer NOT NULL,
    nama character varying(100) NOT NULL
);


ALTER TABLE public.departemen OWNER TO postgres;

--
-- TOC entry 217 (class 1259 OID 16433)
-- Name: departemen_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.departemen_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.departemen_id_seq OWNER TO postgres;

--
-- TOC entry 4933 (class 0 OID 0)
-- Dependencies: 217
-- Name: departemen_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.departemen_id_seq OWNED BY public.departemen.id;


--
-- TOC entry 224 (class 1259 OID 16469)
-- Name: logbook; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.logbook (
    id integer NOT NULL,
    id_internship integer NOT NULL,
    id_projek integer NOT NULL,
    deskripsi text,
    start_date date,
    end_date date,
    title character varying
);


ALTER TABLE public.logbook OWNER TO postgres;

--
-- TOC entry 223 (class 1259 OID 16468)
-- Name: logbook_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.logbook_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.logbook_id_seq OWNER TO postgres;

--
-- TOC entry 4934 (class 0 OID 0)
-- Dependencies: 223
-- Name: logbook_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.logbook_id_seq OWNED BY public.logbook.id;


--
-- TOC entry 220 (class 1259 OID 16441)
-- Name: master_internship; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.master_internship (
    id integer NOT NULL,
    id_dept integer NOT NULL,
    nama character varying(100) NOT NULL,
    email character varying(100) NOT NULL,
    no_badge character varying(50),
    alamat_pt text,
    start_date date,
    end_date date
);


ALTER TABLE public.master_internship OWNER TO postgres;

--
-- TOC entry 219 (class 1259 OID 16440)
-- Name: master_internship_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.master_internship_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.master_internship_id_seq OWNER TO postgres;

--
-- TOC entry 4935 (class 0 OID 0)
-- Dependencies: 219
-- Name: master_internship_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.master_internship_id_seq OWNED BY public.master_internship.id;


--
-- TOC entry 222 (class 1259 OID 16457)
-- Name: projek; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.projek (
    id integer NOT NULL,
    id_internship integer NOT NULL,
    nama character varying(100) NOT NULL,
    start_date date,
    end_date date
);


ALTER TABLE public.projek OWNER TO postgres;

--
-- TOC entry 221 (class 1259 OID 16456)
-- Name: projek_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.projek_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.projek_id_seq OWNER TO postgres;

--
-- TOC entry 4936 (class 0 OID 0)
-- Dependencies: 221
-- Name: projek_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.projek_id_seq OWNED BY public.projek.id;


--
-- TOC entry 4757 (class 2604 OID 16437)
-- Name: departemen id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.departemen ALTER COLUMN id SET DEFAULT nextval('public.departemen_id_seq'::regclass);


--
-- TOC entry 4760 (class 2604 OID 16472)
-- Name: logbook id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.logbook ALTER COLUMN id SET DEFAULT nextval('public.logbook_id_seq'::regclass);


--
-- TOC entry 4758 (class 2604 OID 16444)
-- Name: master_internship id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.master_internship ALTER COLUMN id SET DEFAULT nextval('public.master_internship_id_seq'::regclass);


--
-- TOC entry 4759 (class 2604 OID 16460)
-- Name: projek id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.projek ALTER COLUMN id SET DEFAULT nextval('public.projek_id_seq'::regclass);


--
-- TOC entry 4921 (class 0 OID 16434)
-- Dependencies: 218
-- Data for Name: departemen; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.departemen (id, nama) FROM stdin;
1	Departemen 1
2	Departemen 2
3	Departemen 3
4	Departemen 4
5	Departemen 5
6	Departemen 6
7	Departemen 7
8	Departemen 8
9	Departemen 9
10	Departemen 10
11	Departemen 11
12	Departemen 12
13	Departemen 13
14	Departemen 14
15	Departemen 15
16	Departemen 16
17	Departemen 17
18	Departemen 18
19	Departemen 19
20	Departemen 20
21	Departemen 21
22	Departemen 22
23	Departemen 23
24	Departemen 24
25	Departemen 25
26	Departemen 26
27	Departemen 27
28	Departemen 28
29	Departemen 29
30	Departemen 30
31	Departemen 31
32	Departemen 32
33	Departemen 33
34	Departemen 34
35	Departemen 35
36	Departemen 36
37	Departemen 37
38	Departemen 38
39	Departemen 39
40	Departemen 40
41	Departemen 41
42	Departemen 42
43	Departemen 43
44	Departemen 44
45	Departemen 45
46	Departemen 46
47	Departemen 47
48	Departemen 48
49	Departemen 49
50	Departemen 50
\.


--
-- TOC entry 4927 (class 0 OID 16469)
-- Dependencies: 224
-- Data for Name: logbook; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.logbook (id, id_internship, id_projek, deskripsi, start_date, end_date, title) FROM stdin;
3	3	2	Logbook kegiatan 3	2025-01-03	2025-01-04	\N
4	4	2	Logbook kegiatan 4	2025-01-04	2025-01-05	\N
5	5	3	Logbook kegiatan 5	2025-01-05	2025-01-06	\N
6	6	3	Logbook kegiatan 6	2025-01-06	2025-01-07	\N
7	7	4	Logbook kegiatan 7	2025-01-07	2025-01-08	\N
8	8	4	Logbook kegiatan 8	2025-01-08	2025-01-09	\N
9	9	5	Logbook kegiatan 9	2025-01-09	2025-01-10	\N
10	10	5	Logbook kegiatan 10	2025-01-10	2025-01-11	\N
12	2	6	Logbook kegiatan 12	2025-01-12	2025-01-13	\N
13	3	7	Logbook kegiatan 13	2025-01-13	2025-01-14	\N
14	4	7	Logbook kegiatan 14	2025-01-14	2025-01-15	\N
15	5	8	Logbook kegiatan 15	2025-01-15	2025-01-16	\N
16	6	8	Logbook kegiatan 16	2025-01-16	2025-01-17	\N
17	7	9	Logbook kegiatan 17	2025-01-17	2025-01-18	\N
18	8	9	Logbook kegiatan 18	2025-01-18	2025-01-19	\N
19	9	10	Logbook kegiatan 19	2025-01-19	2025-01-20	\N
20	10	10	Logbook kegiatan 20	2025-01-20	2025-01-21	\N
22	2	2	Logbook kegiatan 22	2025-01-22	2025-01-23	\N
23	3	3	Logbook kegiatan 23	2025-01-23	2025-01-24	\N
24	4	4	Logbook kegiatan 24	2025-01-24	2025-01-25	\N
25	5	5	Logbook kegiatan 25	2025-01-25	2025-01-26	\N
26	6	6	Logbook kegiatan 26	2025-01-26	2025-01-27	\N
27	7	7	Logbook kegiatan 27	2025-01-27	2025-01-28	\N
28	8	8	Logbook kegiatan 28	2025-01-28	2025-01-29	\N
29	9	9	Logbook kegiatan 29	2025-01-29	2025-01-30	\N
30	10	10	Logbook kegiatan 30	2025-01-30	2025-01-31	\N
32	2	3	Logbook kegiatan 32	2025-01-02	2025-01-03	\N
33	3	4	Logbook kegiatan 33	2025-01-03	2025-01-04	\N
34	4	5	Logbook kegiatan 34	2025-01-04	2025-01-05	\N
35	5	6	Logbook kegiatan 35	2025-01-05	2025-01-06	\N
36	6	7	Logbook kegiatan 36	2025-01-06	2025-01-07	\N
37	7	8	Logbook kegiatan 37	2025-01-07	2025-01-08	\N
38	8	9	Logbook kegiatan 38	2025-01-08	2025-01-09	\N
39	9	10	Logbook kegiatan 39	2025-01-09	2025-01-10	\N
40	10	1	Logbook kegiatan 40	2025-01-10	2025-01-11	\N
42	2	4	Logbook kegiatan 42	2025-01-12	2025-01-13	\N
43	3	5	Logbook kegiatan 43	2025-01-13	2025-01-14	\N
44	4	6	Logbook kegiatan 44	2025-01-14	2025-01-15	\N
45	5	7	Logbook kegiatan 45	2025-01-15	2025-01-16	\N
46	6	8	Logbook kegiatan 46	2025-01-16	2025-01-17	\N
47	7	9	Logbook kegiatan 47	2025-01-17	2025-01-18	\N
48	8	10	Logbook kegiatan 48	2025-01-18	2025-01-19	\N
49	9	1	Logbook kegiatan 49	2025-01-19	2025-01-20	\N
50	10	2	Logbook kegiatan 50	2025-01-20	2025-01-21	\N
1	1	1	Logbook kegiatan 1	2025-01-01	2025-01-02	w1 ini p1
2	1	1	Logbook kegiatan 2	2025-01-02	2025-01-03	 W2 ini p1
21	1	1	Logbook kegiatan 21	2025-01-21	2025-01-22	w3 ini p1
31	1	2	Logbook kegiatan 31	2025-01-01	2025-01-02	w1 ini p2
41	1	3	Logbook kegiatan 41	2025-01-11	2025-01-12	w1 ini p3
11	1	6	Logbook kegiatan 11	2025-01-11	2025-01-12	w1 ini p6
\.


--
-- TOC entry 4923 (class 0 OID 16441)
-- Dependencies: 220
-- Data for Name: master_internship; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.master_internship (id, id_dept, nama, email, no_badge, alamat_pt, start_date, end_date) FROM stdin;
1	1	Intern 1	intern1@mail.com	B001	Batam	2025-01-01	2025-06-01
2	2	Intern 2	intern2@mail.com	B002	Jakarta	2025-01-02	2025-06-02
3	3	Intern 3	intern3@mail.com	B003	Surabaya	2025-01-03	2025-06-03
4	4	Intern 4	intern4@mail.com	B004	Medan	2025-01-04	2025-06-04
5	5	Intern 5	intern5@mail.com	B005	Bandung	2025-01-05	2025-06-05
6	6	Intern 6	intern6@mail.com	B006	Semarang	2025-01-06	2025-06-06
7	7	Intern 7	intern7@mail.com	B007	Makassar	2025-01-07	2025-06-07
8	8	Intern 8	intern8@mail.com	B008	Palembang	2025-01-08	2025-06-08
9	9	Intern 9	intern9@mail.com	B009	Malang	2025-01-09	2025-06-09
10	10	Intern 10	intern10@mail.com	B010	Depok	2025-01-10	2025-06-10
11	11	Intern 11	intern11@mail.com	B011	Bogor	2025-01-11	2025-06-11
12	12	Intern 12	intern12@mail.com	B012	Padang	2025-01-12	2025-06-12
13	13	Intern 13	intern13@mail.com	B013	Bali	2025-01-13	2025-06-13
14	14	Intern 14	intern14@mail.com	B014	Pontianak	2025-01-14	2025-06-14
15	15	Intern 15	intern15@mail.com	B015	Balikpapan	2025-01-15	2025-06-15
16	16	Intern 16	intern16@mail.com	B016	Manado	2025-01-16	2025-06-16
17	17	Intern 17	intern17@mail.com	B017	Banjarmasin	2025-01-17	2025-06-17
18	18	Intern 18	intern18@mail.com	B018	Cirebon	2025-01-18	2025-06-18
19	19	Intern 19	intern19@mail.com	B019	Tangerang	2025-01-19	2025-06-19
20	20	Intern 20	intern20@mail.com	B020	Bekasi	2025-01-20	2025-06-20
21	21	Intern 21	intern21@mail.com	B021	Solo	2025-01-21	2025-06-21
22	22	Intern 22	intern22@mail.com	B022	Magelang	2025-01-22	2025-06-22
23	23	Intern 23	intern23@mail.com	B023	Kupang	2025-01-23	2025-06-23
24	24	Intern 24	intern24@mail.com	B024	Pekanbaru	2025-01-24	2025-06-24
25	25	Intern 25	intern25@mail.com	B025	Batam	2025-01-25	2025-06-25
26	26	Intern 26	intern26@mail.com	B026	Jakarta	2025-01-26	2025-06-26
27	27	Intern 27	intern27@mail.com	B027	Surabaya	2025-01-27	2025-06-27
28	28	Intern 28	intern28@mail.com	B028	Medan	2025-01-28	2025-06-28
29	29	Intern 29	intern29@mail.com	B029	Bandung	2025-01-29	2025-06-29
30	30	Intern 30	intern30@mail.com	B030	Semarang	2025-01-30	2025-06-30
31	31	Intern 31	intern31@mail.com	B031	Makassar	2025-01-31	2025-06-30
32	32	Intern 32	intern32@mail.com	B032	Palembang	2025-02-01	2025-07-01
33	33	Intern 33	intern33@mail.com	B033	Malang	2025-02-02	2025-07-02
34	34	Intern 34	intern34@mail.com	B034	Depok	2025-02-03	2025-07-03
35	35	Intern 35	intern35@mail.com	B035	Bogor	2025-02-04	2025-07-04
36	36	Intern 36	intern36@mail.com	B036	Padang	2025-02-05	2025-07-05
37	37	Intern 37	intern37@mail.com	B037	Bali	2025-02-06	2025-07-06
38	38	Intern 38	intern38@mail.com	B038	Pontianak	2025-02-07	2025-07-07
39	39	Intern 39	intern39@mail.com	B039	Balikpapan	2025-02-08	2025-07-08
40	40	Intern 40	intern40@mail.com	B040	Manado	2025-02-09	2025-07-09
41	41	Intern 41	intern41@mail.com	B041	Banjarmasin	2025-02-10	2025-07-10
42	42	Intern 42	intern42@mail.com	B042	Cirebon	2025-02-11	2025-07-11
43	43	Intern 43	intern43@mail.com	B043	Tangerang	2025-02-12	2025-07-12
44	44	Intern 44	intern44@mail.com	B044	Bekasi	2025-02-13	2025-07-13
45	45	Intern 45	intern45@mail.com	B045	Solo	2025-02-14	2025-07-14
46	46	Intern 46	intern46@mail.com	B046	Magelang	2025-02-15	2025-07-15
47	47	Intern 47	intern47@mail.com	B047	Kupang	2025-02-16	2025-07-16
48	48	Intern 48	intern48@mail.com	B048	Pekanbaru	2025-02-17	2025-07-17
49	49	Intern 49	intern49@mail.com	B049	Batam	2025-02-18	2025-07-18
50	50	Intern 50	intern50@mail.com	B050	Jakarta	2025-02-19	2025-07-19
\.


--
-- TOC entry 4925 (class 0 OID 16457)
-- Dependencies: 222
-- Data for Name: projek; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.projek (id, id_internship, nama, start_date, end_date) FROM stdin;
1	1	Projek 1	2025-01-01	2025-03-01
3	3	Projek 3	2025-01-03	2025-03-03
4	4	Projek 4	2025-01-04	2025-03-04
5	5	Projek 5	2025-01-05	2025-03-05
6	6	Projek 6	2025-01-06	2025-03-06
7	7	Projek 7	2025-01-07	2025-03-07
8	8	Projek 8	2025-01-08	2025-03-08
9	9	Projek 9	2025-01-09	2025-03-09
10	10	Projek 10	2025-01-10	2025-03-10
11	11	Projek 11	2025-01-11	2025-03-11
12	12	Projek 12	2025-01-12	2025-03-12
13	13	Projek 13	2025-01-13	2025-03-13
14	14	Projek 14	2025-01-14	2025-03-14
15	15	Projek 15	2025-01-15	2025-03-15
16	16	Projek 16	2025-01-16	2025-03-16
17	17	Projek 17	2025-01-17	2025-03-17
18	18	Projek 18	2025-01-18	2025-03-18
19	19	Projek 19	2025-01-19	2025-03-19
20	20	Projek 20	2025-01-20	2025-03-20
21	21	Projek 21	2025-01-21	2025-03-21
22	22	Projek 22	2025-01-22	2025-03-22
23	23	Projek 23	2025-01-23	2025-03-23
24	24	Projek 24	2025-01-24	2025-03-24
25	25	Projek 25	2025-01-25	2025-03-25
26	26	Projek 26	2025-01-26	2025-03-26
27	27	Projek 27	2025-01-27	2025-03-27
28	28	Projek 28	2025-01-28	2025-03-28
29	29	Projek 29	2025-01-29	2025-03-29
30	30	Projek 30	2025-01-30	2025-03-30
31	31	Projek 31	2025-01-31	2025-03-31
32	32	Projek 32	2025-02-01	2025-04-01
33	33	Projek 33	2025-02-02	2025-04-02
34	34	Projek 34	2025-02-03	2025-04-03
35	35	Projek 35	2025-02-04	2025-04-04
36	36	Projek 36	2025-02-05	2025-04-05
37	37	Projek 37	2025-02-06	2025-04-06
38	38	Projek 38	2025-02-07	2025-04-07
39	39	Projek 39	2025-02-08	2025-04-08
40	40	Projek 40	2025-02-09	2025-04-09
41	41	Projek 41	2025-02-10	2025-04-10
42	42	Projek 42	2025-02-11	2025-04-11
43	43	Projek 43	2025-02-12	2025-04-12
44	44	Projek 44	2025-02-13	2025-04-13
45	45	Projek 45	2025-02-14	2025-04-14
46	46	Projek 46	2025-02-15	2025-04-15
47	47	Projek 47	2025-02-16	2025-04-16
48	48	Projek 48	2025-02-17	2025-04-17
49	49	Projek 49	2025-02-18	2025-04-18
50	50	Projek 50	2025-02-19	2025-04-19
2	1	Projek 2	2025-01-02	2025-03-02
\.


--
-- TOC entry 4937 (class 0 OID 0)
-- Dependencies: 217
-- Name: departemen_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.departemen_id_seq', 1, false);


--
-- TOC entry 4938 (class 0 OID 0)
-- Dependencies: 223
-- Name: logbook_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.logbook_id_seq', 50, true);


--
-- TOC entry 4939 (class 0 OID 0)
-- Dependencies: 219
-- Name: master_internship_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.master_internship_id_seq', 1, false);


--
-- TOC entry 4940 (class 0 OID 0)
-- Dependencies: 221
-- Name: projek_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.projek_id_seq', 1, false);


--
-- TOC entry 4762 (class 2606 OID 16439)
-- Name: departemen departemen_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.departemen
    ADD CONSTRAINT departemen_pkey PRIMARY KEY (id);


--
-- TOC entry 4770 (class 2606 OID 16476)
-- Name: logbook logbook_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.logbook
    ADD CONSTRAINT logbook_pkey PRIMARY KEY (id);


--
-- TOC entry 4764 (class 2606 OID 16450)
-- Name: master_internship master_internship_email_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.master_internship
    ADD CONSTRAINT master_internship_email_key UNIQUE (email);


--
-- TOC entry 4766 (class 2606 OID 16448)
-- Name: master_internship master_internship_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.master_internship
    ADD CONSTRAINT master_internship_pkey PRIMARY KEY (id);


--
-- TOC entry 4768 (class 2606 OID 16462)
-- Name: projek projek_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.projek
    ADD CONSTRAINT projek_pkey PRIMARY KEY (id);


--
-- TOC entry 4771 (class 2606 OID 16451)
-- Name: master_internship fk_internship_dept; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.master_internship
    ADD CONSTRAINT fk_internship_dept FOREIGN KEY (id_dept) REFERENCES public.departemen(id) ON DELETE CASCADE;


--
-- TOC entry 4773 (class 2606 OID 16477)
-- Name: logbook fk_logbook_internship; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.logbook
    ADD CONSTRAINT fk_logbook_internship FOREIGN KEY (id_internship) REFERENCES public.master_internship(id) ON DELETE CASCADE;


--
-- TOC entry 4774 (class 2606 OID 16482)
-- Name: logbook fk_logbook_projek; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.logbook
    ADD CONSTRAINT fk_logbook_projek FOREIGN KEY (id_projek) REFERENCES public.projek(id) ON DELETE CASCADE;


--
-- TOC entry 4772 (class 2606 OID 16463)
-- Name: projek fk_projek_internship; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.projek
    ADD CONSTRAINT fk_projek_internship FOREIGN KEY (id_internship) REFERENCES public.master_internship(id) ON DELETE CASCADE;


-- Completed on 2025-08-31 21:56:28

--
-- PostgreSQL database dump complete
--

\unrestrict yViVJajBT7fxCWDPveEdU9rtBjIwD8NTtjRMrOxwg6DajyjuPQ8Zoc1ymDhbEDU

