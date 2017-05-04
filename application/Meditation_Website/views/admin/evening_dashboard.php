<?php
include_once 'evening_dashboard_header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h4 class="text-primary text-center">You currently have <?= count($show_count) ?> evening session<?php if(count($show_count)==1)
                        {
                            echo ' ';
                        }
                        else
                        {
                            echo 's';
                        }
                  ?>
            </h4>
        </div>
        <div class="col-lg-6">
            <?= anchor('eveningsession/add_session','Add Session',['class'=>'btn btn-lg btn-primary pull-right']) ?>
        </div>
    </div>
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
</div>
<div class="container">
    <table class="table">
        <thead>
            <th class="text-center">Sr. No</th>
            <th class="text-center">Evening Session Name</th>
            <th class="text-center">Session Date</th>
            <th class="text-center">Session Start Time</th>
            <th class="text-center">Session End Time</th>
            <th class="text-center">Action</th>
        </thead>
        <tbody>
            <?php
            if(count($evening)):

                // Take the third uri segment and if it isn't there, then take 0 by default
                $count = $this->uri->segment(3,0);
                foreach($evening as $mor):
                    ?>
                    <tr class="text-center">
                        <td><?= ++$count; ?></td>
                        <td><?= $mor->esession_name ?></td>
                        <td><?= $mor->esession_date ?></td>
                        <td><?= $mor->esession_start_time ?></td>
                        <td><?= $mor->esession_end_time ?></td>
                        <td>
                            <div class="row">
                                <div class="col-lg-3 ">
                                    <!-- This will give the url with the end value as id of the article which is to be edited -->
                                    <?= anchor("eveningsession/edit_session/{$mor->id}",'Edit',['class'=>'btn btn-primary']); ?>
                                </div>

                                <div class="col-lg-2">
                                    <!-- Deleting using post -->
                                    <?=
                                    form_open('eveningsession/delete_session'),
                                    form_hidden('session_id',$mor->id),
                                    form_submit(['name'=>'submit','value'=>"Delete",'class'=>'btn btn-danger' ]),
                                    form_close();
                                    ?>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php
                endforeach;
            else:
                ?>
                <tr>
                    <td colspan="3">
                        <h3 class="text-danger">No records Found</h3>
                    </td>
                </tr>
                <?php
            endif;
            ?>
        </tbody>
    </table>
    <div class = "container text-center">
    <?= $this->pagination->create_links() ?>
    </div>
</div>

<?php
include_once 'evening_footer.php';
?>
