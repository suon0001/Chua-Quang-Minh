<?php

require("rootPath.php");

require $rootPath . "model/SettingModel.php";
require $rootPath . "controller/SettingController.php";


include("view/_partials/adminPanel.php");

?>
<div class="accordion" id="accordionExample">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h3 class="fieldset-title">Personal Info</h3>
                </button>
            </h2>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                <form class="form-horizontal">
                    <fieldset class="fieldset">
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
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Collapsible Group Item #2
                </button>
            </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
                Some placeholder content for the second accordion panel. This panel is hidden by default.
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingThree">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h3 class="fieldset-title">Create Profile</h3>
                </button>
            </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
                <form action="" method="post">
                    <fieldset class="fieldset">
                        <div class="form-group">
                            <label class="col-md-2 col-sm-3 col-xs-12 control-label">Email</label>
                            <div class="col-md-10 col-sm-9 col-xs-12">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2  col-sm-3 col-xs-12 control-label">Password</label>
                            <div class="col-md-10 col-sm-9 col-xs-12">
                                <input type="password" name="password" class="form-control" placeholder="Password"
                                       required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2  col-sm-3 col-xs-12 control-label">Phone</label>
                            <div class="col-md-10 col-sm-9 col-xs-12">
                                <input type="phone" name="phone" class="form-control" placeholder="Phone" required/>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group">
                        <div class="col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0">
                            <input class="btn btn-primary" type="submit" name="CreateProfile" value="Create Profile">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


