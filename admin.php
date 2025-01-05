<?php
session_start();

include "koneksi.php";  

//check jika belum ada user yang login arahkan ke halaman login
if (!isset($_SESSION['username'])) { 
	header("location:login.php"); 
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Daily Journal | Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="icon" href="img/logo.png" />
</head>

<body>
    <!-- nav begin -->
    <nav class="navbar navbar-expand-sm bg-body-tertiary sticky-top bg-success-subtle">
    <div class="container">
        <a class="navbar-brand" href=".">My Daily Journal</a>
        <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
            <li class="nav-item">
                <a class="nav-link" href="admin.php?page=dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin.php?page=article">Article</a>
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="admin.php?page=gallery">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin.php?page=user">User</a>
            </li> 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-success fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $_SESSION['username']?>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li> 
                </ul>
            </li> 
        </ul>
        </div>
    </div>
    </nav>
    <!-- nav end -->
     
    <!-- content begin -->
    <section id="content" class="p-5">
        <div class="container">
            <?php
            if(isset($_GET['page'])){
            ?>
                <h4 class="lead display-6 pb-2 border-bottom border-success-subtle"><?= ucfirst($_GET['page'])?></h4>
                <?php
                include($_GET['page'].".php");
            }else{
            ?>
                <h4 class="lead display-6 pb-2 border-bottom border-success-subtle">Dashboard</h4>
                <?php
                include("dashboard.php");
            }
            ?>
        </div>
    </section>
    <!-- content end -->

    <!-- footer begin -->
    <footer class="text-center p-5 bg-success-subtle footer <?php echo (isset($_GET['page']) && $_GET['page'] === 'dashboard') ? 'fixed-bottom' : ''; ?>">
    <div>
        <a href="https://www.instagram.com" target="_blank" class="text-dark text-decoration-none mx-2">
          <i class="bi bi-instagram h5 p-0"></i>
        </a>
        <a href="https://x.com/" target="_blank" class="text-dark text-decoration-none mx-2">
          <i class="bi bi-twitter-x h5 p-0"></i>
        </a>
        <a href="https://www.whatsapp.com" target="_blank" class="text-dark text-decoration-none mx-2">
          <i class="bi bi-whatsapp h5 p-0"></i>
        </a>
    <div>Annisa Angelica Nugraha &copy; 2024</div>
    </footer>
    <!-- footer end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html> 