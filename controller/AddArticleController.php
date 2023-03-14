<?php

if (isset($_POST['productAdd'])) {

    $title = $sanitized['title'];
    $author = $sanitized['author'];
    $description = $sanitized['description'];
    $paragraph = $sanitized['paragraph'];
    $timeUpdated = $sanitized['timeUpdated'];
    $saveDraft = $sanitized['saveDraft'];
    $newsTypeID = $sanitized['newsTypeID'];
    $photoID = $sanitized['photoID'];

    if (
        !empty($_POST['title']) || !empty($_POST['author']) || !empty($_POST['description']) ||
        !empty($_POST['paragraph']) || !empty($_POST['timeUpdated']) || !empty($_POST['saveDraft']) ||
        !empty($_POST['newsTypeID']) || !empty($_POST['photoID'])
    ) {


        try {
            $conn->beginTransaction();
            $addArticle = $conn->prepare($AddArticleModel->addArticle);
            $addArticle->bindParam(':title', $title, PDO::PARAM_STR);
            $addArticle->bindParam(':author', $author, PDO::PARAM_STR);
            $addArticle->bindParam(':description', $description, PDO::PARAM_STR);
            $addArticle->bindParam(':paragraph', $paragraph, PDO::PARAM_STR);
            $addArticle->bindParam(':timeUpdated', $timeUpdated, PDO::PARAM_STR);
            $addArticle->bindParam(':saveDraft', $saveDraft, PDO::PARAM_STR);
            $addArticle->bindParam(':newsTypeID', $newsTypeID, PDO::PARAM_INT);
            $addArticle->bindParam(':photoID', $photoID, PDO::PARAM_INT);

            $addArticleResult = $addArticle->execute();
            $conn->commit();
            header("Location:admin-profile");
        } catch (Exception $err) {
            echo $err;
            $errorTransaction = true;
            $conn->rollback();
        }
    }
}
