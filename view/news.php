<?php
require("rootPath.php");

require $rootPath . "model/NewsModel.php";
require $rootPath . "controller/NewsController.php";

?>

<div class="row clearfix">
    <div class="col-lg-8 col-md-12 left-box">
        <?php
        foreach ($blogResult as $row) { ?>
            <div class="card single_post">
                <div class="body">
                    <h3><?php echo $row['title'] ?></h3>
                    <small><?php echo $row['timeUpdated'] ?></small>
                    <p><?php echo $row['description'] ?></p>
                </div>
                <div class="footer">
                    <div class="actions">
                        <a href="/article?newsID=<?php echo $row['newsID']; ?>" class="btn btn-outline-secondary">Continue
                            Reading</a>
                    </div>
                    <ul class="stats">
                        <li><a href="javascript:void(0);"><i
                                        class="<?php echo $row['icon'] ?>"></i><?php echo $row['typeName'] ?></a></li>
                        <li><a href="javascript:void(0);" class="fa fa-heart">28</a></li>
                        <li><a href="javascript:void(0);" class="fa fa-comment">128</a></li>
                    </ul>
                </div>
            </div>
            <?php
        } ?>
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
    <div class="col-lg-4 col-md-12 right-box">
        <div class="card">
            <div class="body search">
                <div class="input-group m-b-0">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-search"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search...">
                </div>
            </div>
        </div>
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
        <div class="card">
            <div class="header">
                <h2>Popular Posts</h2>
            </div>
            <div class="body widget popular-post">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single_post">
                            <p class="m-b-0">Apple Introduces Search Ads Basic</p>
                            <span>jun 22, 2018</span>
                            <div class="img-post">
                                <img src="assets/image5.jpg" alt="Awesome Image">
                            </div>
                        </div>
                        <div class="single_post">
                            <p class="m-b-0">new rules, more cars, more races</p>
                            <span>jun 8, 2018</span>
                            <div class="img-post">
                                <img src="assets/image2.jpg" alt="Awesome Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2>Instagram Post</h2>
            </div>
            <div class="body widget">
                <ul class="list-unstyled instagram-plugin m-b-0">
                    <li><a href="javascript:void(0);"><img src="https://www.bootdey.com/image/80x80/FFB6C1/000000"
                                                           alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="https://www.bootdey.com/image/80x80/FFB6C1/000000"
                                                           alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="https://www.bootdey.com/image/80x80/FFB6C1/000000"
                                                           alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="https://www.bootdey.com/image/80x80/FFB6C1/000000"
                                                           alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="https://www.bootdey.com/image/80x80/FFB6C1/000000"
                                                           alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="https://www.bootdey.com/image/80x80/FFB6C1/000000"
                                                           alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="https://www.bootdey.com/image/80x80/FFB6C1/000000"
                                                           alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="https://www.bootdey.com/image/80x80/FFB6C1/000000"
                                                           alt="image description"></a></li>
                    <li><a href="javascript:void(0);"><img src="https://www.bootdey.com/image/80x80/FFB6C1/000000"
                                                           alt="image description"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<style>
    <?php include 'styles/index.css'; ?>
</style>