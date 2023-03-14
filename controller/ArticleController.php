<?php


$listOfNews = $conn->query($ArticleModel->newsList);

$newsOption = $conn->query($ArticleModel->newsType);
$imageOption = $conn->query($ArticleModel->photoType);

if (isset($_POST['save'])) {

    $title = $sanitized['title'];
    $author = $sanitized['author'];
    $description = $sanitized['description'];
    $paragraph = $sanitized['paragraph'];
    $newsTypeID = $sanitized['newsTypeID'];
    $photoID = $sanitized['photoID'];

    if (
        !empty($_POST['title']) || !empty($_POST['author']) ||
        !empty($_POST['description']) || !empty($_POST['paragraph']) ||
        !empty($_POST['newsTypeID']) || !empty($_POST['photoID'])
    ) {
        try {
            $conn->beginTransaction();
            $addArticle = $conn->prepare($ArticleModel->saveArticle);
            $addArticle->bindParam(':title', $title, PDO::PARAM_STR);
            $addArticle->bindParam(':author', $author, PDO::PARAM_STR);
            $addArticle->bindParam(':description', $description, PDO::PARAM_STR);
            $addArticle->bindParam(':paragraph', $paragraph, PDO::PARAM_STR);
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



if (isset($_POST['publish'])) {

    $title = $sanitized['title'];
    $author = $sanitized['author'];
    $description = $sanitized['description'];
    $paragraph = $sanitized['paragraph'];
    $newsTypeID = $sanitized['newsTypeID'];
    $photoID = $sanitized['photoID'];

    if (
        !empty($_POST['title']) || !empty($_POST['author']) ||
        !empty($_POST['description']) || !empty($_POST['paragraph']) ||
        !empty($_POST['newsTypeID']) || !empty($_POST['photoID'])
    ) {
        try {
            $conn->beginTransaction();
            $addArticle = $conn->prepare($ArticleModel->publishArticle);
            $addArticle->bindParam(':title', $title, PDO::PARAM_STR);
            $addArticle->bindParam(':author', $author, PDO::PARAM_STR);
            $addArticle->bindParam(':description', $description, PDO::PARAM_STR);
            $addArticle->bindParam(':paragraph', $paragraph, PDO::PARAM_STR);
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
