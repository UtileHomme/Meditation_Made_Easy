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

    <link href="../assets/css/About.css" rel="stylesheet" />
    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet" /> -->


</head>
<body>




    <nav class="navbar navbar-inverse">
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


    <div class="container-fluid bg-1 text-center" style="padding-top:50px; padding-bottom:50px;">
        <h3>Who Am I?</h3>
        <img src="../assets/images/med1.jpg" class="img-circle " alt="ME" />
        <h3>I am a web developer in the making</h3>
    </div>
    <div class="container-fluid bg-2 text-center" style="padding-top:50px; padding-bottom:50px;">
        <h3>What I can do for you?</h3>
        <p>I know you have a hard time keeping track of your meditation sessions.</p>
        <p>
            Don't Worry!! My website lets you log and manage your sessions without any hassle.
        </p>
        <p>Simply SignUp and Login!!</p>
    </div>
    <div class="container-fluid bg-3 text-center" style="padding-top:50px; padding-bottom:50px;">
        <h3>Where can you find me?</h3>
        <p>jatins368@gmail.com</p>
    </div>

    <footer class="container-fluid bg-4 text-center" style="padding-top:50px; padding-bottom:50px;">
        <p>Website created by Jatin Sharma</p>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
