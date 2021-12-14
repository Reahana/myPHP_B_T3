<?php include  './includes/header.php' ?>
<?php
if (!isset($_SESSION['id']))
{
    header('Location:../index.php');
}
?>
<section class="py-5 text-center bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card card-body">
                   <h1 class="text-primary pt-5">Welcome</h1>
                    <h2 class="py-5">To</h2>
                    <h1 class="text-info pb-5">PHP World</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include  './includes/footer.php' ?>
