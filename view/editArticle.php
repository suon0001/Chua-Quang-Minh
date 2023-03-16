<?php
require("rootPath.php");

require $rootPath . "model/ArticleModel.php";
require $rootPath . "controller/ArticleController.php";

include("view/_partials/adminPanel.php");

?>


<div class="container-fluid">
    <h3>Article</h3>
    <hr>
    <div class="row">
        <?php

        while ($row = $articleResult->fetch(PDO::FETCH_ASSOC)) { ?>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="newsID" value="<?php echo $row['newsID']; ?>">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="textAreaExample1" name="title" class="form-control" value="<?php echo $row['title']; ?>" required>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-9">
                    <div class="form-group">
                        <label for="title">Author</label>
                        <input type="text" id="textAreaExample1" name="author" class="form-control" value="<?php echo $row['author']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Description</label>
                        <input type="text" id="textAreaExample1" name="description" class="form-control" rows="4" value="<?php echo $row['description']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Paragraph</label>
                        <textarea class="form-control" name="paragraph" id="content" rows="20"><?php echo $row['paragraph']; ?></textarea>
                        <script>CKEDITOR.replace('content');</script>
                    </div>
                </div>
                <div class="col-xs-5 col-md-3">
                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <?php
                        while ($row = $newsOption->fetch(PDO::FETCH_ASSOC)) { ?>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="newsTypeID" value="<?php echo $row["newsTypeID"]; ?>">
                                    <?php echo $row['typeName'] ?>
                                </label>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" name="banner" id="image" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="editSave" class="btn btn-primary">Save Draft</button>
                            <button type="submit" name="editPublish" class="btn btn-primary">Publish</button>
                        </div>
                    </div>
                </div>
                <?php  } ?>
        </form>
    </div>
</div>
