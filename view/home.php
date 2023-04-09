<?php
require("rootPath.php");
require $rootPath . "model/HomeModel.php";
require $rootPath . "controller/HomeController.php";
require $rootPath . "model/EventModel.php";
require $rootPath . "controller/EventController.php";

?>
<div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="carousel slide col-12 carousel-deco" id="myCarousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/gallery/image3.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/banner/image5.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/gallery/image2.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>One more for good measure.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9 m-15px-tb">
            <div class="row">
                <section>
                    <div class="row gx-lg-5">
                        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                            <div>
                                <div class="col-md-12 items blog-home5">
                                    <div class="col-6">
                                        <a href="" class="text-info">
                                            <i class="fa-solid fa-vihara"></i>
                                            CHUA
                                        </a>
                                    </div>
                                </div>

                                <?php
                                foreach ($chuaOneResult as $row) {
                                    ?>
                                    <div class="col-md-12 items blog-home5">
                                        <div class="card b-h-box position-relative font-14 border-0 mb-4">
                                            <img class="card-img d-block img-fluid banner"
                                                 src="assets/banner/<?php echo $row['banner'] ?>"
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
                                                <a href="/article?newsID=<?php echo $row['newsID']; ?> "
                                                   class="link-light">
                                                    <p class="card-text"><?php echo $row['description']; ?></p>
                                                </a>
                                                <br>
                                                <a href="/article?newsID=<?php echo $row['newsID']; ?> "
                                                   class="link-light">
                                                    <p class="card-text">READ MORE</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>

                                <hr/>
                                <!--  Chua -->
                                <?php
                                foreach ($chuaResult as $row) {
                                    ?>
                                    <article class="col-md-12 items blog-home5">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
                                                <div class="post-type post-img">
                                                    <a href="/article?newsID=<?php echo $row['newsID']; ?>"><img
                                                                src="assets/banner/<?php echo $row['banner'] ?>"
                                                                class="img-responsive post-img" alt="image post"></a>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                                                <div class="author-info author-info-2">
                                                    <small><?php
                                                        $today = date("F j, g:i a", strtotime($row['timeUpdated']));
                                                        echo $today;

                                                        ?></small>
                                                </div>
                                                <div class="caption">
                                                    <h6 class="md-heading"><a
                                                                href="/article?newsID=<?php echo $row['newsID']; ?>"><?php echo $row['title'] ?></a>
                                                    </h6>
                                                    <small class="paragraph"><?php echo $row['description'] ?></small>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <hr>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-2 mb-4 mb-lg-0">
                            <div>
                                <div class="col-md-12 items blog-home5">
                                    <div class="col-6">
                                        <a href="" class="text-danger">
                                            <i class="fa-solid fa-globe"></i>
                                            WORLD
                                        </a>
                                    </div>
                                </div>

                                <?php
                                foreach ($worldOneResult as $row) {
                                    ?>
                                    <div class="col-md-12 items blog-home5">
                                        <div class="card b-h-box position-relative font-14 border-0 mb-4">
                                            <img class="card-img d-block img-fluid banner"
                                                 src="assets/banner/<?php echo $row['banner'] ?>"
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
                                                <a href="/article?newsID=<?php echo $row['newsID']; ?> "
                                                   class="link-light">
                                                    <p class="card-text"><?php echo $row['description']; ?></p>
                                                </a>
                                                <br>
                                                <a href="/article?newsID=<?php echo $row['newsID']; ?> "
                                                   class="link-light">
                                                    <p class="card-text">READ MORE</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>

                                <hr/>

                                <!-- World -->
                                <?php
                                foreach ($worldResult as $row) {
                                    ?>
                                    <article class="col-md-12 items blog-home5">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
                                                <div class="post-type post-img">
                                                    <a href="/article?newsID=<?php echo $row['newsID']; ?>"><img
                                                                src="assets/banner/<?php echo $row['banner'] ?>"
                                                                class="img-responsive post-img" alt="image post"></a>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                                                <div class="author-info author-info-2">
                                                    <small><?php
                                                        $today = date("F j, g:i a", strtotime($row['timeUpdated']));
                                                        echo $today;

                                                        ?></small>
                                                </div>
                                                <div class="caption">
                                                    <h6 class="md-heading"><a
                                                                href="/article?newsID=<?php echo $row['newsID']; ?>"><?php echo $row['title'] ?></a>
                                                    </h6>
                                                    <small class="paragraph"><?php echo $row['description'] ?></small>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <hr>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <div>
                                <div class="col-md-12 items blog-home5">
                                    <div class="col-6">
                                        <a href="" class="text-warning">
                                            <i class="fa-solid fa-hand-holding-heart"></i>
                                            CHARITY
                                        </a>
                                    </div>
                                </div>
                                <?php
                                foreach ($charityOneResult as $row) {
                                    ?>
                                    <div class="col-md-12 items blog-home5">
                                        <div class="card b-h-box position-relative font-14 border-0 mb-4">
                                            <img class="card-img d-block img-fluid banner"
                                                 src="assets/banner/<?php echo $row['banner'] ?>"
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
                                                <a href="/article?newsID=<?php echo $row['newsID']; ?> "
                                                   class="link-light">
                                                    <p class="card-text"><?php echo $row['description']; ?></p>
                                                </a>
                                                <br>
                                                <a href="/article?newsID=<?php echo $row['newsID']; ?> "
                                                   class="link-light">
                                                    <p class="card-text">READ MORE</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                                <hr/>

                                <!-- charity -->
                                <?php
                                foreach ($charityResult as $row) {
                                    ?>
                                    <article class="col-md-12 items blog-home5">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
                                                <div class="post-type post-img">
                                                    <a href="/article?newsID=<?php echo $row['newsID']; ?>"><img
                                                                src="assets/banner/<?php echo $row['banner'] ?>"
                                                                class="img-responsive post-img" alt="image post"></a>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                                                <div class="author-info author-info-2">
                                                    <small><?php
                                                        $today = date("F j, g:i a", strtotime($row['timeUpdated']));
                                                        echo $today;

                                                        ?></small>
                                                </div>
                                                <div class="caption">
                                                    <h6 class="md-heading"><a
                                                                href="/article?newsID=<?php echo $row['newsID']; ?>"><?php echo $row['title'] ?></a>
                                                    </h6>
                                                    <small class="paragraph"><?php echo $row['description'] ?></small>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <hr>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>

        <div class="col-lg-3 m-15px-tb blog-aside">
            <div class="widget-latest-post">
                <div class="widget-body bg-transparent">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            }, events: [
                <?php  foreach ($allEventsResult as $row) {

                $title = $row['eventName'];
                $myJSONTitle = json_encode($title);
                $dateDate = date("Y-m-d", strtotime($row['date']));
                $dateStart = date("H:i:s", strtotime($row['start']));
                $dateEnd = date("H:i:s", strtotime($row['end']));

                ?>


                {
                    title: '<?php echo $myJSONTitle ?>',
                    start: '<?php echo $dateDate ?>T<?php echo $dateStart ?>',
                    end: '<?php echo $dateDate ?>T<?php echo $dateEnd ?>'
                },
                <?php
                }
                ?>
            ]
        });
        calendar.render();
    });

</script>

<style>
    <?php include 'styles/index.css'; ?>
</style>