<?php
require("rootPath.php");

require $rootPath . "model/ArticleModel.php";
require $rootPath . "controller/ArticleController.php";

?>

<div class="container-fluid">
    <?php
    while ($row = $allActicles->fetch(PDO::FETCH_ASSOC)) {
    ?>

    <div class="row">
        <div class="col-9">
            <br>
            <div class="bg-image"
                 style="background-image: url('/Chua/assets/<?php echo $row['photo'] ?>');">
            </div>
            <blockquote class="blockquote">
                <h2 class="mb-0"><?php echo $row['title'] ?></h2>
                <br>
                <footer class="blockquote-footer"> written by
                    <cite
                            title="Source Title"><?php echo $row['author'] ?>
                    </cite>
                </footer>
            </blockquote>
            <h5><?php echo $row['description'] ?></h5>
            <hr>
            <p><?php echo $row['paragraph'] ?></p>
        </div>
        <?php } ?>
        <aside class="col-3 blog-sidebar mt-4">
            <div class="p-3 mb-3 bg-light rounded">

                <div class="container bootstrap snippets">
                    <div class="row">
                        <div class="col-sm-8 col-md-9 col-lg-9 text-center">
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        while ($row = $AllActicles->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <a href="/article?newsID=<?php echo $row['newsID']; ?>" class="text-info">
                                        <i class="<?php echo $row['icon'] ?>"></i>
                                        <?php echo $row['typeName'] ?>
                                    </a>
                                </div>

                                <div class="col-6 text-end">
                                    <u> <?php echo $row['timeUpdated'] ?></u>
                                </div>
                            </div>

                            <!-- Article title and description -->
                            <a href="/article?newsID=<?php echo $row['newsID']; ?>" class="text-dark">
                                <h4><?php echo $row['title'] ?></h4>

                                <p class="text-truncate"><?php echo $row['paragraph'] ?></p>
                            </a>

                            <hr/>

                        <?php } ?>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</div>
<style>
    <?php include 'styles/index.css'; ?>
</style>