<?php
/* mysql 연결하는 부분 */



/* 찾아지는 movie_list에서 poster 띄워주는 함수 */
function movie_poster_list($mysql, $movie_list, $text, $ind, $class_name) {
  $val_count = mysqli_num_rows($movie_list);
  echo '
  <div class="div_horizontal' . $ind . '">
    <div class="div_horizontal">
      <h2 class="'. $class_name .'">' . $text .'</h2>
      <h2 class="'. $class_name .'">' . $val_count .'개</h2>
    </div>
  </div>

  <div class="div_movie_list">';

  while($movie=mysqli_fetch_array($movie_list,MYSQLI_ASSOC)) {
    $mid = $movie['mid'];
    $title = $movie['original_title'];
    $q_src_img = 'select img_src from movies_poster where mid =' . $mid;
    $src_img = mysqli_query($mysql, $q_src_img);
    $f_src_img = mysqli_fetch_array($src_img);
    echo '<img class="img_movie_list" src="' . $f_src_img['img_src'] .'" alt="My Image">';
  }
      echo '</div>';
}