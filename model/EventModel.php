<?php
class EventModel
{
    public $insertAllEvents = "SELECT * FROM Event ORDER BY date";

}
$EventModel = new EventModel();