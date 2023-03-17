<?php
require("rootPath.php");

require $rootPath . "model/EventModel.php";
require $rootPath . "controller/EventController.php";

?>


<div class="row">
    <div class="col-9 blog-main">
        <div class="row">

            <div class="candidates-listing-item">
                <?php
                foreach ($allEventsResult as $row) {
                    ?>
                    <div class="list-grid-item mt-4 p-2">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="candidates-img float-left mr-4">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""
                                         class="img-fluid d-block rounded">
                                </div>
                                <div class="candidates-list-desc job-single-meta  pt-2">
                                    <h5 class="mb-2 f-19"><a href="#"
                                                             class="text-dark"><?php echo $row['eventName'] ?></a></h5>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item mr-4">
                                            <p class="text-muted f-15 mb-0"><i
                                                        class="mdi mdi-account mr-1"></i>Host: <?php echo $row['host'] ?>
                                            </p>
                                        </li>
                                        <li class="list-inline-item mr-4">
                                            <?php
                                            $today = date("F j, Y",  strtotime($row['date']));
                                            echo $today;

                                            ?>
                                        </li>

                                        <li class="list-inline-item mr-4">
                                            <p class="f-15 mb-0"><a href="" class="text-muted"><i
                                                            class="mdi mdi-map-marker mr-1"></i><?php echo $row['address'] ?>
                                                </a></p>
                                        </li>

                                        <li class="list-inline-item">
                                            <p class="text-muted f-15 mb-0"><i
                                                        class="mdi mdi-currency-usd mr-1"></i><?php echo $row['start'] ?>
                                                -
                                                <?php echo $row['end'] ?></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="candidates-list-fav-btn text-right">
                                    <div class="fav-icon">
                                        <i class="mdi mdi-heart f-20"></i>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-11 offset-lg-1">
                                <div class="candidates-item-desc">
                                    <hr>
                                    <p class="text-muted mb-2 f-14"><?php echo $row['description'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                } ?>

            </div>
        </div>
    </div>


    <aside class="col-3 blog-sidebar">


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


<style>
    .candidates-listing-bg {
        padding: 210px 0px 60px 0px;
        background-size: cover;
        position: relative;
        background-position: center center;
    }

    .custom-checkbox .custom-control-input:checked ~ .custom-control-label:before {
        background-color: #ff4f6c;
        border-color: #ff4f6c;
    }

    .custom-checkbox .custom-control-input:focus ~ .custom-control-label:before {
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .candidates-img img {
        max-width: 90px;
    }

    .fav-icon i {
        -webkit-text-stroke: 2px #ff4f6c;
        -webkit-text-fill-color: transparent;
    }

    .fav-icon i:hover {
        -webkit-text-stroke: 0px #ff4f6c;
        -webkit-text-fill-color: #ff4f6c;
    }

    .candidates-list-desc {
        overflow: hidden;
    }

    .candidates-right-details {
        position: absolute;
        top: 0;
        right: 20px;
    }

    .candidates-item-desc {
        margin-left: 45px;
    }

    .list-grid-item {
        border: 1px solid #ececec;
        border-radius: 6px;
        -webkit-transition: all 0.5s;
        transition: all 0.5s;
    }

    .list-grid-item:hover {
        -webkit-box-shadow: 0 0 20px 0px rgba(47, 47, 47, 0.09);
        box-shadow: 0 0 20px 0px rgba(47, 47, 47, 0.09);
        -webkit-transition: all 0.5s;
        transition: all 0.5s;
        border-color: transparent;
    }

    .left-sidebar .card-body {
        border-bottom: 1px solid #ececec;
    }

    .custom-control {
        margin: 11px 20px;
    }

    .card-header {
        background-color: transparent;
        margin-bottom: 0 !important;
    }

    .pagination.job-pagination .page-link {
        border-radius: 50% !important;
        margin: 0 4px;
        height: 46px;
        width: 45px;
        line-height: 29px;
        text-align: center;
        color: #777777;
    }

    .page-item.active .page-link {
        background-color: #ff4f6c;
        border-color: #ff4f6c;
        color: #ffffff !important;
    }

    .f-14 {
        font-size: 14px;
    }

    .btn-outline {
        color: #ff4f6c;
        border-color: #ff4f6c;
    }

    .btn-sm {
        padding: 8px 22px;
    }
</style>