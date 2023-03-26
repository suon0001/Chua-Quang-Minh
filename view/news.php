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
                <h3 class="mb-3">Latest from Our Blog</h3>
                <div class="mb-2" align="center">
                    <?php
                    foreach ($newsTypeResult as $row) {
                        ?>
                        <div class="btn  filter-button" data-filter="<?php echo $row['typeName']; ?>">
                            <a class="nav-link categories-text"
                               href="/news?action=news&newsTypeID=<?php echo $row['newsTypeID'] ?>">
                                <?php echo $row['typeName']; ?>
                            </a>
                        </div>
                        <?php
                    } ?>
                </div>
                <h6 class="subtitle font-weight-normal">You can relay on our amazing features list and also our customer
                    services will be great experience for you without doubt</h6>
            </div>
        </div>
        <div class="row mt-4">

            <?php
            foreach ($blogResult as $row) { ?>
                <div class="col-md-4">
                    <div class="card b-h-box position-relative font-14 border-0 mb-4">
                        <img class="card-img d-block img-fluid banner" src="assets/banner/<?php echo $row['banner'] ?>"
                             alt="Card image">
                        <div class="card-img-overlay overflow-hidden">
                            <div class="d-flex align-items-center">
                            <span class="bg-danger-gradiant badge overflow-hidden text-white px-3 py-1 font-weight-normal"><i
                                        class="<?php echo $row['icon'] ?>"> </i> <?php echo $row['typeName'] ?></span>
                                <div class="ml-2">
                                <span class="ml-2"><?php
                                    $today = date("F j, g:i a", strtotime($row['timeUpdated']));
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
    <nav class="d-flex justify-content-center">
        <?php

        $newsTypeID = null;

        if (isset($_GET['limit']) && $_GET['limit']) {
            $limit = $_GET['limit'];
        }

        if (isset($_GET['skip']) && $_GET['skip']) {
            $skip = $_GET['skip'];
        }

        if (isset($_GET['newsTypeID']) && $_GET['newsTypeID']) {
            $newsTypeID = $_GET['newsTypeID'];
        }

        ?>
        <ul class="pagination">
            <li class="page-item"><a class="page-link exatic-background-color"
                                     href="/news?action=news&newsTypeID=<?php echo($newsTypeID); ?>&limit=<?php echo($limit) ?>&skip=
            <?php
                                     if (($skip - $limit) >= 0) {
                                         echo($skip - $limit);
                                     } else {
                                         echo($skip);
                                     }
                                     ?>">Previous</a>
            </li>
            <?php
            $pages = ceil($pageCount / $limit);
            for ($i = 0; $i < $pages; $i++) {
                ?>
                <li class="page-item">
                    <a class="page-link exatic-background-color"
                       href="/news?action=news&newsTypeID=<?php echo($newsTypeID) ?>&limit=<?php echo($limit) ?>&skip=<?php echo($limit * $i) ?>"><?php echo($i + 1); ?>
                    </a>
                </li>
                <?php
            }
            ?>
            <li class="page-item"><a class="page-link exatic-background-color"
                                     href="/news?action=news&newsTypeID=<?php echo($newsTypeID) ?>&limit=<?php echo($limit) ?>&skip=<?php
                                     if (($skip + $limit) <= ($pageCount)) {
                                         echo($skip + $limit);
                                     } else {
                                         echo($skip);
                                     }
                                     ?>">Next</a>
            </li>
        </ul>
    </nav>
</div>

<style>
    <?php include 'styles/index.scss'; ?>
</style>