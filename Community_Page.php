<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Community_Page</title>
    <link href="Community.css" rel="stylesheet" type="text/css" />
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
                <li><a  class="text_green" onclick="location.href='Community_Page.php'">COMMUNITY</a></li>
                <li><a onclick="location.href='initial_actor_page.php'">KOREAN ACTOR</a></li>
            </ul>
        </nav>
        </div>

        <div class="div_img">
        <img src="images/alarm.png" alt="alarm" width="30px" height="30px">
        <img src="images/user.png" alt="alarm" width="30px" height="30px">
        </div>

    </div>

    <hr class="hr_division">

</body>
</html>
<body>
<div class=poster>
    <h2 class="h2_community_title">{MOVIE TITLE}</h2>
        <img class=detail_img src=https://www.themoviedb.org/t/p/w600_and_h900_bestv2/xr3oGJYQWLunuw7L5myo4VT8DBz.jpg height="500px">
</div>    
<div class=board>
    <!-- php 삽입 -->
    <h2 class="h2_community_title"><b>Community</b></h2>
    <table align=center>
        <thead align="center">
            <tr>
                <td width="50" align="center">Index</td>
                <td width="500" align="center">Title</td>
                <td width="100" align="center">Date</td>
                <td width="200" align="center">Name</td>
            </tr>
        </thead>

        <tbody>
                    <tr class="even">
                    <td width="50" align="center">1</td>
                    <td width="500" align="center"><a href=community_read.php>재밌어요</a></td>
                    <td width="200" align="center">2022.11.13</td>
                    <td width="50" align="center">나00</td>
                    </tr>
        </tbody>
    </table>

    <div class=text>
        <button id=writeButton style="cursor: hand" onClick="location.href='community_write.php'">WRITE</button>
    </div>
</div>
</body>

</html>