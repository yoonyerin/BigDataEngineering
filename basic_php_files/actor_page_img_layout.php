<?php
function img_layout($mysqli, $query){
    $sql="select mid from movies_korean where cast like concat('%','".(string)$query."', '%');";
    $res=mysqli_query($mysqli, $sql);
    echo '<div class="div_rank_list">';
    $count=0;
    while($array=mysqli_fetch_assoc($res)){

        $count+=1;

        $img_src_sql="select kor_poster from kor_poster_db, movies_ott where kor_id = ".$array["mid"];
        $img_res=mysqli_query($mysqli, $img_src_sql);

        #foreach(mysqli_fetch_array($img_res) as $rank){   
        $poster_res=mysqli_fetch_array($img_res);
        echo '<button class="btn_movie_detail" type="submit" name="movie_id" value="'.$array['mid'].'"><img class="img_movie_list" src="'.$poster_res["kor_poster"].'" alt="My Image"></button>';                  

        if($count>=9) break;
    }
}      
?> 