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
            foreach ($photoResult as $row) { ?>
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
        <nav class="d-flex justify-content-center">
            <?php
            $photoID = null;

            if (isset($_GET['limit']) && $_GET['limit']) {
                $limit = $_GET['limit'];
            }

            if (isset($_GET['skip']) && $_GET['skip']) {
                $skip = $_GET['skip'];
            }

            if (isset($_GET['photoID']) && $_GET['photoID']) {
                $photoID = $_GET['photoID'];
            }
            ?>
            <ul class="pagination">
                <li class="page-item"><a class="page-link text-secondary"
                                         href="/photo?action=photos&photoID=<?php echo($photoID); ?>&limit=<?php echo($limit) ?>&skip=
                            <?php
                                         if (($skip - $limit) >= 0) {
                                             echo($skip - $limit);
                                         } else {
                                             echo($skip);
                                         }
                                         ?>">Previous</a></li>
                <?php
                $pages = ceil($pageCount / $limit);
                for ($i = 0; $i < $pages; $i++) {
                    ?>
                    <li class="page-item">
                        <a class="page-link text-secondary"
                           href="/photo?action=photos&photoID=<?php echo($photoID); ?>&limit=<?php echo($limit) ?>&skip=<?php echo($limit * $i) ?>">
                            <?php echo($i + 1); ?>
                        </a>
                    </li>
                    <?php
                }
                ?>
                <li class="page-item"><a class="page-link text-secondary"
                                         href="/photo?action=photos&photoID=<?php echo($photoID); ?>&limit=<?php echo($limit) ?>&skip=<?php
                                         if (($skip + $limit) <= ($pageCount)) {
                                             echo($skip + $limit);
                                         } else {
                                             echo($skip);
                                         }
                                         ?>">Next</a></li>
            </ul>
        </nav>
    </div>
</div>

<style>
    <?php include 'styles/adminPhoto.scss'; ?>
</style>

