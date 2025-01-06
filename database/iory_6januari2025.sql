--
-- PostgreSQL database dump
--

-- Dumped from database version 16.3
-- Dumped by pg_dump version 16.3

-- Started on 2025-01-06 11:33:07

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

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 222 (class 1259 OID 17261)
-- Name: article; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.article (
    article_id bigint NOT NULL,
    article_title character varying(50) NOT NULL,
    article_date date NOT NULL,
    article_content text NOT NULL
);


ALTER TABLE public.article OWNER TO postgres;

--
-- TOC entry 223 (class 1259 OID 17264)
-- Name: article_article_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.article_article_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.article_article_id_seq OWNER TO postgres;

--
-- TOC entry 4819 (class 0 OID 0)
-- Dependencies: 223
-- Name: article_article_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.article_article_id_seq OWNED BY public.article.article_id;


--
-- TOC entry 215 (class 1259 OID 17003)
-- Name: poetry; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.poetry (
    poe_id bigint NOT NULL,
    poe_date date NOT NULL,
    poe_title character varying(50) NOT NULL,
    poe_content text NOT NULL
);


ALTER TABLE public.poetry OWNER TO postgres;

--
-- TOC entry 216 (class 1259 OID 17008)
-- Name: poetry_poe_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.poetry_poe_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.poetry_poe_id_seq OWNER TO postgres;

--
-- TOC entry 4820 (class 0 OID 0)
-- Dependencies: 216
-- Name: poetry_poe_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.poetry_poe_id_seq OWNED BY public.poetry.poe_id;


--
-- TOC entry 217 (class 1259 OID 17009)
-- Name: story; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.story (
    st_id bigint NOT NULL,
    st_date date NOT NULL,
    st_title character varying(50) NOT NULL,
    st_content text NOT NULL
);


ALTER TABLE public.story OWNER TO postgres;

--
-- TOC entry 218 (class 1259 OID 17014)
-- Name: story_st_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.story_st_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.story_st_id_seq OWNER TO postgres;

--
-- TOC entry 4821 (class 0 OID 0)
-- Dependencies: 218
-- Name: story_st_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.story_st_id_seq OWNED BY public.story.st_id;


--
-- TOC entry 219 (class 1259 OID 17015)
-- Name: wiseword; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.wiseword (
    ww_id bigint NOT NULL,
    ww_date date NOT NULL,
    ww_title character varying(50) NOT NULL,
    ww_content text NOT NULL
);


ALTER TABLE public.wiseword OWNER TO postgres;

--
-- TOC entry 220 (class 1259 OID 17020)
-- Name: wiseword_ww_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.wiseword_ww_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.wiseword_ww_id_seq OWNER TO postgres;

--
-- TOC entry 4822 (class 0 OID 0)
-- Dependencies: 220
-- Name: wiseword_ww_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.wiseword_ww_id_seq OWNED BY public.wiseword.ww_id;


--
-- TOC entry 221 (class 1259 OID 17257)
-- Name: words_w_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.words_w_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.words_w_id_seq OWNER TO postgres;

--
-- TOC entry 4653 (class 2604 OID 17265)
-- Name: article article_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.article ALTER COLUMN article_id SET DEFAULT nextval('public.article_article_id_seq'::regclass);


--
-- TOC entry 4650 (class 2604 OID 17021)
-- Name: poetry poe_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.poetry ALTER COLUMN poe_id SET DEFAULT nextval('public.poetry_poe_id_seq'::regclass);


--
-- TOC entry 4651 (class 2604 OID 17022)
-- Name: story st_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.story ALTER COLUMN st_id SET DEFAULT nextval('public.story_st_id_seq'::regclass);


--
-- TOC entry 4652 (class 2604 OID 17023)
-- Name: wiseword ww_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.wiseword ALTER COLUMN ww_id SET DEFAULT nextval('public.wiseword_ww_id_seq'::regclass);


