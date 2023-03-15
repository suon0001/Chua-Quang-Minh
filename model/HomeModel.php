<?php
class HomeModel
{
    public $latestChua = "SELECT * FROM news  WHERE newsTypeID = 1 AND saveDraft = 1 ORDER BY timeUpdated ASC LIMIT 4";
    public $latestWorld = "SELECT * FROM news  WHERE  newsTypeID = 2 AND saveDraft = 1 ORDER BY timeUpdated ASC LIMIT 4";
    public $latestCharity = "SELECT * FROM news  WHERE newsTypeID = 3 AND saveDraft = 1 ORDER BY timeUpdated ASC LIMIT 4";
}
$HomeModel = new HomeModel();