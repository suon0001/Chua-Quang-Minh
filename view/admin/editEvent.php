<?php
require("rootPath.php");

require $rootPath . "model/EditEventModel.php";
require $rootPath . "controller/EditEventController.php";

include("view/_partials/adminPanel.php");

?>


<div class="container-fluid">
    <h3>Event</h3>
    <hr>
    <div class="row">
        <?php

        while ($row = $allEvent->fetch(PDO::FETCH_ASSOC)) { ?>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="newsID" value="<?php echo $row['eventID']; ?>">
            <div class="form-group">
                <label for="title">Event Name</label>
                <input type="text" id="textAreaExample1" name="eventName" class="form-control"
                       value="<?php echo $row['eventName']; ?>" required>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-9">
                    <div class="form-group">
                        <label for="title">Host</label>
                        <input type="text" id="textAreaExample1" name="host" class="form-control"
                               value="<?php echo $row['host']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Address</label>
                        <input type="text" id="textAreaExample1" name="address" class="form-control" rows="4"
                               value="<?php echo $row['address']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Description</label>
                        <textarea class="form-control" name="description" id="content"
                                  rows="20"><?php echo $row['description']; ?></textarea>
                    </div>
                </div>
                <div class="col-xs-5 col-md-3">
                    <div class="form-group">
                        <label for="category_id">Category</label>


                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="newsTypeID" value="<?php echo $row["start"]; ?>">
                                    <?php echo $row['end'] ?>
                                </label>
                            </div>

                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" name="banner" id="image" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="editSave" class="btn btn-primary">Save Draft</button>
                            <button type="submit" name="editPublish" class="btn btn-primary">Publish</button>
                        </div>
                    </div>
                </div>
                <?php } ?>
        </form>
    </div>
</div>

<script>
    CKEDITOR.replace('content');
</script>
