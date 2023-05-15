<?php
$visitResult = $conn->query($AdminModel->countVisit);
$newsResult = $conn->query($AdminModel->countNews);
$photoResult = $conn->query($AdminModel->countPhoto);
$amountList = $conn->query($AdminModel->latestDonation);
