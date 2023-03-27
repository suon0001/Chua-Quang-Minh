<?php
require("rootPath.php");

require $rootPath . "model/NewsModel.php";
require $rootPath . "controller/NewsController.php";

?>

<div class="blog-home5 py-5">
    <div class="container">
        <!-- Row  -->
        <div class="row justify-content-center">
            <!-- Column -->
            <div class="col-md-8 text-center">
                <div class="mb-2" align="center">
                    <?php
                    foreach ($newsTypeResult as $row) {
                        ?>
                        <div class="btn filter-button" data-filter="<?php echo $row['typeName']; ?>">
                            <a class="nav-link categories-text"
                               href="/news?action=news&newsTypeID=<?php echo $row['newsTypeID'] ?>">
                                <?php echo $row['typeName']; ?>
                            </a>
                        </div>
                        <?php
                    } ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <input type="search" class="form-control" id="input-search" placeholder="Search...">
                </div>
                <div class="searchable-container">
                </div>
            </div>
        </div>
        <div class="row mt-4 searchable-container">

            <?php
            foreach ($blogResult as $row) { ?>
                <div class="col-md-4 items">
                    <div class="card b-h-box position-relative font-14 border-0 mb-4">
                        <img class="card-img d-block img-fluid banner" src="assets/banner/<?php echo $row['banner'] ?>"
                             alt="Card image">
                        <div class="card-img-overlay overflow-hidden">
                            <div class="d-flex align-items-center">
                            <span class="bg-danger-gradiant badge overflow-hidden text-white px-3 py-1 font-weight-normal"><i
                                        class="<?php echo $row['icon'] ?>"> </i> <?php echo $row['typeName'] ?></span>
                                <div class="ml-2">
                                <span class="ml-2"><?php
                                    $today = date("F j", strtotime($row['timeUpdated']));
                                    echo $today;

                                    ?></span>
                                </div>
                            </div>
                            <h5 class="card-title my-3 font-weight-normal"><a
                                        href="/article?newsID=<?php echo $row['newsID']; ?>"
                                        class="link-light"><?php echo $row['title']; ?></a></h5>
                            <a href="/article?newsID=<?php echo $row['newsID']; ?> " class="link-light">
                                <p class="card-text"><?php echo $row['description']; ?></p>
                            </a>
                            <br>
                            <a href="/article?newsID=<?php echo $row['newsID']; ?> " class="link-light">
                                <p class="card-text">READ MORE</p>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
            } ?>
        </div>
    </div>
</div>

<script>
    $(function () {
        $('#input-search').on('keyup', function () {
            var rex = new RegExp($(this).val(), 'i');
            $('.searchable-container .items').hide();
            $('.searchable-container .items').filter(function () {
                return rex.test($(this).text());
            }).show();
        });
    });
</script>

<style>
    <?php include 'styles/index.scss'; ?>
</style>