<?php include "includes/header.php"; ?>
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="card card-body">
                    <h1>News</h1>
                    <img src="<?php echo $singleNews['image'] ?>" alt="ok">
                    <p><?php echo $singleNews['description'] ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "includes/footer.php"; ?>
