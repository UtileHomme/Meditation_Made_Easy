<?php
include ('public_header.php');
?>

<div class="container">
    <!--
    <form class="form-horizontal"> -->

    <?php echo form_open('login/admin_login', ['class'=>'form-horizontal']); ?>
    <fieldset>
        <legend>Admin Login</legend>

        <!-- To check if error occurred or not -->
        <?php if($error = $this->session->flashdata('login_failed')): ?>
            <div class="row">
                <div class="col-lg-6">
                    <div class="alert alert-dismissible alert-danger">
                        <?= $error ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Username</label>
                    <div class="col-lg-10">
                        <?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Username','value'=>set_value('username')]); ?>
                        <!-- <input type="text" class="form-control" id="inputEmail" placeholder="Username"> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <?php echo form_error('username'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">

                    <label for="inputEmail" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                        <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Password']); ?>
                        <!-- <input type="text" class="form-control" id="inputEmail" placeholder="Password"> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <?php echo form_error('password'); ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <?php
                echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']);
                echo form_submit(['name'=>'submit','value'=>'Login','class'=>'btn btn-primary']);?>
                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            </div>
        </div>
    </fieldset>
</form>
</div>

<?php
include 'public_footer.php';
?>
