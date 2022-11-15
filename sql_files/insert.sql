use team19;

-- loading from movies.csv (all ott movies)
LOAD DATA INFILE '../../htdocs/team19/datacsv/preprocessed_movies.csv' INTO TABLE movies_ott
FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"' IGNORE 1 ROWS;

-- loading netflix movies data
LOAD DATA INFILE '../../htdocs/team19/datacsv/netflix.csv' INTO TABLE movies_netflix
FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"' IGNORE 1 ROWS;

-- loading amazon prime movies data
LOAD DATA INFILE '../../htdocs/team19/datacsv/amazon_prime.csv' INTO TABLE movies_amazon_prime
FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"' IGNORE 1 ROWS;

-- loading disney plus movies data
LOAD DATA INFILE '../../htdocs/team19/datacsv/disney_plus.csv' INTO TABLE movies_disney_plus
FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"' IGNORE 1 ROWS;

-- loadng hulu movies data
LOAD DATA INFILE '../../htdocs/team19/datacsv/hulu.csv' INTO TABLE movies_hulu
FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"' IGNORE 1 ROWS;

-- loading posters img src of movie data
LOAD DATA INFILE '../../htdocs/team19/datacsv/poster_data.csv' INTO TABLE movies_poster
FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"' IGNORE 1 ROWS;

-- loading korean movies data
LOAD DATA INFILE '../../htdocs/team19/datacsv/korean_movie_2012_2022.csv' INTO TABLE movies_korean
FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"' IGNORE 1 ROWS;
