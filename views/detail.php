<?php include "includes/header.php"; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="card card-body">
                    <img src="<?php echo $slide['image'] ?>" alt="ok">
                </div>
            </div>
            <div class="col-sm-7">
                <div class="card card-body">
                    <h1><?php echo $slide['title'] ?></h1>
                    <p><?php echo $slide['short_description'] ?></p>
                    <p><?php echo $slide['long_description'] ?></p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include "includes/footer.php"; ?>
