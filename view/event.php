<?php
require("rootPath.php");

require $rootPath . "model/EventModel.php";
require $rootPath . "controller/EventController.php";

?>
<div class="container pt-4">
    <div class="row">
        <div class="col-lg-12">
            <input type="search" class="form-control" id="input-search" placeholder="Search...">
        </div>
        <div class="searchable-container">
        </div>
    </div>
    <br>
    <div class="row">
        <?php
        foreach ($allEventsResult

                 as $row) {
            ?>
            <div class="col-md-4 items">
                <div class="card b-h-box position-relative font-14 border-0 mb-4 text-white">
                    <div class="card-body p-4" style="background-color: #B9AFA2">
                    <span class="badge rounded-pill bg-primary float-md-end mb-3 mb-sm-0"><?php
                        $today = date("F j o", strtotime($row['date']));
                        echo $today;

                        ?>  </span>
                        <h5><?php echo $row['eventName'] ?></h5>
                        <div class="mt-3">
                        <span class="text-muted d-block"><i class="fa-solid fa-calendar-days"></i> <?php
                            echo date('h:i A', strtotime($row['start'])); ?>
                                                    -
                                                    <?php
                                                    echo date('h:i A', strtotime($row['end'])); ?>  </span>
                            <span class="text-muted d-block"><i class="fa fa-map-marker"
                                                                aria-hidden="true"></i> <?php echo $row['address'] ?></span>
                        </div>

                        <div class="mt-3">
                            <a href="page-job-detail.html" class=" btn">View Details</a>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>


        <div class="col-12 mt-4 pt-2 d-block d-md-none text-center">
            <a href="#" class="btn btn-primary">View more Jobs
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-arrow-right fea icon-sm">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
        </div>
    </div>
</div>

<style>
    <?php include 'styles/index.css'; ?>
</style>
