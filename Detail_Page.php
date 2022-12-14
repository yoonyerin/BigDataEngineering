<?php include './basic_php_files/mysql_connect.php';

if($_GET['lan']=='eng') {$eng=TRUE;} else {$eng=FALSE;}
if($eng) {
    $sql = 'select * , year(release_date) as release_year from movies_ott where mid = '.$_GET['movie_id'];
    $poster_sql = 'select * from movies_poster where mid = '.$_GET['movie_id'];
    $result = mysqli_query($mysqli, $sql);
    $poster_res = mysqli_query($mysqli, $poster_sql);
    $movie = mysqli_fetch_array($result);
    $poster = mysqli_fetch_array($poster_res);
} else {
    $sql = 'select * from movies_korean where mid = '.$_GET['movie_id'];
    $poster_sql = 'select * from movies_kor_poster where mid = '.$_GET['movie_id'];
    $result = mysqli_query($mysqli, $sql);
    $poster_res = mysqli_query($mysqli, $poster_sql);
    $movie = mysqli_fetch_array($result);
    $poster = mysqli_fetch_array($poster_res);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Detail_Page</title>
    <link href="Detail_Page.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="div_mainbar">
        <div class="div_logo">
        <hr class="hr_logo">
        <h1 class="h1_logo" onclick="location.href='Main_Page.php'">WHO's TT</h1>
        <hr class="hr_logo">
        </div>
        <div class="div_category">
        <nav class="clearfix">
            <ul class="clearfix">
                <li><a onclick="location.href='Season_Page.php'">SEASONS</a></li>
                <li><a onclick="location.href='Favor_Page.php'">OTT SERVICE</a></li>
                <li><a onclick="location.href='Genre_Page.php'">GENRE</a></li>
                <li><a onclick="location.href='Event_Page_autoscroll.php'">EVENT</a></li>
<<<<<<< HEAD
                <li><a onclick="location.href='Community_Page.php'">COMMUNITY</a></li>
                <li><a onclick="location.href='initial_actor_page.php'">KOREAN ACTOR</a></li>
            </ul>
        </nav>
        </div>
        <div class="div_img">
        <img src="images/alarm.png" alt="alarm" width="30px" height="30px">
        <img src="images/user.png" alt="alarm" width="30px" height="30px">
        </div>
    </div>
    <hr>
    <div class="movie_detail">
        <div class="left_detail">
                <h2 class="h2_title"><?php echo $movie['original_title']; ?></h2> <!-- php ??????: ????????? ????????? url??? ???????????? movie title ?????? -->
                <img src=<?php echo $poster['img_src']; ?> width="400"> <!--php ??????(src=): ?????? ????????? ????????? url-->
        </div>
        
        <div class="right_detail"> 
            <h2 class="h2_title">MOVIE DETAIL</h2>
          
            <table border="1">
                <tr>
                    <td id="column">??????</td>
                    <td id="detail"><?php echo $movie['original_title']; ?><!--php ??????: title-->
                </tr>
                <tr>
                    <td id="column"><?php if($eng){ echo '??????'; } else {echo '??????/??????';} ?></td>
                    <td id="detail"><?php if($eng) {echo $movie['overview'];} else {echo $movie['director'].' / '.$movie['writer'];} ?></td><!--php ??????: description-->
                </tr>
                <tr>
                    <td id="column">????????????</td>
                    <td id="detail"><?php echo $movie['release_year']; ?></td><!--php ??????: year-->
                </tr>  
                <tr>
                    <td id="column"><?php if($eng) {echo '????????????';} else {echo '??????';}?></td>
                    <td id="detail"><?php if($eng) {echo $movie['homepage'];} else {echo $movie['cast'];}?></td><!--php ??????: age-->
                </tr>  
                <tr>
                    <td id="column"><?php if($eng) {echo '????????????';} else {echo '?????????';}?></td>
                    <td id="detail"><?php if($eng) {echo $movie['runtime'];} else {echo $movie['production'];}?></td><!--php ??????: running_time-->
                </tr>  
                <tr>
                    <td id="column">??????</td>
                    <td id="detail"><?php if($eng) {echo $movie['genres_1'].", ".$movie['genres_2'].", ".$movie['genres_3'];} else {echo $movie['genres'];}?></td><!--php ??????: genre-->
                </tr>      
            </table>
            
        </div>
    </div> 

</body>
</html>