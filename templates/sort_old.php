

<!-- does not work -->



<?php usort($post_view, 'oldPost');

foreach ($post_view as $post):
?>
<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

    <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-success"><?= $post['type'] ?></strong>
        <h3 class="mb-0"><?= $post['name_post'] ?></h3>
        <div class="mb-1 text-muted"><?= $post['time'] ?></div>
        <p class="mb-auto"> <?php //echo substr($post['text_post'],-100);
            echo mb_substr($post['text_post'], 0, 78) . ' ...';
            ?></p>
        <a href="#" class="stretched-link">Continue reading</a>
    </div>

    <div class="col-auto d-none d-lg-block">
        <?php $file = "./../storage/" . $post['image_post'];
        ?>
        <img class="bd-placeholder-img" src="<?= $file ?>" width="200" height="250" role="img"
             aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#55595c"/>
        <text x="50%" y="50%" fill="#eceeef"
    </div>

</div>
<?php endforeach;
?>
