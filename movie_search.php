<!DOCTYPE html>
<html>
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
            <li><a class="active" href="Home.php"><div class="cat"><i class="watching"></i><i class="watching1"></i></div></a></li>
            <li><a href="addMovie.php"><div class="bk"><i class="booking"></i><i class="booking1"></i></div></a></li>
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
                <?php
                $keyWord=$_REQUEST['moviename'];

                $conn = mysqli_connect("localhost","root","","CS542");
                if(!$conn){
                    die(" can not link to database".mysqli_error());
                }

                $sql="select * from `Movie` where `title`like '%$keyWord%'";

                //       $sql = "SELECT * FROM `TABLE 1` WHERE `COL 1`=285";
                if (!empty($keyWord)){

                    $title = mysqli_query($conn ,$sql) or die("can not search");
                    echo "<h3 class='head'>Movie Search</h3>";

                    while($row = mysqli_fetch_array($title)){



                        $movie_id = $row['movie_id'];
                        $movie_title = $row['title'];
                        $movie_time = $row['runtime'];

                        $sql_crew = "select c.name
                    from Crew c
                    where c.movie_id = $movie_id and c.job like  '%r%'  ";

                        $sql_director = "select c.name
                    from Crew c
                    where c.movie_id = $movie_id and c.job = 'director'   ";

                        $sql_cast = "select a.name from Actor a where a.movie_id = $movie_id ";
                        $sql_genre = "SELECT g.genre
           FROM Genre g
           WHERE movie_id =$movie_id";
                        $sql_score = "select r.vote_average from Reception r where r.movie_id = $movie_id";
                        $score = mysqli_query($conn,$sql_score);
                        $score_1 = mysqli_fetch_all($score);
                        $vote_score = $score_1[0][0];


                        $crew = mysqli_query($conn,$sql_crew) ;
                        $Actor = mysqli_query($conn,$sql_cast) ;
                        $director = mysqli_query($conn,$sql_director);
                        $Genre = mysqli_query($conn,$sql_genre);



                        $director_name = mysqli_fetch_array($director);
                        $director_name1 = $director_name[0];

                        $cast_name = mysqli_fetch_all($Actor);
                        $cast_name1= $cast_name[0][0];
                        $cast_name2= $cast_name[1][0];
                        $cast_name3= $cast_name[2][0];
                        $cast_name4= $cast_name[3][0];

                        $crew_name = mysqli_fetch_all($crew);
                        $crew_name1= $crew_name[0][0];
                        $crew_name2= $crew_name[1][0];
                        $crew_name3= $crew_name[2][0];
                        $crew_name4= $crew_name[3][0];

                        $genre_type = mysqli_fetch_all($Genre);
                        $genre_name1 = $genre_type[0][0];


                        echo "
                
                <div class='col-md-9 reviews-grids'>
                    <div class='review'>
                        <div class='movie-pic'>
                            <a href='movie_detail_search.php?m=$movie_id'><img src='movie_posters/$movie_id.jpg' alt='' /></a>
                            <div class='clearfix'></div>
                        </div>
                        <div class='review-info'>
                             <a class='span' href='movie_detail_search.php?m=$movie_id'>$movie_title</a>
                             <p class='dirctr'><a href='crew_detail_search.php?m=$director_name1'>&nbsp;$director_name1</a></p>	
                             <p class=\"ratingview\">Vote average:&nbsp;$vote_score/10 </p>
                        <div class=\"clearfix\"></div>
                            
                         
                            <div class='yrw'>
                               
                                <div class='rtm text'>
                                    <a href='movie_detail_search.php?m=$movie_id'>see the details</a>
                                </div>
                                <div class='clearfix'></div>
                            </div>
                            <p class = 'info'>CAST:&nbsp;&nbsp;&nbsp;&nbsp;<a href='actor_detail_search.php?b=$cast_name1'>$cast_name1</a>&nbsp;&nbsp;&nbsp; <a href='actor_detail_search.php?b=$cast_name2'>$cast_name2</a>&nbsp;&nbsp;&nbsp;
                             <a href='actor_detail_search.php?b=$cast_name3'>$cast_name3</a>&nbsp;&nbsp;&nbsp;<a href='actor_detail_search.php?b=$cast_name4'>$cast_name4</a></p>
                            <p class='info'>DIRECTION:&nbsp;&nbsp;&nbsp;&nbsp;<a href='crew_detail_search.php?c=$crew_name1'>$crew_name1</a>&nbsp;&nbsp;&nbsp; <a href='crew_detail_search.php?c=$crew_name2'>$crew_name2</a>&nbsp;&nbsp;&nbsp;
                             <a href='crew_detail_search.php?c=$crew_name3'>$crew_name3</a>&nbsp;&nbsp;&nbsp; <a href='crew_detail_search.php?c=$crew_name4'>$crew_name4</a>&nbsp;&nbsp;&nbsp;</p>
                            <p class='info'>GENRE:&nbsp;&nbsp;&nbsp;&nbsp;<a href='genre_detail_search.php?g=$genre_name1'>$genre_name1</a>&nbsp;&nbsp;&nbsp; </p>
           
                            <p class='info'>DURATION:&nbsp;&nbsp;&nbsp; &nbsp;  $movie_time minutes</p>
                        </div>
                        <div class='clearfix'></div>
                    </div>
                </div>
         ";
                    }


                }
                else{
                    echo"pleas input";

                }



                ?>

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






