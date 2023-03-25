<?php
class EventModel
{
    public $insertAllEvents = "SELECT * FROM Event ORDER BY date";
    public $deleteEvent = "DELETE FROM event WHERE date < CURRENT_DATE";

}
$EventModel = new EventModel();