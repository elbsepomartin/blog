<?php require_once APPROOT . '/views/inc/header.php'; ?>
    <h1 class="ml-5">Posts</h1>
    <a class="ml-5 mr-3" href="<?php URLROOT;?>posts/add/">Add post</a>
    <a href="<?php URLROOT;?>tags">Create a tag</a>

<?php foreach ($data['posts'] as $post) : ?>

    <div class="card card-body mb-3 w-25 ml-5">
        <a href=" <?php URLROOT;?>posts/show/<?php echo $post->postId; ?>">Edit</a>
        <h3 class="card-title"><?php echo $post->post_title; ?></h3>
        <p>Post ID: <?php echo $post->postId ?></p>
        <div class="bg-light p-2 mb-3">Created by ID <?php echo $post->user_id; ?> at <?php echo $post->post_created; ?></div>
        <p class="card-text"><?php echo $post->post_content; ?></p>
        <p>Tags:</p>
        <?php foreach ($post->tags as $tag) : ?>
            <div style="width: 100px;background-color:<?php echo $tag->color;?> "><?php echo $tag->info;?></div>
        <?php endforeach; ?>
        <a href=" <?php URLROOT;?>Tagposts/addtag/<?php echo $data->postId; ?>">Edit tag</a>
    </div>

<?php endforeach; ?>
<?php require_once APPROOT . '/views/inc/footer.php'; ?>