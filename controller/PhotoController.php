<?php
$photoResultStmt =  $conn->query($firstPageQuery);
$photoResult = $photoResultStmt->fetchAll(PDO::FETCH_ASSOC);

//Count Pages
$pageCountStmt = $conn->query($pageCountQuery);
$pageCountResult = $pageCountStmt->fetchAll(PDO::FETCH_ASSOC);
$pageCount = count($pageCountResult);

$adminPhotoResult = $conn->query($PhotoModel->adminPhotos);


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
if(isset($_POST['submit'])){

    $countfiles = count($_FILES['files']['name']);

    $query = "INSERT INTO Photo (alt,photo,month,year) VALUES(?,?,MONTH(CURRENT_TIMESTAMP), YEAR(CURRENT_TIMESTAMP))";

    $statement = $conn->prepare($query);

    for($i=0;$i<$countfiles;$i++){

        $filename = $_FILES['files']['name'][$i];

        $target_file = 'assets/gallery/'.$filename;

        $file_extension = pathinfo($target_file, PATHINFO_EXTENSION);
        $file_extension = strtolower($file_extension);

        $valid_extension = array("png","jpeg","jpg");

        if(in_array($file_extension, $valid_extension)){

            if(move_uploaded_file($_FILES['files']['tmp_name'][$i],$target_file)){

                $statement->execute(array($filename,$target_file));

            }
        }

    }
    ?>

    <script>
        window.location.href = "/admin-photo";
    </script>

    <?php
}

//delete photo
if (isset($_REQUEST['del'])) {
    $setPhoto = $_REQUEST['photoID'];
    $handle = $conn->prepare($PhotoModel->deletePhoto);
    $handle->execute(array(":photoID" => $setPhoto));
      ?>

            <script>
                    window.location.href = "/admin-photo";
            </script>
      
            <?php
}







