--
-- PostgreSQL database dump
--

-- Dumped from database version 16.3
-- Dumped by pg_dump version 16.3

-- Started on 2025-01-06 13:38:45

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
-- TOC entry 216 (class 1259 OID 17274)
-- Name: article; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.article (
    article_id bigint NOT NULL,
    article_title character varying(50) NOT NULL,
    article_date date NOT NULL,
    article_content text NOT NULL
);


--
-- TOC entry 217 (class 1259 OID 17279)
-- Name: article_article_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.article_article_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;



--
-- TOC entry 4789 (class 0 OID 0)
-- Dependencies: 217
-- Name: article_article_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.article_article_id_seq OWNED BY public.article.article_id;


--
-- TOC entry 215 (class 1259 OID 17257)
-- Name: words_w_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.words_w_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;



--
-- TOC entry 4635 (class 2604 OID 17280)
-- Name: article article_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.article ALTER COLUMN article_id SET DEFAULT nextval('public.article_article_id_seq'::regclass);


--
-- TOC entry 4782 (class 0 OID 17274)
-- Dependencies: 216
-- Data for Name: article; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.article VALUES (1, 'Jangan Ragu', '2017-09-05', 'Jangan ragu untuk bertindak
Semua yang kamu lakukan pasti ada hasilnya
Teruslah berusaha
Karena dibalik itu semua
Kamu akan menemukan apa yang kamu impikan');
INSERT INTO public.article VALUES (2, 'Try', '2015-09-20', 'I tried to do my best
But you know i''m not perfect');
INSERT INTO public.article VALUES (3, 'Mencoba', '2018-03-03', 'Disaat dia memperbaiki diri untukmu
Namun engkau semakin merusak dirimu untuk mendekatinya');
INSERT INTO public.article VALUES (5, 'Belajar Menghargai', '2021-09-17', 'Hargai setiap hal kecil yang bisa membuatmu tertawa');
INSERT INTO public.article VALUES (4, 'Hal yang Biasa', '2020-07-03', 'Jangan terlalu menyalahkan diri
dan bersikap terlalu keras pada diri sendiri
Kegagalan adalah hal biasanya
dan semua orang pernah mengalaminya');
INSERT INTO public.article VALUES (6, 'Halu', '2023-09-01', 'Akhir - akhir ini
Kamu jadi sering muncul
Entah aku melihat orang yg mirip kamu
Entah sekilas mendegar suaramu
Singgah di mimpiku
Atau sekedar lewat di fikiranku

Cukup
Aku tak ingin hadirmu lagi
Sudah cukup kamu berdansa di hidupku
Aku tak pernah mengejarmu setelah itu
Mengharapkan hadirmupun aku tak mau

Aku lelah
Mengapa kamu tinggalkan luka yg tak bisa kusembuhkan ini
Sudah segala cara aku melupakanmu
Menjauhkan diriku darimu
Namun mengapa luka ini tak kunjung terobati

Apa maumu
Mempermainkan hatiku kala itu
Kau pergi dariku
Tapi kau datang lagi dan lagi dengan senyum itu

Apakah kau sengaja melakukan ini kepadaku?
Apakah sebenci itu kami akan diriku?

Kamu tau aku benar - benar mencitaimu
Setega inikah kamu membalasku?
Membalas satu kesalahan kecilku padamu
Kesalahan yg aku sampai memohon maaf kepadamu berhari - hati lamanya
Kesalahan yg karena kamu juga tak mau mendegar penjelasanku dahulu
Mengapa kamu tak mau mendegarkan keluh kesahku saat itu
Mengapa kamu memilih pergi dariku

Kamu
Tak memberiku waktu
Menjelaskan isi hatiku padamu');
INSERT INTO public.article VALUES (9, 'Bayangmu', '2024-11-27', 'Hai
Bagaimana kabarmu saat ini?
Semoga indahnya mentari selalu manaungimu
Gelapnya langit dikala hujan tak menutupi manisnya senyummu
Kuharap kamu bahagia selalu

Hai kamu
Yang pernah hadir saat sepiku
Yang pernah mendengarkan keluh kesahku
Yang pernah berbagi canda tawa bersamaku
Kuharap kamu tetap seperti itu

Terlintas tanda tanya pada diriku
Apakah rasa ini bernama suka padamu?
Ketika terucap dari mulutmu
Apakah benar itu rasa suka? Atau kagum?
Seketika aku terdiam
Sejenak aku berfikir
Berusaha menyakinkan diriku bahwa aku benar menyukaimu
Namun dengan bodohnya aku mengucapkan hal yang terlalu cepat bagimu
Maafkan aku

Aku berlari dari masa laluku
Sendiri
Berharap sebuah keajaiban akan datang lagi
Mengisi kekosongan rasa ini
Rasa yang telah lama hilang
Rasa yang sulit untukku mengisinya kembali
Aku terlalu takut untuk dikhianati lagi

Namun tahukah kamu
Akhir-akhir ini aku mengingat perkataanmu itu
Mungkin benar rasa ini adalah rasa kekagumanku pada dirimu
Entah mengapa sedari dulu saat aku menatapmu
Terbesit dalam hatiku
Mengapa aku tak pernah memberanikan diri mendekatimu
Menyapamu
Bertukar cerita bersamamu
Orang yang aku kagumi sejak dulu
Aku yakin kamu tak kan percaya itu
Yaa
Memang seperti itu adanya
Hanya saja kita berada pada masa yang berbeda
Membuatku takut mendekatimu sejak dulu kala

Maafkan aku yang tiba-tiba menghilang dikala kamu mendengarkan ceritaku
Tak bermaksud menyakiti hatimu bahkan menyinggung perasaanmu
Aku tau ini tak baik
Aku tau bahwa aku salah
Aku tak mau membuatmu risih akan hadirku
Semoga kamu mau memaafkanku
Semoga kamu mau memaafkan buruknya diriku
Sehat selalu 
Bahagia selalu
Semoga kebedaanmu semakin berharga bagi mereka yang membahagiakanmu
Salam dari pengagummu
Untukmu yang manis dan tak kelabu');


--
-- TOC entry 4790 (class 0 OID 0)
-- Dependencies: 217
-- Name: article_article_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.article_article_id_seq', 9, true);


--
-- TOC entry 4791 (class 0 OID 0)
-- Dependencies: 215
-- Name: words_w_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.words_w_id_seq', 1, false);


--
-- TOC entry 4637 (class 2606 OID 17285)
-- Name: article article_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.article
    ADD CONSTRAINT article_pkey PRIMARY KEY (article_id);


-- Completed on 2025-01-06 13:38:45

--
-- PostgreSQL database dump complete
--

