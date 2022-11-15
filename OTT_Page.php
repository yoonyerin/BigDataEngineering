<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>OTT_Page</title>
    <link href="OTT_Page.css" rel="stylesheet" type="text/css" />
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
                <li><a class="text_green" onclick="location.href='Favor_Page.php'">OTT SERVICE</a></li>
                <li><a onclick="location.href='Genre_Page.php'">GENRE</a></li>
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

    <!-- 사용자가 선택한 OTT에 따른 영화를 보여주는 section -->
    <div class="div_ott_section">
        <h2 class="text_subtitle">NETFLEX</h2>
    </div>

    <div class="div_ottmovie_section">

        <!-- 
            데이터: 영화 포스터 이미지
            테이블, 필드값: ex. image TABLE, image_url
            데이터가 들어갈 위치: <img class="img_favor_list" src="[실제 데이터]" alt="My Image">
            비고: [반복문] 하나의 div마다 img가 최대 4개 포함, 아래 코드는 20개의 데이터일 경우
        -->
        <div class="div_favor_list">
            <img class="img_favor_list" src="images/movie1.png" alt="My Image">
            <img class="img_favor_list" src="images/movie2.png" alt="My Image">
            <img class="img_favor_list" src="images/movie3.png" alt="My Image">
            <img class="img_favor_list" src="images/movie1.png" alt="My Image">
        </div>

        <div class="div_favor_list">
            <img class="img_favor_list" src="images/movie1.png" alt="My Image">
            <img class="img_favor_list" src="images/movie2.png" alt="My Image">
            <img class="img_favor_list" src="images/movie3.png" alt="My Image">
            <img class="img_favor_list" src="images/movie1.png" alt="My Image">
        </div>

        <div class="div_favor_list">
            <img class="img_favor_list" src="images/movie1.png" alt="My Image">
            <img class="img_favor_list" src="images/movie2.png" alt="My Image">
            <img class="img_favor_list" src="images/movie3.png" alt="My Image">
            <img class="img_favor_list" src="images/movie1.png" alt="My Image">
        </div>

        <div class="div_favor_list">
            <img class="img_favor_list" src="images/movie1.png" alt="My Image">
            <img class="img_favor_list" src="images/movie2.png" alt="My Image">
            <img class="img_favor_list" src="images/movie3.png" alt="My Image">
            <img class="img_favor_list" src="images/movie1.png" alt="My Image">
        </div>

        <div class="div_favor_list">
            <img class="img_favor_list" src="images/movie1.png" alt="My Image">
            <img class="img_favor_list" src="images/movie2.png" alt="My Image">
            <img class="img_favor_list" src="images/movie3.png" alt="My Image">
            <img class="img_favor_list" src="images/movie1.png" alt="My Image">
        </div>
        <!-- =================== 반복문 end ================== -->

    </div>

</body>
</html>