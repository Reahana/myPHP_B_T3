<?php include  './includes/header.php' ?>
<?php
if (isset($_SESSION['id']))
{
    header('Location: home.php');
}
?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Login Form</h3>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="loginBtn" class="btn btn-primary btn-block">
                                </div>
                            </div>
                        </form>
                    </div>
                    <h5 class="text-danger text-center"><?php echo isset($message) ? $message:' ';?></h5>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include  './includes/footer.php' ?>
