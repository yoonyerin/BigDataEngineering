<?php
    include 'Movie_Poster_List.php';
    
    function genre_poster($mysql, $text, $ind, $class_name, $button_class) {
      switch ($ind) {
        case '1':
          $genre_list = "('Action', 'Adventure', 'Mystery', 'Science Fiction', 'Fanatasy')";
          break;
        case '2':
          $genre_list = "('Music', 'Animation')";
          break;
        case '3':
          $genre_list = "('Family', 'Comedy', 'Drama', 'TV Movie', 'History', 'Documentary', 'Foriegn', 'Western')";
          break;
        case '4':
          $genre_list = "('Thriller', 'Horror', 'Crime', 'War', 'Mystery')";
          break;
        case '5':
          $genre_list = "('Romance', 'Music')";
          break;
      }

      $sql1 = "select * from movies_ott where (genres_1 in " . $genre_list . ") or (genres_2 in " . $genre_list . ") or (genres_3 in " . $genre_list .")"; /* 날짜 조건 넣기 */
      $sql2 = "select count(*) from movies_ott where genres_1 in " . $genre_list . " or genres_2 in " . $genre_list . " or genres_3 in " . $genre_list; /* 여기도 */
      $movie_list=mysqli_query($mysql, $sql1);      
      $movie_count = mysqli_num_rows($movie_list);
      movie_poster_list($mysql, $movie_list, $movie_count, $text, $ind, $class_name, $button_class);
  }
?>