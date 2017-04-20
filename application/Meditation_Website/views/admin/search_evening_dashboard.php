<?php
include_once 'evening_dashboard_header.php';
?>

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
                $count = $this->uri->segment(4,0);
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
        <?=    $this->pagination->create_links(); ?>
    </div>
</div>

<?php
include_once 'evening_footer.php';
?>
