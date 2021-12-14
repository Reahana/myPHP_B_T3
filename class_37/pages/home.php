<?php include  './includes/header.php' ?>
<?php
if (!isset($_SESSION['id']))
{
    header('Location: login.php');
}
else if ($_SESSION['user_type'] == 0)
{
    header('Location: dashboard.php');
}
?>

<section class="py-5 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Registration Form</h3>
                    </div>
                    <div class="card-body">
                        <h3 class="text-success text-center"><?php echo isset($message) ? $message : '';  ?></h3>
                        <form action="action.php" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3 ">Name:</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3 ">Email:</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3 ">Password:</label>
                                <div class="col-md-9">
                                    <input type="password" name="password" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3 ">Mobile:</label>
                                <div class="col-md-9">
                                    <input type="number" name="mobile" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3 ">Image:</label>
                                <div class="col-md-9">
                                    <input type="file" name="image" class="form-control-file" required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3 "></label>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" value="Register" class="btn btn-outline-danger btn-block"/>
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
