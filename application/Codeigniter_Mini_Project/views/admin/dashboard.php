<?php
include_once 'admin_header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-6">
   <?= anchor('admin/store_article','Add Article',['class'=>'btn btn-lg btn-primary pull-right']) ?>
        </div>
    </div>

    <!-- To check if error occurred or not during inserting article-->
    <?php if($feedback = $this->session->flashdata('feedback')):
        $feedback_class = $this->session->flashdata('feedback_class');
        ?>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <div class="alert alert-dismissible <?= $feedback_class ?>">
                    <?= $feedback ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <table class="table">
        <thead>
            <th>Serial No</th>
            <th>Title</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php if(count($articles)):
                $count = $this->uri->segment(3, 0);
                foreach($articles as $article): ?>
                    <tr>
                        <td><?= ++$count ?></td>
                        <td><?= $article->title ?></td>
                        <td>
                            <div class="row">
                                <div class="col-lg-2">
                                    <?= anchor("admin/edit_article/{$article->id}",'Edit',['class'=>'btn btn-primary']);  ?>
                                    <!-- <button class="btn btn-primary">Edit</button> -->
                                </div>
                                <div class="col-lg-2">
                                    <?= form_open('admin/delete_article'),
                                        form_hidden('article_id', $article->id),
                                        form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
                                        form_close();
                                        ?>
                                </div>


                                </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">No records found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <!-- <ul class="pagination">
        <li><a href=""><</a></li>
        <li><a href="">1</a></li>
        <li class="active"><a href="">2</a></li>
        <li><a href="">3</a></li>
        <li><a href="">></a></li>
    </ul> -->
    <div class = "container text-center">
            <?= $this->pagination->create_links(); ?>
            <h4>Click here</h4>
    </div>

</div>

<?php
include_once 'admin_footer.php';
?>
