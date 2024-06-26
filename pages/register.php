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
    <title>Register - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        body,
        html {
            height: 100%;
        }

        #layoutAuthentication {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        #layoutAuthentication_content {
            flex: 1;
        }

        #layoutAuthentication_footer {
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                </div>
                                <div class="card-body">
                                    <?php
                                    if (isset($_SESSION['check-password'])) {
                                        echo "<p class='text-danger'>{$_SESSION['check-password']}</p>";
                                        unset($_SESSION['check-password']);
                                    }
                                    ?>
                                    <form method="post" action="../Backend/RegisterLogic.php">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="firstname" />
                                                    <?php
                                                    if (isset($_SESSION['firstname'])) {
                                                        echo "<p class='text-danger'>{$_SESSION['firstname']}</p>";
                                                        unset($_SESSION['firstname']);
                                                    }
                                                    ?>
                                                    <label for="inputFirstName">First name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name="lastname" />
                                                    <?php
                                                    if (isset($_SESSION['lastname'])) {
                                                        echo "<p class='text-danger'>{$_SESSION['lastname']}</p>";
                                                        unset($_SESSION['lastname']);
                                                    }
                                                    ?>
                                                    <label for="inputLastName">Last name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="email" />
                                            <?php
                                            if (isset($_SESSION['email'])) {
                                                echo "<p class='text-danger'>{$_SESSION['email']}</p>";
                                                unset($_SESSION['email']);
                                            } else   if (isset($_SESSION['already'])) {
                                                echo "<p class='text-danger'>{$_SESSION['already']}</p>";
                                                unset($_SESSION['already']);
                                            }
                                            ?>
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputPassword" type="password" placeholder="Create a password" name="password" />
                                                    <?php
                                                    if (isset($_SESSION['password'])) {
                                                        echo "<p class='text-danger'>{$_SESSION['password']}</p>";
                                                        unset($_SESSION['password']);
                                                    }
                                                    ?>
                                                    <label for="inputPassword">Password</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" name="cpassword" />
                                                    <?php
                                                    if (isset($_SESSION['cpassword'])) {
                                                        echo "<p class='text-danger'>{$_SESSION['cpassword']}</p>";
                                                        unset($_SESSION['cpassword']);
                                                    }
                                                    ?>
                                                    <label for="inputPasswordConfirm">Confirm Password</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><button class="btn btn-primary btn-block" name="createaccount">Create Account</button></div>

                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <?php
            include("../components/footer.php");

            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>