--
-- TOC entry 4812 (class 0 OID 17261)
-- Dependencies: 222
-- Data for Name: article; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.article (article_id, article_title, article_date, article_content) FROM stdin;
1	Jangan Ragu	2017-09-05	Jangan ragu untuk bertindak\r\nSemua yang kamu lakukan pasti ada hasilnya\r\nTeruslah berusaha\r\nKarena dibalik itu semua\r\nKamu akan menemukan apa yang kamu impikan
2	Try	2015-09-20	I tried to do my best\r\nBut you know i'm not perfect
3	Mencoba	2018-03-03	Disaat dia memperbaiki diri untukmu\r\nNamun engkau semakin merusak dirimu untuk mendekatinya
5	Belajar Menghargai	2021-09-17	Hargai setiap hal kecil yang bisa membuatmu tertawa
4	Hal yang Biasa	2020-07-03	Jangan terlalu menyalahkan diri\r\ndan bersikap terlalu keras pada diri sendiri\r\nKegagalan adalah hal biasanya\r\ndan semua orang pernah mengalaminya
6	Halu	2023-09-01	Akhir - akhir ini\r\nKamu jadi sering muncul\r\nEntah aku melihat orang yg mirip kamu\r\nEntah sekilas mendegar suaramu\r\nSinggah di mimpiku\r\nAtau sekedar lewat di fikiranku\r\n\r\nCukup\r\nAku tak ingin hadirmu lagi\r\nSudah cukup kamu berdansa di hidupku\r\nAku tak pernah mengejarmu setelah itu\r\nMengharapkan hadirmupun aku tak mau\r\n\r\nAku lelah\r\nMengapa kamu tinggalkan luka yg tak bisa kusembuhkan ini\r\nSudah segala cara aku melupakanmu\r\nMenjauhkan diriku darimu\r\nNamun mengapa luka ini tak kunjung terobati\r\n\r\nApa maumu\r\nMempermainkan hatiku kala itu\r\nKau pergi dariku\r\nTapi kau datang lagi dan lagi dengan senyum itu\r\n\r\nApakah kau sengaja melakukan ini kepadaku?\r\nApakah sebenci itu kami akan diriku?\r\n\r\nKamu tau aku benar - benar mencitaimu\r\nSetega inikah kamu membalasku?\r\nMembalas satu kesalahan kecilku padamu\r\nKesalahan yg aku sampai memohon maaf kepadamu berhari - hati lamanya\r\nKesalahan yg karena kamu juga tak mau mendegar penjelasanku dahulu\r\nMengapa kamu tak mau mendegarkan keluh kesahku saat itu\r\nMengapa kamu memilih pergi dariku\r\n\r\nKamu\r\nTak memberiku waktu\r\nMenjelaskan isi hatiku padamu
9	Bayangmu	2024-11-27	Hai\r\nBagaimana kabarmu saat ini?\r\nSemoga indahnya mentari selalu manaungimu\r\nGelapnya langit dikala hujan tak menutupi manisnya senyummu\r\nKuharap kamu bahagia selalu\r\n\r\nHai kamu\r\nYang pernah hadir saat sepiku\r\nYang pernah mendengarkan keluh kesahku\r\nYang pernah berbagi canda tawa bersamaku\r\nKuharap kamu tetap seperti itu\r\n\r\nTerlintas tanda tanya pada diriku\r\nApakah rasa ini bernama suka padamu?\r\nKetika terucap dari mulutmu\r\nApakah benar itu rasa suka? Atau kagum?\r\nSeketika aku terdiam\r\nSejenak aku berfikir\r\nBerusaha menyakinkan diriku bahwa aku benar menyukaimu\r\nNamun dengan bodohnya aku mengucapkan hal yang terlalu cepat bagimu\r\nMaafkan aku\r\n\r\nAku berlari dari masa laluku\r\nSendiri\r\nBerharap sebuah keajaiban akan datang lagi\r\nMengisi kekosongan rasa ini\r\nRasa yang telah lama hilang\r\nRasa yang sulit untukku mengisinya kembali\r\nAku terlalu takut untuk dikhianati lagi\r\n\r\nNamun tahukah kamu\r\nAkhir-akhir ini aku mengingat perkataanmu itu\r\nMungkin benar rasa ini adalah rasa kekagumanku pada dirimu\r\nEntah mengapa sedari dulu saat aku menatapmu\r\nTerbesit dalam hatiku\r\nMengapa aku tak pernah memberanikan diri mendekatimu\r\nMenyapamu\r\nBertukar cerita bersamamu\r\nOrang yang aku kagumi sejak dulu\r\nAku yakin kamu tak kan percaya itu\r\nYaa\r\nMemang seperti itu adanya\r\nHanya saja kita berada pada masa yang berbeda\r\nMembuatku takut mendekatimu sejak dulu kala\r\n\r\nMaafkan aku yang tiba-tiba menghilang dikala kamu mendengarkan ceritaku\r\nTak bermaksud menyakiti hatimu bahkan menyinggung perasaanmu\r\nAku tau ini tak baik\r\nAku tau bahwa aku salah\r\nAku tak mau membuatmu risih akan hadirku\r\nSemoga kamu mau memaafkanku\r\nSemoga kamu mau memaafkan buruknya diriku\r\nSehat selalu \r\nBahagia selalu\r\nSemoga kebedaanmu semakin berharga bagi mereka yang membahagiakanmu\r\nSalam dari pengagummu\r\nUntukmu yang manis dan tak kelabu
\.


