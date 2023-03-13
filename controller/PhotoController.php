<?php
$photoResultStmt =  $conn->query($firstPageQuery);
$photoResult = $photoResultStmt->fetchAll(PDO::FETCH_ASSOC);

//Count Pages
$pageCountStmt = $conn->query($pageCountQuery);
$pageCountResult = $pageCountStmt->fetchAll(PDO::FETCH_ASSOC);
$pageCount = count($pageCountResult);

if (isset($_GET["action"])) {

    if ($_GET["action"] == "photos") {
        $photoID = null;

        if (isset($_GET["skip"]) && $_GET["skip"]) {
            $skip = (int)$_GET["skip"];
            $currentPagePhotoQuery .= " LIMIT $skip";
        }
        if (isset($_GET["limit"]) && $_GET["limit"]) {
            $limit = (int)$_GET["limit"];
            if (!isset($_GET["skip"]) || !$_GET["skip"]) {
                $currentPagePhotoQuery .= " LIMIT $limit";
            } else {
                $currentPagePhotoQuery .= ", $limit";
            }
        }

        $galleryResult = $conn->prepare($currentPagePhotoQuery);
        $pageCountStmt = $conn->prepare($pageCountQuery);
        if ($photoID) {
            $galleryResult->execute([$photoID]);
            $pageCountStmt->execute([$photoID]);
        } else {
            $galleryResult->execute();
            $pageCountStmt->execute();
        }


        $photoResult = $galleryResult->fetchAll();
        $pageCountResult = $pageCountStmt->fetchAll(PDO::FETCH_ASSOC);
        $pageCount = count($pageCountResult);
    }
}

