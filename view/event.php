<?php
require("rootPath.php");

require $rootPath . "model/EventModel.php";
require $rootPath . "controller/EventController.php";

?>

<div class="idance">
    <div class="schedule content-block">
        <div class="container">

            <div class="timetable">

                <nav class="nav nav-tabs">
                    <a class="nav-link active">All</a>
                    <a class="nav-link">January</a>
                    <a class="nav-link">February</a>
                    <a class="nav-link">March</a>
                    <a class="nav-link">April</a>
                    <a class="nav-link">May</a>
                    <a class="nav-link">June</a>
                    <a class="nav-link">July</a>
                    <a class="nav-link">August</a>
                    <a class="nav-link">September</a>
                    <a class="nav-link">October</a>
                    <a class="nav-link">November</a>
                    <a class="nav-link">December</a>
                </nav>

                <div class="tab-content">
                    <div class="tab-pane show active">
                        <div class="row">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="text-center" scope="col">Date</th>
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
                                                                    data-target="#collapse<?php echo $row['eventID'] ?>"
                                                                    aria-expanded="true"
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



                                <?php } ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</table>
<div class="row">
    <div class="event-schedule-area-two bg-color pad100">
        <div class="[ col-12 col-sm-offset-2 ]">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active show" id="home" role="tabpanel">
                    <div class="table-responsive">
                        <
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>


<style>
    <?php include 'styles/index.css'; ?>
</style>
