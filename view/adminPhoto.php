<?php
require("rootPath.php");

require $rootPath . "model/PhotoModel.php";
require $rootPath . "controller/PhotoController.php";

include("view/_partials/adminPanel.php");

?>
<form action="#" enctype="multipart/form-data" method="post">
    <div class="row align-self-center">
        <div class="col-md-4 mb-4 col align-self-center">
            <div class="form-outline">
                <label>Alt</label>
                <input type="alt" name="alt" value="" class="form-control" required />
            </div>
        </div>
    </div>

    <div class="input-group mb-3">
        <div class="custom-file">
            <input type="file" name="photo" class="custom-file-input" id="inputGroupFile02"/>
            <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
        </div>
        <div class="input-group-append">
            <button type="submit" name="submitPhoto" class="btn btn-primary"><i class="bi bi-save"></i> <span
                        class="text">Upload</span></button>
        </div>
    </div>
</form>
