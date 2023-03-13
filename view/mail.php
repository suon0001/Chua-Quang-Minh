<?php

require("rootPath.php");

require $rootPath . "model/MailModel.php";
require $rootPath . "controller/MailController.php";


include("view/_partials/adminPanel.php");

?>

<?php
while ($row = $viewMessageResult->fetch(PDO::FETCH_ASSOC)) {
?>

    <input type="hidden" name="<?php echo $row['mailID'] ?>">
<div class="mail-view d-none d-md-block col-md-9 col-lg-7 bg-white">
    <div class="message-body">
        <div class="sender-details">

            <div class="details">
                <p class="msg-subject">
                    Weekly Update - Week 19 (May 8, 2017 - May 14, 2017)
                </p>
                <p class="sender-email">
                    <?php echo $row['firstName'] ?> <?php echo $row['lastName'] ?>
                    <br>
                    <a href="#"><?php echo $row['email'] ?></a>
                    &nbsp;<i class="mdi mdi-account-multiple-plus"></i>
                </p>
            </div>
            <hr>
        </div>
        <div class="message-content">
            <p><?php echo $row['message'] ?></p>
        </div>
    </div>
</div>
<?php } ?>