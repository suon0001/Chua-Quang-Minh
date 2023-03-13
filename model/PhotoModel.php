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

$firstPageQuery = "SELECT * FROM photo LIMIT $limit";
$currentPagePhotoQuery = "SELECT * FROM photo ORDER BY photoID ASC";
$pageCountQuery = "SELECT * FROM photo";


class PhotoModel
{
}
$PhotoModel = new PhotoModel();