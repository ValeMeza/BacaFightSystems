<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">


    <!-- My Custom CSS vmeza3@cnm.edu -->
    <link rel="stylesheet" href="css/style.css" type="text/css"/>


    <title>Baca Fight Systems</title>

    <!-- Bootstrap Core CSS -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom CSS -->
    <!--    <link href="css/full-width-pics.css" rel="stylesheet">-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Baca Fight Systems</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Classes</a>
                </li>
                <li>
                    <a href="#">Schedule</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Full Width Image Header with Logo -->
<!-- Image backgrounds are set within the full-width-pics.css file. -->
<header class="image-bg-fluid-height">
    <div class="col-md-4 col-sm-4 col-xs-3">
    <img class="img-responsive" src="images/Image1.jpg" alt="Image1">
    </div>
    <div class="col-md-4 col-sm-4 col-xs-3">
        <img class="img-responsive" src="images/Image2.jpg">
    </div>
</header>

<!-- Content Section -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="About">About</h1>
                <p class="lead section-lead">Gain self-confidence and discipline through Muay Thai, boxing and kickboxing. Additional classes include Women's Fitness and Little Cobras.<br/>
                <h2>Description</h2><br/>
                Baca Fight Systems is a family owned and operated dojo specializing in Muay Thai, kickboxing and boxing. We also provide women's fitness classes. Our instructors individually have 8+ years experience in Muay Thai, Kickboxing, boxing or various forms of karate. We emphasize togetherness, hard work and growth, both physically and mentally.</p>
                <p class="Classes"> </p>
<!--                    <div class="col-md-8">
                    <div class="col-md-4 col-sm-4 col-xs-3"><img class="img-responsive" src="images/Image1.jpg"  title="My Caption"></div>
                </div>-->
            </div>
        </div>
    </div>
</section>

<!-- Fixed Height Image Aside -->
<!-- Image backgrounds are set within the full-width-pics.css file. -->
<!--<aside class="image-bg-fixed-height"></aside>-->

<!-- Content Section -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="Contact">Location and Hours</h1>
                <ul>
                    <li>Monday 4:30 PM - 7:00 PM</li>
                    <li>Tuesday 5:30 PM - 8:00 PM</li>
                    <li>Wednesday 4:30 PM - 7:00 PM</li>
                    <li>Thursday 5:30 PM - 7:00 PM</li>
                    <li>Friday 5:00 PM - 7:00 PM</li>
                    <li>Saturday 10:00 AM - 7:00 PM</li>
                    <li>Sunday CLOSED</li>
                </ul>
            </div>
        <div class="row">
            <div class="col-md-4">
                <div id="map">
                    <script>function initMap() {
                            var uluru = {lat: 	35.0941191, lng: -106.57799749999998};
                            var map = new google.maps.Map(document.getElementById('map'), {
                                zoom: 18,
                                center: uluru
                            });
                            var marker = new google.maps.Marker({
                                position: uluru,
                                map: map
                            });
                        }</script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5NVACyOsDDSlEpPDxLUxWxqsJi6PulnU&callback=initMap" async defer>
                    </script>
                </div>
            </div>
            </div>
        </div>
    </div>

    <!-- /.container -->
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p>BacaFightSystems</p>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</footer>
</body>

</html>