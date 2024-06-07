<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../src/assets/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <!--  header section -->
    <?php include("../components/header.php"); ?>
    <div id="layoutSidenav">
        <!-- sidenav section -->
        <?php
        include("../components/sidenav.php");
        ?>
        <div id="layoutSidenav_content">
            <div class="container my-5">
                <a href="showListing.php" class="btn btn-dark my-3">show Added User</a>
                <form class="row g-3" method="post" action="../Backend/insert.php">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">UserName</label>
                        <input type="text" name="username" class="form-control" id="inputEmail4" placeholder="userName">
                        <?php
                        if (isset($_SESSION['username'])) {
                            echo "<p class='text-danger'>{$_SESSION['username']}</p>";
                            unset($_SESSION['username']); 
                        }
                        ?>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="email">
                        <?php
                        if (isset($_SESSION['email'])) {
                            echo "<p class='text-danger'>{$_SESSION['email']}</p>";
                            unset($_SESSION['email']);
                        }
                        ?>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="password">
                        <?php
                        if (isset($_SESSION['password'])) {
                            echo "<p class='text-danger'>{$_SESSION['password']}</p>";
                            unset($_SESSION['password']);
                        }
                        ?>
                    </div>
                    <div class="col-6">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="inputAddress" placeholder="address">
                        <?php
                        if (isset($_SESSION['address'])) {
                            echo "<p class='text-danger'>{$_SESSION['address']}</p>";
                            unset($_SESSION['address']);
                        }
                        ?>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">contact</label>
                        <input type="number" name="contact" class="form-control" id="inputAddress" placeholder="contact">
                        <?php
                        if (isset($_SESSION['contact'])) {
                            echo "<p class='text-danger'>{$_SESSION['contact']}</p>";
                            unset($_SESSION['contact']);
                        }
                        ?>
                    </div>

                    <div class="col-12">
                        <button type="submit" name="submit" class="btn btn-primary">Add data</button>
                    </div>
                </form>
            </div>
            <!-- footer section -->
            <?php
            include("../components/footer.php");
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="../src/js/scripts.js"></script>
    <script src="../src/js/datatables-simple-demo.js"></script>
</body>

</html>