<?php
require_once 'config.php'; 
require_once 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/script.js"></script>
</head>

<body>
    <div class="m-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a href="<?php echo $BASE_URL.'/'; ?>" class="navbar-brand">Brand</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="<?php echo $BASE_URL.'/'; ?>" class="nav-item nav-link">Home</a>
                        <a href="<?php echo $BASE_URL.'/supplier/index.php'; ?>" class="nav-item nav-link">Supplier</a>
                        <a href="<?php echo $BASE_URL.'/Purchase/index.php'; ?>" class="nav-item nav-link">Purchase</a>
                        <a href="<?php echo $BASE_URL.'/purchase_item/index.php'; ?>" class="nav-item nav-link">Purchase
                            Item</a>
                        <a href="<?php echo $BASE_URL.'/product/index.php'; ?>" class="nav-item nav-link">Product</a>
                        <a href="<?php echo $BASE_URL.'/sale_item/index.php'; ?>" class="nav-item nav-link">Sale
                            Item</a>
                        <a href="<?php echo $BASE_URL.'/sale/index.php'; ?>" class="nav-item nav-link">Sale</a>
                        <a href="<?php echo $BASE_URL.'/payment/index.php'; ?>" class="nav-item nav-link">Payment</a>
                        <a href="<?php echo $BASE_URL.'/customer/index.php'; ?>" class="nav-item nav-link">Customer</a>
                        <a href="<?php echo $BASE_URL.'/transaction/index.php'; ?>"
                            class="nav-item nav-link">Transaction</a>
                    </div>
                    <div class="navbar-nav">
                        <a href="<?php echo $BASE_URL.'/login/signout.php'; ?>"
                            class="btn btn-primary btn-sm mx-2">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>