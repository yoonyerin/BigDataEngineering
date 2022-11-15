<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Event_Page</title>
    <link href="Event_Page.css?ver=1.01" rel="stylesheet" type="text/css" />
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

    <hr class="hr_division">

    <div class="div_button">

        <div class="div_horizontal">
            <h2 class="h2_text">CHOOSE TODAY'S EVENT</h2>
        </div>

        <div class="div_center">
            <button class="btn_select">CHRISTMAS</button>
            <button class="btn_select">WEDDING</button>
            <button class="btn_select">FAMILY EVENT</button>
            <button class="btn_select">TEACHER'S DAY</button>
            <button class="btn_select">BIRTHDAY</button>
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
    <!-- 이벤트별 영화 목록 추출 -->
    <!-- 데이터 : 이벤트별 영화 이미지 url, 이벤트별 영화 갯수
    테이블, 필드값: 
    1) movies Table[discription]에서 이벤트 키워드가 포함된 영화 리스트의 image TABLE[image_url], 
    2) movies TABLE 에서 장르별로 Group 해서 Count
    -->
    <div class="div_movie_section">

        <div class="div_horizontal1">
            <div class="div_horizontal">
                <h2 class="h2_text">CHRISTMAS</h2>
                <h2 class="h2_text">23개{php}</h2> <!-- 크리스마스에 해당하는 영화 갯수 count -->
            </div>
        </div>
        
        <div class="div_movie_list">
            <!-- 크리스마스에 해당하는 영화 포스터 url 
            데이터 위치: <img class="img_movie_list" src=[php 데이터 삽입] alt="My Image">-->
            <img class="img_movie_list" src="	https://www.themoviedb.org/t/p/w440_and_h660_face/xr3oGJYQWLunuw7L5myo4VT8DBz.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/un8ZDtx2SMwNwXRYy65aItnNjab.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/5YZ8JKV8i437z6O4YQ2IEzcSlsD.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/bGZn5RVzMMXju4ev7xbl1aLdXqq.jpg" alt="My Image">
            <img class="img_movie_list" src="	https://www.themoviedb.org/t/p/w440_and_h660_face/xr3oGJYQWLunuw7L5myo4VT8DBz.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/un8ZDtx2SMwNwXRYy65aItnNjab.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/5YZ8JKV8i437z6O4YQ2IEzcSlsD.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/bGZn5RVzMMXju4ev7xbl1aLdXqq.jpg" alt="My Image">
            <!-- 반복문 종료 -->
        </div>
    </div>
    <!-- 이하 동일 -->
    <div class="div_movie_section">
        
        <div class="div_horizontal2">
            <div class="div_horizontal">
                <h2 class="h2_text">WEDDING</h2>
                <h2 class="h2_text">19개{php}</h2>
            </div>
        </div>
        
        <div class="div_movie_list">
            <img class="img_movie_list" src="	https://www.themoviedb.org/t/p/w440_and_h660_face/xr3oGJYQWLunuw7L5myo4VT8DBz.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/un8ZDtx2SMwNwXRYy65aItnNjab.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/5YZ8JKV8i437z6O4YQ2IEzcSlsD.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/bGZn5RVzMMXju4ev7xbl1aLdXqq.jpg" alt="My Image">
            <img class="img_movie_list" src="	https://www.themoviedb.org/t/p/w440_and_h660_face/xr3oGJYQWLunuw7L5myo4VT8DBz.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/un8ZDtx2SMwNwXRYy65aItnNjab.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/5YZ8JKV8i437z6O4YQ2IEzcSlsD.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/bGZn5RVzMMXju4ev7xbl1aLdXqq.jpg" alt="My Image">
        </div>
    </div>

    <div class="div_movie_section">
        
        <div class="div_horizontal3">
            <div class="div_horizontal">
                <h2 class="h2_text">FAMILY EVENT</h2>
                <h2 class="h2_text">22개{php}</h2>
            </div>
        </div>
        
        <div class="div_movie_list">
            <img class="img_movie_list" src="	https://www.themoviedb.org/t/p/w440_and_h660_face/xr3oGJYQWLunuw7L5myo4VT8DBz.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/un8ZDtx2SMwNwXRYy65aItnNjab.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/5YZ8JKV8i437z6O4YQ2IEzcSlsD.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/bGZn5RVzMMXju4ev7xbl1aLdXqq.jpg" alt="My Image">
            <img class="img_movie_list" src="	https://www.themoviedb.org/t/p/w440_and_h660_face/xr3oGJYQWLunuw7L5myo4VT8DBz.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/un8ZDtx2SMwNwXRYy65aItnNjab.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/5YZ8JKV8i437z6O4YQ2IEzcSlsD.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/bGZn5RVzMMXju4ev7xbl1aLdXqq.jpg" alt="My Image">
        </div>
    </div>
    <div class="div_movie_section">
        
        <div class="div_horizontal4">
            <div class="div_horizontal">
                <h2 class="h2_text">TEACHER'S DAY</h2>
                <h2 class="h2_text">22개{php}</h2>
            </div>
        </div>
        
        <div class="div_movie_list">
            <img class="img_movie_list" src="	https://www.themoviedb.org/t/p/w440_and_h660_face/xr3oGJYQWLunuw7L5myo4VT8DBz.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/un8ZDtx2SMwNwXRYy65aItnNjab.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/5YZ8JKV8i437z6O4YQ2IEzcSlsD.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/bGZn5RVzMMXju4ev7xbl1aLdXqq.jpg" alt="My Image">
            <img class="img_movie_list" src="	https://www.themoviedb.org/t/p/w440_and_h660_face/xr3oGJYQWLunuw7L5myo4VT8DBz.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/un8ZDtx2SMwNwXRYy65aItnNjab.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/5YZ8JKV8i437z6O4YQ2IEzcSlsD.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/bGZn5RVzMMXju4ev7xbl1aLdXqq.jpg" alt="My Image">
        </div>
    </div>
    <div class="div_movie_section">
        
        <div class="div_horizontal5">
            <div class="div_horizontal">
                <h2 class="h2_text">BIRTHDAY</h2>
                <h2 class="h2_text">22개{php}</h2>
            </div>
        </div>
        
        <div class="div_movie_list">
            <img class="img_movie_list" src="	https://www.themoviedb.org/t/p/w440_and_h660_face/xr3oGJYQWLunuw7L5myo4VT8DBz.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/un8ZDtx2SMwNwXRYy65aItnNjab.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/5YZ8JKV8i437z6O4YQ2IEzcSlsD.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/bGZn5RVzMMXju4ev7xbl1aLdXqq.jpg" alt="My Image">
            <img class="img_movie_list" src="	https://www.themoviedb.org/t/p/w440_and_h660_face/xr3oGJYQWLunuw7L5myo4VT8DBz.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/un8ZDtx2SMwNwXRYy65aItnNjab.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/5YZ8JKV8i437z6O4YQ2IEzcSlsD.jpg" alt="My Image">
            <img class="img_movie_list" src="https://www.themoviedb.org/t/p/w440_and_h660_face/bGZn5RVzMMXju4ev7xbl1aLdXqq.jpg" alt="My Image">
        </div>
    </div>


</body>
</html>