<?php
require("rootPath.php");

require $rootPath . "model/EventModel.php";
require $rootPath . "controller/EventController.php";

?>
<div class="blog-home5 py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="row">
                <div class="col-lg-12">
                    <input type="search" class="form-control" id="input-search" placeholder="Search...">
                </div>
                <div class="searchable-container">
                </div>
            </div>
        </div>
        <div class="row mt-4 searchable-container">
        <?php
        foreach ($blogResult
                 as $row) {
            ?>
            <div class="col-md-4 items">
                <div class="card b-h-box position-relative font-14 border-0 mb-4 text-white">
                    <div class="card-body p-4" style="background-color: #B9AFA2">
                    <span class="badge rounded-pill bg-primary float-md-end mb-3 mb-sm-0"><?php
                        $today = date("F j o", strtotime($row['date_start']));
                        echo $today;

                        ?>  </span>
                        <h5><?php echo $row['eventName'] ?></h5>
                        <div class="mt-3">
                        <span class="text-muted d-block"><i class="fa-solid fa-calendar-days"></i> <?php
                            echo date('h:i A', strtotime($row['start_time'])); ?></span>
                            <span class="text-muted d-block"><i class="fa fa-map-marker"
                                                                aria-hidden="true"></i> <?php echo $row['address'] ?></span>
                        </div>

                        <div class="mt-3">
                            <a href="/details?eventID=<?php echo $row['eventID']; ?> " class="link-light">View Details</a>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>
    </div>
</div>

<script>
    $(function () {
        $('#input-search').on('keyup', function () {
            var rex = new RegExp($(this).val(), 'i');
            $('.searchable-container .items').hide();
            $('.searchable-container .items').filter(function () {
                return rex.test($(this).text());
            }).show();
        });
    });
</script>

<style>
    <?php include 'styles/index.css'; ?>
</style>
