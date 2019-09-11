<!DOCTYPE html>
<html>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
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
                $keyWord = $_GET['a'];
                $conn = mysqli_connect("localhost","root","","CS542");

                if(!$conn){
                    die(" can not link to database".mysqli_error());
                }

                $sql_detail_character="select title, A.movie_id,A.name
 from Actor A, Movie M
where A.movie_id = M.movie_id and A.character= '$keyWord'";

                if (!empty($keyWord)){
                    echo"<h1>Character: $keyWord</h1>";
                    echo "<table >
         <tr>
         <th>Title</th>
         <th>Actor_name</th>
         </tr>";

                    $character_detail = mysqli_query($conn ,$sql_detail_character) or die("can not search");
                    while($row = mysqli_fetch_array($character_detail)){
                        echo "<tr>";
                        $movie_id = $row['movie_id'];
                        $movie_title = $row['title'];
                        echo "<td>" . "<a href='movie_detail_search.php?m=$movie_id'>$movie_title</a><br> " . "</td>";
                        $actor_1 = $row['name'];
                        echo "<td>" . "<a href='actor_detail_search.php?b=$actor_1'>$actor_1<br></a>". "</td>";
                        echo "</tr>";}
                    echo "</table>";
                    echo "<br>";}
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







