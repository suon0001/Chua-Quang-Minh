<?php
require("rootPath.php");

require $rootPath . "model/PhotoModel.php";
require $rootPath . "controller/PhotoController.php";

?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-lg-6">
            <!-- Section Heading-->
            <div class="text-center py-3">
                <h1>Gallery</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <?php
        $i = 1;
        foreach ($photoResult as $row) { ?>
            <div class="col-12 col-sm-6 col-lg-3 mt-4">
                <form method="post" action="/photo?action=photos&photoID=&photoID=<?php echo $row['photoID'] ?>"
                      target="photo">
                    <img class="img-fluid img-thumbnail" src="assets/gallery/<?php echo $row['photo'] ?>"
                         style="height: 100%" alt="" onclick="openModal();currentSlide(<?php echo $i; ?>)"
                         class="hover-shadow">
                </form>
            </div>
            <?php $i++;
        } ?>
    </div>
</div>

<div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="gallery-modal container">
        <div class="modal-content">
            <?php
            $i = 1;
            foreach ($photoResult as $row) { ?>
                <div class="mySlides">
                    <div class="numbertext"><?php echo $row['photoID'] ?> / 8</div>
                    <img src="assets/<?php echo $row['photo'] ?>" style="width:100%">
                </div>
                <?php $i++;
            } ?>
            <!-- Next/previous controls -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

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
    // Open the Modal
    function openModal() {
        document.getElementById("myModal").style.display = "block";
    }

    // Close the Modal
    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>

<style>
    <?php include 'styles/index.css'; ?>
</style>
