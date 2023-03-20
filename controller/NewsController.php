<?php

$blogResultStmt =  $conn->query($firstPageBlogsQuery);
$blogResult = $blogResultStmt->fetchAll(PDO::FETCH_ASSOC);

$pageCountStmt = $conn->query($pageCountQuery);
$pageCountResult = $pageCountStmt->fetchAll(PDO::FETCH_ASSOC);
$pageCount = count($pageCountResult);

$newsTypeResultStmt =  $conn->query($NewsModel->newsType);
$newsTypeResult = $newsTypeResultStmt->fetchAll(PDO::FETCH_ASSOC);


if (isset($_GET["action"])) {

    if ($_GET["action"] == "news") {
        $newsTypeID = null;

        if (isset($_GET["newsTypeID"]) && $_GET["newsTypeID"]) {
            $newsTypeID = (int)$_GET["newsTypeID"];
            $insertAllNews .= " WHERE newsTypeID = ?";
            $pageCountQuery .= " WHERE newsTypeID = ?";
        }

        if (isset($_GET["skip"]) && $_GET["skip"]) {
            $skip = (int)$_GET["skip"];
            $insertAllNews .= " LIMIT $skip";
        }
        if (isset($_GET["limit"]) && $_GET["limit"]) {
            $limit = (int)$_GET["limit"];
            if (!isset($_GET["skip"]) || !$_GET["skip"]) {
                $insertAllNews .= " LIMIT $limit";
            } else {
                $insertAllNews .= ", $limit";
            }
        }

        $blogResultStmt = $conn->prepare($insertAllNews);
        $pageCountStmt = $conn->prepare($pageCountQuery);
        if ($newsTypeID) {
            $blogResultStmt->execute([$newsTypeID]);
            $pageCountStmt->execute([$newsTypeID]);
        } else {
            $blogResultStmt->execute();
            $pageCountStmt->execute();
        }

        $blogResult = $blogResultStmt->fetchAll();
        $pageCountResult = $pageCountStmt->fetchAll(PDO::FETCH_ASSOC);
        $pageCount = count($pageCountResult);
    }
}

