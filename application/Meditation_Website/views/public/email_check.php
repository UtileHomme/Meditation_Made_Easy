<?php
include ('public_header.php');
?>

<div class="container">

    <!-- the next line acts like the action of the form method..
    as soon as submit button is clicked, it will go the the login controller and access
    the admin_login function of that controller -->
    <?php
    echo form_open('forgotpassword/forgot_password', ['class'=>'form-horizontal']);
    ?>
    <fieldset>
        <legend>Reset Password</legend>

        <!-- If registration is successful, place the messages here -->
        <?php if($feedback = $this->session->flashdata('feedback')):
            $feedback_class = $this->session->flashdata('feedback_class');
            ?>
            <div class="row">
                <div class="col-lg-6">
                    <div class="alert alert-dismissible <?= $feedback_class ?>">
                        <?= $feedback ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!-- Displaying the invalid username password error out here
            if the error has occurred and flashdata has been set    -->
        <!-- <?php if($error = $this->session->flashdata('login_failed')): ?>
            <div class="row">
                <div class="col-lg-6">
                    <div class="alert alert-dismissible alert-danger">
                        <?= $error ?>
                    </div>
                </div>
            </div>
        <?php endif; ?> -->

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email Id</label>
                    <div class="col-lg-10">

                        <!-- Using form helper class for creating text field -->
                        <?php
                        echo form_input(['name'=>'email', 'class'=>'form-control', 'placeholder'=>'Enter your registered email id']);
                        ?>
                        <!-- Conventional way of text field <input type="text" class="form-control" id="inputEmail" placeholder="Enter your username"> -->

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- This will display the username errors beside it -->
            <?php
              echo form_error('email');
             ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <?php
                echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']);
                echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary']);
                ?>
                <!--Conventional way of creating buttons <button type="submit" class="btn btn-primary">Submit</button> -->
            </div>
        </div>
    </fieldset>
</form>
</div>

<?php
include 'public_footer.php';
?>
