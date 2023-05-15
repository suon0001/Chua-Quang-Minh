<?php
if (isset($_GET["skip"])) {
    $skip = $_GET["skip"];
} else {
    $skip = 0;
}

if (isset($_GET["newsTypeID"])) {
    $newsTypeID = $_GET["newsTypeID"];
} else {
    $newsTypeID = null;
}

$firstPageBlogsQuery = "SELECT * FROM Event ";
$insertAllNews = "SELECT * FROM Event";
$pageCountQuery = "SELECT * FROM Event";
class EventModel
{
    public $insertAllEvents = "SELECT * FROM Event ORDER BY date_start";
    public $deleteEvent = "DELETE FROM Event WHERE date_start < CURRENT_DATE";
    public $newsType = "SELECT * FROM NewsType";

}
$EventModel = new EventModel();