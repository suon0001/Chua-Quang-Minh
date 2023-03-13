<?php
class HomeModel
{
    public $latestChua = "SELECT * FROM news n, photo p WHERE n.photoID = p.photoID AND n.newsTypeID = 1 ORDER BY timeUpdated ASC LIMIT 4";
    public $latestWorld = "SELECT * FROM news n, photo p WHERE n.photoID = p.photoID AND n.newsTypeID = 2 ORDER BY timeUpdated ASC LIMIT 4";
    public $latestCharity = "SELECT * FROM news n, photo p WHERE n.photoID = p.photoID AND n.newsTypeID = 3 ORDER BY timeUpdated ASC LIMIT 4";
}
$HomeModel = new HomeModel();