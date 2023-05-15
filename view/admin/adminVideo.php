<?php
require("rootPath.php");

require $rootPath . "model/VideoModel.php";
require $rootPath . "controller/VideoController.php";

include("view/_partials/adminPanel.php");

?>
<form method='post' action='' enctype='multipart/form-data'>
    <input type="text" name="alt">
    <input type='file' name='files[]' multiple />
    <input type='submit' value='Submit' name='submit' />
</form>


<style>
    <?php include 'styles/adminPhoto.scss'; ?>
</style>

