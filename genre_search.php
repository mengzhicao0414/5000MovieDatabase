<html>
<head>
    <title>genre_movie</title>
    <meta http-equiv ="content-type" contenet="text/html;charset=utf-8" />
</head>

<?php
     $sel=$_REQUEST["Genre"];

     $conn = mysqli_connect("localhost","root","","CS542");
     if(!$conn){
         die(" can not link to database".mysqli_error());
     }

     $sql="SELECT Movie.title, Genre.genre 
           FROM `Movie` INNER JOIN `Genre`
           WHERE `genre` = '$sel' 
           ORDER BY `runtime`";
     if (!empty($sel)){
         $res = mysqli_query($conn ,$sql) or die("can not search".mysqli_error());
         while($row = mysqli_fetch_array($res)){
             echo"<br/>$row[0]&nbsp;&nbsp;$row[1]";}
     }
     else{
         echo"please input";

     }
?>


