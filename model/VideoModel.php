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

$firstPageQuery = "SELECT * FROM Video ORDER BY videoID DESC LIMIT $limit";
$currentPageVideoQuery = "SELECT * FROM Video ORDER BY videoID DESC";
$pageCountQuery = "SELECT * FROM Video ORDER BY videoID DESC";


class VideoModel
{

    public $deleteVideo = "DELETE FROM Video WHERE videoID = :videoID";
    
    public $adminVideos = "SELECT * FROM Video ORDER BY videoID DESC";
}
$VideoModell = new VideoModel();