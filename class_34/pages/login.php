<?php include './includes/header.php'?>
<secction class="py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3> Login Form</h3>
                    </div>
                    <div class="card-body">
                        <h5><?php ?></h5>
                        <form action="action.php" method="post">
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3">Email:</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3">Password:</label>
                                <div class="col-md-9">
                                    <input type="password" name="password" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3"> </label>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" value="SUBMIT" class="btn btn-outline-success btn-block"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</secction>

<?php include './includes/footer.php'?>

