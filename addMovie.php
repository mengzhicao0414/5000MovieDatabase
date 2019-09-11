<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
    <title>Reviews</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <script src="js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Cinema Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="full">
    <div class="menu">
        <ul>
            <li><a href="index.php"><div class="hm"><i class="home1"></i><i class="home2"></i></div></a></li>
            <li><a  href="Home.php"><div class="cat"><i class="watching"></i><i class="watching1"></i></div></a></li>
            <li><a class="active" href="addMovie.php"><div class="bk"><i class="booking"></i><i class="booking1"></i></div></a></li>
            <li><a class = 'info'href="movies.php">Movie</classa></li>
            <li><a class = 'info'href="actors.php">Actor</classa></li>
            <li><a class = 'info'href="directors.php">Crew</classa></li>
            <li><a class = 'info'href="critiques.php">Reception</classa></li>
        </ul>
    </div>
    <div class="main">
        <div class="review-content">
            <div class="top-header span_top">
                <div class="logo">
                    <a href="index.html"><img src="movie_posters/logo11.jpg"  /></a>
                </div>
                <div class="search v-search">
                    <form action="movie_search.php" method="post">
                        <input name = "moviename" type="text" placeholder="name"/>
                        <input type="submit" value="">
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="reviews-section">
                <div class="w3-container w3-card-2" >
                    <div class="w3-container w3-card-2 w3-teal">
                        <h1>Add New Movie</h1>
                    </div>

                    <br><br>

                    <form action="./addMovie.php" id="addform" method="post">
                        <label>Title</label>
                        <input class="w3-input w3-border w3-round" type="text" name="title" form="addform">

                        <br>

                        <label>Run Time</label>
                        <input class="w3-input w3-border w3-round" type="text" name="runtime" form="addform">

                        <br>

                        <label>Release Date</label>
                        <input class="w3-input w3-border w3-round" type="date" name="date" form="addform">

                        <label>Budget</label>
                        <input class="w3-input w3-border w3-round" type="text" name="budget" form="addform">

                        <label>Original Language</label>
                        <input class="w3-input w3-border w3-round" type="text" name="OL" form="addform">



                        <!--        <br>-->
                        <!---->
                        <!--        <label>MPAA Rating</label>-->
                        <!--        <select class="w3-select w3-border" name="rating">-->
                        <!--            <option value="" disabled selected>Choose Rating</option>-->
                        <!--            <option value="G">G</option>-->
                        <!--            <option value="PG">PG</option>-->
                        <!--            <option value="PG-13">PG-13</option>-->
                        <!--            <option value="PG13">PG-13</option>-->
                        <!--            <option value="R">R</option>-->
                        <!--            <option value="NC-17">NC-17</option>-->
                        <!--            <option value="surrendere">surrendere</option>-->
                        <!--        </select>-->


                        <br><br>

                        <!--        <label>Genre</label>-->
                        <!--        <select class="w3-select w3-border" name="option">-->
                        <!--            <option value="" disabled selected>Choose Genre</option>-->
                        <!--            <option value="Action">Action</option>-->
                        <!--            <option value="Adult">Adult</option>-->
                        <!--            <option value="Adventure">Adventure</option>-->
                        <!--            <option value="Animation">Animation</option>-->
                        <!--            <option value="Comedy">Comedy</option>-->
                        <!--            <option value="Crime">Crime</option>-->
                        <!--            <option value="Documentary">Documentary</option>-->
                        <!--            <option value="Drama">Drama</option>-->
                        <!--            <option value="Family">Family</option>-->
                        <!--            <option value="Fantasy">Fantasy</option>-->
                        <!--            <option value="Horror">Horror</option>-->
                        <!--            <option value="Musical">Musical</option>-->
                        <!--            <option value="Mystery">Mystery</option>-->
                        <!--            <option value="Romance">Romance</option>-->
                        <!--            <option value="Sci-Fi">Sci-Fi</option>-->
                        <!--            <option value="Short">Short</option>-->
                        <!--            <option value="Thriller">Thriller</option>-->
                        <!--            <option value="War">War</option>-->
                        <!--            <option value="Western">Western</option>-->
                        <!--        </select>-->
                        <!---->
                        <!---->
                        <!--        <label>Genre</label>-->
                        <!--        <select class="w3-select w3-border" name="option1">-->
                        <!--            <option value="" disabled selected>Choose Genre</option>-->
                        <!--            <option value="Action">Action</option>-->
                        <!--            <option value="Adult">Adult</option>-->
                        <!--            <option value="Adventure">Adventure</option>-->
                        <!--            <option value="Animation">Animation</option>-->
                        <!--            <option value="Comedy">Comedy</option>-->
                        <!--            <option value="Crime">Crime</option>-->
                        <!--            <option value="Documentary">Documentary</option>-->
                        <!--            <option value="Drama">Drama</option>-->
                        <!--            <option value="Family">Family</option>-->
                        <!--            <option value="Fantasy">Fantasy</option>-->
                        <!--            <option value="Horror">Horror</option>-->
                        <!--            <option value="Musical">Musical</option>-->
                        <!--            <option value="Mystery">Mystery</option>-->
                        <!--            <option value="Romance">Romance</option>-->
                        <!--            <option value="Sci-Fi">Sci-Fi</option>-->
                        <!--            <option value="Short">Short</option>-->
                        <!--            <option value="Thriller">Thriller</option>-->
                        <!--            <option value="War">War</option>-->
                        <!--            <option value="Western">Western</option>-->
                        <!--        </select>-->
                        <!---->
                        <input type="hidden" name="hide" value="1">

                        <br><br>
                        <input class="w3-btn w3-green" type="submit">
                        <br><br>

                    </form>
                    <?php

                    $flag = $_POST["hide"];
                    if($flag == 1) {


                        $conn = mysqli_connect("localhost","root","","CS542");

//

                        $local_title=$_POST['title'];
                        $local_runtime=$_POST['runtime'];
                        $local_date=$_POST['date'];
                        $local_budget=$_POST['budget'];
                        $local_ol=$_POST['OL'];
//        $local_option1=$_POST['option1'];
                        $search_MAX = "select MAX(movie_id) from Movie";
                        $result = mysqli_query($conn,$search_MAX);
                        $max = mysqli_fetch_array($result);

                        $max = $max[0]+1;

                        $insert_query ="insert into Movie values('$max','$local_title', '$local_budget' , '$local_date','$local_ol','$local_runtime')";
                        echo $insert_query;

                        $result = mysqli_query($conn,$insert_query);

//        $query2="insert into MovieGenre values($local_mid,'$local_option')";
//        $query21="insert into MovieGenre values($local_mid,'$local_option1')";
//        if ($result)
//        {
//
//            $result2=mysql_query($query2, $db_connection);
//            $result2=mysql_query($query21, $db_connection);
//        }
//        $query3="update MaxMovieID set id=$local_mid";
//        echo $query3;
//
//        if ($result and $result2)$result3=mysql_query($query3, $db_connection);
//
                    }

                    ?>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
        <div class="review-slider">
            <ul id="flexiselDemo1">
                <li><img src="images/r1.jpg" alt=""/></li>
                <li><img src="images/r2.jpg" alt=""/></li>
                <li><img src="images/r3.jpg" alt=""/></li>
                <li><img src="images/r4.jpg" alt=""/></li>
                <li><img src="images/r5.jpg" alt=""/></li>
                <li><img src="images/r6.jpg" alt=""/></li>
            </ul>
            <script type="text/javascript">
                $(window).load(function() {

                    $("#flexiselDemo1").flexisel({
                        visibleItems: 6,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,
                        pauseOnHover: false,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint:480,
                                visibleItems: 2
                            },
                            landscape: {
                                changePoint:640,
                                visibleItems: 3
                            },
                            tablet: {
                                changePoint:768,
                                visibleItems: 3
                            }
                        }
                    });
                });
            </script>
            <script type="text/javascript" src="js/jquery.flexisel.js"></script>
        </div>
        <div class="footer">
            <h6>CS542  </h6>
            <p class="claim"> Mengzhi Cao&nbsp; mcao@wpi.edu<br> Ruofan Hu rhu&nbsp;@wpi.edu
                <br>
                Sam Longenbach &nbsp;shlongenbach@wpi.edu <br>Erin Teeple &nbsp;eteeple@wpi.edu</p>


        </div>
    </div>
    <div class="clearfix"></div>
</div>
</body>
</html>








