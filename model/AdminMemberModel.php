<?php

$memberID = $_GET['memberID'];
$donationList = "SELECT * FROM Donation d, Amount a WHERE d.memberID = a.memberID AND a.memberID = $memberID";
$member = "SELECT * FROM Donation WHERE memberID = $memberID";

class AdminMemberModel
{

}

$AdminMemberModel = new AdminMemberModel();