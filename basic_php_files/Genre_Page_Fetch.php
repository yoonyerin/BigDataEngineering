<?php
    include 'Movie_Poster_List.php';
    /* 전체 영화 genre list
    $genre_list = ['Action', 'Adventure', 'Fantasy', 'Science Fiction', 'Animation', 
                    'Family', 'Thriller', 'Crime', 'Comedy', 'Romance', 'Drama', 'Western', 
                    'Mystery', 'Horror', 'Music', 'War', 'History', 'Documentary', 'Foreign', 'TV Movie'];
    */
    
    function genre_poster($mysql, $text, $ind, $class_name, $button_class) {
      switch ($ind) {
        case '1':
          $genre_list = "('Action', 'Adventure', 'Mystery')";
          break;
        case '2':
          $genre_list = "('Fantasy', 'Animation')";
          break;
        case '3':
          $genre_list = "('Family', 'Comedy', 'Drama', 'Music', 'TV Movie', 'History')";
          break;
        case '4':
          $genre_list = "('Thriller', 'Crime', 'War', 'Mystery')";
          break;
        case '5':
          $genre_list = "('Romance', 'Music')";
          break;
      }

      $sql1 = "select * from movies_ott where (genres_1 in " . $genre_list . ") or (genres_2 in " . $genre_list . ") or (genres_3 in " . $genre_list .")"; /* 날짜 조건 넣기 */
      $sql2 = "select count(*) from movies_ott where genres_1 = " . $genre_list . " or genres_2 = " . $genre_list . " or genres_3 = " . $genre_list; /* 여기도 */
      $movie_list=mysqli_query($mysql, $sql1);
      movie_poster_list($mysql, $movie_list,  $text, $ind, $class_name, $button_class);
  }
?>