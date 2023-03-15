<?php

$listOfNews = $conn->query($AdminArticleModel->newsList);
$newsOption = $conn->query($AdminArticleModel->newsType);


//save article
if (isset($_POST['save'])) {

    $title = $sanitized['title'];
    $author = $sanitized['author'];
    $description = $sanitized['description'];
    $paragraph = $sanitized['paragraph'];
    $banner = $_FILES["banner"]["name"];
    $newsTypeID = $sanitized['newsTypeID'];

    if (
        !empty($_POST['title']) || !empty($_POST['author']) ||
        !empty($_POST['description']) || !empty($_POST['paragraph']) ||
        !empty($_POST['banner']) || !empty($_POST['newsTypeID'])
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
            $addArticle = $conn->prepare($AdminArticleModel->saveArticle);
            $addArticle->bindParam(':title', $title, PDO::PARAM_STR);
            $addArticle->bindParam(':author', $author, PDO::PARAM_STR);
            $addArticle->bindParam(':description', $description, PDO::PARAM_STR);
            $addArticle->bindParam(':paragraph', $paragraph, PDO::PARAM_STR);
            $addArticle->bindParam(':banner', $banner, PDO::PARAM_STR);
            $addArticle->bindParam(':newsTypeID', $newsTypeID, PDO::PARAM_INT);

            $addArticleResult = $addArticle->execute();
            $conn->commit();
            header("Location:admin-article");
        } catch (Exception $err) {
            echo $err;
            $errorTransaction = true;
            $conn->rollback();
        }
    }
}

//publish article
if (isset($_POST['publish'])) {

    $title = $sanitized['title'];
    $author = $sanitized['author'];
    $description = $sanitized['description'];
    $paragraph = $sanitized['paragraph'];
    $banner = $_FILES["banner"]["name"];
    $newsTypeID = $sanitized['newsTypeID'];

    if (
        !empty($_POST['title']) || !empty($_POST['author']) ||
        !empty($_POST['description']) || !empty($_POST['paragraph']) ||
        !empty($_POST['banner']) || !empty($_POST['newsTypeID'])
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
            $addArticle = $conn->prepare($AdminArticleModel->publishArticle);
            $addArticle->bindParam(':title', $title, PDO::PARAM_STR);
            $addArticle->bindParam(':author', $author, PDO::PARAM_STR);
            $addArticle->bindParam(':description', $description, PDO::PARAM_STR);
            $addArticle->bindParam(':paragraph', $paragraph, PDO::PARAM_STR);
            $addArticle->bindParam(':banner', $banner, PDO::PARAM_STR);
            $addArticle->bindParam(':newsTypeID', $newsTypeID, PDO::PARAM_INT);

            $addArticleResult = $addArticle->execute();
            $conn->commit();
            header("Location:admin-article");
        } catch (Exception $err) {
            echo $err;
            $errorTransaction = true;
            $conn->rollback();
        }
    }
}


//delete article
if (isset($_REQUEST['del'])) {
    $setArticle = $_REQUEST['newsID'];
    $handle = $conn->prepare($AdminArticleModel->deleteArticle);
    $handle->execute(array(":newsID" => $setArticle));
    header("Location:admin-article");
}