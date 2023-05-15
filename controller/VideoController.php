<?php


if (isset($_POST['submit'])) {

    $alt = $sanitized['alt'];

    if (
        !empty($_POST['alt'])

    ) {

        $video = $_FILES["video"]["name"];
        $filename = strtolower($video);
        if ($_FILES['video']['name']) {
            move_uploaded_file(
                $_FILES['video']['tmp_name'],
                "assets/video/" . $filename
            );
        }

        try {
            $conn->beginTransaction();
            $addProduct = $conn->prepare($VideoModel->addProduct);
            $addProduct->bindParam(':alt', $alt, PDO::PARAM_STR);
            $addProduct->bindParam(':video', $filename, PDO::PARAM_STR);


            $addProductResult = $addProduct->execute();
            $conn->commit();
            ?>

            <script>
                window.location.href = "/admin-video";
            </script>

            <?php

        } catch (Exception $err) {
            echo $err;
            $errorTransaction = true;
            $conn->rollback();
        }
    }
}









