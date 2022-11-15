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
    <hr>
    <div class="movie_detail">
        <div class="left_detail">
                <h2 class="h2_title">{MOVIE TITLE php}</h2> <!-- php 삽입: 선택한 이미지 url에 매칭되는 movie title 노출 -->
                <img src=https://www.themoviedb.org/t/p/w600_and_h900_bestv2/xr3oGJYQWLunuw7L5myo4VT8DBz.jpg width="400"> <!--php 삽입(src=): 해당 영화의 이미지 url-->
        </div>
        
        <div class="right_detail"> 
            <h2 class="h2_title">MOVIE DETAIL</h2>
          
            <table border="1">
                <tr>
                    <td id="column">제목</td>
                    <td id="detail">{영화제목 데이터 표시php}</td><!--php 삽입: title-->
                </tr>
                <tr>
                    <td id="column">설명</td>
                    <td id="detail">{설명 데이터 표시php}</td><!--php 삽입: description-->
                </tr>
                <tr>
                    <td id="column">개봉년도</td>
                    <td id="detail">{개봉년도 데이터 표시php}</td><!--php 삽입: year-->
                </tr>  
                <tr>
                    <td id="column">연령제한</td>
                    <td>{연령 데이터 표시php}</td><!--php 삽입: age-->
                </tr>  
                <tr>
                    <td id="column">상영시간</td>
                    <td id="detail">{러닝타임 데이터 표시php}</td><!--php 삽입: running_time-->
                </tr>  
                <tr>
                    <td id="column">장르</td>
                    <td id="detail">{장르 데이터 표시php}</td><!--php 삽입: genre-->
                </tr>      
            </table>
            
        </div>
    </div> 

</body>
</html>