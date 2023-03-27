<?php
require("rootPath.php");

require $rootPath . "model/AdminEventModel.php";
require $rootPath . "controller/AdminEventController.php";

include("view/_partials/adminPanel.php");

?>


<h3>Event</h3>
<hr>
<div class="row">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="eventName">Event</label>
            <input type="text" name="eventName" class="form-control" id="eventName" placeholder="Event">
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-9">
                <div class="form-group">
                    <label for="host">Host</label>
                    <input type="text" name="host" class="form-control" id="host" placeholder="Host">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input class="form-control" name="address" id="address">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="content" rows="20"></textarea>
                </div>
            </div>
            <div class="col-xs-5 col-md-3">
                <div class="form-group">
                    <label for="start">Start time</label>
                    <input type="time" value="00:00" name="start" class="form-control">
                    <label for="end">End time</label>
                    <input type="time" value="23:59" name="end" class="form-control">
                    <label for="date">Date</label>
                    <input type="date" value="0000-00-00" name="date" class="form-control">
                    <div class="form-group">
                        <button type="submit" name="create" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </div>

    </form>
</div>


<script>
    CKEDITOR.replace('content');
</script>
