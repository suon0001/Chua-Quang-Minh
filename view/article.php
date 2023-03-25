<?php
require("rootPath.php");

require $rootPath . "model/ArticleModel.php";
require $rootPath . "controller/ArticleController.php";


?>

<?php
while ($row = $articleResult->fetch(PDO::FETCH_ASSOC)) {
    ?>

    <div class="row align-items-start">
        <div class="col-lg-8 m-15px-tb">
            <article class="article">
                <div class="bg-image"
                     style="background-image: url('assets/banner/<?php echo $row['banner'] ?>');">
                </div>
                <div class="article-title">
                    <h6><a href="/news?action=news&newsTypeID=<?php echo $row['newsTypeID'] ?>"><i
                                    class="<?php echo $row['icon'] ?>"></i> <?php echo $row['typeName'] ?></a></h6>
                    <h2><?php echo $row['title'] ?></h2>
                    <div class="media">
                        <div class="avatar">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" title="" alt="">
                        </div>
                        <div class="media-body">
                            <label><?php echo $row['author'] ?></label>
                            <span><?php
                                $today = date("F j, Y, g:i a", strtotime($row['timeUpdated']));
                                echo $today;

                                ?></span>
                        </div>
                    </div>
                </div>
                <div class="article-content">
                    <p><?php echo $row['description'] ?></p>
                    <hr>
                    <p><?php echo $row['paragraph'] ?></p>
                </div>

            </article>
        </div>
        <div class="col-lg-4 m-15px-tb blog-aside">
            <!-- Author -->

            <!-- End Author -->
            <!-- Trending Post -->
            <div class="widget widget-post">
                <div class="widget-title">
                    <h3>Trending Now</h3>
                </div>
                <div class="widget-body">

                </div>
            </div>
            <!-- End Trending Post -->
            <!-- Latest Post -->
            <div class="widget widget-latest-post">
                <div class="widget-title">
                    <h3>Latest Post</h3>
                </div>
                <div class="widget-body">
                    <?php
                    while ($row = $allActicles->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <div class="latest-post-aside media">
                            <div class="lpa-left media-body">
                                <div class="lpa-title">
                                    <h5><a href="/article?newsID=<?php echo $row['newsID']; ?>"><i
                                                    class="<?php echo $row['icon'] ?>"></i>
                                            <?php echo $row['title'] ?></a></h5>
                                </div>
                                <div class="lpa-meta">
                                    <a class="date" href="#">
                                        <?php
                                        $today = date("F j, Y", strtotime($row['timeUpdated']));
                                        echo $today;

                                        ?>
                                    </a>
                                </div>
                            </div>
                            <div class="lpa-right">
                                <a href="#">
                                    <img src="assets/banner/<?php echo $row['banner'] ?>" title="" alt="">
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>


<?php } ?>


<style>
    <?php include 'styles/index.css'; ?>

</style>