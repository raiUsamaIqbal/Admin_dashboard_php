<?php
include("../Backend/connect.php");
// display result in table 
$sql = "select * from management";
$result = mysqli_query($con, $sql);
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
              <div>
              <a href="UserManagement.php" class="btn btn-dark my-3 ">Add User</a>
              </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        DataTable Example
                    </div>
                    <div class="card-body">
                        <table class="table table-stripped table-bordered" id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>UserName</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Address</th>
                                    <th>Contact</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if($result->num_rows>0){
                                    while ($rows = mysqli_fetch_assoc($result)) {
                                        ?>
                                    <tr>
                                    <td><?php echo $rows['id'] ?></td>
                                    <td><?php echo $rows['username'] ?></td>
                                    <td><?php echo $rows['email'] ?></td>
                                    <td><?php echo $rows['password'] ?></td>
                                    <td><?php echo $rows['address'] ?></td>
                                    <td><?php echo $rows['contact'] ?></td>
                                    <td>
                                        
                                    <a href="../pages/updateForm.php?id=<?php echo $rows['id']; ?>" class="btn btn-primary">Edit</a>

                                        <a href="../Backend/delete.php?id=<?php echo $rows['id']; ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php
                            }
                        }
                            ?>   
                               
                       
                             
                                   

                            </tbody>
                        </table>
                    </div>
                </div>
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