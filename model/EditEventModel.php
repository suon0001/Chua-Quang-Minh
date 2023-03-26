<?php
$eventID = $_GET['eventID'];
$getEvent = "SELECT * FROM Event WHERE eventID = eventID AND  eventID = $eventID";
class EditEventModel
{
    public $editEvent = " UPDATE Event SET `eventName` = :eventName, `host` = :host, `address` = :address, `description` = :description, 
                            `start` = :start, `end` = :end, `date` = :date
                            WHERE Event.`eventID` = :eventID";
}

$EditEventModel = new EditEventModel();