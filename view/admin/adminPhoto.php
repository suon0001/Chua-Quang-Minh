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
                <?php
                $n=10;
                function getName($n) {
                    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $randomString = '';

                    for ($i = 0; $i < $n; $i++) {
                        $index = rand(0, strlen($characters) - 1);
                        $randomString .= $characters[$index];
                    }

                    return $randomString;
                }

                ?>
                <input type="alt" name="alt" value="<?php echo getName($n);  ?>" class="form-control"/>
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
            foreach ($adminPhotoResult as $row) { ?>
                <div class="col-sm-12 col-lg-2">
                    <div class="card-wrapper mb-4">
                        <div><img class="card-img-admin" src="assets/gallery/<?php echo $row['photo'] ?>"
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

