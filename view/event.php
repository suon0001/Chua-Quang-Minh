<?php
require("rootPath.php");

require $rootPath . "model/EventModel.php";
require $rootPath . "controller/EventController.php";

?>

<!-- /#accordion -->

<div class="row">
    <div class="col-9 blog-main">
        <div class="event-schedule-area-two bg-color pad100">

            <div class="col-lg-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="home" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="text-center" scope="col">Date</th>
                                    <th scope="col">Session</th>
                                    <th scope="col">Venue</th>
                                    <th class="text-center" scope="col">More Information</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($allEventsResult as $row) {
                                    ?>

                                    <tr class="inner-box">
                                        <th scope="row">
                                            <div class="event-date">
                                                        <span>  <?php
                                                            $today = date("j", strtotime($row['date']));
                                                            echo $today;

                                                            ?></span>
                                                <p>  <?php
                                                    $today = date("F", strtotime($row['date']));
                                                    echo $today;

                                                    ?></p>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="event-wrap">
                                                <h3><a href="#"><?php echo $row['eventName'] ?></a></h3>
                                                <div class="meta">
                                                    <div class="organizers">
                                                        <a href="#"><?php echo $row['host'] ?></a>
                                                    </div>
                                                    <div class="time">
                                                                <span><?php
                                                                    echo date('h:i A', strtotime($row['start'])); ?>
                                                -
                                                <?php
                                                echo date('h:i A', strtotime($row['end'])); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="r-no">
                                                        <span><?php echo $row['address'] ?>
                                                </a></p></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="panel-group drop-accordion" id="accordion"
                                                 role="tablist" aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading tab-collapsed" role="tab"
                                                         id="headingOne">
                                                        <p class="panel-title">
                                                            <a class="collapse-controle"
                                                               data-toggle="collapse"
                                                               data-parent="#accordion"
                                                               href="#collapse<?php echo $row['eventID'] ?>"
                                                               aria-expanded="true"
                                                               aria-controls="collapse<?php echo $row['eventID'] ?>">
                                                                Read More
                                                                <span class="expand-icon-wrap"><i
                                                                            class="fa expand-icon"></i></span>
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <div id="collapse<?php echo $row['eventID'] ?>"
                                                         class="panel-collapse collapse in" role="tabpanel"
                                                         aria-labelledby="headingOne" aria-expanded="true">
                                                        <div class="panel-body">
                                                            <?php echo $row['description'] ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div><!-- /col end-->
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

    </aside>

</div>

<script>
    $(function () {
        $('.panel-heading').click(function (e) {
            $('.panel-heading').removeClass('tab-collapsed');
            var collapsCrnt = $(this).find('.collapse-controle').attr('aria-expanded');
            if (collapsCrnt != 'true') {
                $(this).addClass('tab-collapsed');
            }
        });
    })
</script>

<style>
    <?php include 'styles/index.css'; ?>
</style>
