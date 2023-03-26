<?php

class AdminModel
{
  public $countMembers = "SELECT COUNT(memberID) FROM Donation";
  public $countNews = "SELECT COUNT(newsID) FROM News";
  public $countPhoto = "SELECT COUNT(photoID) FROM Photo";
  public $latestDonation = "SELECT donationID, timestamp , amount, charity FROM Amount ORDER BY timestamp DESC LIMIT 10;";

}
$AdminModel = new AdminModel();