<?php

require("rootPath.php");

require $rootPath . "model/SettingModel.php";
require $rootPath . "controller/SettingController.php";


include("view/_partials/adminPanel.php");

?>

<form class="form-horizontal">
    <fieldset class="fieldset">
        <h3 class="fieldset-title">Personal Info</h3>
        <div class="form-group">
            <label class="col-md-2 col-sm-3 col-xs-12 control-label">Username</label>
            <div class="col-md-10 col-sm-9 col-xs-12">
                <input type="text" class="form-control" value="Rebecca">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 col-sm-3 col-xs-12 control-label">Email</label>
            <div class="col-md-10 col-sm-9 col-xs-12">
                <input type="email" class="form-control" value="Rebecca@website.com">
            </div>
        </div>

    </fieldset>
    <div class="form-group">
        <div class="col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0">
            <input class="btn btn-primary" type="submit" value="Update Profile">
        </div>
    </div>
</form>

<form action="" method="post">
    <fieldset class="fieldset">
        <h3 class="fieldset-title">Create Profile</h3>
        <div class="form-group">
            <label class="col-md-2 col-sm-3 col-xs-12 control-label">Email</label>
            <div class="col-md-10 col-sm-9 col-xs-12">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2  col-sm-3 col-xs-12 control-label">Password</label>
            <div class="col-md-10 col-sm-9 col-xs-12">
                <input type="password" name="password" class="form-control" placeholder="Password" required />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2  col-sm-3 col-xs-12 control-label">Phone</label>
            <div class="col-md-10 col-sm-9 col-xs-12">
                <input type="phone" name="phone" class="form-control" placeholder="Phone" required />
            </div>
        </div>
    </fieldset>
    <div class="form-group">
        <div class="col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0">
            <input class="btn btn-primary" type="submit" name="CreateProfile" value="Create Profile">
        </div>
    </div>
</form>
