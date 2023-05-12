<?php
require("rootPath.php");

require $rootPath . "model/DetailsModel.php";
require $rootPath . "controller/DetailsController.php";


?>
<div class="container" style="justify-content: center">
    <?php

    while ($row = $eventResult->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <img class="text-center" src="assets/event/<?php echo $row['pdf_file'] ?>" alt="">
    <?php } ?>
</div>