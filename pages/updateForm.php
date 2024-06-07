


<?php
include("../Backend/connect.php");

$username = $email = $password = $address = $contact = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM management WHERE id = $id";
    $result = mysqli_query($con, $sql);
    $row = $result->fetch_assoc();
    
    if ($row) {
        $username = $row['username'];
        $email = $row['email'];
        $password = $row['password'];
        $address = $row['address'];
        $contact = $row['contact'];
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];

    $state = "UPDATE management SET username='$username', email='$email', password='$password', address='$address', contact='$contact' WHERE id='$id'";
    $answer = mysqli_query($con, $state);
    if($answer){
        header("location:showListing.php");
    }else{
        echo "record not updated";
    }
  
}

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
        <?php include("../components/sidenav.php"); ?>
        <div id="layoutSidenav_content">
            <div class="container my-5">
                <form method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" value="<?php echo $username; ?>" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" value="<?php echo $password; ?>" placeholder="Enter new password" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $address; ?>" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contact</label>
                        <input type="text" class="form-control" name="contact" value="<?php echo $contact; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="update">Update</button>
                </form>
            </div>
            <!-- footer section -->
            <?php include("../components/footer.php"); ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="../src/js/scripts.js"></script>
    <script src="../src/assets/demo/chart-area-demo.js"></script>
    <script src="../src/assets/demo/chart-bar-demo.js"></script>
    <script src="../src/js/datatables-simple-demo.js"></script>
</body>
</html>


