<?php
class EventModel
{
    public $insertAllEvents = "SELECT * FROM Event ORDER BY date";
    public $deleteEvent = "DELETE FROM Event WHERE date < CURRENT_DATE";

}
$EventModel = new EventModel();