<?php
require("rootPath.php");

require $rootPath . "model/SignupModel.php";
require $rootPath . "controller/SignupController.php";

?>

<head>

    <?php if ($errorEmail) { ?>
        <div class="alert alert-danger text-center" role="alert">
            <strong>Error:</strong> User already exists! Try signup with another email..
        </div>
    <?php } ?>

    <?php if ($signupSucess) { ?>
        <div class="alert alert-success text-center" role="alert">
            <strong>Sucess:</strong> User succesfully registered! - Go to login :)
        </div>
    <?php } ?>

    <?php if ($error) { ?>
        <div class="alert alert-danger text-center" role="alert">
            <strong>Error:</strong> Something went wrong! - Please fill out all fields without whitespace :D
        </div>
    <?php } ?>

</head>

<body>
<section class="h-100 section-style">
    <div class="container py-5 h-50">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col">
                <img src="/assets/prettyplate.jpeg" class="d-block w-100" alt="image">
            </div>

            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>


            </div>
        </div>
    </div>
    </div>
    </div>