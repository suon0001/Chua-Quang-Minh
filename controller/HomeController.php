<?php
$chuaResult = $conn->query($HomeModel->latestChua);
$worldResult = $conn->query($HomeModel->latestWorld);
$charityResult = $conn->query($HomeModel->latestCharity);