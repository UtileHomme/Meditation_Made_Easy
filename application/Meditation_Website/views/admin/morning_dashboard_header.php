<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Morning Session Search Results</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style type="text/css">
body { background:#ffff99 !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
</style>


</head>
<body>




<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!-- the link is the controller along with the function -->
    <?= anchor('admin/dashboard','Session Dashboard',['class'=>'navbar-brand']) ?>
    <?= anchor('morningsession/morning_dashboard','Morning Session',['class'=>'navbar-brand']) ?>
    <?= anchor('eveningsession/evening_dashboard','Evening Session',['class'=>'navbar-brand']) ?>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?= form_open('morningsession/search',['class'=>'navbar-form navbar-left','role'=>'search']) ?>
        <!-- <form class="navbar-form navbar-left",role="search"> -->
            <div class="form-group">
                <input type="text" name="query" class="form-control" placeholder="Search By Name/Date" />
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        <?= form_close() ?>
        <!-- show the errors from query box -->
        <?= form_error('query', '<p class="navbar-text text-danger">', '</p>')?>
      <ul class="nav navbar-nav navbar-right">
        <li>
            <!-- <a href="<?php echo base_url('login/logout'); ?>">Logout</a> -->

            <!-- go to controller login with logout function -->
            <?= anchor('login/logout','Logout'); ?>
        </li>
      </ul>
    </div>


  </div>
</nav>
