
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
$firstPageBlogsQuery = "SELECT * FROM NewsOrderbyType ";
$insertAllNews = "SELECT * FROM NewsOrderbyType";
$pageCountQuery = "SELECT * FROM NewsOrderbyType";

class NewsModel
{
    public $newsType = "SELECT * FROM NewsType";
}
$NewsModel = new NewsModel();
