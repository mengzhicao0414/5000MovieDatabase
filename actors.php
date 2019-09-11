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
            <li><a  href="Home.php"><div class="cat"><i class="watching"></i><i class="watching1"></i></div></a></li>
            <li><a href="addMovie.php"><div class="bk"><i class="booking"></i><i class="booking1"></i></div></a></li>
            <li><a class = 'info'href="movies.php">Movie</classa></li>
            <li><a class="active" class = 'info'href="actors.php">Actor</classa></li>
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
                require "query-engine.php";
                require "display-engine.php";

                $Query = "SELECT " . return_attributes("Actor") . " FROM Actor";
                display_query($Query, "Actor");
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








<!DOCTYPE html>
<html>
  <head>
    <title>Movie Database Results</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://code.jquery.com/jquery-2.0.3.min.js" defer></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js" defer></script>
  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">5000 Movie Database</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="Home.php">Movie_search</a></li>
                <li><a href="movies.php">Movies</a></li>
                <li><a href="actors.php">Actors</a></li>
                <li><a href="directors.php">Crew</a></li>
                <li><a href="critiques.php">Reviews</a></li>
                <li><a href="addMovie.php">AddMovie</a></li>
            </ul>
        <p class="navbar-text navbar-right hidden-xs">Actor</li></p>
      </div><!-- /.navbar-collapse -->
    </nav>



    <main class="container">



    </main>

  </body>
</html>
</div>
</div>

