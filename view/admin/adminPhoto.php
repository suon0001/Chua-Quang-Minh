<?php
require("rootPath.php");

require $rootPath . "model/PhotoModel.php";
require $rootPath . "controller/PhotoController.php";

include("view/_partials/adminPanel.php");

?>
<form method='post' action='' enctype='multipart/form-data'>
    <input type='file' name='files[]' multiple />
    <input type='submit' value='Submit' name='submit' />
</form>

<div class="card">
    <div class="container">
        <div class="row">
            <?php
            foreach ($adminPhotoResult as $row) { ?>
                <div class="col-sm-12 col-lg-2">
                    <div class="card-wrapper mb-4">
                        <div><img class="card-img-admin" src="<?php echo $row['photo'] ?>"
                                  alt="<?php echo $row['alt'] ?>"></div>
                        <div class="card-body">
                            <div>
                                <a href="/admin-photo.php?del=1&photoID=<?= $row["photoID"] ?>"><i
                                            class="fa-solid fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            } ?>
        </div>
    </div>
</div>

<style>
    <?php include 'styles/adminPhoto.scss'; ?>
</style>

