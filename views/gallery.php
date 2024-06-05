<?php include "includes/header.php"; ?>





    <!--Gallery-->
    <section class="bg-info-subtle py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($galleries as $gallery) { ?>
                    <div class="col-md-6">
                        <div class="card">
                            <img src="<?php echo $gallery['image'] ?>" alt="">
                            <div class="card-img-overlay px-0 pb-0">
                                <h3 class="bg-dark text-white position-absolute bottom-0 w-100 mb-0 bg-opacity-75 text-center py-3">
                                    <?php echo $gallery['heading'] ?></h3>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!--Gallery end-->





<?php include "includes/footer.php"; ?>