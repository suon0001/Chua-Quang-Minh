<?php
$articleResult = $conn->query($getArticle);

$allArcticles = $conn->query($allArticles);
$hitCounterResult = $conn->query($hitCounter);
$CounterResult = $conn->query($treding);
$newsOption = $conn->query($ArticleModel->newsType);

//edit article

if (isset($_POST['editSave'])) {
    $title = $sanitized['title'];
    $author = $sanitized['author'];
    $description = $sanitized['description'];
    $paragraph = trim($_POST['paragraph']);
    $timeUpdated = $sanitized['timeUpdated'];
    $newsID = $sanitized['newsID'];


    if (
        !empty($_POST['title']) || !empty($_POST['author']) || !empty($_POST['description']) ||
        !empty($_POST['paragraph']) || !empty($_POST['timeUpdated']) || !empty($_POST['saveDraft'])
    ) {
        try {
            $conn->beginTransaction();
            $addArticle = $conn->prepare($ArticleModel->editSave);
            $addArticle->bindParam(':newsID', $newsID, PDO::PARAM_INT);
            $addArticle->bindParam(':title', $title, PDO::PARAM_STR);
            $addArticle->bindParam(':author', $author, PDO::PARAM_STR);
            $addArticle->bindParam(':description', $description, PDO::PARAM_STR);
            $addArticle->bindParam(':paragraph', $paragraph, PDO::PARAM_STR);
            $addArticle->bindParam(':timeUpdated', $timeUpdated, PDO::PARAM_STR);
            $addArticle->bindParam(':newsTypeID', $newsTypeID, PDO::PARAM_INT);


            $addArticleResult = $addArticle->execute();
            $conn->commit();
            ?>

            <script>
                window.location.href = "/admin-article";
            </script>

            <?php
        } catch (Exception $err) {
            echo $err;
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
    $timeUpdated = $sanitized['timeUpdated'];
    $newsID = $sanitized['newsID'];


    if (
        !empty($_POST['title']) || !empty($_POST['author']) || !empty($_POST['description']) ||
        !empty($_POST['paragraph']) || !empty($_POST['timeUpdated']) || !empty($_POST['saveDraft'])
    ) {
        try {
            $conn->beginTransaction();
            $addArticle = $conn->prepare($ArticleModel->editPublish);
            $addArticle->bindParam(':newsID', $newsID, PDO::PARAM_INT);
            $addArticle->bindParam(':title', $title, PDO::PARAM_STR);
            $addArticle->bindParam(':author', $author, PDO::PARAM_STR);
            $addArticle->bindParam(':description', $description, PDO::PARAM_STR);
            $addArticle->bindParam(':paragraph', $paragraph, PDO::PARAM_STR);
            $addArticle->bindParam(':timeUpdated', $timeUpdated, PDO::PARAM_STR);
            $addArticle->bindParam(':newsTypeID', $newsTypeID, PDO::PARAM_INT);

            $addArticleResult = $addArticle->execute();
            $conn->commit();
            ?>

            <script>
                window.location.href = "/admin-article";
            </script>

            <?php
        } catch (Exception $err) {
            echo $err;
            $errorTransaction = true;
            $conn->rollback();
        }
    }
}


