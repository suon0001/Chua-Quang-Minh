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
            <input type="file" name="photo" id="image" class="form-control"/>
        </div>
        <div class="input-group-append">
            <button type="submit" name="submitPhoto" class="btn btn-primary"><i class="bi bi-save"></i> <span
                        class="text">Upload</span></button>
        </div>
    </div>
</form>

<div class="card">
    <div class="container">
        <div class="row">
            <?php
            foreach ($photoResult as $row) { ?>
            <div class="col-sm-6 col-lg-3 mb-2-6">
                <div class="card-wrapper mb-4">
                    <div><img class="card-img-admin" src="assets/<?php echo $row['photo'] ?>" alt="<?php echo $row['alt'] ?>"></div>
                    <div class="card-body">
                        <div>
                            <a href="/admin-photo.php?del=1&photoID=<?= $row["photoID"] ?>"><i class="fa-solid fa-trash"></i></a>
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

