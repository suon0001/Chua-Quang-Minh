<?php
require("rootPath.php");

require $rootPath . "model/NewsModel.php";
require $rootPath . "controller/NewsController.php";

?>

<div class="row clearfix">
    <div class="col-lg-9 col-md-12 left-box">
        <div class="row">
            <?php
            foreach ($blogResult as $row) { ?>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="card card-small">
                        <div class="thumbnail">
                            <img class="d-block img-fluid banner" src="assets/banner/<?php echo $row['banner'] ?>">
                            <a href="#/product/awesome-landing-page">
                                <div class="thumb-cover"></div>
                            </a>
                            <div class="details">
                                <div class="user">
                                    <div class="name"><?php echo $row['timeUpdated'] ?></div>
                                </div>
                                <div class="numbers"><i
                                            class="<?php echo $row['icon'] ?>"></i> <?php echo $row['typeName'] ?>

                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="card-info">
                            <div class="moving">
                                <a href="#/product/awesome-landing-page">
                                    <h3>
                                        <a href="/article?newsID=<?php echo $row['newsID']; ?>"><?php echo $row['title'] ?></a>
                                    </h3>
                                    <div class="text"><?php echo $row['description']; ?></div>
                                </a>
                                <b class="actions">
                                    <a href="/article?newsID=<?php echo $row['newsID']; ?>">Details</a>
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            } ?>
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
                                         ?>">Previous</a></li>
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
                                         ?>">Next</a></li>
            </ul>
        </nav>
    </div>
    <div class="col-lg-3 col-md-12 right-box">
        <div class="card">
            <div class="header">
                <h2>Categories</h2>
            </div>
            <div class="body widget">
                <ul class="list-unstyled categories-clouds m-b-0">
                    <?php
                    foreach ($newsTypeResult as $row) {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link categories-text"
                               href="/news?action=news&newsTypeID=<?php echo $row['newsTypeID'] ?>">
                                <?php echo $row['typeName']; ?>
                            </a>
                        </li>
                        <?php
                    } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<style>
    <?php include 'styles/news.css'; ?>
</style>