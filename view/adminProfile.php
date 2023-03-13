<?php

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
            <label class="col-md-2  col-sm-3 col-xs-12 control-label">Email</label>
            <div class="col-md-10 col-sm-9 col-xs-12">
                <input type="email" class="form-control" value="Rebecca@website.com">
            </div>
        </div>

    </fieldset>
    <fieldset class="fieldset">
        <h3 class="fieldset-title">Contact Info</h3>

        <div class="form-group">
            <label class="col-md-2  col-sm-3 col-xs-12 control-label">Phone</label>
            <div class="col-md-10 col-sm-9 col-xs-12">
                <input type="text" class="form-control" value="SpeedyBecky">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2  col-sm-3 col-xs-12 control-label">Address</label>
            <div class="col-md-10 col-sm-9 col-xs-12">
                <input type="url" class="form-control" value="https://www.linkedin.com/in/lorem">
            </div>
        </div>
    </fieldset>
    <hr>
    <div class="form-group">
        <div class="col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0">
            <input class="btn btn-primary" type="submit" value="Update Profile">
        </div>
    </div>
</form>