<?php include  './includes/header.php' ?>

<section class="py-5 text-center mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>My Subject List</h3>
                    </div>
                    <div class="card-body">
                         <table class="table table-bordered table-hover">
                             <tr>
                                 <th class="text-center">Subject Name:</th>
                             </tr>
                             <tr>
                                 <td>
                                    <?php foreach ( $subjects as  $subject) { ?>
                                        <label for=""><input type="checkbox"> <?php echo   $subject ?> </label>
                                     <?php } ?>
                                 </td>
                             </tr>
                         </table>

                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<?php include  './includes/footer.php' ?>
