<?php
    include 'Movie_Poster_List.php';

    function season_poster($mysql, $starting, $ending, $ind,  $class_name, $button_class) {
        $group_by_decade_sql = "select count(*), decade from (select ceil(year(release_date) / 10) * 10 as decade from movies_ott) t group by decade";
        $sql1 = "select * from movies_ott where release_date"; /* 날짜 조건 넣기 */
        if($starting == '0') {
            $movie_list=mysqli_query($mysql, $sql1 . " <= '". $ending . "-12-31'");
            $text='~' . $ending;
            movie_poster_list($mysql, $movie_list,  $text, $ind, $class_name, $button_class);

        } else {
            $movie_list=mysqli_query($mysql, $sql1 . " between '" . $starting . "-01-01' and '" . $ending . "-12-31'");
            $text=$starting . '~' . $ending;
            movie_poster_list($mysql, $movie_list,  $text, $ind, $class_name, $button_class);
        }
    }
?>