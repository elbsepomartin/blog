<?php require_once APPROOT.'/views/inc/header.php'; ?>
    <a href="<?php echo URLROOT?>/posts" class="btn btn-dark ml-5">Back</a>
    <h1 class="ml-5"><?php echo $data['post']->post_title; ?></h1>

    <div class="bg-secondary text-white p-2 mb-3 w-25 ml-5">
        Created by <?php echo $data['post']->user_id;?> at <?php echo $data['post']->post_created;?>
    </div>

    <p class="w-25 ml-5"><?php echo $data['post']->post_content; ?></p>
    <br>
<?php if($data['post']->user_id == $_SESSION['user_id']) :?>

    <div class="row justify-content-around w-25">

        <div class="col-8 w-25">
            <a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->post_id; ?>" class="btn btn-info ml-5">Edit</a>
        </div>

        <div class="col-4 w-25">
            <form action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->post_id; ?>" method="post">
                <input type="submit" value="Delete" class="btn btn-danger ml-5">
            </form>
        </div>

    </div>

<?php endif;?>
<?php require_once APPROOT.'/views/inc/footer.php'; ?>