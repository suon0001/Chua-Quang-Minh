<?php
$articleResult = $conn->query($getArticle);

$allArcticles = $conn->query($allArticles);
$hitCounterResult = $conn->query($hitCounter);
$CounterResult = $conn->query($treding);
$newsOption = $conn->query($ArticleModel->newsType);

//edit article

if (isset($_POST['editSave'])) {
    $eventName= $sanitized['eventName'];
    $host = $sanitized['host'];
    $address = $sanitized['address'];
    $description = trim($_POST['description']);
    $start = $sanitized['start'];
    $end = $sanitized['end'];
    $date = $sanitized['date'];
    $eventID = $sanitized['eventID'];


    if (
        !empty($_POST['eventName']) || !empty($_POST['host']) || !empty($_POST['address']) ||
        !empty($_POST['description']) || !empty($_POST['start']) || !empty($_POST['end']) || !empty($_POST['date'])
    ) {
        try {
            $conn->beginTransaction();
            $editEvent = $conn->prepare($EditEventModel->editEvent);
            $editEvent->bindParam(':eventID', $eventID, PDO::PARAM_INT);
            $editEvent->bindParam(':eventName', $eventName, PDO::PARAM_STR);
            $editEvent->bindParam(':host', $host, PDO::PARAM_STR);
            $editEvent->bindParam(':address', $address, PDO::PARAM_STR);
            $editEvent->bindParam(':start', $start, PDO::PARAM_STR);
            $editEvent->bindParam(':end', $end, PDO::PARAM_STR);
            $editEvent->bindParam(':end', $end, PDO::PARAM_STR);
            $editEvent->bindParam(':date', $end, PDO::PARAM_STR);

            $editEventResult = $editEvent->execute();
            $conn->commit();
            header("Location:admin-event");
        } catch (Exception $err) {
            $errorTransaction = true;
            $conn->rollback();
        }
    }
}

if (isset($_POST['editPublish'])) {
    $title = $sanitized['title'];
    $author = $sanitized['author'];
    $description = $sanitized['description'];
    $paragraph = trim($_POST['paragraph']);
    $banner = $_FILES["banner"]["name"];
    $newsID = $sanitized['newsID'];


    if (
        !empty($_POST['title']) || !empty($_POST['author']) || !empty($_POST['description']) ||
        !empty($_POST['paragraph']) || !empty($_POST['timeUpdated']) || !empty($_POST['saveDraft']) || !empty($_POST['banner'])
    ) {
        $file = $_FILES["banner"]["name"];
        $filename = strtolower($file);
        if ($_FILES['banner']['name']) {
            move_uploaded_file(
                $_FILES['banner']['tmp_name'],
                "assets/banner/" . $filename
            );
        }

        try {
            $conn->beginTransaction();
            $editArticle = $conn->prepare($ArticleModel->editPublish);
            $editArticle->bindParam(':newsID', $newsID, PDO::PARAM_INT);
            $editArticle->bindParam(':title', $title, PDO::PARAM_STR);
            $editArticle->bindParam(':author', $author, PDO::PARAM_STR);
            $editArticle->bindParam(':description', $description, PDO::PARAM_STR);
            $editArticle->bindParam(':paragraph', $paragraph, PDO::PARAM_STR);
            $editArticle->bindParam(':banner', $banner, PDO::PARAM_STR);

            $editArticleResult = $editArticle->execute();
            $conn->commit();
            header("Location:admin-article");
        } catch (Exception $err) {
            $errorTransaction = true;
            $conn->rollback();
        }
    }
}


