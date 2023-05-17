<?php
require("rootPath.php");

require $rootPath . "model/AdminModel.php";
require $rootPath . "controller/AdminController.php";

include("view/_partials/adminPanel.php");

?>

<div class="row">
    <div class="col-lg-4 mb-4">
        <!-- Billing card 1-->
        <div class="card h-100 border-start-lg border-start-primary">
            <div class="card-body">
                <div class="small text-muted">Visit</div>
                <?php
                while ($row = $visitResult->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <div class="h3"><?php echo $row['countVisit'] ?></div>

                    <?php
                } ?>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <!-- Billing card 2-->
        <div class="card h-100 border-start-lg border-start-secondary">
            <div class="card-body">
                <div class="small text-muted">News</div>
                <?php
                while ($row = $newsResult->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <div class="h3"><?php echo $row['COUNT(newsID)'] ?></div>

                    <?php
                } ?>
                <a class="text-arrow-icon small text-secondary" href="/admin-article">
                    Article list
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-arrow-right">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <!-- Billing card 3-->
        <div class="card h-100 border-start-lg border-start-success">
            <div class="card-body">
                <div class="small text-muted">Photo</div>
                <?php
                while ($row = $photoResult->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <div class="h3"><?php echo $row['COUNT(photoID)'] ?></div>

                    <?php
                } ?>
                <a class="text-arrow-icon small text-success" href="/admin-photo">
                    Photo list
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-arrow-right">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
