<?php
$memberResult = $conn->query($AdminModel->countMembers);
$newsResult = $conn->query($AdminModel->countNews);
$photoResult = $conn->query($AdminModel->countPhoto);
$amountList = $conn->query($AdminModel->latestDonation);
