
<?php

if (isset($_GET["limit"])) {
    $limit = $_GET["limit"];
} else {
    $limit = 12;
}

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
$firstPageBlogsQuery = "SELECT * FROM NewsOrderbyType LIMIT $limit";
$insertAllNews = "SELECT * FROM NewsOrderbyType";
$pageCountQuery = "SELECT * FROM NewsOrderbyType";

class NewsModel
{
    public $newsType = "SELECT * FROM newsType";
}
$NewsModel = new NewsModel();
