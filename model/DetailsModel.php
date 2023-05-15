<?php
$eventID = $_GET['eventID'];
$getDetails = "SELECT * FROM Event WHERE eventID = $eventID";
class DetailsModel
{

}

$DetailsModel = new DetailsModel();
