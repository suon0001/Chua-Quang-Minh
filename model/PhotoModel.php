<?php
if (isset($_GET["limit"])) {
    $limit = $_GET["limit"];
} else {
    $limit = 48;
}

if (isset($_GET["skip"])) {
    $skip = $_GET["skip"];
} else {
    $skip = 0;
}

$firstPageQuery = "SELECT * FROM Photo ORDER BY photoID DESC LIMIT $limit";
$currentPagePhotoQuery = "SELECT * FROM Photo ORDER BY photoID DESC";
$pageCountQuery = "SELECT * FROM Photo ORDER BY photoID DESC";


class PhotoModel
{
    public $insertPhoto = "INSERT INTO Photo (`alt`, `photo`, `month`, `year`) 
                VALUES (:alt, :photo, MONTH(CURRENT_TIMESTAMP), YEAR(CURRENT_TIMESTAMP))";

    public $deletePhoto = "DELETE FROM Photo WHERE photoID = :photoID";
    
    public $adminPhotos = "SELECT * FROM Photo ORDER BY photoID DESC";
}
$PhotoModel = new PhotoModel();