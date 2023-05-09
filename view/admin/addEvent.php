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
                    <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                </div>
                <div class="form-group">
                    <label for="address">File</label>
                    <input type="file" name="pdf_file" class="form-control" id="pdf_file" placeholder="Address">
                </div>
            </div>
            <div class="col-xs-5 col-md-3">
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <?php
                    while ($row = $newsOption->fetch(PDO::FETCH_ASSOC)) { ?>
                        <div class="radio">
                            <label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="newsTypeID" id="inlineRadio1"
                                           value="<?php echo $row["newsTypeID"]; ?>">
                                    <label class="form-check-label"
                                           for="inlineRadio1"><?php echo $row['typeName'] ?></label>
                                </div>
                            </label>
                        </div>
                        <?php
                    }
                    ?>
                    <label for="start_time">Start time</label>
                    <input type="time" value="00:00" name="start_time" class="form-control">
                    <label for="date_start">Start date</label>
                    <input type="date" value="0000-00-00" name="date_start" class="form-control">
                    <label for="date_end">End date</label>
                    <input type="date" value="0000-00-00" name="date_end" class="form-control">
                    <div class="form-group">
                        <button type="submit" name="create" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </div>

    </form>
</div>

