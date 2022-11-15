<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Main_Page</title>
    <link href="Main_Page.css?ver=1.02" rel="stylesheet" type="text/css" />

    <!-- 사용자 이미지 누르면 정보 띄우기 -->
    <script type="text/javascript"> 
        var bDisplay = true; function doDisplay(){ 	
            var con = document.getElementById("div_login_id"); 	
            if(con.style.display=='none'){ 		
                con.style.display = 'block'; 	
            }else{ 		
                con.style.display = 'none'; 	
            } 
        }
    </script> 
</head>
<body>
    <div id="wrap">
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
                        <li><a onclick="location.href='Genre_Page.php'">GENRE</a></li>
                        <li><a onclick="location.href='Event_Page_autoscroll.php'">EVENT</a></li>
                        <li><a onclick="location.href='Community_Result_Page.php'">COMMUNITY</a></li>
                        <li><a onclick="location.href='Actor_Page.php'">KOREAN ACTOR</a></li>
                    </ul>
                </nav>
            </div>
            

            <div class="div_img">
                <img src="images/alarm.png" alt="alarm" width="30px" height="30px">
                <img onclick="javascript:doDisplay();" src="images/user.png" alt="alarm" width="30px" height="30px">
            </div>

        </div>

        <div class="div_login" id="div_login_id">
            <h2 class="text_login">로그인이 필요해요 :)</h2>
            <hr class="hr_login_division">
            <div class="div_horizontal">
                <button id="btn_login_id" class="btn_login">로그인</button>
                <button class="btn_login">회원가입</button>
            </div>
        </div>

        <hr class="hr_division">

        <h1 class="text_main_section">What should I watch?</h1>

        <!-- 인지도에 따른 영화 순위 -->
        <div class="div_ott_section">
            <h2 class="text_subtitle">AWARENESS</h2>
        </div>
        
        <div class="div_rank_list_text">
            <h2 class="text_rank_green">1</h2>
            <h2 class="text_rank_green">2</h2>
            <h2 class="text_rank_green">3</h2>
            <h2 class="text_rank_green">4</h2>
        </div>
        <!-- 
            데이터: 영화 포스터 이미지
            테이블, 필드값: ex. image TABLE, image_url
            데이터가 들어갈 위치: <img class="img_rank_list" src="[실제 데이터]" alt="My Image">
            비고: X
        -->
        <div class="div_rank_list">
            <img class="img_rank_list" src="images/movie1.png" alt="My Image" onclick="location.href='Detail_Page.php'">
            <img class="img_rank_list" src="images/movie1.png" alt="My Image" onclick="location.href='Detail_Page.php'">
            <img class="img_rank_list" src="images/movie1.png" alt="My Image" onclick="location.href='Detail_Page.php'">
            <img class="img_rank_list" src="images/movie1.png" alt="My Image" onclick="location.href='Detail_Page.php'">
        </div>


        <!-- 별점에 따른 영화 순위 -->
        <div class="div_ott_section">
            <h2 class="text_subtitle">RATING</h2>
        </div>

        <div class="div_rank_list_text">
            <h2 class="text_rank_green">1</h2>
            <h2 class="text_rank_green">2</h2>
            <h2 class="text_rank_green">3</h2>
            <h2 class="text_rank_green">4</h2>
        </div>
        <!-- 
            데이터: 영화 포스터 이미지
            테이블, 필드값: ex. image TABLE, image_url
            데이터가 들어갈 위치: <img class="img_rank_list" src="[실제 데이터]" alt="My Image">
            비고: X
        -->
        <div class="div_rank_list">
            <img class="img_rank_list" src="images/movie1.png" alt="My Image" onclick="location.href='Detail_Page.php'">
            <img class="img_rank_list" src="images/movie1.png" alt="My Image" onclick="location.href='Detail_Page.php'">
            <img class="img_rank_list" src="images/movie1.png" alt="My Image" onclick="location.href='Detail_Page.php'">
            <img class="img_rank_list" src="images/movie1.png" alt="My Image" onclick="location.href='Detail_Page.php'">
        </div>


        <!-- 수익에 따른 영화 순위 -->
        <div class="div_ott_section">
            <h2 class="text_subtitle">PROFIT</h2>
        </div>

        <div class="div_rank_list_text">
            <h2 class="text_rank_green">1</h2>
            <h2 class="text_rank_green">2</h2>
            <h2 class="text_rank_green">3</h2>
            <h2 class="text_rank_green">4</h2>
        </div>
        <!-- 
            데이터: 영화 포스터 이미지
            테이블, 필드값: ex. image TABLE, image_url
            데이터가 들어갈 위치: <img class="img_rank_list" src="[실제 데이터]" alt="My Image">
            비고: X
        -->
        <div class="div_rank_list">
            <img class="img_rank_list" src="images/movie1.png" alt="My Image" onclick="location.href='Detail_Page.php'">
            <img class="img_rank_list" src="images/movie1.png" alt="My Image" onclick="location.href='Detail_Page.php'">
            <img class="img_rank_list" src="images/movie1.png" alt="My Image" onclick="location.href='Detail_Page.php'">
            <img class="img_rank_list" src="images/movie1.png" alt="My Image" onclick="location.href='Detail_Page.php'">
        </div>
    </div>

    <!-- modal 영역 -->
    <!-- <div class="modal hidden">
        <div class="bg"></div>
        <div class="modalBox">
            <p>Testing</p>
            <button class="closeBtn"></button>
        </div>
    </div> -->

    <div class="modal hidden">
        <div class="bg"></div>
        <div class="modalBox">

        <!-- 오른쪽 상단의 X 버튼 -->
        <img class="img_btn_close" src="images/btn_close.png" alt="close">
                    
            <div class="div_vertical_middle">                
                <hr class="hr_division">
                <h2 class="text_gray">WELCOME TO</h2>

                <div class="div_logo">
                    <hr class="hr_logo">
                    <h1 class="text_green2">WHO's TT</h1>
                    <hr class="hr_logo">
                </div>

                <br>

                <hr class="hr_division">

                <!-- id 입력 -->
                <div class="div_horizontal">
                    <h2 class="text_green2">ID</h2>
                    <form>
                        <input class="input_login" type="text" size="15" placeholder="사용자의 ID를 입력하세요.">
                    </form>
                </div>
                
                <!-- pw 입력 -->
                <div class="div_horizontal">
                    <h2 class="text_green2">PW</h2>
                    <form>
                        <input class="input_login" type="password" size="15" placeholder="사용자의 PW를 입력하세요.">
                    </form>
                </div>

                <br>

                <!-- 로그인 버튼 -->
                <button class="btn_login_modal" type="submit">LOGIN</button>

                <br>

                <!-- 아이디/비밀번호 찾기 -->
                <div class="div_horizontal">
                    <p class="text_gray_p">FORGOT ID/PW?</p>
                    <p class="text_gray_p">HERE</p>
                </div>

                <!-- 회원가입 -->
                <div class="div_horizontal">
                    <p class="text_gray_p">DON'T HAVE AN ACCOUNT?</p>
                    <p class="text_gray_p">HERE</p>
                </div>
            </div>   

            
        </div>
    </div>

    <script>
        const open = () => {
            document.querySelector(".modal").classList.remove("hidden");
        }

        const close = () => {
            document.querySelector(".modal").classList.add("hidden");
        }

        document.querySelector("#btn_login_id").addEventListener("click", open);
        document.querySelector(".img_btn_close").addEventListener("click", close);
        document.querySelector(".bg").addEventListener("click", close);

    </script>

</body>
</html>