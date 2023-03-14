<?php

require("rootPath.php");

require $rootPath . "model/ContactModel.php";
require $rootPath . "controller/ContactController.php";


include("view/_partials/adminPanel.php");

?>

<table class="table table-hover mails">
    <tbody>
    <?php
    foreach ($showAllMails

    as $row) {
    ?>
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
            <div class="" onclick="openModal()">Delete</div>
            <div id="myModal" class="modal">
                <div class="delete-mail container bg-white">
                    <div class="modal-header">
                        <h4 class="modal-title"><?php echo $row['mailSubject']; ?></h4>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this mail?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" onclick="closeModal()">Close</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><a
                                    href="/admin-mail.php?del=1&mailID=<?= $row["mailID"] ?>">Delete</a></button>
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
    function openModal() {
        document.getElementById("myModal").style.display = "block";
    }

    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }
</script>