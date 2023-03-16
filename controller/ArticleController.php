<?php
$articleResult = $conn->query($getArticle);

$allActicles = $conn->query($allArticles);

$newsOption = $conn->query($ArticleModel->newsType);

//edit article

if (isset($_POST['editSave'])) {
    $title = $sanitized['title'];
    $author = $sanitized['author'];
    $description = $sanitized['description'];
    $paragraph = trim($_POST['paragraph']);


    $banner = $_FILES["banner"]["name"];
    $newsTypeID = $sanitized['newsTypeID'];
    $newsID = $sanitized['newsID'];


    if (
        !empty($_POST['title']) || !empty($_POST['author']) || !empty($_POST['description']) ||
        !empty($_POST['paragraph']) || !empty($_POST['timeUpdated']) || !empty($_POST['saveDraft']) || !empty($_POST['banner']) || !empty($_POST['newsTypeID'])
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
            $editArticle = $conn->prepare($ArticleModel->editSave);
            $editArticle->bindParam(':newsID', $newsID, PDO::PARAM_INT);
            $editArticle->bindParam(':title', $title, PDO::PARAM_STR);
            $editArticle->bindParam(':author', $author, PDO::PARAM_STR);
            $editArticle->bindParam(':description', $description, PDO::PARAM_STR);
            $editArticle->bindParam(':paragraph', $paragraph, PDO::PARAM_STR);
            $editArticle->bindParam(':banner', $banner, PDO::PARAM_STR);
            $editArticle->bindParam(':newsTypeID', $newsTypeID, PDO::PARAM_INT);

            $editArticleResult = $editArticle->execute();
            $conn->commit();
            header("Location:admin-article");
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
    $newsTypeID = $sanitized['newsTypeID'];
    $newsID = $sanitized['newsID'];


    if (
        !empty($_POST['title']) || !empty($_POST['author']) || !empty($_POST['description']) ||
        !empty($_POST['paragraph']) || !empty($_POST['timeUpdated']) || !empty($_POST['saveDraft']) || !empty($_POST['banner']) || !empty($_POST['newsTypeID'])
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
            $editArticle->bindParam(':newsTypeID', $newsTypeID, PDO::PARAM_INT);

            $editArticleResult = $editArticle->execute();
            $conn->commit();
            header("Location:admin-article");
        } catch (Exception $err) {
            $errorTransaction = true;
            $conn->rollback();
        }
    }
}