<?php require_once APPROOT . '/views/inc/header.php'; ?>
    <h1 class="ml-5">Tags</h1>
    <a href="<?php echo URLROOT?>/posts" class="btn btn-dark ml-5">Back</a>
    <a href="<?php echo URLROOT?>/tags/add" class="btn btn-dark">Make new Tag</a>

<?php foreach ($data['tags'] as $tag) : ?>

    <div style=" margin-top: 10px; margin-left:10px;width:200px; height:20px;background-color:<?php echo $tag->color; ?>;" class="card card-body mb-3">
        <p><?php echo $tag->info; ?>&nbsp&nbsp<?php echo $tag->tag_id; ?><span><a href="<?php echo URLROOT?>/tags/delete/<?php echo $tag->tag_id; ?>">X</a> </span></p>
        <br>
    </div>

<?php endforeach; ?>
<?php require_once APPROOT . '/views/inc/footer.php'; ?>