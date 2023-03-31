<?php
require("rootPath.php");

require $rootPath . "Model/LoginModel.php";
require $rootPath . "Controller/LoginController.php";
?>
<head>
    <?php if ($errorPassword) { ?>
        <div class="alert alert-danger text-center" role="alert">
            <strong>Error:</strong> Wrong email or password!
        </div>
    <?php } ?>
    <?php if ($notregistered) { ?>
        <div class="alert alert-danger text-center" role="alert">
            <strong>Invalid login:</strong> Please try again or sign up!
        </div>
    <?php } ?>
</head>
<div class="container">
    <form method="POST">
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" name="email" id="form2Example1" class="form-control" />
            <label class="form-label" for="form2Example1">Email address</label>
        </div>

        <div class="form-outline mb-4">
            <input type="password" name="password" id="form2Example2" class="form-control" />
            <label class="form-label" for="form2Example2">Password</label>
        </div>

        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

    </form>
</div>