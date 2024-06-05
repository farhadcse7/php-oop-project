<?php include "includes/header.php"; ?>
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="card card-body">
                    <h1>Blog</h1>
                    <img src="<?php echo $singleBlog['image'] ?>" alt="ok">
                    <h1><?php echo $singleBlog['title'] ?></h1>
                    <p><?php echo $singleBlog['description'] ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "includes/footer.php"; ?>
