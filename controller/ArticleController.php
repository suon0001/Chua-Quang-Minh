<?php
$articleResult = $conn->query($getArticle);

$allArcticles = $conn->query($allArticles);
$hitCounterResult = $conn->query($hitCounter);
$CounterResult = $conn->query($treding);
$newsOption = $conn->query($ArticleModel->newsType);

//edit article

if (isset($_POST['editSave'])) {

}

if (isset($_POST['editSave'])) {
    $newsID = $sanitized['newsID'];
    $title = $sanitized['title'];
    $author = $sanitized['author'];
    $description = $sanitized['description'];
    $paragraph = $sanitized['paragraph'];
    $newsTypeID = $sanitized['newsTypeID'];

    if (
        !empty($_POST['title']) || !empty($_POST['author']) || !empty($_POST['description']) ||
        !empty($_POST['paragraph']) || !empty($_POST['timeUpdated']) || !empty($_POST['saveDraft']) || !empty($_POST['newsTypeID'])
    ) {

        try {
            $conn->beginTransaction();
            $editArticle = $conn->prepare($ArticleModel->editSave);
            $editArticle->bindParam(':newsID', $newsID, PDO::PARAM_INT);
            $editArticle->bindParam(':title', $title, PDO::PARAM_STR);
            $editArticle->bindParam(':author', $author, PDO::PARAM_STR);
            $editArticle->bindParam(':description', $description, PDO::PARAM_STR);
            $editArticle->bindParam(':paragraph', $paragraph, PDO::PARAM_STR);
            $editArticle->bindParam(':timeUpdated', $timeUpdated, PDO::PARAM_STR);
            $editArticle->bindParam(':saveDraft', $saveDraft, PDO::PARAM_STR);
            $editArticle->bindParam(':newsTypeID', $newsTypeID, PDO::PARAM_INT);
            $addArticleResult = $editArticle->execute();
            $conn->commit();

            ?>

            <script>
                window.location.href = "/admin-article";
            </script>

            <?php
        } catch (Exception $err) {
            $errorTransaction = true;
            $conn->rollback();
        }
    }
}


if (isset($_POST['editPublish'])) {
    $newsID = $sanitized['newsID'];
    $title = $sanitized['title'];
    $author = $sanitized['author'];
    $description = $sanitized['description'];
    $paragraph = $sanitized['paragraph'];
    $newsTypeID = $sanitized['newsTypeID'];

    if (
        !empty($_POST['title']) || !empty($_POST['author']) || !empty($_POST['description']) ||
        !empty($_POST['paragraph']) || !empty($_POST['timeUpdated']) || !empty($_POST['saveDraft']) || !empty($_POST['newsTypeID'])
    ) {

        try {
            $conn->beginTransaction();
            $editArticle = $conn->prepare($ArticleModel->editPublish);
            $editArticle->bindParam(':newsID', $newsID, PDO::PARAM_INT);
            $editArticle->bindParam(':title', $title, PDO::PARAM_STR);
            $editArticle->bindParam(':author', $author, PDO::PARAM_STR);
            $editArticle->bindParam(':description', $description, PDO::PARAM_STR);
            $editArticle->bindParam(':paragraph', $paragraph, PDO::PARAM_STR);
            $editArticle->bindParam(':timeUpdated', $timeUpdated, PDO::PARAM_STR);
            $editArticle->bindParam(':saveDraft', $saveDraft, PDO::PARAM_STR);
            $editArticle->bindParam(':newsTypeID', $newsTypeID, PDO::PARAM_INT);
            $editArticleResult = $editArticle->execute();
            $conn->commit();
            ?>

            <script>
                window.location.href = "/admin-article";
            </script>

            <?php
        } catch (Exception $err) {
            $errorTransaction = true;
            $conn->rollback();
        }
    }
}

