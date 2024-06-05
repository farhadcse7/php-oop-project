<?php include "includes/header.php"; ?>

    <!--Slider start-->
    <div id="slider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800">
        <div class="carousel-inner">
            <?php foreach ($sliders as $key => $slider) { ?>
                <div class="carousel-item <?php echo $key == 0 ? 'active' : '' ?>">
                    <img src="<?php echo $slider['image'] ?>" alt="" class="w-100" height="550">
                    <div class="carousel-caption">
                        <h1><?php echo $slider['title'] ?></h1>
                        <p><?php echo $slider['short_description'] ?></p>
                        <a href="action.php?page=detail&&id=<?php echo $slider['id'] ?>"
                           class="btn btn-outline-primary">Read More</a>
                    </div>
                </div>
            <?php } ?>

        </div>
        <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#slider" class="carousel-control-next" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <!--Slider end-->

    <!--Features-->
    <section class="bg-info-subtle py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($features as $feature) { ?>
                    <div class="col-md-4">
                        <div class="card card-body rounded-0">
                            <p class="text-center"><?php echo $feature['description'] ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!--Features end-->

    <!--Blog-->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php foreach ($blogs as $blog) { ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?php echo $blog['image'] ?>">
                            <div class="card-body">
                                <h3><?php echo $blog['title'] ?></h3>
                                <p><?php echo $blog['description'] ?></p>
                                <a href="action.php?page=blog-detail&&id=<?php echo $blog['id'] ?>"
                                   class="btn btn-success">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!--Blog end-->

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

    <!--news-->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($newses as $news) { ?>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="row">
                                <div class="col-4">
                                    <img src="<?php echo $news['image'] ?>" alt="" class="w-100 h-100">
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <p><?php echo $news['description'] ?></p>
                                        <hr/>
                                        <a href="action.php?page=single-news&&id=<?php echo $news['id'] ?>"
                                           class="btn btn-success float-end mb-3">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!--news end-->

    <!--article-->
    <section class="bg-info-subtle py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($articles as $article) { ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h3><?php echo $article['title'] ?></h3>
                            </div>
                            <div class="card-body">
                                <p><?php echo $article['description'] ?></p>
                            </div>
                            <div class="card-footer">
                                <a href="action.php?page=single-article&&id=<?php echo $article['id'] ?>"
                                   class="btn btn-success">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!--article end-->

<?php include "includes/footer.php"; ?>