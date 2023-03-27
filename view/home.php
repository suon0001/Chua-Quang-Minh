<?php
require("rootPath.php");
require $rootPath . "model/HomeModel.php";
require $rootPath . "controller/HomeController.php";
if (isset($_SESSION['visitCount'])) {
    $_SESSION['visitCount']++;
} else {
    $_SESSION['visitCount'] = 1;
}
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
                                            <div class="col-2">
                                                <img src="assets/banner/<?php echo $row['banner'] ?>"
                                                     class="img-fluid-small shadow-1-strong rounded h-100 d-inline-block"
                                                     alt=""/>
                                            </div>

                                            <div class="col-10">
                                                <p class="mb-2 block text-truncate">
                                                    <strong><?php echo $row['title'] ?></strong></p>
                                                <p>
                                                    <small><?php
                                                        $today = date("F j, g:i a", strtotime($row['timeUpdated']));
                                                        echo $today;

                                                        ?></small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-2 mb-4 mb-lg-0">
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
                                            <div class="col-2">
                                                <img src="assets/banner/<?php echo $row['banner'] ?>"
                                                     class="img-fluid-small shadow-1-strong rounded h-100 d-inline-block"
                                                     alt=""/>
                                            </div>

                                            <div class="col-10">
                                                <p class="mb-2 block text-truncate">
                                                    <strong><?php echo $row['title'] ?></strong></p>
                                                <p>
                                                    <small> <?php
                                                        $today = date("F j, g:i a", strtotime($row['timeUpdated']));
                                                        echo $today;

                                                        ?></small>
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
                                    <h5>About charity</h5>

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
                                            <div class="col-2">
                                                <img src="assets/banner/<?php echo $row['banner'] ?>"
                                                     class="img-fluid-small shadow-1-strong rounded h-100 d-inline-block"
                                                     alt=""/>
                                            </div>

                                            <div class="col-10">
                                                <p class="mb-2 block text-truncate">
                                                    <strong><?php echo $row['title'] ?></strong></p>
                                                <p>
                                                    <small> <?php
                                                        $today = date("F j, g:i a", strtotime($row['timeUpdated']));
                                                        echo $today;

                                                        ?></small>
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
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            }, events: [

                {
                    title: 'All Day Event',
                    start: '2023-03-02'
                },
                {
                    title: 'test',
                    start: '2023-03-07',
                    end: '2023-03-10'
                },
                {
                    groupId: '999',
                    title: 'test',
                    start: '2023-03-26T16:00:00'
                },
                {
                    groupId: '999',
                    title: 'test',
                    start: '2023-03-16T16:00:00'
                },
                {
                    title: 'Conference',
                    start: '2023-03-11',
                    end: '2023-03-13'
                },
                {
                    title: 'Meeting',
                    start: '2023-03-12T10:30:00',
                    end: '2023-03-12T12:30:00'
                },
                {
                    title: 'Lunch',
                    start: '2023-03-12T12:00:00'
                },
                {
                    title: 'Meeting',
                    start: '2023-03-12T14:30:00'
                },
                {
                    title: 'Birthday Party',
                    start: '2023-03-13T07:00:00'
                },

            ]
        });
        calendar.render();
    });

</script>

<style>
    <?php include 'styles/index.css'; ?>
</style>