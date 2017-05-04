<?php include_once 'evening_header.php'; ?>

<div class="container">
    <?php echo form_open('eveningsession/store_session', ['class'=>'form-horizontal']); ?>

    <!-- we wish to send the user id along with form when the submit button is clicked -->
    <?php echo form_hidden('user_id',$this->session->userdata('user_id')); ?>

    <fieldset>
        <legend>Add Session</legend>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-4 control-label">Session Name</label>
                    <div class="col-lg-8">
                        <?php echo form_input(['name'=>'esession_name','class'=>'form-control','placeholder'=>'Session Name','value'=>set_value('esession_name')]); ?>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <?php echo form_error('esession_name'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">

                    <label for="inputEmail" class="col-lg-4 control-label">Session Date</label>
                    <div class="col-lg-8">
                        <?php echo form_input(['name'=>'esession_date','class'=>'form-control','placeholder'=>'Please enter only in dd-mm-yyyy format','value'=>set_value('esession_date')]); ?>

                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <?php echo form_error('esession_date'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">

                    <label for="inputEmail" class="col-lg-4 control-label">Session Start Time</label>
                    <div class="col-lg-8">
                        <?php echo form_input(['name'=>'esession_start_time','class'=>'form-control','placeholder'=>'Please enter only in hh:mm format','value'=>set_value('esession_start_time')]); ?>

                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <?php echo form_error('esession_start_time'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">

                    <label for="inputEmail" class="col-lg-4 control-label">Session End Time</label>
                    <div class="col-lg-8">
                        <?php echo form_input(['name'=>'esession_end_time','class'=>'form-control','placeholder'=>'Please enter only in hh:mm format','value'=>set_value('esession_end_time')]); ?>

                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <?php echo form_error('esession_end_time'); ?>
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <?php
                echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']);
                echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary']);?>
                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            </div>
        </div>
    </fieldset>
</form>
</div>

<?php include_once 'evening_footer.php'; ?>
