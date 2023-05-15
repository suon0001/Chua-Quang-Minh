<?php

require("rootPath.php");

require $rootPath . "model/SettingModel.php";
require $rootPath . "controller/SettingController.php";


include("view/_partials/adminPanel.php");

?>
<div class="div">
    <div class="col-sm-12">
        <div class="panel-group drop-accordion" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading tab-collapsed" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a class="collapse-controle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                           aria-expanded="true" aria-controls="collapseOne">
                            Profile setting
                            <span class="expand-icon-wrap"><i class="fa expand-icon"></i></span>
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne"
                     aria-expanded="true">
                    <div class="panel-body">
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
                                    <input class="btn btn-primary" type="submit" name="CreateProfile" value="Update">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapse-controle collapsed" data-toggle="collapse" data-parent="#accordion"
                           href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Address setting
                            <span class="expand-icon-wrap"><i class="fa expand-icon"></i></span>
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo"
                     aria-expanded="false" style="height: 0px;">
                    <div class="panel-body">
                        <form class="form-horizontal">
                            <fieldset class="fieldset">
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">Address</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" value="Rebecca">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">Phone</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="email" class="form-control" value="89897978">
                                    </div>
                                </div>

                            </fieldset>
                            <div class="form-group">
                                <div class="col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0">
                                    <input class="btn btn-primary" type="submit" name="CreateAddress" value="Update">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed collapse-controle" data-toggle="collapse" data-parent="#accordion"
                           href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Create Profile
                            <span class="expand-icon-wrap"><i class="fa expand-icon"></i></span>
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree"
                     aria-expanded="false">
                    <div class="panel-body">
                        <form action="" method="post">
                            <fieldset class="fieldset">
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">Email</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="email" name="email" class="form-control" placeholder="Email"
                                               required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2  col-sm-3 col-xs-12 control-label">Password</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="password" name="password" class="form-control"
                                               placeholder="Password"
                                               required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2  col-sm-3 col-xs-12 control-label">Phone</label>
                                    <div class="col-md-10 col-sm-9 col-xs-12">
                                        <input type="phone" name="phone" class="form-control" placeholder="Phone"
                                               required/>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group">
                                <div class="col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0">
                                    <input class="btn btn-primary" type="submit" name="CreateProfile" value="Create">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        $(function () {
            $('.panel-heading').click(function (e) {
                $('.panel-heading').removeClass('tab-collapsed');
                var collapsCrnt = $(this).find('.collapse-controle').attr('aria-expanded');
                if (collapsCrnt != 'true') {
                    $(this).addClass('tab-collapsed');
                }
            });
        })
    </script>
