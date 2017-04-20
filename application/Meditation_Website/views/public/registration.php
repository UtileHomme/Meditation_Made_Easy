<?php
include ('public_header.php');
?>

<div class="container">
    <?php
    echo form_open('register/register_page', ['class'=>'form-horizontal']);
    ?>
    <fieldset>
        <legend style="padding-left: 40px;">Registration Form</legend>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-3 control-label">Username</label>
                    <div class="col-lg-9" style="padding-left:65px;">

                        <!-- Using form helper class for creating text field -->
                        <?php
                        echo form_input(['name'=>'username', 'class'=>'form-control', 'placeholder'=>'Enter your username','value'=>set_value('username')]);
                        ?>
                        <!-- Conventional way of text field <input type="text" class="form-control" id="inputEmail" placeholder="Enter your username"> -->

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                echo form_error('username');
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-3 control-label">Password</label>
                    <div class="col-lg-9" style="padding-left:65px;">

                        <!-- Using form helper class for creating password field -->
                        <?php
                        echo form_password(['name'=>'password', 'class'=>'form-control', 'placeholder'=>'Enter your password']);
                        ?>
                        <!-- <input type="password" class="form-control" id="inputEmail" placeholder="Enter your password"> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
            <?php
            echo form_error('password');
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="inputEmail" class="col-lg-4 control-label">Confirm Password</label>
                <div class="col-lg-8" >

                    <!-- Using form helper class for creating password field -->
                    <?php
                    echo form_password(['name'=>'password_again', 'class'=>'form-control', 'placeholder'=>'Enter your password again']);
                    ?>
                    <!-- <input type="password" class="form-control" id="inputEmail" placeholder="Enter your password"> -->
                </div>
            </div>
        </div>
        <div class="col-lg-6">
        <?php
        echo form_error('password_again');
        ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="inputEmail" class="col-lg-3 control-label">First Name</label>
            <div class="col-lg-9" style="padding-left:65px;">

                <!-- Using form helper class for creating text field -->
                <?php
                echo form_input(['name'=>'firstname', 'class'=>'form-control', 'placeholder'=>'Enter your First Name','value'=>set_value('firstname')]);
                ?>
                <!-- Conventional way of text field <input type="text" class="form-control" id="inputEmail" placeholder="Enter your username"> -->

            </div>
        </div>
    </div>
    <div class="col-lg-6">
    <?php
    echo form_error('firstname');
    ?>
</div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="inputEmail" class="col-lg-3 control-label">Last Name</label>
            <div class="col-lg-9" style="padding-left:65px;">

                <!-- Using form helper class for creating text field -->
                <?php
                echo form_input(['name'=>'lastname', 'class'=>'form-control', 'placeholder'=>'Enter your Last Name','value'=>set_value('lastname')]);
                ?>
                <!-- Conventional way of text field <input type="text" class="form-control" id="inputEmail" placeholder="Enter your username"> -->

            </div>
        </div>
    </div>
    <div class="col-lg-6">
    <?php
    echo form_error('lastname');
    ?>
</div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="inputEmail" class="col-lg-3 control-label">Email Id</label>
            <div class="col-lg-9" style="padding-left:65px;">

                <!-- Using form helper class for creating text field -->
                <?php
                echo form_input(['name'=>'email', 'class'=>'form-control', 'placeholder'=>'Enter your Email Id','value'=>set_value('email')]);
                ?>
                <!-- Conventional way of text field <input type="text" class="form-control" id="inputEmail" placeholder="Enter your username"> -->

            </div>
        </div>
    </div>
    <div class="col-lg-6">
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
</div>

<?php
include 'public_footer.php';
?>
