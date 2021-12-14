<?php include  './includes/header.php' ?>


<section class="py-5 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>All Student Information</h3>
                    </div>
                    <div class="card-body">
                       <table class="table-bordered table table-hover">
                           <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                           </thead>
                           <tbody>
                            <?php foreach ($students as $student) {?>
                                <tr>
                                    <td><?php echo  $student['name'];?></td>
                                    <td><?php echo  $student['email'];?></td>
                                    <td><?php echo  $student['mobile'];?></td>
                                    <td><img src="<?php echo  $student['image'];?>" height="50" width="100" alt=""></td>
                                    <td>
                                        <a href="action.php?edit=<?php echo $student['id']?>" class="btn btn-outline-info ">Edit</a>
                                        <a href="action.php?delete=<?php echo $student['id']?>" class="btn btn-outline-danger">Delete</a>
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
