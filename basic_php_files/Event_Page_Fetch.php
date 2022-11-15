<?php 
include 'Movie_Poster_List.php';

# CHRISTMAS, WEDDING, FAMILY EVENT, TEACHER'S DAY, BIRTHDAY

function event_poster($mysql, $text, $ind, $class_name, $button_class) {
  switch ($ind) {
    case '1': #christmas
      $sql1 = "select * from movies_ott where overview like '%christmas%' or overview like '%winter%'";
      $sql2 = "select count(*) from movies_ott where overview like '%christmas%' or overview like '%winter%'";
      break;
    case '2': #wedding
      $sql1 = "select * from movies_ott where overview like '%wedding%' or overview like '%marriage%'";
      $sql2 = "select count(*) from movies_ott where overview like '%wedding%' or overview like '%marriage%'";
      break;
    case '3': #family event
      $sql1 = "select * from movies_ott where overview like '%family%' or overview like '%holiday%'";
      $sql2 = "select count(*) from movies_ott where overview like '%family%' or overview like '%holiday%'";
      break;
    case '4': #teacher's day
      $sql1 = "select * from movies_ott where overview like '%school%' or overview like '%teacher%' or overview like '%professor%'";
      $sql2 = "select count(*) from movies_ott where overview like '%school%' or overview like '%teacher%' or overview like '%professor%'";
      break;
    case '5': #birthday
      $sql1 = "select * from movies_ott where overview like '%birthday%'";
      $sql2 = "select count(*) from movies_ott where overview like '%birthday%'";
      break;
  }

  $movie_list=mysqli_query($mysql, $sql1);  
  $movie_count = mysqli_num_rows($movie_list);
  movie_poster_list($mysql, $movie_list, $movie_count, $text, $ind, $class_name, $button_class);
}
?>