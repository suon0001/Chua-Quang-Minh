<?php
if (isset($_GET["limit"])) {
    $limit = $_GET["limit"];
} else {
    $limit = 16;
}

if (isset($_GET["skip"])) {
    $skip = $_GET["skip"];
} else {
    $skip = 0;
}

$firstPageQuery = "SELECT * FROM Photo LIMIT $limit";
$currentPagePhotoQuery = "SELECT * FROM Photo ORDER BY photoID ASC";
$pageCountQuery = "SELECT * FROM Photo";


class PhotoModel
{
    public $insertPhoto = "INSERT INTO Photo (`alt`, `photo`, `month`, `year`) 
                VALUES (:alt, :photo, MONTH(CURRENT_TIMESTAMP), YEAR(CURRENT_TIMESTAMP))";
}
$PhotoModel = new PhotoModel();