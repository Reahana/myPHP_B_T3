<?php include  './includes/header.php' ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 > All User Info </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="<?php echo $addUser['image'];?> " class="card-img-top" height="100" alt=""/></td>
                                    <div class="card-body">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Image</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($allUser as $addUser ){?>
                                <tr>
                                    <td><?php echo $addUser['name'];?></td>
                                    <td><?php echo $addUser['email'];?></td>
                                    <td><?php echo $addUser['mobile'];?></td>
                                    <td>
                                        <img src="<?php echo $addUser['image'];?> " height="100" alt=""/></td>
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
