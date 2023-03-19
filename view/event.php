<?php
require("rootPath.php");

require $rootPath . "model/EventModel.php";
require $rootPath . "controller/EventController.php";

?>


</table>
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
                                    <th scope="col">Event</th>
                                    <th scope="col">Host</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Venue</th>

                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                foreach ($allEventsResult

                                as $row) {
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
                                        <h4><?php echo $row['eventName'] ?></h4>
                                    </td>
                                    <td>
                                        <p><?php echo $row['host'] ?></p>
                                    </td>
                                    <td>
                                        <p><?php
                                            echo date('h:i A', strtotime($row['start'])); ?>
                                                -
                                                <?php
                                                echo date('h:i A', strtotime($row['end'])); ?></p>
                                    </td>
                                    <td>
                                        <div class="r-no">
                                                        <span><?php echo $row['address'] ?>
                                                </a></p></span>
                                        </div>
                                    </td>
                                <tr>
                                    <td colspan="5">
                                        <div class="accordion" id="accordionExample">
                                            <div class="card ">
                                                <div class="card-header" style="background-color: tan" id="heading<?php echo $row['eventID'] ?>">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-block text-center"
                                                                type="button" data-toggle="collapse"
                                                                data-target="#collapse<?php echo $row['eventID'] ?>"
                                                                aria-expanded="false"
                                                                aria-controls="collapse<?php echo $row['eventID'] ?>">
                                                            <h4 class="fieldset-title">Read more</h4>
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapse<?php echo $row['eventID'] ?>" class="collapse"
                                                     aria-labelledby="heading<?php echo $row['eventID'] ?>"
                                                     data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p><?php echo $row['description'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>


                                </tbody> <?php
                                } ?>

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
