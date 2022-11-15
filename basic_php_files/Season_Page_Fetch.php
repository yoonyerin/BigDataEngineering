<?php
    include 'Movie_Poster_List.php';

    function season_poster($mysql, $movie_count_list,  $starting, $ending, $ind,  $class_name, $button_class, $decade) {
        
        $movie_count = 0;
        if ($decade == 10) {
            while($mov = mysqli_fetch_array($movie_count_list, MYSQLI_ASSOC)) {
                if ($mov['decade'] >= $starting && $mov['decade'] <= $ending && is_null($mov['decade5'])  && !is_null($mov['decade'])){
                    $movie_count = $movie_count + $mov['counting'];
                }
            }
        } else {
            while($mov = mysqli_fetch_array($movie_count_list, MYSQLI_ASSOC)) {
                if ($mov['decade5'] >= $starting && $mov['decade5'] <= $ending && !is_null($mov['decade5'])){
                    $movie_count = $movie_count + $mov['counting'];
                }
            }
        }

        /* need to seek mysqli query data to use again for the next section */
        mysqli_data_seek($movie_count_list, 0);
        
        $sql1 = "select * from movies_ott where release_date"; /* 날짜 조건 넣기 */
        $movie_list=mysqli_query($mysql, $sql1 . " between '" . $starting . "-01-01' and '" . $ending . "-12-31'");
        if ($starting == 0 ) {
            $text='~'.$ending;
        } elseif($ending >= date('Y') ) {
            $text=$starting . '~';
        } else {
            $text=$starting . '~' . $ending;
        }
        movie_poster_list($mysql, $movie_list, $movie_count, $text, $ind, $class_name, $button_class);
    }
?>