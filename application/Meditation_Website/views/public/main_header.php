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

    <style type="text/css">
    body { background:#ffff99 !important; /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
        /*background-image: url('assets/images/med2.jpg') no-repeat center center;
        /*background-size: cover;
        min-height: 100vh;
        padding-top: 20px;
        padding-bottom: 20px;*/
        }
        html
        {
        background-image: url('assets/images/med14.jpg');
        width: 100vw;
        height: 100vh;
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }

    .navbar
    {
    overflow: auto;
    /*background:transparent;*/
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?= anchor('user','Meditation Tracking Made Easy',['class'=>'navbar-brand']) ?>
            </div>

            <div class="collapse navbar-collapse" >
                <ul class="nav navbar-nav navbar-right ">
                    <li><?= anchor('user/about','About') ?></li>
                    <li><?= anchor('register','Register') ?></li>
                    <li><?= anchor('login','Login') ?></li>

                </ul>
            </div>
        </div>
    </nav>
