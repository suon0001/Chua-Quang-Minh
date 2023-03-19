<?php

require("rootPath.php");

require $rootPath . "model/ContactModel.php";
require $rootPath . "controller/ContactController.php";


include("view/_partials/adminPanel.php");

?>

<div class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<table class="table table-hover mails">
    <tbody>

    <form method="post" action="">
    <thead>
    <tr>
        <th scope="col">star</th>
        <th scope="col">Name</th>
        <th scope="col">Subject</th>
        <th scope="col">Time</th>
        <th scope="col">Delete</th>
    </tr>
    </thead>
    <?php
    foreach ($showAllMails

             as $row) {
        ?>
        <tr>
            <td class="mail-rateing">
                <i class="fa fa-star"></i>
            </td>
            <td>
                <a href="/mail?mailID=<?php echo $row['mailID']; ?>"> <?php echo $row['firstName']; ?>
                    <?php echo $row['lastName']; ?></a>

            </td>
            <td>
                <a href="##email-read.html"><p class="block text-truncate"> <?php echo $row['mailSubject']; ?></p>
                </a>
            </td>

            <td>
                <?php echo $row['timestamp']; ?>
            </td>
            <td>
                <div class="panel-group" id="accordion"
                     role="tablist" aria-multiselectable="true">
                    <div class="panel">
                        <div class="panel-heading tab-collapsed" role="tab"
                             id="headingOne">
                            <p>
                                <a
                                        data-toggle="collapse"
                                        data-parent="#accordion"
                                        href="#collapse<?php echo $row['mailID'] ?>"
                                        aria-expanded="true"
                                        aria-controls="collapse<?php echo $row['mailID'] ?>">
                                    <i class="fa-sharp fa-solid fa-trash"></i>

                                </a>
                            </p>
                        </div>
                        <div id="collapse<?php echo $row['mailID'] ?>"
                             class="panel-collapse collapse in" role="tabpanel"
                             aria-labelledby="headingOne" aria-expanded="true">
                            <div>
                                Are you sure you want to delete? <a
                                        href="/admin-mail.php?del=1&mailID=<?= $row["mailID"] ?>">Delete</a></a>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        </form>
        <?php
    } ?>

    </tbody>
</table>

<script>
    $(function () {
        $('.panel-heading').click(function (e) {
            $('.panel-heading').removeClass('tab-collapsed');
            var collapsCrnt = $(this).find('.collapse-controle').attr('aria-expanded');
            if (collapsCrnt != 'true') {
                $(this).addClass('tab-collapsed');
            }
        });
    })
</script>