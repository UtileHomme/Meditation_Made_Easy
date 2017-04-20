<?php
include_once 'admin_header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h5 class="text-right text-info">
                <?php
                echo "The Current time is ".date('h:i:s A',time());
                ?>
            </h5>
        </div>
        <div class="col-lg-6">
            <h5 class="text-left text-danger">
                <?php
                echo "Today's date is ".date('d-M-Y',time());
                ?>
            </h5>
        </div>
    </div>
</div>
<div class="container">
    <h1>
        <p style="padding:20px;" class="text-primary text-center">
            Welcome <?php
                foreach($dashboard as $dash):
                echo $dash->firstname.' '.$dash->lastname."!!   ";
            endforeach;
             ?>
             you have been logged in
        </p>
        <p style = "padding:40px;" class="text-success text-center">
            Please click any one of the above two tabs to log your sessions
        </p>
    </h1>
    <br />
    <br />

</div>

<?php
include_once 'admin_footer.php';
?>
