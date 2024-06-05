<?php include "includes/header.php"; ?>

    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Login Form
                        </div>
                        <div class="card-body">

                            <?php if (isset($_GET['message'])) { ?>
                            <p class="text-danger"><?php echo $_GET['message'];
                                } ?></p>
                            <form action="action.php" method="post">
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">User Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="user_name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" name="login_btn" value="Login">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include "includes/footer.php"; ?>