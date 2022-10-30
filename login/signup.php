<?php 
include '../config.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <title>php ajax</title>
</head>

<body>
    <div class="container my-4">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card " style="border-radius: 15px;">
                    <div class="card-body p-5">
                        <h2 class="text-uppercase text-center mb-5 ">Create an account</h2>

                        <form action="process.php" method="post" class="submitData" id="myForm">
                            <input type="hidden" name="type" value="signup">
                            <div class="form-outline mb-3 my-4">
                                <label class="form-label" for="form3Example1cg">Your Name</label>
                                <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                                    autocomplete="name" name="name" required />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3cg">Your Email</label>
                                <input type="email" id="form3Example3cg" class="form-control form-control-lg"
                                    autocomplete="email" name="email" required />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example4cg">Password</label>
                                <input type="password" id="form3Example4cg" class="form-control form-control-lg"
                                    autocomplete="new-password" name="password" required />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                                <input type="password" id="form3Example4cdg" class="form-control form-control-lg"
                                    autocomplete="new-password" name="cpassword" required />
                            </div>

                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" class="btn btn-primary btn-lg" name="save">Register</button>
                            </div>

                            <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="signin.php"
                                    class="fw-bold text-body"><u>Login here</u></a></p>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>