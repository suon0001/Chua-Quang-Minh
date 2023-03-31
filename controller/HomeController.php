<?php
$chuaResult = $conn->query($HomeModel->latestChua);
$worldResult = $conn->query($HomeModel->latestWorld);
$charityResult = $conn->query($HomeModel->latestCharity);
$chuaOneResult = $conn->query($HomeModel->latestChuaOne);
$worldOneResult = $conn->query($HomeModel->latestWorldOne);
$charityOneResult = $conn->query($HomeModel->latestCharityOne);