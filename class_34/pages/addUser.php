<?php include  './includes/header.php' ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3 >User Registration</h3>
                        </div>
                        <div class="card-body">

                            <?php if (isset($message)){?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong><?php echo $message ?></strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php } ?>

                            <form action="action.php" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">User Name :</label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">User Email :</label>
                                    <div class="col-md-9">
                                        <input type="email" name="email" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Password :</label>
                                    <div class="col-md-9">
                                        <input type="password" name="password" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Mobile :</label>
                                    <div class="col-md-9">
                                        <input type="number" name="mobile" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Image :</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control-file"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3"> </label>
                                    <div class="col-md-9">
                                        <input type="submit" name="btnAdd" value="SUBMIT" class="btn btn-outline-success btn-block"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

<?php include  './includes/footer.php' ?>
<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/6/2021
 * Time: 3:05 PM
 */