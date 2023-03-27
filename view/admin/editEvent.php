<?php
require("rootPath.php");

require $rootPath . "model/EditEventModel.php";
require $rootPath . "controller/EditEventController.php";

include("view/_partials/adminPanel.php");

?>


<h3>Event</h3>
<hr>
<div class="row">
    <?php

    while ($row = $allEvent->fetch(PDO::FETCH_ASSOC)) { ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="eventName">Event</label>
                <input type="hidden" name="eventID" value="<?php echo $row['eventID']; ?>">
                <input type="text" name="eventName" class="form-control" id="eventName"  value="<?php echo $row['eventName']; ?>">
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-9">
                    <div class="form-group">
                        <label for="host">Host</label>
                        <input type="text" name="host" class="form-control" id="host" value="<?php echo $row['host']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input class="form-control" name="address" id="address" value="<?php echo $row['address']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="20"><?php echo $row['description']; ?></textarea>
                    </div>
                </div>
                <div class="col-xs-5 col-md-3">
                    <div class="form-group">
                        <label for="start">Start time</label>
                        <input type="time" value="<?php echo $row['start']; ?>" name="start" class="form-control">
                        <label for="end">End time</label>
                        <input type="time" value="<?php echo $row['end']; ?>" name="end" class="form-control">
                        <label for="date">Date</label>
                        <input type="date" value="<?php echo $row['date']; ?>" name="date" class="form-control">
                        <br>
                        <div class="form-group">
                            <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                        </div>
                    </div>
                </div>
        </form>
    <?php } ?>
    </div>

    <script>
        CKEDITOR.replace('description');
    </script>
