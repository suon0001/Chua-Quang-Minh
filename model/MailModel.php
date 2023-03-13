<?php
$mailID = $_GET['mailID'];
$viewMessage = "SELECT * FROM Mail WHERE mailID = $mailID";

class MailModel
{

}
$MailModel = new MailModel();