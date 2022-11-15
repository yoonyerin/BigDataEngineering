<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Genre_Page</title>
    <link href="Genre_Page.css?ver=1.0" rel="stylesheet" type="text/css" />
</head>
<body>
    <!-- 메인바 -->
    <div class="div_mainbar">
        <div class="div_logo">
        <hr class="hr_logo">
        <h1 class="text_logo" onclick="location.href='Main_Page.php'">WHO's TT</h1>
        <hr class="hr_logo">
        </div>
        <div class="div_category">
        <nav class="clearfix">
            <ul class="clearfix">
                <li><a onclick="location.href='Season_Page.php'">SEASONS</a></li>
                <li><a onclick="location.href='Favor_Page.php'">OTT SERVICE</a></li>
                <li><a class="text_green" onclick="location.href='Genre_Page.php'">GENRE</a></li>
                <li><a onclick="location.href='Event_Page_autoscroll.php'">EVENT</a></li>
                <li><a onclick="location.href='Community_Result_Page.php'">COMMUNITY</a></li>
                <li><a onclick="location.href='Actor_Page.php'">KOREAN ACTOR</a></li>
            </ul>
        </nav>
        </div>
        <div class="div_img">
        <img src="images/alarm.png" alt="alarm" width="30px" height="30px">
        <img src="images/user.png" alt="alarm" width="30px" height="30px">
        </div>
    </div>

    <hr class="hr_division">

    <!-- 장르를 선택하는 section -->
    <div class="div_button">
        <h2 class="text_green_h2">WHAT GENRE DO YOU WANT?</h2>

        <div class="div_center">
            <button class="btn_select">Action & Adventure</button>
            <button class="btn_select">Fantasy & Animation</button>
            <button class="btn_select">Family & Comedy</button>
            <button class="btn_select">Thriller & Horror</button>
            <button class="btn_select">Romance & Music</button>
        </div>
    </div>

    <script> /* 자동 스크롤 기능.js */
        const Autoscroll = document.getElementsByTagName('button');

        for(let i = 0; i < Autoscroll.length; i++){

            Autoscroll[i].addEventListener('click',function(e){
            e.preventDefault();
            document.querySelector('.div_horizontal' + (i + 1)).scrollIntoView({ behavior: 'smooth' });
        });

        }
    </script>

    <hr class="hr_division">

    <!-- 장르1 영화 포스터 및 개수를 보여주는 section -->
    <div class="div_horizontal1">
        <div class="div_horizontal">
            <h2 class="text_green_h2">Action & Adventure</h2>
            <!-- 
            데이터: 장르별 영화 개수
            테이블, 필드값: ex. image TABLE, image_url
            데이터가 들어갈 위치: <h2 class="text_green_h2">[실제 데이터]개</h2>
            비고: X
            -->
            <h2 class="text_green_h2">23개</h2>
        </div>
    </div>
    
    <!-- 
        데이터: 장르별 영화 포스터 이미지
        테이블, 필드값: ex. image TABLE, image_url
        데이터가 들어갈 위치: <img class="img_movie_list" src="[실제 데이터]" alt="My Image">
        비고: [반복문] 하나의 div에 img 제한 X, 아래 코드는 5개의 데이터일 경우
    -->
    <div class="div_movie_list">
        <img class="img_movie_list" src="images/movie1.png" alt="My Image">
        <img class="img_movie_list" src="images/movie2.png" alt="My Image">
        <img class="img_movie_list" src="images/movie3.png" alt="My Image">
        <img class="img_movie_list" src="images/movie4.png" alt="My Image">
        <img class="img_movie_list" src="images/movie3.png" alt="My Image">
    </div>
    <!-- =================== 반복문 end ================== -->


    <!-- 장르2 영화 포스터 및 개수를 보여주는 section -->
    <!-- 이하 동일 -->
    <div class="div_horizontal2">
        <div class="div_horizontal">
            <h2 class="text_green_h2">Fantasy & Animation</h2>
            <h2 class="text_green_h2">19개</h2>
        </div>        
    </div>
    
    <div class="div_movie_list">
        <img class="img_movie_list" src="images/movie1.png" alt="My Image">
        <img class="img_movie_list" src="images/movie2.png" alt="My Image">
        <img class="img_movie_list" src="images/movie3.png" alt="My Image">
        <img class="img_movie_list" src="images/movie4.png" alt="My Image">
        <img class="img_movie_list" src="images/movie3.png" alt="My Image">
    </div>


    <!-- 장르3 영화 포스터 및 개수를 보여주는 section -->
    <!-- 이하 동일 -->
    <div class="div_horizontal3">
        <div class="div_horizontal">
            <h2 class="text_green_h2">Family & Comedy</h2>
            <h2 class="text_green_h2">19개</h2>
        </div> 
    </div>
    
    <div class="div_movie_list">
        <img class="img_movie_list" src="images/movie1.png" alt="My Image">
        <img class="img_movie_list" src="images/movie2.png" alt="My Image">
        <img class="img_movie_list" src="images/movie3.png" alt="My Image">
        <img class="img_movie_list" src="images/movie4.png" alt="My Image">
        <img class="img_movie_list" src="images/movie3.png" alt="My Image">
    </div>

    <!-- 장르4 영화 포스터 및 개수를 보여주는 section -->
    <!-- 이하 동일 -->
    <div class="div_horizontal4">
        <div class="div_horizontal">
            <h2 class="text_green_h2">Thriller & Horror</h2>
            <h2 class="text_green_h2">19개</h2>
        </div> 
    </div>
    
    <div class="div_movie_list">
        <img class="img_movie_list" src="images/movie1.png" alt="My Image">
        <img class="img_movie_list" src="images/movie2.png" alt="My Image">
        <img class="img_movie_list" src="images/movie3.png" alt="My Image">
        <img class="img_movie_list" src="images/movie4.png" alt="My Image">
        <img class="img_movie_list" src="images/movie3.png" alt="My Image">
    </div>

    <!-- 장르5 영화 포스터 및 개수를 보여주는 section -->
    <!-- 이하 동일 -->
    <div class="div_horizontal5">
        <div class="div_horizontal">
            <h2 class="text_green_h2">Romance & Music</h2>
            <h2 class="text_green_h2">19개</h2>
        </div> 
    </div>
    
    <div class="div_movie_list">
        <img class="img_movie_list" src="images/movie1.png" alt="My Image">
        <img class="img_movie_list" src="images/movie2.png" alt="My Image">
        <img class="img_movie_list" src="images/movie3.png" alt="My Image">
        <img class="img_movie_list" src="images/movie4.png" alt="My Image">
        <img class="img_movie_list" src="images/movie3.png" alt="My Image">
    </div>


</body>
</html>