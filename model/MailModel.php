<?php
$mailID= $_GET['$mailID'];
$viewMessage = "SELECT * FROM Mail m WHERE m.mailID = $mailID";
class MailModel
{

}
$MailModel = new MailModel();