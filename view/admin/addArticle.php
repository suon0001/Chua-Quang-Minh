<?php
require("rootPath.php");

require $rootPath . "model/AdminArticleModel.php";
require $rootPath . "controller/AdminArticleController.php";

include("view/_partials/adminPanel.php");

?>


<div class="container-fluid">
    <h3>Article</h3>
    <hr>
    <div class="row">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title">
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-9">
                    <div class="form-group">
                        <label for="title">Author</label>
                        <input type="text" name="author" class="form-control" id="author" placeholder="Author">
                    </div>
                    <div class="form-group">
                        <label for="title">Description</label>
                        <textarea class="form-control" name="description" id="textAreaExample1" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="title">Paragraph</label>
                        <textarea class="form-control" name="paragraph" id="content" rows="20"></textarea>
                    </div>
                </div>
                <div class="col-xs-5 col-md-3">
                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <?php
                        while ($row = $newsOption->fetch(PDO::FETCH_ASSOC)) { ?>
                            <div class="radio">
                                <label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="newsTypeID" id="inlineRadio1"
                                               value="<?php echo $row["newsTypeID"]; ?>">
                                        <label class="form-check-label"
                                               for="inlineRadio1"><?php echo $row['typeName'] ?></label>
                                    </div>
                                </label>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" name="banner" id="image" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="save" class="btn btn-primary">Save Draft</button>
                            <button type="submit" name="publish" class="btn btn-primary">Publish</button>
                        </div>
                    </div>
                </div>

        </form>
    </div>
</div>

<script>
    CKEDITOR.replace('content');
</script>
