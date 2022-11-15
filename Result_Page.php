<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Result_Page</title>
    <link href="Result_Page.css?ver=1.0" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="div_mainbar">
        <div class="div_logo">
        <hr class="hr_logo">
        <h1 class="h1_logo">WHO's TT</h1>
        <hr class="hr_logo">
        </div>
        <div class="div_category">
        <nav class="clearfix">
            <ul class="clearfix">
                <li><a onclick="location.href='Season_Page.php'">SEASONS</a></li>
                <li><a onclick="location.href='Favor_Page.php'">OTT SERVICE</a></li>
                <li><a onclick="location.href='Genre_Page.php'">GENRE</a></li>
                <li><a class="text_green" onclick="location.href='Event_Page_autoscroll.php'">EVENT</a></li>
                <li><a onclick="location.href='Community_Page.php'">COMMUNITY</a></li>
                <li><a onclick="location.href='Actor_Page.php'">KOREAN ACTOR</a></li>
            </ul>
        </nav>
        </div>
        <div class="div_img">
        <img src="images/alarm.png" alt="alarm" width="30px" height="30px">
        <img src="images/user.png" alt="alarm" width="30px" height="30px">
        </div>
    </div>
    <hr>
    <div class="div_inputwrapper">
        <h2 class="h2_title">Search for the movie you want to talk about</h2>
        <form action="" method="POST" id="eventForm">
        <input id='searchEvent' type="text" name="input_event" placeholder="search keyword">
        <input id='searchButton' type="submit" value="ENTER" >
        </form>
    </div>
    <hr>
    <div class="div_movie_section">
        
        <div class="div_horizontal">
            <h2 class="h2_title">CHOOSE THE MOVIE</h2>
        </div>
        <div class="div_movie_list">
            <!-- php 검색한 키워드로 검색 결과 노출 기능--> 
            <!-- 테이블, 필드값: movie TABLE image url
            데이터 위치: src= 링크 -->
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/a91e9hpWwfCqxJI4xM9Q2RhuxgI.jpg" alt="My Image" >
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/sLTAEFtjentQ5satiGdmv7o2f1C.jpg" alt="My Image" >
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/mYLOqiStMxDK3fYZFirgrMt8z5d.jpg" alt="My Image" >
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/kGmpIkjVRWHQ97AiEXC0pLt5VtY.jpg" alt="My Image" >
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/a91e9hpWwfCqxJI4xM9Q2RhuxgI.jpg" alt="My Image" >
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/sLTAEFtjentQ5satiGdmv7o2f1C.jpg" alt="My Image" >
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/mYLOqiStMxDK3fYZFirgrMt8z5d.jpg" alt="My Image" >
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/kGmpIkjVRWHQ97AiEXC0pLt5VtY.jpg" alt="My Image" >
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/77OM9jMJ8nglaolHLwrAW7kvadV.jpg" alt="My Image" >
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/S6fDnntDjduIWuLW2GcqFasobD.jpg" alt="My Image" >
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/lM2K5eGz9kvrYRi366wEzVwC8Tb.jpg" alt="My Image" >
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/vctfqwx6YYEml0iVEDxfnTnY2vn.jpg" alt="My Image" >
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/S6fDnntDjduIWuLW2GcqFasobD.jpg" alt="My Image" >
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/lM2K5eGz9kvrYRi366wEzVwC8Tb.jpg" alt="My Image" >
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/vctfqwx6YYEml0iVEDxfnTnY2vn.jpg" alt="My Image" >
            <!-- 반복문 종료 -->
        </div>
    </div>   
</body>
</html>