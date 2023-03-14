<?php
require("rootPath.php");

require $rootPath . "model/HomeModel.php";
require $rootPath . "controller/HomeController.php";

?>

<div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12 carousel-deco">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://www.bootdey.com/image/400x400/D2B48CFF/000000" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>some text </h5>
                            <p>more text</p>
                            <a href="" class="btn btn-light" role="button"> Learn more</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets/image7.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>some text </h5>
                            <p>more text</p>
                            <a href="/about-us" class="btn btn-light" role="button"> Learn more</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets/image3.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-9 blog-main">
                <div class="row">
                    <section>
                        <div class="row gx-lg-5">
                            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                <div>
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <a href="" class="text-info">
                                                <i class="fa-solid fa-vihara"></i>
                                                CHUA
                                            </a>
                                        </div>
                                    </div>

                                    <a href="" class="text-dark">
                                        <h5>This is title of the news</h5>

                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, iste aliquid.
                                            Sed
                                            id nihil magni, sint vero provident esse numquam perferendis ducimus dicta
                                            adipisci iusto nam temporibus modi animi laboriosam?
                                        </p>
                                    </a>

                                    <hr/>
                                    <!--  Chua -->
                                    <?php
                                    foreach ($chuaResult as $row) {
                                        ?>

                                        <a href="/article?newsID=<?php echo $row['newsID']; ?>" class="text-dark">
                                            <div class="row mb-4 border-bottom pb-2">
                                                <div class="col-3">
                                                    <img src="assets/<?php echo $row['photo'] ?>"
                                                         class="img-fluid-small shadow-1-strong rounded h-100 d-inline-block"
                                                         alt="<?php echo $row['photo'] ?>"/>
                                                </div>

                                                <div class="col-9">
                                                    <p class="mb-2 block text-truncate">
                                                        <strong><?php echo $row['title'] ?></strong></p>
                                                    <p>
                                                        <small> <?php echo $row['timeUpdated'] ?></small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                <div>
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <a href="" class="text-danger">
                                                <i class="fa-solid fa-globe"></i>
                                                WORLD
                                            </a>
                                        </div>
                                    </div>

                                    <a href="" class="text-dark">
                                        <h5>This is title of the news</h5>

                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, iste aliquid.
                                            Sed
                                            id nihil magni, sint vero provident esse numquam perferendis ducimus dicta
                                            adipisci iusto nam temporibus modi animi laboriosam?
                                        </p>
                                    </a>

                                    <hr/>

                                    <!-- World -->
                                    <?php
                                    foreach ($worldResult as $row) {
                                        ?>

                                        <a href="/article?newsID=<?php echo $row['newsID']; ?>" class="text-dark">
                                            <div class="row mb-4 border-bottom pb-2">
                                                <div class="col-3">
                                                    <img src="assets/<?php echo $row['photo'] ?>"
                                                         class="img-fluid-small shadow-1-strong rounded h-100 d-inline-block"
                                                         alt="<?php echo $row['photo'] ?>"/>
                                                </div>

                                                <div class="col-9">
                                                    <p class="mb-2 block text-truncate">
                                                        <strong><?php echo $row['title'] ?></strong></p>
                                                    <p>
                                                        <small> <?php echo $row['timeUpdated'] ?></small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                <div>
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <a href="" class="text-warning">
                                                <i class="fa-solid fa-hand-holding-heart"></i>
                                                CHARITY
                                            </a>
                                        </div>
                                    </div>

                                    <a href="" class="text-dark">
                                        <h5>This is title of the news</h5>

                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, iste aliquid.
                                            Sed
                                            id nihil magni, sint vero provident esse numquam perferendis ducimus dicta
                                            adipisci iusto nam temporibus modi animi laboriosam?
                                        </p>
                                    </a>

                                    <hr/>

                                    <!-- charity -->
                                    <?php
                                    foreach ($charityResult as $row) {
                                        ?>

                                        <a href="/article?newsID=<?php echo $row['newsID']; ?>" class="text-dark">
                                            <div class="row mb-4 border-bottom pb-2">
                                                <div class="col-3">
                                                    <img src="assets/<?php echo $row['photo'] ?>"
                                                         class="img-fluid-small shadow-1-strong rounded h-100 d-inline-block"
                                                         alt="<?php echo $row['photo'] ?>"/>
                                                </div>

                                                <div class="col-9">
                                                    <p class="mb-2 block text-truncate">
                                                        <strong><?php echo $row['title'] ?></strong></p>
                                                    <p>
                                                        <small> <?php echo $row['timeUpdated'] ?></small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <aside class="col-3 blog-sidebar">
                <div class="p-3 mb-3 bg-light rounded">
                    <h4 class="font-italic">About</h4>
                    <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur
                        purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                </div>

                <div class="p-3">
                    <h4 class="font-italic">Archives</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">March 2014</a></li>
                        <li><a href="#">February 2014</a></li>
                        <li><a href="#">January 2014</a></li>
                        <li><a href="#">December 2013</a></li>
                        <li><a href="#">November 2013</a></li>
                        <li><a href="#">October 2013</a></li>
                        <li><a href="#">September 2013</a></li>
                        <li><a href="#">August 2013</a></li>
                        <li><a href="#">July 2013</a></li>
                        <li><a href="#">June 2013</a></li>
                        <li><a href="#">May 2013</a></li>
                        <li><a href="#">April 2013</a></li>
                    </ol>
                </div>
                <div id="calendar"></div>

                <div class="p-3">
                    <h4 class="font-italic">Social Media</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </aside>

        </div>
    </div>
</div>

<style>
    <?php include 'styles/index.css'; ?>
</style>


