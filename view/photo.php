<?php
require("rootPath.php");

require $rootPath . "model/PhotoModel.php";
require $rootPath . "controller/PhotoController.php";

?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-lg-6">
            <div class="text-center py-3">
                <h1>Gallery</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <?php
        $i = 1;
        foreach ($photoResult

        as $row) { ?>
        <div class="col-sm-12 col-lg-2">
            <div class="card-wrapper mb-4">
                <form method="post" action="/photo?action=photos&photoID=&photoID=<?php echo $row['photoID'] ?>"
                      target="photo">
                    <img class="img-responsive img-thumbnail" src="<?php echo $row['photo'] ?>" alt=""
                         onclick="openModal();currentSlide(<?php echo $i; ?>)"
                         class="hover-shadow">
                </form>
            </div>

        </div>
            <?php $i++;
        } ?>
    </div>
    <div class="modal" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">
                        <div class="numbertext text-dark"><?php echo $row['alt'] ?></div>
                    </h3>
                </div>
                <div class="modal-body">
                    <div id="modalCarousel" class="carousel">
                        <div class="carousel-inner">         <?php
                            $i = 1;
                            foreach ($photoResult as $row) { ?>
                                <div class="mySlides">
                                    <img class="slider-image" src="<?php echo $row['photo'] ?>">
                                </div>
                                <?php $i++;
                            } ?></div>
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal" onclick="closeModal()">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>


<br>
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


<script>
    <?php include 'javascript/slider.js'; ?>
</script>

<style>
    <?php include 'styles/index.css'; ?>
</style>
