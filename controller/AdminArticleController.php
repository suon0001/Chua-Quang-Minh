<?php

$listOfNews = $conn->query($AdminArticleModel->newsList);
$newsOption = $conn->query($AdminArticleModel->newsType);


//save article
if (isset($_POST['save'])) {

    $title = $sanitized['title'];
    $author = $sanitized['author'];
    $description = $sanitized['description'];
    $paragraph = trim($_POST['paragraph']);
    $banner = $_FILES["banner"]["name"];
    $newsTypeID = $sanitized['newsTypeID'];

    if (
        !empty($_POST['title']) || !empty($_POST['author']) ||
        !empty($_POST['description']) || !empty($_POST['paragraph']) ||
        !empty($_POST['banner']) || !empty($_POST['newsTypeID'])
    ) {


        try {
            $conn->beginTransaction();
            $addArticle = $conn->prepare($AdminArticleModel->saveArticle);
            $addArticle->bindParam(':title', $title, PDO::PARAM_STR);
            $addArticle->bindParam(':author', $author, PDO::PARAM_STR);
            $addArticle->bindParam(':description', $description, PDO::PARAM_STR);
            $addArticle->bindParam(':paragraph', $paragraph, PDO::PARAM_STR);
            $addArticle->bindParam(':banner', $banner, PDO::PARAM_STR);
            $addArticle->bindParam(':newsTypeID', $newsTypeID, PDO::PARAM_INT);

            $filename = $_FILES['files']['name'];

            $target_file = 'assets/gallery/'.$filename;

            $file_extension = pathinfo($target_file, PATHINFO_EXTENSION);
            $file_extension = strtolower($file_extension);

            $valid_extension = array("png","jpeg","jpg");

            if(in_array($file_extension, $valid_extension)){

                if(move_uploaded_file($_FILES['files']['tmp_name'],$target_file)){

                    $addArticle->execute(array($filename,$target_file));

                }
            }

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

//publish article
if (isset($_POST['publish'])) {

    $title = $sanitized['title'];
    $author = $sanitized['author'];
    $description = $sanitized['description'];
    $paragraph = trim($_POST['paragraph']);
    $banner = $_FILES["banner"]["name"];
    $newsTypeID = $sanitized['newsTypeID'];

    if (
        !empty($_POST['title']) || !empty($_POST['author']) ||
        !empty($_POST['description']) || !empty($_POST['paragraph']) ||
        !empty($_POST['banner']) || !empty($_POST['newsTypeID'])
    ) {

        try {
            $conn->beginTransaction();
            $addArticle = $conn->prepare($AdminArticleModel->publishArticle);
            $addArticle->bindParam(':title', $title, PDO::PARAM_STR);
            $addArticle->bindParam(':author', $author, PDO::PARAM_STR);
            $addArticle->bindParam(':description', $description, PDO::PARAM_STR);
            $addArticle->bindParam(':paragraph', $paragraph, PDO::PARAM_STR);
            $addArticle->bindParam(':banner', $banner, PDO::PARAM_STR);
            $addArticle->bindParam(':newsTypeID', $newsTypeID, PDO::PARAM_INT);

            $filename = $_FILES['files']['name'];

            $target_file = 'assets/gallery/'.$filename;

            $file_extension = pathinfo($target_file, PATHINFO_EXTENSION);
            $file_extension = strtolower($file_extension);

            $valid_extension = array("png","jpeg","jpg");

            if(in_array($file_extension, $valid_extension)){

                if(move_uploaded_file($_FILES['files']['tmp_name'],$target_file)){

                    $addArticle->execute(array($filename,$target_file));

                }
            }

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


//delete article
if (isset($_REQUEST['del'])) {
    $setArticle = $_REQUEST['newsID'];
    $handle = $conn->prepare($AdminArticleModel->deleteArticle);
    $handle->execute(array(":newsID" => $setArticle));
      ?>

            <script>
                    window.location.href = "/admin-article";
            </script>
      
            <?php
}