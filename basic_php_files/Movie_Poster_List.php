<?php
/* mysql 연결하는 부분 */



/* 찾아지는 movie_list에서 poster 띄워주는 함수 */
function movie_poster_list($mysql, $movie_list, $movie_count, $text, $ind, $class_name, $button_class) {
  echo '
  <div class="div_horizontal' . $ind . '">
    <div class="div_horizontal">
      <h2 class="'. $class_name .'">' . $text .'</h2>
      <h2 class="'. $class_name .'">' . $movie_count .'개</h2>
    </div>
  </div>
  <form action="Detail_Page.php" method="get">
  <div class="div_movie_list"> <input type="hidden" name="lan" value="eng"/>';

  while($movie=mysqli_fetch_array($movie_list,MYSQLI_ASSOC)) {
    $mid = $movie['mid'];
    $title = $movie['original_title'];
    $q_src_img = 'select img_src from movies_poster where mid =' . $mid;
    $src_img = mysqli_query($mysql, $q_src_img);
    $f_src_img = mysqli_fetch_array($src_img);
    echo '<button class="'.$button_class.'" type="submit" name="movie_id" value="'.$movie['mid'].'">
      <img class="img_movie_list" src="' . $f_src_img['img_src'] .'" alt="My Image">
      </button>';
      # button_movie_list css class 만들어야해용 부탁해용~><
  }
      echo '</div></form>';
}