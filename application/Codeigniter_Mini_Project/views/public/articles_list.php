<?php
include ('public_header.php');
?>

<!-- this is for displaying all articles on localhost/codeigniter/ page -->
<div class="container">
    <h1>All Articles</h1>
    <hr />
    <table class="table">
        <thead>
            <tr>
                <td>Sr. No</td>
                <td>Article Title</td>
                <td>Published On</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php if(count($articles)):
                 $count = $this->uri->segment(3,0);
                 foreach($articles as $article): ?>
                <td><?= ++$count ?></td>
                <td><?= anchor("user/article/{$article->id}",$article->title) ?></td>
                <td><?= date('d M y H:i:s', strtotime($article->created_at)) ?></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
            <tr>
                <td colspan="3">No Records Found.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
<div class = "container text-center">
    <?= $this->pagination->create_links(); ?>
</div>
</div>

<?php
include 'public_footer.php';
?>
