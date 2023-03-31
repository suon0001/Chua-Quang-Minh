<?php
class HomeModel
{
    public $latestChua = "SELECT * FROM News  WHERE newsTypeID = 1 AND saveDraft = 1 ORDER BY timeUpdated ASC LIMIT 3";
    public $latestWorld = "SELECT * FROM News  WHERE  newsTypeID = 2 AND saveDraft = 1 ORDER BY timeUpdated ASC LIMIT 3";
    public $latestCharity = "SELECT * FROM News  WHERE newsTypeID = 3 AND saveDraft = 1 ORDER BY timeUpdated ASC LIMIT 3";
}
$HomeModel = new HomeModel();