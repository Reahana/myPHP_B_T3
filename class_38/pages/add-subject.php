<?php include  './includes/header.php' ?>



<section class="py-5 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Subject Form</h3>
                    </div>
                    <div class="card-body">
                        <h3 class="text-success text-center"><?php echo isset($message) ? $message : '';  ?></h3>
                        <form action="action.php" method="post" >
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3 ">Student Name:</label>
                                <div class="col-md-9">
                                    <select name="student_id" id="" class="form-control">
                                        <option value="">--Select Student Name--</option>
                                        <?php foreach ($students as $student) {?>
                                        <option value="<?php echo $student['id']; ?>"><?php echo $student['name'];?></option>
                                        <?php } ?>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3 ">Subject:</label>
                                <div class="col-md-9 ">
                                    <label for=""><input type="checkbox" name="subject[]" value="Bangla" /> Bangla </label>
                                    <label for=""><input type="checkbox" name="subject[]" value="English"/> English </label>
                                    <label for=""><input type="checkbox" name="subject[]" value="Math"/> Math </label>
                                    <label for=""><input type="checkbox" name="subject[]" value="Chemistry"/> Chemistry </label>
                                    <label for=""><input type="checkbox" name="subject[]" value="Biology"/> Biology </label>
                                    <label for=""><input type="checkbox" name="subject[]" value="Physics"/> Physics </label>
                                    <label for=""><input type="checkbox" name="subject[]" value="CSE"/> CSE </label>
                                    <label for=""><input type="checkbox" name="subject[]" value="BBA"/> BBA </label>
                                    <label for=""><input type="checkbox" name="subject[]" value="Psychology"/> Psychology </label>
                                </div>
                            </div>
                            <d iv class="form-group row">
                                <label for="" class="col-form-label col-md-3 "></label>
                                <div class="col-md-9">
                                    <input type="submit" name="subjectBtn" value="addSubject" class="btn btn-outline-info btn-block"/>
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
