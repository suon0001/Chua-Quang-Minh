<?php

class HomeModel
{
    public $latestChua = "SELECT * FROM News  WHERE newsTypeID = 1 AND saveDraft = 1 ORDER BY timeUpdated ASC LIMIT 3 OFFSET 1";
    public $latestWorld = "SELECT * FROM News  WHERE  newsTypeID = 2 AND saveDraft = 1 ORDER BY timeUpdated ASC LIMIT 3 OFFSET 1";
    public $latestCharity = "SELECT * FROM News  WHERE newsTypeID = 3 AND saveDraft = 1 ORDER BY timeUpdated ASC LIMIT 3 OFFSET 1";
    public $latestChuaOne = "SELECT * FROM NewsOrderbyType  WHERE newsTypeID = 1 AND saveDraft = 1 ORDER BY timeUpdated ASC LIMIT 1";
    public $latestWorldOne = "SELECT * FROM NewsOrderbyType  WHERE  newsTypeID = 2 AND saveDraft = 1 ORDER BY timeUpdated ASC LIMIT 1";
    public $latestCharityOne = "SELECT * FROM NewsOrderbyType  WHERE newsTypeID = 3 AND saveDraft = 1 ORDER BY timeUpdated ASC LIMIT 1";
    public $hitVisit = "UPDATE Visit SET countVisit = COALESCE(countVisit, 0) + 1 WHERE 1 = 1";
}

$HomeModel = new HomeModel();