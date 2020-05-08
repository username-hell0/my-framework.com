<?php include_once 'header.php'?>
<?php include_once 'navigation.php'?>

<?php $postList = include_once 'posts-data.php'?>

<div class="container">
    <div class="posts-list">
        <?php foreach ($postList as $post) : ?>
            <div class="post">
                <h3 class="post-title"><?= $post['title']?></h3>
                <div class="post-info">
                    <p>
                        <?= $post['publisher']?>,
                        <?= $post['author']?>
                    </p>
                </div>

                <img src="<?= $post['src_img']?>"
                     alt="post-img" class="post-img">
                <div class="content-post">
                    <p class="content-text">
                        <?= $post['content']?>
                    </p>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>

<?php include_once 'footer.php'?>
