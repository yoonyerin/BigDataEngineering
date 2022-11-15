<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Favor_Page</title>
    <link href="Favor_Page.css" rel="stylesheet" type="text/css" />
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

    <!-- OTT 선택하는 section -->
    <div class="div_otttype_section">
        
        <h2 class="text_green_h2">MOVIES PER OTT TYPE</h2>

        <div class="div_ott_select">
            <img class="img_ott_select" src="images/netflex.png" alt="My Image">
            <img class="img_ott_select" src="images/disney.png" alt="My Image">
            <img class="img_ott_select" src="images/prime.png" alt="My Image">
            <img class="img_ott_select" src="images/hulu.png" alt="My Image">
        </div>

    </div>

    <hr class="hr_division">

    <!-- 사용자가 선호하는 영화를 선택하는 section -->
    <div class="div_horizontal">
        <h2 class="text_green_h2">WHAT WOULD YOU LIKE TO SEE?</h2>
        <button class="btn_submit">SUBMIT</button>
    </div>

    <!-- 
        데이터: 영화 포스터 이미지
        테이블, 필드값: ex. image TABLE, image_url
        데이터가 들어갈 위치: <img class="img_favor_list" src="[실제 데이터]" alt="My Image">
        비고: [반복문] 하나의 div마다 img가 최대 4개 포함, 아래 코드는 12개의 데이터일 경우
     -->
    <div class="div_favor_list">
        <div class="div_favor_list_chk">
            <img class="img_favor_list" src="images/movie1.png" alt="My Image">
            <p class="text_detail">상세보기</p>
            <label for="chk1" class="chk_box">
                <input type="checkbox" id="chk1"/>
                <span class="on"></span>
                선택
            </label>
        </div>
        <div class="div_favor_list_chk">
            <img class="img_favor_list" src="images/movie2.png" alt="My Image">
            <p class="text_detail">상세보기</p>
            <label for="chk2" class="chk_box">
                <input type="checkbox" id="chk2" />
                <span class="on"></span>
                선택
            </label>
        </div>
        <div class="div_favor_list_chk">
            <img class="img_favor_list" src="images/movie3.png" alt="My Image">
            <p class="text_detail">상세보기</p>
            <label for="chk3" class="chk_box">
                <input type="checkbox" id="chk3"/>
                <span class="on"></span>
                선택
            </label>
        </div>
        <div class="div_favor_list_chk">
            <img class="img_favor_list" src="images/movie3.png" alt="My Image">
            <p class="text_detail">상세보기</p>
            <label for="chk4" class="chk_box">
                <input type="checkbox" id="chk4" />
                <span class="on"></span>
                선택
            </label>
        </div>
    </div>

    <div class="div_favor_list">
        <div class="div_favor_list_chk">
            <img class="img_favor_list" src="images/movie1.png" alt="My Image">
            <p class="text_detail">상세보기</p>
            <label for="chk5" class="chk_box">
                <input type="checkbox" id="chk5"/>
                <span class="on"></span>
                선택
            </label>
        </div>
        <div class="div_favor_list_chk">
            <img class="img_favor_list" src="images/movie2.png" alt="My Image">
            <p class="text_detail">상세보기</p>
            <label for="chk6" class="chk_box">
                <input type="checkbox" id="chk6" />
                <span class="on"></span>
                선택
            </label>
        </div>
        <div class="div_favor_list_chk">
            <img class="img_favor_list" src="images/movie3.png" alt="My Image">
            <p class="text_detail">상세보기</p>
            <label for="chk7" class="chk_box">
                <input type="checkbox" id="chk7"/>
                <span class="on"></span>
                선택
            </label>
        </div>
        <div class="div_favor_list_chk">
            <img class="img_favor_list" src="images/movie3.png" alt="My Image">
            <p class="text_detail">상세보기</p>
            <label for="chk8" class="chk_box">
                <input type="checkbox" id="chk8" />
                <span class="on"></span>
                선택
            </label>
        </div>
    </div>

    <div class="div_favor_list">
        <div class="div_favor_list_chk">
            <img class="img_favor_list" src="images/movie1.png" alt="My Image">
            <p class="text_detail">상세보기</p>
            <label for="chk9" class="chk_box">
                <input type="checkbox" id="chk9"/>
                <span class="on"></span>
                선택
            </label>
        </div>
        <div class="div_favor_list_chk">
            <img class="img_favor_list" src="images/movie2.png" alt="My Image">
            <p class="text_detail">상세보기</p>
            <label for="chk10" class="chk_box">
                <input type="checkbox" id="chk10" />
                <span class="on"></span>
                선택
            </label>
        </div>
        <div class="div_favor_list_chk">
            <img class="img_favor_list" src="images/movie3.png" alt="My Image">
            <p class="text_detail">상세보기</p>
            <label for="chk11" class="chk_box">
                <input type="checkbox" id="chk11"/>
                <span class="on"></span>
                선택
            </label>
        </div>
        <div class="div_favor_list_chk">
            <img class="img_favor_list" src="images/movie3.png" alt="My Image">
            <p class="text_detail">상세보기</p>
            <label for="chk12" class="chk_box">
                <input type="checkbox" id="chk12" />
                <span class="on"></span>
                선택
            </label>
        </div>
    </div>
    <!-- =================== 반복문 end ================== -->

</body>
</html>