<?php include  './includes/header.php' ?>


<section class="py-5 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3> Student  Subject Information</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="text-center text-success"><?php echo isset($message)? $message:'' ?></h4>
                        <?php  if (isset($_SESSION['message'])){?>
                            <h4 class="text-center text-success">
                                <?php echo $_SESSION['message']; unset($_SESSION['message']) ?>
                            </h4>
                        <?php } ?>
                    </div>
                    <table class="table-bordered table table-hover">
                        <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Subject Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($students as $student) {?>
                            <tr>
                                <td><?php echo  $student['name'];?></td>
                                <td><?php echo  $student['email'];?></td>
                                <td>
                                    <a href="action.php?edit=<?php echo $student['id']?>" class="btn btn-outline-info ">Edit</a>
                                    <a href="action.php?delete=<?php echo $student['id']?>" onclick=" return confirm('Are you sure to delete this ?')" class="btn btn-outline-danger">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<?php include  './includes/footer.php' ?>
