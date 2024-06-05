<?php include "includes/header.php"; ?>

    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Show Numbers between two number</div>
                        <div class="card-body">

                            <form action="action.php" method="POST">
                                <div class="row mb-3">
                                    <label class="col-md-3">First Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="first_number">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Last Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="last_number">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Result</label>
                                    <div class="col-md-9">
                                        <textarea name="" id="" cols="50" rows="5">
                                             <?php echo isset($_GET['result']) ? $_GET['result'] : ''; ?>
                                        </textarea>
                                        <input type="text"
                                               value="<?php echo isset($_GET['result']) ? $_GET['result'] : ''; ?>"
                                               class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="form-control" name="number_range_btn"
                                               value="Make Result">
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