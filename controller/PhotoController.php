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



//add photo
if (isset($_POST['submitPhoto'])) {
    $alt = $sanitized['alt'];
    $photo = $_FILES["photo"]["name"];

    if (!empty($alt) && !empty($photo))

        $filename = strtolower($photo);

    if ($_FILES['photo']['name']) {
        move_uploaded_file(
            $_FILES['photo']['tmp_name'],
            "assets/" . $filename
        );
    }
    try {
        $conn->beginTransaction();
        $addPhoto = $conn->prepare($PhotoModel->insertPhoto);
        $addPhoto->bindParam(':alt', $alt, PDO::PARAM_STR);
        $addPhoto->bindParam(':photo', $photo, PDO::PARAM_STR);

        $addPhotoResult = $addPhoto->execute();
        $conn->commit();
        header("Location:admin-photo");


    } catch (Exception $err) {
        echo $err;
        $errorTransaction = true;
        $conn->rollback();
    }

}

//delete photo
if (isset($_REQUEST['del'])) {
    $setPhoto = $_REQUEST['photoID'];
    $handle = $conn->prepare($PhotoModel->deletePhoto);
    $handle->execute(array(":photoID" => $setPhoto));
    header("Location:admin-photo");
}







