<!DOCTYPE html>

<?php
require_once './../functions/posts_function.php'; ?>
<?php $posts_view = post_user_id();
?>
<div class="row mb-2">
    <?php //$i = 1;
    foreach ($posts_view

    as $post) :
    ?>
    <div class="col-md-6">

        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

            <div class="col p-4 d-flex flex-column position-static">
                <div class="row  flex-row justify-content-between align-items-center">

                    <div class="col-8">
                        <strong class=" d-inline-block mb-2 fw-light fst-italic"><?= $post['type'] ?></strong>

                    </div>

                    <div class="col-1">
                        <div class="row ">

                            <a href="../functions/del_post.php?id=<?php echo $post['post_id'] ?>" class="link-icon">
                                <i class="bi bi-x-lg" <?= $post['post_id'] ?>>
                                </i>
                            </a>
                            <a href="../pages/edit-post-form.php?id=<?php echo $post['post_id'] ?>" class="link-icon">
                                <i class="bi bi-pencil-square" <?= $post['post_id'] ?>>

                                </i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row-1">
                    <h3 class="mb-0"><?= $post['name_post'] ?></h3>
                    <div class="mb-1 text-muted"><?= $post['time'] ?></div>
                    <p class="mb-auto"> <?php //echo substr($post['text_post'],-100);
                        echo mb_substr($post['text_post'], 0, 78) . ' ...';
                        ?></p>
                    <a href="#" class="stretched-link-css">Continue reading</a>
                </div>

            </div>

            <div class="col-auto d-none d-lg-block">
                <?php $file = "./../storage/" . $post['image_post'];
                ?>
                <img class="bd-placeholder-img" src="<?= $file ?>" width="200" height="250" role="img"
                     aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                     focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"/>
                <text x="50%" y="50%" fill="#eceeef"
            </div>

        </div>

    </div>
</div>
<?php endforeach;
?>