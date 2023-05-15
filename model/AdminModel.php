<?php

class AdminModel
{
  public $countVisit = "SELECT * FROM Visit limit 1";
  public $countNews = "SELECT COUNT(newsID) FROM News";
  public $countPhoto = "SELECT COUNT(photoID) FROM Photo";
  public $latestDonation = "SELECT donationID, timestamp , amount, charity FROM Amount ORDER BY timestamp DESC LIMIT 10;";

}
$AdminModel = new AdminModel();