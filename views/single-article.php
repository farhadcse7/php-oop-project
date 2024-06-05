<?php include "includes/header.php"; ?>
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="card card-body">
                    <h1>Article</h1>
                    <h2><?php echo $singleArticle['title'] ?></h2>
                    <p><?php echo $singleArticle['description'] ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "includes/footer.php"; ?>
