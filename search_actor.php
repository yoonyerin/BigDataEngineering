<?php
#    include("./basic_php_files/mysql_connect.php");
#    $sql="select mid from movies_korean where cast like concat ('%',".$_POST['input_event'].", '%');";
#    $res=mysqli_query($mysqli, $sql);

    header( 'Location: ./Actor_Page.php' );
    
?>