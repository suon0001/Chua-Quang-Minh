<?php

require("rootPath.php");

require $rootPath . "model/ContactModel.php";
require $rootPath . "controller/ContactController.php";


include("view/_partials/adminPanel.php");

?>

<table class="table table-hover mails">
    <tbody>
    <?php
    foreach ($showAllMails as $row) {
    ?>
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
            <a href="/mail?mailID=<?php echo $row['mailID']; ?>"> <?php echo $row['firstName']; ?>  <?php echo $row['lastName']; ?></a>
            <p> <?php echo $row['mailSubject']; ?></p>
        </td>
        <td>
            <a href="##email-read.html"><i class="fa fa-circle text-info m-r-15"></i> <?php echo $row['message']; ?></a>
        </td>

        <td class="text-right">
            07:23 AM
        </td>
        <td class="text-right">
            delete
        </td>
    </tr>
        <?php
    } ?>




    </tbody>
</table>

<style>
    .text-danger {
        color: #cb2a2a;
    }

    .text-muted {
        color: #98a6ad;
    }

    .text-primary {
        color: #3bc0c3;
    }

    .text-warning {
        color: #ebc142;
    }

    .text-success {
        color: #33b86c;
    }

    .text-info {
        color: #1ca8dd;
    }

    .text-inverse {
        color: #14082d;
    }

    .text-pink {
        color: #F13C6E;
    }
    .text-purple {
        color: #615ca8;
    }
    /* text-color */
    .text-dark {
        color: #797979;
    }


    .list-group-item.active, .list-group-item.active:hover, .list-group-item.active:focus {
        background-color: #ddd;
        border-color: #ddd;
        color: #444;
        z-index: 2;
    }

    .list-group-item,.list-group-item:first-child ,.list-group-item:last-child  {
        border-radius: 0px;
        padding: 12px 20px;
    }

    .list-group-item-heading {
        font-weight: 300;
    }
    .list-group-item.active>.badge, .nav-pills>.active>a>.badge {
        color: #3bc0c3;
    }
    .list-group-item.active .list-group-item-text, .list-group-item.active:focus .list-group-item-text, .list-group-item.active:hover .list-group-item-text {
        color: #3bc0c3;
    }
    .m-t-40 {
        margin-top: 40px !important;
    }
    .panel{
        padding: 20px 30px;
        border: none;
        border-top: 1px solid #ddd;
        margin-bottom: 20px;
        box-shadow: none;
    }
    .panel .panel-body{
        padding: 0px;
        padding-top: 20px;
    }
    .panel .panel-body p{
        margin: 0px;
    }
    .panel .panel-body p+p {
        margin-top: 15px;
    }
    .panel-default > .panel-heading {
        background-color: #FFFFFF;
        border-color: #DDDDDD;
        color: #797979;
    }
    .panel-heading {
        border-color:#eff2f7 ;
        font-size: 16px;
        padding: 0;
        padding-bottom: 15px;
    }
    .panel-title {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 0;
        margin-top: 0;
    }
    .panel-footer {
        margin: 0px -30px -30px;
        background: #eee;
        border-top: 0px;
    }
    .panel-group .panel .panel-heading {
        padding-bottom: 0;
        border-bottom: 0;
    }
    .panel-group .panel {
        margin-bottom: 0;
        border-radius: 0;
    }
    .m-t-20 {
        margin-top: 20px;
    }
</style>
