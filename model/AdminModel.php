<?php

class AdminModel
{
  public $countMembers = "SELECT COUNT(memberID) FROM Donation";
  public $countNews = "SELECT COUNT(newsID) FROM News";
  public $countPhoto = "SELECT COUNT(photoID) FROM Photo";
  public $latestDonation = "SELECT donationID, latestDonation, amount, project FROM Amount ORDER BY latestDonation DESC LIMIT 10;";

}
$AdminModel = new AdminModel();