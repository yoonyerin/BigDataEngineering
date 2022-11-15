--sql file of creating database and tables
CREATE DATABASE IF NOT EXISTS team19 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
use team19;


------------------------------------------------------------------------
-------------------------- tables for movies ---------------------------
------------------------------------------------------------------------

-- creating table of movies in ott (all movies)
CREATE TABLE IF NOT EXISTS movies_ott(
    mid INTEGER, netflix INTEGER,amazon_prime INTEGER, disney_plus INTEGER, hulu INTEGER,
    original_title VARCHAR(100),homepage VARCHAR(100), overview TEXT,
    popularity FLOAT, production_countries VARCHAR(100), release_date DATE,
    revenue INTEGER, runtime FLOAT, spoken_languages VARCHAR(20), vote_average FLOAT, vote_count INTEGER,
    genres_1 VARCHAR(20), genres_2 VARCHAR(20), genres_3 VARCHAR(20), 
    keywords_1 VARCHAR(20), keywords_2 VARCHAR(20), keywords_3 VARCHAR(20)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;


-- netflix
CREATE TABLE IF NOT EXISTS movies_netflix(
    mid INTEGER,
    original_title VARCHAR(100),homepage VARCHAR(100), overview TEXT,
    popularity FLOAT, production_countries VARCHAR(100), release_date DATE,
    revenue INTEGER, runtime FLOAT, spoken_languages VARCHAR(20), vote_average FLOAT, vote_count INTEGER,
    genres_1 VARCHAR(20), genres_2 VARCHAR(20), genres_3 VARCHAR(20), 
    keywords_1 VARCHAR(20), keywords_2 VARCHAR(20), keywords_3 VARCHAR(20)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

-- amazon_prime
CREATE TABLE IF NOT EXISTS movies_amazon_prime(
    mid INTEGER,
    original_title VARCHAR(100),homepage VARCHAR(100), overview TEXT,
    popularity FLOAT, production_countries VARCHAR(100), release_date DATE,
    revenue INTEGER, runtime FLOAT, spoken_languages VARCHAR(20), vote_average FLOAT, vote_count INTEGER,
    genres_1 VARCHAR(20), genres_2 VARCHAR(20), genres_3 VARCHAR(20), 
    keywords_1 VARCHAR(20), keywords_2 VARCHAR(20), keywords_3 VARCHAR(20)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

-- disney_plus
CREATE TABLE IF NOT EXISTS movies_disney_plus(
    mid INTEGER,
    original_title VARCHAR(100),homepage VARCHAR(100), overview TEXT,
    popularity FLOAT, production_countries VARCHAR(100), release_date DATE,
    revenue INTEGER, runtime FLOAT, spoken_languages VARCHAR(20), vote_average FLOAT, vote_count INTEGER,
    genres_1 VARCHAR(20), genres_2 VARCHAR(20), genres_3 VARCHAR(20), 
    keywords_1 VARCHAR(20), keywords_2 VARCHAR(20), keywords_3 VARCHAR(20)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

-- hulu
CREATE TABLE IF NOT EXISTS movies_hulu(
    mid INTEGER,
    original_title VARCHAR(100),homepage VARCHAR(100), overview TEXT,
    popularity FLOAT, production_countries VARCHAR(100), release_date DATE,
    revenue INTEGER, runtime FLOAT, spoken_languages VARCHAR(20), vote_average FLOAT, vote_count INTEGER,
    genres_1 VARCHAR(20), genres_2 VARCHAR(20), genres_3 VARCHAR(20), 
    keywords_1 VARCHAR(20), keywords_2 VARCHAR(20), keywords_3 VARCHAR(20)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

-- movie poster
CREATE TABLE IF NOT EXISTS movies_poster(
    mid INTEGER, img_src VARCHAR(150)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;


-- korean movie
CREATE TABLE IF NOT EXISTS movies_korean(
    mid INTEGER, release_year INTEGER, original_title VARCHAR(100),
    genres VARCHAR(50), director VARCHAR(10), producer VARCHAR(40), writer VARCHAR(20),
    cast VARCHAR(100), crank_in VARCHAR(50), crank_out VARCHAR(50), presents VARCHAR(50), production VARCHAR(50),
    release_data VARCHAR(50), etc TEXT
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

-- korean movie poster
CREATE TABLE IF NOT EXISTS movies_kor_poster(
    mid INTEGER, img_src VARCHAR(150)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

------------------------------------------------------------------------
--------------------------- tables for users ---------------------------
------------------------------------------------------------------------

-- user_db
CREATE TABLE IF NOT EXISTS user_db (
    user_id int(11) NOT NULL,
    _password int(11) NOT NULL,
    user_name varchar(20) NOT NULL
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

-- user_board
CREATE TABLE IF NOT EXISTS user_board (
    user_id int(11) NOT NULL,
    user_name varchar(20) NOT NULL,
    board_id int(11) NOT NULL,
    last_chg_date datetime NOT NULL
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

-- user_fav_db
CREATE TABLE IF NOT EXISTS user_fav_db (
    user_id int(11) NOT NULL PRIMARY KEY,
    mid varchar(100) DEFAULT NULL
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

-- user_search_db
CREATE TABLE IF NOT EXISTS user_search_db (
    user_id int(11),
    search1 varchar(100), search2 varchar(100), search3 varchar(100), search4 varchar(100), search5 varchar(100)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;