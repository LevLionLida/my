
<div class="row  mt-4  ">
    <div class="col-3 ms-2 ">
        <div class='row'>
            <div class='avatar'><p class="text-avatar"><?= mb_substr($_SESSION['email'], 0, 1) ?></p></div>
        </div>
        <div class='row mt-4 mb-4'>
            <h4 class=""> <?php echo $_SESSION['email'] . ' ' . $_SESSION['user_id']; ?> </h4>

        </div>
    </div>

    <div class="col-7">
        <a href='add-post-form.php' class="btn btn-sm btn-outline-secondary" role="button" > <i class="bi bi-plus-circle"></i> </a>

    </div>

</div>
