--
-- 데이터베이스: `team19`
--
CREATE DATABASE IF NOT EXISTS `team19` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `team19`;

-- --------------------------------------------------------

--
-- 테이블 구조 `kor_poster_db`
--

CREATE TABLE `movies_kor_poster` (
  `kor_id` int(11) DEFAULT NULL,
  `kor_poster` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;



-- --------------------------------------------------------

--
-- 테이블 구조 `movie_board_db`
--

CREATE TABLE `movie_board_db` (
  `mid` int(11) DEFAULT NULL,
  `board_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- 테이블 구조 `poster_db`
--

CREATE TABLE `poster_db` (
  `mid` int(11) DEFAULT NULL,
  `poster` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- 테이블 구조 `user_board`
--

CREATE TABLE `user_board` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `board_id` int(11) NOT NULL,
  `last_chg_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- 테이블 구조 `user_db`
--

CREATE TABLE `user_db` (
  `user_id` int(11) NOT NULL,
  `_password` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- 테이블 구조 `user_fav_db`
--

CREATE TABLE `user_fav_db` (
  `user_id` int(11) NOT NULL,
  `mid` int(11) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL CHECK (`rate` > 0 and `rate` < 6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


