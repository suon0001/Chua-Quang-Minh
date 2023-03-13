<?php

require("rootPath.php");

require $rootPath . "model/MailModel.php";
require $rootPath . "controller/MailController.php";


include("view/_partials/adminPanel.php");

?>
<div class="mail-view d-none d-md-block col-md-9 col-lg-7 bg-white">
    <div class="message-body">
        <div class="sender-details">

            <div class="details">
                <p class="msg-subject">
                    Weekly Update - Week 19 (May 8, 2017 - May 14, 2017)
                </p>
                <p class="sender-email">
                    Sarah Graves
                    <a href="#">itsmesarah268@gmail.com</a>
                    &nbsp;<i class="mdi mdi-account-multiple-plus"></i>
                </p>
            </div>
            <hr>
        </div>
        <div class="message-content">
            <p>Hi Emily,</p>
            <p>This week has been a great week and the team is right on schedule with the set deadline. The team has
                made great progress and achievements this week. At the current rate we will be able to deliver the
                product right on time and meet the quality that is expected of us. Attached are the seminar report held
                this week by our team and the final product design that needs your approval at the earliest.</p>
            <p>For the coming week the highest priority is given to the development for <a
                        href="http://www.urbanui.com/" target="_blank">http://www.urbanui.com/</a> once the design is
                approved and necessary improvements are made.</p>
            <p><br><br>Regards,<br>Sarah Graves</p>
        </div>
    </div>
</div>
