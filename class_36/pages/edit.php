<?php include  './includes/header.php' ?>


<section class="py-5 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Student Form</h3>
                    </div>
                    <div class="card-body">
                        <h3 class="text-success text-center"><?php echo isset($message) ? $message : '';  ?></h3>
                        <form action="action.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="student_id" value="<?php echo $studentInfo['id']?>"/>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3 ">Name:</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" value="<?php echo $studentInfo['name']?>" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3 ">Email:</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" value="<?php echo $studentInfo['email']?>"class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3 ">Password:</label>
                                <div class="col-md-9">
                                    <input type="password" name="password" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3 ">Mobile:</label>
                                <div class="col-md-9">
                                    <input type="number" name="mobile" value="<?php echo $studentInfo['mobile']?>" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3 ">Image:</label>
                                <div class="col-md-9">
                                    <img src="<?php echo $studentInfo['image']?>" height="200" alt="">
                                    <input type="file" name="image" class="form-control-file" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3 "></label>
                                <div class="col-md-9">
                                    <input type="submit" name="btnEdit" value="UPDATE" class="btn btn-outline-primary btn-block"/>
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
