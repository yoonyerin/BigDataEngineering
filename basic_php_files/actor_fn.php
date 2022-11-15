<?php 
function find_actors_movie($mysqli, $query){
    $sql="select mid from movies_korean where cast like concat('%','".(string)$query."', '%');";
    $res=mysqli_query($mysqli, $sql);
    $count=0;
    while($row=mysqli_fetch_row($res)){
        $count+=1;
    }
    echo (string)$count."개";
}
function actors_movie_year($mysqli, $query){
    
    $sum=0;
    $year_count=[];

    $years=['2012','2013','2014','2015','2016','2017','2018','2019','2020','2021'];

    $sql="select release_year, count(release_year) as cnt from movies_korean where mid in 
    (select mid as id from movies_korean where cast like concat ('%', '".(string)$query."','%')) group by release_year;";   

    $res=mysqli_query($mysqli, $sql);
    for($i=0;$i<10;$i++){
        $year_count[$i]=0;
    }
    while($movies=mysqli_fetch_assoc($res)){
        /*if($movies["release_year"]>="2012" and $movies["release_year"]<="2021"){}
            $year_label[$count]=$movies["release_year"];
            $year_count[$count]=$movies["cnt"];
            $count+=1;*/
        if(in_array((string)$movies["release_year"], $years)){ #years에 속해 있는지 찾고
            $year_count[array_search((string)$movies["release_year"], $years)]=$movies["cnt"];#해당값이 years의 몇번째 index인지
            $sum+=$movies["cnt"];
        }
    }
    
    $avg=$sum/10.0;

    $print_count="[";

    foreach($years as $year){
        $print_count=$print_count.$year_count[array_search($year, $years)].",";
    }
    $print_count=substr($print_count, 0, -1);
    $print_count=$print_count."]";

    echo "<div class='div_horizontal_right'>
    <h2 class='h2_text'>Statistics By Year</h2>
    <script src='https://cdn.jsdelivr.net/npm/chart.js'></script>
    <div>
    <canvas id='myLineChart'></canvas>
    </div>
    <script>
    const labels2 =['2012','2013','2014','2015','2016','2017','2018','2019','2020','2021']; // php 연도 라벨링
    const data2 = {
        labels: labels2,
        datasets: [{
        label: 'The number of Film',
        data: ".$print_count.", // php 삽입: 각 연도별 영화 갯수. korean_actor table의 개봉년도 year count 
        backgroundColor: [
            'rgba(0, 70, 42)',
            'rgba(0, 70, 42)',
            'rgba(0, 70, 42)',
            'rgba(0, 70, 42)',
            'rgba(0, 70, 42)',
            'rgba(0, 70, 42)',
            'rgba(0, 70, 42)',
            'rgba(0, 70, 42)',
            'rgba(0, 70, 42)',
            'rgba(0, 70, 42)',
        ],
        borderColor: [
            'rgb(0, 70, 42)',
            'rgb(0, 70, 42)',
            'rgb(0, 70, 42)',
            'rgb(0, 70, 42)',
            'rgb(0, 70, 42)',
            'rgb(0, 70, 42)',
            'rgb(0, 70, 42)',
            'rgb(0, 70, 42)',
            'rgb(0, 70, 42)',
            'rgb(0, 70, 42)'
        ],
        borderWidth: 1
        }]
    };
    
    const config2 = {
        type: 'line', // 그래프 타입 line
        data: data2,
        options: {
        scales: {
            y: {
            beginAtZero: true
            }
        }
        },
    };

    var myLineChart = new Chart(
        document.getElementById('myLineChart'),
        config2
    );
    </script>
    <h3 class='average'>10년간 평균 영화 촬영 수: ".(string)$avg."개</h3> 
    ";    
}


function actors_movie_genre($mysqli, $query){

    $count=0;
    $genre_label=[];
    $genre_count=[];

    $sql="select genres, count(genres) as cnt from movies_korean where mid in 
        (select mid as id from movies_korean where cast like concat ('%', '".(string)$query."','%')) group by genres;";
    $res=mysqli_query($mysqli, $sql);
    while($movies=mysqli_fetch_assoc($res)){
        $genre_label[$count]=$movies["genres"];
        $genre_count[$count]=$movies["cnt"];
        $count+=1;
    }

    $print_label="[";
    $count=0;
    
    foreach($genre_label as $label){
        if($count>=6) break;
        $print_label=$print_label."'".$label."',";
        $count+=1;
    }
    $print_label=substr($print_label, 0, -1);
    $print_label=$print_label."]";

    $print_count="[";
    $count=0;

    foreach($genre_count as $count){
        if($count>=6) break;
        $print_count=$print_count."'".$count."',";
    }
    $print_count=substr($print_count, 0, -1);
    $print_count=$print_count."]";


    echo "<div class='div_stat'>
    <div class='div_horizontal_left'>
        <h2 class='h2_text'>Statistics By Genre</h2>
        <script src='https://cdn.jsdelivr.net/npm/chart.js'></script>
        <div>
        <canvas id='myChart'></canvas>
        </div>
        
        <script>const labels =".$print_label."; //php 장르 라벨링
    const data = {
        labels: labels,
        datasets: [{
        label: 'The number of Film',
        data: ".$print_count.",//php 삽입: 각 장르별 영화 갯수: korean_actor table의 genre count 
        backgroundColor: [
            'rgba(0, 70, 42)',
            'rgba(0, 70, 42)',
            'rgba(0, 70, 42)',
            'rgba(0, 70, 42)',
            'rgba(0, 70, 42)',
            'rgba(0, 70, 42)'
        ],
        borderColor: [
            'rgb(0, 70, 42)',
            'rgb(0, 70, 42)',
            'rgb(0, 70, 42)',
            'rgb(0, 70, 42)',
            'rgb(0, 70, 42)',
            'rgb(0, 70, 42)'
        ],
        borderWidth: 1
        }]
    };
    const config = {
        type: 'bar', // 그래프 타입 bar
        data: data,
        options: {
        scales: {
            y: {
            beginAtZero: true
            }
        }
        },
    };

    var myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
    </script> 
</div>";





 /*   $genre_sql="select genres, count(genres) as cnt from movies_korean group by genres where mid in ".implode(",",$movies);
    $genre_res=mysqli_query($mysqli, $genre_sql);
    $genre=mysqli_fetch_all($genre_res);*/
    

    #$genre_label=$genre["genres"];
    #$genre_count=$genre["cnt"];

}

?>

