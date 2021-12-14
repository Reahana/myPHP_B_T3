<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>PHP & DATABASE</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css"/>
</head>
<body>
<?php if (isset($_SESSION['id'])){?>
<!-- =============== Menu Start ================== -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="home.php" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav ml-auto">
            <?php if ($_SESSION['user_type']== 1)   { ?>
            <li><a href="home.php" class="nav-link">Add Student </a></li>
            <li><a href="action.php?status=manage" class="nav-link">Manage Student </a></li>
                <li><a href="action.php?status=add-subject" class="nav-link">Add Subject </a></li>
                <li><a href="action.php?status=manage-subject" class="nav-link">Manage Subject </a></li>
            <?php } else { ?>
                <li><a href="action.php?status=my-subject&id=<?php echo base64_encode($_SESSION['id']) ; ?>" class="nav-link">My Subject </a></li>
                <li><a href="" class="nav-link">My Profile </a></li>
            <?php } ?>
            <li><a href="action.php?status=logout" class="nav-link">Logout</a></li>
        </ul>
    </div>
</nav>
<!-- =============== Menu End ================== -->

<?php }?>