--
-- TOC entry 4805 (class 0 OID 17003)
-- Dependencies: 215
-- Data for Name: poetry; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.poetry (poe_id, poe_date, poe_title, poe_content) FROM stdin;
\.


--
-- TOC entry 4807 (class 0 OID 17009)
-- Dependencies: 217
-- Data for Name: story; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.story (st_id, st_date, st_title, st_content) FROM stdin;
\.


--
-- TOC entry 4809 (class 0 OID 17015)
-- Dependencies: 219
-- Data for Name: wiseword; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.wiseword (ww_id, ww_date, ww_title, ww_content) FROM stdin;
2	2017-09-05	Jangan Ragu	Jangan ragu untuk bertindak\r\nSemua yang kamu lakukan pasti ada hasilnya\r\nTeruslah berusaha\r\nKarena dibalik itu semua\r\nKamu akan menemukan apa yang kamu impikan
1	2015-09-20	Mencoba	I tried to do my best\r\nBut you know i'm not perfect
3	2018-03-03	Mencoba	Disaat dia memperbaiki diri untukmu\r\nNamun engkau semakin merusak dirimu untuk mendekatinya
5	2020-07-03	Hal Yang Biasa	Jangan terlalu menyalahkan diri\r\ndan bersikap terlalu keras pada diri sendiri\r\nKegagalan adalah hal biasanya\r\ndan semua orang pernah mengalaminya
6	2021-09-17	Belajar Menghargai	Hargai setiap hal kecil yang bisa membuatmu tertawa
7	2020-05-01	testing	ini hanya test aja\r\napakah ini akan muncul atau tidak\r\napakah ini akan rapi atau tidak
\.


--
-- TOC entry 4823 (class 0 OID 0)
-- Dependencies: 223
-- Name: article_article_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.article_article_id_seq', 9, true);


--
-- TOC entry 4824 (class 0 OID 0)
-- Dependencies: 216
-- Name: poetry_poe_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.poetry_poe_id_seq', 1, false);


--
-- TOC entry 4825 (class 0 OID 0)
-- Dependencies: 218
-- Name: story_st_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.story_st_id_seq', 1, false);


--
-- TOC entry 4826 (class 0 OID 0)
-- Dependencies: 220
-- Name: wiseword_ww_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.wiseword_ww_id_seq', 7, true);


--
-- TOC entry 4827 (class 0 OID 0)
-- Dependencies: 221
-- Name: words_w_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.words_w_id_seq', 1, false);


--
-- TOC entry 4661 (class 2606 OID 17267)
-- Name: article article_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.article
    ADD CONSTRAINT article_pkey PRIMARY KEY (article_id);


--
-- TOC entry 4655 (class 2606 OID 17025)
-- Name: poetry poetry_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.poetry
    ADD CONSTRAINT poetry_pkey PRIMARY KEY (poe_id);


--
-- TOC entry 4657 (class 2606 OID 17027)
-- Name: story story_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.story
    ADD CONSTRAINT story_pkey PRIMARY KEY (st_id);


--
-- TOC entry 4659 (class 2606 OID 17029)
-- Name: wiseword wiseword_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.wiseword
    ADD CONSTRAINT wiseword_pkey PRIMARY KEY (ww_id);


-- Completed on 2025-01-06 11:33:07

--
-- PostgreSQL database dump complete
--

