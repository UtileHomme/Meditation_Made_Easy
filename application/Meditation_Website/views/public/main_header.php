<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meditation Tracking Website</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.css" />

    <link href="assets/css/CustomStyles.css" rel="stylesheet" />
    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet" /> -->


</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <!-- <span class="sr-only">Toggle navigation</span> -->
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?= anchor('user','Meditation Tracking Made Easy',['class'=>'navbar-brand']) ?>
            </div>

            <div class="navbar-collapse collapse " >
                <ul class="nav navbar-nav navbar-right ">
                    <li><?= anchor('user/about','About','style="font-size:15px;"')?></li>
                    <li><?= anchor('register','<span class="glyphicon glyphicon-user"> SignUp</span>')?></li>
                    <li><?= anchor('login','<span class="glyphicon glyphicon-log-in"> Login</span>') ?></li>
                </ul>
            </div>

            </div>
        </nav>



    <div id="imageCarousel" class="carousel slide" data-wrap="true" data-pause="false" data-interval="false" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#imageCarousel" data-slide-to="1"></li>
            <li data-target="#imageCarousel" data-slide-to="2"></li>
            <li data-target="#imageCarousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="assets/images/med28.jpg" style="width:1300px; height:632px;" class="img-responsive" />
                <!-- <div class="carousel-caption">
                    <h3 class="text-primary">Meditation 2</h3>
                    <p >Dog meditating funny</p>
                </div> -->
            </div>

            <div class="item">
                <img src="assets/images/med34.jpg" style="width:1300px; height:600px;" class="img-responsive" />
                <!-- <div class="carousel-caption">
                    <h3 >Meditation 3</h3>
                    <p>Meditation</p>
                </div> -->
            </div>

            <div class="item">
                <img src="assets/images/med30.jpg" style="width:1300px; height:600px;" class="img-responsive" />
                <!-- <div class="carousel-caption">
                    <h3>Meditation 4</h3>
                    <p>Medition galore</p>
                </div> -->
            </div>

            <div class="item">
                <img src="assets/images/med31.jpg" style="width:1300px; height:600px;" class="img-responsive" />
                <!-- <div class="carousel-caption">
                    <h3>Meditation 5</h3>
                    <p>Dog meditating funny 2</p>
                </div> -->
            </div>
        </div>

        <a class="left carousel-control" href="#imageCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#imageCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function()
    {
        $('#imageCarousel').carousel();
    }
    );
</body>
</html>
