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
        <th scope="col">#</th>
        <th scope="col">star</th>
        <th scope="col">Name</th>
        <th scope="col">Subject</th>
        <th scope="col">Time</th>
        <th scope="col">Delete</th>
    </tr>
    </thead>
    <tr>
        <td class="mail-select">
            <label class="cr-styled">
                <input type="checkbox"><i class="fa"></i>
            </label>
        </td>
        <td class="mail-rateing">
            <i class="fa fa-star"></i>
        </td>
        <td>
            <a href="/mail?mailID=<?php echo $row['mailID']; ?>"> <?php echo $row['firstName']; ?><?php echo $row['lastName']; ?></a>

        </td>
        <td>
            <a href="##email-read.html"><p class="block text-truncate"> <?php echo $row['mailSubject']; ?></p>
            </a>
        </td>

        <td>
            <?php echo $row['timestamp']; ?>
        </td>
        <td>
            <a href="/admin-mail.php?del=1&mailID=<?= $row["mailID"] ?>">Delete</a>
        </td>
    </tr>
    </form>
    <?php
    } ?>

    </tbody>
</table>
