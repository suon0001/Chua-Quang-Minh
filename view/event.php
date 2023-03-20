<?php
require("rootPath.php");

require $rootPath . "model/EventModel.php";
require $rootPath . "controller/EventController.php";

?>


</table>
<div class="row">
    <div class="col-9 blog-main">
        <div class="event-schedule-area-two bg-color pad100">
            <div class="[ col-12 col-sm-offset-2 ]">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="home" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="text-center" scope="col">Date</th>
                                    <th></th>
                                    <th scope="col">Event</th>
                                    <th scope="col">Venue</th>
                                    <th></th>
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
                                            <div class="event-img">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""/>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="event-wrap">
                                                <h3><a href="#"><?php echo $row['eventName'] ?></a></h3>
                                                <div class="meta">
                                                    <div class="organizers">
                                                        <a href="#"><?php echo $row['host'] ?></a>
                                                    </div>
                                                    <div class="categories">
                                                        <a href="#">Inspire</a>
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
                                                <span><?php echo $row['address'] ?></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="primary-btn">
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="card-header" id="heading<?php echo $row['eventID'] ?>">
                                                            <h2 class="mb-0">
                                                                <button class="btn btn-link" type="button"
                                                                        data-toggle="collapse"
                                                                        data-target="#collapse<?php echo $row['eventID'] ?>" aria-expanded="true"
                                                                        aria-controls="collapse<?php echo $row['eventID'] ?>">
                                                                    Read more
                                                                </button>
                                                            </h2>
                                                        </div>
                                                    </div>
                                            </div>

                                        </td>
                                    <tr>
                                        <td colspan="5">
                                            <div id="collapse<?php echo $row['eventID'] ?>" class="collapse"
                                                 aria-labelledby="heading<?php echo $row['eventID'] ?>"
                                                 data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <?php echo $row['description'] ?>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tr>
                                <?php } ?>
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


<style>
    <?php include 'styles/index.css'; ?>
    .card-header {
        height: 30px;
        text-align: center;
        margin-bottom: 10px;
    }

    .accordion {
        margin-top: 0;
    }
</style>
