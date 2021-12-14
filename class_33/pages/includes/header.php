<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Security with PHP</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css"/>
</head>
<body>
<?php if (isset($_SESSION['id'])){?>
<!-- =============== Menu Start ================== -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="home.php" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav ml-auto">
            <li><a href="prime.php" class="nav-link">Prime Number </a></li>
            <li><a href="series.php" class="nav-link">Series Problem</a></li>
            <li><a href="action.php?status=logout" class="nav-link">Logout</a></li>

        </ul>
    </div>
</nav>
<!-- =============== Menu End ================== -->

<?php }?>